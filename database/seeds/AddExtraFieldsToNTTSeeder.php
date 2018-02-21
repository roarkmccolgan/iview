<?php

use Illuminate\Database\Seeder;

class AddExtraFieldsToNTTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '8',
            'name' => 'company_size',
            'type' => 'select',
            'trans' => 'company_size',
            'error' => 'errorCompanySize',
            'options' => json_encode([
                "size1" => "Fewer than 500"
				"size2" => "500 to 999"
				"size3" => "1,000 to 4,999"
				"size4" => "5,000 or more"
            ]),
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '8',
            'name' => 'turnover',
            'type' => 'select',
            'trans' => 'turnover',
            'error' => 'errorTurnover',
            'options' => json_encode([
                "turn1" => "Less than €100 million",
				"turn2" => "€100-250 million",
				"turn3" => "€250 million - €1 billion",
				"turn4" => "More than €1 billion",
            ]),
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
