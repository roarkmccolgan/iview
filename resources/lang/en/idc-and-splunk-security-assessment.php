<?php
//SPLUNK
return array(
    'title' => 'IDC\s Security Assessment',
    'sub-title' => 'How secure is your business?',
    'stage1' => 'Stage 1: Poor',
    'stage2' => 'Stage 2: Standard',
    'stage3' => 'Stage 3: Good',
    'stage4' => 'Stage 4: Aspirational',
    'stage5' => 'Stage 5: Best',
    'complete_thankyou' => 'Thank you :Fname,',
    'complete_body' => '
        Your custom report will arrive in your inbox soon.<br/>
        Please check in your junk folder if you don\'t receive it within 5 minutes.<br/><br/>
        <a class="btn btn--primary" target="_blank" href="https://www.splunk.com/en_us/solutions/solution-areas/security-and-fraud/security-investigation.html">
            Click here for more information
        </a>',
    'complete_tweet' => 'I\'ve just taken the @IDCEMEA Security Assessment Tool for @splunk. Interested? ',// http://bit.ly/2gslXEh
    'email'=>[
        'subject' => 'IDC\'s Security Assessment',
        'hi' => 'Hi :Fname',
        'body' => 'As promised, here\'s a link to download your Security Assessment. This breaks down your results by category and provides you with actionable recommendations.',
        'link' => 'Download Report',
        'extra' => 'Once you\'ve digested the report why not visit <a href="https://www.splunk.com/en_us/solutions/solution-areas/security-and-fraud/security-investigation.html" style="color:#65A637">Splunk</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team'
    ],
    'introduction' => '
        <h2>Overall Results</h2>
        <p>
            Based on your responses, you are placed within <strong>:percent</strong>% of companies overall in the readiness group of <strong>:result</strong>, which is the <strong>:number:ordinal</strong> level out of five.
        </p>
        <div style="position: relative; width: 170mm; height: 80mm; background: url(:overallbg); background-size: 170mm 80mm;">
            <div id="user" style="position:absolute; top: 24.694mm; left:40.5mm; width: :widthuser height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 33mm; left:40.5mm; width: :widthlang height: 7mm; background-color: #00ADEE"></div>
            <div id="user" style="position:absolute; top: 49mm; left:40.5mm; width: :widthuser height: 7mm; background-color: #004B85"></div>
            <div id="size" style="position:absolute; top: 57mm; left:40.5mm; width: :widthsize height: 7mm; background-color: #00ADEE"></div>
        </div>
        <h2>Overall Summary</h2>
        <p>
            Compared to the best in class capabilities, your organization is:
        </p>
        <ul>
            <li>:overalllang</li>
            <li>:overallsize</li>
        </ul>
        <p>
            <strong class="blue">Your performance in more detail</strong><br/>
            The assessment tool was designed to help establish your organization\'s readiness to cope with the evolving threat landscape that impacts on today’s digital businesses, both today and into the future.<br/>
            We looked at the following key areas of IT security:
        </p>
        <ul class="primary">
            <li>Security Strategy</li>
            <li>Incident Detection</li>
            <li>Incident Response</li>
        </ul>
        <p>
            Your performance in each area is compared to your peers in Figure 3 on the following page.
        </p>
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>IDC Security Response Readiness by Capability</h2>
        <div class="spacer"></div>
        <div style="position: relative; width: 170mm; height: 105mm; background: url(:sectionbg); background-size: 170mm 105mm;">
            <div id="user" style="position:absolute; top: 24.694mm; left:44.3mm; width: :widthuser-security-strategy height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 33mm; left:44.3mm; width: :width-security-strategy height: 7mm; background-color: #00ADEE"></div>

            <div id="user" style="position:absolute; top: 48mm; left:44.3mm; width: :widthuser-incident-detection height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 56.3mm; left:44.3mm; width: :width-incident-detection height: 7mm; background-color: #00ADEE"></div>

            <div id="user" style="position:absolute; top: 72mm; left:44.3mm; width: :widthuser-incident-response height: 7mm; background-color: #004B85"></div>
            <div id="lang" style="position:absolute; top: 80mm; left:44.3mm; width: :width-incident-response height: 7mm; background-color: #00ADEE"></div>
        </div>
        <h2>How to get ahead</h2>
        <p>
            No matter what level you are at, there are certain areas that are continuing to evolve and are worth focusing on above all else
        </p>
        <ul>
            <li>Integration – avoiding the single glass of pain</li>
            <li>Proactive approach – cutting the time between breach and detection from months to hours(or less) </li>
            <li>Keeping ahead of compliance – it is hard enough to gain compliance for most, let alone maintain it</li>
            <li>Best practice – recognizing that the threat landscape never sits still and that compliance and regulatory frameworks are often years out of date even at introduction, adopting a best practice approach is the best way to mitigate threats. The added advantage is that, if done right, compliance will naturally be achieved.</li>
        </ul>
        <div class="pb"></div>
    ',
    'security-strategy-heading' => '<h2>Improvements to Security Strategy</h2>',
    'incident-detection-heading' => '<h2>Improvements to Incident Detection</h2>',
    'incident-response-heading' => '<h2>Improvements to Incident Response</h2>',
    'a1-a' => '
    <p>
        Getting security to align with and support the business is vital for any modern digital business. Ad-hoc or reactive approaches to security will hold you company back and also put you at risk of potential fines under compliance legislation. A key priority for you should be to raise the awareness of how security enables new business opportunities and improve senior management awareness of the strategic value of IT security to help build a longer term plan.
    </p>',
    'a1-b' => '
    <p>
        Getting security to align with and support the business is vital for any modern digital business. While you are doing OK in getting security more consistent through repeatable processes, you should work to raise the awareness of how security enables new business opportunities and improve senior management awareness of the strategic value of IT security to help build a longer term plan.
    </p>',
    'a5-a' => '
    <p>
        New approaches to security governance and compliance are placing more evidence on implementing best practice, and this is an area where you are currently at risk. Focusing on best practice and balancing this with risk management can really help to drive both compliance and business agility. It is often hard to build best practice capabilities internally, so you should consider utilizing external experts to help define the both the scope of requirements and also possible solutions.
    </p>',
    'a5-b' => '
    <p>
        New approaches to security governance are placing more evidence on implementing best practice. While you have been tackling this internally, making sure you have experts who have a view of the entire security landscape can really help you to identify gaps and weaknesses in your approach. Focusing on best practice and balancing this with risk management can really help to drive both compliance and business agility. It is often hard to build best practice capabilities internally, so you should consider utilizing external experts to help define the both the scope of requirements and also possible solutions.
    </p>',
    'a7-a' => '
    <p>
        Threats are evolving quickly and becoming more capable and mature. You need to be ahead of the game here, but you are yet to really adopt best in class security capabilities. Assuming you have been breached and proactively hunting for breaches will be a vital skill for IT security organizations of the future. Work on a business plan to support investment in emerging discovery capabilities such as analytics and machine learning.
    </p>',
    'a7-b' => '
    <p>
        Threats are evolving quickly and becoming more capable and mature. You need to be ahead of the game here, and you have started to adopt best in class security capabilities but have a way to go still. Assuming you have been breached and proactively hunting for breaches will be a vital skill for IT security organizations of the future. Work on a business plan to support investment in emerging discovery capabilities such as analytics and machine learning.
    </p>',
    'a8-a' => '
    <p>
        Managing your initial response to a security incident will be critical to containing the threat and mitigating any potential damage, but you do not have anything in place now. A platform designed to standardize and manage this can be particularly useful, especially in the light of the breach reporting requirements of new legislation such as GDPR, or for IT Security Breach Insurance compliance.
    </p>',
    'a8-b' => '
    <p>
        Managing your initial response to a security incident will be critical to containing the threat and mitigating any potential damage. You have made a small start, but you should be looking to scale this up soon. A platform designed to standardize and manage this can be particularly useful, especially in the light of the breach reporting requirements of new legislation such as GDPR, or for IT Security Breach Insurance compliance.
    </p>',
    'a11-a' => '
    <p>
        A well-defined and tested response plan is essential in the event of a breach to ensure that all obligations and requirements are met. Automating this process as much as possible will be a great help in reducing ongoing operational overhead.
    </p>',
    'a11b-a' => '
    <p>
        The longer that people have to take dealing with a security incident, the greater the impact on productivity and business risk. Reducing the time spend on investigations and remediation should be a key aim, ideally with an approach to standardizing and automating security breach response.
    </p>',
    'a13-a' => '
    <p>
        You are struggling to deal with the volume of incidents. Rather than bringing in more people to try to cope, consider ways to make detection and remediation (through approaches such as automation and prioritization) much more effective.
    </p>',
    'a13-b' => '
    <p>
        While you can generally cope with the volume of incidents, it is not always easy and things can get rather heated. Rather than bringing in more people to try to cope, consider ways to make detection and remediation (through approaches such as automation and prioritization) much more effective.
    </p>',
    'a14-a' => '
    <p>
        You cannot secure effectively that which you cannot measure, and you are not measuring enough to be able to determine the extent and impact of a breach. Taking a proactive approach to gathering and analysing information will enable you to not only detect a breach more reliably and more quickly, but also will help reverse engineer the breach to be able to improve your security response and risk posture to mitigate future attacks.
    </p>',
    'a14-b' => '
    <p>
        You cannot secure effectively that which you cannot measure. While you have enough to steer you in the right direction, trying to tackle a breach more effectively will be much easier if you work to improve your overall information gathering and monitoring capabilities. Taking a proactive approach to gathering and analysing information will enable you to not only detect a breach more reliably and more quickly, but also will help reverse engineer the breach to be able to improve your security response and risk posture to mitigate future attacks.
    </p>',
    'summary' => '
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>Essential Guidance</h2>
        <p>
            Security is typically top of list of barriers for driving new IT initiatives, from developing and deploying new applications and services, to taking advantage of new IT architectures such as hybrid cloud. Proactive IT security monitoring, detection and response – built on a standardized platform with automation and analytics – will be one of the factors that differentiate the top performing digital businesses that can move quickly with market conditions. Achieving this will not come without risks and pitfalls, including
        </p>
        <ul>
            <li>Going in without a plan – Security need to be both deliberate and thoughtful, so make a conscious move to avoid buying products to fill gaps in capabilities. Utilize the skills of third party security experts who have hard won experience and insight to help build solutions that are known to work and to be manageable.</li>
            <li>Boiling the ocean – while it may seem the best solution is to rip everything up and start again, that is seldom a productive approach. Instead, look to improve your capabilities in select areas, and then build on your approach. As the level of adoption and experience rises, more of the IT infrastructure can be brought in to benefit from the advancements.</li>
            <li>Open inter-operability – we don’t know what the future will bring, and being locked in to proprietary interfaces will hinder the ability to secure the IT estate as it grows and changes. Look to solutions that integrate well as a stack, but also support expansion through open, stable and well defined APIs and interfaces.</li>
        </ul>
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