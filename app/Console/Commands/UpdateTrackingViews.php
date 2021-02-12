<?php

namespace App\Console\Commands;

use Analytics;
use App\Tool;
use Carbon\Carbon;
use Illuminate\Console\Command;

class UpdateTrackingViews extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'terminal:updatetrackerviews';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Will update Tool Trackers to match stats from Google Analytics';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $tools = Tool::with('trackers.language')->where('active', 1)->get();

        $trackers = $tools->each(function ($tool, $toolkey) {
            return $tool->trackers->each(function ($tracker) use ($tool) {
                $startDate = $tool->start_date;
                $endDate = Carbon::now();
                $langString = '';
                if ($tracker->language_id != 1) {
                    $abb = $tracker->language->abbreviation;
                    $langString = ';ga:landingPagePath=@?/'.$abb;
                }
                $metrics = 'ga:users';
                $other = [
                    // 'dimensions'    => 'ga:pagePath',
                    'filters'       => 'ga:landingPagePath=@?utm='.$tracker->code.$langString,
                ];

                Analytics::setSiteId('ga:'.$tool->gapropertyid);
                $trackerViewResults = Analytics::performQuery($startDate, $endDate, $metrics, $other);
                $results = $trackerViewResults->getRows();
                if ($tracker->views != $results[0][0]) {
                    $tracker->views = $results[0][0];
                    $tracker->save();
                }
                $this->info($tool->alias."\n".$tracker->name.' ('.$tracker->code.'): '.$results[0][0]."\n\n");
            });
        });

        $this->info('Complete');
    }
}
