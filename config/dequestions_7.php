<?php
//7 Symanted GDPR
return [
    'gdpr' => [
        'title' => 'GDPR',
        'class' => 'sec1',
        'icon' => 'icon-gdpr',
        'display' => true,
        'complete' => false,
        'sub-report' => false,
        'pages' => [
            'page1' => [
                'title' => 'Approach to IT',
                'questions' => [
                    'q1'=>[
                        'type'=>'radio',
                        'question'=>'Wie lässt sich die Herangehensweise Ihrer Organisation an das Erreichen von Konformität zur EU-DSGVO am besten beschreiben? <span class="small">Bitte eine Möglichkeit auswählen!</span>',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Wir wissen nicht, was die EU-DSGVO ist und ob oder wie es uns betreffen wird.',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir beginnen gerade erst. Über GDPR nachzudenken',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir streben danach, ausreichende Konformität zur EU-DSGVO zu implementieren, um Audits und Strafzahlungen zu vermeiden.',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir werden unsere Konformität zur EU-DSGVO als differenzierendes Merkmal im Wettbewerb nutzen.',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir halten die EU-DSGVO schon heute ein und berichten anderen von unseren bewährtenPraktiken diesbezüglich oder verkaufen diese.',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'GDPR',
                'questions' => [
                    'q2'=> [
                        'type'=>'checkbox',
                        'question'=>'Auf welche dieser für die EU-DSGVO spezifischen Themen muss sich Ihrer Meinung nach Ihre Organisation konzentrieren? <span class="small">Wählen Sie die drei wichtigsten Themen aus!</span>',
                        'name'=>'q2',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Daten angemessen bewerten und klassifizieren',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Anwendungen identifizieren, die EU-DSGVO-relevante Daten verwenden',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Eine Datenflussanalyse durchführen',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Das Identitäts- und Zugriffsmanagement überprüfen und verbessern',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Dokumentationsprozesse aufbauen, die zum Grad unserer Verantwortlichkeit passen',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Interne Kommunikation/Weiterbildung der Mitarbeiter',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Berücksichtigung des Datenschutzes schon in der Produktentwicklung (Privacy by design) und bei Voreinstellungen (Privacy by default)',
                                'value'=>0,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'GDPR',
                'questions' => [
                    'q3' => [
                        'type'=>'checkbox',
                        'question'=>'Welche der folgenden Anforderungen der EU-DSGVO sind für Ihre Organisation die größte Herausforderung? <span class="small">Wählen Sie drei Möglichkeiten aus!</span>',
                        'name'=>'q3',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Datenportabilität',
                                'hint'=>'Daten auf Nachfrage in maschinenlesbarer Form liefern',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Datenanfragen von Einzelpersonen beantworten',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Datenschutzzwischenfälle innerhalb 72 Stunden nach Entdeckung melden',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Datenschutz im Entwicklungsprozess (Privacy by design) und bei Voreinstellungen (Privacy by default) berücksichtigen',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Verschlüsselung und/oder Pseudonymisierung von Daten',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Definieren, was "State of the Art" (SotA, Stand der Technik) für Ihre Organisation bedeutet',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Datennutzungsszenarien definieren und Einwilligungen managen',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Kundenprofile konform zur EU-DSGVO entwickeln',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Verwaltung von Cloud-Providern, Cloud-Applikationen und internen Datentransfers',
                                'value'=>0,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'GDPR',
                'questions' => [
                    'q4' => [
                        'type'=>'radio',
                        'question'=>'Wie sicher sind Sie, dass Sie jede Instanz der Daten von Einzelpersonen in Ihren Systemen identifizieren und lokalisieren können? <span class="small">(Beispielsweise bei Datenanfragen von Einzelnen oder Löschanfragen, auch auf solchen Systemen, die Ihre IT nicht kontrolliert, beispielsweise fremden IT-Umgebungen oder Cloud-Applikationen)</span>',
                        'name'=>'q4',
                        'options'=>[
                            [
                                'label'=>'Auf keinen Fall sichergestellt',
                                'hint'=>'Wir könnten nur weniger als 20% der Instanzen finden',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'nur zu einem geringen Teil sichergestellt',
                                'hint'=>'Wir könnten zwischen 20 und 40 Prozent der Instanzen finden.',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'zu einem mäßigen Anteil sichergestellt',
                                'hint'=>'Wir könnten zwischen 40 und 60 Prozent der Instanzen finden.',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'zu einem hohen Anteil sichergestellt',
                                'hint'=>'Wir könnten zwischen 60 und 80 Prozent der Instanzen finden.',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Vollständig sichergestellt',
                                'hint'=>'Wir könnten alle Instanzen finden',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page5' => [
                'title' => 'GDPR',
                'questions' => [
                    'q5' => [
                        'type'=>'slider',
                        'question'=>'Weiß die höhere Managementebene Ihrer Organisation heute das Nötige über die folgenden Datentypen?',
                        'name'=>'q5',
                        'options'=>[
                            [
                                'label'=>'Wir kennen unsere strukturierten Daten',
                                'hint'=>'(Datenbanken, Data Warehouses, Content-Management-Systeme)',
                                'name'=>'q5.1',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Wir kennen unsere unstrukturierten Daten',
                                'hint'=>'(Dateien, Verzeichnisse, Workbooks, Dokumente, E-Mail etc)',
                                'name'=>'q5.2',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Wir kennen unsere irrelevanten Daten',
                                'hint'=>'(Daten ohne geschäftlichen Wert, redundante, überflüssige oder triviale Daten)',
                                'name'=>'q5.3',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Wir wissen, wem die Daten gehören und wer auf sie Zugriff hat.',
                                'name'=>'q5.4',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Wir wissen, wie lange wir Daten halten müssen.',
                                'name'=>'q5.5',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Wir wissen, wann wir Daten löschen dürfen oder müssen.',
                                'name'=>'q5.6',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Wir wissen, welche Richtlinien für spezielle Datenkategorien gelten.',
                                'name'=>'q5.7',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Wir verstehen die Bedeutung und wissen von sämtlichen Kopien unserer personenbezogenen Daten.',
                                'hint'=>'(In Backup, Test/Dev, am Ersatzstandort, auf mobilen Systemen, in der Cloud)',
                                'name'=>'q5.8',
                                'options'=>[
                                    [
                                        'label'=>'Ja',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Nein',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           
                        ]
                    ]
                ]
            ],
            'page6' => [
                'title' => 'GDPR',
                'questions' => [
                    'q6' => [
                        'type'=>'radio',
                        'question'=>'Wie wird die EU-DSGVO den Einsatz von Cloud-Services beeinflussen?',
                        'name'=>'q6',
                        'required' > 1,
                        'options'=>[
                            [
                                'label'=>'Wir werden aufhören, die Cloud zu nutzen.',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir werden zu Cloud-Providern oder Rechenzentren im Inland umziehen.',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir werden zu Cloud-Providern und Rechenzentren in unserer Region (Europa), aber nicht in unserem Land umziehen.',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir verwenden keine Cloud-Services.',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Wir nutzen weiter die gewohnten Cloud-Services, werden aber unseren Datenschutz intensivieren (z.B. durch neue Prozesse, DLP (Data Leak Prevention) oder die Verwendung von Tokens)',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Kein Einfluss - wir nutzen unsere Cloud-Services weiter wie gehabt.',
                                'value'=>4,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page7' => [
                'title' => 'GDPR',
                'questions' => [
                    'q7' => [
                        'type'=>'button',
                        'question'=>'Wer ist bei Ihnen für Ihr EU-DSGVO-Umsetzungsprogramm verantwortlich? Gibt es eine funktionsübergreifende Compliance-Task-Force oder ein Steuerungsgremium, in dem Risikomanagement, IT und Interessenträger aus den Fachabteilungen vertreten sind?',
                        'name'=>'q7',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'Ja, bereits etabliert',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Ja, bereits teilweise etabliert',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nein, aber innerhalb der nächsten 12 Monate geplant',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nein',
                                'value'=>1,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page8' => [
                'title' => 'GDPR',
                'questions' => [
                    'q8' => [
                        'type'=>'slider',
                        'question'=>'Inwieweit machen Sie sich Sorgen über potentielle Konsequenzen der EU-DSGVO? <span class="small">1= gar nicht besorgt, 5= sehr besorgt</span>',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'Wir fürchten Geldstrafen',
                                'from'=>'Wir machen uns keine Sorgen',
                                'to'=>'Wir machen uns große Sorgen',
                                'name'=>'q8.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
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
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Wir fürchten Gemeinschaftsklagen.',
                                'from'=>'Wir machen uns keine Sorgen',
                                'to'=>'Wir machen uns große Sorgen',
                                'name'=>'q8.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
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
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Wir machen uns Sorgen über die Meldung von Zwischenfällen',
                                'from'=>'Wir machen uns keine Sorgen',
                                'to'=>'Wir machen uns große Sorgen',
                                'name'=>'q8.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
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
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Wir fürchten, dass der Regulierer Datenverarbeitungsprozesse still legt.',
                                'from'=>'Wir machen uns keine Sorgen',
                                'to'=>'Wir machen uns große Sorgen',
                                'name'=>'q8.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
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
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Wir sorgen uns wegen Rufschädigungen bei Regelbrüchen.',
                                'from'=>'Wir machen uns keine Sorgen',
                                'to'=>'Wir machen uns große Sorgen',
                                'name'=>'q8.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
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
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page9' => [
                'title' => 'GDPR',
                'questions' => [
                    'q9' => [
                        'type'=>'checkbox',
                        'question'=>'Was hindert Sie daran, Ihre Datenmanagementumgebung vollständig EU-DSGVO-konform zu gestalten? <span class="small">Wählen Sie drei Themen aus!</span>',
                        'name'=>'q9',
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Fehlendes Wissen über Konformität zur EU-DSGVO',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Zu geringes oder kein Budget',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Begrenzte Ressourcen',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Priorisierungskonflikte',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nicht ausreichende Zusammenarbeit zwischen dem EU-DSGVO-Complianceteam und anderen Interessenträgern',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Fragmentierung oder fehlende Integration zwischen den Big-Data-, Reporting- und Analyseportfolien.',
                                'value'=>4,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
        ],
    ]
];
