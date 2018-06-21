<?php

namespace App\Console\Commands;

use App\Jobs\SendReports;
use App\Tool;
use Illuminate\Console\Command;

class CommandSendReports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reports:send {tool}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send Analytics and Completion reports';

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
        $tool = Tool::find($this->argument('tool'));
        dispatch(new SendReports($tool));
    }
}
