<?php

//fireeye
return [
    'stage1' => 'Ad-hoc',
    'stage2' => 'Opportunistico',
    'stage3' => 'Ripetibile',
    'stage4' => 'Gestito',
    'stage5' => 'Ottimizzato',
    'question-title' => 'Prestazioni Ranking Con domanda',
    'question-intro' => '
        <p>
            Adesso analizzeremo il rendimento della sua azienda nelle tre aree principali della preparazione nei confronti del rischio informatico. In ciascun caso, confronteremo il punteggio della sua azienda con quello dei suoi concorrenti con la stessa classificazione della preparazione <strong>:rating</strong>. A tale scopo, analizzeremo la posizione della sua azienda, cercando di capire se è in ritardo, in linea o in vantaggio rispetto ai concorrenti.
        </p>
        <p>
            Se il punteggio sarà "in linea", vuol dire che la sua azienda è in linea con la maggioranza delle aziende dotate delmedesimo livello di preparazione. Se il punteggio sarà "in vantaggio", vuol dire che la sua azienda sta operando in maniera efficace e deve individuare le altre aree da migliorare per un approccio più equilibrato. Se il punteggio sarà "in ritardo", vuol dire che la sua azienda dovrà dedicare attenzione e investimenti in questo settore per tornare in linea con la preparazione dei concorrenti in termini di rischio informatico.
        </p>

Se otterrai un punteggio in linea o in vantaggio in tutte le sezioni, a breve potrai passare al livello successivo in termini di preparazione."
    ',
    'completecopy' => [
        'graphtitle' => 'La tua preparazione nei confronti del rischio informatico',
        'fullreport' => 'Would you like the full report that provides you with essential guidance for advancing your Cyber Risk strategy?',
        'provide' => 'Possiamo inviarti il rapporto completo nella tua casella di posta elettronica. È sufficiente fornirci il tuo nome e l\'indirizzo email per ricevere un collegamento utile per scaricare il rapporto.',
        'stage1' => '
            <p>
                Grazie per aver completato la valutazione di IDC sul rischio informatico. In base alle sue risposte totali, la valutazione della sua azienda è ad-hoc, il più basso dei cinque disponibili.
            </p>
            <p>
                La sua azienda appartiene al 10% delle imprese collocate nella parte inferioredel ranking e offre ancora numerosi margini di miglioramento. I suoi dati e la sua azienda saranno a rischio se non verranno condotte attività urgenti per migliorare la sisuazione. Inoltre, potrai subire sanzioni e multe normative e di settore in caso di violazioni che causino la perdita di informazioni personali o riservate.
            </p>
        ',
        'stage2' => '
            <p>
                Grazie per aver completato la valutazione di IDC sul rischio informatico. In base alle risposte totali, la valutazione della sua azienda è Opportunistico il secondo più basso dei cinque disponibili.
            </p>
            <p>
                La sua azienda appartiene al 20% delle imprese collocate nella parte inferioredel ranking e offre ancora numerosi margini di miglioramento. I suoi dati e la sua azienda saranno a rischio se non verranno intraprense operazioni urgenti per migliorare la sua sisuazione. LA sua azienda potrà incorrere in multe e sanzioni normative e di settore nel caso in cui una violazione causi la perdita di informazioni riservate o personali.
            </p>
        ',
        'stage3' => '
            <p>
                Grazie per aver completato la valutazione di IDC sul rischio informatico. In base alle risposte totali, la valutazione della sua azienda è Ripetibile, il livello intermedio fra i cinque disponibili. 
            </p>
            <p>
                La sua azienda nel gruppo della maggioranza delle aziende per quanto riguarda le capacità di affrontare i rischi informatici, ma la sua attività è caratterizzata ancora da numerosi margini di miglioramento per la riduzione dei rischi e delle possibili multe e sanzioni legate alle eventuali violazioni informatiche.
            </p>
        ',
        'stage4' => '
            <p>
                Grazie per aver completato la valutazione di IDC sul rischio informatico. In base alle risposte totali, la valutazione della sua azienda è Gestito il secondo dei cinque disponibili.
            </p>
            <p>
                La sua azienda è in vantaggio rispetto al gruppo principale delle aziende e si trova tra il 20% delle aziende più efficienti in termini di capacità relative aalla gestione dei rischi informatici. Tuttavia, la sua attività è ancora caratterizzata da numerosi margini di miglioramento per la riduzione dei rischi di possibili multe e sanzioni legate a eventuali violazioni informatiche.
            </p>
        ',
        'stage5' => '
            <p>
                Grazie per aver completato la valutazione di IDC sul rischio informatico. In base alle risposte totali, la valutazione della sua azienda è Ottimizzato, il più alto dei cinque disponibili.
            </p>
            <p>
                La sua azienda è in vantaggio rispetto alla maggioranza delle aziende e si trova nel 5% delle migliori aziende per quanto riguarda le capacità relative aalla gestione dei rischi informatici. Essendo un leader, dovrai continuare a migliorare in diversi settori per ridurre ulteriormente l\'eventualità di una violazione informatica.
            </p>
        ',
        'instruction' => '
            <p>
                Possiamo inviarti il rapporto completo nella tua casella di posta elettronica.<br/>
                È sufficiente fornirci il tuo nome e l\'indirizzo email per ricevere un collegamento utile per scaricare il rapporto.
            </p>
        ',
    ],
    'complete_thankyou' => 'Grazie :Fname,',
    'complete_body' => 'A breve riceverai il tuo rapporto personalizzato nella casella di posta. Durante l\'attesa, condividi su Twitter i tuoi risultati e a confrontarli con quelli dei tuoi follower.',
    'complete_tweet' => 'Ho appena compilato il Cyber Risk Readiness Assessment sponsorizzato da Fireeye, e il risultato è livello Repeatable. Vuoi saperne di più?', // http://bit.ly/2g8WN1d
    'email'=>[
        'subject' => 'IDC Report',
        'hi' => 'Salve :Fname',
        'body' => '
            Come promesso, ecco il collegamento per scaricare il tuo rapporto di valutazione del rischio informatico.<br/>
             Il rapporto divide i tuoi risultati per categoria e ti aiuta a valutare la tua posizione nei confronti delle altre organizzazioni.
        ',
        'link' => 'Scarica il rapporto',
        'extra' => 'Dopo aver digerito il rapporto perché non visitare <a href="http://www.fireeye.com" style="color:#E66B6B">FireEye</a>',
        'regards' => 'Saluti',
        'team' => 'The IDC Team',
    ],
    'introduction_title' => 'Sommario del Report personalizzato e Classifica delle performance generali',
    'performancerankingbycategory' => 'Classifica delle performance per categoria',
    'introduction-image' => 'report.jpg',
    'overall' => [
        'title'=>'Il Vostro livello di preparazione generale per la sicurezza',
        'graph-title'=>'Comparazione generale',
        'image'=>'',
        'overall_country_graph-title' => 'Confronto con altre aziende nel tuo paese',
        'overall_size_graph-title' => 'Confronto con aziende di dimensioni simili',
        'stage1'=>'
            <p>
                Grazie per aver completato la valutazione sul rischio informatico di IDC. In base alle tue risposte totali, il livello di maturità della tua azienda è ad-hoc, il più basso dei cinque disponibili.
            </p>
            <p>
                La tua azienda appartiene al 10% delle imprese collocate nella parte inferiore della classifica e offre ancora numerosi margini di miglioramento. I tuoi dati e la tua azienda saranno a rischio se non verranno condotte attività urgenti per migliorare la situazione. Inoltre, potrai subire sanzioni normative e di settore in caso di violazioni che causino la perdita di informazioni personali o riservate.
            </p>
        ',
        'stage2'=>'
            <p>
                Grazie per aver completato la valutazione sul rischio informatico di IDC. In base alle risposte totali, li livello di maturità della tua azienda è opportunistico, il secondo più basso dei cinque disponibili.
            </p>
            <p>
                La tua azienda appartiene al 20% delle imprese collocate nella parte inferiore della classifica e offre ancora numerosi margini di miglioramento. I tuoi dati e la tua azienda saranno a rischio se non intraprenderai operazioni urgenti per migliorare la tua situazione. Potrai subire sanzioni normative e di settore nel caso in cui una violazione causi la perdita di informazioni riservate o personali.
            </p>
        ',
        'stage3'=>'
            <p>
                Grazie per aver completato la valutazione sul rischio informatico di IDC. In base alle risposte totali, li livello di maturità della tua azienda è ripetibile, il livello intermedio fra i cinque disponibili.
            </p>
            <p>
                Ti trovi nel gruppo della maggioranza delle aziende per quanto riguarda le capacità relative ai rischi informatici, ma la tua attività è caratterizzata ancora da numerosi margini di miglioramento per la riduzione dei rischi e delle possibili multe e sanzioni legate alle eventuali violazioni informatiche.
            </p>
        ',
        'stage4'=>'
            <p>
                Grazie per aver completato la valutazione sul rischio informatico di IDC. In base alle risposte totali, li livello di maturità della tua azienda è gestito, il secondo dei cinque disponibili. 
            </p>
            <p>
                Ti trovi in vantaggio rispetto al gruppo principale delle aziende e nel 20% delle aziende più efficienti in termini di capacità relative ai rischi informatici. Tuttavia, la tua attività è ancora caratterizzata da numerosi margini di miglioramento per la riduzione dei rischi di possibili sanzioni normative legate a eventuali violazioni informatiche.
            </p>
        ',
        'stage5'=>'
            <p>
                Grazie per aver completato la valutazione sul rischio informatico di IDC. In base alle risposte totali, li livello di maturità della tua azienda è ottimizzato, il più alto dei cinque disponibili.
            </p>
            <p>
                Ti trovi in vantaggio rispetto alla maggioranza delle aziende e fai parte del 5% delle migliori aziende per quanto riguarda le capacità legate ai rischi informatici. Essendo un leader, dovrai continuare a migliorare in diversi settori per ridurre ulteriormente l\'eventualità di una violazione informatica.
            </p>
        ',
    ],
    'cyber-risk-management-and-the-business' => [
        'title'=>'Cyber Risk Management e il Business',
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
                Attenzione. Sei ritardo nella gestione del rischio informatico e devi migliorare la situazione per ridurre l\'esposizione a minacce informatiche, potenziali sanzioni o danni alla reputazione.

            </p>
        ',
        'inline' => '
            <p>
                Ottimo risultato! Sei in linea nella gestione del rischio informatico, ma devi ugualmente valutare nuovi metodi per migliorare le capacità di protezione del tuo IT.
            </p>
        ',
        'ahead' => '
            <p>
                Eccellente! Stai ottenendo un rendimento superiore alla concorrenza per la gestione del rischio informatico, ma per restare in posizione di vantaggio devi rivalutare il modo in cui svolgi le principali operazioni.
            </p>
        ',
    ],
    'cyber-risk-management-operations-and-defence' => [
        'title'=> 'Cyber Risk Management e la Difesa',
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
                Attenzione! Sei indietro rispetto ai concorrenti in questa importante area legata al rilevamento e al contrasto delle violazioni e devi cercare di portare a regime le tue capacità.
            </p>
        ',
        'inline' => '
            <p>
                Ottimo lavoro! Stai ottenendo un ottimo risultato in quest\'area della gestione del rischio informatico, ma devi ugualmente cercare nuovi approcci atti a migliorare la tua preparazione complessiva in relazione al rischio informatico.
            </p>
        ',
        'ahead' => '
            <p>
                Sei il migliore! Stai ottenendo un rendimento superiore alla concorrenza in quest\'area della gestione del rischio informatico, ma devi cercare sempre nuovi metodi per migliorare seguendo i nuovi approcci.
            </p>
        ',
    ],
    'cyber-risk-management-breach-detection-and-remediation' => [
        'title'=> 'Cyber Risk Management Breach Detection e Remediation',
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
                Devi agire. Sei in ritardo rispetto ai concorrenti per quanto riguarda la gestione del rischio informatico del tuo business. Devi ottenere un rapporto più stretto con l\'impresa per migliorare il tuo approccio alla gestione e al finanziamento della preparazione nei confronti del rischio aziendale.
            </p>
        ',
        'inline' => '
            <p>
                Ottimo rendimento. Sei in linea con i concorrenti per quanto riguarda la gestione del rischio informatico del tuo business. Devi comunque cercare un rapporto più stretto con l\'impresa per migliorare la sua preparazione complessiva nei confronti dei rischi informatici e passare a un livello più elevato.
            </p>
        ',
        'ahead' => '
            <p>
                Ottimo lavoro. Sei in vantaggio rispetto ai concorrenti in termini di gestione del rischio informatico del tuo business. Stai operando in maniera efficace nella gestione del rischio informatico, ma devi rivalutare continuamente le sue azioni.
            </p>
        ',
    ],
    'questions' => [
        'q1'=>[
            'behind' => '
                <p>
                    Devi aumentare la consapevolezza dell\'importanza dell\'IT presso il Top Management in relazione alle modalità offerte dalla trasformazione digitale per favorire il successo dell\'azienda attraverso il miglioramento dell\'efficienza e l\'acquisizione di nuovi mercati.
                </p>
            ',
            'inline' => '
                <p>
                    Devi cercare metodi per migliorare la consapevolezza e la comprensione dei leader aziendali circa le possibilità dell\'IT di migliorare la redditività e la competitività dell\'azienda.
                </p>
            ',
            'ahead' => '
                <p>
                    Ricorda: tecnologie e funzionalità sono in sviluppo continuo e occorre rivalutarne continuamente oggetto e metodi di utilizzo.
                </p>
            ',
        ],
        'q2'=>[
            'behind' => '
                <p>
                    Cerca nuovi metodi per implementare e gestire l\'IT attraverso approcci come l\'automazione e la gestione del rischio per offrire nuovi servizi in maniera rapida e sicura.
                </p>
            ',
            'inline' => '
                <p>
                    Qui troverai diversi metodi per migliorare le capacità attraverso policy e automazione, in modo da offrire servizi e applicazioni in maniera rapida e sicura.
                </p>
            ',
            'ahead' => '
                <p>
                    Anche se gran parte della sua dedizione al miglioramento della gestione del rischio aziendale può riguardare altri settori, devi continuare ad adottare e ottimizzare le sue funzionalità avanzate legate a policy, gestione, automazione e orchestrazione.
                </p>
            ',
        ],
        'q3'=>[
            'behind' => '
                <p>
                    Un approccio più maturo al rischio ti consentirà di migliorare l\'equilibrio fra usabilità e sicurezza del tuo ambiente, con la possibilità di proteggere continuamente i "tesori di famiglia".  Cerca di adottare un approccio basato sul rischio dove è possibile scendere a compromessi per ottenere ulteriori obiettivi in termini di sviluppo aziendale.
                </p>
            ',
            'inline' => '
                <p>
                    Stai ottenendo un buon rendimento, ma esistono ancora margini di miglioramento. Le aziende all\'avanguardia riescono a identificare e gestire attivamente i rischi per favorire lo sviluppo aziendale. Cerca un ruolo più attivo nell\'ambito di identificazione, analisi e gestione del rischio, sviluppando la sua conoscenza della strategia aziendale relativa ai rischi.
                </p>
            ',
            'ahead' => '
                <p>
                    Per diventare leader devi continuare a superare i suoi limiti.  Cerca di individuare i punti in cui è possibile scendere a compromessi, ferma la necessità di proteggere in maniera assoluta e continua i "tesori di famiglia", per individuare nuove opportunità di sviluppo. 
                </p>
            ',
        ],
        'q4'=>[
            'behind' => '
                <p>
                    Valuta se implementare un processo formale di valutazione dei rischi e sviluppare un approccio proattivo al rilevamento delle violazioni per individuare i punti di rischio e scoprire come reagire in caso di concretizzazione di queste minacce. Quindi, potrai svolgere ulteriori azioni per ottimizzare il tuo approccio, come ad esempio sviluppare piani di comunicazione interni ed esterni, di notifica e correzione delle violazioni.
                </p>
            ',
            'inline' => '
                <p>
                    È importante non trascurare il piano per la notifica delle violazioni, elemento importante e futuro requisito della normativa per la protezione generale dei dati dell\'Unione Europea per la gestione dei dati personali dei cittadini UE, e un piano di risposta alle violazioni a largo raggio in grado di offrire assistenza su come reagire in ciascuna fase del processo.
                </p>
            ',
            'ahead' => '
                <p>
                    Sei all\'avanguardia per quanto riguarda le modalità di gestione del rischio delle violazioni di sicurezza e la pianificazione delle risposte in caso di violazione. Tuttavia, per fare un ulteriore passo avanti, devi pensare a come sfruttare l\'assicurazione sui rischi informatici non solo per ridurre i costi potenziali di una violazione, ma anche per ottenere l\'eccellenza aziendale, facendola diventare una fonte potenziale di vantaggio competitivo nella gestione dei dati dei clienti.
                </p>
            ',
        ],
        'q5'=>[
            'behind' => '
                <p>
                    Prendi in considerazione anche l\'inevitabile necessità della trasformazione digitale, la relativa esposizione ai rischi e le modalità di collaborazione fra IT e azienda per sviluppare un approccio al rischio informatico adatto a tutte le parti e in grado di aiutare l\'azienda a raggiungere i propri obiettivi.
                </p>
            ',
            'inline' => '
                <p>
                    Prendi in considerazione il modo in cui controllare e gestire il rischio informatico per l\'intera impresa, poiché le attuali operazioni di business, basate su cloud e dispositivi mobili, comportano l\'esposizione al rischio informatico di ogni settore delle aziende.
                </p>
            ',
            'ahead' => '
                <p>
                    Prendi in considerazione i modi per integrare la gestione dei rischi informatici nello sviluppo di nuove opportunità di business al fine di ottenere un\'identificazione e una gestione proattiva del rischio informatico e raggiungere gli obiettivi aziendali.
                </p>
            ',
        ],
        'q6'=>[
            'behind' => '
                <p>
                    Le best practice per la gestione dei rischi informatici richiedono un ampio coinvolgimento dei dirigenti di alto livello e la disponibilità di funzionari dedicati a rischi e conformità. Studia metodi per aumentare il coinvolgimento e la responsabilità dell\'azienda, in particolare di esperti di conformità e leader operativi.  Utilizza al meglio i servizi delle terze parti per misurare le best practice.
                </p>
            ',
            'inline' => '
                <p>
                    Le best practice per la gestione dei rischi informatici richiedono un ampio coinvolgimento dei dirigenti di alto livello e la disponibilità di funzionari dedicati a rischi e conformità. Studia metodi per aumentare il coinvolgimento e la responsabilità dell\'azienda, in particolare di esperti di conformità e leader operativi.  Utilizza al meglio i servizi delle terze parti per misurare le best practice.
                </p>
            ',
            'ahead' => '
                <p>
                    Per portare questa situazione al livello successivo, studia il modo in cui gli specialisti nel campo di rischi, conformità e sicurezza a livello dirigenziale e inferiore possono contribuire positivamente a questo processo. Utilizza al meglio i servizi delle terze parti per misurare le best practice.
                </p>
            ',
        ],
        'q7'=>[
            'behind' => '
                <p>
                    È poco probabile che la sicurezza venga presa in esame prima della fase di implementazione di un progetto, momento in cui potrebbe apparire come una preoccupazione secondaria dal successo variabile, o a volte viene presa in considerazione solo in presenza di problemi, quando ormai è troppo tardi. Scopri in che modo conferire alla sicurezza un ruolo almeno nella fase di pianificazione delle nuove iniziative di business, cercando di introdurla in un momento antecedente.
                </p>
            ',
            'inline' => '
                <p>
                    Cerca di scoprire in che modo conferire alla sicurezza un ruolo chiave fin dall\'inizio della fase di pianificazione delle nuove iniziative di business, rendendola non solo uno degli elementi di rilievo da gestire, ma un importante fattore per lo sviluppo e l\'implementazione del progetto. 
                </p>
            ',
            'ahead' => '
                <p>
                    Valuta il modo in cui trasformare la sicurezza nell\'elemento chiave della pianificazione delle nuove iniziative. Inoltre, rendi la sicurezza una priorità assoluta durante l\'intero ciclo di sviluppo, test e implementazione dei progetti e per l\'attività di business quotidiana.
                </p>
            ',
        ],
        'q8'=>[
            'behind' => '
                <p>
                    Almeno per le nuove iniziative, sviluppa un piano di business per giustificare il budget necessario per aumentare gli investimenti per le operazioni essenziali (e l\'esposizione al rischio derivante in caso di mancato rispetto di questo livello). Si tratta della situazione in cui si trova la base della tua concorrenza, per non parlare dei concorrenti più all\'avanguardia.
                </p>
            ',
            'inline' => '
                <p>
                    Le aziende all\'avanguardia dispongono di budget di sicurezza e IT immediatamente disponibili, a patto di disporre di un caso di business a supporto, anche per le iniziative sperimentali. Per arrivare a questo punto, l\'attenzione nei confronti degli investimenti sulla sicurezza IT deve andare oltre i costi eventualmente sostenuti in caso di mancata concretizzazione di tale investimento e analizzare l\'impatto possibile attraverso le nuove spese dedicate alla sicurezza IT.
                </p>
            ',
            'ahead' => '
                <p>
                    Per ottenere un miglioramento continuo, promuovi l\'investimento nella sicurezza come elemento in grado di aiutare l\'azienda a raggiungere gli obiettivi di business e supportare la crescita in termini di redditività e ricavi.
                </p>
            ',
        ],
        'q9'=>[
            'behind' => '
                <p>
                    Prendi in considerazione un utilizzo più esteso di queste e altre tecniche legate alla fase successiva, come ad esempio lo screening del personale di sicurezza e il man-shadowing.
                </p>
            ',
            'inline' => '
                <p>
                    Approcci come le "trappole" in ingresso/uscita e il man-shadowing dovrebbero diventare pratiche standard, per poi prendere in esame tecniche più avanzate come l\'autenticazione biometrica.
                </p>
            ',
            'ahead' => '
                <p>
                    Per passare al livello successivo è importante valutare i metodi per aumentare al massimo il punto d\'incrocio fra sicurezza fisica e IT attraverso l\'utilizzo di tecniche di autenticazione biometrica.
                </p>
            ',
        ],
        'q10'=>[
            'behind' => '
                <p>
                    La gestione delle best practice di sicurezza IT dovrebbe diventare un processo formale imposto attraverso l\'applicazione di standard. È importante assegnare la giusta importanza ai metodi per coinvolgere le risorse dotate di competenze di alto livello in questo campo.
                </p>
            ',
            'inline' => '
                <p>
                    Si tratta di un processo formale che richiede competenze elevate e specialistiche. Per sviluppare questo processo in modo da aumentare di livello, è importante contattare consulenti esperti esterni per ottenere un punto di vista indipendente sulla scelta delle best practice per il contesto della sua organizzazione.
                </p>
            ',
            'ahead' => '
                <p>
                    Prendi in considerazione i metodi utili alla tua organizzazione per diventare leader nella gestione delle best practice e un leader del settore. Questo elemento può offrire un vantaggio competitivo rispetto alle aziende concorrenti.
                </p>
            ',
        ],
        'q11'=>[
            'behind' => '
                <p>
                    Per crescere nella scala della maturità, devi migliorare la conoscenza degli obblighi imposti dal regolamento GDPR, pianificare l\'implementazione di queste responsabilità e mettere in pratica questo piano.
                </p>
            ',
            'inline' => '
                <p>
                    Probabilmente conoscerai già gli obblighi imposti dal regolamento GDPR e avrai già iniziato questo tipo di pianificazione per colmare le lacune in termini di competenze della sua azienda, valutando il modo in cui adottare le best practice andando oltre i requisiti normativi. Per arrivare al livello di avanguardia del gruppo dei tuoi concorrenti devi trasformare questi piani in realtà.
                </p>
            ',
            'ahead' => '
                <p>
                    Per ottenere ulteriori miglioramenti, devi comprendere il modo in cui stai sfruttando le tecnologie all\'avanguardia e le stai implementando mediante approcci al processo decisionale basati sul rischio. Ciò consentirà di ridurre l\'eventualità di potenziali sanzioni nell\'ambito del GDPR e potrebbe anche diventare la base per un vantaggio competitivo.
                </p>
            ',
        ],
        'q12'=>[
            'behind' => '
                <p>
                    La gestione dei rischi informatici basata su best practice si concentra sulla creazione di report frequenti o in real-time. Cerca di migliorare le funzionalità di registrazione e le analisi per passare da un approccio reattivo a uno proattivo.
                </p>
            ',
            'inline' => '
                <p>
                    La gestione dei rischi informatici basata su best practice si concentra sulla creazione di report frequenti o in real-time. Cerca di migliorare le funzionalità di registrazione e le analisi per passare da un approccio reattivo a uno proattivo.
                </p>
            ',
            'ahead' => '
                <p>
                    Per ottenere un miglioramento, valuta come utilizzare il reporting continuo in maniera più avanzata di una semplice dashboard, rendendolo un elemento in grado di favorire il processo decisionale a livello di business attraverso funzionalità operative integrate.
                </p>
            ',
        ],
        'q13'=>[
            'behind' => '
                <p>
                    La gestione dei rischi informatici basata su best practice si concentra sulla creazione di report frequenti o in real-time. Cerca di migliorare le funzionalità di registrazione e le analisi per passare da un approccio reattivo a uno proattivo.
                </p>
            ',
            'inline' => '
                <p>
                    La gestione dei rischi informatici basata su best practice si concentra sulla creazione di report frequenti o in real-time. Cerca di migliorare le funzionalità di registrazione e le analisi per passare da un approccio reattivo a uno proattivo.
                </p>
            ',
            'ahead' => '
                <p>
                    Per ottenere un miglioramento, valuta come utilizzare il reporting continuo in maniera più avanzata di una semplice dashboard, rendendolo un elemento in grado di favorire il processo decisionale a livello di business attraverso funzionalità operative integrate.
                </p>
            ',
        ],
        'q14'=>[
            'behind' => '
                <p>
                    È impossibile proteggere ciò che non si riesce a gestire. Secondo le best practice, è consigliabile utilizzare l\'automazione e un insiemi di strumenti integrati per garantire l\'applicazione coerente delle policy specifiche.
                </p>
            ',
            'inline' => '
                <p>
                    È impossibile proteggere ciò che non si riesce a gestire. Secondo le best practice, è consigliabile utilizzare l\'automazione e un insiemi di strumenti integrati per garantire l\'applicazione coerente delle policy specifiche.
                </p>
            ',
            'ahead' => '
                <p>
                    Per avanzare ulteriormente nella gestione del rischio informatico, è importante valutare il modo in cui automatizzare e integrare ulteriori elementi in una suite di gestione completa per creare un reparto IT molto più agile.
                </p>
            ',
        ],
        'q15'=>[
            'behind' => '
                <p>
                    Le best practice per la gestione dei rischi informatici utilizzano l\'automazione in maniera intensa. Prendi in considerazione i settori che otterrebbero vantaggi attraverso l\'automazione (soprattutto quelli ripetitivi, di basso valore, ma anche quelli in cui occorre una rapida reazione), per ottenere un equilibrio ottimale fra l\'utilizzo dell\'automazione, ove possibile, e la necessità dei processi manuali.
                </p>
            ',
            'inline' => '
                <p>
                    Le best practice per la gestione dei rischi informatici utilizzano l\'automazione in maniera intensa. Prendi in considerazione i settori che otterrebbero vantaggi attraverso l\'automazione (soprattutto quelli ripetitivi, di basso valore, ma anche quelli in cui occorre una rapida reazione), per ottenere un equilibrio ottimale fra l\'utilizzo dell\'automazione, ove possibile, e la necessità dei processi manuali.
                </p>
            ',
            'ahead' => '
                <p>
                    Per diventare un\'azienda all\'avanguardia, valuta le operazioni necessarie per automatizzare e orchestrare i processi in maniera completa per ottenere una maggiore agilità, qualità e conformità della gestione dei rischi informatici.
                </p>
            ',
        ],
        'q16'=>[
            'behind' => '
                <p>
                    Le best practice nel campo della gestione dei rischi informatici puntano all\'incremento dell\'automazione. Valuta in che modo incrementare l\'utilizzo dell\'automazione per ottimizzare l\'efficienza ed efficacia delle operazioni di sicurezza IT.
                </p>
            ',
            'inline' => '
                <p>
                    Le best practice nel campo della gestione dei rischi informatici puntano all\'incremento dell\'automazione. Valuta in che modo incrementare l\'utilizzo dell\'automazione per ottimizzare l\'efficienza ed efficacia delle operazioni di sicurezza IT.
                </p>
            ',
            'ahead' => '
                <p>
                    Piuttosto che dedicarsi alle sole opportunità per aumentare l\'automazione, non devi trascurare l\'elemento umano dell\'equazione. Per ottenere l\'impatto più elevato devi scoprire come utilizzare le iniziative di automazione in corso come complemento del personale di sicurezza e aumentare l\'efficacia del personale attraverso il miglioramento delle competenze, permettendogli così di dedicarsi ad attività più avanzate.
                </p>
            ',
        ],
        'q17'=>[
            'behind' => '
                <p>
                    Le aziende più avanzate in termini di gestione dei rischi informatici utilizzano diversi prodotti di sicurezza disponibili sul mercato per offrire protezione all\'intera rete aziendale. Lavorando con specialisti dei servizi di sicurezza professionale di terze parti potrai progettare e implementare approcci adeguati e ottimizzare i tempi per l\'implementazione e l\'ottimizzazione delle funzionalità. 
                </p>
            ',
            'inline' => '
                <p>
                    Le aziende più avanzate in termini di gestione dei rischi informatici utilizzano diversi prodotti di sicurezza disponibili sul mercato per offrire protezione all\'intera rete aziendale. Lavorando con i MSSP di terze parti potrai progettare e implementare approcci adeguati, nonché snellire l\'implementazione e ottimizzare le funzionalità.
                </p>
            ',
            'ahead' => '
                <p>
                    Per sviluppare ulteriormente il quadro, devi prendere in considerazione l\'impatto potenziale offerto dai MSSP, che possono implementare la gestione di dispositivi e strumenti di sicurezza in motori di correlazione basati sui big data e presentare queste informazioni in dashboard di gestione utili per ottimizzare il processo decisionale mediante una serie di informazioni relative al cambiamento dell\'atteggiamento di sicurezza in tempo reale.
                </p>
            ',
        ],
        'q25'=>[
            'behind' => '
                <p>
                    Per spostarti in linea con il livello delle metodologie standard definito dal tuo gruppo di concorrenti, valuta il punto in cui l\'utilizzo dei MSSP può offrire un valore aggiunto al fine di ottenere una posizione di equilibrio fra operazioni interne, dove indispensabili, e l\'utilizzo dei MSSP in tutti gli altri casi.
                </p>
            ',
            'inline' => '
                <p>
                    Valuta il modo in cui avvalerti in maniera estesa e più frequente possibile dei fornitori esterni, ottenendo vantaggi di erogazione scalabili, utilizzo di professionisti di qualità e informazioni più ampie per migliorare il tuo approccio alla sicurezza senza sacrificare la visibilità e il controllo del tuo atteggiamento di sicurezza e conservando un ruolo importante per le risorse interne.
                </p>
            ',
            'ahead' => '
                <p>
                    Sei un leader in termini di approccio per l\'utilizzo dei MSSP, che utilizzi in maniera intensa e in modo equilibrato come canale di erogazione complementare alle risorse interne. Per ottenere ulteriori miglioramenti, valuta se utilizzare i MSSP per ottimizzare ulteriormente le operazioni e l\'implementazione delle best practice.
                </p>
            ',
        ],
        'q18'=>[
            'behind' => '
                <p>
                    La conformità e le best practice comportano l\'utilizzo di tecnologie anti-malware e di sandboxing/ATP divenute ormai standard e di cui consigliamo di valutare le capacità.  I servizi di Analytics e threat intelligence offrono una protezione avanzata dalle nuove minacce. Valuta se avvalerti di queste tecnologie in base al profilo di rischio della sua organizzazione. L\'intelligenza artificiale e l\'euristica sono ideali per operazioni di sicurezza mature ed avanzate: valuta se utilizzarle in futuro.
                </p>
            ',
            'inline' => '
                <p>
                    La conformità e le best practice comportano l\'utilizzo di tecnologie anti-malware e di sandboxing/ATP divenute ormai standard e di cui consigliamo di valutare le capacità.  I servizi di Analytics e threat intelligence offrono una protezione avanzata dalle nuove minacce. Valuta se avvalerti di queste tecnologie in base al profilo di rischio della sua organizzazione. L\'intelligenza artificiale e l\'euristica sono ideali per operazioni di sicurezza mature ed avanzate: valuta se utilizzarle in futuro.
                </p>
            ',
            'ahead' => '
                <p>
                    L\'intelligenza artificiale e l\'euristica sono tecnologie in continua maturazione che consigliamo di implementare per continuare la ricerca della leadership.
                </p>
            ',
        ],
        'q19'=>[
            'behind' => '
                <p>
                    Le analisi, le registrazioni forensi e il ripristino dei sistemi/failover sono tecnologie standard. Gran parte delle aziende di grandi e piccole dimensioni sta utilizzando partner di servizi per la risposta agli incidenti esterni, sia come fornitori specifici che con contratto di mandato, scelta da prendere in considerazione per ridurre il profilo di rischio della sua organizzazione. La raccolta di informazioni, i sistemi "trappola" e i tentativi di violazione dei suoi sistemi da parte di squadre di esperti sono procedure in linea con operazioni di sicurezza mature ed avanzate da considerare nelle fasi successive.
                </p>
            ',
            'inline' => '
                <p>
                    Le analisi, le registrazioni forensi e il ripristino dei sistemi/failover sono tecnologie standard. Gran parte delle aziende di grandi e piccole dimensioni sta utilizzando partner di servizi per la risposta agli incidenti esterni, sia come fornitori specifici che con contratto di mandato, scelta da prendere in considerazione per ridurre il profilo di rischio della sua organizzazione. La raccolta di informazioni, i sistemi "trappola" e i tentativi di violazione dei suoi sistemi da parte di squadre di esperti sono procedure in linea con operazioni di sicurezza mature ed avanzate da considerare nelle fasi successive.
                </p>
            ',
            'ahead' => '
                <p>
                    La raccolta di informazioni, i sistemi "trappola" e i tentativi di violazione dei suoi sistemi da parte di squadre di esperti sono procedure standard per operazioni di sicurezza più ampie, mature ed avanzate, che consigliamo di implementare.
                </p>
            ',
        ],
        'q20'=>[
            'behind' => '
                <p>
                    Gli aggiornamenti alle policy e una policy di Disaster Recovery sono elementi standard che è consigliabile implementare nella tua azienda. Gran parte delle aziende esegue valutazioni sulla compromissione e molte imprese si avvalgono di fornitori di disaster recovery esterni. Valuta se questo tipo di caratteristiche sia in grado di ottimizzare le tue capacità di disaster recovery. Le funzionalità di rimedio automatizzato basate sul machine-learning stanno maturando rapidamente e meritano attenzione.
                </p>
            ',
            'inline' => '
                <p>
                    Gran parte delle aziende esegue valutazioni sulla compromissione e molte imprese si avvalgono di fornitori di disaster recovery esterni. Valuta se ottimizzare queste funzionalità. Le funzionalità di rimedio automatizzato basate sul mchine-learning stanno maturando rapidamente. Valuta se queste funzionalità possono migliorare le tue capacità di disaster recovery.
                </p>
            ',
            'ahead' => '
                <p>
                    Le funzionalità di rimedio automatizzato basate sul mchine-learning stanno maturando rapidamente ed è consigliabile implementarle.
                </p>
            ',
        ],
        'q21'=>[
            'behind' => '
                <p>
                    Viviamo in un periodo caratterizzato dall\'inevitabilità di subire una violazione. Per questo motivo, è importante ragionare in maniera efficace sull\'impatto di questo tipo di eventi e sviluppare un piano per la risposta alle violazioni di sicurezza. Ciò comprende la conoscenza della scala potenziale di esposizione e la valutazione del rischio legato a categorie di dati specifici, come ad esempio quelli personali. La conoscenza dell\'atteggiamento dei partner e della catena di fornitura estesa della sua azienda è un altro elemento importante per la gestione della trasmissione delle vulnerabilità di sicurezza dalle terze parti e delle nuove regole di responsabilità congiunta introdotte dal regolamento GDPR.
                </p>
            ',
            'inline' => '
                <p>
                      Viviamo in un periodo caratterizzato dall\'inevitabilità di subire una violazione. Per questo motivo, è importante ragionare in maniera efficace sull\'impatto di questo tipo di eventi e aver già sviluppato un piano di risposta alle violazioni di sicurezza. La conoscenza dell\'atteggiamento dei partner e della catena di fornitura estesa della tua azienda è un altro elemento importante per la gestione della trasmissione delle vulnerabilità di sicurezza dalle terze parti e delle nuove regole di responsabilità congiunta introdotte dal regolamento GDPR. 
                </p>
            ',
            'ahead' => '
                <p>
                    La conoscenza dell\'atteggiamento dei partner e della catena di fornitura estesa della sua azienda è un altro elemento importante per la gestione della trasmissione delle vulnerabilità di sicurezza dalle terze parti e delle nuove regole di responsabilità congiunta introdotte dal regolamento GDPR.
                </p>
            ',
        ],
        'q23'=>[
            'behind' => '
                <p>
                    È fondamentale convalidare la sicurezza delle terze parti anche negli ambienti più avanzati, in cui le valutazioni autonome possono causare una certa superficialità. La convalida continua è ormai uno standard che è possibile automatizzare in maniera quasi completa. A causa della rapidità del cambiamento del panorama delle minacce, occorre eseguire test di penetrazione basati sui servizi almeno ogni sei mesi. L\'esecuzione di test a intervalli meno frequenti aumenta i rischi per la sua organizzazione.
                </p>
            ',
            'inline' => '
                <p>
                    È fondamentale convalidare la sicurezza delle terze parti anche negli ambienti più avanzati, in cui le valutazioni autonome possono causare una certa superficialità. La convalida continua è ormai uno standard che è possibile automatizzare in maniera quasi completa. A causa della rapidità del cambiamento del panorama delle minacce, occorre eseguire test di penetrazione basati sui servizi almeno ogni sei mesi. L\'esecuzione di test a intervalli meno frequenti aumenta i rischi per la sua organizzazione. 
                </p>
            ',
            'ahead' => '
                <p>
                    È fondamentale convalidare la sicurezza delle terze parti anche negli ambienti più avanzati, in cui le valutazioni autonome possono causare una certa superficialità. La convalida continua è ormai uno standard che è possibile automatizzare in maniera quasi completa. A causa della rapidità del cambiamento del panorama delle minacce, occorre eseguire test di penetrazione basati sui servizi almeno ogni sei mesi. L\'esecuzione di test a intervalli meno frequenti aumenta i rischi per la sua organizzazione.
                </p>
            ',
        ],
        'q24'=>[
            'behind' => '
                <p>
                    La frequenza consigliata è di uno-tre mesi, fattore che varia in base alla complessità e al contesto del tuo ambiente e al rischio legato alle minacce del tuo settore. Aumentando questo intervallo, i principali operatori relativi al rischio potrebbero apparire impreparati a fronteggiare un\'inevitabile violazione o potrebbero verificarsi cambiamenti normativi in grado di sottoporre la sua azienda a sanzioni considerevoli. Cerca di migliorare le sue attività di test e creazione rapporti, senza risparmiare attraverso la riduzione della frequenza di questi controlli, scelta che potrebbe compromettere determinate funzionalità. Le organizzazioni più avanzate o sottoposte ad alti rischi eseguono i test a cadenza settimanale o continuativa: in questi casi, una risposta insufficiente agli incidenti potrebbe produrre esiti catastrofici.
                </p>
            ',
            'inline' => '
                <p>
                    La frequenza consigliata è di uno-tre mesi, fattore che varia in base alla complessità e al contesto del tuo ambiente e al rischio legato alle minacce del tuo settore. Aumentando questo intervallo, i principali operatori relativi al rischio potrebbero apparire impreparati a fronteggiare un\'inevitabile violazione o potrebbero verificarsi cambiamenti normativi in grado di sottoporre la sua azienda a sanzioni considerevoli. Cerca di migliorare le sue attività di test e creazione rapporti, senza risparmiare attraverso la riduzione della frequenza di questi controlli, scelta che potrebbe compromettere determinate funzionalità. Le organizzazioni più avanzate o sottoposte ad alti rischi eseguono i test a cadenza settimanale o continuativa: in questi casi, una risposta insufficiente agli incidenti potrebbe produrre esiti catastrofici.
                </p>
            ',
            'ahead' => '
                <p>
                    Con l\'aumento della frequenza e pericolosità degli attacchi informatici, la capacità di rilevare e rispondere in maniera adeguata a una violazione diventerà un elemento chiave di abilitazione per i leader dell\'economia digitale. È importante dedicarsi all\'aderenza alle best practice superando gli standard di conformità e ottenendo revisioni esterne a ciclo continuo dei settori più efficaci e lacunosi della tua azienda.
                </p>
            ',
        ],
    ],
];
