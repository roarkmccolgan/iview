<?php namespace App\Http\Controllers;

use App\Assessment;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\GenerateReportTrait;
use App\Http\Requests;
use App\Http\Requests\CreateToolRequest;
use App\Http\Requests\SubmitAssessmentsRequest;
use App\Jobs\SendCrmRequest;
use App\Jobs\SendEloquaRequest;
use App\Language;
use App\Services\PdfMonkeyService;
use App\Tool;
use App\Tracker;
use App\Url;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use JavaScript;
use Lava;
use Log;
use Uuid;

class ToolController extends Controller
{
    use GenerateReportTrait;

    var $numSections = false;
    var $quiz = false;
    var $menu = false;
    var $baseline = false;
    var $userid;
    var $result = false;
    var $report;

    public function __construct(Request $request)
    {
       
        //only reload questions if tool is ntt
    }

    public function loadQuestions()
    {
        $this->quiz=session('questions');
        if (!$this->quiz) {
            return redirect('/');
        }
        $this->numSections=count($this->quiz);
        $temp = [];
        foreach ($this->quiz as $key => $value) {
            $temp[$key]['display']=isset($value['display']) ? $value['display']:true;
            $temp[$key]['numpages']=count($value['pages']);
            $temp[$key]['class']=isset($value['class']) ? $value['class']:'sec1';
            $temp[$key]['complete']=isset($value['complete']) ? $value['complete']:false;
            $temp[$key]['title']=isset($value['title']) ? $value['title']:false;
            $i = 1;
            foreach ($value['pages'] as $pkey => $page) {
                $temp[$key]['pages'][$pkey]['done'] = isset($page['done'])? true : false;
                $temp[$key]['pages'][$pkey]['progress'] = $i.'/'.$temp[$key]['numpages'];
                $i++;
            }
        }
        $this->menu = $temp;
    }




/**
 * List all Tools
 * @return view
 */
    public function index()
    {

        $companies = Company::has('tools')->get();
        return view('tool.index', compact('companies'));
    }

/**
 * Create New Tool
 * @return view
 */
    public function create()
    {
        $companies = Company::all();
        $languages = Language::pluck('name', 'id');
        return view('tool.create', compact(['companies','languages']));
    }

/**
 * Show Tool
 * @return view
 */
    public function show(Tool $tool)
    {
        return view('tool.show', compact(['tool']));
    }
/**
 * Save a new Tool
 * @param  CreateIviewRequest $request
 * @return Response
 */

    public function store(CreateToolRequest $request)
    {
        if (!$request->has('company_id')) {
            $company = Company::create(['name'=>$request->input('new_company'),'logo'=>'','colours'=>$request->input('colours')]);
            $company_id = $company->id;
        } else {
            $company_id = $request->input('company_id');
        }

            $tool = Tool::create([
            'title'=>$request->input('title'),
            'alias'=>str_slug($request->input('title')),
            'sub_title'=>$request->input('sub_title'),
            'gapropertyid'=>$request->input('gapropertyid'),
            'company_id'=>$company_id,
            'start_date'=>Carbon::createFromFormat('d-m-Y', $request->input('start_date')),
            'end_date'=>Carbon::createFromFormat('d-m-Y', $request->input('start_date'))->addMonths($request->input('duration'))->toDateTimeString()
            ]);

        foreach ($request->input('language') as $lang_id) {
            $url = $tool->urls()->create(['domain'=>$request->input('domain'),'subdomain'=>$request->input('subdomain'),'language_id'=>$lang_id]);
        }


        //$input = $request->all();
        return redirect('/admin/tools');
    }

/**
 * Tool Questions
 * @return view
 */
    public function questions(Tool $tool)
    {
        $tool->load(['sections.questions']);
        return view('questions.create', compact(['tool']));
    }/**
 * Store Questions
 * @return view
 */
    public function storequestions(Request $request, Tool $tool)
    {
        return $request->all();
        $tool->load(['sections.questions']);
        return view('questions.create', compact(['tool']));
    }

///////
//TOOl STUFF
///////

/**
 * show intro
 * @return view
 */
    public function run(Request $request, $subdomain)
    {
        $tool = $request->session()->get('productObject');
        if($tool->template=='nttsdwan'){
            return view('tool.'.session('template').'.expired', ['tool'=>$tool]);
        }
        $fields = Config::has('baseline_'.$tool->id.'.overall.default_fields') ? config('baseline_'.$tool->id.'.overall.default_fields') : config('terminal.default_fields');
        $extraFields = $tool->extra_fields()->get()->toArray();
        $languages = $tool->languages;
        $source = [];
        if (is_array($fields)) {
            foreach ($fields as $fieldKey => $field) {
                $source[$fieldKey] = $request->input($fieldKey);
            }
        }

        if (is_array($extraFields)) {
            foreach ($extraFields as $extraFieldKey => $extraField) {
                $source[$extraField['name']] = $request->input($extraField['name']);
            }
        }
        if ($request->session()->has('queryparam')) {
            foreach ($request->session()->get('queryparam') as $key => $value) {
                $source[$key] = $value;
            }
        }

        session(['source' => $source]);

        $onlyQuestions = collect(session('questions'))->flatmap(function ($section, $secKey) {
            return collect($section['pages'])->flatmap(function ($item, $itemKey) use ($section, $secKey) {
                $lastPage = end($section['pages']);
                $lastQuestion = end($lastPage['questions']);
                $numberOfQuestionsInSection = collect($section)->only('pages')->flatten(1)->map(function ($thing, $thinky) {
                    return collect($thing['questions']);
                })->flatten(1)->map(function ($q, $qkey) {
                    return $q['question'];
                })->count();
                foreach ($item['questions'] as $qKey => $q) {
                    $item['questions'][$qKey]['section'] = $secKey;
                    $item['questions'][$qKey]['section_info'] = [
                    'number' => (int) substr($itemKey, 4),
                    'total' => $numberOfQuestionsInSection,
                    'is_last' => (int) substr($itemKey, 4) == $numberOfQuestionsInSection ? true : false,
                    'is_first' => (int) substr($itemKey, 4) == 1 ? true : false,
                    'left' => $numberOfQuestionsInSection - (int) substr($itemKey, 4),
                    ];
                    $item['questions'][$qKey]['ignore'] = isset($section['ignore']) ? $section['ignore']: '';
                    $item['questions'][$qKey]['description'] = isset($section['description']) ? $section['description'] : '';
                    $item['questions'][$qKey]['background'] = isset($section['background']) ? $section['background'] : '';
                    $item['questions'][$qKey]['nuggets'] = isset($section['nuggets']) ? $section['nuggets'] : '';
                    $item['questions'][$qKey]['intermission'] = isset($section['intermission']) ? $section['intermission'] : '';
                    $item['questions'][$qKey]['sectionintro'] = isset($section['sectionintro']) ? $section['sectionintro'] : '';
                    $item['questions'][$qKey]['sectionintrobutton'] = isset($section['sectionintrobutton']) ? $section['sectionintrobutton'] : '';
                    $item['questions'][$qKey]['complete'] = isset($section['complete']) ? $section['complete'] : '';
                    $item['questions'][$qKey]['title'] = isset($section['title']) ? $section['title'] : '';
                    $item['questions'][$qKey]['class'] = isset($section['class']) ? $section['class'] : '';
                    $item['questions'][$qKey]['shuffle'] = isset($section['shuffle']) ? $section['shuffle'] : false;
                    $item['questions'][$qKey]['page'] = substr($itemKey, 4);
                    $item['questions'][$qKey]['qKey'] = $qKey;
                }
                return $item['questions'];
            });
        });
        $totalQuestions = count($onlyQuestions);
        $return_visitor = $request->cookie('quiz_progress');
        $class = 'intro';
        if ($tool->template=='nttsdwan' || $tool->template=='trendmicromssp' || $tool->template=='nttdata' || $tool->template=='dassault' || $tool->template=='hitachi' || $tool->template=='vmware' || $tool->template=='sapagile' || $tool->template=='ibmcloud' || $tool->template=='sapagileglobal' || $tool->template=='snow' || $tool->template=='redhat') {
            $view = 'tool.'.session('template').'.assessment';
        } else {
            $view = 'tool.'.session('template').'.intro';
        }

            JavaScript::put([
            'tool' => $tool,
            'languages' => $languages,
            'fields' => $fields,
            'extraFields' => $extraFields,
            'questions' => $onlyQuestions,
            'locale' => session('locale'),
            'utm' => session('utm'),
            'localeUrl' => session('localeUrl'),
            'result' => $request->session()->has('result') ? session('result') : null,
            'stage' => $request->session()->has('result') ? trans(session('product.alias').'.'.session('result.overall.rating')) : null,
            ]);

        return view($view, compact('tool', 'return_visitor', 'class'));
    }

