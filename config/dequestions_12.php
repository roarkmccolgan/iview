<?php
// Dassault
return [
    'digital-business' => [
        'title' => 'Digital Business',
        'description' => '',
        'background' => false,
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'background' => false,
        'intermission' => false,
        'class' => 'sec1',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Wie schwierig ist es für Ihr Unternehmen mit der Veränderung von Marktbedingungen umzugehen?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Überhaupt nicht schwierig',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Etwas schwierig',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Mäßig  schwierig',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Schwierig',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sehr schwierig',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Wie schwierig ist es für Ihr Unternehmen mit personellen Veränderungen umzugehen?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Überhaupt nicht schwierig',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Etwas schwierig',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Mäßig  schwierig',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Schwierig',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sehr schwierig',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                            'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                            'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                            'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                            'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                        ],
                        'question'=>'Verwenden Sie bereits digitale Tools für die genannten Bereiche oder planen Sie die Einführung? ',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Produktivität (E-Mail, Textverarbeitung, Tabellenkalkulation, Präsentationen usw.)',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Zusammenarbeit im Team (Dateifreigabe, VoIP, Videokonferenzen usw.)',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'CRM (Kundenbeziehungsmanagement)',
                                'name'=> 3.3,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'ERP (Unternehmensressourcenplanung)',
                                'name'=> 3.4,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Digital Design (CAD, CAE, CAM usw.)',
                                'name'=> 3.5,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'PLM-Software',
                                'name'=> 3.6,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Simulationssoftware',
                                'name'=> 3.7,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Analysesoftware',
                                'name'=> 3.8,
                                'options'=>[
                                    [
                                        'label'=>'Wird nicht verwendet und ein Einsatz ist innerhalb der nächsten 12 Monate nicht geplant.',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wird nicht verwendet, aber ein Einsatz ist innerhalb der nächsten 12 Monate geplant',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen kleinen Teil des Unternehmens (weniger als die Hälfte der Belegschaft)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für einen erheblichen Teil des Unternehmens (mehr als die Hälfte der Belegschaft, aber weniger als 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja – für die meisten oder alle Geschäftsbereiche (80 % oder mehr der Belegschaft)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ],
                        'skipNext' => [
                            [
                                'q' => 'q3',
                                'question' => 3.1,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.2,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.3,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.4,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.5,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.6,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.7,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.8,
                                'operator' => '<',
                                'value' => 3
                            ],    
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'Digital Business',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Überhaupt nicht erfolgreich',
                            'Wenig erfolgreich',
                            'Mäßig erfolgreich',
                            'Erfolgreich',
                            'Sehr erfolgreich',
                        ],
                        'question'=>'Auf einer Skala von 1 bis 5: Wie bewerten Sie den Erfolg der aktuell in Ihrem Unternehmen eingesetzten Technologien?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Produktivität (E-Mail, Textverarbeitung, Tabellenkalkulation, Präsentationen usw.)',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.1,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Zusammenarbeit im Team (Dateifreigabe, Videokonferenzen usw.)',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.2,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'CRM (Kundenbeziehungsmanagement)',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.3,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'ERP (Unternehmensressourcenplanung)',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.4,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Digital Design (CAD, CAE, CAM usw.)',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.5,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'PLM-Software',
                                'name'=> 4.6,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.6,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Simulationssoftware',
                                'name'=> 4.7,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.7,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Analysesoftware',
                                'name'=> 4.8,
                                'options'=>[
                                    [
                                        'label'=>'Überhaupt nicht erfolgreich',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Wenig erfolgreich',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Mäßig erfolgreich',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Erfolgreich',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr erfolgreich',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.8,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'digital-design' => [
        'title' => 'Digital Design',
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
                'title' => 'Digital Design',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Welche Aussage beschreibt am besten, wie die Einführung oder das Update von CAD/CAM-Anwendungen in Ihrem Unternehmen gehandhabt wird?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Unsere IT-Abteilung erledigt dies manuell auf Ad-hoc-Basis',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere IT-Abteilung erledigt dies manuell auf geplanter Basis',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere IT-Abteilung nutzt hierfür Automatisierungstools',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben einen Lieferanten/Dienstleister mit den nötigen Fähigkeiten oder Tools, um dies für uns zu erledigen',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere CAD/CAM-Implementierung aktualisiert und wartet unsere Software automatisch',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Digital Design',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Wie lange setzen sie die aktuelle Version der „Digital Design“-Anwendung, die in Ihrem Unternehmen am häufigsten bereitgestellt wird, bereits ein? ',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Weniger als sechs Monate',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sechs Monate bis 1 Jahr',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1 bis 2 Jahre',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2 bis 3 Jahre',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'3 Jahre oder länger',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Digital Design',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Sehr unzufrieden',
                            'Eher unzufrieden',
                            'Weder unzufrieden noch zufrieden',
                            'Eher zufrieden',
                            'Sehr zufrieden',
                        ],
                        'question'=>'Wie zufrieden sind Sie mit der im Bereich „Digital Design“ eingesetzten Lösung in Bezug auf: ',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Zuverlässigkeit',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Skalierbarkeit',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Leistung',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Plattform zur Interaktion mit allen Projektbeteiligen',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Preis-Leistungs-Verhältnis',
                                'name'=> 7.5,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Verwaltbarkeit',
                                'name'=> 7.6,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Funktionen',
                                'name'=> 7.7,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Zusammenarbeit',
                                'name'=> 7.8,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Sicherheit',
                                'name'=> 7.9,
                                'options'=>[
                                    [
                                        'label'=>'Sehr unzufrieden',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher unzufrieden',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Weder unzufrieden noch zufrieden',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eher zufrieden',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Sehr zufrieden',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'digital-delivery' => [
        'title' => 'Digital Delivery',
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
                'title' => 'Digital Delivery',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Welchen Stellenwert hat die IT im Unternehmen?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'IT wird als unvermeidlicher Kostenfaktor betrachtet',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'IT wird als treibende Kraft für Geschäftseffizienz betrachtet',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'IT wird als treibende Kraft für Wettbewerbsvorteile oder Differenzierung betrachtet',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ],
                        'skipNext' => [
                            [
                                'q' => 'q3',
                                'question' => 3.1,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.2,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.3,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.4,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.5,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.6,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.7,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q3',
                                'question' => 3.8,
                                'operator' => '<',
                                'value' => 2
                            ],    
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Digital Delivery',
                'questions' => [
                    'q9'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Interne (On-Premise-)Lösung',
                            'Managed-Service-Anbieter',
                            'Service durch Public Cloud Anbieter',
                        ],
                        'question'=>'Wie werden die einzelnen Anwendungen der IT den Anwendern der jeweiligen Funktionsbereiche zur Verfügung gestellt?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Produktivität (E-Mail, Textverarbeitung, Tabellenkalkulation, Präsentationen usw.)',
                                'name'=> 9.1,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.1,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Zusammenarbeit im Team (Dateifreigabe, Videokonferenzen usw.)',
                                'name'=> 9.2,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.2,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'CRM (Kundenbeziehungsmanagement)',
                                'name'=> 9.3,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.3,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'ERP (Unternehmensressourcenplanung)',
                                'name'=> 9.4,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.4,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Digital Design (CAD, CAE, CAM usw.)',
                                'name'=> 9.5,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.5,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'PLM-Software',
                                'name'=> 9.6,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.6,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Simulationssoftware',
                                'name'=> 9.7,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.7,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Analysesoftware',
                                'name'=> 9.8,
                                'options'=>[
                                    [
                                        'label'=>'Interne (On-Premise-)Lösung',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Managed-Service-Anbieter',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service durch Public Cloud Anbieter',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 3,
                                    'answer' => 3.8,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Digital Delivery',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Welche Art der Softwarebereitstellung wird in Ihrem Unternehmen bevorzugt?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Wir stellen am liebsten alles intern bereit',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nach Möglichkeit stellen wir Anwendungen und Services am liebsten intern bereit, sind aber bei Bedarf offen für die Nutzung der Cloud',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir verfolgen einen ausgewogenen Ansatz, um Anwendungen und Services intern oder in der Cloud bereitzustellen',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir tendieren dazu, Anwendungen und Services in der Cloud bereitzustellen, bei Bedarf jedoch auch intern',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir verwenden die Cloud am liebsten für alles',
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
