<?php
// Trend
return array(
    'sales' => array(
        'title' => 'Sales',
        'description' => 'Sales',
        'background' => 'sales.png',
        'nuggets' => array(
            'skills.png',
            'customer.png',
            'cocreate.png',
        ),
        'intermission' => '
            <div class="text-lg leading-tight">
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>Selling managed services effectively requires new approaches and new compensation models.</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>The economics of recurring revenue is very different, so much so that 71% of partners are currently or considering building a “Customer for Life” program to focus on retention and renewal of subscription contracts.</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>On completing the tool, you\'ll get a personalised report which will give you some key pointers on how you can make this transition.</p>
                    </div>
                </p>
            </div>
            <p class="my-4">It also has implications for how you go to market&hellip;</p>
        ',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Sales',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your sales strategy',
                        'name'=> 1,
                        'options'=>array(
                            array(
                                'label'=>'Sales people are generally product, not services, focused. ',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Sales people have some experience in selling services.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Sales people are actively looking to convert our project business to an MSP business.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Our main sales focus is winning new managed security services (MSS) business from new clients.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Vast majority of our business is MSS, with sales teams looking to tailor solutions to customers.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Sales',
                'questions' => array(
                    'q2'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your approach to managed service pre-sales.',
                        'name'=> 2,
                        'options'=>array(
                            array(
                                'label'=>'We have no managed services pre-sales. ',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have begun to build out managed services capabilities across the pre-sales team.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Some of our pre-sales teams are focused solely on supporting MSS business.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Most of our pre-sales team are MSS focused.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Our pre-sales team create opportunities for our vendor partners and provide bespoke, specific MSS offerings to customers.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Sales',
                'questions' => array(
                    'q3'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your approach to the compensation of sales teams.',
                        'name'=> 3,
                        'options'=>array(
                            array(
                                'label'=>'We have not adjusted commission plans to account for recurring/subscription-based revenue models.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are beginning to transform commission models, often offering sales teams upfront compensation on any recurring business they win.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have transformed incentive plans to ensure the managed services opportunity is seen as lucrative.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have transitioned to offer sales staff a mix of upfront and ongoing commission, with incentives in place to encourage sales of managed services.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We pay ongoing commission, as well as incentivise KPIs on customer satisfaction, renewals and growth.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page4' => array(
                'title' => 'Sales',
                'questions' => array(
                    'q4'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your approach to billing your managed services customers.',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'Billing is not offered around MSP/cloud engagements.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are beginning to Billing is offered around MSP offerings but on an annual basis. ',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We do monthly MSP billing based on consumption.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have transitioned to offer sales staff a mix We have a sophisticated billing offering with real-time usage displayed on dashboards. ',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Our sophisticated billing platform offers a single bill to customers combining multiple vendor bills, which can be viewed in real time.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            )
        )
    ),
    'marketing' => array(
        'title' => 'Marketing',
        'description' => 'Marketing',
        'background' => 'marketing.png',
        'nuggets' => array(
            'omnichannel.png',
            'boat.png',
        ),
        'intermission' => '
            <div class="text-lg leading-tight">
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>Did you know, IDC\'s research shows that 65% of B2B technology buyers only contact a sales person AFTER a decision has been made?</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>This means it\'s critical to get your digital marketing strategy, experience and presence right - embracing digital methods and meeting your customers\' expectations of a good digital experience.</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>Next - let\'s think about services.</p>
                    </div>
                </p>
            </div>
        ',
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Marketing',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your approach to marketing in the sales cycle.',
                        'name'=> 5,
                        'options'=>array(
                            array(
                                'label'=>'We rely on leads from our vendor partners and some of our own traditional outbound marketing.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We decide on what to market and leads come from traditional activities such as events or advertising with some use of digital media.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Digital marketing is used alongside traditional marketing, by dedicated marketing staff, but it does not always follow the buyer journey.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Marketing has a close alignment with sales teams and sales process and is focused on the buyer journey and buyer requirements.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a sophisticated marketing function with a dedicated team of specialists, using digital media throughout the buyer journey.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Marketing',
                'questions' => array(
                    'q6'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your approach to the measurement of marketing efforts.',
                        'name'=> 6,
                        'options'=>array(
                            array(
                                'label'=>'We do not actively measure marketing success.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We measure basic marketing outcomes such as number of attendees to events, leads from campaigns or sales meetings.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We use a basic measurement process for marketing, based on leads from specific campaigns, and use this to make improvements.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We track all marketing processes and prospect interactions and understand what customers need to make a purchasing decision.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have developed a fully automated marketing process that continues to evolve based on ongoing results and successes.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Marketing',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your approach to targeting in your marketing efforts.',
                        'name'=> 7,
                        'options'=>array(
                            array(
                                'label'=>'We have no real targeting in our marketing efforts.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We focus our campaigns on specific verticals and are looking to develop messages for specific buyers and businesses.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We actively target specific people in prospects\' businesses and are looking to wider opportunities based on feedback.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Target marketing at specific buyer personas within sectors and continue to refine this process.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Marketing is highly targeted at a defined set of verticals and personas across a portfolio of solutions that address business outcomes.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    ),
    'services' => array(
        'title' => 'Services',
        'description' => 'Services',
        'background' => 'services.png',
        'nuggets' => array(
            'managed.png',
            'intellectual.png',
        ),
        'intermission' => '
            <div class="text-lg leading-tight">
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>Customers are increasingly adopting managed services to help them improve their own operational efficiencies - this creates a massive opportunities for partners.</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>So much so, that almost half (46%) of partners currently offer managed services, and a further third plan to in 2018.</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>You’re almost done, but first, let’s talk about security&hellip;</p>
                    </div>
                </p>
            </div>
        ',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Services',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your services business.',
                        'name'=> 8,
                        'options'=>array(
                            array(
                                'label'=>'We offer some professional services on an ad-hoc basis. A basic service catalogue exists.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are considering packaging  the range of professional services we offer into managed services. We\'re expanding our service catalogue.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer advanced professional services and a portfolio of managed services which are available through a comprehensive service catalogue.  We have started in invest in tools for automation and management.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a highly automated and advanced services portfolio and we offer self-provisioning via the service catalogue',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer complex and specialized professional and managed services, which are aligned and deeply embedded across the business. Our advanced service catalogue enables flexible consumption models through its advanced features.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Services',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your support/service desk for your managed services offerings',
                        'name'=> 9,
                        'options'=>array(
                            array(
                                'label'=>'We do not have a service desk or the skills to offer any kind of support on managed services.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a small service desk which is equipped to offer basic support on a managed service. ',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a fully staffed service desk and we offer first-line support for all (or most of) our managed services through phone or email.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a fully staffed service desk from which we offer multichannel 24 x 7 support for all (or most) of our managed services.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer pre-emptive support based on sophisticated analytics on top of a fully staffed service desk from which we offer omni-channel 24 x 7 support for all (or most) of our managed services, which are secure-by-design.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Services',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your approach to standards and certifications.',
                        'name'=> 10,
                        'options'=>array(
                            array(
                                'label'=>'We invest in certifications and standards in an ad hoc, reactive manner ',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Industry minimum standards (e.g., PCI-DSS) are adhered to and we comply to the minimum technical certification requirements of our key vendors.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Relevant industry standards (e.g., ISO) and governance processes are in place. We have a technical certification programme and invest in advanced technical certifications',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We continuously invest in a range of certifications and guidelines. We have a mature and embedded governance programme and our technicians are highly certified . We are investing in specialisations.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'On top of our range of certifications, we have a mature and embedded governance programme and our technicians are highly certified (vendor certifications) with multiple specialisations. We have a library of of case studies, best practice, reusable tools and reference architectures.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    ),
    'security' => array(
        'title' => 'Security',
        'description' => 'Security',
        'background' => 'security.png',
        'nuggets' => array(
            'money.png',
            'demand.png',
            'cybersecurity.png',
            'hire.png',
        ),
        'intermission' => '
            <div class="text-lg leading-tight">
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>You’re almost there!</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>We\'ve already spoken about the growth in managed services. But security is another big opportunity – it is almost always the top priority for any IT buyer.her third plan to in 2018.</p>
                    </div>
                </p>
                <p class="mb-3">
                    <div class="flex items-start">
                        <img src="images/tools/9/icons/bullet.svg" alt="" class="w-3 mr-3 mt-1">
                        <p>Did you know, the growth rate of MSS in Western Europe is almost 9x faster than general IT outsourcing?</p>
                    </div>
                </p>
            </div>
        ',
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Security',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your in-house security capability.',
                        'name'=> 11,
                        'options'=>array(
                            array(
                                'label'=>'We lack any security-specific skills.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Security is a sales competence, but we lack technical skills.',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have some security technical capabilities in-house.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have competent security support skills, as well as higher-value technical consulting for customers.',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a full range of security skills and personnel (pre-sales architects, technical consultants, first-line support analysts).',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Security',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes the level of strategic importance you place on security.',
                        'name'=> 12,
                        'options'=>array(
                            array(
                                'label'=>'We do not have a service desk or the skills to offer any kind of support on managed services.',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a service desk which is equipped to offer basic support on a managed service. This is typically ad hoc (based on customer demand) and is not a standard. ',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a fully staffed service desk and we offer first-line support for all (or most of) our managed services through call or email ticketing services.',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a fully staffed service desk from which we offer multichannel 24 x 7 support for all (or most) of our managed services. ',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer pre-emptive support based on sophisticated analytics on top of a fully staffed service desk from which we offer omni-channel 24 x 7 support for all (or most) of our managed services which are secure-by-design. ',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Security',
                'questions' => array(
                    'q13'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes the level of certifications and skills you have in security.',
                        'name'=> 13,
                        'options'=>array(
                            array(
                                'label'=>'We have no security-specific skills.  ',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have basic security certifications.    ',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have lower-value security-specific technical skills (e.g., first-line support).',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a mix of security-specific tech skills (e.g., security technical consulting). ',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a full range of security architects, security specialists and GDPR experts in-house and we understand compliance relating to multicloud.',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    ),
    'metrics' => array(
        'title' => 'Metrics',
        'description' => 'Metrics',
        'ignore' => true,
        'class' => 'sec3',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Metrics',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'Please select a statement which best describes your in-house security capability.',
                        'name'=> 14,
                        'options'=>array(
                            array(
                                'label'=>'Less than £1M',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between £1M and £10M',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between £10M and £100M',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between £100M and £200M',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between £200M and £500M',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Over £500M',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page2' => array(
                'title' => 'Metrics',
                'questions' => array(
                    'q15'=>array(
                        'type'=>'button',
                        'question'=>'Please indicate the size of your organisation in terms of employees',
                        'name'=> 15,
                        'options'=>array(
                            array(
                                'label'=>'Less than 50 staff',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between 50 and 100 staff',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between 100 and 250 staff',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between 250 and 500 staff',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Between 500 and 1,000 staff',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'More than 1,000 staff',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Metrics',
                'questions' => array(
                    'q16'=>array(
                        'type'=>'button',
                        'question'=>'What type of growth have you experienced in the last year? ',
                        'name'=> 16,
                        'options'=>array(
                            array(
                                'label'=>'Significant decline',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Moderate decline',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Flat',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Moderate growth',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Significant growth',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    ),
                    'q17'=>array(
                        'type'=>'slider',
                        'question'=>'How long have you been active in the security space?',
                        'name'=> 17,
                        'options'=>array(
                            array(
                                'label'=>'0 years',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'1 year',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'2 years',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'3 years',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'4 years',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'5+ years',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    ),
                    'q18'=>array(
                        'type'=>'slider',
                        'question'=>'How long have you been actively providing managed services?',
                        'name'=> 18,
                        'options'=>array(
                            array(
                                'label'=>'0 years',
                                'value'=>1,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'1 year',
                                'value'=>2,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'2 years',
                                'value'=>3,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'3 years',
                                'value'=>4,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'4 years',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'5+ years',
                                'value'=>5,
                                'checked'=>false,
                            )
                        )
                    )
                )
            ),
        )
    )
);