<?php
// Snow
return [
    'leadership'=>[
        'title' => 'Leadership Vision for Agility',
        'description' => '
            <p class=""></p>',
        'nuggets' => [],
        'sectionintro' => false,
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Visione della leadership per l\'agilità',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive meglio l\'approccio della vostra leadership alla definizione della strategia?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'La leadership definisce la strategia ogni 2-3 anni.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership ridefinisce la strategia ogni anno e può aggiungere revisioni aziendali trimestrali.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership rivede la strategia ogni trimestre e apporta le modifiche appropriate.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership prende decisioni strategiche basate su dati operativi e informazioni periodiche.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership ridefinisce costantemente la strategia per promuovere l\'innovazione e consentire il cambiamento costante.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Leadership Vision for Agility',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive meglio l\'approccio della vostra leadership all\'assegnazione di budget e investimenti?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'BI budget vengono creati in base a quelli dell\'anno precedente, con alcune modifiche.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership assegna budget specifici a scadenze fisse.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership rivede i budget trimestralmente e assegna gli investimenti di conseguenza.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership utilizza un programma di budget agile, ad esempio processi di budget "rapidi", "per piccoli passi", ecc.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership ridefinisce costantemente l\'allocazione del budget, in base a requisiti in continua evoluzione.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Leadership Vision for Agility',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive meglio le azioni della vostra leadership relativamente ai processi?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'La leadership supporta e mantiene i processi esistenti.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi sono ben definiti, ma la leadership acconsente a cambiamenti in alcune aree.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Quando vengono scoperte problematiche relative ai processi, la leadership aiuta i team ad apportare cambiamenti.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La leadership ha effettuato investimenti nella formazione e nella tecnologia per consentire cambiamenti dei processi nei vari reparti.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Il team di leadership identifica in modo proattivo i flussi di lavoro che richiedono maggiore agilità e assegna il budget in modo da consentire processi migliori.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'structural' => [
        'title' => 'Agilità strutturale',
        'description' => '
            <p class=""> La modernizzazione delle applicazioni è un passo fondamentale nella trasformazione digitale, perché le applicazioni meno recenti non forniscono l\'agilità e l\'adattabilità necessarie per l\'ambiente aziendale e le aspettative dei clienti/cittadini/pazienti di oggi. Il trasferimento delle applicazioni in un ambiente cloud, sia esso cloud privato o cloud pubblico, è un passo importante nella modernizzazione delle applicazioni. Per la modernizzazione delle applicazioni esistono varie strategie che possono avere valore per diverse applicazioni. \n 
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        65% of organizations at more advanced stages of agility are already recovering from the impacts of the pandemic or returning to growth. Just 20% of less agile organizations can say the same.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_1.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Agilità strutturale',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive meglio il modo in cui vengono definiti i team all\'interno della vostra organizzazione?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'I team sono strettamente definiti in base all\'area funzionale e raramente cambiano.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I team sono definiti in base all\'area funzionale, con una certa collaborazione tra i reparti.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I team di varie funzioni sono definiti in base ai prodotti e servizi, tenendo conto delle diverse competenze.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I team sono allineati ai prodotti tenendo conto delle diverse competenze, ma a scadenze fisse.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I team vengono creati spontaneamente dai dipendenti in tutte le aree funzionali in tempo reale in base alle necessità.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Agilità strutturale',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive meglio l\'approccio della vostra organizzazione all\'identificazione di lacune nelle competenze e all\'assegnazione delle risorse necessarie per poterle colmare?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label' => 'Identifichiamo le lacune nelle competenze e assegniamo le risorse in base a un piano annuale.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Identifichiamo le lacune nelle competenze e assegniamo le risorse in momenti fissi nel corso dell\'anno.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Identifichiamo continuamente le lacune nelle competenze, ma le risorse devono essere approvate in momenti fissi.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Identifichiamo le lacune nelle competenze nel corso dell\'anno e assegniamo continuamente risorse in modo flessibile.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Agilità strutturale',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive meglio l\'approccio alla conoscenza e alla collaborazione della vostra organizzazione?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Le iniziative di condivisione delle conoscenze e di collaborazione vengono lasciate alla discrezione dei singoli dipendenti.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La condivisione delle conoscenze e la collaborazione vengono gestite a livello di reparto.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Gli strumenti di collaborazione e gestione delle conoscenze sono centralizzati per consentire la condivisione e l\'interazione a livello aziendale.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La gestione delle conoscenze e la collaborazione sono KPI formali per le persone e i reparti.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La gestione delle conoscenze e la collaborazione sono KPI formali che si estendono ai partner esterni.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'process' => [
        'title' => 'Agilità dei processi',
        'description' => '
            <p class=""> La modernizzazione delle applicazioni è un passo fondamentale nella trasformazione digitale, perché le applicazioni meno recenti non forniscono l\'agilità e l\'adattabilità necessarie per l\'ambiente aziendale e le aspettative dei clienti di oggi. Il trasferimento delle applicazioni in un ambiente cloud, sia esso cloud privato o cloud pubblico, è un passo importante nella modernizzazione delle applicazioni. Per la modernizzazione delle applicazioni esistono varie strategie che possono avere valore per diverse applicazioni. \n 
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        44% of organizations at the early stages of agility are yet to digitize employee-facing processes, which remain slow, manual, and are often based on email and phone communication.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_2.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
        'title' => 'Agilità dei processi',
                'title' => 'Process Agility',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'Quale di queste affermazioni descrive meglio i vostri processi organizzativi?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'I processi non sono generalmente standardizzati.',
                                'value'=>1.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi dell\'organizzazione sono standardizzati all\'interno dei singoli reparti (ad esempio, la gestione finanziaria o le operazioni).',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi dell\'organizzazione sono standardizzati e fluiscono tra i vari reparti.',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La maggior parte dei processi è stata automatizzata ed è supportata dallo scambio di informazioni in tempo reale tra le varie funzioni.',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi principali sono standardizzati e automatizzati e i dipendenti possono creare nuovi processi tramite il self-service.',
                                'value'=>7.5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Agilità dei processi',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive meglio il modo in cui i processi dell\'organizzazione vengono definiti e modificati?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'I processi dell\'organizzazione non sono esplicitamente definiti o documentati.',
                                'value'=>1.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi dell\'organizzazione sono statici e allineati a sistemi installati molti anni fa.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi dell\'organizzazione sono documentati e collegati ai sistemi principali, ma vengono periodicamente riprogettati o creati.',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi dell\'organizzazione sono digitalizzati ma vengono adattati o adeguati solo periodicamente.',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I processi dell\'organizzazione sono completamente digitalizzati e possono essere creati o modificati dinamicamente.',
                                'value'=>7.5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'portfolio' => [
        'title' => 'Agilità del portafoglio',
        'description' => '
            <p class=""> La modernizzazione delle applicazioni è un passo fondamentale nella trasformazione digitale, perché le applicazioni meno recenti non forniscono l\'agilità e l\'adattabilità necessarie per l\'ambiente dell\'organizzazione e le aspettative degli utenti di oggi. Il trasferimento delle applicazioni in un ambiente cloud, sia esso cloud privato o cloud pubblico, è un passo importante nella modernizzazione delle applicazioni. Per la modernizzazione delle applicazioni esistono varie strategie che possono avere valore per diverse applicazioni. \n 
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        Organizations further along in their agility journey, place greater emphasis on the need to accelerate product and service releases. Time to market is a fundamental measure of agile success.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_3.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Agilità del portafoglio',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Con quale frequenza la vostra organizzazione lancia prodotti o servizi?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Vengono lanciati prodotti o servizi ogni due anni o più (e in genere hanno lunghi cicli di ricerca e sviluppo)..',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vengono lanciati prodotti o servizi ogni anno in un ciclo strutturato.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vengono lanciati prodotti ogni anno e vengono effettuati aggiornamenti una o due volte l\'anno.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vengono ideati prodotti costantemente nel corso dell\'anno e lanciati trimestralmente appena disponibili.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vengono lanciati prodotti nelle versioni minime realizzabili entro qualche mese dall\'ideazione e poi vengono sviluppati o abbandonati in base al feedback dei clienti in un flusso costante.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Agilità del portafoglio',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Con quale rapidità il portafoglio di prodotti o servizi può reagire ai cambiamenti dell\'ambiente esterno?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Molto più lentamente di quanto vorremmo',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Più lentamente di quanto vorremmo',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rapidamente, ma la velocità potrebbe migliorare',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Molto rapidamente e non è necessario migliorare la velocità',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Agilità del portafoglio',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'Quale di queste affermazioni descrive meglio il ruolo dei clienti nello sviluppo di offerte e prodotti da parte della vostra organizzazione?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'Seguiamo un canale di sviluppo dei prodotti altamente strutturato, guidato internamente.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I piani dei prodotti sono basati su informazioni di mercato non strutturate.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Gli input dei clienti ci aiutano a lanciare o perfezionare prodotti e servizi.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'I budget per i progetti sperimentali e il feedback immediato delle organizzazioni degli utenti ci consentono di attuare innovazioni fuori ciclo.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Integriamo le idee innovative provenienti da una rete esterna nelle nostre rapide iterazioni dei prodotti per accelerare la sperimentazione.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'technology' => [
        'title' => 'Architettura tecnologica',
        'description' => '
            <p class=""> La modernizzazione delle applicazioni è un passo fondamentale nella trasformazione digitale, perché le applicazioni meno recenti non forniscono l\'agilità e l\'adattabilità necessarie per l\'ambiente dell\'organizzazione e le aspettative degli utenti di oggi. Il trasferimento delle applicazioni in un ambiente cloud, sia esso cloud privato o cloud pubblico, è un passo importante nella modernizzazione delle applicazioni. Per la modernizzazione delle applicazioni esistono varie strategie che possono avere valore per diverse applicazioni. \n 
            </p>
            ',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'sectionintro' => [
            '
                <div class="flex flex-wrap items-center">
                    <h1 class="flex-1 font-bold leading-tight text-snow-dark text-2xl sm:text-3xl mb-2 p-4 bg-snow-gray">
                        57% of organizations researched by IDC, reported Workflow Automation Software as the top technology area for improving agility.
                    </h1>
                    <img src="/images/tools/18/nugget_graph_4.svg" class="w-full sm:w-1/3 sm:ml-8" />
                </div>
            ',
        ],
        'intermission' => [],
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Architettura tecnologica',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'Quale delle seguenti affermazioni descrive meglio la vostra architettura tecnologica?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'Ambiente IT tradizionale, principalmente in sede, con molte applicazioni in silos.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Ambiente IT tradizionale, principalmente in sede, con poche applicazioni su cloud.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Molte applicazioni cloud connesse a sistemi IT tradizionali.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Un\'architettura digitale eseguita nel cloud, con l\'IT tradizionale per le operazioni di base.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Una piattaforma digitale integrata basata su sistemi intelligenti.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Architettura tecnologica',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'Per quanto riguarda l\'uso di DevOps e di prassi di sviluppo di software personalizzate, come si rapporta la vostra organizzazione alle altre aziende del settore?',
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'Siamo molto indietro rispetto alle altre aziende del settore.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Siamo indietro rispetto alle altre aziende del settore.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Siamo allo stesso livello delle altre aziende del settore.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Siamo leggermente più avanti delle altre aziende del settore.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Siamo molto più avanti delle altre aziende del settore.',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Architettura tecnologica',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'Quale delle seguenti affermazioni descrive meglio l\'approccio all\'automazione della vostra organizzazione?',
                        'name'=> 14,
                        'options'=>[
                            [
                                'label'=>'Documentazione e impegno limitati per i processi; no deployment, test, or release automation.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Introduzione di progetti di automazione (ovvero configurazione) isolati, incentrati esclusivamente sulla riduzione dei costi.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Provisioning automatizzato di infrastrutture e applicazioni; self-service portal usage.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'"Automazione ovunque" - i team di sviluppo e operazioni utilizzano strumenti di automazione, con un\'adozione agile per le iterazioni continue e i flussi di lavoro dei processi personalizzati.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Utilizzo di tecnologie basate su cloud per l\'automazione integrata dei processi e i flussi di lavoro dei processi personalizzati, combinati con analisi predittiva e processi sistemici flessibili.',
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
