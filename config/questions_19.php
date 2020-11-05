<?php
// REDHAT
return [
    'general'=>[
        'title' => 'General',
        'description' => '
            <p class="">To set the foundation for the assessment, we would like to know which IT architectures and technologies you are using. </p>',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'General',
                'questions' => [
                    'q1'=>[
                        'type'=>'checkbox',
                        'question'=>'What is the role of software development and delivery capability in supporting the overall direction of your organization and its rollout of digital products and services? (Select all that apply)',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'To re-engineer software processes related to core products (e.g., core banking, core manufacturing, core public sector,',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To differentiate/innovate the product and/or services portfolio (e.g., software embedded in product/service that augment',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To increase competitiveness by controlling a much larger share of the digital value creation in the organization',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To scale digital distribution and monetization of digital products and services both internally and externally via the partner or channel ecosystem',
                                'value'=>3,
                                'checked'=>false,
                            ],
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'General',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'What best describes your organization\'s current approach to software development and delivery and how do you expect this to change in two years?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Pockets of software dev activity as and when needed — no formal structure or approach (ad-hoc)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Many siloed software dev initiatives across the organization —  a more formal approach but lack of scale and integration',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Integrated software dev initiatives across the organization — more structured approach including more formal programs',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Industrialized and integrated software development capabilities with some business alignment',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unified software dev capability across the entire organization with full alignment to the business strategy (capability is founded on reuse, automation, integration, and self-service)',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'General',
                'questions' => [
                    'q3'=>[
                        'type'=>'checkbox',
                        'question'=>'What is the role of software development and delivery capability in supporting the overall direction of your organization and its rollout of digital products and services? (Select all that apply)',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Expand internal development capabilities',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Expand use of external contractual relationships with software development providers',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Look to build and exploit co-creation models (customers/suppliers/industry platforms/incubators)',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Expand the developer ecosystem',
                                'value'=>3,
                                'checked'=>false,
                            ],
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'General',
                'questions' => [
                    'q4'=>[
                        'type'=>'opposingslider',
                        'optionLabels' => [
                            'Private Cloud',
                            'Public Cloud',
                        ],
                        'question'=>'Thinking about your company\'s cloud native app development and deployment activities, what percentage are done on public cloud platforms versus private cloud platforms?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'type' => 'percentage',
                                'label'=>'Private Cloud',
                                'name'=> 4.1,
                            ],
                            [
                                'type' => 'percentage',
                                'label'=>'Public Cloud',
                                'name'=> 4.2,
                            ],
                        ]
                    ]
                ]
            ]
        ]
    ],
    'automate' => [
        'title' => 'Automate',
        'description' => '
            <p class="">
                At the core of digital innovation success is the need for automation to drive velocity, consistency, and quality at scale. However, manual processes remain the clear bottleneck in app delivery. This makes automation the top priority to support organizational ambitions to deliver software-based digital innovation — not only to deliver apps, including cloud-native apps, via hybrid and multicloud environments, but also to accelerate plans for ERP cloud migration via intelligent applications, connectors, and platforms. Organizations must look at how they unite, integrate, and measure end-to-end activities and performance across the entire app delivery pipeline.
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <p class="w-full mb-4">At the core of digital innovation success is the need for automation to drive velocity, consistency, and quality at scale. However, manual processes remain the clear bottleneck in app delivery. This makes automation the top priority to support organizational ambitions to deliver software-based digital innovation — not only to deliver apps, including cloud-native apps, via hybrid and multicloud environments, but also to accelerate plans for ERP cloud migration via intelligent applications, connectors, and platforms. Organizations must look at how they unite, integrate, and measure end-to-end activities and performance across the entire app delivery pipeline.</p>
            ',
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-light text-2xl sm:text-3xl leading-tight mb-2 p-4 bg-grey-lighter">
                        Automation fuels insight, innovation, and collaboration
                    </h1>
                    <img src="/images/tools/19/automate_intro_data_point.svg" class="w-full sm:w-1/2 sm:ml-8" />
                </div>
            ',
            '
                <p class="w-full my-4">How are you leveraging automation in your digital innovation journey?</p>
            '
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Automate',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'What best describes your organization\'s reasons for using automation in the application delivery process?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'To get a better understanding of our applications, infrastructure, and processes to inform our new application strategy',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To accelerate our current plans for ERP cloud migration using intelligent applications, connectors, and platforms',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To support our ambitions for delivering applications via hybrid and multicloud environments and cloud-native application',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To underpin new custom application product innovations in areas such as mobile, AR/VR, IoT, edge computing',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Automate',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes your organization\'s approach to DevOps automation?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Limited process documentation and effort; no deployment, test, or release automation',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Introduction of singular automation (i.e., configuration) projects with a sole focus on cost reduction',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automated infrastructure and application provisioning; self-service portal usage',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'"Automate everything" — automation tools used across development and operations teams, with agile adoption for continuous iterations',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Use of multicloud-based technologies for integrated process automation, combined with predictive analytics and systemic agile processes',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Not doing DevOps',
                                'value'=>0,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Automate',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'What best describes your organization\'s approach to continuous delivery (CD) and integration (CI)?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Manual deployment processes',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Some automated scripting, change management controls, and automated acceptance testing',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'End-to-end automated deployment process',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automation across all testing functions',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Continuous integration with automated build and release management',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'hybrid' => [
        'title' => 'Hybrid Cloud',
        'description' => '
            <p class="mb-2">
                Hybrid cloud enables organizations to maximize the return on their investments in existing IT infrastructure and ensure that organizations can seamlessly connect complex and heterogeneous estates of data, applications, and tooling. Hybrid cloud also injects flexibility into the digital infrastructure via partial or total cloudification of IT assets that would otherwise prove hard to modernize. Hybridizing the IT estate also helps organizations to maintain their digital autonomy and avoid becoming dependent on one vendor or another. 
            </p>
        ',
        'background' => false,
        'nuggets' => [
            'omnichannel.png',
            'boat.png',
        ],
        'sectionintro' => [
            '
                <p class="w-full mb-4">
                    Hybrid cloud maximizes return on IT investments, increases flexibility in the IT estate, and ensures cloud autonomy.
                </p>
            ',
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-light text-2xl sm:text-3xl leading-tight mb-2 p-4 bg-grey-lighter">DevOps methodologies are becoming the de facto standard for application development and deployment.</h1>
                    <img src="/images/tools/19/hybrid_intro_data_point.svg" class="w-full sm:w-1/2 sm:ml-8" />
                </div>
            ',
            '
                <p class="w-full my-4">Where is your organization on the cloud journey?</p>
            '
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Hybrid Cloud',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'In which phase of the cloud journey are you?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'single cloud',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'multiple clouds (use of multiple public cloud providers and one or more private clouds with varying degrees of interoperability)',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Hybrid clouds (when all public clouds and private clouds of an organisation can be managed as a single unified infrastructure)',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Hybrid Cloud',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Which option best describes how IT currently delivers your workloads?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'On-premises/Traditional IT',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'On-premises/Private cloud',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Hybrid cloud (combination of on-premises and public cloud)',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Public cloud',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Not applicable/ Not used',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Hybrid Cloud',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Which of the following statements best describes your organization’s hybrid-cloud automation and orchestration processes?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Individual teams reliant on limited provisioning capabilities',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Reuse of select templates across multiple teams and projects',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Standardization of container orchestration, automated infrastructure provisioning, and developer self-service platforms',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Coordinated and integrated on-premises and public cloud infrastructure provisioning, configuration, and orchestration',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Application aware analytics driven infrastructure provisioning, automation, and orchestration across public and private',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'native' => [
        'title' => 'Cloud Native',
        'description' => '
            <p class="mb-2">
                Cloud native changes the cadence at which digital functionality is built and released, altering the competitive context in which organizations compete for customers and/or contribute value-add within networked ecosystems. Because of its intrinsic characteristics, cloud native provides the strategic and tactical background for organizations to rethink the format of their application delivery value chains, including organizational design, application infrastructure assets, and delivery culture
            </p>
        ',
        'background' => false,
        'nuggets' => [
            'managed.png',
            'intellectual.png',
        ],
        'sectionintro' => [
            '
                <p class="w-full mb-4">
                    Cloud native changes the cadence at which digital functionality is built and released, altering the competitive context in which organizations compete for customers and/or contribute value-add within networked ecosystems. Because of its intrinsic characteristics, cloud native provides the strategic and tactical background for organizations to rethink the format of their application delivery value chains, including organizational design, application infrastructure assets, and delivery culture.
                </p>
            ',
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-light text-2xl sm:text-3xl leading-tight mb-2 p-4 bg-grey-lighter">Cloud native shifts requirements to compete in a hyperagile, digital world.</h1>
                    <img src="/images/tools/19/native_intro_data_point.svg" class="w-full sm:w-1/2 sm:ml-8" />
                </div>
            ',
            '
                <p class="w-full my-4">How is cloud-native making YOU more agile?</p>
            '
        ],
        'intermission' => [],
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cloud Native',
                'questions' => [
                    'q11'=>[
                        'type'=>'slider',
                        'question'=>'Relative to your total estate of custom-built applications running in a cloud environment, please estimate the percentage of apps built/deployed using cloud native development.',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'0% - 4%',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'5% - 15%',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'16% - 25%',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'26% - 35%',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'36% - 49%',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'50% - 75%',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'above 75%',
                                'value'=>8,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Cloud Native',
                'questions' => [
                    'q12'=>[
                        'type'=>'slider',
                        'question'=>'Please estimate the percentage of your application estate that is  developed and deployed using a DevOps methodology.',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'0% (None)',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1 – 20%',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'21% – 30%',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'31% – 40%',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'41% – 50%',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'51% – 75%',
                                'value'=>7,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'76% – 100%',
                                'value'=>9,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Cloud Native',
                'questions' => [
                    'q13'=>[
                        'type'=>'checkbox',
                        'question'=>'Which of the following areas are your top 2 investment priorities to enhance your organization\'s container use? [select up to 3]',
                        'min' => 1,
                        'max' => 3,
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'CI/CD system adoption',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Functions-as-a-service',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Container monitoring',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Refactoring applications to make them container ready',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Using containers in bare metal to save hypervisor costs',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Multi-cloud deployment and the integration of containers',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Data integrity and reliability ',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'The security, reliability, and stability of containers',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Other; please specify',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ]
                    ]
                ]
            ]
        ]
    ]
];
