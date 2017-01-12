<?php namespace App\Http\Controllers;

use App\Assessment;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\GenerateReportTrait;
use App\Http\Requests;
use App\Http\Requests\CreateToolRequest;
use App\Http\Requests\SubmitAssessmentsRequest;
use App\Language;
use Lava;
use App\Tool;
use App\Url;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

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

    // function __construct($lang) {
    //     dd($lang);
    // }
	public function loadQuestions(){
		$this->quiz=session('questions');
		if(!$this->quiz) return redirect('/');
		$this->numSections=count($this->quiz);
		$temp = array();
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
    	$languages = Language::lists('name', 'id');
    	return view('tool.create', compact(['companies','languages']));
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

    ///////
    //TOOl STUFF
    ///////
    
    /**
     * show intro
     * @return view
     */
    public function run(Request $request, $subdomain)
    {
    	$source = array(
    		'C_emailAddress'=>$request->input('C_emailAddress'),
    		'C_FirstName'=>$request->input('C_FirstName'),
    		'C_LastName'=>$request->input('C_LastName'),
    		'C_Company'=>$request->input('C_Company'),
    		'C_Company'=>$request->input('C_Company'),
    		'C_Title'=>$request->input('C_Title'),
    		'C_BusPhone'=>$request->input('C_BusPhone'),
    		'form_source'=>$request->input('form_source')
    		);

    	session(['source' => $source]);

    	$return_visitor = $request->cookie('quiz_progress');
    	$class = 'intro';

    	$tool = $request->get('product');
    	$view = 'tool.'.session('template').'.intro';
    	return view($view, compact('tool','return_visitor','class'));
    }

    public function getPage($subdomain, $section=false, $page=false)
    {

    	if($section===false || $page===false) return redirect('/');
    	$this->loadQuestions();

    	if(!isset($this->quiz[$section]['pages']['page'.$page])) return redirect('/');

    	$data = $this->quiz[$section];
    	$sectionQuestions = $data['pages']['page'.$page];

    	$script = false;
    	foreach ($sectionQuestions['questions'] as $number => $question) {
    		if(isset($question['script'])){
    			$script[]=$question['script'];
    		}
    	}
    	$currentLocal = App::getLocale();
    	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
    	$btnsize = '-small';
    	if($localQuestions=='es'){
    		$btnsize = '-small lang';
    	}
    	
    	$vars = array(
    		'questions' => $sectionQuestions['questions'],
    		'heading' => $sectionQuestions['title'],
    		'report' => isset($sectionQuestions['report']) ? $sectionQuestions['report']:false,
    		'menu' => $this->menu,
    		'class' => $data['class'],
    		'section'=>$section,
    		'page'=>$page,
    		'script'=>$script,
    		'btnsize'=>$btnsize
    		);
        //return $sectionQuestions['questions'];
    	return view('tool.'.session('template').'.question',$vars);
    }


    public function savePage(Request $request, $subdomain, $section=false, $page=false)
    {
    	if($section===false || $page===false) return redirect('/');
    	$input = $request->except('_token');

    	session(['questions.'.$section.'.pages.page'.$page.'.questions.'.$input['question'].'.selected' => $input['answer']]);
    	session(['questions.'.$section.'.pages.page'.$page.'.done' => true]);
        //dd(session('questions'));
    	
    	if($request->session()->has('questions.'.$section.'.pages.page'.($page+1))){
            //$this->getPage($section,$page+1);
            //return Redirect::to('quiz/'.$section.'/page'.($page+1))->withCookie($cookie);
    		return redirect('/'.session('localeUrl').'quiz/'.$section.'/page'.($page+1));
    	}else{
    		session(['questions.'.$section.'.complete' => true]);
    		$questions = session('questions');
    		while (key($questions) !== $section  && key($questions) !== null) {
    			next($questions);
    		}
    		next($questions);

            //check if there is a mini report
    		if(null !== session('questions.'.$section.'.sub-report') && session('questions.'.$section.'.sub-report')!==false){
    			$this->loadQuestions();
    			$this->getCalcResults($section);
    			$menu = $this->menu;
    			$page = $page;
    			$title = session('questions.'.$section.'.pages.page1.title');
    			$rating = trans(session('product.alias').'.'.$this->result[$section]['rating']);
    			$ratingClass = 'icon '.$section;
    			$ratingcopy = trans($this->baseline[$section]['types'][$this->result[$section]['rating']]['copy']);
                $next = (key($questions)==null) ? '/'.session('localeUrl').'quiz/complete': '/'.session('localeUrl').'quiz/'.key($questions).'/page1'; //fix this so a report can be provided at any stage?
                return view('tool.'.session('template').'.sectionresult',compact(['menu','page','title','section','rating','ratingClass','ratingcopy','next']));
            }
            //dd(session('questions'));
            //else do carry on or complete
            if(key($questions)==null) return redirect('/'.session('localeUrl').'quiz/complete');
            return redirect('/'.session('localeUrl').'quiz/'.key($questions).'/page1');
        }
    }

    public function getComplete(Request $request)
    {
    	$this->loadQuestions();
    	$this->calcResults();
    	$currentLocal = App::getLocale();
    	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
    	$btnclass = '';
    	if($localQuestions=='es' || $localQuestions=='fr' || $localQuestions=='de' || $localQuestions=='it'){
    		$btnclass = 'lang';
    	}
    	$graph = false;
    	if(config('baseline_'.session('product.id').'.overall.complete.graph')){
    		$graph = config('baseline_'.session('product.id').'.overall.complete.graph');
    		$chartSettings = [
                'title' => null,//trans(session('product.alias').'.completecopy.graphtitle')
                'backgroundColor' => [
                'fill'=>'transparent'
                ],
                'vAxis' => [
                'baselineColor'=>'none',
                'gridlines'=> [
                'color'=> 'none'
                ]
                ],
                'hAxis' => [
                'textStyle' => [
                'fontName' => 'Helvetica-light',
                /*'fontSize' => 18,*/
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
                'colors' => ['#68aadd'],
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
                        if($graph['format']){
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
                        	$completeGraph->addRow([
                  trans(session('product.alias').'.'.$stage),//$stage
                  $val,
                  session('result.overall.rating')==$stage? config('baseline_'.session('product.id').'.overall.report-settings.color'):null,
                  $val."%"
                  ]);
                        }

                        $completeChart = Lava::ColumnChart('overall_graph', $completeGraph, $chartSettings);
                    }

                    $extraFields = Tool::findOrFail(session('product.id'))->extra_fields()->get()->toArray();
        //return $extraFields;
                    $vars = array(
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
                    	);
                    return view('tool.'.session('template').'.complete',$vars);
                }

                public function postComplete(SubmitAssessmentsRequest $request)
                {
            //return $request->all();
                	$this->loadQuestions();
                	$this->howfit=Session::get('result');
                	$this->baseline = Session::get('baseline');

                	Session::put('user', $request->except('_token'));

                	if(isset($this->quiz['screeners'])){
                		foreach ($this->quiz['screeners'] as $key => $screener) {
                    # code...
                		}
                	}

            //update source
                	$currentLocal = App::getLocale();
                	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;

                	$source = array(
                		'C_emailAddress'=>$request->input('email'),
                		'C_FirstName'=>$request->input('fname'),
                		'C_LastName'=>$request->input('sname'),
                		'C_Company'=>$request->input('company'),
                		'C_Country'=>$request->input('country'),
                		'C_BusPhone'=>$request->input('phone'),
                		'form_source'=>$request->input('form_source')
                		);

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
                	$assessment->save();

            //check UTM
                	if ($request->session()->has('utm')) {
                		$tracker = Tracker::where('tool_id',session('product.id'))
                		->where('code',session('utm'))->first();
                		if($tracker){
                			$tracker->increment('completions');
                		}
                	}

            //generate report
                	$this->wkhtml($assessment->id,str_slug($assessment->fname.'_'.$assessment->lname.'_'.session('product.title').'_Assessment', '-'));

                	$curloc = App::getLocale();

            /*if(!App::isLocal()){
                //send guzzle request
                $client = new GuzzleHttp\Client();
                $url = 'https://s2048.t.eloqua.com/e/f2.aspx';
                //$url = 'http://www.google.com';
                try {
                    $request = $client->createRequest('GET', $url);
                    $query = $request->getQuery();
                    $query['elqFormName'] = Lang::get('general.extFormName');
                    $query['elqSiteID'] = '2048';
                    foreach($source as $key=>$item){
                        $query[$key] = $item;
                    }
                                    
                    $response = $client->send($request);
                } catch (GuzzleHttp\Exception\RequestException $e) {
                    
                    Mail::queue('emails.errors', array('process'=>'Guzzle', 'message'=>$e->getMessage(), 'time'=>date('l jS \of F Y h:i:s A')), function($message)
                    {
                        $message->to('roarkmccolgan@gmail.com', 'Roark McColgan')->subject('Error on Converged Infrastructure - Maturity Benchmark! ('.$curloc.')');
                    });
                }
            }*/
            $subject = trans(session('product.alias').'.email.subject');
            $viewData = [
            'assessment'=>$assessment,
            ];
            $data['html'] =  View::make('emails.download', $viewData)->render();

            //send mail to user
            Mail::queue('emails.echo', $data, function ($message) use ($assessment, $subject) {
            	$message->from('notifications@mg.idcready.net', 'IDC Notifications');
            	$message->to($assessment['email'], $assessment['fname'].' '.$assessment['sname'])->subject($subject);
            });
            
            //send mail to notification people
            if(App::isLocal()){
            	$emails = ['roarkmccolgan@gmail.com'];
            }else{
                $emails = ['roarkmccolgan@gmail.com']; //add others 
            }
            /*Mail::queue('emails.notification', array('fname'=>$request->input('fname'), 'sname'=>$request->input('sname'), 'email'=>$request->input('email'), 'company'=>$request->input('company'), 'phone'=>$request->input('phone'), 'screener1'=>$this->quiz['demographics']['pages']['page1']['questions']['s1']['selected'], 'screener2'=>$this->quiz['demographics']['pages']['page2']['questions']['s2']['selected'], 'screener3'=>$this->quiz['demographics']['pages']['page3']['questions']['s3']['selected'], 'score'=>$this->howfit['overall']['score'], 'rating'=>$this->howfit['overall']['rating'], 'assessment_id'=>$assessment->id, function($message)  use ($request->input( $emails,)$curloc){

                $message->to($emails)->subject('Conferged Infrastructure Quiz completed ('.$curloc.')');
            });*/
            
            $vars = array(
            	'heading' => trans(session('product.alias').'.complete_thankyou',['fname'=>$request->input('fname')]),
            	'body' => trans(session('product.alias').'.complete_body'),
            	'tweet' => config('baseline_'.session('product.id').'.overall.tweet') ? trans(session('product.alias').'.complete_tweet',['result'=>trans(session('product.alias').'.'.$this->howfit['overall']['rating'])]):false,
            	'class' => 'trans silverStone',
            	'script' => ['
            	ga(\'send\', {
            		hitType: \'event\',
            		eventCategory: \'Assessments\',
            		eventAction: \'download\',
            		eventLabel: \''.addslashes(session('product.title')).'\'
            	});
            	'],
            	'quiz' => $this->quiz
            	);
            /*if(Cookie::has('quiz_progress')){
                $progress_id = Cookie::get('quiz_progress');
                $progress = Progress::find($progress_id);
                if($progress) $progress->delete();
            }
            $cookie = Cookie::forget('quiz_progress');*/
            
            //return View::make('thankyou',$vars)->withCookie($cookie);
            return View::make('tool.'.session('template').'.thankyou',$vars);
            
        }

        public function getDownload($subdomain,$assid){
        	$assessment = Assessment::findOrFail($assid);
        	$assessment->update(['fetched' => 1]);


        	$file= storage_path().'/reports/'.$assessment->id.'_'.str_slug($assessment->fname.'_'.$assessment->lname.'_'.$assessment->tool->title.'_Assessment', '-').'.pdf';
        	$headers = array(
        		'Content-Type: application/pdf',
        		);
        	return response()->download($file, $assessment->id.'_'.str_slug($assessment->fname.'_'.$assessment->lname.'_'.$assessment->tool->title.'_Assessment', '-').'.pdf', $headers);
        }

        public function fakeDownload($tool){

        	if($tool=='fireeye'){
        		$file= storage_path().'/reports/FireEye_Assessment_Report.pdf';
        		$filename = "FireEye_Assessment_Report.pdf";
        	}else{
        		$file= storage_path().'/reports/SAGE_Assessment_Report.pdf';
        		$filename = "SAGE_Assessment_Report.pdf";
        	}

        	$headers = array(
        		'Content-Type: application/pdf',
        		);
        	return response()->download($file, $filename, $headers);
        }
        public function getCalcResults($section=false){
        	$this->loadQuestions();
        	$this->calcResults($section);
        }

        private function calcResults($section=false){
        	$this->baseline = config('baseline'.'_'.session('product.id'));
        	$result = array();
        	$result['overall']['score'] = 0;

        	if($section!==false){
        		foreach ($this->quiz[$section]['pages'] as $page => $props) {
        			foreach ($props['questions'] as $q => $details) {
        				if(($details['type']=='checkbox' || $details['type']=='groupradio' || $details['type']=='slider') && is_array($details['selected'])){
        					if(isset($details['calc'])){
        						if($details['calc']['type']=='average'){
        							$ave = [];
        							foreach ($details['selected'] as $selected) {
        								$selected = explode('|', $selected);
        								$selected = $selected[1];
        								$ave[]=$selected;
        							}
        							$val = array_sum($ave) / count($ave);
        						}elseif($details['calc']['type']=='normalize'){
        							$norm = 0;
        							foreach ($details['selected'] as $selected) {
        								$selected = explode('|', $selected);
        								$selected = $selected[1];
        								$norm+=$selected;
        							}
        							$val = ($norm/$details['calc']['value'])*count($details['selected']);
        						}
        					}else{
        						$valHold = 0;
        						foreach ($details['selected'] as $selected) {
        							$selected = explode('|', $selected);
        							$selected = $selected[1];
        							$valHold+=$selected;
        						}
        						$val = $valHold;
        					}
        				}else{
        					$val = explode('|', $details['selected']);
        					$val = $val[1];
        				}
        				if (isset($result[$section]['score'])){
        					$result[$section]['score'] += $val;
        				} else {
        					$result[$section]['score'] = $val;
        				}
        			}
        			foreach ($this->baseline[$section]['types'] as $rating => $limits) {
        				if($result[$section]['score']>=$limits['low'] && $result[$section]['score']<=$limits['high']){
        					$result[$section]['rating'] = $rating;
        					$result['overall']['score'] += $result[$section]['score'];
        				}
        			}
        		}
            //$result['overall']['score'] += $result[$section]['score'];
        		foreach ($this->baseline['overall']['types'] as $rating => $limits) {
        			if($result['overall']['score']>=$limits['low'] && $result['overall']['score']<=$limits['high']){
        				$result['overall']['rating'] = $rating;
        			}
        		}
        	}else{
        		foreach ($this->quiz as $key => $value) {
        			if($key!=='screeners'){
        				foreach ($value['pages'] as $page => $props) {
        					foreach ($props['questions'] as $q => $details) {
        						if(($details['type']=='checkbox' || $details['type']=='groupradio' || $details['type']=='slider') && is_array($details['selected'])){
        							if(isset($details['calc'])){
        								if($details['calc']['type']=='average'){
        									$ave = [];
        									foreach ($details['selected'] as $selected) {
        										$selected = explode('|', $selected);
        										$selected = $selected[1];
        										$ave[]=$selected;
        									}
        									$val = array_sum($ave) / count($ave);
        								}elseif($details['calc']['type']=='normalize'){
        									$norm = 0;
        									foreach ($details['selected'] as $selected) {
        										$selected = explode('|', $selected);
        										$selected = $selected[1];
        										$norm+=$selected;
        									}
        									$val = ($norm/$details['calc']['value'])*count($details['selected']);
        								}
        							}else{
        								$valHold = 0;
        								foreach ($details['selected'] as $selected) {
        									$selected = explode('|', $selected);
        									$selected = $selected[1];
        									$valHold+=$selected;
        								}
        								$val = $valHold;
        							}
        						}else{
        							$val = explode('|', $details['selected']);
        							$val = $val[1];
        						}
        						if (isset($result[$key]['score'])){
        							$result[$key]['score'] += $val;
        						} else {
        							$result[$key]['score'] = $val;
        						}
        					}
        				}
        				foreach ($this->baseline[$key]['types'] as $rating => $limits) {
        					if($result[$key]['score']>=$limits['low'] && $result[$key]['score']<=$limits['high']){
        						$result[$key]['rating'] = $rating;
        						$result['overall']['score'] += $result[$key]['score'];
        					}
        				}
        				foreach ($this->baseline['overall']['types'] as $rating => $limits) {
        					if($result['overall']['score']>=$limits['low'] && $result['overall']['score']<=$limits['high']){
        						$result['overall']['rating'] = $rating;
        					}
        				}
        			}
        		}
        	}

        	session(['result' => $result]);
        	session(['baseline' => $this->baseline]);
        	$this->result = $result;

        }
    }
