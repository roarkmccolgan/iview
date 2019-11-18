<?php
// Hitachi
return [
    'migration' => [
        'title' => 'Cloud migration and application modernization',
        'description' => '
            <h2 class="">Cloud migration and application modernization</h2>
            <p class="mb-4">Firstly, we would like to understand your current approach to selling and how you structure your sales organization</p>
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
                                'label'=>'Cost savings ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automation to achieve IT operational efficiencies, while reducing complexity and freeing up resources',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Responding to competitive threats and disruption ',
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
                        'calc'=>[
                            'type'=>'sum'
                        ],
                        'optionLabels' => [
                            'This is a big barrier for us, impeding our progress',
                            'A big challenge which we are actively working through',
                            'Still presents a small challenge, but mostly resolved',
                            'This is a challenge we have overcome already',
                        ],
                        'question'=>'To what degree are these challenges impacting the implementation of your cloud strategy?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Securing budgets and buy in (battling to demonstrate the value of cloud)',
                                'name'=> 2.1,
                                'options'=>[
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Assessing and modernizing applications to get the benefits of the cloud',
                                'name'=> 2.2,
                                'options'=>[
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Security concerns and digital trust',
                                'name'=> 2.3,
                                'options'=>[
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Concerns about scalability and agility',
                                'name'=> 2.4,
                                'options'=>[
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Attracting and retaining the right technical skills',
                                'name'=> 2.5,
                                'options'=>[
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Adopting DevOps based processes ',
                                'name'=> 2.6,
                                'options'=>[
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Reducing technical debt',
                                'name'=> 2.7,
                                'options'=>[
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
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
                        'calc'=>[
                            'type'=>'sum'
                        ],
                        'optionLabels' => [
                            'Not apart of our 2-3 year strategy',
                            'Included in the strategy but not very important right now',
                            'An immediate priority and critical to the success of our strategy',
                        ],
                        'question'=>'Looking at your 2-3 year strategy, please rank the importance of the following initiatives? ',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Cloud-based API strategies that orchestrate the exchange of data across your ecosystem ',
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
                                'label'=>'Implementing Agile application architectures using microservices and containers ',
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
                                'label'=>'New customer experience technologies that fully support customer and ecosystem-facing business models ',
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
                                'label'=>'An Intelligent Core based on data management, cognitive, artificial intelligence and machine learning  ',
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
                                'label'=>'Security, regulatory compliance and data governance requirements',
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
                            
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'Cloud migration and application modernization',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'sum'
                        ],
                        'optionLabels' => [
                            'This is a challenge we have overcome already',
                            'Still presents a small challenge, but mostly resolved',
                            'A big challenge which we are actively working through',
                            'This is a big barrier for us, impeding our progress',
                        ],
                        'question'=>'To what degree are these challenges impacting the implementation of your cloud strategy?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Assessing the organizational need to move to the cloud',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Understanding the complexity of the migration',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
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
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'lack of cloud migration skills internally',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'defining the right migration strategy (Lift and shift, lift and transform, refactor)',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
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
            <p class="mb-4">We would now like a better understanding of how you market your organization and its solutions, as well as how you access marketing effectiveness.</p>
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
                                'label'=>'Private Cloud (define)',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Public Cloud ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Hybrid Cloud (Define)',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Multicloud ',
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
                        'calc'=>[
                            'type'=>'sum'
                        ],
                        'optionLabels' => [
                            'Still presents a small challenge, but mostly resolved',
                            'A big challenge which we are actively working through',
                            'This is a big barrier for us, impeding our progress',
                            'This is a challenge we have overcome already',
                        ],
                        'question'=>'To what degree are these challenges faced around cloud operations and management ',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Lack of visibility and control into IT infrastructure',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Multicloud monitoring, management, automation and orchestration',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Security, governance and regulatory compliance',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'API management, integration and interoperability',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Cloud cost management while demonstrating value and ROI',
                                'name'=> 7.5,
                                'options'=>[
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Implementing a CI/CD pipeline to automate cloud operations ',
                                'name'=> 7.6,
                                'options'=>[
                                    [
                                        'label'=>'Still presents a small challenge, but mostly resolved',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'A big challenge which we are actively working through',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a big barrier for us, impeding our progress',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'This is a challenge we have overcome already',
                                        'value'=>0,
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
            <p class="mb-4">Understanding your approach to delivering services is critical to accessing your capabilities as a managed services provider.</p>
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
                                'label'=>'Advanced data analysis in support of business decision making',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Applying AI and ML to support data monetization',
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
                        'calc'=>[
                            'type'=>'sum'
                        ],
                        'optionLabels' => [
                            'Not critical to our data strategy',
                            'Included in the strategy but not very important right now',
                            'An immediate priority and critical to the success of our strategy',
                        ],
                        'question'=>'Looking at your 2-3 year strategy, please rank the importance of the following initiatives? ',
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
                                'label'=>'Delivering continuous insights to the business and ecosystem',
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
                            [
                                'label'=>'Creating data maps for full data visability and control',
                                'name'=> 9.6,
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
