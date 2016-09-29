<?php

use Illuminate\Database\Seeder;

class CompanyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'Dell',
            'logo' => '',
            'colours' => '0,125,124',
        ]);
        DB::table('companies')->insert([
            'name' => 'SAGE',
            'logo' => '',
            'colours' => '0,220,0',
        ]);
        DB::table('companies')->insert([
            'name' => 'FireEye',
            'logo' => '',
            'colours' => '216,36,53',
        ]);
    }
}
