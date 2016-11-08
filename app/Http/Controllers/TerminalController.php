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
        $customDate = false;
        if($request->input('reporting')){
            $startDate = Carbon::createFromFormat('d-m-Y',$request->input('from'));
            $endDate = Carbon::createFromFormat('d-m-Y',$request->input('to'));
            $customDate = true;
        }

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
        foreach ($analyticsResults['utm_views'] as $key => $value) {
            foreach ($tool->trackers as $trakKey => $tracker) {
                if($tracker->code==substr($value[0], 6)){
                    if($tracker->views != $value[1]){
                        $tracker->views = $value[1];
                        $tracker->save();
                    }
                }
            }
        }
        foreach ($analyticsResults['utm_completes'] as $key => $value) {
            foreach ($tool->trackers as $trakKey => $tracker) {
                if($tracker->code==substr($value[0], 6)){
                    if($tracker->completions != $value[2]){
                        $tracker->completions = $value[2];
                        $tracker->save();
                    }
                }
            }
        }
        $daily_total = 0;
        foreach ($analyticsResults['daily_results'] as $key => $value) {
            $analyticsResults['daily_results'][$key][0] = Carbon::createFromFormat('Ymd',$value[0])->format('j');
            $daily_total+=$value[1];
        }foreach ($analyticsResults['complete_results'] as $key => $value) {
            $analyticsResults['complete_results'][$key][0] = Carbon::createFromFormat('Ymd',$value[0])->format('j');
        }

        $data = [
            'tool' => $tool,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'analyticsResults' => $analyticsResults,
            'daily_total' => $daily_total,
            'customDate' => $customDate,
        ];

        JavaScript::put([
            'total_results' => $analyticsResults['total_results'],
            'daily_results' => $analyticsResults['daily_results'],
            'country_results' => $analyticsResults['country_results'],
            'device_results' => $analyticsResults['device_results'],
            'complete_results' => $analyticsResults['complete_results'],
            'utm_views' => $analyticsResults['utm_views'],
            'utm_completes' => $analyticsResults['utm_completes'],
            'referrers_results' => $analyticsResults['referrers_results'],
            'event_results' => $analyticsResults['event_results'],
        ]);

        return view('admin.dashboard', $data);
    }
}
