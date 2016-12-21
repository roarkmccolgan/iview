<?php
return array(
    'screeners' => array(
        'title' => 'Demographics',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Screeners',
                'questions' => array(
                    's1'=>array(
                        'type'=>'button',
                        'question'=>'In which country is the company you work for situated? Please select one',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'label'=>'France',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Germany',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'United Kingdom',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Spain',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Italy',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Other',
                                'value'=>0,
                                'checked'=>false
                            )
                        ),
                        'other'=>'Other|0|Your country'
                    )
                )
            ),
            'page2' => array(
                'title' => 'Screeners',
                'questions' => array(
                    's2'=>array(
                        'type'=>'button',
                        'question'=>'How many full time employees work at your organization worlwide? Please select one',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'label'=>'Less than 1000',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1000-2499',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'2500-4999',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'5000-9999',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'10000 or more',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Screeners',
                'questions' => array(
                    's3'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following industry classifications best represents your organization? Please select one',
                        'name'=>'s3',
                        'options'=>array(
                            array(
                                'label'=>'Financial services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Manufacturing',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Telecommunications services (including hosters, xSPs and Cloud Service Providers)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Education',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Healthcare',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Media',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Transport, distribution and logistics',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Retail and Wholesale',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT consulting and IT-related professional services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non-IT consulting and other professional services (accounting, legal, advertising, real estate, recruitment, business consulting, etc.) ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Central or Local Government, or Public services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Utilities - Electricity, Gas, Water',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Other',
                                'value'=>1,
                                'checked'=>false,
                                'other' => true
                            )
                        ),
                        'other'=>'Other|1|Please Specify Industry'
                    )
                )
            )
        )
    ),
    'cyber-risk-management-and-the-business' => array(
        'title' => 'Cyber Risk Management and the Business',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'How does senior business management tend to view the role of IT? Please select one',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'A necessary cost',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'An enabler of business efficiency',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'A driver of competitive advantage or differentiation',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'When it comes to business requests for new or enhanced applications or services, which statement best reflects your IT department\'s capabilities? Please select one',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'We struggle to deal with most requests.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We are generally OK with requests around existing applications or services, but struggle with requests for new or enhance',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We are generally OK with requests both for existing applications and services, and new or enhanced services.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We are very good at delivery on most or all requests.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Which statement best describes your attitude to risk at a business level? Please select one',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'We avoid risk at all costs.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We tend to avoid risks, but will take some risks where there is a very good justification.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We are wary of risks, but will take them where we can see a clear business benefit.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We will take on risk readily to help the business develop.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'We actively take on and manage risk to help the business develop.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupradio',
                        'question'=>'Which of the following do you already have in place to protect your business in the event of an incident?',
                        'name'=>'q4',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'A formal risk assessment',
                                'name'=>'q4.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Proactive detection (solutions that are able to identify unknown threats through techniques such as behavioural analytics and machine learning, as opposed to being reliant on blocking known threats through the use of signatures)',
                                'name'=>'q4.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Response plan',
                                'name'=>'q4.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Internal communications plan',
                                'name'=>'q4.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'External communications and public relations plan',
                                'name'=>'q4.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Breach notification plan',
                                'name'=>'q4.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Breach remediation plan',
                                'name'=>'q4.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cyber risk insurance',
                                'name'=>'q4.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page5' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>' Which statement best describes how cyber risk management is handled in your company? Please select one',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'It doesn\'t have a dedicated owner.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'It is typically delegated to IT or senior management',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'It is shared between IT and various lines of business.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'It is shared between IT and senior management.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'It is shared between IT, senior management, and various lines of business.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'groupradio',
                        'question'=>'Of the following, who are part of your cyber risk assessment structure?',
                        'name'=>'q6',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'CEO',
                                'name'=>'q6.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'CFO',
                                'name'=>'q6.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'COO',
                                'name'=>'q6.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Non-executive board-level risk/compliance/security focused member',
                                'name'=>'q6.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Executive board-level risk/compliance/security focused member',
                                'name'=>'q6.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Dedicated risk/compliance/security role (non-board)',
                                'name'=>'q6.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page7' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'How early is IT security usually brought into business projects and initiatives? Please select one',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'Right at the beginning of planning',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'During planning',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'At the beginning of implementation',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'During implementation',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'When something goes wrong',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Cyber Risk Management and the Business',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe the level of IT security investment in your organization? Please select one',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Not nearly enough for what we need to do',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Tight, barely covering essential operations',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Good for core operations, but tight for new initiatives',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Good for core operations, and for new initiatives where the value is clear',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Readily available across the board with a good business case, even for experimental development',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    ),
    'cyber-risk-management-operations-and-defence' => array(
        'title' => 'Cyber Risk Management Operations and Defence',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'slider',
                        'question'=>'To what level do you have the following in place for managing your IT physical security?',
                        'name'=>'q9',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Security staff screening',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Prebooked appointments',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>' Identity verification',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Man-traps to enter/exit',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Biometric authentication',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'CCTV monitoring',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Man-shadowing (staff and visitors must work in pairs or be accompanied)',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Change authorization, approval, and logging',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.8',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page2' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following best describes your adoption and implementation of IT security best practice? Please select one',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t do this',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We do this on an informal basis internally.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We do this on a formal basis (using standards) using our general skills.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We do this on a formal basis (using standards) internally using expert skills.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'We use an external expert assessor (using standards).',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'slider',
                        'question'=>'How prepared are you for the following aspects of your assessment and implementation of GDPR (General Data Protection Regulation) compliance?',
                        'name'=>'q11',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Knowledge of obligations',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Assessment of capabilities and gaps',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Implementation planning',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Implementation execution',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Continuous improvement/best practice beyond the GDPR itself (beyond the regulations)',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Understanding mitigation of penalties based on early detection/remediation',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page4' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>' Do you tend to invest tactically (point products/as needed) or strategically (part of a plan) in IT security products or solutions? Please select one',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'We tend to buy tactically (point products) as issues arise.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We mostly buy tactically as issues arise but have some strategic purchasing.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We have a balance of tactical versus strategic purchasing.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We mostly buy strategically but will buy tactically if we have an issue.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'We tend to buy strategically across the board.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'How often do you report on IT security status to the business? Please select one',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t do this at all',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Ad hoc if asked',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Annually',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Quarterly',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Monthly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Weekly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Daily',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Hourly',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Continuously',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'What is your primary means of managing your IT security infrastructure? Please select one',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'Very ad hoc using spreadsheets etc.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We mainly use \'out-of-the-box\' tools from our security suppliers.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We use a combination of specialized management tools with some \'out-of-the-box\' tools.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We mainly use specialized security management tools.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We use an end-to-end security management suite.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'We use a certified partner to help us manage our IT security infrastructure.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'button',
                        'question'=>'To what level have you adopted automation in your IT security management? Please select one',
                        'name'=>'q15',
                        'options'=>array(
                            array(
                                'label'=>'Manual processes across the board',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Mainly manual processes with a small amount of automation',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'A good balance of automation and manual processes',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Mainly automation with a small amount of manual processes',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Automation across the board',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'When it comes to your use of automation, how do you intend to change your use of this? Please select one',
                        'name'=>'q16',
                        'options'=>array(
                            array(
                                'label'=>'Decrease it a lot',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'behind',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Decrease it a little',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'behind',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Stay the same',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Increase it a little',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Increase it a lot',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ]
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT security?',
                        'name'=>'q17',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'NGFW (next-generation firewall)',
                                'name'=>'q17.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'IPS/IDS (intrusion detection/protection)',
                                'name'=>'q17.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Vulnerability management',
                                'name'=>'q17.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Micro segmentation (fine-grained separation and isolation of traffic between specified hosts or domains)',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Unified security management (data and information interchange between devices and tools),',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Third-party professional security service (pre-sales/design/implementation)',
                                'name'=>'q17.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
            ),
            'page10' => array(
                'title' => 'Cyber Risk Management Operations and Defence',
                'questions' => array(
                    'q25'=>array(
                        'type'=>'button',
                        'question'=>'Which statement describes the extent of your use of managed security services providers? Please select one',
                        'name'=>'q25',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t use them at all.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We use them in a limited fashion, but prefer to do things in-house.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We use them in a balanced way.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'inline',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'We prefer to use them over doing things in-house.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'We use them extensively wherever possible.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            )
                        )
                    )
                )
            )
        )
    ),
    'cyber-risk-management-breach-detection-and-remediation' => array(
        'title' => 'Cyber Risk Management Breach Detection and Remediation',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT Security: Breach detection',
                        'name'=>'q18',
                        'options'=>array(
                            array(
                                'label'=>'Threat intelligence services',
                                'name'=>'q18.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Real-time analytics',
                                'name'=>'q18.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Advanced threat protection/sandboxing',
                                'name'=>'q18.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'AI/heuristics',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Malware detection',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page2' => array(
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT Security: Breach response',
                        'name'=>'q19',
                        'options'=>array(
                            array(
                                'label'=>'Intelligence gathering solutions such as \'honeypots\'',
                                'name'=>'q19.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Forensic logging and analysis',
                                'name'=>'q19.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Failover/system recovery',
                                'name'=>'q19.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Tiger/go teams',
                                'name'=>'q19.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'External incident response partner',
                                'name'=>'q19.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT Security: Breach response',
                        'name'=>'q20',
                        'options'=>array(
                            array(
                                'label'=>'automated breach response (e.g. machine learning)',
                                'name'=>'q20.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'ahead',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Policy updates',
                                'name'=>'q20.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Disaster recovery policy',
                                'name'=>'q20.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'behind',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'External disaster recovery providers',
                                'name'=>'q20.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Compromise assessments',
                                'name'=>'q20.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page4' => array(
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'groupradio',
                        'question'=>'Have you done the following in regards to understanding your Cyber risk profile?',
                        'name'=>'q21',
                        'options'=>array(
                            array(
                                'label'=>'Assessed your risk of suffering a cyber breach',
                                'name'=>'q21.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Understand potential scale of exposure',
                                'name'=>'q21.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Done a data assessment of critical data',
                                'name'=>'q21.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Understand posture of extended supply chain or partners',
                                'name'=>'q21.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'ahead',
                                            'stage3' => 'ahead',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Developed a security breach response plan',
                                'name'=>'q21.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'ahead',
                                            'stage2' => 'inline',
                                            'stage3' => 'inline',
                                            'stage4' => 'inline',
                                            'stage5' => 'inline',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'inline',
                                            'stage2' => 'behind',
                                            'stage3' => 'behind',
                                            'stage4' => 'behind',
                                            'stage5' => 'behind',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page5' => array(
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => array(
                    'q23'=>array(
                        'type'=>'button',
                        'question'=>'How often do you test your IT security defense capabilities through third-party verification? Please select one',
                        'name'=>'q23',
                        'options'=>array(
                            array(
                                'label'=>'Never',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every few years',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every year',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every 6 months',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every quarter',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Monthly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Weekly',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Continuously',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management Breach Detection and Remediation',
                'questions' => array(
                    'q24'=>array(
                        'type'=>'button',
                        'question'=>'How often do you test your cyber breach incident response plans? Please select one',
                        'name'=>'q24',
                        'options'=>array(
                            array(
                                'label'=>'Never',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'behind',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every few years',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'inline',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every year',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'inline',
                                    'stage3' => 'behind',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every 6 months',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'inline',
                                    'stage4' => 'behind',
                                    'stage5' => 'behind',
                                ]
                            ),
                            array(
                                'label'=>'Every quarter',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'inline',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Monthly',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Weekly',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'inline',
                                ]
                            ),
                            array(
                                'label'=>'Continuously',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'ahead',
                                    'stage2' => 'ahead',
                                    'stage3' => 'ahead',
                                    'stage4' => 'ahead',
                                    'stage5' => 'ahead',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    )
);