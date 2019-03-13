<?php
//NTT Data
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
                'high' => 25.9,
                'copy' => 'nttdatadx.stage1txt',
                'tweet' => false,
                'benchmark' => 20,
            ),
            'stage2' => array(
                'low' => 26,
                'high' => 29.9,
                'copy' => 'nttdatadx.stage2txt',
                'tweet' => false,
                'benchmark' => 34,
            ),
            'stage3' => array(
                'low' => 30,
                'high' => 45,
                'copy' => 'nttdatadx.stage3txt',
                'tweet' => false,
                'benchmark' => 28,
            ),
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
            'title'=>'required|min:3|max:255',
            'country'=>'required',
            'terms'=>'required'
        ]
    ),
    'dx-adoption' => array(
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
                'high' =>11.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.sales-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 12,
                'high' => 13.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.sales-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 14,
                'high' => 25,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.sales-stage-3-txt'
            ),
        )
    ),
    'success-in-dx' => array(
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
                'high' => 7.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.marketing-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 8,
                'high' => 10.9,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.marketing-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 11,
                'high' => 18,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.marketing-stage-3-txt'
            ),
        )
    ),
    'connected-financial-services' => array(
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
                'high' => 3.9,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.services-stage-1-txt'
            ),
            'stage2' => array(
                'low' => 4,
                'high' => 6.4,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.services-stage-2-txt'
            ),
            'stage3' => array(
                'low' => 6.5,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.services-stage-3-txt'
            ),
        )
    )
);