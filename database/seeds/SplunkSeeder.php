<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
            'subdomain' => 'security',
            'language_id' => 1,
            'urlable_id' => 5,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english Splunk
            'tool_id' => 5,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 5,
            'user_id' => 1, //roark
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '5',
            'name' => 'qualification',
            'type' => 'select',
            'trans' => 'qualification',
            'error' => 'errorQualification',
            'options' => json_encode([
                'qual1'=>'Consulting',
                'qual2'=> 'ISV',
                'qual3'=> 'Hardware Vendor',
                'qual4'=> 'Software Vendor',
                'qual5'=> 'System Integrator',
                'qual6'=> 'Cloud Service Provider',
                'qual7'=> 'Distributor',
                'qual8'=> 'Value Added Reseller',
                'qual9'=> 'Managed Service Provider',
                'qual10'=> 'Hosting Provider',
            ]),
            'required' => 1,
            'required' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
