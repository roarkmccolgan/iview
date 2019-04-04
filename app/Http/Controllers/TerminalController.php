<?php

namespace App\Http\Controllers;

use Analytics;
use App\Assessment;
use App\Http\Requests;
use App\Tracker;
use App\TrackerHits;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        //return Auth::user();
        $tool = $request->get('product');

        Analytics::setSiteId('ga:'.$tool->gapropertyid);
        $terminalQueries = Config::get('terminal.queries');

        Carbon::setToStringFormat('m-d-Y');
        $startDate = Carbon::now()->subMonth();
        
        if ($startDate->lt($tool->start_date)) {
            $startDate = $tool->start_date;
        }
        $endDate = Carbon::now();
        $customDate = false;
        if ($request->input('reporting')) {
            $startDate = Carbon::createFromFormat('!d-m-Y', $request->input('from'));
            $endDate = Carbon::createFromFormat('!d-m-Y', $request->input('to'));
            $customDate = true;
        }

        //create Array of dates
        $dateRange = [];
        for ($date = clone $startDate; $date->lte($endDate); $date->addDay()) {
            $dateRange[] = $date->format('Ymd');
        }

        $completionRange = collect($dateRange)->map(function ($item, $key) {
            return [$item,0];
        });

        $tool->load(
            ['trackers' => function ($query) use ($startDate, $endDate) {
                $query->with(['TrackerHits' => function ($q) use ($startDate, $endDate) {
                    $q->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
                }]);
            },
            'assessments' => function ($query) use ($startDate, $endDate) {
                $query->whereDate('created_at', '>=', $startDate)->whereDate('created_at', '<=', $endDate);
            }],
            'urls'
        );

        //All assessments completed within date range
        $lead_total = $tool->assessments->count();
        //end

        //create an array of dates for all assessments within date range
        $assessmentDates = [];
        foreach ($tool->assessments as $ass) {
            $dateinquestion = $ass->created_at->format('Ymd');
            $assessmentDates[] = $dateinquestion;
        }

        //make a full array of each day with count of assessments per day
        $completionDates=[];
        foreach ($dateRange as $theDay) {
            $completionDates[] = [Carbon::parse($theDay)->format('d'),count(array_keys($assessmentDates, $theDay))];
        }

        $trackerQueries = [];

        foreach ($tool->trackers as $tracker) {
            $langString = '';
            if ($tracker->language_id!=1) {
                $abb = $tracker->language->abbreviation;
                $langString = ';ga:landingPagePath=@/'.$abb.'/';
            }
            $trackerQueries[$tracker->code] = [
                'metrics'       => 'ga:users',
                'dimensions'    => false,
                'sort'          => false,
                'max-results'   => false,
                'filters'       => 'ga:landingPagePath=@?utm='.$tracker->code.$langString,
            ];
            $completions = 0;

            foreach ($tracker->TrackerHits as $stats) {
                if ($stats->type=='completion') {
                    $completions++;
                }
            }
            $tracker->setCompletions($completions);
        }
        //dd($trackerQueries);
        
        $terminalQueries = array_merge($terminalQueries, $trackerQueries);

        $analyticsResults = [];

        $query_count = 0;
        foreach ($terminalQueries as $key => $query) {
            $query_count++;
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

            //delay quesry for a second if more than 10 queries are made
            if ($query_count == 10) {
                sleep(1);
                $query_count = 0;
            }
        }
        if ($tool->id == 8) {
            $normalizeStart = new Carbon('23rd April 2018');
            $normalizeEnd = new Carbon('30th April 2018');
            $enAdd = 141;
            $deAdd = 25;
            $esAdd = 26;
            $frAdd = 22;
            if ($normalizeStart->between($startDate, $endDate) && $normalizeEnd->between($startDate, $endDate)) {
                foreach ($tool->trackers as $tracker) {
                    if ($tracker->language_id==1 && $tracker->code=='hlIkPxqRrK') {
                        if (!isset($analyticsResults[$tracker->code])) {
                            $analyticsResults[$tracker->code] = [[0]];
                        }
                        $analyticsResults[$tracker->code][0][0] += $enAdd;
                    }
                    if ($tracker->language_id==23 && $tracker->code=='fdbXy1vYTW') {
                        if (!isset($analyticsResults[$tracker->code])) {
                            $analyticsResults[$tracker->code] = [[0]];
                        }
                        $analyticsResults[$tracker->code][0][0] += $deAdd;
                    }
                    if ($tracker->language_id==27 && $tracker->code=='a6etnMN9VP') {
                        if (!isset($analyticsResults[$tracker->code])) {
                            $analyticsResults[$tracker->code] = [[0]];
                        }
                        $analyticsResults[$tracker->code][0][0] += $esAdd;
                    }
                    if ($tracker->language_id==34 && $tracker->code=='zXLpqJDEqj') {
                        if (!isset($analyticsResults[$tracker->code])) {
                            $analyticsResults[$tracker->code] = [[0]];
                        }
                        $analyticsResults[$tracker->code][0][0] += $frAdd;
                    }
                }
            }
        }
        //dd($analyticsResults);

        foreach ($tool->trackers as $tracker) {
            if ($analyticsResults[$tracker->code]) {
                $tracker->setViews($analyticsResults[$tracker->code][0][0]);
            }
        }

        /*
        if($analyticsResults['utm_views']){
            foreach ($analyticsResults['utm_views'] as $key => $value) {
                foreach ($tool->trackers as $trakKey => $tracker) {
                    if($tracker->code==substr($value[0], 6, 10)){
                        if($tracker->views != $value[1]){
                            $tracker->views = $value[1];
                            $tracker->save();
                        }
                    }
                    
                }
            }
        }
        
        if($analyticsResults['utm_completes']){
            foreach ($analyticsResults['utm_completes'] as $key => $value) {
                foreach ($tool->trackers as $trakKey => $tracker) {
                    if($tracker->code==substr($value[0], 6, 10)){
                        if($tracker->completions != $value[2]){
                            $tracker->completions = $value[2];
                            $tracker->save();
                        }
                    }
                }
            }
        }*/

        $daily_total = 0;

        
        foreach ($analyticsResults['daily_results'] as $key => $value) {
            $correctDateFormat = Carbon::createFromFormat('Ymd', $value[0])->format('j');
            $analyticsResults['daily_results'][$key][0] = $correctDateFormat;
            $daily_total+=$value[1];
        }
        $complete_total = 0;
        foreach ($analyticsResults['complete_results'] as $key => $value) {
            $analyticsResults['complete_results'][$key][0] = Carbon::createFromFormat('Ymd', $value[0])->format('j');
            $complete_total+=$value[1];
        }

        $alltime_total = Assessment::where('tool_id', $tool->id)->count();

        $data = [
            'tool' => $tool,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'analyticsResults' => $analyticsResults,
            'daily_total' => $daily_total,
            'complete_total' => $complete_total,
            'lead_total' => $lead_total,
            'alltime_total' => $alltime_total,
            'customDate' => $customDate,
        ];

        JavaScript::put([
            'total_results' => $analyticsResults['total_results'],
            'daily_results' => $analyticsResults['daily_results'],
            'country_results' => $analyticsResults['country_results'],
            'device_results' => $analyticsResults['device_results'],
            'complete_results' => $completionDates,//$analyticsResults['complete_results']
            'utm_views' => $analyticsResults['utm_views'],
            'utm_completes' => $analyticsResults['utm_completes'],
            'referrers_results' => $analyticsResults['referrers_results'],
            'event_results' => $analyticsResults['event_results'],
        ]);

        return view('admin.dashboard', $data);
    }
}
