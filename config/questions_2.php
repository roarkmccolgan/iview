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
                    '6a'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following do you have as part of your cyber risk escalation framework?',
                        'sub'=>'CEO',
                        'name'=>'6a',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '6b'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following do you have as part of your cyber risk escalation framework?',
                        'sub'=>'CFO',
                        'name'=>'6b',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '6c'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following do you have as part of your cyber risk escalation framework?',
                        'sub'=>'COO',
                        'name'=>'6c',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '6d'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following do you have as part of your cyber risk escalation framework?',
                        'sub'=>'Non-executive board-level risk/compliance/security focused member',
                        'name'=>'6d',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '6e'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following do you have as part of your cyber risk escalation framework?',
                        'sub'=>'Executive board-level risk/compliance/security focused member',
                        'name'=>'6e',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '6f'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following do you have as part of your cyber risk escalation framework?',
                        'sub'=>'Dedicated risk/compliance/security role (non-board)',
                        'name'=>'6f',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>3,
                                'checked'=>false
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
                    '9a'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'Security staff screening',
                        'name'=>'9a',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '9b'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'Prebooked appointments',
                        'name'=>'9b',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '9c'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'Identity verification',
                        'name'=>'9c',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '9d'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'Man-traps to enter/exit',
                        'name'=>'9d',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '9e'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'Biometric authentication',
                        'name'=>'9e',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '9f'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'CCTV monitoring',
                        'name'=>'9f',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '9g'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'Man-shadowing (staff and visitors must work in pairs or be accompanied)',
                        'name'=>'9g',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '9h'=>array(
                        'type'=>'radio',
                        'question'=>'To what level do you have the following in place for managing your IT physical security? (Rating scale: 1 = not at all, 5 = very extensive)',
                        'sub'=>'Change authorization, approval, and logging',
                        'name'=>'9h',
                        'options'=>array(
                            array(
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very intensive',
                                'value'=>3,
                                'checked'=>false
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
                    '11a'=>array(
                        'type'=>'radio',
                        'question'=>' How prepared are you for the following aspects of your assessment and implementation of GDPR compliance? (Rating scale: 1 = not prepared at all to 5 = very well prepared)',
                        'sub'=>'Knowledge of obligations',
                        'name'=>'11a',
                        'options'=>array(
                            array(
                                'label'=>'Not prepared',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very well prepared',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '11b'=>array(
                        'type'=>'radio',
                        'question'=>' How prepared are you for the following aspects of your assessment and implementation of GDPR compliance? (Rating scale: 1 = not prepared at all to 5 = very well prepared)',
                        'sub'=>'Assessment of capabilities and gaps',
                        'name'=>'11b',
                        'options'=>array(
                            array(
                                'label'=>'Not prepared',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very well prepared',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '11c'=>array(
                        'type'=>'radio',
                        'question'=>' How prepared are you for the following aspects of your assessment and implementation of GDPR compliance? (Rating scale: 1 = not prepared at all to 5 = very well prepared)',
                        'sub'=>'Implementation planning',
                        'name'=>'11c',
                        'options'=>array(
                            array(
                                'label'=>'Not prepared',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very well prepared',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '11d'=>array(
                        'type'=>'radio',
                        'question'=>' How prepared are you for the following aspects of your assessment and implementation of GDPR compliance? (Rating scale: 1 = not prepared at all to 5 = very well prepared)',
                        'sub'=>'Implementation execution',
                        'name'=>'11d',
                        'options'=>array(
                            array(
                                'label'=>'Not prepared',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very well prepared',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '11e'=>array(
                        'type'=>'radio',
                        'question'=>' How prepared are you for the following aspects of your assessment and implementation of GDPR compliance? (Rating scale: 1 = not prepared at all to 5 = very well prepared)',
                        'sub'=>'Continuous improvement/best practice beyond the GDPR itself (beyond the regulations)',
                        'name'=>'11e',
                        'options'=>array(
                            array(
                                'label'=>'Not prepared',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very well prepared',
                                'value'=>3,
                                'checked'=>false
                            )
                        )
                    ),
                    '11f'=>array(
                        'type'=>'radio',
                        'question'=>' How prepared are you for the following aspects of your assessment and implementation of GDPR compliance? (Rating scale: 1 = not prepared at all to 5 = very well prepared)',
                        'sub'=>'Understanding mitigation of penalties based on early detection/remediation',
                        'name'=>'11f',
                        'options'=>array(
                            array(
                                'label'=>'Not prepared',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Very well prepared',
                                'value'=>3,
                                'checked'=>false
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
        )
    )
);