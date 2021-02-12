<?php

//5 SPLUNK
return [
    'screeners' => [
        'title' => 'Demographics',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'icon' => 'icon-Pencil',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Demographics',
                'questions' => [
                    's1'=>[
                        'type'=>'button',
                        'question'=>'How many full-time employees work at your organization worldwide?',
                        'name'=>'s1',
                        'options'=>[
                            [
                                'label'=>'500 to 999',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1000 to 4999',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'5000+',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'security-strategy' => [
        'title' => 'Security Strategy',
        'class' => 'sec1',
        'icon' => 'splunk-strategy',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Security Strategy',
                'questions' => [
                    'q1'=>[
                        'type'=>'radio',
                        'question'=>'Which statement best describes your organization\'s current security strategy?',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Ad hoc investment with no broad plan or strategic consideration',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We plan to fill security gaps as they are deemed necessary',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have repeatable security processes in place that support the business',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a well-managed security strategy that maps the direction at least for the next two years',
                                'value'=>8,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have defined security as a core strategic investment with specified outcomes',
                                'value'=>10,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Security Strategy',
                'questions' => [
                    'q2'=>[
                        'type'=>'slider',
                        'question'=>'To what extent are the following driving your investments in IT security? <br/><span class="small">Please use a rating where 1 = not at all and 5 = very significant driver</span>',
                        'name'=>'q2',
                        'options'=>[
                            [
                                'label'=>'Our understanding of the threat landscape',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Inputs from third-party providers and government sources',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'A need to increase our internal resources and skills space',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Compliance requirements such as GDPR, ISO2700x, or PCI DSS',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Business initiatives such as digital transformation and the Internet of Things',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Adoption of cloud services',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Cyber insurance requirements',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.7',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'A strategic decision to outsource some or all of our security provision',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.8',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'A recent breach or compromise',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.9',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Security Strategy',
                'questions' => [
                    'q3'=>[
                        'type'=>'radio',
                        'question'=>'Which of the following statements best describes your approach to "state of the art" for security investment?',
                        'name'=>'q3',
                        'options'=>[
                            [
                                'label'=>'We have no view or defined understanding of state of the art',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Our existing suppliers tell us what the state of the art is',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We use internal experts to define state of the art',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We use external sources such as national competent authorities (CESG/NCSC in the U.K., BSI in Germany, etc.) and/or industry standards (such as ISO, NIST, and SANS) to define state of the art',
                                'value'=>8,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We use third-party specialists or consultants to define state of the art',
                                'value'=>10,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            ],
        ],
    ],
    'incident-detection' => [
        'title' => 'Incident Detection',
        'class' => 'sec2',
        'icon' => 'splunk-incident-detection',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Incident Detection',
                'questions' => [
                    'q4'=>[
                        'type'=>'slider',
                        'question'=>'What types of advanced security capabilities do you use to detect threats or breaches? <br/><span class="small">Please use a rating where 1 = not at all and 5 = we use this extensively</span>',
                        'name'=>'q4',
                        'options'=>[
                            [
                                'label'=>'Machine learning',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Artificial intelligence',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Security analytics including behavioral analysis and anomaly detection',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Sandboxing',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Advanced authentication systems, including multifactor authentication and biometrics',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Real-time analytics',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Heuristics',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.7',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Threat intelligence services',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.8',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Next-generation (signatureless) endpoint protection',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.9',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Proactive threat hunting <small>(The assumption that your environment is already breached so you proactively search for the intruder.)</small>',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.10',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Forensics and incident investigation systems',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.11',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Dedicated security operations team (SOC)',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.12',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Security incident and event management (SIEM)',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.13',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Incident Detection',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'How many actionable security-relevant alerts or incidents a week do you typically receive across all of IT?',
                        'name'=>'q5',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'None',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Fewer than 10',
                                'value'=>4.9,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Between 10 to 49',
                                'value'=>29.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Between 50 to 99',
                                'value'=>74.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Between 100 and 499',
                                'value'=>299.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Between 500 and 999',
                                'value'=>749.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1,000 or more',
                                'value'=>2000,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Incident Detection',
                'questions' => [
                    'q6'=>[
                        'type'=>'slider',
                        'question'=>'To what extent will you be investing in the following incident response areas within the next 12 months?',
                        'name'=>'q6',
                        'options'=>[
                            [
                                'label'=>'Incident response process and plans',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>3.75,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Incident response platform and supporting technology',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>3.75,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Incident response teams (people)',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>3.75,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Third-party incident response services',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>3.75,
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
    'incident-response' => [
        'title' => 'Incident Response',
        'class' => 'sec3',
        'icon' => 'icon-Timer-2',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Incident Response',
                'questions' => [
                    'q7'=>[
                        'type'=>'radio',
                        'question'=>'To what extent do you have a security incident response platform in place today?',
                        'name'=>'q7',
                        'options'=>[
                            [
                                'label'=>'Not using and no plans to use',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Not using but plan to use in the next two years',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Currently piloting this',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Use in limited areas in production',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Use extensively in production',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Incident Response',
                'questions' => [
                    'q8'=>[
                        'type'=>'radio',
                        'question'=>'Which statement best describes your organization\'s response to incident alerts?',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'We have no defined responses to incidents',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a broad incident response process that defines the overall approach to incidents',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a detailed run book of incident types which defines our response',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a managed incident response plan that defines how we respond to incidents',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have an incident response management platform that automates the process of response to incidents',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Incident Response',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'How many people on average are involved in security investigations per incident?',
                        'name'=>'q9',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'1',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2 or 3',
                                'value'=>2.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'4 or 5',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'6 to 9',
                                'value'=>7.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'10 or more',
                                'value'=>15,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Incident Response',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'What is the work effort (time spent in hours) per person per security incident investigation?',
                        'name'=>'q10',
                        'options'=>[
                            [
                                'label'=>'Less than 1 hour',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1–2 hours',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2–4 hours',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'4–8 hours',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'9–12 hours',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'13–20 hours',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'More than 20 hours',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Incident Response',
                'questions' => [
                    'q11'=>[
                        'type'=>'radio',
                        'question'=>'What statement best describes your ability to cope with the number of security incidents raised?',
                        'name'=>'q11',
                        'options'=>[
                            [
                                'label'=>'We are completely overwhelmed',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We are constantly firefighting',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We usually cope but it\'s sometimes a struggle',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We cope more often than not, with a few stressful moments',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We cope quite comfortably',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Incident Response',
                'questions' => [
                    'q12'=>[
                        'type'=>'radio',
                        'question'=>'To what extent is the information gathered sufficient to be able to take effective incident response action?',
                        'name'=>'q12',
                        'options'=>[
                            [
                                'label'=>'We generally have insufficient information in order to take action',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We gather information that points us in a general direction',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We gather enough information for us to take reasonable action',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We gather sufficient information that directs us toward an appropriate action',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We gather detailed information that allows us to take decisive action',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Incident Response',
                'questions' => [
                    'q13'=>[
                        'type'=>'checkbox',
                        'question'=>'Which of the following have you have deployed to support your incident response capabilities?',
                        'name'=>'q13',
                        'options'=>[
                            [
                                'label'=>'Automated policy updates (e.g., firewall rules updated in response to counter emergence of a new threat)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Run books',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Communications plan',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Disaster recovery policy',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Tiger/Go Teams',
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
