<?php
//VMWARE
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
                'high' => 34.99,
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
        ],
        'eloqua' => [
            'url' => 'https://www.vmware.com/bin/vmware/form',
            'fields' => [
                'elqFormName' => [
                    'type' => 'hidden',
                    'value' => '552200_REG_EXT_IDC-DG-TOOL',
                ],
                'elqSiteID' => [
                    'type' => 'hidden',
                    'value' => 279193683,
                ],
                'cid' => [
                    'type' => 'hidden',
                    'value' => '7012H000001YmU6QAK',
                ],
                'src' => [
                    'type' => 'hidden',
                    'value' => 'em_5eda4c86ee16a',
                ],
                'returnurl' => [
                    'type' => 'hidden',
                    'value' => 'https://vmwaredigitalassessment.idcready.net/complete',
                ],
                'refURL' => [
                    'type' => 'url',
                ],
                'language' => [
                    'type' => 'locale'
                ],
                'asset' => [
                    'type' => 'report'
                ],
                'email' => [
                    'type' => 'field',
                    'name' => 'email'
                ],
                'title' => [
                    'type' => 'field',
                    'name' => 'title'
                ],
                'zip' => [
                    'type' => 'field',
                    'name' => 'extra.zip'
                ],
                'country' => [
                    'type' => 'field',
                    'name' => 'country'
                ],
                'state' => [
                    'type' => 'field',
                    'name' => 'extra.state'
                ],
                'city' => [
                    'type' => 'field',
                    'name' => 'extra.city'
                ],
                'firstName' => [
                    'type' => 'field',
                    'name' => 'fname'
                ],
                'lastName' => [
                    'type' => 'field',
                    'name' => 'sname'
                ],
                'businessPhone' => [
                    'type' => 'field',
                    'name' => 'phone'
                ],
                'optin' => [
                    'type' => 'field',
                    'name' => 'marketing'
                ]
            ]
        ]
    ],
    'network-infrastructure' => [
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
                'high' => 6.99,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-business-poor-txt'
            ],
            'stage2' => [
                'low' => 7,
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
    'intelligent-network-operations' => [
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
                'high' => 6.99,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-design-poor-txt'
            ],
            'stage2' => [
                'low' => 7,
                'high' => 11.99,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-design-standard-txt'
            ],
            'stage3' => [
                'low' => 12,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-design-good-txt'
            ]
        ]
    ],
    'security-enabled-networking' => [
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
                'high' => 6.99,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'dassault.digital-delivery-poor-txt'
            ],
            'stage2' => [
                'low' => 7,
                'high' => 11.99,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'dassault.digital-delivery-standard-txt'
            ],
            'stage3' => [
                'low' => 12,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'dassault.digital-delivery-good-txt'
            ]
        ]
    ]
];
