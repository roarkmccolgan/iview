<?php
//NTT
return array(
    'overall' => array(
        'baseline' => 27.60,
        'baseline' => 22.5,

        'benchmark-country-fr' => 27.18,
        'benchmark-country-de' => 27.54,
        'benchmark-country-en' => 28.09,

        'benchmark-size-500-to-999' => 24.53,
        'benchmark-size-1000-to-4999' => 27.63,
        'benchmark-size-5000+' => 32.05,

        'benchmark-vertical-banking-other-financial-services' => 31.79,
        'benchmark-vertical-insurance' => 28.99,
        'benchmark-vertical-retail-trade' => 28.03,
        'benchmark-vertical-wholesale-trade' => 24.88,
        'benchmark-vertical-business-professional-services' => 26.51,
        'benchmark-vertical-software-and-it-services' => 31.71,
        'benchmark-vertical-media' => 26.62,
        'benchmark-vertical-manufacturing' => 24.35,
        'benchmark-vertical-transportation' => 27.94,
        'benchmark-vertical-utilities-oil-gas' => 27.91,
        'benchmark-vertical-private-education' => 24.52,
        'benchmark-vertical-private-healthcare-service-providers' => 24.32,

        'benchmark-country-fr' => 22.5,
        'benchmark-country-de' => 22.5,
        'benchmark-country-en' => 22.5,

        'benchmark-size-500-to-999' => 7.5,
        'benchmark-size-1000-to-4999' => 22.5,
        'benchmark-size-5000+' => 22.5,

        'benchmark-vertical-banking-other-financial-services' => 22.5,
        'benchmark-vertical-insurance' => 22.5,
        'benchmark-vertical-retail-trade' => 22.5,
        'benchmark-vertical-wholesale-trade' => 7.5,
        'benchmark-vertical-business-professional-services' => 7.5,
        'benchmark-vertical-software-and-it-services' => 22.5,
        'benchmark-vertical-media' => 7.5,
        'benchmark-vertical-manufacturing' => 7.5,
        'benchmark-vertical-transportation' => 22.5,
        'benchmark-vertical-utilities-oil-gas' => 22.5,
        'benchmark-vertical-private-education' => 7.5,
        'benchmark-vertical-private-healthcare-service-providers' => 7.5,

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
                'high' => 26.9,
                'copy' => 'general.8poortxt',
                'tweet' => false,
                'benchmark' => 20,
            ),
            'stage2' => array(
                'low' => 27,
                'high' => 32.9,
                'copy' => 'general.8standardtxt',
                'tweet' => false,
                'benchmark' => 34,
            ),
            'stage3' => array(
                'low' => 33,
                'high' => 50,
                'copy' => 'general.8goodtxt',
                'tweet' => false,
                'benchmark' => 28,
            )
        ),
        'tweet' => false,
        'include_answers_in_download_report' => true,
    ),
    'infrastructure' => array(
        'baseline' => 8.90,
        'baseline' => 2.5,
        
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

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
                'high' => 8.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'ntt-sdwan.infrastructure-poor-txt'
            ),
            'stage2' => array(
                'low' => 9,
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
        'baseline' => 9.28,
        'baseline' => 7.5,
        
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

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
                'high' => 8.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'ntt-sdwan.intelligence-poor-txt'
            ),
            'stage2' => array(
                'low' => 9,
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
        'baseline' => 9.42,
        'baseline' => 7.5,
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

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