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
        $stocksTable = Lava::DataTable();
        $stocksTable->addColumns([
			['string', 'Stage'],
			['number', 'Your Score'],
		]);
		$stocksTable->addRoleColumn('string', 'style');
		$stocksTable->addRoleColumn('string', 'annotation');
		$stage = ['Time to act','Time to commit','Time to invest','Time to refine','Time to accelorate'];
		for ($a = 0; $a < 5; $a++) {
			$val = rand(0,100);
		    $stocksTable->addRow([
		      $stage[$a], $val, $a==2? '#283558':null, $val
		    ]);
		}
		$chart = Lava::ColumnChart('Stocks', $stocksTable, [
			'title' => null,
			// 'backgroundColor' => 'magenta',
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
		    /*'isStacked' => true,*/
		    'bar'  => [
		    	'groupWidth'=> '70%'

		    ] //As a percent, "33%"
		]);
		$vars = [];
		$count = 0;
		$titles = [];
		foreach (config('baseline_'.session('product.id')) as $section => $values) {
			$vars['sections'][] = [
				'title' => trans(session('product.alias').'.'.$section.'.title'),
				'hidetitle' => Lang::has(session('product.alias').'.'.$section.'.hidetitle') ? true:false,
				'seckey' => $section,
				'image' => Lang::has(session('product.alias').'.'.$section.'.image') ? trans(session('product.alias').'.'.$section.'.image'):false,
				'imagefloat' => isset($values['floatimage']) ? $values['floatimage']:'',
				'graph' => Lang::has(session('product.alias').'.'.$section.'.graph') ? trans(session('product.alias').'.'.$section.'.graph'):false,
				'pb' => Lang::has(session('product.alias').'.'.$section.'.pb') ? true:false,
				'rating' => trans(session('product.alias').'.'.session('result.'.$section.'.rating')),
				'score' => session('result.'.$section.'.score'),
				'paragraph' => trans(session('product.alias').'.'.$section.'.'.session('result.'.$section.'.rating'))
			];
			$titles['page'.$count] = trans(session('product.alias').'.'.$section.'.title');
			$count++;
		}
		$vars['introImage'] = trans(session('product.alias').'.introduction-image');
		$vars['introRating'] = trans(session('product.alias').'.'.session('result.overall.rating'));

		$vars['introChart'] = false;

		//return $vars['sections'];
		//return ('tool.default.report.report',$vars);

        $pdf = PDF::loadView('tool.default.report.report',$vars)->setOption('margin-top', 25)->setOption('margin-left', 0)->setOption('margin-right', 0)->setOption('window-status','chartrendered')->setOption('header-html','http://redhat.idcgauge.net//template/default/report/header')->setOption('header-spacing',0)->setOption('footer-html','http://redhat.idcgauge.net//template/default/report/footer')->setOption('footer-spacing',2)
        	->setOption('replace', $titles);
		return $pdf->inline('invoice.pdf');
    }
}
