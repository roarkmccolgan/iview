<?php
//HPGDPR
return array(
    'overall' => array(
        'baseline' => 21.5,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-rating'=>true,
            'page-offset'=> 2,
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 41.32,
                'copy' => 'general.4initialtxt',
                'tweet' => false,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 41.32,
                'high' => 57.54,
                'copy' => 'general.4definedtxt',
                'tweet' => false,
                'benchmark' => 32,
            ),
            'stage3' => array(
                'low' => 57.55,
                'high' => 73.77,
                'copy' => 'general.4managedtxt',
                'tweet' => false,
                'benchmark' => 41,
            ),
            'stage4' => array(
                'low' => 73.78,
                'high' => 90.00,
                'copy' => 'general.4optimisedtxt',
                'tweet' => false,
                'benchmark' => 21,
            )
        ),
        'tweet' => true
    ),
    'leadership-and-general-obligations' => array(
        'baseline' => 15.363,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-rating'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 13.14,
                'total' => 2,
                'benchmark' => 14,
            ),
            'stage2' => array(
                'low' => 13.15,
                'high' => 18.75,
                'total' => 3,
                'benchmark' => 39,
            ),
            'stage3' => array(
                'low' => 18.76,
                'high' => 24.38,
                'total' => 5,
                'benchmark' => 28,
            ),
            'stage4' => array(
                'low' => 24.39,
                'high' => 30,
                'total' => 5,
                'benchmark' => 13,
            )
        )
    ),
    'data-rights-and-standards' => array(
        'baseline' => 24.046,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-rating'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 13.32,
                'total' => 3,
                'benchmark' => 25,
            ),
            'stage2' => array(
                'low' => 13.33,
                'high' => 18.87,
                'total' => 4,
                'benchmark' => 33,
            ),
            'stage3' => array(
                'low' => 18.88,
                'high' => 24.44,
                'total' => 6,
                'benchmark' => 17,
            ),
            'stage4' => array(
                'low' => 24.45,
                'high' => 30.00,
                'total' => 6,
                'benchmark' => 17,
            )
        )
    ),
    'security' => array(
        'baseline' => 10,917,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'hide-title'=> true,
            'hide-rating'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 14.89,
                'total' => 1,
                'benchmark' => 28,
            ),
            'stage2' => array(
                'low' => 14.90,
                'high' => 19.92,
                'total' => 2,
                'benchmark' => 26,
            ),
            'stage3' => array(
                'low' => 19.93,
                'high' => 24.96,
                'total' => 4,
                'benchmark' => 26,
            ),
            'stage4' => array(
                'low' => 24.97,
                'high' => 30,
                'total' => 4,
                'benchmark' => 11,
            )
        )
    )
);