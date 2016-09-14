<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Roark McColgan',
            'email' => 'roarkmccolgan@gmail.com',
            'password' => bcrypt('sprite'),
            'created_at' => Carbon::now()
        ]);
    }
}
