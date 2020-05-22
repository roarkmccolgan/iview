<?php
//IBM
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
                'high' => 120,
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 120.1,
                'high' => 225,
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 225.1,
                'high' => 320,
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
    'move' => [
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
                'high' => 40,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.1,
                'high' => 75,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 75.1,
                'high' => 120,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'build' => [
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
                'high' => 40,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.1,
                'high' => 75,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 75.1,
                'high' => 120,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'manage' => [
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
                'high' => 40,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.1,
                'high' => 75,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 75.1,
                'high' => 120,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ]
];
