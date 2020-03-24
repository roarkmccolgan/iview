<?php
//Sap Agility
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
                'high' => 24.99,
                'copy' => 'general.8poortxt',
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 25,
                'high' => 29.29,
                'copy' => 'general.8standardtxt',
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 29.3,
                'high' => 60,
                'copy' => 'general.8goodtxt',
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
                'high' => 9.49,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-business-poor-txt'
            ],
            'stage2' => [
                'low' => 9.5,
                'high' => 11.99,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-business-standard-txt'
            ],
            'stage3' => [
                'low' => 12,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-business-good-txt'
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
                'high' => 7.99,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-design-poor-txt'
            ],
            'stage2' => [
                'low' => 8,
                'high' => 9.99,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-design-standard-txt'
            ],
            'stage3' => [
                'low' => 10,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-design-good-txt'
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
                'high' => 7.49,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-delivery-poor-txt'
            ],
            'stage2' => [
                'low' => 7.5,
                'high' => 8.99,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-delivery-standard-txt'
            ],
            'stage3' => [
                'low' => 9,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-delivery-good-txt'
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
                'high' => 7.49,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-delivery-poor-txt'
            ],
            'stage2' => [
                'low' => 7.5,
                'high' => 8.99,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-delivery-standard-txt'
            ],
            'stage3' => [
                'low' => 9,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-delivery-good-txt'
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
                'high' => 7.49,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-delivery-poor-txt'
            ],
            'stage2' => [
                'low' => 7.5,
                'high' => 8.99,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-delivery-standard-txt'
            ],
            'stage3' => [
                'low' => 9,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-delivery-good-txt'
            ]
        ]
    ]
];