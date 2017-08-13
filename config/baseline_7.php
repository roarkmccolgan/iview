<?php
//Symantec
return array(
    'overall' => array(
        'baseline' => 21.5,
        'benchmark-country-en' => 3,
        'benchmark-size-500-to-999' => 2,
        'benchmark-size-1000-to-4999' => 3,
        'benchmark-size-5000+' => 3,
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
            'designline'=>false,
            'color'=>'#004895',
            'basecolor'=>'#d3d8e0',
            'pageimage'=>false,
            'margin-top'=>48,
            'header-spacing'=>0
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 30.67,
                'copy' => 'general.6poortxt',
                'tweet' => false,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 30.68,
                'high' => 48,
                'copy' => 'general.6standardtxt',
                'tweet' => false,
                'benchmark' => 32,
            ),
            'stage3' => array(
                'low' => 48.01,
                'high' => 69.99,
                'copy' => 'general.6goodtxt',
                'tweet' => false,
                'benchmark' => 41,
            ),
            'stage4' => array(
                'low' => 70,
                'high' => 85,
                'copy' => 'general.6aspirationaltxt',
                'tweet' => false,
                'benchmark' => 21,
            ),
            'stage5' => array(
                'low' => 85,
                'high' => 105,
                'copy' => 'general.6besttxt',
                'tweet' => false,
                'benchmark' => 21,
            )
        ),
        'tweet' => false,
        'eloqua' => [
            'url' => 'https://eloqua',
            'fields' => [
                'Language' => [
                    'type' => 'locale'
                ],
                'FirstName' => [
                    'type' => 'field',
                    'name' => 'fname'
                ],
                'LastName' => [
                    'type' => 'field',
                    'name' => 'sname'
                ],
                'Email' => [
                    'type' => 'field',
                    'name' => 'email'
                ],
                'Company' => [
                    'type' => 'field',
                    'name' => 'company'
                ],
                'Title' => [
                    'type' => 'field',
                    'name' => 'title'
                ],
                'Phone' => [
                    'type' => 'field',
                    'name' => 'phone'
                ],
                'Country' => [
                    'type' => 'field',
                    'name' => 'country'
                ],
                'postal' => [
                    'type' => 'field',
                    'name' => 'extra.zip'
                ],
                'state' => [
                    'type' => 'field',
                    'name' => 'extra.stateprov'
                ],
                'CompanySize' => [
                    'type' => 'questionlabel',
                    'questions' => [
                        'screeners.pages.page1.questions.s1'
                    ],
                ],
                'IncidencedetectionA9' => [
                    'type' => 'question',
                    'questions' => [
                        'automation.pages.page2.questions.q5'
                    ],
                ],
                'IncidenceresponseA11a' => [
                    'type' => 'question',
                    'questions' => [
                        'unified-intelligence.pages.page3.questions.q9'
                    ]
                ],
                'IncidenceresponseA11b' => [
                    'type' => 'question',
                    'questions' => [
                        'unified-intelligence.pages.page4.questions.q10'
                    ]
                ],
                'Incidenceresponse' => [
                    'type' => 'calculation',
                    'questions' => [
                        'unified-intelligence.pages.page3.questions.q9',
                        'unified-intelligence.pages.page4.questions.q10'
                    ],
                    'formula' => 'multiply'
                ],
                'outputreport' => [
                    'type' => 'report'
                ],
                'elqFormName' => [
                    'type' => 'hidden',
                    'value' => 'IDCMaturity',
                ],
                'elqSiteID' => [
                    'type' => 'hidden',
                    'value' => 1528,
                ]
            ]
        ]
    ),
    'gdpr' => array(
        'baseline' => 15.363,
        'benchmark-country-en' => 3,
        'benchmark-country-fr' => 3,
        'benchmark-country-de' => 3,

        'benchmark-size-500-to-999' => 3,
        'benchmark-size-de-500-à-999' => 3,
        'benchmark-size-500-bis-999' => 3,

        'benchmark-size-1000-to-4999' => 3,
        'benchmark-size-de-1-000-à-2-499' => 3,
        'benchmark-size-1000-bis-2499' => 3,

        'benchmark-size-5000+' => 3,
        'benchmark-size-2-500-ou-plus' => 3,
        'benchmark-size-2500-oder-mehr' => 3,
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
            'designline'=>true,
            'color'=>'#6AB361',
            'basecolor'=>'#d3d8e0',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 10.8,
                'total' => 2,
                'benchmark' => 1,
                'copy' => 'general.6integration-poor-txt'
            ),
            'stage2' => array(
                'low' => 10.9,
                'high' => 15.6,
                'total' => 3,
                'benchmark' => 16,
                'copy' => 'general.6integration-standard-txt'
            ),
            'stage3' => array(
                'low' => 15.7,
                'high' => 20.4,
                'total' => 5,
                'benchmark' => 34,
                'copy' => 'general.6integration-good-txt'
            ),
            'stage4' => array(
                'low' => 20.5,
                'high' => 25.2,
                'total' => 5,
                'benchmark' => 43,
                'copy' => 'general.6integration-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 25.3,
                'high' => 50,
                'total' => 5,
                'benchmark' => 6,
                'copy' => 'general.6integration-best-txt'
            )
        )
    )
);