<?php

//SPLUNK French
return [
    'title' => 'L\'évaluation d\'IDC en ce qui concerne la sécurite',
    'sub-title' => 'Votre entreprise est-elle en sécurité ?',
    'stage1' => 'Étape 1 : Mauvaise',
    'stage2' => 'Étape 2 : Standard',
    'stage3' => 'Étape 3 : Bonne',
    'stage4' => 'Étape 4 : Ambitieuse',
    'stage5' => 'Étape 5 : Excellente',
    'complete_thankyou' => 'Merci, :Fname,',
    'complete_body' => '
        Vous allez bientôt recevoir votre rapport personnalisé. Veuillez vérifier votre filtre antispam ou votre courrier indésirable afin de vous assurer qu’il ne soit pas perdu.<br/><br/>
        <a class="btn btn--primary" target="_blank" href="https://www.splunk.com/en_us/solutions/solution-areas/security-and-fraud/security-investigation.html">
            Cliquez ici pour plus d\'informations
        </a>',
    'complete_tweet' => 'I\'ve just taken the @IDCEMEA Security Assessment Tool for @splunk. Interested? ', // http://bit.ly/2gslXEh
    'email'=>[
        'subject' => 'IDC\'s Security Assessment',
        'hi' => 'Madame, Monsieur,  :Fname',
        'body' => 'Voici votre rapport de Security Response Readiness. <br/>
            Le rapport vous fournit vos résultats et vous aide à vous comparer à d’autres entreprises. ',
        'link' => 'Télécharger le rapport',
        'extra' => 'Une fois que vous aurez analysé ce rapport, pourquoi ne pas rendre visite à <a href="https://www.splunk.com/en_us/solutions/solution-areas/security-and-fraud/security-investigation.html" style="color:#65A637">Splunk</a> ?',
        'regards' => 'Cordialement,',
        'team' => 'L’équipe IDC',
    ],
    'introduction' => '
        <h2>Résultats globaux</h2>
        <p>
            Sur la base de vos réponses, vous êtes situé avec <strong>:percent</strong>% des entreprises dans le groupe de préparation <strong>:result</strong>, qui correspond au niveau <strong>:number:ordinal</strong> sur cinq.
        </p>
        <div style="position: relative; width: 170mm; height: 80mm; background: url(http://security.idcready.net/images/tools/5/overall_graph_bg_fr.svg); background-size: 170mm 80mm;">
            <div id="user" style="position:absolute; top: 24.694mm; left:40.5mm; width: :widthuser height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 33mm; left:40.5mm; width: :widthlang height: 7mm; background-color: #00ADEE"></div>
            <div id="user" style="position:absolute; top: 49mm; left:40.5mm; width: :widthuser height: 7mm; background-color: #004B85"></div>
            <div id="size" style="position:absolute; top: 57mm; left:40.5mm; width: :widthsize height: 7mm; background-color: #00ADEE"></div>
        </div>
        <h2>Sommaire général</h2>
        <p>
            Par rapport aux entreprises ayant les meilleures capacités, votre entreprise se trouve :
        </p>
        <ul>
            <li>:overalllang</li>
            <li>:overallsize</li>
        </ul>
        <p>
            <strong class="blue">Vos performances en détail</strong><br/>
            Cet outil d’évaluation a été conçu pour vous aider à déterminer si votre entreprise est prête à faire face à l\'évolution des menaces qui touchent les activités informatiques, aujourd\'hui et à l\'avenir.<br/>
            Nous nous sommes penchés sur les domaines clés suivants de la sécurité informatique :
        </p>
        <ul class="primary">
            <li>Stratégie de sécurité</li>
            <li>Détection des incidents</li>
            <li>Réponse aux incidents</li>
        </ul>
        <p>
            Vos performances dans chaque domaine sont comparées à celles de vos homologues à la Figure 3.
        </p>
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>Security Response Readiness* IDC par capacité</h2>
        <div class="spacer"></div>
        <div style="position: relative; width: 170mm; height: 105mm; background: url(http://security.idcready.net/images/tools/5/section_graph_bg_fr.svg); background-size: 170mm 105mm;">
            <div id="user" style="position:absolute; top: 24.694mm; left:44.3mm; width: :widthuser-security-strategy height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 33mm; left:44.3mm; width: :width-security-strategy height: 7mm; background-color: #00ADEE"></div>

            <div id="user" style="position:absolute; top: 48mm; left:44.3mm; width: :widthuser-incident-detection height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 56.3mm; left:44.3mm; width: :width-incident-detection height: 7mm; background-color: #00ADEE"></div>

            <div id="user" style="position:absolute; top: 72mm; left:44.3mm; width: :widthuser-incident-response height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 80mm; left:44.3mm; width: :width-incident-response height: 7mm; background-color: #00ADEE"></div>
        </div>
        <h2>Comment progresser ?</h2>
        <p>
            Quel que soit votre niveau, certains domaines continuent d’évoluer et méritent que l’on se concentrent dessus plus que tout :
        </p>
        <ul>
            <li>Intégration – Prendre les incidents de sécurité sous tous les angles.</li>
            <li>Approche proactive – Réduire le temps entre la violation et la détection, passer de quelques mois à quelques heures (ou moins).</li>
            <li>Rester en avance sur la conformité – Il est suffisamment difficile d’arriver à la conformité pour nombre d’entreprises, sans parler de la conserver.</li>
            <li>Best practice – Reconnaître que les menaces ne s’arrêtent jamais et que les cadres de conformité et réglementaires sont souvent dépassés depuis des années, même au moment de leur instauration ; adopter une approche et de best practice constituent la meilleure manière d’atténuer les menaces. Avantage supplémentaire, si cela est effectué efficacement, la conformité sera obtenue naturellement.</li>
        </ul>
        <div class="pb"></div>
    ',
    'security-strategy-heading' => '<h2>Améliorations de la stratégie de sécurité</h2>',
    'incident-detection-heading' => '<h2>Améliorations de la détection d’incidents</h2>',
    'incident-response-heading' => '<h2>Améliorations de la réponse aux incidents</h2>',
    'a1-a' => '
    <p>
        Aligner la sécurité sur l’activité et faire en sorte que la sécurité soutienne l’activité sont des éléments vitaux pour toute entreprise numérique moderne. Les approches ponctuelles ou réactives de la sécurité empêcheront votre entreprise d’avancer et vous exposeront à d\'éventuelles amendes dans le cadre de la législation sur la conformité. Votre priorité doit être la suivante : effectuer un travail de sensibilisation quant à la manière dont la sécurité permet d’obtenir de nouvelles opportunités commerciales, et mieux faire comprendre à la direction la valeur stratégique de la sécurité informatique pour favoriser l\'élaboration d\'un plan à plus long terme.
    </p>',
    'a1-b' => '
    <p>
        Aligner la sécurité sur l’activité et faire en sorte que la sécurité soutienne l’activité sont des éléments vitaux pour toute entreprise numérique moderne. Bien que vous vous en sortiez bien pour rendre la sécurité plus cohérente au moyen de processus répétables, vous devriez effectuer un travail de sensibilisation quant à la manière dont la sécurité permet d’obtenir de nouvelles opportunités commerciales, et mieux faire comprendre à la direction la valeur stratégique de la sécurité informatique pour favoriser l\'élaboration d\'un plan à plus long terme.
    </p>',
    'a5-a' => '
    <p>
        Les nouvelles approches de la gestion et la conformité de la sécurité mettent davantage l’emphase sur la mise en œuvre de meilleures pratiques, et il s’agit d’un domaine dans lequel vous êtes actuellement exposé. Se concentrer sur les meilleures pratiques et équilibrer cela avec la gestion des risques peut permettre de stimuler à la fois la conformité et la flexibilité commerciale. Il est souvent difficile d’établir des best practice en interne ; vous devriez donc envisager de recourir à des experts externes pour vous aider à définir l’ampleur des exigences et des solutions possibles.
    </p>',
    'a5-b' => '
    <p>
        Les nouvelles approches de la gestion et la conformité de la sécurité mettent davantage l’emphase sur la mise en œuvre de best practice. Bien que vous vous y attaquiez en interne, assurez-vous d’avoir des experts qui visualisent tout le paysage sécuritaire et peuvent vous aider à identifier des failles et faiblesses de votre approche. Se concentrer sur les best practice et équilibrer cela avec la gestion des risques peut permettre de stimuler à la fois la conformité et la flexibilité commerciale. Il est souvent difficile d’établir des best practice en interne ; vous devriez donc envisager de recourir à des experts externes pour vous aider à définir l’ampleur des exigences et des solutions possibles.
    </p>',
    'a7-a' => '
    <p>
        Les menaces évoluent rapidement et sont de plus en plus avancées et efficaces. Vous devez avoir un coup d’avance, mais il vous faut les meilleurs outils de  sécurité. Si l’on suppose que vous avez subi une violation, prendre les devants pour les rechercher constituera une compétence essentielle pour les entreprises de sécurité informatiques de demain. Élaborez un plan commercial pour soutenir les investissements dans des capacités de détection émergentes telles que l’analyse et l’apprentissage automatique.
    </p>',
    'a7-b' => '
    <p>
        Les menaces évoluent rapidement et sont de plus en plus avancées et efficaces. Vous devez avoir un coup d’avance et vous avez commencé à adopter les meilleurs outils de sécurité, mais il vous reste du chemin à parcourir. Si l’on suppose que vous avez subi une violation, prendre les devants pour les rechercher  constituera une compétence essentielle pour les entreprises de sécurité informatiques de demain. Élaborez un plan commercial pour soutenir les investissements dans des capacités de détection émergentes telles que l’analyse et l’apprentissage automatique.
    </p>',
    'a8-a' => '
    <p>
        Gérer votre réponse initiale à un incident de sécurité sera essentiel pour endiguer la menace et remédier à tout dommage potentiel, mais vous n’avez rien en place pour l’instant. Une plate-forme conçue pour standardiser et gérer cela peut s\'avérer particulièrement utile, compte-tenu des exigences en matière de signalement des violations de la nouvelle législation comme la GDPR ou la conformité à l’Assurance contre les violations de sécurité informatique.
    </p>',
    'a8-b' => '
    <p>
        La gestion de votre réaction initiale à un incident de sécurité sera essentielle pour endiguer la menace et remédier à tout dommage potentiel. Vous avez commencé doucement, mais vous devriez penser à passer rapidement la vitesse supérieure. Une plate-forme conçue pour standardiser et gérer cela peut s\'avérer particulièrement utile, compte-tenu des exigences en matière de signalement des violations de la nouvelle législation comme la GDPR ou la conformité à l’Assurance contre les violations de sécurité informatique.
    </p>',
    'a11-a' => '
    <p>
        Un plan de réponse testé et bien défini est essentiel en cas de violation afin d’assurer le respect de toutes les obligations et exigences. Automatiser ce processus autant que possible sera très utile pour réduire les frais généraux d’exploitation continus.
    </p>',
    'a11b-a' => '
    <p>
        Plus les personnes prennent de temps pour traiter un incident de sécurité, plus l’impact sur la productivité et le risque commercial sont élevés. Passer moins de temps en analyses et corrections doit être un objectif majeur, idéalement avec une approche visant la standardisation et l’automatisation de la réponse aux violations de sécurité.
    </p>',
    'a13-a' => '
    <p>
        Vous luttez pour faire face au volume d’incidents. Plutôt que de faire intervenir davantage de personnes pour essayer de faire face, envisagez des méthodes permettant de rendre la détection et la correction beaucoup plus efficaces (via  des approches telles que l’automatisation et la priorisation). 
    </p>',
    'a13-b' => '
    <p>
        Bien que vous puissiez généralement faire face au volume d’incidents, ce n’est pas toujours facile et de fortes tensions peuvent apparaître. Plutôt que de faire intervenir davantage de personnes pour essayer de faire face, envisagez des méthodes permettant de rendre la détection et la correction beaucoup plus efficaces (via  des approches telles que l’automatisation et la priorisation). 
    </p>',
    'a14-a' => '
    <p>
        Vous ne pouvez pas sécuriser efficacement ce que vous ne pouvez pas mesurer et vous ne mesurez pas suffisamment pour être à même de déterminer l’étendue et l’impact d’une violation. Suivre une approche proactive pour collecter et analyser les informations ne vous permettra pas seulement de détecter une violation plus rapidement et avec davantage de fiabilité. Cela vous aidera aussi à effectuer la rétro-ingénierie de la violation pour être en mesure d’améliorer votre réponse de sécurité et votre attitude face aux risques afin d\'atténuer d’autres attaques.
    </p>',
    'a14-b' => '
    <p>
        Vous ne pouvez pas sécuriser efficacement ce que vous ne pouvez pas mesurer. Bien que vous soyez en mesure d’avancer dans la bonne direction, essayer de contrer plus efficacement une violation sera bien plus facile si vous essayez d’améliorer vos capacités générales de collecte d\'informations et de surveillance. Suivre une approche proactive pour collecter et analyser les informations ne vous permettra pas seulement de détecter une violation plus rapidement et avec davantage de fiabilité. Cela vous aidera aussi à effectuer la rétro-ingénierie de la violation pour être en mesure d’améliorer votre réponse de sécurité et votre attitude face aux risques afin d\'atténuer d’autres attaques.
    </p>',
    'summary' => '
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>Principes essentiels</h2>
        <p>
            La sécurité figure généralement tout en haut d’une liste de freins aux nouvelles initiatives informatiques, du développement et déploiement de nouveaux services et applications à l’exploitation de nouvelles architectures informatiques telles que le Cloud hybride. Une sécurité informatique en matière de suivi, de détection et de réaction (sur la base d’une plate-forme avec automatisation et fonctions d\'analyse) constituera l’un des facteurs permettant de différencier les entreprises numériques de haut niveau qui peuvent évoluer rapidement selon les conditions du marché. Le chemin pour y parvenir sera parsemé de risques et de pièges, parmi lesquels :
        </p>
        <ul>
            <li>Se lancer sans stratégie – La sécurité devant être à la fois délibérée et consciencieuse, il faut procéder consciemment pour éviter d’acheter des produits destinés à combler des lacunes en termes de capacités. Utilisez les compétences d’experts de sécurité externes qui possèdent une expérience durement acquise et des connaissances pour vous aider à bâtir des solutions éprouvées et gérables.</li>
            <li>Vider l’océan à la petite cuillère – Bien que cela puisse sembler être la meilleure solution, tout brûler pour recommencer est rarement une approche productive. Essayez plutôt d’améliorer vos capacités dans certains domaines, puis développez votre approche. Au fur et à mesure que l’adoption et l’expérience augmentent, une plus grande partie de l’infrastructure informatique peut être utilisée pour profiter des avancées.</li>
            <li>Interopérabilité ouverte – Nous ne savons pas ce que demain nous apportera et être bloqué avec des interfaces propriétaires entravera votre capacité à sécuriser votre parc informatique au fil de ses évolutions et changements. Recherchez des solutions qui s’intègrent bien en  pile et prennent en charge une expansion via des API et interfaces ouvertes, bien définies et stables.</li>
        </ul>
    ',
    'overall' => [
        'title'=>'Votre évaluation générale:',
        'hidetitle'=>'true',
        'image'=>'',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
    ],
    'security-strategy' => [
        'title'=>'Security Strategy',
        'image'=>'security-strategy.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>'',
    ],
    'incident-detection' => [
        'title'=> 'Data rights and standards',
        'image'=>'incident-detection.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>'',
    ],
    'incident-response' => [
        'title'=> 'incident-response',
        'image'=>'incident-response.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>'',
    ],
];
