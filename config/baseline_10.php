<?php
//NTT Data
return [
    'overall' => [
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
        'default_fields' => [
            'fname' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorFname',
                'required' => true,
                'col' => 6,
            ],
            'sname' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorSname',
                'required' => true,
                'col' => 6,
            ],
            'email' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorEmail',
                'required' => true,
                'col' => 6,
            ],
            'company' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorCompany',
                'required' => true,
                'col' => 6,
            ],
            'title' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorTitle',
                'required' => false,
                'col' => 6,
                // 'extra' => true,
            ],
            'phone' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorPhone',
                'required' => false,
                'col' => 6,
            ],
            'country' => [
                'type' => 'select',
                'default' => '',
                'options' => [
                    'Afghanistan' => 'Afghanistan',
                    'Åland Islands' => 'Åland Islands',
                    'Albania' => 'Albania',
                    'Algeria' => 'Algeria',
                    'Andorra' => 'Andorra',
                    'Angola' => 'Angola',
                    'Anguilla' => 'Anguilla',
                    'Antigua and Barbuda' => 'Antigua and Barbuda',
                    'Argentina' => 'Argentina',
                    'Armenia' => 'Armenia',
                    'Aruba' => 'Aruba',
                    'Australia' => 'Australia',
                    'Austria' => 'Austria',
                    'Azerbaijan' => 'Azerbaijan',
                    'Bahamas' => 'Bahamas',
                    'Bahrain' => 'Bahrain',
                    'Bangladesh' => 'Bangladesh',
                    'Barbados' => 'Barbados',
                    'Belarus' => 'Belarus',
                    'Belgium' => 'Belgium',
                    'Belize' => 'Belize',
                    'Benin' => 'Benin',
                    'Bermuda' => 'Bermuda',
                    'Bhutan' => 'Bhutan',
                    'Bolivia' => 'Bolivia',
                    'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
                    'Botswana' => 'Botswana',
                    'Bouvet Island' => 'Bouvet Island',
                    'Brazil' => 'Brazil',
                    'British Indian Ocean Territory' => 'British Indian Ocean Territory',
                    'Brunei Darussalam' => 'Brunei Darussalam',
                    'Bulgaria' => 'Bulgaria',
                    'Burkina Faso' => 'Burkina Faso',
                    'Burundi' => 'Burundi',
                    'Cambodia' => 'Cambodia',
                    'Cameroon' => 'Cameroon',
                    'Canada' => 'Canada',
                    'Cape Verdian' => 'Cape Verdian',
                    'Cayman Islands' => 'Cayman Islands',
                    'Central African Republic' => 'Central African Republic',
                    'Chad' => 'Chad',
                    'Chile' => 'Chile',
                    'China' => 'China',
                    'Christmas Island' => 'Christmas Island',
                    'Cocos Islands' => 'Cocos Islands',
                    'Colombia' => 'Colombia',
                    'Comoros' => 'Comoros',
                    'Congo' => 'Congo',
                    'Congo Democratic Republic' => 'Congo Democratic Republic',
                    'Cook Islands' => 'Cook Islands',
                    'Costa Rica' => 'Costa Rica',
                    'CÃ´te d Ivoire' => 'CÃ´te d Ivoire',
                    'Croatia' => 'Croatia',
                    'Cyprus' => 'Cyprus',
                    'Czech Republic' => 'Czech Republic',
                    'Denmark' => 'Denmark',
                    'Djibouti' => 'Djibouti',
                    'Dominica' => 'Dominica',
                    'Dominican Republic' => 'Dominican Republic',
                    'Ecuador' => 'Ecuador',
                    'Egypt' => 'Egypt',
                    'El Salvador' => 'El Salvador',
                    'Equatorial Guinea' => 'Equatorial Guinea',
                    'Eritrea' => 'Eritrea',
                    'Estonia' => 'Estonia',
                    'Ethiopia' => 'Ethiopia',
                    'Falkland Islands Malvinas' => 'Falkland Islands Malvinas',
                    'Faroe Islands' => 'Faroe Islands',
                    'Fiji' => 'Fiji',
                    'Finland' => 'Finland',
                    'France' => 'France',
                    'French Guiana' => 'French Guiana',
                    'French Polynesia' => 'French Polynesia',
                    'French Southern Territories' => 'French Southern Territories',
                    'Gabon' => 'Gabon',
                    'Gambia' => 'Gambia',
                    'Georgia' => 'Georgia',
                    'Germany' => 'Germany',
                    'Ghana' => 'Ghana',
                    'Gibraltar' => 'Gibraltar',
                    'Greece' => 'Greece',
                    'Greenland' => 'Greenland',
                    'Grenada' => 'Grenada',
                    'Guadeloupe' => 'Guadeloupe',
                    'Guam' => 'Guam',
                    'Guatemala' => 'Guatemala',
                    'Guinea' => 'Guinea',
                    'Guinea-Bissau' => 'Guinea-Bissau',
                    'Guyana' => 'Guyana',
                    'Haiti' => 'Haiti',
                    'Heard and McDonald' => 'Heard and McDonald',
                    'Holy See Vatican City State' => 'Holy See Vatican City State',
                    'Honduras' => 'Honduras',
                    'Hong Kong' => 'Hong Kong',
                    'Hungary' => 'Hungary',
                    'Iceland' => 'Iceland',
                    'India' => 'India',
                    'Indonesia' => 'Indonesia',
                    'Iraq' => 'Iraq',
                    'Ireland' => 'Ireland',
                    'Israel' => 'Israel',
                    'Italy' => 'Italy',
                    'Jamaica' => 'Jamaica',
                    'Japan' => 'Japan',
                    'Jordan' => 'Jordan',
                    'Kazakhstan' => 'Kazakhstan',
                    'Kenya' => 'Kenya',
                    'Kiribati' => 'Kiribati',
                    'Korea Democratic Peoples Rep' => 'Korea Democratic Peoples Rep',
                    'Korea Republic' => 'Korea Republic',
                    'Kuwait' => 'Kuwait',
                    'Kyrgyzstan' => 'Kyrgyzstan',
                    'Laos' => 'Laos',
                    'Latvia' => 'Latvia',
                    'Lebanon' => 'Lebanon',
                    'Lesotho' => 'Lesotho',
                    'Liberia' => 'Liberia',
                    'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
                    'Liechtenstein' => 'Liechtenstein',
                    'Lithuania' => 'Lithuania',
                    'Luxembourg' => 'Luxembourg',
                    'Macau' => 'Macau',
                    'Macedonia' => 'Macedonia',
                    'Madagascar' => 'Madagascar',
                    'Malawi' => 'Malawi',
                    'Malaysia' => 'Malaysia',
                    'Maldives' => 'Maldives',
                    'Mali' => 'Mali',
                    'Malta' => 'Malta',
                    'Marshall Islands' => 'Marshall Islands',
                    'Martinique' => 'Martinique',
                    'Mauritania' => 'Mauritania',
                    'Mauritius' => 'Mauritius',
                    'Mayotte' => 'Mayotte',
                    'Mexico' => 'Mexico',
                    'Micronesia Federated States' => 'Micronesia Federated States',
                    'Moldavia' => 'Moldavia',
                    'Monaco' => 'Monaco',
                    'Mongolia' => 'Mongolia',
                    'Montenegro' => 'Montenegro',
                    'Montserrat' => 'Montserrat',
                    'Morocco' => 'Morocco',
                    'Mozambique' => 'Mozambique',
                    'Myanmar' => 'Myanmar',
                    'Namibia' => 'Namibia',
                    'Nauru' => 'Nauru',
                    'Nepal' => 'Nepal',
                    'Netherlands' => 'Netherlands',
                    'Netherlands Antilles' => 'Netherlands Antilles',
                    'New Caledonia' => 'New Caledonia',
                    'New Zealand' => 'New Zealand',
                    'Nicaragua' => 'Nicaragua',
                    'Niger' => 'Niger',
                    'Nigeria' => 'Nigeria',
                    'Niue' => 'Niue',
                    'Norfolk Island' => 'Norfolk Island',
                    'North Mariana' => 'North Mariana',
                    'Norway' => 'Norway',
                    'Oman' => 'Oman',
                    'Pakistan' => 'Pakistan',
                    'Palau' => 'Palau',
                    'Palestine' => 'Palestine',
                    'Panama' => 'Panama',
                    'Papua New Guinea' => 'Papua New Guinea',
                    'Paraguay' => 'Paraguay',
                    'Peru' => 'Peru',
                    'Philippines' => 'Philippines',
                    'Pitcairn' => 'Pitcairn',
                    'Poland' => 'Poland',
                    'Portugal' => 'Portugal',
                    'Puerto Rico' => 'Puerto Rico',
                    'Qatar' => 'Qatar',
                    'Reunion' => 'Reunion',
                    'Romania' => 'Romania',
                    'Russian Federation' => 'Russian Federation',
                    'Rwanda' => 'Rwanda',
                    'Saint Helena' => 'Saint Helena',
                    'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
                    'Saint Lucia' => 'Saint Lucia',
                    'Saint Pierre And Miquelon' => 'Saint Pierre And Miquelon',
                    'Saint Vincent and Grenadines' => 'Saint Vincent and Grenadines',
                    'Samoa' => 'Samoa',
                    'San Marino' => 'San Marino',
                    'Sao Tome And Principe' => 'Sao Tome And Principe',
                    'Saudi Arabia' => 'Saudi Arabia',
                    'Senegal' => 'Senegal',
                    'Serbia' => 'Serbia',
                    'Serbia and Montenegro' => 'Serbia and Montenegro',
                    'Seychelles' => 'Seychelles',
                    'Sierra Leone' => 'Sierra Leone',
                    'Singapore' => 'Singapore',
                    'Slovakia' => 'Slovakia',
                    'Slovenia' => 'Slovenia',
                    'Solomon Islands' => 'Solomon Islands',
                    'Somalia' => 'Somalia',
                    'South Africa' => 'South Africa',
                    'South Georgia and Sandwich IS' => 'South Georgia and Sandwich IS',
                    'Spain' => 'Spain',
                    'Sri Lanka' => 'Sri Lanka',
                    'Suriname' => 'Suriname',
                    'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
                    'Swaziland' => 'Swaziland',
                    'Sweden' => 'Sweden',
                    'Switzerland' => 'Switzerland',
                    'Syrian Arab Republic' => 'Syrian Arab Republic',
                    'Taiwan' => 'Taiwan',
                    'Tajikistan' => 'Tajikistan',
                    'Tanzania United Republic' => 'Tanzania United Republic',
                    'Thailand' => 'Thailand',
                    'Timor Leste' => 'Timor Leste',
                    'Togo' => 'Togo',
                    'Tokelau' => 'Tokelau',
                    'Tonga' => 'Tonga',
                    'Trinidad And Tobago' => 'Trinidad And Tobago',
                    'Tunisia' => 'Tunisia',
                    'Turkey' => 'Turkey',
                    'Turkmenistan' => 'Turkmenistan',
                    'Turks and Caicos Islands' => 'Turks and Caicos Islands',
                    'Tuvalu' => 'Tuvalu',
                    'Uganda' => 'Uganda',
                    'Ukraine' => 'Ukraine',
                    'United Arab Emirates' => 'United Arab Emirates',
                    'United Kingdom' => 'United Kingdom',
                    'United States' => 'United States',
                    'Uruguay' => 'Uruguay',
                    'US Minor Outlying Islands' => 'US Minor Outlying Islands',
                    'Uzbekistan' => 'Uzbekistan',
                    'Vanuatu' => 'Vanuatu',
                    'Venezuela' => 'Venezuela',
                    'Vietnam' => 'Vietnam',
                    'Virgin Islands British' => 'Virgin Islands British',
                    'Virgin Islands US' => 'Virgin Islands US',
                    'Wallis and Futuna' => 'Wallis and Futuna',
                    'Western Sahara' => 'Western Sahara',
                    'Yemen' => 'Yemen',
                    'Zambia' => 'Zambia',
                    'Zimbabwe' => 'Zimbabwe',
                ],
                'error' => 'errorCountry',
                'required' => true,
                'col' => 12,
            ],
            'industry' => [
                'type' => 'select',
                'default' => '',
                'options' => [
                    'banking' => 'Banking',
                    'insurance' => 'Insurance',
                    'capital-markets' => 'Capital markets',
                    'other-fsi' => 'Other FSI'
                ],
                'error' => 'errorIndustry',
                'required' => true,
                'col' => 12,
            ],
            'employees' => [
                'type' => 'select',
                'default' => '',
                'options' => [
                    '100-499'=>'100 - 499',
                    '500-999'=>'500 - 999',
                    '1000-4999'=>'1000 - 4999',
                    '5000-9999'=>'5000 - 9999',
                    '10000+'=>'10000+',
                ],
                'error' => 'errorCompanySize',
                'required' => true,
                'col' => 12,
            ]
        ],
        'block-vertical-banking-1' => [124.255, 36.211, 11.131, 26.965],
        'block-vertical-insurance-1' => [135.717, 44.443, 11.131, 18.733],
        'block-vertical-capital-markets-1' => [147.179, 44.09, 11.131, 18.733],
        'block-vertical-other-fsi-1' => [158.641, 50.287, 11.131, 12.535],

        'block-vertical-banking-2' => [124.255, 16.192, 11.131, 22.361],
        'block-vertical-insurance-2' => [135.909, 18.495, 11.131, 28.727],
        'block-vertical-capital-markets-2' => [147.179, 23.326, 11.131, 23.924],
        'block-vertical-other-fsi-2' => [158.641, 28.382, 11.131, 24.999],

        'block-vertical-banking-3' => [124.255, 10.69, 11.131, 8.148],
        'block-vertical-insurance-3' => [135.717, 10.69, 11.131, 11.131],
        'block-vertical-capital-markets-3' => [147.007, 10.69, 11.131, 16.228],
        'block-vertical-other-fsi-3' => [158.649, 10.69, 11.131, 21.109],

        'block-size-100-499-1' => [60.845, 43.065, 11.131, 19.647],
        'block-size-500-999-1' => [72.499, 27.99, 11.131, 34.722],
        'block-size-1000-4999-1' => [83.789, 41.804, 11.131, 20.908],
        'block-size-5000-9999-1' => [95.372, 49.475, 11.131, 13.237],
        'block-size-10000+-1' => [106.867, 57.065, 11.131, 5.647],

        'block-size-100-499-2' => [60.651, 19.491, 11.131, 26.286],
        'block-size-500-999-2' => [72.293, 12.896, 11.131, 18.77],
        'block-size-1000-4999-2' => [83.935, 15.718, 11.131, 29.078],
        'block-size-5000-9999-2' => [95.23, 27.348, 11.131, 25.362],
        'block-size-10000+-2' => [106.604, 41.579, 11.131, 18.594],

        'block-size-100-499-3' => [60.845, 10.885, 11.131, 11.826],
        'block-size-500-999-3' => [72.487, 10.885, 11.131, 4.182],
        'block-size-1000-4999-3' => [83.777, 10.885, 11.131, 7.108],
        'block-size-5000-9999-3' => [95.066, 10.885, 11.131, 20.086],
        'block-size-10000+-3' => [106.693, 10.885, 11.131, 33.557],

        'block-country-us-1' => [9.151, 42.987, 11.131, 19.448],
        'block-country-we-1' => [20.794, 42.342, 11.131, 20.093],
        'block-country-jp-1' => [32.083, 42.342, 11.131, 20.093],
        'block-country-latam-1' => [43.537, 42.342, 11.131, 20.093],

        'block-country-us-2' => [9.151, 20.053, 11.131, 25.829],
        'block-country-we-2' => [20.614, 19.19, 11.131, 26],
        'block-country-jp-2' => [32.076, 23.631, 11.131, 22.265],
        'block-country-latam-2' => [43.537, 20.614, 11.131, 25.282],

        'block-country-us-3' => [9.331, 10.76, 11.131, 11.951],
        'block-country-we-3' => [20.614, 10.76, 11.131, 11.951],
        'block-country-jp-3' => [32.076, 10.76, 11.131, 15.875],
        'block-country-latam-3' => [43.537, 10.76, 11.131, 12.763],


        'baseline-overall' => [
            'stage1' => 35,
            'stage2' => 46,
            'stage3' => 19
        ],
        'baseline-country-us' => [
            'stage1' => 37,
            'stage2' => 48,
            'stage3' => 15
        ],
        'baseline-country-uk' => [
            'stage1' => 33,
            'stage2' => 51,
            'stage3' => 16
        ],
        'baseline-country-de' => [
            'stage1' => 35,
            'stage2' => 47,
            'stage3' => 18
        ],
        'baseline-country-it' => [
            'stage1' => 31,
            'stage2' => 47,
            'stage3' => 22
        ],
        'baseline-country-sp' => [
            'stage1' => 43,
            'stage2' => 45,
            'stage3' => 12
        ],
        'baseline-country-jp' => [
            'stage1' => 35,
            'stage2' => 40,
            'stage3' => 25
        ],
        'baseline-country-mx' => [
            'stage1' => 45,
            'stage2' => 42,
            'stage3' => 14
        ],
        'baseline-country-ar' => [
            'stage1' => 17,
            'stage2' => 52,
            'stage3' => 31
        ],
        'baseline-country-br' => [
            'stage1' => 24,
            'stage2' => 52,
            'stage3' => 25
        ],
        'baseline-country-cl' => [
            'stage1' => 69,
            'stage2' => 20,
            'stage3' => 11
        ],
        'baseline-country-co' => [
            'stage1' => 63,
            'stage2' => 34,
            'stage3' => 3
        ],
        
        'baseline-100-499' => [
            'stage1' => 64,
            'stage2' => 34,
            'stage3' => 2
        ],
        'baseline-500-999' => [
            'stage1' => 37,
            'stage2' => 55,
            'stage3' => 9
        ],
        'baseline-1000-4999' => [
            'stage1' => 21,
            'stage2' => 46,
            'stage3' => 33
        ],
        'baseline-5000-9999' => [
            'stage1' => 5,
            'stage2' => 33,
            'stage3' => 62
        ],
        'baseline-10000+' => [
            'stage1' => 25,
            'stage2' => 13,
            'stage3' => 63
        ],


        'baseline-100-499' => [
            'stage1' => 64,
            'stage2' => 34,
            'stage3' => 2
        ],
        'baseline-500-999' => [
            'stage1' => 37,
            'stage2' => 55,
            'stage3' => 9
        ],
        'baseline-1000-4999' => [
            'stage1' => 21,
            'stage2' => 46,
            'stage3' => 33
        ],
        'baseline-5000-9999' => [
            'stage1' => 5,
            'stage2' => 33,
            'stage3' => 62
        ],
        'baseline-10000+' => [
            'stage1' => 25,
            'stage2' => 13,
            'stage3' => 63
        ],

        'baseline-banking' => [
            'stage1' => 49,
            'stage2' => 42,
            'stage3' => 8
        ],
        'baseline-insurance' => [
            'stage1' => 32,
            'stage2' => 53,
            'stage3' => 16
        ],
        'baseline-capital-markets' => [
            'stage1' => 32,
            'stage2' => 43,
            'stage3' => 25
        ],
        'baseline-other-fsi' => [
            'stage1' => 20,
            'stage2' => 45,
            'stage3' => 35
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
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 27.7,
                'copy' => 'nttdatadx.stage1txt',
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 27.8,
                'high' => 31.3,
                'copy' => 'nttdatadx.stage2txt',
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 31.4,
                'high' => 50,
                'copy' => 'nttdatadx.stage3txt',
                'tweet' => false,
                'benchmark' => 28,
            ],
        ],
        'tweet' => false,
        'include_answers_in_download_report' => true,
        'notifications' => [
            'inline_report' => false
        ],
        'field_validation' => [
            'fname'=>'required|min:2|max:255',
            'sname'=>'required|min:2|max:255',
            'email'=>'required|email',
            'company'=>'required',
            'employees'=>'required',
            'industry'=>'required',
            'country'=>'required',
            'terms'=>'required'
        ]
    ],
    'dx-adoption' => [
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
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' =>12.4,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.sales-stage-1-txt'
            ],
            'stage2' => [
                'low' => 12.5,
                'high' => 14.4,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.sales-stage-2-txt'
            ],
            'stage3' => [
                'low' => 14.5,
                'high' => 25,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.sales-stage-3-txt'
            ],
        ]
    ],
    'success-in-dx' => [
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
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 9.7,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.marketing-stage-1-txt'
            ],
            'stage2' => [
                'low' => 9.8,
                'high' => 11.8,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.marketing-stage-2-txt'
            ],
            'stage3' => [
                'low' => 11.9,
                'high' => 18,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.marketing-stage-3-txt'
            ],
        ]
    ],
    'connected-financial-services' => [
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
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 5.3,
                'total' => 2,
                'benchmark' => 20,
                'copy' => 'nttdatadx.services-stage-1-txt'
            ],
            'stage2' => [
                'low' => 5.4,
                'high' => 6.4,
                'total' => 3,
                'benchmark' => 34,
                'copy' => 'nttdatadx.services-stage-2-txt'
            ],
            'stage3' => [
                'low' => 6.5,
                'high' => 12,
                'total' => 5,
                'benchmark' => 28,
                'copy' => 'nttdatadx.services-stage-3-txt'
            ],
        ]
    ]
];
