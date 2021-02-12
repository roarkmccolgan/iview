<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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
            'password' => Hash::make('sprite'),
            'created_at' => Carbon::now(),
        ]);
        DB::table('users')->insert([
            'name' => 'Fung-Yee Tang',
            'email' => 'ftang@idc.com',
            'password' => Hash::make('12345'),
            'created_at' => Carbon::now(),
        ]);
    }
}
