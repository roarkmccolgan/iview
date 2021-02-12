<?php

return [
    'screeners' => [
        'title' => 'Demografía',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Screeners',
                'questions' => [
                    's1'=>[
                        'type'=>'button',
                        'question'=>'¿En qué país está ubicada la empresa para la que usted trabaja?',
                        'name'=>'s1',
                        'options'=>[
                            [
                                'label'=>'Francia',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Alemania',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Reino Unido',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'España',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Italia',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Otro',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                        'other'=>'Otro|0|Tu país',
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Screeners',
                'questions' => [
                    's2'=>[
                        'type'=>'button',
                        'question'=>'¿A cuántas personas emplea a tiempo completo su organización en todo el mundo?',
                        'name'=>'s2',
                        'options'=>[
                            [
                                'label'=>'Menos de 1000',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'1000-2499',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'2500-4999',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'5000-9999',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'10000 o más',
                                'value'=>1,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Screeners',
                'questions' => [
                    's3'=>[
                        'type'=>'button',
                        'question'=>'¿Cuál de las siguientes industrias representa mejor a su organización?',
                        'name'=>'s3',
                        'options'=>[
                            [
                                'label'=>'Servicios financieros',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Manufactura',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Servicios de telecomunicaciones (incluidos proveedores de alojamiento, xSPs y proveedores de servicios en la nube)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Educación',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Asistencia médica',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Medios de comunicación',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Transporte, distribución y logística',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Venta minorista/mayorista',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Consultoría de TI y servicios profesionales relacionados con las TI',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Consultoría no de TI y otros servicios profesionales (contables, jurídicos, publicitarios, bienes raíces, contratación, consultoría empresarial, etc.)',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Gobierno central o local, o servicios públicos',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Servicios públicos – electricidad, gas, agua',
                                'value'=>1,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Otro',
                                'value'=>1,
                                'checked'=>false,
                                'other' => true,
                            ],
                        ],
                        'other'=>'Otro|1|Por favor, especifique',
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-and-the-business' => [
        'title' => 'Gestión del riesgo cibernético y los negocios',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'¿Cuál suele ser la opinión de la alta dirección de la empresa acerca del papel de las TI? Elija una',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Un coste necesario',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Un facilitador de la eficiencia empresarial',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Un motor de ventajas competitivas o diferenciación',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'Cuando se trata de solicitudes empresariales de aplicaciones o servicios nuevos o mejorados, ¿qué afirmación refleja mejor las capacidades de su departamento de TI? Elija una',
                        'name'=>'q2',
                        'options'=>[
                            [
                                'label'=>'Tenemos problemas para hacer frente a la mayor parte de las solicitudes.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'En general no tenemos problemas con las solicitudes relativas a aplicaciones o servicios existentes, pero las solicitudes de servicios nuevos o mejorados nos plantean problemas.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'En general no tenemos problemas, ni en cuanto a las solicitudes sobre aplicaciones y servicios existentes ni sobre servicios nuevos o mejorados.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Estamos al tanto y solucionamos todas o la mayor parte de las solicitudes.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q3'=>[
                        'type'=>'button',
                        'question'=>'¿Qué afirmación describe mejor su actitud frente al riesgo a nivel empresarial? Elija una',
                        'name'=>'q3',
                        'options'=>[
                            [
                                'label'=>'Evitamos los riesgos a toda costa.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Tenemos tendencia a evitar riesgos, pero corremos algunos riesgos si hay una justificación muy buena.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Somos precavidos con los riesgos, pero los corremos si vemos un claro beneficio empresarial.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'No tenemos inconveniente en correr riesgos para ayudar al desarrollo de la empresa.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Corremos y gestionamos riesgos activamente para ayudar al desarrollo de la empresa.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q4'=>[
                        'type'=>'groupradio',
                        'question'=>'¿Cuál de las siguientes opciones tienen ya implantadas para proteger su empresa si se produce un incidente? (1-Lo tenemos actualmente, 2-No lo tenemos, pero está previsto implantarlo, 3-No, y no prevemos implantarlo)',
                        'name'=>'q4',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Una evaluación formal de riesgos',
                                'name'=>'q4.1',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Detección proactiva',
                                'name'=>'q4.2',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Plan de respuesta',
                                'name'=>'q4.3',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Plan de comunicaciones internas',
                                'name'=>'q4.4',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Plan de comunicaciones externas y relaciones públicas',
                                'name'=>'q4.5',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Plan de notificación de fallos de seguridad',
                                'name'=>'q4.6',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Plan de medidas correctivas de fallos de seguridad',
                                'name'=>'q4.7',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Seguro de riesgos informáticos',
                                'name'=>'q4.8',
                                'options'=>[
                                    [
                                        'label'=>'Lo tenemos actualmente',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No lo tenemos, pero está previsto implantarlo',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'No, prevemos implantarlo',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page5' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'¿Qué afirmación describe mejor cómo se maneja en su empresa la gestión de riesgos informáticos? Elija una',
                        'name'=>'q5',
                        'options'=>[
                            [
                                'label'=>'No tiene un responsable específico.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Por lo general se delega en TI.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Es compartido entre TI y varias líneas de negocio.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Es compartido entre TI y la alta dirección.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Es compartido entre TI, la alta dirección y varias líneas de negocio.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q6'=>[
                        'type'=>'groupradio',
                        'question'=>'¿Con cuál de las siguientes opciones cuentan ustedes como parte de su marco de trabajo en la gestión de riesgos informáticos? (Seleccione todas las que correspondan) [Sí/No]',
                        'name'=>'q6',
                        'calc'=>[
                            'type'=>'normalize',
                            'value'=>5,
                        ],
                        'options'=>[
                            [
                                'label'=>'CEO (Director Ejecutivo)',
                                'name'=>'q6.1',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'CFO (Responsable de finanzas)',
                                'name'=>'q6.2',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'COO (Responsable de operaciones)',
                                'name'=>'q6.3',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Miembro no ejecutivo de nivel de la junta centrado en riesgos/cumplimiento de la normativa/seguridad',
                                'name'=>'q6.4',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Miembro ejecutivo de nivel de la junta centrado en riesgos/cumplimiento de la normativa/seguridad',
                                'name'=>'q6.5',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Cargo específico de riesgos/cumplimiento de la normativa/seguridad (que no es miembro de la junta directiva)',
                                'name'=>'q6.6',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page7' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'¿En qué etapa, por lo general, participa TI en los proyectos e iniciativas empresariales? Seleccione solo una',
                        'name'=>'q7',
                        'options'=>[
                            [
                                'label'=>'Desde el comienzo de la planificación',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Durante la planificación',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Al comienzo de la ejecución',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Durante la ejecución',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cuando hay algún problema',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Gestión del riesgo cibernético y los negocios',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'¿Cómo describiría el nivel de inversión de su organización en seguridad de TI? Seleccione solo una',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'No es suficiente ni mucho menos para lo que necesitamos hacer',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Ajustado, apenas cubre las operaciones esenciales',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Bueno para las operaciones básicas, pero ajustado para las nuevas iniciativas
',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Bueno para las operaciones básicas, y para las nuevas iniciativas en las que el valor es claro',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Fácilmente disponible en toda la organización, con una buena propuesta de proyecto, incluso para desarrollo experimental',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-operations-and-defence' => [
        'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q9'=>[
                        'type'=>'slider',
                        'question'=>'¿En qué medida tienen ustedes implantadas las siguientes opciones para gestionar la seguridad física de sus TI? (1-Nada en absoluto, 5-Muy extensamente)',
                        'name'=>'q9',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Investigación de los antecedentes del personal de seguridad',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Citas concertadas previamente',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>' Verificación de la identidad',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Controles de entrada y de salida',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Autenticación biométrica',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Supervisión por circuito cerrado de televisión',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Acompañamiento (el personal y los visitantes deben trabajar en parejas o ir acompañados)',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.7',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Cambio de autorización, aprobación y registro',
                                'from'=>'Not at all',
                                'to'=>'Very extensive',
                                'name'=>'q9.8',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page2' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'¿Cuál de las siguientes opciones describe mejor su adopción y aplicación de buenas prácticas de seguridad de las TI? Elija una',
                        'name'=>'q10',
                        'options'=>[
                            [
                                'label'=>'No lo hacemos.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Lo hacemos internamente de manera informal.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Lo hacemos de manera formal (utilizando estándares) utilizando nuestros conocimientos generales.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Lo hacemos de manera formal (utilizando estándares) internamente utilizando conocimientos de expertos.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Utilizamos un asesor experto externo (utilizando estándares).',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q11'=>[
                        'type'=>'slider',
                        'question'=>'¿En qué medida están ustedes preparados para los siguientes aspectos de la evaluación y aplicación en su organización del cumplimiento de la norma GDPR (Reglamento General sobre la Protección de Datos)? (1-No estamos preparados, 5-Estamos muy bien preparados)',
                        'name'=>'q11',
                        'calc'=>[
                            'type'=>'average',
                            'value'=>false,
                        ],
                        'options'=>[
                            [
                                'label'=>'Conocimiento de las obligaciones',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.1',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Evaluación de las capacidades y carencias',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.2',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Planificación de la implantación',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.3',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Ejecución de la implantación',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.4',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Mejora continua/buenas prácticas más allá de la propia GDPR (más allá de la normativa)',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.5',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Comprensión de la mitigación de las sanciones basada en la detección/correción tempranas',
                                'from'=>'Not prepared',
                                'to'=>'Very well prepared',
                                'name'=>'q11.6',
                                'options'=>[
                                    [
                                        'label'=>'1',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'2',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'3',
                                        'value'=>3,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'4',
                                        'value'=>4,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                    [
                                        'label'=>'5',
                                        'value'=>5,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]/*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page4' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>' ¿Tienden ustedes a invertir tácticamente (productos puntuales/según necesidades) o estratégicamente (como parte de un plan) en productos o soluciones de seguridad de TI? Elija una',
                        'name'=>'q12',
                        'options'=>[
                            [
                                'label'=>'Tenemos tendencia a comprar tácticamente (productos puntuales) a medida que surgen los problemas.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'En general compramos tácticamente a medida que surgen problemas, pero hacemos algunas compras estratégicas.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Tenemos un equilibrio entre compras tácticas y compras estratégicas.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'En general compramos estratégicamente, pero compramos tácticamente si surge un problema.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Tenemos tendencia a comprar estratégicamente en todos los ámbitos.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué frecuencia informan ustedes a la empresa sobre el estado de la seguridad de las TI? Elija una',
                        'name'=>'q13',
                        'options'=>[
                            [
                                'label'=>'No lo hacemos en absoluto',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Puntualmente, si lo pide',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Anualmente',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Trimestralmente',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Mensualmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Semanalmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Diariamente',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Cada hora',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Continuamente',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Adelantado',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'¿Cuál es su principal medio para gestionar su infraestructura de seguridad de las TI? Elija solo una',
                        'name'=>'q14',
                        'options'=>[
                            [
                                'label'=>'Muy ad hoc utilizando hojas de cálculo, etc.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Utilizamos principalmente herramientas estándar de nuestros proveedores de seguridad.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Utilizamos una combinación de herramientas especializadas de gestión y algunas herramientas estándar.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Utilizamos principalmente herramientas especializadas de gestión de la seguridad.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Utilizamos una suite de gestión de seguridad de principio a fin.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Utilizamos un socio certificado para ayudarnos a administrar nuestra infraestructura de seguridad de TI.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q15'=>[
                        'type'=>'button',
                        'question'=>'"¿En qué medida han adoptado ustedes la automatización en su gestión de la seguridad de las TI? Elija solo una',
                        'name'=>'q15',
                        'options'=>[
                            [
                                'label'=>'Procesos manuales en todos los ámbitos',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Principalmente procesos manuales con una pequeña parte de automatización',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Un buen equilibrio entre procesos de automatización y procesos manuales',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Principalmente automatización, con una pequeña parte de procesos manuales',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Automatización en todos los ámbitos',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q16'=>[
                        'type'=>'button',
                        'question'=>'Cuando se trata de su uso de la automatización, ¿cómo piensan cambiar el uso que hacen de la misma?',
                        'name'=>'q16',
                        'options'=>[
                            [
                                'label'=>'Reducirla mucho',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Rezagado',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Reducirla un poco',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Rezagado',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Dejarla igual',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Aumentarla un poco',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Aumentarla mucho',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Adelantado',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page9' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q17'=>[
                        'type'=>'groupradio',
                        'question'=>'¿Utilizan ustedes las siguientes opciones con respecto a la seguridad de las TI – defensa? Sí/No',
                        'name'=>'q17',
                        'calc'=>[
                            'type'=>'normalize',
                            'value'=>5,
                        ],
                        'options'=>[
                            [
                                'label'=>'NGFW (cortafuegos de próxima generación)',
                                'name'=>'q17.1',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'IPS/IDS (detección de intrusiones/protección contra intrusiones)',
                                'name'=>'q17.2',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Administración de vulnerabilidades',
                                'name'=>'q17.3',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Micro segmentación (separación y aislamiento detallados del tráfico entre servidores o dominios específicos)',
                                'name'=>'q17.4',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Gestión unificada de la seguridad (intercambio de datos e información entre dispositivos y herramientas),',
                                'name'=>'q17.5',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Servicio profesional de seguridad de terceros (pre-venta/diseño/implantación)',
                                'name'=>'q17.6',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page10' => [
                'title' => 'Operaciones de gestión del riesgo cibernético y defensa',
                'questions' => [
                    'q25'=>[
                        'type'=>'button',
                        'question'=>'¿Qué enunciado describe mejor la extensión de su uso de proveedores de servicios gestionados de seguridad? Seleccione solo una',
                        'name'=>'q25',
                        'options'=>[
                            [
                                'label'=>'No los utilizamos en absoluto.',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Los utilizamos de una manera limitada, pero preferimos hacer las cosas internamente.',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Los utilizamos de una manera equilibrada.',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Preferimos utilizarlos antes que hacer las cosas internamente.',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Los utilizamos ampliamente siempre que es posible.',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'cyber-risk-management-breach-detection-and-remediation' => [
        'title' => 'Detección y reparación de brechas en la gestión de riesgos cibernéticos',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Detección y reparación de brechas en la gestión de riesgos cibernéticos',
                'questions' => [
                    'q18'=>[
                        'type'=>'groupradio',
                        'question'=>'¿Utilizan ustedes las siguientes opciones con respecto a la seguridad de las TI – detección de fallos en la seguridad? Sí/No',
                        'name'=>'q18',
                        'options'=>[
                            [
                                'label'=>'Servicios de inteligencia de amenazas',
                                'name'=>'q18.1',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Análisis en tiempo real',
                                'name'=>'q18.2',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Protección avanzada contra amenazas/entorno controlado',
                                'name'=>'q18.3',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'IA/heurística',
                                'name'=>'q17.4',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Escaneo de malware',
                                'name'=>'q17.5',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page2' => [
                'title' => 'Detección y reparación de brechas en la gestión de riesgos cibernéticos',
                'questions' => [
                    'q19'=>[
                        'type'=>'groupradio',
                        'question'=>'"¿Utilizan ustedes las siguientes opciones con respecto a la seguridad de las TI – respuesta a fallos de seguridad? Sí/No',
                        'name'=>'q19',
                        'options'=>[
                            [
                                'label'=>'Honeypot (sistema de señuelos) / Recogida de inteligencia',
                                'name'=>'q19.1',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Monitor de procesos de registro y análisis',
                                'name'=>'q19.2',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Recuperación de fallos/recuperación del sistema',
                                'name'=>'q19.3',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Equipos tigre/adelante (Tiger/go)',
                                'name'=>'q19.4',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Socio externo de respuesta a incidentes',
                                'name'=>'q19.5',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page3' => [
                'title' => 'Detección y reparación de brechas en la gestión de riesgos cibernéticos',
                'questions' => [
                    'q20'=>[
                        'type'=>'groupradio',
                        'question'=>'"¿Utilizan ustedes las siguientes opciones con respecto a la seguridad de TI – medidas correctivas de fallos en la seguridad? (Sí/No)',
                        'name'=>'q20',
                        'options'=>[
                            [
                                'label'=>'Corrección automatizada (basada en el aprendizaje automático)',
                                'name'=>'q20.1',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Adelantado',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Actualizaciones de la política',
                                'name'=>'q20.2',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Política de recuperación ante desastres',
                                'name'=>'q20.3',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Rezagado',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Proveedores externos de recuperación ante desastres',
                                'name'=>'q20.4',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Evaluaciones de compromiso',
                                'name'=>'q20.5',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page4' => [
                'title' => 'Detección y reparación de brechas en la gestión de riesgos cibernéticos',
                'questions' => [
                    'q21'=>[
                        'type'=>'groupradio',
                        'question'=>'¿Han realizado las siguientes acciones respecto a su comprensión de su perfil de riesgo informático? Sí/No?',
                        'name'=>'q21',
                        'options'=>[
                            [
                                'label'=>'Han evaluado el riesgo de sufrir un fallo de seguridad informática',
                                'name'=>'q21.1',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Comprenden la escala potencial de la exposición',
                                'name'=>'q21.2',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Han realizado una evaluación de datos de los datos críticos',
                                'name'=>'q21.3',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Comprenden la postura de la cadena ampliada de suministro o socios',
                                'name'=>'q21.4',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Adelantado',
                                            'stage3' => 'Adelantado',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Han desarrollado un plan de respuesta ante fallos en la seguridad',
                                'name'=>'q21.5',
                                'options'=>[
                                    [
                                        'label'=>'Si',
                                        'value'=>1,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Adelantado',
                                            'stage2' => 'Al mismo nivel',
                                            'stage3' => 'Al mismo nivel',
                                            'stage4' => 'Al mismo nivel',
                                            'stage5' => 'Al mismo nivel',
                                        ],
                                    ],
                                    [
                                        'label'=>'No',
                                        'value'=>0,
                                        'checked'=>false,
                                        'position' => [
                                            'stage1' => 'Al mismo nivel',
                                            'stage2' => 'Rezagado',
                                            'stage3' => 'Rezagado',
                                            'stage4' => 'Rezagado',
                                            'stage5' => 'Rezagado',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ]
                /*,
                'report' => array(
                    'text'=>'56% of Western European SMBs see IT as making an important contribution to business objectives. Cost reduction is West European SMBs’ top business priority in 2014.',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/,
                'report' => false,
            ],
            'page5' => [
                'title' => 'Detección y reparación de brechas en la gestión de riesgos cibernéticos',
                'questions' => [
                    'q23'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué frecuencia ponen a prueba sus capacidades de defensa de la seguridad de TI mediante la verificación por parte de terceros? Seleccione solo una',
                        'name'=>'q23',
                        'options'=>[
                            [
                                'label'=>'Nunca',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada pocos años',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada año',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada 6 meses',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada trimestre',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Mensualmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Semanalmente',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Continuamente',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Adelantado',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Detección y reparación de brechas en la gestión de riesgos cibernéticos',
                'questions' => [
                    'q24'=>[
                        'type'=>'button',
                        'question'=>'¿Con qué frecuencia ponen a prueba sus planes de respuesta a incidentes de fallos de seguridad informática? Seleccione solo una',
                        'name'=>'q24',
                        'options'=>[
                            [
                                'label'=>'Nunca',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Rezagado',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada pocos años',
                                'value'=>1,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Al mismo nivel',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada año',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Al mismo nivel',
                                    'stage3' => 'Rezagado',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada 6 meses',
                                'value'=>2,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Al mismo nivel',
                                    'stage4' => 'Rezagado',
                                    'stage5' => 'Rezagado',
                                ],
                            ],
                            [
                                'label'=>'Cada trimestre',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Al mismo nivel',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Mensualmente',
                                'value'=>3,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Semanalmente',
                                'value'=>4,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Al mismo nivel',
                                ],
                            ],
                            [
                                'label'=>'Continuamente',
                                'value'=>5,
                                'checked'=>false,
                                'position' => [
                                    'stage1' => 'Adelantado',
                                    'stage2' => 'Adelantado',
                                    'stage3' => 'Adelantado',
                                    'stage4' => 'Adelantado',
                                    'stage5' => 'Adelantado',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
