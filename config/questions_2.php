<?php

return [
    'screeners' => [
        'title' => 'Demographics',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Screeners',
                'questions' => [
                    's1'=>[
                        'type'=>'button',
                        'question'=>'In which country is the company you work for situated? Please select one',
                        'name'=>'s1',
                        'options'=>[
                            [
                                'label'=>'France',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Germany',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'United Kingdom',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Spain',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Italy',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Other',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                        'other'=>'Other|0|Your country',
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Screeners',
                'questions' => [
                    's2'=>[
                        'type'=>'button',
                        'question'=>'How many full time employees work at your organization worlwide? Please select one',
                        'name'=>'s2',
                        'options'=>[
                            [
                                'label'=>'Less than 1000',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1000-2499',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2500-4999',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'5000-9999',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'10000 or more',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Screeners',
                'questions' => [
                    's3'=>[
                        'type'=>'button',
                        'question'=>'Which of the following industry classifications best represents your organization? Please select one',
                        'name'=>'s3',
                        'options'=>[
                            [
                                'label'=>'Financial services',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Manufacturing',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Telecommunications services (including hosters, xSPs and Cloud Service Providers)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Education',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Healthcare',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Media',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Transport, distribution and logistics',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Retail and Wholesale',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'IT consulting and IT-related professional services',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Non-IT consulting and other professional services (accounting, legal, advertising, real estate, recruitment, business consulting, etc.) ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Central or Local Government, or Public services',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Utilities - Electricity, Gas, Water',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Other',
                                'value'=>1,
                                'checked'=>false,
                                'other' => true,
                            ],
                        ],
                        'other'=>'Other|1|Please Specify Industry',
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-and-the-business' => [
        'title' => 'Cyber Risk Management and the Business',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'How does senior business management tend to view the role of IT? Please select one',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'A necessary cost',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'An enabler of business efficiency',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'A driver of competitive advantage or differentiation',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'When it comes to business requests for new or enhanced applications or services, which statement best reflects your IT department\'s capabilities? Please select one',
                        'name'=>'q2',
                        'options'=>[
                            [
                                'label'=>'We struggle to deal with most requests.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We are generally OK with requests around existing applications or services, but struggle with requests for new or enhance',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We are generally OK with requests both for existing applications and services, and new or enhanced services.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We are very good at delivery on most or all requests.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your attitude to risk at a business level? Please select one',
                        'name'=>'q3',
                        'options'=>[
                            [
                                'label'=>'We avoid risk at all costs.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We tend to avoid risks, but will take some risks where there is a very good justification.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We are wary of risks, but will take them where we can see a clear business benefit.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We will take on risk readily to help the business develop.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'We actively take on and manage risk to help the business develop.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupradio',
                        'question'=>'Which of the following do you already have in place to protect your business in the event of an incident?',
                        'name'=>'q4',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'A formal risk assessment',
                                'name'=>'q4.1',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Proactive detection (solutions that are able to identify unknown threats through techniques such as behavioural analytics and machine learning, as opposed to being reliant on blocking known threats through the use of signatures)',
                                'name'=>'q4.2',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Response plan',
                                'name'=>'q4.3',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Internal communications plan',
                                'name'=>'q4.4',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'External communications and public relations plan',
                                'name'=>'q4.5',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Breach notification plan',
                                'name'=>'q4.6',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Breach remediation plan',
                                'name'=>'q4.7',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Cyber risk insurance',
                                'name'=>'q4.8',
                                'options'=>[
                                    [
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page5' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>' Which statement best describes how cyber risk management is handled in your company? Please select one',
                        'name'=>'q5',
                        'options'=>[
                            [
                                'label'=>'It doesn\'t have a dedicated owner.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'It is typically delegated to IT or senior management',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'It is shared between IT and various lines of business.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'It is shared between IT and senior management.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'It is shared between IT, senior management, and various lines of business.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q6'=>[
                        'type'=>'groupradio',
                        'question'=>'Of the following, who are part of your cyber risk assessment structure?',
                        'name'=>'q6',
                        'calc'=>[
                            'type'=>'normalize',
                            'value'=>5,
                        ],
                        'options'=>[
                            [
                                'label'=>'CEO',
                                'name'=>'q6.1',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'CFO',
                                'name'=>'q6.2',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'COO',
                                'name'=>'q6.3',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Non-executive board-level risk/compliance/security focused member',
                                'name'=>'q6.4',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Executive board-level risk/compliance/security focused member',
                                'name'=>'q6.5',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Dedicated risk/compliance/security role (non-board)',
                                'name'=>'q6.6',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page7' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'How early is IT security usually brought into business projects and initiatives? Please select one',
                        'name'=>'q7',
                        'options'=>[
                            [
                                'label'=>'Right at the beginning of planning',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'During planning',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'At the beginning of implementation',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'During implementation',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'When something goes wrong',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Cyber Risk Management and the Business',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'How would you describe the level of IT security investment in your organization? Please select one',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'Not nearly enough for what we need to do',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Tight, barely covering essential operations',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Good for core operations, but tight for new initiatives',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Good for core operations, and for new initiatives where the value is clear',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Readily available across the board with a good business case, even for experimental development',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-operations-and-defence' => [
        'title' => 'Cyber Risk Management Operations and Defence',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q9'=>[
                        'type'=>'slider',
                        'question'=>'To what level do you have the following in place for managing your IT physical security?',
                        'name'=>'q9',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Security staff screening',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Prebooked appointments',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>' Identity verification',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Man-traps to enter/exit',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Biometric authentication',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'CCTV monitoring',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Man-shadowing (staff and visitors must work in pairs or be accompanied)',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.7',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Change authorization, approval, and logging',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.8',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page2' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Which of the following best describes your adoption and implementation of IT security best practice? Please select one',
                        'name'=>'q10',
                        'options'=>[
                            [
                                'label'=>'We don\'t do this',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We do this on an informal basis internally.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We do this on a formal basis (using standards) using our general skills.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We do this on a formal basis (using standards) internally using expert skills.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'We use an external expert assessor (using standards).',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q11'=>[
                        'type'=>'slider',
                        'question'=>'How prepared are you for the following aspects of your assessment and implementation of GDPR (General Data Protection Regulation) compliance?',
                        'name'=>'q11',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Knowledge of obligations',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Assessment of capabilities and gaps',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Implementation planning',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Implementation execution',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Continuous improvement/best practice beyond the GDPR itself (beyond the regulations)',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Understanding mitigation of penalties based on early detection/remediation',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page4' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>' Do you tend to invest tactically (point products/as needed) or strategically (part of a plan) in IT security products or solutions? Please select one',
                        'name'=>'q12',
                        'options'=>[
                            [
                                'label'=>'We tend to buy tactically (point products) as issues arise.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We mostly buy tactically as issues arise but have some strategic purchasing.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We have a balance of tactical versus strategic purchasing.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We mostly buy strategically but will buy tactically if we have an issue.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'We tend to buy strategically across the board.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'How often do you report on IT security status to the business? Please select one',
                        'name'=>'q13',
                        'options'=>[
                            [
                                'label'=>'We don\'t do this at all',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Ad hoc if asked',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Annually',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Quarterly',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Monthly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Weekly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Daily',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Hourly',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Continuously',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'What is your primary means of managing your IT security infrastructure? Please select one',
                        'name'=>'q14',
                        'options'=>[
                            [
                                'label'=>'Very ad hoc using spreadsheets etc.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We mainly use \'out-of-the-box\' tools from our security suppliers.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We use a combination of specialized management tools with some \'out-of-the-box\' tools.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We mainly use specialized security management tools.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We use an end-to-end security management suite.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'We use a certified partner to help us manage our IT security infrastructure.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q15'=>[
                        'type'=>'button',
                        'question'=>'To what level have you adopted automation in your IT security management? Please select one',
                        'name'=>'q15',
                        'options'=>[
                            [
                                'label'=>'Manual processes across the board',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Mainly manual processes with a small amount of automation',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'A good balance of automation and manual processes',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Mainly automation with a small amount of manual processes',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Automation across the board',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q16'=>[
                        'type'=>'button',
                        'question'=>'When it comes to your use of automation, how do you intend to change your use of this? Please select one',
                        'name'=>'q16',
                        'options'=>[
                            [
                                'label'=>'Decrease it a lot',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'behind',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Decrease it a little',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'behind',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Stay the same',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Increase it a little',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Increase it a lot',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page9' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q17'=>[
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT security?',
                        'name'=>'q17',
                        'calc'=>[
                            'type'=>'normalize',
                            'value'=>5,
                        ],
                        'options'=>[
                            [
                                'label'=>'NGFW (next-generation firewall)',
                                'name'=>'q17.1',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'IPS/IDS (intrusion detection/protection)',
                                'name'=>'q17.2',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Vulnerability management',
                                'name'=>'q17.3',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Micro segmentation (fine-grained separation and isolation of traffic between specified hosts or domains)',
                                'name'=>'q17.4',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Unified security management (data and information interchange between devices and tools),',
                                'name'=>'q17.5',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Third-party professional security service (pre-sales/design/implementation)',
                                'name'=>'q17.6',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page10' => [
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => [
                    'q25'=>[
                        'type'=>'button',
                        'question'=>'Which statement describes the extent of your use of managed security services providers? Please select one',
                        'name'=>'q25',
                        'options'=>[
                            [
                                'label'=>'We don\'t use them at all.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We use them in a limited fashion, but prefer to do things in-house.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We use them in a balanced way.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'We prefer to use them over doing things in-house.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'We use them extensively wherever possible.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-breach-detection-and-remediation' => [
        'title' => 'Cyber Risk Management Breach Detection and Remediation',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => [
                    'q18'=>[
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT Security: Breach detection',
                        'name'=>'q18',
                        'options'=>[
                            [
                                'label'=>'Threat intelligence services',
                                'name'=>'q18.1',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Real-time analytics',
                                'name'=>'q18.2',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Advanced threat protection/sandboxing',
                                'name'=>'q18.3',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'AI/heuristics',
                                'name'=>'q17.4',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Malware detection',
                                'name'=>'q17.5',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page2' => [
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => [
                    'q19'=>[
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT Security: Breach response',
                        'name'=>'q19',
                        'options'=>[
                            [
                                'label'=>'Intelligence gathering solutions such as \'honeypots\'',
                                'name'=>'q19.1',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Forensic logging and analysis',
                                'name'=>'q19.2',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Failover/system recovery',
                                'name'=>'q19.3',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Tiger/go teams',
                                'name'=>'q19.4',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'External incident response partner',
                                'name'=>'q19.5',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page3' => [
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => [
                    'q20'=>[
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT Security: Breach response',
                        'name'=>'q20',
                        'options'=>[
                            [
                                'label'=>'automated breach response (e.g. machine learning)',
                                'name'=>'q20.1',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Policy updates',
                                'name'=>'q20.2',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Disaster recovery policy',
                                'name'=>'q20.3',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'External disaster recovery providers',
                                'name'=>'q20.4',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Compromise assessments',
                                'name'=>'q20.5',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page4' => [
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => [
                    'q21'=>[
                        'type'=>'groupradio',
                        'question'=>'Have you done the following in regards to understanding your Cyber risk profile?',
                        'name'=>'q21',
                        'options'=>[
                            [
                                'label'=>'Assessed your risk of suffering a cyber breach',
                                'name'=>'q21.1',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Understand potential scale of exposure',
                                'name'=>'q21.2',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Done a data assessment of critical data',
                                'name'=>'q21.3',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Understand posture of extended supply chain or partners',
                                'name'=>'q21.4',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Developed a security breach response plan',
                                'name'=>'q21.5',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page5' => [
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => [
                    'q23'=>[
                        'type'=>'button',
                        'question'=>'How often do you test your IT security defense capabilities through third-party verification? Please select one',
                        'name'=>'q23',
                        'options'=>[
                            [
                                'label'=>'Never',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every few years',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every year',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every 6 months',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every quarter',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Monthly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Weekly',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Continuously',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => [
                    'q24'=>[
                        'type'=>'button',
                        'question'=>'How often do you test your cyber breach incident response plans? Please select one',
                        'name'=>'q24',
                        'options'=>[
                            [
                                'label'=>'Never',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every few years',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every year',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every 6 months',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ],
                            ],
                            [
                                'label'=>'Every quarter',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Monthly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Weekly',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ],
                            ],
                            [
                                'label'=>'Continuously',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
