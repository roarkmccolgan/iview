<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Analytics;
use Carbon\Carbon;
use Config;
use DB;

class AnalyticsController extends Controller
{
    
    protected $mailer;
    
    public function __construct()
    {
        $this->mailer = 'hello';
    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function index()
    {
        $terminal = Config::get('terminal.iviews');
        
        //Config::set('laravel-analytics.siteId', 'ga:'.$terminal['dellstorage']['en']['projectId']);
        $leads = $this->getLeads($terminal['dellstorage']['en']['conection'], $terminal['dellstorage']['en']['table']);
        echo 'ga:'.$terminal['dellstorage']['en']['projectId'];
        foreach ($leads as $user) {
            var_dump($user);
        }
        
        $queries = [
            'total_results'=>[
                'metrics'       => 'ga:sessions,ga:newUsers,ga:users,ga:bounceRate,ga:avgSessionDuration,ga:pageviews,ga:pageviewsPerSession,ga:percentNewSessions',
                'dimensions'    => false,
                'sort'          => false,
                'max-results'   => false,
                'filters'       => false,
            ],
            'daily_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:date',
                'sort'          => false,
                'max-results'   => false,
                'filters'       => false,
            ],
            'country_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:country',
                'sort'          => '-ga:sessions',
                'max-results'   => 10,
                'filters'       => 'ga:country!=(not set)',
            ],
            'device_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:deviceCategory',
                'sort'          => false,
                'max-results'   => 365,
                'filters'       => false,
            ],
            'mobile_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:mobileDeviceBranding, ga:mobileDeviceModel',
                'sort'          => '-ga:sessions',
                'max-results'   => 5,
                'filters'       => 'ga:mobileDeviceBranding!=(not set)',
            ],
            'broswer_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:browser',
                'sort'          => '-ga:sessions',
                'max-results'   => 5,
                'filters'       => 'ga:Browser!=(not set)',
            ],
            'language_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:language',
                'sort'          => '-ga:sessions',
                'max-results'   => 5,
                'filters'       => 'ga:language!=(not set)',
            ],
            'referrers_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:source',
                'sort'          => '-ga:sessions',
                'max-results'   => 10,
                'filters'       => 'ga:source!=devbox','ga:source!=localhost',
            ],
            'event_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:eventAction',
                'sort'          => '-ga:sessions',
                'max-results'   => false,
                'filters'       => false,
            ]
        ];
        
        $startDate = Carbon::now()->subMonth();
        $endDate = Carbon::now();
        
        foreach ($queries as $key => $query) {
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
            
            echo "<pre>";
            echo $key.":<br/>";
            print_r($$key->getRows());
            echo "</pre>";
        }
        //return Analytics::getVisitorsAndPageViews(7)->toArray();
    }
    
    
    private function getLeads($connection, $table)
    {
        $users = DB::connection($connection)->table($table)->get();
        //$colums = Schema::connection($connection)->getColumnListing($table);
        
        return compact('users');
    }
}
