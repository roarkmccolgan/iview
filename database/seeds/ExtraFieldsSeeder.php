<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ExtraFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('extra_fields')->insert([
            'tool_id' => '3',
            'name' => 'relationship',
            'type' => 'select',
            'trans' => 'relationship',
            'error' => 'errorRelationship',
            'options' => json_encode([
                'rel1'=>'CCSP',
                'rel2'=>'Red Hat Ready Business Partner',
                'rel3'=>'Red Hat Advanced Business Partner',
                'rel4'=>'Red Hat Premier Business Partner',
                'rel5'=>'System Integrator',
                'rel6'=>'ISV',
                'rel7'=>'OEM',
                'rel8'=>'Corporate Reseller',
                'rel9'=>'Distributor',
                'rel10'=>'Not a partner yet'
            ]),
            'required' => 1,
            'order' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('extra_fields')->insert([
            'tool_id' => '3',
            'name' => 'qualification',
            'type' => 'select',
            'trans' => 'qualification',
            'error' => 'errorQualification',
            'options' => json_encode([
                "qual1"=>"Consulting",
                "qual2"=> "ISV",
                "qual3"=> "Hardware Vendor",
                "qual4"=> "Software Vendor",
                "qual5"=> "System Integrator",
                "qual6"=> "Cloud Service Provider",
                "qual7"=> "Distributor",
                "qual8"=> "Value Added Reseller",
                "qual9"=> "Managed Service Provider",
                "qual10"=> "Hosting Provider"
            ]),
            'required' => 1,
            'required' => 2,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
