<?php
// SAP Agile
return [
    'strategic-planning' => [
        'title' => 'Strategische Planung',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Strategische Planung</h1>
            <div class="h-1 bg-sap-green rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Die sich stetig wandelnde Wirtschaft ist ein sehr dynamisches Umfeld. In ihm müssen die Unternehmen ihre Strategien kontinuierlich anpassen und ihre Geschäftsprozesse agil und dynamisch gestalten, damit sie wettbewerbsfähig bleiben.
            </p>
            <p>
                Beantworten Sie die folgenden Fragen und gewinnen Sie einen Überblick über das Agilitätsniveau Ihrer strategischen Planung.
            </p>',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'background' => 'green',
        'intermission' => false,
        'class' => 'sec1',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Strategische Planung',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Sind Sie mit dem aktuellen Prozess ihrer strategischen Planung zufrieden?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Überhaupt nicht',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nein',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Geht so',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zufrieden',
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
            ],
            'page2' => [
                'title' => 'Strategische Planung',
                'questions' => [
                    'q2'=>[
                        'type'=>'checkbox',
                        'question'=>'Aus welchen Bereichen fließen Informationen in Ihre Planung ein? (Bitte wählen Sie alle zutreffenden Antworten aus.)',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Finanzwesen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Budgetplanung',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Produktion/Betrieb',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Personalwesen (Personalbestand – Neueinstellungen)',
                                'value'=>2,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Strategische Planung',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'average'
                        // ],
                        'optionLabels' => [
                            '1 Sehr langsam',
                            '2',
                            '3',
                            '4',
                            '5 Sehr schnell',
                        ],
                        'question'=>'Wie schnell können Planänderungen abteilungsübergreifend umgesetzt werden?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Finanzwesen',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'1 Sehr langsam',
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
                                        'label'=>'5 Sehr schnell',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Budgetplanung',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'1 Sehr langsam',
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
                                        'label'=>'5 Sehr schnell',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Produktion',
                                'name'=> 3.3,
                                'options'=>[
                                    [
                                        'label'=>'1 Sehr langsam',
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
                                        'label'=>'5 Sehr schnell',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Personalwesen (Personalbestand – Neueinstellungen)',
                                'name'=> 3.4,
                                'options'=>[
                                    [
                                        'label'=>'1 Sehr langsam',
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
                                        'label'=>'5 Sehr schnell',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                        ],
                    ]
                ]
            ]
        ]
    ],
    'processes' => [
        'title' => 'Prozesse',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Prozesse</h1>
            <div class="h-2 bg-sap-blue rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Die Prozesse (oder „Arbeitsweisen") wirklich agiler Unternehmen sind sowohl gut definiert als auch flexibel.  Daher können sie individuelle Kundenanforderungen und Nachfrageschwankungen berücksichtigen, gleichzeitig ihre Effizienz und Ausführungsgeschwindigkeit steigern.
            </p>
            <p>
                Prüfen Sie die Prozessagilität in Ihrem Unternehmen, indem Sie die nächsten Fragen beantworten.
            </p>',
        'background' => 'blue',
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
                'title' => 'Prozesse',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'Welche Beschreibung trifft auf Ihre Prozesse am ehesten zu?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Es sind keine Prozesse definiert.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir machen es so, wie es schon immer gemacht wurde.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Teilweise widersprüchliche Prozesse',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere Prozesse sind ziemlich gut definiert und effektiv.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere Prozesse lassen sich flexibel an wechselnde Anforderungen anpassen.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Prozesse',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Wie einfach ist es, Ihre Prozesse zu verändern?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Sehr schwer',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nicht möglich und nicht erforderlich',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Möglich, erfordert jedoch Zeit',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Einfach, aber mit einigen Herausforderungen verbunden',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Einfach',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Prozesse',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Können in Ihrem Unternehmen Prozessinformationen abteilungsübergreifend ausgetauscht werden?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Derzeit nicht möglich',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nur bei Bedarf',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regelmäßig, aber geplant',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regelmäßig bei neuen geschäftlichen Anforderungen',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ständig und mit einem klar definierten Zweck',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'customer-relationships' => [
        'title' => 'Kundenerlebnis',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Kundenerlebnis</h1>
            <div class="h-2 bg-sap-purple rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Die Mitarbeiter im Kundenkontakt verstehen am besten, was Ihre Kunden wünschen und wie sich diese Wünsche ändern. Agile Unternehmen lassen diese Informationen in den Geschäftsbetrieb einfließen und können entsprechend schnell auf das Gewünschte bei der Bereitstellung ihrer Produkte und Dienstleistungen reagieren.
            </p>
            <p>
                Erfahren Sie, wie Ihr Unternehmen in diesem Bereich bewertet wird.
            </p>',
        'background' => 'purple',
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
                'title' => 'Kundenerlebnis',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'Wie häufig ändern Ihre Kunden ihre Anfragen und Anforderungen?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Sehr selten',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Selten',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regelmäßig',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Oft',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sehr oft',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Kundenerlebnis',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Wie einfach ist es für Ihr Unternehmen, sich auf neue Kundenanforderungen einzustellen?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Sehr schwer ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Schwierig ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ist möglich',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Einfach',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sehr einfach',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Kundenerlebnis',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Wie schnell können Sie neue Kundenanforderungen implementieren und verwalten?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Sehr langsam',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Langsam',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zufriedenstellend',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Schnell, aber mit Optimierungspotenzial',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sehr schnell',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'suppliers-distributors' => [
        'title' => 'Lieferanten und Händler',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Lieferanten und Händler</h1>
            <div class="h-2 bg-sap-gray rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Agile Unternehmen können ihre Abläufe nach unten und oben skalieren und begegnen damit Nachfrageschwankungen. Die Einbeziehung von Lieferanten und Vertriebspartnern bei einer sofortigen Nachfrageanpassung ist eine Kunst, die für wirkliche Agilität beherrscht werden muss.
            </p>
            <p>
                Mit den folgenden Fragen ermitteln wir Ihre Bewertung in diesem Bereich.
            </p>',
        'background' => 'gray',
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
                'title' => 'Lieferanten und Händler',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Welche Aussage trifft auf den Informationsaustausch mit Ihren Lieferanten am besten zu?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Wir tauschen keine Informationen aus.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Situationsbedingt tauschen wir manchmal Informationen aus.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir tauschen Informationen aus, wenn unsere Lieferanten diese benötigen.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir tauschen regelmäßig viele Informationen mit unseren Lieferanten aus.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere Systeme sind integriert.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Lieferanten und Händler',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'Welche Aussage trifft auf den Informationsaustausch mit Ihren Händlern am besten zu?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'Wir tauschen keine Informationen mit unseren Händlern/Vertriebspartnern aus.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Situationsbedingt tauschen wir manchmal Informationen aus.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir tauschen Informationen aus, wenn unsere Händler/Vertriebspartner diese benötigen.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir tauschen regelmäßig Informationen mit unseren Händlern/Vertriebspartnern aus. ',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere Systeme sind integriert.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Lieferanten und Händler',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'Wie schnell können Sie die Prozesse für die Zusammenarbeit mit Lieferanten und Händlern ändern?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'Sehr langsam',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Langsam',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zufriedenstellend',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Schnell, aber mit Optimierungspotenzial',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sehr schnell',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'people-experience' => [
        'title' => 'Mitarbeitererlebnis',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Mitarbeitererlebnis</h1>
            <div class="h-2 bg-sap-orange rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Eine durchgängige Agilität von Geschäftsmodellen ist ohne agile Mitarbeiter unmöglich. Die Mitarbeiter können aber nur dann agil sein, wenn sie von Prozessen und Führungskräften unterstützt werden.
            </p>
            <p>
                Mit den folgenden Fragen ermitteln wir, wie gut Ihr Unternehmen ein agiles Arbeiten von Mitarbeitern unterstützt.
            </p>',
        'background' => 'orange',
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
                'title' => 'Mitarbeitererlebnis',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'Welche Aussage trifft auf die Informationsweitergabe an Mitarbeiter in Ihrem Unternehmen am besten zu?',
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'Sehr selten ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Informationen werden von den Führungskräften an die Mitarbeiter weitergegeben.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Jeder Mitarbeiter weiß nur das, was er wissen muss. ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Die Mitarbeiter erhalten eine Fülle von Geschäftsinformationen.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Jeder Mitarbeiter hat vollständige Transparenz über das Geschäftsgeschehen.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Mitarbeitererlebnis',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'Wie schnell können Sie die Mitarbeiter für neue Aufgaben einsetzen, wenn sich die geschäftlichen Anforderungen ändern?',
                        'name'=> 14,
                        'options'=>[
                            [
                                'label'=>'Sehr langsam',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Langsam',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zufriedenstellend',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Schnell, aber mit Optimierungspotenzial',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Sehr schnell',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Mitarbeitererlebnis',
                'questions' => [
                    'q15'=>[
                        'type'=>'checkbox',
                        'question'=>'Wie messen Sie die Leistung Ihrer Mitarbeiter? (Bitte wählen Sie alle zutreffenden Antworten aus.)',
                        'help' => '',
                        'name'=> 15,
                        'options'=>[
                            [
                                'label'=>'Anhand der Vertriebs- und Unternehmensleistung',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Anhand der Mitarbeiterergebnisse (Produktivitätskennzahlen)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Anhand von Fluktuation und besonderer Fehlzeiten (Absentismus) ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Anhand unserer geschäftlichen und der persönlichen Ziele der Mitarbeiter ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Anhand von Kundenfeedback ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Anhand von Kennzahlen zum Mitarbeitererlebnis (Employee Experience; Mitarbeiterzufriedenheit und ‑motivation usw.)',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
