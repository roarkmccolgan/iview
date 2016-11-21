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
        //return view('tool.default.report');
        //$html = View::make('tool.default.report', [])->render();
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
		foreach (config('baseline_'.session('product.id')) as $section => $values) {
			if(Lang::has(session('product.alias').'.'.$section.'.graph')){
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
				      /*trans(session('product.alias').'.'.$stage)*/$stage,
				      $val,
				      session('result.'.$section.'.rating')==$stage? trans(session('product.alias').'.'.$section.'.color'):null,
				      $val."%"
				    ]);
				}
				
				$sectionChart = Lava::ColumnChart($section.'_graph', $sectionGraph, $chartSettings);
			}
			$vars['sections'][] = [
				'title' => trans(session('product.alias').'.'.$section.'.title'),
				'hidetitle' => Lang::has(session('product.alias').'.'.$section.'.hidetitle') ? true:false,
				'introduction' => Lang::has(session('product.alias').'.'.$section.'.introduction') ? trans(session('product.alias').'.'.$section.'.introduction',['result'=>trans(session('product.alias').'.'.session('result.'.$section.'.rating'))]):false,
				'seckey' => $section,
				'image' => Lang::has(session('product.alias').'.'.$section.'.image') ? trans(session('product.alias').'.'.$section.'.image'):false,
				'pageimage' => Lang::has(session('product.alias').'.'.$section.'.pageimage') ? trans(session('product.alias').'.'.$section.'.pageimage'):false,
				'color' => Lang::has(session('product.alias').'.'.$section.'.color') ? trans(session('product.alias').'.'.$section.'.color'):false,
				'designline' => Lang::has(session('product.alias').'.'.$section.'.designline') ? trans(session('product.alias').'.'.$section.'.designline'):false,
				'imagefloat' => isset($values['floatimage']) ? $values['floatimage']:'',
				'graph' => Lang::has(session('product.alias').'.'.$section.'.graph') ? trans(session('product.alias').'.'.$section.'.graph'):false,
				'pb' => Lang::has(session('product.alias').'.'.$section.'.pb') ? true:false,
				'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
				'score' => session('result.'.$section.'.score'),
				'paragraph' => trans(session('product.alias').'.'.$section.'.'.session('result.'.$section.'.rating')),

			];
			$headervars['page'.$count] = trans(session('product.alias').'.'.$section.'.title');
			$headervars['page_offest'] = 1;
			$count++;
		}
		$vars['introImage'] = trans(session('product.alias').'.introduction-image');
		$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));

		//return $vars['sections'];
		//return view('tool.default.report.report',$vars);

        $pdf = PDF::loadView('tool.default.report.report',$vars)->setOption('margin-top', 25)->setOption('margin-left', 0)->setOption('margin-right', 0)->setOption('window-status','chartrendered')->setOption('header-html','http://redhat.idcready.net//template/default/report/header')->setOption('header-spacing',0)->setOption('footer-html','http://redhat.idcready.net//template/default/report/footer')->setOption('footer-spacing',2)
        	->setOption('replace', $headervars);
		return $pdf->inline('invoice.pdf');
    }
}
