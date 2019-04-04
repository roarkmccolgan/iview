<?php
//HPGDPR
return [
    'overall' => [
        'baseline' => 21.5,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-title-bar'=> true,
            'hide-rating'=>true,
            'page-offset'=> 2,
            'header-spacing'=>0
        ],
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 41.31,
                'copy' => 'general.4initialtxt',
                'tweet' => false,
                'benchmark' => 2,
            ],
            'stage2' => [
                'low' => 41.32,
                'high' => 57.54,
                'copy' => 'general.4definedtxt',
                'tweet' => false,
                'benchmark' => 32,
            ],
            'stage3' => [
                'low' => 57.55,
                'high' => 73.77,
                'copy' => 'general.4managedtxt',
                'tweet' => false,
                'benchmark' => 41,
            ],
            'stage4' => [
                'low' => 73.78,
                'high' => 91,
                'copy' => 'general.4optimisedtxt',
                'tweet' => false,
                'benchmark' => 21,
            ]
        ],
        'tweet' => true,
        'include_answers_in_download_report' => true
    ],
    'leadership-and-general-obligations' => [
        'baseline' => 15.363,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-title-bar'=> true,
            'hide-rating'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 13.14,
                'total' => 2,
                'benchmark' => 14,
            ],
            'stage2' => [
                'low' => 13.15,
                'high' => 18.75,
                'total' => 3,
                'benchmark' => 39,
            ],
            'stage3' => [
                'low' => 18.76,
                'high' => 24.38,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 24.39,
                'high' => 30,
                'total' => 5,
                'benchmark' => 13,
            ]
        ]
    ],
    'data-rights-and-standards' => [
        'baseline' => 24.046,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-title-bar'=> true,
            'hide-rating'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 13.32,
                'total' => 3,
                'benchmark' => 25,
            ],
            'stage2' => [
                'low' => 13.33,
                'high' => 18.87,
                'total' => 4,
                'benchmark' => 33,
            ],
            'stage3' => [
                'low' => 18.88,
                'high' => 24.44,
                'total' => 6,
                'benchmark' => 17,
            ],
            'stage4' => [
                'low' => 24.45,
                'high' => 31,
                'total' => 6,
                'benchmark' => 17,
            ]
        ]
    ],
    'security' => [
        'baseline' => 10,917,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-title-bar'=> true,
            'hide-rating'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 14.89,
                'total' => 1,
                'benchmark' => 28,
            ],
            'stage2' => [
                'low' => 14.90,
                'high' => 19.92,
                'total' => 2,
                'benchmark' => 26,
            ],
            'stage3' => [
                'low' => 19.93,
                'high' => 24.96,
                'total' => 4,
                'benchmark' => 26,
            ],
            'stage4' => [
                'low' => 24.97,
                'high' => 31,
                'total' => 4,
                'benchmark' => 11,
            ]
        ]
    ]
];
