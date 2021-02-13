<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ToolLanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language_tool')->insert([ //english Sage
            'tool_id' => 1,
            'language_id' => 1,
        ]);
        DB::table('language_tool')->insert([ //english FireEye
            'tool_id' => 2,
            'language_id' => 1,
        ]);
        DB::table('language_tool')->insert([ //english Redhat
            'tool_id' => 3,
            'language_id' => 1,
        ]);

        DB::table('language_tool')->insert([ //french Sage
            'tool_id' => 1,
            'language_id' => 34,
        ]);

        DB::table('language_tool')->insert([ //spanish FireEye
            'tool_id' => 2,
            'language_id' => 27,
        ]);
        DB::table('language_tool')->insert([ //german FireEye
            'tool_id' => 2,
            'language_id' => 23,
        ]);
        DB::table('language_tool')->insert([ //german FireEye
            'tool_id' => 2,
            'language_id' => 34,
        ]);
    }
}
