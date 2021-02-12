<?php

// NTT SDWAN
return [
    'infrastructure' => [
        'title' => 'Infrastructure',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Infrastructure',
                'questions' => [
                    'q1'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'question'=>'Do you use any of the following in your WAN solution?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'local Internet break out',
                                'name'=> 1.1,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Active-active architecture with multiple connections per site',
                                'name'=> 1.2,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Private connectivity to key public cloud providers',
                                'name'=> 1.3,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Hybrid architecture that integrates private and public Internet based networks',
                                'name'=> 1.4,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Bandwidth on demand',
                                'name'=> 1.5,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Infrastructure',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'How do you tend to buy your WAN solutions?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'We buy point solutions as we need them based on current requirements',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We mostly buy solutions as we need them but are beginning to buy strategically',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a balance between buying WAN solutions strategically and as we need them',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We mostly buy WAN solutions strategically but will buy point products if needed',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We take a strategic and archictural approach to buying WAN solutions',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Infrastructure',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Which of the following best represents your adoption, plans or awareness of SD-WAN?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Not using and no plans to deploy',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Not using, but investigating or planning to deploy',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Using - Piloting',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Using - limited deployment',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Using - Extensive Deployment',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'intelligence' => [
        'title' => 'Intelligence',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Intelligence',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'question'=>'Do you use any of the following intelligent WAN services?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Policy based path control (dynamic routing)',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'WAN optimization',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Application performance management',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Real-time monitoring/visibility',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Replay functionality for network or application performance visibility or troubleshooting',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Intelligence',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'What is your approach to using network intelligence to optimize the network?',
                        'name'=> 5,
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
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Intelligence',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'How do you ensure application performance expectations are met?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'We take a best effort approach',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We physically segment the network to separate traffic classes',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We virtually segment the network to separate traffic classes',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We statically configure QoS to prioritize traffic to key applications',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Our network can automatically adapt to ensure app performance and user experience based on SLAs',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'operations' => [
        'title' => 'Operations',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Operations',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'question'=>'How easy is it to do the following on your current WAN?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Connect new sites',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Quite routine and easy',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Provision new network functions',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Quite routine and easy',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Update networking or security policies/settings',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Quite routine and easy',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Add or change a connection to a public cloud provider',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Quite routine and easy',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Connect to partners or customers',
                                'name'=> 7.5,
                                'options'=>[
                                    [
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Quite routine and easy',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Operations',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'How do you you manage your WAN today?',
                        'name'=> 8,
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
                                'label'=>'We have mostly automated WAN management but have some manual configuration',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have self-optimizing network orchestration that integrates analytics, policies, automation',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Operations',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'How is your WAN security policy managed today?',
                        'name'=> 9,
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
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
