<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class HpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'name' => 'HP',
            'logo' => '',
            'colours' => '0,150,214',
        ]);
        DB::table('tools')->insert([
            'alias' => 'idcs-gdpr-readiness-assessment',
            'title' => 'IDC\'s GDPR Assessment: Endpoint Readiness',
            'sub_title' => 'Is your business ready for GDPR Compliance',
            'company_id' => 5,
            'gapropertyid' => '147201000',
            'template' => 'default',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'hpgdpr',
            'language_id' => 1,
            'urlable_id' => 4,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english HPGDPR
            'tool_id' => 4,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 4,
            'user_id' => 1, //roark
        ]);
    }
}
