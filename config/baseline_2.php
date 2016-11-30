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
                'country'=>[
                    'title'=>true,
                    'question'=>'s1',
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
                'size'=>[
                    'title'=>true,
                    'question'=>'s1',
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
                'high' => 23.3,
                'copy' => 'general.timetoacttxt',
                'tweet' => 'general.timetoacttweet',
                'benchmark' => 2,
                'benchmark-country' => 35,
                'benchmark-size' => 30,
                'position' => 'behind'
            ),
            'stage2' => array(
                'low' => 23.4,
                'high' => 46.7,
                'copy' => 'general.timetocommitetxt',
                'tweet' => 'general.timetocommittweet',
                'benchmark' => 22,
                'benchmark-country' => 5,
                'benchmark-size' => 10,
                'position' => 'behind'
            ),
            'stage3' => array(
                'low' => 46.8,
                'high' => 70.1,
                'copy' => 'general.timetoinvesttxt',
                'tweet' => 'general.timetoinvesttweet',
                'benchmark' => 48,
                'benchmark-country' => 30,
                'benchmark-size' => 8,
                'position' => 'inline'
            ),
            'stage4' => array(
                'low' => 70.2,
                'high' => 93.5,
                'copy' => 'general.timetorefinetxt',
                'tweet' => 'general.timetorefinetweet',
                'benchmark' =>  24,
                'benchmark-country' => 20,
                'benchmark-size' => 40,
                'position' => 'ahead'
            ),
            'stage5' => array(
                'low' => 93.6,
                'high' => 117,
                'copy' => 'general.timetoacceleratetxt',
                'tweet' => 'general.timetoacceleratetweet',
                'benchmark' => 5,
                'benchmark-country' => 10,
                'benchmark-size' => 6,
                'position' => 'ahead'
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
                'low' => 7,
                'high' => 12.5,
                'total' => 2,
                'benchmark' => 2,
                'position' => 'behind'
            ),
            'stage2' => array(
                'low' => 12.6,
                'high' => 18.1,
                'total' => 3,
                'benchmark' => 2,
                'position' => 'behind'
            ),
            'stage3' => array(
                'low' => 18.2,
                'high' => 23.7,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'behind'
            ),
            'stage4' => array(
                'low' => 23.8,
                'high' => 29.3,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'inline'
            ),
            'stage5' => array(
                'low' => 29.4,
                'high' => 35,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'ahead'
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
                'low' => 9,
                'high' => 16.1,
                'total' => 2,
                'benchmark' => 2,
                'position' => 'behind'
            ),
            'stage2' => array(
                'low' => 16.2,
                'high' => 23.3,
                'total' => 3,
                'benchmark' => 2,
                'position' => 'inline'
            ),
            'stage3' => array(
                'low' => 23.4,
                'high' => 30.5,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'inline'
            ),
            'stage4' => array(
                'low' => 30.6,
                'high' => 37.7,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'ahead'
            ),
            'stage5' => array(
                'low' => 37.8,
                'high' => 20,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'ahead'
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
                'high' => 6.9,
                'total' => 2,
                'benchmark' => 2,
                'position' => 'inline'
            ),
            'stage2' => array(
                'low' => 7,
                'high' => 13.9,
                'total' => 3,
                'benchmark' => 2,
                'position' => 'inline'
            ),
            'stage3' => array(
                'low' => 14,
                'high' => 20.9,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'ahead'
            ),
            'stage4' => array(
                'low' => 21,
                'high' => 27.9,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'ahead'
            ),
            'stage5' => array(
                'low' => 28,
                'high' => 35,
                'total' => 5,
                'benchmark' => 2,
                'position' => 'ahead'
            )
        )
    )
);