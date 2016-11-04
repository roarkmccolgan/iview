<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Analytics;
use Assessment;
use Carbon\Carbon;
use Illuminate\Support\Facades\Config;
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
        Carbon::setToStringFormat('m-d-Y');
        $startDate = Carbon::now()->subMonth();
        $endDate = Carbon::now();

        $tool = $request->get('product');
        $tool->load('trackers','urls');

        Analytics::setSiteId('ga:'.$tool->gapropertyid);

        $terminalQueries = Config::get('terminal.queries');

        $analyticsResults = [];

        foreach ($terminalQueries as $key => $query) {
            $other = [];
            if ($query['dimensions']) {
                $other['dimensions'] = $query['dimensions'];
            }
            if ($query['sort']) {
                $other['sort'] = $query['sort'];
            }
            if ($query['max-results']) {
                $other['max-results'] = $query['max-results'];
            }
            if ($query['filters']) {
                $other['filters'] = $query['filters'];
            }
            
            $$key = Analytics::performQuery($startDate, $endDate, $query['metrics'], $other);

            $analyticsResults[$key] = $$key->getRows();
        }

        $data = [
            'tool' => $tool,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'analyticsResults' => $analyticsResults,
        ];

        JavaScript::put([
            'total_results' => $analyticsResults['total_results'],
            'daily_results' => $analyticsResults['daily_results'],
            'country_results' => $analyticsResults['country_results'],
            'device_results' => $analyticsResults['device_results'],
            'referrers_results' => $analyticsResults['referrers_results'],
            'event_results' => $analyticsResults['event_results'],
        ]);

        return view('admin.dashboard', $data);
    }
}
