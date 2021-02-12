<?php

return [
    'settings' => [
        'resetpassword_at_first_login' => true,
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
        ],
    ],
    'iviews' => [
        'dellstorage'=>[
        'en'=>[
            'projectId'=>'70230004',
            'url'=>'http://dellstorage.idciview.net',
            'from'=>'2015-03-26',
            'to'=>'2015-03-26',
            'company'=>'DELL',
            'title'=>'Storage',
            'corpcolor'=> [13, 134, 200],
            'ignore_fields'=>['id', 'lang', 'url'],
            'database'=>'tyco',
            'conection'=>'mysqliview',
            'table'=>'dellstorage_registration',
            //'extrasql'=>" WHERE url='main' ",
            'emails'=>[
                [
                    'name'=>'Roark McColgan',
                    'address'=>'roarkmccolgan@gmail.com',
                ],
                [
                    'name'=>'Fung-Yee Tang',
                    'address'=>'ftang@idc.com',
                ],
            ],
        ],
        ], /*,
        'res'=>[
            'en'=>[
                'projectId'=>'73829797',
                'url'=>'http://res.idciview.net',
                'from'=>'2013-07-23',
                'to'=>'2014-10-02',
                'company'=>'Res',
                'title'=>'Virtualization',
                'corpcolor'=> [237,34,36],
                'ignore_fields'=>['id', 'lang'],
                'database'=>'tyco',
                'table'=>'res_registration',
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Phil Odgers',
                        'address'=>'podgers@idc.com'
                        ],
                    [
                        'name'=>'Scott Gemmell',
                        'address'=>'sgemmell@idc.com'
                        ]
                    ]
            ]
        ],
        'vodafone'=>[
            'en'=>[
                'projectId'=>'74808266',
                'url'=>'http://vodafone.idciview.net',
                'from'=>'2013-08-15',
                'to'=>'2014-10-02',
                'company'=>'Vodafone',
                'title'=>'IPVPN',
                'corpcolor'=> [237,34,36],
                'ignore_fields'=>['id', 'lang'],
                'database'=>'tyco',
                'table'=>'vodafone_registration',
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Phil Odgers',
                        'address'=>'podgers@idc.com'
                        ]
                    ]
            ]
        ],
        'vodafonecloud'=>[
            'en'=>[
                'projectId'=>'74808266',
                'url'=>'http://vodafone.idciview.net',
                'from'=>'2013-08-15',
                'to'=>'2014-10-02',
                'company'=>'Vodafone',
                'title'=>'Cloud',
                'corpcolor'=> [237,34,36],
                'ignore_fields'=>['id', 'lang'],
                'database'=>'tyco',
                'table'=>'vodafonecloud_registration',
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Phil Odgers',
                        'address'=>'podgers@idc.com'
                        ],
                    [
                        'name'=>'Kate Slater',
                        'address'=>'Kate.Slater@vodafone.com'
                        ]
                    ]
            ]
        ],
        'hpconverged'=>[
            'en'=>[
                'projectId'=>'77783158',
                'url'=>'http://hpconverged.idciview.net',
                'from'=>'2013-10-13',
                'to'=>'2014-10-02',
                'company'=>'HP',
                'title'=>'Converged Storage',
                'corpcolor'=> [0,150,214],
                'ignore_fields'=>['id', 'lang', 'answers'],
                'database'=>'tyco',
                'table'=>'hpconverged_registration',
                'exclude_leads'=>false,
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Fung-Yee Tang',
                        'address'=>'ftang@idc.com'
                        ]
                    ]
            ]
        ],
        'zebra'=>[
            'en'=>[
                'projectId'=>'82539791',
                'url'=>'http://zebra.idciview.net',
                'from'=>'2014-03-15',
                'to'=>'2014-10-02',
                'company'=>'Zebra',
                'title'=>'Operational Excellence',
                'corpcolor'=> [0,0,0],
                'ignore_fields'=>['id', 'lang'],
                'database'=>'tyco',
                'table'=>'zebra_registration',
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Phil Odgers',
                        'address'=>'podgers@idc.com'
                        ],
                    [
                        'name'=>'Joy Dobbs',
                        'address'=>'JDobbs@zebra.com'
                        ]
                    ]
            ]
        ],
        'symantec'=>[
            'security'=>[
                'projectId'=>'84754927',
                'url'=>'http://symantecsecurity.idciview.net',
                'from'=>'2014-05-01',
                'to'=>'2014-10-02',
                'company'=>'Symantec',
                'title'=>'Security',
                'corpcolor'=> [0,0,0],
                'ignore_fields'=>['id', 'lang'],
                'database'=>'iview_security',
                'sql'=>"SELECT ivx_users.ID AS id, ivx_usermeta.meta_value AS name, ivx_users.user_email AS email, f.VALUE AS company, c.VALUE AS title, k.VALUE AS Country
                    FROM ivx_users
                    LEFT JOIN ivx_usermeta on ivx_usermeta.user_id = ivx_users.ID AND ivx_usermeta.meta_key='first_name'
                    LEFT JOIN  ivx_cimy_uef_data f on f.USER_ID = ivx_users.ID AND f.FIELD_ID = 1
                    LEFT JOIN  ivx_cimy_uef_data c on c.USER_ID = ivx_users.ID AND c.FIELD_ID = 2
                    LEFT JOIN  ivx_cimy_uef_data k on k.USER_ID = ivx_users.ID AND k.FIELD_ID = 3
                    WHERE  ivx_users.user_login !='admin'
                    ORDER BY ivx_users.ID",
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Phil Odgers',
                        'address'=>'podgers@idc.com'
                        ]
                    ]
            ],
            'virtualisation'=>[
                'projectId'=>'84752845',
                'url'=>'symantecvirtualisation.idciview.net',
                'from'=>'2014-05-01',
                'to'=>'2014-10-02',
                'company'=>'Symantec',
                'title'=>'Virtualisation',
                'corpcolor'=> [0,0,0],
                'ignore_fields'=>['id', 'lang'],
                'database'=>'iview',
                'sql'=>"SELECT ivx_users.ID AS id, ivx_usermeta.meta_value AS name, ivx_users.user_email AS email, f.VALUE AS company, c.VALUE AS title, k.VALUE AS Country
                    FROM ivx_users
                    LEFT JOIN ivx_usermeta on ivx_usermeta.user_id = ivx_users.ID AND ivx_usermeta.meta_key='first_name'
                    LEFT JOIN  ivx_cimy_uef_data f on f.USER_ID = ivx_users.ID AND f.FIELD_ID = 1
                    LEFT JOIN  ivx_cimy_uef_data c on c.USER_ID = ivx_users.ID AND c.FIELD_ID = 2
                    LEFT JOIN  ivx_cimy_uef_data k on k.USER_ID = ivx_users.ID AND k.FIELD_ID = 3
                    WHERE  ivx_users.user_login !='admin'
                    ORDER BY ivx_users.ID",
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Phil Odgers',
                        'address'=>'podgers@idc.com'
                        ]
                    ]
            ],
            'unified'=>[
                'projectId'=>'84756802',
                'url'=>'http://symantecunified.idciview.net',
                'from'=>'2014-05-01',
                'to'=>'2014-10-02',
                'company'=>'Symantec',
                'title'=>'Unified Data',
                'corpcolor'=> [0,0,0],
                'ignore_fields'=>['id', 'lang'],
                'database'=>'iview_unified',
                'sql'=>"SELECT ivx_users.ID AS id, ivx_usermeta.meta_value AS name, ivx_users.user_email AS email, f.VALUE AS company, c.VALUE AS title, k.VALUE AS Country
                    FROM ivx_users
                    LEFT JOIN ivx_usermeta on ivx_usermeta.user_id = ivx_users.ID AND ivx_usermeta.meta_key='first_name'
                    LEFT JOIN  ivx_cimy_uef_data f on f.USER_ID = ivx_users.ID AND f.FIELD_ID = 1
                    LEFT JOIN  ivx_cimy_uef_data c on c.USER_ID = ivx_users.ID AND c.FIELD_ID = 2
                    LEFT JOIN  ivx_cimy_uef_data k on k.USER_ID = ivx_users.ID AND k.FIELD_ID = 3
                    WHERE  ivx_users.user_login !='admin'
                    ORDER BY ivx_users.ID",
                'emails'=>[
                    [
                        'name'=>'Roark McColgan',
                        'address'=>'roarkmccolgan@gmail.com'
                        ],
                    [
                        'name'=>'Phil Odgers',
                        'address'=>'podgers@idc.com'
                        ]
                    ]
            ]
        ]*/
    ],
    'regions' => [
        'ap' => [
            'Brunei', 'Cambodia', 'East Timor', 'Indonesia', 'Laos', 'Malaysia', 'Myanmar', 'Philippines', 'Singapore', 'Thailand', 'Vietnam', 'China', 'Hong Kong', 'Macau', 'Japan', 'Mongolia', 'North Korea', 'South Korea', 'Taiwan', 'American Samoa', 'French Polynesia', 'Pitcairn Islands', 'Samoa', 'Tonga', 'Tuvalu', 'Hawaii', 'Wallis and Futuna', 'Australia', 'Christmas Island', 'Cocos Islands', 'Norfolk Island', 'New Zealand', 'Cook Islands', 'Niue', 'Tokelau', 'Fiji', 'New Caledonia', 'Papua New Guinea', 'Solomon Islands', 'Vanuatu', 'Micronesia Federated States', 'Guam', 'Kiribati', 'Marshall Islands', 'Nauru', 'North Mariana', 'Palau', 'Bangladesh', 'Bhutan', 'British Indian Ocean Territory', 'India', 'Maldives', 'Nepal', 'Pakistan', 'Sri Lanka', 'Wake Island',
        ],
        'na' => [
            'Anguilla', 'Antigua', 'Aruba', 'The Bahamas', 'Barbados', 'Belize', 'Bermuda', 'Bonaire', 'British Virgin Islands', 'Canada', 'Cayman Islands', 'France	Clipperton Island', 'Costa Rica', 'Cuba', 'Curaçao', 'Dominica', 'Dominican Republic', 'El Salvador', 'Greenland', 'Grenada', 'Guadeloupe', 'Guatemala', 'Haiti', 'Honduras', 'Jamaica', 'Martinique', 'Mexico', 'Montserrat', 'Nicaragua', 'Panama', 'Puerto Rico', 'Saba', 'Saint Barthélemy', 'Saint Kitts and Nevis', 'Saint Lucia', 'Collectivity of Saint Martin', 'Saint Pierre And Miquelon', 'Saint Vincent and the Grenadines', 'Sint Eustatius', 'Sint Maarten', 'Trinidad and Tobago', 'Turks and Caicos Islands', 'United States', 'Virgin Islands US',
        ],
        'we' => [
            'Andorra', 'Austria', 'Belgium', 'Denmark', 'Finland', 'France', 'Germany', 'Greece', 'Iceland', 'Ireland', 'Italy', 'Liechtenstein', 'Luxembourg', 'Malta', 'Monaco', 'Netherlands', 'Norway', 'Portugal', 'San Marino', 'Spain', 'Sweden', 'Switzerland', 'Turkey', 'United Kingdom',
        ],

    ],
    'queries' => [
            'total_results'=>[
                'metrics'       => 'ga:sessions,ga:newUsers,ga:users,ga:bounceRate,ga:avgSessionDuration,ga:pageviews,ga:pageviewsPerSession,ga:percentNewSessions',
                'dimensions'    => false,
                'sort'          => false,
                'max-results'   => false,
                'filters'       => false,
            ],
            'daily_results'=>[
                'metrics'       => 'ga:users',
                'dimensions'    => 'ga:date',
                'sort'          => false,
                'max-results'   => false,
                'filters'       => false,
            ],
            'country_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:country',
                'sort'          => '-ga:sessions',
                'max-results'   => 10,
                'filters'       => 'ga:country!=(not set)',
            ],
            'device_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:deviceCategory',
                'sort'          => false,
                'max-results'   => 365,
                'filters'       => false,
            ],
            'complete_results'=>[
                'metrics'       => 'ga:users',
                'dimensions'    => 'ga:date',
                'sort'          => false,
                'max-results'   => false,
                'filters'       => 'ga:pagePath=@/quiz/complete,ga:pagePath=@/thankyou',
            ],
            'utm_views'=>[
                'metrics'       => 'ga:users',
                'dimensions'    => 'ga:pagePath',
                'sort'          => false,
                'max-results'   => false,
                'filters'       => 'ga:pagePath=@?utm',
            ],
            'utm_completes'=>[
                'metrics'       => 'ga:users',
                'dimensions'    => 'ga:landingPagePath,ga:exitPagePath',
                'sort'          => false,
                'max-results'   => false,
                'filters'       => 'ga:landingPagePath=@?utm;ga:exitPagePath=@/quiz/complete,ga:exitPagePath=@/thankyou',
            ]/*,
            'mobile_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:mobileDeviceBranding, ga:mobileDeviceModel',
                'sort'          => '-ga:sessions',
                'max-results'   => 5,
                'filters'       => 'ga:mobileDeviceBranding!=(not set)',
            ],
            'broswer_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:browser',
                'sort'          => '-ga:sessions',
                'max-results'   => 5,
                'filters'       => 'ga:Browser!=(not set)',
            ],
            'language_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:language',
                'sort'          => '-ga:sessions',
                'max-results'   => 5,
                'filters'       => 'ga:language!=(not set)',
            ]*/,
            'referrers_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:source',
                'sort'          => '-ga:sessions',
                'max-results'   => 10,
                'filters'       => 'ga:source!=devbox', 'ga:source!=localhost',
            ],
            'event_results'=>[
                'metrics'       => 'ga:sessions',
                'dimensions'    => 'ga:eventAction',
                'sort'          => '-ga:sessions',
                'max-results'   => false,
                'filters'       => false,
            ],
            'dropoff_results'=>[
                'metrics'       => 'ga:users,ga:percentNewSessions',
                'dimensions'    => 'ga:exitPagePath',
                'sort'          => '-ga:users',
                'max-results'   => 10,
                'filters'       => 'ga:exitPagePath!=/quiz/complete',
            ],
        ],
];
