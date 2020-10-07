<?php
//SNOW
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
                'low' => 15,
                'high' => 25,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 26,
                'high' => 38,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 39,
                'high' => 52,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 53,
                'high' => 64,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 65,
                'high' => 75,
                'total' => 5,
                'benchmark' => 28,
            ]
        ],
        'tweet' => false,
        'report_recipients' => [
            'roarkmccolgan@gmail.com'
        ],
        'mrs' => [
            'auth' => [
                'username' => 'C-S0UP897@nomail.relay.ibm.com',
                'password' => 'NewPass37xxIDC!',
            ],
            'url' => 'https://connect.ibm.com/MRSaaS/cloud/prod/captureTransaction',
            'method' => 'POST',
            'fields' => [
                'channel_name' => [
                    'type' => 'hidden',
                    'value' => 'Digital Inbound',
                ],
                'interaction_type' => [
                    'type' => 'hidden',
                    'value' => 'WEBRESP',
                ],
                'channel_type' => [
                    'type' => 'hidden',
                    'value' => 'Landing Page',
                ],
                'user_identification' => [
                    'type' => 'array',
                    'value' => [
                        'user_transaction_date' => [
                            'type' => 'hidden',
                            'value' => 'datetime',
                        ]
                    ],
                ],
                'current_launch_context' => [
                    'type' => 'array',
                    'value' => [
                        'locale' => [
                            'type' => 'hidden',
                            'value' => 'en_UK',
                        ],
                        'application_id' => [
                            'type' => 'hidden',
                            'value' => 'C-S0UP897@nomail.relay.ibm.com',
                        ],
                    ],
                ],
                'campaign_data' => [
                    'type' => 'array',
                    'value' => [
                        'asset_id' => [
                            'type' => 'hidden',
                            'value' => 'OV77998',
                        ],
                        'vcpi' => [
                            'type' => 'hidden',
                            'value' => 'WEBRESP_IDC-_-000039UZ-_-INO_INO -_-10013943_IDC_ASSSESSMENT_Tool_-_-_-_-_Technology-Transformation-Multi-Cloud-Services-BU-GTS_-_ov77998',
                        ],
                        'offer_code' => [
                            'type' => 'hidden',
                            'value' => '10013943',
                        ],
                        'campaign_code' => [
                            'type' => 'hidden',
                            'value' => '000039UZ',
                        ],
                        'country_spec' => [
                            'type' => 'hidden',
                            'value' => '',
                        ],
                        'source_code' => [
                            'type' => 'hidden',
                            'value' => 'mrsaas-nordicsidc',
                        ],
                        'mailing_code' => [
                            'type' => 'hidden',
                            'value' => '',
                        ],
                        'page_view_id' => [
                            'type' => 'hidden',
                            'value' => '',
                        ],
                        'utm_medium' => [
                            'type' => 'hidden',
                            'value' => 'Landing Page',
                        ],
                        'utm_source' => [
                            'type' => 'hidden',
                            'value' => 'IDC',
                        ],
                        'utm_content' => [
                            'type' => 'hidden',
                            'value' => '000039UZ',
                        ],
                        'utm_term' => [
                            'type' => 'hidden',
                            'value' => '10013943',
                        ],
                        'utm_id' => [
                            'type' => 'hidden',
                            'value' => 'IDC_ASSSESSMENT_Tool',
                        ],
                        'creative_id' => [
                            'type' => 'hidden',
                            'value' => 'INO',
                        ],
                        'keyword_id' => [
                            'type' => 'hidden',
                            'value' => 'INO',
                        ],
                    ],
                ],
                'question_answers' => [
                    'type' => 'array',
                    'value' => [
                        [
                            'question_type' => 'Text',
                            'question_name' => 'firstname',
                            'answer' => 'fname',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'lastname',
                            'answer' => 'sname',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'email',
                            'answer' => 'email',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'jobTitle',
                            'answer' => 'title',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'phone',
                            'answer' => 'phone',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'company',
                            'answer' => 'company',
                        ],
                        [
                            'question_type' => 'Select',
                            'question_name' => 'country',
                            'answer' => 'country',
                        ],
                        [
                            'question_type' => 'Select',
                            'question_name' => 'state',
                            'answer' => 'state',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'DOC_URL',
                            'answer' => 'report',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Overall',
                            'answer' => 'overall',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Move',
                            'answer' => 'move',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Build',
                            'answer' => 'build',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Manage',
                            'answer' => 'manage',
                        ]
                    ],                
                ],
                'privacy' => [
                    'type' => 'object',
                    'value' => [
                        'overall_delivery_methods' => null,
                        'preferences' => [
                            [
                                'pref_asset_id' => 'mo82085',
                                'preference_code' => 'IBM',                                
                                'specific_delivery_methods' => [
                                    'email' => 'extra.marketing_email',
                                    'phone' => 'extra.marketing_phone',
                                ]
                            ]
                        ],
                    ]
                ]
            ]
        ],
        //'default_fields' =>[],
    ],
    'leadership' => [
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
                'high' => 3.96,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.68,
                'high' => 6.12,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.08,
                'high' => 8.28,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.6,
                'high' => 10.2,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 11.76,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'structural' => [
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
                'high' => 3.96,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.68,
                'high' => 6.12,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.08,
                'high' => 8.28,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.6,
                'high' => 10.2,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 11.76,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'process' => [
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
                'high' => 3.96,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.68,
                'high' => 6.12,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.08,
                'high' => 8.28,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.6,
                'high' => 10.2,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 11.76,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'portfolio' => [
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
                'high' => 3.96,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.68,
                'high' => 6.12,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.08,
                'high' => 8.28,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.6,
                'high' => 10.2,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 11.76,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ],
    'technology' => [
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
                'high' => 3.96,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 4.68,
                'high' => 6.12,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.08,
                'high' => 8.28,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.6,
                'high' => 10.2,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 11.76,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ]
];
