<?php
//BT/McAfee
return array(
    'overall' => array(
        'baseline' => 2.94,
        'benchmark-country-ap' => 2.9,
        'benchmark-country-na' => 2.99,
        'benchmark-country-we' => 2.93,
        'benchmark-size-fewer-than-4999' => 2.46,
        'benchmark-size-5000-to-9999' => 3,
        'benchmark-size-10000-or-more' => 3.5,
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
            'color'=>'#004895',
            'basecolor'=>'#d3d8e0',
            'pageimage'=>false,
            'margin-top'=>48,
            'header-spacing'=>0
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 45,
                'copy' => 'general.6poortxt',
                'tweet' => false,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 45.01,
                'high' => 60,
                'copy' => 'general.6standardtxt',
                'tweet' => false,
                'benchmark' => 32,
            ),
            'stage3' => array(
                'low' => 60.01,
                'high' => 75,
                'copy' => 'general.6goodtxt',
                'tweet' => false,
                'benchmark' => 41,
            ),
            'stage4' => array(
                'low' => 75.01,
                'high' => 90,
                'copy' => 'general.6aspirationaltxt',
                'tweet' => false,
                'benchmark' => 21,
            ),
            'stage5' => array(
                'low' => 90.01,
                'high' => 200,
                'copy' => 'general.6besttxt',
                'tweet' => false,
                'benchmark' => 21,
            )
        ),
        'tweet' => false,
    ),
    'general-approach-to-it' => array(
        'baseline' => 3.11,
        'benchmark-country-ap' => 3.03,
        'benchmark-country-na' => 3.09,
        'benchmark-country-we' => 3.21,
        'benchmark-size-fewer-than-4999' => 2.64,
        'benchmark-size-5000-to-9999' => 3.12,
        'benchmark-size-10000-or-more' => 3.71,
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
            'basecolor'=>'#d3d8e0',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 9,
                'total' => 2,
                'benchmark' => 13,
                'copy' => 'general.6integration-poor-txt'
            ),
            'stage2' => array(
                'low' => 9.01,
                'high' => 13,
                'total' => 3,
                'benchmark' => 22,
                'copy' => 'general.6integration-standard-txt'
            ),
            'stage3' => array(
                'low' => 13.01,
                'high' => 17,
                'total' => 5,
                'benchmark' => 30,
                'copy' => 'general.6integration-good-txt'
            ),
            'stage4' => array(
                'low' => 17.01,
                'high' => 21,
                'total' => 5,
                'benchmark' => 26,
                'copy' => 'general.6integration-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 21.01,
                'high' => 25,
                'total' => 5,
                'benchmark' => 8,
                'copy' => 'general.6integration-best-txt'
            )
        )
    ),
    'integration' => array(
        'baseline' => 3.11,
        'benchmark-country-ap' => 3.03,
        'benchmark-country-na' => 3.09,
        'benchmark-country-we' => 3.21,
        'benchmark-size-fewer-than-4999' => 2.64,
        'benchmark-size-5000-to-9999' => 3.12,
        'benchmark-size-10000-or-more' => 3.71,
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
            'basecolor'=>'#d3d8e0',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 11.25,
                'total' => 2,
                'benchmark' => 18,
                'copy' => 'general.6integration-poor-txt'
            ),
            'stage2' => array(
                'low' => 11.26,
                'high' => 15,
                'total' => 3,
                'benchmark' => 25,
                'copy' => 'general.6integration-standard-txt'
            ),
            'stage3' => array(
                'low' => 15.01,
                'high' => 18.75,
                'total' => 5,
                'benchmark' => 26,
                'copy' => 'general.6integration-good-txt'
            ),
            'stage4' => array(
                'low' => 18.76,
                'high' => 22.5,
                'total' => 5,
                'benchmark' => 26,
                'copy' => 'general.6integration-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 22.51,
                'high' => 50,
                'total' => 5,
                'benchmark' => 5,
                'copy' => 'general.6integration-best-txt'
            )
        )
    ),
    'automation' => array(
        'baseline' => 2.74,
        'benchmark-country-ap' => 2.79,
        'benchmark-country-na' => 2.81,
        'benchmark-country-we' => 2.63,
        'benchmark-size-fewer-than-4999' => 2.4,
        'benchmark-size-5000-to-9999' => 2.87,
        'benchmark-size-10000-or-more' => 3.01,
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
            'basecolor'=>'#d3d8e0',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 11.25,
                'total' => 3,
                'benchmark' => 16,
                'copy' => 'general.6automation-poor-txt'
            ),
            'stage2' => array(
                'low' => 11.26,
                'high' => 15,
                'total' => 4,
                'benchmark' => 22,
                'copy' => 'general.6automation-standard-txt'
            ),
            'stage3' => array(
                'low' => 15.01,
                'high' => 18.75,
                'total' => 6,
                'benchmark' => 35,
                'copy' => 'general.6automation-good-txt'
            ),
            'stage4' => array(
                'low' => 18.76,
                'high' => 22.5,
                'total' => 6,
                'benchmark' => 27,
                'copy' => 'general.6automation-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 22.51,
                'high' => 50,
                'total' => 5,
                'benchmark' => 1,
                'copy' => 'general.5automation-best-txt'
            )
        )
    ),
    'unified-intelligence' => array(
        'baseline' => 2.76,
        'benchmark-country-ap' => 2.69,
        'benchmark-country-na' => 2.85,
        'benchmark-country-we' => 2.85,
        'benchmark-size-fewer-than-4999' => 2.26,
        'benchmark-size-5000-to-9999' => 2.82,
        'benchmark-size-10000-or-more' => 3.37,

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
            'basecolor'=>'#d3d8e0',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 11.25,
                'total' => 1,
                'benchmark' => 19,
                'copy' => 'general.6automation-poor-txt'
            ),
            'stage2' => array(
                'low' => 11.26,
                'high' => 15,
                'total' => 2,
                'benchmark' => 23,
                'copy' => 'general.6automation-standard-txt'
            ),
            'stage3' => array(
                'low' => 15.01,
                'high' => 18.75,
                'total' => 4,
                'benchmark' => 28,
                'copy' => 'general.6automation-good-txt'
            ),
            'stage4' => array(
                'low' => 18.76,
                'high' => 22.5,
                'total' => 4,
                'benchmark' => 22,
                'copy' => 'general.6automation-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 22.51,
                'high' => 50,
                'total' => 5,
                'benchmark' => 8,
                'copy' => 'general.6automation-best-txt'
            )
        )
    )
);