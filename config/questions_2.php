<?php
return array(
    /*'screeners' => array(),*/
    'it-security' => array(
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'How does senior business management tend to view the role of IT?',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'A necessary cost',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'An enabler of business efficiency',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A driver of competitive advantage or differentiation',
                                'value'=>3,
                                'checked'=>false
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
                'title' => 'IT Security',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'When it comes to business requests for new or enhanced applications or services, which statement best reflects your IT department\'s capabilities?',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'We struggle to deal with most requests.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are generally OK with requests around existing applications or services, but struggle with requests for new or enhance',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are generally OK with requests both for existing applications and services, and new or enhanced services.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are very good at delivery on most or all requests.',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Which statement best describes your attitude to risk at a business level?',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'We avoid risk at all costs.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We tend to avoid risks, but will take some risks where there is a very good justification.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are wary of risks, but will take them where we can see a clear business benefit.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We will take on risk readily to help the business develop.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We actively take on and manage risk to help the business develop.',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupradio',
                        'question'=>'Which of the following do you already have in place to protect your business in the event of an incident?',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'A formal risk assessment',
                                'name'=>'q4.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Proactive detection',
                                'name'=>'q4.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Response plan',
                                'name'=>'q4.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Internal communications plan',
                                'name'=>'q4.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'External communications and public relations plan',
                                'name'=>'q4.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Breach notification plan',
                                'name'=>'q4.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Breach remediation plan',
                                'name'=>'q4.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cyber risk insurance',
                                'name'=>'q4.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Currently have',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Don\'t have, but planned',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>3,
                                        'checked'=>false,
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
                'title' => 'IT Security',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>' Which statement best describes how cyber risk management is handled in your company?',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'It doesn\'t have a dedicated owner.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'It is typically delegated to IT.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'It is shared between IT and various lines of business.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'It is shared between IT and senior management.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'It is shared between IT, senior management, and various lines of business.',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'groupradio',
                        'question'=>'Which of the following do you have as part of your cyber risk escalation framework?',
                        'name'=>'q6',
                        'options'=>array(
                            array(
                                'label'=>'CEO',
                                'name'=>'q6.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
                'title' => 'IT Security',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'How early is IT security usually brought into business projects and initiatives?',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'Right at the beginning of planning',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'During planning',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'At the beginning of implementation',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'During implementation',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'When something goes wrong',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe the level of IT security investment in your organization?',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Not nearly enough for what we need to do',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Tight, barely covering essential operations',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Good for core operations, but tight for new initiatives',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Good for core operations, and for new initiatives where the value is clear',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Readily available across the board with a good business case, even for experimental development',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'slider',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'name'=>'q9',
                        'options'=>array(
                            array(
                                'label'=>'Security staff screening',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Prebooked appointments',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>' Identity verification',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Man-traps to enter/exit',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Biometric authentication',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'CCTV monitoring',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Man-shadowing (staff and visitors must work in pairs or be accompanied)',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Change authorization, approval, and logging',
                                'from'=>'Not at all',
                                'to'=>'Very intensive',
                                'name'=>'q9.8',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
            'page10' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following best describes your adoption and implementation of IT security best practice?',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t do this',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this on an informal basis internally.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this on a formal basis (using standards) using our general skills.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We do this on a formal basis (using standards) internally using expert skills.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use an external expert assessor (using standards).',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page11' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'slider',
                        'question'=>'How prepared are you for the following aspects of your assessment and implementation of GDPR compliance? (Rating scale: 1 = not prepared at all to 5 = very well prepared',
                        'name'=>'q11',
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
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
            'page12' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>' Do you tend to invest tactically (point products/as needed) or strategically (part of a plan) in IT security products or solutions?',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'We tend to buy tactically (point products) as issues arise.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We mostly buy tactically as issues arise but have some strategic purchasing.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a balance of tactical versus strategic purchasing.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We mostly buy strategically but will buy tactically if we have an issue.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We tend to buy strategically across the board.',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page13' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'How often do you report on IT security status to the business?',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t do this at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ad hoc if asked',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Annually',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Quarterly',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Monthly',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Weekly',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Daily',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hourly',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Continuously',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page14' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'What is your primary means of managing your IT security infrastructure?',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'Very ad hoc using spreadsheets etc.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We mainly use \'out-of-the-box\' tools from our security suppliers.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use a combination of specialized management tools with some \'out-of-the-box\' tools.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We mainly use specialized security management tools.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use an end-to-end security management suite.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use a certified partner to help us manage our IT security infrastructure.',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page15' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'button',
                        'question'=>'To what level have you adopted automation in your IT security management?',
                        'name'=>'q15',
                        'options'=>array(
                            array(
                                'label'=>'Manual processes across the board',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mainly manual processes with a small amount of automation',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A good balance of automation and manual processes',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mainly automation with a small amount of manual processes',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Automation across the board',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page16' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'When it comes to your use of automation, how do you intend to change your use of this?',
                        'name'=>'q16',
                        'options'=>array(
                            array(
                                'label'=>'Decrease it a lot',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Decrease it a little',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Stay the same',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Increase it a little',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Increase it a lot',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page17' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'groupradio',
                        'question'=>'Do you make use of the following regarding IT security?',
                        'name'=>'q17',
                        'options'=>array(
                            array(
                                'label'=>'NGFW (next-generation firewall) - defence',
                                'name'=>'q17.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'IPS/IDS (intrusion detection/protection) - defence',
                                'name'=>'q17.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Vulnerability management - defence',
                                'name'=>'q17.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Micro segmentation (fine-grained separation and isolation of traffic between specified hosts or domains) - defence',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Unified security management (data and information interchange between devices and tools) - defence,',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Third-party professional security service (pre-sales/design/implementation) - defence',
                                'name'=>'q17.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Threat intelligence services - breach detection',
                                'name'=>'q17.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Real-time analytics - breach detection',
                                'name'=>'q17.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Advanced threat protection/sandboxing - breach detection',
                                'name'=>'q17.9',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'AI/heuristics - breach detection',
                                'name'=>'q17.10',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Malware scanning - breach detection',
                                'name'=>'q17.11',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Honeypot/intelligence gathering - breach response',
                                'name'=>'q17.12',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Forensic logging and analysis - breach response',
                                'name'=>'q17.13',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Failover/system recovery - breach response',
                                'name'=>'q17.14',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Tiger/go teams - breach response',
                                'name'=>'q17.15',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'External incident response partner - breach response',
                                'name'=>'q17.16',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Automated remediation (machine learning based) - breach remediation',
                                'name'=>'q17.17',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Policy updates - breach remediation',
                                'name'=>'q17.18',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Disaster recovery policy - breach remediation',
                                'name'=>'q17.19',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'External disaster recovery providers - breach remediation',
                                'name'=>'q17.20',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Compromise assessments - breach remediation',
                                'name'=>'q17.21',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
            'page18' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'groupradio',
                        'question'=>'Have you done the following in regards to understanding your cyber risk profile?',
                        'name'=>'q18',
                        'options'=>array(
                            array(
                                'label'=>'Assessed your risk of suffering a cyber breach',
                                'name'=>'q18.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Understand potential scale of exposure',
                                'name'=>'q18.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Done a data assessment of critical data',
                                'name'=>'q18.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Understand posture of extended supply chain or partners',
                                'name'=>'q18.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Developed a security breach response plan',
                                'name'=>'q18.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
            'page19' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'button',
                        'question'=>'How often do you test your IT security defense capabilities through third-party verification?',
                        'name'=>'q19',
                        'options'=>array(
                            array(
                                'label'=>'Never',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every few years',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every year',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every 6 months',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every quarter',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Monthly',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Continuously',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page20' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'button',
                        'question'=>'How often do you test your cyber breach incident response plans?',
                        'name'=>'q20',
                        'options'=>array(
                            array(
                                'label'=>'Never',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every few years',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every year',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every 6 months',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Every quarter',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Monthly',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Continuously',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page21' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'button',
                        'question'=>'Which statement describes the extent of your use of managed security services providers?',
                        'name'=>'q21',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t use them at all.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use them in a limited fashion, but prefer to do things in-house.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use them in a balanced way.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We prefer to use them over doing things in-house.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use them extensively wherever possible.',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page22' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q22'=>array(
                        'type'=>'slider',
                        'question'=>'To what extent do you agree/disagree with the following motivators to using managed security services providers? (Rating scale: 1 = disagree strongly to 5 = agree strongly)',
                        'name'=>'q22',
                        'options'=>array(
                            array(
                                'label'=>'They have much better capabilities than we can manage in-house',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q22.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'They are cheaper than what we can do ourselves.',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q22.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'They can be trusted with our secure data',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q22.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'They improve our visibility and control on our estate',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q22.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'They can provide a better security posture for us',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q22.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'They have more capable staff than we can afford to keep',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q22.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Using MSSPs will maintain or enhance our political status or relevance within our company',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q22.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
            'page23' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q23'=>array(
                        'type'=>'slider',
                        'question'=>'When it comes to your use of threat intelligence services, to what extent to you agree/disagree with the following? (Rating scale: 1 = disagree strongly to 5 = agree strongly',
                        'name'=>'q23',
                        'options'=>array(
                            array(
                                'label'=>'It provides actionable intelligence',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q23.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'It is targeted to the context of my organization/vertical industry.',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q23.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'It\'s close enough to real time to be of use',
                                'from'=>'Strongly disagree',
                                'to'=>'Strongly agree',
                                'name'=>'q23.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
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
            'page24' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q24'=>array(
                        'type'=>'groupradio',
                        'question'=>'And again looking at threat intelligence services, do you do the following?',
                        'name'=>'q24',
                        'options'=>array(
                            array(
                                'label'=>'We make use of global insight. - And again looking at threat intelligence services, do you do the following?',
                                'name'=>'q24.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We do multiway sharing of information. - And again looking at threat intelligence services, do you do the following?',
                                'name'=>'q24.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
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
            'page25' => array(
                'title' => 'IT Security',
                'questions' => array(
                    'q25'=>array(
                        'type'=>'button',
                        'question'=>'What is limiting your ability to improve your IT security capabilities? Select the top 3 factors',
                        'name'=>'q25',
                        'options'=>array(
                            array(
                                'label'=>'Budget constraints',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Juggling conflicting priorities',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Operations resources are too busy on routine operations',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Skills shortages',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'High level of demand for new business services',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Lack of insight into security sensitive activities',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not enough integration into the IT infrastructure teams',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fragmentation or lack of integration of security product portfolio',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Competing with cloud resources used/shadow IT',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Other',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
        )
    )
);