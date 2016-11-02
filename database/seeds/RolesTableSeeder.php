<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'super',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'name' => 'admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'name' => 'client',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        DB::table('roles')->insert([
            'name' => 'local',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
