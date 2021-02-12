<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddExtraFieldsToSapAgile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '15',
            'name' => 'areas_interest',
            'type' => 'select',
            'Label' => 'Areas of interest',
            'trans' => 'areas_interest',
            'error' => 'errorAreaInterest',
            'options' => json_encode([
                'finance_administration' => 'Finance &amp; Administration',
                'purchase' => 'Purchase',
                'hr' => 'HR',
                'production_supply_chain' => 'Production &amp; Supply chain',
                'sales_marketing' => 'Sales &amp; Marketing',
            ]),
            'required' => 1,
            'multiple' => 1,
            'order' => 1,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
