<?php
//sage
return array(
    'overall' => array(
        'baseline' => 21.5,
        'report-settings' => [
            'graph'=>true,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#0092C4',
            'pageimage'=>false,
            /*'extra-graphs'=>[
                'country-france'=>[
                    'columns' => [
                        [
                            'type'=>'string',
                            'label'=>'Stage',
                        ],
                        [
                            'type'=>'number',
                            'label'=>'Your Score',
                            'format'=>[
                                'type'=>'NumberFormat',
                                'format'=>[
                                    'suffix' => '%'
                                ]
                            ],
                        ],
                    ],
                    'role-columns' => [
                        [
                            'type'=>'string',
                            'role'=>'style',
                        ],
                        [
                            'type'=>'string',
                            'role'=>'annotation',
                        ]
                    ],
                    'data' => [
                        'stage1' => 12,
                        'stage2' => 45,
                        'stage3' => 13,
                        'stage4' => 7,
                        'stage5' => 10,
                    ]
                ],
                'country-germany'=>[
                    'columns' => [
                        'type'=>'string',
                        'label'=>'Stage',
                        'format'=>[
                            'type'=>'NumberFormat',
                            'format'=>[
                                'suffix' => '%'
                            ]
                        ],
                    ],
                    'role-columns' => [
                        [
                            'type'=>'string',
                            'role'=>'style',
                        ],
                        [
                            'type'=>'string',
                            'role'=>'annotation',
                        ]
                    ],
                    'data' => [
                        'stage1' => 16,
                        'stage2' => 14,
                        'stage3' => 33,
                        'stage4' => 12,
                        'stage5' => 5,
                    ]
                ],
            ],*/
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 20.9,
                'copy' => 'general.timetoacttxt',
                'tweet' => false,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 21,
                'high' => 40.9,
                'copy' => 'general.timetocommitetxt',
                'tweet' => false,
                'benchmark' => 32,
            ),
            'stage3' => array(
                'low' => 41,
                'high' => 50.9,
                'copy' => 'general.timetoinvesttxt',
                'tweet' => false,
                'benchmark' => 41,
            ),
            'stage4' => array(
                'low' => 61,
                'high' => 80.9,
                'copy' => 'general.timetorefinetxt',
                'tweet' => false,
                'benchmark' => 21,
            ),
            'stage5' => array(
                'low' => 81,
                'high' => 100,
                'copy' => 'general.timetoacceleratetxt',
                'tweet' => false,
                'benchmark' => 4,
            )
        ),
        'tweet' => false
    ),
    'cloud-vision-and-strategy' => array(
        'baseline' => 15.363,
        'report-settings' => [
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#00DF62',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.92,
                'total' => 2,
                'benchmark' => 14,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 3,
                'benchmark' => 39,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 5,
                'benchmark' => 28,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 5,
                'benchmark' => 13,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 5,
                'benchmark' => 6,
            )
        )
    ),
    'process-and-skill-sets' => array(
        'baseline' => 24.046,
        'report-settings' => [
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#F5006A',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.95,
                'total' => 3,
                'benchmark' => 25,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 4,
                'benchmark' => 33,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 6,
                'benchmark' => 17,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 6,
                'benchmark' => 17,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 6,
                'benchmark' => 8,
            )
        )
    ),
    'marketing' => array(
        'baseline' => 10,917,
        'report-settings' => [
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#633BAD',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.9,
                'total' => 1,
                'benchmark' => 28,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 2,
                'benchmark' => 26,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 4,
                'benchmark' => 26,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 4,
                'benchmark' => 11,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 4,
                'benchmark' => 8,
            )
        )
    ),
    'sales' => array(
        'baseline' => 10,917,
        'report-settings' => [
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#00B7E7',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.9,
                'total' => 1,
                'benchmark' => 21,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 2,
                'benchmark' => 28,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 4,
                'benchmark' => 27,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 4,
                'benchmark' => 16,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 4,
                'benchmark' => 8,
            )
        )
    ),
    'business-mix' => array(
        'baseline' => 10,917,
        'report-settings' => [
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#FFBD72',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.9,
                'total' => 1,
                'benchmark' => 4,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 2,
                'benchmark' => 16,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 4,
                'benchmark' => 53,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 4,
                'benchmark' => 26,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 4,
                'benchmark' => 1,
            )
        )
    )
);