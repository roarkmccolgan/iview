<?php

namespace Database\Seeders;

use Database\Seeders\AddExtraFieldsToSapAgile;
use Illuminate\Database\Seeder;

class AddExtraFieldsToSapAgileSeeder extends Seeder
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
    }
}
