<?php
//Symantec
return array(
    'title' => 'Symantec GDPR Assessment',
    'sub-title' => 'Your businesses\' GDPR readiness',
    'stage1' => 'WAN Follower',
    'stage2' => 'WAN Generalist',
    'stage3' => 'WAN Leader',
    'finishtxt' => '
        <h2 class="font-light leading-tight mb-4">Thank you for completing the network maturity assessment.</h2>
        <h4 class="font-light leading-tight mb-2">How you scored</h4>
        <img class="max-w-full" src="/images/tools/8/graph2.png" alt="">
        <p class="font-semibold mb-4">Please tell us a little about yourself and immediately receive your personalized report including:</p>
        <ul class="mb-4">
            <li>How you compare against your peers based on industry, organizational size, and geographic region</li>
            <li>Where to focus your network readiness efforts with essential guidance</li>
            <li>Why the associated business benefits will make this a business priority today</li>
        </ul>
    ',
    'poor'=>'WAN Follower', //reactive
    'poortxt'=>'Thank you',
    'standard'=>'WAN Generalist',
    'standardtxt'=>"Thank you for completing IDC's GDPR Assessment.<br/>This report will provide you with recommendations about the next stages of your journey to GDPR compliance.",
    'good'=>'WAN Leader',
    'goodtxt'=>"Thank you for completing IDC's GDPR Assessment.<br/>This report will provide you with recommendations about the next stages of your journey to GDPR compliance.",
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
        <h2 class="text-ntt-blue mb-6">INTRODUCTION</h2>
        <p class="mb-2">
            Thank you for completing the NTT Next Generation WAN Advisor, with research and analysis by IDC. As organizations implement digital transformation strategies they are faced with accelerating network requirements and the need for a network that supports the business outcomes they are aiming to achieve. As such digital transformation should go hand in hand with network evolution.
        </p>
        <p class="mb-2">
            IDC has developed the Next Generation WAN Advisor to help organizations assess the state of their WAN, and benchmark this performance against their peers. This interactive self-assessment tool is backed up by independent end-user research and IDC\'s in depth understanding of this market. The research draws upon input from 300 network experts and decision makers to understand how advanced different organizations are in terms of their WAN investment and approach.
        </p>
        <p class="mb-2">
            IDC has built a comparison framework in which individual responses from the survey are scored to group organizations into 3 levels of WAN maturity, based on their approach to:
        </p>
        <ul class="mb-2">
            <li><strong class="text-ntt-blue">WAN Infrastructure</strong> - addressing usage and strategy with regards to connectivity and SD-WAN</li>
            <li><strong class="text-ntt-blue">WAN Intelligence</strong> - covering usage of data and analytics to improve the performance of network and applications</li>
            <li><strong class="text-ntt-blue">WAN Operations</strong> - focusing on operational tasks such as configuration and security policy management</li>
        </ul>
        <p class="mb-2">
            Based on your responses, this report provides you with a benchmark of your organization\'s WAN. It gives essential and tailored guidance to help you prepare for the requirements of tomorrow and plot your course to a Next Generation WAN: a network that delivers the scalability, flexibility, manageability, cost effectiveness and security that your organization needs to drive digital transformation.
        </p>
        <div class="pb"></div>
        <div class="spacer"></div>
        
    ',
    'overallintro'=>'
        <h2 class="w-2/3 ml-auto text-ntt-blue mb-6">OVERALL PERFORMANCE</h2>
        <div class="flex items-center">
            <div class="w-1/3"><img class="block mx-auto" src=":icon" alt="" style="width: 25mm;"></div>
            <p class="w-2/3 mb-2">
                Organizations can only reap the full benefits of digital transformation if this goes hand in hand with an evolution of their WAN. IDC has created the Next Generation WAN Advisor to help organizations assess the readiness of their WAN for the digital future. It scores organizations on their approach to  WAN infrastructure, intelligence and operations. Based on a survey of 300 network influencers and decision makers we class organizations into three levels of maturity: <strong>Followers</strong>, <strong>Generalists</strong> and <strong>Leaders</strong>. Few organizations at the top end of the curve, with the majority considered as WAN Generalists.
            </p>
        </div>
        <img class="block mx-auto mt-6" src=":image" alt="" style="width: 140mm;">
    ',
    'overallstage1'=>'
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
                Based on your responses to IDC\'s Next Generation WAN Advisor, your organization has been positioned as a :position (Level :stage of 3), which means your organization is generally lagging behind its peers.
            </p>
        </div>
    ',
    'overallstage2'=>'
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
                Based on your responses to IDC\'s Next Generation WAN Advisor, your organization has been positioned as a :position (Level :stage of 3), which means your organization is generally inline with its peers.
            </p>
        </div>
    ',
    'overallstage3'=>'
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
                Based on your responses to IDC\'s Next Generation WAN Advisor, your organization has been positioned as a :position (Level :stage of 3), which means your organization is generally ahead of its peers.
            </p>
        </div>
    ',
    'overalloutro' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                These results indicate that there is plenty of room for improvement for most organizations when it comes to their WAN. To turn your WAN into a driver of digital transformation, you should aspire to outperform your peers and progress on the maturity ladder.
            </p>
        </div>
        <div class="pb"></div>
    ',

    'infrastructureintro' => '
        <h2 class="w-2/3 ml-auto text-ntt-blue mb-6">WAN INFRASTRUCTURE</h2>
        <div class="flex items-center">
            <div class="w-1/3"><img class="block mx-auto" src=":icon" alt="" style="width: 25mm;"></div>
            <p class="w-2/3 mb-2">
                Network requirements are accelerating as organizations are embracing digital transformation. At the same time the strategic importance of the WAN is increasing, as the business becomes more and more reliant upon it. There are a number of building blocks that can help improve the WAN infrastructure to address these requirements. These include hybrid architectures, local Internet break-outs, cloud connectivity and SD-WAN. 
            </p>
        </div>
    ',

    'infrastructure-1-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is in line with its peers when it comes to WAN infrastructure capabilities, which means your organizations ranks ahead of its overall performance as a WAN Follower in this area.
            </p>
        </div>
    ',
    'infrastructure-1-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is ahead of its peers when it comes to WAN infrastructure capabilities, which means your organization is quite advanced in this area compared to its overall performance as a WAN Follower.
            </p>
        </div>
    ',
    'infrastructure-1-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is ahead of its peers when it comes to WAN infrastructure capabilities, which means your organization is quite advanced in this area compared to its overall performance as a WAN Follower.
            </p>
        </div>
    ',

    'infrastructure-2-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is lagging its peers when it comes to WAN infrastructure capabilities, which means this area is less developed than its overall performance as a WAN Generalist.
            </p>
        </div>
    ',
    'infrastructure-2-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is in line with its peers when it comes to WAN infrastructure capabilities, which is consistent with its overall performance as a WAN Generalist.
            </p>
        </div>
    ',
    'infrastructure-2-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is ahead of its peers when it comes to WAN infrastructure capabilities, which means your organization is more advanced in this area compared to its overall performance as a WAN Generalist.
            </p>
        </div>
    ',

    'infrastructure-3-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is lagging its peers when it comes to WAN infrastructure capabilities, which means this area is well behind its overall performance as a WAN Leader.
            </p>
        </div>
    ',
    'infrastructure-3-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responses, your organization is lagging its peers when it comes to WAN infrastructure capabilities, which means this area is well behind its overall performance as a WAN Leader.
            </p>
        </div>
    ',
    'infrastructure-3-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
                Based on your responsed, your organization id in line with its peers when it comes to WAN infrastructure capabilities, which means this area ranks behind its overall performance as a WAN Leader.
            </p>
        </div>
    ',

    'infrastructure-1-q2-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You mostly buy WAN infrastructure on an ad-hoc basis, which is common for WAN Followers. In order to move up to the next level, you should start to develop a long term technology roadmap for your WAN infrastructure and purchase consistently. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-1-q2-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You mostly buy WAN infrastructure on an ad-hoc basis, which is common for WAN Followers. In order to move up to the next level, you should start to develop a long term technology roadmap for your WAN infrastructure and purchase consistently. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-1-q2-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You are buying WAN solutions strategically in some cases, which is already a good step for companies that are WAN Followers. The increasing strategic importance of the WAN should be reflected in your approach to buying WAN solutions, and you should try to accelerate your long term technology roadmap across all WAN infrastructure and purchase in consistency with that. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-1-q2-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                Your WAN buying approach is forging ahead for a WAN Follower, and you should continuously align your network roadmap with the business outcomes that you want to deliver. A strategic commercial framework under which individual network elements can be dynamically allocated and adjusted as your needs develop could further drive your agility.
            </p>
        </div>
    ',
    'infrastructure-1-q2-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                Your WAN buying approach is forging ahead for a WAN Follower, and you should continuously align your network roadmap with the business outcomes that you want to deliver. A strategic commercial framework under which individual network elements can be dynamically allocated and adjusted as your needs develop could further drive your agility.
            </p>
        </div>
    ',

    'infrastructure-2-q2-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You mostly buy WAN infrastructure on an ad-hoc basis, which means this is an area to focus on given your overall status of WAN Generalist. The increasing strategic importance of the WAN should be reflected in your approach to buying WAN solutions. You should develop a long term technology roadmap for your WAN infrastructure and purchase consistently. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-2-q2-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You mostly buy WAN infrastructure on an ad-hoc basis, which means this is an area to focus on given your overall status of WAN Generalist. The increasing strategic importance of the WAN should be reflected in your approach to buying WAN solutions. You should develop a long term technology roadmap for your WAN infrastructure and purchase consistently. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-2-q2-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                While you already buy WAN solutions strategically in some cases, which is where you are expected to be given your status as a WAN Generalist. In order to move up to the next level, the increasing strategic importance of the WAN should be reflected in your approach to buying WAN solutions.  You should develop a long term technology roadmap across all WAN infrastructure and purchase in consistency with that. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-2-q2-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                Your purchase behavior recognizes the strategic importance of the WAN for your business, which is an advanced approach given your rating as a WAN Generalist. You are already doing well, but you could consider continuously aligning your network roadmap with the business outcomes that you want to deliver. A strategic commercial framework under which individual network elements can be dynamically allocated and adjusted as your needs develop could further drive your agility.
            </p>
        </div>
    ',
    'infrastructure-2-q2-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                Your purchase behavior recognizes the strategic importance of the WAN for your business, which is an advanced approach given your rating as a WAN Generalist. You are already doing well, but you could consider continuously aligning your network roadmap with the business outcomes that you want to deliver. A strategic commercial framework under which individual network elements can be dynamically allocated and adjusted as your needs develop could further drive your agility.
            </p>
        </div>
    ',

    'infrastructure-3-q2-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You mostly buy WAN infrastructure on an ad-hoc basis, and this needs attention given your overall position as a WAN Leader. However, the increasing strategic importance of the WAN should be reflected in your approach to buying WAN solutions, and you should try to accelerate your long term technology roadmap across all WAN infrastructure and purchase in consistency with that. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-3-q2-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You mostly buy WAN infrastructure on an ad-hoc basis, and this needs attention given your overall position as a WAN Leader. However, the increasing strategic importance of the WAN should be reflected in your approach to buying WAN solutions, and you should try to accelerate your long term technology roadmap across all WAN infrastructure and purchase in consistency with that. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-3-q2-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You buy WAN solutions strategically in some cases, and while this is good it still needs attention given your overall position as a WAN Leader.  The increasing strategic importance of the WAN should be reflected in your approach to buying WAN solutions.  You should develop a long term technology roadmap across all WAN infrastructure and purchase in consistency with that. This will help you improve performance, interoperability and cost effectiveness.
            </p>
        </div>
    ',
    'infrastructure-3-q2-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You are purchasing WAN solutions strategically, and this is in line with your overall position as a WAN Leader. You should continuously align your network roadmap with the business outcomes that you want to deliver. A strategic commercial framework under which individual network elements can be dynamically allocated and adjusted as your needs develop could further drive your agility.
            </p>
        </div>
    ',
    'infrastructure-3-q2-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You are purchasing WAN solutions strategically, and this is in line with your overall position as a WAN Leader. You should continuously align your network roadmap with the business outcomes that you want to deliver. A strategic commercial framework under which individual network elements can be dynamically allocated and adjusted as your needs develop could further drive your agility.
            </p>
        </div>
    ',

    'infrastructure-1-q3-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are not yet deploying SD-WAN, which is expected given your overall rating of WAN Follower. It may not seem relevant today, but you should start exploring today what SD-WAN is about and assess what benefits it may or may not bring to your business. 
            </p>
        </div>
    ',
    'infrastructure-1-q3-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are not yet deploying SD-WAN, which is expected given your overall rating of WAN Follower. It may not seem relevant today, but you should start exploring today what SD-WAN is about and assess what benefits it may or may not bring to your business. 
            </p>
        </div>
    ',
    'infrastructure-1-q3-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. Your deployment of SD-WAN is in its early stages, and this is advanced given your rating of WAN Follower. You should take the learnings of these first deployments to devise a migration plan and site priority list to expand the coverage.
            </p>
        </div>
    ',
    'infrastructure-1-q3-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. Your deployment of SD-WAN is in its early stages, and this is advanced given your rating of WAN Follower. You should take the learnings of these first deployments to devise a migration plan and site priority list to expand the coverage.
            </p>
        </div>
    ',
    'infrastructure-1-q3-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are already extensively deploying SD-WAN, which is advanced for your rating of WAN Follower. With a head start on others, you can start exploring how you can build on this as a launching pad towards a further virtualization of your network, in order to drive further benefits in terms of performance, flexibility and cost efficiency. 
            </p>
        </div>
    ',

    'infrastructure-2-q3-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are not yet deploying SD-WAN, which means you are lagging behind given your overall rating of WAN Generalist. You should start exploring today what SD-WAN is about and assess what benefits it may or may not bring to your business. 
            </p>
        </div>
    ',
    'infrastructure-2-q3-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are not yet deploying SD-WAN, which means you are lagging behind given your overall rating of WAN Generalist. You should start exploring today what SD-WAN is about and assess what benefits it may or may not bring to your business. 
            </p>
        </div>
    ',
    'infrastructure-2-q3-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. Your deployment of SD-WAN is in its early stages, and this is in line with your rating of WAN Generalist. You should take the learnings of these first deployments to devise a migration plan and site priority list to expand the coverage.
            </p>
        </div>
    ',
    'infrastructure-2-q3-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. Your deployment of SD-WAN is in its early stages, and this is in line with your rating of WAN Generalist. You should take the learnings of these first deployments to devise a migration plan and site priority list to expand the coverage.
            </p>
        </div>
    ',
    'infrastructure-2-q3-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are already extensively deploying SD-WAN, which is advanced for your rating of WAN Generalist. With a head start on others, you can start exploring how you can build on this as a launching pad towards a further virtualization of your network, in order to drive further benefits in terms of performance, flexibility and cost efficiency. 
            </p>
        </div>
    ',

    'infrastructure-3-q3-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are not yet deploying SD-WAN, which means you are lagging behind given your overall rating of WAN Leader. You should start exploring today what SD-WAN is about and assess what benefits it may or may not bring to your business. 
            </p>
        </div>
    ',
    'infrastructure-3-q3-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are not yet deploying SD-WAN, which means you are lagging behind given your overall rating of WAN Leader. You should start exploring today what SD-WAN is about and assess what benefits it may or may not bring to your business. 
            </p>
        </div>
    ',
    'infrastructure-3-q3-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. Your deployment of SD-WAN is in its early stages, and this is lagging behind given your rating of WAN Leader. You should take the learnings of these first deployments to devise a migration plan and site priority list to expand the coverage.
            </p>
        </div>
    ',
    'infrastructure-3-q3-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. Your deployment of SD-WAN is in its early stages, and this is lagging behind given your rating of WAN Leader. You should take the learnings of these first deployments to devise a migration plan and site priority list to expand the coverage.
            </p>
        </div>
    ',
    'infrastructure-3-q3-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                SD-WAN has emerged as one of the key building blocks of the network of the future, with the promise of improved network and application performance and visibility, particularly in a cloud environment. At the same time it aims to drive flexibility, while providing cost effective bandwidth and reducing complexity. You are already extensively deploying SD-WAN, which is expected considering your overall rating of WAN Leader. As you are already far advanced you can start exploring how you can build on this as a launching pad towards a further virtualization of your network, in order to drive further benefits in terms of performance, flexibility and cost efficiency. 
            </p>
        </div>
    ',

    'intelligenceintro' => '
        <h2 class="w-2/3 ml-auto text-ntt-blue mb-6">WAN INTELLIGENCE</h2>
        <div class="flex items-center">
            <div class="w-1/3"><img class="block mx-auto" src=":icon" alt="" style="width: 25mm;"></div>
            <p class="w-2/3 mb-2">
                Network intelligence can play a key role to optimize the network and to ensure application performance expectations are met. Intelligent services like WAN optimization, application performance management, real time monitoring and replay functionality can drive visibility into network and application and significantly improve performance.  
            </p>
        </div>
    ',

    'intelligence-1-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is in line with its peers when it comes to the use of Network Intelligence, which is more advanced than its overall ranking as a WAN Follower. 
            </p>
        </div>
    ',
    'intelligence-1-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is ahead of its peers when it comes to the use of Network Intelligence, which is quite advanced compared to its overall ranking as a WAN Follower. 
            </p>
        </div>
    ',
    'intelligence-1-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is ahead of its peers when it comes to the use of Network Intelligence, which is quite advanced compared to its overall ranking as a WAN Follower. 
            </p>
        </div>
    ',

    'intelligence-2-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is behind its peers when it comes to the use of Network Intelligence, which means this area is less developed than its overall ranking as a WAN Generalist suggests.
            </p>
        </div>
    ',
    'intelligence-2-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is in line withits peers when it comes to the use of Network Intelligence, which is consistent with its overall ranking as a WAN Generalist. 
            </p>
        </div>
    ',
    'intelligence-2-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is ahead of its peers when it comes to the use of Network Intelligence, which is more advanced than its overall ranking as a WAN Generalist. 
            </p>
        </div>
    ',

    'intelligence-3-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is behind its peers when it comes to the use of Network Intelligence, which means this area is substantially less developed than its overall ranking as a WAN Leader suggests.
            </p>
        </div>
    ',
    'intelligence-3-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is behind its peers when it comes to the use of Network Intelligence, which means this area is substantially less developed than its overall ranking as a WAN Leader suggests.
            </p>
        </div>
    ',
    'intelligence-3-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue font-bold">
            Based on your responses, your organization is in line with its peers when it comes to the use of Network Intelligence, which is behind its overall ranking as a WAN Leader. 
            </p>
        </div>
    ',

    'intelligence-1-q5-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                Like many WAN followers you have a passive stance to network optimization. You only respond when problems are reported. You need to adopt a more proactive and structural approach to ensure network performance and cost effectiveness keep up with growing demands. Explore network intelligence and analytics solutions that can help you understand and optimize network and application performance.
            </p>
        </div>
    ',
    'intelligence-1-q5-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have a reactive stance to network optimization, which is quite common for WAN Followers. You are only triggered into action by device notifications. You should pursue a more proactive and structural approach to ensure network performance and cost effectiveness keep up with growing demands. Explore network intelligence and analytics solutions that can help you understand and optimize network and application performance.
            </p>
        </div>
    ',
    'intelligence-1-q5-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You already take structural measures to optimize your network, which puts you among the most advanced WAN Followers. You could build on this by exploring a more proactive and forward-looking approach. Predictive analytics can help you pre-empt performance issues and improve optimization.
            </p>
        </div>
    ',
    'intelligence-1-q5-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                Your use of predictive analytics ranks you well ahead of other WAN Followers when it comes to network optimization. Your next step would be to drive performance and efficiency further by automating your optimization task as much as possible, though you may want to consider prioritizing other parts of your WAN first, in order to lift your overall level of maturity.
            </p>
        </div>
    ',
    'intelligence-1-q5-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have automated your network optimization leveraging predictive analytics. This is a very advanced approach to network optimization, particularly in comparison to other WAN Followers. You should now prioritize efforts that drive the development of other parts of your WAN. 
            </p>
        </div>
    ',

    'intelligence-2-q5-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have a more passive stance to network optimization than many other WAN generalist and only respond when problems are reported. You need to adopt a more proactive and structural approach to ensure network performance and cost effectiveness keep up with growing demands. Explore network intelligence and analytics solutions that can help you understand and optimize network and application performance.
            </p>
        </div>
    ',
    'intelligence-2-q5-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have a reactive stance to network optimization. You are only triggered into action by device notifications. To catch up with other WAN generalist, you should pursue a more proactive and structural approach to ensure network performance and cost effectiveness keep up with growing demands. Explore network intelligence and analytics solutions that can help you understand and optimize network and application performance.
            </p>
        </div>
    ',
    'intelligence-2-q5-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You take structural measures to optimize your network. However, you could benefit from exploring a more proactive and forward-looking approach. Predictive analytics can help you pre-empt performance issues and improve optimization.
            </p>
        </div>
    ',
    'intelligence-2-q5-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                Your use of predictive analytics has brought you a long way when it comes to network optimization. This puts you among the more advanced WAN Generalists in this area. Your next step is to drive performance and efficiency further by automating your optimization task as much as possible.
            </p>
        </div>
    ',
    'intelligence-2-q5-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have an advanced approach to network optimization, which is automated leveraging predictive analytics. This puts you among the most advanced WAN generalists in this area. You should build on this position and drive your efforts to automate and orchestrate your WAN across different domains, which would help you move up the overall WAN maturity ladder.
            </p>
        </div>
    ',

    'intelligence-3-q5-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have a very passive stance to network optimization in comparison to other WAN Leaders and only respond when problems are reported. You need to adopt a more proactive and structural approach to ensure network performance and cost effectiveness keep up with growing demands. Explore network intelligence and analytics solutions that can help you understand and optimize network and application performance.
            </p>
        </div>
    ',
    'intelligence-3-q5-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have a reactive stance to network optimization, which is . You are only triggered into action by device notifications. To catch up with other WAN generalist, you should pursue a more proactive and structural approach to ensure network performance and cost effectiveness keep up with growing demands. Explore network intelligence and analytics solutions that can help you understand and optimize network and application performance.
            </p>
        </div>
    ',
    'intelligence-3-q5-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You take structural measures to optimize your network, but you are behind many other WAN Leaders. You should catch up and adopt a more proactive and forward-looking approach. Predictive analytics can help you pre-empt performance issues and improve optimization.
            </p>
        </div>
    ',
    'intelligence-3-q5-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                As many other WAN Leaders, you are already using predictive analytics. This has brought you a long way when it comes to network optimization.  Your next step is to drive performance and efficiency further by automating your optimization task as much as possible.
            </p>
        </div>
    ',
    'intelligence-3-q5-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                You have an advanced approach to network optimization, which is automated leveraging predictive analytics. This puts you among the most advanced WAN leaders in this area. To stay ahead, you should now direct your efforts to driving automation and orchestration  across different WAN domains.
            </p>
        </div>
    ',

    'intelligence-1-q6-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time, like many Followers, you still take a best effort approach to meeting application performance expectation. It is probably time for you to start looking at ways to separate traffic classes and prioritize traffic, in order to make sure your network meets the expectations from your end-users.
            </p>
        </div>
    ',
    'intelligence-1-q6-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time, like many Followers, you separate traffic classes by physically segmenting the network. There are probably more efficient ways to achieve a similar goal. You should look into solutions that leverage virtual segmentation or traffic prioritization to ensure application performance expectations are met.
            </p>
        </div>
    ',
    'intelligence-1-q6-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you separate traffic classes by virtually segmenting the network, which is good for a Follower.  You should investigate how traffic prioritization solutions may help you improve application performance further to meet expectations.
            </p>
        </div>
    ',
    'intelligence-1-q6-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you manually configure QoS to prioritize traffic. This certainly improves performance for key applications, and is quite advanced for a WAN Follower. SLAs for application performance and even user experience should be your next objective, and automatically adaptable networks can help you meet them.
            </p>
        </div>
    ',
    'intelligence-1-q6-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you are at the forefront when it comes to meeting application performance expectations. Performance and user experience SLAs are ensured by an automatically adaptable network. This is exceptionally advanced for your position as a WAN follower. While you could clearly benefit from  driving automation and orchestration across domains, it may be more beneficial to focus your efforts on advancing other WAN elements and raise your overall ranking
            </p>
        </div>
    ',

    'intelligence-2-q6-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you take a best effort approach to meeting application performance expectation. This puts you behind other WAN Generalists. It is probably time for you to start looking at ways to separate traffic classes and prioritize traffic, in order to make sure your network meets the expectations from your end-users.
            </p>
        </div>
    ',
    'intelligence-2-q6-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you separate traffic classes by physically segmenting the network. This puts you in the lower echelon of WAN Generalists. There are probably more efficient ways to achieve a similar goal. You should look into solutions that leverage virtual segmentation or traffic prioritization to ensure application performance expectations are met.
            </p>
        </div>
    ',
    'intelligence-2-q6-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you separate traffic classes by virtually segmenting the network, which puts you in line with your peers.  You should investigate how traffic prioritization solutions may help you improve application performance further to meet expectations.
            </p>
        </div>
    ',
    'intelligence-2-q6-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you manually configure QoS to prioritize traffic. This is more advanced than many other WAN Generalists and certainly improves performance for key applications. SLAs for application performance and even user experience should be your next objective, and automatically adaptable networks can help you meet them.
            </p>
        </div>
    ',
    'intelligence-2-q6-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you are at the forefront when it comes to meeting application performance expectations. Performance and user experience SLAs are ensured by an automatically adaptable network. This puts you ahead of most WAN generalists in terms of application performance management. You should build on this and look for ways to further drive automation and orchestration across domains that allow you to raise your overall WAN maturity level.
            </p>
        </div>
    ',

    'intelligence-3-q6-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you take a best effort approach to meeting application performance expectation, which is quite unusual for WAN Leaders. It is time for you to start looking at ways to separate traffic classes and prioritize traffic, in order to make sure your network meets the expectations from your end-users.
            </p>
        </div>
    ',
    'intelligence-3-q6-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you take a best effort approach to meeting application performance expectation, which is quite unusual for WAN Leaders. It is time for you to start looking at ways to separate traffic classes and prioritize traffic, in order to make sure your network meets the expectations from your end-users.
            </p>
        </div>
    ',
    'intelligence-3-q6-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you separate traffic classes by virtually segmenting the network, which puts you behind many of your peers.  As a WAN Leader you should investigate how traffic prioritization solutions may help you improve application performance further to meet expectations.
            </p>
        </div>
    ',
    'intelligence-3-q6-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you manually configure QoS to prioritize traffic in line with many other WAN Leaders. This certainly improves performance for key applications. SLAs for application performance and even user experience should be your next objective, and automatically adaptable networks can help you meet them.
            </p>
        </div>
    ',
    'intelligence-3-q6-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
                At the same time you are at the forefront when it comes to meeting application performance expectations. Performance and user experience SLAs are ensured by an automatically adaptable network, as can be expected from a WAN leader. You should continue to push the boundaries and look for ways to further drive automation and orchestration across domains that allow you to raise your overall WAN maturity level.
            </p>
        </div>
    ',

    'operationsintro' => '
        <h2 class="w-2/3 ml-auto text-ntt-blue mb-6">WAN OPERATIONS</h2>
        <div class="flex items-center">
            <div class="w-1/3"><img class="block mx-auto" src=":icon" alt="" style="width: 25mm;"></div>
            <p class="w-2/3 mb-2">
                As organizations progress in the digital era the business demands they place on their networks are typically accelerating. They want their networks to empower innovation, increase agility, improve efficiency and drive competitive differentiation, but these networks have often become too complex from an operational perspective to deliver this easily. Task like connecting new sites, provisioning new functions, updating policies or connecting partners or cloud providers can prove quite challenging and stand in the way of delivering the desired business outcome. 
            </p>
        </div>
    ',

    'operations-1-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is behind its peers when it comes to WAN operations, which is consistent with its overall ranking as a WAN Follower. 
            </p>
        </div>
    ',
    'operations-1-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is in line with its peers when it comes to WAN operations, which is more advanced than its overall ranking as a WAN Follower. 
            </p>
        </div>
    ',
    'operations-1-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is ahead of its peers when it comes to WAN operations, which is quite advanced compared to its overall ranking as a WAN Follower. 
            </p>
        </div>
    ',

    'operations-2-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is behind its peers when it comes to WAN operations, which means this area is less developed than its overall ranking as a WAN Generalist suggests.
            </p>
        </div>
    ',
    'operations-2-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is in line with its peers when it comes to WAN operations, which is consistent with its overall ranking as a WAN Generalist. 
            </p>
        </div>
    ',
    'operations-2-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is ahead of its peers when it comes to WAN operations, which is more advanced than its overall ranking as a WAN Generalist. 
            </p>
        </div>
    ',

    'operations-3-stage1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is behind its peers when it comes to WAN operations, which is behind its overall ranking as a WAN Leader. 
            </p>
        </div>
    ',
    'operations-3-stage2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is in line with its peers when it comes to WAN operations, which is behind its overall ranking as a WAN Leader. 
            </p>
        </div>
    ',
    'operations-3-stage3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2 text-ntt-blue mt-4 font-bold">
            Based on your responses, your organization is ahead of its peers when it comes to WAN operations, which is in line with its overall ranking as a WAN Leader. 
            </p>
        </div>
    ',

    'operations-1-q8-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN configuration is a manual process that you do if and when the need arises. This is likely an increasingly tedious and time-consuming part of your operational efforts, as it is for many WAN Followers. You need a more systematic way forward. Solutions that let you centralize and automate these tasks can come to your rescue. They will certainly help you take some complexity out of your operations, freeing up time and increasing agility in the process!
            </p>
        </div>
    ',
    'operations-1-q8-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN configuration is a manual process. This is likely an increasingly tedious and time-consuming part of your operational efforts, as it is for many WAN Followers. Automation of these tasks can come to your aid. This will certainly help you take some complexity out of your operations, freeing up time and increasing agility in the process!
            </p>
        </div>
    ',
    'operations-1-q8-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            While configuration is still mostly a manual process, you have already automated some tasks, which is more than most WAN Followers can say. You can further move ahead by speeding up your efforts to automate configuration processes. This will enable you to further reduce complexity, free up time and increase agility!
            </p>
        </div>
    ',
    'operations-1-q8-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN management is mostly automated, but there are still some manual tasks left. This puts you ahead of the pack of WAN Followers. To progress further you should explore how these remaining manual tasks can be automated and start thinking beyond that. Integrating automation with policies and intelligence will put you on the road toward self-optimizing network orchestration.
            </p>
        </div>
    ',
    'operations-1-q8-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            For a WAN Follower you have state-of-the-art WAN management! Self-optimizing network orchestration that integrated analytics, policies and automation has taken a lot of complexity out of your operations. You should now direct you’re your focus to bringing other parts of the WAN to a similar level of sophistication, in order to drive your overall WAN position upwards. 
            </p>
        </div>
    ',

    'operations-2-q8-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN configuration is a manual process that you do if and when the need arises. This is likely an increasingly tedious and time-consuming part of your operational efforts. You are lagging other WAN Generalists in this area and you need a more systematic way forward. Solutions that let you centralize and automate these tasks can come to your rescue. They will certainly help you take some complexity out of your operations, freeing up time and increasing agility in the process!
            </p>
        </div>
    ',
    'operations-2-q8-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN configuration is a manual process. This is likely an increasingly tedious and time-consuming part of your operational efforts. Follow the path that many other WAN generalists have already taken, and look into automation of these tasks. This will certainly help you take some complexity out of your operations, freeing up time and increasing agility in the process!
            </p>
        </div>
    ',
    'operations-2-q8-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Configuration is still mostly a manual process. Like many other WAN generalists you have automated some tasks, but are not nearly there. Speed up your efforts to automate configuration processes, so that you can further reduce complexity, free up time and increase agility!
            </p>
        </div>
    ',
    'operations-2-q8-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN management is mostly automated, but there are still some manual tasks left. This puts you at the forefront of the WAN Generalists in this space. To stay ahead, you should explore how these can tasks be automated and start thinking beyond that. Integrating automation with policies and intelligence will put you on the road toward self-optimizing network orchestration.
            </p>
        </div>
    ',
    'operations-2-q8-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Your WAN management is quite advanced compared to the typical WAN generalists. Self-optimizing network orchestration that integrated analytics, policies and automation has taken a lot of complexity out of your operations. This enables you to look beyond WAN management, and focus your efforts on other tasks, and the integration between them.
            </p>
        </div>
    ',

    'operations-3-q8-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN configuration is a manual process that you do if and when the need arises. This is likely an increasingly tedious and time-consuming part of your operational efforts. This contrasts sharply with your position as a WAN leader and this needs to be addressed! You need a more systematic way forward. Solutions that let you centralize and automate these tasks can come to your rescue. They will certainly help you take some complexity out of your operations, freeing up time and increasing agility in the process!
            </p>
        </div>
    ',
    'operations-3-q8-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            WAN configuration is still a manual process, and likely an increasingly tedious and time-consuming part of your operational efforts. This is an ill fit with your position as a WAN leader. Automation of these tasks can come to your aid. This will certainly help you take some complexity out of your operations, freeing up time and increasing agility in the process!
            </p>
        </div>
    ',
    'operations-3-q8-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Configuration is still mostly a manual process. You have automated some tasks, but are not nearly there. This puts you behind many other WAN leaders! Speed up your efforts to automate configuration processes, so that you can further reduce complexity, free up time and increase agility!
            </p>
        </div>
    ',
    'operations-3-q8-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Like many WAN leaders you have mostly automated your WAN management, but there are still some manual tasks left. To progress in this area you should explore how these remaining manual tasks can be automated and start thinking beyond that. Integrating automation with policies and intelligence will put you on the road toward self-optimizing network orchestration.
            </p>
        </div>
    ',
    'operations-3-q8-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Self-optimizing network orchestration that integrated analytics, policies and automation has taken a lot of complexity out of your operations. This puts you among the most advanced WAN Leaders in terms of WAN management and enables you to look beyond WAN management, and focus your efforts on other tasks, and the integration between them.
            </p>
        </div>
    ',

    'operations-1-q9-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. Like many WAN Followers you manage your WAN security policy on a device by device basis, which can be quite a strain on your resources. Doing this in a more centralized and automated manner will drive your efficiency and consistency, speed up update cycles and reduce risk.
            </p>
        </div>
    ',
    'operations-1-q9-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. Like many other WAN Followers you have centralized access policy and controls, but manual tasks can be quite a strain on your resources, while longer response times to threats can leave your WAN exposed. Doing this in a more automated and dynamic manner will drive your efficiency and consistency, speed up update cycles and reduce risk.
            </p>
        </div>
    ',
    'operations-1-q9-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. You dynamically enforce security policies across the network, which is certainly not bad for a WAN Follower. Nevertheless manual tasks can be quite a strain on your resources, while longer response times to threats can leave your WAN exposed. Solutions that combine analytics and automation to rapidly detect and contain threats will improve your efficiency and response times and reduce risk.
            </p>
        </div>
    ',
    'operations-1-q9-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. Your network rapidly detects and responds to contain threats, which is essential in protecting your organization\'s assets. This is quite an advanced approach for a WAN Follower. Solutions that combine predictive analytics and automation to automatically reconfigure policies could take your security to the next level.
            </p>
        </div>
    ',
    'operations-1-q9-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. You are way ahead of the majority of WAN Followers, with a security policy management that is state-of-the-art, and automatically reconfigures to prevent emerging threats with predictive analytics. Before investigating how security can be integrated more closely with the rest of your WAN management, you should focus on taking the rest of your WAN to a higher level.
            </p>
        </div>
    ',

    'operations-2-q9-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. You manage your WAN security policy on a device by device basis, which can be quite a strain on your resources. It also positions you well behind most other WAN generalists in this aspect. You should address this in a more centralized and automated manner, which allow you to drive efficiency and consistency, speed up update cycles and reduce risk.
            </p>
        </div>
    ',
    'operations-2-q9-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. You have centralized access policy and controls, but manual tasks can be quite a strain on your resources, while longer response times to threats can leave your WAN exposed. To catch up with the majority of WAN Generalist you will need to start doing this in a more automated and dynamic manner. This will drive your efficiency and consistency, speed up update cycles and reduce risk.
            </p>
        </div>
    ',
    'operations-2-q9-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. Like many WAN Generalists you dynamically enforce security policies across the network, but manual tasks can be quite a strain on your resources, while longer response times to threats can leave your WAN exposed. Solutions that combine analytics and automation to rapidly detect and contain threats will improve your efficiency and response times and reduce risk.
            </p>
        </div>
    ',
    'operations-2-q9-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. Your network rapidly detects and responds to contain threats, which is essential in protecting your organization\'s assets. This positions you among the more advanced WAN Generalists in this space. Solutions that combine predictive analytics and automation to automatically reconfigure policies could take your security to the next level.
            </p>
        </div>
    ',
    'operations-2-q9-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. Unlike most WAN Generalists your security policy management is state-of-the-art, as it automatically reconfigures to prevent emerging threats with predictive analytics. While there is scope to investigate how security can be integrated more closely with the rest of your WAN management, you may want to focus on improving other WAN elements with a weaker ranking first.
            </p>
        </div>
    ',

    'operations-3-q9-1' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. You are far behind other WAN Leaders in this aspect, as you still manage your WAN security policy on a device by device basis, which can be quite a strain on your resources.  You will need to take action now to bring this aspect more in line with your overall WAN raking. A more centralized and automated approach should allow you to drive efficiency and consistency, speed up update cycles and reduce risk.
            </p>
        </div>
    ',
    'operations-3-q9-2' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. You have centralized access policy and controls, but manual tasks can be quite a strain on your resources, while longer response times to threats can leave your WAN exposed. This positions you well behind other WAN Leaders. To  catch up with them you will need to start doing this in a more automated and dynamic manner. This will drive your efficiency and consistency, speed up update cycles and reduce risk.
            </p>
        </div>
    ',
    'operations-3-q9-3' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. You dynamically enforce security policies across the network, but manual tasks can be quite a strain on your resources, while longer response times to threats can leave your WAN exposed. To catch up with other WAN leaders you should consider solutions that combine analytics and automation to rapidly detect and contain threats will improve your efficiency and response times and reduce risk.
            </p>
        </div>
    ',
    'operations-3-q9-4' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. In line with many other WAN Leaders you have a network that rapidly detects and responds to contain threats, which is essential in protecting your organization\'s assets. Solutions that combine predictive analytics and automation to automatically reconfigure policies could take your security to the next level.
            </p>
        </div>
    ',
    'operations-3-q9-5' => '
        <div class="flex justify-end">
            <p class="w-2/3 mb-2">
            Security plays a critical role in WAN strategy and operations. It is seen as the #1 WAN challenge and the vast majority of companies indicate they are improving network security in response to accelerating requirements. This makes managing security an increasingly important part of WAN operations. Your security policy management, which automatically reconfigures to prevent emerging threats with predictive analytics, is state-of-the-art, as can be expected from a true WAN Leader. However, you should not be complacent, as you will need to continuously reassess what you do and investigate how security can be integrated more closely with the rest of your WAN management.
            </p>
        </div>
    ',

    'conclusionintro' => '
        <h2 class="w-2/3 ml-auto text-ntt-blue mb-6">CONCLUSION</h2>
        <div class="flex items-center">
            <div class="w-1/3"><img class="block mx-auto" src=":icon" alt="" style="width: 25mm;"></div>
            <p class="w-2/3 mb-2">
                Digital transformation, with cloud at its heart, is changing the networking paradigm and driving requirements to unprecedented heights. The WAN needs to change to cope with these requirements and enable organizations to reap the full benefits of digital transformation. Organizations will need networks that provide more flexibility, manageability, scalability, cost effectiveness and security. 
            </p>
        </div>
    ',

    'guidance' => '
        <h2 class="w-2/3 ml-auto text-ntt-blue mb-6">Essential Guidance</h2>
        <div class="flex justify-end">
            <div class="w-2/3 flex mb-2">
                <div class="rounded-full w-8 h-8 border border-grey-dark font-bold text-grey text-lg text-center mr-2 pt-1">1</div>
                <p class="flex-1">
                    You should focus on further developing a strategic roadmap for the evolution of your WAN. Assess the current status of your network, and where you want it to be in the future. Prepare a gradual migration path that leverages the existing infrastructure where possible. Hybrid architectures, cloud connectivity, local Internet break-outs and network virtualization should feature prominently on this roadmap.
                </p>
            </div>
                
        </div>
        <div class="flex justify-end">
            <div class="w-2/3 flex mb-2">
                <div class="rounded-full w-8 h-8 border border-grey-dark font-bold text-grey text-lg text-center mr-2 pt-1">2</div>
                <p class="flex-1">
                    From an operational perspective the WAN is increasingly hampered by complexity, inefficiency and tedious processes which can make everyday tasks such as adding sites, updating policies or connecting to cloud services a real struggle. This prevents the network from delivering the desired business outcomes, like gaining agility, increasing productivity, and improving differentiation. Explore how centralization and automation can help you streamline your WAN operations.
                </p>
            </div>
                
        </div>
    ',
    'guidance-q3-1-2' => '
        <div class="flex justify-end">
            <div class="w-2/3 flex mb-2">
                <div class="rounded-full w-8 h-8 border border-grey-dark font-bold text-grey text-lg text-center mr-2 pt-1">3</div>
                <p class="flex-1">
                    SD-WAN has emerged as a solution that can integrate much of the above. The promise of SD-WAN is to deliver improved network and application performance, availability and visibility, particularly in a cloud environment, driving flexibility, while providing cost effective bandwidth and reducing complexity. Start exploring today, if you haven\'t already, what benefits SD-WAN may or may not bring to your organization. 
                </p>
            </div>
                
        </div>
    ',
    'guidance-q3-3-4' => '
        <div class="flex justify-end">
            <div class="w-2/3 flex mb-2">
                <div class="rounded-full w-8 h-8 border border-grey-dark font-bold text-grey text-lg text-center mr-2 pt-1">3</div>
                <p class="flex-1">
                    SD-WAN has emerged as a solution that can integrate much of the above. The promise of SD-WAN is to deliver improved network and application performance, availability and visibility, particularly in a cloud environment, driving flexibility, while providing cost effective bandwidth and reducing complexity. Build on your early deployments of SD-WAN, and start plotting a roadmap toward a more widespread use of network virtualization that can help you reap the benefits in terms of flexibility and efficiency
                </p>
            </div>
                
        </div>
    ',
    'guidance-q3-5' => '
        <div class="flex justify-end">
            <div class="w-2/3 flex mb-2">
                <div class="rounded-full w-8 h-8 border border-grey-dark font-bold text-grey text-lg text-center mr-2 pt-1">3</div>
                <p class="flex-1">
                    SD-WAN has emerged as a solution that can integrate much of the above. The promise of SD-WAN is to deliver improved network and application performance, availability and visibility, particularly in a cloud environment, driving flexibility, while providing cost effective bandwidth and reducing complexity.Looking ahead, SD-WAN should go hand in hand with virtual network services . Explore how you can leverage SD-WAN as the launching pad of a more widespread use of network virtualization that can help you reap the benefits in terms of flexibility and efficiency
                </p>
            </div>
                
        </div>
    ',
);