<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddExtraFieldsToDassaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '12',
            'name' => 'city',
            'label' => 'City',
            'options' => '',
            'type' => 'text',
            'trans' => 'city',
            'error' => 'errorCity',
            'required' => 0,
            'order' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '12',
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
