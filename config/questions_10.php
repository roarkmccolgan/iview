<?php
// Trend
return array(
    'dx-adoption' => array(
        'title' => 'DX Adoption',
        'description' => '',
        'background' => false,
        'nuggets' => array(
            'skills.png',
            'customer.png',
            'cocreate.png',
        ),
        'intermission' => false,
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'DX Adoption',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'On a scale of 1 to 5, how transformed are the following areas, in your organization?',
                        'name'=> 1,
                        'options'=>array(
                            array(
                                'label'=>'Branch transformation',
                                'name'=> 1.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Digital/online Channel',
                                'name'=> 1.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Mobile Channel',
                                'name'=> 1.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'New data driven services through Open APIs',
                                'name'=> 1.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Virtual/Augmented channel (e.g., chat bots, robo advisors)',
                                'name'=> 1.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Personalized products and services (e.g., usage based/pay as you use products enabled by Internet of Things)',
                                'name'=> 1.6,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Digital marketing (e.g., targeted offerings through digital channels enabled by data and analytics)',
                                'name'=> 1.7,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Using AI/analytics to identify opportunities for monetization',
                                'name'=> 1.8,
                                'options'=>array(
                                    array(
                                        'label'=>'Transformation not yet begun',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Early stages of transformation',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Half way through',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Advanced stages of transformation',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completed transformation',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'DX Adoption',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'What is IT\'s role (as viewed by business) in transforming business through digital technologies in your organization? (Choose 1)',
                        'name'=> 2,
                        'options'=>array(
                            array(
                                'label'=>'Cost center',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Enabler of business efficiency',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'river of competitive advantage',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'DX Adoption',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Which of the bands below best represent the proportion of your IT budget spend on the following areas?',
                        'name'=> 3,
                        'options'=>array(
                            array(
                                'label'=>'IT Services',
                                'name'=> 3.1,
                                'options'=>array(
                                    array(
                                        'label'=>'None',
                                        'value'=>0,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'0-9%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'10-19%',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'20-29%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'30-39%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'40% and above',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Digital Transformation/New IT Initiatives - e.g., modern front office, New channels, personalized offeringsl',
                                'name'=> 3.2,
                                'options'=>array(
                                    array(
                                        'label'=>'None',
                                        'value'=>0,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'0-9%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'10-19%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'20-29%',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'30-39%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'40% and above',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'DX Adoption',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Will you spend more, less, or the same in 2018 than in the previous year for the following areas?',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'IT consulting and system integration services',
                                'name'=> 4.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'IT outsourcing services',
                                'name'=> 4.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'IT maintenance, support, or training services',
                                'name'=> 4.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Business Consulting',
                                'name'=> 4.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Business Process Outsourcing',
                                'name'=> 4.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Decrease by more than 10%',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Decrease by 1-10%',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by 1-10%',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Increase by more than 10%',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    ),
    'success-in-dx' => array(
        'title' => 'Success in DX',
        'description' => '',
        'background' => false,
        'nuggets' => array(
            'omnichannel.png',
            'boat.png',
        ),
        'intermission' => false,
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Success in DX',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'What is the typical balance in your company for digital transformation initiatives?',
                        'name'=> 5,
                        'options'=>array(
                            array(
                                'label'=>'All or almost all individual business unit DX Initiatives',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Mainly individual business unit DX Initiatives with some strategic enterprise wide DX initiatives',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'A balance of individual business unit DX Initiatives and strategic enterprise wide DX initiatives',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Mainly stategic enterprise wide DX initiatives with some individual business unit DX initiatives',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'All or almost all strategic enterprise wide DX initiatives',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Success in DX',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'How successful are you in your digital initiatives? (Choose 1)',
                        'name'=> 6,
                        'options'=>array(
                            array(
                                'label'=>'Too early to measure',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Not very successful',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Somewhat successful',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Successful in all initiatives so far',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Success in DX',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'At what stage is your organization today in the deployment of each of the following digital technologies or initiatives to transform your business in response to the changing customer and market needs?   ',
                        'name'=> 7,
                        'options'=>array(
                            array(
                                'label'=>'Big Data and Analytics',
                                'name'=> 7.01,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Social media',
                                'name'=> 7.02,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Mobile devices and mobile applications',
                                'name'=> 7.03,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Next Gen Security',
                                'name'=> 7.04,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Internet of Things  more relevant for Insurance organizations',
                                'name'=> 7.05,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cognitive/AI and Cognitive RPA',
                                'name'=> 7.06,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Open APIs',
                                'name'=> 7.07,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Platform based financial services solutions',
                                'name'=> 7.08,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Digital marketing tools',
                                'name'=> 7.09,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'DevOps and agile methodologies',
                                'name'=> 7.10,
                                'options'=>array(
                                    array(
                                        'label'=>'Not considered yet',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Researching/Under consideration',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Pilot/ Proof of Concept',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production in business units or departments',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In production enterprise wide',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
        )
    ),
    'connected-financial-services' => array(
        'title' => 'Connected Financial Services',
        'description' => '',
        'background' => false,
        'nuggets' => array(
            'managed.png',
            'intellectual.png',
        ),
        'intermission' => '',
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Connected Financial Services',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Which statement best describes how advanced you are in delivering a connected financial service? (Choose 1)',
                        'name'=> 8,
                        'options'=>array(
                            array(
                                'label'=>'We haven\'t considered implementing a connected financial services business yet',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are currently considering/exploring the delivery of a connected financial services business',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are at an early stage in achieving this',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are well under way in achieving this',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are very advanced in delivering a connected financial services business',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Connected Financial Services',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'In delivering a connected financial services business, to what extent have you implemented each of the following to assess risk and ensure the right levels of security? ',
                        'name'=> 9,
                        'options'=>array(
                            array(
                                'label'=>'Well defined risk assessment and risk management practices',
                                'name'=> 9.1,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Data enhanced identity management',
                                'name'=> 9.2,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Fraud detection and prevention solutions',
                                'name'=> 9.3,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cyberthreat detection and prevention solution',
                                'name'=> 9.4,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Risk based communications monitoring analysis (staff and customers)',
                                'name'=> 9.5,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Risk based transaction monitoring analysis (staff and customers)',
                                'name'=> 9.6,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Investments in nextgensecurity',
                                'name'=> 9.7,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Regulatory compliance reporting',
                                'name'=> 9.8,
                                'options'=>array(
                                    array(
                                        'label'=>'We do not have this in place currently',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'We have this in place to a limited degree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>' We employ this extensively in our organization',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            )
        )
    )
);