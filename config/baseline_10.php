<?php
//NTT Data
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
        'default_fields' => [
            'fname' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorFname',
                'required' => true,
                'col' => 6,
            ],
            'sname' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorSname',
                'required' => true,
                'col' => 6,
            ],
            'email' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorEmail',
                'required' => true,
                'col' => 6,
            ],
            'company' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorCompany',
                'required' => true,
                'col' => 6,
            ],
            'title' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorTitle',
                'required' => true,
                'col' => 6,
                'extra' => true,
            ],
            'phone' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorPhone',
                'required' => true,
                'col' => 6,
            ],
            'country' => [
                'type' => 'select',
                'default' => '',
                'options' => [
                    'us' => 'United States',
                    'we' => 'Western Europe',
                    'jp' => 'Japan',
                    'latam' => 'Latin America'
                ],
                'error' => 'errorCountry',
                'required' => true,
                'col' => 12,
            ],
            'industry' => [
                'type' => 'select',
                'default' => '',
                'options' => [
                    'banking' => 'Banking',
                    'insurance' => 'Insurance',
                    'capital-markets' => 'Capital markets',
                    'other-fsi' => 'Other FSI'
                ],
                'error' => 'errorIndustry',
                'required' => true,
                'col' => 12,
            ],
            'employees' => [
                'type' => 'select',
                'default' => '',
                'options' => [
                    '100-499'=>'100 - 499',
                    '500-999'=>'500 - 999',
                    '1000-4999'=>'1000 - 4999',
                    '5000-9999'=>'5000 - 9999',
                    '10000+'=>'10000+',
                ],
                'error' => 'errorCompanySize',
                'required' => true,
                'col' => 12,
            ]
        ],
        'block-vertical-banking-1' => [124.255, 36.211, 11.131, 26.965],
        'block-vertical-insurance-1' => [135.717, 44.443, 11.131, 18.733],
        'block-vertical-capital-markets-1' => [147.179, 44.09, 11.131, 18.733],
        'block-vertical-other-fsi-1' => [158.641, 50.287, 11.131, 12.535],

        'block-vertical-banking-2' => [124.255, 16.192, 11.131, 22.361],
        'block-vertical-insurance-2' => [135.909, 18.495, 11.131, 28.727],
        'block-vertical-capital-markets-2' => [147.179, 23.326, 11.131, 23.924],
        'block-vertical-other-fsi-2' => [158.641, 28.382, 11.131, 24.999],

        'block-vertical-banking-3' => [124.255, 10.69, 11.131, 8.148],
        'block-vertical-insurance-3' => [135.717, 10.69, 11.131, 11.131],
        'block-vertical-capital-markets-3' => [147.007, 10.69, 11.131, 16.228],
        'block-vertical-other-fsi-3' => [158.649, 10.69, 11.131, 21.109],

        'block-size-100-499-1' => [60.845, 43.065, 11.131, 19.647],
        'block-size-500-999-1' => [72.499, 27.99, 11.131, 34.722],
        'block-size-1000-4999-1' => [83.789, 41.804, 11.131, 20.908],
        'block-size-5000-9999-1' => [95.372, 49.475, 11.131, 13.237],
        'block-size-10000+-1' => [106.867, 57.065, 11.131, 5.647],

        'block-size-100-499-2' => [60.651, 19.491, 11.131, 26.286],
        'block-size-500-999-2' => [72.293, 12.896, 11.131, 18.77],
        'block-size-1000-4999-2' => [83.935, 15.718, 11.131, 29.078],
        'block-size-5000-9999-2' => [95.23, 27.348, 11.131, 25.362],
        'block-size-10000+-2' => [106.604, 41.579, 11.131, 18.594],

        'block-size-100-499-3' => [60.845, 10.885, 11.131, 11.826],
        'block-size-500-999-3' => [72.487, 10.885, 11.131, 4.182],
        'block-size-1000-4999-3' => [83.777, 10.885, 11.131, 7.108],
        'block-size-5000-9999-3' => [95.066, 10.885, 11.131, 20.086],
        'block-size-10000+-3' => [106.693, 10.885, 11.131, 33.557],

        'block-country-us-1' => [9.151, 42.987, 11.131, 19.448],
        'block-country-we-1' => [20.794, 42.342, 11.131, 20.093],
        'block-country-jp-1' => [32.083, 42.342, 11.131, 20.093],
        'block-country-latam-1' => [43.537, 42.342, 11.131, 20.093],

        'block-country-us-2' => [9.151, 20.053, 11.131, 25.829],
        'block-country-we-2' => [20.614, 19.19, 11.131, 26],
        'block-country-jp-2' => [32.076, 23.631, 11.131, 22.265],
        'block-country-latam-2' => [43.537, 20.614, 11.131, 25.282],

        'block-country-us-3' => [9.331, 10.76, 11.131, 11.951],
        'block-country-we-3' => [20.614, 10.76, 11.131, 11.951],
        'block-country-jp-3' => [32.076, 10.76, 11.131, 15.875],
        'block-country-latam-3' => [43.537, 10.76, 11.131, 12.763],

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
                'high' => 27.7,
                'copy' => 'nttdatadx.stage1txt',
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 27.8,
                'high' => 31.3,
                'copy' => 'nttdatadx.stage2txt',
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 31.4,
                'high' => 50,
                'copy' => 'nttdatadx.stage3txt',
                'tweet' => false,
                'benchmark' => 28,
            ],
        ],
        'tweet' => false,
        'include_answers_in_download_report' => true,
        'notifications' => [
            'inline_report' => false
        ],
        'field_validation' => [
            'fname'=>'required|min:2|max:255',
            'sname'=>'required|min:2|max:255',
            'email'=>'required|email',
            'title'=>'required|min:3|max:255',
            'country'=>'required',
            'terms'=>'required'
        ]
    ],
    'dx-adoption' => [
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
                'high' =>12.4,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.sales-stage-1-txt'
            ],
            'stage2' => [
                'low' => 12.5,
                'high' => 14.4,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.sales-stage-2-txt'
            ],
            'stage3' => [
                'low' => 14.5,
                'high' => 25,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.sales-stage-3-txt'
            ],
        ]
    ],
    'success-in-dx' => [
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
                'high' => 9.7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.marketing-stage-1-txt'
            ],
            'stage2' => [
                'low' => 9.8,
                'high' => 11.8,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.marketing-stage-2-txt'
            ],
            'stage3' => [
                'low' => 11.9,
                'high' => 18,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.marketing-stage-3-txt'
            ],
        ]
    ],
    'connected-financial-services' => [
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
                'high' => 5.3,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.services-stage-1-txt'
            ],
            'stage2' => [
                'low' => 5.4,
                'high' => 6.4,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.services-stage-2-txt'
            ],
            'stage3' => [
                'low' => 6.5,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.services-stage-3-txt'
            ],
        ]
    ]
];
