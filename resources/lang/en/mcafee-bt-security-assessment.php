<?php
//BTMcAfee
return array(
    'title' => 'IDC\s Security Assessment',
    'sub-title' => 'How ready is your businesses\' security ',
    'stage1' => 'Stage 1: Foundation',
    'stage2' => 'Stage 2: Developing',
    'stage3' => 'Stage 3: Good',
    'stage4' => 'Stage 4: Aspirational',
    'stage5' => 'Stage 5: Advanced',
    'complete_thankyou' => 'Thank you :Fname,',
    'complete_body' => '
        Thank you for your time. We have received your information. You will be receiving an email with your custom report momentarily.<br/>
        Please check in your junk folder if you don\'t receive it within 5 minutes.<br/><br/>
        <a class="btn btn--primary" target="_blank" href="https://www.bt.com/security">
            Click here for more information
        </a>',
    'complete_tweet' => 'I\'ve just taken the @IDCEMEA Security Assessment Tool for @splunk. Interested? ',// http://bit.ly/2gslXEh
    'email'=>[
        'subject' => 'IDC\'s Security Assessment',
        'hi' => 'Hi :Fname',
        'body' => 'As promised, here\'s a link to download your Security Assessment. This breaks down your results by category and provides you with actionable recommendations.',
        'link' => 'Download Report',
        'extra' => '',
        'regards' => 'Regards',
        'team' => 'The IDC Team'
    ],
    'introduction' => '
        <div class="spacer"></div>
        <h2>Overall Results</h2>
        <p>
            Based on your responses, you are placed within <strong>:percent</strong>% of companies overall in the readiness group of <strong>:result</strong>, which is the <strong>:number:ordinal</strong> level out of five.
        </p>
        <div style="position: relative; width: 170mm; height: 105mm; background: url(:overallbg); background-size: 170mm 105mm;">
            <div id="user" style="position:absolute; top: 28.575mm; left:43.181mm; width: :widthuser height: 7mm; background-color: #92063e"></div>
            <div id="lang" style="position:absolute; top: 38.153mm; left:43.181mm; width: :widthlang height: 7mm; background-color: #ff5627"></div>
            
            <div id="user" style="position:absolute; top: 50.358mm; left:43.181mm; width: :widthuser height: 7mm; background-color: #92063e"></div>
            <div id="size" style="position:absolute; top: 59.936mm; left:43.181mm; width: :widthsize height: 7mm; background-color: #ff5627"></div>

            <div id="user" style="position:absolute; top: 72.141mm; left:43.181mm; width: :widthuser height: 7mm; background-color: #92063e"></div>
            <div id="size" style="position:absolute; top: 81.719mm; left:43.181mm; width: :widthsize height: 7mm; background-color: #ff5627"></div>
        </div>
        <h2>Overall Summary</h2>
        <p>
            Compared to the best in class capabilities, your organisation is:
        </p>
        <ul>
            <li>:overalllang</li>
            <li>:overallsize</li>
        </ul>
        <p>
            <strong class="blue">Your performance in more detail</strong><br/>
            This assessment tool was designed to help establish your organisation\'s IT security operational readiness to cope with the evolving threat landscape that impacts digital businesses, both today and in the future. <br/>
            We looked at the following key areas:
        </p>
        <ul class="primary">
            <li>Security Integration</li>
            <li>Security automation</li>
            <li>Unified Intelligence</li>
        </ul>
        <p>
            Your performance in each area is compared to your peers in Figure 3 on the following page.
        </p>
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>IDC Security Response Readiness by Capability</h2>
        <div class="spacer"></div>
        <div style="position: relative; width: 170mm; height: 112mm; background: url(:sectionbg); background-size: 170mm 112mm;">
            <div id="user" style="position:absolute; top: 27.869mm; left:43.076mm; width: :widthuser-security-strategy height: 7mm; background-color: #92063e"></div>
            <div id="lang" style="position:absolute; top: 37.447mm; left:43.076mm; width: :width-security-strategy height: 7mm; background-color: #ff5627"></div>

            <div id="user" style="position:absolute; top: 49.652mm; left:43.076mm; width: :widthuser-incident-detection height: 7mm; background-color: #92063e"></div>
            <div id="lang" style="position:absolute; top: 59.23mm; left:43.076mm; width: :width-incident-detection height: 7mm; background-color: #ff5627"></div>

            <div id="user" style="position:absolute; top: 73.284mm; left:43.076mm; width: :widthuser-incident-response height: 7mm; background-color: #92063e"></div>
            <div id="lang" style="position:absolute; top: 82.862mm; left:43.076mm; width: :width-incident-response height: 7mm; background-color: #ff5627"></div>
        </div>
        <h2>How to get ahead</h2>
        <p>
            No matter what level you are at, there are certain areas that are continuing to evolve and are worth focusing on above all else
        </p>
       <ul>
            <li><strong>Integration</strong> &mdash; focusing on security product integration, for enhanced visibility across the security estate</li>
            <li><strong>Automation</strong> &mdash; exchanging threat information between products and updating policy decisions with minimal human supervision</li>
            <li><strong>Advanced technology</strong> &mdash; utilising the latest technologies to improve detection and remediation</li>
            <li><strong>Advanced deployment approaches</strong> &mdash; prioritising cloud deployments and thus benefitting from specialist security resource at scale, regular maintenance and state-of-the-art updates, with minimal downtime</li>
        </ul>
        <div class="pb"></div>
    ',
    'general-approach-to-it-heading' => '<h2>Improvements to Security Strategy</h2>',
    'integration-automation-heading' => '<h2>Improvements to Integration and Automation</h2>',
    'unified-heading' => '<h2>Improvements to Unified Intelligence</h2>',

    'general-approach-to-it-good' => '
    <strong>Good</strong>
    <p>
        You are in a good place, but remember that security strategy is a precursor to digital risk and that business performance and innovation must always be taken into account. Security has always been balanced with usability, but this is now extended to broad business objectives. Digital transformation is chief among these, but security needs to be positioned continually as an enabler — if not an accelerator — of such initiatives. Continue to influence the board in this regard.
    </p>',
    'general-approach-to-it-moderate' => '
    <strong>Moderate</strong>
    <p>
        The security you deliver to the business may be perfectly functional, but it is unlikely to be in line with business objectives. For some reason, security operations are unable to influence business decisions, which means that budgets tend to be allocated on an ad hoc, or at least localised, basis with little strategic enterprisewide planning. Aligning security provision with your businesses digital transformation programmes is fundamental, and this places new demands on both the security technology deployed and the efficiency and effectiveness of operations.
    </p>',
    'general-approach-to-it-weak' => '
    <strong>Weak</strong>
    <p>
        Security is likely to be regarded as a cost in your organisation. There is little strategic placement of security in the consciousness of business. How to change this? A good first step is to focus on operational effectiveness, where gains are likely in both the efficiency of processes and in achieving more predictable costs. Board influence is vital in the medium to longer term, so measuring security operations is essential in order to communicate good performance in business terms.
    </p>',

    'integration-automation-good' => '
    <strong>Good</strong>
    <p>
        You have intuitively followed a path of security product integration and are realising the benefits of this through automation. However, this is unlikely to be consistent across your entire security estate. The adoption of a holistic, open and strategic integration platform will yield benefits not just for your existing portfolio but for future product acquisitions. Furthermore, you will get even greater gains by automating policy updates and remediation across your entire estate, rather than being restricted to preintegrated products from a single vendor.
    </p>',
    'integration-automation-moderate' => '
    <strong>Moderate</strong>
    <p>
        You have started your integration journey and are seeing some benefits of automation, albeit most likely within small groups of products. The next step is a holistic integration and automation strategy, and your best approach is to select a platform that provides a wide range of easy-to-implement integrations. The greatest benefits of integration and automation come through a completely integrated architecture, but you are likely to have a security estate composed of products from multiple vendors. So an open platform architecture is essential.
    </p>',
    'integration-automation-weak' => '
    <strong>Weak</strong>
    <p>
        You are yet to benefit from the operational efficiency gains from integrating and then automating policy updates and remediating across your security estate. Following a best-of-breed product acquisition approach may have provided great functionality, but it is siloed and will be tough (and expensive) to integrate these disparate products. The best approach now is to settle on an open, holistic and strategic security platform, and then integrate individual products with (or retire these in favour of) those that have integration capabilities out-of-the-box.
    </p>',

    'unified-good' => '
    <strong>Good<br/><em>Threat Intelligence</em></strong>
    <p>
        You are making effective use of global threat inside services, and likely doing it in collaboration with peers and outside agencies. If you are not using threat intelligence to drive automated policy updates then this should be on your to-do list. You should also investigate security analytics if you are not already doing so, but make sure you have a process of continuous improvement through quantitative feedback. Managed services may also be appropriate, as they can provide greater context, as well as benefiting from the insight from multiple organisations.
    </p>
    <p>
        You seem to have a strong set of advanced security technologies at your disposal. You are more likely to be using machine learning today, and looking seriously at cognitive computing for deployment within two years. Beyond this, you should begin looking at the benefits of blockchain and distributed ledger technology, which has a variety of security use cases, plus containerisation and other micro-segmentation approaches that can help to limit the damage suffered from attacks.
    </p>',
    'unified-moderate' => '
    <strong>Moderate<br/><em>Threat Intelligence</em></strong>
    <p>
        You are using global threat insight services, but are less likely to be sharing information in a bidirectional way. Often, the real benefits from threat intelligence come from automated policy updates and proactive remediation, so ensure you are doing this. Also investigate security analytics if you are not already doing this. You are most likely using a specialist threat intelligence provider to manage your input, but consider using a managed services provider for this: you will most likely get better contextual information, as well as benefiting from insight from multiple organisations.
    </p>
    <p>
        You appear to be using a good cross-section of technologies, but may be missing out on the more advanced capabilities. You are likely to be using public-cloud-based security solutions to secure your own premise infrastructure, but less likely to be using it to secure public cloud services, or using cloud security gateways. DDoS protection services are commonplace today, so this should be on your to-do list if you have not already commissioned such services. Advanced capabilities such as blockchain and containerisation should be on your two-year plan for investigation.
    </p>',
    'unified-weak' => '
    <strong>Weak<br/><em>Threat Intelligence</em></strong>
    <p>
        You may be using threat intelligence products today, but these are likely to be straightforward feeds from third-party sources. This is fine as far as it goes, but greater benefits come from having managed threat intelligence, possibly from a specialist provider or (even better) a managed services provider that can provide better contextual information, as well as benefiting from insight from multiple organisations. Make sure you look at sharing threat intelligence, with peers and outside agencies, but understand that in order to get the greatest benefits this sharing must be bidirectional. 
    </p>
    <p>
        You can improve the effectiveness of your security operation by applying more advanced security capabilities. High on your list should be using cloud-based security solutions to secure both on-premise infrastructure and public cloud services. These are now mature and can substantially increase your security posture: the idea that cloud is inherently insecure is out of date. DDoS protection is regarded as a standard capability today, so consider commissioning a service to deliver better availability assurance.
    </p>',
   
    'summary' => '
        <div class="pb"></div>
        <div class="spacer"></div>
        <h2>Essential Guidance</h2>
        <p>
            Security is a continually evolving set of processes and technologies. The challenge is to keep your security operations up to date with changes in the threat landscape as well as the demands from business to support digital transformation programmes and compliance obligations. The demands on security operations are unlikely to ease any time soon. More will be expected of you, but budget and resource increases are unlikely to rise in line.
        </p>
        <p>
            As you seek to continually improve your security operations there are a number of important considerations to keep in mind:
        </p>
        <ul class="primary">
            <li>Security is now a strategic priority for businesses. It therefore must be aligned to business strategy, and the executive must be adequately and appropriately informed of risks as they emerge and change. Security should be positioned as a business enabler, so work hard at communicating the risks and benefits in terms members will understand.</li>
            <li>An ad hoc and fragmented approach to security technology acquisition is not appropriate for the demands of a modern security operations team. Solutions exist today that enable an integrated and ballistic security architecture that provides both the visibility across the entire estate and the control and management tools to assess security posture. Automation follows integration, and this is essential if security operations are to deliver better efficiency and effectiveness within the prevailing resource constraints.</li>
            <li>Innovation in the security world has for too long largely been in the domain of the attacker. This balance is now being restored, and a plethora of new technologies have emerged over the past five years that offer capabilities that drive security to new heights. Many of these new technologies can be deployed in the cloud, and even more through managed security services, helping organisations to maintain a security operation that is state of the art.</li>
        </ul>
        <div class="pb"></div>
        <div class="spacer"></div>
        <p>
            A Security Incident and Event Management System (SIEM) can help you understand what is happening real time on your networks, detect and highlight malicious activity, threats and attempted hacks before they become an issue. A SIEM, configured and integrated with your network and IT infrastructure, can be used not just to improve situational awareness, but also as a platform to orchestrate and automate responses and to stop attacks well before they become serious breaches.
        </p>
        <p>
            BT and McAfee have joined forces to gather, analyse and share the latest intelligence, so that protective controls can be updated in real-time. This allows organisations to close the gap between detection and protection. Our partnership means you get access to the latest technology and security intelligence at competitive prices. Together we offer intelligent SOC and SIEM capabilities as a managed service across Europe, able to support customers worldwide. Our joint solutions contain McAfee\'s dynamic endpoint, Data Loss Prevention, SIEM and associated technologies.
        </p>
        <p>
            We offer the combined benefits of McAfee’s visibility and management of endpoints, currently protecting over 188 million endpoints, alongside BT’s heritage in customers’ managed security operations and unique carrier-level insight. With BT’s 2500+ security specialists on hand, you benefit from expertise in the latest technologies and 24x7x365 cover.
        </p>
        <p>
            From our 14 global Security Operations Centres we provide a centralised monitoring of your SIEM, giving you the information you need to respond proactively and our highly scalable service can meet the needs of all sizes of organisation – from those organisations with a few sites and hundreds of devices though to global organisations with many thousands of devices that need monitoring.
        </p>
        <div class="spacer"></div>
        <table style="margin-top: 10mm; width: 170mm;" cellspacing="5">
            <tr>
                <td style="text-align: center; vertical-align: center; background-image: url(:link1);background-size: 56mm 52mm; background-repeat: no-repeat; width: 56mm; height: 52mm; position: relative;">
                    <a href="https://www.globalservices.bt.com/uk/en/form/speak-to-bt-mcafee-expert?cid=aff_(sc)partners_website(cm)idc(md)whitepaper(id)mcafee" style="position: absolute; top: 0; left: 0; width: 56mm; height: 52mm; text-decoration: none">&nbsp;</a>
                </td>
                <td style="text-align: center; vertical-align: center; background-image: url(:link2);background-size: 56mm 52mm; background-repeat: no-repeat; width: 56mm; height: 52mm; position: relative;">
                    <a href="https://www.globalservices.bt.com/uk/en/form/siem-showcase-visit?cid=aff_(sc)partners_website(cm)idc(md)whitepaper(id)showcase" style="position: absolute; top: 0; left: 0; width: 56mm; height: 52mm; text-decoration: none">&nbsp;</a>
                </td>
                <td style="text-align: center; vertical-align: center; background-image: url(:link3);background-size: 56mm 52mm; background-repeat: no-repeat; width: 56mm; height: 52mm; position: relative;">
                    <a href="http://securebusiness.idcready.net/downloads/BT-Managed-SIEM-Security.pdf" style="position: absolute; top: 0; left: 0; width: 56mm; height: 52mm; text-decoration: none">&nbsp;</a>
                </td>
            </tr>
        </table>
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
    'general-approach-to-it' => array(
        'title'=>'Approach to IT',
        'image'=>'security-strategy.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>''
    ),
    'integration' => array(
        'title'=> 'Integration',
        'image'=>'incident-detection.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>''
    ),
    'automation' => array(
        'title'=> 'Automation',
        'image'=>'incident-response.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>''
    ),
    'unified-intelligence' => array(
        'title'=> 'Unified Intelligence',
        'image'=>'incident-response.jpg',
        'pb'=>'pb',
        'stage1'=>'',
        'stage2'=>'',
        'stage3'=>'',
        'stage4'=>'',
        'stage5'=>''
    )
);