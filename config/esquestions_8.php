<?php
// NTT SDWAN
return array(
    'infrastructure' => array(
        'title' => 'Infraestructura',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Infraestructura',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'¿Utiliza alguna de las siguientes opciones en su solución de red WAN?',
                        'name'=> 1,
                        'options'=>array(
                            array(
                                'label'=>'Salida de Internet local',
                                'name'=> 1.1,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Arquitectura activo-activo con varias conexiones por sitio',
                                'name'=> 1.2,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Conectividad privada con los principales proveedores de nube pública',
                                'name'=> 1.3,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Arquitectura híbrida que integra redes basadas en Internet privadas y públicas',
                                'name'=> 1.4,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Ancho de banda bajo demanda',
                                'name'=> 1.5,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Infraestructura',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'¿Cómo compra sus soluciones de red WAN?',
                        'name'=> 2,
                        'options'=>array(
                            array(
                                'label'=>'Compramos soluciones puntuales a medida que las necesitamos y según las necesidades en ese momento',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Principalmente, compramos soluciones a medida que las necesitamos, pero estamos empezando a comprarlas de forma estratégica',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Mantenemos un equilibrio entre comprar soluciones de red WAN de forma estratégica y comprar a medida que las necesitamos ',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Principalmente, compramos soluciones de red WAN de forma estratégica, pero compraremos productos especificos si es necesario',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Adoptamos un enfoque estratégico y arquitectónico al comprar soluciones de red WAN',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Infraestructura',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'¿Cuál de las siguientes opciones representa mejor su adopción, planes o conocimiento de red WAN definida por software (Software-Defined WAN, SD-WAN)?',
                        'name'=> 3,
                        'options'=>array(
                            array(
                                'label'=>'No la utilizo y no tengo planes de implementarla',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'No la utilizo, pero estoy investigando o planificando la implementación',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'La utilizo: en prueba',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'La utilizo: implementación limitada',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'La utilizo: implementación extensa',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    ),
    'intelligence' => array(
        'title' => 'Inteligencia',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Inteligencia',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'¿Utiliza alguno de los siguientes servicios de red WAN inteligentes?',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'Control de ruta basado en políticas (enrutamiento dinámico)',
                                'name'=> 4.1,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Optimización de la red WAN',
                                'name'=> 4.2,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Gestión del rendimiento de las aplicaciones',
                                'name'=> 4.3,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Supervisión/visibilidad en tiempo real',
                                'name'=> 4.4,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Funcionalidad de reproducción para la solución de problemas o la visibilidad del rendimiento de la red o las aplicaciones',
                                'name'=> 4.5,
                                'options'=>array(
                                    array(
                                        'label'=>'No, y no tengo planes de hacerlo',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, pero tengo planes de hacerlo dentro de 12 meses',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Sí.',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Inteligencia',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'¿De qué manera utiliza la inteligencia de red para optimizar la red?',
                        'name'=> 5,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc según los informes de problemas',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Ad hoc según las notificaciones de los dispositivos',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Correlación de eventos en toda la red con umbrales preconfigurados de los usuarios, las aplicaciones y los dispositivos.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Optimización manual basada en el análisis predictivo',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Optimización automatizada basada en el análisis predictivo',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Inteligencia',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'¿Cómo se asegura de que se cumplan las expectativas del rendimiento de las aplicaciones?',
                        'name'=> 6,
                        'options'=>array(
                            array(
                                'label'=>'Adoptamos el máximo esfuerzo',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Segmentamos la red físicamente para separar las clases de tráfico',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Segmentamos la red de forma virtual para separar las clases de tráfico',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Podemos configurar estáticamente la calidad del servicio (Quality of Service, QoS) para priorizar el tráfico de aplicaciones clave',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Nuestra red se puede adaptar de forma automática para garantizar el rendimiento de las aplicaciones y la experiencia del usuario según acuerdos de nivel de servicio (Service Level Agreements, SLA)',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    ),
    'operations' => array(
        'title' => 'Operaciones',
        'description' => 'Core questions outlining your commitment to SDWAN',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Operaciones',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'groupbutton',
                        'calc'=>array(
                            'type'=>'average'
                        ),
                        'question'=>'¿Con qué facilidad realiza lo siguiente en su red WAN actual?',
                        'name'=> 7,
                        'options'=>array(
                            array(
                                'label'=>'Conectar nuevos sitios',
                                'name'=> 7.1,
                                'options'=>array(
                                    array(
                                        'label'=>'Muy difícil y nos cuesta',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difícil, pero alcanzable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Bastante rutinario y fácil',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Proporcionar nuevas funciones de red',
                                'name'=> 7.2,
                                'options'=>array(
                                    array(
                                        'label'=>'Muy difícil y nos cuesta',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difícil, pero alcanzable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Bastante rutinario y fácil',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Actualizar las políticas y la configuración de seguridad y de red',
                                'name'=> 7.3,
                                'options'=>array(
                                    array(
                                        'label'=>'Muy difícil y nos cuesta',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difícil, pero alcanzable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Bastante rutinario y fácil',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                           array(
                                'label'=>'Añadir o cambiar una conexión a un proveedor de nube pública',
                                'name'=> 7.4,
                                'options'=>array(
                                    array(
                                        'label'=>'Muy difícil y nos cuesta',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difícil, pero alcanzable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Bastante rutinario y fácil',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Conectar con socios o clientes',
                                'name'=> 7.5,
                                'options'=>array(
                                    array(
                                        'label'=>'Muy difícil y nos cuesta',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Difícil, pero alcanzable',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Bastante rutinario y fácil',
                                        'value'=>5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Operaciones',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'¿Cómo gestiona su red WAN actualmente?',
                        'name'=> 8,
                        'options'=>array(
                            array(
                                'label'=>'Configuración manual ad hoc',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Configuración manual centralizada',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Principalmente configuración manual, pero hemos automatizado algunas tareas de red',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Principalmente hemos automatizado la gestión de la red WAN, pero tenemos alguna configuración manual',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Disponemos de una organización de red que se optimiza por sí misma e integra análisis, políticas y automatización',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Operaciones',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'¿Cómo se gestiona su política de seguridad de la red WAN actualmente?',
                        'name'=> 9,
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc, de dispositivo a dispositivo',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Política y controles de acceso centralizado.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Aplicación dinámica de políticas de seguridad en toda la red.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Detección y respuesta rápida para contener amenazas.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Reconfiguración automática para prevenir nuevas amenazas con análisis predictivo. ',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    )
);