<?php
//IBM
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
        'report-settings' => [
            'header'=>true,
            'footer'=>true,
            'graph'=>false,
            'pb'=>false,
            'color'=>'#FDD000',
            'basecolor'=>'#004386',
            'pageimage'=>false,
            'margin-top'=>31,
            'header-spacing'=>10
        ],
        'types' => [
            'stage1' => [
                'low' => 0,
                'high' => 120,
                'tweet' => false,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 120.1,
                'high' => 225,
                'tweet' => false,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 225.1,
                'high' => 320,
                'tweet' => false,
                'benchmark' => 28,
            ]
        ],
        'tweet' => false,
        'report_recipients' => [
            'roarkmccolgan@gmail.com'
        ],
        // 'mrs' => [
        //     'url' => 'https://connect-preprod.ibm.com/MRSaaS/cloud/preview/captureTransaction',
        //     'method' => 'PUT',
        //     'fields' => [
        //         'channel_name' => [
        //             'type' => 'hidden',
        //             'value' => 'Digital Inbound',
        //         ],
        //         'interaction_type' => [
        //             'type' => 'hidden',
        //             'value' => 'WEBRESP',
        //         ],
        //         'channel_type' => [
        //             'type' => 'hidden',
        //             'value' => 'Landing Page',
        //         ],
        //         'user_identification' => [
        //             'type' => 'array',
        //             'value' => [
        //                 'user_transaction_date' => [
        //                     'type' => 'hidden',
        //                     'value' => 'datetime',
        //                 ]
        //             ],
        //         ],
        //         'current_launch_context' => [
        //             'type' => 'array',
        //             'value' => [
        //                 'locale' => [
        //                     'type' => 'hidden',
        //                     'value' => 'en_UK',
        //                 ],
        //                 'application_id' => [
        //                     'type' => 'hidden',
        //                     'value' => 'C-S08B897@nomail.relay.ibm.com',
        //                 ],
        //             ],
        //         ],
        //         'campaign_data' => [
        //             'type' => 'array',
        //             'value' => [
        //                 'asset_id' => [
        //                     'type' => 'hidden',
        //                     'value' => 'OV77998',
        //                 ],
        //                 'vcpi' => [
        //                     'type' => 'hidden',
        //                     'value' => 'WEBRESP_IDC-_-000039UZ-_-INO_INO -_-10013943_IDC_ASSSESSMENT_Tool_-_-_-_-_Technology-Transformation-Multi-Cloud-Services-BU-GTS_-_ov77998',
        //                 ],
        //                 'offer_code' => [
        //                     'type' => 'hidden',
        //                     'value' => '10013943',
        //                 ],
        //                 'campaign_code' => [
        //                     'type' => 'hidden',
        //                     'value' => '000039UZ',
        //                 ],
        //                 'country_spec' => [
        //                     'type' => 'hidden',
        //                     'value' => '',
        //                 ],
        //                 'source_code' => [
        //                     'type' => 'hidden',
        //                     'value' => 'mrsaas-nordicsidc',
        //                 ],
        //                 'mailing_code' => [
        //                     'type' => 'hidden',
        //                     'value' => '',
        //                 ],
        //                 'page_view_id' => [
        //                     'type' => 'hidden',
        //                     'value' => '',
        //                 ],
        //                 'utm_medium' => [
        //                     'type' => 'hidden',
        //                     'value' => 'Landing Page',
        //                 ],
        //                 'utm_source' => [
        //                     'type' => 'hidden',
        //                     'value' => 'IDC',
        //                 ],
        //                 'utm_content' => [
        //                     'type' => 'hidden',
        //                     'value' => '000039UZ',
        //                 ],
        //                 'utm_term' => [
        //                     'type' => 'hidden',
        //                     'value' => '10013943',
        //                 ],
        //                 'utm_id' => [
        //                     'type' => 'hidden',
        //                     'value' => 'IDC_ASSSESSMENT_Tool',
        //                 ],
        //                 'creative_id' => [
        //                     'type' => 'hidden',
        //                     'value' => 'INO',
        //                 ],
        //                 'keyword_id' => [
        //                     'type' => 'hidden',
        //                     'value' => 'INO',
        //                 ],
        //             ],
        //         ],
        //         'question_answers' => [
        //             'type' => 'array',
        //             'value' => [
        //                 [
        //                     'question_type' => 'Text',
        //                     'question_name' => 'firstname',
        //                     'answer' => 'fname',
        //                 ],
        //                 [
        //                     'question_type' => 'Text',
        //                     'question_name' => 'lastname',
        //                     'answer' => 'sname',
        //                 ],
        //                 [
        //                     'question_type' => 'Text',
        //                     'question_name' => 'email',
        //                     'answer' => 'email',
        //                 ],
        //                 [
        //                     'question_type' => 'Text',
        //                     'question_name' => 'jobTitle',
        //                     'answer' => 'title',
        //                 ],
        //                 [
        //                     'question_type' => 'Text',
        //                     'question_name' => 'phone',
        //                     'answer' => 'phone',
        //                 ],
        //                 [
        //                     'question_type' => 'Text',
        //                     'question_name' => 'company',
        //                     'answer' => 'company',
        //                 ],
        //                 [
        //                     'question_type' => 'Select',
        //                     'question_name' => 'country',
        //                     'answer' => 'country',
        //                 ],
        //                 [
        //                     'question_type' => 'Select',
        //                     'question_name' => 'state',
        //                     'answer' => 'state',
        //                 ],
        //                 [
        //                     'question_type' => 'TEXT',
        //                     'question_name' => 'DOC_URL',
        //                     'answer' => 'report',
        //                 ]
        //             ],                
        //         ],
        //         'privacy' => [
        //             'type' => 'object',
        //             'value' => [
        //                 'overall_delivery_methods' => null,
        //                 'preferences' => [
        //                     'pref_asset_id' => 'mo82085',
        //                     'preference_code' => 'IBM',
        //                 ],
        //                 'specific_delivery_methods' => [
        //                     'email' => 'extra.marketing_email',
        //                     'phone' => 'extra.marketing_phone',
        //                 ]
        //             ]
        //         ]
        //     ]
        // ],
        'default_fields' =>[
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
                'required' => true,
                'col' => 6,
                'extra' => true,
            ],
            'phone' => [
                'type' => 'text',
                'default' => '',
                'options' => null,
                'error' => 'errorPhone',
                'required' => true,
                'col' => 6,
            ],
            'country' => [
                'type' => 'select',
                'default' => '',
                'options' => [
                    'DK' => 'Denmark',
                    'NO' => 'Norway',
                    'SE' => 'Sweden',
                    'FI' => 'Finland',
                    'AF' => 'Afghanistan',
                    'AX' => 'Åland Islands',
                    'AL' => 'Albania',
                    'DZ' => 'Algeria',
                    'AS' => 'American Samoa',
                    'AD' => 'Andorra',
                    'AO' => 'Angola',
                    'AI' => 'Anguilla',
                    'AQ' => 'Antarctica',
                    'AG' => 'Antigua and Barbuda',
                    'AR' => 'Argentina',
                    'AM' => 'Armenia',
                    'AW' => 'Aruba',
                    'AU' => 'Australia',
                    'AT' => 'Austria',
                    'AZ' => 'Azerbaijan',
                    'BS' => 'Bahamas',
                    'BH' => 'Bahrain',
                    'BD' => 'Bangladesh',
                    'BB' => 'Barbados',
                    'BY' => 'Belarus',
                    'BE' => 'Belgium',
                    'BZ' => 'Belize',
                    'BJ' => 'Benin',
                    'BM' => 'Bermuda',
                    'BT' => 'Bhutan',
                    'BO' => 'Bolivia, Plurinational State of',
                    'BQ' => 'Bonaire, Sint Eustatius and Saba',
                    'BA' => 'Bosnia and Herzegovina',
                    'BW' => 'Botswana',
                    'BV' => 'Bouvet Island',
                    'BR' => 'Brazil',
                    'IO' => 'British Indian Ocean Territory',
                    'BN' => 'Brunei Darussalam',
                    'BG' => 'Bulgaria',
                    'BF' => 'Burkina Faso',
                    'BI' => 'Burundi',
                    'KH' => 'Cambodia',
                    'CM' => 'Cameroon',
                    'CA' => 'Canada',
                    'CV' => 'Cape Verde',
                    'KY' => 'Cayman Islands',
                    'CF' => 'Central African Republic',
                    'TD' => 'Chad',
                    'CL' => 'Chile',
                    'CN' => 'China',
                    'CX' => 'Christmas Island',
                    'CC' => 'Cocos (Keeling) Islands',
                    'CO' => 'Colombia',
                    'KM' => 'Comoros',
                    'CG' => 'Congo',
                    'CD' => 'Congo, the Democratic Republic of the',
                    'CK' => 'Cook Islands',
                    'CR' => 'Costa Rica',
                    'CI' => 'Côte d\'Ivoire',
                    'HR' => 'Croatia',
                    'CU' => 'Cuba',
                    'CW' => 'Curaçao',
                    'CY' => 'Cyprus',
                    'CZ' => 'Czech Republic',
                    'DJ' => 'Djibouti',
                    'DM' => 'Dominica',
                    'DO' => 'Dominican Republic',
                    'EC' => 'Ecuador',
                    'EG' => 'Egypt',
                    'SV' => 'El Salvador',
                    'GQ' => 'Equatorial Guinea',
                    'ER' => 'Eritrea',
                    'EE' => 'Estonia',
                    'ET' => 'Ethiopia',
                    'FK' => 'Falkland Islands (Malvinas)',
                    'FO' => 'Faroe Islands',
                    'FJ' => 'Fiji',
                    'FR' => 'France',
                    'GF' => 'French Guiana',
                    'PF' => 'French Polynesia',
                    'TF' => 'French Southern Territories',
                    'GA' => 'Gabon',
                    'GM' => 'Gambia',
                    'GE' => 'Georgia',
                    'DE' => 'Germany',
                    'GH' => 'Ghana',
                    'GI' => 'Gibraltar',
                    'GR' => 'Greece',
                    'GL' => 'Greenland',
                    'GD' => 'Grenada',
                    'GP' => 'Guadeloupe',
                    'GU' => 'Guam',
                    'GT' => 'Guatemala',
                    'GG' => 'Guernsey',
                    'GN' => 'Guinea',
                    'GW' => 'Guinea-Bissau',
                    'GY' => 'Guyana',
                    'HT' => 'Haiti',
                    'HM' => 'Heard Island and McDonald Islands',
                    'VA' => 'Holy See (Vatican City State)',
                    'HN' => 'Honduras',
                    'HK' => 'Hong Kong',
                    'HU' => 'Hungary',
                    'IS' => 'Iceland',
                    'IN' => 'India',
                    'ID' => 'Indonesia',
                    'IR' => 'Iran, Islamic Republic of',
                    'IQ' => 'Iraq',
                    'IE' => 'Ireland',
                    'IM' => 'Isle of Man',
                    'IL' => 'Israel',
                    'IT' => 'Italy',
                    'JM' => 'Jamaica',
                    'JP' => 'Japan',
                    'JE' => 'Jersey',
                    'JO' => 'Jordan',
                    'KZ' => 'Kazakhstan',
                    'KE' => 'Kenya',
                    'KI' => 'Kiribati',
                    'KP' => 'Korea, Democratic People\'s Republic of',
                    'KR' => 'Korea, Republic of',
                    'KW' => 'Kuwait',
                    'KG' => 'Kyrgyzstan',
                    'LA' => 'Lao People\'s Democratic Republic',
                    'LV' => 'Latvia',
                    'LB' => 'Lebanon',
                    'LS' => 'Lesotho',
                    'LR' => 'Liberia',
                    'LY' => 'Libya',
                    'LI' => 'Liechtenstein',
                    'LT' => 'Lithuania',
                    'LU' => 'Luxembourg',
                    'MO' => 'Macao',
                    'MK' => 'Macedonia, the former Yugoslav Republic of',
                    'MG' => 'Madagascar',
                    'MW' => 'Malawi',
                    'MY' => 'Malaysia',
                    'MV' => 'Maldives',
                    'ML' => 'Mali',
                    'MT' => 'Malta',
                    'MH' => 'Marshall Islands',
                    'MQ' => 'Martinique',
                    'MR' => 'Mauritania',
                    'MU' => 'Mauritius',
                    'YT' => 'Mayotte',
                    'MX' => 'Mexico',
                    'FM' => 'Micronesia, Federated States of',
                    'MD' => 'Moldova, Republic of',
                    'MC' => 'Monaco',
                    'MN' => 'Mongolia',
                    'ME' => 'Montenegro',
                    'MS' => 'Montserrat',
                    'MA' => 'Morocco',
                    'MZ' => 'Mozambique',
                    'MM' => 'Myanmar',
                    'NA' => 'Namibia',
                    'NR' => 'Nauru',
                    'NP' => 'Nepal',
                    'NL' => 'Netherlands',
                    'NC' => 'New Caledonia',
                    'NZ' => 'New Zealand',
                    'NI' => 'Nicaragua',
                    'NE' => 'Niger',
                    'NG' => 'Nigeria',
                    'NU' => 'Niue',
                    'NF' => 'Norfolk Island',
                    'MP' => 'Northern Mariana Islands',
                    'OM' => 'Oman',
                    'PK' => 'Pakistan',
                    'PW' => 'Palau',
                    'PS' => 'Palestinian Territory, Occupied',
                    'PA' => 'Panama',
                    'PG' => 'Papua New Guinea',
                    'PY' => 'Paraguay',
                    'PE' => 'Peru',
                    'PH' => 'Philippines',
                    'PN' => 'Pitcairn',
                    'PL' => 'Poland',
                    'PT' => 'Portugal',
                    'PR' => 'Puerto Rico',
                    'QA' => 'Qatar',
                    'RE' => 'Réunion',
                    'RO' => 'Romania',
                    'RU' => 'Russian Federation',
                    'RW' => 'Rwanda',
                    'BL' => 'Saint Barthélemy',
                    'SH' => 'Saint Helena, Ascension and Tristan da Cunha',
                    'KN' => 'Saint Kitts and Nevis',
                    'LC' => 'Saint Lucia',
                    'MF' => 'Saint Martin (French part)',
                    'PM' => 'Saint Pierre and Miquelon',
                    'VC' => 'Saint Vincent and the Grenadines',
                    'WS' => 'Samoa',
                    'SM' => 'San Marino',
                    'ST' => 'Sao Tome and Principe',
                    'SA' => 'Saudi Arabia',
                    'SN' => 'Senegal',
                    'RS' => 'Serbia',
                    'SC' => 'Seychelles',
                    'SL' => 'Sierra Leone',
                    'SG' => 'Singapore',
                    'SX' => 'Sint Maarten (Dutch part)',
                    'SK' => 'Slovakia',
                    'SI' => 'Slovenia',
                    'SB' => 'Solomon Islands',
                    'SO' => 'Somalia',
                    'ZA' => 'South Africa',
                    'GS' => 'South Georgia and the South Sandwich Islands',
                    'SS' => 'South Sudan',
                    'ES' => 'Spain',
                    'LK' => 'Sri Lanka',
                    'SD' => 'Sudan',
                    'SR' => 'Suriname',
                    'SJ' => 'Svalbard and Jan Mayen',
                    'SZ' => 'Swaziland',
                    'CH' => 'Switzerland',
                    'SY' => 'Syrian Arab Republic',
                    'TW' => 'Taiwan, Province of China',
                    'TJ' => 'Tajikistan',
                    'TZ' => 'Tanzania, United Republic of',
                    'TH' => 'Thailand',
                    'TL' => 'Timor-Leste',
                    'TG' => 'Togo',
                    'TK' => 'Tokelau',
                    'TO' => 'Tonga',
                    'TT' => 'Trinidad and Tobago',
                    'TN' => 'Tunisia',
                    'TR' => 'Turkey',
                    'TM' => 'Turkmenistan',
                    'TC' => 'Turks and Caicos Islands',
                    'TV' => 'Tuvalu',
                    'UG' => 'Uganda',
                    'UA' => 'Ukraine',
                    'AE' => 'United Arab Emirates',
                    'GB' => 'United Kingdom',
                    'US' => 'United States',
                    'UM' => 'United States Minor Outlying Islands',
                    'UY' => 'Uruguay',
                    'UZ' => 'Uzbekistan',
                    'VU' => 'Vanuatu',
                    'VE' => 'Venezuela, Bolivarian Republic of',
                    'VN' => 'Viet Nam',
                    'VG' => 'Virgin Islands, British',
                    'VI' => 'Virgin Islands, U.S.',
                    'WF' => 'Wallis and Futuna',
                    'EH' => 'Western Sahara',
                    'YE' => 'Yemen',
                    'ZM' => 'Zambia',
                    'ZW' => 'Zimbabwe',
                ],
                'error' => 'errorCountry',
                'required' => true,
                'col' => 12,
            ]
        ],
    ],
    'move' => [
        'baseline' => 8.90,
        'baseline' => 9.83,

        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

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
                'high' => 40,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 40.1,
                'high' => 75,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 75.1,
                'high' => 120,
                'total' => 5,
                'benchmark' => 28,
            ]
        ],
        'normalise_using_screeners' => [
            'calc' => "(\$result['general']['score'] / 3) + \$result[\$key]['score']"
        ]
    ],
    'build' => [
        'baseline' => 9.28,
        'baseline' => 10.93,
        
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

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
                'high' => 40,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 40.1,
                'high' => 75,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 75.1,
                'high' => 120,
                'total' => 5,
                'benchmark' => 28,
            ]
        ],
        'normalise_using_screeners' => [
            'calc' => "(\$result['general']['score'] / 3) + \$result[\$key]['score']"
        ]
    ],
    'manage' => [
        'baseline' => 9.42,
        'baseline' => 11.4,
        'baseline_stage1' => 2.5,
        'baseline_stage2' => 7.5,
        'baseline_stage3' => 13.5,

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
                'high' => 40,
                'total' => 2,
                'benchmark' => 20,
            ],
            'stage2' => [
                'low' => 40.1,
                'high' => 75,
                'total' => 3,
                'benchmark' => 34,
            ],
            'stage3' => [
                'low' => 75.1,
                'high' => 120,
                'total' => 5,
                'benchmark' => 28,
            ]
        ],
        'normalise_using_screeners' => [
            'calc' => "(\$result['general']['score'] / 3) + \$result[\$key]['score']"
        ]
    ]
];
