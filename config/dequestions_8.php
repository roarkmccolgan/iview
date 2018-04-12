<?php
// NTT SDWAN
return array(
    'infrastructure' => array(
        'title' => 'Infrastruktur',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Infrastruktur',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Benutzen Sie eine der folgenden WAN-Lösungen?',
                        'name'=> 1,
                        'options'=>array(
                            array(
                                'label'=>'Lokaler Internet-Breakout',
                                'name'=> 1.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Aktiv/Aktiv-Architektur mit mehreren Verbindungen pro Seite',
                                'name'=> 1.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Private Anbindung an die wichtigsten öffentlichen Cloud-Anbieter',
                                'name'=> 1.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Hybride Architektur, die private und öffentliche internetbasierte Netzwerke integriert',
                                'name'=> 1.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Bandbreite on-demand',
                                'name'=> 1.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Infrastruktur',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'Wie kaufen Sie üblicherweise Ihre WAN-Lösungen?',
                        'name'=> 2,
                        'options'=>array(
                            array(
                                'label'=>'Wir kaufen Punktlösungen je nach unseren aktuellen Anforderungen',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir kaufen meistens Lösungen nach Bedarf, haben aber damit begonnen, strategisch einzukaufen',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir haben ein Gleichgewicht zwischen dem strategischen Kauf von WAN-Lösungen und nach Bedarf ',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir kaufen WAN-Lösungen meistens strategisch, kaufen jedoch Punktlösungen nach Bedarf',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir kaufen WAN-Lösungen auf strategische und architektonische Weise',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Infrastruktur',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Welche der folgenden Antworten repräsentiert Ihre Nutzung, Pläne oder Kenntnisse zu SD-WAN?',
                        'name'=> 3,
                        'options'=>array(
                            array(
                                'label'=>'Wird nicht verwendet und ein Einsatz ist nicht geplant',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wird nicht verwendet, wird jedoch recherchiert oder Einsatz ist geplant',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wird verwendet – Einführung',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wird verwendet – begrenzter Einsatz',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wird verwendet – umfangreicher Einsatz',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    ),
    'intelligence' => array(
        'title' => 'Intelligenz',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Intelligenz',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Benutzen Sie einen der folgenden intelligenten WAN-Dienste?',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'Auf Richtlinien basierende Pfadkontrolle (Dynamic Routing)',
                                'name'=> 4.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'WAN-Optimierung',
                                'name'=> 4.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Application Performance Management',
                                'name'=> 4.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Echtzeitüberwachung/Sichtbarkeit',
                                'name'=> 4.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Replay-Funktion für Netzwerk oder Application Performance Visibility oder Fehlersuche',
                                'name'=> 4.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Nein und nicht geplant',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Intelligenz',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Wie verwenden Sie Netzwerkintelligenz, um das Netzwerk zu verbessern?',
                        'name'=> 5,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc nach Störungsberichten',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Ad hoc nach Gerätebenachrichtigungen',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Korrelation der Vorfälle im Netzwerk mit vorkonfigurierten Grenzwerten für Nutzer, Anwendungen und Geräte.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Manuelle Optimierung auf Grundlage von Predictive Analytics',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Automatische Optimierung auf Grundlage von Predictive Analytics',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Intelligenz',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'Wie stellen Sie sicher, dass die Anforderungen an die Anwendungsperformance erfüllt werden?',
                        'name'=> 6,
                        'options'=>array(
                            array(
                                'label'=>'Wir handeln nach bestem Einsatz',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir teilen das Netzwerk physisch in separate Traffic-Klassen auf',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir teilen das Netzwerk virtuell in separate Traffic-Klassen auf',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir konfigurieren QoS statisch, um den Traffic in Richtung Hauptanwendungen zu priorisieren.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Unser Netzwerk kann sich automatisch anpassen, um die Anwendungsperformance und Nutzererfahrung basierend auf SLAs sicherzustellen',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    ),
    'operations' => array(
        'title' => 'Operations',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Operations',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Wie einfach können Sie Folgendes mit ihrem aktuellen WAN ausführen?',
                        'name'=> 7,
                        'options'=>array(
                            array(
                                'label'=>'Neue Standorte verbinden',
                                'name'=> 7.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Neue Netzwerkfunktionen bereitstellen',
                                'name'=> 7.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Netzwerk- oder Sicherheitsrichtlinien/-einstellungen aktualisieren',
                                'name'=> 7.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Eine Verbindung zu einem öffentlichen Cloud-Anbieter hinzufügen oder ändern',
                                'name'=> 7.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Mit Partnern oder Kunden verbinden',
                                'name'=> 7.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Äußerst schwierig, wir haben Probleme',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Eine Herausforderung, aber gerade noch machbar',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Ist Routine und einfach',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Operations',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Wie verwalten Sie Ihr WAN aktuell?',
                        'name'=> 8,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc manuelle Konfiguration.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Zentralisierte manuelle Konfiguration',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Hauptsächlich manuelle Konfiguration, wir haben jedoch einige Netzwerkaufgaben automatisiert',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir haben ein hauptsächlich automatisiertes WAN-Management, haben aber einige manuelle Konfigurationen',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Wir haben eine selbstoptimierende Netzwerk-Orchestrierung, die Analytics, Richtlinien und Automatisierung integriert',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Operations',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'Wie wird Ihre WAN-Sicherheitsrichtlinie aktuell verwaltet?',
                        'name'=> 9,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc je nach Gerät',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Zentralisierte Zugriffsrichtlinie und -kontrollen.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Dynamische Umsetzung von Sicherheitsrichtlinien im gesamten Netzwerk.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Schnelle Erkennung und Reaktion, um Bedrohungen einzudämmen.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Automatische Neukonfiguration, um neue Bedrohungen mit Predictive Analytics zu verhindern. ',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    )
);