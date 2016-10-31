<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Analytics;
use Assessment;
use Carbon\Carbon;

class TerminalController extends Controller
{
    /**
     * Show the product dashboard
     *
     * @return Response
     */
    public function dashboard(Request $request)
    {
        $tool = $request->get('product');
        return view('admin.dashboard', compact('tool'));
    }

    /**
     * Show the product assessments
     *
     * @return Response
     */
    public function showAssessments(Request $request)
    {
    	$tool = $request->get('product');
        $tool->load('assessments');
        //return $tool;
        return view('admin.assessments', compact('tool'));
    }
}
