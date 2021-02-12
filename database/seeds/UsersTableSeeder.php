<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

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
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Fung-Yee Tang',
            'email' => 'ftang@idc.com',
            'password' => bcrypt('12345'),
            'created_at' => Carbon::now(),
        ]);
    }
}
