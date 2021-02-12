<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class BtMcafeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 7,
            'name' => 'McAfee BT',
            'logo' => '',
            'colours' => '0, 71, 149',
        ]);
        DB::table('tools')->insert([
            'id' => 6,
            'alias' => 'mcafee-bt-security-assessment',
            'title' => 'McAfee BT Security Assessment by IDC',
            'sub_title' => 'How ready is your businesses\' security ',
            'company_id' => 7,
            'gapropertyid' => '153391553',
            'template' => 'btmcafee',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'securebusiness',
            'language_id' => 1,
            'urlable_id' => 6,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english Splunk
            'tool_id' => 6,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 6,
            'user_id' => 1, //roark
        ]);

        /*DB::table('extra_fields')->insert([
            'tool_id' => '5',
            'name' => 'qualification',
            'type' => 'select',
            'trans' => 'qualification',
            'error' => 'errorQualification',
            'options' => json_encode([
                "qual1"=>"Consulting",
                "qual2"=> "ISV",
                "qual3"=> "Hardware Vendor",
                "qual4"=> "Software Vendor",
                "qual5"=> "System Integrator",
                "qual6"=> "Cloud Service Provider",
                "qual7"=> "Distributor",
                "qual8"=> "Value Added Reseller",
                "qual9"=> "Managed Service Provider",
                "qual10"=> "Hosting Provider"
            ]),
            'required' => 1,
            'required' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);*/
    }
}
