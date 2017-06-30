<?php
//GDPR
return array(
    'title' => 'IDC\'s GDPR Assessment:  Endpoint Readiness',
    'sub-title' => 'Introduction',
    'stage1' => 'Stage 1: Time to Research',
    'stage2' => 'Stage 2: Time to Plan and Implement',
    'stage3' => 'Stage 3: Time to Accelerate Activities',
    'stage4' => 'Stage 4: Time to Consolidate and Maintain',
    'complete_thankyou' => 'Thank you :Fname,',
    'complete_body' => 'Your custom report will arrive in your inbox soon.<br/>
Please check in your junk folder if you don\'t receive it within 5 minutes.<br/>
While you\'re waiting why not share your results and see how your followers measure up?',
    'complete_tweet' => 'I\'ve just taken the @IDCEMEA GDPR Readiness Assessment Tool for @HP. Interested in your own readiness? ',// http://bit.ly/2gslXEh
    'email'=>[
        'subject' => 'IDC\'s GDPR Readiness Assessment',
        'hi' => 'Hi :Fname',
        'body' => 'As promised, here\'s a link to download your GDPR Readiness Assessment. This breaks down your results by category and provides you with actionable recommendations.',
        'link' => 'Download Report',
        'extra' => 'Once you\'ve digested the report why not visit <a href="http://www.hp.com" style="color:#0096D6">HP</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team'
    ],
    'introduction' => '
        <p>
            Thank you for taking part in IDC\'s GDPR readiness assessment for endpoint devices. This study enables you to assess your organisation\'s readiness, based on IDC\'s in-depth understanding of the GDPR requirements and the roadmap to compliance. It also provides you with essential guidance in the development of your security strategy. This includes recommendations on how to progress your organisation towards a compliant and sustainable position in preparation for May 2018. 
        </p>
        <p>
            Based on IDC\'s assessment, your organisation is at <strong>:result</strong> in terms of its overall readiness to address GDPR in general, in your hardware estate and specifically with regards to your print infrastructure and printer fleet.
        </p>
        <p>
            Further insight and detailed recommendations are highlighted below, taking you through components of Leadership and General Obligations, Data Rights and Standards, as well as Security. The report delivers an assessment of your stage of readiness as well as individual recommendations on how to improve these areas.
        </p>
        <img src="http://hpgdpr.idcready.net/images/tools/4/:stage.svg" style="width: 170mm; height: 78mm;">
        <h2>GDPR and Print</h2>
        <p>
            The EU General Data Protection Regulation (GDPR) is now in force with a transition period until May 25, 2018. IDC research shows that many organisations appear to have little or no understanding of the regulation, its scope, timeline or impact, despite the risk of huge penalties of up to 4% of global turnover, as well as potential lawsuits, suspension of personal data processing and damage to reputation.
        </p>
        <p>
            GDPR compliance is required by any organisation — regardless of their location — that processes the personal data of "data subjects" (the natural person to which the data relates) in the EU. Processing of personal data refers to what can be done with data — i.e., data activities such as requesting, collecting, storing, searching, forwarding, deleting, etc. The definition of processing is very broad: it is best to think of any action that "touches" personal data as being in scope. Outputting of personal data including printing, copying, faxing and scanning is considered as processing and is subject to GDPR regulation.
        </p>
        <p>
            For example, if paper is used as part of a system to store or output personal data, this is also covered by the GDPR regulation. For many organisations, this is new or at the very least confusing. For others, progress has already been made and some will look to utilise the process of compliance in driving other benefits such as cost-cutting, improved security and environmental concessions to the wider organisation. While you still have time, the clock is ticking and the requirements are wide reaching. Good luck.
        </p>
    ',
    'introduction-image' => 'mainimage.jpg',
    'overall' => array(
        'title'=>'Overall Readiness',
        'hidetitle'=>'false',
        'pageimage'=>'overall.jpg',
        'stage1'=>'
            <h3>STAGE 1: Time to Research and Learn</h3>
            <p>
                Organisations that fall into this category of initial readiness often have limited or no insight into the requirements and (more importantly) the implications of GDPR on their business. Leadership does not have any real understanding of what GDPR covers and how it is to be implemented. In addition, there is often no real understanding of legal obligations and accountability, or the extent of the fines and other sanctions if the business fails to comply by May next year.
            </p>
            <p>
                In short, you are largely unaware. Even with a basic understanding of the scope and content of GDPR, many in this category have little understanding of its requirements and (in particular) how it relates to devices such as PCs and printers. You may well have little or no access or authentication mechanisms at the device itself, leaving data open to loss or simply unprotected in the work environment.
            </p>
            <p>
                This weak link could become the organisation\'s undoing — with print and MFP devices often a forgotten part of the estate, you may not have basic Common Criteria (CC) certification. Importantly, it is not just a data breach that results in non-compliance. A lack of adherence to the basic principles and rights of data protection are equally critical to achieving compliance.</p>
            <p>
                In terms of data collection, your organisation is probably yet to formally identify personal data types held within the organisation. More specifically, the elements of data types classed as personal data and those that are not may well be unclear, and you are unlikely to be aware of the extended obligations relating to special categories of data (i.e., sensitive data). This is basic stuff: a core requirement of GDPR is that you know what personal data you have, where it is and what sensitivity it involves.</p>
            <p>
                You are also unlikely to have defined a security incident response plan or agreed policies for transferring data. Perhaps you didn\'t know you needed to do this, or perhaps you were unaware of the extent of the requirement. In short, don\'t panic. By filling this survey in, you are already in a better position and you have time to act. In response, IDC has outlined some key recommendations and a roadmap for addressing GDPR and print.
            </p>
            <h4>Recommendations for Learning Businesses</h4>
            <p>
                Quickly, but calmly, bring GDPR to the attention of your board. Use this report to set out the various areas for attention and emphasise the need for action now: not only at a general level, but also specifically for endpoint devices and print.
            </p>
            <p>
                Be sure to communicate that GDPR will be enforced worldwide. Brexit will not save the business from needing to do this as the regulation applies to the personal data of EU data subjects regardless of the location of the controlling and processing entities. Make sure your organisation is aware that random spot checks are likely and this approach is already happening.
            </p>
            <p>
                Perhaps the board is aware of GDPR and is implementing changes, but again board members may not be aware of the wider implications around print. Make this point clear. Any weakness in the approach will lead to a failure of compliance. Even if this does not result in a breach, fines and sanctions will still apply. Very few printers are secured and the most obvious elements of storage, networking and computing will divert attention.</p>
            <p>
                Your organisation still needs to define "state-of-the-art" security. You are not obliged to implement state-of-the-art, but you do need to document your understanding of it, to then justify why you did, or did not, deploy it. Ensure that you are working towards this, while plotting and mapping the risks related to print and the management of personal data.
            </p>
            <p>
                Other key action points include consideration of defined and secured print process. This should cover the rationale for the ability to print personal data: have you documented the cases in which you allow this to happen? Sensitive data should rarely, if ever, be printed. Can you control this?
            </p>
            <p>
                Can you determine that only the person authorised to print personal data can then collect it from the printer? What security mechanisms exist on the printer itself? Can you detect someone in a non-EU country printing personal data (which would constitute a data transfer)? Is the physical storage in the printer encrypted?</p>
            <p>
                By thinking through the information flows in your organisation and relating these to print, you should be able to identify the main compliance vulnerabilities and plan remediation. Further insight based on the dynamics of Leadership and General Obligations, Data Rights and Standards, as well as Security, are outlined in more detail below.
            </p>
        ',
        'stage2'=>'
            <h3>STAGE 2: Time to Plan and Implement</h3>
            <p>
                Organisations that fall into this category of defined readiness often have patchy or scant knowledge of GDPR in general, or how this impacts their endpoint devices and print estates specifically. They are somewhat aware of the scale of the proposed penalties but are reluctant to believe that these will be enforced. 
            </p>
            <p>
                They may also be rushing around in blind panic, with no sense of prioritisation or focus. They are aware of general IT and print security standards, but have not made a concerted effort to define a print security process or seek security certification. Understanding of their organisation\'s data processing activities may also be very limited. 
            </p>
            <p>
                Those with a greater understanding of the requirements need to step up the frequency of some of their testing efforts. IDC has outlined some key recommendations to address these points below. 
            </p>
            <h4>Recommendations for Planning Businesses</h4>
            <p>
                Okay, good. You\'re aware of GDPR and its implications. That makes you ahead of many companies already. But there\'s a long way to go. You\'re in a state of dawning realisation and with the deadline for compliance looming you need to prioritise. A review of your endpoint devices should be on your agenda, and print is a good place to start — you can make substantial gains quickly, and avoid possible catastrophic data leakages from printed material now and in the future.
            </p>
            <p>
                You may have started documenting data flows across your IT infrastructure — good. But for many organisations in this stage of readiness, print may be a blind spot, so you need to be sure to add it into your data maps. You also need to assess why you\'re allowing people to print personal data. There are plenty of legitimate reasons why people print personal data — forms, CVs, emails and so on — but typically this would be for specific purposes, by authorised individuals. Printing the customer database is unlikely to be such a case (more likely an insider threat), nor is printing employee salaries (most likely poor HR practice). GDPR requires that you document why you process personal data, so you need to document why you print it.
            </p>
            <p>
                Generally, you should ensure that your printer fleet matches the security specifications of other endpoint devices, such as PCs and tablets. What are the security characteristics of your printer fleet? Is it ISO/IEC 15408 certified? This standard, often referred to as the Common Criteria, is a benchmark in security of a variety of devices, but although certified printers are available few are deployed. Are the communications ports in your printers secured? Most are left wide open, leaving printers vulnerable to elementary probes and attacks. Do your printers offer additional authentication (e.g., a PIN) before printing a document from the spooler?
            </p>
            <p>
                Reviewing your print processes may seem dull, or trivial, compared with the mounting priorities from other data sources. But printed information remains a key vector for data breaches, and it also acts as an indicator of good practice to auditors and regulators. With some immediate attention, you can shift your readiness substantially up the chart.
            </p>
            <p>
                Further insight based on the dynamics of Leadership and General Obligations, Data Rights and Standards, as well as Security, are outlined in more detail below.
            </p>
        ',
        'stage3'=>'
            <h3>STAGE 3: Time to Accelerate Activities</h3>
            <p>
                Organisations that fall into this category of managed readiness generally have a firm appreciation of the regulation, its scope, compliance requirements and potential penalties. They have begun to put measures in place to comply but need to step up their activities to meet the May 2018 deadline. 
            </p>
            <p>
                Companies in this stage may have a plan for overall compliance but have not considered the specific implications for their print infrastructure and printer fleet. This is understandable — most companies don\'t — but it\'s not an excuse either. If this is the case, you urgently need to focus on print in your organisation. It\'s a blind spot, and may cost you dearly.
            </p>
            <p>
                IDC has outlined some key recommendations to address these points below.
            </p>
            <h4>Recommendations for Accelerating Businesses</h4>
            <p>
                Congratulations! You are in the minority of companies that are likely to be compliant by May 2018. Your endpoint devices seem to be well managed, which is a good indicator that you have control of your data protection processes. However, printing still seems to be an area of concern for you. You are therefore probably more advanced in non-print areas. Use this discipline to apply good established practice to your print estate. Just like PCs and mobile devices, apply device management principles to printers and you won\'t go far wrong. However, the tools and technologies you use will most likely be different, as typical toolsets don\'t support printers. 
            </p>
            <p>
                Ask your printer suppliers what security and print management functionality exists on your existing print estate. There may be capabilities in your current print infrastructure that you are not using, and that could give you a quick start. Failing that, you may need to look at bringing forward a refresh to your print estate to access modern secure print functions. 
            </p>
            <p>
                Further insight based on the dynamics of Leadership and General Obligations, Data Rights and Standards, as well as Security, are outlined in more detail within this report.
            </p>
        ',
        'stage4'=>'
            <h3>STAGE 4: Time to Consolidate and Maintain</h3>
            <p>
                Organisations that fall into this category of optimised readiness would comply if the regulation came into force immediately. Their main challenge is to consolidate and maintain what they have with a view to continual improvement. 
            </p>
            <p>
                "State of the art" will evolve as technology and process evolve. As a result, you must continually manage and calibrate processes to address this.
            </p>
            <p>
                One of the key dimensions of compliance with GDPR is that it is a state, not a checklist. You can be compliant one day and non-compliant the next. This idea of "continual compliance" is critical to the success of your programme — it can never rest. 
            </p>
            <h4>Recommendations for Consolidating Businesses</h4>
            <p>
                You\'ve hit the mark in our assessment of your readiness for GDPR. Well done. 
            </p>
            <p>
                The point about GDPR compliance is that it is a lifestyle change, not a crash diet. Continuous compliance is the norm, so you can\'t now relax. One area that you need to keep on top of is the notion of state of the art. While organisations are not obliged to deploy state-of-the-art technologies and processes, you need to know what these are, to decide whether to use them. Have a process of regularly reviewing state of the art in print technology and management processes — we suggest at least every six months. This keeps you on your toes, but it also sends a message to your suppliers that you are looking for continuous improvement in their capabilities.
            </p>
        '
    ),
    'leadership-and-general-obligations' => array(
        'title'=>'Leadership and General Obligations',
        'pageimage'=>'leadership-and-general-obligations.jpg',
        'pb'=>'pb',
        'stage1'=>'
            <h3>STAGE 1: Time to Research and Learn</h3>
            <p>
                Organisations at this stage in the process of GDPR often do not have a process that mandates the consideration of data protection when conceiving and deploying new technology, design or business processes. Often, they do not restrict personal data access to those that are required to have access to that data. Perhaps your board is unaware of its accountability for GDPR compliance, or is yet to do anything to address the forthcoming requirements? Even if it is aware of the enforcement, perhaps it doesn\'t know about the fines or sanctions?
            </p>
            <p>
                Critically, you may not understand how hardware such as PCs, laptops, smartphones, servers and removable storage objects as well as printers, copiers, faxes and general document management process relate to GDPR regulation. Organisations at this stage in their GDPR journey do not even have a grasp of the reach and ramifications of GDPR and endpoint devices.
            </p>
            <p>
                Without at least a rudimentary understanding of the regulation and how to prepare for compliance the task seems almost insurmountable within the timeframe unless you act now. Immediate objectives and measures are needed to create awareness, develop understanding and begin the planning process.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                Your organisation and the board need to establish a full understanding of the implications and requirements of GDPR compliance. Part of this process is understanding the consequences of failing to comply, as well as a clear roadmap and timelines involved. 
            </p>
            <p>
                Specific to the print and elements of the business, you and the board must define and follow a comprehensive GDPR plan, considering all aspects of print management and the control and process of personal data throughout the organisation. 
            </p>
            <p>
                One way to address this quickly is to assess and audit your IT infrastructure and hardware estate, along with your general approach to document management, storage and authentication. These are key entry points for external security threats, and are also vulnerable to insiders, whether operating accidentally or through malicious intent. Print is particularly susceptible to insider action, as it is rarely monitored closely. The first step in securely managing and monitoring the printer hardware fleet is to establish a baseline by building an understanding of what devices you have, what you need and what you need to do to comply. A refresh of policy and the way your organisation manages and utilises print will address many immediate and fundamental requirements, allowing you to plan for the next 12 months. 
            </p>
            <p>
                While GDPR is a very large stick with which to enforce (often much needed) change, the wider benefits of a technology refresh must also be presented and supported. Moving your way up through the readiness maturity levels is one way of managing this approach and understanding your progress. Thus, IDC invites you (and the board members) to retake this test in a few months\' time, measuring and maintaining a focus on achieving compliance and realising the benefits of such an approach.
            </p>
        ',
        'stage2'=>'
            <h3>STAGE 2: Time to Plan and Implement</h3>
            <p>
                Your board has a general peripheral awareness of its accountability for GDPR compliance and how it impacts endpoint devices and print, but it may not be adopting a planned, staged approach to tackling and meeting obligations and requirements. It may also be aware of the magnitude of potential penalties for non-compliance, but often organisations at this stage adopt an attitude of "it won\'t happen to us". Or they believe that this is only relevant to larger companies. Perhaps your board already has some thinking or ad hoc initiatives if not embedded processes in place with regards to data protection and access control mechanisms? Organisations at this stage often have some print device authentication implemented, indicating that print is at least on the radar as a possible leak in overall security infrastructure. 
            </p>
            <p>
                Critically, organisations at this stage in their GDPR journey only have a partially defined and managed plan. Some may be reacting on a piecemeal basis; others will be burying their heads in the sand. Without a specific plan in place, or an understanding of the end-goal, the road will be long and winding. Objectives and measures are needed to create focus and direct effort.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                Here is the good news — your organisation and the board are already on the first rung of the ladder: you are aware of the scope of the regulation extending to endpoint devices and print, the compliance demands and the penalties for not meeting the requirements. You already have some plans and foundations for compliance in place but these plans need to be reviewed, tested and assessed. If compliant they must be formalised and embedded so that they are fit for purpose. The review process must also consider the gaps where there is currently no process in place. But do not rest on your laurels as you still have a way to go.
            </p>
            <p>
                Specific to print, given that it\'s likely you are employing user authentication at the device, you may well be some way into managing print and the print estate through a "managed print services" contract. The time is now to review your print infrastructure and print strategy and policies through the lens of GDPR, ensuring that you consider the full implications of the regulation. 
            </p>
            <p>
                You may not have this expertise in-house, but help is at hand in the shape of managed print services providers, for example. You may have a team or person in-house who is charged with managing print either with or without the services of a managed print services provider. You need to empower this function to take appropriate print measures to ensure that print meets all GDPR compliance requirements.
            </p>
        ',
        'stage3'=>'
            <h3>STAGE 3: Time to Accelerate Activities</h3>
            <p>
                Organisations at this stage in their GDPR readiness have more than a passing familiarity with GDPR. Your organisation is very aware of what is required to be compliant and has already put plans in place to ensure a smooth transition to achieve compliance within the timeframe. 
            </p>
            <p>
                To this end, GDPR is a regular agenda item at all board meetings and GDPR compliance meetings are taking place regularly at all levels throughout the organisation. Plans are being developed, implemented and monitored to ensure that your organisation is keeping up to date with the latest GDPR and print developments and upgrades. But there is still a lingering doubt among some that fines and sanctions will only apply to large organisations — rest assured that this is not the case and you must prepare for this eventuality. 
            </p>
            <p>
                As the deadline looms you must accelerate your activities to ensure that your entire organisation will be ready for possible audit when the time comes. At this stage, you must be looking at your print process to ensure that you have the latest technology to ensure that your print solution will be considered as aiming for state of the art come the deadline date. This will entail following all security upgrades related to print and implementing them where possible. 
            </p>
            <p>
                Organisations at this stage in their GDPR journey have most of the required plans in place and are simply correcting and tweaking them as the deadline approaches. At this stage in the game, objectives and measures are needed to maintain momentum and check for any gaps or areas that may have been overlooked.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                The very good news is that your organisation and the board are well on track to pass GDPR with flying colours. You seem to have most or all of the bases covered already and, if not, your forward planning will take you there in time for the May 2018 deadline.
            </p>
            <p>
                Looking at your print solutions you may consider doubling down on your authentication means by increasing the layers of security by perhaps implementing more than one means of identification/authentication at the device. 
            </p>
            <p>
                This belt and braces approach may help you prove that you have done everything required to maintain data privacy and provide a system that can be considered as aiming for state of the art. You have an access control mechanism that gates access to individual personal data records on an as needed basis, and you may consider a multifactor authentication approach (such as biometrics) that gates access to individual fields within personal data. 
            </p>
        ',
        'stage4'=>'
            <h3>STAGE 4: Time to Consolidate and Maintain</h3>
            <p>
                Organisations at this stage in their GDPR journey are generally on point and already well prepared for the arrival of the regulation. Preventative measures and mitigating risk measures and actions are most likely already in place to avoid non-compliance and the levying of associated fines and or sanctions. The regular board, operational and LOB meetings are a well-established feature of the working landscape and will continue beyond the GDPR implementation date. 
            </p>
            <p>
                Organisations at this stage in their GDPR journey would be deemed compliant if audited today. 
            </p>
            <p>
                Ongoing objectives and measures are needed to consolidate and maintain efforts as compliance is not just a snapshot in time: it is a living, breathing regulation which must be continually adhered to. As such, processes and systems must be constantly monitored and calibrated.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                Give yourself a pat on the back. Your organisation would be considered GDPR compliant now, but there is an opportunity to overachieve and maximise the benefits of your hard work. To ensure your organisation stays ahead of the game by doing even more than what is required for GDPR compliance, you can differentiate and distinguish your organisation by going above and beyond this regulation to further mitigate risks and avoid data breaches.
            </p>
        '
    ),
    'data-rights-and-standards' => array(
        'title'=> 'Data rights and standards',
        'pageimage'=>'data-rights-and-standards.jpg',
        'pb'=>'pb',
        'stage1'=>'
            <h3>STAGE 1: Time to Research and Learn</h3>
            <p>
                Organisations at this stage in their GDPR readiness are often process and standards deficient. There is no board or organisational understanding of what type of data is processed, and how and why it is processed, nor does your board know where your data is located, stored or held. Data flow analysis and print flow analysis have not taken place and your organisation and hardware do not meet the basic security standards. Your organisation is not likely to be ISO 27001 compliant and your printer and MFP devices are probably not ISO/IEC 15408 certified (also known as Common Criteria). 
            </p>
            <p>
                Organisations at this stage are at the very beginning of their GDPR journey and action must be taken now if you are to have any chance of becoming compliant by the deadline and avoiding penalties.
            </p>
            <p>
                Immediate objectives and measures are needed to understand what type of data is collected, why and how in order that you begin to reengineer your processes to satisfy the regulation demands and pursue certification of the basic ISO standards mentioned above.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                The bad news is that you are not in good shape but you are far from being a lost cause. 
            </p>
            <p>
                In the GDPR world, "processing" refers to actions on data you collect, move, share, search and output — in fact anything that you do with the data. As it stands there is currently no real understanding or process in place within your organisation to comprehend or monitor much of this. This is critical as it is at the very heart of GDPR. Your board must make this its number 1 priority to be addressed immediately if your organisation is to avoid the substantial fines and sanctions. 
            </p>
            <p>
                Your board must also immediately address the fact that your organisation is neither ISO 27001 compliant nor is the hardware (ISO/IEC 15408) certified. The latter would suggest that there is very little monitoring and upgrading of your print fleet as most new devices meet the requirements of this standard. Strongly suggest to your board that an individual or team be tasked with taking stock of your printer fleet and print requirements with a view to optimising it on an ongoing basis in compliance with GDPR regulations.
            </p>
        ',
        'stage2'=>'
            <h3>STAGE 2: Time to Plan and Implement</h3>
            <p>
                Your organisation is kind of a half-way house on the way to compliance. While your organisation understands what kind of data is collected, why data is collected and where it is stored, there is no real consideration of local storage regulation links that apply to specific geographical locations. There is also no strict purpose and process linkage in place. Some ad hoc and fragmented data flow analysis has taken place and there is a process in place to ensure the secure movement and outputting of data. While you may claim to be adherent to the basic principles and spirit of ISO 27001 and ISO/IEC 15408 this is not enough to be officially certified.
            </p>
            <p>
                Organisations at this stage in their GDPR journey do not yet have a formalised plan. Some may be reacting on a piecemeal basis; others will be hoping for loose interpretations of the regulation. 
            </p>
            <p>
                Having a half-hearted approach will not spare you non-compliance fines. In fact, it is likely to exacerbate sanctions. Objectives and measures are required to stiffen your resolve and leverage what you have already to push on and achieve full compliance.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                Your organisation could go either way: you could press on from what you have done already and comply fully with the regulation or you could bank on being good enough and hope for a lenient audit. Seek out some examples of high-profile data breaches and the subsequent hard and soft costs to the organisations concerned and present them to your board. This may be what is required to persuade them to divert resources to a GDPR compliance project.
            </p>
            <p>
                Specific to print, revert to your supplier and invest in (ISO/IEC 15408) certified devices. Newer devices with this certification will not only be more secure but they will have other environmental, cost-saving and process improving features and benefits associated with newer technology. But think beyond just replacing hardware to implementing a secure print solution instead.
            </p>
        ',
        'stage3'=>'
            <h3>STAGE 3: Time to Accelerate Activities</h3>
            <p>
                Organisations at this stage in their GDPR journey often have a comprehensive and consistent approach to personal data processing. You have a clear understanding of the types of data that you collect and why. Many organisations at this stage have strict controls that link the data gathered specifically to the processing purpose in place and to consistent and uniform processes implemented across the organisation. 
            </p>
            <p>
                While you may have met most of the compliance requirements, you still need to ensure that there are no holes or inconsistencies across the organisation. Objectives and measures are needed to examine the processes across the whole organisation and check for consistency.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                So far so good, and your organisation is well on the way to passing the GDPR test. For those of you that have not already done so, focus on the processing controls that link data gathered to the processing purpose as this will be key to success. Ensuring that your whole organisation meets the requirements will also help seal compliance.
            </p>
        ',
        'stage4'=>'
            <h3>STAGE 4: Time to Consolidate and Maintain</h3>
            <p>
                With the relevant organisational and hardware security accreditations and a clear and consistent data processing strategy in place, your board has fully prepared the organisation for the arrival of the regulation. Preventative measures and mitigating risk measures and actions are already in place to avoid non-compliance and the levying of associated fines and/or sanctions. The regular board, operational and LOB meetings are a well-established feature of your working landscape and will continue beyond the GDPR implementation date. 
            </p>
            <p>
                Organisations at this stage in their GDPR journey would be deemed compliant if inspected today. 
            </p>
            <p>
                Ongoing objectives and measures are needed to consolidate and maintain efforts, as GDPR compliance is not just a snapshot in time, it is a living, breathing regulation which must be continually adhered to and as such processes and systems must be constantly monitored and calibrated.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                Well done. Your organisation has passed the GDPR test as it stands. But that is not the end of the story.
            </p>
            <p>
                There is an opportunity to overachieve and to ensure your organisation stays ahead of the game by doing even more than what is required for GDPR compliance. You can differentiate and distinguish your organisation by going above and beyond this regulation to further mitigate risks and avoid data breaches.
            </p>
        '
    ),
    'security' => array(
        'title'=> 'Security',
        'pageimage'=>'security.jpg',
        'pb'=>'pb',
        'stage1'=>'
            <h3>STAGE 1: Time to Research and Learn</h3>
            <p>
                For organisations at this stage in their security readiness, the GDPR regulators would most likely consider you unsecure, given the current state of your processes. In addition, you probably have little or no measures in place to safeguard personal data as it travels through your endpoint and print devices. You have likely not taken even the simplest steps to ensure that your print infrastructure and printers are shooting for state of the art with regards to security.
            </p>
            <p>
                Organisations at this stage are at the very beginning of not only their GDPR journey but also their overall security journey. Remedial action must be taken now for you to have any chance of becoming compliant by the deadline and avoiding those hefty penalties.
            </p>
            <p>
                Immediate objectives and measures are needed to understand what you can do to shore up your print devices thus making them secure and fit for purpose in general but also to specifically qualify as aiming for state of the art in terms of GDPR security. State of the art is not mandated, but it\'s best practice to know what it is and to document why — or why not — modern technologies were deployed.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                The bad news is that you are very far from understanding and aiming for state of the art, but the good news is that in terms of your print devices there are several tactical changes that you can easily make to help you improve your security status. Firstly, you can ensure that you compile and manage a complete inventory of your print devices, that you maintain and patch your printer fleet, that you shut down any unnecessary services that your print devices offer and that you properly erase or destroy any hard disk drives (this applies to all hardware types, not just printers). 
            </p>
            <p>
                On a strategic level, you can include print infrastructure in your security audit and in your personal data encryption process. First, though, you must have an encryption process if you don\'t have one already.
            </p>
            <p>
                One of the key components of the security section of the regulation is documenting the risks associated with processing personal data, and mapping those risks against the technical measures in place to secure personal data. Failing to do this means failing to comply. Other critical components revolve around testing: testing security, backup, business continuity and key management processes and having and testing an incident response plan. Being able to evidence these processes will help your case as being state of the art in security. One of your first steps must be to formulate and implement that incident response plan.
            </p>
        ',
        'stage2'=>'
            <h3>STAGE 2: Time to Plan and Implement</h3>
            <p>
                From IDC\'s assessment, it appears as if you\'re on your way to compliance; your print devices are as secure as they can be now, but print needs to be embedded deeper into your overall processes. With regards to backup and testing processes, these fall short of what is required to pass muster.
            </p>
            <p>
                Organisations at this stage in their GDPR journey need to implement more regular and stringent processes (including print) every step of the way. 
            </p>
            <p>
                Your organisation is already very security minded. Objectives and measures are required to take that thinking to the next level to meet the regulation requirements.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                Your organisation is doing most of the right things; it just needs to do them more often and in a more formal way. Introduce more frequent backup testing and formalise regular incident response plan testing.
            </p>
            <p>
                Print is a crucial part of the GDPR process and to that end you must insist that print is part of the security audit and that encryption processes apply to print. You must also ensure that you log all printing activities to enable tracing. Finally set up a process to define and review state-of-the-art security. 
            </p>
            <p>
                It\'s also worth at this stage reviewing your print-related activities against the broad principles of data protection. Unauthorised access of personal data is a primary example: you need to demonstrate control over this area, including maintaining an audit trail of access attempts. Did someone try to access a document in the printer queue? How can you tell if they did? Could you prove that no one did, or could?
            </p>
        ',
        'stage3'=>'
            <h3>STAGE 3: Time to Accelerate Activities</h3>
            <p>
                Organisations at this stage of their security compliance in GDPR find that the board has a strong appreciation of what is required to make an organisation and its processes state of the art. At this juncture, it is a case of increasing the testing frequency of the backup and incident response plan processes in place and of tightening up your "state of the artness". 
            </p>
            <p>
                Organisations at this stage in their GDPR journey have established the good practices needed to enable compliance. All that remains is to ensure continual, ongoing testing of the backup plans and reporting.
            </p>
            <p>
                Objectives and measures are needed to arrive at the optimal testing frequency necessary to be state of the art without incurring unnecessary additional costs.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                You are well prepared and should pass a compliance audit. You can at least evidence process and data flows. However, you must ensure that you monitor developments in print technology on a continual basis so that you can present a case for understanding state of the art. 
            </p>
            <p>
                In deciding whether to implement the most up-to-date technology, frequent testing of process can only help as it should highlight any problems and help you mitigate risks. 
            </p>
            <p>
                You may be certified to ISO 27001 but a common blind spot is print. Look at applying 27001 to print — we think you will learn a lot about this category of endpoints.
            </p>
        ',
        'stage4'=>'
            <h3>STAGE 4: Time to Consolidate and Maintain</h3>
            <p>
                You have scored high marks; your print devices are consistent with compliant policy, and print is fully embedded in your processes. You are testing your security, backup, business continuity and key management processes and incident response plan once a month. You have a working definition of state of the art that is reviewed at least monthly, with processes to define state of the art that includes both security technology and security processes.
            </p>
            <p>
                Organisations at this stage in their GDPR journey would be deemed compliant if inspected today. 
            </p>
            <p>
                Ongoing objectives and measures are needed to consolidate and maintain efforts as GDPR compliance is not just a snapshot in time. It is a living, breathing regulation which must be continually adhered to and as such processes and systems must be constantly monitored and calibrated. State of the art is not a fixed concept, and so you must be seen to be continually improving.
            </p>
            <h4>Recommendations and Actions</h4>
            <p>
                Your organisation has passed the GDPR test as it stands. But that is not the end of the story.
            </p>
            <p>
                There is an opportunity to overachieve and to ensure your organisation stays ahead of the game by doing even more than what is required for GDPR compliance. You can differentiate and distinguish your organisation by going above and beyond this regulation to further mitigate risks and reduce the risk of data breaches.
            </p>
            <p>
                Remember: security threats are constantly evolving and secure today does not necessarily mean secure tomorrow. Breaches are likely, and process failures will happen. When these moments of truth occur, you can continue to demonstrate good practice in the way that you respond. Catching breaches early with good detection capability is a big plus, as is having a robust and tested incident response plan. Regulators understand that breaches happen, but are looking at how you react to determine what sanctions, if any, to levy.
            </p>
        '
    )
);