<?php
//7 Symanted GDPR
return array(
    'gdpr' => array(
        'title' => 'GDPR',
        'class' => 'sec1',
        'icon' => 'icon-gdpr',
        'display' => true,
        'complete' => false,
        'sub-report' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Approach to IT',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'radio',
                        'question'=>'Lequel des énoncés suivants décrit le mieux l\'approche de votre entreprise en matière de conformité au GDPR <span class="small">(en choisir 1 seul)</span>',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Nous ne savons pas ce qu\'est le GDPR et comment il va nous affecter',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous commençons juste à prendre connaissance des exigences associées au RGPD',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous voulons être suffisamment en conformité au GDPR pour éviter des audits et des amendes',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous avons l\'intention d\'utiliser notre conformité au GDPR comme un différenciateur concurrentiel',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous sommes déjà en conformité et vendons ou partageons nos meilleures pratiques',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q2'=> array(
                        'type'=>'checkbox',
                        'question'=>'Sur quels éléments spécifiques du GDPR pensez-vous que votre entreprise devra se concentrer le plus ? <span class="small">Sélectionnez votre top 3</span>',
                        'name'=>'q2',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>array(
                            array(
                                'label'=>'Évaluer et classer correctement les données',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Identifier les applications qui utilisent des données relevant du GDPR',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Effectuer une analyse du flux de données',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Examiner et améliorer la gestion des identités et des accès',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Établir des processus de documentation conformes aux exigences de responsabilisation',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Communication interne/formation des employés',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Introduire « la vie privée dès la conception » et « la vie privée par défaut »',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q3' => array(
                        'type'=>'checkbox',
                        'question'=>'Laquelle de ces exigences en matière de GDPR constituera le plus grand défi pour votre entreprise ? <span class="small">Sélectionnez votre top 3</span>',
                        'name'=>'q3',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>array(
                            array(
                                'label'=>'Portabilité des données',
                                'hint'=>'Nécessité de fournir sur demande des données dans un format lisible par une machine',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Réviser la demande d\'accès aux données d\'une personne',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fournir une notification de violation de données dans les 72 heures suivant la détection',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Protection des données dès la conception et par défaut',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Chiffrement et/ou pseudonymisation de données',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Définir ce que « à la pointe de la technologie » signifie pour notre entreprise',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Définir des cas d\'utilisation des données et de gestion du consentement',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Adopter le profilage client en conformité au GDPR',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Gérer les fournisseurs de Cloud, applications de Cloud et transferts internationaux de données.',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q4' => array(
                        'type'=>'radio',
                        'question'=>'Dans quelle mesure êtes-vous sûr de pouvoir identifier et localiser chaque instance de données personnelles au niveau individuel dans vos systèmes ? <span class="small">(Par exemple, si une personne demande un enregistrement de données que vous détenez ou le retrait de ses données, y compris dans les systèmes qui ne sont pas entièrement contrôlés par votre service informatique, tels que les applications liées au Cloud)</span>',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'Pas sûr du tout',
                                'hint'=>'Nous pourrions trouver moins de 20 % des instances',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Peu sûr',
                                'hint'=>'Nous pourrions trouver plus de 20 % des instances',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Moyennement sûr',
                                'hint'=>'Nous pourrions trouver plus de 40 % des instances',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Très sûr',
                                'hint'=>'Nous pourrions trouver plus de 60 % des instances',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Entièrement sûr',
                                'hint'=>'Nous pourrions trouver toutes les instances',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q5' => array(
                        'type'=>'slider',
                        'question'=>'À un niveau élevé de la hiérarchie, votre entreprise connaît-elle aujourd\'hui chacun des types de données suivants ?',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'Nous connaissons nos informations structurées',
                                'hint'=>'(bases de données, entrepôts de données, systèmes de gestion du contenu)',
                                'name'=>'q5.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Nous connaissons nos informations non structurées',
                                'hint'=>'(fichiers, dossiers, classeurs, documents, e-mails, etc.)',
                                'name'=>'q5.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Nous connaissons nos données non pertinentes',
                                'hint'=>'(données sans aucune valeur commerciale, redondantes, obsolètes, triviales)',
                                'name'=>'q5.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Nous savons qui est propriétaire des données et qui peut y accéder',
                                'name'=>'q5.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Nous savons combien de temps nous devons conserver les données',
                                'name'=>'q5.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Nous savons quand nous devons/pouvons supprimer des données',
                                'name'=>'q5.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Nous savons quel règlement s\'applique aux catégories particulières de données',
                                'name'=>'q5.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Nous connaissons toutes les copies de nos données personnelles en notre possession',
                                'hint'=>'(en sauvegarde, en test/développement, en site de reprise après sinistre, sur les appareils mobiles, dans le Cloud)',
                                'name'=>'q5.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Oui',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Non',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q6' => array(
                        'type'=>'radio',
                        'question'=>'Quel effet aura le GDPR sur l\'utilisation de vos services Cloud ?',
                        'name'=>'q6',
                        'required' > 1,
                        'options'=>array(
                            array(
                                'label'=>'Il nous empêchera complètement d\'utiliser le Cloud',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Il faudra passer aux fournisseurs ou centres de données de Cloud nationaux',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Il faudra passer aux centres de données de Cloud régionaux (en Europe) mais pas nationaux',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous n\'utilisons pas les services Cloud',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Nous allons continuer à utiliser les services Cloud mais allons améliorer notre protection des données (par exemple, via des processus, prévention de pertes de données ou tokenisation)',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Aucun impact : nous allons continuer à utiliser les services de Cloud comme avant',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q7' => array(
                        'type'=>'button',
                        'question'=>'En ce qui concerne le leadership de votre programme GDPR, votre entreprise a-t-elle créé une équipe polyvalente de conformité ou un conseil de gouvernance qui implique les services de Gouvernance, risques et conformité, le service informatique ainsi que les acteurs opérationnels ?',
                        'name'=>'q7',
                        'ignore' => true,
                        'options'=>array(
                            array(
                                'label'=>'Oui, l\'équipe est entièrement créée',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Oui, l\'équipe est en cours de création mais pas encore totalement mise en place',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non, mais cela est prévu dans les 12 mois à venir',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Non',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q8' => array(
                        'type'=>'slider',
                        'question'=>'Dans quelle mesure vous inquiétez-vous des conséquences éventuelles du GDPR ? <span class="small">1 signifie pas inquiet du tout et 5 extrêmement inquiet</span>',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Recevoir une amende nous inquiète',
                                'from'=>'Pas d\'inquiétude',
                                'to'=>'Extrêmement inquiets',
                                'name'=>'q8.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'La loi sur les recours collectifs nous inquiète',
                                'from'=>'Pas d\'inquiétude',
                                'to'=>'Extrêmement inquiets',
                                'name'=>'q8.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'La notification obligatoire de violation nous inquiète',
                                'from'=>'Pas d\'inquiétude',
                                'to'=>'Extrêmement inquiets',
                                'name'=>'q8.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'La suspension des activités de traitement des données par le régulateur nous inquiète',
                                'from'=>'Pas d\'inquiétude',
                                'to'=>'Extrêmement inquiets',
                                'name'=>'q8.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Les risques d\'atteinte à la réputation pour non-conformité nous inquiètent',
                                'from'=>'Pas d\'inquiétude',
                                'to'=>'Extrêmement inquiets',
                                'name'=>'q8.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q9' => array(
                        'type'=>'checkbox',
                        'question'=>'Qu\'est-ce qui limite votre capacité à instaurer une pleine conformité au GDPR dans le cadre de votre gestion des données ? <span class="small">(Sélectionnez 3 réponses)</span>',
                        'name'=>'q9',
                        'required'=>3,
                        'max'=>3,
                        'options'=>array(
                            array(
                                'label'=>'Manque de connaissances sur la conformité au GDPR',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Manque de budget',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Ressources limitées',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Priorités contradictoires',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Collaboration insuffisante entre l\'équipe de conformité au GDPR et les autres acteurs',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fragmentation ou manque d\'intégration des Big Data, rapports et portefeuille de solutions d\'analyse',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
        ),
    )
);