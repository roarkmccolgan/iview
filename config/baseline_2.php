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
            'margin-top' => 10,
            'header-spacing' => 0,
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
                    'question'=>[
                        'section'=>'screeners',
                        'question'=>'s1'
                    ],
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
                    'question'=>[
                        'section'=>'screeners',
                        'question'=>'s2'
                    ],
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
        'tweet'=>true,
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 23.3,
                'copy' => 'general.timetoacttxt',
                'tweet' => 'general.timetoacttweet',
                'benchmark' => 2,
                'benchmark-country' => [
                    'france' => 10,'francia' => 10, 'frankreich' => 10, 
                    'germany' => 0,'alemania' => 0, 'allemagne' => 0, 'deutschland' => 0,  'germania' => 0,
                    'italy' => 50,'italia' => 50, 'italie' => 50, 'italien' => 50,
                    'spain' => 30,'españa' => 30, 'espagne' => 30, 'spanien' => 30, 'spagna' => 30,
                    'united-kingdom' => 10, 'reino-unido' => 10, 'royaume­uni' => 10, 'großbritannien' => 10, 'regno-unito' => 10,
                ],
                'benchmark-size' => [
                    'less-than-1000' => 0, 'moins-de-1000' => 0, 'weniger-als-1000' => 0, 'meno-di-1000' => 0, 'menos-de-1000' => 0,
                    '1000-2499' => 60,
                    '2500-4999' => 30,
                    '5000-9999' => 0,
                    '10000-or-more' => 8.33, '10000-ou-plus' => 8.33, '10000-oder-mehr' => 8.33, '10000-o-più' => 8.33, '10000-o-más' => 8.33,
                ],
                'position' => 'behind'
            ),
            'stage2' => array(
                'low' => 23.4,
                'high' => 46.7,
                'copy' => 'general.timetocommitetxt',
                'tweet' => 'general.timetocommittweet',
                'benchmark' => 21,
                'benchmark-country' => [
                    'france' => 21.3,'francia' => 21.3, 'frankreich' => 21.3,
                    'germany' => 21.3,'alemania' => 21.3, 'allemagne' => 21.3, 'deutschland' => 21.3, 'germania' => 21.3,
                    'italy' => 25.93,'italia' => 25.93, 'italie' => 25.93, 'italien' => 25.93,
                    'spain' => 25.93,'españa' => 25.93, 'espagne' => 25.93, 'spanien' => 25.93, 'spagna' => 25.93,
                    'united-kingdom' => 5.56, 'reino-unido' => 5.56, 'royaume­uni' => 5.56, 'großbritannien' => 5.56, 'regno-unito' => 5.56,
                ],
                'benchmark-size' => [
                    'less-than-1000' => 4.63, 'moins-de-1000' => 4.63, 'weniger-als-1000' => 4.63, 'meno-di-1000' => 4.63, 'menos-de-1000' => 4.63,
                    '1000-2499' => 56.48,
                    '2500-4999' => 12.04,
                    '5000-9999' => 14.81,
                    '10000-or-more' => 12.45, '10000-ou-plus' => 12.45, '10000-oder-mehr' => 12.45, '10000-o-più' => 12.45, '10000-o-más' => 12.45,
                ],
                'position' => 'behind'
            ),
            'stage3' => array(
                'low' => 46.8,
                'high' => 70.1,
                'copy' => 'general.timetoinvesttxt',
                'tweet' => 'general.timetoinvesttweet',
                'benchmark' => 48,
                'benchmark-country' => [
                    'france' => 17.84,'francia' => 17.84, 'frankreich' => 17.84,
                    'germany' => 25.31,'alemania' => 25.31, 'allemagne' => 25.31, 'deutschland' => 25.31, 'germania' => 25.31,
                    'italy' => 22.82,'italia' => 22.82, 'italie' => 22.82, 'italien' => 22.82,
                    'spain' => 22.41,'españa' => 22.41, 'espagne' => 22.41, 'spanien' => 22.41, 'spagna' => 22.41,
                    'united-kingdom' => 11.62, 'reino-unido' => 11.62, 'royaume­uni' => 11.62, 'großbritannien' => 11.62, 'regno-unito' => 11.62,
                ],
                'benchmark-size' => [
                    'less-than-1000' => 7.05, 'moins-de-1000' => 7.05, 'weniger-als-1000' => 7.05, 'meno-di-1000' => 7.05, 'menos-de-1000' => 7.05,
                    '1000-2499' => 33.2,
                    '2500-4999' => 18.67,
                    '5000-9999' => 18.26,
                    '10000-or-more' => 13.56, '10000-ou-plus' => 13.56, '10000-oder-mehr' => 13.56, '10000-o-più' => 13.56, '10000-o-más' => 13.56,
                ],
                'position' => 'inline'
            ),
            'stage4' => array(
                'low' => 70.2,
                'high' => 93.5,
                'copy' => 'general.timetorefinetxt',
                'tweet' => 'general.timetorefinetweet',
                'benchmark' => 24,
                'benchmark-country' => [
                    'france' => 27.97,'francia' => 27.97, 'frankreich' => 27.97,
                    'germany' => 12.71,'alemania' => 12.71, 'allemagne' => 12.71, 'deutschland' => 12.71, 'germania' => 12.71,
                    'italy' => 9.32,'italia' => 9.32, 'italie' => 9.32, 'italien' => 9.32,
                    'spain' => 11.86,'españa' => 11.86, 'espagne' => 11.86, 'spanien' => 11.86, 'spagna' => 11.86,
                    'united-kingdom' => 38.14, 'reino-unido' => 38.14, 'royaume­uni' => 38.14, 'großbritannien' => 38.14, 'regno-unito' => 38.14,
                ],
                'benchmark-size' => [
                    'less-than-1000' => 5.93, 'moins-de-1000' => 5.93, 'weniger-als-1000' => 5.93, 'meno-di-1000' => 5.93, 'menos-de-1000' => 5.93,
                    '1000-2499' => 27.12,
                    '2500-4999' => 20.34,
                    '5000-9999' => 18.64,
                    '10000-or-more' => 17.39, '10000-ou-plus' => 17.39, '10000-oder-mehr' => 17.39, '10000-o-più' => 17.39, '10000-o-más' => 17.39,
                ],
                'position' => 'ahead'
            ),
            'stage5' => array(
                'low' => 93.6,
                'high' => 117,
                'copy' => 'general.timetoacceleratetxt',
                'tweet' => 'general.timetoacceleratetweet',
                'benchmark' => 5,
                'benchmark-country' => [
                    'france' => 0,'francia' => 0, 'frankreich' => 0,
                    'germany' => 4.35,'alemania' => 4.35, 'allemagne' => 4.35, 'deutschland' => 4.35, 'germania' => 4.35,
                    'italy' => 4.35,'italia' => 4.35, 'italie' => 4.35, 'italien' => 4.35,
                    'spain' => 4.35,'españa' => 4.35, 'espagne' => 4.35, 'spanien' => 4.35, 'spagna' => 4.35,
                    'united-kingdom' => 86.96, 'reino-unido' => 86.96, 'royaume­uni' => 86.96, 'großbritannien' => 86.96, 'regno-unito' => 86.96,
                ],
                'benchmark-size' => [
                    'less-than-1000' => 0, 'moins-de-1000' => 0, 'weniger-als-1000' => 0, 'meno-di-1000' => 0, 'menos-de-1000' => 0,
                    '1000-2499' => 21.74,
                    '2500-4999' => 13.04,
                    '5000-9999' => 8.7,
                    '10000-or-more' => 10, '10000-ou-plus' => 10, '10000-oder-mehr' => 10, '10000-o-più' => 10, '10000-o-más' => 10,
                ],
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
                'benchmark' => 2.5,
                'position' => 'behind'
            ),
            'stage2' => array(
                'low' => 12.6,
                'high' => 18.1,
                'total' => 3,
                'benchmark' => 16,
                'position' => 'behind'
            ),
            'stage3' => array(
                'low' => 18.2,
                'high' => 23.7,
                'total' => 5,
                'benchmark' => 33.6,
                'position' => 'behind'
            ),
            'stage4' => array(
                'low' => 23.8,
                'high' => 29.3,
                'total' => 5,
                'benchmark' => 33.8,
                'position' => 'inline'
            ),
            'stage5' => array(
                'low' => 29.4,
                'high' => 35,
                'total' => 5,
                'benchmark' => 15.2,
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
                'high' => 40,
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