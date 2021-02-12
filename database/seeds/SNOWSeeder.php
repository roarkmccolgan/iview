<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SNOWSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 19,
            'name' => 'ServiceNow',
            'logo' => '',
            'colours' => '204, 14, 19',
        ]);
        DB::table('tools')->insert([
            'id' => 18,
            'alias' => 'servicenow',
            'title' => 'ServiceNow Agility Framework',
            'sub_title' => '',
            'company_id' => 19,
            'gapropertyid' => '198544578',
            'template' => 'snow',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'servicenow',
            'language_id' => 1,
            'urlable_id' => 18,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.test',
            'subdomain' => 'servicenow',
            'language_id' => 1,
            'urlable_id' => 18,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english NTT
            'tool_id' => 18,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 18,
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
