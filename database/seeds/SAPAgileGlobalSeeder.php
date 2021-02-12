<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SAPAgileGlobalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'id' => 18,
            'name' => 'sap',
            'logo' => '',
            'colours' => '127, 127, 130',
        ]);
        DB::table('tools')->insert([
            'id' => 17,
            'alias' => 'sapagileglobal',
            'title' => 'Assess your Business Agility',
            'sub_title' => 'An IDC Assessment, sponsored by SAP',
            'company_id' => 18,
            'gapropertyid' => '221384477',
            'template' => 'sapagileglobal',
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.net',
            'subdomain' => 'assessyouragilitystaging',
            'language_id' => 1,
            'urlable_id' => 17,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('urls')->insert([
            'domain' => 'idcready.test',
            'subdomain' => 'assessyouragilitystaging',
            'language_id' => 1,
            'urlable_id' => 17,
            'urlable_type' => \App\Tool::class,
            'created_at' => Carbon::now(),
        ]);
        DB::table('language_tool')->insert([ //english NTT
            'tool_id' => 17,
            'language_id' => 1,
        ]);
        DB::table('tool_user')->insert([
            'tool_id' => 17,
            'user_id' => 1, //roark
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '17',
            'name' => 'marketing',
            'label' => 'Marketing',
            'options' => '',
            'type' => 'boolean',
            'trans' => 'marketing',
            'error' => 'errorMarketing',
            'required' => 0,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
