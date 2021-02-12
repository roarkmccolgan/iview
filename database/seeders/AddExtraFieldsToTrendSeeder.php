<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AddExtraFieldsToTrendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '9',
            'name' => 'turnover',
            'type' => 'select',
            'trans' => 'turnover',
            'error' => 'errorTurnover',
            'options' => json_encode([
                'size1' => 'Less than £1M',
                'size2' => 'Between £1M and £10M',
                'size3' => 'Between £10M and £100M',
                'size4' => 'Between £100M and £200M',
                'size5' => 'Between £200M and £500M',
                'size6' => 'Over £500M',
            ]),
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '9',
            'name' => 'company_size',
            'type' => 'select',
            'trans' => 'company_size',
            'error' => 'errorCompanySize',
            'options' => json_encode([
                'turn1' => 'Less than 50 staff',
                'turn2' => 'Between 50 and 100 staff',
                'turn3' => 'Between 100 and 250 staff',
                'turn4' => 'Between 250 and 500 staff',
                'turn4' => 'Between 500 and 1,000 staff',
                'turn4' => 'More than 1,000 staff',
            ]),
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '9',
            'name' => 'industry',
            'type' => 'select',
            'trans' => 'indstry',
            'error' => 'errorIndstry',
            'options' => json_encode([
                'ind1' => 'Banking and other financial services',
                'ind2' => 'Insurance',
                'ind3' => 'Retail Trade',
                'ind4' => 'Wholesale Trade',
                'ind5' => 'Business or professional',
                'ind6' => 'Software and IT Services',
                'ind7' => 'Telecommunications',
                'ind8' => 'Media',
                'ind9' => 'Manufacturing',
                'ind10' => 'Transportation',
                'ind11' => 'Utilities',
                'ind12' => 'Oil and Gas',
                'ind13' => 'Government',
                'ind14' => 'Private Education',
                'ind15' => 'Private Health',
            ]),
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
