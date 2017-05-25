<?php
//5 SPLUNK
return array(
    'screeners' => array(
        'title' => 'Demographics',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'icon' => 'icon-Pencil',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Demographics',
                'questions' => array(
                    's1'=>array(
                        'type'=>'button',
                        'question'=>'How many full-time employees work at your organization worldwide?',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'label'=>'500 to 999',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1000 to 4999',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'5000+',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
        )
    ),
    'security-strategy' => array(
        'title' => 'Security Strategy',
        'class' => 'sec1',
        'icon' => 'splunk-strategy',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Security Strategy',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'radio',
                        'question'=>'Which statement best describes your organization\'s current security strategy?',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc investment with no broad plan or strategic consideration',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We plan to fill security gaps as they are deemed necessary',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have repeatable security processes in place that support the business',
                                'value'=>6,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a well-managed security strategy that maps the direction at least for the next two years',
                                'value'=>8,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have defined security as a core strategic investment with specified outcomes',
                                'value'=>10,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Security Strategy',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'slider',
                        'question'=>'To what extent are the following driving your investments in IT security? <br/><span class="small">Please use a rating where 1 = not at all and 5 = very significant driver</span>',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Our understanding of the threat landscape',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Inputs from third-party providers and government sources',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'A need to increase our internal resources and skills space',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Compliance requirements such as GDPR, ISO2700x, or PCI DSS',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Business initiatives such as digital transformation and the Internet of Things',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Adoption of cloud services',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cyber insurance requirements',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'A strategic decision to outsource some or all of our security provision',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.8',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'A recent breach or compromise',
                                'from'=>'Not at all',
                                'to'=>'Very significant',
                                'name'=>'q2.9',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Security Strategy',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following statements best describes your approach to "state of the art" for security investment?',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'We have no view or defined understanding of state of the art',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Our existing suppliers tell us what the state of the art is',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use internal experts to define state of the art',
                                'value'=>6,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use external sources such as national competent authorities (CESG/NCSC in the U.K., BSI in Germany, etc.) and/or industry standards (such as ISO, NIST, and SANS) to define state of the art',
                                'value'=>8,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We use third-party specialists or consultants to define state of the art',
                                'value'=>10,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            )
        )
    ),
    'incident-detection' => array(
        'title' => 'Incident Detection',
        'class' => 'sec2',
        'icon' => 'splunk-incident-detection',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Incident Detection',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'slider',
                        'question'=>'What types of advanced security capabilities do you use to detect threats or breaches? <br/><span class="small">Please use a rating where 1 = not at all and 5 = we use this extensively</span>',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'Machine learning',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Artificial intelligence',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Security analytics including behavioral analysis and anomaly detection',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Sandboxing',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Advanced authentication systems, including multifactor authentication and biometrics',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Real-time analytics',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Heuristics',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Threat intelligence services',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.8',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Next-generation (signatureless) endpoint protection',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.9',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Proactive threat hunting <small>(The assumption that your environment is already breached so you proactively search for the intruder.)</small>',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.10',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Forensics and incident investigation systems',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.11',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Dedicated security operations team (SOC)',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.12',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Security incident and event management (SIEM)',
                                'from'=>'Not at all',
                                'to'=>'we use this extensively',
                                'name'=>'q4.13',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.6,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.9,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>1.2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Incident Detection',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'How many actionable security-relevant alerts or incidents a week do you typically receive across all of IT?',
                        'name'=>'q5',
                        'ignore' => true,
                        'options'=>array(
                            array(
                                'label'=>'None',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fewer than 10',
                                'value'=>10,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Between 10 to 49',
                                'value'=>49,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Between 50 to 99',
                                'value'=>99,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Between 100 and 499',
                                'value'=>499,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Between 500 and 999',
                                'value'=>999,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1,000 or more',
                                'value'=>1500,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Incident Detection',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'slider',
                        'question'=>'To what extent will you be investing in the following incident response areas within the next 12 months?',
                        'name'=>'q6',
                        'options'=>array(
                            array(
                                'label'=>'Incident response process and plans',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>3.75,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Incident response platform and supporting technology',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>3.75,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Incident response teams (people)',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>3.75,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Third-party incident response services',
                                'from'=>'Not at all',
                                'to'=>'Investing extensively',
                                'name'=>'q6.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.75,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>2.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>3.75,
                                        'checked'=>false,
                                    )
                                )
                            ),
                        )
                    )
                )
            ),
        )
    ),
    'incident-response' => array(
        'title' => 'Incident Response',
        'class' => 'sec3',
        'icon' => 'icon-Timer-2',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Incident Response',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'radio',
                        'question'=>'To what extent do you have a security incident response platform in place today?',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'Not using and no plans to use',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not using but plan to use in the next two years',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently piloting this',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Use in limited areas in production',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Use extensively in production',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Incident Response',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'radio',
                        'question'=>'Which statement best describes your organization\'s response to incident alerts?',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'We have no defined responses to incidents',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a broad incident response process that defines the overall approach to incidents',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a detailed run book of incident types which defines our response',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a managed incident response plan that defines how we respond to incidents',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have an incident response management platform that automates the process of response to incidents',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Incident Response',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'How many people on average are involved in security investigations per incident?',
                        'name'=>'q9',
                        'ignore' => true,
                        'options'=>array(
                            array(
                                'label'=>'1',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'2 or 3',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'4 or 5',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'6 to 9',
                                'value'=>9,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'10 or more',
                                'value'=>15,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Incident Response',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'What is the work effort (time spent in hours) per person per security incident investigation?',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Less than 1 hour',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1–2 hours',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'2–4 hours',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'4–8 hours',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'9–12 hours',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'13–20 hours',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'More than 20 hours',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Incident Response',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'radio',
                        'question'=>'What statement best describes your ability to cope with the number of security incidents raised?',
                        'name'=>'q11',
                        'options'=>array(
                            array(
                                'label'=>'We are completely overwhelmed',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are constantly firefighting',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We usually cope but it\'s sometimes a struggle',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We cope more often than not, with a few stressful moments',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We cope quite comfortably',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Incident Response',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'radio',
                        'question'=>'To what extent is the information gathered sufficient to be able to take effective incident response action?',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'We generally have insufficient information in order to take action',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather information that points us in a general direction',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather enough information for us to take reasonable action',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather sufficient information that directs us toward an appropriate action',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather detailed information that allows us to take decisive action',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Incident Response',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following have you have deployed to support your incident response capabilities?',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Automated policy updates (e.g., firewall rules updated in response to counter emergence of a new threat)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Run books',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Communications plan',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Disaster recovery policy',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Tiger/Go Teams',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    )
);