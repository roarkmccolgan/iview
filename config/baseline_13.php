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
                'high' => 20,
                'copy' => 'hitachi.stage1txt',
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 20.01,
                'high' => 40,
                'copy' => 'hitachi.stage2txt',
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 40.01,
                'high' => 60,
                'copy' => 'hitachi.stage3txt',
                'tweet' => false,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 60.01,
                'high' => 80,
                'copy' => 'hitachi.stage4txt',
                'tweet' => false,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 80.01,
                'high' => 200,
                'copy' => 'hitachi.stage5txt',
                'tweet' => false,
                'benchmark' => 28,
            ]
        ],
        'tweet' => false,
        'include_answers_in_download_report' => true,
        'notifications' => [
            'inline_report' => true
        ],
        'field_validation' => [
            'fname'=>'required|min:2|max:255',
            'sname'=>'required|min:2|max:255',
            'email'=>'required|email',
            'title'=>'required|min:3|max:255',
            'country'=>'required',
            'company'=>'required',
            'terms'=>'required'
        ]
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
                'high' => 7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'hitachi.migration-stage-1-txt'
            ],
            'stage2' => [
                'low' => 7.01,
                'high' => 11.5,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'hitachi.migration-stage-2-txt'
            ],
            'stage3' => [
                'low' => 11.51,
                'high' => 16,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.migration-stage-3-txt'
            ],
            'stage4' => [
                'low' => 16.01,
                'high' => 20.5,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.migration-stage-4-txt'
            ],
            'stage5' => [
                'low' => 20.51,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.migration-stage-5-txt'
            ]
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
                'high' => 7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'hitachi.status-stage-1-txt'
            ],
            'stage2' => [
                'low' => 7.01,
                'high' => 11.5,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'hitachi.status-stage-2-txt'
            ],
            'stage3' => [
                'low' => 11.51,
                'high' => 16,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.status-stage-3-txt'
            ],
            'stage4' => [
                'low' => 16.01,
                'high' => 20.5,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.status-stage-4-txt'
            ],
            'stage5' => [
                'low' => 20.51,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.status-stage-5-txt'
            ]
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
                'high' => 7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'hitachi.value-stage-1-txt'
            ],
            'stage2' => [
                'low' => 7.01,
                'high' => 11.5,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'hitachi.value-stage-2-txt'
            ],
            'stage3' => [
                'low' => 11.51,
                'high' => 16,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.value-stage-3-txt'
            ],
            'stage4' => [
                'low' => 16.01,
                'high' => 20.5,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.value-stage-4-txt'
            ],
            'stage5' => [
                'low' => 20.51,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'hitachi.value-stage-5-txt'
            ]
        ]
    ]
];