<?php
//fireeye
return array(
    'overall' => array(
        'baseline' => 21.5,
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
            'header'=>false,
            'footer'=>true,
            'graph'=>true,
            'graph-title'=>true,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#d92435',
            'pageimage'=>false,
            'extra-graphs'=>[
                'country-france'=>[
                    'title'=>true,
                    'columns' => [
                        [
                            'type'=>'string',
                            'label'=>'Stage',
                        ],
                        [
                            'type'=>'number',
                            'label'=>'Your Score',
                            'format'=>[
                                'type'=>'NumberFormat',
                                'format'=>[
                                    'suffix' => '%'
                                ]
                            ],
                        ],
                    ],
                    'role-columns' => [
                        [
                            'type'=>'string',
                            'role'=>'style',
                        ],
                        [
                            'type'=>'string',
                            'role'=>'annotation',
                        ]
                    ],
                    'data' => 'benchmark-country'
                ],
                'size-1000'=>[
                    'title'=>true,
                    'columns' => [
                        [
                            'type'=>'string',
                            'label'=>'Stage',
                        ],
                        [
                            'type'=>'number',
                            'label'=>'Your Score',
                            'format'=>[
                                'type'=>'NumberFormat',
                                'format'=>[
                                    'suffix' => '%'
                                ]
                            ],
                        ],
                    ],
                    'role-columns' => [
                        [
                            'type'=>'string',
                            'role'=>'style',
                        ],
                        [
                            'type'=>'string',
                            'role'=>'annotation',
                        ]
                    ],
                    'data' => 'benchmark-size'
                ],
            ],
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 20.9,
                'copy' => 'general.timetoacttxt',
                'tweet' => 'general.timetoacttweet',
                'benchmark' => 2,
                'benchmark-country' => 35,
                'benchmark-size' => 30,
            ),
            'stage2' => array(
                'low' => 21,
                'high' => 40.9,
                'copy' => 'general.timetocommitetxt',
                'tweet' => 'general.timetocommittweet',
                'benchmark' => 22,
                'benchmark-country' => 5,
                'benchmark-size' => 10,
            ),
            'stage3' => array(
                'low' => 41,
                'high' => 50.9,
                'copy' => 'general.timetoinvesttxt',
                'tweet' => 'general.timetoinvesttweet',
                'benchmark' => 48,
                'benchmark-country' => 30,
                'benchmark-size' => 8,
            ),
            'stage4' => array(
                'low' => 61,
                'high' => 80.9,
                'copy' => 'general.timetorefinetxt',
                'tweet' => 'general.timetorefinetweet',
                'benchmark' =>  24,
                'benchmark-country' => 20,
                'benchmark-size' => 40,
            ),
            'stage5' => array(
                'low' => 81,
                'high' => 100,
                'copy' => 'general.timetoacceleratetxt',
                'tweet' => 'general.timetoacceleratetweet',
                'benchmark' => 5,
                'benchmark-country' => 10,
                'benchmark-size' => 6,
            )
        )
    ),
    'cyber-risk-management-and-the-business' => array(
        'report-settings' => [
            'header'=>false,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#d92435',
            'pageimage'=>false
        ],
        'baseline' => 15.363,
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.92,
                'total' => 2,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 3,
                'benchmark' => 2,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 5,
                'benchmark' => 2,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 5,
                'benchmark' => 2,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 5,
                'benchmark' => 2,
            )
        )
    ),
    'cyber-risk-management-operations-and-defence' => array(
        'report-settings' => [
            'header'=>false,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#d92435',
            'pageimage'=>false
        ],
        'baseline' => 15.363,
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.92,
                'total' => 2,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 3,
                'benchmark' => 2,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 5,
                'benchmark' => 2,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 5,
                'benchmark' => 2,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 5,
                'benchmark' => 2,
            )
        )
    ),
    'cyber-risk-management-breach-detection-and-remediation' => array(
        'report-settings' => [
            'header'=>false,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#d92435',
            'pageimage'=>false
        ],
        'baseline' => 15.363,
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.92,
                'total' => 2,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 3,
                'benchmark' => 2,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 5,
                'benchmark' => 2,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 5,
                'benchmark' => 2,
            ),
            'stage5' => array(
                'low' => 17,
                'high' => 20,
                'total' => 5,
                'benchmark' => 2,
            )
        )
    )
);