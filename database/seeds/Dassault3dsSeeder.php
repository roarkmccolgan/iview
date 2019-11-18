<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Dassault3dsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 13,
            'name' => 'Dassault Systèmes',
            'logo' => '',
            'colours' => '9, 84, 132',
        ]);
        DB::table('tools')->insert([
            'id' => 12,
            'alias' => 'dassault',
            'title' => 'Dassault Digital Fitness Capability Assessment',
            'sub_title' => 'TBC',
            'company_id' => 13,
            'gapropertyid' => '198544578',
            'template' => 'dassault',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'dassaultdigitalmaturity',
            'language_id' => 1,
            'urlable_id' => 12,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.test',
            'subdomain' => 'dassaultdigitalmaturity',
            'language_id' => 1,
            'urlable_id' => 12,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english NTT
            'tool_id' => 12,
            'language_id' => 1
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 12,
            'user_id' => 1 //roark
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
