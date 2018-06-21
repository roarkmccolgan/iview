<?php

namespace App\Jobs;

use App\Jobs\Job;
use App\Reports\generateReport;
use App\Tool;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class SendReports extends Job implements ShouldQueue, SelfHandling
{
    use InteractsWithQueue, SerializesModels;

    protected $tool;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Tool $tool)
    {
        $this->tool = $tool;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $tool = $this->tool;
        $file = (new generateReport($tool))->generate();
        $users = config('baseline_'.$tool->id.'.overall.report_recipients');
        foreach ($users as $user) {
            Mail::send('emails.report',['tool'=>$tool],function($m) use($file, $user, $tool){
                $m->to($user)->subject($tool->title.' Assessment Report');
                $m->attach($file->store("xls",false,true)['full']);
            });
        }
    }
}
