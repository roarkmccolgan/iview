<?php
// VMware
return [
    'network-infrastructure' => [
        'title' => 'Network Infrastructure',
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
                'title' => 'Network Infrastructure',
                'questions' => [
                    'q1'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Not using, no plans',
                            'Not using, but plan to in next 2 years',
                            'We are in PoC or Pilot Phase',
                            'Limited Use',
                            'Extensive use',
                        ],
                        'question'=>'To what extent does your organization use the following application types?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Datacenter core network',
                                'name'=> 1.1,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Campus network',
                                'name'=> 1.2,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Wide Area Network',
                                'name'=> 1.3,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Server virtualization platform',
                                'name'=> 1.4,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Top-of-Rack networking',
                                'name'=> 1.5,
                                'options'=>[
                                    [
                                        'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                        ],
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Network Infrastructure',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'How do you tend to buy your network solutions?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'We tend to buy in an ad-hoc manner based on current requirements',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We tend to buy in an ad-hoc manner based on current requirements but are beginning to buy strategically',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a balance between buying network solutions ad-hoc  strategically',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We mostly buy network solutions strategically but will buy ad-hoc if needed',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We take a strategic and archictural approach to buying network solutions',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Network Infrastructure',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Which of the following best describes your approach to ageing network hardware?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'We tend to keep running old networking gear for years until it fails',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We run our networking gear beyond its supported life, but tend to renew it before it fails',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We run our networking gear until it is out of standard support and renew it within a few years',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We tend to run our networking gear while it is supported, then renew it',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We actively update the network even though it is supported to take advantage of improvements in speed, efficiency, management or security',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'intelligent-network-operations' => [
        'title' => 'Intelligent Network Operations',
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
                'title' => 'Intelligent Network Operations',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'How do you you manage your network today?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Ad-hoc manual configuration.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Centralized manual configuration',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Mostly manual configuration but we have automated some network tasks',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have mostly automated network management but have some manual configuration',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have self-optimizing network orchestration that integrates analytics, policies, automation',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Intelligent Network Operations',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'How is your network security policy managed today?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Ad-hoc on a device by device basis',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Centralized access policy and controls.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Dynamically enforce security policies across the network.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rapid detection and response to contain threats.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automatic reconfiguration to prevent emerging threats with predictive analytics. ',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Intelligent Network Operations',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'What is your approach to using network intelligence to optimize the network?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Ad-hoc based on logs of problem reports',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ad-hoc based on device notifications',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Correlation of events across the network with pre-configured thresholds on users, apps, and devices.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Manual optimization based on predictive analytics',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automated optimization based on predictive analytics',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'security-enabled-networking' => [
        'title' => 'Security-enabled Networking',
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
                'title' => 'Security-enabled Networking',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'What is the approach to security risks in your organisation?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'We avoid any risks with technology, business model, or exposure, and focus on the perimeter',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a framework and will only conduct a digital initiative after thorough due diligence',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are moving towards security by design but it isn\'t fully rolled out across operations and teams',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a proactive approach to security, and we believe that senior executive leadership and a dynamic approach to security is a competitive advantage',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Security by design fully implemented at all levels with cyber mitigation part of all operations and teams',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Security-enabled Networking',
                'questions' => [
                    'q8'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Not using, no plans',
                            'Not using, but plan to in next 2 years',
                            'We are in PoC or Pilot Phase',
                            'Limited Use',
                            'Extensive use',
                        ],
                        'question'=>'To what extent do you make use of the following in your network/infrastructure?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Application traffic baselining',
                                'name'=> 8.1,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Real-time network traffic analysis',
                                'name'=> 8.2,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Anomaly detection',
                                'name'=> 8.3,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Application aware traffic inspection',
                                'name'=> 8.4,
                                'options'=>[
                                    [
                                        'label'=>'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Network microsegmentation',
                                'name'=> 8.5,
                                'options'=>[
                                    [
                                        'Not using, no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not using, but plan to in next 2 years',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are in PoC or Pilot Phase',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Limited Use',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Extensive use',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                        ],
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Security-enabled Networking',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'To what extent is IT security embedded into new business initiatives in your organization?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Security is never part of any new initiative',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Security is not explicitly invited for participation, but alerted that new initiatives are running',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Security is brought in on the initiative, but only as an afterthought (post-release/closure)',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Security is brought in during the execution, but prerelease',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Security is involved in the planning, initiation, and assessment for all new developments',
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
