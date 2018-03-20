<?php
//NTT
return array(
    'overall' => array(
        'baseline' => [43.33,40.67,16],

        'benchmark-country-fr' => [46,36,18],
        'benchmark-country-de' => [44,33,13],
        'benchmark-country-en' => [40,43,17],

        'benchmark-size-500-to-999' => [60.58,33.65,5.77],
        'benchmark-size-1000-to-4999' => [45.60, 44.80, 9.60],
        'benchmark-size-5000+' => [14.08, 43.66, 42.25],

        'banchmark-banking-other-financial-services' => [20.00,33.33,46.67],
        'banchmark-insurance' => [31.25,56.25,12.50],
        'banchmark-retail-trade' => [43.33,33.33,23.33],
        'banchmark-wholesale-trade' => [55.56,27.78,16.67],
        'banchmark-business/professional-services' => [50.00,50.00,0.00],
        'banchmark-software-and-it-services' => [10.34,62.07,27.59],
        'banchmark-media' => [40.74,48.15,11.11],
        'banchmark-manufacturing' => [63.89,36.11,0.00],
        'banchmark-transportation' => [55.00,25.00,20.00],
        'banchmark-utilities-oil/gas' => [40.00,35.00,25.00],
        'banchmark-private-education' => [80.00,20.00,0.00],
        'banchmark-private-healthcare-service-providers' => [61.54,38.46,0.00],
        'banchmark-banking-insurance-other-fsi' => [25.81,45.16,29.03],
        'banchmark-retail/wholesale' => [47.92,31.25,20.83],
        'banchmark-business&it-services-media' => [33.72,53.49,12.79],
        'banchmark-manufacturing' => [63.89,36.11,0.00],
        'banchmark-transportation-energy' => [47.50,30.00,22.50],
        'banchmark-private-education-healtcare' => [71.43,28.57,0.00],

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
        'baseline' => [48.00, 35.67, 16.33],

        'benchmark-country-fr' => [53.00, 30.00, 17.00],
        'benchmark-country-de' => [44.00, 39.00, 17.00],
        'benchmark-country-en' => [47.00, 38.00, 15.00],

        'benchmark-size-500-to-999' => [62.50, 33.65, 3.85],
        'benchmark-size-1000-to-4999' => [52.00, 37.60, 10.40],
        'benchmark-size-5000+' => [19.72, 35.21, 45.07],

        'banchmark-banking-other-financial-services' => [30.00,30.00,40.00],
        'banchmark-insurance' => [31.25,59.38,9.38],
        'banchmark-retail-trade' => [36.67,40.00,23.33],
        'banchmark-wholesale-trade' => [61.11,22.22,16.67],
        'banchmark-business/professional-services' => [56.67,43.33,0.00],
        'banchmark-software-and-it-services' => [31.03,37.93,31.03],
        'banchmark-media' => [59.26,25.93,14.81],
        'banchmark-manufacturing' => [63.89,33.33,2.78],
        'banchmark-transportation' => [55.00,25.00,20.00],
        'banchmark-utilities-oil/gas' => [45.00,30.00,25.00],
        'banchmark-private-education' => [60.00,40.00,0.00],
        'banchmark-private-healthcare-service-providers' => [69.23,23.08,7.69],
        'banchmark-banking-insurance-other-fsi' => [30.65,45.16,24.19],
        'banchmark-retail/wholesale' => [45.83,33.33,20.83],
        'banchmark-business&it-services-media' => [48.84,36.05,15.12],
        'banchmark-manufacturing' => [63.89,33.33,2.78],
        'banchmark-transportation-energy' => [50.00,27.50,22.50],
        'banchmark-private-education-healtcare' => [64.29,32.14,3.57],

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
        'baseline' => [38.67, 43.00, 18.33],

        'benchmark-country-fr' => [34.00, 46.00, 20.00],
        'benchmark-country-de' => [40.00, 46.00, 14.00],
        'benchmark-country-en' => [42.00, 37.00, 21.00],

        'benchmark-size-500-to-999' => [56.73, 32.69, 10.58],
        'benchmark-size-1000-to-4999' => [38.40, 48.00, 13.60],
        'benchmark-size-5000+' => [12.68, 49.30, 38.03],

        'banchmark-banking-other-financial-services' => [23.33,40.00,36.67],
        'banchmark-insurance' => [15.63,65.63,18.75],
        'banchmark-retail-trade' => [33.33,36.67,30.00],
        'banchmark-wholesale-trade' => [50.00,27.78,22.22],
        'banchmark-business/professional-services' => [66.67,33.33,0.00],
        'banchmark-software-and-it-services' => [3.45,65.52,31.03],
        'banchmark-media' => [40.74,44.44,14.81],
        'banchmark-manufacturing' => [61.11,33.33,5.56],
        'banchmark-transportation' => [30.00,45.00,25.00],
        'banchmark-utilities-oil/gas' => [40.00,50.00,10.00],
        'banchmark-private-education' => [66.67,13.33,20.00],
        'banchmark-private-healthcare-service-providers' => [53.85,46.15,0.00],
        'banchmark-banking-insurance-other-fsi' => [19.35,53.23,27.42],
        'banchmark-retail/wholesale' => [39.58,33.33,27.08],
        'banchmark-business&it-services-media' => [37.21,47.67,15.12],
        'banchmark-manufacturing' => [61.11,33.33,5.56],
        'banchmark-transportation-energy' => [35.00,47.50,17.50],
        'banchmark-private-education-healtcare' => [60.71,28.57,10.71],

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
        'baseline' => [39.33, 38.00, 22.67],

        'benchmark-country-fr' => [36.00, 41.00, 23.00],
        'benchmark-country-de' => [46.00, 35.00, 19.00],
        'benchmark-country-en' => [36.00, 38.00, 26.00],

        'benchmark-size-500-to-999' => [63.46, 25.00, 11.54],
        'benchmark-size-1000-to-4999' => [32.00, 55.20, 12.80],
        'benchmark-size-5000+' => [16.90, 26.76, 56.34],
        
        'banchmark-banking-other-financial-services' => [13.33,46.67,40.00],
        'banchmark-insurance' => [31.25,43.75,25.00],
        'banchmark-retail-trade' => [46.67,26.67,26.67],
        'banchmark-wholesale-trade' => [55.56,27.78,16.67],
        'banchmark-business/professional-services' => [43.33,50.00,6.67],
        'banchmark-software-and-it-services' => [17.24,44.83,37.93],
        'banchmark-media' => [44.44,33.33,22.22],
        'banchmark-manufacturing' => [69.44,22.22,8.33],
        'banchmark-transportation' => [30.00,55.00,15.00],
        'banchmark-utilities-oil/gas' => [20.00,40.00,40.00],
        'banchmark-private-education' => [53.33,40.00,6.67],
        'banchmark-private-healthcare-service-providers' => [53.85,23.08,23.08],
        'banchmark-banking-insurance-other-fsi' => [22.58,45.16,32.26],
        'banchmark-retail/wholesale' => [50.00,27.08,22.92],
        'banchmark-business&it-services-media' => [34.88,43.02,22.09],
        'banchmark-manufacturing' => [69.44,22.22,8.33],
        'banchmark-transportation-energy' => [25.00,47.50,27.50],
        'banchmark-private-education-healtcare' => [53.57,32.14,14.29],

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