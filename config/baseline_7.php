<?php
//Symantec
return array(
    'overall' => array(
        'baseline' => 21.5,
        'benchmark-country-en' => 3,
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
            'color'=>'#004895',
            'basecolor'=>'#d3d8e0',
            'pageimage'=>false,
            'margin-top'=>48,
            'header-spacing'=>0
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 47,
                'copy' => 'general.7poortxt',
                'tweet' => false,
                'benchmark' => 20,
            ),
            'stage2' => array(
                'low' => 48,
                'high' => 67,
                'copy' => 'general.7standardtxt',
                'tweet' => false,
                'benchmark' => 34,
            ),
            'stage3' => array(
                'low' => 1000,
                'high' => 1001,
                'copy' => 'general.7goodtxt',
                'tweet' => false,
                'benchmark' => 28,
            ),
            'stage4' => array(
                'low' => 68,
                'high' => 84,
                'copy' => 'general.7aspirationaltxt',
                'tweet' => false,
                'benchmark' => 12,
            ),
            'stage5' => array(
                'low' => 1002,
                'high' => 1003,
                'copy' => 'general.7besttxt',
                'tweet' => false,
                'benchmark' => 5,
            )
        ),
        'tweet' => false,
        'include_answers_in_download_report' => true,
    ),
    'gdpr' => array(
        'baseline' => 15.363,
        'benchmark-country-en' => 3,
        'benchmark-country-fr' => 3,
        'benchmark-country-de' => 3,

        'benchmark-size-500-to-999' => 3,
        'benchmark-size-de-500-à-999' => 3,
        'benchmark-size-500-bis-999' => 3,

        'benchmark-size-1000-to-4999' => 3,
        'benchmark-size-de-1-000-à-2-499' => 3,
        'benchmark-size-1000-bis-2499' => 3,

        'benchmark-size-5000+' => 3,
        'benchmark-size-2-500-ou-plus' => 3,
        'benchmark-size-2500-oder-mehr' => 3,
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
                'high' => 47,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'general.6integration-poor-txt'
            ),
            'stage2' => array(
                'low' => 48,
                'high' => 67,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'general.6integration-standard-txt'
            ),
            'stage3' => array(
                'low' => 1000,
                'high' => 1001,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'general.6integration-good-txt'
            ),
            'stage4' => array(
                'low' => 68,
                'high' => 84,
                'total' => 5,
                'benchmark' => 12,
                'copy' => 'general.6integration-aspirational-txt'
            ),
            'stage5' => array(
                'low' => 1002,
                'high' => 1003,
                'total' => 5,
                'benchmark' => 5,
                'copy' => 'general.6integration-best-txt'
            )
        )
    )
);
