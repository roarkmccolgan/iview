<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;
use Lava;
use PDF;

require_once base_path('vendor/goat1000/svggraph/SVGGraph.php');

class PdfController extends Controller
{
    /**
     * List all iViews
     * @return view
     */
    public function wkhtml(Request $request)
    {
    	$chartSettings = [
    		'title' => null,
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
    		'legend' => ['position'=> 'bottom'],
    		'colors' => ['#68aadd'],
    		'chartArea' => ['width'=>'100%', 'height'=>'80%'],
    		'legend' => [ 'position' => "none" ],
    		'events' => [
    			'ready' => 'chartReady'
    		],
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
			'bar'  => [
				'groupWidth'=> '70%'

		    ] //As a percent, "33%"
		];

		$vars = [];
		$count = 0;
		$headervars = [];
		$headervars['tool_title'] = trans(session('product.alias').'.title');
		$headervars['sub-title'] = trans(session('product.alias').'.sub-title');
		$headervars['company_alias'] = session('company.alias');
		$headervars['tool_id'] = session('product.id');
		$headervars['template'] = session('template');
		$locale = App::getLocale();
		$region = 'na';
		if(session('product.id')==6){
			foreach (config('terminal.regions') as $key => $value) {
				if(array_search(session('questions.screeners.pages.page1.questions.s1.selected'), $value)!==false){
					$region = $key;
				}
			}	
		}
		
		if(session('product.id')==5){ //splunk
			$widthstage = [13, 38, 65, 90, 118];
			$sectionVars = [];

			foreach (config('baseline_'.session('product.id')) as $section => $values) {
				if($section!=='overall'){
					preg_match_all('/\d+/', session('result.'.$section.'.rating'), $matches);
					$sectionnumber =  (int)$matches[0][0];
					$sectionwidthuser = $widthstage[$sectionnumber-1];
					$widthsection = $widthstage[$values['benchmark-country-'.$locale]-1];

					$sectionVars[] = [
						'widthuser' => $sectionwidthuser,
						'width' => $widthsection,
						'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
						'score' => session('result.'.$section.'.score'),
					];
				}
			}


			//User overall stage number and ordinal
			preg_match_all('/\d+/', session('result.overall.rating'), $matches);
			$number =  (int)$matches[0][0];
			$ends = array('th','st','nd','rd','th','th','th','th','th','th');
			if (($number %100) >= 11 && ($number%100) <= 13){
				$ordinal = 'th';
			}
			else{
				$ordinal = $ends[$number % 10];
			}

			//country benchmark by language
			$overallcountrynumber = config('baseline_'.session('product.id').'.overall.benchmark-country-'.$locale);
			if($number > $overallcountrynumber){
				$overalllang = $number-$overallcountrynumber.' '.str_plural('level', $number-$overallcountrynumber).' ahead of the global leaders';
			}elseif($number == $overallcountrynumber){
				$overalllang = 'Inline with the global leaders';
			}else{
				$overalllang = $overallcountrynumber-$number.' '.str_plural('level', $overallcountrynumber-$number).' behind the global leaders';
			}

			//company size benchmark by language
			$demographicsizeanswer = session('questions.screeners.pages.page1.questions.s1.selected');
			$demographicsizeanswer = explode('|', $demographicsizeanswer);
			$demographicsizeanswer = str_replace(" ", "-", $demographicsizeanswer[0]);
			$overallsizenumber = config('baseline_'.session('product.id').'.overall.benchmark-size-'.$demographicsizeanswer);
			if($number > $overallsizenumber){
				$overallsize = $number-$overallsizenumber.' '.str_plural('level', $number-$overallsizenumber).' ahead of the leaders in companies of the same size';
			}elseif($number == $overallsizenumber){
				$overallsize = 'Inline with the leaders in companies of the same size';
			}else{
				$overallsize = $overallsizenumber-$number.' '.str_plural('level', $overallsizenumber-$number).' behind the leaders in companies of the same size';
			}

			//bar widths
			$widthuser = $widthstage[$number-1];
			$widthlang = $widthstage[$overallcountrynumber-1];
			$widthsize = $widthstage[$overallsizenumber-1];



			$vars['introduction'] = trans(session('product.alias').'.introduction',
				[
					'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
					'percent'=>config('baseline_'.session('product.id').'.overall.types.'.session('result.overall.rating').'.benchmark'),
					'ordinal'=>$ordinal,
					'number'=>$number,
					'stage'=>$number,
					'overalllang'=>$overalllang,
					'overallsize'=>$overallsize,
					'widthuser' => $widthuser.'mm;',
					'widthlang' => $widthlang.'mm;',
					'widthsize' => $widthsize.'mm;',
					'widthuser-security-strategy' => $sectionVars[0]['widthuser'].'mm;',
					'width-security-strategy' => $sectionVars[0]['width'].'mm;',
					'security-strategy-rating' => $sectionVars[0]['rating'],
					'security-strategy-score' => $sectionVars[0]['score'],

					'widthuser-incident-detection' => $sectionVars[1]['widthuser'].'mm;',
					'width-incident-detection' => $sectionVars[1]['width'].'mm;',
					'incident-detection-rating' => $sectionVars[1]['rating'],
					'incident-detection-score' => $sectionVars[1]['score'],

					'widthuser-incident-response' => $sectionVars[2]['widthuser'].'mm;',
					'width-incident-response' => $sectionVars[2]['width'].'mm;',
					'incident-response-rating' => $sectionVars[2]['rating'],
					'incident-response-score' => $sectionVars[2]['score'],
					'sectionbg' => asset('/images/tools/5/section_graph_bg.svg'),
					'overallbg' => asset('/images/tools/5/overall_graph_bg.svg')
				]
			);

			$sectionCopy = '';

			$customCopy = '';
			//a1
			$selected = session('questions.security-strategy.pages.page1.questions.q1.selected');
			$value = explode('|', $selected);
			$value = (int) $selected[1];
			if($value == 2 || $value == 4){
				$customCopy.= trans(session('product.alias').'.a1-a');
			}
			if($value == 6){
				$customCopy.= trans(session('product.alias').'.a1-b');
			}

			//a5
			$selected = session('questions.security-strategy.pages.page3.questions.q3.selected');
			$value = explode('|', $selected);
			$value = (int) $selected[1];
			if($value == 2 || $value == 4){
				$customCopy.= trans(session('product.alias').'.a5-a');
			}
			if($value == 6){
				$customCopy.= trans(session('product.alias').'.a5-b');
			}
			if($customCopy!=''){
				$sectionCopy.= trans(session('product.alias').'.security-strategy-heading');
				$sectionCopy.= $customCopy;
				$customCopy = '';
			}

			//a7 slider
			$selected = session('questions.incident-detection.pages.page1.questions.q4.selected');
			$valHold = 0;
			foreach ($selected as $choice) {
				$value = explode('|', $choice);
				$value = $value[1];
				$valHold+=$value;
			}
			$value = $valHold;

			if($value == 2.5){
				$customCopy.= trans(session('product.alias').'.a7-a');
			}
			if($value == 3.5){
				$customCopy.= trans(session('product.alias').'.a7-b');
			}

			if($customCopy!=''){
				$sectionCopy.= trans(session('product.alias').'.incident-detection-heading');
				$sectionCopy.= $customCopy;
				$customCopy = '';
			}

			//a8
			$selected = session('questions.incident-response.pages.page1.questions.q7.selected');
			$value = explode('|', $selected);
			$value = (int) $selected[1];
			if($value <= 2){
				$customCopy.= trans(session('product.alias').'.a8-a');
			}
			if($value == 3){
				$customCopy.= trans(session('product.alias').'.a8-b');
			}

			//a11
			$selected = session('questions.incident-response.pages.page2.questions.q8.selected');
			$value = explode('|', $selected);
			$value = (int) $selected[1];
			if($value <= 2){
				$customCopy.= trans(session('product.alias').'.a11-a');
			}
			
			//a11b
			$selected = session('questions.incident-response.pages.page4.questions.q10.selected');
			$value = explode('|', $selected);
			$value = (int) $selected[1];
			if($value <= 3){
				$customCopy.= trans(session('product.alias').'.a11b-a');
			}

			//a13
			$selected = session('questions.incident-response.pages.page5.questions.q11.selected');
			$value = explode('|', $selected);
			$value = (int) $selected[1];
			if($value <= 2){
				$customCopy.= trans(session('product.alias').'.a13-a');
			}
			if($value == 3){
				$customCopy.= trans(session('product.alias').'.a13-a');
			}

			//a14
			$selected = session('questions.incident-response.pages.page6.questions.q12.selected');
			$value = explode('|', $selected);
			$value = (int) $selected[1];
			if($value <= 2){
				$customCopy.= trans(session('product.alias').'.a14-a');
			}
			if($value == 3){
				$customCopy.= trans(session('product.alias').'.a14-b');
			}
			if($customCopy!=''){
				$sectionCopy.= trans(session('product.alias').'.incident-response-heading');
				$sectionCopy.= $customCopy;
				$customCopy = '';
			}
			$vars['sectionCopy'] = $sectionCopy;
			//end stuff
			$vars['summary'] = trans(session('product.alias').'.summary');;

			$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
			$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
			$vars['questions'] = session('questions');
		} elseif(session('product.id')==6){ //btmcafee
			$widthstage = [13, 38, 65, 90, 118];
			$sectionVars = [];

			foreach (config('baseline_'.session('product.id')) as $section => $values) {
				if($section!=='overall'){
					preg_match_all('/\d+/', session('result.'.$section.'.rating'), $matches);
					$sectionnumber =  (int)$matches[0][0];
					$sectionwidthuser = $widthstage[$sectionnumber-1];
					$widthsection = $widthstage[$values['benchmark-country-'.$region]-1];

					$sectionVars[] = [
						'widthuser' => $sectionwidthuser,
						'width' => $widthsection,
						'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
						'score' => session('result.'.$section.'.score'),
					];
				}
			}


			//User overall stage number and ordinal
			preg_match_all('/\d+/', session('result.overall.rating'), $matches);
			$number =  (int)$matches[0][0];
			$ends = array('th','st','nd','rd','th','th','th','th','th','th');
			if (($number %100) >= 11 && ($number%100) <= 13){
				$ordinal = 'th';
			}
			else{
				$ordinal = $ends[$number % 10];
			}

			//country benchmark by language
			$overallcountrynumber = config('baseline_'.session('product.id').'.overall.benchmark-country-'.$region);

			if($number > $overallcountrynumber){
				$overalllang = $number-$overallcountrynumber.' '.str_plural('level', $number-$overallcountrynumber).' ahead of the global leaders';
			}elseif($number == $overallcountrynumber){
				$overalllang = 'Inline with the global leaders';
			}else{
				$overalllang = $overallcountrynumber-$number.' '.str_plural('level', $overallcountrynumber-$number).' behind the global leaders';
			}

			//company size benchmark by language
			$demographicsizeanswer = session('questions.screeners.pages.page2.questions.s2.selected');
			
			$demographicsizeanswer = explode('|', $demographicsizeanswer);
			$demographicsizeanswer = strtolower(str_replace([" ",","], ["-",""], $demographicsizeanswer[0]));

			$overallsizenumber = config('baseline_'.session('product.id').'.overall.benchmark-size-'.$demographicsizeanswer);

			if($number > $overallsizenumber){
				$overallsize = $number-$overallsizenumber.' '.str_plural('level', $number-$overallsizenumber).' ahead of the leaders in companies of the same size';
			}elseif($number == $overallsizenumber){
				$overallsize = 'Inline with the leaders in companies of the same size';
			}else{
				$overallsize = $overallsizenumber-$number.' '.str_plural('level', $overallsizenumber-$number).' behind the leaders in companies of the same size';
			}

			//bar widths
			$widthuser = $widthstage[$number-1];
			$widthlang = $widthstage[$overallcountrynumber-1];
			$widthsize = $widthstage[$overallsizenumber-1];



			$vars['introduction'] = trans(session('product.alias').'.introduction',
				[
					'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
					'percent'=>config('baseline_'.session('product.id').'.overall.types.'.session('result.overall.rating').'.benchmark'),
					'ordinal'=>$ordinal,
					'number'=>$number,
					'stage'=>$number,
					'overalllang'=>$overalllang,
					'overallsize'=>$overallsize,
					'widthuser' => $widthuser.'mm;',
					'widthlang' => $widthlang.'mm;',
					'widthsize' => $widthsize.'mm;',
					'widthuser-security-strategy' => $sectionVars[0]['widthuser'].'mm;',
					'width-security-strategy' => $sectionVars[0]['width'].'mm;',
					'security-strategy-rating' => $sectionVars[0]['rating'],
					'security-strategy-score' => $sectionVars[0]['score'],

					'widthuser-incident-detection' => $sectionVars[1]['widthuser'].'mm;',
					'width-incident-detection' => $sectionVars[1]['width'].'mm;',
					'incident-detection-rating' => $sectionVars[1]['rating'],
					'incident-detection-score' => $sectionVars[1]['score'],

					'widthuser-incident-response' => $sectionVars[2]['widthuser'].'mm;',
					'width-incident-response' => $sectionVars[2]['width'].'mm;',
					'incident-response-rating' => $sectionVars[2]['rating'],
					'incident-response-score' => $sectionVars[2]['score'],
					'overallbg' => asset('images/tools/6/overall_graph_bg.svg'),
					'sectionbg' => asset('images/tools/6/section_graph_bg.svg'),
				]
			);

			$sectionCopy = '';
			$customCopy = '';

			//Integration automation 
			$value = session('result.integration.score') + session('result.automation.score');
			if($value > 37.52){
				$customCopy.= trans(session('product.alias').'.integration-automation-good');
			}
			if($value >= 22.51 && $value <= 30){
				$customCopy.= trans(session('product.alias').'.integration-automation-moderate');
			}
			if($value <= 22.50){
				$customCopy.= trans(session('product.alias').'.integration-automation-weak');
			}

			if($customCopy!=''){
				$sectionCopy.= trans(session('product.alias').'.integration-automation-heading');
				$sectionCopy.= $customCopy;
				$customCopy = '';
			}
			

			//Integration automation 
			$value = session('result.integration.score') + session('result.automation.score');
			if($value > 37.52){
				$customCopy.= trans(session('product.alias').'.integration-automation-good');
			}
			if($value >= 22.51 && $value <= 30){
				$customCopy.= trans(session('product.alias').'.integration-automation-moderate');
			}
			if($value <= 22.50){
				$customCopy.= trans(session('product.alias').'.integration-automation-weak');
			}

			if($customCopy!=''){
				$sectionCopy.= trans(session('product.alias').'.integration-automation-heading');
				$sectionCopy.= $customCopy;
				$customCopy = '';
			}

			//Unified Intelligence 
			$value = session('result.unified-intelligence.score');
			if($value > 18.76){
				$customCopy.= trans(session('product.alias').'.unified-good');
			}
			if($value >= 15.01 && $value <= 18.75){
				$customCopy.= trans(session('product.alias').'.unified-moderate');
			}
			if($value <= 15){
				$customCopy.= trans(session('product.alias').'.unified-weak');
			}

			if($customCopy!=''){
				$sectionCopy.= trans(session('product.alias').'.unified-heading');
				$sectionCopy.= $customCopy;
				$customCopy = '';
			}

			//here

			$vars['sectionCopy'] = $sectionCopy;
			
			$vars['summary'] = trans(session('product.alias').'.summary',[
				'link1' => asset('/images/tools/6/link-01.png'),
				'link2' => asset('/images/tools/6/link-02.png'),
				'link3' => asset('/images/tools/6/link-03.png'),
			]);

			$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
			$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
			$vars['questions'] = session('questions');
		}elseif(session('product.id')==7) {
			//User overall stage number and ordinal
			preg_match_all('/\d+/', session('result.overall.rating'), $matches);
			$number =  (int)$matches[0][0];
			$ends = array('th','st','nd','rd','th','th','th','th','th','th');
			if (($number %100) >= 11 && ($number%100) <= 13){
				$ordinal = 'th';
			}
			else{
				$ordinal = $ends[$number % 10];
			}


			$vars['introduction'] = trans(session('product.alias').'.introduction',
				[
					'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
					'maturitygraph' => asset('images/tools/7/maturity.svg'),
				]
			);

			$sectionCopy = '';
			$customCopy = '';

			//overall
			$value = session('result.overall.score');

			$q1 = $this->getQuestionScore(1, 'gdpr');
			$q7 = $this->getQuestionScore(7, 'gdpr');

			$customCopy.= trans(session('product.alias').'.overallintro');

			if($q1+$q7 < 5){
				$customCopy.= trans(session('product.alias').'.overallstage1');
			}
			if($q1+$q7 == 5 || $q1+$q7 == 6 || $q1+$q7 == 7){
				$customCopy.= trans(session('product.alias').'.overallstage2');
			}
			if($q1+$q7 > 7){
				$customCopy.= trans(session('product.alias').'.overallstage4');
			}

			//Dynamic
			if($q1==1 || $q1==2){
				$customCopy.= trans(session('product.alias').'.overallq1aorb');
			}
			if($q1==3 || $q1==4){
				$customCopy.= trans(session('product.alias').'.overallq1cord');
			}
			if($q1==5){
				$customCopy.= trans(session('product.alias').'.overallq1e');
			}


			if($q7==4){
				$customCopy.= trans(session('product.alias').'.overallq7a');
			}
			if($q7==3 || $q7==2){
				$customCopy.= trans(session('product.alias').'.overallq7borc');
			}
			if($q7==1){
				$customCopy.= trans(session('product.alias').'.overallq7d');
			}

			
			$customCopy.= '<div class="pb"></div>';
			$customCopy.= '<div class="spacer"></div>';

			//Data Awareness
			$q4 = $this->getQuestionScore(4, 'gdpr');
			$q5 = $this->getQuestionScore(5, 'gdpr');

			$customCopy.= trans(session('product.alias').'.dataawarenessintro');

			if($q4+$q5 < 20){
				$customCopy.= trans(session('product.alias').'.dataawarenessstage1');
			}
			if($q4+$q5 >= 20 && $q4+$q5 <= 25){
				$customCopy.= trans(session('product.alias').'.dataawarenessstage2');
			}
			if($q4+$q5 > 25){
				$customCopy.= trans(session('product.alias').'.dataawarenessstage4');
			}

			//Dynamic
			if($q4==1 || $q4==2){
				$customCopy.= trans(session('product.alias').'.dataawareness_q5aorb');
			}
			if($q4==3 || $q4==4){
				$customCopy.= trans(session('product.alias').'.dataawareness_q5cord');
			}
			if($q4==5){
				$customCopy.= trans(session('product.alias').'.dataawareness_q5e');
			}
			if($q5<18){
				$customCopy.= trans(session('product.alias').'.dataawareness_q5lt18');
			}
			if($q5>=18 && $q5<=24){
				$customCopy.= trans(session('product.alias').'.dataawareness_q518to24');
			}
			if($q5>24){
				$customCopy.= trans(session('product.alias').'.dataawareness_q5gt24');
			}

			$customCopy.= '<div class="pb"></div>';
			$customCopy.= '<div class="spacer"></div>';

			//Risk
			$q6 = $this->getQuestionScore(6, 'gdpr');
			$q8 = $this->getQuestionScore(8, 'gdpr');
			$q9 = $this->getQuestionScore(9, 'gdpr');

			$customCopy.= trans(session('product.alias').'.riskintro');

			if($q6+$q9 < 14){
				$customCopy.= trans(session('product.alias').'.riskstage1');
			}
			if($q6+$q9 >= 14 && $q6+$q9 <= 17){
				$customCopy.= trans(session('product.alias').'.riskstage2');
			}
			if($q6+$q9 > 17){
				$customCopy.= trans(session('product.alias').'.riskstage4');
			}


			// if($q9<9){
			// 	$customCopy.= trans(session('product.alias').'.risk_q7lt9');
			// }
			// if($q9==9 || $q9==10){
			// 	$customCopy.= trans(session('product.alias').'.risk_q79or10');
			// }
			// if($q9>10){
			// 	$customCopy.= trans(session('product.alias').'.risk_q7gt10');
			// }
			if($q6==2){
				$customCopy.= trans(session('product.alias').'.risk_q112');
			}
			if($q6==3){
				$customCopy.= trans(session('product.alias').'.risk_q113');
			}
			if($q6==4){
				$customCopy.= trans(session('product.alias').'.risk_q114');
			}

			//non scoring
			//if stage 1 or 2
			if(session('result.overall.rating')=='stage1' || session('result.overall.rating')=='stage2'){
				if($q8<15){
					$customCopy.= trans(session('product.alias').'.riskstage1or2_q10lt15');
				}
				if($q8>=15 && $q8<=27){
					$customCopy.= trans(session('product.alias').'.riskstage1or2_q10between15and27');
				}
				if($q8>27){
					$customCopy.= trans(session('product.alias').'.riskstage1or2_q10gt28');
				}
			}
			//if stage 4
			if(session('result.overall.rating')=='stage4'){
				if($q8<15){
					$customCopy.= trans(session('product.alias').'.riskstage4_q10lt15');
				}
				if($q8>=15 && $q8<=27){
					$customCopy.= trans(session('product.alias').'.riskstage4_q10between15and27');
				}
				if($q8>27){
					$customCopy.= trans(session('product.alias').'.riskstage4_q10gt28');
				}
			}

			$q9text = $this->getAnswerText(9, 'gdpr');


			if(in_array("Lack of GDPR compliance knowledge", $q9text)){
				$customCopy.= trans(session('product.alias').'.non9a');
			}
			if(in_array("Lack of budget", $q9text)){
				$customCopy.= trans(session('product.alias').'.non9b');
			}
			if(in_array("Limited resources", $q9text)){
				$customCopy.= trans(session('product.alias').'.non9c');
			}
			if(in_array("Conflicting priorities", $q9text)){
				$customCopy.= trans(session('product.alias').'.non9d');
			}
			if(in_array("Not enough collaboration between the GDPR compliance team and other stakeholders", $q9text)){
				$customCopy.= trans(session('product.alias').'.non9e');
			}
			if(in_array("Fragmentation or lack of integration of Big Data, reporting, and analytics portfolio", $q9text)){
				$customCopy.= trans(session('product.alias').'.non9f');
			}


			$vars['sectionCopy'] = $customCopy;
			
			$vars['summary'] = Lang::has(session('product.alias').'.summary') ? trans(session('product.alias').'.summary'): '';

			$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
			$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
			$vars['questions'] = session('questions');
		}elseif(session('product.id')==8) {
			//User overall stage number and ordinal
			$overallNumber = (int) filter_var(session('result.overall.rating'), FILTER_SANITIZE_NUMBER_INT);
			$infrastructureNumber =  (int) filter_var(session('result.infrastructure.rating'), FILTER_SANITIZE_NUMBER_INT);
			$intelligenceNumber =  (int) filter_var(session('result.intelligence.rating'), FILTER_SANITIZE_NUMBER_INT);
			$operationsNumber =  (int) filter_var(session('result.operations.rating'), FILTER_SANITIZE_NUMBER_INT);		
			

			$vars['introduction'] = trans(session('product.alias').'.introduction',
				[
					'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
					'image'=>asset('images/tools/8/descriptions'.session('locale').'.png'),
				]
			);

			$customCopy = '';

			//overall
			$rating = session('result.overall.rating');
			$settings = array(
				'back_image'=>asset('images/tools/8/comparisonbg'.session('localeUrl').'.png?id=1'),
				'back_image_width'=> 570,
				'back_image_height'=> 320,
				'pad_top'=>45,
				'pad_right'=>0,
				'pad_bottom'=>23,
				'pad_left'=>114,
				'back_colour' => 'none',
				'stroke_colour' => 'none',
				'back_stroke_width' => 0, 'back_stroke_colour' => 'none',
				'show_axes' => false,
				'axis_max_h' => 30,
				'axis_min_h' => 0,
				'axis_stroke_width' => 1,
				'axis_colour' => '#efefef',
				'axis_text_colour' => '#999',
				'axis_overlap' => 2,
				'axis_font' => 'Frutiger Neue LT W1G', 'axis_font_size' => 12,
				'bar_space' => 20,
				'group_space' => 1,
				'grid_colour' => 'none',
				'show_data_labels' => false,
				'data_label_colour' => 'white',
				'data_label_font_size' => 14,
				'data_label_outline_thickness' => 1,
				'data_label_back_colour' => 'rgba(0,0,0,0.2)',
				'data_label_space' => '6',
				'label_colour' => '#000',

				'link_base' => '/',
				'link_target' => '_top',
				'minimum_grid_spacing' => 20,
				'structured_data' => true,
				'structure' => [
					'key' => 'label',
					'value' => 'score',
					'colour' => 'colour'
				]
			);

			$base = config('baseline_'.session('product.id').'.overall');
			$comparisons = ['industry'];
			
			$vertical_base = $base['baseline'];
			$verticals = [
				'banking-other-financial-services'=>'banking &amp; other financial services',
				'insurance'=>'insurance',
				'retail-trade'=>'retail trade',
				'wholesale-trade'=>'wholesale trade',
				'business-professional-services'=>'business/professional services',
				'software-and-it-services'=>'software and it services',
				'telecoms'=>'telecoms',
				'media'=>'media',
				'manufacturing'=>'manufacturing',
				'transportation'=>'transportation',
				'utilities-oil-gas'=>'utilities &amp; oil/gas',
				'private-education'=>'private education',
				'private-healthcare-service-providers'=>'private healthcare service providers'
			];
			if(collect($verticals)->contains(strtolower(session('user.extra.industry')))){
				$vertical_base = $base['benchmark-vertical-'.array_search(strtolower(session('user.extra.industry')), $verticals)];
			}

			$organisation_base = $base['baseline'];
			$orgsizes = ['500-to-999'=>'500 to 999','1000-to-4999'=>'1,000 to 4,999','5000+'=>'5,000 or more'];
			if(collect($orgsizes)->contains(session('user.extra.company_size'))){
				$comparisons[] = 'company';
				$organisation_base = $base['benchmark-size-'.array_search(session('user.extra.company_size'), $orgsizes)];
			}

			$geographic_base = $base['baseline'];
			$countries = ['en'=>'United Kingdom','fr'=>'France','de'=>'Germany'];
			if(collect($countries)->contains(session('user.country'))){
				$comparisons[] = 'country';
				$geographic_base = $base['benchmark-country-'.array_search(session('user.country'), $countries)];
			}
			$comparisons = collect($comparisons);

			
			//Mean Calculation for user
			$user_score = 0;
			$actual_score = session('result.overall.score');
			switch (session('result.overall.rating')) {
				case 'stage1':
					$user_score = (($actual_score - 9)*10)/18;
					break;
				case 'stage2':
					$user_score = ((($actual_score - 27)*10)/6)+10;
					break;
				case 'stage3':
					$user_score = ((($actual_score - 33)*10)/12)+20;
					break;
			}
			if($user_score<0.5){
				$user_score = 0.5;
			}
			if($user_score>9.5 && $user_score<10){
				$user_score = 9.5;
			}
			if($user_score>=10 && $user_score<10.5){
				$user_score = 10.5;
			}
			if($user_score>19.5 && $user_score<20){
				$user_score = 19.5;
			}
			if($user_score>=20 && $user_score<20.5){
				$user_score = 20.5;
			}

			$values = [];
			$graphbg = 'comparisonbg'.session('locale');
			$graphHeight = 320;

			if($comparisons->count()==3){
				$values[] = [
					'label' => 'Geographic Region',
		 			'score' => $geographic_base,
		 			'colour' => '#9E3D91'
				];
				$values[] = [
					'label' => 'Organizasion Size',
		 			'score' => $organisation_base,
		 			'colour' => '#9E3D91'
				];
				$values[] = [
					'label' => 'Industry',
		 			'score' => $vertical_base,
		 			'colour' => '#9E3D91'
				];
			}
			if($comparisons->count()==2 && $comparisons->contains('country')){
				$values[] = [
					'label' => 'Geographic Region',
		 			'score' => $geographic_base,
		 			'colour' => '#9E3D91'
				];
				$values[] = [
					'label' => 'Industry',
		 			'score' => $vertical_base,
		 			'colour' => '#9E3D91'
				];
				$graphHeight = 270;
				$graphbg = 'comparisonbg_industry_geography'.session('locale');
			}
			if($comparisons->count()==2 && $comparisons->contains('company')){
				$values[] = [
					'label' => 'Organizasion Size',
		 			'score' => $organisation_base,
		 			'colour' => '#9E3D91'
				];
				$values[] = [
					'label' => 'Industry',
		 			'score' => $vertical_base,
		 			'colour' => '#9E3D91'
				];
				$graphHeight = 270;
				$graphbg = 'comparisonbg_industry_company'.session('locale');
			}
			if($comparisons->count()==1){
				$values[] = [
					'label' => 'Industry',
		 			'score' => $vertical_base,
		 			'colour' => '#9E3D91'
				];
				$graphHeight = 220;
				$graphbg = 'comparisonbg_industry'.session('locale');
			}

			$values[] = [
					'label' => 'Peer Overall Cloud Adoption',
		 			'score' => $base['baseline'],
		 			'colour' => '#9E3D91'
				];
			$values[] = [
					'label' => 'Your Overall Cloud Adoption',
		 			'score' => $user_score,
		 			'colour' => '#1A7ABB'
				];

			$settings['back_image'] = asset('images/tools/8/'.$graphbg.'.png');
			$settings['back_image_height'] = $graphHeight;

			$graph = new \SVGGraph(570, $graphHeight,$settings);
			$colours = array(array('#9E3D91'), array('#1A7ABB'));
			$graph->colours = $colours;
			$graph->Values($values);
			$graph = $graph->Fetch('HorizontalBarGraph',false);

			$customCopy.= trans(session('product.alias').'.overallintro',
				[
					'image'=>asset('/images/tools/8/graph'.$rating.session('locale').'.png'),
					'icon'=>asset('/images/tools/8/overallicon.png'),
				]
			);

			$customCopy.= trans(session('product.alias').'.overall'.$rating,
				[
					'position'=>trans(session('product.alias').'.'.$rating),
					'stage'=>$overallNumber,
				]
			);

			$customCopy.= trans(session('product.alias').'.overallgraph',
				[
					'graph'=>$graph,
				]
			);

			$customCopy.= trans(session('product.alias').'.overalloutro');

			//Infrastructure

			$customCopy.= trans(session('product.alias').'.infrastructureintro',
				[
					'icon'=>asset('/images/tools/8/infrastructureicon.png')
				]
			);

			$customCopy.= trans(session('product.alias').'.infrastructure-'.$infrastructureNumber.'-'.$rating);

			//infrastructure graph
			$settings['bar_space'] = 10;
			$settings['back_image'] = asset('images/tools/8/comparison_infrastructure'.session('locale').'.png');
			$settings['back_image_height'] = 138;
			$settings['axis_max_h'] = 30;

			$graphinfrastructure = new \SVGGraph(570, 138,$settings);
			$base = config('baseline_'.session('product.id').'.infrastructure');

			$user_score = session('result.infrastructure.score');
			switch (session('result.infrastructure.rating')) {
				case 'stage1':
					$user_score = (($user_score - 3)*10)/6;
					break;
				case 'stage2':
					$user_score = ((($user_score - 9)*10)/3)+10;
					break;
				case 'stage3':
					$user_score = ((($user_score - 11)*10)/4)+20;
					break;
			}
			if($user_score<0.5){
				$user_score = 0.5;
			}
			if($user_score>9.5 && $user_score<10){
				$user_score = 9.5;
			}
			if($user_score>=10 && $user_score<10.5){
				$user_score = 10.5;
			}
			if($user_score>19.5 && $user_score<20){
				$user_score = 19.5;
			}
			if($user_score>=20 && $user_score<20.5){
				$user_score = 20.5;
			}

			 $values = array(
			 	array(
			 		'label' => 'Infrastructure Performance',
			 		'score' => $base['baseline'],
			 		'colour' => '#9E3D91'
			 	),
			 	array(
			 		'label' => 'User Infrastructure Performance',
			 		'score' => $user_score,
			 		'colour' => '#1A7ABB'
			 	),
			 );

			$graphinfrastructure->colours = $colours;
			$graphinfrastructure->Values($values);
			$graphinfrastructure = $graphinfrastructure->Fetch('HorizontalGroupedBarGraph',false);
			$customCopy.= trans(session('product.alias').'.infrastructuregraph',
				[
					'graph' => $graphinfrastructure,
				]
			);

			
			$q2score = $this->getQuestionScoreNew(2, 'infrastructure', 2);
			$customCopy.= trans(session('product.alias').'.infrastructure-'.$overallNumber.'-q2-'.$q2score);

			$q3score = $this->getQuestionScoreNew(3, 'infrastructure', 3);
			$customCopy.= trans(session('product.alias').'.infrastructure-'.$overallNumber.'-q3-'.$q3score);

			$customCopy.= '<div class="pb"></div>';

			//Intelligence
			$customCopy.= trans(session('product.alias').'.intelligenceintro',
				[
					'icon'=>asset('/images/tools/8/intelligenceicon.png')
				]
			);

			$customCopy.= trans(session('product.alias').'.intelligence-'.$intelligenceNumber.'-'.$rating);

			//intelligence graph
			$settings['back_image'] = asset('images/tools/8/comparison_intelligence'.session('locale').'.png');
			$settings['back_image_height'] = 138;
			$settings['axis_max_h'] = 30;

			$graphintelligence = new \SVGGraph(570, 138,$settings);
			$base = config('baseline_'.session('product.id').'.intelligence');

			$user_score = session('result.intelligence.score');
			switch (session('result.intelligence.rating')) {
				case 'stage1':
					$user_score = (($user_score - 3)*10)/6;
					break;
				case 'stage2':
					$user_score = ((($user_score - 9)*10)/3)+10;
					break;
				case 'stage3':
					$user_score = ((($user_score - 11)*10)/4)+20;
					break;
			}
			if($user_score<0.5){
				$user_score = 0.5;
			}
			if($user_score>9.5 && $user_score<10){
				$user_score = 9.5;
			}
			if($user_score>=10 && $user_score<10.5){
				$user_score = 10.5;
			}
			if($user_score>19.5 && $user_score<20){
				$user_score = 19.5;
			}
			if($user_score>=20 && $user_score<20.5){
				$user_score = 20.5;
			}

			$values = array(
			 	array(
			 		'label' => 'Intelligence Performance',
			 		'score' => $base['baseline'],
			 		'colour' => '#9E3D91'
			 	),
			 	array(
			 		'label' => 'User Intelligence Performance',
			 		'score' => $user_score,
			 		'colour' => '#1A7ABB'
			 	),
			 );

			$graphintelligence->colours = $colours;
			$graphintelligence->Values($values);
			$graphintelligence = $graphintelligence->Fetch('HorizontalGroupedBarGraph',false);
			$customCopy.= trans(session('product.alias').'.intelligencegraph',
				[
					'graph' => $graphintelligence,
				]
			);
			
			$q5score = $this->getQuestionScoreNew(5, 'intelligence', 2);
			$customCopy.= trans(session('product.alias').'.intelligence-'.$overallNumber.'-q5-'.$q5score);

			$q6score = $this->getQuestionScoreNew(6, 'intelligence', 3);
			$customCopy.= trans(session('product.alias').'.intelligence-'.$overallNumber.'-q6-'.$q6score);

			$customCopy.= '<div class="pb"></div>';

			//Operations
			$rating = session('result.operations.rating');
			$customCopy.= trans(session('product.alias').'.operationsintro',
				[
					'icon'=>asset('/images/tools/8/operationsicon.png')
				]
			);

			$customCopy.= trans(session('product.alias').'.operations-'.$operationsNumber.'-'.$rating);

			//operations graph
			$settings['back_image'] = asset('images/tools/8/comparison_operations'.session('locale').'.png');
			$settings['back_image_height'] = 138;
			$settings['axis_max_h'] = 30;

			$graphoperations = new \SVGGraph(570, 138,$settings);
			$base = config('baseline_'.session('product.id').'.operations');

			$user_score = session('result.operations.score');
			switch (session('result.operations.rating')) {
				case 'stage1':
					$user_score = (($user_score - 3)*10)/6;
					break;
				case 'stage2':
					$user_score = ((($user_score - 9)*10)/3)+10;
					break;
				case 'stage3':
					$user_score = ((($user_score - 11)*10)/4)+20;
					break;
			}
			if($user_score<0.5){
				$user_score = 0.5;
			}
			if($user_score>9.5 && $user_score<10){
				$user_score = 9.5;
			}
			if($user_score>=10 && $user_score<10.5){
				$user_score = 10.5;
			}
			if($user_score>19.5 && $user_score<20){
				$user_score = 19.5;
			}
			if($user_score>=20 && $user_score<20.5){
				$user_score = 20.5;
			}

			$values = array(
			 	array(
			 		'label' => 'Operations Performance',
			 		'score' => $base['baseline'],
			 		'colour' => '#9E3D91'
			 	),
			 	array(
			 		'label' => 'User Operations Performance',
			 		'score' => $user_score,
			 		'colour' => '#1A7ABB'
			 	),
			 );

			$graphoperations->colours = $colours;
			$graphoperations->Values($values);
			$graphoperations = $graphoperations->Fetch('HorizontalGroupedBarGraph',false);
			$customCopy.= trans(session('product.alias').'.operationsgraph',
				[
					'graph' => $graphoperations,
				]
			);
			
			$q8score = $this->getQuestionScoreNew(8, 'operations', 2);
			$customCopy.= trans(session('product.alias').'.operations-'.$overallNumber.'-q8-'.$q8score);

			$q9score = $this->getQuestionScoreNew(9, 'operations', 3);
			$customCopy.= trans(session('product.alias').'.operations-'.$overallNumber.'-q9-'.$q9score);

			$customCopy.= '<div class="pb"></div>';

			//Conclusion
			$customCopy.= trans(session('product.alias').'.conclusionintro',
				[
					'icon'=>asset('/images/tools/8/conclusionicon.png')
				]
			);

			$customCopy.= trans(session('product.alias').'.guidance');
			if($q3score == 1 || $q3score == 2){
				$customCopy.= trans(session('product.alias').'.guidance-q3-1-2');
			}
			if($q3score == 3 || $q3score == 4){
				$customCopy.= trans(session('product.alias').'.guidance-q3-3-4');
			}
			if($q3score == 5){
				$customCopy.= trans(session('product.alias').'.guidance-q3-5');
			}

			$customCopy.= '<div class="spacer"></div>';

			$vars['sectionCopy'] = $customCopy;
			
		}else{
			foreach (config('baseline_'.session('product.id')) as $section => $values) {
				preg_match_all('/\d+/', session('result.'.$section.'.rating'), $matches);
				$sectionRating =  (int)$matches[0][0];
				if(config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph')){
					$sectionGraph = Lava::DataTable();
					$numformat = Lava::NumberFormat([
						'suffix'         => '%'
					]);
					$sectionGraph->addColumns([
						['string', 'Stage'],
						['number', 'Your Score',$numformat],
					]);
					$sectionGraph->addRoleColumn('string', 'style');
					$sectionGraph->addRoleColumn('string', 'annotation');
					
					foreach ($values['types'] as $stage => $params) {
						$val = $params['benchmark'];
						$sectionGraph->addRow([
					      $locale == 'es' ? substr(trans(session('product.alias').'.'.$stage),0,strpos(trans(session('product.alias').'.'.$stage), ':')):trans(session('product.alias').'.'.$stage),//$stage
					      $val,
					      session('result.'.$section.'.rating')==$stage? config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'):null,
					      $val."%"
					  ]);
					}
					
					$sectionChart = Lava::ColumnChart($section.'_graph', $sectionGraph, $chartSettings);

					$newSectionGraphData = [
						'labels'=>[],
						'datasets'=>[
							[
								'fillColor' => "#6BABDB",
								'strokeColor' => "#6BABDB",
								'data' => []
							]
						]
					];
					$index = 0;
					$highlightBar = 0;
					foreach ($values['types'] as $stage => $params) {
						if(session('result.'.$section.'.rating')==$stage){
							$highlightBar = $index;
						}
						$val = $params['benchmark'];
						$newSectionGraphData['labels'][] = strpos(trans(session('product.alias').'.'.$stage), ':') !== false ? substr(trans(session('product.alias').'.'.$stage),0,strpos(trans(session('product.alias').'.'.$stage), ':')) : trans(session('product.alias').'.'.$stage);
						$newSectionGraphData['datasets'][0]['data'][] = $val;
						$index++;
					}
					$chart = $newSectionGraphData;
				}
				$extraChart = [];
				$newExtraChart = [];
				if(config('baseline_'.session('product.id').'.'.$section.'.report-settings.extra-graphs')){
					foreach (config('baseline_'.session('product.id').'.'.$section.'.report-settings.extra-graphs') as $key => $graph) {
						// $extraGraph = Lava::DataTable();
						// $graphCols = [];
						// foreach ($graph['columns'] as $colKey => $col) {
						// 	if(isset($col['format'])){
						// 		$format = Lava::$col['format']['type']($col['format']['format']);
						// 	}
						// 	$graphCols[] = [$col['type'],$col['label'], isset($col['format']) ? $format:null];
						// }
						// $extraGraph->addColumns($graphCols);

				  		// if($graph['role-columns']){
						// 	foreach ($graph['role-columns'] as $rolKey => $rol) {
						// 		$extraGraph->addRoleColumn($rol['type'], $rol['role']);
						// 	}
				  //       }
						$extraSectionGraphData = [
							'labels'=>[],
							'datasets'=>[
								[
									'fillColor' => "#6BABDB",
									'strokeColor' => "#6BABDB",
									'data' => []
								]
							]
						];
						$index = 0;
						$highlightBar = 0;
						foreach (config('baseline_'.session('product.id').'.overall.types') as $extraSection => $extraSettings) {
							foreach (session('questions.'.$graph['question']['section'].'.pages') as $pKey => $page) {
								foreach ($page['questions'] as $qKey => $question) {
									if($qKey==$graph['question']['question']){
										$selected = explode('|', $question['selected']);
										$userAnswer = $selected[0];
										$userAnswer = strtolower(str_replace(" ", "-", $userAnswer));
									}
								}
							}
							$val = $extraSettings[$graph['data']][$userAnswer];
							$extraSectionGraphData['labels'][] = trans(session('product.alias').'.'.$extraSection);//$extraSection
							$extraSectionGraphData['datasets'][0]['data'][] = $val;

						    /*$extraGraph->addRow([
						      trans(session('product.alias').'.'.$extraSection),//$extraSection
						      $val,
						      session('result.'.$section.'.rating')==$extraSection? config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'):null,
						      $val."%"
						  ]);*/
						}
						
						//$extraChart[$section.'_'.$key.'_graph'] = Lava::ColumnChart($section.'_'.$key.'_graph', $extraGraph, $chartSettings);
						$newExtraChart[$section.'_'.$key.'_graph'] = $extraSectionGraphData;
					}
				}
				$vars['sections'][$section] = [
					'title' => trans(session('product.alias').'.'.$section.'.title'),
					'hidetitle' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-title'),
					'hidetitlebar' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-title-bar'),
					'hiderating' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-rating',false),
					'introduction' => Lang::has(session('product.alias').'.'.$section.'.introduction') ? trans(session('product.alias').'.'.$section.'.introduction',[
						'result'=>trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
						'benchmark'=>config('baseline_'.session('product.id').'.'.$section.'.types.'.session('result.'.$section.'.rating').'.benchmark')
					]):false,
					'seckey' => $section,
					'pageimage' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.pageimage') ? trans(session('product.alias').'.'.$section.'.pageimage'):false,
					'color' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'),
					'designline' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.designline'),
					//'graph' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph'),
					'chart' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph') ? json_encode($chart) : false,
					'graph-title' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph-title'),
					'extraCharts' => !empty($extraChart) ? $extraChart: false,
					'newExtraChart' => !empty($newExtraChart) ? $newExtraChart: false,
					'pb' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.pb'),
					'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
					'sectionRating' => $sectionRating,
					'score' => session('result.'.$section.'.score'),
					'paragraph' => trans(session('product.alias').'.'.$section.'.'.session('result.'.$section.'.rating')),
				];
				/*if(strlen($vars['sections'][$section]['paragraph']) > 400){
					$para = $vars['sections'][$section]['paragraph'];
					$lastP = strrpos ($para, '</p>', 400);
					$para = substr_replace($para, '<div class="pb"></div>', $lastP+4, 0);
					dd($para);
				}*/
				

				$headervars['page'.$count] = !$vars['sections'][$section]['hidetitlebar'] ? trans(session('product.alias').'.'.$section.'.title') : '';
				$headervars['page_offset'] = config('baseline_'.session('product.id').'.overall.report-settings.page-offset',1);
				$count++;
			}

			$vars['introduction'] = Lang::has(session('product.alias').'.introduction') ? trans(session('product.alias').'.introduction',
				[
					'result'=>trans(session('product.alias').'.'.session('result.overall.rating')),
					'stage'=>session('result.overall.rating'),
					'stagegraphic' => asset('images/tools/'.session('product.id').'/'.session('result.overall.rating').'.svg')
				]) : false;
			$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
			$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
			$vars['questions'] = session('questions');
		}
		

		//return $vars['sections'];
		//dd(session('result'));
		if($request->query('browser')){
			return view('tool.'.session('template').'.report.report',$vars);
		}
		$margintop = 25;
		if(null !== config('baseline_'.session('product.id').'.overall.report-settings.margin-top')){
			$margintop = config('baseline_'.session('product.id').'.overall.report-settings.margin-top');
		}
		$headerspacing = 0;
		if(null !== config('baseline_'.session('product.id').'.overall.report-settings.header-spacing')){
			$headerspacing = config('baseline_'.session('product.id').'.overall.report-settings.header-spacing');
		}

		$pdf = PDF::loadView('tool.'.session('template').'.report.report',$vars)
		->setOption('margin-top', $margintop)
		->setOption('margin-left', 0)
		->setOption('margin-right', 0)
		->setOption('window-status','chartrendered')
		->setOption('header-html',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/header')
		->setOption('header-spacing',$headerspacing)
		->setOption('footer-html',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/footer')
		->setOption('footer-spacing',2)
		->setOption('replace', $headervars);
		if (session('product.id')==8){
        		//$pdf->setOption('cover',session('url').'/'.session('localeUrl').'template/'.session('template').'/report/cover');
			$timeStamp = time();
			$pdf->save(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf');



			$merge = new \LynX39\LaraPdfMerger\PdfManage;
			$locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

			$merge->addPDF(storage_path().'/ntt_report_start'.$locale .'.pdf', 'all');
			$merge->addPDF(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf', 'all');

			$merge->merge('browser', storage_path().'/reports/ntt-sdwan-report-'.$timeStamp.'.pdf', 'P');
			if(File::exists(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf')){
				File::delete(storage_path().'/ntt-sdwan-report-'.$timeStamp.'.pdf');
			}
			if(File::exists(storage_path().'/ntt-sdwan-report-cover-'.$timeStamp.'.pdf')){
				File::delete(storage_path().'/ntt-sdwan-report-cover-'.$timeStamp.'.pdf');
			}
		} elseif (session('product.id')==2){
			$timeStamp = time();
			$pdf->save(storage_path().'/fireeye-report-'.$timeStamp.'.pdf');
			$merge = new \LynX39\LaraPdfMerger\PdfManage;
			$locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

			$merge->addPDF(storage_path().'/fireeye_report_start'.$locale .'.pdf', 'all');
			$merge->addPDF(storage_path().'/fireeye-report-'.$timeStamp.'.pdf', 'all');
			$merge->addPDF(storage_path().'/fireeye_report_end'.$locale .'.pdf', 'all');

			$merge->merge('browser', storage_path().'/fireeye-report-'.$timeStamp.'_final.pdf', 'P');
			if(File::exists(storage_path().'/fireeye-report-'.$timeStamp.'.pdf')){
				File::delete(storage_path().'/fireeye-report-'.$timeStamp.'.pdf');
			}
		}else{
			return $pdf->inline('invoice.pdf');
		}
	}
	private function getQuestionScore($q, $section,$type='q'){
		$selected = session('questions.'.$section.'.pages.page'.$q.'.questions.'.$type.$q.'.selected');
		$total = 0;
		if(is_array($selected)){
			foreach ($selected as $select) {
				$select = explode("|", $select);
				$total += $select[1];
			}
		}else{
			$select = explode("|", $selected);
			$total = $select[1];
		}
		return $total;
	}

	private function getQuestionScoreNew($q, $section,$page=false,$type='q'){
		$page = $page == false ? $q : $page;
		$selected = session('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.selected');
		if(count($selected)>1){
			$calc = session()->has('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.calc') ? session('questions.'.$section.'.pages.page'.$page.'.questions.'.$type.$q.'.calc') : false;
			if($calc){
				if($calc['type']=='average'){
					$ave = [];
					foreach ($selected as $select) {
						$ave[]=$select['value'];
					}
					$val = array_sum($ave) / count($ave);
				}elseif($calc['type']=='normalize'){
					$norm = 0;
					foreach ($selected as $select) {
						$norm+=$select['value'];
					}
					$val = ($norm/$details['calc']['value'])*count($details['selected']);
				}
			}
		}else{
			$val = $selected[0]['value'];
		}
		return $val;
	}

	private function getAnswerText($q, $section,$type='q'){
		$selected = session('questions.'.$section.'.pages.page'.$q.'.questions.'.$type.$q.'.selected');
		$text = 0;
		if(is_array($selected)){
			$text = [];
			foreach ($selected as $select) {
				$select = explode("|", $select);
				$text[] = $select[0];
			}
		}else{
			$select = explode("|", $selected);
			$text = $select[0];
		}
		return $text;
	}
}
