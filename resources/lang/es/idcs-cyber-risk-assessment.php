<?php

//fireeye
return [
    'stage1' => 'Ad hoc',
    'stage2' => 'Oportunista',
    'stage3' => 'Repetible',
    'stage4' => 'Gestionado',
    'stage5' => 'Optimizado',
    'question-title' => 'Ranking de rendimiento por pregunta',
    'question-intro' => '
        <p>
            Ahora vamos a ver cómo fue su desempeño en tres áreas clave de preparación frente a riesgos informáticos. En cada caso, veremos cuáles fueron sus resultados en comparación con otros con el mismo grado de preparación <strong>:rating</strong> que usted. Para ello, comprobaremos si usted se encuentra por detrás, al mismo nivel o por delante de su colegas.
        </p>
        <p>
            Si está al mismo nivel, puede compararse en términos generales con la mayoría de empresas con su mismo grado de preparación. Si está por delante, lo está haciendo bien en esta área y debe buscar otras áreas en las que deba mejorar para conseguir un enfoque equilibrado. Si está por detrás, debe dedicar atención y esfuerzos a este área para incrementar su grado de preparación frente a riesgos informáticos.
        </p>

 Si obtiene una calificación de al mismo nivel o adelantado en todas las secciones, está preparado para subir un nivel de preparación a corto plazo.',
    'completecopy' => [
        'graphtitle' => 'Su preparación general en seguridad',
        'fullreport' => 'Podemos enviarle el informe completo directamente a su bandeja de entrada. Tan solo facilítenos su nombre y correo electrónico, y le enviaremos un enlace para descargarlo.',
        'provide' => 'Tan solo facilítenos su nombre y correo electrónico, y le enviaremos un enlace para descargarlo.',
        'stage1' => '
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según el total de respuestas que ha facilitado, su grado de preparación es Ad-hoc, el grado más bajo de los cinco niveles de la evaluación.
            </p>
            <p>
                Su empresa está comprendida en el 10% más bajo de las empresas del ranking y tiene muchas áreas que mejorar. Su empresa y sus datos corren un grave riesgo si no toman medidas urgentes para mejorar, además de estar expuestos a posibles sanciones y multas del sector y de la legislación pertinente en caso de que algún fallo de seguridad conlleve la pérdida de información personal o confidencial.
            </p>
        ',
        'stage2' => '
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Oportunista, el segundo grado más bajo de los cinco niveles de preparación existentes.
            </p>
            <p>
                Su empresa está comprendida en el 20% más bajo de las empresas del ranking y tiene muchas áreas que mejorar. Su negocio y sus datos corren peligro si no toma medidas urgentes para mejorar. Están expuestos a posibles sanciones y multas del sector y de la legislación pertinente en caso de que algún fallo de seguridad conlleve la pérdida de información personal o confidencial.
            </p>
        ',
        'stage3' => '
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Repetible, el grado medio de los cinco niveles de preparación existentes.
            </p>
            <p>
                Por lo general, se encuentra en un término medio en lo que respecta a las capacidades frente a riesgos informáticos, pero todavía tiene mucho margen de mejora para reducir las posibles penalizaciones o sanciones asociadas a fallos de seguridad.
            </p>
        ',
        'stage4' => '
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Gestionado, el segundo grado más alto de los cinco niveles de preparación existentes.
            </p>
            <p>
                Se encuentra por delante del resto y en el 20 % más alto en lo que respecta a las capacidades frente a riesgos informáticos, pero todavía tiene mucho margen de mejora para reducir las posibles penalizaciones o sanciones asociadas a fallos de seguridad.
            </p>
        ',
        'stage5' => '
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Optimizado, el grado más alto de los cinco niveles de preparación existentes.
            </p>
            <p>
                Se encuentra muy por delante del resto y en el 5 % más alto en lo que respecta a las capacidades frente a riesgos informáticos. Aunque se encuentra en una posición de liderazgo, siempre hay trabajo por hacer y todavía puede seguir mejorando en diversas áreas para seguir reduciendo la probabilidad de sufrir un fallo de seguridad.
            </p>
        ',
        'instruction' => '
            <p>
                Podemos enviarle el informe completo directamente a su bandeja de entrada.
                Tan solo facilítenos su nombre y correo electrónico, y le enviaremos un enlace para descargarlo.
            </p>
        ',
    ],
    'complete_thankyou' => 'Muchas gracias :Fname,',
    'complete_body' => 'Su informe personalizado llegará a su bandeja de entrada en breve. Mientras espera, ¿por qué no tuitea sus resultados y los compara con los de sus seguidores?',
    'complete_tweet' => 'Acabo de realizar la evaluación de preparación para el riesgo cibernético de @IDCUKI patrocinada por @fireeye, estamos en la fase Repetible. ¿Está interesado?', // http://bit.ly/2g8WN1d
    'email'=>[
        'subject' => 'IDC Report',
        'hi' => 'Estimado :Fname',
        'body' => '
            Como se prometió, aquí tiene el enlace para descargar su informe de Evaluación de riesgos informáticos.
            El informe clasifica sus resultados por categorías y le ayuda a compararse con otras organizaciones.
        ',
        'link' => 'Descargar informe',
        'extra' => 'Una vez que haya digerido el informe, por qué no visitar <a href="http://www.fireeye.com" style="color:#E66B6B">FireEye</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team',
    ],
    'introduction_title' => 'Resumen ejecutivo del informe y ranking de rendimiento general personalizado',
    'introduction' => '',
    'introduction-image' => 'report.jpg',
    'overall' => [
        'title'=>'Su preparación general en seguridad',
        'graph-title'=>'Cómo se compara su organización en términos generales',
        'image'=>'',
        'overall_country_graph-title' => 'Su comparación con otras organizaciones de su país',
        'overall_size_graph-title' => 'Su comparación con empresas de tamaño similar',
        'stage1'=>'
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según el total de respuestas que ha facilitado, su grado de preparación es Ad-hoc, el grado más bajo de los cinco niveles de la evaluación.
            </p>
            <p>
                Su empresa está comprendida en el 10% más bajo de las empresas del ranking y tiene muchas áreas que mejorar. Su empresa y sus datos corren un grave riesgo si no toman medidas urgentes para mejorar, además de estar expuestos a posibles sanciones y multas del sector y de la legislación pertinente en caso de que algún fallo de seguridad conlleve la pérdida de información personal o confidencial.
            </p>
        ',
        'stage2'=>'
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Oportunista, el segundo grado más bajo de los cinco niveles de preparación existentes.
            </p>
            <p>
                Su empresa está comprendida en el 20% más bajo de las empresas del ranking y tiene muchas áreas que mejorar. Su negocio y sus datos corren peligro si no toma medidas urgentes para mejorar. Están expuestos a posibles sanciones y multas del sector y de la legislación pertinente en caso de que algún fallo de seguridad conlleve la pérdida de información personal o confidencial
            </p>
        ',
        'stage3'=>'
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Repetible, el grado medio de los cinco niveles de preparación existentes. 
            </p>
            <p>
                Por lo general, se encuentra en un término medio en lo que respecta a las capacidades frente a riesgos informáticos, pero todavía tiene mucho margen de mejora para reducir las posibles penalizaciones o sanciones asociadas a fallos de seguridad.
            </p>
        ',
        'stage4'=>'
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Gestionado, el segundo grado más alto de los cinco niveles de preparación existentes.
            </p>
            <p>
                Se encuentra por delante del resto y en el 20 % más alto en lo que respecta a las capacidades frente a riesgos informáticos, pero todavía tiene mucho margen de mejora para reducir las posibles penalizaciones o sanciones asociadas a fallos de seguridad.
            </p>
        ',
        'stage5'=>'
            <p>
                Gracias por completar la Evaluación de riesgos informáticos de IDC. Según las respuestas que ha facilitado, su grado de preparación es Optimizado, el grado más alto de los cinco niveles de preparación existentes.
            </p>
            <p>
                Se encuentra muy por delante del resto y en el 5 % más alto en lo que respecta a las capacidades frente a riesgos informáticos. Aunque se encuentra en una posición de liderazgo, siempre hay trabajo por hacer y todavía puede seguir mejorando en diversas áreas para seguir reduciendo la probabilidad de sufrir un fallo de seguridad.
            </p>
        ',
    ],
    'cyber-risk-management-and-the-business' => [
        'title'=>'Gestión del riesgo cibernético y los negocios',
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
                ¡Cuidado! Está por detrás en este área clave de la gestión de los riesgos informáticos y necesita mejorar urgentemente la situación para reducir su exposición a amenazas informáticas y a posibles multas o daños a su reputación.
            </p>
        ',
        'inline' => '
            <p>
                ¡Impresionante demostración! Está al mismo nivel en esta área clave de gestión de riesgos informáticos, pero sigue siendo conveniente que busque nuevas formas de mejorar su capacidad de proteger el ámbito de las TI.
            </p>
        ',
        'ahead' => '
            <p>
                ¡Excelente demostración! Está por delante de sus colegas en esta área de gestión de riesgos informáticos, pero no debe dejar de evaluar la forma de hacer las cosas para mantenerse.
            </p>
        ',
    ],
    'cyber-risk-management-operations-and-defence' => [
        'title'=> 'Operaciones de gestión del riesgo cibernético y defensa',
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
                ¡Alerta! Está por detrás de sus colegas en esta área crítica de detección y erradicación de fallos de seguridad, y es preciso que se dedique a mejorar sus capacidades de inmediato.
            </p>
        ',
        'inline' => '
            <p>
                ¡Muy buen trabajo! Está al mismo nivel en esta área clave de gestión de riesgos informáticos, pero sigue siendo conveniente que busque nuevas formas de mejorar su preparación global frente a riesgos informáticos.
            </p>
        ',
        'ahead' => '
            <p>
                ¡El mejor de la clase! Está por delante de sus colegas en esta área de gestión de riesgos informáticos, pero no debe dejar de evaluar la forma de hacer mejor las cosas para mantenerse.
            </p>
        ',
    ],
    'cyber-risk-management-breach-detection-and-remediation' => [
        'title'=> 'Cyber Risk Management Breach Detection and Remediation',
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
                ¡Necesita tomar medidas! Está por detrás de sus colegas en lo que respecta a la gestión de riesgos informáticos en su negocio. Debe tratar de entablar una relación más estrecha entre empresa y seguridad para mejorar su plan de gestión y financiación de la preparación frente a riesgos informáticos.
            </p>
        ',
        'inline' => '
            <p>
                ¡Enhorabuena por un buen resultado! Está al mismo nivel de sus colegas en lo que respecta a la gestión de riesgos informáticos conjuntamente con la empresa. Sigue siendo conveniente que trate de entablar una relación más estrecha con la empresa para mejorar su preparación global frente a riesgos informáticos, si desea avanzar a un nivel de preparación superior.
            </p>
        ',
        'ahead' => '
            <p>
                ¡Fantástico! Está por delante de sus colegas en lo que respecta a la gestión de riesgos informáticos conjuntamente con la empresa. Lo está haciendo muy bien en esta área de la gestión de los riesgos informáticos, pero no debe dormirse en los laureles ni dejar nunca de revaluar sus actividades.
            </p>
        ',
    ],
    'questions' => [
        'q1'=>[
            'behind' => '
                <p>
                    Necesita esforzarse en concienciar a la alta dirección de la importancia de las TI en cuanto a que la transformación digital puede contribuir al éxito de la empresa mejorando la eficiencia o favoreciendo la conquista de nuevos mercados.
                </p>
            ',
            'inline' => '
                <p>
                    Debe buscar formas de concienciar a los dirigentes de la empresa y ayudarles a comprender lo que pueden hacer las TI para mejorar la rentabilidad y competitividad de la empresa.
                </p>
            ',
            'ahead' => '
                <p>
                    Tenga en cuenta que las tecnologías y capacidades están en constante evolución y es preciso que revalúe periódicamente sus actividades y las formas de llevarlas a cabo.
                </p>
            ',
        ],
        'q2'=>[
            'behind' => '
                <p>
                    Busque nuevas maneras de implantar y administrar las TI mediante enfoques como la automatización y la gestión de riesgos para poder ofrecer nuevos servicios de forma rápida y fiable.
                </p>
            ',
            'inline' => '
                <p>
                    Busque maneras de mejorar sus capacidades en este área recurriendo a las políticas y a sistemas de automatización para asegurarse de poder ofrecer aplicaciones y servicios de forma rápida y segura.
                </p>
            ',
            'ahead' => '
                <p>
                    Aunque una gran parte de su enfoque de mejora en gestión de riesgos informáticos puede estar en otra parte, es preciso que continúe adoptando y optimizando capacidades avanzadas en el ámbito de las políticas, la gestión y la automatización, y la orquestación.
                </p>
            ',
        ],
        'q3'=>[
            'behind' => '
                <p>
                    Un enfoque del riesgo más maduro le ayudará a lograr un mejor equilibrio entre usabilidad y seguridad en su entorno, sin olvidar a las "joyas de la corona", las cuales deben protegerse a toda costa.  Trate de adoptar un enfoque basado en riesgos con el que se pueda llegar a un compromiso a fin de promover los objetivos de desarrollo de negocio.
                </p>
            ',
            'inline' => '
                <p>
                    Lo está haciendo bien, pero hay margen de mejora. Las empresas punteras son capaces de identificar y gestionar activamente los riesgos para contribuir a la evolución del negocio. Trate de asumir un papel más activo en la identificación, el análisis y la gestión del riesgo y comprenda claramente la disposición al riesgo de su empresa.
                </p>
            ',
            'ahead' => '
                <p>
                    Si desea estar verdaderamente a la última, debe seguir forzando los límites.  Luche por encontrar puntos de compromiso, sin olvidar que las "joyas de la corona" deben permanecer absolutamente protegidas a toda costa, a fin de encontrar nuevas oportunidades de desarrollo.
                </p>
            ',
        ],
        'q4'=>[
            'behind' => '
                <p>
                    Considere la posibilidad de implantar un proceso formal de evaluación de riesgos y desarrollar un enfoque proactivo de detección de fallos de seguridad para comprender dónde existen los riesgos y cómo reaccionar cuando tales riesgos se hagan realidad. Posteriormente se pueden incorporar nuevos pasos para mejorar el enfoque, como el desarrollo de planes de comunicaciones internas y externas, un plan de notificación de fallos de seguridad y un plan de medidas correctivas de fallos de seguridad.
                </p>
            ',
            'inline' => '
                <p>
                    Sopese desarrollar un plan de notificación de fallos de seguridad, algo especialmente importante dado que será una exigencia del próximo Reglamento General de Protección de Datos de la UE para el tratamiento de los datos personales de los ciudadanos de la UE, y un plan de respuesta integral ante fallos de seguridad que pueda servir de orientación sobre cómo hay que reaccionar en cada etapa del proceso.
                </p>
            ',
            'ahead' => '
                <p>
                    Su modo de gestionar el riesgo de fallos de seguridad y planificar sus respuestas en caso de fallo de seguridad es muy previsor. Sin embargo, como siguiente paso, piense en cómo se podría aprovechar un seguro de riesgos informáticos no solo para reducir los costes de un posible fallo de seguridad, sino también como motor para la excelencia, lo que podría convertir la forma de gestionar los datos de los clientes en una ventaja competitiva.
                </p>
            ',
        ],
        'q5'=>[
            'behind' => '
                <p>
                    Analice la demanda empresarial existente a favor de la transformación digital y la exposición al riesgo que surge a consecuencia de ello, considere cómo pueden colaborar las TI y la empresa para desarrollar un enfoque en materia de riesgos informáticos que sea adecuado para todas las partes y pueda ayudar a la empresa a cumplir sus objetivos.
                </p>
            ',
            'inline' => '
                <p>
                    Considere cómo se podrían manejar y gestionar los riesgos informáticos a nivel de empresa teniendo en cuenta que la realidad de las operaciones comerciales en el mundo actual, en el que todo ocurre primero en el móvil y en la nube, supone que la posible exposición a los riesgos informáticos es una preocupación que afecta a toda la empresa.
                </p>
            ',
            'ahead' => '
                <p>
                    Considere cómo se podría integrar la gestión de riesgos informáticos en el desarrollo de nuevas prioridades comerciales con el fin de garantizar una identificación y gestión proactiva de los riesgos informáticos con miras a facilitar el cumplimiento de los objetivos de la empresa.
                </p>
            ',
        ],
        'q6'=>[
            'behind' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos conllevan un alto grado de implicación de la alta dirección, así como contar con responsables de riesgos y cumplimiento especializados. Busque vías para lograr un mayor grado de implicación y responsabilidad de la empresa, sobre todo en lo que respecta a los expertos en cumplimiento y que haga partícipes a los jefes de operaciones.  Haga un uso eficaz de terceros para evaluar las buenas prácticas.
                </p>
            ',
            'inline' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos conllevan un alto grado de implicación de la alta dirección, así como contar con responsables de riesgos y cumplimiento especializados. Busque vías para lograr un mayor grado de implicación y responsabilidad de la empresa, sobre todo en lo que respecta a los expertos en cumplimiento y que haga partícipes a los jefes de operaciones.  Haga un uso eficaz de terceros para evaluar las buenas prácticas.
                </p>
            ',
            'ahead' => '
                <p>
                    A fin de reforzar este marco de trabajo, considere de qué forma podrían los especialistas en riesgos, cumplimiento y seguridad, tanto a nivel de junta directiva como de empleado, contribuir de forma positiva a este proceso. Haga un uso eficaz de terceros para evaluar las buenas prácticas.
                </p>
            ',
        ],
        'q7'=>[
            'behind' => '
                <p>
                    No es probable que haya que tomar decisiones en cuanto a seguridad antes de la fase de implementación del proyecto (momento en que no será más que una preocupación adicional, con éxito variable) o posiblemente solo cuando algo salga mal (para cuando ya será demasiado tarde). Piense en el papel que puede desempeñar la seguridad cuando menos en la fase de planificación de cualquier nueva iniciativa empresarial, si no antes.
                </p>
            ',
            'inline' => '
                <p>
                    Analice cómo puede la seguridad desempeñar un papel clave desde el comienzo de la fase de planificación de nuevas iniciativas empresariales: no siendo tan solo una de las partes interesadas en torno a la mesa, sino un actor fundamental en el desarrollo y la ejecución del proyecto.  
                </p>
            ',
            'ahead' => '
                <p>
                    Piense en cómo puede la seguridad convertirse en protagonista durante la planificación de nuevas iniciativas. Por otra parte, asegúrese de que la seguridad siga siendo una de las prioridades principales desde el principio hasta el final de las fases de desarrollo, pruebas e implementación de los proyectos, así como en el curso de la actividad empresarial cotidiana.
                </p>
            ',
        ],
        'q8'=>[
            'behind' => '
                <p>
                    Desarrolle un plan de negocios que demuestre que la cuantía del presupuesto que se precisa para aumentar las inversiones hasta costear las operaciones básicas (y la exposición al riesgo que tendrá lugar de no llegarse a este nivel), si no fuera por las nuevas iniciativas. Aquí se sitúa el punto de partida para sus colegas, por no hablar de quienes están en primera línea.
                </p>
            ',
            'inline' => '
                <p>
                    Las empresas que están en primera línea siempre tienen presupuestos disponibles destinados a la seguridad de las TI (cuando hay una idea empresarial que lo avale), incluso para iniciativas experimentales. Para llegar a este punto, el enfoque de las inversiones en seguridad de las TI debe dejar atrás la idea de pensar solamente en los costes que podrían surgir de no llevarse a cabo tales inversiones y pensar en el posible aumento de los ingresos que podría producirse gracias al nuevo gasto en seguridad de las TI.
                </p>
            ',
            'ahead' => '
                <p>
                    Si desea seguir mejorando, considere a las inversiones en seguridad como el facilitador que impulsa a la empresa a alcanzar los objetivos de negocio y que favorece el aumento de los ingresos y la rentabilidad.
                </p>
            ',
        ],
        'q9'=>[
            'behind' => '
                <p>
                    Considere la posibilidad de hacer un uso más amplio de estas técnicas, así como de algunas técnicas de segunda generación (por ejemplo, Investigación de los antecedentes del personal de seguridad, acompañamiento).
                </p>
            ',
            'inline' => '
                <p>
                    Estrategias como controles a la entrada y la salida, y que los visitantes vayan siempre acompañados deberían convertirse en una práctica estándar para más adelante empezar a contemplar técnicas más avanzadas como la autenticación biométrica.
                </p>
            ',
            'ahead' => '
                <p>
                    Para pasar al siguiente nivel, considere cómo maximizar el punto en el que se entrecruzan la seguridad física y la seguridad informática a través del uso de técnicas de autenticación biométrica.
                </p>
            ',
        ],
        'q10'=>[
            'behind' => '
                <p>
                    La gestión de buenas prácticas de seguridad informática debe ser un proceso formal que vaya dirigido por la aplicación de normas. Piense en cómo podría involucrar sus recursos con conocimientos especializados en este campo.
                </p>
            ',
            'inline' => '
                <p>
                    Este es un proceso formal que aprovecha los conocimientos especializados. Con el fin de llevar este proceso a niveles más avanzados, piense en cómo podría utilizar asesores especializados externos al objeto de conseguir una compresión independiente de cuáles son las buenas prácticas, teniendo en cuenta el contexto de su organización.
                </p>
            ',
            'ahead' => '
                <p>
                    Piense en cómo su organización puede llegar a ser no solo un referente en cuanto a la gestión de buenas prácticas, sino un líder de pensamiento para la industria por derecho propio. Esto podría llegar a proporcionar una ventaja competitiva frente a empresas similares.
                </p>
            ',
        ],
        'q11'=>[
            'behind' => '
                <p>
                    Para progresar en la escala de madurez, adquiera una noción de las obligaciones que impondrá el RGPD, planifique la implementación de esas responsabilidades y luego lleve a cabo ese plan.
                </p>
            ',
            'inline' => '
                <p>
                    Usted probablemente tiene una noción de las obligaciones que impondrá el RGPD, y es posible que haya empezado a corregir las carencias en sus capacidades y ahora esté pensando en cómo adoptar buenas prácticas que vayan más allá de lo exigido por el texto. Para estar en la primera línea de su grupo, debe hacer que esos planes se hagan realidad.
                </p>
            ',
            'ahead' => '
                <p>
                    Si desea seguir mejorando, analice de qué modo la elaboración de informes continuos puede servir de algo más que de mero panel de indicadores y convertirse en un facilitador para la toma de decisiones empresariales a través de una funcionalidad operativa integrada.
                </p>
            ',
        ],
        'q12'=>[
            'behind' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos se centran en informes frecuentes o en tiempo real. Trabaje en la mejora de sus capacidades de registro y de análisis de datos para pasar de un enfoque reactivo a uno proactivo.
                </p>
            ',
            'inline' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos se centran en informes frecuentes o en tiempo real. Trabaje en la mejora de sus capacidades de registro y de análisis de datos para pasar de un enfoque reactivo a uno proactivo.
                </p>
            ',
            'ahead' => '
                <p>
                    Si desea seguir mejorando, analice de qué modo la elaboración de informes continuos puede servir de algo más que de mero panel de indicadores y convertirse en un facilitador para la toma de decisiones empresariales a través de una funcionalidad operativa integrada.
                </p>
            ',
        ],
        'q13'=>[
            'behind' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos se centran en informes frecuentes o en tiempo real. Trabaje en la mejora de sus capacidades de registro y de análisis de datos para pasar de un enfoque reactivo a uno proactivo.
                </p>
            ',
            'inline' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos se centran en informes frecuentes o en tiempo real. Trabaje en la mejora de sus capacidades de registro y de análisis de datos para pasar de un enfoque reactivo a uno proactivo.
                </p>
            ',
            'ahead' => '
                <p>
                    Si desea seguir mejorando, analice de qué modo la elaboración de informes continuos puede servir de algo más que de mero panel de indicadores y convertirse en un facilitador para la toma de decisiones empresariales a través de una funcionalidad operativa integrada.
                </p>
            ',
        ],
        'q14'=>[
            'behind' => '
                <p>
                    Es imposible proteger lo que no se es capaz de gestionar. Una buena práctica es utilizar conjuntos de herramientas integrados y sistemas de automatización para garantizar que la política se aplique de forma coherente.
                </p>
            ',
            'inline' => '
                <p>
                    Es imposible proteger lo que no se es capaz de gestionar. Una buena práctica es utilizar conjuntos de herramientas integrados y sistemas de automatización para garantizar que la política se aplique de forma coherente.
                </p>
            ',
            'ahead' => '
                <p>
                    Si desea seguir avanzando en la gestión de riesgos informáticos, considere cómo puede aumentar el grado de automatización e integración de los elementos en el paquete de gestión de extremo a extremo para ayudarle a impulsar un departamento de TI más ágil.
                </p>
            ',
        ],
        'q15'=>[
            'behind' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos recurren ampliamente a la automatización. Piense en las áreas que podrían beneficiarse de la automatización (sobre todo aquellas que tengan poco valor y sean repetitivas, pero también en las que la velocidad de reacción tenga una importancia vital) para alcanzar un equilibrio idóneo entre automatización, cuando sea posible, y procesos manuales, cuando sean necesarios.
                </p>
            ',
            'inline' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos recurren ampliamente a la automatización. Piense en las áreas que podrían beneficiarse de la automatización (sobre todo aquellas que tengan poco valor y sean repetitivas, pero también en las que la velocidad de reacción tenga una importancia vital) para alcanzar un equilibrio idóneo entre automatización, cuando sea posible, y procesos manuales, cuando sean necesarios.
                </p>
            ',
            'ahead' => '
                <p>
                    Para estar verdaderamente en primera línea, considere qué medidas se pueden tomar para, en lo posible, automatizar y orquestar los procesos de extremo a extremo con el fin de llevar la gestión de riesgos informáticos con agilidad, calidad y garantía de cumplimiento.
                </p>
            ',
        ],
        'q16'=>[
            'behind' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos tratan de aumentar la automatización. Estudie cómo podría incrementarse el grado de automatización con el fin de aumentar la eficiencia y la eficacia de sus operaciones de seguridad informática.
                </p>
            ',
            'inline' => '
                <p>
                    Las buenas prácticas en gestión de riesgos informáticos tratan de aumentar la automatización. Estudie cómo podría incrementarse el grado de automatización con el fin de aumentar la eficiencia y la eficacia de sus operaciones de seguridad informática.
                </p>
            ',
            'ahead' => '
                <p>
                    En lugar de centrarse simplemente en la oportunidad de incrementar el grado de automatización, no se olvide del componente humano de la ecuación. Para lograr un mayor impacto, analice cómo podrían utilizarse las iniciativas de automatización que pretende llevar a cabo para servir de complemento a su personal de seguridad, con objeto de ampliar sus conocimientos para mejorar su eficacia como trabajadores en la realización de tareas más avanzadas.
                </p>
            ',
        ],
        'q17'=>[
            'behind' => '
                <p>
                    Los más avanzados en gestión de riesgos informáticos utilizan masivamente una serie de productos de seguridad a su disposición para ofrecer protección en toda la red corporativa. Trabajar con especialistas de servicios profesionales de seguridad externos para que le ayuden a diseñar e implementar enfoques apropiados también puede permitirle dedicar menos tiempo a tareas de implementación y mejorar las capacidades.
                </p>
            ',
            'inline' => '
                <p>
                    Los más avanzados en gestión de riesgos informáticos utilizan masivamente una serie de productos de seguridad a su disposición para ofrecer protección en toda la red corporativa. Trabajar con PSSG externos para que le ayuden a diseñar e implementar enfoques apropiados también puede dinamizar las tareas de implementación y mejorar las capacidades.
                </p>
            ',
            'ahead' => '
                <p>
                    Para ir más lejos todavía, valore el impacto que pueden tener los PSSG. Los PSSG pueden alimentar la gestión de herramientas y dispositivos de seguridad en motores de correlación de datos masivos (big data) y presentar esta información a través de paneles de indicadores de gestión, lo que le ayuda a tomar decisiones al tener conocimiento de la posición sobre seguridad en tiempo real.
                </p>
            ',
        ],
        'q25'=>[
            'behind' => '
                <p>
                    Para estar al nivel de prácticas estándares que determina su grupo de colegas, piense en qué situaciones podría el uso de PSSG tener efectos positivos a fin de encontrar un equilibrio entre las operaciones internas, cuando sea necesario, y el uso de los PSSG en los demás casos.
                </p>
            ',
            'inline' => '
                <p>
                    Considere la posibilidad de hacer un mayor uso de los proveedores externos y saque provecho del volumen de su oferta, de su base de talento y de su perspectiva más amplia para mejorar su enfoque en materia de seguridad sin perder la visibilidad y el control de su posición sobre seguridad al reservar un papel importante a los recursos internos.
                </p>
            ',
            'ahead' => '
                <p>
                    Usted es un líder en lo que respecta a su enfoque sobre el uso de PSSG, ya que hace un uso frecuente y equilibrado de ellos como canal de distribución complementario al de los recursos internos. Con el fin de seguir progresando, trate de ampliar su uso de PSSG para lograr avances en la implementación de buenas prácticas y en las operaciones.
                </p>
            ',
        ],
        'q18'=>[
            'behind' => '
                <p>
                    Los mecanismos de cumplimiento y las buenas prácticas significan que el escaneo de malware y la protección avanzada contra amenazas (ATP)/entornos controlados son ahora tecnologías estándares y que debe ponerse a analizar sus capacidades, si todavía no lo ha hecho. Los servicios de análisis y de inteligencia de amenazas ofrecen una protección avanzada contra nuevas fuentes de amenazas, de modo que es conveniente analizar si estas tecnologías le resultarían útiles, teniendo en cuenta el perfil de riesgo de su organización. La inteligencia artificial y la heurística están destinadas principalmente para operaciones de seguridad maduras y avanzadas, así que tenga esto en mente por si quisiera utilizarlas en un futuro.
                </p>
            ',
            'inline' => '
                <p>
                    Los mecanismos de cumplimiento y las buenas prácticas significan que el escaneo de malware y la protección avanzada contra amenazas (ATP)/entornos controlados son ahora tecnologías estándares y que debe ponerse a analizar sus capacidades, si todavía no lo ha hecho. Los servicios de análisis y de inteligencia de amenazas ofrecen una protección avanzada contra nuevas fuentes de amenazas, de modo que es conveniente analizar si estas tecnologías le resultarían útiles, teniendo en cuenta el perfil de riesgo de su organización. La inteligencia artificial y la heurística están destinadas principalmente para operaciones de seguridad maduras y avanzadas, así que tenga esto en mente por si quisiera utilizarlas en un futuro.
                </p>
            ',
            'ahead' => '
                <p>
                    La inteligencia artificial y la heurística están en proceso de maduración, por lo que debería implementarlas, si no lo está haciendo ya, para continuar con la búsqueda del liderazgo.
                </p>
            ',
        ],
        'q19'=>[
            'behind' => '
                <p>
                    Los monitores de procesos de registro y análisis y la recuperación de fallos/recuperación del sistema son tecnologías estándares, por lo que debería implementarlas, si no lo está haciendo ya. La mayoría de las grandes empresas (y muchas de las no tan grandes) ya están utilizando socios externos de servicios de respuesta a incidencias, ya sea a comisión o como proveedores ad hoc, de modo que es conveniente analizar si esta opción le ayudaría a rebajar el perfil de riesgo de su organización. Los sistemas Honeypot (sistema de señuelos)/de recopilación de inteligencia y los equipos tigre están pensados principalmente para operaciones de seguridad maduras y avanzadas, por lo que corresponden a etapas posteriores.
                </p>
            ',
            'inline' => '
                <p>
                    Los monitores de procesos de registro y análisis y la recuperación de fallos/recuperación del sistema son tecnologías estándares. La mayoría de las grandes empresas (y muchas de las no tan grandes) ya están utilizando socios externos de servicios de respuesta a incidencias,  ya sea a comisión o como proveedores ad hoc, por lo que debería implementarlas si no lo está haciendo ya. Los sistemas Honeypot (sistema de señuelos)/de recogida de inteligencia y los equipos tigre no están pensados únicamente para las empresas de mayor tamaño, de modo que es conveniente analizar si esta opción le ayudaría a rebajar el perfil de riesgo de su organización.
                </p>
            ',
            'ahead' => '
                <p>
                    Los sistemas Honeypot (sistema de señuelos)/de recogida de inteligencia y los equipos tigre se están convirtiendo en práctica estándar para operaciones de seguridad relevantes, maduras y avanzadas, por lo que debería implementarlas si no lo está haciendo ya.
                </p>
            ',
        ],
        'q20'=>[
            'behind' => '
                <p>
                    Las actualizaciones de políticas y el hecho de contar con una política de recuperación ante desastres son prácticas estándares, por lo que debería implementarlas si no lo está haciendo ya. La mayoría de las empresas realiza evaluaciones de compromiso y un gran número de ellas utiliza proveedores externos de recuperación ante desastres, de modo que es conveniente analizar si le ayudarían a mejorar sus capacidades de recuperación ante desastres. Las capacidades de corrección automatizada basadas en el aprendizaje automático están madurando rápidamente y vale la pena estar atentos a estas.
                </p>
            ',
            'inline' => '
                <p>
                    La mayoría de las empresas realiza evaluaciones de compromiso y un gran número de ellas utiliza proveedores externos de recuperación ante desastres, por lo que debería implementarlos si no lo está haciendo ya. Las capacidades de corrección automatizada basadas en el aprendizaje automático están madurando rápidamente, de modo que es conveniente analizar si le ayudarían a mejorar sus capacidades de recuperación ante desastres.
                </p>
            ',
            'ahead' => '
                <p>
                    Las capacidades de corrección automatizada basadas en el aprendizaje automático están madurando rápidamente, por lo que debería implementarlas si no lo está haciendo ya.
                </p>
            ',
        ],
        'q21'=>[
            'behind' => '
                <p>
                    Vivimos en una era en la que los fallos de seguridad son inevitables, por lo que es fundamental tener claras las posibles consecuencias de que se produzca uno de ellos y desarrollar un plan de respuesta acorde. Esto incluye ser conscientes de la escala potencial de la exposición y evaluar el riesgo asociado a cada categoría específica de datos como, por ejemplo, los datos personales. Comprender la posición de la cadena ampliada de suministro o socios es fundamental, tanto de cara a heredar las vulnerabilidades de terceros en materia de seguridad como desde las nuevas normas de responsabilidad conjunta que están contempladas en el RGPD.
                </p>
            ',
            'inline' => '
                <p>
                      Vivimos en una era en la que los fallos de seguridad son inevitables, por lo que es positivo que tenga claras las posibles consecuencias de que se produzca uno de ellos y que probablemente haya desarrollado un plan de respuesta acorde. Comprender la posición de la cadena ampliada de suministro o socios también es fundamental, tanto desde la perspectiva de heredar las vulnerabilidades de terceros en materia de seguridad como desde las nuevas normas de responsabilidad conjunta que están contempladas en el RGPD.
                </p>
            ',
            'ahead' => '
                <p>
                    Comprender la posición de la cadena ampliada de suministro o socios también es fundamental, tanto desde la perspectiva de heredar las vulnerabilidades de terceros en materia de seguridad como desde las nuevas normas de responsabilidad conjunta que están contempladas en el RGPD.
                </p>
            ',
        ],
        'q23'=>[
            'behind' => '
                <p>
                    Hoy en día es esencial que se lleve a cabo la validación de la seguridad por parte de terceros, incluso en entornos avanzados en los que "corregir sus propios deberes" pueda llevar al exceso de confianza. En la actualidad, la validación continua es la práctica habitual, aunque muchas de estas tareas ya pueden automatizarse. Deben hacerse pruebas de penetración basadas en servicios cada seis meses como mínimo debido a la velocidad a la que cambia el panorama de amenazas. Si las pruebas se realizan con menor frecuencia, su organización correrá un mayor riesgo.
                </p>
            ',
            'inline' => '
                <p>
                    Hoy en día es esencial que se lleve a cabo la validación de la seguridad por parte de terceros, incluso en entornos avanzados en los que "corregir sus propios deberes" pueda llevar al exceso de confianza. En la actualidad, la validación continua es la práctica habitual, aunque muchas de estas tareas ya pueden automatizarse. Deben hacerse pruebas de penetración basadas en servicios cada seis meses como mínimo debido a la velocidad a la que cambia el panorama de amenazas. Si las pruebas se realizan con menor frecuencia, su organización correrá un mayor riesgo.
                </p>
            ',
            'ahead' => '
                <p>
                    Hoy en día es esencial que se lleve a cabo la validación de la seguridad por parte de terceros, incluso en entornos avanzados en los que "corregir sus propios deberes" pueda llevar al exceso de confianza. En la actualidad, la validación continua es la práctica habitual, aunque muchas de estas tareas ya pueden automatizarse. Deben hacerse pruebas de penetración basadas en servicios cada seis meses como mínimo debido a la velocidad a la que cambia el panorama de amenazas. Si las pruebas se realizan con menor frecuencia, su organización correrá un mayor riesgo.
                </p>
            ',
        ],
        'q24'=>[
            'behind' => '
                <p>
                    La frecuencia recomendada es de uno a tres meses, dependiendo de la complejidad y contexto de su entorno y el riesgo de amenaza específico para su sector. No deje pasar más tiempo entre prueba y prueba, ya que se arriesga a que los responsables clave no estén lo suficientemente preparados para resolver el fallo de seguridad que tarde o temprano se terminará produciendo, además de que con la nueva legislación se expone a elevadas multas. Intente mejorar sus pruebas e informes, pero no trate de reducir la frecuencia a expensas de la capacidad. Las pruebas continuas o de periodicidad semanal suelen estar indicadas únicamente para las organizaciones más avanzadas (o con gran exposición al riesgo), donde las consecuencias de una mala respuesta ante un incidente serían catastróficas.
                </p>
            ',
            'inline' => '
                <p>
                    La frecuencia recomendada es de uno a tres meses, dependiendo de la complejidad y contexto de su entorno y del riesgo de amenaza específico para su sector. No deje pasar más tiempo entre prueba y prueba, ya que se arriesga a que los responsables clave no estén lo suficientemente preparados para resolver el fallo de seguridad que tarde o temprano se terminará produciendo, además de que con la nueva legislación se expone a elevadas multas. Intente mejorar sus pruebas e informes, pero no trate de reducir la frecuencia a expensas de la capacidad. Las pruebas continuas o de periodicidad semanal suelen estar indicadas únicamente para las organizaciones más avanzadas (o con gran exposición al riesgo), donde las consecuencias de una mala respuesta ante un incidente serían catastróficas.
                </p>
            ',
            'ahead' => '
                <p>
                    Dado que los ataques informáticos son cada vez más habilidosos y frecuentes, tener la capacidad de detectar un fallo de seguridad y responder de manera adecuada será uno de los facilitadores indispensables para un líder de la economía digital. Esfuércese en seguir persiguiendo las buenas prácticas por encima de cualquier norma de cumplimiento y asegúrese de seguir obteniendo evaluaciones externas de sus fortalezas y debilidades.
                </p>
            ',
        ],
    ],
];
