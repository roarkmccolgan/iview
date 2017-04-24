<?php
//SPLUNK
return array(
    'overall' => array(
        'baseline' => 21.5,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>true,
            'pb'=>false,
            'designline'=>false,
            'color'=>'#0096d6',
            'pageimage'=>false,
        ],
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 20.9,
                'copy' => 'general.5poortxt',
                'tweet' => false,
                'benchmark' => 2,
            ),
            'stage2' => array(
                'low' => 21,
                'high' => 40.9,
                'copy' => 'general.5standardtxt',
                'tweet' => false,
                'benchmark' => 32,
            ),
            'stage3' => array(
                'low' => 41,
                'high' => 50.9,
                'copy' => 'general.5goodtxt',
                'tweet' => false,
                'benchmark' => 41,
            ),
            'stage4' => array(
                'low' => 61,
                'high' => 80.9,
                'copy' => 'general.5aspirationaltxt',
                'tweet' => false,
                'benchmark' => 21,
            ),
            'stage5' => array(
                'low' => 61,
                'high' => 80.9,
                'copy' => 'general.5besttxt',
                'tweet' => false,
                'benchmark' => 21,
            )
        ),
        'tweet' => false
    ),
    'security-strategy' => array(
        'baseline' => 15.363,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>false,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'right',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.92,
                'total' => 2,
                'benchmark' => 14,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 3,
                'benchmark' => 39,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 5,
                'benchmark' => 28,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 5,
                'benchmark' => 13,
            )
        )
    ),
    'incident-detection' => array(
        'baseline' => 24.046,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.95,
                'total' => 3,
                'benchmark' => 25,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 4,
                'benchmark' => 33,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 6,
                'benchmark' => 17,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 6,
                'benchmark' => 17,
            )
        )
    ),
    'incident-response' => array(
        'baseline' => 10,917,
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>true,
            'pb'=>true,
            'designline'=>true,
            'color'=>'#0096d6',
            'pageimage'=>true,
            'extra-graphs'=>false,
        ],
        'floatimage' => 'none',
        'floatgraph' => 'none',
        'types' => array(
            'stage1' => array(
                'low' => 0,
                'high' => 4.9,
                'total' => 1,
                'benchmark' => 28,
            ),
            'stage2' => array(
                'low' => 5,
                'high' => 8.9,
                'total' => 2,
                'benchmark' => 26,
            ),
            'stage3' => array(
                'low' => 9,
                'high' => 12.9,
                'total' => 4,
                'benchmark' => 26,
            ),
            'stage4' => array(
                'low' => 13,
                'high' => 16.9,
                'total' => 4,
                'benchmark' => 11,
            )
        )
    )
);