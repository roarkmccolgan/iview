<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;
use Lava;
use PDF;

class PdfController extends Controller
{
    /**
     * List all iViews
     * @return view
     */
    public function wkhtml()
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
		
		if(session('product.id')==5){
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
			
			$vars['summary'] = trans(session('product.alias').'.summary');

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
				]
			);

			$sectionCopy = '';
			$customCopy = '';

			//overall
			$value = session('result.overall.score');

			$q1 = $this->getQuestionScore(1, 'gdpr');
			$q7 = $this->getQuestionScore(7, 'gdpr');

			$customCopy.= trans(session('product.alias').'.overallintro');
			//stage 1
			if($q1+$q7 < 5){
				$customCopy.= trans(session('product.alias').'.overallstage1');
				if($q1==1 || $q1==2){
					$customCopy.= trans(session('product.alias').'.overallstage1_q1aorb');
				}
				if($q7==4){
					$customCopy.= trans(session('product.alias').'.overallstage1_q9a');
				}
				if($q7==3){
					$customCopy.= trans(session('product.alias').'.overallstage1_q9b');
				}
			}

			//stage 2
			if($q1+$q7 == 5 || $q1+$q7 == 6 || $q1+$q7 == 7){
				$customCopy.= trans(session('product.alias').'.overallstage2');
				if($q1==3 || $q1==4){
					$customCopy.= trans(session('product.alias').'.overallstage2_q2cord');
				}
				if($q7==4){
					$customCopy.= trans(session('product.alias').'.overallstage2_q9a');
				}
				if($q7==3){
					$customCopy.= trans(session('product.alias').'.overallstage2_q9b');
				}
			}

			//stage 4
			if($q1+$q7 > 7){
				$customCopy.= trans(session('product.alias').'.overallstage4');

				if($q1==5){
					$customCopy.= trans(session('product.alias').'.overallstage4_q2eforg');
				}
				if($q7==4){
					$customCopy.= trans(session('product.alias').'.overallstage4_q9a');
				}
				if($q7==3){
					$customCopy.= trans(session('product.alias').'.overallstage4_q9b');
				}
			}
			$customCopy.= '<div class="pb"></div>';
			$customCopy.= '<div class="spacer"></div>';

			//Data Awareness
			$q4 = $this->getQuestionScore(4, 'gdpr');
			$q5 = $this->getQuestionScore(5, 'gdpr');

			$customCopy.= trans(session('product.alias').'.dataawarenessintro');

			if($q4+$q5 < 20){
				$customCopy.= trans(session('product.alias').'.dataawarenessstage1');

				if($q4==1 || $q4==2){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage1_q5aorb');
				}
				if($q4==3 || $q4==4){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage1_q5cord');
				}
				if($q5<18){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage1_q6lt18');
				}
				if($q5>18 && $q5<=24){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage1_q618to24');
				}
			}

			if($q4+$q5 > 20 && $q4+$q5 <= 25){
				$customCopy.= trans(session('product.alias').'.dataawarenessstage2');

				if($q4==1 || $q4==2){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage2_q5aorb');
				}
				if($q4==3 || $q4==4){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage2_q5cord');
				}
				if($q4==5){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage2_q5e');
				}
				if($q5>18 && $q5<=24){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage2_q618to24');
				}
				if($q5>24){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage2_q6gt24');
				}
			}

			if($q4+$q5 > 25){
				$customCopy.= trans(session('product.alias').'.dataawarenessstage4');

				if($q4==3 || $q4==4){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage4_q5cord');
				}
				if($q4==5){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage4_q5e');
				}
				if($q5>24){
					$customCopy.= trans(session('product.alias').'.dataawarenessstage4_q6gt24');
				}
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

				if($q6==2){
					$customCopy.= trans(session('product.alias').'.riskstage1_q82');
				}
				if($q6==3){
					$customCopy.= trans(session('product.alias').'.riskstage1_q83');
				}
				if($q8<15){
					$customCopy.= trans(session('product.alias').'.riskstage1_q10lt15');
				}
				if($q8>28){
					$customCopy.= trans(session('product.alias').'.riskstage1_q10gt28');
				}

				if($q9==2){
					$customCopy.= trans(session('product.alias').'.riskstage1_q112');
				}
				if($q9==3){
					$customCopy.= trans(session('product.alias').'.riskstage1_q113');
				}
				if($q9==4){
					$customCopy.= trans(session('product.alias').'.riskstage1_q114');
				}
				
			}

			if($q6+$q9 > 14 && $q6+$q9 <= 17){
				$customCopy.= trans(session('product.alias').'.riskstage2');

				/*if($q6==9 || $q6==10){
					$customCopy.= trans(session('product.alias').'.riskstage2_q79or10');
				}
				if($q6>10){
					$customCopy.= trans(session('product.alias').'.riskstage2_q7gt10');
				}*/
				if($q6==3){
					$customCopy.= trans(session('product.alias').'.riskstage2_q83');
				}
				if($q6==4){
					$customCopy.= trans(session('product.alias').'.riskstage2_q84');
				}
				if($q8>28){
					$customCopy.= trans(session('product.alias').'.riskstage2_q10gt28');
				}
				if($q8>=15 && $q8<=27){
					$customCopy.= trans(session('product.alias').'.riskstage2_q10between15and27');
				}
				if($q9==3){
					$customCopy.= trans(session('product.alias').'.riskstage2_q113');
				}
				if($q9==4){
					$customCopy.= trans(session('product.alias').'.riskstage2_q114');
				}
			}

			if($q6+$q9 > 17){
				$customCopy.= trans(session('product.alias').'.riskstage4');

				/*if($q6==9 || $q6==10){
					$customCopy.= trans(session('product.alias').'.riskstage4_q79or10');
				}
				if($q6>10){
					$customCopy.= trans(session('product.alias').'.riskstage4_q7gt10');
				}*/
				if($q6==3){
					$customCopy.= trans(session('product.alias').'.riskstage2_q83');
				}
				if($q6==4){
					$customCopy.= trans(session('product.alias').'.riskstage2_q84');
				}

				if($q8>28){
					$customCopy.= trans(session('product.alias').'.riskstage4_q10gt28');
				}
				if($q8>=15 && $q8<=27){
					$customCopy.= trans(session('product.alias').'.riskstage4_q10between15and27');
				}
				if($q9==3){
					$customCopy.= trans(session('product.alias').'.riskstage4_q113');
				}
				if($q9==4){
					$customCopy.= trans(session('product.alias').'.riskstage4_q114');
				}
			}


			$vars['sectionCopy'] = $customCopy;
			
			$vars['summary'] = Lang::has(session('product.alias').'.summary') ? trans(session('product.alias').'.summary'): '';

			$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
			$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
			$vars['questions'] = session('questions');
		}else{
			foreach (config('baseline_'.session('product.id')) as $section => $values) {
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
				}
				$extraChart = [];
				if(config('baseline_'.session('product.id').'.'.$section.'.report-settings.extra-graphs')){
					foreach (config('baseline_'.session('product.id').'.'.$section.'.report-settings.extra-graphs') as $key => $graph) {
						$extraGraph = Lava::DataTable();
						$graphCols = [];
						foreach ($graph['columns'] as $colKey => $col) {
							if(isset($col['format'])){
								$format = Lava::$col['format']['type']($col['format']['format']);
							}
							$graphCols[] = [$col['type'],$col['label'], isset($col['format']) ? $format:null];
						}
						$extraGraph->addColumns($graphCols);

				        if($graph['role-columns']){
							foreach ($graph['role-columns'] as $rolKey => $rol) {
								$extraGraph->addRoleColumn($rol['type'], $rol['role']);
							}
				        }
						
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
						    $extraGraph->addRow([
						      trans(session('product.alias').'.'.$extraSection),//$extraSection
						      $val,
						      session('result.'.$section.'.rating')==$extraSection? config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'):null,
						      $val."%"
						    ]);
						}
						
						$extraChart[$section.'_'.$key.'_graph'] = Lava::ColumnChart($section.'_'.$key.'_graph', $extraGraph, $chartSettings);
					}
				}
				$vars['sections'][$section] = [
					'title' => trans(session('product.alias').'.'.$section.'.title'),
					'hidetitle' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-title'),
					'hidetitlebar' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-title-bar'),
					'hiderating' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-rating',false),
					'introduction' => Lang::has(session('product.alias').'.'.$section.'.introduction') ? trans(session('product.alias').'.'.$section.'.introduction',['result'=>trans(session('product.alias').'.'.session('result.'.$section.'.rating')),'benchmark'=>config('baseline_'.session('product.id').'.'.$section.'.types.'.session('result.'.$section.'.rating').'.benchmark')]):false,
					'seckey' => $section,
					'pageimage' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.pageimage') ? trans(session('product.alias').'.'.$section.'.pageimage'):false,
					'color' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.color'),
					'designline' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.designline'),
					'graph' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph'),
					'graph-title' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.graph-title'),
					'extraCharts' => !empty($extraChart) ? $extraChart: false,
					'pb' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.pb'),
					'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
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
			]) : false;
			$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
			$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
			$vars['questions'] = session('questions');
		}
		
		

		//return $vars['sections'];
		/*echo "<pre>";
		dd(session('product'));*/
		//return view('tool.'.session('template').'.report.report',$vars);
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
		return $pdf->inline('invoice.pdf');
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
}
