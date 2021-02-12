<?php

//fireeye
return [
    'stage1' => 'Ad hoc',
    'stage2' => 'Opportuniste',
    'stage3' => 'Reproductible',
    'stage4' => 'Maîtrisé',
    'stage5' => 'Optimisé',
    'question-title' => 'Classement des performances par question',
    'question-intro' => '
        <p>
            Nous allons maintenant analyser votre performance dans trois domaines clés de Préparation au cyber-risque. Dans chaque cas, nous évaluerons comment vous vous situez par rapport à d’autres organisations affichant le même niveau de préparation, soit <strong>:rating</strong>. Pour ce faire, nous examinerons les domaines dans lesquels votre préparation est inférieure, satisfaisante ou supérieure par rapport à vos pairs.
        </p>
        <p>
            Si vous vous situez à un niveau satisfaisant, vous êtes dans la moyenne des autres entreprises en termes de niveau de préparation. Si vous vous situez à un niveau supérieur, cela signifie que vous excellez dans le domaine en question et que vous devriez identifier quels autres domaines ont besoin d’amélioration pour avoir une approche équilibrée. Si vous vous situez à un niveau inférieur, vous devez concentrer votre attention et vos investissements sur ce domaine afin d’ajuster votre Préparation au cyber-risque.
        </p>

Si vous obtenez une note satisfaisante ou supérieure dans toutes les sections, vous êtes prêt à évoluer rapidement vers un niveau plus élevé de préparation."
    ',
    'completecopy' => [
        'graphtitle' => 'Votre préparation au cyber-risque',
        'fullreport' => 'Would you like the full report that provides you with essential guidance for advancing your Cyber Risk strategy?',
        'provide' => 'Nous pouvons vous envoyer le rapport complet directement par e-mail. Veuillez simplement nous fournir votre nom et votre adresse e-mail afin de recevoir un lien pour pouvoir le télécharger.',
        'stage1' => '
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Ad hoc, ce qui représente le plus bas des cinq niveaux d’évaluation.
            </p>
            <p>
                Vous faites partie des 10 % d’entreprises situées à ce niveau ainsi de nombreux domaines peuvent être améliorés. Votre entreprise et vos données courent un risque sévère si vous ne prenez aucune mesure d’amélioration urgente, et vous êtes susceptible de vous voir infliger des pénalités et des amendes reglementées selon votre secteur d\'activité dans le cas d’une violation de données qui entraînerait la perte d’informations personnelles ou confidentielles.
            </p>
        ',
        'stage2' => '
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Opportuniste, ce qui représente le second niveau le plus bas des cinq niveaux d’évaluation. 
            </p>
            <p>
                Vous faites partie des 20 % d’entreprises situées à ce niveau ainsi de nombreux domaines peuvent être améliorés. Votre activité et vos données courent un risque si vous ne prenez aucune mesure d’amélioration urgente. Vous êtes susceptible de vous voir infliger des pénalités et des amendes réglementées selon votre secteur d\'activité dans le cas d’une violation de données qui entraînerait la perte d’informations personnelles ou confidentielles.
            </p>
        ',
        'stage3' => '
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Reproductible, ce qui représente le niveau moyen des cinq niveaux d’évaluation.
            </p>
            <p>
                Vous êtes généralement dans la moyenne en termes de capacités de gestion du cyber-risque, mais vous pouvez encore vous améliorer pour réduire votre vulnérabilité face à une cyber-attaque qui pourrait entraîner des pénalités ou des sanctions.
            </p>
        ',
        'stage4' => '
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Maîtrisé, ce qui représente le second niveau le plus haut des cinq niveaux d’évaluation. 
            </p>
            <p>
                Vous êtes généralement au-dessus de la moyenne, parmi les 20 % d’entreprises situées à ce niveau en termes de capacités de gestion du cyber-risque. Cependant, vous pouvez encore vous améliorer pour réduire votre vulnérabilité face à une cyber-attaque qui pourrait entraîner des pénalités ou des sanctions.
            </p>
        ',
        'stage5' => '
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Optimisé, ce qui représente le niveau le plus élevé des cinq niveaux d’évaluation. 
            </p>
            <p>
                Vous êtes bien au-dessus de la moyenne et vous faites partie des 5 % d’entreprises situées à ce niveau en termes de capacités de gestion du cyber-risque. Bien que vous fassiez partie des meilleurs, le travail n\'est jamais totalement terminé et vous pouvez toujours envisager des améliorations dans divers domaines afin de réduire l’éventualité d’une violation des données.
            </p>
        ',
        'instruction' => '
            <p>
                Nous pouvons vous envoyer le rapport complet directement par e-mail.<br/>
                Veuillez simplement nous fournir votre nom et votre adresse e-mail afin de recevoir un lien pour pouvoir le télécharger.
            </p>
        ',
    ],
    'complete_thankyou' => 'Merci :Fname,',
    'complete_body' => 'Votre rapport personnalisé vous sera envoyé par e-mail très bientôt. En attendant, pourquoi ne pas tweeter vos résultats pour les comparer à ceux de vos abonnés?',
    'complete_tweet' => 'Je viens de participer au test d’évaluation cyber-risque @IDCUK sponsorisé par @fireeye. Nous sommes à un niveau de maturité répétable. Intéressé ?', // http://bit.ly/2g8WN1d
    'email'=>[
        'subject' => 'IDC Report',
        'hi' => 'Bonjour :Fname',
        'body' => '
            Comme promis, voici le lien pour télécharger votre rapport d’Évaluation du cyber-risque.<br/>
            Ce rapport classe vos résultats par catégorie et vous aide à vous situer par rapport à d’autres organisations.
        ',
        'link' => 'Télécharger le rapport',
        'extra' => 'Une fois que vous avez digéré le rapport pourquoi ne pas visiter <a href="http://www.fireeye.com" style="color:#E66B6B">FireEye</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team',
    ],
    'introduction_title' => 'Résumé du rapport personnalisé et classement de la performance globale',
    'introduction' => '',
    'introduction-image' => 'report.jpg',
    'overall' => [
        'title'=>'Votre approche globale de sécurité',
        'graph-title'=>'Comment vous situez globalement',
        'image'=>'',
        'overall_country_graph-title' => 'Votre position par rapport à d’autre entreprises dans votre pays',
        'overall_size_graph-title' => 'Votre position par rapport à d’autre entreprises de taille similaire',
        'stage1'=>'
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Ad hoc, ce qui représente le plus bas des cinq niveaux d’évaluation. 
            </p>
            <p>
                Vous faites partie des 10 % d’entreprises situées à ce niveau; de nombreux domaines peuvent être améliorés. Votre entreprise et vos données courent un risque sévère si vous ne prenez aucune mesure d’amélioration urgente, et vous êtes susceptible de vous voir infliger des pénalités et des amendes réglementées par rapport à votre secteur d\'activité dans le cas d’une violation de données qui entraînerait la perte d’informations personnelles ou confidentielles.
            </p>
        ',
        'stage2'=>'
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Opportuniste, ce qui représente le second niveau le plus bas des cinq niveaux d’évaluation. 
            </p>
            <p>
                Vous faites partie des 20 % d’entreprises situées à ce niveau, et de nombreux domaines peuvent être améliorés. Votre activité et vos données courent un risque si vous ne prenez aucune mesure d’amélioration urgente. Vous êtes susceptible de vous voir infliger des pénalités et des amendes réglementées par rapport à votre secteur d\'activité dans le cas d’une violation de données qui entraînerait la perte d’informations personnelles ou confidentielles.
            </p>
        ',
        'stage3'=>'
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Reproductible, ce qui représente le niveau moyen des cinq niveaux d’évaluation.
            </p>
            <p>
                Vous êtes généralement dans la moyenne en termes de capacités de gestion du cyber-risque, mais vous pouvez encore vous améliorer pour réduire votre vulnérabilité face à une cyber-attaque qui pourrait entraîner des pénalités ou des sanctions.
            </p>
        ',
        'stage4'=>'
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Maîtrisé, ce qui représente le second niveau le plus haut des cinq niveaux d’évaluation.  
            </p>
            <p>
                Vous êtes généralement au-dessus de la moyenne, parmi les 20 % d’entreprises situées à ce niveau en termes de capacités de gestion du cyber-risque. Cependant, vous pouvez encore vous améliorer pour réduire votre vulnérabilité face à une cyber-attaque qui pourrait entraîner des pénalités ou des sanctions.
            </p>
        ',
        'stage5'=>'
            <p>
                Merci d’avoir complété l\'évaluation du cyber-risque IDC. Selon vos réponses, votre niveau est Optimisé, ce qui représente le niveau le plus élevé des cinq niveaux d’évaluation. 
            </p>
            <p>
                Vous êtes bien au-dessus de la moyenne et vous faites partie des 5 % d’entreprises situées à ce niveau en termes de capacités de gestion du cyber-risque. Bien que vous fassiez partie des meilleurs, le travail n\'est jamais totalement terminé et vous pouvez toujours envisager des améliorations dans divers domaines afin de réduire toute violation éventuelle des données.
            </p>
        ',
    ],
    'cyber-risk-management-and-the-business' => [
        'title'=>'Gestion des cyber-risques et de l’activité',
        'image'=>'cloud-vision-and-strategy.jpg',
        'pb'=>'pb',
        'stage1'=>'
            stage 1 man
        ',
        'stage2'=>'
            stage 2
        ',
        'stage3'=>'
            stage 3
        ',
        'stage4'=>'
            stage 4
        ',
        'stage5'=>'
            Stage 5
        ',
        'behind' => '
            <p>
                Attention ! Vous vous situez à un niveau inférieur dans ce domaine essentiel de la gestion du cyber-risque, et vous devez immédiatement procéder à des améliorations pour réduire votre exposition aux cyber-menaces ainsi qu’à des pénalités potentielles ou une perte de réputation.
            </p>
        ',
        'inline' => '
            <p>
                Impressionnant ! Vous vous situez à un niveau satisfaisant dans ce domaine essentiel de la gestion du cyber-risque, mais vous devriez tout de même envisager de nouveaux moyens d’améliorer votre capacité à sécuriser votre domaine informatique.
            </p>
        ',
        'ahead' => '
            <p>
                Excellent ! Vous vous situez bien au-dessus de vos pairs dans ce domaine de la gestion du cyber-risque, mais vous devriez tout de même réexaminer vos procédures pour garder une longueur d’avance.
            </p>
        ',
    ],
    'cyber-risk-management-operations-and-defence' => [
        'title'=> 'Gestion des cyber-risques : mise en œuvre et protection',
        'image'=>'processes-and-skill-sets.jpg',
        'pb'=>'pb',
        'stage1'=>'
            stage 1
        ',
        'stage2'=>'
            stage 2
        ',
        'stage3'=>'
            stage 3
        ',
        'stage4'=>'
            stage 4
        ',
        'stage5'=>'
            Stage 5
        ',
        'behind' => '
            <p>
                Alerte ! Vous vous situez bien en deçà de vos pairs dans ce domaine critique lié à la détection et la suppression des failles de sécurité, et vous devriez vous concentrer sur la modernisation de vos capacités.
            </p>
        ',
        'inline' => '
            <p>
                Bien joué ! Vous vous situez à un niveau satisfaisant dans ce domaine de la gestion du cyber-risque, mais vous devriez envisager de nouvelles approches pour vous aider à améliorer votre Préparation globale au cyber-risque.
            </p>
        ',
        'ahead' => '
            <p>
                En tête de classement ! Vous vous situez bien au-dessus de vos pairs dans ce domaine de la gestion du cyber-risque, mais vous devriez toujours envisager d’autres moyens de vous améliorer à mesure qu’apparaissent de nouvelles approches.
            </p>
        ',
    ],
    'cyber-risk-management-breach-detection-and-remediation' => [
        'title'=> 'Gestion des cyber-risques : détection des brèches et résolution',
        'image'=>'business-mix.jpg',
        'pb'=>'pb',
        'stage1'=>'
            stage 1
        ',
        'stage2'=>'
            stage 2
        ',
        'stage3'=>'
            stage 3
        ',
        'stage4'=>'
            stage 4
        ',
        'stage5'=>'
            Stage 5
        ',
        'behind' => '
            <p>
                Au travail ! Vous vous situez bien en deçà de vos pairs en termes de gestion du cyber-risque lié à votre activité. Vous devriez envisager une relation plus étroite avec votre activité afin d’améliorer votre approche de la gestion et du financement de votre Préparation au cyber-risque.
            </p>
        ',
        'inline' => '
            <p>
                Bonne performance ! Vous vous situez au même niveau que vos pairs en termes de gestion du cyber-risque lié à votre activité. Vous devriez toutefois envisager une relation plus étroite avec votre activité afin d’améliorer votre Préparation globale au cyber-risque si vous souhaitez atteindre des niveaux supérieurs de préparation.
            </p>
        ',
        'ahead' => '
            <p>
               Excellent ! Vous vous situez bien au-dessus de vos pairs en termes de gestion du cyber-risque lié à votre activité. Vous affichez une excellente performance en gestion du cyber-risque mais vous ne devriez pas vous reposer sur vos lauriers, et il est recommandé de réévaluer continuellement ce que vous faites.
            </p>
        ',
    ],
    'questions' => [
        'q1'=>[
            'behind' => '
                <p>
                   Vous avez besoin d’améliorer la perception qu’ont les membres de la direction du rôle de l’informatique afin qu’ils comprennent en quoi la transformation numérique peut mener l’entreprise sur la voie du succès par le biais de meilleurs rendements ou la conquête de nouveaux marchés.
                </p>
            ',
            'inline' => '
                <p>
                    Vous devriez déterminer comment améliorer la perception et la compréhension des responsables d\'entreprise de domaines dans lesquels l’informatique peut améliorer la rentabilité et la compétitivité.

                </p>
            ',
            'ahead' => '
                <p>
                    Gardez à l’esprit que les technologies et les capacités sont en constante évolution et que vous devriez réévaluer régulièrement ce que vous faites et comment vous le faites.
                </p>
            ',
        ],
        'q2'=>[
            'behind' => '
                <p>
                    Cherchez de nouvelles manières de déployer et de gérer l’informatique par le biais d’approches telles que l’automatisation et la gestion des risques, afin d’offrir de nouveaux services rapidement et en toute confiance.
                </p>
            ',
            'inline' => '
                <p>
                    Cherchez de nouvelles manières d’améliorer vos capacités dans ce domaine par le biais de la stratégie et de l’automatisation, afin de fournir des applications et des services rapidement et en toute sécurité.
                </p>
            ',
            'ahead' => '
                <p>
                    Bien que vos efforts d’amélioration de la gestion du cyber-risque puissent s’appliquer à d’autres domaines, vous devriez continuer à adopter et à optimiser des capacités avancées en termes de stratégie, de gestion, d’automatisation et d’orchestration.
                </p>
            ',
        ],
        'q3'=>[
            'behind' => '
                <p>
                    Une approche plus mature du risque vous aidera à atteindre un meilleur équilibre entre l’opérabilité et la sécurité de votre environnement, en gardant à l’esprit que vos actifs stratégiques doivent être protégés à tout prix.  Essayez d’adopter une approche basée sur le risque dans les domaines où un compromis est nécessaire afin de faire progresser vos objectifs de développement de l’activité.
                </p>
            ',
            'inline' => '
                <p>
                    Votre performance est satisfaisante, mais vous pouvez vous améliorer. Les entreprises les plus évoluées sont capables d’identifier et de gérer activement les risques pour faciliter le développement de leur activité. Essayez d’avoir un rôle plus actif dans l’identification, l’analyse et la gestion du risque, tout en développant une compréhension profonde de la tolérance au risque de votre activité.
                </p>
            ',
            'ahead' => '
                <p>
                    Pour conserver votre avance, vous devez continuer à repousser les limites.  Efforcez-vous d’identifier les domaines où des compromis sont possibles, en gardant à l’esprit que vos actifs stratégiques doivent absolument rester sous votre contrôle, afin de trouver de nouvelles opportunités de développement.
                </p>
            ',
        ],
        'q4'=>[
            'behind' => '
                <p>
                    Envisagez de mettre en place un processus formel d’évaluation des risques et développez une approche proactive de détection de violation de données pour savoir où se trouvent les risques et réagir en adéquation lorsqu’ils se concrétisent. Des étapes supplémentaires peuvent ensuite être ajoutées pour améliorer votre approche, comme le développement de plans de communication internes et externes, un plan de notification de la violation de données et un plan de remédiation.
                </p>
            ',
            'inline' => '
                <p>
                    Envisagez de développer un plan de notification de la violation de données – particulièrement important étant donné que ce sera une exigence de la future réglementation européenne relative à la protection des données pour le traitement des données personnelles des citoyens de l’UE – ainsi qu’un plan de réponse global en cas de violation de données qui peut fournir une orientation sur les mesures à prendre à chaque étape du processus.
                </p>
            ',
            'ahead' => '
                <p>
                    Vous avez une longueur d’avance en termes de gestion des risques d’atteinte à la sécurité et de planification de vos réponses en cas d’attaque. Toutefois, pour l\'étape suivante, cherchez comment maximiser votre assurance cybercriminalité pour limiter les coûts potentiels d’une violation de données, mais également pour qu’elle devienne un moteur d’excellence – et une source potentielle d’avantage concurrentiel au niveau du traitement des données de clients.
                </p>
            ',
        ],
        'q5'=>[
            'behind' => '
                <p>
                    Envisagez la nécessité commercial de la transformation numérique et l’exposition au risque qu’elle entraîne, déterminez comment le service informatique et l’entreprise peuvent collaborer pour développer une approche du cyber-risque favorable aux deux parties et à la réalisation des objectifs commerciaux.
                </p>
            ',
            'inline' => '
                <p>
                    Envisagez comment gérer et maîtriser le cyber-risque à l’échelle de l’entreprise : la réalité des opérations commerciales au sein de l’environnement cloud et mobile d’aujourd’hui signifie que l’exposition potentielle au cyber-risque concerne l’entreprise dans son ensemble.
                </p>
            ',
            'ahead' => '
                <p>
                    Envisagez comment intégrer la gestion du cyber-risque dans le développement de nouvelles priorités commerciales afin de vous assurer de l’identification et de la gestion proactives du cyber-risque en vue de faciliter les objectifs de l’entreprise.
                </p>
            ',
        ],
        'q6'=>[
            'behind' => '
                <p>
                    Une des meilleures pratiques en gestion du cyber-risque implique un engagement de l’ensemble de la direction et la désignation de responsables de la gestion du risque et de la conformité. Cherchez comment accroître l’implication et la responsabilité au sein de l’entreprise, en incluant notamment les experts en conformité et les responsables des opérations.  Faites appel de manière efficace aux prestataires externes pour évaluer les meilleures pratiques.
                </p>
            ',
            'inline' => '
                <p>
                    Une des meilleures pratiques en gestion du cyber-risque implique l’engagement de l’ensemble de la direction et la désignation de responsables chargés de la gestion du risque et de la conformité. Cherchez comment accroître l’implication et la responsabilité au sein de l’entreprise, en incluant notamment les experts en conformité et les responsables des opérations.  Faites appel de manière efficace aux prestataires externes pour évaluer les meilleures pratiques.
                </p>
            ',
            'ahead' => '
                <p>
                    Afin d’élargir votre cadre de travail, déterminez comment les spécialistes du risque, de la conformité et de la sécurité du Conseil d’administration et de l’entreprise dans son ensemble peuvent apporter une contribution positive au processus. Faites appel de manière efficace aux prestataires externes pour évaluer les meilleures pratiques.
                </p>
            ',
        ],
        'q7'=>[
            'behind' => '
                <p>
                    Il est peu probable que la sécurité soit impliquée avant l’étape d’implémentation du projet (auquel cas elle n’apparaîtra que comme une préoccupation mineure, avec un succès variable), ou même avant qu’un problème ne surgisse (et à ce stade, il est déjà trop tard). Déterminez en quoi la sécurité peut jouer un rôle, tout au moins lors de la phase de planification d’une nouvelle initiative commerciale, voire plus tôt.
                </p>
            ',
            'inline' => '
                <p>
                    Déterminez en quoi la sécurité peut jouer un rôle clé au début de la phase de planification d’une nouvelle initiative commerciale : non en tant que simple composante du projet, mais en tant qu’élément majeur dans le développement et l’implémentation de celui-ci. 
                </p>
            ',
            'ahead' => '
                <p>
                    Déterminez en quoi la sécurité peut devenir un élément majeur dans la planification de nouvelles initiatives. Ensuite, assurez-vous que la sécurité demeure l’une des priorités tout au long du développement, de la phase de test à l’implémentation des projets, et ce, pour l’ensemble de votre activité.
                </p>
            ',
        ],
        'q8'=>[
            'behind' => '
                <p>
                    Développez un plan d’affaires qui démontre que le niveau de budget requis comporte suffisamment d’investissements pour couvrir les opérations essentielles (ainsi que l’exposition au risque si ce niveau n’est pas couvert), si ce n’est les nouvelles initiatives. Il s’agit de la ligne de base adoptée par vos pairs, et a fortiori par les entreprises les plus avancées.
                </p>
            ',
            'inline' => '
                <p>
                    Les entreprises qui opèrent au niveau supérieur disposent de budgets de sécurité informatique disponibles immédiatement (par simple présentation d\'une justification), même pour les initiatives expérimentales. Pour atteindre ce niveau, l’accent mis sur les investissements de sécurité informatique doit dépasser les simples coûts qui peuvent surgir du fait d’une absence d’investissements, pour viser l’impact maximal potentiel qui peut être atteint par le biais de nouvelles dépenses en sécurité informatique.
                </p>
            ',
            'ahead' => '
                <p>
                    Pour parvenir à mettre en œuvre des améliorations supplémentaires, positionnez l’investissement en sécurité comme un instrument qui favorisera la réalisation des objectifs commerciaux de l’entreprise tout en soutenant la croissance du chiffre d’affaires et de la rentabilité.
                </p>
            ',
        ],
        'q9'=>[
            'behind' => '
                <p>
                    Envisagez une plus grande utilisation de ces techniques, ainsi que des techniques de la phase suivante (par ex. filtrage de sécurité du personnel, jumelage).
                </p>
            ',
            'inline' => '
                <p>
                    Des approches telles que l’installation de sas de sécurité pour entrer/sortir et le jumelage doivent devenir des pratiques standard. Commencez ensuite à envisager d’autres techniques plus sophistiquées, comme l’identification biométrique.
                </p>
            ',
            'ahead' => '
                <p>
                    Pour atteindre le niveau suivant, déterminez comment maximiser le point d’intersection entre l’informatique et la sécurité physique à l’aide de techniques d’identification biométrique.
                </p>
            ',
        ],
        'q10'=>[
            'behind' => '
                <p>
                    La gestion des meilleures pratiques de sécurité informatique doit être un processus formel piloté par l’application de normes. Réfléchissez à la manière d’impliquer les ressources qui possèdent des expertises dans ce domaine.
                </p>
            ',
            'inline' => '
                <p>
                    Il s’agit d’un processus formel qui repose sur les expertises. Pour faire avancer ce processus aux niveaux supérieurs, pensez à faire appel à des experts externes pour bénéficier d’une compréhension indépendante des meilleures pratiques dans le contexte de votre organisation.
                </p>
            ',
            'ahead' => '
                <p>
                    Déterminez de quelle manière votre organisation peut devenir non seulement un leader dans la gestion des meilleures pratiques, mais également un chef de file au sein de votre industrie. Cette démarche peut même devenir un avantage concurrentiel par rapport à vos pairs.
                </p>
            ',
        ],
        'q11'=>[
            'behind' => '
                <p>
                    Pour monter dans l’échelle de maturité, appréhendez les obligations engendrées par le règlement général sur la protection des données, planifiez l’implémentation de ces responsabilités puis exécutez-les dans le cadre du plan.
                </p>
            ',
            'inline' => '
                <p>
                    Vous avez probablement déjà anticipé les obligations qu’engendrera le règlement général sur la protection des données, peut-être avez-vous même commencé votre planification pour remédier aux écarts dans vos capacités et cherchez-vous comment adopter les meilleures pratiques pour aller au-delà des exigences réglementaires. Pour atteindre le niveau supérieur de votre groupe de pairs, vous devez concrétiser ces projets.
                </p>
            ',
            'ahead' => '
                <p>
                    Afin de cibler des améliorations supplémentaires, définissez clairement dans quelle mesure vous maîtrisez les technologies « de pointe » et les implémentez à l’aide d’approches basées sur le risque dans votre processus décisionnel. Cette démarche permettra non seulement de limiter votre exposition aux pénalités au titre du règlement général sur la protection des données, mais pourrait également devenir un avantage concurrentiel.
                </p>
            ',
        ],
        'q12'=>[
            'behind' => '
                <p>
                    Les meilleures pratiques en Gestion du cyber-risque s’orientent autour de reporting fréquents ou en temps réel. Travaillez pour améliorer vos capacités de reporting journalier parallèlement à votre analytique afin de passer d’une approche réactive à une approche proactive.
                </p>
            ',
            'inline' => '
                <p>
                    Les meilleures pratiques en Gestion du cyber-risque s’orientent autour du reporting fréquent ou en temps réel. Travaillez pour améliorer vos capacités de reporting journalier parallèlement à votre analytique afin de passer d’une approche réactive à une approche proactive.
                </p>
            ',
            'ahead' => '
                <p>
                    Pour parvenir à vous améliorer, envisagez en quoi le reporting en continu peut devenir plus qu’un simple tableau de bord mais plutôt un moteur dans le processus décisionnel au niveau de l’entreprise par le biais d’une capacité opérationnelle intégrée.
                </p>
            ',
        ],
        'q13'=>[
            'behind' => '
                <p>
                    Les meilleures pratiques en Gestion du cyber-risque s’orientent autour de reporting fréquents ou en temps réel. Travaillez pour améliorer vos capacités de reporting journalier parallèlement à votre analytique afin de passer d’une approche réactive à une approche proactive.
                </p>
            ',
            'inline' => '
                <p>
                    Les meilleures pratiques en Gestion du cyber-risque s’orientent autour du reporting fréquent ou en temps réel. Travaillez pour améliorer vos capacités de reporting journalier parallèlement à votre analytique afin de passer d’une approche réactive à une approche proactive.
                </p>
            ',
            'ahead' => '
                <p>
                    Pour parvenir à vous améliorer, envisagez en quoi le reporting en continu peut devenir plus qu’un simple tableau de bord mais plutôt un moteur dans le processus décisionnel au niveau de l’entreprise par le biais d’une capacité opérationnelle intégrée.
                </p>
            ',
        ],
        'q14'=>[
            'behind' => '
                <p>
                    Il est impossible de sécuriser ce que vous ne parvenez pas à gérer. Une des meilleures pratiques consiste à utiliser un jeu d’outils intégré et l’automatisation pour vous assurer que la politique est appliquée de manière cohérente.
                </p>
            ',
            'inline' => '
                <p>
                    Il est impossible de sécuriser ce que vous ne parvenez pas à gérer. Une des meilleures pratiques consiste à utiliser un jeu d’outils intégré et l’automatisation pour vous assurer que la politique est appliquée de manière cohérente.
                </p>
            ',
            'ahead' => '
                <p>
                    Pour parvenir à des développements supplémentaires dans votre Gestion du cyber-risque, envisagez dans quelle mesure d’autres éléments peuvent être automatisés et intégrés dans une suite de gestion de bout en bout, pour favoriser l’agilité du service informatique.
                </p>
            ',
        ],
        'q15'=>[
            'behind' => '
                <p>
                    Une des meilleures pratiques en Gestion du cyber-risque consiste à utiliser l’automatisation de manière étendue. Déterminez les domaines bénéficiaires de l’automatisation (notamment les domaines à faible valeur et répétitifs, mais également ceux qui nécessitent une réaction rapide) afin d’atteindre un bon équilibre entre les possibilités d’automatisation et la nécessité de conserver certains processus manuels.
                </p>
            ',
            'inline' => '
                <p>
                    Une des meilleures pratiques en Gestion du cyber-risque consiste à utiliser l’automatisation de manière étendue. Déterminez les domaines bénéficiaires de l’automatisation (notamment les domaines à faible valeur et répétitifs, mais également ceux qui nécessitent une réaction rapide) afin d’atteindre un bon équilibre entre les possibilités d’automatisation et la nécessité de conserver certains processus manuels.
                </p>
            ',
            'ahead' => '
                <p>
                    Pour réellement faire partie des meilleurs, envisagez les mesures pouvant être prises pour automatiser et orchestrer les processus de bout en bout chaque fois que cela est possible afin de piloter la Gestion du cyber-risque en termes d’agilité, de qualité et de conformité.
                </p>
            ',
        ],
        'q16'=>[
            'behind' => '
                <p>
                    Une des meilleures pratiques en Gestion du cyber-risque consiste à accroître l’automatisation. Envisagez en quoi l’utilisation de l\'automatisation peut être étendue afin de dynamiser l’efficience et l’efficacité de vos opérations de sécurité informatique.
                </p>
            ',
            'inline' => '
                <p>
                    Une des meilleures pratiques en Gestion du cyber-risque consiste à accroître l’automatisation. Envisagez en quoi l’utilisation de l\'automatisation peut être étendue afin de dynamiser l’efficience et l’efficacité de vos opérations de sécurité informatique.
                </p>
            ',
            'ahead' => '
                <p>
                    Plutôt que simplement vous concentrer sur le potentiel d’extension de l’automatisation, pensez à inclure l’élément humain dans l’équation. Pour renforcer leur impact, déterminez en quoi les initiatives d’automatisation que vous voulez mettre en œuvre peuvent servir à compléter l’action du personnel de sécurité, et améliorer l’efficacité professionnelle de celui-ci en lui permettant de développer ses compétences par le biais de tâches plus complexes.
                </p>
            ',
        ],
        'q17'=>[
            'behind' => '
                <p>
                    La Gestion du cyber-risque la plus évoluée utilise un large éventail de produits de sécurité visant à protéger l’ensemble du réseau d’entreprise. Collaborez avec des spécialistes de services de sécurité professionnels tiers pour vous aider à concevoir et implémenter des approches appropriées, peut également vous permettre de diminuer le temps nécessaire à l\'implantation et d\'augmenter vos capacités. 
                </p>
            ',
            'inline' => '
                <p>
                    La Gestion du cyber-risque la plus évoluée utilise un large éventail de produits de sécurité visant à protéger l’ensemble du réseau d’entreprise. Collaborer avec des MSSP tiers pour vous aider à concevoir et implémenter des approches appropriées peut vous permettre de rationaliser l\'implantation et d’augmenter vos capacités. 
                </p>
            ',
            'ahead' => '
                <p>
                    Pour innover dans ce domaine, considérez l’impact que peuvent avoir les MSSP. Les MSSP peuvent analyser la gestion des outils et des dispositifs de sécurité à l’aide de moteurs de corrélation alimentés par le Big Data et présenter l’information reçue par le biais de tableaux de bord de gestion, en facilitant le pilotage du processus décisionnel par une meilleure compréhension de la nécessité de modifier le positionnement de sécurité en temps réel.
                </p>
            ',
        ],
        'q25'=>[
            'behind' => '
                <p>
                    Pour avancer conformément au niveau de pratiques standard définies par votre groupe de pairs, envisagez en quoi le recours aux MSSP peut venir en complément afin d’atteindre une position d’équilibre entre les opérations internes dans les domaines requis et les MSSP dans d\'autres domaines.
                </p>
            ',
            'inline' => '
                <p>
                    Envisagez comment faire davantage appel aux prestataires tiers et bénéficier de leurs délais d’exécution, de leur base de talents et de leur perspective plus étendue pour améliorer votre approche de la sécurité sans perdre la visibilité et le contrôle sur votre positionnement de sécurité et sans délaisser l\'importance des ressources internes.
                </p>
            ',
            'ahead' => '
                <p>
                    Vous êtes un leader en termes d’approche de votre utilisation des MSSP, car vous y faites largement appel et vous les utilisez de manière équilibrée en tant que canal de prestations complémentaires à vos ressources internes. Pour parvenir à des développements supplémentaires, envisagez d’améliorer votre utilisation des MSSP afin de progresser dans l’implémentation et les opérations liées aux meilleures pratiques.
                </p>
            ',
        ],
        'q18'=>[
            'behind' => '
                <p>
                    La conformité et les meilleures pratiques signifient que la recherche de programmes malveillants et la protection évoluée contre les ATP/les solutions sandbox sont désormais des technologies standard dont vous devriez évaluer les capacités, si ce n’est déjà fait. L’analytique et les services de renseignements sur les menaces offrent une protection avancée contre de nouvelles sources de menaces. Vous devriez donc déterminer si ces technologies pourraient vous aider, en fonction du profil de risque de votre organisation. L’intelligence artificielle et l’heuristique sont principalement destinées aux opérations de sécurité matures et avancées. Gardez-les donc à l’esprit pour une démarche ultérieure.
                </p>
            ',
            'inline' => '
                <p>
                    La conformité et les meilleures pratiques signifient que la recherche de programmes malveillants et la protection évoluée contre les ATP/les solutions sandbox sont désormais des technologies standard dont vous devriez évaluer les capacités, si ce n’est déjà fait. L’analytique et les services de renseignements sur les menaces offrent une protection avancée contre de nouvelles sources de menaces. Vous devriez donc déterminer si ces technologies pourraient vous aider, en fonction du profil de risque de votre organisation. L’intelligence artificielle et l’heuristique sont principalement destinées aux opérations de sécurité matures et avancées. Gardez-les donc à l’esprit pour une démarche ultérieure.
                </p>
            ',
            'ahead' => '
                <p>
                    L’intelligence artificielle et l’heuristique arrivent à maturation. Vous devriez les implémenter, si ce n’est déjà fait, pour pouvoir continuer à viser le leadership.
                </p>
            ',
        ],
        'q19'=>[
            'behind' => '
                <p>
                    La journalisation et l’analyse des données d’expertise ainsi que le basculement/la récupération du système sont des technologies standard et vous devriez les implémenter, si ce n\'est déjà fait. La plupart des grandes entreprises (et des entreprises de taille moins importantes) font désormais appel à des prestataires externes de service de réponses aux incidents, sur base forfaitaire ou à la demande. Déterminez si ces ressources vous permettent de réduire le profil de risque de votre organisation. Les Honeypot/la collecte de renseignements et les équipes d’intervention sont principalement adaptés aux opérations de sécurité de haut volume, matures et avancées. Ils pourraient donc constituer une étape ultérieure.
                </p>
            ',
            'inline' => '
                <p>
                    La journalisation et l’analyse des données d’expertise ainsi que le basculement/la récupération du système sont des technologies standard. La plupart des grandes entreprises (et des entreprises de taille moins importantes) font désormais appel à des prestataires externes de service de réponses aux incidents, sur base forfaitaire ou à la demande, et vous devriez les implémenter si ce n’est déjà fait. Les Honeypot/la collecte de renseignements et les équipes d’intervention ne sont pas uniquement destinés aux grandes entreprises. Déterminez si ces ressources vous permettraient de réduire le profil de risque de votre organisation.
                </p>
            ',
            'ahead' => '
                <p>
                    Les Honeypot/la collecte de renseignements et les équipes d’intervention deviennent des pratiques standard pour les opérations de sécurité de haut volume, matures et avancées, et vous devriez les implémenter si ce n’est déjà fait.
                </p>
            ',
        ],
        'q20'=>[
            'behind' => '
                <p>
                    La politique de mise à jour et la politique de reprise après sinistre sont des pratiques standard et vous devriez les implémenter si ce n’est déjà fait. La plupart des entreprises procèdent à des évaluations de compromis, et beaucoup font appel à des prestataires externes de reprise après sinistre. Déterminez si ces ressources pourraient améliorer vos capacités de reprise après sinistre. Les capacités de remédiation basées sur le Machine Learning arrivent rapidement à maturation, et sont dignes d’intérêt.
                </p>
            ',
            'inline' => '
                <p>
                    La plupart des entreprises procèdent à des évaluations des compromis, et beaucoup font appel à des prestataires externes de reprise après sinistre, et vous devriez les implémenter si ce n’est déjà fait. Les capacités de remédiation basées sur le Machine Learning arrivent rapidement à maturation. Déterminez si ces ressources pourraient améliorer vos capacités de reprise après sinistre.
                </p>
            ',
            'ahead' => '
                <p>
                    Les capacités de remédiation basées sur le Machine Learning arrivent rapidement à maturation, et vous devriez les implémenter si ce n’est déjà fait.
                </p>
            ',
        ],
        'q21'=>[
            'behind' => '
                <p>
                    Actuellement, les brèches de violations de données sont inévitables. Il est donc essentiel d’avoir une idée précise du probable impact de ce type d’attaque et de développer un plan de réponse en cas d’atteinte à la sécurité. Ceci implique d’évaluer l’ampleur de l’exposition potentielle et les risques propres à certaines catégories de données, telles que les données personnelles. Comprendre le positionnement de l\'étendu de votre réseau de chaîne d’approvisionnement ou de partenariat est également essentiel, que ce soit en termes de vulnérabilités de sécurité héritées d’une tierce partie, ou de nouvelles règles de responsabilité conjointe introduites par le règlement général sur la protection des données.
                </p>
            ',
            'inline' => '
                <p>
                     Actuellement, les brèches de violations de données sont inévitables. Il est donc nécessaire d\'avoir une idée précise de l’impact probable de ce type d’attaque et que vous ayez probablement développé un plan de réponse en cas d’atteinte à la sécurité. Comprendre le positionnement de l\'étendu de votre réseau de chaîne d’approvisionnement ou de partenariat est essentiel, que ce soit au niveau des vulnérabilités de sécurité héritées d’une tierce partie, ou des nouvelles règles de responsabilité conjointe introduites par le règlement général sur la protection des données. 
                </p>
            ',
            'ahead' => '
                <p>
                    Comprendre le positionnement de l\'étendu de votre réseau de chaîne d’approvisionnement ou de partenariat constitue une prochaine étape essentielle, que ce soit au niveau des vulnérabilités de sécurité héritées d’une tierce partie, ou des nouvelles règles de responsabilité conjointe introduites par le règlement général sur la protection des données.
                </p>
            ',
        ],
        'q23'=>[
            'behind' => '
                <p>
                    Aujourd’hui, il est essentiel d’établir une validation de sécurité par des tierces parties et ce, même dans les environnements évolués au sein desquels l’auto-évaluation de votre approche peut mener à une certaine complaisance. La validation en continu est désormais une norme attendue, bien qu’elle puisse en grande partie être automatisée. Des tests d’intrusion par service devraient être effectués au moins tous les six mois, en raison de l’évolution rapide de la menace. Une fréquence de test moins élevée met en danger votre organisation.
                </p>
            ',
            'inline' => '
                <p>
                    Aujourd’hui, il est essentiel d’établir une validation de sécurité par des tierces parties et ce, même dans les environnements évolués au sein desquels l’auto-évaluation de votre approche peut mener à une certaine complaisance. La validation en continu est désormais une norme attendue, bien qu’elle puisse en grande partie être automatisée. Des tests d’intrusion par service devraient être effectués au moins tous les six mois, en raison de l’évolution rapide de la menace. Une fréquence de test moins élevée met en danger votre organisation. 
                </p>
            ',
            'ahead' => '
                <p>
                    Aujourd’hui, il est essentiel d’établir une validation de sécurité par des tierces parties et ce, même dans les environnements évolués au sein desquels l’auto-évaluation de votre approche peut mener à une certaine complaisance. La validation en continu est désormais une norme attendue, bien qu’elle puisse en grande partie être automatisée. Des tests d’intrusion par service devraient être effectués au moins tous les six mois, en raison de l’évolution rapide de la menace. Une fréquence de test moins élevée met en danger votre organisation.
                </p>
            ',
        ],
        'q24'=>[
            'behind' => '
                <p>
                    La fréquence recommandée est de un à trois mois, selon la complexité et du contexte de votre environnement et du risque propre à votre industrie. Une fréquence moins élevée peut réduire le niveau de préparation des responsables clés dans le cas probable d’une violation de données, et vous exposer à un risque de pénalités financières importantes dans le cadre de la nouvelle réglementation. Optez pour l’amélioration de vos procédures de test et de reporting, mais n’essayez pas de réduire la fréquence aux dépens de la capacité. Les procédures de tests hebdomadaires ou en continu sont habituellement réservées aux organisations les plus évoluées – ou qui présentent un haut niveau de risque, et pour lesquelles une réponse insuffisante aux incidents serait catastrophique.
                </p>
            ',
            'inline' => '
                <p>
                    La fréquence recommandée est de un à trois mois, selon la complexité et du contexte de votre environnement et du risque propre à votre industrie. Une fréquence moins élevée peut réduire le niveau de préparation des responsables clés dans le cas probable d’une violation de données, et vous exposer à un risque de pénalités financières importantes dans le cadre de la nouvelle réglementation. Optez pour l’amélioration de vos procédures de test et de reporting, mais n’essayez pas de réduire la fréquence aux dépens de la capacité. Les procédures de tests hebdomadaires ou en continu sont habituellement réservées aux organisations les plus évoluées – ou qui présentent un haut niveau de risque, et pour lesquelles une réponse insuffisante aux incidents serait catastrophique.
                </p>
            ',
            'ahead' => '
                <p>
                    Avec des cyber-attaques toujours plus agressives et fréquentes, être capable de détecter et de répondre de manière adéquate à une violation de données deviendra un marqueur clé du leadership dans l’économie numérique. Concentrez-vous sur la mise en œuvre continue des meilleures pratiques au-delà des normes de conformité et veillez à poursuivre les évaluations externes de vos forces et de vos faiblesses.
                </p>
            ',
        ],
    ],
];
