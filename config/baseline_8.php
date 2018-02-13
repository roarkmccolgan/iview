<?php
//NTT
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
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
            'margin-top'=>20,
            'header-spacing'=>6
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 17.9,
                'copy' => 'general.8poortxt',
                'tweet' => false,
                'benchmark' => 20,
            ),
            'stage2' => array(
                'low' => 18,
                'high' => 32.9,
                'copy' => 'general.8standardtxt',
                'tweet' => false,
                'benchmark' => 34,
            ),
            'stage3' => array(
                'low' => 33,
                'high' => 45,
                'copy' => 'general.8goodtxt',
                'tweet' => false,
                'benchmark' => 28,
            )
        ),
        'tweet' => false,
        'include_answers_in_download_report' => true,
    ),
    'infrastructure' => array(
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
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 5.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'ntt-sdwan.infrastructure-poor-txt'
            ),
            'stage2' => array(
                'low' => 6,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'ntt-sdwan.infrastructure-standard-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'ntt-sdwan.infrastructure-good-txt'
            )
        )
    ),
    'intelligence' => array(
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
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 5.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'ntt-sdwan.intelligence-poor-txt'
            ),
            'stage2' => array(
                'low' => 6,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'ntt-sdwan.intelligence-standard-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'ntt-sdwan.intelligence-good-txt'
            )
        )
    ),
    'operations' => array(
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
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 5.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'ntt-sdwan.operations-poor-txt'
            ),
            'stage2' => array(
                'low' => 6,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'ntt-sdwan.operations-standard-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'ntt-sdwan.operations-good-txt'
            )
        )
    )
);