<?php
//fireeye
return array(
    'stage1' => 'Ad-hoc',
    'stage2' => 'Opportunistic',
    'stage3' => 'Repeatable',
    'stage4' => 'Managed',
    'stage5' => 'Optimized',
    'question-title' => 'Performance Ranking nach Frage',
    'question-intro' => '
        <p>
            Wir werden jetzt analysieren, welche Ergebnisse Sie in drei wichtigen Bereichen der Widerstandsfähigkeit gegenüber Cyber-Risiken erzielt haben. In jedem Fall sehen wir uns an, wie Sie im Vergleich zu anderen Unternehmen in der gleichen Bewertungskategorie (<INSERT READINESS RANKING>) abgeschnitten haben. Dazu geben wir an, ob Sie im unteren Bereich, im Mittelfeld oder im Spitzenfeld liegen.
        </p>
        <p>
            Falls Sie im Mittelfeld liegen, sind Sie im Wesentlichen mit den meisten Unternehmen in Ihrer Bewertungskategorie vergleichbar. Falls Sie im Spitzenfeld liegen, leisten Sie in diesem Bereich gute Arbeit. Sie sollten sich auf andere Bereiche konzentrieren, um Ihren Ansatz ausgewogener zu gestalten. Falls Sie im unteren Bereich liegen, müssen Sie Ihre Aufmerksamkeit und Ihre Investitionen auf diesen Bereich konzentrieren, um Ihre Widerstandsfähigkeit gegenüber Cyber-Risiken auf Spur zu bringen.
        </p>

Falls Sie in allen Bereichen entweder im Mittel- oder im Spitzenfeld liegen, werden Sie bald in die nächste Bewertungskategorie aufsteigen."
    ',
    'completecopy' => [
        'graphtitle' => 'Ihre allgemeine Security Readiness',
        'fullreport' => 'Wir können Ihnen den vollständigen Bericht direkt zusenden.',
        'provide' => 'Geben Sie einfach Ihren Namen und Ihre E-Mail-Adresse an und wir senden Ihnen einen Link zum Herunterladen des Berichts.',
        'stage1' => '
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Ad hoc ein. Dies entspricht der untersten der fünf Bewertungskategorien.
            </p>
            <p>
                Sie gehören zu den untersten 10 % der Unternehmen und es gibt viele verbesserungswürdige Bereiche. Ihr Geschäft und Ihre Daten sind einem ernsthaften Risiko ausgesetzt, wenn Sie keine dringenden Verbesserungsmaßnahmen treffen, und Sie laufen Gefahr, mit branchenspezifischen und aufsichtsbehördlichen Sanktionen und Strafen belegt zu werden, wenn ein Sicherheitsverstoß zum Verlust persönlicher oder vertraulicher Daten führt.
            </p>
        ',
        'stage2' => '
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Opportunistic ein. Dies entspricht der vorletzten von fünf unterschiedlichen Kategorien.
            </p>
            <p>
                Sie gehören zu den untersten 20 % der Unternehmen und es gibt viele verbesserungswürdige Bereiche. Ihr Geschäft und Ihre Daten sind einem Risiko ausgesetzt, wenn Sie keine dringenden Verbesserungsmaßnahmen treffen. Sie laufen Gefahr, mit branchenspezifischen und aufsichtsbehördlichen Sanktionen und Strafen belegt zu werden, wenn ein Sicherheitsverstoß zum Verlust persönlicher oder vertraulicher Daten führt.
            </p>
        ',
        'stage3' => '
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Repeatable ein. Dies entspricht der mittleren der fünf unterschiedlichen Kategorien.
            </p>
            <p>
                Im Allgemeinen liegen Sie im Mittelfeld, was die Widerstandsfähigkeit gegenüber Cyber-Risiken betrifft. Es bleibt aber genug Raum für Verbesserungen, um das Risiko für einen Cyber-Sicherheitsverstoß zu reduzieren, der möglicherweise Strafen oder Sanktionen nach sich ziehen würde.
            </p>
        ',
        'stage4' => '
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Managed ein. Dies entspricht der zweithöchsten von fünf unterschiedlichen Kategorien.
            </p>
            <p>
                Sie schneiden besser ab als die Mehrheit und gehören zu den besten 20 %, was die Widerstandsfähigkeit gegenüber Cyber-Risiken betrifft. Es bleibt aber dennoch genug Raum für Verbesserungen, um das Risiko für einen Cyber-Sicherheitsverstoß zu reduzieren, der möglicherweise Strafen oder Sanktionen nach sich ziehen würde.
            </p>
        ',
        'stage5' => '
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Optimized ein. Dies entspricht der höchsten der fünf unterschiedlichen Kategorien.
            </p>
            <p>
                Sie schneiden deutlich besser ab als die Mehrheit und gehören zu den besten 5 % der Unternehmen, was die Widerstandsfähigkeit gegenüber Cyber-Risiken betrifft. Sie gehören zwar zu den Besten, doch die Arbeit hört nie auf. Sie können immer noch Verbesserungen in verschiedenen Bereichen vornehmen, um die Wahrscheinlichkeit einer Datenverletzung zu mindern.
            </p>
        ',
        'instruction' => '
            <p>
                Wir können Ihnen den vollständigen Bericht direkt zusenden.<br/>
                Geben Sie einfach Ihren Namen und Ihre E-Mail-Adresse an und wir senden Ihnen einen Link zum Herunterladen des Berichts.
            </p>
        '
    ],
    'complete_thankyou' => 'Vielen Dank :Fname,',
    'complete_body' => 'Ihr individueller Bericht ist schon bald in Ihrem Postfach. Warum twittern Sie Ihre Ergebnisse nicht in der Zwischenzeit, um herauszufinden, wie gut Sie im Vergleich zu Ihren Followern abschneiden?',
    'complete_tweet' => 'Ich habe gerade das @IDCUKI Cyber Risk Readiness Assessment gesponsert von @fireeye durchgeführt, wir sind auf Repeatable. Interessiert?',// http://bit.ly/2g8WN1d
    'email'=>[
        'subject' => 'IDC Report',
        'hi' => 'Hallo :Fname',
        'body' => '
            wie versprochen schicken wir Ihnen hiermit den Link zum Herunterladen Ihres Berichts zur Cyber-Risikobewertung.<br/>
            In dem Bericht werden Ihre Ergebnisse nach Kategorien aufgeschlüsselt. Dadurch können Sie Ihre Ergebnisse besser mit anderen Unternehmen vergleichen.
        ',
        'link' => 'Bericht herunterladen',
        'extra' => 'Once you\'ve digested the report why not visit <a href="http://www.fireeye.com" style="color:#E66B6B">FireEye</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team'
    ],
    'introduction_title' => 'Zusammenfassung des Kundenreports und allgemeines Performance Ranking',
    'introduction' => '',
    'introduction-image' => 'report.jpg',
    'overall' => array(
        'title'=>'Ihre allgemeine Security Readiness',
        'graph-title'=>'Wie Sie allgemein abschneiden/Ihr Ergebnis',
        'image'=>'',
        'overall_country_graph-title' => 'Ihr Ergebnis im Vergleich mit Unternehmen in Ihrem Land',
        'overall_size_graph-title' => 'Ihr Ergebnis im Vergleich mit Unternehmen gleicher Größe',
        'stage1'=>'
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Ad hoc ein. Dies entspricht der untersten der fünf Bewertungskategorien.
            </p>
            <p>
                Sie gehören zu den untersten 10 % der Unternehmen und es gibt viele verbesserungswürdige Bereiche. Ihr Geschäft und Ihre Daten sind einem ernsthaften Risiko ausgesetzt, wenn Sie keine dringenden Verbesserungsmaßnahmen treffen, und Sie laufen Gefahr, mit branchenspezifischen und aufsichtsbehördlichen Sanktionen und Strafen belegt zu werden, wenn ein Sicherheitsverstoß zum Verlust persönlicher oder vertraulicher Daten führt.
            </p>
        ',
        'stage2'=>'
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Opportunistic ein. Dies entspricht der vorletzten von fünf unterschiedlichen Kategorien.
            </p>
            <p>
                Sie gehören zu den untersten 20 % der Unternehmen und es gibt viele verbesserungswürdige Bereiche. Ihr Geschäft und Ihre Daten sind einem Risiko ausgesetzt, wenn Sie keine dringenden Verbesserungsmaßnahmen treffen. Sie laufen Gefahr, mit branchenspezifischen und aufsichtsbehördlichen Sanktionen und Strafen belegt zu werden, wenn ein Sicherheitsverstoß zum Verlust persönlicher oder vertraulicher Daten führt.
            </p>
        ',
        'stage3'=>'
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Repeatable ein. Dies entspricht der mittleren der fünf unterschiedlichen Kategorien.
            </p>
            <p>
                Im Allgemeinen liegen Sie im Mittelfeld, was die Widerstandsfähigkeit gegenüber Cyber-Risiken betrifft. Es bleibt aber genug Raum für Verbesserungen, um das Risiko für einen Cyber-Sicherheitsverstoß zu reduzieren, der möglicherweise Strafen oder Sanktionen nach sich ziehen würde.
            </p>
        ',
        'stage4'=>'
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Managed ein. Dies entspricht der zweithöchsten von fünf unterschiedlichen Kategorien. 
            </p>
            <p>
                Sie schneiden besser ab als die Mehrheit und gehören zu den besten 20 %, was die Widerstandsfähigkeit gegenüber Cyber-Risiken betrifft. Es bleibt aber dennoch genug Raum für Verbesserungen, um das Risiko für einen Cyber-Sicherheitsverstoß zu reduzieren, der möglicherweise Strafen oder Sanktionen nach sich ziehen würde.
            </p>
        ',
        'stage5'=>'
            <p>
                Vielen Dank, dass Sie an der IDC-Cyber-Risikobewertung teilgenommen haben. Auf Grundlage Ihrer Antworten stufen wir Ihren Ansatz zur Gewährleistung der Widerstandsfähigkeit als Optimized ein. Dies entspricht der höchsten der fünf unterschiedlichen Kategorien.
            </p>
            <p>
                Sie schneiden deutlich besser ab als die Mehrheit und gehören zu den besten 5 % der Unternehmen, was die Widerstandsfähigkeit gegenüber Cyber-Risiken betrifft. Sie gehören zwar zu den Besten, doch die Arbeit hört nie auf. Sie können immer noch Verbesserungen in verschiedenen Bereichen vornehmen, um die Wahrscheinlichkeit einer Datenverletzung zu mindern.
            </p>
        '
    ),
    'cyber-risk-management-and-the-business' => array(
        'title'=>'Cyber Risk Management und das Business',
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
                Achtung! In diesem wichtigen Bereich des Cyber-Risikomanagements liegen Sie im unteren Bereich und müssen dringend Verbesserungen vornehmen, um Ihre Anfälligkeit gegenüber Cyber-Bedrohungen und potenzielle Strafen und Reputationsverluste zu reduzieren.
            </p>
        ',
        'inline' => '
            <p>
                Beeindruckende Leistung! In diesem wichtigen Bereich des Cyber-Risikomanagements liegen Sie im Mittelfeld, sollten jedoch trotzdem versuchen, neue Möglichkeiten zu finden, um Ihre IT-Domäne besser zu schützen.
            </p>
        ',
        'ahead' => '
            <p>
                Hervorragende Leistung! In diesem Bereich des Cyber-Risikomanagements liegen Sie im Spitzenfeld, sollten jedoch trotzdem evaluieren, wie Sie Ihre Spitzenposition beibehalten können.
            </p>
        '
    ),
    'cyber-risk-management-operations-and-defence' => array(
        'title'=> 'Cyber Risk Management Operations und Abwehr',
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
                Achtung! In diesem kritischen Bereich zur Erkennung und Bekämpfung von Sicherheitsverstößen liegen Sie im unteren Bereich und sollten sich darauf konzentrieren, Ihre Kompetenzen und Kapazitäten auf den neusten Stand zu bringen.
            </p>
        ',
        'inline' => '
            <p>
                Gut gemacht! In diesem Bereich des Cyber-Risikomanagements liegen Sie im Mittelfeld. Sie sollten jedoch trotzdem nach neuen Ansätzen suchen, die Ihnen helfen, Ihre Widerstandsfähigkeit gegenüber Cyber-Risiken insgesamt zu verbessern.
            </p>
        ',
        'ahead' => '
            <p>
                Spitzenreiter! In diesem Bereich des Cyber-Risikomanagements liegen Sie im Spitzenfeld. Sie können im Laufe der Zeit jedoch immer wieder Verbesserungen vornehmen, wenn neue Ansätze aufkommen.
            </p>
        '
    ),
    'cyber-risk-management-breach-detection-and-remediation' => array(
        'title'=> 'Cyber Risk Management Breach Detection und Beseitigung',
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
                Es besteht Handlungsbedarf! Beim Management von Cyber-Risiken in Zusammenarbeit mit dem operativen Geschäft schneiden Sie schlechter ab als vergleichbare Unternehmen. Sie sollten versuchen, eine engere Beziehung zum operativen Bereich aufzubauen, um das Management und die Finanzierung der Widerstandsfähigkeit gegenüber Cyber-Risiken zu verbessern.
            </p>
        ',
        'inline' => '
            <p>
                Gute Leistung! Beim Management von Cyber-Risiken in Zusammenarbeit mit dem operativen Geschäft liegen Sie im Mittelfeld. Sie sollten dennoch versuchen, eine engere Beziehung zum operativen Bereich aufzubauen, um Ihre Widerstandsfähigkeit gegenüber Cyber-Risiken insgesamt zu verbessern, falls Sie in eine höhere Bewertungskategorie aufsteigen möchten.
            </p>
        ',
        'ahead' => '
            <p>
                Tolle Leistung! Beim Management von Cyber-Risiken in Zusammenarbeit mit dem operativen Geschäft liegen Sie im Spitzenfeld. In diesem Bereich des Cyber-Risikomanagements schneiden Sie sehr gut ab. Sie sollten sich jedoch nicht darauf ausruhen und Ihre Vorgehensweise kontinuierlich überprüfen.
            </p>
        '
    ),
    'questions' => [
        'q1'=>[
            'behind' => '
                <p>
                    Sie müssen der Geschäftsführung stärker bewusst machen, wie bedeutend die IT ist und wie die digitale Transformation dem Unternehmen durch höhere Effizienz bzw. die Erschließung neuer Märkte zum Erfolg verhelfen kann.
                </p>
            ',
            'inline' => '
                <p>
                    Sie sollten nach Möglichkeiten suchen, der Unternehmensleitung besser bewusst zu machen und zu erläutern, wie IT die Rentabilität und Wettbewerbsfähigkeit des Unternehmens steigern kann.
                </p>
            ',
            'ahead' => '
                <p>
                    Beachten Sie, dass sich Technologien und Funktionen ständig weiterentwickeln und Sie regelmäßig neu bewerten sollten, was wie zu tun ist.
                </p>
            '
        ],
        'q2'=>[
            'behind' => '
                <p>
                    Suchen Sie mithilfe von Ansätzen wie der Automatisierung und dem Risikomanagement nach neuen Wegen zur Bereitstellung und Verwaltung der IT, um neue Services schnell und zuverlässig bereitzustellen.
                </p>
            ',
            'inline' => '
                <p>
                    Suchen Sie nach Möglichkeiten, Ihr Leistungspotenzial durch Richtlinien und Automatisierung zu erhöhen, damit Sie Anwendungen und Services schnell und sicher bereitstellen können.
                </p>
            ',
            'ahead' => '
                <p>
                    Bei der Verbesserung des Cyber-Risikomanagements können Sie sich auf andere Bereiche konzentrieren, aber Sie sollten trotzdem weiterhin fortschrittliche Methoden für Richtlinien, Management, Automatisierung und Orchestrierung anwenden und optimieren.
                </p>
            '
        ],
        'q3'=>[
            'behind' => '
                <p>
                    Ein ausgereifterer Ansatz für das Risikomanagement wird Ihnen helfen, in Ihrer Umgebung ein ausgewogeneres Verhältnis zwischen Benutzerfreundlichkeit und Sicherheit zu erreichen. Gleichzeitig müssen Sie berücksichtigen, dass die essentiellen Werte Ihres Unternehmens um jeden Preis geschützt werden müssen.  Versuchen Sie, mit einem risikobasierten Ansatz herauszufinden, wo Kompromisse eingegangen werden können, um Geschäftsentwicklungsziele voranzubringen.
                </p>
            ',
            'inline' => '
                <p>
                    Sie schneiden gut ab, aber es gibt Raum für Verbesserungen. Führende Unternehmen können Risiken aktiv identifizieren und steuern und so die Entwicklung ihres Geschäfts unterstützen. Versuchen Sie, eine aktivere Rolle bei der Identifikation, Analyse und Steuerung von Risiken einzunehmen und gleichzeitig genau zu verstehen, wie groß die Risikobereitschaft Ihres Unternehmens ist.
                </p>
            ',
            'ahead' => '
                <p>
                    Um ein wirklich führendes Unternehmen zu sein, müssen Sie ständig Grenzen erweitern.  Finden Sie heraus, wo Kompromisse möglich sind, um neue Entwicklungschancen zu erkennen. Denken Sie dabei aber immer an die essentiellen Werte Ihres Unternehmens, die um jeden Preis vor Angriffen geschützt werden müssen. 
                </p>
            '
        ],
        'q4'=>[
            'behind' => '
                <p>
                    Ziehen Sie einen formellen Risikobewertungsprozess in Betracht und entwickeln Sie einen proaktiven Ansatz zur Erkennung von Sicherheitsverstößen, um zu verstehen, wo es Risiken gibt und wie Sie reagieren müssen, wenn diese Risiken Realität werden. Dann können Sie darüber hinaus weitere Schritte ergreifen, um Ihren Ansatz zu optimieren, und zum Beispiel interne und externe Kommunikationspläne, einen Benachrichtigungsplan und einen Maßnahmenplan für Sicherheitsverstöße erstellen.
                </p>
            ',
            'inline' => '
                <p>
                    Ziehen Sie es in Betracht, einen Benachrichtigungsplan für Sicherheitsverstöße zu erstellen. Dies ist besonders wichtig, da ein derartiger Plan in der neuen EU-Datenschutz-Grundverordnung für die Bearbeitung personenbezogener Daten von EU-Bürgern vorgeschrieben sein wird. Außerdem sollten Sie darüber nachdenken, einen übergreifenden Maßnahmenplan für Sicherheitsverstöße zu erstellen, der in jeder Phase des Prozesses als Leitfaden für die zu ergreifenden Schritte dient.
                </p>
            ',
            'ahead' => '
                <p>
                    Beim Management des Risikos für Sicherheitsverletzungen gehen Sie zukunftsorientiert vor und planen Ihre Maßnahmen für den Fall eines Sicherheitsverstoßes. Als nächsten Schritt sollten Sie jedoch darüber nachdenken, wie Sie die Cyber-Risikoabsicherung nicht nur zur Senkung der potenziellen Kosten eines Sicherheitsverstoßes einsetzen können, sondern auch als treibenden Faktor für Exzellenz. So wird sie zum potenziellen Wettbewerbsvorteil beim Umgang mit Kundendaten.
                </p>
            '
        ],
        'q5'=>[
            'behind' => '
                <p>
                    Beachten Sie, dass die digitale Transformation für ein Unternehmen unumgänglich ist, und überlegen Sie, welche Risiken damit verbunden sind. Denken Sie darüber nach, wie die IT und der operative Bereich zusammenarbeiten können, um einen Ansatz für Cyber-Risiken zu entwickeln, der für alle Beteiligten angemessen ist und den operativen Bereich bei der Zielumsetzung unterstützen kann.
                </p>
            ',
            'inline' => '
                <p>
                    Überlegen Sie, wie Cyber-Risiken auf unternehmensweiter Basis bekämpft und gesteuert werden können. Da der operative Betrieb heutzutage nämlich vor allem auf Cloud- und Mobility-Technologien aufbaut, stellen Cyber-Risiken ein Problem dar, das das ganze Unternehmen betrifft.
                </p>
            ',
            'ahead' => '
                <p>
                    Überlegen Sie, wie das Cyber-Risikomanagement in die Entwicklung neuer Geschäftsprioritäten miteinbezogen werden kann, damit sichergestellt ist, dass Cyber-Risiken proaktiv identifiziert und gesteuert und gleichzeitig geschäftliche Ziele unterstützt werden.
                </p>
            '
        ],
        'q6'=>[
            'behind' => '
                <p>
                    Es gehört zu den Best Practices im Cyber-Risikomanagement, die CxO-Ebene weitgehend einzubeziehen und Stellen für fokussierte Risiko- und Compliance-Verantwortliche einzurichten. Ziehen Sie Möglichkeiten in Betracht, das Engagement und die Verantwortlichkeit auf der operativen Seite zu erhöhen, insbesondere mit Compliance-Experten und der Einbeziehung von Führungskräften aus dem operativen Bereich.  Setzen Sie Dritte effektiv ein, um Best Practices zu beurteilen.
                </p>
            ',
            'inline' => '
                <p>
                    Es gehört zu den Best Practices im Cyber-Risikomanagement, die CxO-Ebene weitgehend einzubeziehen und Stellen für fokussierte Risiko- und Compliance-Verantwortliche einzurichten. Ziehen Sie Möglichkeiten in Betracht, das Engagement und die Verantwortlichkeit auf der operativen Seite zu erhöhen, insbesondere mit Compliance-Experten und der Einbeziehung von Führungskräften aus dem operativen Bereich.  Setzen Sie Dritte effektiv ein, um Best Practices zu beurteilen.
                </p>
            ',
            'ahead' => '
                <p>
                    Um dieses Framework auf die nächste Stufe zu heben, überlegen Sie, wie Spezialisten aus den Bereichen Risiko, Compliance und Sicherheit sowohl auf der obersten Führungsebene als auch darunter einen positiven Beitrag zu diesem Prozess leisten können. Setzen Sie Dritte effektiv ein, um Best Practices zu beurteilen.
                </p>
            '
        ],
        'q7'=>[
            'behind' => '
                <p>
                    Es ist unwahrscheinlich, dass das Thema Sicherheit noch vor der Umsetzungsphase des Projekts mit einbezogen wird (zu diesem Zeitpunkt ist Sicherheit nur eines von vielen Problemen und wird mit unterschiedlichem Erfolg gewährleistet). Es kann auch sein, dass sie erst dann zum Einsatz kommen, wenn etwas schiefläuft (und es schon viel zu spät ist). Überlegen Sie, wie Sicherheit zumindest in der Planungsphase einer neuen Geschäftsinitiative berücksichtigt werden kann (oder besser noch früher).
                </p>
            ',
            'inline' => '
                <p>
                    Überlegen Sie, wie Sicherheit in der Planungsphase neuer Geschäftsinitiativen von Anfang an eine wichtige Rolle spielen kann. Sie sollte nicht nur einer von vielen Stakeholdern im Projekt sein, sondern einen entscheidenden Beitrag zur Entwicklung und Umsetzung des Projekts leisten. 
                </p>
            ',
            'ahead' => '
                <p>
                    Überlegen Sie, wie Sicherheitsbeauftragte eine führende Rolle bei der Planung neuer Initiativen übernehmen können. Sorgen Sie außerdem dafür, dass Sicherheit während der gesamten Entwicklungs-, Test- und Umsetzungsphase von Projekten und im anhaltenden „Alltagsgeschäft“ eine Hauptpriorität bleibt.
                </p>
            '
        ],
        'q8'=>[
            'behind' => '
                <p>
                    Entwickeln Sie in einem Geschäftsplan, der aufzeigt welches Budget nötig ist, um die Investitionen zu erhöhen und die wesentlichen Geschäftstätigkeiten abzudecken (und das Risiko, das folgt, wenn dieses Niveau nicht erreicht wird), und gegenbenenfalls sogar neue Initiativen. Dies ist der Ausgangspunkt für Unternehmen wie Ihres. Bei Unternehmen im Spitzenfeld liegt die Messlatte höher.
                </p>
            ',
            'inline' => '
                <p>
                    Unternehmen im Spitzenfeld haben IT-Sicherheitsbudgets, die (bei einer entsprechenden geschäftlichen Begründung) selbst für experimentelle Initiativen jederzeit verfügbar sind. Um diesen Punkt zu erreichen, müssen sich Investitionen in die IT-Sicherheit nicht mehr nur auf die Kosten konzentrieren, die ohne diese Investitionen entstehen könnten, sondern darauf, welche potenziellen Auswirkungen neue Ausgaben für die IT-Sicherheit auf den Bruttogewinn haben können.
                </p>
            ',
            'ahead' => '
                <p>
                    Um weitere Verbesserungen zu erzielen, sollten Sie Sicherheitsinvestitionen als Grundvoraussetzung ansehen, die es Unternehmen ermöglicht, Geschäftsziele zu erreichen und sowohl die Erträge als auch die Rentabilität zu erhöhen.
                </p>
            '
        ],
        'q9'=>[
            'behind' => '
                <p>
                    Ziehen Sie es in Betracht, diese Methoden und einige Methoden der nächsten Phase (z. B. Überprüfung von Sicherheitsmitarbeitern, aktive Personenüberwachung, Begleitpflicht) in größerem Umfang einzusetzen.
                </p>
            ',
            'inline' => '
                <p>
                    Ansätze, wie zum Beispiel Sicherheitsschleusen an Ein-/Ausgängen und aktive Personenüberwachung/Begleitpflicht, sollten Standardverfahren werden. Dann können Sie sich fortschrittlicheren Methoden ansehen, wie zum Beispiel die biometrische Authentifizierung.
                </p>
            ',
            'ahead' => '
                <p>
                    Um die nächste Stufe zu erreichen, überlegen Sie, wie Sie die Überschneidungen zwischen IT- und physischer Sicherheit durch den Einsatz biometrischer Authentifizierungsmethoden maximieren können.
                </p>
            '
        ],
        'q10'=>[
            'behind' => '
                <p>
                    Das Management von Best Practices im IT-Sicherheitsbereich muss ein formeller Prozess sein, der auf der Anwendung von Standards aufbaut. Denken Sie darüber nach, wie Sie Ressourcen einsetzen können, die über Fachkenntnisse auf diesem Gebiet verfügen.
                </p>
            ',
            'inline' => '
                <p>
                    Dies ist ein formeller Prozess, der Fachkenntnisse nutzt. Um diesen Prozess auf höhere Stufen zu heben, überlegen Sie, wie externe Experten miteinbezogen werden könnten, um unabhängig zu bewerten, was im Kontext Ihrer Organisation zu den Best Practices gehört.
                </p>
            ',
            'ahead' => '
                <p>
                    Überlegen Sie, wie Ihre Organisation nicht nur ein Spitzenreiter beim Management von Best Practices werden kann, sondern auch ein selbstständiger Vordenker für die gesamte Branche. Sie können sich damit sogar einen Wettbewerbsvorteil gegenüber vergleichbaren Unternehmen verschaffen.
                </p>
            '
        ],
        'q11'=>[
            'behind' => '
                <p>
                    Um einen höheren Reifegrad zu erreichen, müssen Sie in Erfahrung bringen, welche Pflichten mit der Datenschutz-Grundverordnung verbunden sind, die Erfüllung dieser Pflichten planen und diesen Plan dann ausführen.
                </p>
            ',
            'inline' => '
                <p>
                    Sie wissen wahrscheinlich, welche Pflichten mit der Datenschutz-Grundverordnung verbunden sind, haben wahrscheinlich mit der Planung von Maßnahmen begonnen, um Ihre Kompetenzlücken zu schließen, und überlegen, wie Sie Best Practices anwenden können, die über die Anforderungen der Verordnung hinausgehen. Um in Ihrer Unternehmenskategorie zum Spitzenfeld zu gehören, müssen Sie diese Pläne in die Tat umsetzen.
                </p>
            ',
            'ahead' => '
                <p>
                    Um weitere Verbesserungen anzustreben, müssen Sie deutlich machen, wie Sie modernste Technologien nutzen und anhand von risikobasierten Ansätzen für die Entscheidungsfindung heranziehen. Das verringert nicht nur das Potenzial für Strafen nach der Datenschutz-Grundverordnung sondern könnte auch zu einem Wettbewerbsvorteil führen.
                </p>
            '
        ],
        'q12'=>[
            'behind' => '
                <p>
                    Best Practices im Bereich des Cyber-Risikomanagements konzentrieren sich auf permantente  Berichterstattung oder Berichterstattung in Echtzeit. Arbeiten Sie neben der Analytik an der Verbesserung Ihrer Log-Protokollierung, um von einem reaktiven zu einen proaktiven Ansatz zu kommen.
                </p>
            ',
            'inline' => '
                <p>
                    Best Practices im Bereich des Cyber-Risikomanagements konzentrieren sich auf häufige Berichterstattung und Berichterstattung in Echtzeit. Arbeiten Sie neben der Analytik an der Verbesserung Ihrer Log-Protokollierung, um von einem reaktiven zu einen proaktiven Ansatz zu kommen.
                </p>
            ',
            'ahead' => '
                <p>
                    Überlegen Sie wie kontinuierliche Berichterstattung über eine einfache Übersicht hinaus und dank integrierter operativer Kenntnisse als treibender Faktor für die geschäftliche Entscheidungsfindung genutzt werden kann, um weitere Verbesserungen zu erzielen.
                </p>
            '
        ],
        'q13'=>[
            'behind' => '
                <p>
                    Best Practices im Bereich des Cyber-Risikomanagements konzentrieren sich auf permantente  Berichterstattung oder Berichterstattung in Echtzeit. Arbeiten Sie neben der Analytik an der Verbesserung Ihrer Log-Protokollierung, um von einem reaktiven zu einen proaktiven Ansatz zu kommen.
                </p>
            ',
            'inline' => '
                <p>
                    Best Practices im Bereich des Cyber-Risikomanagements konzentrieren sich auf permantente  Berichterstattung oder Berichterstattung in Echtzeit. Arbeiten Sie neben der Analytik an der Verbesserung Ihrer Log-Protokollierung, um von einem reaktiven zu einen proaktiven Ansatz zu kommen.
                </p>
            ',
            'ahead' => '
                <p>
                    Überlegen Sie wie kontinuierliche Berichterstattung über eine einfache Übersicht hinaus und dank integrierter operativer Kenntnisse als treibender Faktor für die geschäftliche Entscheidungsfindung genutzt werden kann, um weitere Verbesserungen zu erzielen.
                </p>
            '
        ],
        'q14'=>[
            'behind' => '
                <p>
                    Es ist unmöglich, etwas zu schützen, das Sie nicht steuern können. Es gehört zu den Best Practices, integrierte Tools und Automatisierung einzusetzen, damit die einheitliche Anwendung von Richtlinien gewährleistet ist.
                </p>
            ',
            'inline' => '
                <p>
                    Es ist unmöglich, etwas zu schützen, das Sie nicht steuern können. Es gehört zu den Best Practices, integrierte Tools und Automatisierung einzusetzen, damit die einheitliche Anwendung von Richtlinien gewährleistet ist.
                </p>
            ',
            'ahead' => '
                <p>
                    Um weitere Fortschritte beim Cyber-Risikomanagement zu erzielen, müssen Sie überlegen, wie weitere Elemente automatisiert und innerhalb der End-to-End-Management-Suite integriert werden können, sodass die Entwicklung einer agileren IT-Abteilung gefördert wird.
                </p>
            '
        ],
        'q15'=>[
            'behind' => '
                <p>
                    Best Practices im Bereich des Cyber-Risikomanagements setzen Automatisierung in großem Umfang ein. Denken Sie darüber nach, welche Bereiche von einer Automatisierung profitieren würden (insbesondere jene, die weniger kritisch und repetitiv sind, aber auch jene, bei denen eine schnelle Reaktion äußerst wichtig ist), um ein ausgewogenes Verhältnis zwischen einer Automatisierung (wo möglich) und manuellen Prozessen (wo erforderlich) zu erreichen.
                </p>
            ',
            'inline' => '
                <p>
                    Best Practices im Bereich des Cyber-Risikomanagements setzen Automatisierung in großem Umfang ein. Denken Sie darüber nach, welche Bereiche von einer Automatisierung profitieren würden (insbesondere jene, die weniger kritisch und repetitiv sind, aber auch jene, bei denen eine schnelle Reaktion äußerst wichtig ist), um ein ausgewogenes Verhältnis zwischen einer Automatisierung (wo möglich) und manuellen Prozessen (wo erforderlich) zu erreichen.
                </p>
            ',
            'ahead' => '
                <p>
                    Um wirklich ein Spitzenreiter zu werden, sollten Sie überlegen, welche Schritte ergriffen werden können, um Prozesse wo möglich durchgängig zu automatisieren und zu orchestrieren und das Cyber-Risikomanagement durch Agilität, Qualität und Compliance voranzutreiben.
                </p>
            '
        ],
        'q16'=>[
            'behind' => '
                <p>
                    Es gehört zu den Best Practices im Cyber-Risikomanagement, eine höhere Automatisierung anzustreben. Denken Sie darüber nach, wie Sie die Automatisierung erhöhen können, um die Effizienz und Wirksamkeit Ihrer IT-Sicherheitsmaßnahmen zu steigern.
                </p>
            ',
            'inline' => '
                <p>
                    Es gehört zu den Best Practices im Cyber-Risikomanagement, eine höhere Automatisierung anzustreben. Denken Sie darüber nach, wie Sie die Automatisierung erhöhen können, um die Effizienz und Wirksamkeit Ihrer IT-Sicherheitsmaßnahmen zu steigern.
                </p>
            ',
            'ahead' => '
                <p>
                    Konzentrieren Sie sich nicht einfach auf die Chance für eine höhere Automatisierung, sondern berücksichtigen Sie auch den Faktor Mensch. Um die größte Wirkung zu erzielen, müssen Sie analysieren, wie die von Ihnen verfolgten Automatisierungsinitiativen Ihre Sicherheitsmitarbeiter ergänzen können. Gleichzeitig sollten Sie Ihre Mitarbeiter fortbilden, damit sie effektiver arbeiten und schwierigere Aufgaben ausführen können.
                </p>
            '
        ],
        'q17'=>[
            'behind' => '
                <p>
                    Unternehmen mit den fortschrittlichsten Ansätzen für das Cyber-Risikomanagement setzen verschiedene Sicherheitsprodukte, die das gesamte Unternehmensnetzwerk schützen, in großem Umfang ein. Wenn Sie mit externen Spezialisten für Sicherheitsservices zusammenarbeiten, die Sie bei der Entwicklung und Umsetzung angemessener Ansätze unterstützen, kann dies die Zeit bis zur Implementierung verkürzen und die Kompetenzen stärken. 
                </p>
            ',
            'inline' => '
                <p>
                    Unternehmen mit den fortschrittlichsten Ansätzen für das Cyber-Risikomanagement setzen verschiedene Sicherheitsprodukte, die das gesamte Unternehmensnetzwerk schützen, in großem Umfang ein. Wenn Sie mit externen MSS-Anbietern zusammenarbeiten, die Sie bei der Entwicklung und Umsetzung angemessener Ansätze unterstützen, kann dies die Zeit bis zur Implementierung verkürzen und die Kompetenzen stärken. 
                </p>
            ',
            'ahead' => '
                <p>
                    Um alle Möglichkeiten auszureizen, sollten Sie berücksichtigen, welchen Beitrag MSS-Anbieter leisten können. MSS-Anbieter können die Daten für das Management von Sicherheitstools und -geräten in von Big Data angetriebene Correlation Engines eingeben und die ausgegebenen Daten dann in Management-Dashboards anzeigen. Das hilft, die Entscheidungsfindung voranzubringen, da Informationen über die sich verändernde Sicherheitslage in Echtzeit zur Verfügung stehen.
                </p>
            '
        ],
        'q25'=>[
            'behind' => '
                <p>
                    Um die Standardverfahren in Ihrer Unternehmenskategorie umzusetzen, müssen Sie überlegen, wo MSS-Anbieter zusätzlich eingesetzt werden können, sodass ein ausgewogenes Verhältnis zwischen internen Teams und MSS-Anbietern erreicht wird. Interne Teams sollten dort eingesetzt werden, wo sie notwendig sind, und MSS-Anbieter in anderen Bereichen.
                </p>
            ',
            'inline' => '
                <p>
                    Überlegen Sie, wie Sie das Angebot externe Anbieter öfter in größerem Umfang nutzen können. Bei der Zusammenarbeit profitieren Sie von deren Angebotsvielfalt, Kompetenz und umfassenderen Kenntnissen zur Verbesserung Ihres Sicherheitsansatzes, verlieren aber nicht die Übersicht und die Kontrolle über Ihre Sicherheitslage, da interne Ressourcen weiterhin eine wichtige Rolle spielen.
                </p>
            ',
            'ahead' => '
                <p>
                    Was Ihren Ansatz zur Zusammenarbeit mit MSS-Anbietern betrifft, sind Sie ein Spitzenreiter. Sie nutzen das Angebot in großem Umfang und auf ausgewogene Weise ein als einen komplementären Bereitstellungskanal gegenüber internen Ressourcen darstellen. Sie sollten versuchen, den Einsatz von MSS zu optimieren, um bei der Einführung und Umsetzung von Best Practices Fortschritte zu erzielen.
                </p>
            '
        ],
        'q18'=>[
            'behind' => '
                <p>
                    Malware-Scans und ATP/Sandboxing gehören heute zu den Standardtechnologien für Compliance und Best Practices. Sie sollten die Möglichkeiten dieser Technologien analysieren, wenn Sie dies noch nicht getan haben. Analyse- und Gefahrenerkennungsservices  (Threat Intelligence) bieten einen erweiterten Schutz vor neuen Bedrohungsquellen. Überlegen Sie also, ob diese Technologien bei der Verbesserung des Risikoprofils Ihres Unternehmens helfen könnten. Künstliche Intelligenz und Heuristik sind hauptsächlich für ausgereifte und fortgeschrittene Sicherheitsmaßnahmen geeignet. Behalten Sie sie also für die Zukunft im Hinterkopf.
                </p>
            ',
            'inline' => '
                <p>
                    Malware-Scans und ATP/Sandboxing gehören heute zu den Standardtechnologien für Compliance und Best Practices. Sie sollten die Möglichkeiten dieser Technologien analysieren, wenn Sie dies noch nicht getan haben. Analyse- und Gefahrenerkennungsservices  (Threat Intelligence) bieten einen erweiterten Schutz vor neuen Bedrohungsquellen. Überlegen Sie also, ob diese Technologien bei der Verbesserung des Risikoprofils Ihres Unternehmens helfen könnten. Künstliche Intelligenz und Heuristik sind hauptsächlich für ausgereifte und fortgeschrittene Sicherheitsmaßnahmen geeignet. Behalten Sie sie also für die Zukunft im Hinterkopf.
                </p>
            ',
            'ahead' => '
                <p>
                    Künstliche Intelligenz und Heuristik entwickeln sich weiter und Sie sollten diese Verfahren anwenden, wenn Sie dies nicht bereits tun, um weiterhin eine Führungsrolle anzustreben.
                </p>
            '
        ],
        'q19'=>[
            'behind' => '
                <p>
                    Forensische Protokollierung und Analyse sowie Ausfallsicherung/Systemwiederherstellung sind Standardtechnologien und Sie sollten diese einsetzen, wenn Sie dies noch nicht tun. Die meisten größeren (und viele nicht so große) Unternehmen arbeiten bei der Reaktion auf Sicherheitsvorfälle mit externen Service-Partnern zusammen, entweder auf Vertrags- oder auf Ad-hoc-Basis. Überlegen Sie also, ob Ihnen dies helfen würde, das Risikoprofil Ihrer Organisation zu verbessern. Honeypots/Informationsgewinnung über Angreifer und Tiger Teams sind hauptsächlich für große, ausgereifte und fortschrittliche Sicherheitsmaßnahmen geeignet. Sie kommen deshalb später zum Einsatz.
                </p>
            ',
            'inline' => '
                <p>
                    Forensische Protokollierung und Analyse sowie Ausfallsicherung/Systemwiederherstellung sind Standardtechnologien. Die meisten größeren (und viele nicht so große) Unternehmen arbeiten heute bei der Reaktion auf Sicherheitsvorfälle mit externen Service-Partnern zusammen, entweder auf Vertrags- oder auf Ad-hoc-Basis. Auch Sie sollten dies tun, falls es bisher noch nicht geschehen ist. Honeypots/Informationsgewinnung über Angreifer und Tiger Teams sind nicht nur für die größten Unternehmen geeignet. Überlegen Sie also, ob Ihnen diese Verfahren helfen würden, das Risikoprofil Ihres Unternehmens zu verbessern.
                </p>
            ',
            'ahead' => '
                <p>
                    Honeypot/Informationsgewinnung über Angreifer und Tiger Teams entwickeln sich zu Standardverfahren großer, ausgereifter und fortschrittlicher Sicherheitsmaßnahmen und Sie sollten sie anwenden, falls Sie dies noch nicht tun.
                </p>
            '
        ],
        'q20'=>[
            'behind' => '
                <p>
                    Richtlinienaktualisierungen und eine Richtlinie für die Notfallwiederherstellung sind Standard und Sie sollten diese Verfahren anwenden, falls Sie dies noch nicht tun. Die meisten Unternehmen führen Schadensbewertungen durch und viele arbeiten mit externen Anbietern zusammen, die auf die Notfallwiederherstellung spezialisiert sind. Denken Sie also darüber nach, ob sich damit Ihre Disaster-Recovery-Kompetenzen verbessern lassen. Automatisierte Wiederherstellungsfunktionen, die auf maschinellem Lernen basieren, entwickeln sich schnell weiter und sollten im Auge behalten werden.
                </p>
            ',
            'inline' => '
                <p>
                    Die meisten Unternehmen führen Schadensbewertungen durch und viele arbeiten mit externen Anbietern zusammen, die auf die Notfallwiederherstellung spezialisiert sind. Auch Sie sollten dies tun, falls Sie es bisher noch nicht getan haben. Automatisierte Problembehebungsfunktionen, die auf maschinellem Lernen basieren, entwickeln sich schnell weiter. Denken Sie also darüber nach, ob sich damit Ihre Disaster-Recovery-Kompetenzen verbessern lassen.
                </p>
            ',
            'ahead' => '
                <p>
                    Automatisierte Problembehebungsfunktionen, die auf maschinellem Lernen basieren, entwickeln sich schnell weiter. Sie sollten sie verwenden, falls Sie dies noch nicht tun.
                </p>
            '
        ],
        'q21'=>[
            'behind' => '
                <p>
                    Wir leben in einer Zeit, in der Sicherheitsverletzungen unvermeidbar sind. Deshalb ist es wichtig, genau zu wissen, welche Auswirkungen eine Sicherheitsverletzung wahrscheinlich haben würde, und schon einen diesbezüglichen Maßnahmenplan zu erstellen. Dazu gehört es, das potenzielle Ausmaß der Risiken zu kennen und das Risiko zu bewerten, das mit bestimmten Datenkategorien wie zum Beispiel personenbezogenen Daten verbunden ist. Es ist auch von grundlegender Bedeutung, dass Sie die Lage Ihrer erweiterten Lieferkette oder Partner kennen, sowohl hinsichtlich der Übernahme der Sicherheitslücken von Dritten als auch bezüglich der neuen Mithaftungsvorschriften, die mit der Datenschutz-Grundverordnung eingeführt werden.
                </p>
            ',
            'inline' => '
                <p>
                     Wir leben in einer Zeit, in der Sicherheitsverletzungen unvermeidbar sind. Deshalb ist es gut, dass Sie genau wissen, welche Auswirkungen eine Sicherheitsverletzung wahrscheinlich haben würde, und schon einen diesbezüglichen Maßnahmenplan zu erstellen. Es ist von grundlegender Bedeutung, dass Sie die Lage Ihrer erweiterten Lieferkette oder Partner kennen, sowohl hinsichtlich der Übernahme der Sicherheitslücken von Dritten als auch bezüglich der neuen Mithaftungsvorschriften, die mit der Datenschutz-Grundverordnung eingeführt werden. 
                </p>
            ',
            'ahead' => '
                <p>
                    Ein wichtiger nächster Schritt ist, dass Sie die Lage im geschäftlichen Umfeld (Lieferkette und Partner) kennen, sowohl hinsichtlich der Übernahme der Sicherheitslücken von Dritten als auch bezüglich der neuen Mithaftungsvorschriften, die mit der Datenschutz-Grundverordnung eingeführt werden.
                </p>
            '
        ],
        'q23'=>[
            'behind' => '
                <p>
                    Heutzutage ist es unerlässlich, dass Dritte eine Sicherheitsüberprüfung durchführen – selbst in fortschrittlichen Umgebungen, wo die „Beurteilung der eigenen Hausaufgaben“ zu Nachlässigkeiten führen kann. Die laufende Überprüfung ist nun das erwartete Standardverfahren. Viele Schritte davon können jetzt automatisiert werden. Penetrationstests durch Dritte sollten mindestens alle sechs Monate durchgeführt werden, weil sich die Bedrohungslandschaft so schnell ändert. Wenn Sie die Tests weniger häufiger durchführen, ist Ihr Unternehmen einem höheren Risiko ausgesetzt.
                </p>
            ',
            'inline' => '
                <p>
                    Heutzutage ist es unerlässlich, dass Dritte eine Sicherheitsüberprüfung durchführen – selbst in fortschrittlichen Umgebungen, wo die „Beurteilung der eigenen Hausaufgaben“ zu Nachlässigkeiten führen kann. Die laufende Überprüfung ist nun das erwartete Standardverfahren. Viele Schritte davon können jetzt automatisiert werden. Penetrationstests durch Dritte sollten mindestens alle sechs Monate durchgeführt werden, weil sich die Bedrohungslandschaft so schnell ändert. Wenn Sie die Tests weniger häufiger durchführen, ist Ihr Unternehmen einem höheren Risiko ausgesetzt. 
                </p>
            ',
            'ahead' => '
                <p>
                    Heutzutage ist es unerlässlich, dass Dritte eine Sicherheitsüberprüfung durchführen – selbst in fortschrittlichen Umgebungen, wo die „Beurteilung der eigenen Hausaufgaben“ zu Nachlässigkeiten führen kann. Die laufende Überprüfung ist nun das erwartete Standardverfahren. Viele Schritte davon können jetzt automatisiert werden. Penetrationstests durch Dritte sollten mindestens alle sechs Monate durchgeführt werden, weil sich die Bedrohungslandschaft so schnell ändert. Wenn Sie die Tests weniger häufiger durchführen, ist Ihr Unternehmen einem höheren Risiko ausgesetzt.
                </p>
            '
        ],
        'q24'=>[
            'behind' => '
                <p>
                    Empfohlen wird eine Häufigkeit von ein bis drei Monaten, je nach Komplexität und Kontext Ihrer Umgebung und je nach Bedrohungsrisiko Ihrer spezifischen Branche. Wenn Sie zwischen den Tests mehr Zeit verstreichen lassen, gehen Sie das Risiko ein, dass wichtige Mitarbeiter nicht ausreichend auf den unvermeidlichen Sicherheitsverstoß vorbereitet sind. Außerdem laufen Sie angesichts neuer Gesetze Gefahr, mit hohen Strafen belegt zu werden. Streben Sie danach, Ihre Tests und Berichterstattung zu verbessern, aber versuchen Sie nicht, die Häufigkeit auf Kosten der Kompetenzen und Kapazitäten zu erhöhen. Wöchentliche oder kontinuierliche Tests sind für gewöhnlich nur für die fortschrittlichsten – oder risikoreichsten – Organisationen geeignet, wo eine schlechte Reaktion auf einen Sicherheitsvorfall katastrophale Auswirkungen haben würde.
                </p>
            ',
            'inline' => '
                <p>
                    Empfohlen wird eine Häufigkeit von ein bis drei Monaten, je nach Komplexität und Kontext Ihrer Umgebung und je nach Bedrohungsrisiko Ihrer spezifischen Branche. Wenn Sie zwischen den Tests mehr Zeit verstreichen lassen, gehen Sie das Risiko ein, dass wichtige Mitarbeiter nicht ausreichend auf den unvermeidlichen Sicherheitsverstoß vorbereitet sind. Außerdem laufen Sie angesichts neuer Gesetze Gefahr, mit hohen Strafen belegt zu werden. Streben Sie danach, Ihre Tests und Berichterstattung zu verbessern, aber versuchen Sie nicht, die Häufigkeit auf Kosten der Kompetenzen und Kapazitäten zu erhöhen. Wöchentliche oder kontinuierliche Tests sind für gewöhnlich nur für die fortschrittlichsten – oder risikoreichsten – Organisationen geeignet, wo eine schlechte Reaktion auf einen Sicherheitsvorfall katastrophale Auswirkungen haben würde.
                </p>
            ',
            'ahead' => '
                <p>
                    Da Cyber-Angriffe immer kompetenter und häufiger durchgeführt werden, gehört es zu den entscheidenden Fähigkeiten von Spitzenreitern in der digitalen Wirtschaft, einen Sicherheitsverstoß zu erkennen und angemessen darauf zu reagieren. Konzentrieren Sie sich darauf, weiterhin Best Practices umzusetzen, die über alle Compliance-Standards hinausgehen, und sorgen Sie dafür, dass Ihre Stärken und Schwächen kontinuierlich von externen Spezialisten bewertet werden.
                </p>
            '
        ],
    ]
);