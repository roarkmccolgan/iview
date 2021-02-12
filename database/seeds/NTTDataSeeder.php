<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NTTDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 11,
            'name' => 'NTT Data',
            'logo' => '',
            'colours' => '15,30,79',
        ]);
        DB::table('tools')->insert([
            'id' => 10,
            'alias' => 'nttdatadx',
            'title' => 'IDC Digital Transformation Assessment',
            'sub_title' => 'How are you positioned to address your customers\' needs in an increasingly open and connected financial services ecosystemm?',
            'company_id' => 11,
            'gapropertyid' => '190900174',
            'template' => 'nttdata',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'nttdatadx',
            'language_id' => 1,
            'urlable_id' => 10,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.test',
            'subdomain' => 'nttdatadx',
            'language_id' => 1,
            'urlable_id' => 10,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english Trend
            'tool_id' => 10,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 10,
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
