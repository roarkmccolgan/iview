<?php
// NTT SDWAN
return array(
    'corequestions' => array(
        'title' => 'Core Questions',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'groupbutton',
                        'question'=>'How easy do you think it is to do each of the following on your company\'s current WAN?',
                        'name'=> 1,
                        'options'=>array(
                            array(
                                'label'=>'Connect new sites',
                                'name'=> 1.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Quite routine and easy',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Provision new network functions',
                                'name'=> 1.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Quite routine and easy',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Update networking or security policies/settings',
                                'name'=> 1.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Quite routine and easy',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Add or change a connection to a public cloud provider',
                                'name'=> 1.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Quite routine and easy',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Connect to partners or customers',
                                'name'=> 1.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Very challenging and we struggle',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Challenging but just about achievable',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Quite routine and easy',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'How does your company manage its WAN today?',
                        'name'=> 2,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc manual configuration',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Centralized manual configuration',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Mostly manual configuration but we have automated some network tasks',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have mostly automated WAN management but have some manual configuration',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have self-optimizing network orchestration that integrates analytics, policies, and automation',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'How does your company manage its WAN security policy today?',
                        'name'=> 3,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc on a device-by-device basis',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Centralized access policy and controls',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Dynamically enforce security policies across the network',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Rapid detection and response to contain threats',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Automatic reconfiguration to prevent emerging threats with predictive analytics',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'button',
                        'question'=>'How does your company primarily tend to buy WAN solutions?',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'We buy point solutions as we need them based on current requirements',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We mostly buy solutions as we need them but are beginning to buy strategically',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a balance between buying WAN solutions strategically and as we need them',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We mostly buy WAN solutions strategically but will buy point products if needed',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We take a strategic and architectural approach to buying WAN solutions',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'groupbutton',
                        'question'=>'Does your company use any of the following in its WAN solution?',
                        'name'=> 5,
                        'options'=>array(
                            array(
                                'label'=>'Local internet break-out',
                                'name'=> 5.1,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Active-active architecture with multiple connections per site',
                                'name'=> 5.2,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Private connectivity to key public cloud providers',
                                'name'=> 5.3,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Hybrid architecture that integrates private and public internet-based networks',
                                'name'=> 5.4,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Bandwidth on demand',
                                'name'=> 5.5,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'groupbutton',
                        'question'=>'Does your company use any of the following intelligent WAN services?',
                        'name'=> 6,
                        'options'=>array(
                            array(
                                'label'=>'Policy-based path control (dynamic routing)',
                                'name'=> 6.1,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'WAN optimization',
                                'name'=> 6.2,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Application performance management',
                                'name'=> 6.3,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Real-time monitoring/visibility',
                                'name'=> 6.4,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Replay functionality for network or application performance visibility',
                                'name'=> 6.5,
                                'options'=>array(
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, but planning to within 12 months',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'What is your company\'s approach to using network intelligence to optimize the network?',
                        'name'=> 7,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc, based on logs of problem reports',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Ad hoc, based on device notifications',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Correlation of events across the network with preconfigured thresholds on users, apps, and devices',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Manual optimization based on predictive analytics',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Automated optimization based on predictive analytics',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'How does your company ensure application performance expectations are met?',
                        'name'=> 8,
                        'options'=>array(
                            array(
                                'label'=>'We take a best effort approach',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We physically segment the network to separate traffic classes',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We virtually segment the network to separate traffic classes',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We statically configure QoS to prioritize traffic to key applications',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Our network can automatically adapt to ensure app performance and user experience based on SLAs   ',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following best describes your company\'s adoption, plans, or awareness of SD-WAN?',
                        'name'=> 9,
                        'options'=>array(
                            array(
                                'label'=>'Not using and no plans to deploy',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Not using, but investigating or planning to deploy',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Using — piloting',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Using — limited deployment',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Using — extensive deployment',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page10' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'groupbutton',
                        'question'=>'Which virtual network services does your company use or plan to use over the next two years?',
                        'name'=> 10,
                        'options'=>array(
                            array(
                                'label'=>'Firewall',
                                'name'=> 10.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Not using and no plans to deploy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using, but investigating or planning to deploy',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — piloting',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — limited deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — extensive deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Other security (other security function than firewall, such as anti-DDoS, intrusion prevention systems)',
                                'name'=> 10.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Not using and no plans to deploy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using, but investigating or planning to deploy',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — piloting',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — limited deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — extensive deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Routing',
                                'name'=> 10.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Not using and no plans to deploy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using, but investigating or planning to deploy',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — piloting',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — limited deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — extensive deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'SD-WAN',
                                'name'=> 10.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Not using and no plans to deploy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using, but investigating or planning to deploy',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — piloting',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — limited deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — extensive deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'WAN optimization/acceleration/application performance management',
                                'name'=> 10.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Not using and no plans to deploy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using, but investigating or planning to deploy',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — piloting',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — limited deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — extensive deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Session border controller',
                                'name'=> 10.6,
                                'options'=>array(
                                    array(
                                        'label'=>'Not using and no plans to deploy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using, but investigating or planning to deploy',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — piloting',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — limited deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — extensive deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'WLAN',
                                'name'=> 10.7,
                                'options'=>array(
                                    array(
                                        'label'=>'Not using and no plans to deploy',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using, but investigating or planning to deploy',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — piloting',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — limited deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Using — extensive deployment',
                                        'value'=>3,
                                        'checked'=>false,
                                    )
                                )
                            ),
                        )
                    )
                )
            ),
        )
    )
);