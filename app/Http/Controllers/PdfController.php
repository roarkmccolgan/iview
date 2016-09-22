<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use Lava;
use App\Http\Requests;

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
		$color = ['grey','blue','purple','orange','pink'];
		for ($a = 1; $a < 5; $a++) {
			$val = rand(0,100);
		    $stocksTable->addRow([
		      'Stage '.$a, $val, $a==2? '#283558':null
		    ]);
		}
		$chart = Lava::ColumnChart('Stocks', $stocksTable, [
			'title' => 'Overall Results',
			'backgroundColor' => 'magenta',
			'colors' => ['#68aadd'],
			'chartArea' => [['width'=>'100%', 'height'=>'80%']],
			'events' => [
		        'ready' => 'chartReady'
		    ],
		    'isStacked' => true,
		]);

        $pdf = PDF::loadView('tool.default.report.report')->setOption('margin-top', 0)->setOption('margin-left', 0)->setOption('margin-right', 0)->setOption('window-status','chartrendered');
		return $pdf->inline('invoice.pdf');
		//return view('tool.default.report.report');
    }
}
