<?php
// SAP Agile
return [
    'strategic-planning' => [
        'title' => 'Planificación estratégica',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Planificación estratégica</h1>
            <div class="h-1 bg-sap-green rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Los cambios en la economía han generado un entorno externo altamente dinámico. Las empresas necesitan adaptar continuamente sus estrategias y asegurarse de que son lo suficientemente ágiles y dinámicas para mantenerse al día.
            </p>
            <p>
                Responda las siguientes preguntas para comprender cuál es su nivel de agilidad en la planificación estratégica.

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
                'title' => 'Planificación estratégica',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'¿Está satisfecho con el proceso real de la planificación estratégica?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'En absoluto',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Funciona',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Estoy satisfecho',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Estoy muy satisfecho',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Planificación estratégica',
                'questions' => [
                    'q2'=>[
                        'type'=>'checkbox',
                        'question'=>'¿Qué información utiliza para la planificación? (seleccione lo que proceda)',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Finanzas',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Presupuestos',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Producción / Operaciones',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'RR. HH. (plantilla, nueva contratación)',
                                'value'=>2,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Planificación estratégica',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupbutton',
                        // 'calc'=>[
                        //     'type'=>'average'
                        // ],
                        'optionLabels' => [
                            '1 Muy lentamente',
                            '2',
                            '3',
                            '4',
                            '5 Muy rápidamente',
                        ],
                        'question'=>'¿Con qué velocidad se pueden implementar los cambios en la planificación en los distintos departamentos?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'Finanzas',
                                'name'=> 3.1,
                                'options'=>[
                                    [
                                        'label'=>'1 Muy lentamente',
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
                                        'label'=>'5 Muy rápidamente',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Presupuestos',
                                'name'=> 3.2,
                                'options'=>[
                                    [
                                        'label'=>'1 Muy lentamente',
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
                                        'label'=>'5 Muy rápidamente',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'Producción',
                                'name'=> 3.3,
                                'options'=>[
                                    [
                                        'label'=>'1 Muy lentamente',
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
                                        'label'=>'5 Muy rápidamente',
                                        'value'=>5,
                                        'checked'=>false
                                    ]
                                ]
                            ],
                            [
                                'label'=>'RR. HH. (plantilla, nueva contratación)',
                                'name'=> 3.4,
                                'options'=>[
                                    [
                                        'label'=>'1 Muy lentamente',
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
                                        'label'=>'5 Muy rápidamente',
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
        'title' => 'Procesos',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Procesos</h1>
            <div class="h-2 bg-sap-blue rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Los procesos (o "maneras de trabajar") de una organización realmente ágil están bien definidos y son flexibles. Por consiguiente, pueden adaptarse a los requisitos específicos de los clientes y a las fluctuaciones de la demanda, así como fomentar a la vez la eficiencia y la velocidad en la ejecución
            </p>
            <p>
                Conozca el nivel de agilidad de sus procesos respondiendo las siguientes preguntas.
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
                'title' => 'Procesos',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'butt¿Cómo describiría los procesos de su empresa?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'No hay procesos definidos',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Se ejecutan como se ha hecho siempre',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Hay una serie de procesos en conflicto',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Nuestros procesos están bien definidos y son efectivos',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Son flexibles para adaptarse a los cambios en los requisitos',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Procesos',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'¿En qué medida es fácil cambiar estos procesos?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Es muy difícil',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es imposible y no es necesario',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es posible, pero requiere tiempo',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es fácil, pero plantea algunos retos',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es fácil cambiarlos',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' => [
                'title' => 'Procesos',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'¿Su empresa comparte información sobre los procesos entre los distintos departamentos?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'Actualmente no es posible',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Solo en caso de necesidad',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Con frecuencia, pero con planificación previa',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Con frecuencia, en función de los cambios en los requisitos empresariales',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Constantemente y con un objetivo claro',
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
        'title' => 'Relaciones con los clientes',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Relaciones con los clientes</h1>
            <div class="h-2 bg-sap-purple rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                CLos empleados que tienen relación directa con los clientes son los que mejor conocen qué es lo que desea el cliente y cómo este deseo puede cambiar. En las organizaciones ágiles, este tipo de información vuelve a la empresa para acelerar la respuesta en la prestación de servicios y la entrega de productos.
            </p>
            <p>
                Veamos en qué posición se encuentra en esta área.
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
                'title' => 'Relaciones con los clientes',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué frecuencia cambian los clientes sus solicitudes y requisitos?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Casi nunca',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Pocas veces',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Regularmente',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Con frecuencia',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Con mucha frecuencia',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Relaciones con los clientes',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'H¿En qué medida es fácil para su empresa adaptarse a las nuevas necesidades de los clientes?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Es muy difícil  ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es difícil  ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Se puede hacer',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es fácil',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Le es muy fácil adaptarse',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Relaciones con los clientes',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué velocidad puede implementar y gestionar correctamente los nuevos requisitos de los clientes? ',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'La implementación es muy lenta',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Se requiere cierto tiempo para la implementación',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Estamos satisfechos con el ritmo',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'El proceso es rápido, pero podría mejorar',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Realizamos los cambios muy rápidamente',
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
        'title' => 'Proveedores y distribuidores',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Proveedores y distribuidores</h1>
            <div class="h-2 bg-sap-gray rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                Las organizaciones ágiles pueden adaptar las operaciones (ampliarlas o reducirlas) para satisfacer las fluctuaciones en la demanda. Gestionar los proveedores y los socios para poder adaptarse de inmediato es un arte que debe dominar si quiere convertirse en una empresa ágil.
            </p>
            <p>
                En las preguntas siguientes analizamos en qué posición se encuentra en esta área.
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
                'title' => 'Proveedores y distribuidores',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'¿Cómo comparte la información empresarial con sus proveedores?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'No compartimos información empresarial con nuestros proveedores',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Compartimos cierta información, en función de las circunstancias',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Compartimos información con nuestros proveedores cuando es necesario',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Compartimos mucha información regularmente con nuestros proveedores',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Disponemos de sistemas integrados',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Proveedores y distribuidores',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'¿Cómo comparte la información empresarial con sus distribuidores?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'No compartimos información empresarial con nuestros distribuidores o canales de venta',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Compartimos cierta información, en función de las circunstancias',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Compartimos información con nuestros distribuidores o canales de venta cuando es necesario',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Compartimos mucha información regularmente con nuestros distribuidores o canales de venta  ',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Disponemos de sistemas integrados',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Proveedores y distribuidores',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué velocidad puede realizar cambios en la manera de trabajar con proveedores y distribuidores?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'Por lo general se requiere mucho tiempo',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es posible, pero lentamente',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Estamos satisfechos con el ritmo',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'El proceso es rápido, pero podría mejorar',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muy rápidamente',
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
        'title' => 'Experiencia con el personal (RR. HH.)',
        'description' => '
            <h1 class="font-sapagile text-2xl sm:text-5xl font-light leading-tight mb-2">Experiencia con el personal (RR. HH.)</h1>
            <div class="h-2 bg-sap-orange rounded-full leading-none w-24 mb-2 sm:w-48"></div>
            <p class="mb-2 text-sm sm:text-base">
                EUn modelo empresarial integral no puede ser ágil si las personas no lo son. Y las personas no pueden ser ágiles si no están respaldadas por los procesos ni la dirección adecuados.
            </p>
            <p>
                En las preguntas siguientes analizamos en qué medida su empresa permite que las personas realicen su trabajo con agilidad.
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
                'title' => 'Experiencia con el personal (RR. HH.)',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'¿Cómo se comparte la información con los empleados en la empresa?',
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'Casi nunca  ',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'De la dirección a los empleados',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Según la necesidad de conocimiento  ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Se comparte mucha información empresarial con todos los empleados',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Hay una transparencia total de la empresa en relación con los empleados',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page2' => [
                'title' => 'Experiencia con el personal (RR. HH.)',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué velocidad se puede redirigir el personal a medida que los requisitos empresariales van cambiando?',
                        'name'=> 14,
                        'options'=>[
                            [
                                'label'=>'Por lo general se requiere mucho tiempo',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Es posible, pero lentamente',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Estamos satisfechos con el ritmo',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'El proceso es rápido, pero podría mejorar',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muy rápidamente',
                                'value'=>5,
                                'checked'=>false,
                            ]
                        ]
                    ]
                ]
            ],
            'page3' =>[
                'title' => 'Experiencia con el personal (RR. HH.)',
                'questions' => [
                    'q15'=>[
                        'type'=>'checkbox',
                        'question'=>'¿Cómo evalúa el rendimiento de sus empleados? (Seleccione lo que proceda)**',
                        'help' => '<sup>*</sup>Higher weighting on the last three areas – 2-3 – and only 1 point on the first three areas.',
                        'name'=> 15,
                        'options'=>[
                            [
                                'label'=>'Rendimiento de ventas y empresarial',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rendimiento por empleado (medidas de productividad)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rotación de personal y absentismo  ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'En función de los objetivos empresariales y personales  ',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Opiniones de los clientes  ',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Cuantificación de la experiencia de los empleados (satisfacción de los empleados, compromiso de los empleados, etc.)',
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
