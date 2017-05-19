<?php
//SPLUNK
return array(
    'overall' => array(
        'baseline' => 21.5,
        'benchmark-country-en' => 3,
        'benchmark-country-fr' => 2,
        'benchmark-country-de' => 3,
        'benchmark-size-500-to-999' => 2,
        'benchmark-size-1000-to-4999' => 3,
        'benchmark-size-5000+' => 3,
        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#6AB361',
            'pageimage'=>false,
            'margin-top'=>48,
            'header-spacing'=>0
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 32.4,
                'copy' => 'general.5poortxt',
                'tweet' => false,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 32.5,
                'high' => 46.8,
                'copy' => 'general.5standardtxt',
                'tweet' => false,
                'benchmark' => 32,
            ),
            'stage3' => array(
                'low' => 46.9,
                'high' => 61.2,
                'copy' => 'general.5goodtxt',
                'tweet' => false,
                'benchmark' => 41,
            ),
            'stage4' => array(
                'low' => 61.3,
                'high' => 75.6,
                'copy' => 'general.5aspirationaltxt',
                'tweet' => false,
                'benchmark' => 21,
            ),
            'stage5' => array(
                'low' => 75.7,
                'high' => 100,
                'copy' => 'general.5besttxt',
                'tweet' => false,
                'benchmark' => 21,
            )
        ),
        'tweet' => true
    ),
    'security-strategy' => array(
        'baseline' => 15.363,
        'benchmark-country-en' => 3,
        'benchmark-country-fr' => 3,
        'benchmark-country-de' => 3,
        'benchmark-size-500-to-999' => 3,
        'benchmark-size-1000-to-4999' => 3,
        'benchmark-size-5000+' => 3,
        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#6AB361',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 10.8,
                'total' => 2,
                'benchmark' => 1,
                'copy' => 'general.5security-strategy-poor-txt'
            ),
            'stage2' => array(
                'low' => 10.9,
                'high' => 15.6,
                'total' => 3,
                'benchmark' => 16,
                'copy' => 'general.5security-strategy-standard-txt'
            ),
            'stage3' => array(
                'low' => 15.7,
                'high' => 20.4,
                'total' => 5,
                'benchmark' => 34,
                'copy' => 'general.5security-strategy-good-txt'
            ),
            'stage4' => array(
                'low' => 20.5,
                'high' => 25.2,
                'total' => 5,
                'benchmark' => 43,
                'copy' => 'general.5security-strategy-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 25.3,
                'high' => 50,
                'total' => 5,
                'benchmark' => 6,
                'copy' => 'general.5security-strategy-best-txt'
            )
        )
    ),
    'incident-detection' => array(
        'baseline' => 24.046,
        'benchmark-country-en' => 2,
        'benchmark-country-fr' => 2,
        'benchmark-country-de' => 2,
        'benchmark-size-500-to-999' => 1,
        'benchmark-size-1000-to-4999' => 2,
        'benchmark-size-5000+' => 2,
        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#6AB361',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 11.6,
                'total' => 3,
                'benchmark' => 27,
                'copy' => 'general.5incident-detection-poor-txt'
            ),
            'stage2' => array(
                'low' => 11.7,
                'high' => 16.2,
                'total' => 4,
                'benchmark' => 27,
                'copy' => 'general.5incident-detection-standard-txt'
            ),
            'stage3' => array(
                'low' => 16.3,
                'high' => 20.8,
                'total' => 6,
                'benchmark' => 28,
                'copy' => 'general.5incident-detection-good-txt'
            ),
            'stage4' => array(
                'low' => 20.9,
                'high' => 25.4,
                'total' => 6,
                'benchmark' => 15,
                'copy' => 'general.5incident-detection-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 25.6,
                'high' => 40,
                'total' => 5,
                'benchmark' => 3,
                'copy' => 'general.5incident-detection-best-txt'
            )
        )
    ),
    'incident-response' => array(
        'baseline' => 10,917,
        'benchmark-country-en' => 3,
        'benchmark-country-fr' => 3,
        'benchmark-country-de' => 3,
        'benchmark-size-500-to-999' => 3,
        'benchmark-size-1000-to-4999' => 3,
        'benchmark-size-5000+' => 3,
        'complete' => [
            'graph' => [
                'label' => 'Stage',
                'data' => 'benchmark',
                'format'=>[
                    'type'=>'NumberFormat',
                    'format'=>[
                        'suffix' => '%'
                    ]
                ],
            ]
        ],
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#6AB361',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 10,
                'total' => 1,
                'benchmark' => 2,
                'copy' => 'general.5incident-detection-poor-txt'
            ),
            'stage2' => array(
                'low' => 10.1,
                'high' => 15,
                'total' => 2,
                'benchmark' => 13,
                'copy' => 'general.5incident-detection-standard-txt'
            ),
            'stage3' => array(
                'low' => 15.1,
                'high' => 20,
                'total' => 4,
                'benchmark' => 37,
                'copy' => 'general.5incident-detection-good-txt'
            ),
            'stage4' => array(
                'low' => 20.1,
                'high' => 25,
                'total' => 4,
                'benchmark' => 30,
                'copy' => 'general.5incident-detection-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 25.1,
                'high' => 30,
                'total' => 5,
                'benchmark' => 19,
                'copy' => 'general.5incident-detection-best-txt'
            )
        )
    )
);