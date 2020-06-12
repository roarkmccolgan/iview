<?php
// Dassault
return [
    'screener' => [
        'title' => 'Screener',
        'description' => '
            <h2 class="">Understanding your Business</h2>
            <p class="mb-4">To finalize our assessment of your business and its potential, we just need to ask you some questions on your organization’s scale and experience.</p>
        ',
        'ignore' => true,
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Metrics',
                'questions' => [
                    'q1'=>[
                        'type'=>'text',
                        'validate'=>'email',
                        'question'=>'Adresse e-mail',
                        'name'=> 1,
                    ]
                ]
            ]
        ]
    ],
    'digital-business' => [
        'title' => 'Entreprise numérique',
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
                'title' => 'Entreprise numérique',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Dans quelle mesure votre entreprise a-t-elle du mal à faire face aux changements de modèles commerciaux ?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Pas du tout difficile',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Légèrement difficile',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Modérément',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Difficile',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Très difficile',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Entreprise numérique',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Dans quelle mesure votre entreprise a-t-elle du mal à s\'adapter à vos changements de niveaux de personnel ?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Pas du tout difficile',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Légèrement difficile',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Modérément',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Difficile',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Très difficile',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Entreprise numérique',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                            'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                            'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                            'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                            'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                        ],
                        'question'=>'Dans quelle mesure votre entreprise utilise-t-elle les types d\'application suivants ?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Productivité (e-mail, traitement de texte, feuilles de calcul, présentations, etc.)',
                                'name'=> 4.1,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Collaboration (partage de fichiers, VoIP, visioconférence, etc.)',
                                'name'=> 4.2,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 4.3,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'ERP',
                                'name'=> 4.4,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Conception numérique (CAO, IAO, FAO, etc.)',
                                'name'=> 4.5,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Logiciel PLM (gestion du cycle de vie d\'un produit)',
                                'name'=> 4.6,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Logiciel de simulation',
                                'name'=> 4.7,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Logiciel d\'analyse',
                                'name'=> 4.8,
                                'options'=>[
                                    [
                                        'label'=>'Ne l\'utilise pas et ne compte pas le faire d\'ici 12 mois',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Ne l\'utilise pas, mais compte le faire d\'ici 12 mois',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une petite partie de l\'entreprise (moins de la moitié de la main-d\'œuvre)',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour une proportion importante de l\'entreprise (plus de la moitié de la main-d\'œuvre, mais moins de 80 %)',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Oui, pour la majeure partie ou la totalité de l\'entreprise (80 % des employés ou plus)',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ],
                        'skipNext' => [
                            [
                                'q' => 'q4',
                                'question' => 4.1,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.2,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.3,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.4,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.5,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.6,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.7,
                                'operator' => '<',
                                'value' => 3
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.8,
                                'operator' => '<',
                                'value' => 3
                            ],    
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'Entreprise numérique',
                'questions' => [
                    'q5'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Pas du tout réussi',
                            'Un peu réussi',
                            'Moyennement réussi',
                            'Réussi',
                            'Très réussi',
                        ],
                        'question'=>'Sur une échelle de 1 à 5, veuillez évaluer le succès du déploiement actuel de chacun des types d\'applications suivants au sein de votre entreprise ?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Productivité (e-mail, traitement de texte, feuilles de calcul, présentations, etc.)',
                                'name'=> 5.1,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.1,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Collaboration (partage de fichiers, VoIP, visioconférence, etc.)',
                                'name'=> 5.2,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.2,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 5.3,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.3,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'ERP',
                                'name'=> 5.4,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.4,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Conception numérique (CAO, IAO, FAO, etc.)',
                                'name'=> 5.5,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.5,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Logiciel PLM (gestion du cycle de vie d\'un produit)',
                                'name'=> 5.6,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.6,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Logiciel de simulation',
                                'name'=> 5.7,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.7,
                                    'operator' => '>',
                                    'value' => 2
                                ]
                            ],
                            [
                                'label'=>'Logiciel d\'analyse',
                                'name'=> 5.8,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.8,
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
        'title' => 'Conception Numérique',
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
                'title' => 'Conception Numérique',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Quelle affirmation décrit le mieux la manière dont votre entreprise a tendance à déployer des applications ou des mises à jour de CAO/FAO ?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Notre service informatique effectue cette opération manuellement et de manière ponctuelle.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Notre service informatique effectue cette opération manuellement sur la base planifiée.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Notre service informatique utilise des outils d\'automatisation.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous disposons d\'un fournisseur/fournisseur de services disposant des compétences ou des outils nécessaires pour y parvenir.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Notre mise en œuvre CAO/FAO met automatiquement à niveau et gère notre logiciel.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Conception Numérique',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'De quand date la version de l\'application de conception numérique la plus couramment déployée dans votre entreprise depuis sa sortie ?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Moins de 6 mois',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'De 6 mois à 1 an',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1 à 2 ans',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2 à 3 ans',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'3 ans ou plus',
                                'value'=>1,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Conception Numérique',
                'questions' => [
                    'q8'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Pas du tout réussi',
                            'Un peu réussi',
                            'Moyennement réussi',
                            'Réussi',
                            'Très réussi',
                        ],
                        'question'=>'Comment la direction générale de l\'entreprise considère-t-elle le rôle de l\'informatique au sein de l\'entreprise ?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Fiabilité',
                                'name'=> 8.1,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Évolutivité',
                                'name'=> 8.2,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Performances',
                                'name'=> 8.3,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Plate-forme industrielle pour la prise en charge de l\'écosystème',
                                'name'=> 8.4,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Rapport qualité/prix',
                                'name'=> 8.5,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Facilité de gestion',
                                'name'=> 8.6,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Caractéristiques',
                                'name'=> 8.7,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Collaboration',
                                'name'=> 8.8,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Sécurité',
                                'name'=> 8.9,
                                'options'=>[
                                    [
                                        'label'=>'Pas du tout réussi',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Un peu réussi',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Moyennement réussi',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Réussi',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Très réussi',
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
        'title' => 'Livraison Numérique',
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
                'title' => 'Livraison Numérique',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Comment la direction générale de l\'entreprise considère-t-elle le rôle de l\'informatique au sein de l\'entreprise ?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'L\'informatique est considérée comme un coût nécessaire.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'L\'informatique est considérée comme un moteur de l\'efficacité de l\'entreprise.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'L\'informatique est considérée comme un moteur de l\'avantage concurrentiel ou de la différenciation.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ],
                        'skipNext' => [
                            [
                                'q' => 'q4',
                                'question' => 4.1,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.2,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.3,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.4,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.5,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.6,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.7,
                                'operator' => '<',
                                'value' => 2
                            ],
                            [
                                'q' => 'q4',
                                'question' => 4.8,
                                'operator' => '<',
                                'value' => 2
                            ],    
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Livraison Numérique',
                'questions' => [
                    'q10'=>[
                        'type'=>'groupbutton',
                        'calc'=>[
                            'type'=>'average'
                        ],
                        'optionLabels' => [
                            'Solution interne (sur site)',
                            'Fournisseur de service géré',
                            'Service de fournisseur de clouds publics',
                        ],
                        'question'=>'Veuillez indiquer dans quelle mesure votre entreprise fournit (ou prévoit de fournir) chacun des types d\'applications suivants aux utilisateurs finaux. Sélectionnez une réponse pour chaque question.',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Productivité (e-mail, traitement de texte, feuilles de calcul, présentations, etc.)',
                                'name'=> 10.1,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.1,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Collaboration (partage de fichiers, VoIP, visioconférence, etc.)',
                                'name'=> 10.2,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.2,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'CRM',
                                'name'=> 10.3,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.3,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'ERP',
                                'name'=> 10.4,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.4,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Conception numérique (CAO, IAO, FAO, etc.)',
                                'name'=> 10.5,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.5,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Logiciel PLM (gestion du cycle de vie d\'un produit)',
                                'name'=> 10.6,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.6,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Logiciel de simulation',
                                'name'=> 10.7,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.7,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ],
                            [
                                'label'=>'Logiciel d\'analyse',
                                'name'=> 10.8,
                                'options'=>[
                                    [
                                        'label'=>'Solution interne (sur site)',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Fournisseur de service géré',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Service de fournisseur de clouds publics',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ],
                                'show' => [
                                    'question' => 4,
                                    'answer' => 4.8,
                                    'operator' => '>',
                                    'value' => 1
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Livraison Numérique',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'Quelle affirmation représente le mieux l\'approche de votre entreprise en matière d\'adoption de services cloud pour la livraison de services ou d\'applications informatiques ?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'Nous préférons tout gérer en interne.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous préférons exécuter les tâches en interne dans la mesure du possible, mais nous sommes ouverts à l\'utilisation du cloud si nécessaire.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous adoptons une approche équilibrée pour le fonctionnement en interne ou dans le cloud.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous avons tendance à exécuter les tâches dans le cloud, mais nous exécutons les applications en interne si nécessaire.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nous préférons utiliser le cloud pour tout.',
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
