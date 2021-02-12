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
                        'suffix' => '%',
                    ],
                ],
            ],
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
            'header-spacing'=>5,
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
            ],
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
            'roarkmccolgan@gmail.com',
        ],
        'crmrequest' => [
            'only' => [
                // 'field' => 'country',
                // 'value' => 'Germany',
                'local' => 'de',
            ],
            'url' => 'https://inbound.msights.com/api/response',
            'method' => 'POST',
            'authType' => 'basic',
            'headers' => [
                'Content-Type' => 'application/x-www-form-urlencoded',
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
                ],
                'offer_title' => [
                    'type' => 'result',
                    'config' => 'baseline_15.overall.offer_title',
                    'session' => 'overall_rating',
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
                    'name' => 'company',
                ],
                'country' => [
                    'type' => 'field',
                    'name' => 'country',
                ],
                'fname' => [
                    'type' => 'field',
                    'name' => 'fname',
                ],
                'lname' => [
                    'type' => 'field',
                    'name' => 'sname',
                ],
                'title' => [
                    'type' => 'field',
                    'name' => 'title',
                ],
                'phone' => [
                    'type' => 'field',
                    'name' => 'phone',
                ],
                'email' => [
                    'type' => 'field',
                    'name' => 'email',
                ],
                'site_form_url' => [
                    'type' => 'report',
                ],
                'companysize' => [
                    'type' => 'hidden',
                    'value' => '10 - 50000',
                ],
                'industry' => [
                    'type' => 'field',
                    'name' => 'extra.areas_interest',
                ],
                'optin_email_or_phone' => [
                    'type' => 'field',
                    'name' => 'extra.marketing',
                    'transform' => [
                        'on' => 'Y',
                        'off' => 'N',
                    ],
                ],
            ],
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
            'marketing'=>'required',
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
                        'suffix' => '%',
                    ],
                ],
            ],
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
            ],
        ],
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
                        'suffix' => '%',
                    ],
                ],
            ],
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
            ],
        ],
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
                        'suffix' => '%',
                    ],
                ],
            ],
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
            ],
        ],
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
                        'suffix' => '%',
                    ],
                ],
            ],
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
            ],
        ],
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
                        'suffix' => '%',
                    ],
                ],
            ],
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
            ],
        ],
    ],
];
