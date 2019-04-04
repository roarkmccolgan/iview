<?php
// NTT SDWAN
return [
    'infrastructure' => [
        'title' => 'Infrastructure',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Infrastructure',
                'questions' => [
                    'q1'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'question'=>'Utilisez-vous l\'un des éléments suivants dans votre solution WAN ?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'Routage Internet local (local break out)',
                                'name'=> 1.1,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Architecture active-active avec plusieurs connexions par site',
                                'name'=> 1.2,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Connectivité privée aux principaux fournisseurs de cloud public',
                                'name'=> 1.3,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Architecture hybride qui intègre des réseaux privés et des réseaux sur Internet public',
                                'name'=> 1.4,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Bande passante à la demande',
                                'name'=> 1.5,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
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
                'title' => 'Infrastructure',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Comment achetez-vous vos solutions WAN ?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Nous achetons des solutions quand nous en avons besoin et en fonction des exigences du moment',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous achetons surtout des solutions quand nous en avons besoin mais nous commençons à acheter de façon stratégique',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous avons trouvé un certain équilibre entre l\'achat stratégique et l\'achat ponctuel de solutions WAN ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous achetons surtout des solutions WAN de manière stratégique mais nous achetons aussi des produits ponctuellement si nécessaire',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous suivons une approche stratégique et architecturale pour l\'achat de solutions WAN',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Infrastructure',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Lequel des énoncés suivants correspond le mieux à votre adoption, projet ou sensibilisation au SD-WAN ?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'N\'en utilise pas et ne prévoit pas d\'en déployer',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'N\'en utilise pas, mais s\'informe ou prévoit d\'en déployer',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'L\'utilise - phase pilote',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'L\'utilise - déploiement limité',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'L\'utilise - déploiement étendu',
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
        'title' => 'Intelligence',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Intelligence',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'question'=>'Utilisez-vous l\'un des services WAN intelligents suivants ?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Contrôle d\'acheminement en fonction de politiques (routage dynamique)',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Optimisation WAN',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Gestion des performances applicatives',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Surveillance en temps réel/visibilité',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Fonctionnalité de replay pour la visibilité des performances des applications ou du réseau ou pour le dépannage',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui',
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
                'title' => 'Intelligence',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Quelle est votre approche concernant l\'intelligence réseau pour optimiser le réseau ?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Ad hoc en fonction des journaux de rapports de problèmes',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ad hoc en fonction des notifications de périphériques',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Corrélation des événements sur le réseau avec des seuils pré-configurés au niveau des utilisateurs, applications et périphériques.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Optimisation manuelle basée sur l\'analyse prédictive',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Optimisation automatique basée sur l\'analyse prédictive',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Intelligence',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Comment garantissez-vous que les performances des applications répondent aux attentes ?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Nous adoptons une approche de type best effort',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous segmentons physiquement le réseau pour séparer les classes de trafic',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous segmentons virtuellement le réseau pour séparer les classes de trafic',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous configurons statiquement la QoS pour prioriser le trafic vers les applications clés',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Notre réseau peut s\'adapter automatiquement pour assurer la performance des applications et l\'expérience utilisateur basée sur les SLA',
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
        'title' => 'Opérations',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Opérations',
                'questions' => [
                    'q7'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'question'=>'Est-il facile d\'effectuer les opérations suivantes sur votre WAN ?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Connecter de nouveaux sites',
                                'name'=> 7.1,
                                'options'=>[
                                    [
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Fourniture de nouvelles fonctions réseau',
                                'name'=> 7.2,
                                'options'=>[
                                    [
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Mise à jour des politiques/paramètres de réseau ou de sécurité',
                                'name'=> 7.3,
                                'options'=>[
                                    [
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Ajout ou modification d\'une connexion à un fournisseur de cloud public',
                                'name'=> 7.4,
                                'options'=>[
                                    [
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Se connecter à des partenaires ou clients',
                                'name'=> 7.5,
                                'options'=>[
                                    [
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Tout à fait courant et facile',
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
                'title' => 'Opérations',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Comment gérez-vous votre WAN aujourd\'hui ?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Configuration manuelle ad hoc.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Configuration manuelle centralisée',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Configuration principalement manuelle, mais nous avons automatisé certaines tâches du réseau',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous avons en grande partie automatisé la gestion de notre WAN, mais il y a encore certaines configurations manuelles',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous avons une orchestration réseau avec automatisation optimisée qui intègre les politiques, l\'analyse, l\'automatisation',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Opérations',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Quelle est votre politique de gestion de sécurité du WAN aujourd\'hui ?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Ad hoc, un périphérique après l\'autre',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Politique de contrôle d\'accès centralisé.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Application des politiques de sécurité de façon dynamique sur toute l\'étendue du réseau',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Détection et intervention rapides pour contenir les menaces.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Reconfiguration automatique pour prévenir les menaces émergentes en faisant appel à l\'analyse prédictive. ',
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