    public function getPage($subdomain, $section = false, $page = false)
    {

        if ($section===false || $page===false) {
            return redirect('/');
        }
        $this->loadQuestions();
        //dd($this->quiz);
        if (!isset($this->quiz[$section]['pages']['page'.$page])) {
            return redirect('/');
        }

        $data = $this->quiz[$section];
        $sectionQuestions = $data['pages']['page'.$page];

        $script = false;
        foreach ($sectionQuestions['questions'] as $number => $question) {
            if (isset($question['script'])) {
                $script[]=$question['script'];
            }
        }
        $currentLocal = App::getLocale();
        $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
        $btnsize = '-small';
        if ($localQuestions=='es') {
            $btnsize = '-small lang';
        }
    
        $vars = [
        'questions' => $sectionQuestions['questions'],
        'heading' => $sectionQuestions['title'],
        'report' => isset($sectionQuestions['report']) ? $sectionQuestions['report']:false,
        'menu' => $this->menu,
        'class' => $data['class'],
        'icon' => isset($data['icon']) ? $data['icon']:false,
        'section'=>$section,
        'page'=>$page,
        'script'=>$script,
        'btnsize'=>$btnsize
        ];
        //return $sectionQuestions['questions'];
        return view('tool.'.session('template').'.question', $vars);
    }


    public function savePage(Request $request, $subdomain, $section = false, $page = false)
    {
        if ($section===false || $page===false) {
            return redirect('/');
        }
        $input = $request->except('_token');

        session(['questions.'.$section.'.pages.page'.$page.'.questions.'.$input['question'].'.selected' => $input['answer']]);
        session(['questions.'.$section.'.pages.page'.$page.'.done' => true]);
        //dd(session('questions'));
    
        if ($request->session()->has('questions.'.$section.'.pages.page'.($page+1))) {
            //$this->getPage($section,$page+1);
            //return Redirect::to('quiz/'.$section.'/page'.($page+1))->withCookie($cookie);
            return redirect('/'.session('localeUrl').'quiz/'.$section.'/page'.($page+1));
        } else {
            session(['questions.'.$section.'.complete' => true]);
            $questions = session('questions');
            while (key($questions) !== $section  && key($questions) !== null) {
                next($questions);
            }
            next($questions);

            //check if there is a mini report
            if (null !== session('questions.'.$section.'.sub-report') && session('questions.'.$section.'.sub-report')!==false) {
                $color = '#939598';
                if (Config::has('baseline_'.session('product.id').'.'.$section.'.report-settings.basecolor')) {
                    $color = config('baseline_'.session('product.id').'.'.$section.'.report-settings.basecolor');
                }
                $graph = false;
                if (config('baseline_'.session('product.id').'.'.$section.'.complete.graph')) {
                    $graph = config('baseline_'.session('product.id').'.'.$section.'.complete.graph');
                    $chartSettings = [
                    'title' => null,//trans(session('product.alias').'.completecopy.graphtitle')
                    'backgroundColor' => [
                        'fill'=>'transparent'
                    ],
                    'vAxis' => [
                        'baselineColor'=>'none',
                        'gridlines'=> [
                            'color'=> 'none'
                        ],
                        'format' => '#\'%\'',
                        'ticks'=> [0, 10, 20, 30, 40, 50]
                    ],
                    'hAxis' => [
                        'textStyle' => [
                            'fontName' => 'arial',
                            'fontSize' => 11,
                            /*'bold' => true,*/
                            /*'italic' => true,*/
                            // The color of the text.
                            'color' => '#939598',
                            // The color of the text outline.
                            /*'auraColor' => '#d799ae',*/
                            // The transparency of the text.
                            /*'opacity' => 0.8*/
                        ]
                    ],
                    'colors' => [$color],
                    'chartArea' => ['width'=>'90%', 'height'=>'80%'],
                    'legend' => [ 'position' => "none" ],
                    /*'events' => [
						'ready' => 'chartReady'
					],*/
                    'annotations'=>[
                        'stem'=>[
                            'color'=>'transparent'
                        ],
                        'textStyle'=>[
                            /*'fontName'=> 'Times-Roman',
							*/'fontSize'=> 14,
                            /*'bold'=> true,
							'italic'=> true,*/
                            // The color of the text.
                            'color'=> '#000000',
                            // The color of the text outline.
                            // 'auraColor'=> '#d799ae',
                            // The transparency of the text.
                            /*'opacity'=> 0.8*/
                        ]
                    ],
                    /*'isStacked' => true,*/
                    //As a percent, "33%"
                    ];

                    $sectionGraph = Lava::DataTable();
                    $format = false;
                    if ($graph['format']) {
                        $func = $graph['format']['type'];
                        $format = Lava::$func($graph['format']['format']);
                    }
                    $sectionGraph->addColumns([
                    ['string', $graph['label']],
                    ['number', 'Value',$format ? $format: null],
                    ]);
                    $sectionGraph->addRoleColumn('string', 'style');
                    $sectionGraph->addRoleColumn('string', 'annotation');

                    foreach (config('baseline_'.session('product.id').'.'.$section.'.types') as $stage => $params) {
                            $val = $params[$graph['data']];
                            $sectionGraph->addRow([
                                trans(session('product.alias').'.'.$stage),
                                $val,
                                session('result.'.$section.'.rating')==$stage? config('baseline_'.session('product.id').'.overall.report-settings.color'):null,
                                $val."%"
                            ]);
                    }

                    $sectionChart = Lava::ColumnChart('section_graph', $sectionGraph, $chartSettings);
                }
                $this->loadQuestions();
                $data = $this->quiz[$section];
                $this->getCalcResults($section);
                $menu = $this->menu;
                $page = $page;
                $title = session('questions.'.$section.'.pages.page1.title');
                $rating = trans(session('product.alias').'.'.$this->result[$section]['rating']);
                $heading = trans('general.'.session('product.id').'subreporttitle', [
                'percent'=>array_key_exists('benchmark', $this->baseline[$section]['types'][$this->result[$section]['rating']]) ? $this->baseline[$section]['types'][$this->result[$section]['rating']]['benchmark'] : 0,
                'result'=>trans(session('product.alias').'.'.$this->result[$section]['rating']),
                'section'=> $title
                ]);
                $graph = $graph;
                $icon = isset($data['icon']) ? $data['icon']:false;
                $ratingClass = 'icon '.$section;
                $ratingcopy = trans($this->baseline[$section]['types'][$this->result[$section]['rating']]['copy']);
                $next = (key($questions)==null) ? '/'.session('localeUrl').'quiz/complete': '/'.session('localeUrl').'quiz/'.key($questions).'/page1'; //fix this so a report can be provided at any stage?
                return view('tool.'.session('template').'.sectionresult', compact(['menu','page','title','section','rating','heading','graph','icon','ratingClass','ratingcopy','next']));
            }
            //dd(session('questions'));
            //else do carry on or complete
            if (key($questions)==null) {
                return redirect('/'.session('localeUrl').'quiz/complete');
            }

            return redirect('/'.session('localeUrl').'quiz/'.key($questions).'/page1');
        }
    }

