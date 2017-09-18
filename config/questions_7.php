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
                        'question'=>'What are your investment priorities for the next 12 months <span class="small">select 3</span>',
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
                                'label'=>'Automation and Orchestration',
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
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are only just starting to learn about GDPR requirements',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We aim to implement sufficient GDPR compliance in order to avoid audits and fines',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We aim to seek compliance with least effort and only fulfil the minimum requirements',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We plan to capitalise on GDPR compliance as a chance to improve the efficiency of or overhaul our information governance (data management)',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We intend to use our GDPR compliance as a competitive differentiator',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are compliant today and are selling or sharing our best practices',
                                'value'=>5,
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
                        'question'=>'Which GDPR-specific areas do you think your organization will need to focus on (or invest in) the most? <span class="small">select 3</span>',
                        'name'=>'q2',
                        'required'=>3,
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
                        'question'=>'Which of the following GDPR requirements will pose the greatest challenge to your organization? <span class="small">select 3</span>',
                        'name'=>'q3',
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
                            ),
                            array(
                                'label'=>'Managing cloud providers, cloud applications, and international data transfers.',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Other, please specify',
                                'value'=>0,
                                'checked'=>false
                            )
                        ),
                        'other'=>'Other, please specify|0|Requirements'
                    )
                )
            ),
            'page4' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q4' => array(
                        'type'=>'radio',
                        'question'=>'How confident are you that you can identify and locate every instance of an individual\'s personal data in your systems in the event of an individual requesting removal (including in systems that are not entirely controlled by your IT department, such as cloud applications)?',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'Not confident at all',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Low confidence',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Moderate confidence — we can find about 50% of instances',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'High confidence — we can find most instances',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Completely confident — we can find all instances',
                                'value'=>5,
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
                        'question'=>'How much insight does your organization have into each of the following types of data today?',
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
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know our unstructured information (files, folders, workbooks, documents, email, etc.)',
                                'name'=>'q5.2',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know our irrelevant data (data without any business value, redundant, obsolete, trivial)',
                                'name'=>'q5.3',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know who owns data and who can access it',
                                'name'=>'q5.4',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know when we need to/can delete data ',
                                'name'=>'q5.5',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>3,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We know which regulation applies to which data class',
                                'name'=>'q5.6',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We understand all the copies we have of our production data (in backup, in test/dev, in disaster recovery site, on mobile devices, in the cloud)',
                                'name'=>'q5.7',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>4,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
                                        'checked'=>false,
                                    )
                                )
                            ),
                            array(
                                'label'=>'We understand all the copies we have of our production data (in backup, in test/dev, in disaster recovery site, on mobile devices, in the cloud)',
                                'name'=>'q5.8',
                                'options'=>array(
                                    array(
                                        'label'=>'Yes',
                                        'value'=>5,
                                        'checked'=>false,
                                    ),
                                    array(
                                        'label'=>'No',
                                        'value'=>2,
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
                        'question'=>'Which compliance actions do you think will be the most challenging to execute? <span class="small">select 3</span>',
                        'name'=>'q6',
                        'required' > 3,
                        'options'=>array(
                            array(
                                'label'=>'Classify all our data',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Delete data on request or as required',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Encrypt our data',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Anonymize/Pseudonymize personal data',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Develop a process to handle consent',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Develop a process to handle data portability',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Develop an incident response plan for data breach notification',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Get an overview of all the areas affected by GDPR and understand the requirements',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Extend our data management and governance processes/policies to handle data in the cloud',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Extend our data management and governance processes/policies to the cloud/mobile devices',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Prevent and detect data breaches/data leakage and establish a state of the art security posture',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Educate employees of GDPR impact and changes in security policy',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Train IT staff to make them aware of data-processing obligations, risks, and identification of data breaches',
                                'value'=>3,
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
                        'type'=>'radio',
                        'question'=>'What effect will GDPR have on your use of cloud services?',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'It will stop us using the cloud altogether',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Low confidence',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-country cloud providers',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-region (Europe-based) but not in-country cloud datacenters',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-country cloud datacenters',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We don\'t use cloud services',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We\'ll carry on using cloud services but will improve our data protection (eg via process, DLP or tokenisation)',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Move to in-region (Europe-based) cloud providers',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No impact — we\'ll carry on using cloud services as before',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q8' => array(
                        'type'=>'button',
                        'question'=>'Regarding leadership of your GDPR programme, has your organisation established a cross-functional compliance taskforce or governance board that involves GRC, IT, and operational stakeholders?',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Yes',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'No',
                                'value'=>2,
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
                        'type'=>'slider',
                        'question'=>'To what extent are you worried about the potential consequences of GDPR? <span class="small">Where 1 is not at all worried and 5 is extremely worried</span>',
                        'name'=>'q9',
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
                                'label'=>'We are worried about the reputational risk of non-compliance with regards to our customers, partners, the stock market, etc.',
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
            'page10' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q10' => array(
                        'type'=>'radio',
                        'question'=>'What is limiting your ability to establish full GDPR compliance across your data management environment?',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Lack of GDPR compliance knowledge',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Lack of budget',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Limited resources',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Conflicting priorities',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not enough collaboration between the GDPR compliance team and other stakeholders',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fragmentation or lack of integration of Big Data, reporting, and analytics portfolio',
                                'value'=>4,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page11' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q11' => array(
                        'type'=>'radio',
                        'question'=>'What is limiting your ability to establish full GDPR compliance across your data management environment?',
                        'name'=>'q11',
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
            ),
        ),
    ),
    'appendix' => array(
        'title' => 'Appendix – Alternate Questions',
        'class' => 'sec1',
        'icon' => 'icon-gdpr',
        'display' => true,
        'complete' => false,
        'sub-report' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q12' => array(
                        'type'=>'radio',
                        'question'=>'To what extent is your organization preparing for GDPR to take effect?',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'It is mainly ready because we are compliant with our current local data protection laws',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'There is a solid plan in place to ensure readiness by May 2018',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We will start addressing it this year (2017)',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are awaiting further guidelines',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We really do not know where to start',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Not relevant, as GDPR does not affect our organization',
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
                    'q13' => array(
                        'type'=>'radio',
                        'question'=>'With regards to appointing a data protection officer (DPO), will your organization:',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Not appoint a DPO',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Appoint a dedicated person from outside the organisation',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Appoint someone from within the organisation',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Use a contract resource',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We already have a DPO in place',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q14' => array(
                        'type'=>'radio',
                        'question'=>'If your GDPR compliance program is being led by a named individual, in which division or department is this leader?',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'Executive Leadership',
                                'value'=>2.2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Governance, Risk, and Compliance',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IT',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Finance and accounting',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Legal',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'R&amp;D',
                                'value'=>12.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Production',
                                'value'=>12.5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'GDPR',
                'questions' => array(
                    'q15' => array(
                        'type'=>'button',
                        'question'=>'Does your organization expect to be audited in 2018 – and if so, by whom (e.g. Regulator/DPA, Voluntary External Audit, Voluntary Internal Audit)?',
                        'name'=>'q15',
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
                            ),
                            array(
                                'label'=>'Don\'t know',
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