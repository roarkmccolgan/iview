<?php
//Sap Agility Global
return [
    'overall' => [
        'baseline' => 27.60,

        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
            'margin-top'=>31,
            'header-spacing'=>10
        ],
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 37.2,
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 37.3,
                'high' => 50.8,
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 50.9,
                'high' => 63.6,
                'tweet' => false,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 63.7,
                'high' => 78,
                'tweet' => false,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 78.1,
                'high' => 100,
                'tweet' => false,
                'benchmark' => 28,
            ]
        ],
        'tweet' => false,
        'include_answers_in_download_report' => true,
        'report_recipients' => [
            'roarkmccolgan@gmail.com',
            'lborthwick@idc.com',
        ],
    ],
    'strategic-planning' => [
        'baseline' => 8.90,
        'baseline' => 9.83,

        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 12.25,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 12.26,
                'high' => 16.25,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 16.26,
                'high' => 20.25,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 20.26,
                'high' => 24.75,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 24.76,
                'high' => 40,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'processes' => [
        'baseline' => 9.28,
        'baseline' => 10.93,
        
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 5.88,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 5.89,
                'high' => 7.92,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.93,
                'high' => 9.84,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.85,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 12.1,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'customer-relationships' => [
        'baseline' => 9.42,
        'baseline' => 11.4,
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 5.88,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 5.89,
                'high' => 7.92,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.93,
                'high' => 9.84,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.85,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 12.1,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'suppliers-distributors' => [
        'baseline' => 9.42,
        'baseline' => 11.4,
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 5.88,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 5.89,
                'high' => 7.92,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.93,
                'high' => 9.84,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.85,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 12.1,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'people-experience' => [
        'baseline' => 9.42,
        'baseline' => 11.4,
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 7.56,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 7.57,
                'high' => 10.79,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 10.80,
                'high' => 13.83,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 13.84,
                'high' => 17.25,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 17.26,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ]
];
