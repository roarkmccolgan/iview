<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AddExtraFieldsToIBMCloudSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '16',
            'name' => 'marketing',
            'label' => 'Marketing',
            'options' => '',
            'type' => 'boolean',
            'trans' => 'marketing',
            'error' => 'errorMarketing',
            'required' => 0,
            'order' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('extra_fields')->insert([
            'tool_id' => '16',
            'name' => 'marketing_phone',
            'label' => 'Marketing Phone',
            'options' => '',
            'type' => 'boolean',
            'trans' => 'marketingPhone',
            'error' => 'errorMarketingPhone',
            'required' => 0,
            'order' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
        DB::table('extra_fields')->insert([
            'tool_id' => '16',
            'name' => 'marketing_email',
            'label' => 'Marketing Email',
            'options' => '',
            'type' => 'boolean',
            'trans' => 'marketingEmail',
            'error' => 'errorMarketingEmail',
            'required' => 0,
            'order' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
