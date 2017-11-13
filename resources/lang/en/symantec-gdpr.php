<?php
//SPLUNK
return array(
    'title' => 'Symantec GDPR Assessment',
    'sub-title' => 'Your businesses\' GDPR readiness',
    'stage1' => 'Stage 1: Time to Initiate',
    'stage2' => 'Stage 2: Time to Accelerate',
    'stage3' => 'Stage 3: Time to Something',
    'stage4' => 'Stage 4: Time to Optimize',
    'stage5' => 'Stage 5: Time to Chill',
    'complete_thankyou' => 'Thank you :Fname,',
    'complete_body' => '
        Your custom report will arrive in your inbox soon.<br/>
        Please check in your junk folder if you don\'t receive it within 5 minutes.<br/><br/>
        <a class="btn btn--primary" target="_blank" href="https://www.symantec.com/en/uk/campaigns/data-privacy">
            Click here for more information
        </a>',
    'complete_tweet' => 'I\'ve just taken the @IDCEMEA GDPR Assessment Tool for @symantec. Interested? ',// http://bit.ly/2gslXEh
    'email'=>[
        'subject' => 'IDC and Symantec GDPR Readiness Assessment',
        'hi' => 'Hi :Fname',
        'body' => 'As promised, here\'s a link to download your GDPR Readiness Assessment. This breaks down your results by category and provides you with actionable recommendations.',
        'link' => 'Download Report',
        'extra' => 'Once you\'ve read the report why not visit <a href="https://www.symantec.com/en/uk/campaigns/data-privacy" style="color:#FDBB30">Symantec</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team'
    ],
    'introduction' => '
        <h2>Your overall GDPR Readiness Assessment Result</h2>
        <p>
            IDC sees five stages to GDPR readiness, with organizations just starting out at Stage 1, and those that are achieving compliance at Stage 5. Based on your answers to this assessment, your organisation is at <strong>:result</strong>.
        </p>
        <div style="position: relative; width: 170mm; height: 112mm; background: url(http://symantecgdpr.idcready.net/images/tools/7/maturity.svg); background-size: 170mm 112mm;">
            
        </div>
        <p>
            In addition, we have ranked you out of five stages in each of the following three individual areas of GDPR so that you can get a good idea of where you need to focus your attention most keenly. These areas are: 
        </p>
        <ul>
            <li>Overall GDPR Approach,</li>
            <li>Aspiration &amp; Data Awareness</li>
            <li>Risk Awareness, Assessment & Mitigation</li>
        </ul>
        <div class="pb"></div>
        <div class="spacer"></div>
        
    ',
    'overallintro'=>'
        <h2>Overall GDPR Approach, Aspiration &amp; Leadership</h2>
        <p>
            GDPR is more than just about IT security – it involves how the business approaches the concept and culture of data privacy. In order to achieve success, you will need to have the buy in and support of the business, from top management down to individual business units. Fostering a culture of joint responsibility is key to achieving long term sustainable compliance.
        </p>
    ',
    'overallstage1'=>'
        <h1>STAGE 1:  Time to Initiate</h1>
        <p>
            You have a lot of work to do. Organisations that fall into this category of initial readiness have limited or no insight into the requirements (and more importantly) the implications of GDPR on their business. Leadership does not have any real understanding of what GDPR covers and how it is to be implemented. In addition, there is no real understanding of legal obligations and accountability, or the extent of the fines and other sanctions if the business fails to comply by May next year.
        </p>
    ',
    'overallstage2'=>'
        <h1>STAGE 2:  Time to Accelerate</h1>
        <p>
            You\'ve got going, but there is quite a way to go still. Organisations that fall into this category of defined readiness have made a commitment to GDPR but are still in the first half of their journey. They are aware of the scale of the proposed penalties and sanctions, but are often reluctant to believe that these will be enforced.
        </p>
    ',
    'overallstage4'=>'
        <h1>STAGE 4:  Time to Optimise</h1>
        <p>
            Your well on your way, but don\'t think of stopping just yet. Organisations that fall into this category of managed readiness have a firm appreciation of the regulation, its scope, compliance requirements and potential penalties. They have begun to put measures in place to comply but need to step up their activities to meet the May 2018 deadline.
        </p>
        <p>
            Companies in this stage may have a plan for overall compliance but this may come at the expense of operation efficiency. That’s fine: there is an expediency dimension to GDPR compliance. But after compliance comes optimisation: embed your compliance processes in business as usual. This is tougher than it sounds, so start thinking now about what this might look like for your organisation.
        </p>
    ',
    'overallq1aorb'=>'
        <p>
            By your own admission, you are just starting out on your GDPR journey. GDPR affects almost all companies that process personal data. Realise that the definition of personal data is very broad, and includes any data that relates to an identifiable person. At its most basic, it includes employee data and data relating to sales orders. Most organisations will have this type of data. So the chances are, you are impacted by GDPR.
        </p>
        <p>
            Ignoring GDPR will not make it go away, and importantly there are substantial sanctions in place to encourage compliance. Much has been said about the substantial fines, but sanctions also include class action lawsuit and suspension of personal data processing (which may mean, effectively, suspension of trading).
        </p>
    ',
    'overallq1cord'=>'
        <p>
            By your own admission, you are engaged in enough GDPR activity to avoid a regulator\'s attention (probably), but are limiting your efforts to a pragmatic program of specific activity. This is a perfectly reasonable strategy, at least in the short term, as long as it is based on a detailed business-lead analysis of research. You are aiming to be pragmatically compliant, so realise that there are risks that remain that you may have to explain to in regulator, should things go awry.
        </p>
        <p>
            If in doubt, always refer to the principles laid out in Article 5 of GDPR. Be prepared to defend your stance against these principles: if you can do so, then you will avoid the wrath of the regulator.
        </p>
    ',
    'overallq1e'=>'
        <p>
            By your own admission, you have high aspirations for compliance with GDPR. This should put you in a strong position should a regulator take interest in your activities. Make sure you can evidence your efforts, as this is a crucial part of compliance. The driver for your compliance activities maybe internal efficiency, or improved information given. Or it may be to seek competitive differentiation, possibly through best practices. Whatever your motivation, it is driving you towards being a leader in GDPR compliance. The focus should remain on completing your compliance activities by May 2018, but on the horizon should be an understanding that your compliance processes may not be optimised for operational efficiency. Baking GDPR compliance into business as usual is a step beyond straightforward compliance, but this is where the real benefits lie.
        </p>
    ',
    'overallq7a'=>'
        <p>
            Your score is boosted substantially by the presence of a cross functional compliance task force or governance board that spans multiple stakeholders in your organisation. The engagement of all relevant stakeholders is a critical success factor in any GDPR program, and the existence of such a coordinated approach significantly increases the ultimate success of any compliance activity. The other major critical success factor to consider now is the leadership of the GDPR program. It matters less where this leadership stems from, and more that the leader has the authority, knowledge and charisma to lead a strategically important program of activities.
        </p>
    ',
    'overallq7borc'=>'
        <p>
            Your readiness is boosted by the beginnings of a cross functional compliance task force or governance board that spans multiple stakeholders in your organisation. The engagement of all relevant stakeholders is a critical success factor in any GDPR program, and the existence of such a coordinated approach significantly increases the ultimate success of any compliance activity. The other major critical success factor to consider now is the leadership of the GDPR program. It matters less where this leadership stems from, and more that the leader has the authority, knowledge and charisma to lead a strategically important program of activities.
        </p>
    ',
    'overallq7d'=>'
        <p>
            Your readiness score is held back significantly by the lack of a cross functional compliance task force or governance board that spans multiple stakeholders in your organisation. The engagement of all relevant stakeholders is a critical success factor in any GDPR program, and the lack of such a coordinated approach limits substantially the ultimate success of any compliance activity. Consider revisiting this situation as soon as possible. A silo approach to GDPR is unlikely to fulfil some of the fundamental principles required by the new legislation.
        </p>
    ',


    'dataawarenessintro'=>'
        <h2>Data Awareness</h2>
        <p>
            Information governance is the underlying discipline that enables compliance with GDPR. Bringing all personal data into the scope of your information governance function is mandatory. You need to know what personal data you have (accounting for the very broad definition used by GDPR), and also its location, consent, lifetime, and so on. Demonstrating to regulator that you have a good handle on personal data is the first step in compliance.
        </p>
    ',
    'dataawarenessstage1'=>'
        <h1>STAGE 1:  Time to Initiate</h1>
        <p>
            Unfortunately, you are in the initial stages of information governance, and you have low confidence in your ability to identify and locate data. You may have a good understanding of structured data, but unstructured information maybe causing difficulty. You are also likely to be gathering data without a real sense of purpose or business value. GDPR now makes this data a risk, so you need to decide whether to keep it or delete it.
        </p>
        <p>
            According to your score you are likely to struggle to service subject access requests and other new rights introduced by GDPR (including the right to be forgotten).
        </p>
    ',
    'dataawarenessstage2'=>'
        <h1>STAGE 2: Time to Accelerate</h1>
        <p>
            You are in the middle stages of information governance, and you have reasonable confidence in your ability to identify and locate most personal data in your organisation. You may have a good understanding of structured data, but unstructured information maybe causing difficulty. You are also likely to be gathering data without a real sense of purpose or business value. GDPR now makes this data a risk, so you need to decide whether to keep it or delete it.
        </p>
        <p>
            According to your score, you may struggle to enable the new rights of access, rectification, erasure and portability.
        </p>
    ',
    'dataawarenessstage4'=>'
        <h1>STAGE 4: Time to Optimise</h1>
        <p>
            You are in the advanced stages of information governance and you have high confidence that you like you can locate all instances of personal data in your organisation. You also have a good understanding of both structured and unstructured data, and are likely to be able to service the new rights of access, rectification, erasure and portability.
        </p>
    ',

    'dataawareness_q5aorb'=>'
        <p>
            At least you are honest about your inability to identify and locate all instances of personal data within your organisation. This is a pre-requisite to GDPR compliance: you cannot demonstrate compliance if you do not know what data you have or its location. Given the short amount of time until May 2018, you need to prioritise the data that you are aware of and that is either important to you or that represents the greatest risk to your organisation.
        </p>
    ',
    'dataawareness_q5cord'=>'
        <p>
            Your organisation remains exposed to a degree of risk because you cannot definitively identify and locate every instance of personal data in your organisation. Only you can decide whether this is a risk that your business can accept. Although GDPR demands that you can locate all instances of personal data, you are in the majority of organisations that admit to falling short of this. Assess the risk associated with data that you may not know about, and create an incident response plan for any related potential non-compliance.
        </p>
    ',
    'dataawareness_q5e'=>'
        <p>
            You are in the tiny minority of organisations that are completely confident in their ability to identify and locate all instances of personal data in their organisations. Well done. But make sure that staff are not creating copies of data – probably for good reasons – that are out of compliance. Data copies are made frequently, for reporting, analysis, back-up and so on. Make sure you have the processes in place to avoid this happening in future.
        </p>
    ',
    'dataawareness_q5lt18'=>'
        <p>
            In short, you are not data aware. A prerequisite for GDPR compliance is knowing what data you have, where it is, and why you have it. You need this in order to compile a record of data processing, mandated under Article 30. You will also likely be in breach of the principles of purpose limitation, data minimisation and storage limitation. You need to decide whether this is a risk you can live with.
        </p>
        <p>
            Where to start? Given the pressures of time, you need to prioritise on the data is most valuable to you or that which poses the greatest risk. Any sensitive data (special categories) falls into this area, as does data that would substantially damage your reputation if it was breached. Of course, protecting the data is just one step, so you also need to focus on the processes that interact with the data. Defining who has access to what data, and for what purpose, is mandatory.
        </p>
        <p>
            Above all, remember that regulators will tolerate breaches and minor non-compliances. But they will not tolerate a lack of evidenced effort. It is insufficient to be data aware: you must be able to demonstrate data awareness.
        </p>
    ',
    'dataawareness_q518to24'=>'
        <p>
            You are moderately data aware. A prerequisite for GDPR compliance is knowing what data you have, where it is, and why you have it. You need this in order to compile a record of data processing, mandated under Article 30. You may also be in breach of one or more of the principles of purpose limitation, data minimisation and storage limitation. These are higher level (4% fine) offences, so you need to decide whether judicious deletion of irrelevant data can help reduce this risk.
        </p>
        <p>
            Focus on the gaps in your knowledge of data and its location. Understanding the reasons why you have the data (purpose limitation) is also important, and you need to understand where different regulations apply to different classes of data (such as special categories and data relating to children).
        </p>
        <p>
            Above all, remember that regulators will tolerate breaches and minor non-compliances. But they will not tolerate a lack of evidenced effort. It is insufficient to be data aware: you must be able to demonstrate data awareness.
        </p>
    ',
    'dataawareness_q5gt24'=>'
        <p>
            You are very data aware. Good: a prerequisite for GDPR compliance is knowing what data you have, where it is, and why you have it. You need this in order to compile a record of data processing, mandated under Article 30. You will also avoid a breach of the principles of purpose limitation, data minimisation and storage limitation.
        </p>
        <p>
            What now? Focus on the gaps in your knowledge of data and its location. Understanding the reasons why you have the data (purpose limitation) is also important, and you need to understand where different regulations apply to different classes of data (such as special categories and data relating to children).
        </p>
        <p>
            Above all, remember that regulators will tolerate breaches and minor non-compliances. But they will not tolerate a lack of evidenced effort. It is insufficient to be data aware: you must be able to demonstrate data awareness.
        </p>
    ',

    'riskintro'=>'
        <h2>Risk Awareness, Assessment &amp; Mitigation</h2>
        <p>
            GDPR is all about risk. It is not prescriptive in most of its requirements, meaning that organisations must make decisions about which approaches to take. What is the balance between gathering data for analytics and the increased exposure from data minimisation and purpose limitation? What the heck is ‘State of the Art’ and how do I know if I need it?
        </p>
        <p>
            Risk awareness starts with self-awareness: what data do I have and how do the new regulations affect how I should treat this data?
        </p>
    ',
    'riskstage1'=>'
        <h1>STAGE 1:  Time to Initiate</h1>
        <p>
            It seems that you are at the initial stages of risk awareness. You appear to be engaged in asking the right kinds of questions, but they are foundational. You are challenged by some basic requirements, and seem less concerned abut GDPR than would otherwise be expected with a full knowledge of the regulations. Your struggle to gather budget and resources reflects a low level of awareness, particularly at board level.
        </p>
    ',
    'riskstage2'=>'
        <h1>STAGE 2: Time to Accelerate</h1>
        <p>
            It seems that you are at the developing stages of risk awareness, and are ready to accelerate. You appear to be engaged in asking the right kinds of questions, and they are increasingly sophisticated. You are challenged by some advanced requirements, and seem appropriately concerned about the increased risk levels associated with GDPR. However, your struggle to prioritise resources reflects a need to re-emphasis awareness, particularly at board level.
        </p>
    ',
    'riskstage4'=>'
        <h1>STAGE 4: Time to Optimise</h1>
        <p>
            It seems that you are at the developing stages of risk awareness, and are ready to accelerate. You appear to be engaged in asking the right kinds of questions, and they are increasingly sophisticated. You are challenged by some advanced requirements, and seem appropriately concerned about the increased risk levels associated with GDPR. However, your struggle to prioritise resources reflects a need to re-emphasis awareness, particularly at board level.
        </p>
    ',


    'risk_q7lt9'=>'
        <p>
            Your responses indicate that you are challenged by the basic requirements of GDPR. These include gaining an overview of GDPR requirements, classifying data, and educating employees of the impact of GDPR. That’s fine as far as it goes, but be aware that there are many more – and complex – requirements to address on your compliance journey. Getting the foundations right is important: now you need to move on to other areas like incident response planning and extending data governance processes to cloud and mobile environments.
        </p>
    ',
    'risk_q79or10'=>'
        <p>
            Your responses indicate that you are challenged by a combination of some basic requirements of GDPR and a few of the more advanced compliance actions. This probably includes things like encrypting personal data, consent management and training staff on new risk and obligations. This is a measure of the progress you are making: good news. However, now you need to move on to other advanced areas like extending data governance processes to cloud and mobile environments, and establishing a state of the art security posture.
        </p>
    ',
    'risk_q7gt10'=>'
        <p>
            Your responses indicate that you are challenged by the more advance requirements of GDPR. This is most likely a reflection of your advanced state of readiness. You’ll be focusing on things like incident response planning and extending data governance processes to cloud and mobile environments. However, make sure you have already solved some of the foundation layers like consent management, anonymization or pseudonymisation of data, and training staff on new risk and obligations.
        </p>
    ',
    
    'risk_q112'=>'
        <p>
            Your score indicates that you are a cloud sceptic. This is a cautious position, and it may reflect your business’s appetite for risk. Fair enough. However, you may be missing out on the flexibility and agility offered by cloud. Further, it is perfectly possible to be compliant with GDPR while using cloud services. Cloud service providers are aware of their obligations, and many are offering GDPR-ready contracts, meaning that moving data to the cloud could advance – rather than hinder – your compliance activities. Something worth investigating.
        </p>
    ',
    'risk_q113'=>'
        <p>
            Your response shows that you are actively trying to square your cloud usage with GDPR requirements. Good: GDPR places new obligations on data processors, which includes all cloud services. You seem especially concerned at the international data transfer rules. In fact, there is little change to the existing rules that allow data transfers, as long as there is adequate protection in place. Remember that it is perfectly possible to be compliant with GDPR while using cloud services. Cloud service providers are aware of their obligations, and many are offering GDPR-ready contracts.
        </p>
    ',
    'risk_q114'=>'
        <p>
            Your response indicates a mature approach to cloud and data protection. This may involve adapting existing cloud services to make sure they adhere to the new regulations. Or it may be that you have already made sure your cloud usage is compliant, and needs no further changes. If this is true then great: you’re ahead of the game. But a word of warning: the consequences of getting cloud usage wrong – for example by assuming cloud providers can absorb liability (they can’t) – could be severe. Make sure you have reviewed your cloud contracts and that they are GDPR-ready.
        </p>
    ',


    'risk_q10lt15'=>'
        <p>
            You appear to be quite comfortable with GDPR and have not expressed a high level of concern. Given you are closer to the start of GDPR compliance than the end, have you under-estimated the potential consequences of non-compliance? It will be worth revisiting the risks associated with security breaches under GDPR. It’s not all about fines: class action law suits may be initiated by third parties beyond your control of that of the regulator. The regulator itself can order a suspension of data processing, effectively limiting your ability to trade. Overall, GDPR represents a significant increase in the level of business risk related to personal data processing. Make sure your risk assessment function reflects this heightened exposure.
        </p>
    ',
    'risk_q10between15and27'=>'
        <p>
            You appear to have balanced perspective on the risks associated with GDPR. This means that you fully understand the potential impact of non-compliance, not just in terms of possible fines but reputation damage, class action law suits and suspension of data processing. But you are still in the early stages of GDPR compliance – keep moving forwards.
        </p>
    ',
    'risk_q10gt28'=>'
        <p>
            You are extremely worried at the overall level of risk associated with GDPR. This means that you fully understand the potential impact of non-compliance, not just in terms of possible fines but reputation damage, class action law suits and suspension of data processing. However, your anxiety probably also reflects an awareness that you are still exposed to this risk due to the relative immaturity of your readiness: you’re not where you need to be in your GDPR journey. We empathise. But you should have the motivation to address the issues at hand.
        </p>
    ',

    'risk_q10lt15'=>'
        <p>
            You appear to be quite comfortable with GDPR and have not expressed a high level of concern. In most cases this is a warning flag, but your overall approach to GDPR is well advanced. Do not become complacent, as GDPR requires constant re-assessment to remain state of the art. Keep up the good work.
        </p>
    ',
    'risk_q10between15and27'=>'
        <p>
            You appear to have balanced perspective on the risks associated with GDPR. This means that you fully understand the potential impact of non-compliance, not just in terms of possible fines but reputation damage, class action law suits and suspension of data processing. But you are also in control of the situation, a state of mind that reflects a relative maturity of your readiness: you are where you need to be in your GDPR journey.
        </p>
    ',
    'risk_q10gt28'=>'
        <p>
            You are extremely worried at the overall level of risk associated with GDPR non-compliance. This means that you fully understand the potential impac, not just in terms of possible fines but reputation damage, class action law suits and suspension of data processing. However, the good news is that overall you are doing well in your overall journey to GDPR and must find the ways to continue to improve.
        </p>
    ',
    'non9a'=>'
        <p>
            You indicated that a lack of knowledge and skills on GDPR is constraining your ability to create a GDPR program that spans your data management environment. This is typical of organisations in the early stages of compliance efforts. Information gaps can be resolved by tapping into the mass of literature available from regulators, lawyers, consultants and technology firms. Industry groups are also increasingly popular and provide the opportunity to learn from peer organisations.
        </p>
    ',
    'non9b'=>'
        <p>
            You indicated that a lack of budget is constraining your ability to create a GDPR program that spans your data management environment. Budget issues are unfortunately not very easy to fix. Ultimately it comes down to an assessment of the risk for your organisation. But a lack of awareness will inhibit a thorough risk evaluation. Information leads to enlightenment, and enlightenment should lead to a break in inertia. There’s nothing like an increase in perceived risk to loosen fiscal ties.
        </p>
    ',
    'non9c'=>'
        <p>
            You indicated that limited resourcing is constraining your ability to create a GDPR program that spans your data management environment. This is typical of organisations in the middle stages of compliance efforts. Ultimately it comes down to an assessment of the risk for your organisation. A thorough risk evaluation should identify the need to dedicate and fund the required resources. It may be then that there is a lack of awareness and leadership at board level, resulting in insufficient commitment to GDPR. This is serious, so board engagement is essential if you want to meet your GDPR aspirations.
        </p>
    ',
    'non9d'=>'
        <p>
            You indicated that conflicting priorities is constraining your ability to create a GDPR program that spans your data management environment. This is typical of organisations in the middle stages of compliance efforts. Ultimately it comes down to an assessment of the risk for your organisation. A thorough risk evaluation should identify and resolve conflicting priorities. It may be then that there is a lack of awareness and leadership at board level, resulting in insufficient commitment to GDPR. This is serious, so board engagement is essential if you want to meet your GDPR aspirations.
        </p>
    ',
    'non9e'=>'
        <p>
            You indicated that a lack of collaboration between the GDPR compliance team and other stakeholders is constraining your ability to create a GDPR program that spans your data management environment. This is typical of organisations in the later stages of compliance efforts. Your program is well under way, but it may be stuck within one department. A critical success factor for GDPR is cross-functional collaboration: GDPR is too important to stay within fiefdoms.
        </p>
    ',
    'non9f'=>'
        <p>
            You indicated that fragmentation of data management systems is constraining your ability to create a GDPR program that spans your data management environment. This is typical of organisations in the later stages of compliance efforts. Your program is well under way, but a fragmented data management environment could be hard to fix: big data and analytics are often critical to business functions. But they can also represent a source of risk, in the volume of personal data held and in the use of that data for multiple purposes. An integrated approach to data governance is essential to efficient GDPR compliance, so focus on this as a core activity in embedding operational excellence in compliance.
        </p>
    ',

    /*'introduction-image' => 'report1.jpg',*/
    'overall' => array(
        'title'=>'Your Overall Security Assessment is at',
        'hidetitle'=>'true',
        'image'=>'',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>''
    ),
    'security-strategy' => array(
        'title'=>'Security Strategy',
        'image'=>'security-strategy.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>''
    ),
    'incident-detection' => array(
        'title'=> 'Data rights and standards',
        'image'=>'incident-detection.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>''
    ),
    'incident-response' => array(
        'title'=> 'incident-response',
        'image'=>'incident-response.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>''
    )
);