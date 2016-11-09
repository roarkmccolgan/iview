<?php

use Illuminate\Database\Seeder;

class UserToolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tool_user')->insert([
            'tool_id' => 1,
            'user_id' => 1
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 2,
            'user_id' => 1
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 3,
            'user_id' => 1
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 1,
            'user_id' => 2
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 2,
            'user_id' => 2
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 3,
            'user_id' => 2
        ]);
    }
}
