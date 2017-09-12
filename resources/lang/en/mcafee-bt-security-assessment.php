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
        <a class="btn btn--primary" target="_blank" href="https://www.bt.com">
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
        <h2>Overall Results</h2>
        <p>
            Based on your responses, you are placed within <strong>:percent</strong>% of companies overall in the readiness group of <strong>:result</strong>, which is the <strong>:number:ordinal</strong> level out of five.
        </p>
        <div style="position: relative; width: 170mm; height: 105mm; background: url(http://securebusiness.idcready.net/images/tools/6/overall_graph_bg.svg); background-size: 170mm 105mm;">
            <div id="user" style="position:absolute; top: 28.575mm; left:43.181mm; width: :widthuser height: 7mm; background-color: #92063e"></div>
            <div id="lang" style="position:absolute; top: 38.153mm; left:43.181mm; width: :widthlang height: 7mm; background-color: #ff5627"></div>
            
            <div id="user" style="position:absolute; top: 50.358mm; left:43.181mm; width: :widthuser height: 7mm; background-color: #92063e"></div>
            <div id="size" style="position:absolute; top: 59.936mm; left:43.181mm; width: :widthsize height: 7mm; background-color: #ff5627"></div>

            <div id="user" style="position:absolute; top: 72.141mm; left:43.181mm; width: :widthuser height: 7mm; background-color: #92063e"></div>
            <div id="size" style="position:absolute; top: 81.719mm; left:43.181mm; width: :widthsize height: 7mm; background-color: #ff5627"></div>
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
        <div style="position: relative; width: 170mm; height: 112mm; background: url(http://securebusiness.idcready.net/images/tools/6/section_graph_bg.svg); background-size: 170mm 112mm;">
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
    'overall-good' => '
    <strong>Good</strong><br/>
    <p>
        You are in a good place, but remember that security strategy is a precursor to digital risk and that business performance and innovation must always be taken into account. Security has always been balanced with usability, but this is now extended to broad business objectives. Digital transformation is chief among these, but security needs to be positioned continually as an enabler — if not an accelerator — of such initiatives. Continue to influence the board in this regard. 
    </p>',
    'overall-moderate' => '
    <strong>Moderate</strong><br/>
    <p>
        The security you deliver to the business may be perfectly functional, but it is unlikely to be in line with business objectives. For some reason, security operations are unable to influence business decisions, which means that budgets tend to be allocated on an ad hoc, or at least localised, basis with little strategic enterprisewide planning. Aligning security provision with your businesses digital transformation programmes is fundamental, and this places new demands on both the security technology deployed and the efficiency and effectiveness of operations. 
    </p>',
    'overall-weak' => '
    <strong>Week</strong><br/>
    <p>
        Security is likely to be regarded as a cost in your organisation. There is little strategic placement of security in the consciousness of business. How to change this? A good first step is to focus on operational effectiveness, where gains are likely in both the efficiency of processes and in achieving more predictable costs. Board influence is vital in the medium to longer term, so measuring security operations is essential in order to communicate good performance in business terms.
    </p>',
    'integration-automation-heading' => '<h2>Improvements to Integration and Automation</h2>',
    'unified-heading' => '<h2>Improvements to Unified Intelligence</h2>',

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
    <strong>Week</strong>
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