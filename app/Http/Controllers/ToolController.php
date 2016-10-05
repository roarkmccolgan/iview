<?php namespace App\Http\Controllers;

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
        $view = 'tool.'.config('app.template').'.intro';
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
        return view('tool.'.config('app.template').'.question',$vars);
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
        return view('tool.'.config('app.template').'.complete',$vars);
    }

    public function fakeDownload($userid){
            //PDF file is stored under project/public/download/info.pdf
            $file= storage_path().'/reports/SAGE_Assessment_Report.pdf';
            $headers = array(
                'Content-Type: application/pdf',
            );
            return response()->download($file, 'SAGE_Assessment_Report.pdf', $headers);
        }

    private function calcResults(){
        $this->baseline = config('baseline'.'_'.session('product.id'));
        $result = array();
        $result['overall']['score'] = 0;
        //dd($this->quiz);
        foreach ($this->quiz as $key => $value) {
            if($key!=='screeners'){
                foreach ($value['pages'] as $page => $props) {
                    foreach ($props['questions'] as $q => $details) {
                        if(($details['type']=='checkbox' || $details['type']=='groupradio' || $details['type']=='slider') && is_array($details['selected'])){
                            $valHold = 0;
                            foreach ($details['selected'] as $selected) {
                                $selected = explode('|', $selected);
                                $selected = $selected[1];
                                $valHold+=$selected;
                            }
                            $val = $valHold;
                            /*if(count($details['selected'])==1 && strrpos($details['selected'][0], "Unsure")!==false){
                                $val = 1;
                            }elseif(count($details['selected'])==1 || count($details['selected'])==2){
                                $val = 3;
                            }elseif(count($details['selected'])>=3){
                                $val = 5;
                            }*/
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
        
        session(['result' => $result]);
        session(['baseline' => $this->baseline]);
        $this->result = $result;
        
    }
}
