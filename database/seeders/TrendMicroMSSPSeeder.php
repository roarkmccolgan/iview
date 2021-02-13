<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrendMicroMSSPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 10,
            'name' => 'Trend Micro',
            'logo' => '',
            'colours' => '211,33,41',
        ]);
        DB::table('tools')->insert([
            'id' => 9,
            'alias' => 'trend-micro-msp',
            'title' => 'IDC Managed Security Services Assessment',
            'sub_title' => 'Discover your readiness in becoming an MSSP',
            'company_id' => 10,
            'gapropertyid' => '174222101',
            'template' => 'trendmicromssp',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'msp',
            'language_id' => 1,
            'urlable_id' => 9,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.test',
            'subdomain' => 'msp',
            'language_id' => 1,
            'urlable_id' => 9,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'trend',
            'language_id' => 1,
            'urlable_id' => 9,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.test',
            'subdomain' => 'trend',
            'language_id' => 1,
            'urlable_id' => 9,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english Trend
            'tool_id' => 9,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 9,
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
