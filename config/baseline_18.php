<?php
//SNOW
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
				'low' => 15,
				'high' => 29,
				'total' => 2,
				'benchmark' => 20,
			],
			'stage2' => [
				'low' => 29.1,
				'high' => 41,
				'total' => 3,
				'benchmark' => 34,
			],
			'stage3' => [
				'low' => 41.1,
				'high' => 49,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage4' => [
				'low' => 49.1,
				'high' => 61,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage5' => [
				'low' => 61.1,
				'high' => 75,
				'total' => 5,
				'benchmark' => 28,
			]
		],
		'tweet' => false,
		'report_recipients' => [
			'roarkmccolgan@gmail.com'
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
					'AF' => 'Afghanistan',
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
					'BO' => 'Bolivia',
					'BA' => 'Bosnia-Herzegovina',
					'BW' => 'Botswana',
					'BR' => 'Brazil',
					'IO' => 'British Indian Ocean Territory',
					'VG' => 'British Virgin Islands',
					'BN' => 'Brunei',
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
					'CC' => 'Cocos Islands',
					'CO' => 'Colombia',
					'KM' => 'Comoros',
					'CG' => 'Congo',
					'CK' => 'Cook Islands',
					'CR' => 'Costa Rica',
					'CI' => 'Cote d\'Ivoire',
					'HR' => 'Croatia',
					'CW' => 'Curacao',
					'CY' => 'Cyprus',
					'CZ' => 'Czech Republic',
					'CD' => 'Democratic Republic of the Congo',
					'DK' => 'Denmark',
					'DJ' => 'Djibouti',
					'DM' => 'Dominica',
					'DO' => 'Dominican Republic',
					'TL' => 'East Timor',
					'EC' => 'Ecuador',
					'EG' => 'Egypt',
					'SV' => 'El Salvador',
					'GQ' => 'Equatorial Guinea',
					'ER' => 'Eritrea',
					'EE' => 'Estonia',
					'ET' => 'Ethiopia',
					'FK' => 'Falkland Islands',
					'FO' => 'Faroe Islands',
					'FM' => 'Federated States Of Micronesia',
					'FJ' => 'Fiji',
					'FI' => 'Finland',
					'FR' => 'France',
					'GF' => 'French Guiana',
					'PF' => 'French Polynesia',
					'GA' => 'Gabon',
					'GM' => 'Gambia',
					'GE' => 'Georgia',
					'DE' => 'Germany',
					'GH' => 'Ghana',
					'GI' => 'Gibraltar',
					'GR' => 'Greece',
					'GL' => 'Greenland',
					'GD' => 'Grenada',
					'GU' => 'Guam',
					'GT' => 'Guatemala',
					'GG' => 'Guernsey',
					'GN' => 'Guinea',
					'GW' => 'Guinea-Bissau',
					'GY' => 'Guyana',
					'HT' => 'Haiti',
					'HN' => 'Honduras',
					'HK' => 'Hong Kong',
					'HU' => 'Hungary',
					'IS' => 'Iceland',
					'IN' => 'India',
					'ID' => 'Indonesia',
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
					'XK' => 'Kosovo',
					'KW' => 'Kuwait',
					'KG' => 'Kyrgyzstan',
					'LA' => 'Laos',
					'LV' => 'Latvia',
					'LB' => 'Lebanon',
					'LS' => 'Lesotho',
					'LR' => 'Liberia',
					'LY' => 'Libya',
					'LI' => 'Liechtenstein',
					'LT' => 'Lithuania',
					'LU' => 'Luxembourg',
					'MO' => 'Macau',
					'MK' => 'Macedonia',
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
					'MD' => 'Moldova',
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
					'AN' => 'Netherlands Antilles',
					'NC' => 'New Caledonia',
					'NZ' => 'New Zealand',
					'NI' => 'Nicaragua',
					'NE' => 'Niger',
					'NG' => 'Nigeria',
					'NU' => 'Niue',
					'MP' => 'Northern Mariana Islands',
					'NO' => 'Norway',
					'OM' => 'Oman',
					'PK' => 'Pakistan',
					'PW' => 'Palau',
					'PS' => 'Palestine',
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
					'CG' => 'Republic of the Congo',
					'RE' => 'Reunion',
					'RO' => 'Romania',
					'RU' => 'Russia',
					'RW' => 'Rwanda',
					'BL' => 'Saint Barthelemy',
					'SH' => 'Saint Helena',
					'MF' => 'Saint Martin',
					'PM' => 'Saint Pierre and Miquelon',
					'VC' => 'Saint Vincent and the Grenadines',
					'WS' => 'Samoa',
					'SM' => 'San Marino',
					'ST' => 'Sao Tome and PrÃ­ncipe',
					'SA' => 'Saudi Arabia',
					'SN' => 'Senegal',
					'RS' => 'Serbia',
					'SC' => 'Seychelles',
					'SL' => 'Sierra Leone',
					'SG' => 'Singapore',
					'SX' => 'Sint Maarten',
					'SK' => 'Slovakia',
					'SI' => 'Slovenia',
					'SB' => 'Solomon Islands',
					'SO' => 'Somalia',
					'ZA' => 'South Africa',
					'KR' => 'South Korea',
					'SS' => 'South Sudan',
					'ES' => 'Spain',
					'LK' => 'Sri Lanka',
					'KN' => 'St. Kitts and Nevis',
					'LC' => 'St. Lucia',
					'SD' => 'Sudan',
					'SR' => 'Suriname',
					'SJ' => 'Svalbard and Jan Mayen',
					'SZ' => 'Swaziland',
					'SE' => 'Sweden',
					'CH' => 'Switzerland',
					'TW' => 'Taiwan',
					'TJ' => 'Tajikistan',
					'TZ' => 'Tanzania',
					'TH' => 'Thailand',
					'NL' => 'The Netherlands',
					'TG' => 'Togo',
					'TK' => 'Tokelau',
					'TO' => 'Tonga',
					'TT' => 'Trinidad and Tobago',
					'TU' => 'Tunisia',
					'TR' => 'Turkey',
					'TM' => 'Turkmenistan',
					'TC' => 'Turks and Caicos Islands',
					'TV' => 'Tuvalu',
					'UG' => 'Uganda',
					'UA' => 'Ukraine',
					'AE' => 'United Arab Emirates',
					'GB' => 'United Kingdom',
					'US' => 'United States',
					'UY' => 'Uruguay',
					'UZ' => 'Uzbekistan',
					'VU' => 'Vanuatu',
					'VA' => 'Vatican',
					'VE' => 'Venezuela',
					'VN' => 'Vietnam',
					'VI' => 'Virgin Islands (USA)',
					'WF' => 'Wallis and Futuna',
					'EH' => 'Western Sahara',
					'YE' => 'Yemen',
					'ZM' => 'Zambia',
					'ZW' => 'Zimbabwe'
				],
				'error' => 'errorCountry',
				'required' => true,
				'col' => 12,
			],
			'interested_in' => [
				'type' => 'select',
				'default' => '',
				'options' => [
					'Application Development' => 'Application Development',
					'Cloud Management' => 'Cloud Management',
					'Customer Service' => 'Customer Service',
					'DevOps' => 'DevOps',
					'Finance/Accounting' => 'Finance/Accounting',
					'Governance, Risk, and Compliance' => 'Governance, Risk, and Compliance',
					'HR Service Delivery' => 'HR Service Delivery',
					'IT Business Management' => 'IT Business Management',
					'IT Operations Management' => 'IT Operations Management',
					'IT Project Portfolio Management' => 'IT Project Portfolio Management',
					'IT Asset Management' => 'IT Asset Management',
					'IT Service Management' => 'IT Service Management',
					'Security' => 'Security',
					'Software Asset Management' => 'Software Asset Management',
					'Other' => 'Other',
				],
				'error' => 'snow.leadgen.errorInterestedIn',
				'required' => true,
				'col' => 12,
			],
			'industry' => [
				'type' => 'select',
				'default' => '',
				'options' => [
					'banking' => 'Banking',
					'insurance' => 'Insurance',
					'government' => 'Government',
					'healthcare' => 'Healthcare',
					'process_manufacturing' => 'Process manufacturing',
					'discrete_manufacturing' => 'Discrete manufacturing',
					'telecommunications' => 'Telecommunications',
					'media' => 'Media',
					'other' => 'Other',
				],
				'error' => 'snow.leadgen.errorIndustry',
				'required' => true,
				'col' => 12,
			],
			'state' => [
				'US' => [
					'AK' => 'Alaska',
					'AL' => 'Alabama',
					'AR' => 'Arkansas',
					'AZ' => 'Arizona',
					'CA' => 'California',
					'CO' => 'Colorado',
					'CT' => 'Connecticut',
					'DC' => 'District Of Columbia',
					'DE' => 'Delaware',
					'FL' => 'Florida',
					'GA' => 'Georgia',
					'HI' => 'Hawaii',
					'IA' => 'Iowa',
					'ID' => 'Idaho',
					'IL' => 'Illinois',
					'IN' => 'Indiana',
					'KS' => 'Kansas',
					'KY' => 'Kentucky',
					'LA' => 'Louisiana',
					'MA' => 'Massachusetts',
					'MD' => 'Maryland',
					'ME' => 'Maine',
					'MI' => 'Michigan',
					'MN' => 'Minnesota',
					'MO' => 'Missouri',
					'MS' => 'Mississippi',
					'MT' => 'Montana',
					'NC' => 'North Carolina',
					'ND' => 'North Dakota',
					'NE' => 'Nebraska',
					'NH' => 'New Hampshire',
					'NJ' => 'New Jersey',
					'NM' => 'New Mexico',
					'NV' => 'Nevada',
					'NY' => 'New York',
					'OH' => 'Ohio',
					'OK' => 'Oklahoma',
					'OR' => 'Oregon',
					'PA' => 'Pennsylvania',
					'RI' => 'Rhode Island',
					'SC' => 'South Carolina',
					'SD' => 'South Dakota',
					'TN' => 'Tennessee',
					'TX' => 'Texas',
					'UT' => 'Utah',
					'VA' => 'Virginia',
					'VT' => 'Vermont',
					'WA' => 'Washington',
					'WI' => 'Wisconsin',
					'WV' => 'West Virginia',
					'WY' => 'Wyoming'
				],
				'AT' => [
					'ACT' => 'Australian Capital Territory',
					'NSW' => 'New South Wales',
					'NT' => 'Northern Territory',
					'QLD' => 'Queensland',
					'SA' => 'South Australia',
					'TAS' => 'Tasmania',
					'VIC' => 'Victoria',
					'WA' => 'Western Australia'
				],
				'CA' => [
					'AB' => 'Alberta',
					'BC' => 'British Columbia',
					'MB' => 'Manitoba',
					'NB' => 'New Brunswick',
					'NL' => 'Newfoundland and Labrador',
					'NS' => 'Nova Scotia',
					'NT' => 'Northwest Terr.',
					'NU' => 'Nunavut',
					'ON' => 'Ontario',
					'PE' => 'Prince Edward Island',
					'QC' => 'Quebec',
					'SK' => 'Saskatchewan',
					'YT' => 'Yukon Territory'
				],
				'CN' => [
					'Anhui' => 'Anhui',
					'Beijing' => 'Beijing',
					'Capital' => 'Capital',
					'Chongqing' => 'Chongqing',
					'Fujian' => ' Fujian',
					'Gansu' => 'Gansu',
					'Guangdong' => 'Guangdong',
					'Guangxi' => 'Guangxi',
					'Guizhou' => 'Guizhou',
					'Hainan' => ' Hainan',
					'Hebei' => 'Hebei',
					'Heilongjiang' => 'Heilongjiang',
					'Henan' => 'Henan',
					'Hubei' => 'Hubei',
					'Hunan' => 'Hunan',
					'Inner Mongolia' => 'Inner Mongolia',
					'Jiangsu' => 'Jiangsu',
					'Jiangxi' => 'Jiangxi',
					'Jilin' => 'Jilin',
					'Liaoning' => 'Liaoning',
					'Nei' => 'Mongol  Nei Mongol',
					'Ningxia' => 'Ningxia',
					'Qinghai' => 'Qinghai',
					'Shaanxi' => 'Shaanxi',
					'Shandong' => 'Shandong',
					'Shanghai' => 'Shanghai',
					'Shanxi' => ' Shanxi',
					'Sichuan' => 'Sichuan',
					'Tianjin' => 'Tianjin',
					'Tibet Autonomous Region' => 'Tibet Autonomous Region',
					'Xinjiang' => 'Xinjiang',
					'Xizang' => ' Xizang',
					'Yunnan' => ' Yunnan',
					'Zhejiang' => 'Zhejiang'
				],
				'IN' => [
					'Andaman and Nicobar Islands' =>'Andaman and Nicobar Islands',
					'Andhra Pradesh' =>'Andhra Pradesh',
					'Arunachal Pradesh' =>'Arunachal Pradesh',
					'Assam' =>'Assam',
					'Bihar' =>'Bihar',
					'Chandigarh' =>'Chandigarh',
					'Chhattisgarh' =>'Chhattisgarh',
					'Dadra and Nagar Haveli' =>'Dadra and Nagar Haveli',
					'Daman and Diu' =>'Daman and Diu',
					'Goa' =>'Goa',
					'Gujarat' =>'Gujarat',
					'Haryana' =>'Haryana',
					'Himachal Pradesh' =>'Himachal Pradesh',
					'Jammu and Kashmir' =>'Jammu and Kashmir',
					'Jharkhand' =>'Jharkhand',
					'Karnataka' =>'Karnataka',
					'Kerala' =>'Kerala',
					'Lakshadweep' =>'Lakshadweep',
					'Madhya Pradesh' =>'Madhya Pradesh',
					'Maharashtra' =>'Maharashtra',
					'Manipur' =>'Manipur',
					'Meghalaya' =>'Meghalaya',
					'Mizoram' =>'Mizoram',
					'Nagaland' =>'Nagaland',
					'New Delhi' =>'New Delhi',
					'Odisha' =>'Odisha',
					'Puducherry' =>'Puducherry',
					'Punjab' =>'Punjab',
					'Rajasthan' =>'Rajasthan',
					'Sikkim' =>'Sikkim',
					'Tamil Nadu' =>'Tamil Nadu',
					'Telangana' =>'Telangana',
					'Tripura' =>'Tripura',
					'Uttar Pradesh' =>'Uttar Pradesh',
					'Uttarakhand' =>'Uttarakhand',
					'West Bengal' =>'West Bengal'
				],
				'AS' => [
					'American Samoa'
				],
				'FM' => [
					'Federated States Of Micronesia'
				],
				'GU' => [
					'Guam'
				],
				'MH' => [
					'Marshall Islands'
				],
				'MP' => [
					'Northern Mariana Islands'
				],
				'PW' => [
					'Palau'
				],
				'PR' => [
					'Puerto Rico'
				],
				'VI' => [
					'Virgin Islands'
				],
				'BR' => [
					'AC' =>	'Acre',
					'AL' =>	'Alagoas',
					'AM' =>	'Amazon',
					'AP' =>	'Amapa',
					'BA' =>	'Bahia',
					'CE' =>	'Ceara',
					'DF' =>	'Brasilia',
					'ES' =>	'Espirito Santo',
					'GO' =>	'Goias',
					'MA' =>	'Maranhao',
					'MG' =>	'Minas Gerais',
					'MS' =>	'Mato Grosso do Sul',
					'MT' =>	'Mato Grosso',
					'PA' =>	'Para',
					'PB' =>	'Paraiba',
					'PE' =>	'Pernambuco',
					'PI' =>	'Piaui',
					'PR' =>	'Parana',
					'RJ' =>	'Rio de Janeiro',
					'RN' =>	'Rio Grande do Norte',
					'RO' =>	'Rondonia',
					'RR' =>	'Roraima',
					'RS' =>	'Rio Grande do Sul',
					'SC' =>	'Santa Catarina',
					'SE' =>	'Sergipe',
					'SP' =>	'Sao Paulo',
					'TO' =>	'Tocantins'
				],
				'IT' => [
					'Abruzzo' => 'Abruzzo',
					'Basilicata' => 'Basilicata',
					'Calabria' => 'Calabria',
					'Campania' => 'Campania',
					'Emilia' => '-Romagna	Emilia-Romagna',
					'Friuli-Venezia Giulia' => 'Friuli-Venezia Giulia',
					'Lazio' => 'Lazio',
					'Liguria' => 'Liguria',
					'Lombardia' => 'Lombardia',
					'Marche' => 'Marche',
					'Molise' => 'Molise',
					'Piemonte' => 'Piemonte',
					'Puglia' => 'Puglia',
					'Sardegna' => 'Sardegna',
					'Sicilia' => 'Sicilia',
					'Toscana' => 'Toscana',
					'Trentino-Alto Adige' => 'Trentino-Alto Adige',
					'Umbria' => 'Umbria',
					'Valle d’Aosta' => 'Valle d’Aosta',
					'Veneto' => 'Veneto'
				]
			]
		],
		'pdf_monkey_template' => '3323A7EE-62FE-43CC-B8E9-8D3D08E8098C'
	],
	'leadership' => [
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
				'low' => 3,
				'high' => 5.8,
				'total' => 2,
				'benchmark' => 20,
			],
			'stage2' => [
				'low' => 6,
				'high' => 8.2,
				'total' => 3,
				'benchmark' => 34,
			],
			'stage3' => [
				'low' => 8.4,
				'high' => 9.8,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage4' => [
				'low' => 10,
				'high' => 12.2,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage5' => [
				'low' => 12.5,
				'high' => 15,
				'total' => 5,
				'benchmark' => 28,
			]
		]
	],
	'structural' => [
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
				'low' => 3,
				'high' => 5.8,
				'total' => 2,
				'benchmark' => 20,
			],
			'stage2' => [
				'low' => 6,
				'high' => 8.2,
				'total' => 3,
				'benchmark' => 34,
			],
			'stage3' => [
				'low' => 8.4,
				'high' => 9.8,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage4' => [
				'low' => 10,
				'high' => 12.2,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage5' => [
				'low' => 12.5,
				'high' => 15,
				'total' => 5,
				'benchmark' => 28,
			]
		]
	],
	'process' => [
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
				'low' => 3,
				'high' => 5.8,
				'total' => 2,
				'benchmark' => 20,
			],
			'stage2' => [
				'low' => 6,
				'high' => 8.2,
				'total' => 3,
				'benchmark' => 34,
			],
			'stage3' => [
				'low' => 8.4,
				'high' => 9.8,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage4' => [
				'low' => 10,
				'high' => 12.2,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage5' => [
				'low' => 12.5,
				'high' => 15,
				'total' => 5,
				'benchmark' => 28,
			]
		]
	],
	'portfolio' => [
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
				'low' => 3,
				'high' => 5.8,
				'total' => 2,
				'benchmark' => 20,
			],
			'stage2' => [
				'low' => 6,
				'high' => 8.2,
				'total' => 3,
				'benchmark' => 34,
			],
			'stage3' => [
				'low' => 8.4,
				'high' => 9.8,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage4' => [
				'low' => 10,
				'high' => 12.2,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage5' => [
				'low' => 12.5,
				'high' => 15,
				'total' => 5,
				'benchmark' => 28,
			]
		]
	],
	'technology' => [
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
				'low' => 3,
				'high' => 5.8,
				'total' => 2,
				'benchmark' => 20,
			],
			'stage2' => [
				'low' => 6,
				'high' => 8.2,
				'total' => 3,
				'benchmark' => 34,
			],
			'stage3' => [
				'low' => 8.4,
				'high' => 9.8,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage4' => [
				'low' => 10,
				'high' => 12.2,
				'total' => 5,
				'benchmark' => 28,
			],
			'stage5' => [
				'low' => 12.5,
				'high' => 15,
				'total' => 5,
				'benchmark' => 28,
			]
		]
	]
];
