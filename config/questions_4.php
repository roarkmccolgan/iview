<?php
return array(
    'leadership-and-general-obligations' => array(
        'class' => 'sec1',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Leadership and General Obligations',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'Is the board aware of its accountability for compliance with the GDPR regulation? [Select one] <br/>The board is:',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Unaware of its accountability for compliance with GDPR',
                                'value'=>0,536,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Aware of its accountability for compliance with GDPR, and reviews progress on an occasional basis',
                                'value'=>1,071,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fully aware of its accountability for compliance with GDPR, and this is a regular agenda item at monthly board meetings',
                                'value'=>2,143,
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
                'title' => 'Leadership and General Obligations',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'How aware is your board of the potential fines of €20 million or 4% of annual turnover, whichever is the higher, for GDPR non-compliance? [Select one]<br/>The board is:',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Unaware of the extent of fines from GDPR',
                                'value'=>0,536,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Aware of the fine levels but does not think they will be applied by regulators',
                                'value'=>1,071,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Aware of the fine levels, does think they will be applied, but mainly to very large firms',
                                'value'=>1,071,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fully aware of the fine levels, and is taking proactive mitigating action as a result',
                                'value'=>2,143,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Leadership and General Obligations',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'groupradio',
                        'question'=>'To what extent is your company aware that the following devices that may process personal data are subject to GDPR regulation? [Select one for each]<br/>
                        The board is:',
                        'name'=>'q3',/*
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),*/
                        'options'=>array(
                            array(
                                'label'=>'PCs',
                                'name'=>'q3.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Laptops',
                                'name'=>'q3.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Smartphones',
                                'name'=>'q3.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Servers',
                                'name'=>'q3.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Network storage devices',
                                'name'=>'q3.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Removable storage devices such as USB sticks',
                                'name'=>'q3.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Printers',
                                'name'=>'q3.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Copiers',
                                'name'=>'q3.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Fax machines',
                                'name'=>'q3.9',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Scanners',
                                'name'=>'q3.10',
                                'options'=>array(
                                    array(
                                        'label'=>'Unaware',
                                        'value'=>0,536,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Aware',
                                        'value'=>1,071,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'The board is fully aware and is taking proactive mitigating action as a result',
                                        'value'=>2,143,
                                        'checked'=>false
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Leadership and General Obligations',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'button',
                        'question'=>'Do you have a process that mandates the consideration of data protection when conceiving and deploying new technology, design or business processes? So-called data protection by design and by default. [Select one]',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'No, we don\'t have a process that mandates consideration of data protection when conceiving and deploying new technology, design or business processes',
                                'value'=>0,536,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We consider data protection when we deploy a new technology, design or business processes',
                                'value'=>1,071,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We consider data protection at the design and development stage for technology, design or business processes',
                                'value'=>1,607,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We consider data protection at the very creation of any technology, design or business processes',
                                'value'=>2,143,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Leadership and General Obligations',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Do you have an access control mechanism and process that restricts personal data access only to those that are required to have access to that data? {Select one]',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>0,536,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we have an access control mechanism (such as usernames and passwords) that restricts access to our corporate network',
                                'value'=>1,071,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we have an access control mechanism (such as usernames and passwords) that restricts access to applications that access personal data',
                                'value'=>1,607,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we have an access control mechanism that gates access to individual personal data records on an as needed basis',
                                'value'=>1,607,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we have an advanced access control mechanism that uses multifactor authentication (such as biometrics) that gates access to individual fields within personal data records as needed',
                                'value'=>2,143,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'data-rights-and-standards' => array(
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'Do you have a process that identifies the purpose of collecting personal data, whether it is customer data, employee data or citizen data? [Select one]',
                        'name'=>'q6',
                        'options'=>array(
                            array(
                                'label'=>'We have no process for deciding why we collect personal data',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We gather personal data mainly because it may be useful in the future',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We only capture data for specific purposes that are essential to our business processes',
                                'value'=>3,333,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We know what personal data we collect and why we collect it, and we are sure to use it only for the identified purpose',
                                'value'=>4,444,
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
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'Can you demonstrate a link between personal data gathered and the specific processing purposes for which it is gathered? [Select one]<br/> We have:',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'No process to link the data gathered to the processing purpose',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Processes to link the data gathered to the processing purpose, but we may use the data for other purposes too',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Processes and strict controls that link the data gathered specifically to the processing purpose',
                                'value'=>4,444,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Is there a process in place to identify personal data types held in the organisation? [Select one]',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, but documentation is fragmented across departments',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, across the organisation and in a consistent format',
                                'value'=>3,333,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'Have you conducted a data flow analysis, for data in transit and in use? [Select one]',
                        'name'=>'q9',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, some data flow analysis has been done but this is ad hoc and fragmented across departments',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, a comprehensive data flow analysis has been conducted to document the use and flow of personal data held within the organisation',
                                'value'=>3,333,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we have full knowledge of the personal data inventory and flows, and we actively use that to improve data protection compliance management processes, such as deleting irrelevant, expired or redundant data',
                                'value'=>4,444,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'Has your data flow analysis included the secure output (print, copy, fax, scan) of personal data? [Select one]',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'We have not conducted a data flow analysis',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No, our data flow analysis does not include the secure output (print, copy, fax, scan) of personal data',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes',
                                'value'=>4,444,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'button',
                        'question'=>'Are you certified as compliant with ISO 27001? [Select one]',
                        'name'=>'q11',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No, we are not certified, but we believe we operate according to the broad principles and practices of ISO 27001',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we are certified and compliant',
                                'value'=>4,444,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>'Are your printer and MFP devices (ISO/IEC 15408) certified (also known as Common Criteria)? [Select one]',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No, we are not certified, but we believe we operate according to the broad principles and practices of ISO 15408',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we are certified and compliant',
                                'value'=>4,444,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Data rights and standards',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'Do you have a process for transferring data outside the EU? [Select one]',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'No, and we don\'t know where our data is held',
                                'value'=>1,111,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We keep all data in country as a rule',
                                'value'=>2,222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We keep all data in the EU as a rule',
                                'value'=>2.222,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a strict process that assesses the sensitivity of data and locates it in an appropriate country ',
                                'value'=>3.333,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a risk-based process that assesses the sensitivity of data and also the capabilities of providers and regulatory regime of countries we use to host data',
                                'value'=>4.444,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'security' => array(
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Security',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'checkbox',
                        'question'=>'Do your print/MFP devices require user authentication at the device in order to guarantee secure document retrieval and avoid paper documents being left at the device? [Select all that apply]',
                        'name'=>'q14',
                        'script'=>'
                            $(\'#3-q14\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-q14\').iCheck(\'uncheck\');
                                $(\'#1-q14\').iCheck(\'uncheck\');
                                $(\'#2-q14\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-q14\'),$(\'#1-q14\'),$(\'#2-q14\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#3-q14\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Pin code',
                                'value'=>0,000,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Swipe card',
                                'value'=>0,984,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Biometrics',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'None of the above [MUTUALLY EXCLUSIVE]',
                                'value'=>0,
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
                'title' => 'Security',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'checkbox',
                        'question'=>'Do you have a process that documents "state of the art" in security? [Select one]',
                        'name'=>'q15',
                        'options'=>array(
                            array(
                                'label'=>'There is no formal view on state of the art in our organisation',
                                'value'=>0,492,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'There is a working definition for state of the art, but there is no process to define or review it',
                                'value'=>0,984,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'There is a working definition that is reviewed at least annually, with processes to define state-of-the-art security technology',
                                'value'=>0,984,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'There is a working definition that is reviewed at least every six months, with processes to define state-of-the-art security technology',
                                'value'=>1,475,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'There is a working definition that is reviewed at least monthly, with processes to define state of the art that includes both security technology and security processes',
                                'value'=>1,967,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Security',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'Have you documented the risks associated with processing personal data, and mapped those risks against the technical measures in place to secure personal data? [Select one]',
                        'name'=>'q16',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>0,492,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes',
                                'value'=>0,984,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, and we have mapped those risks against the technical measures in place to secure personal data',
                                'value'=>1,967,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Security',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'button',
                        'question'=>'Do you regularly test your security, backup, business continuity and key management processes? [Select one]',
                        'name'=>'q17',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>0,492,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, security, backup, business continuity and key management processes are tested at least once a year',
                                'value'=>0,984,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, security, backup, business continuity and key management processes are tested at least once every six months',
                                'value'=>1,475,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, security, backup, business continuity and key management processes are tested at least once a month',
                                'value'=>1,967,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Security',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'button',
                        'question'=>'Is print infrastructure part of your security audit? [Select one]',
                        'name'=>'q18',
                        'options'=>array(
                            array(
                                'label'=>'No',
                                'value'=>0,492,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes',
                                'value'=>1,475,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Don\'t know',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Security',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'button',
                        'question'=>'Does your personal data encryption process extend to your print management solutions? [Select one]',
                        'name'=>'q19',
                        'options'=>array(
                            array(
                                'label'=>'No, we don\'t have an encryption process',
                                'value'=>0,492,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we do but this does not extend to print',
                                'value'=>0,984,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Yes, we have both',
                                'value'=>1,967,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Security',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'groupradio',
                        'question'=>'Which of the following print-related security activities do you perform? [Select one for each]',
                        'name'=>'q20',/*
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),*/
                        'options'=>array(
                            array(
                                'label'=>'Log print activity across all platforms enabling the tracing of personal data processing  ',
                                'name'=>'q20.1',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Partially',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,475,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,492,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Keep a complete inventory of all your output devices (printers, copiers, MFPs, faxes, scanners)   ',
                                'name'=>'q20.2',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Partially',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,475,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,492,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Maintain and patch your printer fleet ',
                                'name'=>'q20.3',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Partially',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,475,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,492,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Shut down any unnecessary services that your print devices offer  ',
                                'name'=>'q20.4',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Partially',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>1,475,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,492,
                                        'checked'=>false
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Security',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'groupradio',
                        'question'=>'Upon disposal or decommissioning, are the hard drives and/or memory of these devices certified to be clean or destroyed? [Select one for each]',
                        'name'=>'q21',/*
                        'calc'=>array(
                            'type'=>'normalize',
                            'value'=>5
                        ),*/
                        'options'=>array(
                            array(
                                'label'=>'PCs',
                                'name'=>'q21.1',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Laptops',
                                'name'=>'q21.2',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Smartphones',
                                'name'=>'q21.3',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Servers',
                                'name'=>'q21.4',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Network storage devices',
                                'name'=>'q21.5',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Removable storage devices such as USB sticks',
                                'name'=>'q21.6',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Printers',
                                'name'=>'q21.7',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Copiers',
                                'name'=>'q21.8',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Fax machines',
                                'name'=>'q21.9',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            ),
                            array(
                                'label'=>'Scanners',
                                'name'=>'q21.10',
                                'options'=>array(
                                    array(
                                        'label'=>'No',
                                        'value'=>0,492,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Yes',
                                        'value'=>0,984,
                                        'checked'=>false
                                    ),
                                    array(
                                        'label'=>'Don\'t know',
                                        'value'=>0,
                                        'checked'=>false
                                    )
                                )
                            )
                        )
                    )
                )
            ),
        )
    )
);