<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ToolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tools')->insert([
            'alias' => 'cloud-development',
            'title' => 'Cloud Development',
            'sub_title' => 'Advancing your maturity',
            'company_id' => 2,
            'gapropertyid' => 'UA-156016-34',
            'template' => 'default',
            'created_at' => Carbon::now(),
        ]);
        DB::table('tools')->insert([
            'alias' => 'idcs-cyber-risk-assessment',
            'title' => 'IDC\'s Cyber Risk Assessment',
            'sub_title' => 'Sponsored by FireEye and Hewlett-Packard Enterprise',
            'company_id' => 3,
            'gapropertyid' => 'UA-156016-34',
            'template' => 'sublime',
            'created_at' => Carbon::now(),
        ]);
    }
}
