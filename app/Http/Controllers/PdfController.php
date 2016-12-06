<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
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
				      trans(session('product.alias').'.'.$stage),//$stage
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
					//dd();
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
		$vars['introduction'] = Lang::has(session('product.alias').'.introduction') ? trans(session('product.alias').'.introduction',['result'=>trans(session('product.alias').'.'.session('result.'.$section.'.rating'))]) : false;
		$vars['introImage'] = Lang::has(session('product.alias').'.introduction-image') ? trans(session('product.alias').'.introduction-image') : false;
		$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));
		$vars['questions'] = session('questions');

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
		return $pdf->inline('invoice.pdf');
    }
}
