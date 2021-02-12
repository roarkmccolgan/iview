<?php

// Dassault
return [
    'business' => [
        'title' => 'Business',
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
                'title' => 'Business',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'To what level has your workforce been disrupted (working from home/remotely) because of COVID-19? ',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Small increase in people working remotely (0-50% increase)',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Considerable increase in people working remotely (50-100% increase)',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Large increase in people working remotely (100-200%)',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Business',
                'questions' => [
                    'q2'=>[
                        'type'=>'groupbutton',
                        'optionLabels' => [
                            'Not at all effective',
                            'Slightly effective',
                            'Moderately effective',
                            'Very effective',
                            'Highly effective',
                        ],
                        'question'=>'How effective is your organization in supporting a hybrid workforce in the following areas? (i.e. a workforce that includes onsite, home/remote, field and contract/gig workers)?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Processes',
                                'name'=> 2.1,
                                'options'=>[
                                    [
                                        'label'=>'Not at all effective',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly effective',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately effective',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very effective',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Highly effective',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Education/Training',
                                'name'=> 2.2,
                                'options'=>[
                                    [
                                        'label'=>'Not at all effective',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly effective',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately effective',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very effective',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Highly effective',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Technology',
                                'name'=> 2.3,
                                'options'=>[
                                    [
                                        'label'=>'Not at all effective',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Slightly effective',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moderately effective',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Very effective',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Highly effective',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Business',
                'questions' => [
                    'q3'=>[
                        'type'=>'checkbox',
                        'question'=>'What skillsets are lacking the most among your workforce? Select all that apply',
                        'name'=> 3,
                        'calc' => [
                            'type' => 'qty',
                            'between' => [
                                '1-1' => 5,
                                '2-3' => 4,
                                '4-5' => 3,
                                '6-7' => 2,
                                '8-9' => 1,
                            ],
                        ],
                        'options'=>[
                            [
                                'label'=>'Digital literacy (ability to use digital technology)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ability to work with large datasets / data science',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ability to collaborate within/across groups',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Problem solving / design thinking',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Lack of lean skills / experience',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Managerial skills (planning activities of others)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Communication (presenting/sharing information)',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Change management skills / adaptability',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Interacting with clients / customers',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Business',
                'questions' => [
                    'q4'=>[
                        'type'=>'checkbox',
                        'question'=>'Which functional areas of your businesses have had the hardest time adapting to hybrid work models? Select all that apply',
                        'name'=> 4,
                        'calc' => [
                            'type' => 'qty',
                            'between' => [
                                '1-1' => 5,
                                '3-4' => 4,
                                '5-6' => 3,
                                '7-9' => 2,
                                '10-12' => 1,
                            ],
                        ],
                        'options'=>[
                            [
                                'label'=>'Customer service',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Engineering / R&D',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Field Service',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Finance',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Human Resources',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Security',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'IT',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Manufacturing',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Marketing',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Procurement',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sales',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Supply Chain',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Business',
                'questions' => [
                    'q5'=>[
                        'type'=>'checkbox',
                        'question'=>'How are you currently using technology to maximize employee performance? Select all that apply',
                        'name'=> 5,
                        'calc' => [
                            'type' => 'qty',
                            'between' => [
                                '1-1' => 1,
                                '2-2' => 2,
                                '3-3' => 3,
                                '4-4' => 4,
                                '5-5' => 5,
                            ],
                        ],
                        'options'=>[
                            [
                                'label'=>'Automate low-value / manual tasks to improve worker productivity',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Improve collaboration across functional groups for transparency and coordinated execution ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Analyze and transform granular data into knowledge / value ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Standardize and enforce corporate priorities and strategies across the enterprise',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Better support distributed teams including regional needs (language, regulations, etc.)',
                                'value'=>2,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Business',
                'questions' => [
                    'q6'=>[
                        'type'=>'checkbox',
                        'question'=>'Which of the following benefits has your organization experienced or is anticipating by enabling a hybrid workforce?  Select all that apply',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Greater ability to attract talent due to geography neutrality',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Higher employee retention',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Higher employee productivity',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Improved employee experience',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Reduced absenteeism',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Reduction in costs (travel, real estate/facility, etc.)',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Improved employee health and safety',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Shift in leadership style to one focused on outcomes',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Business',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'question'=>'For each of the following, how mature is your organization in regard to enabling better business outcomes through digital collaboration and the application of lean principles.  That is, becoming a lean organization that perpetually defines and maps value, and works to improve efficiency & quality, as well as reduce costs and waste.',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Engage – Build better team relationships despite physical or organizational barriers',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'We are in the process of upgrading our digital collaboration tools',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have digital collaboration tools, but use them on an ad-hoc basis',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We collaborate digitally within workgroups, but not regularly with other workgroups',
                                        'value'=>6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Digital collaboration technology and processes are in place across domain within the company, infrequently among global teams and outside the company',
                                        'value'=>8,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Digital collaboration technology and processes are in place across the company, extended globally and outside the company',
                                        'value'=>10,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Reveal – Utilize visualization of content (3D product Designs, assets, processes) and data within a digital lean framework to enhance communication/collaboration during virtual/ physical meetings ',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'We do not use visual content nor do we possess a digital lean framework',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Visual content and a digital lean framework are used, but only within engineering/R&D and operations teams',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We are extending the use of visual content and a digital lean framework to groups outside R&D / operations',
                                        'value'=>6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We use visual content and data within a digital lean framework that spans multiple groups',
                                        'value'=>8,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We use visual content and data within a digital lean framework that spans all groups, including our industry ecosystem',
                                        'value'=>10,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Improve – Make "Lean thinking" a standard part of business, teams and culture to drive improvements',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'We don\'t know how to utilize lean principles as part of decision making and have a limited ability to monitor metrics/KPIs',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We utilize lean principles on an ad-hoc basis to set priorities and drive improvements in metrics/KPIs that vary by location',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We utilize lean principles often (monthly) to set priorities and drive improvements in standardized metrics/KPIs',
                                        'value'=>6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We utilize lean principles regularly (weekly) to set priorities and drive enterprise-wide improvements in standardized metrics/KPIs)',
                                        'value'=>8,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We utilize lean principles as part of day-to-day decision making to drive enterprise-wide improvements in standardized metrics/KPIs ',
                                        'value'=>10,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
