<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questions extends Model
{
    protected $fillable = [
        'question',
        'name',
        'type',
        'option_id'
    ];

    public function options()
    {
        return $this->hasMany('App\Options');
    }
}

'q1'=>[
                        'type'=>'button',
                        'question'=>'Which best describes your overall business model? We focus on:',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Project-based business and refer any cloud opportunities to our vendor partners.',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Project-based business and we resell vendor-branded cloud products on an ad hoc basis, adding value where we can.',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Converting project-based business into recurring revenue contracts, adding our own professional services where possible.',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Delivering vendor cloud offerings that are attached to our professional services including business consulting, systems integration, migration, and managed services.',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Delivering our own branded recurring revenue cloud services.',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
