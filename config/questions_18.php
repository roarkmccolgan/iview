<?php
// Snow
return [
    'leadership'=>[
        'title' => 'Leadership Vision for Agility',
        'description' => '
            <p class=""></p>',
        'nuggets' => [],
        'sectionintro' => false,
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Leadership Vision for Agility',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your leadership’s approach to defining strategy?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Leadership defines strategy every 2-3 years.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership redefines strategy every year and may include quarterly business reviews.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership reviews strategy quarterly and makes appropriate changes.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership makes strategy decisions based on periodic operational data and insights.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership redefines strategy constantly to drive innovation and enable constant change.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Leadership Vision for Agility',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your leadership’s approach to assigning budgets and investment?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Budgets are built based on the previous year, with some modification.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership assigns specific budgets on a fixed timescales.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership reviews budgets on a quarterly basis and assigns investment accordingly.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership uses an agile budgeting program, such as fast-track, "trickle budgeting" etc.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership redefines budget allocation constantly, based on changing requirements.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Leadership Vision for Agility',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your leadership’s actions with regards to processes?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Leadership supports and maintains existing processes.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Processes are well defined, but leadership do agree to changes in some areas.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'When process issues are uncovered, leadership supports teams to make changes.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Leadership have made investments in training and technology to enable process changes to be made across departments.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'The leadership team proactively identifies workflows requiring more agility and allocates budgets to enable better processes.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'structural' => [
        'title' => 'Structural Agility',
        'description' => '
            <p class="">Application modernization is a key step in digital transformation because older applications do not provide the agility and adaptability necessary for today\'s business environment and customer expections. Moving applications into a cloud environment, be it private cloud or public cloud, is an important step in application modernization. There are several different strategies for application modernization that make sense for different applications.
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        65% of organizations at more advanced stages of agility are already recovering from the impacts of the pandemic or returning to growth. Just 20% of less agile organizations can say the same.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_1.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Structural Agility',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes how teams are defined within your organization?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Teams are strictly defined by functional area and rarely change.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Teams are defined by functional area, with some collaboration between departments.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Teams of various functions are defined around products and services, based on different skills and expertise.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Teams are aligned to products based on different expertise and skills, but on fixed timescales.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Teams are spontaneously created by employees across functional areas in real time as the need arises.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Structural Agility',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your organization\'s approach to identifying skills gaps, and assigning the resources needed to enable them.',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'We identify skills gaps and assign resources based on an annual plan.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We identify skill gaps and assign resources at fixed points throughout the year.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We identify skills gaps continuously, but resources must still be approved at fixed points.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We identify skills gaps throughout the year and tap into flexible resources continuously.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Structural Agility',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your organization\'s approach to knowledge and collaboration?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Knowledge sharing and collaboration is left up to individual employees to execute.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Knowledge sharing and collaboration is managed at a department level.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Knowledge management and collaboration tools are centralized to enable companywide sharing and interaction.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Knowledge management and collaboration are formal KPIs for individuals and departments.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Knowledge management and collaboration are formal KPIs and extend to external partners.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'process' => [
        'title' => 'Process Agility',
        'description' => '
            <p class="">Application modernization is a key step in digital transformation because older applications do not provide the agility and adaptability necessary for today\'s business environment and customer expections. Moving applications into a cloud environment, be it private cloud or public cloud, is an important step in application modernization. There are several different strategies for application modernization that make sense for different applications.
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        44% of organizations at the early stages of agility are yet to digitize employee-facing processes, which remain slow, manual, and are often based on email and phone communication.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_2.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Process Agility',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'Which of these statements best describe your business processes?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Processes are not generally standardized.',
                                'value'=>1.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business processes are standardized within individual departments (e.g. finance, operations).',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business processes are standardized and flow between departments.',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Most processes have been automated and are supported by real-time information exchange across functions.',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Core processes are standardized and automated, enabling new processes to be created by employees through self-service.',
                                'value'=>7.5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Process Agility',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes how business processes are defined and modified?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Business processes are not explicitly defined or documented.',
                                'value'=>1.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business processes are static and aligned to systems we installed many years ago.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business processes are documented and linked to core systems but are periodically re-engineered or created.',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business processes are digitized but only adapted or adjusted periodically.',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business processes are fully digitized and can be dynamically created or adjusted.',
                                'value'=>7.5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'portfolio' => [
        'title' => 'Portfolio Agility',
        'description' => '
            <p class="">Application modernization is a key step in digital transformation because older applications do not provide the agility and adaptability necessary for today\'s business environment and customer expections. Moving applications into a cloud environment, be it private cloud or public cloud, is an important step in application modernization. There are several different strategies for application modernization that make sense for different applications.
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        Organizations further along in their agility journey, place greater emphasis on the need to accelerate product and service releases. Time to market is a fundamental measure of agile success.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_3.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Portfolio Agility',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'How often does your organization launch products or services?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Products or services are launched every two years or more (and typically have lengthy R&D cycles).',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Products or services are launched every year on a structured cycle.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Products are launched every year and updates are made once or twice a year.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Products are constantly ideated throughout the year and launched on a quarterly basis when available.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Minimum Viable Products are introduced within months from ideation and expanded or phased out based on customer feedback in a constant flow.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Portfolio Agility',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'How quickly can your portfolio of products or services react to changes in the external environment?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Far slower than we would like',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Slower than we would like',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Quickly, but could be better',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very quickly and there is no need for improvement',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Portfolio Agility',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'Which of these statements best describes the role of customers as your organization develops its offerings and products?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'We follow a highly structured product development funnel driven internally.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Product plans are based on unstructured market insights.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Customer inputs help us launch or refine products and services.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Budgets for experimental projects and early feedback from customer advisory groups allow us to innovate out-of-cycle.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We embed innovative ideas from an external network into our rapid product iterations in order to fail fast.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'technology' => [
        'title' => 'Technology Architecture',
        'description' => '
            <p class="">Application modernization is a key step in digital transformation because older applications do not provide the agility and adaptability necessary for today\'s business environment and customer expections. Moving applications into a cloud environment, be it private cloud or public cloud, is an important step in application modernization. There are several different strategies for application modernization that make sense for different applications.
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        57% of organizations researched by IDC, reported Workflow Automation Software as the top technology area for improving agility.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_4.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Technology Architecture',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'Which of these statements best describes your technology architecture?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'Traditional IT environment, mainly on-premise with multiple siloed applications.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Traditional IT environment, mainly on-premise with a few applications in the cloud.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Many cloud applications connected to traditional IT systems.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'A digital architecture running in the cloud, with traditional IT for core operations.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'An integrated digital platform with intelligent systems at its core.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Technology Architecture',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'Regarding the use of DevOps and custom software development practices, how does your organization compare to its peers?',
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'Far behind our peers.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We lag behind our peers.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'On par with our peers.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Slightly ahead of our peers.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Well ahead of our peers.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Technology Architecture',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your organization\'s approach to automation?',
                        'name'=> 14,
                        'options'=>[
                            [
                                'label'=>'Limited process documentation and effort; no deployment, test, or release automation.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Introduction of singular automation (i.e., configuration) projects with a sole focus on cost reduction.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automated infrastructure and application provisioning; self-service portal usage.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'"Automate everything" — automation tools used across development and operations teams, with agile adoption for continuous iterations and custom process workflows.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Use of cloud-based technologies for integrated process automation and custom process workflows, combined with predictive analytics and systemic agile processes.',
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
