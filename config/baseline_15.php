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
            'margin-top'=>26,
            'header-spacing'=>5
        ],
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 37.2,
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 37.3,
                'high' => 50.8,
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 50.9,
                'high' => 63.6,
                'tweet' => false,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 63.7,
                'high' => 78,
                'tweet' => false,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 78.1,
                'high' => 100,
                'tweet' => false,
                'benchmark' => 28,
            ]
        ],
        'tweet' => false,
        'offer_code' => [
            'stage1' => 'OD-00147930',
            'stage2' => 'OD-00147928',
            'stage3' => 'OD-00147929',
            'stage4' => 'OD-00147931',
            'stage5' => 'OD-00148486',
        ],
        'offer_title' => [
            'stage1' => 'IDC SME Analysis Tool. The first step in your agility journey/Agile Beginner',
            'stage2' => 'IDC SME Analysis Tool. The first step in your agility journey/Agile Mover',
            'stage3' => 'IDC SME Analysis Tool. The first step in your agility journey /Agile Transformer',
            'stage4' => 'IDC SME Analysis Tool. The first step in your agility journey /Agile Accelerator',
            'stage5' => 'IDC SME Analysis Tool. The first step in your agility journey /Agile Disruptor',
        ],
        'include_answers_in_download_report' => true,
        'report_recipients' => [
            'roarkmccolgan@gmail.com'
        ],
        'crmrequest' => [
            'only' => [
                // 'field' => 'country',
                // 'value' => 'Germany',
                'local' => 'de'
            ],
            'url' => 'https://inbound.msights.com/api/response',
            'method' => 'POST',
            'authType' => 'basic',
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded'
            ],
            'body' => 'form_params',
            'fields' => [
                'user' => [
                    'type' => 'hidden',
                    'value' => 'agilitytool@idc.com',
                ],
                'password' => [
                    'type' => 'hidden',
                    'value' => '4g1L1tyt00L',
                ],
                'vendor_email' => [
                    'type' => 'hidden',
                    'value' => 'agilitytool@idc.com',
                ],
                'vendor' => [
                    'type' => 'hidden',
                    'value' => 'IDC RESEARCH INC',
                ],
                'publisher' => [
                    'type' => 'hidden',
                    'value' => 'media_property',
                ],
                'site_name' => [
                    'type' => 'hidden',
                    'value' => 'IDC GMS',
                ],
                'tactic_wbs' => [
                    'type' => 'hidden',
                    'value' => 'CRM-DE20-SME-WEB_CO1IDC',
                ],
                'campaign_manager' => [
                    'type' => 'hidden',
                    'value' => 'Julie Rosche',
                ],
                'format' => [
                    'type' => 'hidden',
                    'value' => 'sap_NA_industry',
                ],
                'date' => [
                    'type' => 'date',
                ],
                'comments' => [
                    'type' => 'all_questions_and_answers',
                ],
                'offer_code' => [
                    'type' => 'result',
                    'config' => 'baseline_15.overall.offer_code',
                    'session' => 'overall_rating',
                    'checkforcode' => 'baseline_15.overall.msights',
                ],
                'offer_title' => [
                    'type' => 'result',
                    'config' => 'baseline_15.overall.offer_title',
                    'session' => 'overall_rating'
                ],
                'addr1' => [
                    'type' => 'hidden',
                    'value' => 'n/a',
                ],
                'addr2' => [
                    'type' => 'hidden',
                    'value' => 'n/a',
                ],
                'city' => [
                    'type' => 'hidden',
                    'value' => 'n/a',
                ],
                'state' => [
                    'type' => 'hidden',
                    'value' => 'n/a',
                ],
                'zip' => [
                    'type' => 'hidden',
                    'value' => 'n/a',
                ],
                'company' => [
                    'type' => 'field',
                    'name' => 'company'
                ],
                'country' => [
                    'type' => 'field',
                    'name' => 'country'
                ],
                'fname' => [
                    'type' => 'field',
                    'name' => 'fname'
                ],
                'lname' => [
                    'type' => 'field',
                    'name' => 'sname'
                ],
                'title' => [
                    'type' => 'field',
                    'name' => 'title'
                ],
                'phone' => [
                    'type' => 'field',
                    'name' => 'phone'
                ],
                'email' => [
                    'type' => 'field',
                    'name' => 'email'
                ],
                'site_form_url' => [
                    'type' => 'report'
                ],
                'companysize' => [
                    'type' => 'hidden',
                    'value' => '10 - 50000'
                ],
                'industry' => [
                    'type' => 'field',
                    'name' => 'extra.areas_interest'
                ],
                'optin_email_or_phone' => [
                    'type' => 'field',
                    'name' => 'extra.marketing',
                    'transform' => [
                        'on' => 'Y',
                        'off' => 'N',
                    ],
                ],
            ]
        ],
        'msights' => [
            '8SIYUq0FSS' => [
                'stage1' => 'OD-00149787',
                'stage2' => 'OD-00149784',
                'stage3' => 'OD-00149786',
                'stage4' => 'OD-00149785',
                'stage5' => 'OD-00149783'
            ],
            'OGk3RTczOb' => [
                'stage1' => 'OD-00149779',
                'stage2' => 'OD-00149782',
                'stage3' => 'OD-00149780',
                'stage4' => 'OD-00149781',
                'stage5' => 'OD-00149778'
            ],
            '0dSZ1WbYqa' => [
                'stage1' => 'OD-00149777',
                'stage2' => 'OD-00149775',
                'stage3' => 'OD-00149773',
                'stage4' => 'OD-00149776',
                'stage5' => 'OD-00149774'
            ],
            'ws0E1rDI1y' => [
                'stage1' => 'OD-00149883',
                'stage2' => 'OD-00149886',
                'stage3' => 'OD-00149885',
                'stage4' => 'OD-00149887',
                'stage5' => 'OD-00149884'
            ],
            '9brfzgXedz' => [
                'stage1' => 'OD-00149837',
                'stage2' => 'OD-00149834',
                'stage3' => 'OD-00149835',
                'stage4' => 'OD-00149833',
                'stage5' => 'OD-00149836'
            ],
            '1HuvALh74S' => [
                'stage1' => 'OD-00149868',
                'stage2' => 'OD-00149869',
                'stage3' => 'OD-00149871',
                'stage4' => 'OD-00149870',
                'stage5' => 'OD-00149872'
            ],
            'bjtLEhXYR2' => [
                'stage1' => 'OD-00149842',
                'stage2' => 'OD-00149840',
                'stage3' => 'OD-00149839',
                'stage4' => 'OD-00149841',
                'stage5' => 'OD-00149838'
            ],
            '9t4PSvLCS1' => [
                'stage1' => 'OD-00149874',
                'stage2' => 'OD-00149873',
                'stage3' => 'OD-00149877',
                'stage4' => 'OD-00149876',
                'stage5' => 'OD-00149875'
            ],
            'kyg6qS6RIN' => [
                'stage1' => 'OD-00149878',
                'stage2' => 'OD-00149879',
                'stage3' => 'OD-00149880',
                'stage4' => 'OD-00149881',
                'stage5' => 'OD-00149882'
            ],
            'ggYmUC9WPj' => [
                'stage1' => 'OD-00149755',
                'stage2' => 'OD-00149756',
                'stage3' => 'OD-00149753',
                'stage4' => 'OD-00149754',
                'stage5' => 'OD-00149757'
            ],
            'URIl42AIie' => [
                'stage1' => 'OD-00149750',
                'stage2' => 'OD-00149749',
                'stage3' => 'OD-00149751',
                'stage4' => 'OD-00149748',
                'stage5' => 'OD-00149752'
            ],
            '5xWc6T2N4R' => [
                'stage1' => 'OD-00149744',
                'stage2' => 'OD-00149745',
                'stage3' => 'OD-00149743',
                'stage4' => 'OD-00149746',
                'stage5' => 'OD-00149747'
            ],
            '45ZD3EU7Vq' => [
                'stage1' => 'OD-00149843',
                'stage2' => 'OD-00149844',
                'stage3' => 'OD-00149845',
                'stage4' => 'OD-00149846',
                'stage5' => 'OD-00149847'
            ],
            '26oMaBWJRd' => [
                'stage1' => 'OD-00149768',
                'stage2' => 'OD-00149769',
                'stage3' => 'OD-00149772',
                'stage4' => 'OD-00149771',
                'stage5' => 'OD-00149770'
            ],
            'vUd3z7kiVZ' => [
                'stage1' => 'OD-00149767',
                'stage2' => 'OD-00149763',
                'stage3' => 'OD-00149766',
                'stage4' => 'OD-00149764',
                'stage5' => 'OD-00149765'
            ],
            '4nfat0trvj' => [
                'stage1' => 'OD-00149762',
                'stage2' => 'OD-00149760',
                'stage3' => 'OD-00149759',
                'stage4' => 'OD-00149758',
                'stage5' => 'OD-00149761'
            ],
            'oRyRBWhdjo' => [
                'stage1' => 'OD-00149851',
                'stage2' => 'OD-00149849',
                'stage3' => 'OD-00149850',
                'stage4' => 'OD-00149848',
                'stage5' => 'OD-00149852'
            ],
            // '6s4uFQ5wjP' => [
            //     'stage1' => 'OD-00149815',
            //     'stage2' => 'OD-00149817',
            //     'stage3' => 'OD-00149813',
            //     'stage4' => 'OD-00149816',
            //     'stage5' => 'OD-00149814'
            // ],
            // 'LMqpU9W7KT' => [
            //     'stage1' => 'OD-00149811',
            //     'stage2' => 'OD-00149810',
            //     'stage3' => 'OD-00149812',
            //     'stage4' => 'OD-00149808',
            //     'stage5' => 'OD-00149809'
            // ],
            // 'PcX1RQ1xk9' => [
            //     'stage1' => 'OD-00149806',
            //     'stage2' => 'OD-00149804',
            //     'stage3' => 'OD-00149803',
            //     'stage4' => 'OD-00149807',
            //     'stage5' => 'OD-00149805'
            // ],
            // 'FzsxpwlDBt' => [
            //     'stage1' => 'OD-00149895',
            //     'stage2' => 'OD-00149894',
            //     'stage3' => 'OD-00149896',
            //     'stage4' => 'OD-00149893',
            //     'stage5' => 'OD-00149897'
            // ],
            // 'TxgnCBo2zK' => [
            //     'stage1' => 'OD-00149857',
            //     'stage2' => 'OD-00149853',
            //     'stage3' => 'OD-00149854',
            //     'stage4' => 'OD-00149856',
            //     'stage5' => 'OD-00149855'
            // ],
            // 'pHitOw0AZd' => [
            //     'stage1' => 'OD-00149798',
            //     'stage2' => 'OD-00149801',
            //     'stage3' => 'OD-00149802',
            //     'stage4' => 'OD-00149800',
            //     'stage5' => 'OD-00149799'
            // ],
            // 'OZKA4I85HI' => [
            //     'stage1' => 'OD-00149794',
            //     'stage2' => 'OD-00149793',
            //     'stage3' => 'OD-00149797',
            //     'stage4' => 'OD-00149795',
            //     'stage5' => 'OD-00149796'
            // ],
            // 'Fx4rX745kY' => [
            //     'stage1' => 'OD-00149788',
            //     'stage2' => 'OD-00149791',
            //     'stage3' => 'OD-00149789',
            //     'stage4' => 'OD-00149790',
            //     'stage5' => 'OD-00149792'
            // ],
            // 'c6SZsoXB13' => [
            //     'stage1' => 'OD-00149889',
            //     'stage2' => 'OD-00149892',
            //     'stage3' => 'OD-00149891',
            //     'stage4' => 'OD-00149888',
            //     'stage5' => 'OD-00149890'
            // ],
            // 'xAeDpWKBOR' => [
            //     'stage1' => 'OD-00149860',
            //     'stage2' => 'OD-00149861',
            //     'stage3' => 'OD-00149859',
            //     'stage4' => 'OD-00149858',
            //     'stage5' => 'OD-00149862'
            // ],
            'Hz30s21qy1' => [
                'stage1' => 'OD-00149830',
                'stage2' => 'OD-00149828',
                'stage3' => 'OD-00149829',
                'stage4' => 'OD-00149832',
                'stage5' => 'OD-00149831'
            ],
            'GaEfLHCFZX' => [
                'stage1' => 'OD-00149823',
                'stage2' => 'OD-00149825',
                'stage3' => 'OD-00149826',
                'stage4' => 'OD-00149827',
                'stage5' => 'OD-00149824'
            ],
            'vj0YEqQzTc' => [
                'stage1' => 'OD-00149822',
                'stage2' => 'OD-00149818',
                'stage3' => 'OD-00149819',
                'stage4' => 'OD-00149820',
                'stage5' => 'OD-00149821'
            ],
            '5bP4jKxinR' => [
                'stage1' => 'OD-00149902',
                'stage2' => 'OD-00149899',
                'stage3' => 'OD-00149898',
                'stage4' => 'OD-00149901',
                'stage5' => 'OD-00149900'
            ],
            'U2ZfMpKAYG' => [
                'stage1' => 'OD-00149865',
                'stage2' => 'OD-00149866',
                'stage3' => 'OD-00149864',
                'stage4' => 'OD-00149867',
                'stage5' => 'OD-00149863'
            ]
        ],
        '' => [
            'fname'=>'required|min:2|max:255',
            'sname'=>'required|min:2|max:255',
            'email'=>'required|email',
            'company'=>'sometimes|required|min:2|max:255',
            'title'=>'sometimes|required|min:3|max:255',
            'country'=>'sometimes|required',
            'phone'=>'sometimes|required',
            'terms'=>'required',
            'marketing'=>'required'
        ]
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
                'high' => 12.25,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 12.26,
                'high' => 16.25,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 16.26,
                'high' => 20.25,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 20.26,
                'high' => 24.75,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 24.76,
                'high' => 40,
                'total' => 5,
                'benchmark' => 28,
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
                'high' => 5.88,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 5.89,
                'high' => 7.92,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.93,
                'high' => 9.84,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.85,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 12.1,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
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
                'high' => 5.88,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 5.89,
                'high' => 7.92,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.93,
                'high' => 9.84,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.85,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 12.1,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
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
                'high' => 5.88,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 5.89,
                'high' => 7.92,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 7.93,
                'high' => 9.84,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 9.85,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 12.1,
                'high' => 20,
                'total' => 5,
                'benchmark' => 28,
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
                'high' => 7.56,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 7.57,
                'high' => 10.79,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 10.80,
                'high' => 13.83,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage4' => [
                'low' => 13.84,
                'high' => 17.25,
                'total' => 5,
                'benchmark' => 28,
            ],
            'stage5' => [
                'low' => 17.26,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
            ]
        ]
    ]
];
