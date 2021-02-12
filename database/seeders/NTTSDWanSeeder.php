<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NTTSDWanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 9,
            'name' => 'NTT',
            'logo' => '',
            'colours' => '0, 67, 134',
        ]);
        DB::table('tools')->insert([
            'id' => 8,
            'alias' => 'ntt-sdwan',
            'title' => 'NTT SDWAN Survey by IDC',
            'sub_title' => 'European businesses\' usage and plans around networking technologies',
            'company_id' => 9,
            'gapropertyid' => '167482583',
            'template' => 'nttsdwan',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'nttsdwan',
            'language_id' => 1,
            'urlable_id' => 8,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.dev',
            'subdomain' => 'nttsdwan',
            'language_id' => 1,
            'urlable_id' => 8,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english NTT
            'tool_id' => 8,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 8,
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
