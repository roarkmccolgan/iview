<?php
//Trend MSP
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
                'high' => 20,
                'copy' => 'trend-micro-msp.stage1txt',
                'tweet' => false,
                'benchmark' => 20,
            ),
            'stage2' => array(
                'low' => 20.01,
                'high' => 40,
                'copy' => 'trend-micro-msp.stage2txt',
                'tweet' => false,
                'benchmark' => 34,
            ),
            'stage3' => array(
                'low' => 40.01,
                'high' => 60,
                'copy' => 'trend-micro-msp.stage3txt',
                'tweet' => false,
                'benchmark' => 28,
            ),
            'stage4' => array(
                'low' => 60.01,
                'high' => 80,
                'copy' => 'trend-micro-msp.stage4txt',
                'tweet' => false,
                'benchmark' => 28,
            ),
            'stage5' => array(
                'low' => 80.01,
                'high' => 200,
                'copy' => 'trend-micro-msp.stage5txt',
                'tweet' => false,
                'benchmark' => 28,
            )
        ),
        'tweet' => false,
        'include_answers_in_download_report' => true,
        'notifications' => [
            'inline_report' => true
        ],
        'field_validation' => [
            'fname'=>'required|min:2|max:255',
            'sname'=>'required|min:2|max:255',
            'email'=>'required|email',
            'phone'=>'required',
            'title'=>'required|min:3|max:255',
            'company'=>'required|min:2|max:255',
            'country'=>'required',
            'terms'=>'required'
        ]
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
                'high' => 7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'trend-micro-msp.sales-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 7.01,
                'high' => 11.5,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-msp.sales-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11.51,
                'high' => 16,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.sales-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 16.01,
                'high' => 20.5,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.sales-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 20.51,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.sales-stage-5-txt'
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
                'high' => 7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'trend-micro-msp.marketing-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 7.01,
                'high' => 11.5,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-msp.marketing-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11.51,
                'high' => 16,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.marketing-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 16.01,
                'high' => 20.5,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.marketing-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 20.51,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.marketing-stage-5-txt'
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
                'high' => 7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'trend-micro-msp.services-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 7.01,
                'high' => 11.5,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-msp.services-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11.51,
                'high' => 16,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.services-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 16.01,
                'high' => 20.5,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.services-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 20.51,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.services-stage-5-txt'
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
                'high' => 7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'trend-micro-msp.security-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 7.01,
                'high' => 11.5,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'trend-micro-msp.security-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11.51,
                'high' => 16,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.security-stage-3-txt'
            ),
            'stage4' => array(
                'low' => 16.01,
                'high' => 20.5,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.security-stage-4-txt'
            ),
            'stage5' => array(
                'low' => 20.51,
                'high' => 30,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'trend-micro-msp.security-stage-5-txt'
            )
        )
    ),
);