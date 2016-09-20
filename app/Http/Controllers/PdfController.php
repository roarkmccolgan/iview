<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
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
        $pdf = PDF::loadView('tool.default.report.report')->setOption('margin-top', 0)->setOption('margin-left', 0)->setOption('margin-right', 0);
		return $pdf->inline('invoice.pdf');
    }
}
