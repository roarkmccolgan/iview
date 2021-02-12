<?php

// IBM
return [
    'general'=>[
        'title' => 'General',
        'description' => '
            <p class="">To set the foundation for the assessment, we will define the IT architectures and technologies you are using.</p>',
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
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>6,
                            'max'=>28,
                            'outputmax'=>37.5,
                        ],
                        'optionLabels' => [
                            'not at all',
                            'only used for tests/pilots',
                            'for selected applications',
                            'only for new applications',
                            'for most or all applications',
                        ],
                        'question'=>'To what extent do you use the following technologies?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Containerization and container platforms',
                                'name'=> 1.1,
                                'options'=>[
                                    [
                                        'label'=>'not at all',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only used for tests/pilots',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for selected applications',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only for new applications',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for most or all applications',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Microservices',
                                'name'=> 1.2,
                                'options'=>[
                                    [
                                        'label'=>'not at all',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only used for tests/pilots',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for selected applications',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only for new applications',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for most or all applications',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'APIs ',
                                'name'=> 1.3,
                                'options'=>[
                                    [
                                        'label'=>'not at all',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only used for tests/pilots',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for selected applications',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only for new applications',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for most or all applications',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Serverless functions',
                                'name'=> 1.4,
                                'options'=>[
                                    [
                                        'label'=>'not at all',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only used for tests/pilots',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for selected applications',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only for new applications',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for most or all applications',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Virtual machines',
                                'name'=> 1.5,
                                'options'=>[
                                    [
                                        'label'=>'not at all',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only used for tests/pilots',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for selected applications',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only for new applications',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for most or all applications',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Bare metal servers',
                                'name'=> 1.6,
                                'options'=>[
                                    [
                                        'label'=>'not at all',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only used for tests/pilots',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for selected applications',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'only for new applications',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'for most or all applications',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'General',
                'questions' => [
                    'q2'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>7,
                            'max'=>35,
                            'outputmax'=>37.5,
                        ],
                        'optionLabels' => [
                            '1 Not at all important',
                            '2',
                            '3',
                            '4',
                            '5 Essential',
                        ],
                        'question'=>'How important are the following IT deployment models for the IT strategy and vision of your company?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Infrastructure as a service (IaaS)',
                                'name'=> 2.1,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all important',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Essential',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Software as a service (SaaS)',
                                'name'=> 2.2,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all important',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Essential',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Platform as a service (PaaS)',
                                'name'=> 2.3,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all important',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Essential',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Private cloud (on premises or hosted)',
                                'name'=> 2.4,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all important',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Essential',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Multicloud management (connecting and managing workloads across multiple cloud platforms)',
                                'name'=> 2.5,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all important',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Essential',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Hybrid cloud architecture (connection between private cloud and public cloud environments)',
                                'name'=> 2.6,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all important',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Essential',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Traditional on-premises IT',
                                'name'=> 2.7,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all important',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Essential',
                                        'value'=>1,
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
    'move' => [
        'title' => 'Move',
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
                <p class="w-full mb-4">Application modernization is a key step in digital transformation because older applications do not provide the agility and adaptability necessary for today\'s business environment and cPstomer expectations. Moving applications into a cloud environment, be it private cloud or public cloud, is an important step in application modernization. There are several different strategies for application modernization that make sense for different applications.</p>
            ',
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-light text-2xl sm:text-3xl leading-tight mb-2 p-4 bg-grey-lighter">6 out of 10 Nordic organizations are currently modernizing or planning to modernize their existing application environments.</h1>
                    <img src="/images/tools/16/move_intro_data_point.png" class="w-full sm:w-1/2 sm:ml-8" />
                </div>
            ',
            '
                <p class="w-full my-4">Are you modernizing your application environment?</p>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Move',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>10,
                            'max'=>50,
                            'outputmax'=>25,
                        ],
                        'optionLabels' => [
                            'Traditional IT infrastructure',
                            'Private cloud',
                            'IaaS',
                            'PaaS',
                            'SaaS',
                        ],
                        'question'=>'In which type of environment do you predominately run your applications today?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'ERP',
                                'name'=> 3.01,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 3.02,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'HCM',
                                'name'=> 3.03,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Industry-specific applications',
                                'name'=> 3.04,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Custom-built applications',
                                'name'=> 3.05,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'File, Content, and Collaboration ',
                                'name'=> 3.06,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Big Data/analytics',
                                'name'=> 3.07,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Relational databases',
                                'name'=> 3.08,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Non-relational databases',
                                'name'=> 3.09,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Disaster recovery/secondary storage',
                                'name'=> 3.10,
                                'options'=>[
                                    [
                                        'label'=>'Traditional IT infrastructure',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Private cloud',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'IaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'PaaS',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'SaaS',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],

                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Move',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>10,
                            'max'=>50,
                            'outputmax'=>25,
                        ],
                        'optionLabels' => [
                            'Rehost',
                            'Replatform',
                            'Refactor',
                            'Rebuild',
                            'Replace',
                            'Keep as is',
                            'Not Decided',
                        ],
                        'question'=>'Which application modernization strategy have you chosen?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'ERP',
                                'name'=> 4.01,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 4.02,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'HCM',
                                'name'=> 4.03,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Industry-specific applications',
                                'name'=> 4.04,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Custom-built applications',
                                'name'=> 4.05,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'File, content, and collaboration',
                                'name'=> 4.06,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Big Data/analytics',
                                'name'=> 4.07,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Relational databases',
                                'name'=> 4.08,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Non-relational databases',
                                'name'=> 4.09,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Disaster recovery/secondary storage',
                                'name'=> 4.10,
                                'options'=>[
                                    [
                                        'label'=>'Rehost',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replatform',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Refactor',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Rebuild',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Replace',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Keep as is',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not Decided',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],

                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Move',
                'questions' => [
                    'q5'=>[
                        'type'=>'checkbox',
                        'calc'=>[
                            'min'=>3,
                            'max'=>12,
                            'outputmax'=>25,
                        ],
                        'min'=>1,
                        'max'=>3,
                        'question'=>'What are the main drivers for modernizing the application estate? (Select 3 most important)',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Cost reduction',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Operational efficiency',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Transforming business process',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Achieving greater business agility',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Application performance improvement',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Move away from a legacy platform',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Improving user experience',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Supporting new business models',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Improving application security',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Utilizing innovative services only available in cloud',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automating of business processes',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Generating new revenue streams based on data',
                                'value'=>4,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'build' => [
        'title' => 'Build',
        'description' => '
            <p class="mb-2">Digital transformation is mainly done through digitizing business processes and supporting them with digital applications developed in the cloud.</p>
            <p class="">Many innovative services are also provided from the cloud first and developers are using cloud-native tools and processes. There are several different strategies for application modernization that make sense for different applications. </p>
        ',
        'background' => 'status.png',
        'nuggets' => [
            'omnichannel.png',
            'boat.png',
        ],
        'sectionintro' => [
            '
                <p class="w-full mb-4">Digital transformation is mainly done through digitizing business processes and supporting them with digital applications developed in the cloud. </p>
                <p class="w-full mb-4">Many innovative services are also provided from the cloud first and developers are using cloud-native tools and processes. There are several different strategies for application modernization that make sense for different applications.</p>
            ',
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-light text-2xl sm:text-3xl leading-tight mb-2 p-4 bg-grey-lighter">DevOps methodologies are becoming the de facto standard for application development and deployment.</h1>
                    <img src="/images/tools/16/build_intro_data_point.png" class="w-full sm:w-1/2 sm:ml-8" />
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
                'title' => 'Build',
                'questions' => [
                    'q6'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>5,
                            'max'=>15,
                            'outputmax'=>25,
                        ],
                        'optionLabels' => [
                            'Not relevant',
                            'No plans',
                            'Planning to use',
                            'Already use',
                        ],
                        'question'=>'How do you want to enhance your applications using innovative technologies? ',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Add intelligence, analytics, machine learning, artificial intelligence',
                                'name'=> 6.1,
                                'options'=>[
                                    [
                                        'label'=>'Not relevant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Already use',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Add IoT and edge applications',
                                'name'=> 6.2,
                                'options'=>[
                                    [
                                        'label'=>'Not relevant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Already use',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Add blockchain capabilities',
                                'name'=> 6.3,
                                'options'=>[
                                    [
                                        'label'=>'Not relevant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Already use',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'AR/VR',
                                'name'=> 6.4,
                                'options'=>[
                                    [
                                        'label'=>'Not relevant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Already use',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Intelligent process automation (IPA)',
                                'name'=> 6.5,
                                'options'=>[
                                    [
                                        'label'=>'Not relevant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Already use',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Build',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>4,
                            'max'=>17,
                            'outputmax'=>25,
                        ],
                        'optionLabels' => [
                            '1 Not at all applicable',
                            '2',
                            '3',
                            '4',
                            '5 Very applicable',
                        ],
                        'question'=>'To what extent do the following approaches reflect your application strategy?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'We prefer to use standard off-the-shelf applications',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all applicable',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Very applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We prefer to customize off-the-shelf standard applications',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Very applicable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We prefer to build our own applications',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Very applicable',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We have outsourced application development',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'1 Not at all applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>1.75,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>3.25,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Very applicable',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Build',
                'questions' => [
                    'q8'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>4,
                            'max'=>12,
                            'outputmax'=>25,
                        ],
                        'optionLabels' => [
                            'No plans',
                            'Planning to use',
                            'Currently using',
                        ],
                        'question'=>'Which methodologies and tools are you using?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'We use DevOps methodologies',
                                'name'=> 8.1,
                                'options'=>[
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Currently using',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We run a CI/CD pipeline',
                                'name'=> 8.2,
                                'options'=>[
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Currently using',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We do value stream management',
                                'name'=> 8.3,
                                'options'=>[
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Currently using',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'We are running a software development factory',
                                'name'=> 8.4,
                                'options'=>[
                                    [
                                        'label'=>'No plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Planning to use',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Currently using',
                                        'value'=>3,
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
    'manage' => [
        'title' => 'Manage',
        'description' => '
            <p class="mb-2">With existing applications being moved to the cloud and new services built in the cloud, a modern infrastructure is highly dynamic. Depending on development in the application estate, workloads and data need to be integrated and shifted to the most applicable platform — depending on cost, performance, compliance, and so on.</p>
            <p class="">In addition to having a suitable architecture, it is paramount to have appropriate tools and processes in place to orchestrate, optimize, and govern the hybrid multicloud environment.</p>
        ',
        'background' => 'value.png',
        'nuggets' => [
            'managed.png',
            'intellectual.png',
        ],
        'sectionintro' => [
            '
                <p class="w-full mb-4">With existing applications being moved to the cloud and new services built in the cloud, a modern infrastructure is highly dynamic. Depending on development in the application estate, workloads and data need to be integrated and shifted to the most applicable platform — depending on cost, performance, compliance, and so on.</p>
            ',
            '
                <p class="w-full mb-4">In addition to having a suitable architecture, it is paramount to have appropriate tools and processes in place to orchestrate, optimize, and govern the hybrid multicloud environment.</p>
            ',
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-light text-2xl sm:text-3xl leading-tight mb-2 p-4 bg-grey-lighter">4 out of 10 Nordic organizations are shifting workloads off their existing cloud platform.</h1>
                    <img src="/images/tools/16/manage_intro_data_point.png" class="w-full sm:w-1/2 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Manage',
                'questions' => [
                    'q9'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'min'=>4,
                            'max'=>20,
                            'outputmax'=>18.75,
                        ],
                        'optionLabels' => [
                            '1 Disagree completely',
                            '2',
                            '3',
                            '4',
                            '5 Completely agree',
                        ],
                        'question'=>'To what extent do you agree with the following statements about your ability to monitor and manage workloads across the infrastructure?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'There is full transparency of resource utilization, dataflows, and cost across the infrastructure',
                                'name'=> 9.1,
                                'options'=>[
                                    [
                                        'label'=>'1 Disagree completely',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'The management platform provides a vendor-agonistic cohesive "single pane of glass"',
                                'name'=> 9.2,
                                'options'=>[
                                    [
                                        'label'=>'1 Disagree completely',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Compute and storage resources are automatically provisioned depending on application use',
                                'name'=> 9.3,
                                'options'=>[
                                    [
                                        'label'=>'1 Disagree completely',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Workloads and data repositories are dynamically deployed to the most feasible platforms',
                                'name'=> 9.4,
                                'options'=>[
                                    [
                                        'label'=>'1 Disagree completely',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5 Completely agree',
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
                'title' => 'Manage',
                'questions' => [
                    'q10'=>[
                        'type'=>'checkbox',
                        'calc'=>[
                            'min'=>3,
                            'max'=>9,
                            'outputmax'=>18.75,
                        ],
                        'min'=>1,
                        'max'=>3,
                        'question'=>'What are your main decision criteria for optimizing your cloud environment? Select top 3',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Cost optimisation',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Performance optimisation',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularity compliance',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Reduce complexity',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Avoid lock-in in cloud platform',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business continuity/availability',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Security',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Time to market',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business innovation',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Business agility',
                                'value'=>3,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Manage',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'calc'=>[
                            'min'=>1,
                            'max'=>3,
                            'outputmax'=>18.75,
                        ],
                        'question'=>'Which of the following best describes your current operating model for IT',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'We have a traditional IT organization organised by domain (server, storage, network, database, etc)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a traditional IT organization and have formed a tiger team to establish a cloud operating model',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have transformed our IT organization to match the cloud operating model',
                                'value'=>3,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Manage',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'calc'=>[
                            'min'=>1,
                            'max'=>3,
                            'outputmax'=>18.75,
                        ],
                        'question'=>'Have you set up a cloud center of excellence to ensure that the cloud strategy and processes are implemented across all parts of the organization?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'Yes, already in place',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No, but plan to do so',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No, and no plans',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
