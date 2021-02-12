<?php

//5 SPLUNK
return [
    'screeners' => [
        'title' => 'Demografie',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'icon' => 'icon-Pencil',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Demografie',
                'questions' => [
                    's1'=>[
                        'type'=>'button',
                        'question'=>'Wie viele Vollzeitmitarbeiter hat Ihr Unternehmen weltweit?',
                        'name'=>'s1',
                        'options'=>[
                            [
                                'label'=>'500 bis 999',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1.000 bis 2.499',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2.500 oder mehr',
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
        'title' => 'Sicherheitsstrategie',
        'class' => 'sec1',
        'icon' => 'splunk-strategy',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Sicherheitsstrategie',
                'questions' => [
                    'q1'=>[
                        'type'=>'radio',
                        'question'=>'Welche Aussage beschreibt die derzeitige Sicherheitsstrategie Ihres Unternehmens am besten?',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Spontane Investitionen ohne umfassenden Plan oder strategische Erwägungen',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir planen, Sicherheitslücken auszuräumen, wenn es als notwendig erachtet wird',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben wiederholbare Sicherheitsverfahren, die das Unternehmen unterstützen',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben eine gut gemanagte Sicherheitsstrategie, die eine Richtung mindestens für die nächsten zwei Jahre vorgibt',
                                'value'=>8,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben Sicherheit als strategische Kerninvestition mit spezifizierten Ergebnissen definiert',
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
                'title' => 'Sicherheitsstrategie',
                'questions' => [
                    'q2'=>[
                        'type'=>'slider',
                        'question'=>'Inwiefern stehen die folgenden Faktoren hinter Ihren Investitionen in die IT-Sicherheit? Nutzen Sie bitte eine Skala von 1 = Gar nicht bedeutend bis 5 = „Sehr bedeutend“ ',
                        'name'=>'q2',
                        'options'=>[
                            [
                                'label'=>'Unser Verständnis des Risikoumfelds',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Beiträge von unabhängigen Anbietern und staatlichen Quellen',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Bedürfnis, unsere internen Ressourcen und Kompetenzen zu erhöhen',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Compliance-Anforderungen, z. B. Datenschutz-Grundverordnung, ISO2700x oder PCI DSS',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Geschäftsinitiativen wie digitaler Wandel und Internet of Things (IoT)',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Einführung von Cloud-Services',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Auflagen der Cyber-Versicherung',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Eine strategische Entscheidung, einige oder alle unserer Sicherheitsvorkehrungen auszulagern',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                                'label'=>'Ein kürzlicher Sicherheitsvorfall',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Sehr bedeutend',
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
                'title' => 'Sicherheitsstrategie',
                'questions' => [
                    'q3'=>[
                        'type'=>'radio',
                        'question'=>'Welche der folgenden Aussagen beschreibt Ihren Ansatz in Bezug auf den „Stand der Technik“ in puncto Sicherheitsinvestitionen?',
                        'name'=>'q3',
                        'options'=>[
                            [
                                'label'=>'Wir wissen nicht, was den Stand der Technik ausmacht',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unser bestehender Anbieter sagt uns, was der Stand der Technik ist',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Unsere internen Fachkräfte definieren den Stand der Technik',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir definieren den Stand der Technik mithilfe externer Quellen, z. B. nationaler kompetenter Stellen (CESG/NCSC in GB oder BSI in Deutschland) und/oder Branchenstandards (z. B. ISO, NIST und SANS)',
                                'value'=>8,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir definieren den Stand der Technik mithilfe unabhängiger Fachkräfte oder Berater',
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
        'title' => 'Vorfallserkennung',
        'class' => 'sec2',
        'icon' => 'splunk-incident-detection',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Vorfallserkennung',
                'questions' => [
                    'q4'=>[
                        'type'=>'slider',
                        'question'=>'Welche Arten von erweiterten Sicherheitskompetenzen nutzen Sie zur Erkennung von Risiken oder Angriffen? Nutzen Sie bitte eine Skala von 1 = „Gar nicht genutzt“ bis 5 = „Stark genutzt“',
                        'name'=>'q4',
                        'options'=>[
                            [
                                'label'=>'Maschinelles Lernen',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Künstliche Intelligenz',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Sicherheitsanalyse, u. a. Verhaltensanalyse und Anomalieerkennung',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Erweiterte Authentifizierungssysteme, u. a. Mehrfaktorauthentifizierung und Biometrie',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Echtzeitanalyse',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Heuristik',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Threat-Intelligence-Services',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Endpunktschutz der nächsten Generation (signaturfrei)',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Proaktive Risikoerkennung (die Annahme, dass Ihre Umgebung bereits angegriffen wurde und Sie proaktiv nach dem Eindringling suchen müssen)',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Forensik und Vorfallsuntersuchungssysteme',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Dediziertes Sicherheitsoperationsteam',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                                'label'=>'Sicherheitsvorfalls- und -ereignismanagement',
                                'from'=>'Gar nicht genutzt',
                                'to'=>'Stark genutzt',
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
                'title' => 'Vorfallserkennung',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Wie viele zu verfolgende sicherheitsrelevante Alerts oder Vorfälle erhalten Sie in der Regel wöchentlich für die gesamte IT?',
                        'name'=>'q5',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'Keine',
                                'value'=>0,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Weniger als 10',
                                'value'=>4.9,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zwischen 10 und 49',
                                'value'=>29.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zwischen 50 und 99',
                                'value'=>74.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zwischen 100 und 499',
                                'value'=>299.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Zwischen 500 und 999',
                                'value'=>749.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1.000 oder mehr',
                                'value'=>2000,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Vorfallserkennung',
                'questions' => [
                    'q6'=>[
                        'type'=>'slider',
                        'question'=>'Inwieweit werden Sie in den nächsten 12 Monaten in die folgenden Bereiche der Reaktion auf Vorfälle investieren?',
                        'name'=>'q6',
                        'options'=>[
                            [
                                'label'=>'Vorfallsreaktionsverfahren und -pläne',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Intensiv investieren',
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
                                'label'=>'Vorfallsreaktionsplattform und unterstützende Technologie',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Intensiv investieren',
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
                                'label'=>'Vorfallsreaktionsteams (Mitarbeiter)',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Intensiv investieren',
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
                                'label'=>'Unabhängige Vorfallsreaktionsservices',
                                'from'=>'Gar nicht bedeutend',
                                'to'=>'Intensiv investieren',
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
        'title' => 'Vorfallsreaktion',
        'class' => 'sec3',
        'icon' => 'icon-Timer-2',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Vorfallsreaktion',
                'questions' => [
                    'q7'=>[
                        'type'=>'radio',
                        'question'=>'Inwieweit ist bei Ihnen bereits eine Reaktionsplattform für Sicherheitsvorfälle eingerichtet?',
                        'name'=>'q7',
                        'options'=>[
                            [
                                'label'=>'Wird nicht verwendet und ist nicht geplant',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wird nicht verwendet, ist aber in den nächsten zwei Jahren geplant',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Pilotprojekt läuft',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'In beschränkten Bereichen in Verwendung',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Weitläufig in Verwendung',
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
                'title' => 'Vorfallsreaktion',
                'questions' => [
                    'q8'=>[
                        'type'=>'radio',
                        'question'=>'Welche Aussage beschreibt die Reaktion Ihres Unternehmens auf einen Vorfall/Alert am besten?',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'Wir haben keine festgelegten Reaktionen auf Vorfälle',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben ein allgemein formuliertes Vorfallsreaktionsverfahren, das den Gesamtansatz bei Vorfällen definiert',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben ein detailliertes Run-Book für Vorfallsarten, das unsere Reaktion definiert',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben einen gemanagten Vorfallsreaktionsplan, der unsere Reaktion auf Vorfälle definiert',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir haben eine Vorfallsreaktionsplattform, die das Verfahren der Vorfallsreaktion automatisiert',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Vorfallsreaktion',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Wie viele Personen sind pro Vorfall durchschnittlich an Sicherheitsuntersuchungen beteiligt?',
                        'name'=>'q9',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'1',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2 oder 3',
                                'value'=>2.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'4 oder 5',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'6 bis 9',
                                'value'=>7.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'10 oder mehr',
                                'value'=>15,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Vorfallsreaktion',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Wie viel Arbeit (Zeit in Stunden) pro Person wird auf die Untersuchung von Sicherheitsvorfällen aufgewendet?',
                        'name'=>'q10',
                        'options'=>[
                            [
                                'label'=>'Weniger als 1 Stunde',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1-2 Stunden',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2-4 Stunden',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'4-8 Stunden',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'9-12 Stunden',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'13–20 Stunden',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Mehr als 20 Stunden',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Vorfallsreaktion',
                'questions' => [
                    'q11'=>[
                        'type'=>'radio',
                        'question'=>'Welche Aussage beschreibt am besten, wie gut Sie in der Lage sind, mit der Anzahl der Sicherheitsvorfälle umzugehen?',
                        'name'=>'q11',
                        'options'=>[
                            [
                                'label'=>'Wir sind völlig überwältigt',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir hetzen von einem Notfall zum nächsten',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir werden in der Regel damit fertig, aber manchmal nur mit Mühen',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir werden meistens damit fertig, aber es gibt heikle Momente',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir werden gut damit fertig',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Vorfallsreaktion',
                'questions' => [
                    'q12'=>[
                        'type'=>'radio',
                        'question'=>'Inwieweit reichen die erfassten Informationen aus, um effektive Maßnahmen zur Vorfallsreaktion zu ergreifen?',
                        'name'=>'q12',
                        'options'=>[
                            [
                                'label'=>'Wir haben in der Regel nicht genug Informationen, um Maßnahmen zu ergreifen',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir erfassen Informationen, die uns eine allgemeine Richtung weisen',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir erfassen genug Informationen, um vernünftige Maßnahmen zu ergreifen',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir erfassen ausreichende Informationen, die uns angemessene Maßnahmen erkennen lassen',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Wir erfassen detaillierte Informationen, die uns ein entschlossenes Handeln ermöglichen',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Vorfallsreaktion',
                'questions' => [
                    'q13'=>[
                        'type'=>'checkbox',
                        'question'=>'Welche der folgenden Maßnahmen haben Sie implementiert, um Ihre Kompetenzen bei der Reaktion auf Vorfälle zu unterstützen?',
                        'name'=>'q13',
                        'options'=>[
                            [
                                'label'=>'Automatisierte Richtlinienupdates (z. B. Firewall-Regeln, die als Reaktion auf neue Risiken aktualisiert werden)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Run-Books',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Kommunikationsplan',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Richtlinie zur Notfallwiederherstellung',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Tiger/Go-Teams',
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
