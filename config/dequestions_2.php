<?php

return [
    'screeners' => [
        'title' => 'Demografien',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'Demografien',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Demografien',
                'questions' => [
                    's1'=>[
                        'type'=>'button',
                        'question'=>'In welchem Land befindet sich das Unternehmen für das Sie arbeiten? Bitte eine Option auswählen',
                        'name'=>'s1',
                        'options'=>[
                            [
                                'label'=>'Frankreich',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Deutschland',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Großbritannien',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Spanien',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Italien',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sonstige',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                        'other'=>'Sonstige|0|Your country',
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Demografien',
                'questions' => [
                    's2'=>[
                        'type'=>'button',
                        'question'=>'Wie viele Mitarbeiter arbeiten Vollzeit in Ihrem Unternehmen weltweit? Bitte eine Option auswählen',
                        'name'=>'s2',
                        'options'=>[
                            [
                                'label'=>'Weniger als 1000',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1000-2499',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2500-4999',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'5000-9999',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'10000 oder mehr',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Demografien',
                'questions' => [
                    's3'=>[
                        'type'=>'button',
                        'question'=>'Welcher der folgenden Branchen ist Ihr Unternehmens am ehesten zuzuordnen? Bitte eine Option auswählen',
                        'name'=>'s3',
                        'options'=>[
                            [
                                'label'=>'Finanzdienstleistungen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Produktion',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Telekommunikationsdienste (einschließlich Hoster, xSPs und Cloud-Dienstanbieter)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Bildungswesen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Gesundheitswesen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Medien',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Transport, Distribution und Logistik',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Einzelhandel und Großhandel',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'IT-Beratung und IT-bezogene professionelle Dienstleistungen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unternehmensdienstleistungen (z.B. Buchhaltung, Recht, Werbung, Immobilien, Personaleinstellung, Unternehmensberatung usw.)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Öffentliche Verwaltung oder öffentliche Dienstleistungen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Versorgungsunternehmen - Strom, Gas, Wasser',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sonstiges',
                                'value'=>1,
                                'checked'=>false,
                                'other' => true,
                            ],
                        ],
                        'other'=>'Sonstiges|1| Bitte angeben',
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-and-the-business' => [
        'title' => 'Cyber Risk Management und das Business',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Wie sieht das Senior Business Management die Rolle der IT? Bitte eine Option auswählen',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Notwendiger Kostenblock',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wegbereiter für Unternehmenseffizienz',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Treiber für Wettbewerbsvorteile oder Differenzierung',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Welche Aussage spiegelt die Fähigkeiten Ihrer IT-Abteilung in Bezug auf Geschäftsanforderungen für neue oder erweiterte Anwendungen oder Dienste am besten wider? Bitte eine Option auswählen',
                        'name'=>'q2',
                        'options'=>[
                            [
                                'label'=>'Wir haben häufig Probleme mit der Bearbeitung der Anfragen.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir kommen mit der Bearbeitung von Anfragen in Bezug auf bestehende Anwendungen oder Dienste gewöhnlich zurecht, kämpfen aber mit Anfragen für neue oder erweiterte Dienste.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir kommen gewöhnlich mit der Bearbeitung von Anfragen für bestehende Anwendungen und Dienste sowie auch nach neuen oder zusätzlichen Diensten zurecht.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir sind sehr gut bei der Lieferung für die meisten oder alle Anfragen.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Welche Aussage beschreibt  Ihre Einstellung zu Risiken auf Geschäftsebene am besten? Bitte eine Option auswählen',
                        'name'=>'q3',
                        'options'=>[
                            [
                                'label'=>'Wir vermeiden Risiko um jeden Preis.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir neigen dazu, Risiken zu vermeiden, aber gehen einige Risiken ein, wenn es eine sehr gute Begründung gibt.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir nehmen uns vor Risiken in Acht, gehen sie jedoch ein, wenn wir einen klaren geschäftlichen Nutzen sehen.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir gehen gerne ein Risiko ein, wenn es der Entwicklung des Geschäfts dient.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Wir gehen Risiken aktiv ein und managen sie, um der Geschäftsentwicklung zu helfen.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupradio',
                        'question'=>'Haben Sie Folgendes bereits umgesetzt, um Ihr Unternehmen im Falle eines Vorfalls zu schützen?',
                        'name'=>'q4',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Eine formale Risikobewertung',
                                'name'=>'q4.1',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Proaktive Erkennung (solutions that are able to identify unknown threats through techniques such as behavioural analytics and machine learning, as opposed to being reliant on blocking known threats through the use of signatures)',
                                'name'=>'q4.2',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Reaktionsplan',
                                'name'=>'q4.3',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Interner Kommunikationsplan',
                                'name'=>'q4.4',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Externer Kommunikations- und PR-Plan',
                                'name'=>'q4.5',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Breach Notification plan',
                                'name'=>'q4.6',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Breach Remediation plan',
                                'name'=>'q4.7',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Cyber-Risikoversicherung',
                                'name'=>'q4.8',
                                'options'=>[
                                    [
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page5' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Welche Aussage beschreibt am besten, wie Cyber Risik Management in Ihrem Unternehmen gehandhabt wird? Bitte eine Option auswählen',
                        'name'=>'q5',
                        'options'=>[
                            [
                                'label'=>'Es gibt keinen speziellen Verantwortlichen.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Es wird gewöhnlich an die IT-Abteilung delegiert.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Es wird zwischen der IT-Abteilung und verschiedenen Fachbereichen aufgeteilt.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Es wird zwischen der IT-Abteilung und der Geschäftsleitung aufgeteilt.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Es wird zwischen der IT-Abteilung, Geschäftsleitung und verschiedenen Fachbereichen aufgeteilt.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q6'=>[
                        'type'=>'groupradio',
                        'question'=>'Welche der folgenden Rollen sind Element des Cyber Risk Escalation Frameworks? Alle zutreffenden Optionen auswählen',
                        'name'=>'q6',
                        'calc'=>[
                            'type'=>'normalize',
                            'value'=>5,
                        ],
                        'options'=>[
                            [
                                'label'=>'CEO',
                                'name'=>'q6.1',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'CFO',
                                'name'=>'q6.2',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'COO',
                                'name'=>'q6.3',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Mitglied, das sich auf Risiko/Einhaltung der Vorschriften/Sicherheit (nicht Vorstandsebene) konzentriert',
                                'name'=>'q6.4',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Mitglied auf Vorstandsebene, das sich auf Risiko/Einhaltung der Vorschriften/Sicherheit konzentriert',
                                'name'=>'q6.5',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Spezielle Rolle für Risiko/Einhaltung von Vorschriften/Sicherheit (nicht Vorstand)',
                                'name'=>'q6.6',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page7' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'Wie früh wird IT-Sicherheit für gewöhnlich in Businessprojekte und Initiativen eingebracht? Bitte eine Option auswählen',
                        'name'=>'q7',
                        'options'=>[
                            [
                                'label'=>'Gleich zu Beginn der Planung',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Während der Planung',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Zu Beginn der Umsetzung',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Während der Umsetzung',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wenn etwas schiefgeht',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Cyber Risk Management und das Business',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Wie würden Sie die Höhe der Investitionen für IT-Sicherheit in Ihrem Unternehmen beschreiben? Bitte eine Option auswählen',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'Nicht annähernd genug für das, was wir tun müssen',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Knapp, deckt kaum das wesentliche operative Geschäft ab',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Genug für das Kerngeschäft, aber zu gering für neue Initiativen',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Genug für das Kerngeschäft und für neue Initiativen, wenn der Wert klar ist',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Mit einem guten Geschäftsszenario auf ganzer Linie umfassend verfügbar, auch für experimentelle Szenarien',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-operations-and-defence' => [
        'title' => 'Cyber Risk Management Operations und Abwehr',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q9'=>[
                        'type'=>'slider',
                        'question'=>'Bis zu welchem Ausmaß haben Sie Folgendes für die Verwaltung Ihrer physischen IT-Sicherheit umgesetzt?',
                        'name'=>'q9',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Screening des Sicherheitspersonals',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Vereinbarte Termine',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Identitätsnachweis',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Schleuse zum Eintreten/Austreten',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Biometrische Authentifizierung',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'CCTV-Überwachung',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Begleit-Pflicht (Mitarbeiter und Besucher müssen paarweise arbeiten oder begleitet werden)',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.7',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Änderungsberechtigung, Genehmigung und Protokollierung',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.8',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page2' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Welche der folgenden Aussagen beschreibt Ihre Adaption und Umsetzung der Best Practice der IT-Sicherheit am besten?',
                        'name'=>'q10',
                        'options'=>[
                            [
                                'label'=>'Kommt nicht zum Einsatz.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir setzen sie intern auf informeller Basis um.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir setzen sie mithilfe unserer allgemeinen Fähigkeiten auf einer formellen Basis (mithilfe von Standards) um.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir setzen sie mithilfe von Experten auf einer formellen Basis (mithilfe von Standards) um.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Wir verwenden einen externen Gutachter (mithilfe von Standards).',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q11'=>[
                        'type'=>'slider',
                        'question'=>'Wie gut sind Sie auf die Bewertung und Umsetzung der Datenschutz-Grundverordnung vorbereitet?',
                        'name'=>'q11',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Kenntnis der Verpflichtungen',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Bewertung der Fähigkeiten und Lücken',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Umsetzungsplanung',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Umsetzung der Ausführung',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Kontinuierliche Verbesserung/Best Practice über die GDPR (über die Vorschriften) hinaus',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Verständnis der Strafmilderung  basierend auf Früherkennung/Mängelbeseitigung',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page4' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'Investieren Sie eher taktisch (spezifische Produkte/nach Bedarf) oder strategisch (Teil eines Plans) in IT-Sicherheitsprodukte oder -Lösungen? Bitte eine Option auswählen',
                        'name'=>'q12',
                        'options'=>[
                            [
                                'label'=>'Wir neigen dazu, taktisch zu kaufen (spezifische Produkte), wenn Probleme auftreten.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir kaufen hauptsächlich taktisch ein, wenn Probleme auftreten, aber wir haben auch einige strategische Einkäufe.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir haben ein ausgewogenes Verhältnis von taktischem und strategischem Einkauf.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir kaufen vor allem strategisch, kaufen aber taktisch, wenn wir ein Problem haben.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Wir neigen dazu, ausschließlich strategisch zu kaufen.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'Wie oft melden Sie den IT-Sicherheitsstatus für das Unternehmen?',
                        'name'=>'q13',
                        'options'=>[
                            [
                                'label'=>'Überhaupt nicht',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Ad-hoc, wenn erforderlich',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Jährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Vierteljährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Monatlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wöchentlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Täglich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Stündlich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Fortlaufend',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'Was sind Ihre primären Mittel für die Verwaltung Ihrer IT-Sicherheitsinfrastruktur?',
                        'name'=>'q14',
                        'options'=>[
                            [
                                'label'=>'Ad-hoc mithilfe von Tabellen usw.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir verwenden hauptsächlich &quot;serienmäßige&quot; Programme von unseren Sicherheitslieferanten.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir verwenden eine Kombination von spezialisierten Management-Programmen und einigen &quot;serienmäßigen&quot; Programmen.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir verwenden hauptsächlich spezialisierte Sicherheitsmanagement-Programme.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir verwenden eine End-to-End-Sicherheitsmanagement-Suite.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Wir verwenden einen zertifizierten Partner, der uns bei der Verwaltung unserer IT-Sicherheitsinfrastruktur hilft.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q15'=>[
                        'type'=>'button',
                        'question'=>'In welchem Ausmaß haben Sie die Automatisierung Ihres IT-Sicherheitsmanagements bereits umgesetzt? Bitte eine Option auswählen',
                        'name'=>'q15',
                        'options'=>[
                            [
                                'label'=>'Ausschließlich manuelle Prozesse',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Hauptsächlich manuelle Prozesse mit einem geringen Ausmaß an Automatisierung',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Ein gutes Gleichgewicht von Automatisierung und manuellen Prozessen',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Vor allem Automatisierung mit einem geringen Anteil an manuellen Prozessen',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Ausschließlich Automatisierung',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q16'=>[
                        'type'=>'button',
                        'question'=>'Inwiefern möchten Sie die Nutzung Ihrer automatisierten Prozesse ändern? Bitte eine Option auswählen',
                        'name'=>'q16',
                        'options'=>[
                            [
                                'label'=>'Sie stark verringern',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im unteren Bereich',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Sie etwas verringern',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im unteren Bereich',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Sie soll gleich bleiben',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Sie etwas erhöhen',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Sie stark erhöhen',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page9' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q17'=>[
                        'type'=>'groupradio',
                        'question'=>'Verwenden Sie Folgendes für die IT-Sicherheit-Abwehr?',
                        'name'=>'q17',
                        'calc'=>[
                            'type'=>'normalize',
                            'value'=>5,
                        ],
                        'options'=>[
                            [
                                'label'=>'NGFW (Next Generation Firewall)',
                                'name'=>'q17.1',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'IPS/IDS (Einbruchmeldung/Schutz)',
                                'name'=>'q17.2',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Schwachstellen-Management',
                                'name'=>'q17.3',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Micro-Segmentierung (feinkörnige Trennung und Isolierung des Traffics zwischen angegebenen Hosts oder Domains)',
                                'name'=>'q17.4',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Einheitliches Sicherheitsmanagement (Daten- und Informationsaustausch zwischen den Geräten und Programmen),',
                                'name'=>'q17.5',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Professionelle Security Services Dritter  (MSS) (Pre-Sales/Design/Umsetzung)',
                                'name'=>'q17.6',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page10' => [
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => [
                    'q25'=>[
                        'type'=>'button',
                        'question'=>'Inwiefern nutzen Sie das Angebot von Managed-Security-Services-Anbietern? (Nur eine Option auswählen) Bitte eine Option auswählen',
                        'name'=>'q25',
                        'options'=>[
                            [
                                'label'=>'Wir nutzen es überhaupt nicht.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir nutzen es in einer begrenzt, bevorzugen aber die Dinge intern zu erledigen.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir nutzen es in ausgewogener Art und Weise.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Wir bevorzugen es, das Angebot zu nutzen, statt die Dinge intern zu erledigen.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Wir nutzen es umfassend, wann immer möglich.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-breach-detection-and-remediation' => [
        'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => [
                    'q18'=>[
                        'type'=>'groupradio',
                        'question'=>'Verwenden Sie Folgendes in Bezug auf die IT-Sicherheit - Erkennen von Einbruchsaktivitäten',
                        'name'=>'q18',
                        'options'=>[
                            [
                                'label'=>'Bedrohungsanalysedienste',
                                'name'=>'q18.1',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Echtzeit-Analysen',
                                'name'=>'q18.2',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Erweiterter Bedrohungsschutz/Sandboxing',
                                'name'=>'q18.3',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'AI/Heuristik',
                                'name'=>'q17.4',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Malware Scanning',
                                'name'=>'q17.5',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page2' => [
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => [
                    'q19'=>[
                        'type'=>'groupradio',
                        'question'=>'Verwenden Sie Folgendes in Bezug auf die IT-Sicherheit - Reaktion auf Einbruchsaktivitäten?',
                        'name'=>'q19',
                        'options'=>[
                            [
                                'label'=>'Honeypot/Informationsbeschaffung',
                                'name'=>'q19.1',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Forensische Protokollierung und Analyse',
                                'name'=>'q19.2',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Failover/Systemwiederherstellung',
                                'name'=>'q19.3',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Tiger/Go-Teams',
                                'name'=>'q19.4',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Externe Incident Response Partner',
                                'name'=>'q19.5',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page3' => [
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => [
                    'q20'=>[
                        'type'=>'groupradio',
                        'question'=>'Verwenden Sie Folgendes in Bezug auf die IT-Sicherheit - Mängelbeseitigung?',
                        'name'=>'q20',
                        'options'=>[
                            [
                                'label'=>'Automatisierte Behebung (basierend auf maschinellem Lernen)',
                                'name'=>'q20.1',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Richtlinienaktualisierungen',
                                'name'=>'q20.2',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Richtlinienaktualisierungen',
                                'name'=>'q20.3',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Externe Anbieter für Wiederherstellung nach Absturz',
                                'name'=>'q20.4',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Gefährdungsbewertung',
                                'name'=>'q20.5',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page4' => [
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => [
                    'q21'=>[
                        'type'=>'groupradio',
                        'question'=>'Verfügen Sie über Folgendes in Bezug auf das Verständnis Ihres Cyber-Risikoprofils?',
                        'name'=>'q21',
                        'options'=>[
                            [
                                'label'=>'Bewertung Ihres Risikos, einer Cyber-Verletzung',
                                'name'=>'q21.1',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Verstehen des möglichen Ausmaßes des Schadenumfangs',
                                'name'=>'q21.2',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Eine Bewertung kritischer Daten',
                                'name'=>'q21.3',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Verstehen der Reaktion der Lieferanten oder Partner',
                                'name'=>'q21.4',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Entwicklung eines Reaktionsplans für Sicherheitsverletzung',
                                'name'=>'q21.5',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ],
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page5' => [
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => [
                    'q23'=>[
                        'type'=>'button',
                        'question'=>'Wie oft lassen Sie die Abwehrfähigkeiten Ihrer IT-Sicherheit durch durch Drittanbieter prüfen? Bitte eine Option auswählen',
                        'name'=>'q23',
                        'options'=>[
                            [
                                'label'=>'Nie',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Alle paar Jahre',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Jährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Alle 6 Monate',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Jedes Quartal',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Monatlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Wöchentlich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Fortlaufend',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => [
                    'q24'=>[
                        'type'=>'button',
                        'question'=>'Wie oft testen Sie Ihre Reaktionspläne auf Cyber-Verletzungen? (Nur eine Option auswählen) Bitte eine Option auswählen',
                        'name'=>'q24',
                        'options'=>[
                            [
                                'label'=>'Nie',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Alle paar Jahre',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Jährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Alle 6 Monate',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ],
                            ],
                            [
                                'label'=>'Jedes Quartal',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Monatlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Wöchentlich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ],
                            ],
                            [
                                'label'=>'Fortlaufend',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
