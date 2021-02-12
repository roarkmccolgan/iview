<?php

//SPLUNK
return [
    'overall' => [
        'baseline' => 21.5,
        'benchmark-country-en' => 3,
        'benchmark-country-fr' => 2,
        'benchmark-country-de' => 3,

        'benchmark-size-500-to-999' => 2,
        'benchmark-size-de-500-à-999' => 2,
        'benchmark-size-500-bis-999' => 2,

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
            'designline'=>false,
            'color'=>'#6AB361',
            'pageimage'=>false,
            'margin-top'=>48,
            'header-spacing'=>0,
        ],
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 32.4,
                'copy' => 'general.5poortxt',
                'tweet' => false,
                'benchmark' => 2,
            ],
            'stage2' => [
                'low' => 32.5,
                'high' => 46.8,
                'copy' => 'general.5standardtxt',
                'tweet' => false,
                'benchmark' => 32,
            ],
            'stage3' => [
                'low' => 46.9,
                'high' => 61.2,
                'copy' => 'general.5goodtxt',
                'tweet' => false,
                'benchmark' => 41,
            ],
            'stage4' => [
                'low' => 61.3,
                'high' => 75.6,
                'copy' => 'general.5aspirationaltxt',
                'tweet' => false,
                'benchmark' => 21,
            ],
            'stage5' => [
                'low' => 75.7,
                'high' => 100,
                'copy' => 'general.5besttxt',
                'tweet' => false,
                'benchmark' => 21,
            ],
        ],
        'tweet' => false,
        'eloqua' => [
            'url' => 'https://s1528.t.eloqua.com/e/f2',
            'fields' => [
                'Language' => [
                    'type' => 'locale',
                ],
                'FirstName' => [
                    'type' => 'field',
                    'name' => 'fname',
                ],
                'LastName' => [
                    'type' => 'field',
                    'name' => 'sname',
                ],
                'Email' => [
                    'type' => 'field',
                    'name' => 'email',
                ],
                'Company' => [
                    'type' => 'field',
                    'name' => 'company',
                ],
                'Title' => [
                    'type' => 'field',
                    'name' => 'title',
                ],
                'Phone' => [
                    'type' => 'field',
                    'name' => 'phone',
                ],
                'Country' => [
                    'type' => 'field',
                    'name' => 'country',
                ],
                'postal' => [
                    'type' => 'field',
                    'name' => 'extra.zip',
                ],
                'state' => [
                    'type' => 'field',
                    'name' => 'extra.stateprov',
                ],
                'CompanySize' => [
                    'type' => 'questionlabel',
                    'questions' => [
                        'screeners.pages.page1.questions.s1',
                    ],
                ],
                'IncidencedetectionA9' => [
                    'type' => 'question',
                    'questions' => [
                        'incident-detection.pages.page2.questions.q5',
                    ],
                ],
                'IncidenceresponseA11a' => [
                    'type' => 'question',
                    'questions' => [
                        'incident-response.pages.page3.questions.q9',
                    ],
                ],
                'IncidenceresponseA11b' => [
                    'type' => 'question',
                    'questions' => [
                        'incident-response.pages.page4.questions.q10',
                    ],
                ],
                'Incidenceresponse' => [
                    'type' => 'calculation',
                    'questions' => [
                        'incident-response.pages.page3.questions.q9',
                        'incident-response.pages.page4.questions.q10',
                    ],
                    'formula' => 'multiply',
                ],
                'outputreport' => [
                    'type' => 'report',
                ],
                'elqFormName' => [
                    'type' => 'hidden',
                    'value' => 'IDCMaturity',
                ],
                'elqSiteID' => [
                    'type' => 'hidden',
                    'value' => 1528,
                ],
            ],
        ],
    ],
    'security-strategy' => [
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
            'designline'=>true,
            'color'=>'#6AB361',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 10.8,
                'total' => 2,
                'benchmark' => 1,
                'copy' => 'general.5security-strategy-poor-txt',
            ],
            'stage2' => [
                'low' => 10.9,
                'high' => 15.6,
                'total' => 3,
                'benchmark' => 16,
                'copy' => 'general.5security-strategy-standard-txt',
            ],
            'stage3' => [
                'low' => 15.7,
                'high' => 20.4,
                'total' => 5,
                'benchmark' => 34,
                'copy' => 'general.5security-strategy-good-txt',
            ],
            'stage4' => [
                'low' => 20.5,
                'high' => 25.2,
                'total' => 5,
                'benchmark' => 43,
                'copy' => 'general.5security-strategy-aspirational-txt',
            ],
            'stage5' => [
                'low' => 25.3,
                'high' => 50,
                'total' => 5,
                'benchmark' => 6,
                'copy' => 'general.5security-strategy-best-txt',
            ],
        ],
    ],
    'incident-detection' => [
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
            'designline'=>true,
            'color'=>'#6AB361',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 11.6,
                'total' => 3,
                'benchmark' => 27,
                'copy' => 'general.5incident-detection-poor-txt',
            ],
            'stage2' => [
                'low' => 11.7,
                'high' => 16.2,
                'total' => 4,
                'benchmark' => 27,
                'copy' => 'general.5incident-detection-standard-txt',
            ],
            'stage3' => [
                'low' => 16.3,
                'high' => 20.8,
                'total' => 6,
                'benchmark' => 28,
                'copy' => 'general.5incident-detection-good-txt',
            ],
            'stage4' => [
                'low' => 20.9,
                'high' => 25.4,
                'total' => 6,
                'benchmark' => 15,
                'copy' => 'general.5incident-detection-aspirational-txt',
            ],
            'stage5' => [
                'low' => 25.6,
                'high' => 40,
                'total' => 5,
                'benchmark' => 3,
                'copy' => 'general.5incident-detection-best-txt',
            ],
        ],
    ],
    'incident-response' => [
        'baseline' => 10, 917,
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
            'designline'=>true,
            'color'=>'#6AB361',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 10,
                'total' => 1,
                'benchmark' => 2,
                'copy' => 'general.5incident-detection-poor-txt',
            ],
            'stage2' => [
                'low' => 10.1,
                'high' => 15,
                'total' => 2,
                'benchmark' => 13,
                'copy' => 'general.5incident-detection-standard-txt',
            ],
            'stage3' => [
                'low' => 15.1,
                'high' => 20,
                'total' => 4,
                'benchmark' => 37,
                'copy' => 'general.5incident-detection-good-txt',
            ],
            'stage4' => [
                'low' => 20.1,
                'high' => 25,
                'total' => 4,
                'benchmark' => 30,
                'copy' => 'general.5incident-detection-aspirational-txt',
            ],
            'stage5' => [
                'low' => 25.1,
                'high' => 30,
                'total' => 5,
                'benchmark' => 19,
                'copy' => 'general.5incident-detection-best-txt',
            ],
        ],
    ],
];
