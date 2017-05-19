<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Lang;
use Lava;
use PDF;

trait GenerateReportTrait {

	public function wkhtml($assessment_id, $name)
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
					$vars['sections'][] = [
						'title' => trans(session('product.alias').'.'.$section.'.title'),
						'hidetitle' => config('baseline_'.session('product.id').'.'.$section.'.report-settings.hide-title'),
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
					$headervars['page'.$count] = trans(session('product.alias').'.'.$section.'.title');
					$headervars['page_offest'] = 1;
					$count++;
				}

				$vars['introduction'] = Lang::has(session('product.alias').'.introduction') ? trans(session('product.alias').'.introduction',
				[
					'result'=>trans(session('product.alias').'.'.session('result.overall.rating'))
				]) : false;
				$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
				$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
				$vars['questions'] = session('questions');
			}
			    /*$vars['introduction'] = Lang::has(session('product.alias').'.introduction') ? trans(session('product.alias').'.introduction',['result'=>trans(session('product.alias').'.'.session('result.overall.rating'))]) : false;
			    $vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
			    $vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
			    $vars['questions'] = session('questions');*/

		//return $vars['sections'];
		/*echo "<pre>";
		dd(session('questions'));*/
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
		if(session('product.id')==2){
			$pdf->save(storage_path().'/'.$assessment_id.'_'.$name.'.pdf');

			$merge = new \LynX39\LaraPdfMerger\PDFManage;
			$locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

			$merge->addPDF(storage_path().'/fireeye_report_start'.$locale .'.pdf', 'all');
			$merge->addPDF(storage_path().'/'.$assessment_id.'_'.$name.'.pdf', 'all');
			$merge->addPDF(storage_path().'/fireeye_report_end'.$locale .'.pdf', 'all');

			$merge->merge('file', storage_path().'/reports/'.$assessment_id.'_'.$name.'.pdf', 'P');
			if(File::exists(storage_path().'/'.$assessment_id.'_'.$name.'.pdf')){
				File::delete(storage_path().'/'.$assessment_id.'_'.$name.'.pdf');
			}
		}elseif(session('product.id')==5){
			$pdf->save(storage_path().'/'.$assessment_id.'_'.$name.'.pdf');

			$merge = new \LynX39\LaraPdfMerger\PDFManage;
			$locale = App::getLocale() == 'en' ? '' : '_'.App::getLocale();

			$merge->addPDF(storage_path().'/splunk_report_start'.$locale .'.pdf', 'all');
			$merge->addPDF(storage_path().'/'.$assessment_id.'_'.$name.'.pdf', 'all');

			$merge->merge('file', storage_path().'/reports/'.$assessment_id.'_'.$name.'.pdf', 'P');
			if(File::exists(storage_path().'/'.$assessment_id.'_'.$name.'.pdf')){
				File::delete(storage_path().'/'.$assessment_id.'_'.$name.'.pdf');
			}
		}else{
			return $pdf->save(storage_path().'/reports/'.$assessment_id.'_'.$name.'.pdf');
		}

	}
}