<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExtraFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '7',
            'name' => 'investment',
            'type' => 'select',
            'trans' => 'investment',
            'error' => 'errorInvestment',
            'options' => json_encode([
                'invest1'=>'IT Infrastructure',
                'invest2'=> 'Storage systems',
                'invest3'=> 'IT Security controls',
                'invest4'=> 'Systems Management',
                'invest5'=> 'Automation and Orchestration',
                'invest6'=> 'Application Development (DevOps/Containers etc)',
                'invest7'=> 'Workforce Mobility',
                'invest8'=> 'Customer Experience',
                'invest9'=> 'Enterprise Applications (ERP/CRM/SCM/HCM etc)',
                'invest10'=> 'GDPR compliance',
            ]),
            'required' => 1,
            'order' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
