<?php
//5 SPLUNK
return [
    'screeners' => [
        'title' => 'Données démographiques',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'icon' => 'icon-Pencil',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Données démographiques',
                'questions' => [
                    's1'=>[
                        'type'=>'button',
                        'question'=>'Combien de salariés travaillent à temps plein dans votre entreprise à travers le monde ?',
                        'name'=>'s1',
                        'options'=>[
                            [
                                'label'=>'de 500 à 999',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'de 1 000 à 2 499',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'2 500 ou plus',
                                'value'=>0,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'security-strategy' => [
        'title' => 'Stratégie de sécurité',
        'class' => 'sec1',
        'icon' => 'splunk-strategy',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Stratégie de sécurité',
                'questions' => [
                    'q1'=>[
                        'type'=>'radio',
                        'question'=>'Laquelle des affirmations suivantes décrit le mieux la stratégie de sécurité actuelle de votre entreprise ?',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Investissement ponctuel sans stratégie générale',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous prévoyons de combler certaines lacunes sécuritaires',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous avons des processus répétés en place qui soutiennent l’activité',
                                'value'=>6,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous possédons une stratégie de sécurité bien gérée qui donne la marche à suivre pour les deux prochaines années au minimum',
                                'value'=>8,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous avons défini la sécurité comme un investissement stratégique fondamental avec des résultats spécifiés',
                                'value'=>10,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]/*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Stratégie de sécurité',
                'questions' => [
                    'q2'=>[
                        'type'=>'slider',
                        'question'=>'Dans quelle mesure les éléments suivants stimulent-ils votre investissement dans la sécurité informatique ? <br/><span class="small">Veuillez utiliser une échelle où 1 = pas du tout et 5 = facteur très pertinent driver</span>',
                        'name'=>'q2',
                        'options'=>[
                            [
                                'label'=>'Notre compréhension des menaces',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Informations de fournisseurs tiers et sources gouvernementales',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Besoin d’accroître nos ressources internes et notre éventail de compétences',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Exigences de conformité telles que GDPR, ISO2700x ou PCI DSS',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Initiatives commerciales telles que la transformation numérique et l’Internet des objets',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Adoption des services Cloud',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Exigences de cyber-assurance',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Une décision stratégique d’externaliser tout ou partie de notre sécurité',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Une violation ou faille récente',
                                'from'=>'Pas du tout pertinent',
                                'to'=>'Très pertinent',
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
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Stratégie de sécurité',
                'questions' => [
                    'q3'=>[
                        'type'=>'radio',
                        'question'=>'Laquelle des affirmations suivantes décrit le mieux votre approche du concept de technologie « de pointe » pour l’investissement en matière de sécurité ?',
                        'name'=>'q3',
                        'options'=>[
                            [
                                'label'=>'Nous n’avons pas d’avis ou de compréhension défini de ce qui est à la pointe de la technologie',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nos fournisseurs actuels nous indiquent ce qui est à la pointe de la technologie',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous recourons à des experts externes pour définir ce qui est à la pointe de la technologie',
                                'value'=>6,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous recourons à des sources externes telles que des autorités nationales compétentes (CESG/NCSC au Royaume-Uni, BSI en Allemagne, etc.) et/ou des normes sectorielles (comme ISO, NIST et SANS) pour définir ce qui est à la pointe de la technologie',
                                'value'=>8,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous recourons à des spécialistes ou consultants externes pour définir ce qui est à la pointe de la technologie',
                                'value'=>10,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]/*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            ]
        ]
    ],
    'incident-detection' => [
        'title' => 'Détection des incidents',
        'class' => 'sec2',
        'icon' => 'splunk-incident-detection',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Détection des incidents',
                'questions' => [
                    'q4'=>[
                        'type'=>'slider',
                        'question'=>'Quels types de capacités de sécurité avancées utilisez-vous pour détecter des menaces ou des violations ? Veuillez utiliser une échelle où 1 = pas du tout et 5 = nous en utilisons beaucoup',
                        'name'=>'q4',
                        'options'=>[
                            [
                                'label'=>'Apprentissage automatique',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Intelligence artificielle',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Analyse de sécurité, y compris analyse comportementale et détection d’anomalies',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Sandbox',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Systèmes d’authentification avancés, y compris authentification multifacteurs et biométrie',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Analyse en temps réel',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Heuristique',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Service de renseignement sur les menaces',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Solution NextGen de sécurité du poste de travail (sans signature)',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Recherche proactive des menaces (selon la supposition suivante : si son environnement fait déjà face à des violations, on recherche l’intrus de manière proactive).)</small>',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Systèmes d’analyse et d’enquête sur les incidents',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Équipe d’activité de sécurité dédiée (SOC)',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Gestion des événements et des incidents de sécurité (SIEM)',
                                'from'=>'Pas du tout',
                                'to'=>'Nous en utilisons beaucoup',
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
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Détection des incidents',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Combien d’alertes ou incidents de sécurité exploitables par semaine recevez-vous en général pour tout le service informatique ?',
                        'name'=>'q5',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'Aucune',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Moins de 10',
                                'value'=>4.9,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Entre 10 et 49',
                                'value'=>29.5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Entre 50 et 99',
                                'value'=>74.5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Entre 100 et 499',
                                'value'=>299.5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Entre 500 et 999',
                                'value'=>749.5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'1 000 ou plus',
                                'value'=>2000,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Détection des incidents',
                'questions' => [
                    'q6'=>[
                        'type'=>'slider',
                        'question'=>'Dans quelle mesure allez-vous investir dans les domaines suivants de réponse aux incidents dans les 12 prochains mois ?',
                        'name'=>'q6',
                        'options'=>[
                            [
                                'label'=>'Processus et plans de réponse aux incidents',
                                'from'=>'pas du tout',
                                'to'=>'Investir beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Plate-forme de réponse aux incidents et technologie connexe',
                                'from'=>'pas du tout',
                                'to'=>'Investir beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Équipes de réponse aux incidents (personnes)',
                                'from'=>'pas du tout',
                                'to'=>'Investir beaucoup',
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
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Services externes de réponse aux incidents',
                                'from'=>'pas du tout',
                                'to'=>'investir beaucoup',
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
                                    ]
                                ]
                            ],
                        ]
                    ]
                ]
            ],
        ]
    ],
    'incident-response' => [
        'title' => 'Réponse aux incidents',
        'class' => 'sec3',
        'icon' => 'icon-Timer-2',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => [
            'page1' => [
                'title' => 'Réponse aux incidents',
                'questions' => [
                    'q7'=>[
                        'type'=>'radio',
                        'question'=>'Dans quelle mesure disposez-vous d\'une plate-forme de réponse aux incidents de sécurité actuellement ?',
                        'name'=>'q7',
                        'options'=>[
                            [
                                'label'=>'N’en utilise pas et ne prévoie pas d’en utiliser',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'N’en utilise pas, mais prévoie d’en utiliser une dans les deux ans',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'En cours de test',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Utilisation dans des domaines limités de la production',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Large utilisation dans la production',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Réponse aux incidents',
                'questions' => [
                    'q8'=>[
                        'type'=>'radio',
                        'question'=>'Laquelle de ces affirmations décrit le mieux la réponse de votre entreprise aux alertes d’incidents ?',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'Nous n’avons pas de réponse définie aux incidents',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous possédons un large processus de réponse aux incidents qui définit l’approche globale des incidents',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous possédons un manuel de procédures détaillé pour les types d’incidents qui définit notre réponse',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous possédons un plan de réponse aux incidents géré qui définit notre réaction aux incidents',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous disposons d’une plate-forme de gestion des réponses aux incidents qui automatise le processus de réaction aux incidents',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Réponse aux incidents',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'En moyenne, combien de personnes sont impliquées dans les analyses de sécurité pour chaque incident ?',
                        'name'=>'q9',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'1',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'2 ou 3',
                                'value'=>2.5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'4 ou 5',
                                'value'=>4.5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'6 à 9',
                                'value'=>7.5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'10 ou plus',
                                'value'=>15,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'Réponse aux incidents',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Quel est l’effort (temps en heures passées) par personne et par analyse d’incident de sécurité ?',
                        'name'=>'q10',
                        'options'=>[
                            [
                                'label'=>'Moins d’1 heure',
                                'value'=>5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'1 à 2 heures',
                                'value'=>5,
                                'checked'=>false
                            ],
                            [
                                'label'=>'2 à 4 heures',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'4 à 8 heures',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'9 à 12 heures',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'13 à 20 heures',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Plus de 20 heures',
                                'value'=>1,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page5' => [
                'title' => 'Réponse aux incidents',
                'questions' => [
                    'q11'=>[
                        'type'=>'radio',
                        'question'=>'Laquelle de ces affirmations décrit le mieux votre capacité à faire face au nombre d’incidents de sécurité ?',
                        'name'=>'q11',
                        'options'=>[
                            [
                                'label'=>'Nous sommes complètement débordés',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous parons en permanence au plus pressé',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous gérons habituellement, mais nous luttons quelquefois',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous gérons la plupart du temps, avec quelques moments de stress',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous gérons assez tranquillement',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page6' => [
                'title' => 'Réponse aux incidents',
                'questions' => [
                    'q12'=>[
                        'type'=>'radio',
                        'question'=>'Dans quelle mesure les informations collectées sont-elles suffisantes pour pouvoir prendre des mesures efficaces de réponse aux incidents ?',
                        'name'=>'q12',
                        'options'=>[
                            [
                                'label'=>'Nous avons généralement assez d’informations pour prendre des mesures',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous collectons des informations qui nous envoient dans la bonne direction',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous collectons suffisamment d’informations pour prendre des mesures adéquates',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous collectons suffisamment d’informations en vue de mesures appropriées',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nous collectons des informations détaillées qui nous permettent de prendre des mesures déterminantes',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page7' => [
                'title' => 'Réponse aux incidents',
                'questions' => [
                    'q13'=>[
                        'type'=>'checkbox',
                        'question'=>'Laquelle de ces mesures avez-vous déployées pour soutenir vos capacités de réponse aux incidents ?',
                        'name'=>'q13',
                        'options'=>[
                            [
                                'label'=>'Mises à jour automatisées de la politique (par ex. des règles de pare-feu mises à jour en réponse à l’émergence d’une nouvelle menace)',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Manuels de procédures',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Plan de communication',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Politique de reprise après sinistre',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Équipes d’intervention',
                                'value'=>1,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
