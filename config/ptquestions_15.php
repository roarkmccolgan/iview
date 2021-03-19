<?php
// SAP Agile
return [
    'strategic-planning' => [
        'title' => 'Planeamento estratégico',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Planeamento estratégico</h1>
            <div class="h-1 bg-sap-green rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                A evolução da economia criou uma conjuntura externa extremamente dinâmica. As empresas têm de adaptar continuamente as suas estratégias e assegurar que a sua atividade é suficientemente ágil e dinâmica para acompanhar essa evolução.
            </p>
            <p>
                Responda às perguntas seguintes para conhecer o nível de agilidade do seu planeamento estratégico.
            </p>',
        'nuggets' => [
            'skills.png',
            'customer.png',
            'cocreate.png',
        ],
        'background' => 'green',
        'intermission' => false,
        'class' => 'sec1',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Planeamento estratégico',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Está satisfeito com o processo de planeamento estratégico atual?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'De maneira nenhuma',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Não',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Funciona',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Satisfeito',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muito satisfeito',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Planeamento estratégico',
                'questions' => [
                    'q2'=>[
                        'type'=>'checkbox',
                        'question'=>'Que informações utiliza no seu planeamento? (selecione todas as respostas aplicáveis)',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Financeiras',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Orçamentais',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Produção/Operações',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'RH (efetivos + novas contratações)',
                                'value'=>2,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Planeamento estratégico',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'average'
                        // ],
                        'optionLabels' => [
                            '1 Muito lentamente',
                            '2',
                            '3',
                            '4',
                            '5 Muito rapidamente',
                        ],
                        'question'=>'Com que rapidez podem ser implementadas mudanças no planeamento em diferentes departamentos?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Financeiras',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'1 Muito lentamente',
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
                                        'label'=>'5 Muito rapidamente',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Orçamentais',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'1 Muito lentamente',
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
                                        'label'=>'5 Muito rapidamente',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Produção/Operações',
                                'name'=> 3.3,
                                'options'=>[
                                    [
                                        'label'=>'1 Muito lentamente',
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
                                        'label'=>'5 Muito rapidamente',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'RH (efetivos + novas contratações)',
                                'name'=> 3.4,
                                'options'=>[
                                    [
                                        'label'=>'1 Muito lentamente',
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
                                        'label'=>'5 Muito rapidamente',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                        ],
                    ]
                ]
            ]
        ]
    ],
    'processes' => [
        'title' => 'Processos',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Processos</h1>
            <div class="h-2 bg-sap-blue rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Uma organização verdadeiramente ágil possui processos (ou “métodos de trabalho”) que são bem definidos e flexíveis. Como resultado, pode dar resposta às necessidades especiais dos clientes e às flutuações da procura, bem como aumentar a eficiência e a rapidez de execução.
            </p>
            <p>
                Teste a agilidade de processos da sua empresa, respondendo ao conjunto de perguntas seguinte.
            </p>',
        'background' => 'blue',
        'nuggets' => [
            'omnichannel.png',
            'boat.png',
        ],
        'intermission' => false,
        'class' => 'sec2',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Processos',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'Qual é a melhor descrição dos processos da sua empresa?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Não há nenhum processo definido em vigor',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'São os mesmos de sempre',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Uma série de processos contraditórios',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Temos processos bastante bem definidos e eficazes',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Flexíveis em relação à evolução das necessidades',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Processos',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Até que ponto é fácil alterar estes processos?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Muito difícil',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Não é possível e não é necessário',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Possível, mas demora tempo',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Fácil, mas com alguns desafios',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'São facilmente alterados',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Processos',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'A sua empresa é capaz de partilhar informações sobre os processos entre os diferentes departamentos?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Atualmente não é possível',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Apenas com base nas necessidades',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularmente, mas de acordo com um plano',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularmente com base na evolução das necessidades de negócio',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Constantemente e com um propósito claro',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
        ]
    ],
    'customer-relationships' => [
        'title' => 'Relações com os clientes',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Relações com os clientes</h1>
            <div class="h-2 bg-sap-purple rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Os colaboradores que lidam diretamente com os clientes estão em melhor posição para compreender o que os clientes desejam e como esses desejos podem evoluir. As organizações ágeis incorporam estas informações na atividade, permitindo que a sua entrega de produtos e serviços dê uma resposta rápida 
            </p>
            <p>
                Exploremos em que ponto se encontra neste domínio.
            </p>',
        'background' => 'purple',
        'nuggets' => [
            'managed.png',
            'intellectual.png',
        ],
        'intermission' => '',
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Relações com os clientes',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'Com que frequência os seus clientes alteram as suas solicitações e necessidades?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Muito raramente',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Raramente',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularmente',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Com frequência',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Com muita frequência',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Relações com os clientes',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Com que facilidade a sua empresa se adapta às novas necessidades dos clientes?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Com muita dificuldade ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Com dificuldade  ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'É viável',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Com facilidade',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'É muito fácil adaptarmo-nos',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Relações com os clientes',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Com que rapidez é capaz de implementar e gerir com sucesso as novas necessidades dos clientes?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'A implementação é muito lenta',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Pode demorar algum tempo a implementar',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'A um nível que nos satisfaz',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rapidamente, mas podia ser melhor',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Realizamos estas mudanças com grande rapidez',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'suppliers-distributors' => [
        'title' => 'Fornecedores e distribuidores',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Fornecedores e distribuidores</h1>
            <div class="h-2 bg-sap-gray rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                As organizações ágeis podem dimensionar as suas operações à escala (ampliando-a ou reduzindo-a) a fim de responder às flutuações da procura. A alavancagem dos fornecedores e dos parceiros para obter uma escala instantânea é uma arte que deve ser dominada para uma empresa se tornar verdadeiramente ágil.
            </p>
            <p>
                As perguntas seguintes definem como pontua neste domínio.
            </p>',
        'background' => 'gray',
        'nuggets' => [
            'managed.png',
            'intellectual.png',
        ],
        'intermission' => '',
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Fornecedores e distribuidores',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Como são partilhadas as informações comerciais entre a sua empresa e os seus fornecedores?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Não partilhamos informações entre a nossa empresa e os nossos fornecedores',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Partilhamos algumas informações em função das circunstâncias',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Partilhamos informações quando os nossos fornecedores têm necessidade delas',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Partilhamos muitas informações regularmente com os nossos fornecedores',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Temos sistemas integrados',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Fornecedores e distribuidores',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'Como são partilhadas as informações comerciais entre a sua empresa e os seus distribuidores?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'Não partilhamos informações entre a nossa empresa e os nossos distribuidores/canal de vendas',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Partilhamos algumas informações em função das circunstâncias',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Partilhamos informações quando os nossos distribuidores/canal de vendas têm necessidade delas',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Partilhamos muitas informações regularmente com os nossos distribuidores/canal de vendas',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Temos sistemas integrados',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Fornecedores e distribuidores',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'Com que rapidez é capaz de introduzir mudanças na forma como trabalha com fornecedores e distribuidores?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'Geralmente demora muito tempo',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Acontece, mas lentamente',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'A um nível que nos satisfaz',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rapidamente, mas podia ser melhor',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muito rapidamente',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ],
    'people-experience' => [
        'title' => 'Experiência dos colaboradores (RH)',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Experiência das pessoas (RH)</h1>
            <div class="h-2 bg-sap-orange rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                A agilidade de um modelo de negócio completo não é possível sem pessoas ágeis. Não são possíveis pessoas ágeis se os processos de apoio e a gestão não o permitirem.
            </p>
            <p>
                As perguntas seguintes avaliam até que ponto a sua empresa permite que os seus colaboradores sejam verdadeiramente ágeis no seu trabalho.
            </p>',
        'background' => 'orange',
        'nuggets' => [
            'managed.png',
            'intellectual.png',
        ],
        'intermission' => '',
        'class' => 'sec3',
        'shuffle' => false,
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Experiência das pessoas (RH)',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'Como são partilhadas as informações com os colaboradores em toda a empresa?',
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'Muito raramente ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Da gestão aos colaboradores',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Com base nas necessidades ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muitas informações comerciais são partilhadas com todos os colaboradores',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Existe uma transparência total da atividade com todos os colaboradores',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Experiência das pessoas (RH)',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'Com que rapidez é capaz de redirecionar o seu colaboradores com base na evolução das necessidades da empresa?',
                        'name'=> 14,
                        'options'=>[
                            [
                                'label'=>'Geralmente demora muito tempo',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Acontece, mas lentamente',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'A um nível que nos satisfaz',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rapidamente, mas podia ser melhor',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muito rapidamente',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Experiência das pessoas (RH)',
                'questions' => [
                    'q15'=>[
                        'type'=>'checkbox',
                        'question'=>'Como avalia o desempenho dos seus colaboradores? (selecione todas as respostas aplicáveis)*',
                        'help' => '<sup>*</sup>Higher weighting on the last three areas – 2-3 – and only 1 point on the first three areas.',
                        'name'=> 15,
                        'options'=>[
                            [
                                'label'=>'Desempenho das vendas e da atividade',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Contributos dos colaboradores (parâmetros de produtividade)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rotatividade e absentismo dos colaboradores',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Com base nos objetivos pessoais e do negócio ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Opinião por parte dos clientes',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Avaliação da experiência dos colaboradores (satisfação dos colaboradores, empenho dos colaboradores, etc.)',
                                'value'=>3,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
