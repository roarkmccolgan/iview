<?php
return array(
    'cloud-vision-and-stratgey' => array(
        'class' => 'sec1',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Cloud Vision and Strategy',
                'questions' => array(
                    'q1'=>array(
                        'type'=>'button',
                        'question'=>'Which best describes your overall business model? We focus on:',
                        'name'=>'q1',
                        'options'=>array(
                            array(
                                'label'=>'Project-based business and refer any cloud opportunities to our vendor partners.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Project-based business and we resell vendor-branded cloud products on an ad hoc basis, adding value where we can.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Converting project-based business into recurring revenue contracts, adding our own professional services where possible.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Delivering vendor cloud offerings that are attached to our professional services including business consulting, systems integration, migration, and managed services.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Delivering our own branded recurring revenue cloud services.',
                                'value'=>5,
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
                        'question'=>'Which best describes your company\'s cloud business focus for your customers? We focus on:',
                        'name'=>'q2',
                        'options'=>array(
                            array(
                                'label'=>'Reselling public cloud services such as SaaS, IaaS, and PaaS.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Building on-premise private cloud environments.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Building private cloud environments and providing managed services either on-premise or within our datacenters.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Enabling hybrid cloud environments by bringing together our cloud builder, professional services, and multiple vendor public cloud offerings.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Delivering any type of cloud architecture demanded by our customers.',
                                'value'=>5,
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
                        'question'=>'How are investments for your cloud business structured? Budgeting and planning is:',
                        'name'=>'q3',
                        'options'=>array(
                            array(
                                'label'=>'At an individual product level. We do not have a separate cloud business unit. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Year-on-year. We are not sure about cloud from a long-term investment perspective. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Long-term. We have set investment targets over the next two to three years.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Long-term. The majority of our investment will go toward cloud as a part of our core business strategy.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Long-term. Cloud underpins all aspects of investments across people, infrastructure, partnerships, and sales.',
                                'value'=>5,
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
                        'question'=>'How is your cloud division structured? Our cloud division is:',
                        'name'=>'q4',
                        'options'=>array(
                            array(
                                'label'=>'Part of a broader company portfolio. There is no separate target for cloud. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A separate product management unit with a dedicated resource, but flexible revenue targets.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A separate business unit with its own P&L, and all sales personnel carry fixed top-line targets for cloud.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A separate business unit with its own P&L and dedicated sales, pre-sales, and support personnel, who carry fixed revenue and profitability targets.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'A separate business unit with decision-making autonomy and its own datacenter, service desk, and support infrastructure, along with profitability targets.',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'process-and-skill-sets' => array(
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Process and Skill-Sets',
                'questions' => array(
                    'q5'=>array(
                        'type'=>'button',
                        'question'=>'How does your organization measure your cloud business? We have:',
                        'name'=>'q5',
                        'options'=>array(
                            array(
                                'label'=>'No established cloud goals or measurements for success in place.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Recurring revenue growth goals, but we cannot track cloud profit, and do not separate out cloud financials.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud-based targets, using specific KPIs and metrics, with a separate cloud P&L.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud services based on projected lifetime customer value, and systems and processes in place to reduce customer churn and optimize our cloud profitability.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Systems, processes, and KPIs designed to optimize cloud profitability based on a defined mix of our own high-margin recurring revenue services and vendor services.',
                                'value'=>5,
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
                        'question'=>'How does your organization deliver on your cloud projects? Cloud projects are:',
                        'name'=>'q6',
                        'options'=>array(
                            array(
                                'label'=>'Started from scratch. We have yet to develop reusable processes/methodologies.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Started from a basic framework. We have some reusable cloud implementation methodologies to leverage.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Started from a moderate framework. Major tasks that are common to most cloud implementations have been industrialized for reuse.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Started from a library of best practices, reusable tools, codes, and reference architectures to reduce implementation effort.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Delivered through automated practices, reducing time to deliver our cloud professional services.',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'marketing' => array(
        'class' => 'sec4',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Sales',
                'questions' => array(
                    'q7'=>array(
                        'type'=>'button',
                        'question'=>'What is your organization\'s marketing strategy?',
                        'name'=>'q7',
                        'options'=>array(
                            array(
                                'label'=>'We rely on leads from our vendor partners and our own traditional outbound marketing. ',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We focus our campaigns on market segments we are successful in, often using vendor-generated marketing tools and content. ',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Alongside our traditional outbound marketing, we have developed some digital marketing, focused on influencing the pre-sales process and delivering qualified leads to sales. ',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sales is actively segmenting prospects and is sophisticated enough to take the lead through half the sales process. We have also automated some marketing activities. ',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Sales leverages an effective combination of digital, social, and content-driven approaches, including customer analytics and persona targeting, to drive prospects through the sales cycle.',
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
                'title' => 'Sales',
                'questions' => array(
                    'q8'=>array(
                        'type'=>'button',
                        'question'=>'How are your marketing tactics for cloud organized?',
                        'name'=>'q8',
                        'options'=>array(
                            array(
                                'label'=>'We do not run specific campaigns for cloud and we do not have specific measurable goals, or track cost per lead/cost per close for our campaigns.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We run limited campaigns for cloud and primarily rely on vendor-sponsored and -run campaigns.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We run a combination of our own campaigns for cloud and vendor-designed campaigns. We track these campaigns against defined KPIs.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have achieved an efficient cost-per-close campaign approach for cloud, which is central to our cloud sales strategy.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are continuously aiming for a lower cost per close approach through deep analysis of campaign results.',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'sales' => array(
        'class' => 'sec4',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Sales',
                'questions' => array(
                    'q9'=>array(
                        'type'=>'button',
                        'question'=>'How have you structured your cloud sales approach?',
                        'name'=>'q9',
                        'options'=>array(
                            array(
                                'label'=>'We have a few cloud sales specialists while the rest of the team still focus on the on-premise business.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We are building a larger team of cloud specialists that will support the on-premise sales team specifically for cloud opportunities.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'We have begun to integrate cloud into all salespeople\'s portfolios with compensation plans for both our on-premise installed based and rewards for new cloud business.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud is fully integrated into all salespeople\'s portfolios and we have well-qualified cloud pre-sales to support activities.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'All sales people are focused on selling cloud solutions and our sales incentives are built to deliver customer value regardless of cloud delivery model.',
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
                'title' => 'Sales',
                'questions' => array(
                    'q10'=>array(
                        'type'=>'button',
                        'question'=>'What is your pre-sales approach for your cloud business? Our pre-sales team:',
                        'name'=>'q10',
                        'options'=>array(
                            array(
                                'label'=>'Is focused on supporting large on-premise deals and has not developed any specific cloud capabilities.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Has begun to build out some cloud-specific capabilities.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Has certified itself on specific vendor cloud products and platforms.',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Focuses on bringing cloud architecture best practices to our customer engagements across multiple delivery models.',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Is able to work with our vendor partners to co-innovate on solutions for customers.',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Sales',
                'questions' => array(
                    'q11'=>array(
                        'type'=>'button',
                        'question'=>'How you are compensating your sales people today on cloud or other deals that have recurring revenue to your business? Our sales team is compensated:',
                        'name'=>'q11',
                        'options'=>array(
                            array(
                                'label'=>'For the overall target for sales regardless of on-premise or cloud.',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Up front, paying the salesperson a commission on each deal including first year subscription or license fees.',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Over the life of the customer contract, paying salespeople a percentage commission on all revenue, recurring or otherwise. ',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Using a mix of upfront and ongoing commission structures. ',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Using a mix of upfront and ongoing commission in addition to specific KPIs such as customer satisfaction, new customer growth, and renewal rates. ',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    ),
    'business-mix' => array(
        'class' => 'sec5',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q12'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following solutions do you offer? Select all that apply.',
                        'name'=>'q12',
                        'options'=>array(
                            array(
                                'label'=>'Public cloud software resale',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Public cloud hardware resale',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Private or hybrid cloud build services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud managed services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Cloud consulting',
                                'value'=>1,
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
                    'q13'=>array(
                        'type'=>'checkbox',
                        'question'=>'Which of the following IT services do you offer to support your SaaS business? Select all that apply',
                        'name'=>'q13',
                        'options'=>array(
                            array(
                                'label'=>'Training and education services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Consulting services',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Integration services',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'Support services',
                                'value'=>1,
                                'checked'=>false
                            )
                        )
                    )
                )
            ),
            'page3' => array(
                'title' => 'Business Mix',
                'questions' => array(
                    'q14'=>array(
                        'type'=>'button',
                        'question'=>'What percentage of your overall revenue can you attribute to your cloud business?',
                        'name'=>'q14',
                        'options'=>array(
                            array(
                                'label'=>'0%',
                                'value'=>0,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'1-5%',
                                'value'=>1,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'6-10%',
                                'value'=>2,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'11-20%',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'21-30%',
                                'value'=>3,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'31-40%',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'41-50%',
                                'value'=>4,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'51-60%',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'61-70%',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'71-80%',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'81-90%',
                                'value'=>5,
                                'checked'=>false
                            ),
                            array(
                                'label'=>'91-100%',
                                'value'=>5,
                                'checked'=>false
                            )
                        )
                    )
                )
            )
        )
    )
);