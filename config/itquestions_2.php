<?php
return array(
    'screeners' => array(
        'title' => 'Informazioni demografiche',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'Informazioni demografiche',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Informazioni demografiche',
                'questions' => array(
                    's1'=>array(
                        'type'=>'button',
                        'question'=>'In quale Paese si trova la società per cui lavora? Selezionare una risposta',
                        'name'=>'s1',
                        'options'=>array(
                            array(
                                'label'=>'Francia',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Germania',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Regno Unito',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Spagna',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Italia',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Altro',
                                'value'=>0,
                                'checked'=>false
                            )
                        ),
                        'other'=>'Altro|0|Your country'
                    )
                )
            ),
            'page2' => array(
                'title' => 'Informazioni demografiche',
                'questions' => array(
                    's2'=>array(
                        'type'=>'button',
                        'question'=>'Quanti dipendenti lavorano a tempo pieno nella Sua organizzazione in tutto il mondo?  Selezionare una risposta',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'label'=>'Meno di 1000',
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
                                'label'=>'10000 o più',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Informazioni demografiche',
                'questions' => array(
                    's3'=>array(
                        'type'=>'button',
                        'question'=>'Quale dei seguenti settori descrive meglio l\'attività principale della Sua organizzazione?  Selezionare una risposta',
                        'name'=>'s3',
                        'options'=>array(
                            array(
                                'label'=>'Servizi finanziari',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Produzione',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Servizi di telecomunicazioni (compresi hoster, xSPs e fornitori di servizi cloud)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Istruzione',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Assistenza sanitaria',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Media, Informazione',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Trasporto, distribuzione e logistica',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Commercio al dettaglio/all\'ingrosso',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Consulenza IT e relativi servizi professionali',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Consulenza non-IT e altri servizi professionali (di contabilità, legali, pubblicitari, immobiliari, di ricerca personale/risorse umane, di consulenza aziendale, ecc.)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Amministrazione centrale o locale, o servizi pubblici',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Utenze - elettricità, gas, acqua',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Altro',
                                'value'=>1,
                                'checked'=>false,
                                'other' => true
                            )
                        ),
                        'other'=>'Altro|1|Specificare'
                    )
                )
            )
        )
    ),
    'cyber-risk-management-and-the-business' => array(
        'title' => 'Cyber Risk Management e il Business',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'Come viene considerato il ruolo dell\'IT dal top management? Selezionare una risposta',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Un costo necessario',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Un attivatore di efficienza aziendale',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Un fattore di vantaggio competitivo o differenziazione',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
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
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'In caso di richieste da parte di aziende per applicazioni o servizi nuovi o avanzati, quale affermazione riflette meglio le capacità del reparto IT della Sua organizzazione? Selezionare una risposta',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Facciamo fatica a gestire la maggior parte delle richieste.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'In generale gestiamo bene le richieste relative ad applicazioni o servizi esistenti, ma abbiamo difficoltà con le richieste di servizi nuovi o avanzati.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'In generale gestiamo bene le richieste relative sia ad applicazioni e servizi esistenti sia a servizi nuovi o avanzati.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Riusciamo molto bene a gestire tutte o la maggior parte delle richieste.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Quale delle seguenti affermazioni descrive meglio l\'atteggiamento della Sua organizzazione relativamente ai rischi a livello commerciale?',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'Evitiamo i rischi a tutti i costi.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Tendiamo a evitare i rischi, a meno che ci sia una buona giustificazione.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Siamo molto attenti a non correre rischi, a meno che non possiamo trarne un chiaro vantaggio aziendale.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Correremmo prontamente il rischio per aiutare lo sviluppo dell\'azienda.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Ci assumiamo e gestiamo attivamente i rischi per aiutare lo sviluppo dell\'azienda.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupradio',
                        'question'=>'Quale delle seguenti opzioni è già in atto per proteggere il business della Sua organizzazione in caso di incidenti?',
                        'name'=>'q4',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Valutazione formale del rischio',
                                'name'=>'q4.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Rilevamento proattivo (soluzioni in grado di identificare minacce sconosciute tramite tecniche quali l’analisi comportamentale e machine learning, rispetto al blocco delle sole minacce conosciute tramite l’uso di signature)',
                                'name'=>'q4.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Pianificazione della risposta',
                                'name'=>'q4.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Pianificazione della comunicazione interna',
                                'name'=>'q4.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Pianificazione delle comunicazioni esterne e pubbliche relazioni',
                                'name'=>'q4.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Pianificazione della notifica delle violazioni',
                                'name'=>'q4.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Pianificazione del rimedio alle violazioni',
                                'name'=>'q4.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Assicurazione contro i rischi informatici',
                                'name'=>'q4.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Attualmente in atto',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto ma previsto',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'Non in atto e non previsto',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
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
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Quale delle seguenti affermazioni descrive meglio il modo in cui la Sua azienda gestisce il rischio informatico? Selezionare una risposta',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'Non ha un responsabile dedicato',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'In genere è delegato all\'IT.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'È condiviso tra IT e altre linee di business.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'È condiviso tra IT e senior management.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'È condiviso tra IT, senior management e altre linee di business.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'groupradio',
                        'question'=>'Quale delle seguenti posizioni è inserita nel quadro di escalation del rischio informatico della Sua azienda?',
                        'name'=>'q6',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Amministratore Delegato',
                                'name'=>'q6.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Direttore Finanziario',
                                'name'=>'q6.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Direttore Operativo',
                                'name'=>'q6.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Membro non esecutivo del consiglio per la sicurezza/compliance/rischio',
                                'name'=>'q6.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Membro esecutivo del consiglio per la sicurezza/compliance/rischio',
                                'name'=>'q6.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Ruolo dedicato a sicurezza/compliance/rischio (esterno al consiglio)',
                                'name'=>'q6.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
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
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'Di solito quanto tempo prima viene introdotta la sicurezza IT nei progetti e nelle iniziative di business? Scegliere una sola risposta Selezionare una risposta',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'Fin dall\'inizio della pianificazione',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Durante la pianificazione',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'All\'inizio dell\'attuazione',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Durante l\'attuazione',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Quando qualcosa va storto',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Cyber Risk Management e il Business',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Come descriverebbe il livello di investimenti nella sicurezza IT della Sua organizzazione? Scegliere una sola risposta Selezionare una risposta',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Non sufficiente per quello che dobbiamo fare',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Limitato, a malapena copre le operazioni essenziali',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Buono per le operazioni di base, ma limitato per le nuove iniziative',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Buono per le operazioni di base e per le nuove iniziative in cui il valore è ben determinato',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Prontamente disponibile su tutta la linea con un buon business case, anche per lo sviluppo sperimentale',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    ),
    'cyber-risk-management-operations-and-defence' => array(
        'title' => 'Cyber Risk Management e la Difesa',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'slider',
                        'question'=>'In che misura la Sua azienda ha in atto quanto segue per la gestione della sicurezza IT fisica?',
                        'name'=>'q9',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Screening del personale di sicurezza',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Appuntamenti prenotati in anticipo',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>' Verifica dell\'identità',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Accesso controllato con due porte autobloccanti in entrata/uscita (Man-trap)',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Autenticazione biometrica',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Monitoraggio con telecamere a circuito chiuso',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Man-shadowing (personale e visitatori devono lavorare in coppia o essere accompagnati)',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.7',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Modifica di autorizzazione, approvazione e registrazione',
                                'from'=>'Nessuna',
                                'to'=>'Molto estesa',
                                'name'=>'q9.8',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
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
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'Quale delle seguenti definizioni descrive meglio l\'adozione e l\'attuazione delle Best Practices di sicurezza IT della Sua organizzazione? Selezionare una risposta',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Non ce ne occupiamo.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ce ne occupiamo in modo informale internamente.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ce ne occupiamo formalmente (seguendo degli standard) utilizzando le nostre competenze generali.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ce ne occupiamo formalmente (seguendo degli standard) utilizzando le competenze interne di esperti.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Facciamo uso di un valutatore esperto esterno (seguendo gli standard).',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'slider',
                        'question'=>'Quanto è preparata la Sua azienda per i seguenti aspetti della valutazione e attuazione di conformità GDPR?',
                        'name'=>'q11',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Conoscenza degli obblighi',
                                'from'=>'Non preparata',
                                'to'=>'Molto ben preparata',
                                'name'=>'q11.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Valutazione delle capacità e delle lacune',
                                'from'=>'Non preparata',
                                'to'=>'Molto ben preparata',
                                'name'=>'q11.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Pianificazione dell\'attuazione',
                                'from'=>'Non preparata',
                                'to'=>'Molto ben preparata',
                                'name'=>'q11.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Esecuzione dell\'attuazione',
                                'from'=>'Non preparata',
                                'to'=>'Molto ben preparata',
                                'name'=>'q11.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Miglioramento continuo/migliori prassi al di là del GDPR (al di là delle norme)',
                                'from'=>'Non preparata',
                                'to'=>'Molto ben preparata',
                                'name'=>'q11.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Comprensione la mitigazione delle sanzioni sulla base di individuazione/rimedio precoci',
                                'from'=>'Non preparata',
                                'to'=>'Molto ben preparata',
                                'name'=>'q11.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
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
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>'La Sua azienda tende a investire tatticamente (prodotti specifici/se necessario) o strategicamente (parte di un piano) in prodotti per la sicurezza o soluzioni IT? Selezionare una risposta',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'Tendiamo ad acquistare tatticamente (prodotti specifici) all\'insorgere dei problemi.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Il più delle volte acquistiamo tatticamente all\'insorgere dei problemi, ma a volte facciamo acquisti strategici.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Facciamo equamente acquisti tattici e strategici.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Il più delle volte acquistiamo strategicamente ma compreremmo tatticamente qualora sorgesse un problema.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Tendiamo ad acquistare strategicamente su tutta la linea.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'Ogni quanto viene presentata al business una relazione circa lo stato della sicurezza IT? Selezionare una risposta',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Non è nostra consuetudine farlo',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ad hoc se richiesta',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Annualmente',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Trimestralmente',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Mensilmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Settimanalmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Giornalmente',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Ogni ora',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Continuamente',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In vantaggio',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'Qual è il mezzo principale di gestione dell\'infrastruttura della sicurezza IT della Sua organizzazione? Selezionare una risposta',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'Molto ad hoc, usiamo excel, ecc.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Usiamo principalmente strumenti pre-configurati dei nostri fornitori di sicurezza.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Usiamo una combinazione di strumenti di gestione specializzati con alcuni strumenti pre-configurati',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Usiamo principalmente strumenti di gestione della sicurezza specializzati.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Usiamo una suite di gestione della sicurezza end-to-end.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Ci affidiamo a un partner certificato che ci aiuta a gestire l\'infrastruttura della sicurezza IT.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'button',
                        'question'=>'In che misura la Sua organizzazione ha adottato l\'automazione nella gestione della sicurezza IT? Selezionare una risposta',
                        'name'=>'q15',
                        'options'=>array(
                            array(
                                'label'=>'Processi manuali su tutta la linea',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Principalmente processi manuali con una quantità minima di automazione',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Buon equilibrio tra processi di automazione e manuali',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Principalmente automazione con una quantità minima di processi manuali',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Automazione su tutta la linea',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'A proposito di automazione, in che modo la Sua organizzazione intende modificarne l\'uso? Selezionare una risposta',
                        'name'=>'q16',
                        'options'=>array(
                            array(
                                'label'=>'Diminuirlo di molto',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In ritardo',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Diminuirlo un po',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In ritardo',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Lasciarlo invariato',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Aumentarlo un po',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Aumentarlo di molto',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In vantaggio',
                                ]
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'groupradio',
                        'question'=>'La Sua organizzazione fa uso di quanto segue in materia di sicurezza IT - protezione? (Sì/No)',
                        'name'=>'q17',
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),
                        'options'=>array(
                            array(
                                'label'=>'NGFW (firewall di nuova generazione)',
                                'name'=>'q17.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'IPS/IDS (Rilevamento/protezione dell\'intrusione)',
                                'name'=>'q17.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gestione delle vulnerabilità',
                                'name'=>'q17.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Micro segmentazione (separazione precisa e isolamento del traffico tra host o domini specificati)',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gestione della sicurezza unificata (scambio di dati e informazioni tra dispositivi e strumenti),',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Servizio di sicurezza professionale di terze parti (prevendita/progettazione/attuazione)',
                                'name'=>'q17.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                        )
                    ),
                )
            ),
            'page10' => array(
                'title' => 'Cyber Risk Management e la Difesa',
                'questions' => array(
                    'q25'=>array(
                        'type'=>'button',
                        'question'=>'Quale affermazione descrive la misura in cui la Sua organizzazione fa uso dei fornitori di servizi di sicurezza gestiti? Selezionare una risposta',
                        'name'=>'q25',
                        'options'=>array(
                            array(
                                'label'=>'Non li usiamo affatto.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Li usiamo in modo limitato, ma preferiamo fare le cose internamente.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Li usiamo in modo equilibrato.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Li preferiamo al fare le cose internamente.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Li usiamo ampiamente per quanto possibile.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            )
                        )
                    )
                )
            )
        )
    ),
    'cyber-risk-management-breach-detection-and-remediation' => array(
        'title' => 'Cyber Risk Management Breach Detection e Remediation',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cyber Risk Management Breach Detection e Remediation',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'groupradio',
                        'question'=>'La Sua organizzazione fa uso di quanto segue in materia di sicurezza IT - rilevamento delle violazioni?',
                        'name'=>'q18',
                        'options'=>array(
                            array(
                                'label'=>'Servizi di intelligence per le minacce',
                                'name'=>'q18.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Analisi in tempo reale',
                                'name'=>'q18.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Protezione avanzata delle minacce/sandboxing',
                                'name'=>'q18.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'IA/euristica',
                                'name'=>'q17.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Scansione malware',
                                'name'=>'q17.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
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
                'title' => 'Cyber Risk Management Breach Detection e Remediation',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'groupradio',
                        'question'=>'La Sua organizzazione fa uso di quanto segue in materia di sicurezza IT - risposta alle violazioni?',
                        'name'=>'q19',
                        'options'=>array(
                            array(
                                'label'=>'Honeypot/raccolta di informazioni',
                                'name'=>'q19.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Registrazione e analisi forense',
                                'name'=>'q19.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Failover/ripristino del sistema',
                                'name'=>'q19.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Tiger/go teams',
                                'name'=>'q19.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Partner esterno di risposta agli incidenti',
                                'name'=>'q19.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
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
                'title' => 'Cyber Risk Management Breach Detection e Remediation',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'groupradio',
                        'question'=>'E la Sua organizzazione fa uso di quanto segue in materia di sicurezza IT - rimedio alle violazioni?',
                        'name'=>'q20',
                        'options'=>array(
                            array(
                                'label'=>'Rimedio automatico (basato su machine learning)',
                                'name'=>'q20.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In vantaggio',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Aggiornamenti dei criteri',
                                'name'=>'q20.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Criterio di ripristino dei guasti',
                                'name'=>'q20.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In ritardo',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Fornitori esterni di ripristino dei guasti',
                                'name'=>'q20.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Verifica Stato Compromissione',
                                'name'=>'q20.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
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
                'title' => 'Cyber Risk Management Breach Detection e Remediation',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'groupradio',
                        'question'=>'La Sua organizzazione ha fatto quanto segue al fine di comprendere il profilo di rischio informatico?',
                        'name'=>'q21',
                        'options'=>array(
                            array(
                                'label'=>'Ha valutato il rischio di subire una violazione informatica',
                                'name'=>'q21.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Ha compreso la potenziale scala di esposizione',
                                'name'=>'q21.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Ha eseguito una valutazione dei dati critici',
                                'name'=>'q21.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Ha compreso la postura di sicurezza della supply chain estesa o dei partner',
                                'name'=>'q21.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In vantaggio',
                                            'stage3' => 'In vantaggio',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
                                        ]
                                    )
                                )
                            ),
                            array(
                                'label'=>'Ha messo a punto un piano di risposta alle violazioni della sicurezza',
                                'name'=>'q21.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In vantaggio',
                                            'stage2' => 'In linea',
                                            'stage3' => 'In linea',
                                            'stage4' => 'In linea',
                                            'stage5' => 'In linea',
                                        ]
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'In linea',
                                            'stage2' => 'In ritardo',
                                            'stage3' => 'In ritardo',
                                            'stage4' => 'In ritardo',
                                            'stage5' => 'In ritardo',
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
                'title' => 'Cyber Risk Management Breach Detection e Remediation',
                'questions' => array(
                    'q23'=>array(
                        'type'=>'button',
                        'question'=>'Ogni quanto tempo la Sua organizzazione testa le proprie capacità di difesa della sicurezza IT tramite verifica da parte di terzi? Selezionare una risposta',
                        'name'=>'q23',
                        'options'=>array(
                            array(
                                'label'=>'Mai',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'A distanza di pochi anni',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ogni anno',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ogni 6 mesi',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ogni trimestre',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Mensilmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Settimanalmente',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Continuamente',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In vantaggio',
                                ]
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Cyber Risk Management Breach Detection e Remediation',
                'questions' => array(
                    'q24'=>array(
                        'type'=>'button',
                        'question'=>'Ogni quanto la Sua organizzazione verifica i piani di risposta agli incidenti di violazione informatica? Selezionare una risposta',
                        'name'=>'q24',
                        'options'=>array(
                            array(
                                'label'=>'Mai',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In ritardo',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'A distanza di pochi anni',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In linea',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ogni anno',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In linea',
                                    'stage3' => 'In ritardo',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ogni 6 mesi',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In linea',
                                    'stage4' => 'In ritardo',
                                    'stage5' => 'In ritardo',
                                ]
                            ),
                            array(
                                'label'=>'Ogni trimestre',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In linea',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Mensilmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Settimanalmente',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In linea',
                                ]
                            ),
                            array(
                                'label'=>'Continuamente',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'In vantaggio',
                                    'stage2' => 'In vantaggio',
                                    'stage3' => 'In vantaggio',
                                    'stage4' => 'In vantaggio',
                                    'stage5' => 'In vantaggio',
                                ]
                            )
                        )
                    )
                )
            ),
        )
    )
);