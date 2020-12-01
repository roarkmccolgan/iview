<?php
//REDHAT
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
        'mrs' => [
            'auth' => [
                'username' => 'C-S0UP897@nomail.relay.ibm.com',
                'password' => 'NewPass37xxIDC!',
            ],
            'url' => 'https://connect.ibm.com/MRSaaS/cloud/prod/captureTransaction',
            'method' => 'POST',
            'fields' => [
                'channel_name' => [
                    'type' => 'hidden',
                    'value' => 'Digital Inbound',
                ],
                'interaction_type' => [
                    'type' => 'hidden',
                    'value' => 'WEBRESP',
                ],
                'channel_type' => [
                    'type' => 'hidden',
                    'value' => 'Landing Page',
                ],
                'user_identification' => [
                    'type' => 'array',
                    'value' => [
                        'user_transaction_date' => [
                            'type' => 'hidden',
                            'value' => 'datetime',
                        ]
                    ],
                ],
                'current_launch_context' => [
                    'type' => 'array',
                    'value' => [
                        'locale' => [
                            'type' => 'hidden',
                            'value' => 'en_UK',
                        ],
                        'application_id' => [
                            'type' => 'hidden',
                            'value' => 'C-S0UP897@nomail.relay.ibm.com',
                        ],
                    ],
                ],
                'campaign_data' => [
                    'type' => 'array',
                    'value' => [
                        'asset_id' => [
                            'type' => 'hidden',
                            'value' => 'ov77998',
                        ],
                        'vcpi' => [
                            'type' => 'hidden',
                            'value' => 'WEBRESP_IDC-_-000039UZ-_-INO_INO -_-10013943_IDC_ASSSESSMENT_Tool_-_-_-_-_Technology-Transformation-Multi-Cloud-Services-BU-GTS_-_ov77998',
                        ],
                        'offer_code' => [
                            'type' => 'hidden',
                            'value' => '10013943',
                        ],
                        'campaign_code' => [
                            'type' => 'hidden',
                            'value' => '000039UZ',
                        ],
                        'country_spec' => [
                            'type' => 'hidden',
                            'value' => '',
                        ],
                        'source_code' => [
                            'type' => 'hidden',
                            'value' => 'mrsaas-nordicsidc',
                        ],
                        'mailing_code' => [
                            'type' => 'hidden',
                            'value' => '',
                        ],
                        'page_view_id' => [
                            'type' => 'hidden',
                            'value' => '',
                        ],
                        'utm_medium' => [
                            'type' => 'hidden',
                            'value' => 'Landing Page',
                        ],
                        'utm_source' => [
                            'type' => 'hidden',
                            'value' => 'IDC',
                        ],
                        'utm_content' => [
                            'type' => 'hidden',
                            'value' => '000039UZ',
                        ],
                        'utm_term' => [
                            'type' => 'hidden',
                            'value' => '10013943',
                        ],
                        'utm_id' => [
                            'type' => 'hidden',
                            'value' => 'IDC_ASSSESSMENT_Tool',
                        ],
                        'creative_id' => [
                            'type' => 'hidden',
                            'value' => 'INO',
                        ],
                        'keyword_id' => [
                            'type' => 'hidden',
                            'value' => 'INO',
                        ],
                    ],
                ],
                'question_answers' => [
                    'type' => 'array',
                    'value' => [
                        [
                            'question_type' => 'Text',
                            'question_name' => 'firstname',
                            'answer' => 'fname',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'lastname',
                            'answer' => 'sname',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'email',
                            'answer' => 'email',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'jobTitle',
                            'answer' => 'title',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'phone',
                            'answer' => 'phone',
                        ],
                        [
                            'question_type' => 'Text',
                            'question_name' => 'company',
                            'answer' => 'company',
                        ],
                        [
                            'question_type' => 'Select',
                            'question_name' => 'country',
                            'answer' => 'country',
                        ],
                        [
                            'question_type' => 'Select',
                            'question_name' => 'state',
                            'answer' => 'state',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'DOC_URL',
                            'answer' => 'report',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Overall',
                            'answer' => 'overall',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Move',
                            'answer' => 'move',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Build',
                            'answer' => 'build',
                        ],
                        [
                            'question_type' => 'TEXT',
                            'question_name' => 'Q_Manage',
                            'answer' => 'manage',
                        ]
                    ],                
                ],
                'privacy' => [
                    'type' => 'object',
                    'value' => [
                        'overall_delivery_methods' => null,
                        'preferences' => [
                            [
                                'pref_asset_id' => 'mo82085',
                                'preference_code' => 'IBM',                                
                                'specific_delivery_methods' => [
                                    'email' => 'extra.marketing_email',
                                    'phone' => 'extra.marketing_phone',
                                ]
                            ]
                        ],
                    ]
                ]
            ]
        ],
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
            ]
        ],
        'pdf_monkey_template' => 'B46BEA66-9178-40CD-AE67-57519B86D0A6'
    ],
    'automate' => [
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
    'hybrid' => [
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
    'native' => [
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
