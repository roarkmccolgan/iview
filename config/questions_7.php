<?php
//7 Symanted GDPR
return array(
    'screeners' => array(
        'title' => 'General',
        'description' => 'Please tell us a few things about yourself and your company.',
        'colour' => '',
        'class' => 'screeners',
        'icon' => 'info',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'General',
                'questions' => array(
                    's1'=>array(
                        'type'=>'checkbox',
                        'question'=>'What are your investment priorities for the next 12 months <span class="small">Select 3</span>',
                        'name'=>'s1',
                        'required'=>3,
                        'options'=>array(
                            array(
                                'label'=>'IT Infrastructure',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Storage systems',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Security controls',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Systems Management',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Automation and Orchestation',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Application Development (DevOps/Containers etc)',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Workforce Mobility',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Customer Experience',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Enterprise Applications (ERP/CRM/SCM/HCM etc)',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT Security ',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'GDPR compliance',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Other, please specify',
                                'value'=>0,
                                'checked'=>false
                            )
                        ),
                        'other'=>'Other, please specify|0|Your Priority'
                    )
                )
            ),
        )
    ),
    'gdpr' => array(
        'title' => 'GDPR',
        'class' => 'sec1',
        'icon' => 'icon-gdpr',
        'display' => true,
        'complete' => false,
        'sub-report' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Approach to IT',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'radio',
                        'question'=>'Which of the following best describes your organisation’s approach to GDPR compliance?',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'We don\'t know what GDPR is and how it is going to affect us',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are only just starting to learn about GDPR requirements',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We aim to implement sufficient GDPR compliance in order to avoid audits and fines',
                                'value'=>7.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We aim to seek compliance with least effort and only fulfill the minimum requirements',
                                'value'=>10,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We see GDPR compliance as a chance to improve the efficiency of or overhaul our information governance (data management)',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We see GDPR compliance as a competitive differentiator',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are compliant today and are selling or sharing our best practices',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q2'=> array(
                        'type'=>'checkbox',
                        'question'=>'Which areas do you think your organization will need to focus on (or invest in) the most?',
                        'name'=>'q2',
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
                                'label'=>'Data mapping and discovery: assess and classify data',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Identify applications which use GDPR-relevant data',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Conduct a dataflow analysis',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Review and improve identity and access management',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Build a risk assessment and compliance team',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Review and update backup processes and technologies',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Establish documentation processes to comply with accountability requirements',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Implement control and review processes, create a governance board',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Internal communication/educate employees',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hire or appoint a data protection officer',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Implement incident reporting',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Anonymization of data for Big Data and analytics use cases, as well as for software testing',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Data minimization and consent/purpose limitation',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Implement Privacy Impact assessments',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Privacy by design and privacy by default obligations',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Other, please specify',
                                'value'=>0,
                                'checked'=>false
                            )
                        ),
                        'other'=>'Other, please specify|0|Area'
                    )
                )
            ),
            'page3' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q3' => array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following GDPR requirements will pose the greatest challenge to your organization?',
                        'name'=>'q3',
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
                                'label'=>'Data portability (the need to provide data in machine readable format upon request)',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Service a person\'s data access request ',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Right to be forgotten (RTBF)',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Data breach notification within 72 hours',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Data protection by design and by default ',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Data transfers to countries outside of the EU',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Encryption and/or pseudonymization of data',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Appointing a data protection officer',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Defining what \'state of the art\' (SotA) means for our organization in terms of processes and technologies',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Data minimization principle (collecting only least amount of data necessary)',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Defining data use cases and managing consent',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Obtaining permissions for testing/analytics of real customer data',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Mobile first strategies make it more difficult to track customer data',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Undertaking customer profiling in compliance with GDPR',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q4' => array(
                        'type'=>'radio',
                        'question'=>'How confident are you that you can identify and locate every instance of an individual\'s personal data in your systems in the event of an individual requesting removal (including in systems that are not controlled by your IT department)?',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'Not confident at all',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Low confidence',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Moderate confidence — we can find about 50% of instances',
                                'value'=>7.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'High confidence — we can find most instances',
                                'value'=>10,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Completely confident — we can find all instances',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q5' => array(
                        'type'=>'slider',
                        'question'=>'Which of the following do you already have in place to protect your business in the event of an incident?',
                        'name'=>'q5',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'We know our structured information (databases, data warehouses, content management systems)',
                                'name'=>'q5.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know our unstructured information (files, folders, workbooks, documents, email, etc.) ',
                                'name'=>'q5.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know our irrelevant data (data without any business value, redundant, obsolete, trivial)',
                                'name'=>'q5.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know who owns data',
                                'name'=>'q5.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know how long we need to keep data',
                                'name'=>'q5.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know when we need to/can delete data',
                                'name'=>'q5.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know which regulation applies to which data class',
                                'name'=>'q5.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We understand all the copies we have of our production data (in backup, in test/dev, in disaster recovery site, on mobile devices, in the cloud)',
                                'name'=>'q5.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Now',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'In 2 years\' time',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No, and no plans',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q6' => array(
                        'type'=>'checkbox',
                        'question'=>'Which compliance actions do you think will be the most challenging to execute?',
                        'name'=>'q6',
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
                                'label'=>'Classify all our data',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Delete irrelevant data',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Encrypt our data',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Anonymize privacy data',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Develop a process to handle consent',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Develop a process to handle data portability',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Develop an incident response plan for data breach notification',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Get an overview of all the areas affected by GDPR and understand the requirements',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Extend our data management and governance processes/policies to handle data in the cloud',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Extend our data management and governance processes/policies to the cloud/mobile devices',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Prevent data breaches/data leakage  and establish a state of the art security posture',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Educate employees of GDPR impact and changes in security policy',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Train IT staff to make them aware of data-processing obligations, risks, and identification of data breaches',
                                'value'=>0,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q7' => array(
                        'type'=>'slider',
                        'question'=>'Please indicate your level of agreement with each of the following statements describing your organization`s readiness for GDPR compliance',
                        'name'=>'q7',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Your organization documents what personal data it holds, where it came from, and who it is shared with',
                                'name'=>'q7.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Your personal data processes and procedures are consistent with the new requirements under GDPR (including data portability, RTBF, and subject access)',
                                'name'=>'q7.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Your organization has a procedure and plan for how it will handle subject access requests (including within the new timescales)',
                                'name'=>'q7.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Your organization has identified the legal basis for processing of personal data (for example, consent)',
                                'name'=>'q7.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Your organization has a process for seeking, obtaining, and recording consent',
                                'name'=>'q7.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Processes are in place to verify individuals` ages and to gather parental or guarding consent for data processing activity in the case of children',
                                'name'=>'q7.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Procedures are in place to detect, report, and investigate a personal data breach',
                                'name'=>'q7.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Your organization has a process to assess when a data protection impact assessment will be required (for example, who will do it, who needs to be involved, or the process been done centrally or locally).',
                                'name'=>'q7.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Your organization implemented approaches to effect data minimization/pseudonymisation/anonymization and privacy by design',
                                'name'=>'q7.9',
                                'options'=>array(
                                    array(
                                        'label'=>'Completely agree',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Agree',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat agree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Neither agree nor disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Somewhat disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Completely disagree',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q8' => array(
                        'type'=>'radio',
                        'question'=>'What effect will GDPR have on your use of cloud services?',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'It will stop us using the cloud altogether',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-country cloud providers',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-region (Europe-based) but not in-country cloud datacenters',
                                'value'=>7.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-country cloud datacenters',
                                'value'=>10,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We don\'t use cloud services',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-region (Europe-based) cloud providers',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No impact — we\'ll carry on using cloud services',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page9' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q9' => array(
                        'type'=>'button',
                        'question'=>'Regarding leadership of your GDPR programme, has your organisation established a cross-functional compliance taskforce or governance board?',
                        'name'=>'q9',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page10' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q10' => array(
                        'type'=>'slider',
                        'question'=>'To what extent are you worried about the potential consequences of GDPR?',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'We are worried about getting fined',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q10.1',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We are worried about class action law suits',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q10.2',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We are worried about mandatory breach notification',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q10.3',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We are worried about suspension of data processing activities by the regulator',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q10.4',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We are worried about the reputational risk of non-compliance',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q10.5',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We are worried that notification of a breach will result in discovering additional violations',
                                'from'=>'Not Worried',
                                'to'=>'Extremely Worried',
                                'name'=>'q10.6',
                                'options'=>array(
                                    array(
                                        'label'=>'1',
                                        'value'=>0.22,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'2',
                                        'value'=>0.44,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'3',
                                        'value'=>0.67,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'4',
                                        'value'=>0.89,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'5',
                                        'value'=>1.11,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page11' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q11' => array(
                        'type'=>'slider',
                        'question'=>'What impact will GDPR have on your adoption of the following technologies?',
                        'name'=>'q11',
                        'calc'=>array(
                            'type'=>'average',
                            'value'=>false
                        ),
                        'options'=>array(
                            array(
                                'label'=>'Internet of Things applications',
                                'name'=>'q11.1',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Information life-cycle management (ILM) ',
                                'name'=>'q11.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'On-premise storage',
                                'name'=>'q11.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'IT/cybersecurity generally',
                                'name'=>'q11.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Data leakage prevention (DLP)',
                                'name'=>'q11.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Cloud Access Security Broker (CASB) and Anonymisation technologies',
                                'name'=>'q11.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Encryption',
                                'name'=>'q11.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Backup',
                                'name'=>'q11.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Archiving',
                                'name'=>'q11.9',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'eDiscovery',
                                'name'=>'q11.10',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Test data management',
                                'name'=>'q11.11',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'Identity and access management',
                                'name'=>'q11.12',
                                'options'=>array(
                                    array(
                                        'label'=>'Will increase investment',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Investment will stay the same',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'Not applicable',
                                        'value'=>1,
                                        'checked'=>false,
                                    )
                                )
                            )
                        )
                    )
                )
            ),
            'page12' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q12' => array(
                        'type'=>'radio',
                        'question'=>'What is limiting your ability to establish full GDPR compliance across your data management environment?',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'Lack of GDPR compliance knowledge',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Lack of budget',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Limited resources',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Conflicting priorities',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not enough collaboration between Big Data/analytics staff and the GDPR compliance function',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fragmentation or lack of integration of Big Data, reporting, and analytics portfolio',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    )
);