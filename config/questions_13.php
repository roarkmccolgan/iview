<?php
// Hitachi
return [
    'migration' => [
        'title' => 'Cloud migration and application modernization',
        'description' => '
            <h2 class="">Cloud migration and application modernization</h2>
            <p class="mb-4">This dimension measures the readiness of your Cloud Migration and Application modernisation strategy. We believe this is important because the drivers for cloud migration, the challenges you face in your cloud migration and application modernization journeys as well as the objectives tied to these initiatives give valuable insights into the maturity of your overall cloud strategy</p>
            ',
        'background' => 'migration.png',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cloud migration and application modernization',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'What is the key driver of your cloud migration and application modernization strategy?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Cost savings',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automation to achieve IT operational efficiencies, while reducing complexity and freeing up resources',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Responding to competitive threats and disruption',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Capitalize on new data-driven revenue streams and innovation',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Cloud migration and application modernization',
                'questions' => [
                    'q2'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'sum'
                        // ],
                        'optionLabels' => [
                            'Impeding progress',
                            'Working through',
                            'Resolved',
                        ],
                        'question'=>'To what degree are these challenges impacting your cloud strategy?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Securing budgets and buy in (battling to demonstrate the value of cloud)',
                                'name'=> 2.1,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Assessing and modernizing applications to get the benefits of the cloud',
                                'name'=> 2.2,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Security concerns and digital trust',
                                'name'=> 2.3,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Concerns about scalability and agility',
                                'name'=> 2.4,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Attracting and retaining the right technical skills',
                                'name'=> 2.5,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Adopting DevOps based processes ',
                                'name'=> 2.6,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Reducing technical debt',
                                'name'=> 2.7,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Cloud migration and application modernization',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'sum'
                        // ],
                        'optionLabels' => [
                            'Not apart of our 2-3 year strategy',
                            'Included in the strategy but not very important right now',
                            'An immediate priority and critical to the success of our strategy',
                        ],
                        'question'=>'Looking at your 2-3 year strategy, please rank the importance of the following initiatives? ',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Automating and orchestrating the exchange of data within your ecosystem',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'Not apart of our 2-3 year strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Creating IT efficiencies within the data centre, freeing up resources (HR, IT, Server storage) ',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'Not apart of our 2-3 year strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Developing new digital experiences that drive digital satisfaction and revenue',
                                'name'=> 3.3,
                                'options'=>[
                                    [
                                        'label'=>'Not apart of our 2-3 year strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Implementing Agile cloud-based application architectures',
                                'name'=> 3.4,
                                'options'=>[
                                    [
                                        'label'=>'Not apart of our 2-3 year strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Satisfying security, regulatory compliance and data governance requirements',
                                'name'=> 3.5,
                                'options'=>[
                                    [
                                        'label'=>'Not apart of our 2-3 year strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Leveraging an Intelligent Core to implement and scale artificial intelligence and machine learning ',
                                'name'=> 3.6,
                                'options'=>[
                                    [
                                        'label'=>'Not apart of our 2-3 year strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'Cloud migration and application modernization',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'sum'
                        // ],
                        'optionLabels' => [
                            'Impeding progress',
                            'Working through',
                            'Resolved',
                        ],
                        'question'=>'To which degree are these cloud migration challenges faced by your organization?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Assessing which applications and when to move them to the cloud (critical apps, volume, number of)',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Understanding the complexity of the application migration',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Choosing the right cloud migration partner or advisor',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Defining the right migration strategy (Lift and shift, lift and transform, refactor)',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Lacking cloud migration skills internally',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            
                        ]
                    ]
                ]
            ]
        ]
    ],
    'status' => [
        'title' => 'Cloud and Multicloud Status',
        'description' => '
            <h2 class="">Cloud and Multicloud Status</h2>
            <p class="mb-4">This dimension measures your readiness in Multicloud strategy. Multicloud and hybrid clouds are inevitable IT realities and we believe how you navigate through the complexities of multicloud and adopt the right technologies and strategies to move from accidental multicloud to intentional multicloud are critical in determining your long-term cloud strategy success</p>
        ',
        'background' => 'status.png',
        'nuggets' => [
            'omnichannel.png',
            'boat.png',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cloud and Multicloud Status',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Which of these environments represents the majority (>50%) of your IT estate?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Traditional on-premise IT',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Private Cloud',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Public Cloud',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Hybrid Cloud',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Multicloud',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Cloud and Multicloud Status',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Which one of these cloud benefits is the most vital to your business?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Cloud deployments greatly improve application and IT infrastructure efficiency / performance',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Using one or more clouds powers my organization’s growth initiatives and innovation',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'It allows us to manage and reduce technical debt',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'My organization’s cloud initiatives will provide my customers, partners and employees with an improved digital experience',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Maximize the utilization of data and derive faster data-based insights',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Cloud and Multicloud Status',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'sum'
                        // ],
                        'optionLabels' => [
                            'Impeding progress',
                            'Working through',
                            'Resolved',
                        ],
                        'question'=>'To what degree are these challenges related to cloud operations and management',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Lack of visibility and control into IT infrastructure',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Multicloud monitoring, management, automation and orchestration',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Security, data governance and regulatory compliance',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'API management, integration and interoperability',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Cloud cost containment while demonstrating value and ROI',
                                'name'=> 7.5,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Implementing a CI/CD pipeline to automate cloud operations (Continuous Innovation Continuous Development)',
                                'name'=> 7.6,
                                'options'=>[
                                    [
                                        'label'=>'Impeding progress',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Resolved',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                        ]
                    ]
                ]
            ],
        ]
    ],
    'value' => [
        'title' => 'Realizing the value of data',
        'description' => '
            <h2 class="">Realizing the value of data</h2>
            <p class="mb-4">This dimension assesses your organization\'s attitude and culture towards data and the value you attach to it. Data-driven organizations use insights and speed of intelligence as their competitive differentiator. Your readiness and maturity in Data Value Realization strategies contribute to your overall cloud, multicloud and data-driven initiatives which are imperatives to achieving excellence in digital transformation</p>
        ',
        'background' => 'value.png',
        'nuggets' => [
            'managed.png',
            'intellectual.png',
        ],
        'intermission' => [],
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Realizing the value of data',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'At what stage are you on your data value realization journey?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Limited data visibility and classification',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Breaking down the data silos - data consolidation',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Data enrichment (use external data sources)',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Analyse and activate data to support business decision making and strategy',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Monetising data',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Realizing the value of data',
                'questions' => [
                    'q9'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'sum'
                        // ],
                        'optionLabels' => [
                            'Not critical to our data strategy',
                            'Included in the strategy but not very important right now',
                            'An immediate priority and critical to the success of our strategy',
                        ],
                        'question'=>'Please indicate how critical these data driven objectives are to your data strategy / organization?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Improving data quality and speed',
                                'name'=> 9.1,
                                'options'=>[
                                    [
                                        'label'=>'Not critical to our data strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Delivering continuous insights to the business ',
                                'name'=> 9.2,
                                'options'=>[
                                    [
                                        'label'=>'Not critical to our data strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Using data to give us an competitive advantage',
                                'name'=> 9.3,
                                'options'=>[
                                    [
                                        'label'=>'Not critical to our data strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Delivering new data driven revenue streams',
                                'name'=> 9.4,
                                'options'=>[
                                    [
                                        'label'=>'Not critical to our data strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Hiring data experts ',
                                'name'=> 9.5,
                                'options'=>[
                                    [
                                        'label'=>'Not critical to our data strategy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Included in the strategy but not very important right now',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'An immediate priority and critical to the success of our strategy',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            
                        ]
                    ]
                ]
            ]
        ]
    ]
];
