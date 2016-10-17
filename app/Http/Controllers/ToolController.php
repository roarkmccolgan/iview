<?php namespace App\Http\Controllers;

use App\Assessment;
use App\Company;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\CreateToolRequest;
use App\Tool;
use App\Url;
use App\language;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;

class ToolController extends Controller
{
    var $numSections = false;
    var $quiz = false;
    var $menu = false;
    var $baseline = false;
    var $userid;
    var $result = false;
    var $report;


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
        $languages = language::lists('name', 'id');
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
            'C_Country'=>$request->input('C_Country'),
            'C_BusPhone'=>$request->input('C_BusPhone'),
            'form_source'=>$request->input('form_source','HP Tech Fit Quiz')
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
        
        if($request->session()->has('questions.'.$section.'.pages.page'.($page+1))){
            //$this->getPage($section,$page+1);
            //return Redirect::to('quiz/'.$section.'/page'.($page+1))->withCookie($cookie);
            return redirect('/quiz/'.$section.'/page'.($page+1));
        }else{
            session(['questions.'.$section.'.complete' => true]);
            $questions = session('questions');
            while (key($questions) !== $section  && key($questions) !== null) {
                next($questions);
            }
            next($questions);

            //check if there is a mini report
            if(null !== session('questions.'.$section.'.sub-report') && session('questions.'.$section.'.sub-report')!==false){
                $this->getCalcResults($section);
                $title = session('questions.'.$section.'.pages.page1.title');
                $rating = $this->result[$section]['rating'].' '.$this->result[$section]['score'];
                $ratingcopy = trans($this->baseline[$section]['types'][$this->result[$section]['rating']]['copy']);
                $next = '/quiz/'.key($questions).'/page1'; //fix this so a report can be provided at any stage?
                return view('tool.'.session('template').'.sectionresult',compact(['title','section','rating','ratingcopy','next']));
            }
            //dd(session('questions'));
            //else do carry on or complete
            if(key($questions)==null) return redirect('/quiz/complete');
            return redirect('/quiz/'.key($questions).'/page1');
        }
    }

    public function getComplete()
    {
        $this->loadQuestions();
        $this->calcResults();
        $currentLocal = App::getLocale();
        $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
        $btnclass = '';
        if($localQuestions=='es' || $localQuestions=='fr' || $localQuestions=='de' || $localQuestions=='it'){
            $btnclass = 'lang';
        }
        if(strrpos($this->result['overall']['rating'], '1', 6)!==false){
            $marker = 3;
        }else if(strrpos($this->result['overall']['rating'], '2', 6)!==false){
            $marker = 26;
        }else if(strrpos($this->result['overall']['rating'], '3', 6)!==false){
            $marker = 49;
        }else if(strrpos($this->result['overall']['rating'], '4', 6)!==false){
            $marker = 72;
        }else if(strrpos($this->result['overall']['rating'], '5', 6)!==false){
            $marker = 93;
        }
        

        $vars = array(
            'heading' => $this->result['overall']['rating'],
            'sub1' => trans($this->baseline['overall']['types'][$this->result['overall']['rating']]['copy']),
            'class' => 'sec1',
            'quiz' => $this->quiz,
            'source' => session('source'),
            'btnclass'=>$btnclass,
            'marker' => $marker
        );
        return view('tool.'.session('template').'.complete',$vars);
    }

    public function postComplete()
        {
            $this->loadQuestions();
            $this->howfit=Session::get('result');
            $this->baseline = Session::get('baseline');

            $validate_data = Input::except('_token');
            $rules = array(
                'fname'=>'required',
                'sname'=>'required',
                'email'=>'required',
                'company'=>'required',
                'country'=>'required',
                'terms'=>'required'
            );

            $validator = Validator::make($validate_data, $rules);

            if ($validator->passes()) {
                Session::put('user', $validate_data);
                
                $screener1=$this->quiz['demographics']['pages']['page1']['questions']['s1']['selected'];
                $screener2=$this->quiz['demographics']['pages']['page2']['questions']['s2']['selected'];
                $screener3=$this->quiz['demographics']['pages']['page3']['questions']['s3']['selected'];
                
                //update source
                $currentLocal = App::getLocale();
                $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
                $source = array(
                    'C_emailAddress'=>$validate_data['email'],
                    'C_FirstName'=>$validate_data['fname'],
                    'C_LastName'=>$validate_data['sname'],
                    'C_Company'=>$validate_data['company'],
                    'C_Country'=>$validate_data['country'],
                    'C_BusPhone'=>$validate_data['phone'],
                    'C_Job_Responsibilities_1'=>$screener1==Config::get($localQuestions.'questions.screeners.pages.page1.questions.s1.options.0.label') ? "IT" : "Business / Operations",
                    'C_NumberofEmployees_Range_1'=>$screener2,
                    'form_source'=>Input::get('form_source')
                );
                
                Session::put('source', $source);
                
                //save in db
                $assessment = new Assessment;
                $assessment->fname = $validate_data['fname'];
                $assessment->lname = $validate_data['sname'];
                $assessment->email = $validate_data['email'];
                $assessment->company = $validate_data['company'];
                $assessment->country = $validate_data['country'];
                $assessment->tel = $validate_data['phone'];
                $assessment->referer = $validate_data['referer'];
                $assessment->quiz = json_encode($this->quiz);
                $assessment->result = json_encode($this->howfit);

                
                $assessment->save();
                $this->assessmentid = $assessment->id;
                $validate_data['assessmentid'] = $assessment->id;
                
                //generate report
                $this->generateReport();
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
                $subject = Lang::get('email.report');
                //send mail to user
                Mail::queue('emails.'.$curloc.'download', array('fname'=>$validate_data['fname'], 'sname'=>$validate_data['sname'], 'userid'=>$validate_data['assessmentid']), function($message)  use ($validate_data, $subject, $curloc){

                    $message->to($validate_data['email'], $validate_data['fname'].' '.$validate_data['sname'])->subject($subject);
                });
                
                //send mail to notification people
                if(App::isLocal()){
                    $emails = ['roarkmccolgan@gmail.com'];
                }else{
                    $emails = ['roarkmccolgan@gmail.com', 'Pelle_Lindell@Dell.com'];

                }
                Mail::queue('emails.notification', array('fname'=>$validate_data['fname'], 'sname'=>$validate_data['sname'], 'email'=>$validate_data['email'], 'company'=>$validate_data['company'], 'phone'=>$validate_data['phone'], 'screener1'=>$this->quiz['demographics']['pages']['page1']['questions']['s1']['selected'], 'screener2'=>$this->quiz['demographics']['pages']['page2']['questions']['s2']['selected'], 'screener3'=>$this->quiz['demographics']['pages']['page3']['questions']['s3']['selected'], 'score'=>$this->howfit['overall']['score'], 'rating'=>$this->howfit['overall']['rating'], 'userid'=>$validate_data['assessmentid']), function($message)  use ($validate_data, $emails, $curloc){

                    $message->to($emails)->subject('Conferged Infrastructure Quiz completed ('.$curloc.')');
                });
                
                $vars = array(
                    'heading' => Lang::get('general.title'),
                    'sub1' => Lang::get('general.hi').', '.$validate_data['fname'],
                    'sub2' => Lang::get('general.soon'),
                    'tweet' => $this->baseline['overall']['types'][$this->howfit['overall']['rating']]['tweet'],
                    'colour' => 'orange',
                    'script' => ['
                        _gaq.push([\'_trackEvent\', \'Form Submit\', \'Registration\']);
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
                return View::make('thankyou',$vars);
            }
            Input::flashExcept('_token');
            return Redirect::to(getLang().'quiz/complete')->withErrors($validator);
        }


    public function fakeDownload($userid){
        //PDF file is stored under project/public/download/info.pdf
        $file= storage_path().'/reports/SAGE_Assessment_Report.pdf';
        $headers = array(
            'Content-Type: application/pdf',
        );
        return response()->download($file, 'SAGE_Assessment_Report.pdf', $headers);
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
                        if(!isset($details['selected'])){
                            dd($details);
                        }
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
                        $result['overall']['score'] += $limits['total'];
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
                        foreach ($this->baseline[$key]['types'] as $rating => $limits) {
                            if($result[$key]['score']>=$limits['low'] && $result[$key]['score']<=$limits['high']){
                                $result[$key]['rating'] = $rating;
                                $result['overall']['score'] += $limits['total'];
                            }
                        }
                    }
                    //$result['overall']['score'] += $result[$key]['score'];
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
