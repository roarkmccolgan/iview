<?php

//SPLUNK
return [
    'title' => 'IDC\s Security Assessment',
    'sub-title' => 'Wie sicher ist Ihr Unternehmen?',
    'stage1' => 'Stufe 1: Schlecht',
    'stage2' => 'Stufe 2: Normal',
    'stage3' => 'Stufe 3: Gut',
    'stage4' => 'Stufe 4: Ambitioniert',
    'stage5' => 'Stufe 5: Ausgezeichnet',
    'complete_thankyou' => 'Vielen Dank! :Fname,',
    'complete_body' => '
        Ihr individuell angepasster Bericht erscheint in Kürze in Ihrem Posteingang. Sehen Sie in Ihrem Spamfilter oder Junk-Ordner nach, damit er nicht verloren geht. <br/><br/>
        <a class="btn btn--primary" target="_blank" href="https://www.splunk.com/en_us/solutions/solution-areas/security-and-fraud/security-investigation.html">
            Klicken Sie hier für weitere Informationen
        </a>',
    'complete_tweet' => 'I\'ve just taken the @IDCEMEA Security Assessment Tool for @splunk. Interested? ', // http://bit.ly/2gslXEh
    'email'=>[
        'subject' => 'IDC\'s Security Assessment',
        'hi' => 'Sehr geehrte(r) :Fname',
        'body' => 'der Bericht zu Ihrer Reaktionsbereitschaft bei Sicherheitsvorfällen liegt nun vor. <br/>
            Er enthält die Ergebnisse Ihrer Beurteilung und hilft Ihnen, sich im Vergleich mit anderen Unternehmen einzuschätzen. ',
        'link' => 'Bericht herunterladen',
        'extra' => 'Nachdem Sie den Bericht gelesen haben, sollten Sie <a href="https://www.splunk.com/en_us/solutions/solution-areas/security-and-fraud/security-investigation.html" style="color:#65A637">Splunk besuchen</a>.',
        'regards' => 'Mit freundlichen Grüßen, ',
        'team' => 'Das IDC-Team',
    ],
    'introduction' => '
        <h2>Gesamtergebnis</h2>
        <p>
            Basierend auf Ihren Antworten wurden Sie mit <strong>:percent</strong>% der Unternehmen insgesamt in die Bereitschaftsgruppe <strong>:result</strong>, eingeordnet, d. h. Stufe <strong>:number:ordinal</strong> von insgesamt fünf Stufen.
        </p>
        <div style="position: relative; width: 170mm; height: 80mm; background: url(http://security.idcready.net/images/tools/5/overall_graph_bg_de.svg); background-size: 170mm 80mm;">
            <div id="user" style="position:absolute; top: 24.694mm; left:40.5mm; width: :widthuser height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 33mm; left:40.5mm; width: :widthlang height: 7mm; background-color: #00ADEE"></div>
            <div id="user" style="position:absolute; top: 49mm; left:40.5mm; width: :widthuser height: 7mm; background-color: #004B85"></div>
            <div id="size" style="position:absolute; top: 57mm; left:40.5mm; width: :widthsize height: 7mm; background-color: #00ADEE"></div>
        </div>
        <h2>Gesamtübersicht</h2>
        <p>
            Im Vergleich mit Unternehmen mit ausgezeichneten Kompetenzen liegt Ihr Unternehmen:
        </p>
        <ul>
            <li>:overalllang</li>
            <li>:overallsize</li>
        </ul>
        <p>
            <strong class="blue">Ihre Performance im Detail</strong><br/>
            Dieses Beurteilungstool soll einschätzen, inwieweit Ihr Unternehmen heute und in Zukunft in der Lage ist, mit den steigenden Risiken umzugehen, denen sich digitale Unternehmen gegenübersehen.<br/>
            Wir haben uns folgende Schlüsselbereiche der IT-Sicherheit angesehen:
        </p>
        <ul class="primary">
            <li>Sicherheitsstrategie</li>
            <li>Vorfallserkennung</li>
            <li>Vorfallsreaktion</li>
        </ul>
        <p>
            Ihre Performance in den einzelnen Bereichen wird in Abbildung 3 mit ähnlichen Unternehmen verglichen.
        </p>
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>IDC: Reaktionsbereitschaft bei Sicherheitsvorfällen nach Kompetenz</h2>
        <div class="spacer"></div>
        <div style="position: relative; width: 170mm; height: 105mm; background: url(http://security.idcready.net/images/tools/5/section_graph_bg_de.svg); background-size: 170mm 105mm;">
            <div id="user" style="position:absolute; top: 24.694mm; left:44.3mm; width: :widthuser-security-strategy height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 33mm; left:44.3mm; width: :width-security-strategy height: 7mm; background-color: #00ADEE"></div>

            <div id="user" style="position:absolute; top: 48mm; left:44.3mm; width: :widthuser-incident-detection height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 56.3mm; left:44.3mm; width: :width-incident-detection height: 7mm; background-color: #00ADEE"></div>

            <div id="user" style="position:absolute; top: 72mm; left:44.3mm; width: :widthuser-incident-response height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 80mm; left:44.3mm; width: :width-incident-response height: 7mm; background-color: #00ADEE"></div>
        </div>
        <h2>Welche Verbesserungsmaßnahmen wären sinnvoll?</h2>
        <p>
            Unabhängig von Ihrer Stufe gibt es einige Bereiche, die sich ständig weiterentwickeln und auf die Sie sich zuallererst konzentrieren sollten:
        </p>
        <ul>
            <li>Integration: Vermeiden Sie eine zentrale Ansicht.</li>
            <li>Proaktiver Ansatz: Reduzieren Sie die Zeit zwischen Sicherheitsvorfall und Erkennung von Monaten auf Stunden (oder noch weniger).</li>
            <li>Nase vorn bei der Compliance: Für die meisten Unternehmen ist es schwer genug, Compliance zu erreichen, geschweige denn, sie aufrecht zu erhalten.</li>
            <li>Best Practices: Seien Sie sich bewusst, dass sich das Risikoumfeld ständig ändert und dass Compliance und aufsichtsrechtliche Rahmenwerke oft schon bei der Einführung um Jahre veraltet sind. Best Practices sind der beste Weg, die Risiken zu mindern. Und ein zusätzlicher Vorteil ist, dass sich, wenn Sie diesen Ansatz richtig verfolgen, die Compliance von selbst einstellt.</li>
        </ul>
        <div class="pb"></div>
    ',
    'security-strategy-heading' => '<h2>Verbesserungen der Sicherheitsstrategie</h2>',
    'incident-detection-heading' => '<h2>Verbesserungen der Vorfallserkennung</h2>',
    'incident-response-heading' => '<h2>Verbesserungen der Vorfallsreaktion</h2>',
    'a1-a' => '
    <p>
        Für jedes moderne, digitale Unternehmen ist es unerlässlich, die Sicherheit an der Unterstützung der Geschäftsziele auszurichten. Ein spontaner oder reaktiver Ansatz bei der Sicherheit bremst Ihr Unternehmen aus und setzt es dem Risiko potenzieller Geldstrafen im Rahmen der Compliance-Gesetze aus. Sie sollten sich primär darum bemühen, ein besseres Bewusstsein dafür zu vermitteln, wie Sicherheit neue Geschäftschancen begünstigt. Machen Sie der Geschäftsleitung deutlich, wie der strategische Wert der IT-Sicherheit bei der Aufstellung eines längerfristigen Plans hilft.
    </p>',
    'a1-b' => '
    <p>
        Für jedes moderne, digitale Unternehmen ist es unerlässlich, die Sicherheit an der Unterstützung der Geschäftsziele auszurichten. Sie handeln richtig, wenn Sie sich um eine einheitlichere Sicherheit durch wiederholbare Verfahren bemühen. Sie sollten sich jedoch auch darum bemühen, ein besseres Bewusstsein dafür zu vermitteln, wie Sicherheit neue Geschäftschancen begünstigt, und der Geschäftsleitung deutlich machen, wie der strategische Wert der IT-Sicherheit bei der Aufstellung eines längerfristigen Plans hilft.
    </p>',
    'a5-a' => '
    <p>
        Neue Ansätze bei Governance und Compliance im Bereich der Sicherheit legen mehr Wert auf die Umsetzung von Best Practices. In diesem Bereich besteht bei Ihnen derzeit ein Risiko. Wenn Sie sich auf Best Practices konzentrieren und das durch Risikomanagement ausgleichen, fördern Sie sowohl die Compliance als auch die geschäftliche Flexibilität. Es ist oft schwer, Kompetenzen für Best Practices intern aufzubauen. Deshalb sollten Sie die Nutzung externer Fachleute in Erwägung ziehen, die Ihnen bei der Definition sowohl des Anforderungsumfangs als auch der möglichen Lösungen helfen können.
    </p>',
    'a5-b' => '
    <p>
        Neue Ansätze bei Governance und Compliance im Bereich der Sicherheit legen mehr Wert auf die Umsetzung von Best Practices. Sie haben sich dieser Frage intern angenommen, aber Sie benötigen auch Fachkräfte, die eine Sicht des gesamten Sicherheitsumfelds haben und Ihnen helfen können, Lücken und Schwächen in Ihrem Ansatz zu erkennen. Wenn Sie sich auf Best Practices konzentrieren und das durch Risikomanagement ausgleichen, fördern Sie sowohl die Compliance als auch die geschäftliche Flexibilität. Es ist oft schwer, Kompetenzen für Best Practices intern aufzubauen. Deshalb sollten Sie die Nutzung externer Fachleute in Erwägung ziehen, die Ihnen bei der Definition sowohl des Anforderungsumfangs als auch der möglichen Lösungen helfen können.
    </p>',
    'a7-a' => '
    <p>
        Bedrohungen verändern sich rasch; Angriffe werden immer geschickter und ausgereifter. Hier müssen Sie der Entwicklung voraus sein, aber Sie haben es noch nicht geschafft, erstklassige Sicherheitskompetenzen zu entwickeln. Anzunehmen, dass die Sicherheitsbarrieren durchbrochen wurden, und diese Vorfälle proaktiv aufzuspüren: Das ist die Methode, die IT-Sicherheitsorganisationen in Zukunft anwenden müssen. Arbeiten Sie einen Geschäftsplan aus, der Investitionen in neue Erkennungsfunktionen unterstützt, z. B. Analyse und maschinelles Lernen.
    </p>',
    'a7-b' => '
    <p>
        Bedrohungen verändern sich rasch; Angriffe werden immer geschickter und ausgereifter. Hier müssen Sie der Entwicklung voraus sein. Sie sind auf dem richtigen Weg, erstklassige Sicherheitskompetenzen zu entwickeln, brauchen hier jedoch noch Zeit. Anzunehmen, dass die Sicherheitsbarrieren durchbrochen wurden, und diese Vorfälle proaktiv aufzuspüren: Das ist die Methode, die IT-Sicherheitsorganisationen in Zukunft anwenden müssen. Arbeiten Sie einen Geschäftsplan aus, der Investitionen in neue Erkennungsfunktionen unterstützt, z. B. Analyse und maschinelles Lernen.
    </p>',
    'a8-a' => '
    <p>
        Das Management der ersten Reaktion auf einen Sicherheitsvorfall ist von entscheidender Bedeutung, wenn es gilt, das Risiko einzugrenzen und mögliche Schäden zu mindern. Bis jetzt fehlt Ihnen hier noch die nötige Planung. Eine Plattform, die diesen Bereich standardisiert und verwaltet, kann besonders nützlich sein, insbesondere angesichts der Meldepflichten, die in neuen Gesetzen, etwa der Datenschutz-Grundverordnung, vorgesehen sind, oder zur Einhaltung der Vorschriften von Versicherungen im Zusammenhang mit IT-Sicherheit.
    </p>',
    'a8-b' => '
    <p>
        Das Management der ersten Reaktion auf einen Sicherheitsvorfall ist von entscheidender Bedeutung, wenn es gilt, das Risiko einzugrenzen und mögliche Schäden zu mindern. Sie haben gute Anfänge gemacht, sollten die Planung aber bald noch näher ausarbeiten. Eine Plattform, die diesen Bereich standardisiert und verwaltet, kann besonders nützlich sein, insbesondere angesichts der Meldepflichten, die in neuen Gesetzen, etwa der Datenschutz-Grundverordnung, vorgesehen sind, oder zur Einhaltung der Vorschriften von Versicherungen im Zusammenhang mit IT-Sicherheit.
    </p>',
    'a11-a' => '
    <p>
        Ein gut definierter und getesteter Reaktionsplan ist bei Vorfällen unerlässlich, um dafür zu sorgen, dass alle Verpflichtungen und Anforderungen erfüllt werden. Eine weitest mögliche Automatisierung dieses Verfahrens trägt erheblich dazu bei, den operativen Aufwand zu reduzieren. 
    </p>',
    'a11b-a' => '
    <p>
        Je länger sich Mitarbeiter mit einem Sicherheitsvorfall beschäftigen müssen, desto höher der Einfluss auf Produktivität und Geschäftsrisiko. Das wichtigste Ziel sollte darin bestehen, weniger Zeit mit der Untersuchung und Abhilfemaßnahmen zu verbringen, idealerweise durch einen Ansatz, mit dem die Reaktion auf derartige Vorfälle standardisiert und automatisiert wird.
    </p>',
    'a13-a' => '
    <p>
        Sie haben Mühe, mit der Anzahl der Vorfälle fertig zu werden. Anstatt mehr Mitarbeiter hinzuzuziehen, um die Aufgabe zu bewältigen, sollten Sie Wege finden, die Erkennung und Abhilfemaßnahmen effektiver zu gestalten – z. B. durch Automatisierung und Prioritätensetzung.
    </p>',
    'a13-b' => '
    <p>
        Sie sind zwar generell in der Lage, mit der Anzahl der Vorfälle fertig zu werden, aber es ist nicht immer einfach und kann heikle Momente geben. Anstatt mehr Mitarbeiter hinzuzuziehen, um die Aufgabe zu bewältigen, sollten Sie Wege finden, die Erkennung und Abhilfemaßnahmen effektiver zu gestalten – z. B. durch Automatisierung und Prioritätensetzung.
    </p>',
    'a14-a' => '
    <p>
        Was man nicht messen kann, kann man nicht effektiv sichern. Und Sie führen nicht genug Messungen durch, um das Ausmaß und die Auswirkungen einer Sicherheitsverletzung einschätzen zu können. Ein proaktiver Ansatz bei der Erfassung und Analyse von Informationen hilft Ihnen nicht nur, Sicherheitsvorfälle zuverlässiger und schneller zu entdecken, sondern auch, den Vorfall durch Reverse Engineering nachzuvollziehen, damit Sie Ihre Sicherheitsmaßnahmen und Ihr Risikoprofil verbessern und zukünftigen Angriffen entgegenwirken können.
    </p>',
    'a14-b' => '
    <p>
        Was man nicht messen kann, kann man nicht effektiv sichern. Sie bewegen sich in die richtige Richtung. Es ist jedoch leichter, Vorfälle effektiver zu bekämpfen, wenn Sie Ihre Kompetenz bei der Erfassung von Informationen und der Überwachung insgesamt verbessern. Ein proaktiver Ansatz bei der Erfassung und Analyse von Informationen hilft Ihnen nicht nur, Sicherheitsvorfälle zuverlässiger und schneller zu entdecken, sondern auch, den Vorfall durch Reverse Engineering nachzuvollziehen, damit Sie Ihre Sicherheitsmaßnahmen und Ihr Risikoprofil verbessern und zukünftigen Angriffen entgegenwirken können.
    </p>',
    'summary' => '
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>Wichtige Hilfestellung</h2>
        <p>
            Die Sicherheit ist in der Regel eines der größten Hindernisse für neue IT-Initiativen, von der Entwicklung und Implementierung neuer Anwendungen und Services bis hin zur Nutzung neuer IT-Architekturen wie der Hybrid-Cloud. Proaktive Überwachung der IT-Sicherheit, Erkennung von Vorfällen und Reaktion auf Vorfälle – auf einer standardisierten Plattform mit Automatisierung und Analyse – entwickelt sich zu einem der Unterscheidungsmerkmale, mit denen sich die Top-Performer unter den digitalen Unternehmen, die sich schnell mit den Marktbedingungen entwickeln können, vom Rest abheben. Dieses Ziel lässt sich nicht ohne Risiken und Tücken erreichen:
        </p>
        <ul>
            <li>Zuallererst brauchen Sie einen Plan: Sicherheit muss gut überlegt sein. Versuchen Sie deshalb bewusst, nicht einfach Produkte zu kaufen, wenn Sie Lücken entdecken. Nutzen Sie die Kompetenzen unabhängiger Sicherheitsexperten, die sich ihre Erfahrung und Einblicke mühsam erarbeitet haben. Lassen Sie sich helfen, Lösungen aufzubauen, die sich bewährt haben und leicht zu verwalten sind.</li>
            <li>Allzu viel ist ungesund: Es mag die beste Lösung erscheinen, alles umzuwerfen und von Neuem zu beginnen. Das ist aber selten ein produktiver Ansatz. Stattdessen sollten Sie versuchen, Ihre Kompetenzen in ausgewählten Bereichen zu verbessern, und dann auf diesem Ansatz aufbauen. Mit steigendem Verbreitungsgrad und besserer Erfahrung kann die IT-Infrastruktur erweitert werden, um von den Fortschritten zu profitieren.</li>
            <li>Bleiben Sie flexibel: Wir wissen nicht, was die Zukunft bringt. Wir wissen aber, dass eine Bindung an firmeneigene Schnittstellen die Sicherung von IT-Beständen erschwert, wenn sie sich in Zukunft weiterentwickeln und wandeln. Suchen Sie nach Lösungen, die sich gut als Stack integrieren lassen und die eine Erweiterung durch offene, stabile und gut definierte APIs und Schnittstellen unterstützen.</li>
        </ul>
    ',

    /*'introduction-image' => 'report1.jpg',*/
    'overall' => [
        'title'=>'Ihre Gesamtbewertung des Security Assessments befindet sich auf:',
        'hidetitle'=>'true',
        'image'=>'',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
    ],
    'security-strategy' => [
        'title'=>'Sicherheitsstrategie',
        'image'=>'security-strategy.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>'',
    ],
    'incident-detection' => [
        'title'=> 'Vorfallserkennung',
        'image'=>'incident-detection.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>'',
    ],
    'incident-response' => [
        'title'=> 'Vorfallsreaktion',
        'image'=>'incident-response.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>'',
    ],
];
