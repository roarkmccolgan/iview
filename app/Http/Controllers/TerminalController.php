<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Analytics;
use Assessment;
use Carbon\Carbon;
use JavaScript;

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
        $tool->load('trackers','urls');

        return view('admin.dashboard', compact('tool'));
    }
}
