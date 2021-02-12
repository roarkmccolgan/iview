<?php

//HPGDPR
return [
    'leadership-and-general-obligations' => [
        'class' => 'sec1',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Leadership and General Obligations',
                'questions' => [
                    'q1'=>[
                        'type'=>'button',
                        'question'=>'Is the board aware of its accountability for compliance with the GDPR regulation? <span class="small">[Select one]</span> <br/><br/>The board is:',
                        'name'=>'q1',
                        'options'=>[
                            [
                                'label'=>'Unaware of its accountability for compliance with GDPR',
                                'value'=>0.536,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Aware of its accountability for compliance with GDPR, and reviews progress on an occasional basis',
                                'value'=>1.071,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Fully aware of its accountability for compliance with GDPR, and this is a regular agenda item at monthly board meetings',
                                'value'=>2.143,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>'img/techfit_icons_Q-A1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Leadership and General Obligations',
                'questions' => [
                    'q2'=>[
                        'type'=>'button',
                        'question'=>'How aware is your board of the potential fines of €20 million or 4% of annual turnover, whichever is the higher, for GDPR non-compliance? <span class="small">[Select one]</span><br/><br/>The board is:',
                        'name'=>'q2',
                        'options'=>[
                            [
                                'label'=>'Unaware of the extent of fines from GDPR',
                                'value'=>0.536,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Aware of the fine levels but does not think they will be applied by regulators',
                                'value'=>1.071,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Aware of the fine levels, does think they will be applied, but mainly to very large firms',
                                'value'=>1.071,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Fully aware of the fine levels, and is taking proactive mitigating action as a result',
                                'value'=>2.143,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Leadership and General Obligations',
                'questions' => [
                    'q3'=>[
                        'type'=>'groupradio',
                        'question'=>'To what extent is your company aware that the following devices that may process personal data are subject to GDPR regulation? <span class="small">[Select one for each]</span><br/><br/>
                        The board is:',
                        'name'=>'q3', /*
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5.                        ),*/
                        'options'=>[
                            [
                                'label'=>'PCs',
                                'name'=>'q3.1',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Laptops',
                                'name'=>'q3.2',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Smartphones',
                                'name'=>'q3.3',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Servers',
                                'name'=>'q3.4',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Network storage devices',
                                'name'=>'q3.5',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Removable storage devices such as USB sticks',
                                'name'=>'q3.6',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Printers',
                                'name'=>'q3.7',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Copiers',
                                'name'=>'q3.8',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Fax machines',
                                'name'=>'q3.9',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Scanners',
                                'name'=>'q3.10',
                                'options'=>[
                                    [
                                        'label'=>'Unaware',
                                        'value'=>0.536,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Aware',
                                        'value'=>1.071,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2.143,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Leadership and General Obligations',
                'questions' => [
                    'q4'=>[
                        'type'=>'button',
                        'question'=>'Do you have a process that mandates the consideration of data protection when conceiving and deploying new technology, design or business processes? So-called data protection by design and by default. <span class="small">[Select one]</span>',
                        'name'=>'q4',
                        'options'=>[
                            [
                                'label'=>'No, we don\'t have a process that mandates consideration of data protection when conceiving and deploying new technology, design or business processes',
                                'value'=>0.536,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We consider data protection when we deploy a new technology, design or business processes',
                                'value'=>1.071,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We consider data protection at the design and development stage for technology, design or business processes',
                                'value'=>1.607,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We consider data protection at the very creation of any technology, design or business processes',
                                'value'=>2.143,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Leadership and General Obligations',
                'questions' => [
                    'q5'=>[
                        'type'=>'button',
                        'question'=>'Do you have an access control mechanism and process that restricts personal data access only to those that are required to have access to that data? {Select one]',
                        'name'=>'q5',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.536,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we have an access control mechanism (such as usernames and passwords) that restricts access to our corporate network',
                                'value'=>1.071,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we have an access control mechanism (such as usernames and passwords) that restricts access to applications that access personal data',
                                'value'=>1.607,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we have an access control mechanism that gates access to individual personal data records on an as needed basis',
                                'value'=>1.607,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we have an advanced access control mechanism that uses multifactor authentication (such as biometrics) that gates access to individual fields within personal data records as needed',
                                'value'=>2.143,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ]/*,
    'print-devices' => array(
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'MFP Devices and Printers',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'checkbox',
                        'question'=>'Do your print/MFP devices require user authentication at the device in order to guarantee secure document retrieval and avoid paper documents being left at the device? <span class="small">[Select all that apply]</span>',
                        'name'=>'q6',
                        'script'=>'
                            $(\'#3-q6\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-q6\').iCheck(\'uncheck\');
                                $(\'#1-q6\').iCheck(\'uncheck\');
                                $(\'#2-q6\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-q6\'),$(\'#1-q6\'),$(\'#2-q6\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#3-q6\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Pin code',
                                'value'=>0.000,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Swipe card',
                                'value'=>0.984,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Biometrics',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'None of the above',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )
            )
        )
    )*/,
    'data-rights-and-standards' => [
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q7'=>[
                        'type'=>'button',
                        'question'=>'Do you have a process that identifies the purpose of collecting personal data, whether it is customer data, employee data or citizen data? <span class="small">[Select one]</span>',
                        'name'=>'q7',
                        'options'=>[
                            [
                                'label'=>'We have no process for deciding why we collect personal data',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We gather personal data mainly because it may be useful in the future',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We only capture data for specific purposes that are essential to our business processes',
                                'value'=>2.903,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We know what personal data we collect and why we collect it, and we are sure to use it only for the identified purpose',
                                'value'=>3.871,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ],
            'page2' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q8'=>[
                        'type'=>'button',
                        'question'=>'Can you demonstrate a link between personal data gathered and the specific processing purposes for which it is gathered? <span class="small">[Select one]</span><br/><br/> We have:',
                        'name'=>'q8',
                        'options'=>[
                            [
                                'label'=>'No process to link the data gathered to the processing purpose',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Processes to link the data gathered to the processing purpose, but we may use the data for other purposes too',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Processes and strict controls that link the data gathered specifically to the processing purpose',
                                'value'=>3.871,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q9'=>[
                        'type'=>'button',
                        'question'=>'Is there a process in place to identify personal data types held in the organisation? <span class="small">[Select one]</span>',
                        'name'=>'q9',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, but documentation is fragmented across departments',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, across the organisation and in a consistent format',
                                'value'=>2.903,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q10'=>[
                        'type'=>'button',
                        'question'=>'Have you conducted a data flow analysis, for data in transit and in use? <span class="small">[Select one]</span>',
                        'name'=>'q10',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, some data flow analysis has been done but this is ad hoc and fragmented across departments',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, a comprehensive data flow analysis has been conducted to document the use and flow of personal data held within the organisation',
                                'value'=>2.903,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we have full knowledge of the personal data inventory and flows, and we actively use that to improve data protection compliance management processes, such as deleting irrelevant, expired or redundant data',
                                'value'=>3.871,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q11'=>[
                        'type'=>'button',
                        'question'=>'Has your data flow analysis included the secure output (print, copy, fax, scan) of personal data? <span class="small">[Select one]</span>',
                        'name'=>'q11',
                        'options'=>[
                            [
                                'label'=>'We have not conducted a data flow analysis',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No, our data flow analysis does not include the secure output (print, copy, fax, scan) of personal data',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes',
                                'value'=>3.871,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q12'=>[
                        'type'=>'button',
                        'question'=>'Are you certified as compliant with ISO 27001? <span class="small">[Select one]</span>',
                        'name'=>'q12',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No, we are not certified, but we believe we operate according to the broad principles and practices of ISO 27001',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we are certified and compliant',
                                'value'=>3.871,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q13'=>[
                        'type'=>'button',
                        'question'=>'Are your printer and MFP devices (ISO/IEC 15408) certified (also known as Common Criteria)? <span class="small">[Select one]</span>',
                        'name'=>'q13',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No, we are not certified, but we believe we operate according to the broad principles and practices of ISO 15408',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we are certified and compliant',
                                'value'=>3.871,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Data rights and standards',
                'questions' => [
                    'q14'=>[
                        'type'=>'button',
                        'question'=>'Do you have a process for transferring data outside the EU? <span class="small">[Select one]</span>',
                        'name'=>'q14',
                        'options'=>[
                            [
                                'label'=>'No, and we don\'t know where our data is held',
                                'value'=>0.968,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We keep all data in country as a rule',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We keep all data in the EU as a rule',
                                'value'=>1.935,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a strict process that assesses the sensitivity of data and locates it in an appropriate country ',
                                'value'=>2.903,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'We have a risk-based process that assesses the sensitivity of data and also the capabilities of providers and regulatory regime of countries we use to host data',
                                'value'=>3.871,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'security' => [
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => [
            'page1' => [
                'title' => 'Security',
                'questions' => [
                    'q15'=>[
                        'type'=>'button',
                        'question'=>'Do you have a process that documents "state of the art" in security? <span class="small">[Select one]</span>',
                        'name'=>'q15',
                        'options'=>[
                            [
                                'label'=>'There is no formal view on state of the art in our organisation',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'There is a working definition for state of the art, but there is no process to define or review it',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'There is a working definition that is reviewed at least annually, with processes to define state-of-the-art security technology',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'There is a working definition that is reviewed at least every six months, with processes to define state-of-the-art security technology',
                                'value'=>1.475,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'There is a working definition that is reviewed at least monthly, with processes to define state of the art that includes both security technology and security processes',
                                'value'=>1.967,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page2' => [
                'title' => 'Security',
                'questions' => [
                    'q16'=>[
                        'type'=>'button',
                        'question'=>'Have you documented the risks associated with processing personal data, and mapped those risks against the technical measures in place to secure personal data? <span class="small">[Select one]</span>',
                        'name'=>'q16',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, and we have mapped those risks against the technical measures in place to secure personal data',
                                'value'=>1.967,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page3' => [
                'title' => 'Security',
                'questions' => [
                    'q17'=>[
                        'type'=>'button',
                        'question'=>'Do you regularly test your security, backup, business continuity and key management processes? <span class="small">[Select one]</span>',
                        'name'=>'q17',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, security, backup, business continuity and key management processes are tested at least once a year',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, security, backup, business continuity and key management processes are tested at least once every six months',
                                'value'=>1.475,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, security, backup, business continuity and key management processes are tested at least once a month',
                                'value'=>1.967,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page4' => [
                'title' => 'Security',
                'questions' => [
                    'q18'=>[
                        'type'=>'button',
                        'question'=>'Do you have an incident response plan, and is it tested regularly? <span class="small">[Select one]</span>',
                        'name'=>'q18',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'No, but we have ad hoc capability to deal with incidents',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, and this is tested annually',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, and this is tested at least every six months',
                                'value'=>1.475,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, and this is tested at least monthly',
                                'value'=>1.967,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page5' => [
                'title' => 'Security',
                'questions' => [
                    'q19'=>[
                        'type'=>'button',
                        'question'=>'Is print infrastructure part of your security audit? <span class="small">[Select one]</span>',
                        'name'=>'q19',
                        'options'=>[
                            [
                                'label'=>'No',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes',
                                'value'=>1.475,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Don\'t know',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page6' => [
                'title' => 'Security',
                'questions' => [
                    'q20'=>[
                        'type'=>'button',
                        'question'=>'Does your personal data encryption process extend to your print management solutions? <span class="small">[Select one]</span>',
                        'name'=>'q20',
                        'options'=>[
                            [
                                'label'=>'No, we don\'t have an encryption process',
                                'value'=>0.492,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we do but this does not extend to print',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Yes, we have both',
                                'value'=>1.967,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ],
            ],
            'page7' => [
                'title' => 'Security',
                'questions' => [
                    'q21'=>[
                        'type'=>'groupradio',
                        'question'=>'Which of the following print-related security activities do you perform? <span class="small">[Select one for each]</span>',
                        'name'=>'q21', /*
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5.                        ),*/
                        'options'=>[
                            [
                                'label'=>'Log print activity across all platforms enabling the tracing of personal data processing  ',
                                'name'=>'q21.1',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Partially',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>1.475,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Keep a complete inventory of all your output devices (printers, copiers, MFPs, faxes, scanners)   ',
                                'name'=>'q21.2',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Partially',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>1.475,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Maintain and patch your printer fleet ',
                                'name'=>'q21.3',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Partially',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>1.475,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Shut down any unnecessary services that your print devices offer  ',
                                'name'=>'q21.4',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Partially',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>1.475,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page8' => [
                'title' => 'Security',
                'questions' => [
                    'q22'=>[
                        'type'=>'groupradio',
                        'question'=>'Upon disposal or decommissioning, are the hard drives and/or memory of these devices certified to be clean or destroyed? <span class="small">[Select one for each]</span>',
                        'name'=>'q22', /*
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5.                        ),*/
                        'options'=>[
                            [
                                'label'=>'PCs',
                                'name'=>'q22.1',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Laptops',
                                'name'=>'q22.2',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Smartphones',
                                'name'=>'q22.3',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Servers',
                                'name'=>'q22.4',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Network storage devices',
                                'name'=>'q22.5',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Removable storage devices such as USB sticks',
                                'name'=>'q22.6',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Printers',
                                'name'=>'q22.7',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Copiers',
                                'name'=>'q22.8',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Fax machines',
                                'name'=>'q22.9',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                            [
                                'label'=>'Scanners',
                                'name'=>'q22.10',
                                'options'=>[
                                    [
                                        'label'=>'No',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Yes',
                                        'value'=>0.984,
                                        'checked'=>false,
                                    ],
                                    [
                                        'label'=>'Don\'t know',
                                        'value'=>0.492,
                                        'checked'=>false,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'page9' => [
                'title' => 'MFP Devices and Printers',
                'questions' => [
                    'q6'=>[
                        'type'=>'checkbox',
                        'question'=>'Do your print/MFP devices require user authentication at the device in order to guarantee secure document retrieval and avoid paper documents being left at the device? <span class="small">[Select all that apply]</span>',
                        'name'=>'q6',
                        'script'=>'
                            $(\'#3-q6\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-q6\').iCheck(\'uncheck\');
                                $(\'#1-q6\').iCheck(\'uncheck\');
                                $(\'#2-q6\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-q6\'),$(\'#1-q6\'),$(\'#2-q6\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#3-q6\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>[
                            [
                                'label'=>'Pin code',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Swipe card',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'Biometrics',
                                'value'=>0.984,
                                'checked'=>false,
                            ],
                            [
                                'label'=>'None of the above',
                                'value'=>0,
                                'checked'=>false,
                            ],
                        ],
                    ],
                ], /*,
                'report' => array(
                    'text'=>'Archiving should be integrated in overall data protection workflow, IDC believes. In several industries (e.g. healthcare), long-term archiving is mandatory. With file sizes esp. for video exploding, storage assets often need rethinking.',
                    'image'=>'img/techfit_icons_Q-C1.png'
                )*/
            ],
        ],
    ],
];
