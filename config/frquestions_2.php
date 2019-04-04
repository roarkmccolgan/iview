<?php
return array(
    'screeners' => array(
        'title' => 'Données démographiques',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'Données démographiques',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Données démographiques',
                'questions' => array(
                    's1'=>array(
                        'type'=>'button',
                        'question'=>'Dans quel pays votre entreprise est­-elle située ?',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'label'=>'France',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Allemagne',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Royaume­Uni',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Espagne',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Italie',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Autre',
                                'value'=>0,
                                'checked'=>false
                            )
                        ),
                        'other'=>'Autre|0|Votre pays'
                    )
                )
            ),
            'page2' => array(
                'title' => 'Données démographiques',
                'questions' => array(
                    's2'=>array(
                        'type'=>'button',
                        'question'=>'Combien d\'employés à temps plein votre organisation compte-t-elle dans le monde entier ?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'label'=>'Moins de 1000',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1000-2499',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'2500-4999',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'5000-9999',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'10000 ou plus',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Données démographiques',
                'questions' => array(
                    's3'=>array(
                        'type'=>'button',
                        'question'=>'Laquelle des catégories d\'industrie suivantes représente le mieux votre organisation ?',
                        'name'=>'s3',
                        'options'=>array(
                            array(
                                'label'=>'Services financiers',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fabrication',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Services de télécommunications (y compris hébergeurs, xSP, et fournisseurs de services cloud)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Éducation',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Santé',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Médias',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Transport, distribution et logistique',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Vente au détail/en gros',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Conseil informatique et services professionnels autour de l\'informatique',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Conseil autre qu\'informatique et autres services professionnels (comptabilité, juridiques, publicité, immobilier, recrutement, conseil aux entreprises, etc.) ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Administration centrale ou locale, ou services publics',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Services d’utilité publique – électricité, gaz, eau',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Autre',
                                'value'=>1,
                                'checked'=>false,
                                'other' => true
                            )
                        ),
                        'other'=>'Autre|1|Précisez'
                    )
                )
            )
        )
    ),
    'cyber-risk-management-and-the-business' => array(
        'title' => 'Gestion des cyber-risques et de l’activité',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'Comment la direction considère-t-elle le rôle de l\'informatique ? Une réponse au choix',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Un coût nécessaire',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Un facteur d\'efficacité opérationnelle',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Un moteur d\'avantage ou de différenciation concurrentielle',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'En ce qui concerne les demandes de l\'entreprise pour des applications ou des services nouveaux ou améliorés, quelle formulation reflète le mieux les capacités de votre service informatique ? Une réponse au choix.',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Nous avons du mal à traiter la plupart des demandes.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous sommes généralement à l\'aise avec des demandes autour des applications ou des services existants, mais avons du mal avec les demandes de services nouveaux ou améliorés.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous sommes généralement à l\'aise avec toutes les demandes : applications et services existants et services nouveaux ou améliorés.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous sommes très bons à répondre à la plupart des demandes, ou même à toutes.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Quel énoncé décrit le mieux votre attitude face au risque au niveau de l\'entreprise ? Une réponse au choix.',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'Nous évitons le risque à tout prix.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous cherchons à éviter les risques, mais nous prendrons des risques s\'ils sont très justifiés.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous nous méfions des risques, mais nous les prendrons dans les cas où nous pourrons voir un avantage commercial clair.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous prendrons des risques facilement pour aider l\'entreprise à se développer.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Nous prenons des risques et les gérons activement pour aider l\'entreprise à se développer.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupradio',
                        'question'=>'Lesquelles des solutions suivantes avez-vous déjà en place pour protéger votre entreprise en cas d\'incident ?',
                        'name'=>'q4',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Évaluation formelle des risques',
                                'name'=>'q4.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Détection proactive',
                                'name'=>'q4.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Plan de réaction',
                                'name'=>'q4.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Plan de communications internes',
                                'name'=>'q4.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Plan de communications externes et relations publiques',
                                'name'=>'q4.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Plan de notification de transgression',
                                'name'=>'q4.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Plan de restauration après transgression',
                                'name'=>'q4.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Assurance contre le cyber-risque',
                                'name'=>'q4.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Nous l\'avons',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Nous ne l\'avons pas, mais c\'est en projet',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non, et pas de projet',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page5' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Quel énoncé décrit le mieux la façon dont la gestion des cyber-risques est assurée dans votre entreprise ? Une réponse au choix.',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'Elle n\'a pas besoin d\'un responsable dédié.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Elle est généralement déléguée à l\'informatique.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Elle est partagée entre l\'informatique et divers secteurs d\'activité.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Elle est partagée entre l\'informatique et la direction.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Elle est partagée entre l\'informatique, la direction, et divers secteurs d\'activité.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'groupradio',
                        'question'=>'D’après les propositions ci-dessous, qui, au sein de votre entreprise, prend part aux exercices de cyber-risques ?',
                        'name'=>'q6',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Président directeur général',
                                'name'=>'q6.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Directeur financier',
                                'name'=>'q6.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Directeur de l\'exploitation',
                                'name'=>'q6.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Administrateur non exécutif missionné pour les questions risque/conformité/sécurité',
                                'name'=>'q6.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Administrateur exécutif missionné pour les questions risque/conformité/sécurité',
                                'name'=>'q6.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Fonction dédiée risque/conformité/sécurité (non au niveau du conseil d\'administration)',
                                'name'=>'q6.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page7' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'À quel stade la sécurité informatique est-elle en général introduite dans les initiatives et projets opérationnels ? Une seule réponse.',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'Dès le début de la planification',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Au cours de la planification',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Au début du développement',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Au cours du développement',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Quand quelque chose va mal',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Gestion des cyber-risques et de l’activité',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Comment décririez-vous le niveau d\'investissement de votre organisation pour la sécurité informatique ? Une seule réponse',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Nettement insuffisant pour ce que nous avons à faire',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Serré, couvrant à peine les opérations essentielles',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Bon pour les opérations de base, mais serré pour de nouvelles initiatives',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Bon pour les opérations de base, et pour les nouvelles initiatives dont la valeur est claire',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Dans l\'ensemble, facilement disponible avec une bonne analyse de rentabilité, même pour un développement expérimental',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    ),
    'cyber-risk-management-operations-and-defence' => array(
        'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'slider',
                        'question'=>'Quelle importance avez-vous donnée aux mesures suivantes mises en place pour la gestion de la sécurité physique de votre informatique ?',
                        'name'=>'q9',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Contrôle de sécurité du personnel',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Rendez-vous préalables',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Vérification d\'identité',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Sas de sécurité pour l\'entrée/la sortie',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Biométrie',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Vidéosurveillance',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Accompagnement permanent (membres du personnel et visiteurs doivent travailler en paires ou être accompagnés).',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Modification des autorisations, approbations et enregistrements',
                                'from'=>'Pas du tout important',
                                'to'=>'Très important',
                                'name'=>'q9.8',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page2' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'Lequel des énoncés suivants décrit le mieux votre adoption et votre mise en oeuvre des bonnes pratiques de sécurité informatique ? (Une réponse au choix)',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Nous ne faisons pas cela.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous le faisons en interne sur une base informelle.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous le faisons sur une base formelle (avec des standards) en utilisant nos compétences générales.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous le faisons en interne sur une base formelle (avec des normes) en utilisant des compétences d\'experts.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Nous utilisons un expert externe pour évaluation (en utilisant des normes).',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'slider',
                        'question'=>'À quel point êtes-vous préparés pour les aspects suivants de votre évaluation et mise en oeuvre de la conformité au RGPD ?',
                        'name'=>'q11',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Connaissance des obligations',
                                'from'=>'Non préparé',
                                'to'=>'Très bien préparé',
                                'name'=>'q11.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Évaluation des capacités et des lacunes',
                                'from'=>'Non préparé',
                                'to'=>'Très bien préparé',
                                'name'=>'q11.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Planification de la mise en oeuvre',
                                'from'=>'Non préparé',
                                'to'=>'Très bien préparé',
                                'name'=>'q11.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Mise en oeuvre',
                                'from'=>'Non préparé',
                                'to'=>'Très bien préparé',
                                'name'=>'q11.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Amélioration continue/meilleures pratiques au-delà du RGPD lui-même (au-delà de la réglementation)',
                                'from'=>'Non préparé',
                                'to'=>'Très bien préparé',
                                'name'=>'q11.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Compréhension de la réduction des conséquences par une détection/restauration au plus tôt.',
                                'from'=>'Non préparé',
                                'to'=>'Très bien préparé',
                                'name'=>'q11.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page4' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>'Vos investissements dans les produits ou solutions de sécurité informatique sont-ils plutôt tactiques (produits ponctuels/répondant à un besoin) ou stratégiques (éléments d\'un plan) ? (Une réponse au choix)',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'Nos achats sont plutôt tactiques (produits ponctuels) lorsque des problèmes surviennent.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nos achats sont la plupart du temps tactiques lorsque des problèmes surviennent, mais nous faisons quelques achats stratégiques.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nos achats tactiques et nos achats stratégiques sont équilibrés.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nos achats sont la plupart du temps stratégiques, mais nous ferons des achats tactiques en cas de problème.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Nos achats sont plutôt toujours stratégiques.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'À quelle fréquence informez-vous l\'entreprise de l\'état de la sécurité informatique ? Une seule réponse.',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Nous ne le faisons pas du tout',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'À la demande',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Annuellement',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Tous les trimestres',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Mensuellement',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Toutes les semaines',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Chaque jour',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Chaque heure',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'De façon continue',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Supérieur',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'Quel est votre principal moyen de gestion de votre infrastructure de sécurité informatique ? Une seule réponse.',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'Très personnalisé, en utilisant des feuilles de calcul, etc.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous utilisons principalement des outils « clé en main » de nos fournisseurs de sécurité.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous utilisons une combinaison d\'outils de gestion spécialisés avec quelques outils « clé en main ».',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous utilisons principalement des outils spécialisés pour la gestion de la sécurité.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous utilisons une suite de gestion de la sécurité de bout en bout.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Nous utilisons un partenaire certifié pour nous aider à gérer notre infrastructure de sécurité informatique.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'button',
                        'question'=>'Quel est le niveau d\'automatisation de votre gestion de la sécurité informatique ? Une seule réponse.',
                        'name'=>'q15',
                        'options'=>array(
                            array(
                                'label'=>'Procédures manuelles exclusivement',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Principalement des procédures manuelles avec un peu d\'automatisation',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Un bon équilibre entre automatisation et procédures manuelles',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Principalement automatisation avec quelques procédures manuelles',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Automatisation totale',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'Quelle évolution prévoyez-vous de donner à votre utilisation de l\'automatisation ?',
                        'name'=>'q16',
                        'options'=>array(
                            array(
                                'label'=>'Diminution importante',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Inférieur',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Légère diminution',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Inférieur',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Stabilité',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Légère augmentation',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Augmentation importante',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Supérieur',
                                ]
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'groupradio',
                        'question'=>'Utilisez-vous les moyens suivants pour la sécurité informatique – défense ?',
                        'name'=>'q17',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'NGFW (pare-feu de nouvelle génération)
',
                                'name'=>'q17.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'IPS/IDS (détection d\'intrusion/protection)',
                                'name'=>'q17.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gestion de la vulnérabilité',
                                'name'=>'q17.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Micro segmentation (séparation à grains fins et isolement du trafic entre des hôtes ou domaines spécifiés)',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gestion de la sécurité unifiée (échange de données et d\'informations entre machines et outils).',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Service professionnel tierce partie de sécurité (avant-vente/conception/mise en oeuvre)',
                                'name'=>'q17.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
            ),
            'page10' => array(
                'title' => 'Gestion des cyber-risques : mise en œuvre et protection',
                'questions' => array(
                    'q25'=>array(
                        'type'=>'button',
                        'question'=>'Quel énoncé décrit l\'étendue de votre utilisation de fournisseurs de services de sécurité gérés ? (Une seule réponse)',
                        'name'=>'q25',
                        'options'=>array(
                            array(
                                'label'=>'Nous ne les utilisons pas du tout.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous les utilisons de façon limitée, mais nous préférons agir en interne.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous les utilisons de façon équilibrée.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Nous préférons les utiliser plutôt que d\'agir en interne.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Nous les utilisons intensivement autant que possible.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            )
                        )
                    )
                )
            )
        )
    ),
    'cyber-risk-management-breach-detection-and-remediation' => array(
        'title' => 'Gestion des cyber-risques : détection des brèches et résolution',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Gestion des cyber-risques : détection des brèches et résolution',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'groupradio',
                        'question'=>'Utilisez-vous les techniques suivantes pour la sécurité informatique – détection de transgression ?',
                        'name'=>'q18',
                        'options'=>array(
                            array(
                                'label'=>'Services de renseignement sur les menaces',
                                'name'=>'q18.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Analyses en temps réel',
                                'name'=>'q18.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Protection avancée contre les menaces/bac à sable',
                                'name'=>'q18.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Intelligence artificielle/heuristique',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Recherche des logiciels malveillants',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page2' => array(
                'title' => 'Gestion des cyber-risques : détection des brèches et résolution',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'groupradio',
                        'question'=>'Utilisez-vous les techniques suivantes pour la sécurité – réaction à une transgression ?',
                        'name'=>'q19',
                        'options'=>array(
                            array(
                                'label'=>'Pot de miel/collecte de renseignements',
                                'name'=>'q19.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Enregistrement et analyse criminalistiques',
                                'name'=>'q19.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Basculement/restauration du système',
                                'name'=>'q19.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Équipes tigre/d\'intervention',
                                'name'=>'q19.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Partenaire externe pour réaction à un incident',
                                'name'=>'q19.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page3' => array(
                'title' => 'Gestion des cyber-risques : détection des brèches et résolution',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'groupradio',
                        'question'=>'Utilisez-vous les techniques suivantes pour la sécurité – réaction à une alerte d’infiltration dans vos systèmes ?',
                        'name'=>'q20',
                        'options'=>array(
                            array(
                                'label'=>'Plan de réponse automatisé (exemple de machine learning)',
                                'name'=>'q20.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Supérieur',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Politique de mise à jour',
                                'name'=>'q20.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Politique de reprise d\'activité',
                                'name'=>'q20.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Inférieur',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Fournisseurs externes de reprise d\'activité',
                                'name'=>'q20.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Évaluations de compromis',
                                'name'=>'q20.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page4' => array(
                'title' => 'Gestion des cyber-risques : détection des brèches et résolution',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'groupradio',
                        'question'=>'Avez-vous pris les actions suivantes pour comprendre votre profil de cyber-risque ?',
                        'name'=>'q21',
                        'options'=>array(
                            array(
                                'label'=>'Avoir évalué votre risque de subir une cyber-transgression',
                                'name'=>'q21.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Comprendre l\'ampleur de l\'exposition potentielle',
                                'name'=>'q21.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Avoir évalué les données critiques',
                                'name'=>'q21.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Comprendre le positionnement de la chaîne logistique étendue ou des partenaires',
                                'name'=>'q21.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Supérieur',
                                            'stage3' => 'Supérieur',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Avoir élaboré un plan de réaction à une transgression de sécurité',
                                'name'=>'q21.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Supérieur',
                                            'stage2' => 'Satisfaisant',
                                            'stage3' => 'Satisfaisant',
                                            'stage4' => 'Satisfaisant',
                                            'stage5' => 'Satisfaisant',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Satisfaisant',
                                            'stage2' => 'Inférieur',
                                            'stage3' => 'Inférieur',
                                            'stage4' => 'Inférieur',
                                            'stage5' => 'Inférieur',
                                        ]
                                    )
                                )
                            ),
                        )
                    )
                )
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false
            ),
            'page5' => array(
                'title' => 'Gestion des cyber-risques : détection des brèches et résolution',
                'questions' => array(
                    'q23'=>array(
                        'type'=>'button',
                        'question'=>'À quelle fréquence faites-vous vérifier par un tiers vos capacités de sécurité informatique et défense ? Une seule réponse',
                        'name'=>'q23',
                        'options'=>array(
                            array(
                                'label'=>'Jamais',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'À quelques années d\'intervalle',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Tous les ans',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Tous les 6 mois',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Tous les trimestres',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Mensuellement',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Toutes les semaines',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'De façon continue',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Supérieur',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Gestion des cyber-risques : détection des brèches et résolution',
                'questions' => array(
                    'q24'=>array(
                        'type'=>'button',
                        'question'=>'À quelle fréquence testez-vous vos plans de réaction à un incident de cyber-transgression ? Une seule réponse.',
                        'name'=>'q24',
                        'options'=>array(
                            array(
                                'label'=>'Jamais',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Inférieur',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'À quelques années d\'intervalle',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Satisfaisant',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Tous les ans',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Satisfaisant',
                                    'stage3' => 'Inférieur',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Tous les 6 mois',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Satisfaisant',
                                    'stage4' => 'Inférieur',
                                    'stage5' => 'Inférieur',
                                ]
                            ),
                            array(
                                'label'=>'Tous les trimestres',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Satisfaisant',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Mensuellement',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'Toutes les semaines',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Satisfaisant',
                                ]
                            ),
                            array(
                                'label'=>'De façon continue',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Supérieur',
                                    'stage2' => 'Supérieur',
                                    'stage3' => 'Supérieur',
                                    'stage4' => 'Supérieur',
                                    'stage5' => 'Supérieur',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    )
);
