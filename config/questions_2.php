<?php
return array(
    /*'screeners' => array(),*/
    'it-security' => array(
        'class' => 'sec2',
        'display' => true,
        'complete' => false,
        'pages' => array(
            'page1' => array(
                'title' => 'IT Security',
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
                'title' => 'IT Security',
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
    )
);