<?php
//Hitachi
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
            'margin-top'=>20,
            'header-spacing'=>6
        ],
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 52,
                'copy' => 'hitachi.stage1txt',
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 53,
                'high' => 81,
                'copy' => 'hitachi.stage2txt',
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 82,
                'high' => 120,
                'copy' => 'hitachi.stage3txt',
                'tweet' => false,
                'benchmark' => 28,
            ],
        ],
        'tweet' => false,
        'include_answers_in_download_report' => true,
        // 'notifications' => [
        //     'inline_report' => true
        // ],
        'field_validation' => [
            'fname'=>'required|min:2|max:255',
            'sname'=>'required|min:2|max:255',
            'email'=>'required|email',
            'phone'=>'required',
            'title'=>'required|min:3|max:255',
            'country'=>'required',
            'company'=>'required',
            'terms'=>'required'
        ],
    ],
    'migration' => [
        'baseline' => 8.90,

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
                'high' => 28,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'hitachi.migration-stage-1-txt'
            ],
            'stage2' => [
                'low' => 29,
                'high' => 45,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'hitachi.migration-stage-2-txt'
            ],
            'stage3' => [
                'low' => 46,
                'high' => 60,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.migration-stage-3-txt'
            ],
        ]
    ],
    'status' => [
        'baseline' => 8.90,

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
                'high' => 12,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'hitachi.status-stage-1-txt'
            ],
            'stage2' => [
                'low' => 13,
                'high' => 20,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'hitachi.status-stage-2-txt'
            ],
            'stage3' => [
                'low' => 21,
                'high' => 27,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.status-stage-3-txt'
            ],
        ]
    ],
    'value' => [
        'baseline' => 8.90,

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
                'high' => 9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'hitachi.value-stage-1-txt'
            ],
            'stage2' => [
                'low' => 10,
                'high' => 14,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'hitachi.value-stage-2-txt'
            ],
            'stage3' => [
                'low' => 15,
                'high' => 21,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.value-stage-3-txt'
            ],
        ]
    ]
];
