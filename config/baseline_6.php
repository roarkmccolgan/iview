<?php
//BT/McAfee
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
    'general-approach-to-it' => array(
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
    ),
    'integration' => array(
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
                'high' => 9,
                'total' => 2,
                'benchmark' => 1,
                'copy' => 'general.6integration-poor-txt'
            ),
            'stage2' => array(
                'low' => 9.01,
                'high' => 13,
                'total' => 3,
                'benchmark' => 16,
                'copy' => 'general.6integration-standard-txt'
            ),
            'stage3' => array(
                'low' => 13.01,
                'high' => 17,
                'total' => 5,
                'benchmark' => 34,
                'copy' => 'general.6integration-good-txt'
            ),
            'stage4' => array(
                'low' => 17.01,
                'high' => 21,
                'total' => 5,
                'benchmark' => 43,
                'copy' => 'general.6integration-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 21.01,
                'high' => 25,
                'total' => 5,
                'benchmark' => 6,
                'copy' => 'general.6integration-best-txt'
            )
        )
    ),
    'automation' => array(
        'baseline' => 24.046,
        'benchmark-country-en' => 2,
        'benchmark-country-fr' => 2,
        'benchmark-country-de' => 2,

        'benchmark-size-500-to-999' => 1,
        'benchmark-size-de-500-à-999' => 1,
        'benchmark-size-500-bis-999' => 1,

        'benchmark-size-1000-to-4999' => 2,
        'benchmark-size-de-1-000-à-2-499' => 2,
        'benchmark-size-1000-bis-2499' => 2,

        'benchmark-size-5000+' => 2,
        'benchmark-size-2-500-ou-plus' => 2,
        'benchmark-size-2500-oder-mehr' => 2,
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
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 7,
                'total' => 3,
                'benchmark' => 27,
                'copy' => 'general.6automation-poor-txt'
            ),
            'stage2' => array(
                'low' => 7.01,
                'high' => 11.5,
                'total' => 4,
                'benchmark' => 27,
                'copy' => 'general.6automation-standard-txt'
            ),
            'stage3' => array(
                'low' => 11.51,
                'high' => 16,
                'total' => 6,
                'benchmark' => 28,
                'copy' => 'general.6automation-good-txt'
            ),
            'stage4' => array(
                'low' => 16.01,
                'high' => 20.5,
                'total' => 6,
                'benchmark' => 15,
                'copy' => 'general.6automation-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 20.51,
                'high' => 25,
                'total' => 5,
                'benchmark' => 3,
                'copy' => 'general.5automation-best-txt'
            )
        )
    ),
    'unified-intelligence' => array(
        'baseline' => 10,917,
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
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 10,
                'total' => 1,
                'benchmark' => 2,
                'copy' => 'general.6automation-poor-txt'
            ),
            'stage2' => array(
                'low' => 10.1,
                'high' => 15,
                'total' => 2,
                'benchmark' => 13,
                'copy' => 'general.6automation-standard-txt'
            ),
            'stage3' => array(
                'low' => 15.1,
                'high' => 20,
                'total' => 4,
                'benchmark' => 37,
                'copy' => 'general.6automation-good-txt'
            ),
            'stage4' => array(
                'low' => 20.1,
                'high' => 25,
                'total' => 4,
                'benchmark' => 30,
                'copy' => 'general.6automation-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 25.1,
                'high' => 30,
                'total' => 5,
                'benchmark' => 19,
                'copy' => 'general.6automation-best-txt'
            )
        )
    )
);