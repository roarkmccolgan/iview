<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SAPAgileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 16,
            'name' => 'sap',
            'logo' => '',
            'colours' => '127, 127, 130',
        ]);
        DB::table('tools')->insert([
            'id' => 15,
            'alias' => 'sapagile',
            'title' => 'Click to be Agile',
            'sub_title' => 'An IDC Assessment, sponsored by SAP',
            'company_id' => 16,
            'gapropertyid' => '212017601',
            'template' => 'sapagile',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'sapstaging',
            'language_id' => 1,
            'urlable_id' => 15,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.test',
            'subdomain' => 'sapstaging',
            'language_id' => 1,
            'urlable_id' => 15,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english NTT
            'tool_id' => 15,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 15,
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
