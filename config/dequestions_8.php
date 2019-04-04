<?php
// NTT SDWAN
return [
    'infrastructure' => [
        'title' => 'Infrastruktur',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Infrastruktur',
                'questions' => [
                    'q1'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'question'=>'Benutzen Sie eine der folgenden WAN-Lösungen?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Lokaler Internet-Breakout',
                                'name'=> 1.1,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Aktiv/Aktiv-Architektur mit mehreren Verbindungen pro Seite',
                                'name'=> 1.2,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Private Anbindung an die wichtigsten öffentlichen Cloud-Anbieter',
                                'name'=> 1.3,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Hybride Architektur, die private und öffentliche internetbasierte Netzwerke integriert',
                                'name'=> 1.4,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Bandbreite on-demand',
                                'name'=> 1.5,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Infrastruktur',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Wie kaufen Sie üblicherweise Ihre WAN-Lösungen?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Wir kaufen Punktlösungen je nach unseren aktuellen Anforderungen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir kaufen meistens Lösungen nach Bedarf, haben aber damit begonnen, strategisch einzukaufen',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben ein Gleichgewicht zwischen dem strategischen Kauf von WAN-Lösungen und nach Bedarf ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir kaufen WAN-Lösungen meistens strategisch, kaufen jedoch Punktlösungen nach Bedarf',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir kaufen WAN-Lösungen auf strategische und architektonische Weise',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Infrastruktur',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Welche der folgenden Antworten repräsentiert Ihre Nutzung, Pläne oder Kenntnisse zu SD-WAN?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Wird nicht verwendet und ein Einsatz ist nicht geplant',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wird nicht verwendet, wird jedoch recherchiert oder Einsatz ist geplant',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wird verwendet – Einführung',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wird verwendet – begrenzter Einsatz',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wird verwendet – umfangreicher Einsatz',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'intelligence' => [
        'title' => 'Intelligenz',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Intelligenz',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'question'=>'Benutzen Sie einen der folgenden intelligenten WAN-Dienste?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Auf Richtlinien basierende Pfadkontrolle (Dynamic Routing)',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'WAN-Optimierung',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Application Performance Management',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Echtzeitüberwachung/Sichtbarkeit',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Replay-Funktion für Netzwerk oder Application Performance Visibility oder Fehlersuche',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Intelligenz',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Wie verwenden Sie Netzwerkintelligenz, um das Netzwerk zu verbessern?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Ad hoc nach Störungsberichten',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ad hoc nach Gerätebenachrichtigungen',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Korrelation der Vorfälle im Netzwerk mit vorkonfigurierten Grenzwerten für Nutzer, Anwendungen und Geräte.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Manuelle Optimierung auf Grundlage von Predictive Analytics',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automatische Optimierung auf Grundlage von Predictive Analytics',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Intelligenz',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Wie stellen Sie sicher, dass die Anforderungen an die Anwendungsperformance erfüllt werden?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Wir handeln nach bestem Einsatz',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir teilen das Netzwerk physisch in separate Traffic-Klassen auf',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir teilen das Netzwerk virtuell in separate Traffic-Klassen auf',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir konfigurieren QoS statisch, um den Traffic in Richtung Hauptanwendungen zu priorisieren.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unser Netzwerk kann sich automatisch anpassen, um die Anwendungsperformance und Nutzererfahrung basierend auf SLAs sicherzustellen',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'operations' => [
        'title' => 'Operations',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Operations',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'question'=>'Wie einfach können Sie Folgendes mit ihrem aktuellen WAN ausführen?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Neue Standorte verbinden',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Neue Netzwerkfunktionen bereitstellen',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Netzwerk- oder Sicherheitsrichtlinien/-einstellungen aktualisieren',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Eine Verbindung zu einem öffentlichen Cloud-Anbieter hinzufügen oder ändern',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Mit Partnern oder Kunden verbinden',
                                'name'=> 7.5,
                                'options'=>[
                                    [
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Operations',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Wie verwalten Sie Ihr WAN aktuell?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Ad hoc manuelle Konfiguration.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zentralisierte manuelle Konfiguration',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Hauptsächlich manuelle Konfiguration, wir haben jedoch einige Netzwerkaufgaben automatisiert',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben ein hauptsächlich automatisiertes WAN-Management, haben aber einige manuelle Konfigurationen',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben eine selbstoptimierende Netzwerk-Orchestrierung, die Analytics, Richtlinien und Automatisierung integriert',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Operations',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Wie wird Ihre WAN-Sicherheitsrichtlinie aktuell verwaltet?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Ad hoc je nach Gerät',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zentralisierte Zugriffsrichtlinie und -kontrollen.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Dynamische Umsetzung von Sicherheitsrichtlinien im gesamten Netzwerk.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Schnelle Erkennung und Reaktion, um Bedrohungen einzudämmen.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Automatische Neukonfiguration, um neue Bedrohungen mit Predictive Analytics zu verhindern. ',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ]
];
