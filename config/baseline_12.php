<?php
//DASSAULT
return [
    'overall' => [
        'baseline' => 27.60,

        'benchmark-country-fr' => [38, 55, 7],
        'benchmark-country-de' => [33, 58, 9],
        'benchmark-country-en' => [36, 44, 20],
        'benchmark-country-us' => [33, 45, 22],

        'benchmark-size-1' => [21, 11, 0],
        'benchmark-size-2-to-9' => [28, 9, 0],
        'benchmark-size-10-to-49' => [37, 21, 6],
        'benchmark-size-50-to-99' => [28, 34, 4],
        'benchmark-size-100-to-249' => [14, 42, 10],
        'benchmark-size-250-to-499' => [9, 40, 18],
        'benchmark-size-500-to-999' => [3, 45, 20],
        'benchmark-size-1000-or-more' => [3, 45, 20],

        'benchmark-vertical-fsi' => [1, 19, 7],
        'benchmark-vertical-manufacturing' => [3, 21, 8],
        'benchmark-vertical-retail-wholesale' => [7, 17, 8],
        'benchmark-vertical-communication' => [3, 23, 2],
        'benchmark-vertical-media' => [5, 20, 3],
        'benchmark-vertical-utilities' => [14, 11, 3],
        'benchmark-vertical-transportation' => [14, 14, 0],
        'benchmark-vertical-construction' => [4, 19, 7],
        'benchmark-vertical-personal-services-leisure' => [22, 10, 3],
        'benchmark-vertical-professional-services' => [22, 15, 3],
        'benchmark-vertical-it-telecom-service-providers' => [3, 18, 13],
        'benchmark-vertical-education' => [23, 7, 0],
        'benchmark-vertical-healthcare' => [19, 8, 1],

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
    'digital-business' => [
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
    'digital-design' => [
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
    'digital-delivery' => [
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
