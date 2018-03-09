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
            'alias' => 'idcs-cloud-benchmark-for-development',
            'title' => 'IDC\'s Cloud Benchmark for Development',
            'sub_title' => 'Advancing your maturity',
            'company_id' => 2,
            'gapropertyid' => '129112297',
            'template' => 'default',
            'created_at' => Carbon::now(),
        ]);
        DB::table('tools')->insert([
            'alias' => 'idcs-cyber-risk-assessment',
            'title' => 'IDC\'s Cyber Risk Assessment',
            'sub_title' => 'Sponsored by FireEye',
            'company_id' => 3,
            'gapropertyid' => '130538540',
            'template' => 'sublime',
            'created_at' => Carbon::now(),
        ]);
        DB::table('tools')->insert([
            'alias' => 'idcs-cloud-readiness-assessment',
            'title' => 'IDC\'s Cloud Readiness Assessment',
            'sub_title' => 'Driving Cloud Development',
            'company_id' => 4,
            'gapropertyid' => '131027536',
            'template' => 'default',
            'created_at' => Carbon::now(),
        ]);
    }
}
