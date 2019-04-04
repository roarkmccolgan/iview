<?php
return array(
    'cloud-vision-and-strategy' => array(
        'class' => 'sec1',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Cloud Vision and Strategy',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe your organization\'s cloud strategy?',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Ad hoc and reactive to customer demand for cloud',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently building a defined strategy, primarily for private cloud',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Building a defined strategy primarily for public cloud and evaluating our business model',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A defined cloud strategy, delivered through partnerships with multiple vendors',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Close alignment to vendor partner strategy, go-to-market, and technology skill-sets, with a structured execution and go-to-market processes',
                                'value'=>6.25,
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
                'title' => 'Cloud Vision and Strategy',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'How is your organization investing in cloud?',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Our financial plan or investment strategy is made on an ad hoc and reactive basis',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Currently we determine our budgets year on year; there is no longer-term investment plan for cloud',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have created a clear cloud business plan and have set investment targets over the next two to three years',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud is core to our business strategy and the majority of our overall investments focus on cloud',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud underpins the vast majority of our investments (people, infrastructure, partnerships, and sales) and we take a long-term perspective',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Cloud Vision and Strategy',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'How would you define your company\'s approach to measuring your cloud business?',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'Do not have any established cloud goals or measurements for success',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Have recurring revenue growth goals, but cannot track cloud profit; we do not separate out our cloud financials',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Built cloud-specific KPIs and metrics for our business with a separate cloud P&L and growth targets',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud is priced on projected lifetime customer value and we have systems and processes in place to reduce customer churn and optimize cloud profitability',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Systems, processes, and KPIs designed to optimize cloud profitability based on a defined mix of our own profitable recurring revenue services and revenue from resale of third-party services',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Cloud Vision and Strategy',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'button',
                        'question'=>'How is your cloud business unit structured (operationally, financially, strategically)?',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'Cloud leverages common resources, but it is not integrated into any part of our business processes',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Separate product management unit with dedicated resources; revenue targets are soft targets',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Our cloud business unit has its own P&L and all sales personnel carry fixed top-line targets for cloud',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Dedicated sales, presales, and support personnel, with all personnel having fixed revenue and profitability targets',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Fully integrated in sales and operations; cloud revenue and profitability targeted and measured as distinct items',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'Solid business decisions should be data-driven. However, as many as 40% of your small and midsize business peers don\'t measure their business results at all. Leapfrog opportunity! ',
                    'image'=>false
                )*/
            )
        )
    ),
    'processes-and-skill-sets' => array(
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Processes and Skill-Sets',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe your level of sophistication in the delivery of cloud services and solutions?',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'We start each cloud project from scratch and have not developed reusable assets',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have some reusable cloud implementation services methodologies to leverage',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Major tasks, common to most cloud implementations, have been industrialized for reuse',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have created a library of best practices, reusable tools, codes, and reference architectures to reduce implementation effort',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have achieved a high degree of implementation automation, reducing time to deliver cloud services and increasing profit margins',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )/*,
                'report' => array(
                    'text'=>'IDC estimates that ~45% of all new servers sold in Europe in 2016 will be virtualized. Excluding non suitable environments such as tower machines or High Performance Computing, >70% of the new servers were virtualized. ',
                    'image'=>'img/techfit_icons_Q-B1.png'
                )*/
            ),
            'page2' => array(
                'title' => 'Process and Skill-Sets',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe your organization\'s ability to deliver and manage cloud environments?',
                        'name'=>'q6',
                        'options'=>array(
                            array(
                                'label'=>'Offer no managed services or system integration for cloud',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Basic installation of hardware and software, as well as monitoring tools',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We help customers deploy bespoke cloud environments, monitored with a range of fault management and service desk offerings',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We can deploy multivendor hybrid clouds and offer proactive advice and monitoring',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Well-developed best practices and in-house intellectual property to deliver large, complex environments, leveraging our own IP for automated managed services',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Process and Skill-Sets',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'How would you define your governance and compliance status?',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'No specific processes in place',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have internal processes recorded in Excel format',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We work according to quality best practices, but don\'t have any certifications',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have quality certification in up to two key areas (e.g., ISO 9000)',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We hold certification badges such as ISO in three or more areas (data governance, datacenter facilities, etc.) and use them as a differentiator',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Process and Skill-Sets',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe the support capabilities of your organization?',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'Reactive support through a contact center, for example',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We offer reactive support through a trouble ticket/service request/service desk management system',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We offer proactive support and alert the customer through our contact center, email, and messaging',
                                'value'=>3.75,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We offer preemptive support through our contact center, email, and messaging',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Preemptive support with analytics evidence and recommendations (use of cloud resources)',
                                'value'=>6.25,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'business-mix' => array(
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following cloud services do you offer (select all that apply)?',
                        'name'=>'q9',
                        'script'=>'
                            $(\'#10-q9\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-q9\').iCheck(\'uncheck\');
                                $(\'#1-q9\').iCheck(\'uncheck\');
                                $(\'#2-q9\').iCheck(\'uncheck\');
                                $(\'#3-q9\').iCheck(\'uncheck\');
                                $(\'#4-q9\').iCheck(\'uncheck\');
                                $(\'#5-q9\').iCheck(\'uncheck\');
                                $(\'#6-q9\').iCheck(\'uncheck\');
                                $(\'#7-q9\').iCheck(\'uncheck\');
                                $(\'#8-q9\').iCheck(\'uncheck\');
                                $(\'#9-q9\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-q9\'),$(\'#1-q9\'),$(\'#2-q9\'),$(\'#3-q9\'),$(\'#4-q9\'),$(\'#5-q9\'),$(\'#6-q9\'),$(\'#7-q9\'),$(\'#8-q9\'),$(\'#9-q9\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#10-q9\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Building and/or managing of private clouds on customer premises',
                                'value'=>0.13,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Building and/or managing of hosted private clouds in our own datacenters',
                                'value'=>0.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Resale of public cloud IaaS and provision of enabling services including support',
                                'value'=>0.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Resale of public cloud SaaS or PaaS and provision of enabling services including support',
                                'value'=>0.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sale of our own branded multitenant IaaS delivered from our own datacenters',
                                'value'=>0.38,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sale of our own internally developed multitenant SaaS applications delivered from own datacenters',
                                'value'=>0.38,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sale of white-labelled vendor PaaS offerings delivered from our own datacenters',
                                'value'=>0.38,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Porting of vendor on-premise software licenses into our datacenters to be offered as a subscription model',
                                'value'=>0.13,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Build and manage hybrid cloud environments for customers — connecting private and public cloud resources',
                                'value'=>0.50,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud brokerage of multiple third-party cloud services based on a common portal and billing engine',
                                'value'=>0.50,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'None of the above',
                                'value'=>0.13,
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
                'title' => 'Business Mix',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'checkbox',
                        'question'=>'Please select the technologies which your technical teams have been certified on (vendor certifications).',
                        'name'=>'q10',
                        'script'=>'
                            $(\'#10-q10\').on(\'ifChecked\', function(event){
                                $(\'div.error\').fadeOut(\'fast\', function() {
                                    this.remove();
                                    error=false;
                                });
                                $(\'#0-q10\').iCheck(\'uncheck\');
                                $(\'#1-q10\').iCheck(\'uncheck\');
                                $(\'#2-q10\').iCheck(\'uncheck\');
                                $(\'#3-q10\').iCheck(\'uncheck\');
                                $(\'#4-q10\').iCheck(\'uncheck\');
                                $(\'#5-q10\').iCheck(\'uncheck\');
                                $(\'#6-q10\').iCheck(\'uncheck\');
                                $(\'#7-q10\').iCheck(\'uncheck\');
                                $(\'#8-q10\').iCheck(\'uncheck\');
                                $(\'#9-q10\').iCheck(\'uncheck\');
                            });
                            jQuery.each([$(\'#0-q10\'),$(\'#1-q10\'),$(\'#2-q10\'),$(\'#3-q10\'),$(\'#4-q10\'),$(\'#5-q10\'),$(\'#6-q10\'),$(\'#7-q10\'),$(\'#8-q10\'),$(\'#9-q10\')], function( i, item ) {
                                $(item).on(\'ifChecked\', function(event){
                                    $(\'div.error\').fadeOut(\'fast\', function() {
                                        this.remove();
                                        error=false;
                                    });
                                    $(\'#10-q10\').iCheck(\'uncheck\');
                                });
                            });
                        ',
                        'options'=>array(
                            array(
                                'label'=>'Linux, e.g., Red Hat Enterprise Linux',
                                'value'=>0.21,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Server and storage virtualization',
                                'value'=>0.21,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'IaaS from vendors such as Microsoft, AWS, and Oracle',
                                'value'=>0.21,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'SaaS from vendors such as Microsoft, Oracle, SAP, and Salesforce',
                                'value'=>0.21,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'PaaS from vendors such as AWS, IBM, and Oracle',
                                'value'=>0.21,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Hybrid cloud management software, e.g., Red Hat Cloud Forms',
                                'value'=>0.42,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud services automation software, e.g., Vrealize, Puppet, Chef, etc.',
                                'value'=>0.42,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud services orchestration software, e.g., Vcloud, OpenStack, CloudStack, etc.',
                                'value'=>0.42,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Software-defined storage for cloud, e.g., Red Hat Ceph, Red Hat Gluster, Vsan, etc.',
                                'value'=>0.42,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud security technologies',
                                'value'=>0.42,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'None of the above',
                                'value'=>0.21,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe your hybrid cloud capabilities?',
                        'name'=>'q11',
                        'options'=>array(
                            array(
                                'label'=>'Minimal hybrid cloud capabilities',
                                'value'=>0.63,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Offer hosted private cloud and traditional application hosting services ',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Can connect dedicated private cloud resources (e.g., hosted database) to public SaaS or IaaS',
                                'value'=>1.88,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We allow scheduled &quot;bursting&quot; of virtual machines from dedicated hardware to public IaaS within our datacenters',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Allow scheduled and unscheduled &quot;bursting,&quot; connecting to customers\' premises and third-party providers, load balancing, and auto scale capabilities',
                                'value'=>3.13,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>'What stage are you at in platform-as-a-service (PaaS) and developer platforms?',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'Minimal capabilities in this area',
                                'value'=>0.63,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We only offer managed services on traditional hosted databases',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We offer managed and/or hosted middleware (e.g., Java) as a service to external customers',
                                'value'=>1.88,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have started testing with PaaS modules (e.g., Red Hat OpenShift, Cloud Foundry, etc.)',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Container management tools in production (Red Hat OpenShift, Kubernetes, Docker Swarm) and developer evangelists to educate customers',
                                'value'=>3.13,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'What is the level of sophistication in the storage infrastructure capabilities?',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Dedicated traditional DAS or internal storage hosting',
                                'value'=>0.63,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have skills to implement and manage traditional external storage SAN and NAS environments',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have started to test software-defined storage (e.g., Ceph, Gluster, Nutanix, Scale-IO, etc.)',
                                'value'=>1.88,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have skills to implement overarching storage management tools for enterprise cloud workloads (e.g., OpenStack Cinder, EMC Viper, etc.)',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Multiform storage environment, including full support for Object and File storage',
                                'value'=>3.13,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'What is the level of expertise in OpenStack orchestration tools?',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'We have minimal capabilities',
                                'value'=>0.63,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are using a competing set of proprietary software (e.g., VMware vCloud, MS AzureStack)',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are running technical tests on OpenStack',
                                'value'=>1.88,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have cloud services generally available based on OpenStack',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We offer OpenStack IaaS with advanced modules',
                                'value'=>3.13,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page7' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'button',
                        'question'=>'What is the level of your datacenter sophistication?',
                        'name'=>'q15',
                        'options'=>array(
                            array(
                                'label'=>'We run equipment in one co-location facility',
                                'value'=>0.63,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Teams implement and manage multiform IT infrastructures, but always rely on co-location or third-parties for facility management',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have helped customers transform or build their on-premise datacenter facilities including power and cooling and network components',
                                'value'=>1.88,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Can combine datacenter transformation and management services (facility, power, cooling, network connectivity) with managed services on multiform infrastructure environments (hosted on our or third-party premises, on-premise, public cloud)',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Own multiple datacenters with private network connectivity',
                                'value'=>3.13,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page8' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'What are your organization\'s capabilities in terms of your billing engine?',
                        'name'=>'q16',
                        'options'=>array(
                            array(
                                'label'=>'Billing is done annually based on the annual contract and annual audit',
                                'value'=>0.63,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are building capabilities to bill monthly based on consumption',
                                'value'=>1.25,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Bill customers monthly based on consumption, but billing takes some time to process',
                                'value'=>1.88,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a dashboard allowing hourly consumption monitoring and immediate monthly billing',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Unified billing across our and third-party cloud services, with by-the-minute monitoring and dashboard',
                                'value'=>3.13,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'sales-and-marketing' => array(
        'class' => 'sec4',
        'display' => true,
        'complete' => false,
        'sub-report' => true,
        'pages' => array(
            'page1' => array(
                'title' => 'Sales and Marketing',
                'questions' => array(
                    'q17'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe the sophistication of your cloud marketing strategy?',
                        'name'=>'q17',
                        'options'=>array(
                            array(
                                'label'=>'We rely on leads from our vendor partners and traditional outbound marketing to drive business',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We focus campaigns on market segments we are successful in; we do not market according to how customers research solutions',
                                'value'=>1.67,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Marketing has an increased influence on the presales process; we track all prospect interactions and understand what customers need to make a purchasing decision',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We heavily utilize marketing automation and digital marketing and this represents over half of the presales process; we have a mature segment-specific approach to marketing',
                                'value'=>3.33,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We utilize an effective combination of digital, social, and content driven marketing; marketing is aligned with line-of-business, vertical sector, and business process targeting',
                                'value'=>4.17,
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
                'title' => 'Sales and Marketing',
                'questions' => array(
                    'q18'=>array(
                        'type'=>'button',
                        'question'=>'How would you describe the sophistication of your cloud marketing tactics?',
                        'name'=>'q18',
                        'options'=>array(
                            array(
                                'label'=>'No tracking of marketing success or specific measurable goals',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We run limited campaigns for cloud and primarily rely on vendor sponsored and designed campaigns',
                                'value'=>1.67,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We run a combination of our own campaigns for cloud and vendor designed campaigns and we track these campaigns against a set of defined KPIs',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have achieved an efficient cost per close campaign approach for cloud which is central to our cloud sales strategy',
                                'value'=>3.33,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Continuously driving lower cost per close approaches through deep analysis of campaign results',
                                'value'=>4.17,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Sales and Marketing',
                'questions' => array(
                    'q19'=>array(
                        'type'=>'button',
                        'question'=>'How does your organization market and sell to specific user groups (personas) within your target customer base?',
                        'name'=>'q19',
                        'options'=>array(
                            array(
                                'label'=>'Our sales teams primarily sell to the IT audience and we market primarily to the IT audience as well',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Teams market and sell to specific IT audiences, based on specific business and sector requirements',
                                'value'=>1.67,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a defined target segmentation and deliver targeted messages around sectors and business outcomes',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Marketing and sales focus on line-of-business and IT buyers and decision makers, based on vertical and business sector messaging and outcomes',
                                'value'=>3.33,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a fully integrated set of marketing tools and collateral, refined and customized to meet the information requirements of specific industry and business process roles',
                                'value'=>4.17,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Sales and Marketing',
                'questions' => array(
                    'q20'=>array(
                        'type'=>'button',
                        'question'=>'What is the sophistication of your sales structure?',
                        'name'=>'q20',
                        'options'=>array(
                            array(
                                'label'=>'A few cloud sales specialists, while the rest of the team is still focused on the on-premise business',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Building a team of cloud specialists that will support on-premise sales teams for cloud opportunities',
                                'value'=>1.67,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Begun to integrate cloud into all salespeople\'s portfolios with balanced compensation plans, protecting the on-premise installed base, while rewarding new cloud customers',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud is fully integrated into all sales portfolios and well-qualified cloud presales support activities',
                                'value'=>3.33,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'All sales are focused on selling cloud solutions; specialisms are based on sectors, processes, and business outcomes',
                                'value'=>4.17,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page5' => array(
                'title' => 'Sales and Marketing',
                'questions' => array(
                    'q21'=>array(
                        'type'=>'button',
                        'question'=>'How does your organization compensate sales professionals for cloud and recurring revenue services?',
                        'name'=>'q21',
                        'options'=>array(
                            array(
                                'label'=>'Sales staff have an overall target regardless of on-premise versus cloud',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We focus on upfront compensation: we pay the salesperson a commission on each deal including first year subscription or license fees',
                                'value'=>1.67,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We focus on compensation over the lifetime of the customer: we pay the salesperson a percentage commission on all revenue, recurring or otherwise',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have a mix of upfront and ongoing commission',
                                'value'=>3.33,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A mix of upfront and ongoing commission in addition to specific KPIs such as customer satisfaction, new customer growth, and renewal rates',
                                'value'=>4.17,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page6' => array(
                'title' => 'Sales and Marketing',
                'questions' => array(
                    'q22'=>array(
                        'type'=>'button',
                        'question'=>'How does your organization measure customer satisfaction?',
                        'name'=>'q22',
                        'options'=>array(
                            array(
                                'label'=>'We do not, or at a very basic level through renewals of existing customers',
                                'value'=>0.83,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We measure annually through internal feedback',
                                'value'=>1.67,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We measure through independent customer surveys',
                                'value'=>2.5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We measure through customer support and delivery scores',
                                'value'=>3.33,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Measured on a proactive basis, using CRM tools with analytics, as well as agreed business outcomes',
                                'value'=>4.17,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    )
);
