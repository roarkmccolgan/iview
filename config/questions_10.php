<?php

// NTTDATADX
return [
    'dx-adoption' => [
        'title' => 'DX Adoption',
        'description' => '',
        'background' => false,
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'background' => false,
        'intermission' => false,
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'DX Adoption',
                'questions' => [
                    'q1'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'optionLabels' => [
                            'Transformation not yet begun',
                            'Early stages of transformation',
                            'Half way through the transformation process',
                            'Advanced stages of transformation',
                            'Transformation is complete',
                            'Not applicable',
                        ],
                        'question'=>'On a scale of 1 to 5, how transformed are the following areas, in your organization?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Branch transformation',
                                'name'=> 1.1,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Digital/online Channel',
                                'name'=> 1.2,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Mobile Channel',
                                'name'=> 1.3,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'New data driven services through Open APIs',
                                'name'=> 1.4,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Virtual/Augmented channel (e.g., chat bots, robo advisors)',
                                'name'=> 1.5,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Personalized products and services (e.g., usage based/pay as you use products enabled by Internet of Things)',
                                'name'=> 1.6,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Digital marketing (e.g., targeted offerings through digital channels enabled by data and analytics)',
                                'name'=> 1.7,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Using AI/analytics to identify opportunities for monetization',
                                'name'=> 1.8,
                                'options'=>[
                                    [
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Half way through the transformation process',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Transformation is complete',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'DX Adoption',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'What is IT\'s role (as viewed by business) in transforming business through digital technologies in your organization? (Choose 1)',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Cost center',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Enabler of business efficiency',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Driver of competitive advantage',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'DX Adoption',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'optionLabels' => [
                            'None',
                            '0-9%',
                            '10-19%',
                            '20-29%',
                            '30-39%',
                            '40% and above',
                        ],
                        'question'=>'Which of the bands below best represent the proportion of your IT budget spend on the following areas?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'IT Services',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'None',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'0-9%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'10-19%',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'20-29%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'30-39%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'40% and above',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Digital Transformation/New IT Initiatives - e.g., modern front office, New channels, personalized offerings',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'None',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'0-9%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'10-19%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'20-29%',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'30-39%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'40% and above',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'DX Adoption',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'optionLabels' => [
                            'Decrease by more than 10%',
                            'Decrease by 1-10%',
                            'Stay the same',
                            'Increase by 1-10%',
                            'Increase by more than 10%',
                            'Not applicable',
                        ],
                        'question'=>'Will you spend more, less, or the same in 2019 than in the previous year for the following areas?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'IT consulting and system integration services',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'IT outsourcing services',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'IT maintenance, support, or training services',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Business Consulting',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Business Process Outsourcing',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Not applicable',
                                        'value'=>0,
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
    'success-in-dx' => [
        'title' => 'Success in DX',
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
                'title' => 'Success in DX',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'What is the typical balance in your company for digital transformation initiatives?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'All or almost all individual business unit DX Initiatives',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Mainly individual business unit DX Initiatives with some strategic enterprise wide DX initiatives',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'A balance of individual business unit DX Initiatives and strategic enterprise wide DX initiatives',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Mainly stategic enterprise wide DX initiatives with some individual business unit DX initiatives',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'All or almost all strategic enterprise wide DX initiatives',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Success in DX',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'How successful are you in your digital initiatives? (Choose 1)',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Too early to measure',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Not very successful',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Somewhat successful',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Successful in all initiatives so far',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Success in DX',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'optionLabels' => [
                            'Not considered yet',
                            'Researching/Under consideration',
                            'Pilot/ Proof of Concept',
                            'In production in business units or departments',
                            'In production enterprise wide',
                        ],
                        'question'=>'At what stage is your organization today in the deployment of each of the following digital technologies or initiatives to transform your business in response to the changing customer and market needs?   ',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Big Data and Analytics',
                                'name'=> 7.01,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Social media',
                                'name'=> 7.02,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Mobile devices and mobile applications',
                                'name'=> 7.03,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Next Gen Security',
                                'name'=> 7.04,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Internet of Things',
                                'name'=> 7.05,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Cognitive/AI and Cognitive RPA',
                                'name'=> 7.06,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Open APIs',
                                'name'=> 7.07,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Platform based financial services solutions',
                                'name'=> 7.08,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Digital marketing tools',
                                'name'=> 7.09,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'DevOps and agile methodologies',
                                'name'=> 7.10,
                                'options'=>[
                                    [
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
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
    'connected-financial-services' => [
        'title' => 'Connected Financial Services',
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
                'title' => 'Connected Financial Services',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Which statement best describes how advanced you are in delivering a connected financial service? (Choose 1)',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'We haven\'t considered implementing a connected financial services business yet',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are currently considering/exploring the delivery of a connected financial services business',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are at an early stage in achieving this',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are well under way in achieving this',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are very advanced in delivering a connected financial services business',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Connected Financial Services',
                'questions' => [
                    'q9'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average',
                        ],
                        'optionLabels' => [
                            'We do not have this in place currently',
                            'We have this in place to a limited degree',
                            'We employ this extensively in our organization',
                        ],
                        'question'=>'In delivering a connected financial services business, to what extent have you implemented each of the following to assess risk and ensure the right levels of security? ',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Well defined risk assessment and risk management practices',
                                'name'=> 9.1,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Data enhanced identity management',
                                'name'=> 9.2,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Fraud detection and prevention solutions',
                                'name'=> 9.3,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Cyberthreat detection and prevention solution',
                                'name'=> 9.4,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Risk based communications monitoring analysis (staff and customers)',
                                'name'=> 9.5,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Risk based transaction monitoring analysis (staff and customers)',
                                'name'=> 9.6,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Investments in Next-Gen Security',
                                'name'=> 9.7,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Regulatory compliance reporting',
                                'name'=> 9.8,
                                'options'=>[
                                    [
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
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
