<?php
//NTT
return [
    'overall' => [
        'baseline' => 27.60,
        'baseline' => 11,

        'benchmark-country-fr' => 27.18,
        'benchmark-country-de' => 27.54,
        'benchmark-country-en' => 28.09,

        'benchmark-size-500-to-999' => 24.53,
        'benchmark-size-1000-to-4999' => 27.63,
        'benchmark-size-5000+' => 32.05,

        'benchmark-vertical-banking-other-financial-services' => 31.79,
        'benchmark-vertical-insurance' => 28.99,
        'benchmark-vertical-retail-trade' => 28.03,
        'benchmark-vertical-wholesale-trade' => 24.88,
        'benchmark-vertical-business-professional-services' => 26.51,
        'benchmark-vertical-software-and-it-services' => 31.71,
        'benchmark-vertical-telecoms' => 31.71,
        'benchmark-vertical-media' => 26.62,
        'benchmark-vertical-manufacturing' => 24.35,
        'benchmark-vertical-transportation' => 27.94,
        'benchmark-vertical-utilities-oil-gas' => 27.91,
        'benchmark-vertical-private-education' => 24.52,
        'benchmark-vertical-private-healthcare-service-providers' => 24.32,

        'benchmark-country-fr' => 10.3,
        'benchmark-country-de' => 10.9,
        'benchmark-country-en' => 11.82,

        'benchmark-size-500-to-999' => 8.63,
        'benchmark-size-1000-to-4999' => 11.05,
        'benchmark-size-5000+' => 18.42,

        'benchmark-vertical-banking-other-financial-services' => 17.98,
        'benchmark-vertical-insurance' => 13.32,
        'benchmark-vertical-retail-trade' => 11.72,
        'benchmark-vertical-wholesale-trade' => 8.82,
        'benchmark-vertical-business-professional-services' => 9.73,
        'benchmark-vertical-software-and-it-services' => 17.85,
        'benchmark-vertical-media' => 9.79,
        'benchmark-vertical-manufacturing' => 8.53,
        'benchmark-vertical-transportation' => 11.57,
        'benchmark-vertical-utilities-oil-gas' => 11.52,
        'benchmark-vertical-private-education' => 8.62,
        'benchmark-vertical-private-healthcare-service-providers' => 8.51,

        

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
                'high' => 24.9,
                'copy' => 'general.8poortxt',
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 25,
                'high' => 34.9,
                'copy' => 'general.8standardtxt',
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 35,
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
                'high' => 10.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-business-poor-txt'
            ],
            'stage2' => [
                'low' => 11,
                'high' => 14.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-business-standard-txt'
            ],
            'stage3' => [
                'low' => 15,
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
                'high' => 7.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-design-poor-txt'
            ],
            'stage2' => [
                'low' => 8,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-design-standard-txt'
            ],
            'stage3' => [
                'low' => 11,
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
                'high' => 5.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-delivery-poor-txt'
            ],
            'stage2' => [
                'low' => 6,
                'high' => 9.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-delivery-standard-txt'
            ],
            'stage3' => [
                'low' => 10,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-delivery-good-txt'
            ]
        ]
    ]
];
