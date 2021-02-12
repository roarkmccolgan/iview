<?php

//Trend
return [
    'elqFormName'=>'',
    'developedby'=>'Developed by',
    'sponsoredby'=>'Sponsored by',
    'restart'=>'Restart Assessment',
    'assoc'=>'In association with',
    'sponsors'=>'Trend Micro',

    'change-langauge'=>'Change language',
    'download-now'=>'Download Now',

    'title'=>'IDC Partner Assessment Tool',
    'sub-title'=>'What you need to be a profitable and growing MSP',
    'landing'=>'
        <p class="mb-2">
            There are massive opportunities for partners in the managed security services space.
        </p>
        <p class="mb-2">
            This IDC Partner Assessment tool will help you discover how well your business is placed to take advantage of this. 
        </p>
        <p class="mb-4">
            Simply answer some quick-fire questions on how you currently approach sales, marketing, services and security, to receive a personalized assessment and set of key recommendations on taking your business to the next level.
        </p>',
    'startbut'=>'Let\'s Go!',

    'send'=>'We can send you the full results directly to your mailbox',
    'register'=>'Register now to receive your personalized report',
    'provide'=>'Provide us with a few details and we\'ll send you a link to download it.',
    'byreg'=>'By registering with IDC, you accept our <a href="https://msp.idcready.net/privacy" target="_blank">Privacy Policy</a> and the Trend Micro <a href="https://www.trendmicro.com/en_us/about/legal/privacy-policy-web.html" target="_blank">Privacy Policy</a>.',
    'wait'=>'While you\'re waiting why not tweet your results and see how your colleagues measure up?',
    'twitterlink'=>'https://twitter.com/home?status=Is%20your%20business%20GDPR%20ready?%20http%3A//bit.ly/2AwihN4%20%23Symantec',
    'facebooklink'=>'https://www.facebook.com/sharer/sharer.php?u=http%3A//bit.ly/2AwihN4',
    'linkedinlink'=>'https://www.linkedin.com/shareArticle?mini=true&url=http%3A//bit.ly/2AwihN4&title=Symantec%20and%20IDC%20GDPR%20Assessment&summary=Is%20your%20business%20GDPR%20ready?&source=',

    'stage1' => 'Stage 1',
    'stage2' => 'Stage 2',
    'stage3' => 'Stage 3',
    'stage4' => 'Stage 4',
    'stage5' => 'Stage 5',

    'complete' => 'Complete!',
    'finishtxt' => '
        <h2 class="font-light leading-tight mb-4">Thank you for completing the IDC Managed Security Services Readiness Assessment</h2>
        <p class="mb-4">Based on your input, your aggregate score means that you are at <strong class="text-blue">:stage</strong> in terms of your overall MSS readiness.</p>
        <p class="mb-4 mt-4">Please tell us a little about yourself and immediately receive your personalized report</p>
        <img src=":url/images/tools/9/report.png" alt="" />
    ',
    'complete_thankyou' => 'Thank you :Fname,',
    'complete_body' => '
        Your custom report will arrive in your inbox soon.<br/>
        Please check in your junk folder if you don\'t receive it within 5 minutes.<br/><br/>
        <a class="text-trend-red" target="_blank" href="http://trendmicro.com">
            Click here for more information
        </a>',
    'complete_tweet' => 'I\'ve just taken the @IDCEMEA GDPR Assessment Tool for @ntt. Interested? ', // http://bit.ly/2gslXEh
    'email'=>[
        'subject' => 'Trend Micro MSP Readiness Tool by IDC',
        'hi' => 'Hi :Fname',
        'body' => 'As promised, here\'s a link to download your Trend Micro MSP Readiness Report. This breaks down your results by category and provides you with actionable recommendations.',
        'link' => 'Download PDF Report',
        'link_inline' => 'View Report in your browser',
        'extra' => 'Once you\'ve read the report why not visit Trend Micro <a href="https://www.trendmicro.com/en_gb/partners/managed-service-provider.html" style="color:#054683">Managed Service Providers</a>',
        'regards' => 'Regards',
        'team' => 'The IDC Team',
    ],
    'leadgen'=>[
        'fname'=>'First Name',
        'sname'=>'Last Name',
        'email'=>'Email Address',
        'company'=>'Company Name',
        'employees'=>'Number of employees',
        'turnover'=>'Turnover',
        'industry'=>'Industry',
        'country'=>'Country',
        'phone'=>'Phone Number',
        'title'=>'Job Title',
        'send'=>'Send',
        'location'=>'Where are you based',
        'locations'=>'How many locations do you have',
        'company_type'=>'Describe your company',
        'partner'=>'Are you a Trend Micro partner',
        'sell'=>'Do you sell these solutions',
        'pleaseselect'=>'Please select',
        'errorFname'=>'Enter your name',
        'errorSname'=>'Enter your surname',
        'errorEmail'=>'Enter a valid email address',
        'errorCompany'=>'Enter your company name',
        'errorLocation'=>'Please select an option.',
        'errorLocations'=>'Please select an option.',
        'errorCompanyType'=>'Please select an option.',
        'errorPartner'=>'Please select an option.',
        'errorSell'=>'Please select an option.',
        'errorTitle'=>'Enter your title',
        'errorPhone'=>'Enter your phone number',
        'errorCountry'=>'Please select your country',
        'errorNumber'=>'Please enter a valid phone number',
        'errorAccept'=>'Please accept the Terms &amp; Conditions',
    ],
    'introduction1' => '
        <h2 class="text-blue-dark mb-6">INTRODUCTION</h2>
        <p class="mb-2">Thank you for taking part in IDC\'s managed security services (MSS) readiness assessment.</p>

        <p class="mb-2">The purpose of this assessment tool is to help managed security services providers (MSPs) build a profitable and sustainable MSS business, maximizing the opportunities this fast-growing market segment presents to these companies.</p>

        <p class="mb-2">IDC, a leading global market intelligence and advisory firm, has leveraged substantial research and experience from leading managed security services providers (MSPs) to build a set of recommendations tailored to specific stages and elements within a managed security services business. These recommendations are contained in this report.</p>
        <p>
            Based on your input, your aggregate score means that you are at :result in terms of your overall MSS readiness.
        </p>
    ',
    'introduction2' => '
        <img src=":url/images/tools/9/stages.png" class="w-full sm:w-3/4 mx-auto" alt="">
    ',
    'introduction3' => '
        <p class="text-blue-dark font-bold mb-2">Stage 1</p>
        <p class="mb-1">
            Companies at this stage are at the very beginning of their journey to becoming an MSP. They may be new to managed services, to selling in a subscription model and/or new to the security market.
        </p>
        <p class="mb-1">
            This is a high-growth market, which is compounded by a severe skills shortage, and presents a massive opportunity for IT solution providers. Now is a good time to reach out to relevant vendor partners (such as Trend Micro) to understand what programmes they have in place to accelerate your entry into the MSS market. 
        </p>
    ',
    'introduction4' => '
        <p class="text-blue-dark font-bold mb-2">Stage 2</p>
        <p class="mb-1">
            With some experience in operating managed services and/or security solutions, companies at this stage are beginning to realise the opportunities and may well be starting to incorporate recurring/subscription-based revenue into their business.
        </p>
        <p class="mb-1">
            To build on the foundation which has been laid already, it is important that companies at Stage 2 are proactively building business plans relating to sales, marketing and services transformations to support the MSS model.
        </p>
    ',
    'introduction5' => '
        <p class="text-blue-dark font-bold mb-2">Stage 3</p>
        <p class="mb-1">
            Companies at this stage are invested in their MSS business, and the emphasis should now be on improving efficiencies and driving profitability. At this stage, companies are starting to transform sales, marketing and services for MSS.
        </p>
        <p class="mb-1">
            Companies at this stage will need to address the challenge of how to accelerate transformation while still maintaining existing business. 
        </p>
    ',
    'introduction6' => '
        <p class="text-blue-dark font-bold mb-2">Stage 4</p>
        <p class="mb-1">
            Companies at Stage 4 have an embedded MSS business. Significant efforts have been made to transform the sales, marketing and services organisations within the company, with increasing automation, repeatability and growing profitability.
        </p>
        <p class="mb-1">
            Now, the priority for these companies is to enhance and expand their MSS portfolio, innovate and differentiate to establish market leadership. 
        </p>
    ',
    'introduction7' => '
        <p class="text-blue-dark font-bold mb-2">Stage 5</p>
        <p class="mb-1">
            Companies at Stage 5 are considered mature (and market-leading) MSPs, with all business units optimised to support this model.
        </p>
        <p class="mb-1">
            The emphasis at this stage is on retaining market leadership through a continuous innovation process and focus on profitability. 
        </p>
    ',
    'introduction8' => '
        <img src=":url/images/tools/9/trend.png" class="w-full mx-auto" alt="">
    ',
    'overallstage1'=>'
        <h2 class="leading-tight text-blue-dark mb-2">YOUR OVERALL PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">:stage</span>
        <p class="mb-2">Companies at this stage are at the very beginning of their journey to becoming an MSP. They may be new to managed services, to selling in a subscription model, and/or new to the security market.</p>
        <p class="mb-2">This is a high growth market, which is compounded by severe skills shortage, and presents a massive opportunity for IT solution providers. Now is a good time to reach out to relevant vendor partners (like Trend Micro) to understand what programs they have in place to accelerate your entry into the MSS market.</p>
    ',
    'overallstage2'=>'
        <h2 class="leading-tight text-blue-dark mb-1">YOUR OVERALL PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 2</span>
        <p class="mb-2">With some experience in operating managed services and/or security solutions, companies at this stage are beginning to realize the opportunities and may well be starting to incorporate recurring/subscription-based revenue into their business.</p>
        <p class="mb-2">To build on the foundation which has been laid already, it is important that companies at Stage 2 are proactively building business plans relating to sales, marketing, and services transformations to support the MSS model.</p>
    ',
    'overallstage3'=>'
        <h2 class="leading-tight text-blue-dark mb-1">YOUR OVERALL PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 3</span>
        <p class="mb-2">Companies at this stage are invested in their MSS business, and the emphasis should now be on improving efficiencies and driving profitability. At this stage, companies are starting to transform sales, marketing, and services for MSS.</p>
        <p class="mb-2">Companies at this stage will need to address the challenge of how to accelerate transformation while maintaining the existing business.</p>
    ',
    'overallstage4'=>'
        <h2 class="leading-tight text-blue-dark mb-1">YOUR OVERALL PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 4</span>
        <p class="mb-2">Companies at Stage 4 have an embedded MSS business. Significant efforts have been made to transform the sales, marketing, and services organizations within the company, with increasing automation, repeatability, and growing profitability.</p>
        <p class="mb-2">Now, the priority for these companies is to enhance and expand their MSS portfolio, innovate, and differentiate to establish market leadership.</p>
    ',
    'overallstage5'=>'
        <h2 class="leading-tight text-blue-dark mb-1">YOUR OVERALL PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 5</span>
        <p class="mb-2">Companies at Stage 5 are considered mature (and market-leading) MSPs, with all business units optimized to support this model. The emphasis at this stage is on retaining market leadership through a continuous innovation process and focus on profitability.</p>
    ',
    'salesstage1'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SALES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 1</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 1 in terms of your sales readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    A horizontal sales structure, with limited specialization either in terms of industry (sector) and/or technology (e.g., security). Also tend to be product, not services, focused.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Very few organizations at this stage have dedicated sales professionals for either managed services or security.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Typically, there are no pre-sales staff dedicated to supporting the sales team in selling managed security services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Compensation structures and incentive schemes have not been adjusted to account for recurring/subscription-based revenue models.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    There has been little attention paid to service-attach bundles (e.g., bundling a managed endpoint security service with a cloud-based productivity suite like Office 365).
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Very few companies at this stage can provide unified cloud and managed services billing to their customers (e.g., providing one bill for both product and managed services); many rely on their vendors and/or distributors to provide this billing capability.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Embrace the opportunity to lay the right kind of foundation for an effective sales strategy and organization for MSS.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Start early in enabling your sales and pre-sales people to more confidently sell services (i.e., transition them from product sales to services sales). Start with a small group (a tiger team), train them well, and use them to help influence the broader sales team (e.g., a train-the-trainer approach).
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Identify which of your vendor partners can help you train and enable this team and ask them to help and support you.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Think about how your compensation and incentive models need to evolve as you bring recurring and subscription-based managed services to your business. Ensure that they are still lucrative for sales people who are more used to bigger upfront product and project deals.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Think about how you bill your customers; as your managed services business grows, so will features like unified billing become more important.
                </div>
            </div>
        </div>
    ',
    'salesstage2'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SALES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 2</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 2 in terms of your sales readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Sales teams are structured so staff have some experience selling recurring-revenue-based services, such as cloud services or managed services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    A pre-sales function around managed security services is beginning to build up, offering support to the sales team as they address this opportunity.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Compensation and incentive structures are beginning to transform, offering sales teams upfront compensation on any recurring business they win.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Sales teams can own customer billing around managed security services, but they do so on an annual basis.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Bolster the initial foundations by looking to convert existing project-based business toward recurring managed services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Take a selected team of pre-sales staff and focus them purely on managed security services, so that they build up expertise in this area.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Plan, in tandem, the transformation of compensation structures. One of the biggest challenges facing new managed services and cloud services providers is overcoming the sales person\'s perception that smaller, more frequent recurring revenue will make it more challenging to meet quotas. Think very carefully about how you incentivize for these services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Look at ways to bring consumption-based billing to their managed security services, as more and more customers are looking for this kind of functionality.
                </div>
            </div>
        </div>
    ',
    'salesstage3'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SALES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 3</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 3 in terms of your sales readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Typically, companies at this stage are generally transitioning, meaning they are looking to convert to a managed services model.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Appetite for change is strong among companies at this stage, and actions are being carried out to make this happen.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage tend to have dedicated some specific pre-sales resource to managed security services, to support their sales teams in making the move to this model.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage have transformed their incentive plans to ensure the managed services opportunity is seen as lucrative. Various tactics can be deployed, and common tactics include upfront recognition, annualized recognition, quota relief, and additional incentives.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Look outside the existing customer base to try and win new MSP deals with new customers, rather than focusing only on transitioning the existing base.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Bolster the pre-sales teams and ensure they have a focus on growing the MSS business, leveraging them to better support the sales teams in their efforts.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Incentivize cleverly — whether it be new logos, transitioned accounts, or attractive compensation plans.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Measure sales teams differently — start to think about incentivizing new KPIs like customer satisfaction and active usage. This ensures that customers are happy and therefore will be more likely to renew.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Think about services-attach, such as bundling a cloud-productivity suite with a managed endpoint security service. This makes life easier for the sales person as well as the customer.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Think about incorporating analytics features into your billing, e.g., real-time usage dashboards. This enables sales to understand what their customers are using to serve them better and understand their needs.
                </div>
            </div>
        </div>
    ',
    'salesstage4'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SALES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 4</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 4 in terms of your sales readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage tend to have a high number of pre-sales staff dedicated to supporting sales staff pursuing MSP security opportunities.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Compensation plans for companies at this stage tend to have transitioned to offer sales staff a mix of upfront and ongoing commission, with incentives in place to encourage sales of managed services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Sales teams at companies at this stage pay close attention to customer usage and satisfaction, enabling them to reduce churn and therefore boost profitability.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    The emphasis is typically less on transitioning and more on winning new clients for the MSP security business. 
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Sophisticated billing platforms are offered to customers, often with consumption-based billing mechanisms.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Build on the strong foundation you have developed to maximize opportunities and boost profitability.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Ensure your pre-sales teams are enabled and empowered to develop opportunities and work closely with their vendor partners.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Emphasize solution selling, i.e., tailoring managed services and solutions solutions to customer segments and needs.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Ensure your sales teams are focused on customer satisfaction, renewals, and customer success; consider creating a "customer for life" sales structure.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Focus on services-attach and creating complementary bundles to make it easier for sales people to make the connections, to cross-sell and up-sell.
                </div>
            </div>
        </div>
    ',
    'salesstage5'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SALES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 5</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 5 in terms of your sales readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage are looking to tailor their MSP offerings to vertical markets, offering specific solutions to customers by industry, focus, or size.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Pre-sales teams take opportunities to vendors, working alongside the sales teams to surface business.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this developed stage, companies focus their sales teams on customer satisfaction, renewals, and customer success.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at Stage 5 are experienced in selling services-attach, creating solutions and bundled offerings.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Stage 5 companies typically offer flexible and sophisticated billing, with features such as unified billing, real-time analytics, multivendor billing, and consumption-based billing.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Look to deepen specializations and use-case-driven solutions and ensure these are reflected in the go-to-market activities.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Ensure cross-sell, up-sell, and services-attach are incentivized and encouraged.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Invest in consultative selling frameworks, tools, and resources.
                </div>
            </div>
        </div>
    ',
    'marketingstage1'=>'
        <h2 class="leading-tight text-blue-dark mb-2">MARKETING PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 1</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 1 in terms of your marketing readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    They tend to have a traditional approach to marketing, based on vendor direction and/or past successes.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, very few companies have a formal marketing function, with the role partly taken on by other teams.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage typically do not target marketing campaigns at customer types, verticals, or by technology. Instead they employ wide-spanning campaigns.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    For companies at this stage, marketing campaigns are not actively or closely measured for success.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Embrace modern marketing, both in terms of what you create and which channels you choose to promote it.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Leverage vendor marketing initiatives but, crucially, look for ways to personalize this to your brand and customer base.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Plan for a dedicated marketing function, pinpointing individuals or teams that have showed early interest or promise in this space.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Pilot managed security services campaigns trialed to target specific customer types, and then measured closely for their effectiveness, providing a strong foundation on which to build further.
                </div>
            </div>
        </div>
    ',
    'marketingstage2'=>'
        <h2 class="leading-tight text-blue-dark mb-2">MARKETING PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 2</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 2 in terms of your marketing readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage are building on past successes by trialing digital marketing techniques, leveraging social media as a starting point.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, companies are beginning to identify individuals or teams that can create a dedicated marketing function.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage typically begin to target certain customer types with pilot or trial campaigns.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Close measurement of trial campaigns is carried out by companies at this stage, as they look to better leverage their marketing efforts.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Capitalize on the marketing investments you have already made, by focusing on supporting the sales cycle throughout.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Closely analyze trial/pilot digital campaigns and run again as part of a continuous improvement cycle.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Create and appropriately resource a dedicated marketing team that is focused on delivering the value proposition message for managed security services and the business benefits they deliver to customers.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Begin targeting specific buyers with a view to becoming more vertically specialized in the future.
                </div>
            </div>
        </div>
    ',
    'marketingstage3'=>'
        <h2 class="leading-tight text-blue-dark mb-2">MARKETING PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 3</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 3 in terms of your marketing readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage actively use digital marketing techniques to spread their content and messaging.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    These modern marketing techniques are deployed by a dedicated marketing team which itself is goaled and targeted on its marketing reach.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, companies typically send out highly targeted messages to specific customers, by type, vertical, technology, and other metrics.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Digital campaigns of this type run by companies at this stage tend to be closely measured to determine future marketing actions.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Align dedicated marketing teams with sales, so that together they can track the customer journey.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Bolster the highly targeted messages spread by this team with a strong focus on the value proposition the company offers.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    The combined marketing and sales function should begin developing messaging around business outcomes, through a highly aligned approach.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Encourage marketing teams to consider buyer personas, and how they can best be targeted. Consideration should be given to investing in, or developing, marketing measurement tools that can measure key metrics.
                </div>
            </div>
        </div>
    ',
    'marketingstage4'=>'
        <h2 class="leading-tight text-blue-dark mb-2">MARKETING PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 4</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 4 in terms of your marketing readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at Stage 4 typically combine their dedicated marketing function with sales teams, to better follow the customer journey and serve them targeted and specific content that is relevant to them. They jointly target customers based on business outcomes.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, companies measure the marketing process and use this to refine future campaigns.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage have specific buying personas in mind within industry sectors, and target these accordingly.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Continue to focus messaging and collateral on specific target buyers and industries but target them with information about business outcomes and value.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    The dedicated marketing team should have a continuous improvement mindset and be looking to analyze and measure the success of modern marketing campaigns on an ongoing basis.
                </div>
            </div>
        </div>
    ',
    'marketingstage5'=>'
<h2 class="leading-tight text-blue-dark mb-2">MARKETING PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 5</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 5 in terms of your marketing readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage employ advanced digital marketing skills across their dedicated and sophisticated marketing function.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Stage 5 companies tend to have developed a fully automated marketing process, which continues to evolve based on ongoing results and successes.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, companies\' marketing efforts are highly targeted at a defined set of verticals and business buyer personas across a portfolio of solutions that addresses business outcomes.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Expand areas of specialization, targeting a wider selection of vertical markets to target with highly focused marketing efforts.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Employ the sophisticated measurement and targeting techniques to specific customer verticals.
                </div>
            </div>
        </div>
    ',
    'servicesstage1'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SERVICES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 1</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 1 in terms of your services readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Offer a basic services catalog/portfolio of support, implementation, and monitoring services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    In general, services are ad hoc and reactive and customized to each customer\'s needs, and there is little repeatability or automation.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Do not typically have a dedicated service desk to provide first-line support for any managed services they resell.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Only in technical certifications and industry standards in an ad hoc (reactive) manner, i.e., based on what specific customers and/or vendors demand.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Invest in a more sophisticated services catalog and identify portfolio gaps.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    After doing a gap assessment, identify which services have both high demand and a high degree of commonality between customers with the objective of packaging these as managed services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Invest in a service desk to offer first-line support for managed services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Start certifying and incorporating industry minimum standards (e.g., PCI-DSS).
                </div>
            </div>
        </div>
    ',
    'servicesstage2'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SERVICES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 2</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 2 in terms of your services readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Typically investing in a more comprehensive services catalog, including expanding professional services, reselling some managed services, and in the early stages of building their own managed services offerings.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    The service desk is equipped to offer basic support on the managed services according to customer demand. These services are typically ad hoc, reactive, and highly customized, and there is little repeatability or automation.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Technicians comply to the minimum technical certifications required from key vendors, and industry minimum standards (e.g., PCI-DSS) are in place.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Accelerate the repeatability of these services by investing in tools for services implementation, automation, and management which are embedded in the service catalog.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Differentiate through offering first-line support for managed services via a dedicated service desk.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Move up the value chain by investing in industry and quality standards (such as ISO), building a governance program and technical certification program that encourages technicians to upcertify and even start to specialize.
                </div>
            </div>
        </div>
    ',
    'servicesstage3'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SERVICES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 3</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 3 in terms of your services readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Offer a comprehensive service catalog of advanced professional services, own (packaged) managed services, and managed services for resell.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Have started to invest in repeatability, automation, and management tools.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Have a fully staffed service desk with dedicated MSP professionals offering first-line support for all (or most) of the managed services through standard helpdesk services.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Adhere to industry standards, have governance processes in place, and are proactively investing in more advanced technical certifications.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Start to incorporate more advanced services functions and features like predictive fault management and 24 x 7 global support offered through multiple channels (email, call, chat).
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Start to incorporate more advanced features such as self-provisioning and even reporting in to your service catalog.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Start to comply to industry-specific regulations and governance programs.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Differentiate through horizontal (e.g., deep security, cybersecurity, artificial intelligence) and vertical (e.g., financial services, government, healthcare) specialist certifications and reference architectures.
                </div>
            </div>
        </div>
    ',
    'servicesstage4'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SERVICES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 4</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 4 in terms of your services readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    An extensive services portfolio of both professional and managed services that incorporates advanced features like predictive and automated fault management, 24 x 7 service desk, and self-provisioning (via a highly automated service catalog).
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Can offer multichannel 24 x 7 global support for all services and SLAs (service level agreements).
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Have a mature and embedded governance program, highly certified and specialized technicians, and are first movers in terms of adopting new industry, quality, and regulatory certifications. 
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Embed your managed services (as a services-attach) into all lines of business (including professional services).
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Invest in flexible consumption models, supporting advanced features and new routes to market (e.g., marketplaces).
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Enhance the services value proposition with sophisticated analytics, security by-design, and omni-channel 24 x 7 support, and extend this to all managed services in the portfolio.
                </div>
            </div>
        </div>
    ',
    'servicesstage5'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SERVICES PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 5</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 5 in terms of your MSP services readiness. Typically, organizations at this stage of their strategy maturity share the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Highly automated and embedded in a continuous improvement process within the services portfolio and are documented and regularly reviewed.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Security by design is embedded internally and aligned with customer processes and operations.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Regulatory and quality standard certifications are in place and can offer pre-emptive support with analytics, evidence, and recommendations.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Have deployed a continuous improvement process, creating a library of case studies, best practices, reusable tools, and reference architectures.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Deepen relationships with customers, aligning your organization with their changing requirements.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Continue to automate your processes (ensuring that this does not detract from personal services where required), and measure and respond to fluctuations in customer satisfaction.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Focus on driving profitability across all service functions.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Continue to work closely with your vendor partners as a launch partner for innovations and new opportunities, including them in the continuous service improvement loop.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Stay ahead of the competition by continuously investing in best-in-class certification standards and deep vertical expertise.
                </div>
            </div>
        </div>
    ',
    'securitystage1'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SECURITY PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 1</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 1 in terms of your security readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, companies have yet to embrace the high-growth security opportunity that exists in the market, and are only starting to bring security into their business.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this early stage, companies are yet to have honed any specific security skills and typically lack security certifications.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Consider how to position the company to meet customers\' and prospects\' needs in the high-growth MSP area.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Consider hiring staff with security credentials to gain some expertise in this space.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Build a sales teams with experience winning security business.
                </div>
            </div>
        </div>
    ',
    'securitystage2'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SECURITY PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 2</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 2 in terms of your security readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage tend to have built up their security offering over a period of about 18 months.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, companies recognize the opportunity the security market presents to them and their customers, and are targeting it as a result.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Typically, companies have some experience and competencies in selling security, but have not yet developed these skills from a technical point of view.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this level may have some basic security certifications.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Position security as a source of added value to customers and consider it an "armor-piercing bullet" for their business.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Consider building up technical expertise by assessing the skills profile and certifications needed to reach the customers they want to.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    An assessment of the certifications available should be undertaken by companies at this level to assess gaps in the company\'s portfolio.
                </div>
            </div>
        </div>
    ',
    'securitystage3'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SECURITY PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 3</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 3 in terms of your security readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage tend to have built up their security offering over a period of between 18 and 36 months.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Typically, there is strong recognition among companies at this stage of the wider growth opportunity that security offers to their business.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this level, many companies tend to have developed lower-value security-specific technical skills and can offer things like first-line support.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Consider your organization\'s existing/potential differentiators in security and leverage them to accelerate growth as a security provider.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Consider how the addition of higher-value capabilities such as specialist security consulting and integration skills can enhance the value of your security proposition.
                </div>
            </div>
        </div>
    ',
    'securitystage4'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SECURITY PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 4</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 4 in terms of your security readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage tend to have built up their security offering over a period of between three to five years.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Typically, companies at this level view security as strategic to the future of their portfolio, having recognized the opportunity it presents.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    At this stage, companies complement their lower-value security technical skills (e.g., first-line support) with some higher-value offerings, such as technical consulting and security-specific technical skills.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Focus sales teams around the outcomes security can bring to customers. This could mean maximizing workforce utilization through secure collaboration, to speed up time to market through secure cloud migration. This is essential to developing a stronger recurring security business.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Consider expanding security offering so it is an end-to-end proposition.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Invest in developing higher-value security certifications.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Ensure you have strong messaging around your position on GDPR and other regulations; this is essential for companies at this level.
                </div>
            </div>
        </div>
    ',
    'securitystage5'=>'
        <h2 class="leading-tight text-blue-dark mb-2">SECURITY PERFORMANCE</h2>
        <span class="block mb-2 font-bold text-grey-dark text-lg">Stage 5</span>
        <p class="mb-2 text-grey-dark font-bold">Based on IDC\'s assessment, your organization is at Stage 5 in terms of your security readiness as an MSP. Typically, organizations at this stage share some, or all, of the following characteristics:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage tend to have built up their security offering over a period of more than five years.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    A key attribute of companies at this stage is that security is a central feature of their business. They typically address security as a business issue for their clients, not a technical one. This means they understand the outcomes security can offer their business.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    A full range of security skills and dedicated teams are offered typically by companies at this level. This includes advanced security architects, pre-sales architects, technical consultants, and first-line support analysts.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Companies at this stage have in-house GDPR (and other regulatory) experts and understand multicloud compliance issues.
                </div>
            </div>
        </div>
        <p class="mt-2 text-lg text-blue-dark font-bold">Recommendations</p>
        <p class="mb-2 text-grey-dark">Now is the time to:</p>
        <div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Expand on this success by entering new geographies and new partnerships, and through industry-specific propositions and new portfolio offerings. For example, companies using a security operations center (SOC) to protect their own environment ought to consider extending this expertise to support third parties, adding a new revenue stream to their security offering.
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Consider how to evolve beyond device management and log monitoring and into more advanced areas such as predictive threat analytics and even SOC management. By freeing customers\' in-house security professionals from lower-value, repeatable tasks they can focus on higher-value activities such as incident response. 
                </div>
            </div>
            <div class="mb-1 clearfix">
                <div class="w-2 mr-2 float-left"><img class="w-full" src=":url/images/tools/9/bulletgrey.png" alt=""></div>
                <div class="w-5/6 float-left">
                    Maintain a base of high-level accreditations to build strong trust among the customer base.
                </div>
            </div>
        </div>
    ',
];
