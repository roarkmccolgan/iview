<?php

namespace App\Http\Controllers;

use App\Charts\sageCharts;
use App\Http\Requests;
use Illuminate\Http\Request;
use PDF;

//use Contour
//
class TestController extends Controller
{
    public function chart()
    {
        $chart = new sageCharts;
        $chart->loader = false;
        //dd($chart);
        $chart->dataset('Sample', 'line', [100, 65, 84, 45, 90]);
        // Additional logic depending on the chart approach
        //return view('test.chart', ['chart' => $chart]); exit();
        $pdf = PDF::loadView('test.chart', ['chart' => $chart])->setOption('javascript-delay', 2000);

        return $pdf->inline('invoice.pdf');
        //return PDF::loadFile('http://www.goat1000.com/svggraph.php')->setOption('javascript-delay',10000)->setOption('load-error-handling','ignore')->inline('github.pdf');
    }
}
