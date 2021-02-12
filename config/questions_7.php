<?php

//7 Symanted GDPR
return [
    'gdpr' => [
        'title' => 'GDPR',
        'class' => 'sec1',
        'icon' => 'icon-gdpr',
        'display' => true,
        'complete' => false,
        'sub-report' => false,
        'pages' => [
            'page1' => [
                'title' => 'Approach to IT',
                'questions' => [
                    'q1'=>[
                        'type'=>'radio',
                        'question'=>'Which of the following best describes your organisation\'s approach to GDPR compliance? <span class="small">(Choose 1)</span>',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'We don\'t know what GDPR is and how it is going to affect us',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are only just starting to learn about GDPR requirements',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We aim to implement minimal sufficient GDPR compliance in order to avoid audits and fines',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are aiming to go beyond the minimum standard and achieve comprehensive GDPR compliance',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are looking to achieve best in class GDPR compliance',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'GDPR',
                'questions' => [
                    'q2'=> [
                        'type'=>'checkbox',
                        'question'=>'Which of these GDPR-specific areas do you think your organization will need to focus on the most? <span class="small">select your top 3</span>',
                        'name'=>'q2',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Assess and classify data appropriately',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Identify applications which use GDPR-relevant data',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Conduct a dataflow analysis',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Review and improve identity and access management',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Establish documentation processes to comply with accountability requirements',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Internal communication/educate employees',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Implement Privacy by design and privacy by default',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'GDPR',
                'questions' => [
                    'q3' => [
                        'type'=>'checkbox',
                        'question'=>'Which of the following GDPR requirements will pose the greatest challenge to your organization? <span class="small">select your top 3</span>',
                        'name'=>'q3',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Data portability',
                                'hint'=>'the need to provide data in machine readable format upon request',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Service a person\'s data access request',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Data breach notification within 72 hours of discovery',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Data protection by design and by default',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Encryption and/or pseudonymization of data',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Defining what \'state of the art\' (SotA) means for our organization',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Defining data use cases and managing consent',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Undertaking customer profiling in compliance with GDPR',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Managing cloud providers, cloud applications, and international data transfers.',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'GDPR',
                'questions' => [
                    'q4' => [
                        'type'=>'radio',
                        'question'=>'How confident are you that you can identify and locate every instance of an individual\'s personal data in your systems? <span class="small">(For example in the event of an individual requesting a record of data held by you or the removal of their data including in systems that are not entirely controlled by your IT department, such as cloud applications)</span>',
                        'name'=>'q4',
                        'options'=>[
                            [
                                'label'=>'Not confident at all',
                                'hint'=>'We could find less than 20% of instances',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Low confidence',
                                'hint'=>'We could find more than 20% of instances',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Moderate confidence',
                                'hint'=>'We could find more than 40% of instances',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'High confidence',
                                'hint'=>'We could find more than 60% of instances',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Completely confident',
                                'hint'=>'We could find all instances',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'GDPR',
                'questions' => [
                    'q5' => [
                        'type'=>'slider',
                        'question'=>'At a high level, does your organization have insight into each of the following types of data today?',
                        'name'=>'q5',
                        'options'=>[
                            [
                                'label'=>'We know our structured information',
                                'hint'=>'(databases, data warehouses, content management systems)',
                                'name'=>'q5.1',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We know our unstructured information',
                                'hint'=>'(files, folders, workbooks, documents, email, etc.)',
                                'name'=>'q5.2',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We know our irrelevant data',
                                'hint'=>'(data without any business value, redundant, obsolete, trivial)',
                                'name'=>'q5.3',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We know who owns data and who can access it',
                                'name'=>'q5.4',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We know how long we need to keep data',
                                'name'=>'q5.5',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We know when we need to/can delete data',
                                'name'=>'q5.6',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We know which regulation applies to special categories of data',
                                'name'=>'q5.7',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We understand all the copies we have of our personal data',
                                'hint'=>'(in backup, in test/dev, in disaster recovery site, on mobile devices, in the cloud)',
                                'name'=>'q5.8',
                                'options'=>[
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                ],
                            ],

                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'GDPR',
                'questions' => [
                    'q6' => [
                        'type'=>'radio',
                        'question'=>'What effect will GDPR have on your use of cloud services?',
                        'name'=>'q6',
                        'required' > 1,
                        'options'=>[
                            [
                                'label'=>'It will stop us using the cloud altogether',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Move to in-country cloud providers or datacenters',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Move to in-region (Europe-based) but not in-country cloud datacenters',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We don\'t use cloud services',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We\'ll carry on using cloud services but will improve our data protection (eg via process, DLP or tokenisation)',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No impact — we\'ll carry on using cloud services as before',
                                'value'=>4,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'GDPR',
                'questions' => [
                    'q7' => [
                        'type'=>'button',
                        'question'=>'Regarding leadership of your GDPR programme, has your organisation established a cross-functional compliance taskforce or governance board that involves GRC, IT, and operational stakeholders?',
                        'name'=>'q7',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'Yes – fully established',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes – started but not yet fully established',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No – but planned within the next 12 months',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'GDPR',
                'questions' => [
                    'q8' => [
                        'type'=>'slider',
                        'question'=>'To what extent are you worried about the potential consequences of GDPR? <span class="small">Where 1 is not at all worried and 5 is extremely worried</span>',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'We are worried about getting fined',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q8.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We are worried about class action law suits',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q8.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We are worried about mandatory breach notification',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q8.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We are worried about suspension of data processing activities by the regulator',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q8.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We are worried about the reputational risk of non-compliance',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q8.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page9' => [
                'title' => 'GDPR',
                'questions' => [
                    'q9' => [
                        'type'=>'checkbox',
                        'question'=>'What is limiting your ability to establish full GDPR compliance across your data management environment? <span class="small">select 3</span>',
                        'name'=>'q9',
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Lack of GDPR compliance knowledge',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Lack of budget',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Limited resources',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Conflicting priorities',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Not enough collaboration between the GDPR compliance team and other stakeholders',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Fragmentation or lack of integration of Big Data, reporting, and analytics portfolio',
                                'value'=>4,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
