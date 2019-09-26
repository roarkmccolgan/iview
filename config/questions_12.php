<?php
// Dassault
return [
    'digital-business' => [
        'title' => 'Digital Business',
        'description' => '',
        'background' => false,
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'background' => false,
        'intermission' => false,
        'class' => 'sec1',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'How difficult is for your organization to cope with changes in business patterns?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Not at all difficult',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Slightly difficult',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Moderately',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Difficult',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very Difficult',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'How difficult is for your organization to adapt to your changes in staffing levels?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Not at all difficult',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Slightly difficult',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Moderately',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Difficult',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very Difficult',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Not using and no plans to within 12 months',
                            'Not using, but planning to within 12 months',
                            'Yes – for a small proportion of the business (less than half of workforce)',
                            'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                            'Yes – for most or all of the business (80% or more of workers)',
                        ],
                        'question'=>'To what extent does your organization use the following application types?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Productivity (email, word processing, spreadsheets, presentations etc)',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Collaboration (File sharing, VoIP, Video Conferencing etc)',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 3.3,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'ERP',
                                'name'=> 3.4,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Digital Design (CAD,CAE, CAM etc)',
                                'name'=> 3.5,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'PLM software',
                                'name'=> 3.6,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Simulation software',
                                'name'=> 3.7,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Analytics software',
                                'name'=> 3.8,
                                'options'=>[
                                    [
                                        'label'=>'Not using and no plans to within 12 months',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a small proportion of the business (less than half of workforce)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for a significant proportion of the business (more than half of workforce, but less than 80%)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes – for most or all of the business (80% or more of workers)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Not at all successful',
                            'Slightly successful',
                            'Moderately successful',
                            'Successful',
                            'Very successful',
                        ],
                        'question'=>'On a scale of 1 - 5, please rate the success of the current deployment of each of the following application types at your organization?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Productivity (email, word processing, spreadsheets, presentations etc)',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.1,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Collaboration (File sharing, VoIP, Video Conferencing etc)',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.2,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.3,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'ERP',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.4,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Digital Design (CAD,CAE, CAM etc)',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.5,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'PLM software',
                                'name'=> 4.6,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.6,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Simulation software',
                                'name'=> 4.7,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.7,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Analytics software',
                                'name'=> 4.8,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.8,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'digital-design' => [
        'title' => 'Digital Design',
        'description' => '',
        'background' => false,
        'nuggets' => [
            'omnichannel.png',
            'boat.png',
        ],
        'intermission' => false,
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Digital Design',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes how your organization tends to roll out CAD/CAM applications or updates?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Our IT department does this manually on an ad-hoc basis',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Our IT department does this manually on planned basis',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Our IT department does this using automation tools',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a supplier/service provider with the necessary skills or tools do this for us',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Our CAD/CAM implementation automatically upgrades and maintains our software',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Digital Design',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'How old since release is the version of Digital Design application that is most commonly deployed in your organisation?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Less than six months',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Six months to 1 year',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1 to 2 years',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2 to 3 years',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'3 years or more',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Digital Design',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Not at all successful',
                            'Slightly successful',
                            'Moderately successful',
                            'Successful',
                            'Very successful',
                        ],
                        'question'=>'On a scale of 1 to 5, how successfully does your Digital Design solution rate for the following? ',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Reliability',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Scalability',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Performance',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Industry platfom for ecosystem support',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Value for money',
                                'name'=> 7.5,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Manageability',
                                'name'=> 7.6,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Features',
                                'name'=> 7.7,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Collaboration',
                                'name'=> 7.8,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Security',
                                'name'=> 7.9,
                                'options'=>[
                                    [
                                        'label'=>'Not at all successful',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly successful',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately successful',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Successful',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very successful',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'digital-delivery' => [
        'title' => 'Digital Delivery',
        'description' => '',
        'background' => false,
        'nuggets' => [
            'managed.png',
            'intellectual.png',
        ],
        'intermission' => '',
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Digital Delivery',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'How does the Senior Management of the company view the role of IT within the business?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'IT is seen as a necessary cost',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'IT is seen as a driver of business efficiency',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'IT is seen as a driver of competitive advantage or differentiation',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Digital Delivery',
                'questions' => [
                    'q9'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'In-house (on-premises) solution',
                            'Managed Services Provider',
                            'Public Cloud Provider service',
                        ],
                        'question'=>'Please indicate how your organization is primarily delivering (or plans to deliver) each of the following application types to end users? Select one for each',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Productivity (email, word processing, spreadsheets, presentations etc)',
                                'name'=> 9.1,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Collaboration (File sharing, VoIP, Video Conferencing etc))',
                                'name'=> 9.2,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 9.3,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'ERP',
                                'name'=> 9.4,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Digital Design (CAD,CAE, CAM etc)',
                                'name'=> 9.5,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'PLM software',
                                'name'=> 9.6,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Simulation software',
                                'name'=> 9.7,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Analytics software',
                                'name'=> 9.8,
                                'options'=>[
                                    [
                                        'label'=>'In-house (on-premises) solution',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed Service Provider',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Public Cloud Provider service',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Digital Delivery',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Which statement best represents your organization\'s approach to adopting Cloud services for delivering IT services or applications? [RANDOMIZE LIST]',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'We prefer to run everything in-house',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We prefer to run things in-house where possible, but are open to using Cloud if necessary',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We take a balanced approach to running things in-house or in the Cloud',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We tend to run things in the Cloud, but do run things in-house if necessary',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We prefer to use the Cloud for everything',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
