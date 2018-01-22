<?php
// NTT SDWAN
return array(
    'firmographics' => array(
        'title' => 'Firmographics',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'firmographics',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Firmographics',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'meta'=>'country',
                        'question'=>'In which country is the company you work for located?',
                        'name'=> 1,
                        'options'=>array(
                            array(
                                'label'=>'France',
                                'flag' => 'fr',
                                'value'=>'France',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Germany',
                                'flag' => 'de',
                                'value'=>'Germany',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'United Kingdom',
                                'flag' => 'uk',
                                'value'=>'United Kingdom',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Other',
                                'value'=>'',
                                'checked'=>false,
                                'type'=>'other'
                            )
                        ),
                        'other'=> [
                            'label' => 'Your Country',
                            'value' => 0,
                        ]
                    )
                )
            ),
            'page2' => array(
                'title' => 'Firmographics',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'What is your role within your company?',
                        'name'=> 2,
                        'options'=>array(
                            array(
                                'label'=>'Chief information or technology officer (CIO/CTO)',
                                'value'=>'Chief information or technology officer (CIO/CTO)',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'VP or head of IT',
                                'value'=>'VP or head of IT',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT manager',
                                'value'=>'IT manager',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT or enterprise architect',
                                'value'=>'IT or enterprise architect',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Chief networking officer (CNO)',
                                'value'=>'Chief networking officer (CNO)',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'VP or head of telecommunications or networks',
                                'value'=>'VP or head of telecommunications or networks',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Director of telecommunications or networks',
                                'value'=>'Director of telecommunications or networks',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Telecommunications or networks manager',
                                'value'=>'Telecommunications or networks manager',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Network architect',
                                'value'=>'Network architect',
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Firmographics',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'How would you best describe your involvement in decision making regarding network or telecom services in your company?',
                        'name'=> 3,
                        'options'=>array(
                            array(
                                'label'=>'Primary decision maker',
                                'value'=>'Primary decision maker',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Involved in the decision making',
                                'value'=>'Involved in the decision making',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Influencer and highly knowledgeable about network or telecom services',
                                'value'=>'Influencer and highly knowledgeable about network or telecom services',
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Firmographics',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'button',
                        'question'=>'How many people are employed by your company worldwide?',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'500 to 999',
                                'value'=>'500 to 999',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1,000 to 4,999',
                                'value'=>'1,000 to 4,999',
                                'checked'=>false
                            ),
                            array(
                                'label'=>'5,000 or more',
                                'value'=>'5,000 or more',
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Firmographics',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following best describes your company\'s primary business?',
                        'name'=> 5,
                        'options'=>array(
                            array(
                                'label'=>'Banking and other financial services',
                                'hint' => 'brokers, asset managers, stock exchanges, etc.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Insurance',
                                'hint' => 'life, healthcare, property and casualty, other insurance',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Retail trade',
                                'hint' => 'food and non-food retailers; apparel, consumer electronics, DIY; eating/drinking establishments, drug stores, automotive dealers, online retailers, etc.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Wholesale trade',
                                'hint' => 'distribution, import and export',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Business or professional services',
                                'hint' => 'consulting, audit and tax, advertising, engineering, architecture and construction, etc.',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Software and IT services',
                                'value'=>6,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Media, broadcast, printing and publishing, and other comm',
                                'hint' => 'e.g., other media, dispatch, satellite',
                                'value'=>7,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Manufacturing',
                                'hint' => 'chemicals/pharmaceuticals, automotive, food/drink, textiles, paper, clothing, equipment, electronics, furniture, toys, etc.',
                                'value'=>8,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Transportation',
                                'hint' => 'water, air, rail, and other land transport, including logistics and supporting services',
                                'value'=>9,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Banking and other financial services',
                                'hint' => 'brokers, asset managers, stock exchanges, etc.',
                                'value'=>10,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Utilities',
                                'hint' => 'gas, electricity, water, sanitary services, etc.',
                                'value'=>11,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Oil and gas',
                                'hint' => 'extraction of crude petroleum and natural gas, manufacture of refined petroleum products, service activities incidental to oil and gas extraction',
                                'value'=>12,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Private education',
                                'hint' => 'primary, secondary, higher, other education',
                                'value'=>13,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Private healthcare service providers',
                                'hint' => 'hospitals, physicians\' offices, outpatient services, medical testing and diagnostic services, home and community care services, etc.',
                                'value'=>14,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Firmographics',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'Does your company have two or more sites or business locations that are connected via a private network',
                        'hint' => 'wide area network [WAN]/virtual private network [VPN]',
                        'name'=> 6,
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
        )
    ),
    'corequestions' => array(
        'title' => 'Core Questions',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page7' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following best describes your company\'s ICT investment strategy?',
                        'name'=> 7,
                        'options'=>array(
                            array(
                                'label'=>'Pragmatic — we invest to keep the company running',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Strategic — we focus on strategic investments to meet business objectives',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Transformative — we heavily invest to transform and digitalize our business',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )
            ),
            'page8' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'How does senior management perceive the role of the WAN for your company?',
                        'name'=> 8,
                        'options'=>array(
                            array(
                                'label'=>'As a necessary cost',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'As an important asset that allows us to deliver business outcomes',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'As a strategic tool that drives competitive differentiation',
                                'value'=>4,
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
                        'type'=>'checkbox',
                        'question'=>'What do you see as the biggest challenges for your company\'s WAN in the coming two years? <span class="text-ntt-blue">Choose up to 3</span>',
                        'name'=> 9,
                        'max'=>3,
                        'options'=>array(
                            array(
                                'label'=>'Security threats',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Incorporating new/emerging technologies',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Constraints on network budget, skills, or time',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Managing accelerating network requirements',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Device and end-user management',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Regulatory compliance or data protection (e.g., GDPR)',
                                'value'=>6,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Strategic alignment of network with business',
                                'value'=>7,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Network transformation',
                                'value'=>8,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Inadequate service from network providers',
                                'value'=>9,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Implications of Brexit',
                                'value'=>10,
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
                        'type'=>'checkbox',
                        'question'=>'What are the key factors that will drive your company\'s network requirements over the next two years? <span class="text-ntt-blue">Choose up to 3</span>',
                        'name'=> 10,
                        'max'=>3,
                        'options'=>array(
                            array(
                                'label'=>'Bandwidth',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Traffic volume',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Connecting new sites',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Cost',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Security',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Flexibility/agility',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Coping with increasingly mobile users',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Connecting to cloud providers',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                ),
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )
            ),
            'page11' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following technology areas will have the biggest impact on your company\'s WAN requirements in the coming years? <span class="text-ntt-blue">Choose up to 3</span>',
                        'name'=> 11,
                        'max' => 3,
                        'options'=>array(
                            array(
                                'label'=>'Cloud services',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Internet of Things',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Enterprise social networking',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Flexible working',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Mobility',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Big Data, advanced analytics',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Artificial intelligence (AI), cognitive computing',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Collaboration (UC&C, video, contact centers)',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Virtual reality, robotics, or 3D printing',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page12' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'checkbox',
                        'question'=>'What changes have you made or are you planning to make to your company\'s WAN to respond to these changing requirements? <span class="text-ntt-blue">Choose all that apply</span>',
                        'name'=> 12,
                        'options'=>array(
                            array(
                                'label'=>'Increase network bandwidth',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Increase resilience/add additional connections',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Improve network performance monitoring',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Deploy network optimization or acceleration technology',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Improve network security',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Change of your primary network service provider',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Consolidate the number of WAN providers',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Extend the reach of your network',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Improve connectivity to third-party datacenters or cloud providers',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'No changes',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                ),
                'report' => false               
            ),
            'page13' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'How do you expect the budget for the WAN to change, if at all, in the next two years?',
                        'name'=> 13,
                        'options'=>array(
                            array(
                                'label'=>'Strong decrease',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Modest decrease',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'No change',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Modest increase',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Strong increase',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page14' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'checkbox',
                        'question'=>'What are the key business outcomes that your company\'s WAN should support? <span class="text-ntt-blue">Choose up to 3</span>',
                        'name'=> 14,
                        'max' => 3,
                        'options'=>array(
                            array(
                                'label'=>'Empower innovation',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Drive business agility',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Improve efficiencies',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Increase productivity',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Reduce cost',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Develop new business models and revenue streams',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Improve competitive differentiation',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Scale the business through M&A',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page15' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'slider',
                        'question'=>'On a scale from 1 to 5, where 1 is not at all ready and 5 is completely ready, how ready is your company\'s network to meet growing requirements and deliver these business outcomes?',
                        'name'=> 15,
                        'from' => 'not ready at all',
                        'to' => 'completely ready',
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
                            ),
                        )
                    )
                )
            ),
            'page16' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'groupbutton',
                        'question'=>'How easy do you think it is to do each of the following on your company\'s current WAN?',
                        'name'=> 16,
                        'options'=>array(
                            array(
                                'label'=>'Connect new sites',
                                'name'=> 16.1,
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
                                'name'=> 16.2,
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
                                'name'=> 16.3,
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
                                'name'=> 16.4,
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
                                'name'=> 16.5,
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
            'page17' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'button',
                        'question'=>'How does your company manage its WAN today?',
                        'name'=> 17,
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
            'page18' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'button',
                        'question'=>'How does your company manage its WAN security policy today?',
                        'name'=> 18,
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
            'page19' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'button',
                        'question'=>'How does your company primarily tend to buy WAN solutions?',
                        'name'=> 19,
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
            'page20' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'groupopposingslider',
                        'question'=>'Please estimate the percentage of your company\'s sites that are connected via the following access options, now and in two years from now.',
                        'name'=> 20,
                        'options'=>array(
                            array(
                                'label'=>'Private network (e.g., MPLS, Ethernet) ONLY',
                                'name'=> 20.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>1,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years',
                                        'value'=>2,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Public internet (e.g., broadband, dedicated, or mobile internet access) ONLY',
                                'name'=> 20.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>1,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years',
                                        'value'=>2,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Both',
                                'name'=> 20.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>1,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years',
                                        'value'=>2,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'No connection',
                                'name'=> 20.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>1,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years',
                                        'value'=>2,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Don\t Know',
                                'name'=> 20.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>1,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years',
                                        'value'=>2,
                                        'type' => 'percentage',
                                        'checked'=>false,
                                    )
                                )
                            ),
                            
                        )
                    )
                )
            ),
            'page21' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'button',
                        'question'=>'How centralized is the sourcing of WAN connectivity at your company?',
                        'name'=> 21,
                        'options'=>array(
                            array(
                                'label'=>'Completely decentralized',
                                'hint' => 'individual countries or business units mostly source their own WAN connectivity',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Mostly decentralized',
                                'hint'=>'a mix of locally and regionally sourced WAN connectivity',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Regional approach',
                                'hint'=>'WAN connectivity is sourced on a regional basis',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Mostly centralized',
                                'hint'=>'a mix of regionally and globally sourced WAN connectivity',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Completely centralized',
                                'hint'=>'we have one global supplier of WAN connectivity',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page22' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q22'=>array(
                        'type'=>'button',
                        'question'=>'How do you expect to change the number of WAN connectivity providers that your company uses in the coming two years?',
                        'name'=> 22,
                        'options'=>array(
                            array(
                                'label'=>'Strong reduction',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Moderate reduction',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Stay the same',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Moderate increase',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Strong increase',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page23' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q23'=>array(
                        'type'=>'groupbutton',
                        'question'=>'Does your company use any of the following in its WAN solution?',
                        'name'=> 23,
                        'options'=>array(
                            array(
                                'label'=>'Local internet break-out',
                                'name'=> 23.1,
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
                                'name'=> 23.2,
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
                                'name'=> 23.3,
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
                                'name'=> 23.4,
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
                                'name'=> 23.5,
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
            'page24' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q24'=>array(
                        'type'=>'groupbutton',
                        'question'=>'Does your company use any of the following intelligent WAN services?',
                        'name'=> 24,
                        'options'=>array(
                            array(
                                'label'=>'Policy-based path control (dynamic routing)',
                                'name'=> 24.1,
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
                                'name'=> 24.2,
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
                                'name'=> 24.3,
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
                                'name'=> 24.4,
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
                                'name'=> 24.5,
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
            'page25' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q25'=>array(
                        'type'=>'button',
                        'question'=>'What is your company\'s approach to using network intelligence to optimize the network?',
                        'name'=> 25,
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
            'page26' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q26'=>array(
                        'type'=>'button',
                        'question'=>'How does your company ensure application performance expectations are met?',
                        'name'=> 26,
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
            'page27' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q27'=>array(
                        'type'=>'button',
                        'question'=>'Which of the following best describes your company\'s adoption, plans, or awareness of SD-WAN?',
                        'name'=> 27,
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
            'page28' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q28'=>array(
                        'type'=>'checkbox',
                        'question'=>'What are the most important reasons for using or considering using an SD-WAN solution for your company? <span class="text-ntt-blue">Choose up to 3</span>',
                        'name'=> 28,
                        'options'=>array(
                            array(
                                'label'=>'Lower WAN transport costs',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Optimize WAN traffic by latency, jitter, packet loss',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Reduce WAN-management complexity',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Faster turn up (WAN provisioning)',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Bandwidth capacity flexibility',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Flexibility to use different networks (e.g., broadband, MPLS, LTE) for application delivery',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Prioritize network connection by application type or workload',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page29' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q29'=>array(
                        'type'=>'checkbox',
                        'question'=>'What are the main factors that inhibit (or slow) your company\'s adoption of SD-WAN?  <span class="text-ntt-blue">Choose all that apply</span>',
                        'name'=> 29,
                        'options'=>array(
                            array(
                                'label'=>'Cost',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Security concerns',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Uncertainty around interoperability with existing network',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Lack of necessary skills',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Limited ROI visibility/measurability',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Lack of C-level vision and understanding of potential',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Want to avoid people and process change due to network transformation',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Lack of standardization and market maturity',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Current network will be able to cope with requirements for the foreseeable future',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page30' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q30'=>array(
                        'type'=>'groupbutton',
                        'question'=>'Which virtual network services does your company use or plan to use over the next two years?',
                        'name'=> 30,
                        'options'=>array(
                            array(
                                'label'=>'Firewall',
                                'name'=> 30.1,
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
                                'name'=> 30.2,
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
                                'name'=> 30.3,
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
                                'name'=> 30.4,
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
                                'name'=> 30.5,
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
                                'name'=> 30.6,
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
                                'name'=> 30.7,
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
            'page31' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q31'=>array(
                        'type'=>'checkbox',
                        'question'=>'What do you see as the top benefits that virtual network services can bring to your company? <span class="text-ntt-blue">Choose all that apply</span>',
                        'name'=> 31,
                        'options'=>array(
                            array(
                                'label'=>'Faster provisioning',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Reduced management complexity',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Easier policy/software updates',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Cost reduction',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Consistent policies across network',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Improved security',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Flexibility of as-a-service model',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Reduction in required rack space',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Current network will be able to cope with requirements for the foreseeable future',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page32' => array(
                'title' => 'Core Questions',
                'questions' => array(
                    'q32'=>array(
                        'type'=>'button',
                        'question'=>'Do you feel that the staff at your company have the right skills to drive the evolution of its WAN?',
                        'name'=> 32,
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'No, but we plan to educate our staff',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'No, but we plan to source staff with the right skills',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'No, we will be looking at external suppliers to help us with this',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'No, and we don\'t have specific plans to address this yet',
                                'value'=>1,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    )
);