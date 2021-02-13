<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddExtraFieldsToVmwareAgain extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '14',
            'name' => 'city',
            'label' => 'City',
            'options' => '',
            'type' => 'text',
            'trans' => 'city',
            'error' => 'errorCity',
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '14',
            'name' => 'zip',
            'label' => 'Zip',
            'options' => '',
            'type' => 'text',
            'trans' => 'zip',
            'error' => 'errorZip',
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '14',
            'name' => 'state',
            'label' => 'State',
            'options' => '',
            'type' => 'text',
            'trans' => 'state',
            'error' => 'errorState',
            'required' => 0,
            'order' => 1,
            'created_at' => Carbon\Carbon::now(),
            'updated_at' => Carbon\Carbon::now(),
        ]);
    }
}