    public function getComplete(Request $request)
    {
        $this->loadQuestions();
        $this->calcResults();
        //dd(session('result'));
        $currentLocal = App::getLocale();
        $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
        $btnclass = '';
        if ($localQuestions=='es' || $localQuestions=='fr' || $localQuestions=='de' || $localQuestions=='it') {
            $btnclass = 'lang';
        }
        $graph = false;
        if (config('baseline_'.session('product.id').'.overall.complete.graph')) {
            $graph = config('baseline_'.session('product.id').'.overall.complete.graph');
            $color = '#939598';
            if (Config::has('baseline_'.session('product.id').'.overall.report-settings.basecolor')) {
                $color = config('baseline_'.session('product.id').'.overall.report-settings.basecolor');
            }
            $chartSettings = [
            'title' => null,//trans(session('product.alias').'.completecopy.graphtitle')
            'backgroundColor' => [
                'fill'=>'transparent'
            ],
            'vAxis' => [
                'baselineColor'=>'none',
                'gridlines'=> [
                    'color'=> 'none'
                ],
                'format' => '#\'%\'',
                'ticks'=> [0, 10, 20, 30, 40, 50]
            ],
            'hAxis' => [
                'textStyle' => [
                    'fontName' => 'arial',
                    'fontSize' => 11,
                    /*'bold' => true,*/
                    /*'italic' => true,*/
                    // The color of the text.
                    'color' => '#939598',
                    // The color of the text outline.
                    /*'auraColor' => '#d799ae',*/
                    // The transparency of the text.
                    /*'opacity' => 0.8*/
                ]
            ],
            'colors' => [$color],
            'chartArea' => ['width'=>'90%', 'height'=>'80%'],
            'legend' => [ 'position' => "none" ],
            /*'events' => [
				'ready' => 'chartReady'
			],*/
            'annotations'=>[
                'stem'=>[
                    'color'=>'transparent'
                ],
                'textStyle'=>[
                    /*'fontName'=> 'Times-Roman',
					*/'fontSize'=> 14,
                    /*'bold'=> true,
					'italic'=> true,*/
                    // The color of the text.
                    'color'=> '#000000',
                    // The color of the text outline.
                    // 'auraColor'=> '#d799ae',
                    // The transparency of the text.
                    /*'opacity'=> 0.8*/
                ]
            ],
            /*'isStacked' => true,*/
            //As a percent, "33%"
            ];

            $completeGraph = Lava::DataTable();
            $format = false;
            if ($graph['format']) {
                $func = $graph['format']['type'];
                $format = Lava::$func($graph['format']['format']);
            }
            $completeGraph->addColumns([
            ['string', $graph['label']],
            ['number', 'Value',$format ? $format: null],
            ]);
            $completeGraph->addRoleColumn('string', 'style');
            $completeGraph->addRoleColumn('string', 'annotation');

            foreach (config('baseline_'.session('product.id').'.overall.types') as $stage => $params) {
                    $val = $params[$graph['data']];
                    $stagename = trans(session('product.alias').'.'.$stage);
                if (session('product.id')==7) { //symantec
                    $stagename = explode(": ", $stagename);
                    $stagename = $stagename[0];
                }
                    $completeGraph->addRow([
                        $stagename,/*substr_replace($stagename, ':', strpos($stagename, ':'), 1)*/
                        $val,
                        session('result.overall.rating')==$stage? config('baseline_'.session('product.id').'.overall.report-settings.color'):null,
                        $val."%"
                    ]);
            }

            $completeChart = Lava::ColumnChart('overall_graph', $completeGraph, $chartSettings);
        }

        $extraFields = Tool::find(session('product.id'))->extra_fields()->get()->toArray();
        //return $extraFields;
        $vars = [
            'heading' => trans(session('product.alias').'.overall.title'),
            'result' => trans(session('product.alias').'.'.$this->result['overall']['rating']),
            'resultkey' => $this->result['overall']['rating'],
            'graph' => $graph,
            'baseline' => session('baseline'),
            'fullresult' => session('result'),
            'sub1' => trans($this->baseline['overall']['types'][$this->result['overall']['rating']]['copy']),
            'class' => 'sec1',
            'quiz' => $this->quiz,
            'source' => session('source'),
            'btnclass'=>$btnclass,
            'extra_fields'=>count($extraFields) > 0 ? $extraFields:false,
        ];

        return view('tool.'.session('template').'.complete', $vars);
    }

