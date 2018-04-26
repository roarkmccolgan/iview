<?php
//NTT
return array(
    'overall' => array(
        'baseline' => 27.60,
        
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
                'copy' => 'trend-micro-mssp.stage1txt',
                'tweet' => false,
                'benchmark' => 20,
            ),
            'stage2' => array(
                'low' => 27,
                'high' => 32.9,
                'copy' => 'trend-micro-mssp.stage2txt',
                'tweet' => false,
                'benchmark' => 34,
            ),
            'stage3' => array(
                'low' => 33,
                'high' => 50,
                'copy' => 'trend-micro-mssp.stage3txt',
                'tweet' => false,
                'benchmark' => 28,
            ),
            'stage4' => array(
                'low' => 33,
                'high' => 50,
                'copy' => 'trend-micro-mssp.stage4txt',
                'tweet' => false,
                'benchmark' => 28,
            ),
            'stage5' => array(
                'low' => 33,
                'high' => 50,
                'copy' => 'trend-micro-mssp.stage5txt',
                'tweet' => false,
                'benchmark' => 28,
            )
        ),
        'tweet' => false,
        'include_answers_in_download_report' => true,
    ),
    'sales' => array(
        'baseline' => 8.90,

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
                'copy' => 'trend-micro-mssp.sales-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 9,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-mssp.sales-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.sales-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.sales-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.sales-stage-5-txt'
            )
        )
    ),
    'marketing' => array(
        'baseline' => 8.90,

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
                'copy' => 'trend-micro-mssp.marketing-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 9,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-mssp.marketing-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.marketing-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.marketing-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.marketing-stage-5-txt'
            )
        )
    ),
    'services' => array(
        'baseline' => 8.90,

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
                'copy' => 'trend-micro-mssp.services-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 9,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-mssp.services-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.services-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.services-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.services-stage-5-txt'
            )
        )
    ),
    'security' => array(
        'baseline' => 8.90,

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
                'copy' => 'trend-micro-mssp.security-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 9,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-mssp.security-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.security-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.security-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 11,
                'high' => 15,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-mssp.security-stage-5-txt'
            )
        )
    ),
);