<?php
// SAP Agile
return [
    'strategic-planning' => [
        'title' => 'Strategic Planning',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Strategic Planning</h1>
            <div class="h-1 bg-sap-green rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                The changing economy has created a highly dynamic external environment. Businesses need to continually adjust their strategies and ensure their business is agile and dynamic enough to keep up.
            </p>
            <p>
                Answer the questions below to understand the level of your strategic planning agility.
            </p>',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'background' => 'green',
        'intermission' => false,
        'class' => 'sec1',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Strategic Planning',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Are you satisfied with the actual process of strategic planning?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Not at all',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'It works',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Satisfied',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very satisfied',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Strategic Planning',
                'questions' => [
                    'q2'=>[
                        'type'=>'checkbox',
                        'question'=>'What information do you use for your planning? (select all that apply)',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Financial',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Budgeting',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Production / Operations',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'HR (Headcounts – New Hiring)',
                                'value'=>2,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Strategic Planning',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'average'
                        // ],
                        'optionLabels' => [
                            '1 Very slowly',
                            '2',
                            '3',
                            '4',
                            '5 Very quickly',
                        ],
                        'question'=>'How fast can planning changes be implemented across different departments?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Financial',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'1 Very slowly',
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
                                        'label'=>'5 Very quickly',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Budgeting',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'1 Very slowly',
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
                                        'label'=>'5 Very quickly',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Production',
                                'name'=> 3.3,
                                'options'=>[
                                    [
                                        'label'=>'1 Very slowly',
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
                                        'label'=>'5 Very quickly',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'HR (Headcounts – New Hiring)',
                                'name'=> 3.4,
                                'options'=>[
                                    [
                                        'label'=>'1 Very slowly',
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
                                        'label'=>'5 Very quickly',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                        ],
                    ]
                ]
            ]
        ]
    ],
    'processes' => [
        'title' => 'Processes',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Processes</h1>
            <div class="h-2 bg-sap-blue rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                A truly agile organization has processes (or ‘ways of working’) that are both well-defined and flexible. As a result, they can accommodate unique customer requirements and fluctuations in demand, as well as drive efficiency and speed of execution
            </p>
            <p>
                Test your company’s processes agility by completing the next set of questions.
            </p>',
        'background' => 'blue',
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
                'title' => 'Processes',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'How would you best describe your company’s processes?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'No defined processes in place',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'The way its always been done',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'A number of conflicting processes',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have fairly well defined and effective processes',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Flexible to changing requirements',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Processes',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'How easy is it to change these processes?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Very difficult',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Not possible and not required',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Possible, but takes time',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Easy, but with some challenges',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Easily changed',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Processes',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Is your company able to share process information across the different departments?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Currently not possible',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'On a needs-only basis',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularly, but planned',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularly based on changing business requirements',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Constantly and with a clear purpose',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'customer-relationships' => [
        'title' => 'Customer Relationships',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Customer Relationships</h1>
            <div class="h-2 bg-sap-purple rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Customer facing employees are the best placed to understand what the customer wants and how this may be changing. Agile organizations feed this information back into the business, enabling their product and service delivery to respond quickly
            </p>
            <p>
                Let’s explore where you are in this area.
            </p>',
        'background' => 'purple',
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
                'title' => 'Customer Relationships',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'How frequently do your customers change their requests and requirement?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Very rarely',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rarely',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularly',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Often',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very often',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Customer Relationships',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'How easy is it for your company to adapt to the new customer needs?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Very difficult ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Difficult ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Can be done',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Easy',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very easy to adapt',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Customer Relationships',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'How quickly can you successfully implement and manage the new customer requirements?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Very slow to implement',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'This take some time to implement',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To a level we are happy with',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Quickly, but could be better',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We make these changes very quickly',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'suppliers-distributors' => [
        'title' => 'Suppliers &amp; Distributors',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Suppliers &amp; Distributors</h1>
            <div class="h-2 bg-sap-gray rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Agile organizations can scale operations (up or down) to meet fluctuations in demand. Leveraging your suppliers and partners to provide instant scale, is an art which must be mastered to become an agile business.
            </p>
            <p>
                The questions below explore how well you score in this area.
            </p>',
        'background' => 'gray',
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
                'title' => 'Suppliers &amp; Distributors',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'How is business information shared between you and your suppliers?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'We don’t share information between our business and suppliers',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We share some information depending on circumstance',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We share information when it is needed by our suppliers',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We share a lot of information regularly between us and our suppliers',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have integrated systems',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Suppliers &amp; Distributors',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'How is business information shared between you and your distributors?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'We don’t share information between our business and our distributors/ sales channel',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We share some information depending on circumstance',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We share information when it is needed by our distributors/ sales channel',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We share a lot of information regularly between us and our distributors/ sales channel ',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have integrated systems',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Suppliers &amp; Distributors',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'How quickly can you make changes to the way you work with suppliers and distributors?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'This generally takes a long time',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'It happens, but slowly',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To a level we are happy with',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Quickly, but could be better',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very quickly',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'people-experience' => [
        'title' => 'People Experience (HR)',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">People Experience (HR)</h1>
            <div class="h-2 bg-sap-orange rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                End-to-end business model agility is not possible without agile people. Agile people are not possible without the supporting processes and management to enable this.
            </p>
            <p>
                The questions below will measure how well your business enables your people to be truly agile in their work.
            </p>',
        'background' => 'orange',
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
                'title' => 'People Experience (HR)',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'How is information shared with employees across the business?',
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'Very rarely ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'From management to employees',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'On a need to know basis ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'A lot of business information is shared with all employees',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'There is full transparency of the business with all employees',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'People Experience (HR)',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'How quickly can you redirect your people based on changing business requirements?',
                        'name'=> 14,
                        'options'=>[
                            [
                                'label'=>'This generally takes a long time',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'It happens, but slowly',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'To a level we are happy with',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Quickly, but could be better',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Very quickly',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'People Experience (HR)',
                'questions' => [
                    'q15'=>[
                        'type'=>'checkbox',
                        'question'=>'How do you measure your employee performance? (Select all that apply)*',
                        'help' => '<sup>*</sup>Higher weighting on the last three areas – 2-3 – and only 1 point on the first three areas.',
                        'name'=> 15,
                        'options'=>[
                            [
                                'label'=>'Sales and business performance',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Employee output (productivity measures)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Staff turnover and absenteeism ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Based on business and personal goals ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Customer feedback ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Employee Experience measures (employee happiness, employee engagement, etc.)',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