    public function postComplete(SubmitAssessmentsRequest $request)
    {

        $this->loadQuestions();
        $this->howfit=Session::get('result');
        $this->baseline = Session::get('baseline');

        Session::put('user', $request->except('_token'));

        //update source
        $currentLocal = App::getLocale();
        $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
        $source = [];
        if (is_array(session('source'))) {
            foreach (session('source') as $sKey => $sValue) {
                $source[$sKey] = $request->input($sKey);
            }
        }

        Session::put('source', $source);

        //save in db
        $assessment = new Assessment;
        $assessment->tool_id = session('product.id');
        $assessment->fname = $request->input('fname');
        $assessment->lname = $request->input('sname');
        $assessment->email = $request->input('email');
        $assessment->company = $request->input('company');
        $assessment->title = $request->input('title');

        $assessment->country = $request->input('country');
        $assessment->tel = $request->input('phone');
        $assessment->referer = session('referer');
        $assessment->quiz = $this->quiz;
        $assessment->result = $this->howfit;
        $assessment->extra = $request->input('extra');
        $assessment->score = session('result.overall.score');
        $assessment->rating = trans(session('product.alias').'.'.session('result.overall.rating'));
        $assessment->uuid = Uuid::generate()->string;
        $assessment->lang = session('locale') == '' ? 'en' : session('locale');
        $assessment->save();
        $tracker = false;

        if($assessment->tool_id == 18 || $assessment->tool_id == 19){ //snow // redhat
            $pdfMonkey = new PdfMonkeyService();
            $body = $pdfMonkey->generateBody($assessment);
            //dd($body);
            $response = $pdfMonkey->generateDocument($body, $this->baseline['overall']['pdf_monkey_template']);
            if($response && $response->document->status == 'draft'){
                $assessment->pdf_key = $response->document->id;
                $assessment->save();
            }else{
                dd();
            }
        }

        //check UTM
        if ($request->session()->has('utm')) {
            $tracker = Tracker::where('tool_id', session('product.id'))
            ->where('code', session('utm'))->first();
            if ($tracker) {
                $tracker->increment('completions');
                $assessment->code = session('utm');
                $assessment->save();
                $trackerHit = $tracker->trackerHits()->create([
                'type' => 'completion',
                ]);
            }
        }

        //generate report
        //$filename = str_slug($assessment->fname.'_'.$assessment->lname.'_'.session('product.title').'_Assessment', '-');
        //$this->wkhtml($assessment->id,$filename);

        $eloqua = config('baseline_'.session('product.id').'.overall.eloqua', false);
        if ($eloqua) { //!App::isLocal() &&
            $this->prepareEloquaRequest($eloqua, $request);
        }
        $mrs = config('baseline_'.session('product.id').'.overall.mrs', false);
        if ($mrs) { //!App::isLocal() &&
            $this->prepareMrsRequest($mrs, $request, $assessment->uuid);
        }
        $crm = config('baseline_'.session('product.id').'.overall.crmrequest', false);
        if ($crm) { //!App::isLocal() &&
            if(isset($crm['only'])){
                if($assessment[$crm['only']['field']] == $crm['only']['value']){
                    $this->prepareCrmRequest($crm, $request, $assessment->uuid);
                }
            } else {
                $this->prepareCrmRequest($crm, $request, $assessment->uuid);                
            }
        }
        $subject = trans(session('product.alias').'.email.subject');
        $assessment->uuid = (string)$assessment->uuid;
        $inline = false;
        if (Config::has('baseline_'.session('product.id').'.overall.notifications.inline_report')) {
            $inline = config('baseline_'.session('product.id').'.overall.notifications.inline_report');
        }
        $viewData = [
            'assessment'=>$assessment,
            'inline'=>$inline,
        ];
        $data['html'] =  View::make('emails.download', $viewData)->render();

        //send mail to user (and BCC if exists)
        $bcc = [];
        if (Config::has('baseline_'.session('product.id').'.overall.notifications.bccreports')) {
            foreach (config('baseline_'.session('product.id').'.overall.notifications.bccreports') as $address) {
                $bcc[] = $address;
            }
        }
        //dd($data);
        Mail::queue('emails.echo', $data, function ($message) use ($assessment, $subject, $bcc) {
            $message->from('notifications@mg.idcready.net', 'IDC Notifications');
            $message->to($assessment['email'], $assessment['fname'].' '.$assessment['lname']);
            if (!empty($bcc)) {
                $message->bcc($bcc);
            }
            $message->subject($subject);
        });

        //send mail to notification people
        $emails = [];
        if (App::isLocal() || $assessment['email']=='rmccolgan@idc.com') {
            $emails = ['roarkmccolgan@gmail.com'];
        } else {
            if ($assessment->tool_id != 5 && $assessment->tool_id != 15) { //spunk sapagile
                foreach ($assessment->tool->users as $user) {
                    $emails[] = $user->email;
                }
            } else {
                $emails[] = 'roarkmccolgan@gmail.com';
            }
        }
        $remove = [];
        if (Config::has('baseline_'.session('product.id').'.overall.notifications.ignoreadmin')) {
            foreach (config('baseline_'.session('product.id').'.overall.notifications.ignoreadmin') as $address) {
                $remove[] = $address;
            }
        }
        $emails = array_diff($emails, $remove);
        $subject = $assessment->tool->company->name.' - '.$assessment->tool->title.' Assessment completed';
        $ratingWording = $this->howfit['overall']['rating'];
        if (Lang::has(session('product.alias').'.'.$this->howfit['overall']['rating'])) {
            $ratingWording = $ratingWording." - ".trans(session('product.alias').'.'.$this->howfit['overall']['rating']);
        }
        Mail::queue(
                'emails.notification',
                [
                'companyName' => $assessment->tool->company->name,
                'toolTitle' => $assessment->tool->title,
                'fname'=>$request->input('fname'),
                'sname'=>$request->input('sname'),
                'email'=>$request->input('email'),
                'company'=>$request->input('company'),
                'phone'=>$request->input('phone'),
                'score'=>$this->howfit['overall']['score'],
                'rating'=> $ratingWording
                ],
                function ($message) use ($emails, $subject) {
                    $message->from('notifications@mg.idcready.net', 'IDC Notifications');
                    $message->to($emails)->subject($subject);
                }
            );
        $url = '';
        if(session('product.id') == 16){
            switch($request->input('country')){
                case 'DK':
                case 'NO':
                    $url = 'https://www.ibm.com/se-en/cloud/yourcloud?utm_medium=Email&utm_source=External&utm_content=000039UZ&utm_term=10013943&utm_id=LP-IDC-Survey-email&cm_mmc=Email_External-_-Unlock+Cloud+and+AI_Technology+Transformation-_-INO_INO-_-LP-IDC-Survey-email&cm_mmca1=000039UZ&cm_mmca2=10013943';
                    break;
                case 'SE':
                case 'FI':
                    $url = 'https://www.ibm.com/se-en/cloud/yourcloud?utm_medium=Email&utm_source=External&utm_content=000039UZ&utm_term=10013943&utm_id=LP-IDC-Survey-email&cm_mmc=Email_External-_-Unlock+Cloud+and+AI_Technology+Transformation-_-INO_INO-_-LP-IDC-Survey-email&cm_mmca1=000039UZ&cm_mmca2=10013943';
                    break;
                default:
                    $url = 'https://www.ibm.com/se-en/cloud/yourcloud?utm_medium=Email&utm_source=External&utm_content=000039UZ&utm_term=10013943&utm_id=LP-IDC-Survey-email&cm_mmc=Email_External-_-Unlock+Cloud+and+AI_Technology+Transformation-_-INO_INO-_-LP-IDC-Survey-email&cm_mmca1=000039UZ&cm_mmca2=10013943';
            }
        }
        if(session('product.id') == 19){
            $url = "https://www.redhat.com/en/services/consulting/hybrid-cloud";
        }
        $vars = [
        'pagetitle' => trans(session('product.alias').'.title'),
        'title' => trans(session('product.alias').'.title'),
        'sub_title' => trans(session('product.alias').'.sub-title'),
        'heading' => trans(session('product.alias').'.complete_thankyou', ['fname'=>$request->input('fname')]),
        'body' => trans(session('product.alias').'.complete_body', ['url'=>$url, 'tool_url'=>session('url').'/'.session('localeUrl')]),
        'tweet' => config('baseline_'.session('product.id').'.overall.tweet') ? trans(session('product.alias').'.complete_tweet', ['result'=>trans(session('product.alias').'.'.$this->howfit['overall']['rating'])]):false,
        'class' => 'trans silverStone',
        'script' => ['
		ga(\'send\', \'event\', \'Assessments\', \''.session('utm').'\');
		'],
        'utm' => session('utm'),
        'quiz' => $this->quiz
        ];

        JavaScript::put([
            'locale' => session('locale'),
            'tool' => $request->session()->get('productObject'),
        ]);
        Session::remove('questions');
        Session::remove('quiz_complete');
        return View::make('tool.'.session('template').'.thankyou', $vars);
    }

    public function sendApology(Request $request, $subdomain, $uuid)
    {
        $inline = false;
        $assessment = Assessment::where('uuid', $uuid)->firstOrFail();
        App::setLocale($assessment->lang);
        $subject = trans(session('product.alias').'.email_apology.subject');
        $assessment->uuid = (string)$assessment->uuid;
        
        $newLocale = $assessment->lang=='en' || $assessment->lang=='' ? '' : $assessment->lang;
        session(['locale'=>$newLocale]);
        $viewData = [
            'assessment'=>$assessment,
            'inline'=>$inline,
        ];
        $data['html'] =  View::make('emails.apology', $viewData)->render();

        //send mail to user (and BCC if exists)
        $bcc = ['kgaffney@idc.com','abuss@idc.com','nadamson@idc.com'];
        Mail::queue('emails.echo', $data, function ($message) use ($assessment, $subject, $bcc) {
            $message->from('notifications@mg.idcready.net', 'IDC Notifications');
            $message->to($assessment['email'], $assessment['fname'].' '.$assessment['lname']);
            if (!empty($bcc)) {
                $message->bcc($bcc);
            }
            $message->subject($subject);
        });
        return 'Success, apology sent to '.$assessment['email'];
    }

    public function getDownload(Request $request, $subdomain, $uuid)
    {
        $inline = $request->has('browser') && $request->input('browser')!=false ? true : false;
        $update = $request->has('update') && $request->input('update')==false ? false : true;

        $assessment = Assessment::with('tool')->where('uuid', $uuid)->firstOrFail();
        $request->session()->put('questions', $assessment->quiz);
        $request->session()->put('result', $assessment->result);
        $request->session()->put('user', collect($assessment->toArray())->only(['fname','lname','email','company','country','referer','tel','downloaded','extra','fetched','title','uuid','lang']));
        $reportName = str_slug($assessment->fname.'_'.$assessment->lname.'_'.session('product.title').'_Assessment', '-');
        $filename = $assessment->id.'_'.str_slug($assessment->fname.'_'.$assessment->lname.'_'.$assessment->tool->title.'_Assessment', '-').'.pdf';

        if ($update) {
            $assessment->update(['fetched' => 1]);
        }
        
        if ($assessment->tool_id==session('product.id')) {
            if($assessment->tool_id == 18 || $assessment->tool_id == 19){ //snow //redhat
                $pdfMonkey = new PdfMonkeyService();
                $body = $pdfMonkey->queueDocument($assessment->pdf_key, $filename);
                if($body){
                    JavaScript::put([
                        'locale' => session('locale'),
                        'tool' => $assessment->tool
                    ]);

                    return view('tool.'.session('template').'.downloadreport', [
                        'pagetitle' => trans($assessment->tool->alias.'.title'),
                        'utm' => $assessment->code ? $assessment->code : 'default',
                        'uuid' => $uuid,
                    ]);                    
                }
            }else{
                if (!$inline) {
                    $downloadName = str_slug($assessment->id.'-'.session('product.title').'-report', '-').'.pdf';
                    $this->wkhtml($assessment->id, $reportName);
                    $headers = [
                        'Content-Type: application/pdf',
                    ];
                    return response()->download(storage_path().'/reports/'.$filename, $downloadName, $headers);
                } else {
                    return $this->wkhtml($assessment->id, $reportName, $inline);
                }                
            }
        } else {
            Log::error("Report does not exist for tool id ".session('product.id')." http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
            abort(404, 'The page you requested does not exist');
        }
    }
    public function checkForDocument(Request $request, $uuid)
    {
        $assessment = Assessment::with('tool')->where('uuid', $uuid)->firstOrFail();
        $pdfMonkey = new PdfMonkeyService();
        $body = $pdfMonkey->checkIfDocumentRenderedAndGetUrl($assessment->pdf_key);//$assessment->pdf_key
        return response()->json([
            'result' => 'success',
            'body' => $body->document
        ]);
    }
    public function getReport(Request $request, $subdomain, $uuid)
    {
        $assessment = Assessment::where('uuid', $uuid)->firstOrFail();
        $assessment->update(['fetched' => 1]);
        
        if ($assessment->tool_id==session('product.id')) {
            $request->session()->put('questions', $assessment->quiz);
            $request->session()->put('result', $assessment->result);

            $reportName = str_slug($assessment->fname.'_'.$assessment->lname.'_'.session('product.title').'_Assessment', '-');
            $view = $this->wkhtml($assessment->id, $reportName, 'html');
            return $view;
        } else {
            Log::error("Report does not exist for tool id ".session('product.id')." http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
            abort(404, 'The page you requested does not exist');
        }
    }

    public function fakeDownload($tool)
    {

        if ($tool=='fireeye') {
            $file= storage_path().'/reports/FireEye_Assessment_Report.pdf';
            $filename = "FireEye_Assessment_Report.pdf";
        } else {
            $file= storage_path().'/reports/SAGE_Assessment_Report.pdf';
            $filename = "SAGE_Assessment_Report.pdf";
        }

        $headers = [
            'Content-Type: application/pdf',
        ];
        return response()->download($file, $filename, $headers);
    }
    public function getCalcResults($section = false)
    {
        $this->loadQuestions();
        $this->calcResults($section);
    }

    private function calcResults($section = false)
    {
        $this->baseline = config('baseline'.'_'.session('product.id'));
        $result = [];
        $result['overall']['score'] = 0;

        if ($section!==false) {
            foreach ($this->quiz[$section]['pages'] as $page => $props) {
                if (!isset($this->quiz[$section]['ignore']) || $this->quiz[$section]['ignore']==false) {
                    foreach ($props['questions'] as $q => $details) {
                        if (!isset($details['ignore']) || $details['ignore']==false) { // ignore answer
                            if (!isset($details['selected'])) {
                                dd($details);
                            }
                            if (($details['type']=='checkbox' || $details['type']=='groupradio' || $details['type']=='slider') && is_array($details['selected'])) {
                                if (isset($details['calc']) && isset($details['calc']['type'])) {
                                    if ($details['calc']['type']=='average') {
                                        $ave = [];
                                        foreach ($details['selected'] as $selected) {
                                            $selected = explode('|', $selected);
                                            $selected = $selected[1];
                                            $ave[]=$selected;
                                        }
                                        $val = array_sum($ave) / count($ave);
                                    } elseif ($details['calc']['type']=='normalize') {
                                        $norm = 0;
                                        foreach ($details['selected'] as $selected) {
                                            $selected = explode('|', $selected);
                                            $selected = $selected[1];
                                            $norm+=$selected;
                                        }
                                        $val = ($norm/$details['calc']['value'])*count($details['selected']);
                                    } else{
                                        $val = 0;
                                        foreach ($details['selected'] as $selected) {
                                            $selected = explode('|', $selected);
                                            $selected = $selected[1];
                                            $val+=$selected;
                                        }
                                    }
                                } else {
                                    $valHold = 0;
                                    foreach ($details['selected'] as $selected) {
                                        $selected = explode('|', $selected);
                                        $selected = $selected[1];
                                        $valHold+=$selected;
                                    }
                                    $val = $valHold;
                                }
                            } else {
                                $val = explode('|', $details['selected']);
                                $val = $val[1];
                            }
                            //check for crazy normalize
                            if (isset($details['calc']) && isset($details['calc']['min']) && isset($details['calc']['max']) && isset($details['calc']['outputmax'])) {
                                $getMin = $val-$details['calc']['min'] == 0 ? 1 : $val-$details['calc']['min'];
                                $val = ($getMin)*$details['calc']['outputmax']/($details['calc']['max']-$details['calc']['min']);
                            }
                            //round to 1 decimal place
                            $val = round($val, 1, PHP_ROUND_HALF_UP);

                            if (isset($result[$section]['score'])) {
                                $result[$section]['score'] += $val;
                            } else {
                                $result[$section]['score'] = $val;
                            }
                        }
                    }
                    foreach ($this->baseline[$section]['types'] as $rating => $limits) {
                        if ($result[$section]['score']>=$limits['low'] && $result[$section]['score']<=$limits['high']) {
                            $result[$section]['rating'] = $rating;
                            $result['overall']['score'] += $result[$section]['score'];
                        }
                    }
                }
            }
            foreach ($this->baseline['overall']['types'] as $rating => $limits) {
                if ($result['overall']['score']>=$limits['low'] && $result['overall']['score']<=$limits['high']) {
                    $result['overall']['rating'] = $rating;
                }
            }
        } else {
            foreach ($this->quiz as $key => $value) {
                if ($key!=='screeners' && (!isset($value['ignore']) || $value['ignore']==false)) {
                    if (!is_array($value['pages']) && !is_object($value['pages'])) {
                        Log::info('Section '.$key.' pages', $value['pages']);
                        Log::info('Quiz', $this->quiz);
                        abort(500, 'An internal error has occured, we have documented it and will correct it prompty. ');
                    }
                    foreach ($value['pages'] as $page => $props) {
                        foreach ($props['questions'] as $q => $details) {
                            if (!isset($details['ignore']) || $details['ignore']==false) { // ignore answer
                                if (($details['type']=='checkbox' || $details['type']=='groupradio' || $details['type']=='slider' || $details['type']=='groupbutton') && is_array($details['selected'])) {
                                    if (isset($details['calc']) && isset($details['calc']['type'])) {
                                        if ($details['calc']['type']=='average') {
                                            $ave = [];
                                            foreach ($details['selected'] as $selected) {
                                                $selected = explode('|', $selected);
                                                $selected = $selected[1];
                                                $ave[]=$selected;
                                            }
                                            $val = array_sum($ave) / count($ave);
                                        } elseif ($details['calc']['type']=='normalize') {
                                            $norm = 0;
                                            foreach ($details['selected'] as $selected) {
                                                $selected = explode('|', $selected);
                                                $selected = $selected[1];
                                                $norm+=$selected;
                                            }
                                            $val = ($norm/$details['calc']['value'])*count($details['selected']);
                                        }
                                    } else {
                                        $valHold = 0;
                                        foreach ($details['selected'] as $selected) {
                                            $selected = explode('|', $selected);
                                            $selected = $selected[1];
                                            $valHold+=$selected;
                                        }
                                        $val = $valHold;
                                    }
                                } else {
                                    if (!isset($details['selected'])) {
                                        dd($value['pages']);
                                    }
                                    $val = explode('|', $details['selected']);
                                    $val = $val[1];
                                }
                                //check for crazy normalize
                                if (isset($details['calc']) && isset($details['calc']['min']) && isset($details['calc']['max']) && isset($details['calc']['outputmax'])) {
                                    $getMin = $val-$details['calc']['min'] == 0 ? 1 : $val-$details['calc']['min'];
                                    $val = ($getMin)*$details['calc']['outputmax']/($details['calc']['max']-$details['calc']['min']);
                                }
                                //round to 1 decimal place
                                $val = round($val, 1, PHP_ROUND_HALF_UP);

                                if (isset($result[$key]['score'])) {
                                    $result[$key]['score'] += $val;
                                } else {
                                    $result[$key]['score'] = $val;
                                }
                            }
                        }
                    }
                    if(isset($this->baseline[$key])){
                        if(isset($this->baseline[$key]['normalise_using_screeners']['calc'])){
                            $result[$key]['score'] = eval('return '.$baseline[$key]['normalise_using_screeners']['calc'].';');
                        }
                        foreach ($this->baseline[$key]['types'] as $rating => $limits) {
                            if ($result[$key]['score']>=$limits['low'] && $result[$key]['score']<=$limits['high']) {
                                $result[$key]['rating'] = $rating;
                                $result['overall']['score'] += $result[$key]['score'];
                            }
                        }                    
                    }
                }
            }
            foreach ($this->baseline['overall']['types'] as $rating => $limits) {
                if ($result['overall']['score']>=$limits['low'] && $result['overall']['score']<=$limits['high']) {
                    $result['overall']['rating'] = $rating;
                }
            }
        }

        session(['result' => $result]);
        session(['baseline' => $this->baseline]);
        $this->result = $result;
    }

    public function scoring()
    {
        $this->loadQuestions();
        $questions = $this->quiz;
        $sections = [];
        foreach ($questions as $key => $question) {
            foreach ($question['pages'] as $pkey => $page) {
                foreach ($page['questions'] as $qkey => $q) {
                    $sections[$key][$qkey] = $q['options'];
                }
            }
        }

        foreach ($sections as $seckey => $questions) {
            foreach ($questions as $qkey => $question) {
                $max = 0;
                $min = 0;
                $optvals = [];
                $optoptvals = [];
                foreach ($question as $key => $option) {
                    if (isset($option['options'])) {
                        foreach ($option['options'] as $optoptkey => $optopt) {
                            $optoptvals[]=$optopt['value'];
                        }
                    } else {
                        $optvals[]=$option['value'];
                    }

                    if (!empty($optvals)) {
                        $min = min($optvals);
                        $max = max($optvals);
                    } else {
                        $min+= min($optoptvals);
                        $max+= max($optoptvals);
                    }
                }
                $sections[$seckey][$qkey]['min'] = $min;
                $sections[$seckey][$qkey]['max'] = $max;
            }
        }

        foreach ($sections as $key => $section) {
            $sectionMax = 0;
            $sectionMin = 0;
            foreach ($section as $seckey => $question) {
                $sectionMax += $question['max'];
                $sectionMin += $question['min'];
            }
            $sections[$key]['max_for_section'] = $sectionMax;
            $sections[$key]['min_for_section'] = $sectionMin;
        }

        $sectionTotals = [];
        foreach ($sections as $key => $section) {
            $sectionTotals[$key]['min'] = $section['min_for_section'];
            $sectionTotals[$key]['max'] = $section['max_for_section'];
        }
        $final['sections'] = $sections;
        $final['totals'] = $sectionTotals;

        return $final;
    }


    public function resendeloqua(Request $request)
    {
        $tool= $request->session()->get('productObject');
        $from = false;
        if ($request->has('from')) {
            $from = Carbon::parse($request->input('from'));
            $to = $request->has('to') ? Carbon::parse($request->input('to')) : Carbon::now()->addYear();
            $tool->load(['assessments' => function ($query) use ($from, $to) {
                $query->whereDate('created_at', '>=', $from)
                ->whereDate('created_at', '<=', $to);
            }]);
        } else {
            $tool->load('assessments');
        }
       
        $url = $eloqua['url'];
        $currentLocal = App::getLocale();
        $eloqua = config('baseline_'.session('product.id').'.overall.eloqua', false);
        foreach ($tool->assessments as $assessment) {
            $this->prepareEloquaRequest($eloqua, $assessment);
        }
        return 'Dispatched eloqua requests to the queue';
    }

    public function generateuuid(Request $request)
    {
        $assessments = Assessment::all();
        $completed = 0;
        foreach ($assessments as $assessment) {
            //if(is_null($assessment->uuid)){
            $assessment->uuid = Uuid::generate()->string;
            $assessment->save();
            $completed++;
            //}
        }
        echo "Updated $completed Assessments";
    }

    public function saveAssessmentSession(Request $request)
    {
        Session::put('answers.'.$request->question, $request->answer);
        foreach (session('questions') as $sec => $questions) {
            foreach ($questions['pages'] as $page => $options) {
                foreach ($options['questions'] as $qKey => $question) {
                    if ($qKey == $request->question) {
                        $request->session()->put('questions.'.$sec.'.pages.'.$page.'.questions.'.$qKey.'.selected', $request->answer);
                        break 3;
                    }
                }
            }
        }
        return response()->json('success');
    }

    public function completeAsessment(Request $request)
    {
        Session::put('quiz_complete', true);
        $this->loadQuestions();
        $this->baseline = config('baseline'.'_'.session('product.id'));
        $result = [];
        $result['overall']['score'] = 0;

        $scores = [];

        foreach ($this->quiz as $key => $value) {
            if ($key!=='screeners' && (!isset($value['ignore']) || $value['ignore']==false)) {
                foreach ($value['pages'] as $page => $props) {
                    foreach ($props['questions'] as $q => $details) {
                        if (!isset($details['ignore']) || $details['ignore']==false) { // ignore answer
                            if (($details['type']=='groupSlider' || $details['type']=='groupbutton' || $details['type']=='checkbox' || $details['type']=='groupradio' || $details['type']=='opposingslider') && is_array($details['selected'])) {
                                $answers = [];
                                if (isset($details['calc']) && isset($details['calc']['type'])) {
                                    if ($details['calc']['type']=='average') {
                                        $ave = [];
                                        foreach ($details['selected'] as $selected) {
                                            $ave[]=$selected['value'];
                                            $answers[]=$selected['label'];
                                        }
                                        $val = array_sum($ave) / count($ave);
                                    } elseif ($details['calc']['type']=='normalize') {
                                        $norm = 0;
                                        foreach ($details['selected'] as $selected) {
                                            $norm+=$selected['value'];
                                            $answers[]=$selected['label'];
                                        }
                                        $val = ($norm/$details['calc']['value'])*count($details['selected']);
                                    }
                                } else {
                                    $valHold = 0;
                                    $valArr = [];
                                    foreach ($details['selected'] as $selected) {
                                        $valArr[]=$selected['value'];
                                        $valHold+=$selected['value'];
                                        $answers[]=$selected['label'];
                                    }
                                    $val = $valHold;
                                }
                            } else {
                                if (!isset($details['selected']) || !isset($details['selected'][0]['value']) || !isset($details['selected'][0]['label'])) {
                                    dd($details['selected']);
                                }
                                $val = $details['selected'][0]['value'];
                                $answers[] = $details['selected'][0]['label'];
                            }
                            // check for crazy normalize
                            if (isset($details['calc']) && isset($details['calc']['min']) && isset($details['calc']['max']) && isset($details['calc']['outputmax'])) {
                                $getMin = $val-$details['calc']['min'] == 0 ? 1 : $val-$details['calc']['min'];
                                $val = ($getMin)*$details['calc']['outputmax']/($details['calc']['max']-$details['calc']['min']);
                            }
                            //round to 1 decimal place
                            $val = round($val, 1, PHP_ROUND_HALF_UP);

                            if (isset($result[$key]['score'])) {
                                $result[$key]['score'] += $val;
                            } else {
                                $result[$key]['score'] = $val;
                            }
                            $scores[$q] = [
                                'section' => $props['title'],
                                'type' => $details['type'],
                                'calc' => isset($details['calc']) && isset($details['calc']['type']) ? $details['calc']['type'] : 'sum',
                                'calcthing' => isset($details['calc']) && isset($details['calc']['min']) && isset($details['calc']['max']) && isset($details['calc']['outputmax']) ? $details['calc']['min']."-".$details['calc']['max']."-".$details['calc']['outputmax'] : isset($details['calc']) ." - ". isset($details['calc']['min']) ." - ". isset($details['calc']['max']) ." - ". isset($details['calc']['outputmax']),
                                'answers' => isset($answers) ? $answers : null,
                                'ave' => isset($ave) ? $ave : null,
                                'norm' => isset($norm) ? $norm : null,
                                'sum' => isset($valArr) ? $valArr : null,
                                'val' => $val
                            ];
                            unset($answers);
                            unset($ave);
                            unset($norm);
                            unset($valArr);
                            $val = 0;
                        }
                    }
                }
                if(isset($this->baseline[$key])){
                    if(isset($this->baseline[$key]['normalise_using_screeners']['calc'])){
                        $result[$key]['score'] = eval('return '.$this->baseline[$key]['normalise_using_screeners']['calc'].';');
                    }
                    foreach ($this->baseline[$key]['types'] as $rating => $limits) {
                        if ($result[$key]['score']>=$limits['low'] && $result[$key]['score']<=$limits['high']) {
                            $result[$key]['rating'] = $rating;
                            $result['overall']['score'] += $result[$key]['score'];
                        }
                    }                    
                }
            }
        }
        foreach ($this->baseline['overall']['types'] as $rating => $limits) {
            if ($result['overall']['score']>=$limits['low'] && $result['overall']['score']<=$limits['high']) {
                $result['overall']['rating'] = $rating;
            }
        }

        session(['result' => $result]);
        session(['baseline' => $this->baseline]);
        $this->result = $result;

        $data = [
            'query'=>'success',
            'result'=>$result,
            'scores'=>$scores,
        ];

        return response()->json($data);
    }
    private function prepareCrmRequest($fieldMapping, $request, $reportUuid){
        //send guzzle request
        //dd($request->all());
        $url = $fieldMapping['url'];
        $auth = isset($fieldMapping['auth']) ? [$fieldMapping['auth']['username'],$fieldMapping['auth']['password']] : '[]';
        $body = isset($fieldMapping['body']) ? $fieldMapping['body'] : 'body';
        $headers = isset($fieldMapping['headers']) ? $fieldMapping['headers'] : '[]';

        foreach ($fieldMapping['fields'] as $fieldKey => $settings) {
            switch ($settings['type']) {
                case 'locale':
                    $query[$fieldKey] = $currentLocal;
                    break;
                case 'hidden':
                    $query[$fieldKey] = $settings['value'];
                    break;
                case 'date':
                    $query[$fieldKey] = date('Y-m-d');
                    break;
                case 'all_questions_and_answers':
                    $text = '';
                    foreach ($this->quiz as $key => $value) {
                        foreach ($value['pages'] as $page => $props) {
                            foreach ($props['questions'] as $q => $details) {
                                $text.= $q." - ".$details['question']."\n";
                                if (!isset($details['ignore']) || $details['ignore']==false) { // ignore answer
                                    if (($details['type']=='groupSlider' || $details['type']=='groupbutton' || $details['type']=='checkbox' || $details['type']=='groupradio' || $details['type']=='slider') && is_array($details['selected'])) {
                                        foreach ($details['selected'] as $select) {
                                            foreach($details['options'] as $option){
                                                if(isset($option['name']) && $select['name'] == $option['name']){
                                                    $text.= $select['name']." - ".$option['label'].":\n";
                                                }
                                            }
                                            $text.= $select['label']."\n";
                                        }
                                    } else {
                                        $text.= $details['selected'][0]['label']."\n";
                                    }
                                }
                            }
                        }                        
                    }
                    $query[$fieldKey] = $text;
                    break;
                case 'result':
                    $result = $this->howfit['overall']['rating'];
                    $config = '';
                    if($settings['config']){
                        $config = config($settings['config'].'.'.$result);
                    }
                    $query[$fieldKey] = $config;
                    break;
                case 'field':
                    if(isset($settings['transform'])){
                        $query[$fieldKey] = $settings['transform'][$request->input($settings['name'])];
                    }else{
                        $query[$fieldKey] = $request->input($settings['name']);
                    }
                    break;
                case 'report':
                    $query[$fieldKey] = session('url').'/'.session('localeUrl').'/download/'.$reportUuid;
                    break;
                case 'url':
                    $query[$fieldKey] = session('url').'/'.session('localeUrl');
                    break;
                case 'question':
                    $selected = session('questions.'.$settings['questions'][0].'.selected');
                    $val = explode('|', $selected);
                    $val = $val[1];
                    $query[$fieldKey] = $val;
                    break;
                case 'questionlabel':
                    $selected = session('questions.'.$settings['questions'][0].'.selected');
                    $label = explode('|', $selected);
                    $label = $label[0];
                    $query[$fieldKey] = $label;
                    break;
                case 'calculation':
                    $results = [];
                    foreach ($settings['questions'] as $key => $question) {
                        $selected = session('questions.'.$question.'.selected');
                        $val = explode('|', $selected);
                        $val = $val[1];
                        $results[]=$val;
                    }
                    $answer = 0;
                    switch ($settings['formula']) {
                        case 'multiply':
                            $answer = array_product($results);
                            break;
                        case 'add':
                            $answer = array_sum($results);
                            break;
                    }
                    $query[$fieldKey] = $answer;
                    break;
            }
        }
        if ($request->session()->has('queryparam')) {
            foreach (session('queryparam') as $key => $value) {
                $query[$key] = $value;
            }
        }
        //dd($query);
        $this->dispatch(new SendCrmRequest($url, $query, 'POST', $headers, $auth, $body));
    }

    private function prepareEloquaRequest($eloqua, $request){
        //send guzzle request
        $url = $eloqua['url'];

        foreach ($eloqua['fields'] as $fieldKey => $settings) {
            switch ($settings['type']) {
                case 'locale':
                    $query[$fieldKey] = $currentLocal;
                    break;
                case 'date':
                    $query[$fieldKey] = date('Y-m-d');
                    break;
                case 'field':
                    $query[$fieldKey] = $request->input($settings['name']);
                    break;
                case 'hidden':
                    $query[$fieldKey] = $settings['value'];
                    break;
                case 'report':
                    $query[$fieldKey] = session('url').'/'.session('localeUrl').'/download/'.$assessment->uuid;
                    break;
                case 'url':
                    $query[$fieldKey] = session('url').'/'.session('localeUrl');
                    break;
                case 'question':
                    $selected = session('questions.'.$settings['questions'][0].'.selected');
                    $val = explode('|', $selected);
                    $val = $val[1];
                    $query[$fieldKey] = $val;
                    break;
                case 'questionlabel':
                    $selected = session('questions.'.$settings['questions'][0].'.selected');
                    $label = explode('|', $selected);
                    $label = $label[0];
                    $query[$fieldKey] = $label;
                    break;
                case 'calculation':
                    $results = [];
                    foreach ($settings['questions'] as $key => $question) {
                        $selected = session('questions.'.$question.'.selected');
                        $val = explode('|', $selected);
                        $val = $val[1];
                        $results[]=$val;
                    }
                    $answer = 0;
                    switch ($settings['formula']) {
                        case 'multiply':
                            $answer = array_product($results);
                            break;
                        case 'add':
                            $answer = array_sum($results);
                            break;
                    }
                    $query[$fieldKey] = $answer;
                    break;
            }
        }
        if ($request->session()->has('queryparam')) {
            foreach (session('queryparam') as $key => $value) {
                $query[$key] = $value;
            }
        }
        //dd($query);
        $this->dispatch(new SendEloquaRequest($url, $query));
    }

    private function prepareMrsRequest($mrs, $request, $uuid){
        //send guzzle request
        $url = $mrs['url'];
        $auth = isset($mrs['auth']) ? [$mrs['auth']['username'],$mrs['auth']['password']] : '[]';
        $query = [];

        foreach ($mrs['fields'] as $fieldKey => $settings) {
            switch ($settings['type']) {
                case 'hidden':
                    $query[$fieldKey] = $settings['value'];
                    break;
                case 'array':
                    foreach ($settings['value'] as $groupKey => $groupSettings) {
                        if(isset($groupSettings['type'])){
                            $query[$fieldKey][$groupKey] = $groupSettings['value'] == 'datetime' ? Carbon::now()->toDateTimeString() : $groupSettings['value'];
                        }
                        if(isset($groupSettings['question_type'])){
                            if($groupSettings['answer'] == 'report'){
                                $answer = session('url').'/'.session('locale').'/download/'.$uuid;
                            }elseif($groupSettings['answer'] == 'overall' || $groupSettings['answer'] == 'move' || $groupSettings['answer'] == 'build' || $groupSettings['answer'] == 'manage'){
                                $answer = trans(session('product.alias').'.'.session('result.'.$groupSettings['answer'].'.rating'));
                            }else{
                                $answer = is_null($request->input($groupSettings['answer'])) ? "" : $request->input($groupSettings['answer']);
                            }
                            $query[$fieldKey][] = [
                                'question_type' => $groupSettings['question_type'],
                                'question_name' => $groupSettings['question_name'],
                                'answer' => $groupSettings['answer'] == 'report' ? session('url').'/'.session('locale').'/download/'.$uuid : (is_null($request->input($groupSettings['answer'])) ? "" : $request->input($groupSettings['answer']))
                            ];
                        }
                    }
                    //$query[$fieldKey] = $settings['value'];
                    break;
                case 'object':
                    $object = [];
                    foreach($settings['value'] as $objKey => $value){
                        if(is_array($value)){
                            foreach($value as $subObjKey => $subValue){
                                if(is_array($subValue)){
                                    foreach($subValue as $key => $val){
                                        if(is_array($val)){
                                            foreach($val as $subSubKey => $subSubVal){
                                                $object[$objKey][$subObjKey][$key][$subSubKey] = $request->input($subSubVal) == 'on' ? 'permission' : 'unchanged';
                                            }
                                        }else{
                                            $object[$objKey][$subObjKey][$key] = $val;
                                        }
                                    }
                                }else{
                                    $object[$objKey][$subObjKey] = $subValue;
                                }
                            }
                        } else{
                            $object[$objKey] = $value;
                        }
                    }
                    $query[$fieldKey] = $object;
                    break;
            }

        }
        $this->dispatch(new SendCrmRequest($url, $query, 'POST', ['Content-Type' => 'application/json'], $auth));
    }
}
