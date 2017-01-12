<?php
return array(
    'screeners' => array(
        'title' => 'Demografien',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'Demografien',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Demografien',
                'questions' => array(
                    's1'=>array(
                        'type'=>'button',
                        'question'=>'In welchem Land befindet sich das Unternehmen für das Sie arbeiten? Bitte eine Option auswählen',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'label'=>'Frankreich',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Deutschland',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Großbritannien',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Spanien',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Italien',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sonstige',
                                'value'=>0,
                                'checked'=>false
                            )
                        ),
                        'other'=>'Sonstige|0|Your country'
                    )
                )
            ),
            'page2' => array(
                'title' => 'Demografien',
                'questions' => array(
                    's2'=>array(
                        'type'=>'button',
                        'question'=>'Wie viele Mitarbeiter arbeiten Vollzeit in Ihrem Unternehmen weltweit? Bitte eine Option auswählen',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'label'=>'Weniger als 500',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1000-2499',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'2500-4999',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'5000-9999',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'10000 oder mehr',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Demografien',
                'questions' => array(
                    's3'=>array(
                        'type'=>'button',
                        'question'=>'Welcher der folgenden Branchen ist Ihr Unternehmens am ehesten zuzuordnen? Bitte eine Option auswählen',
                        'name'=>'s3',
                        'options'=>array(
                            array(
                                'label'=>'Finanzdienstleistungen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Produktion',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Telekommunikationsdienste (einschließlich Hoster, xSPs und Cloud-Dienstanbieter)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Bildungswesen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Gesundheitswesen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Medien',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Transport, Distribution und Logistik',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Einzelhandel und Großhandel',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT-Beratung und IT-bezogene professionelle Dienstleistungen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Unternehmensdienstleistungen (z.B. Buchhaltung, Recht, Werbung, Immobilien, Personaleinstellung, Unternehmensberatung usw.)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Öffentliche Verwaltung oder öffentliche Dienstleistungen',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Versorgungsunternehmen - Strom, Gas, Wasser',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sonstiges',
                                'value'=>1,
                                'checked'=>false,
                                'other' => true
                            )
                        ),
                        'other'=>'Sonstiges|1| Bitte angeben'
                    )
                )
            )
        )
    ),
    'cyber-risk-management-and-the-business' => array(
        'title' => 'Cyber Risk Management und das Business',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'Wie sieht das Senior Business Management die Rolle der IT? Bitte eine Option auswählen',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Notwendiger Kostenblock',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wegbereiter für Unternehmenseffizienz',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Treiber für Wettbewerbsvorteile oder Differenzierung',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'Welche Aussage spiegelt die Fähigkeiten Ihrer IT-Abteilung in Bezug auf Geschäftsanforderungen für neue oder erweiterte Anwendungen oder Dienste am besten wider? Bitte eine Option auswählen',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Wir haben häufig Probleme mit der Bearbeitung der Anfragen.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir kommen mit der Bearbeitung von Anfragen in Bezug auf bestehende Anwendungen oder Dienste gewöhnlich zurecht, kämpfen aber mit Anfragen für neue oder erweiterte Dienste.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir kommen gewöhnlich mit der Bearbeitung von Anfragen für bestehende Anwendungen und Dienste sowie auch nach neuen oder zusätzlichen Diensten zurecht.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir sind sehr gut bei der Lieferung für die meisten oder alle Anfragen.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Welche Aussage beschreibt  Ihre Einstellung zu Risiken auf Geschäftsebene am besten? Bitte eine Option auswählen',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'Wir vermeiden Risiko um jeden Preis.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir neigen dazu, Risiken zu vermeiden, aber gehen einige Risiken ein, wenn es eine sehr gute Begründung gibt.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir nehmen uns vor Risiken in Acht, gehen sie jedoch ein, wenn wir einen klaren geschäftlichen Nutzen sehen.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir gehen gerne ein Risiko ein, wenn es der Entwicklung des Geschäfts dient.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Wir gehen Risiken aktiv ein und managen sie, um der Geschäftsentwicklung zu helfen.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupradio',
                        'question'=>'Haben Sie Folgendes bereits umgesetzt, um Ihr Unternehmen im Falle eines Vorfalls zu schützen?',
                        'name'=>'q4',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Eine formale Risikobewertung',
                                'name'=>'q4.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Proaktive Erkennung (solutions that are able to identify unknown threats through techniques such as behavioural analytics and machine learning, as opposed to being reliant on blocking known threats through the use of signatures)',
                                'name'=>'q4.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Reaktionsplan',
                                'name'=>'q4.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Interner Kommunikationsplan',
                                'name'=>'q4.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Externer Kommunikations- und PR-Plan',
                                'name'=>'q4.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Breach Notification plan',
                                'name'=>'q4.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Breach Remediation plan',
                                'name'=>'q4.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cyber-Risikoversicherung',
                                'name'=>'q4.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Haben wir zurzei',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Haben wir nicht, wir planen es',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein und wir planen es auch nicht',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page5' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Welche Aussage beschreibt am besten, wie Cyber Risik Management in Ihrem Unternehmen gehandhabt wird? Bitte eine Option auswählen',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'Es gibt keinen speziellen Verantwortlichen.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Es wird gewöhnlich an die IT-Abteilung delegiert.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Es wird zwischen der IT-Abteilung und verschiedenen Fachbereichen aufgeteilt.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Es wird zwischen der IT-Abteilung und der Geschäftsleitung aufgeteilt.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Es wird zwischen der IT-Abteilung, Geschäftsleitung und verschiedenen Fachbereichen aufgeteilt.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'groupradio',
                        'question'=>'Welche der folgenden Rollen sind Element des Cyber Risk Escalation Frameworks? Alle zutreffenden Optionen auswählen',
                        'name'=>'q6',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'CEO',
                                'name'=>'q6.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'CFO',
                                'name'=>'q6.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'COO',
                                'name'=>'q6.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Mitglied, das sich auf Risiko/Einhaltung der Vorschriften/Sicherheit (nicht Vorstandsebene) konzentriert',
                                'name'=>'q6.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'"Mitglied auf Vorstandsebene, das sich auf Risiko/Einhaltung der Vorschriften/Sicherheit konzentriert',
                                'name'=>'q6.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Spezielle Rolle für Risiko/Einhaltung von Vorschriften/Sicherheit (nicht Vorstand)',
                                'name'=>'q6.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page7' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'Wie früh wird IT-Sicherheit für gewöhnlich in Businessprojekte und Initiativen eingebracht? Bitte eine Option auswählen',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'Gleich zu Beginn der Planung',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Während der Planung',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Zu Beginn der Umsetzung',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Während der Umsetzung',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wenn etwas schiefgeht',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Cyber Risk Management und das Business',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Wie würden Sie die Höhe der Investitionen für IT-Sicherheit in Ihrem Unternehmen beschreiben? Bitte eine Option auswählen',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Nicht annähernd genug für das, was wir tun müssen',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Knapp, deckt kaum das wesentliche operative Geschäft ab',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Genug für das Kerngeschäft, aber zu gering für neue Initiativen',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Genug für das Kerngeschäft und für neue Initiativen, wenn der Wert klar ist',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Mit einem guten Geschäftsszenario auf ganzer Linie umfassend verfügbar, auch für experimentelle Szenarien',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    ),
    'cyber-risk-management-operations-and-defence' => array(
        'title' => 'Cyber Risk Management Operations und Abwehr',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'slider',
                        'question'=>'Bis zu welchem Ausmaß haben Sie Folgendes für die Verwaltung Ihrer physischen IT-Sicherheit umgesetzt?',
                        'name'=>'q9',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Screening des Sicherheitspersonals',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Vereinbarte Termine',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Identitätsnachweis',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Schleuse zum Eintreten/Austreten',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Biometrische Authentifizierung',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'CCTV-Überwachung',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Begleit-Pflicht (Mitarbeiter und Besucher müssen paarweise arbeiten oder begleitet werden)',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Änderungsberechtigung, Genehmigung und Protokollierung',
                                'from'=>'Überhaupt nicht',
                                'to'=>'Sehr umfangreich',
                                'name'=>'q9.8',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page2' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'Welche der folgenden Aussagen beschreibt Ihre Adaption und Umsetzung der Best Practice der IT-Sicherheit am besten?',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Kommt nicht zum Einsatz.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir setzen sie intern auf informeller Basis um.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir setzen sie mithilfe unserer allgemeinen Fähigkeiten auf einer formellen Basis (mithilfe von Standards) um.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir setzen sie mithilfe von Experten auf einer formellen Basis (mithilfe von Standards) um.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Wir verwenden einen externen Gutachter (mithilfe von Standards).',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'slider',
                        'question'=>'Wie gut sind Sie auf die Bewertung und Umsetzung der Datenschutz-Grundverordnung vorbereitet?',
                        'name'=>'q11',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Kenntnis der Verpflichtungen',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Bewertung der Fähigkeiten und Lücken',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Umsetzungsplanung',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Umsetzung der Ausführung',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Kontinuierliche Verbesserung/Best Practice über die GDPR (über die Vorschriften) hinaus',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Verständnis der Strafmilderung  basierend auf Früherkennung/Mängelbeseitigung',
                                'from'=>'Nicht vorbereitet',
                                'to'=>'Sehr gut vorbereitet',
                                'name'=>'q11.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page4' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>'Investieren Sie eher taktisch (spezifische Produkte/nach Bedarf) oder strategisch (Teil eines Plans) in IT-Sicherheitsprodukte oder -Lösungen? Bitte eine Option auswählen',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'Wir neigen dazu, taktisch zu kaufen (spezifische Produkte), wenn Probleme auftreten.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir kaufen hauptsächlich taktisch ein, wenn Probleme auftreten, aber wir haben auch einige strategische Einkäufe.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir haben ein ausgewogenes Verhältnis von taktischem und strategischem Einkauf.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir kaufen vor allem strategisch, kaufen aber taktisch, wenn wir ein Problem haben.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Wir neigen dazu, ausschließlich strategisch zu kaufen.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'Wie oft melden Sie den IT-Sicherheitsstatus für das Unternehmen?',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Überhaupt nicht',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Ad-hoc, wenn erforderlich',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Jährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Vierteljährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Monatlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wöchentlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Täglich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Stündlich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Fortlaufend',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'Was sind Ihre primären Mittel für die Verwaltung Ihrer IT-Sicherheitsinfrastruktur?',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'Ad-hoc mithilfe von Tabellen usw.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir verwenden hauptsächlich "serienmäßige" Programme von unseren Sicherheitslieferanten.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir verwenden eine Kombination von spezialisierten Management-Programmen und einigen "serienmäßigen" Programmen.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir verwenden hauptsächlich spezialisierte Sicherheitsmanagement-Programme.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir verwenden eine End-to-End-Sicherheitsmanagement-Suite.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Wir verwenden einen zertifizierten Partner, der uns bei der Verwaltung unserer IT-Sicherheitsinfrastruktur hilft.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'button',
                        'question'=>'In welchem Ausmaß haben Sie die Automatisierung Ihres IT-Sicherheitsmanagements bereits umgesetzt? Bitte eine Option auswählen',
                        'name'=>'q15',
                        'options'=>array(
                            array(
                                'label'=>'Ausschließlich manuelle Prozesse',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Hauptsächlich manuelle Prozesse mit einem geringen Ausmaß an Automatisierung',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Ein gutes Gleichgewicht von Automatisierung und manuellen Prozessen',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Vor allem Automatisierung mit einem geringen Anteil an manuellen Prozessen',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Ausschließlich Automatisierung',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'Inwiefern möchten Sie die Nutzung Ihrer automatisierten Prozesse ändern? Bitte eine Option auswählen',
                        'name'=>'q16',
                        'options'=>array(
                            array(
                                'label'=>'Sie stark verringern',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im unteren Bereich',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Sie etwas verringern',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im unteren Bereich',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Sie soll gleich bleiben',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Sie etwas erhöhen',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Sie stark erhöhen',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'groupradio',
                        'question'=>'Verwenden Sie Folgendes für die IT-Sicherheit-Abwehr?',
                        'name'=>'q17',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'NGFW (Next Generation Firewall)',
                                'name'=>'q17.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'IPS/IDS (Einbruchmeldung/Schutz)',
                                'name'=>'q17.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Schwachstellen-Management',
                                'name'=>'q17.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Micro-Segmentierung (feinkörnige Trennung und Isolierung des Traffics zwischen angegebenen Hosts oder Domains)',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Einheitliches Sicherheitsmanagement (Daten- und Informationsaustausch zwischen den Geräten und Programmen),',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Professionelle Security Services Dritter  (MSS) (Pre-Sales/Design/Umsetzung)',
                                'name'=>'q17.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
            ),
            'page10' => array(
                'title' => 'Cyber Risk Management Operations und Abwehr',
                'questions' => array(
                    'q25'=>array(
                        'type'=>'button',
                        'question'=>'Inwiefern nutzen Sie das Angebot von Managed-Security-Services-Anbietern? (Nur eine Option auswählen) Bitte eine Option auswählen',
                        'name'=>'q25',
                        'options'=>array(
                            array(
                                'label'=>'Wir nutzen es überhaupt nicht.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir nutzen es in einer begrenzt, bevorzugen aber die Dinge intern zu erledigen.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir nutzen es in ausgewogener Art und Weise.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Wir bevorzugen es, das Angebot zu nutzen, statt die Dinge intern zu erledigen.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Wir nutzen es umfassend, wann immer möglich.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            )
                        )
                    )
                )
            )
        )
    ),
    'cyber-risk-management-breach-detection-and-remediation' => array(
        'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'groupradio',
                        'question'=>'Verwenden Sie Folgendes in Bezug auf die IT-Sicherheit - Erkennen von Einbruchsaktivitäten',
                        'name'=>'q18',
                        'options'=>array(
                            array(
                                'label'=>'Bedrohungsanalysedienste',
                                'name'=>'q18.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Echtzeit-Analysen',
                                'name'=>'q18.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Erweiterter Bedrohungsschutz/Sandboxing',
                                'name'=>'q18.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'AI/Heuristik',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Malware Scanning',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page2' => array(
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'groupradio',
                        'question'=>'"Verwenden Sie Folgendes in Bezug auf die IT-Sicherheit - Reaktion auf Einbruchsaktivitäten?',
                        'name'=>'q19',
                        'options'=>array(
                            array(
                                'label'=>'Honeypot/Informationsbeschaffung',
                                'name'=>'q19.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Forensische Protokollierung und Analyse',
                                'name'=>'q19.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Failover/Systemwiederherstellung',
                                'name'=>'q19.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Tiger/Go-Teams',
                                'name'=>'q19.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Externe Incident Response Partner',
                                'name'=>'q19.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'groupradio',
                        'question'=>'Verwenden Sie Folgendes in Bezug auf die IT-Sicherheit - Mängelbeseitigung?',
                        'name'=>'q20',
                        'options'=>array(
                            array(
                                'label'=>'Automatisierte Behebung (basierend auf maschinellem Lernen)',
                                'name'=>'q20.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Spitzenfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Richtlinienaktualisierungen',
                                'name'=>'q20.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Richtlinienaktualisierungen',
                                'name'=>'q20.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im unteren Bereich',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Externe Anbieter für Wiederherstellung nach Absturz',
                                'name'=>'q20.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gefährdungsbewertung',
                                'name'=>'q20.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page4' => array(
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'groupradio',
                        'question'=>'Verfügen Sie über Folgendes in Bezug auf das Verständnis Ihres Cyber-Risikoprofils?',
                        'name'=>'q21',
                        'options'=>array(
                            array(
                                'label'=>'Bewertung Ihres Risikos, einer Cyber-Verletzung',
                                'name'=>'q21.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Verstehen des möglichen Ausmaßes des Schadenumfangs',
                                'name'=>'q21.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Eine Bewertung kritischer Daten',
                                'name'=>'q21.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Verstehen der Reaktion der Lieferanten oder Partner',
                                'name'=>'q21.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Spitzenfeld',
                                            'stage3' => 'Im Spitzenfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Entwicklung eines Reaktionsplans für Sicherheitsverletzung',
                                'name'=>'q21.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Ja',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Spitzenfeld',
                                            'stage2' => 'Im Mittelfeld',
                                            'stage3' => 'Im Mittelfeld',
                                            'stage4' => 'Im Mittelfeld',
                                            'stage5' => 'Im Mittelfeld',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nein',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Im Mittelfeld',
                                            'stage2' => 'Im unteren Bereich',
                                            'stage3' => 'Im unteren Bereich',
                                            'stage4' => 'Im unteren Bereich',
                                            'stage5' => 'Im unteren Bereich',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page5' => array(
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => array(
                    'q23'=>array(
                        'type'=>'button',
                        'question'=>'Wie oft lassen Sie die Abwehrfähigkeiten Ihrer IT-Sicherheit durch durch Drittanbieter prüfen? Bitte eine Option auswählen',
                        'name'=>'q23',
                        'options'=>array(
                            array(
                                'label'=>'Nie',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Alle paar Jahre',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Jährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Alle 6 Monate',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Jedes Quartal',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Monatlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Wöchentlich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Fortlaufend',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management Breach Detection und Beseitigung',
                'questions' => array(
                    'q24'=>array(
                        'type'=>'button',
                        'question'=>'Wie oft testen Sie Ihre Reaktionspläne auf Cyber-Verletzungen? (Nur eine Option auswählen) Bitte eine Option auswählen',
                        'name'=>'q24',
                        'options'=>array(
                            array(
                                'label'=>'Nie',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im unteren Bereich',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Alle paar Jahre',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Mittelfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Jährlich',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Mittelfeld',
                                    'stage3' => 'Im unteren Bereich',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Alle 6 Monate',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Mittelfeld',
                                    'stage4' => 'Im unteren Bereich',
                                    'stage5' => 'Im unteren Bereich',
                                ]
                            ),
                            array(
                                'label'=>'Jedes Quartal',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Mittelfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Monatlich',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Wöchentlich',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Mittelfeld',
                                ]
                            ),
                            array(
                                'label'=>'Fortlaufend',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Im Spitzenfeld',
                                    'stage2' => 'Im Spitzenfeld',
                                    'stage3' => 'Im Spitzenfeld',
                                    'stage4' => 'Im Spitzenfeld',
                                    'stage5' => 'Im Spitzenfeld',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    )
);