<?php
//6 BT McAfee
return array(
    'screeners' => array(
        'title' => 'Demographics',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'icon' => 'icon-world',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Demographics',
                'questions' => array(
                    's1'=>array(
                        'type'=>'select',
                        'question'=>'In which country are you situated?',
                        'name'=>'s1',
                        'script'=>'
                            $.getJSON("https://freegeoip.net/json/", function(data) {
                                var ip = data.ip;
                                var country = data.country_name;
                                $(\'select[name="answer"]\').val(country);
                            });
                        ',
                        'options'=>array(
                            '' => 'Please select',
                            'Afghanistan' => 'Afghanistan',
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
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Demographics',
                'questions' => array(
                    's2'=>array(
                        'type'=>'button',
                        'question'=>'How many full-time employees work at your organisation worldwide?',
                        'name'=>'s2',
                        'options'=>array(
                            array(
                                'label'=>'Fewer than 4,999',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'5,000 to 9,999',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'10,000 or more',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
        )
    ),
    'general-approach-to-it' => array(
        'title' => 'Approach to IT',
        'class' => 'sec1',
        'icon' => 'icon-approach',
        'display' => true,
        'complete' => false,
        'sub-report' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Approach to IT',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'slider',
                        'question'=>'How important are the following themes in driving security spend in your organisation? <br/><span class="small">Please rate each on a scale of 1 = not at all important to 5 = extremely important.</span>',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Integrated security solutions (multivendor parts but integrated operations and management)',
                                'from'=>'Not important',
                                'to'=>'Extremely important',
                                'name'=>'q1.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Automation of security processes',
                                'from'=>'Not important',
                                'to'=>'Extremely important',
                                'name'=>'q1.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Proactive insight into evolving threats',
                                'from'=>'Not important',
                                'to'=>'Extremely important',
                                'name'=>'q1.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Use of threat intelligence',
                                'from'=>'Not important',
                                'to'=>'Extremely important',
                                'name'=>'q1.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Automated Unified Intelligence',
                                'from'=>'Not important',
                                'to'=>'Extremely important',
                                'name'=>'q1.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Approach to IT',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'slider',
                        'question'=>'What types of security technologies or approaches do you currently use to detect threats or breaches today? What will you use in 24 months?',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Full integration of products and solutions',
                                'name'=>'q2.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 24 Months',
                                        'value'=>1.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using not planning to',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Artificial intelligence/machine learning',
                                'name'=>'q2.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 24 Months',
                                        'value'=>1.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using not planning to',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Real-time analytics',
                                'name'=>'q2.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 24 Months',
                                        'value'=>1.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using not planning to',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Heuristics',
                                'name'=>'q2.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 24 Months',
                                        'value'=>1.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using not planning to',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Active threat hunting',
                                'name'=>'q2.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>2.5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 24 Months',
                                        'value'=>1.25,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not using not planning to',
                                        'value'=>0,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            )
        )
    ),
    'integration' => array(
        'title' => 'Integration',
        'class' => 'sec1',
        'icon' => 'icon-integration',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Integration',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'radio',
                        'question'=>'What is your approach when it comes to security investments?',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc investment with no broad plan or strategic consideration',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We plan to fill security gaps as they are deemed necessary',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have repeatable security processes in place that support the business',
                                'value'=>7.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a well-managed security strategy that maps the direction at least for the next two years',
                                'value'=>10,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have defined security as a core strategic investment with specified outcomes',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Integration',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'radio',
                        'question'=>'Which statement best describes your approach to selecting a security vendor?',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'We prioritize standalone point products regardless of integration concerns',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We tend to buy standalone point products but also look to integration if it makes sense',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are evenly balanced between products that work together and standalone point products',
                                'value'=>7.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We tend to buy products that work well together but still buy standalone point products',
                                'value'=>10,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We give a priority to management and integration and buy products that work well together',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'automation' => array(
        'title' => 'Automation',
        'class' => 'sec2',
        'icon' => 'icon-automation',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Automation',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'radio',
                        'question'=>'To what level have you adopted automation in your IT security management?',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'Manual processes across the board',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mainly manual processes with a small amount of automation',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A good balance of automation and manual processes',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mainly automation with a small amount of manual processes',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Automation across the board',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Automation',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'radio',
                        'question'=>'When it comes to your use of automation of security processes, do you intend to increase or decrease your use of this?',
                        'name'=>'q6',
                        'options'=>array(
                            array(
                                'label'=>'Decrease it a lot',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Decrease it a little',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Stay the same',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Increase it a little',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Increase it a lot',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Automation',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following areas of <strong>IT endpoint</strong> or <strong>user security</strong> have you automated already? <span class="small">Choose all that apply</span>',
                        'name'=>'q7',
                        'script'=>'
                            $(\'#5-q7\').change(function(event){
                                if($(this).is(\':checked\')) {
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    if($(\'#0-q7\').is(\':checked\')){
                                        $(\'#0-q7\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#1-q7\').is(\':checked\')){
                                        $(\'#1-q7\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#2-q7\').is(\':checked\')){
                                        $(\'#2-q7\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#3-q7\').is(\':checked\')){
                                        $(\'#3-q7\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#4-q7\').is(\':checked\')){
                                        $(\'#4-q7\').closest(".input-checkbox").click();
                                    }
                                }
                            });
                            jQuery.each([$(\'#0-q7\'),$(\'#1-q7\'),$(\'#2-q7\'),$(\'#3-q7\'),$(\'#4-q7\')], function( i, item ) {
                                $(item).change( function(event){
                                    if($(this).is(\':checked\')) {
                                        if($(\'#5-q7\').is(\':checked\')){
                                            $(\'#5-q7\').closest(".input-checkbox").click();
                                        }
                                        $(\'div.error\').fadeOut(\'fast\', function() {
                                            this.remove();
                                            error=false;
                                        });
                                    }
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Security policy deployment',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Security management',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Endpoint protection',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Identity and access management',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Web security',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'None of the above',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Automation',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following areas of <strong>IT infrastructure</strong> security have you automated already? <span class="small">Choose all that apply</span>',
                        'name'=>'q8',
                        'script'=>'
                            $(\'#5-q8\').change(function(event){
                                if($(this).is(\':checked\')) {
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    if($(\'#0-q8\').is(\':checked\')){
                                        $(\'#0-q8\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#1-q8\').is(\':checked\')){
                                        $(\'#1-q8\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#2-q8\').is(\':checked\')){
                                        $(\'#2-q8\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#3-q8\').is(\':checked\')){
                                        $(\'#3-q8\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#4-q8\').is(\':checked\')){
                                        $(\'#4-q8\').closest(".input-checkbox").click();
                                    }
                                }
                            });
                            jQuery.each([$(\'#0-q8\'),$(\'#1-q8\'),$(\'#2-q8\'),$(\'#3-q8\'),$(\'#4-q8\')], function( i, item ) {
                                $(item).change( function(event){
                                    if($(this).is(\':checked\')) {
                                        if($(\'#5-q8\').is(\':checked\')){
                                            $(\'#5-q8\').closest(".input-checkbox").click();
                                        }
                                        $(\'div.error\').fadeOut(\'fast\', function() {
                                            this.remove();
                                            error=false;
                                        });
                                    }
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Software updates and patching',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Data security',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Network security',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Messaging security',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Vulnerability management',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'None of the above',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
        )
    ),
    'unified-intelligence' => array(
        'title' => 'Unified Intelligence',
        'class' => 'sec3',
        'icon' => 'icon-unified',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'slider',
                        'question'=>'Looking at threat intelligence services, to what extent do you do the following? <br/><span class="small">Please rate each on a scale of 1 = not at all important to 5 = extensively.</span>',
                        'name'=>'q9',
                        'options'=>array(
                            array(
                                'label'=>'We make effective use of global threat insight services',
                                'from'=>'Not important',
                                'to'=>'Extensively',
                                'name'=>'q9.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.56,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.78,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We do multi-way sharing of information',
                                'from'=>'Not important',
                                'to'=>'Extremely important',
                                'name'=>'q9.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.56,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.78,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We have automated policy updates based on information from global threat insight services',
                                'from'=>'Not important',
                                'to'=>'Extremely important',
                                'name'=>'q9.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.56,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>1.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>2.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>2.78,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'radio',
                        'question'=>'To what extent do you have security analytics capabilities in place today?',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Not using and no plans to use',
                                'value'=>1.76,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not using but plan to use in the next two years',
                                'value'=>3.33,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently piloting this',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Use in limited areas in production',
                                'value'=>6.67,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Use extensively in production',
                                'value'=>8.33,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ),
            'page3' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'checkbox',
                        'question'=>'For your approach to threat detection, which of the following do you use? <span class="small">Choose all that apply</span>',
                        'name'=>'q11',
                        'script'=>'
                            $(\'#10-q11\').change(function(event){
                                if($(this).is(\':checked\')) {
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    if($(\'#0-q11\').is(\':checked\')){
                                        $(\'#0-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#1-q11\').is(\':checked\')){
                                        $(\'#1-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#2-q11\').is(\':checked\')){
                                        $(\'#2-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#3-q11\').is(\':checked\')){
                                        $(\'#3-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#4-q11\').is(\':checked\')){
                                        $(\'#4-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#5-q11\').is(\':checked\')){
                                        $(\'#5-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#6-q11\').is(\':checked\')){
                                        $(\'#6-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#7-q11\').is(\':checked\')){
                                        $(\'#7-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#8-q11\').is(\':checked\')){
                                        $(\'#8-q11\').closest(".input-checkbox").click();
                                    }
                                    if($(\'#9-q11\').is(\':checked\')){
                                        $(\'#9-q11\').closest(".input-checkbox").click();
                                    }

                                }
                            });
                            jQuery.each([$(\'#0-q11\'),$(\'#1-q11\'),$(\'#2-q11\'),$(\'#3-q11\'),$(\'#4-q11\'),$(\'#5-q11\'),$(\'#6-q11\'),$(\'#7-q11\'),$(\'#8-q11\'),$(\'#9-q11\')], function( i, item ) {
                                $(item).change( function(event){
                                    if($(this).is(\':checked\')) {
                                        if($(\'#10-q11\').is(\':checked\')){
                                            $(\'#10-q11\').closest(".input-checkbox").click();
                                        }
                                        $(\'div.error\').fadeOut(\'fast\', function() {
                                            this.remove();
                                            error=false;
                                        });
                                    }
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'NGFW/UTM (next generation firewall/unified threat management)',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IDP (intrusion detection and prevention)',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'SIEM (security information and event management)',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Endpoint security',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'NAC (network access control)',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Analytics',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Machine learning',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Threat intelligence reports and feeds',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sandboxing',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Web gateway',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'None',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    )
);
