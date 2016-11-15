<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UrlsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'sage',
            'language_id' => 1,
            'urlable_id' => 1,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'fireeye',
            'language_id' => 1,
            'urlable_id' => 2,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'redhat',
            'language_id' => 1,
            'urlable_id' => 3,
            'urlable_type' => 'App\Tool',
            'created_at' => Carbon::now(),
        ]);
    }
}
