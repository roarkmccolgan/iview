<?php
//7 Symanted GDPR
return [
    'gdpr' => [
        'title' => 'GDPR',
        'class' => 'sec1',
        'icon' => 'icon-gdpr',
        'display' => true,
        'complete' => false,
        'sub-report' => false,
        'pages' => [
            'page1' => [
                'title' => 'Approach to IT',
                'questions' => [
                    'q1'=>[
                        'type'=>'radio',
                        'question'=>'Quale delle seguenti affermazioni descrive meglio l\'approccio della vostra organizzazione alla conformità GDPR <span class="small">(scegliere 1 sola risposta)</span>',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Non sappiamo cosa sia il GDPR e in che modo influirà sulla nostra azienda',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Stiamo appena iniziando a comprendere quali sono i requisiti del GDPR',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Puntiamo a diventare conformi quanto basta per evitare controlli e sanzioni',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Abbiamo intenzione di utilizzare la nostra conformità GDPR come un fattore di differenziazione competitiva',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Siamo già conformi e stiamo vendendo o condividendo le nostre best practice',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'GDPR',
                'questions' => [
                    'q2'=> [
                        'type'=>'checkbox',
                        'question'=>'Su quali di queste aree specifiche per il GDPR pensate debba concentrarsi di più la vostra organizzazione? <span class="small">(selezionare le 3 risposte principali)</span>',
                        'name'=>'q2',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Valutazione e classificazione accurate dei dati',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Identificazione delle applicazioni che utilizzano dati pertinenti al GDPR',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Conduzione di un\'analisi del flusso di dati',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Revisione e ottimizzazione della gestione dell\'identità e dell\'accesso',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Definizione di processi di documentazione per conformarsi con gli obblighi di responsabilità',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Comunicazione interna/Istruzione dei dipendenti',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Implementazione della privacy in base alla progettazione e per impostazione predefinita',
                                'value'=>0,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'GDPR',
                'questions' => [
                    'q3' => [
                        'type'=>'checkbox',
                        'question'=>'Quali dei seguenti requisiti GDPR rappresenteranno la sfida più grande per la vostra organizzazione? <span class="small">(selezionare le 3 risposte principali)</span>',
                        'name'=>'q3',
                        'ignore' => true,
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Portabilità dei dati',
                                'hint'=>'Necessità di fornire, su richiesta, dati in un formato leggibile dalle macchine',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Necessità di rispondere alla richiesta di accesso ai dati di un utente',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Notifica di violazione dei dati entro 72 ore dal rilevamento',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Protezione dei dati fin dalla progettazione e protezione per impostazione predefinita',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Crittografia e/o pseudonimizzazione dei dati',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Definizione del significato di SotA (State of the Art) per la nostra organizzazione',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Definizione dei casi d\'uso dei dati e gestione del consenso',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Creazione di profili dei clienti in conformità con il GDPR',
                                'value'=>0,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Gestione dei provider di servizi cloud, applicazioni cloud e trasferimenti di dati internazionali.',
                                'value'=>0,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page4' => [
                'title' => 'GDPR',
                'questions' => [
                    'q4' => [
                        'type'=>'radio',
                        'question'=>'Quanto siete fiduciosi riguardo al fatto di riuscire a identificare e localizzare ogni istanza dei dati personali di un individuo nei vostri sistemi? <span class="small">(ad esempio nel caso in cui una persona richieda un record di dati da voi detenuti o la rimozione dei propri dati anche in sistemi che non sono interamente controllati dal vostro reparto IT, ad esempio applicazioni cloud)</span>',
                        'name'=>'q4',
                        'options'=>[
                            [
                                'label'=>'Nessun livello di fiducia',
                                'hint'=>'Potremmo individuare meno del 20% delle istanze',
                                'value'=>1,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Livello di fiducia basso',
                                'hint'=>'Potremmo individuare più del 20% delle istanze',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Livello di fiducia moderato',
                                'hint'=>'Potremmo individuare più del 40% delle istanze',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Livello di fiducia elevato',
                                'hint'=>'Potremmo individuare più del 60% delle istanze',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Livello di fiducia massimo',
                                'hint'=>'Saremmo in grado di trovare tutte le istanze',
                                'value'=>5,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page5' => [
                'title' => 'GDPR',
                'questions' => [
                    'q5' => [
                        'type'=>'slider',
                        'question'=>'A un livello elevato, ad oggi la vostra organizzazione dispone delle informazioni dettagliate su ciascuno dei seguenti tipi di dati?',
                        'name'=>'q5',
                        'options'=>[
                            [
                                'label'=>'Conosciamo le nostre informazioni strutturate',
                                'hint'=>'(database, data warehouse, sistemi di gestione dei contenuti)',
                                'name'=>'q5.1',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Conosciamo le nostre informazioni non strutturate',
                                'hint'=>'(file, cartelle, cartelle di lavoro, documenti, e-mail, ecc.)',
                                'name'=>'q5.2',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Conosciamo i nostri dati irrilevanti',
                                'hint'=>'(dati senza alcun valore aziendale, ridondanti, obsoleti, insignificanti)',
                                'name'=>'q5.3',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Sappiamo chi possiede i dati e chi può accedervi',
                                'name'=>'q5.4',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Sappiamo per quanto tempo dobbiamo conservare i dati',
                                'name'=>'q5.5',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Sappiamo quando dobbiamo/possiamo eliminare i dati',
                                'name'=>'q5.6',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>1,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Sappiamo quale regolamento si applica a categorie particolari di dati',
                                'name'=>'q5.7',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           [
                                'label'=>'Comprendiamo tutte le copie in nostro possesso dei nostri dati personali',
                                'hint'=>'(in backup, test/sviluppo, nel sito di disaster recovery, su dispositivi mobili, nel cloud)',
                                'name'=>'q5.8',
                                'options'=>[
                                    [
                                        'label'=>'Sì',
                                        'value'=>5,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                           
                        ]
                    ]
                ]
            ],
            'page6' => [
                'title' => 'GDPR',
                'questions' => [
                    'q6' => [
                        'type'=>'radio',
                        'question'=>'Quali effetti avrà il GDPR sull\'utilizzo dei servizi cloud da parte della vostra organizzazione? ',
                        'name'=>'q6',
                        'required' > 1,
                        'options'=>[
                            [
                                'label'=>'Smetteremo completamente di utilizzare i servizi cloud',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Passeremo a provider di servizi cloud o data center ubicati all\'interno del paese',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Passeremo a provider di servizi cloud o data center ubicati all\'interno della regione (in Europa)',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Non utilizziamo servizi cloud',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Continueremo a utilizzare i servizi cloud, ma miglioreremo la nostra protezione dei dati (ad esempio tramite processo, DLP o tokenizzazione)',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Nessun effetto: continueremo a utilizzare i servizi cloud come prima',
                                'value'=>4,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page7' => [
                'title' => 'GDPR',
                'questions' => [
                    'q7' => [
                        'type'=>'button',
                        'question'=>'Per quanto riguarda la leadership del vostro programma GDPR, la vostra organizzazione ha definito una taskforce di conformità interfunzionale o un consiglio di amministrazione che include il GRC, l\'IT e le parti interessate operative?',
                        'name'=>'q7',
                        'ignore' => true,
                        'options'=>[
                            [
                                'label'=>'Sì - Completamente definita',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Sì - Avviata ma non ancora completamente definita',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'No - Ma è prevista entro i prossimi dodici mesi',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'No',
                                'value'=>1,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
            'page8' => [
                'title' => 'GDPR',
                'questions' => [
                    'q8' => [
                        'type'=>'slider',
                        'question'=>'In che misura siete preoccupati per le potenziali conseguenze del GDPR? <span class="small">Dove 1 indica che non siete affatto preoccupati e 5 indica che siete estremamente preoccupati</span>',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'Siamo preoccupati della possibilità di ricevere sanzioni',
                                'from'=>'Non siamo preoccupati',
                                'to'=>'Siamo estremamente preoccupati',
                                'name'=>'q8.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Siamo preoccupati di eventuali azioni legali per cause collettive',
                                'from'=>'Non siamo preoccupati',
                                'to'=>'Siamo estremamente preoccupati',
                                'name'=>'q8.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Siamo preoccupati delle notifiche di violazione obbligatorie',
                                'from'=>'Non siamo preoccupati',
                                'to'=>'Siamo estremamente preoccupati',
                                'name'=>'q8.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Siamo preoccupati della sospensione delle attività di elaborazione dei dati da parte dell\'organismo di regolamentazione',
                                'from'=>'Non siamo preoccupati',
                                'to'=>'Siamo estremamente preoccupati',
                                'name'=>'q8.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Siamo preoccupati dei rischi che la mancata conformità comporta per la nostra reputazione',
                                'from'=>'Non siamo preoccupati',
                                'to'=>'Siamo estremamente preoccupati',
                                'name'=>'q8.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ],
            'page9' => [
                'title' => 'GDPR',
                'questions' => [
                    'q9' => [
                        'type'=>'checkbox',
                        'question'=>'Cosa sta limitando la vostra capacità di realizzare una piena conformità GDPR nel vostro ambiente di trattamento dei dati? <span class="small">(selezionare 3 risposte)</span>',
                        'name'=>'q9',
                        'required'=>3,
                        'max'=>3,
                        'options'=>[
                            [
                                'label'=>'Mancanza di conoscenza della conformità GDPR',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Mancanza di budget',
                                'value'=>2,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Risorse limitate',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Conflitto di priorità',
                                'value'=>3,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Scarsa collaborazione tra il team di conformità GDPR e le altre parti interessate',
                                'value'=>4,
                                'checked'=>false
                            ],
                            [
                                'label'=>'Frammentazione o mancata integrazione di Big Data, report e dati analitici',
                                'value'=>4,
                                'checked'=>false
                            ]
                        ]
                    ]
                ]
            ],
        ],
    ]
];
