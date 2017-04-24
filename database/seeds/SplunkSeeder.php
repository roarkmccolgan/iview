<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SplunkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Splunk',
            'logo' => '',
            'colours' => '101, 166, 55',
        ]);
        DB::table('tools')->insert([
            'alias' => 'idc-and-splunk-security-assessment',
            'title' => 'IDC\'s Security Assessment',
            'sub_title' => 'How secure is your business?',
            'company_id' => 6,
            'gapropertyid' => '148489679',
            'template' => 'bubblegum',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'splunk',
            'language_id' => 1,
            'urlable_id' => 5,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english Splunk
            'tool_id' => 5,
            'language_id' => 1
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 5,
            'user_id' => 1 //roark
        ]);
    }
}
