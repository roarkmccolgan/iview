<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserHasRolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_has_roles')->insert([
            'role_id' => 1,
            'user_id' => 1,
        ]);
        DB::table('user_has_roles')->insert([
            'role_id' => 2,
            'user_id' => 2,
        ]);
    }
}
