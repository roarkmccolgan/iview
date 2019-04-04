<?php
// NTT SDWAN
return array(
    'infrastructure' => array(
        'title' => 'Infrastructure',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Infrastructure',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Utilisez-vous l\'un des éléments suivants dans votre solution WAN ?',
                        'name'=> 1,
                        'options'=>array(
                            array(
                                'label'=>'Routage Internet local (local break out)',
                                'name'=> 1.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Architecture active-active avec plusieurs connexions par site',
                                'name'=> 1.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Connectivité privée aux principaux fournisseurs de cloud public',
                                'name'=> 1.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Architecture hybride qui intègre des réseaux privés et des réseaux sur Internet public',
                                'name'=> 1.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Bande passante à la demande',
                                'name'=> 1.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
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
                'title' => 'Infrastructure',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'Comment achetez-vous vos solutions WAN ?',
                        'name'=> 2,
                        'options'=>array(
                            array(
                                'label'=>'Nous achetons des solutions quand nous en avons besoin et en fonction des exigences du moment',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous achetons surtout des solutions quand nous en avons besoin mais nous commençons à acheter de façon stratégique',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous avons trouvé un certain équilibre entre l\'achat stratégique et l\'achat ponctuel de solutions WAN ',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous achetons surtout des solutions WAN de manière stratégique mais nous achetons aussi des produits ponctuellement si nécessaire',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous suivons une approche stratégique et architecturale pour l\'achat de solutions WAN',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Infrastructure',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Lequel des énoncés suivants correspond le mieux à votre adoption, projet ou sensibilisation au SD-WAN ?',
                        'name'=> 3,
                        'options'=>array(
                            array(
                                'label'=>'N\'en utilise pas et ne prévoit pas d\'en déployer',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'N\'en utilise pas, mais s\'informe ou prévoit d\'en déployer',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'L\'utilise - phase pilote',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'L\'utilise - déploiement limité',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'L\'utilise - déploiement étendu',
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
        'title' => 'Intelligence',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Intelligence',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Utilisez-vous l\'un des services WAN intelligents suivants ?',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'Contrôle d\'acheminement en fonction de politiques (routage dynamique)',
                                'name'=> 4.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Optimisation WAN',
                                'name'=> 4.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gestion des performances applicatives',
                                'name'=> 4.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Surveillance en temps réel/visibilité',
                                'name'=> 4.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Fonctionnalité de replay pour la visibilité des performances des applications ou du réseau ou pour le dépannage',
                                'name'=> 4.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Non, et aucun de prévu',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non, mais certains sont prévus dans les 12 mois qui viennent',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Oui',
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
                'title' => 'Intelligence',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Quelle est votre approche concernant l\'intelligence réseau pour optimiser le réseau ?',
                        'name'=> 5,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc en fonction des journaux de rapports de problèmes',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Ad hoc en fonction des notifications de périphériques',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Corrélation des événements sur le réseau avec des seuils pré-configurés au niveau des utilisateurs, applications et périphériques.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Optimisation manuelle basée sur l\'analyse prédictive',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Optimisation automatique basée sur l\'analyse prédictive',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Intelligence',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'Comment garantissez-vous que les performances des applications répondent aux attentes ?',
                        'name'=> 6,
                        'options'=>array(
                            array(
                                'label'=>'Nous adoptons une approche de type best effort',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous segmentons physiquement le réseau pour séparer les classes de trafic',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous segmentons virtuellement le réseau pour séparer les classes de trafic',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous configurons statiquement la QoS pour prioriser le trafic vers les applications clés',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Notre réseau peut s\'adapter automatiquement pour assurer la performance des applications et l\'expérience utilisateur basée sur les SLA',
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
        'title' => 'Opérations',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Opérations',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'Est-il facile d\'effectuer les opérations suivantes sur votre WAN ?',
                        'name'=> 7,
                        'options'=>array(
                            array(
                                'label'=>'Connecter de nouveaux sites',
                                'name'=> 7.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Fourniture de nouvelles fonctions réseau',
                                'name'=> 7.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Mise à jour des politiques/paramètres de réseau ou de sécurité',
                                'name'=> 7.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Ajout ou modification d\'une connexion à un fournisseur de cloud public',
                                'name'=> 7.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Tout à fait courant et facile',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Se connecter à des partenaires ou clients',
                                'name'=> 7.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Très difficile et nous rencontrons des difficultés',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difficile, mais à peu près réalisable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Tout à fait courant et facile',
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
                'title' => 'Opérations',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Comment gérez-vous votre WAN aujourd\'hui ?',
                        'name'=> 8,
                        'options'=>array(
                            array(
                                'label'=>'Configuration manuelle ad hoc.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Configuration manuelle centralisée',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Configuration principalement manuelle, mais nous avons automatisé certaines tâches du réseau',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous avons en grande partie automatisé la gestion de notre WAN, mais il y a encore certaines configurations manuelles',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nous avons une orchestration réseau avec automatisation optimisée qui intègre les politiques, l\'analyse, l\'automatisation',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Opérations',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'Quelle est votre politique de gestion de sécurité du WAN aujourd\'hui ?',
                        'name'=> 9,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc, un périphérique après l\'autre',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Politique de contrôle d\'accès centralisé.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Application des politiques de sécurité de façon dynamique sur toute l\'étendue du réseau',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Détection et intervention rapides pour contenir les menaces.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Reconfiguration automatique pour prévenir les menaces émergentes en faisant appel à l\'analyse prédictive. ',
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
