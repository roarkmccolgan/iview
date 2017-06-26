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
                            $.getJSON("http://freegeoip.net/json/", function(data) {
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
                        'question'=>'How many full-time employees work at your organization worldwide?',
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
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Approach to IT',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'slider',
                        'question'=>'How important are the following themes in driving security spend in your organization? <br/><span class="small">Please rate each on a scale of 1 = not at all important to 5 = extremely important.</span>',
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
                                'value'=>2.2,
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
                                'value'=>2.2,
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
                        'question'=>'Which of the following areas of IT endpoint or user security have you automated already? <span class="small">Choose all that apply</span>',
                        'name'=>'q7',
                        'script'=>'
                            $(\'#5-q7\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-q7\').iCheck(\'uncheck\');
                                $(\'#1-q7\').iCheck(\'uncheck\');
                                $(\'#2-q7\').iCheck(\'uncheck\');
                                $(\'#3-q7\').iCheck(\'uncheck\');
                                $(\'#4-q7\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-q7\'),$(\'#1-q7\'),$(\'#2-q7\'),$(\'#3-q7\'),$(\'#4-q7\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#5-q7\').iCheck(\'uncheck\');
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
                        'question'=>'Which of the following areas of IT infrastructure security have you automated already? <span class="small">Choose all that apply</span>',
                        'name'=>'q8',
                        'script'=>'
                            $(\'#5-q8\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-q8\').iCheck(\'uncheck\');
                                $(\'#1-q8\').iCheck(\'uncheck\');
                                $(\'#2-q8\').iCheck(\'uncheck\');
                                $(\'#3-q8\').iCheck(\'uncheck\');
                                $(\'#4-q8\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-q8\'),$(\'#1-q8\'),$(\'#2-q8\'),$(\'#3-q8\'),$(\'#4-q8\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#5-q8\').iCheck(\'uncheck\');
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
                    'q7'=>array(
                        'type'=>'radio',
                        'question'=>'To what extent do you have a security Unified Intelligence platform in place today?',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'Not using and no plans to use',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not using but plan to use in the next two years',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently piloting this',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Use in limited areas in production',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Use extensively in production',
                                'value'=>5,
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
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'radio',
                        'question'=>'Which statement best describes your organization\'s response to incident alerts?',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'We have no defined responses to incidents',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a broad Unified Intelligence process that defines the overall approach to incidents',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a detailed run book of incident types which defines our response',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a managed Unified Intelligence plan that defines how we respond to incidents',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have an Unified Intelligence management platform that automates the process of response to incidents',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'How many people on average are involved in security investigations per incident?',
                        'name'=>'q9',
                        'ignore' => true,
                        'options'=>array(
                            array(
                                'label'=>'1',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'2 or 3',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'4 or 5',
                                'value'=>4.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'6 to 9',
                                'value'=>7.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'10 or more',
                                'value'=>15,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'What is the work effort (time spent in hours) per person per security incident investigation?',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Less than 1 hour',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1–2 hours',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'2–4 hours',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'4–8 hours',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'9–12 hours',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'13–20 hours',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'More than 20 hours',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'radio',
                        'question'=>'What statement best describes your ability to cope with the number of security incidents raised?',
                        'name'=>'q11',
                        'options'=>array(
                            array(
                                'label'=>'We are completely overwhelmed',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are constantly firefighting',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We usually cope but it\'s sometimes a struggle',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We cope more often than not, with a few stressful moments',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We cope quite comfortably',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'radio',
                        'question'=>'To what extent is the information gathered sufficient to be able to take effective Unified Intelligence action?',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'We generally have insufficient information in order to take action',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather information that points us in a general direction',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather enough information for us to take reasonable action',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather sufficient information that directs us toward an appropriate action',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather detailed information that allows us to take decisive action',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Unified Intelligence',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following have you have deployed to support your Unified Intelligence capabilities?',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Automated policy updates (e.g., firewall rules updated in response to counter emergence of a new threat)',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Run books',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Communications plan',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Disaster recovery policy',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Tiger/Go Teams',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    )
);