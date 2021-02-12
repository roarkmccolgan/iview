<?php

// Snow
return [
    'leadership'=>[
        'title' => 'Visión de liderazgo para la agilidad',
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
                'title' => 'Visión de liderazgo para la agilidad',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor su enfoque de liderazgo para la definición de estrategias?',
                        'name'=> 1,
                        'options'=>[
                            [
                                'label'=>'La dirección define la estrategia cada 2 o 3 años.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección redefine la estrategia cada año y puede incluir revisiones trimestrales.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección revisa la estrategia trimestralmente y hace los cambios necesarios.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección adopta decisiones estratégicas basadas en información y datos operativos periódicamente.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección redefine la estrategia constantemente para impulsar la innovación y posibilitar un cambio constante.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Visión de liderazgo para la agilidad',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor su enfoque de liderazgo para la asignación de presupuestos e inversiones?',
                        'name'=> 2,
                        'options'=>[
                            [
                                'label'=>'Los presupuestos se confeccionan sobre la base del año anterior, con algunas modificaciones.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección asigna presupuestos específicos en plazos fijos.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección revisa los presupuestos trimestralmente y asigna la inversión en consecuencia.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección utiliza un programa de presupuestación ágil, como por vía rápida, por goteo, etc.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección redefine constantemente la asignación del presupuesto en función de los cambios en los requisitos.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Visión de liderazgo para la agilidad',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor sus acciones de liderazgo con respecto a los procesos?',
                        'name'=> 3,
                        'options'=>[
                            [
                                'label'=>'La dirección apoya y mantiene los procesos existentes.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos están bien definidos, pero la dirección está de acuerdo con hacer cambios en algunas áreas.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Cuando se descubren problemas en los procesos, la dirección ayuda a los equipos a realizar cambios.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La dirección ha hecho inversiones en formación y tecnología para hacer posible los cambios en los procesos en todos los departamentos.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'El equipo directivo identifica de forma proactiva los flujos de trabajo que requieren más agilidad y asigna presupuestos para habilitar mejores procesos.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'structural' => [
        'title' => 'Agilidad estructural',
        'description' => '
            <p class=""> La modernización de las aplicaciones es un paso clave en la transformación digital, ya que las aplicaciones más antiguas no proporcionan la agilidad y la adaptabilidad necesarias para el entorno empresarial actual y las expectativas de los clientes. La migración de aplicaciones a un entorno de nube, ya sea una nube privada o una nube pública, es un paso importante en la modernización de las aplicaciones. Existen varias estrategias para la modernización de las aplicaciones que tienen sentido para las diferentes aplicaciones. \n 
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
                'title' => 'Agilidad estructural',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor cómo se definen los equipos dentro de su organización?',
                        'name'=> 4,
                        'options'=>[
                            [
                                'label'=>'Los equipos se definen estrictamente por área funcional y rara vez cambian.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los equipos se definen por área funcional, con cierta colaboración entre departamentos.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los equipos con diversos roles se definen en torno a los productos y servicios, basándose en diferentes competencias y experiencia.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los equipos se adscriben a los productos basándose en diferentes conocimientos y experiencia, pero en plazos fijos.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los equipos son creados espontáneamente por los empleados de las distintas áreas funcionales en tiempo real cuando surge la necesidad.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Agilidad estructural',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor el enfoque de su organización para identificar las carencias en términos de competencias y asignar los recursos necesarios para cubrirlas?',
                        'name'=> 5,
                        'options'=>[
                            [
                                'label'=>'Identificamos las carencias de competencias y asignamos recursos en función de un plan anual.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Identificamos las carencias de competencias y asignamos recursos en momentos fijos del año.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Identificamos las carencias de competencias de forma continua, pero los recursos deben aprobarse en ciertos momentos fijos.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Identificamos las carencias de competencias a lo largo del año y recurrimos a recursos de forma continua y flexible.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Agilidad estructural',
                'questions' => [
                    'q6'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor el enfoque de su organización con respecto al conocimiento y la colaboración?',
                        'name'=> 6,
                        'options'=>[
                            [
                                'label'=>'El intercambio de conocimientos y la colaboración se deja en manos de los empleados individuales.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'El intercambio de conocimientos y la colaboración se gestionan a nivel de departamento.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Las herramientas de gestión de conocimientos y colaboración están centralizadas para permitir el uso compartido y la interacción en toda la empresa.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La gestión del conocimiento y la colaboración son KPI formales para individuos y departamentos.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La gestión del conocimiento y la colaboración son KPI formales y se extienden a socios externos.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'process' => [
        'title' => 'Agilidad de procesos',
        'description' => '
            <p class=""> La modernización de las aplicaciones es un paso clave en la transformación digital, ya que las aplicaciones más antiguas no proporcionan la agilidad y la adaptabilidad necesarias para el entorno empresarial actual y las expectativas de los clientes. La migración de aplicaciones a un entorno de nube, ya sea una nube privada o una nube pública, es un paso importante en la modernización de las aplicaciones. Existen varias estrategias para la modernización de las aplicaciones que tienen sentido para las diferentes aplicaciones. \n 
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
                'title' => 'Agilidad de procesos',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor sus procesos empresariales?',
                        'name'=> 7,
                        'options'=>[
                            [
                                'label'=>'Por lo general, los procesos no están normalizados.',
                                'value'=>1.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos empresariales se normalizan dentro de departamentos individuales (por ejemplo, finanzas, operaciones).',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos empresariales están normalizados y fluyen entre departamentos.',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'La mayoría de los procesos se han automatizado y están respaldados por el intercambio de información en tiempo real entre áreas.',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos básicos están normalizados y automatizados, lo que permite a los empleados crear nuevos procesos de manera autónoma.',
                                'value'=>7.5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Agilidad de procesos',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor cómo se definen y modifican los procesos empresariales?',
                        'name'=> 8,
                        'options'=>[
                            [
                                'label'=>'Los procesos empresariales no se definen ni documentan explícitamente.',
                                'value'=>1.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos empresariales son estáticos y se adaptan a sistemas que instalamos hace muchos años.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos empresariales están documentados y ligados a sistemas básicos, pero se generan o revisan periódicamente.',
                                'value'=>4.5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos empresariales están digitalizados, pero solo se adaptan o ajustan periódicamente.',
                                'value'=>6,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los procesos empresariales están completamente digitalizados y se pueden crear o ajustar dinámicamente.',
                                'value'=>7.5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'portfolio' => [
        'title' => 'Agilidad de la cartera de productos',
        'description' => '
            <p class=""> La modernización de las aplicaciones es un paso clave en la transformación digital, ya que las aplicaciones más antiguas no proporcionan la agilidad y la adaptabilidad necesarias para el entorno empresarial actual y las expectativas de los clientes. La migración de aplicaciones a un entorno de nube, ya sea una nube privada o una nube pública, es un paso importante en la modernización de las aplicaciones. Existen varias estrategias para la modernización de las aplicaciones que tienen sentido para las diferentes aplicaciones. \n 
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
                'title' => 'Agilidad de la cartera de productos',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué frecuencia lanza su organización productos o servicios?',
                        'name'=> 9,
                        'options'=>[
                            [
                                'label'=>'Los productos o servicios se lanzan cada dos años o más (y normalmente tienen ciclos de I+D prolongados).',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los productos o servicios se lanzan cada año en un ciclo estructurado.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los productos se lanzan cada año, y las actualizaciones tienen lugar una o dos veces al año.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los productos se idean constantemente a lo largo del año y se lanzan trimestralmente cuando están disponibles.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los productos viables mínimos se introducen en cuestión de meses a partir de su concepción y se amplían o retiran en función de las opiniones de los clientes en un flujo constante.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Agilidad de la cartera de productos',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué rapidez puede reaccionar su cartera de productos o servicios a los cambios en el entorno externo?',
                        'name'=> 10,
                        'options'=>[
                            [
                                'label'=>'Mucho más lento de lo que nos gustaría',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Más lento de lo que nos gustaría',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Rápidamente, pero podría ser mejor',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muy rápido y no hay necesidad de mejorar',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Agilidad de la cartera de productos',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor el papel de los clientes a medida que su organización desarrolla sus ofertas y productos?',
                        'name'=> 11,
                        'options'=>[
                            [
                                'label'=>'Seguimos un embudo de desarrollo de productos muy estructurado y dirigido internamente.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los planes de productos se basan en información de mercado no estructurada.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Las opiniones de los clientes nos ayudan a lanzar productos y servicios o a perfeccionarlos.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Los presupuestos para proyectos experimentales y las primeras opiniones de los grupos consultivos de clientes nos permiten innovar fuera del ciclo.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Integramos ideas innovadoras de una red externa en nuestras rápidas iteraciones de productos para seguir un modelo de tipo «fracaso rápido».',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'technology' => [
        'title' => 'Arquitectura tecnológica',
        'description' => '
            <p class=""> La modernización de las aplicaciones es un paso clave en la transformación digital, ya que las aplicaciones más antiguas no proporcionan la agilidad y la adaptabilidad necesarias para el entorno empresarial actual y las expectativas de los clientes. La migración de aplicaciones a un entorno de nube, ya sea una nube privada o una nube pública, es un paso importante en la modernización de las aplicaciones. Existen varias estrategias para la modernización de las aplicaciones que tienen sentido para las diferentes aplicaciones. \n 
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
                'title' => 'Arquitectura tecnológica',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor su arquitectura tecnológica?',
                        'name'=> 12,
                        'options'=>[
                            [
                                'label'=>'Entorno de TI tradicional, principalmente en entornos locales con diferentes aplicaciones en silos.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Entorno de TI tradicional, principalmente en entornos locales con algunas aplicaciones en la nube.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Muchas aplicaciones en la nube conectadas a sistemas de TI tradicionales.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Una arquitectura digital que se ejecuta en la nube, con TI tradicional para las operaciones básicas.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Una plataforma digital integrada con sistemas inteligentes en su núcleo.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Arquitectura tecnológica',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'En cuanto al uso de prácticas personalizadas de DevOps y desarrollo de software, ¿cómo se compara su organización con la de sus homólogos del sector?',
                        'name'=> 13,
                        'options'=>[
                            [
                                'label'=>'Vamos muy por detrás de nuestros homólogos.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vamos por detrás de nuestros homólogos.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vamos a la par con nuestros homólogos.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vamos ligeramente por delante de nuestros homólogos.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Vamos muy por delante de nuestros homólogos.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Arquitectura tecnológica',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'De las siguientes afirmaciones, ¿cuál describe mejor el enfoque de su organización hacia la automatización?',
                        'name'=> 14,
                        'options'=>[
                            [
                                'label'=>' sin automatización de despliegue, prueba o lanzamiento.',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Introducción de proyectos individuales de automatización (es decir, configuración) con un único enfoque en la reducción de costes.',
                                'value'=>2,
                                'checked'=>false,
                            ],
                            [
                                'label'=>' uso del portal de autoservicio.',
                                'value'=>3,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'"Automatizar todo" - uso de herramientas de automatización en los equipos de desarrollo y operaciones, con una adopción ágil para promover iteraciones continuas y flujos de trabajo de procesos personalizados.',
                                'value'=>4,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Uso de tecnologías basadas en la nube para promover la automatización de procesos integrados y flujos de trabajo de procesos personalizados, combinados con análisis predictivos y procesos sistémicos ágiles.',
                                'value'=>5,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
