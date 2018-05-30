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
        'intermission' => [
            '
                <p class="w-full mb-4">
                    Selling managed services effectively requires new approaches and new compensation models.
                </p>
            ',
            '
                <div class="w-full my-3 bg-blackblack border border-black sm:w-1/2 p-3">
                    <p class="mb-1 text-lg">71% of partners are currently or considering building a</p>
                    <div class="flex items-start text-4xl text-grey-dark">
                        <svg class="w-10 h-10 fill-current text-trend-red mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.98 85.22"><path class="cls-1" d="M58,37.76H7a1.84,1.84,0,0,0-1.28.53,1.91,1.91,0,0,0-.53,1.28V78.29a1.82,1.82,0,0,0,.53,1.25A1.72,1.72,0,0,0,7,80.06H58a1.81,1.81,0,0,0,1.78-1.78V39.57a1.76,1.76,0,0,0-.53-1.28A1.83,1.83,0,0,0,58,37.76ZM7,32.59H58a7,7,0,0,1,7,7V78.28a7,7,0,0,1-7,6.94H7A7.07,7.07,0,0,1,2,83.2a7.05,7.05,0,0,1-2-4.92V39.56a7,7,0,0,1,7-7Z"/><path class="cls-1" d="M52.29,34.49v-9.8a19.81,19.81,0,0,0-39.62,0v9.8H7.78v-9.8a24.7,24.7,0,0,1,49.4,0v9.8Z"/><path class="cls-1" d="M35.33,56.09a3.92,3.92,0,0,0-2.83-1.18,4,4,0,0,0-2.86,6.84,4.13,4.13,0,0,0,2.86,1.18,4,4,0,0,0,4-4A4,4,0,0,0,35.33,56.09Zm-2.83-6.35A9.18,9.18,0,1,1,26,65.43a9.25,9.25,0,0,1,0-13A9.17,9.17,0,0,1,32.49,49.74Z"/></svg>
                        <p class="text-grey">"CUSTOMER FOR LIFE"</p>
                    </div>
                    <p class="mt-3 text-lg">programme to focus on retention and renewal of recurring-revenue services</p>
                </div>
            ',
            '
                <p class="w-full my-4">It also has implications for how you go to market&hellip;</p>
            '
        ],
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
                                'value'=>1.25,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Sales people have some experience in selling services.',
                                'value'=>2.5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Sales people are actively looking to convert our project business to an managed services business.',
                                'value'=>3.75,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Our main sales focus is winning new managed security services (MSS) business from new clients.',
                                'value'=>5,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Vast majority of our business is MSS, with sales teams looking to tailor solutions to customers.',
                                'value'=>6.25,
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
                                'value'=>1.25,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have begun to build out managed services capabilities across the pre-sales team.',
                                'value'=>2.50,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Some of our pre-sales teams are focused solely on supporting managed services business.',
                                'value'=>3.75,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Most of our pre-sales team are managed services focused.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Our pre-sales team create opportunities for our vendor partners and provide bespoke, specific managed services offerings to customers.',
                                'value'=>6.25,
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
                                'value'=>1.25,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are beginning to transform commission models, often offering sales teams upfront compensation on any recurring business they win.',
                                'value'=>2.50,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have transformed incentive plans to ensure the managed services opportunity is seen as lucrative.',
                                'value'=>3.75,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have transitioned to offer sales staff a mix of upfront and ongoing commission, with incentives in place to encourage sales of managed services.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We pay ongoing commission, as well as incentivise KPIs on customer satisfaction, renewals and growth.',
                                'value'=>6.25,
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
                        'question'=>'Please select a statement which best describes your approach to billing',
                        'name'=> 4,
                        'options'=>array(
                            array(
                                'label'=>'We do not offer any support around our MSP offerings',
                                'value'=>1.25,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer support on an ad-hoc basis as customers require',
                                'value'=>2.50,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'First-line support is standard',
                                'value'=>3.75,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer 24/7 support through dedicated staff',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer pre-emptive support based on sophisticated analytics ',
                                'value'=>6.25,
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
        'intermission' => [
            '
                <p class="w-full mb-4">
                    It\'s critical to get your digital marketing strategy, experience and presence right - embracing digital methods and meeting your customers\' expectations of a good digital experience.
                </p>
            ',
            '
                <div class="w-full my-3 bg-blackblack border border-black sm:w-1/2 p-3">
                    <div class="flex items-center text-grey-dark">
                        <p class="text-grey mr-2">65% of B2B technology buyers only contact a sales person AFTER a decision has been made &hellip; and they\'re going online to</p>
                        <img class="w-32 h-32" src="/images/tools/9/icons/boat.svg" />
                    </div>
                </div>
            ',
            '
                <p class="w-full my-4">Next - let\'s think about services.</p>
            '
        ],
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We decide on what to market and leads come from traditional activities such as events or advertising with some use of digital media.',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Digital marketing is used alongside traditional marketing, by dedicated marketing staff, but it does not always follow the buyer journey.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Marketing has a close alignment with sales teams and sales process and is focused on the buyer journey and buyer requirements.',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a sophisticated marketing function with a dedicated team of specialists, using digital media throughout the buyer journey.',
                                'value'=>8.33,
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We measure basic marketing outcomes such as number of attendees to events, leads from campaigns or sales meetings.',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We use a basic measurement process for marketing, based on leads from specific campaigns, and use this to make improvements.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We track all marketing processes and prospect interactions and understand what customers need to make a purchasing decision.',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have developed a fully automated marketing process that continues to evolve based on ongoing results and successes.',
                                'value'=>8.33,
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We focus our campaigns on specific verticals and are looking to develop messages for specific buyers and businesses.',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We actively target specific people in prospects\' businesses and are looking to wider opportunities based on feedback.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Target marketing at specific buyer personas within sectors and continue to refine this process.',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Marketing is highly targeted at a defined set of verticals and personas across a portfolio of solutions that address business outcomes.',
                                'value'=>8.33,
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
        'intermission' => [
            '
                <p class="w-full mb-4">
                    Customers are increasingly adopting managed services to help them improve their own operational efficiencies - this creates a massive opportunities for partners.
                </p>
            ',
            '
                <div class="w-full my-3 bg-blackblack border border-black sm:w-1/2 p-3">
                    <div class="flex items-center text-grey-dark">
                        <p class="text-grey mr-2">46% of partners currently offer managed services and 33% are planning to in 2018</p>
                        <img class="w-32 h-32" src="/images/tools/9/icons/services.svg" />
                    </div>
                </div>
            ',
            '
                <p class="w-full my-4">You’re almost done, but first, let’s talk about security&hellip;</p>
            '
        ],
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are considering packaging  the range of professional services we offer into managed services. We\'re expanding our service catalogue.',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer advanced professional services and a portfolio of managed services which are available through a comprehensive service catalogue.  We have started in invest in tools for automation and management.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a highly automated and advanced services portfolio and we offer self-provisioning via the service catalogue',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer complex and specialized professional and managed services, which are aligned and deeply embedded across the business. Our advanced service catalogue enables flexible consumption models through its advanced features.',
                                'value'=>8.33,
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a small service desk which is equipped to offer basic support on a managed service. ',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a fully staffed service desk and we offer first-line support for all (or most of) our managed services through phone or email.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a fully staffed service desk from which we offer multichannel 24 x 7 support for all (or most) of our managed services.',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We offer pre-emptive support based on sophisticated analytics on top of a fully staffed service desk from which we offer omni-channel 24 x 7 support for all (or most) of our managed services, which are secure-by-design.',
                                'value'=>8.33,
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Industry minimum standards (e.g., PCI-DSS) are adhered to and we comply to the minimum technical certification requirements of our key vendors.',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Relevant industry standards (e.g., ISO) and governance processes are in place. We have a technical certification programme and invest in advanced technical certifications',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We continuously invest in a range of certifications and guidelines. We have a mature and embedded governance programme and our technicians are highly certified . We are investing in specialisations.',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'On top of our range of certifications, we have a mature and embedded governance programme and our technicians are highly certified (vendor certifications) with multiple specialisations. We have a library of of case studies, best practice, reusable tools and reference architectures.',
                                'value'=>8.33,
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
        'intermission' => [
            '
                <p class="w-full mb-4">
                    Did you know the growth rate of MSS in Western Europe is almost 9x faster than general IT outsourcing? 
                </p>
            ',
            '
                <div class="w-full my-3 bg-blackblack border border-black sm:w-1/2 p-3">
                    <div class="flex items-start text-4xl text-grey-dark">
                        <svg class="w-10 h-10 fill-current text-trend-red" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 63 63"><path class="cls-1" d="M31.5,9.46a2.22,2.22,0,0,0-2.07,2.07v2.26c-5.3.85-9,4.87-9,9.45A8.9,8.9,0,0,0,24,30.45a20.64,20.64,0,0,0,7,3,18,18,0,0,1,5.6,2.35,4.23,4.23,0,0,1,1.85,3.94c0,2.74-2.32,5.51-6.89,5.51a8.49,8.49,0,0,1-5-1.66,4.28,4.28,0,0,1-1.94-3.16,2.07,2.07,0,1,0-4.13,0,8.28,8.28,0,0,0,3.57,6.46,12.38,12.38,0,0,0,5.38,2.32v2.24a2.07,2.07,0,0,0,4.13,0V49.24c5.3-.85,9-4.89,9-9.47A8.94,8.94,0,0,0,39,32.53a20.64,20.64,0,0,0-7-3,18,18,0,0,1-5.6-2.35,4.19,4.19,0,0,1-1.85-3.92c0-2.74,2.32-5.51,6.89-5.51a8.47,8.47,0,0,1,5,1.64,4.31,4.31,0,0,1,1.94,3.19,2.07,2.07,0,1,0,4.13,0,8.28,8.28,0,0,0-3.57-6.46,12.38,12.38,0,0,0-5.38-2.32V11.52A2.21,2.21,0,0,0,31.5,9.46Zm0-4.82A26.87,26.87,0,1,1,4.63,31.5,26.84,26.84,0,0,1,31.5,4.63ZM31.5.5a31,31,0,1,0,31,31A31,31,0,0,0,31.5.5Z"/></svg>
                        <p class="text-grey">FOLLOW THE MONEY</p>
                    </div>
                    <p class="mt-3 text-lg">By 2021 European security revenues will have grown by 7.8% compared with just 5.8% for other software</p>
                </div>
            ',
            '
                <p class="w-full my-4">You\'re almost there. Just some background questions to understand your business a little more&hellip;</p>
            '
        ],
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Security is a sales competence, but we lack technical skills.',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have some security technical capabilities in-house.',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have competent security support skills, as well as higher-value technical consulting for customers.',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a full range of security skills and personnel (pre-sales architects, technical consultants, first-line support analysts).',
                                'value'=>8.33,
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
                        'question'=>'Please select a statement which best describes the level of strategic importance you place on security ',
                        'name'=> 12,
                        'options'=>array(
                            array(
                                'label'=>'We do not see security as a significant opportunity for our business',
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We view security as a potential growth driver to our business, but are yet to embrace this opportunity',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We are fully committed to security, but are yet to maximise its potential within our business',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Security is key to our future and the growth of the business moving forward',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'Security is a central feature of our business and where we see the greatest potential for growth in the coming years',
                                'value'=>8.33,
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
                                'value'=>1.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have basic security certifications.    ',
                                'value'=>3.33,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have lower-value security-specific technical skills (e.g., first-line support).',
                                'value'=>5.00,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a mix of security-specific tech skills (e.g., security technical consulting). ',
                                'value'=>6.67,
                                'checked'=>false,
                            ),
                            array(
                                'label'=>'We have a full range of security architects, security specialists and GDPR experts in-house and we understand compliance relating to multicloud.',
                                'value'=>8.33,
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
                        'question'=>'Please indicate the size of your business in terms of revenue',
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