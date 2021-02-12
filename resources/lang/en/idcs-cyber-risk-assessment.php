<?php

//fireeye
return [
    'stage1' => 'Ad-Hoc',
    'stage2' => 'Opportunistic',
    'stage3' => 'Repeatable',
    'stage4' => 'Managed',
    'stage5' => 'Optimized',
    'question-title' => 'performance ranking by question',
    'question-intro' => '
        <p>
            We\'re now going to look at how you performed in three key areas of Cyber Risk Readiness. In each case, we\'ll look at how you compared to others in the same readiness ranking of <strong>:rating</strong> as yourself. To do this, we look at whether you are behind, in-line or ahead of your peers.
        </p>
        <p>
            If you are in-line, you are broadly comparable to most companies at your level of readiness. If you are ahead, you are doing well in this area and should be looking at other areas to improve to get a balanced approach. If you are behind, you need to focus attention and investment in this area to bring your Cyber Risk Readiness in to line.
        </p>

If you achieve a rating of in-line or ahead in all sections, you are ready to be moving up a readiness level in short order."
    ',
    'completecopy' => [
        'graphtitle' => 'Your Cyber Risk Readiness',
        'fullreport' => 'Would you like the full report that provides you with essential guidance for advancing your Cyber Risk strategy?',
        'provide' => 'We can send this directly to your mailbox. Just provide us your details and we\'ll send it to you.',
        'stage1' => '
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your total responses, your readiness ranking is <strong>Ad-hoc</strong>, which is the lowest rank of the five assessment levels.
            </p>
            <p>
                You are in the lowest 10% of companies in the ranking, and have a lot of areas in which to improve. Your business and data are seriously at risk if you do not take urgent steps to improve, and you are left open to industry and regulatory sanctions and fines if a breach results in the loss of personal or confidential information.
            </p>
        ',
        'stage2' => '
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Opportunistic, which is second lowest rank of the five different readiness levels.
            </p>
            <p>
                You are in the lowest 20% of companies in the ranking, and have a lot of areas in which to improve. Your business and data are at risk if you do not take urgent steps to improve. You are left open to industry and regulatory sanctions and fines if a breach results in the loss of personal or confidential information.
            </p>
        ',
        'stage3' => '
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Repeatable, which is middle of the five different readiness levels.
            </p>
            <p>
                You are generally in the mainstream when it comes to Cyber Risk capabilities, but still have plenty of room for improvement to reduce your risk of  cyber breach possible associated penalties or sanctions.
            </p>
        ',
        'stage4' => '
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Managed, which is second from the top rank of the five different readiness levels.
            </p>
            <p>
                You are ahead of the mainstream and in the top 20% when it comes to Cyber Risk capabilities, but still have plenty of room for improvement to reduce your risk of  cyber breach possible associated penalties or sanctions.
            </p>
        ',
        'stage5' => '
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Optimized, which is the top rank of the five different readiness levels.
            </p>
            <p>
                You are way ahead of the mainstream and in the top 5% of companies when it comes to Cyber Risk capabilities. While you are one of the leaders, the work never stops and you can still look to improve in various areas to keep reducing the likelihood of a data breach.
            </p>
        ',
        'instruction' => '
            <p>
                We can send you the full report directly to your mailbox.<br/>
                Just provide us your name and email and we\'ll send you a link to download it.
            </p>
        ',
    ],
    'complete_thankyou' => 'Thank you :Fname,',
    'complete_body' => 'Your custom report will arrive in your inbox soon, while you\'re waiting, why not tweet your results and see how your followers do?',
    'complete_tweet' => 'I\'ve just taken the @IDCUKI Cyber Risk Readiness Assessment Sponsored by @fireeye, we\'re at :result. Interested?', // http://bit.ly/2g8WN1d
    'email'=>[
        'subject' => 'IDC Report',
        'hi' => 'Hi :Fname',
        'body' => '
            Your Cyber Risk Readiness Assessment report is here.<br/>
            The report breaks down your results by category and helps you benchmark yourself against other organizations.
        ',
        'link' => 'Download Report',
        'extra' => 'Once you\'ve digested the report why not visit <a href="http://www.fireeye.com" style="color:#E66B6B">FireEye</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team',
    ],
    'introduction_title' => 'Custom report summary and overall performance ranking',
    'performancerankingbycategory' => 'Performance Ranking By Category',
    'introduction' => '',
    'introduction-image' => 'report.jpg',
    'overall' => [
        'title'=>'Your overall security readiness',
        'graph-title'=>'How you compare overall',
        'image'=>'',
        'overall_country_graph-title' => 'Your comparison to others in your country',
        'overall_size_graph-title' => 'Your comparison to companies of similar size',
        'stage1'=>'
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your total responses, your readiness ranking is Ad-hoc, which is the lowest rank of the five assessment levels.
            </p>
            <p>
                You are in the lowest 10% of companies in the ranking, and have a lot of areas in which to improve. Your business and data are seriously at risk if you do not take urgent steps to improve, and you are left open to industry and regulatory sanctions and fines if a breach results in the loss of personal or confidential information.
            </p>
        ',
        'stage2'=>'
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Opportunistic, which is second lowest rank of the five different readiness levels.
            </p>
            <p>
                You are in the lowest 20% of companies in the ranking, and have a lot of areas in which to improve. Your business and data are at risk if you do not take urgent steps to improve. You are left open to industry and regulatory sanctions and fines if a breach results in the loss of personal or confidential information.
            </p>
        ',
        'stage3'=>'
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Repeatable, which is middle of the five different readiness levels.
            </p>
            <p>
                You are generally in the mainstream when it comes to Cyber Risk capabilities, but still have plenty of room for improvement to reduce your risk of  cyber breach possible associated penalties or sanctions.
            </p>
        ',
        'stage4'=>'
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Managed, which is second from the top rank of the five different readiness levels. 
            </p>
            <p>
                You are ahead of the mainstream and in the top 20% when it comes to Cyber Risk capabilities, but still have plenty of room for improvement to reduce your risk of  cyber breach possible associated penalties or sanctions.
            </p>
        ',
        'stage5'=>'
            <p>
                Thank you for completing the IDC Cyber Risk Assessment. Based on your responses, your readiness ranking is Optimized, which is the top rank of the five different readiness levels.
            </p>
            <p>
                You are way ahead of the mainstream and in the top 5% of companies when it comes to Cyber Risk capabilities. While you are one of the leaders, the work never stops and you can still look to improve in various areas to keep reducing the likelihood of a data breach.
            </p>
        ',
    ],
    'cyber-risk-management-and-the-business' => [
        'title'=>'Cyber Risk Management and the Business',
        'image'=>'cloud-vision-and-strategy.jpg',
        'pb'=>'pb',
        'stage1'=>'
            stage 1 man
        ',
        'stage2'=>'
            stage 2
        ',
        'stage3'=>'
            stage 3
        ',
        'stage4'=>'
            stage 4
        ',
        'stage5'=>'
            Stage 5
        ',
        'behind' => '
            <p>
                Warning! You are behind in this core area of Cyber Risk management, and need to urgently improve matters to reduce your exposure to cyber threats and potential fines or loss of reputation.
            </p>
        ',
        'inline' => '
            <p>
                Impressive showing! You are in-line in this core area of Cyber Risk management,, but should still look to emerging ways to improve your ability to secure your IT domain.
            </p>
        ',
        'ahead' => '
            <p>
                Excellent showing! You are performing ahead of your peers in this area of Cyber Risk management but should still be reassessing how you do things to keep ahead of the game.
            </p>
        ',
    ],
    'cyber-risk-management-operations-and-defence' => [
        'title'=> 'Cyber Risk Management Operations and Defence',
        'image'=>'processes-and-skill-sets.jpg',
        'pb'=>'pb',
        'stage1'=>'
            stage 1
        ',
        'stage2'=>'
            stage 2
        ',
        'stage3'=>'
            stage 3
        ',
        'stage4'=>'
            stage 4
        ',
        'stage5'=>'
            Stage 5
        ',
        'behind' => '
            <p>
                Alert! You are behind your peers in this critical area of detecting and eradicating breaches, and you should focus on bringing your capabilities here up to speed.
            </p>
        ',
        'inline' => '
            <p>
                Job well done! You are performing in-line in this area of Cyber Risk management, but should still look to new approaches to help you improve your overall Cyber Risk readiness.
            </p>
        ',
        'ahead' => '
            <p>
                Top of the class! You are performing ahead of your peers in this area of Cyber Risk management but can always find ways to improve over time as new approaches emerge.
            </p>
        ',
    ],
    'cyber-risk-management-breach-detection-and-remediation' => [
        'title'=> 'Cyber Risk Management Breach Detection and Remediation',
        'image'=>'business-mix.jpg',
        'pb'=>'pb',
        'stage1'=>'
            stage 1
        ',
        'stage2'=>'
            stage 2
        ',
        'stage3'=>'
            stage 3
        ',
        'stage4'=>'
            stage 4
        ',
        'stage5'=>'
            Stage 5
        ',
        'behind' => '
            <p>
                Action is needed! You are behind your peers when it comes to managing Cyber Risk in conjunction with the business. You should look to form a closer relationship with the business to improve how you approach managing and funding Cyber Risk Readiness.
            </p>
        ',
        'inline' => '
            <p>
                Good performance! You are in-line with your peers when it comes to managing Cyber Risk in conjunction with the business. You should still look to form a closer relationship with the business to improve your overall Cyber Risk readiness if you want to move up the readiness rankings.
            </p>
        ',
        'ahead' => '
            <p>
                Top job! You are ahead of your peers when it comes to managing Cyber Risk in conjunction with the business. You are performing very well in this area of Cyber Risk management but should not become complacent and continually reassess what you do.
            </p>
        ',
    ],
    'questions' => [
        'q1'=>[
            'behind' => '
                <p>
                    You need to work on elevating the awareness of the importance of IT within senior management of how Digital Transformation can help the company succeed through better efficiencies or capturing new markets.
                </p>
            ',
            'inline' => '
                <p>
                    You should look to ways to improve the awareness and understanding among business leaders of what IT can do to improve the profitability and competitiveness of the company.
                </p>
            ',
            'ahead' => '
                <p>
                    Keep in mind that technologies and capabiltiies are always moving on and you should regularly re-assess what you do and how you do it
                </p>
            ',
        ],
        'q2'=>[
            'behind' => '
                <p>
                    Look to new ways to deploy and manage IT, through approaches such as automation and risk management, to deliver new services quickly and with confidence.
                </p>
            ',
            'inline' => '
                <p>
                    Look at ways to enhance your capabilities here through policy and automation to ensure that you can deliver applications and services quickly and securely.
                </p>
            ',
            'ahead' => '
                <p>
                    While much of your focus on improving Cyber Risk Managament can be elsewhere, you should continue to adopt and optimise advanced capabilities around policy, management and automation & orchestration.
                </p>
            ',
        ],
        'q3'=>[
            'behind' => '
                <p>
                    A more mature approach to risk will help you to achieve a better balance between usability and security in your environment, bearing in mind the \'crown jewels\' that must be protected at all costs.  Try to adopt a risk-based approach to where a compromise can be made in order to further business development goals.
                </p>
            ',
            'inline' => '
                <p>
                    Your are performing well, but there is room for improvement. Leading-edge firms are able to actively identify and manage risks in order to help the business develop. Try to take a more active role in identifying, analysing and managing risk, while developing a firm understanding of your business\' appetite for risk.
                </p>
            ',
            'ahead' => '
                <p>
                    In order to be truly leading edge you must continue to push the boundaries.  Work to establish where compromises can be made, bearing in mind the \'crown jewels\' that must absolutely remain locked down at all costs, in order to find new opportunities for development. 
                </p>
            ',
        ],
        'q4'=>[
            'behind' => '
                <p>
                    Consider putting in place a formal risk assessment process and develop a proactive breach detection approach in order to understand where risks exist and how to react when these risks become reality. Further steps can then be layered on to enhance your approach, such as the development of internal and external communications plans, a breach notification plan and a breach remediation plan.
                </p>
            ',
            'inline' => '
                <p>
                    Consider the development of a breach notification plan - especially important given that this will be a requirement of the EU\'s upcoming General Data Protection Regulation for handling EU citizens\' personal data - and an over-arching breach response plan that can provide guidance for how to react at each stage of the process.
                </p>
            ',
            'ahead' => '
                <p>
                    You are forward thinking in how you manage the risk of security breaches and plan your responses in the event of a breach. However, as a next step, consider how cyber risk insurance can be harnessed not only to mitigate the potential costs of a breach, but also as a driver for excellence - and thus it becomes a potential source of competitive advantage in how customer data is handled.
                </p>
            ',
        ],
        'q5'=>[
            'behind' => '
                <p>
                    Consider the business imperative for digital transformation and the exposure to risk that arises as a result, consider how IT and the business can work together in order to develop an approach to cyber risk that is appropriate for all parties and can help the business to meet its targets.
                </p>
            ',
            'inline' => '
                <p>
                    Consider how cyber risk can be driven and managed on an enterprise-wide basis given that the reality of business operaitons in today\'s cloud- and mobile-first world means that the potential exposure to cyber risk is an enterprise-wide concern.
                </p>
            ',
            'ahead' => '
                <p>
                    Consider how cyber risk management can be embedded within the development of new business priorities in order to ensure the proactive identification and management of cyber risk with a view to facilitating business goals.
                </p>
            ',
        ],
        'q6'=>[
            'behind' => '
                <p>
                    Best practice in Cyber Risk management involves broad CxO engagement as well as having focused Risk and Compliance officers. Consider ways to bring more involvement and responsibility from the business, particularly with compliance experts and involving the operations leaders.  Make effective use of third parties to gauge best practice.
                </p>
            ',
            'inline' => '
                <p>
                    Best practice in Cyber Risk management involves broad CxO engagement as well as having focused Risk and Compliance officers. Consider ways to bring more involvement and responsibility from the business, particularly with compliance experts and involving the operations leaders.  Make effective use of third parties to gauge best practice.
                </p>
            ',
            'ahead' => '
                <p>
                    In order to take this framework to the next level, consider how specialists in the fields of risk, compliance and security both in the board room and below it can make a positive contribution to this process. Make effective use of third parties to gauge best practice.
                </p>
            ',
        ],
        'q7'=>[
            'behind' => '
                <p>
                    Security is unlikely to be involved any sooner than the implementation stage of the project (by which point it will be no more than a bolt-on concern, with variable success) or possibly only when something goes wrong (by which stage it is far too late). Consider how security can play a role at least in the planning stage of any new business initiative, if not sooner.
                </p>
            ',
            'inline' => '
                <p>
                    Consider how security can play a key role from the beginning of the planning stage on new business initiatives: not just one of the stakeholders around the table, but a key voice in shaping the development and implementation of the project. 
                </p>
            ',
            'ahead' => '
                <p>
                    Consider how security can become a leading voice in the planning of new initiatives. Further, ensure that security remains a top priority right through the development, testing and implementation of projects, and for ongoing \'business as usual\'.
                </p>
            ',
        ],
        'q8'=>[
            'behind' => '
                <p>
                    Develop a business plan demonstrating the level of budget required bring investment up to cover essential operations (and the exposure to risk that will ensure if this level is not met), if not for new initiatives. This is where the base-line for your peers sits, let alone the leading edge.
                </p>
            ',
            'inline' => '
                <p>
                    Firms operating at the leading edge have IT security budgets that are readily available (where there is a supporting business case), even for experimental initiatives. To reach this point, the focus for IT security investment needs to shift beyond just the cost that could arise if investments are not made, and into the potential top-line impact that can be enabled through new IT security spending.
                </p>
            ',
            'ahead' => '
                <p>
                    In order to strive for further improvement, position security investment as the enabler that is driving the enterprise to achieve business goals and supporting growth in both revenue and profitability.
                </p>
            ',
        ],
        'q9'=>[
            'behind' => '
                <p>
                    Consider making more extensive use of these techniques, as well as some of the next-phase techniques (e.g. security staff screening, man-shadowing).
                </p>
            ',
            'inline' => '
                <p>
                    Approaches such as entry/exit \'man-traps\' and man-shadowing ought to become standard practice, and then start looking to more forward-looking techniques such as biometric authentication.
                </p>
            ',
            'ahead' => '
                <p>
                    To move to the next level, consider how to maximise the cross-over point between IT and physical security through the use of biometric authentication techniques.
                </p>
            ',
        ],
        'q10'=>[
            'behind' => '
                <p>
                    The management of IT security best practice ought to be a formal process driven through the application of standards. Give consideration to how you may involve resources that possess expert skills in this field.
                </p>
            ',
            'inline' => '
                <p>
                    This is a formal process that leverages expert skills. In order to push this process towards more advanced levels, consider how external expert assessors could be engaged in order to bring an independent understanding of what is best practice given the context of your organisation.
                </p>
            ',
            'ahead' => '
                <p>
                    Consider how your organisation can become not just a leader in the management of best practice, but a thought leader for the industry in your own right. This even become a source of competitive advantage against your peers.
                </p>
            ',
        ],
        'q11'=>[
            'behind' => '
                <p>
                    In order to move up the maturity scale, develop an understanding of the obligations that GDPR brings, plan for implementation of those responsibilities and then execute on that plan.
                </p>
            ',
            'inline' => '
                <p>
                    You probably have an understanding of the obligations GDPR will bring, and may have begun planning to close gaps in your capabilities and are considering how to adopt best-practice beyond the requirements of the text. To reach the leading eadge of your peer group you must move those plans into reality.
                </p>
            ',
            'ahead' => '
                <p>
                    In order to target further improvements, make clear how you are harnessing \'state of the art\' technologies and implementing them using risk-based approaches to decision-making. This will not only help to mitigate against the potential for fines under GDPR, but could also become a source of competitive advantage.
                </p>
            ',
        ],
        'q12'=>[
            'behind' => '
                <p>
                    Best practice Cyber Risk Management focuses on frequent or real-time reporting. Work on improving you logging capabilties alongside analytics to move from a reactive to proactive approach.
                </p>
            ',
            'inline' => '
                <p>
                    Best practice Cyber Risk Management focuses on frequent or real-time reporting. Work on improving you logging capabilties alongside analytics to move from a reactive to proactive approach.
                </p>
            ',
            'ahead' => '
                <p>
                    In order to strive for improvement, consider how continuous reporting can act as more than a mere dashboard, but become a driver of business-level decision-making through an integrated operations capability.
                </p>
            ',
        ],
        'q13'=>[
            'behind' => '
                <p>
                    Best practice Cyber Risk Management focuses on frequent or real-time reporting. Work on improving you logging capabilties alongside analytics to move from a reactive to proactive approach.
                </p>
            ',
            'inline' => '
                <p>
                    Best practice Cyber Risk Management focuses on frequent or real-time reporting. Work on improving you logging capabilties alongside analytics to move from a reactive to proactive approach.
                </p>
            ',
            'ahead' => '
                <p>
                    In order to strive for improvement, consider how continuous reporting can act as more than a mere dashboard, but become a driver of business-level decision-making through an integrated operations capability.
                </p>
            ',
        ],
        'q14'=>[
            'behind' => '
                <p>
                    It is impossible to secure that which you cannot manage. Best practice is to use integrated tool sets and automation to ensure that policy is applied consistently.
                </p>
            ',
            'inline' => '
                <p>
                    It is impossible to secure that which you cannot manage. Best practice is to use integrated tool sets and automation to ensure that policy is applied consistently.
                </p>
            ',
            'ahead' => '
                <p>
                    In order to strive for further advances in Cyber Risk Management, consider how further elements can be automated and integrated within the end-to-end management suite, helping to drive a more agilie IT department.
                </p>
            ',
        ],
        'q15'=>[
            'behind' => '
                <p>
                    Best Cyber Risk Managment practive uses automation extensively. Consider areas that would benefit from automation (particularly those that are low-value and repetitive, but also those where speed of reaction is most critical) to achieve a good balance between automation where possible and manual processes where required.
                </p>
            ',
            'inline' => '
                <p>
                    Best Cyber Risk Managment practive uses automation extensively. Consider areas that would benefit from automation (particularly those that are low-value and repetitive, but also those where speed of reaction is most critical) to achieve a good balance between automation where possible and manual processes where required.
                </p>
            ',
            'ahead' => '
                <p>
                    To become truly cutting edge, consider what steps can be taken to automate and orchestrate processes end-to-end wherever possible to drive Cyber Risk Management with agility, quality and compliance.
                </p>
            ',
        ],
        'q16'=>[
            'behind' => '
                <p>
                    Best practice in Cyber Risk Management is looking to increase automation. Consider how the use of automation can be increased in order to boost the efficiency and effectiveness of your IT security operations.
                </p>
            ',
            'inline' => '
                <p>
                    Best practice in Cyber Risk Management is looking to increase automation. Consider how the use of automation can be increased in order to boost the efficiency and effectiveness of your IT security operations.
                </p>
            ',
            'ahead' => '
                <p>
                    Rather than simply focus on the opportunity to increase automation, do not forget the human element of the equation. To add the most impact, look to how the automation initiatives that you are pursuing can be used to complement your security personnel, making them more effective workers through upskilling them to perform more advanced tasks.
                </p>
            ',
        ],
        'q17'=>[
            'behind' => '
                <p>
                    The most advanced at Cyber RIsk Mangement make extensive use of a range of security products that are available to offer protection across the corporate network. Working with third party professional security services specialists to help you design and implement appropriate approaches can also but time to implementation and boost capabilities. 
                </p>
            ',
            'inline' => '
                <p>
                    The most advanced at Cyber RIsk Mangement make extensive use of a range of security products that are available to offer protection across the corporate network. Working with third party MSSPs to help you design and implement appropriate approaches can also but time to implementation and boost capabilities. 
                </p>
            ',
            'ahead' => '
                <p>
                    In order to push the envelop further, consider the impact that MSSPs can play. MSSPs can feed the management of security tools and devices into big-data-powered correlation engines and to present this information back through management dashboards, helping to drive decision-making through awareness of the changing security posture in real-time.
                </p>
            ',
        ],
        'q25'=>[
            'behind' => '
                <p>
                    In order move in line with the level of standard practice set by your peer group, consider where the use of MSSPs may be additive in order to achieve a position whereby a balance is struck between in-house operations where necessary and the use of MSSPs elsewhere.
                </p>
            ',
            'inline' => '
                <p>
                    Consider how to make more extensive use of third party providers more often than not - benefiting from their delivery scale, talent base and broader insight to improve your security approach but without losing the visibility and control over your security posture by retaining an important role for internal resources.
                </p>
            ',
            'ahead' => '
                <p>
                    You are a leader in terms of your approach to the use of MSSPs, using them extensively and using them in a balanced way as a complementary delivery channel compared to in-house resources. In order to strive for further advances, look to enhance your use of MSSPs to achieve advances in best practice implementation and operations.
                </p>
            ',
        ],
        'q18'=>[
            'behind' => '
                <p>
                    Compliance and best practice means that malware scanning and ATP/sandboxing are now standard technologies and you should examine their capabilities if not already doing so. Analytics and threat intelligence services offer advanced protection against new threat sources, so consider whether these technologies would help, relative to your organisation\'s risk profile. Artifical intelligence and heuristics are mainly for mature and advanced security operations, so keep these in mind for future reference.
                </p>
            ',
            'inline' => '
                <p>
                    Compliance and best practice means that malware scanning and ATP/sandboxing are now standard technologies and you should examine their capabilities if not already doing so. Analytics and threat intelligence services offer advanced protection against new threat sources, so consider whether these technologies would help, relative to your organisation\'s risk profile. Artifical intelligence and heuristics are mainly for mature and advanced security operations, so keep these in mind for future reference.
                </p>
            ',
            'ahead' => '
                <p>
                    Artifical intelligence and heuristics are maturing , and you should implement these if not already doing so in order to continue the quest for leadership.
                </p>
            ',
        ],
        'q19'=>[
            'behind' => '
                <p>
                    Forensic logging & analysis, and Failover/system recovery are standard technologies and you should implement these if not already doing so. Most larger firms (and many not so large) are now using external incident response services partners, either on retainer or as ad hoc providers, so consider whether this would help reduce your organisation\'s risk profile. Honeypot/intelligence gathering and Tiger teams are mainly for large, mature and advanced security operations, so these would be later steps.
                </p>
            ',
            'inline' => '
                <p>
                    Forensic logging & analysis, and Failover/system recovery are standard technologies. Most larger firms (and many not so large) are now using external incident response services partners, either on retainer or as ad hoc providers, and you should implement these if not already doing so. Honeypot/intelligence gathering and Tiger teams are not purely for the largest firms, so consider whether they would help reduce your organisation\'s risk profile.
                </p>
            ',
            'ahead' => '
                <p>
                    Honeypot/intelligence gathering and Tiger teams are becoming standard practice for large, mature and advanced security operations, and you should implement these if not already doing so.
                </p>
            ',
        ],
        'q20'=>[
            'behind' => '
                <p>
                    Policy updates and a Disaster recovery policy are standard and you should implement these if not already doing so. Most firms conduct Compromise assessments, and many use external disaster recovery providers, so consider whether these would help improve your DR capabilities. Machine learning-based automated remediation capabilities are quickly maturing, and worth keeping an eye on.
                </p>
            ',
            'inline' => '
                <p>
                    Most firms conduct Compromise assessments, and many use external disaster recovery providers, and you should implement these if not already doing so. Machine learning-based automated remediation capabilities are quickly maturing, so consider whether these would help improve your DR capabilities.
                </p>
            ',
            'ahead' => '
                <p>
                    Machine learning-based automated remediation capabilities are quickly maturing, and you should implement these if not already doing so.
                </p>
            ',
        ],
        'q21'=>[
            'behind' => '
                <p>
                    We live in an era of inevitable breaches, so it is essential to have a strong idea of the likely impact of such a breach and develop a security breach response plan. This includes understanding the potential scale of exposure and assessing the risk attached to specific data categories, such as personal data. Understanding the posture of your extended supply chain or partners is also essential, both in terms of inheriting security vulnerabilities from third parties, and from the new joint liability rules introduced by GDPR.
                </p>
            ',
            'inline' => '
                <p>
                     We live in an era of the inevitable breach, so it is good that you have a strong idea of the likely impact of such a breach, and that you have likely developed a security breach response plan. Understanding the posture of your extended supply chain or partners is essential, both from a perspective of inheriting security vulnerabilities from third parties, and from the new joint liability rules introduced by GDPR. 
                </p>
            ',
            'ahead' => '
                <p>
                    Understanding the posture of your extended supply chain or partners is an essential next step, both from a perspective of inheriting security vulnerabilities from third parties, and from the new joint iability rules introduced by GDPR.
                </p>
            ',
        ],
        'q23'=>[
            'behind' => '
                <p>
                    These days it\'s essential that third party validation of security is undertaken, even in advanced environments where \'marking your own homework\' can lead to complacency. Continuous validation is now the expected standard, though much of this can now be automated. Services-based penetration tests should be conducted at least every six months, because the threat landscape is changing so quickly. Testing less frequently is putting your organisation at greater risk.
                </p>
            ',
            'inline' => '
                <p>
                    These days it\'s essential that third party validation of security is undertaken, even in advanced environments where \'marking your own homework\' can lead to complacency. Continuous validation is now the expected standard, though much of this can now be automated. Services-based penetration tests should be conducted at least every six months, because the threat landscape is changing so quickly. Testing less frequently is putting your organisation at greater risk. 
                </p>
            ',
            'ahead' => '
                <p>
                    These days it\'s essential that third party validation of security is undertaken, even in advanced environments where \'marking your own homework\' can lead to complacency. Continuous validation is now the expected standard, though much of this can now be automated. Services-based penetration tests should be conducted at least every six months, because the threat landscape is changing so quickly. Testing less frequently is putting your organisation at greater risk.
                </p>
            ',
        ],
        'q24'=>[
            'behind' => '
                <p>
                    The recommended frequency is between one and three months, depending on the complexity and context of your environment and the threat risk for your particular industry. Leave it longer and you risk key individuals being under-prepared for the inevitable breach, while new legislation may open you up to the risk of significant fines. Aim to improve your testing and reporting, but don\'t try to target frequency at the cost of capability. Weekly or continuous testing is usually only for the most advanced - or high risk - organisations, where poor incident response would be catastrophic.
                </p>
            ',
            'inline' => '
                <p>
                    The recommended frequency is between one and three months, depending on the complexity and context of your environment and the threat risk for your particular industry. Leave it longer and you risk key individuals being under-prepared for the inevitable breach, while new legislation may open you up to the risk of significant fines. Aim to improve your testing and reporting, but don\'t try to target frequency at the cost of capability. Weekly or continuous testing is usually only for the most advanced - or high risk - organisations, where poor incident response would be catastrophic.
                </p>
            ',
            'ahead' => '
                <p>
                    With cyber attacks increasing in capability and frequency, being able to detect and respond adequately to a breach will be a key enabler of a leader in the digital economy. Focus on continuing to chase best practice beyond any compliance standards and make sure you keep getting external reviews of your strengths and weaknesses.
                </p>
            ',
        ],
    ],
];
