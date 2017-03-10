@extends('_layouts.privacy')

@section('pagetitle', 'Cookies Policy')


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<h1>IDC Privacy Policy</h1>
<h3>Information about our Use of Cookies</h3>
<p>
Our website (<a href="{{ url('/') }}" target="_blank">{{ url('/') }}</a>) uses cookies to distinguish you from other users of our website. This helps us to provide you with a good experience when you browse our website and also allows us to improve our site. By continuing to browse the site, you are agreeing to our use of cookies.
</p>
<p>
A cookie is a small file of letters and numbers that we store on your browser or the hard drive of your computer if you agree. Cookies contain information that is transferred to your computer's hard drive.
</p>
<p>
The cookie itself does not contain any person information, except when such information has been supplied by a subscriber or registered user. In addition, cookies may be placed in the browser files of a user's computer by a third party advertiser, and may be used by the advertiser to collect web viewing data to serve further online interest-based advertising, also known as online behavioral advertising.
</p>
<p>
Other cookies without person information may be used to enable us to manage the banner advertisements that may be presented or personalized information to the user. For example, pixel tags may be provided by our ad-serving company to help manage online advertising. These clear GIFS let our ad-serving company recognize a browser's cookie when a user visits our website.
</p>
<p>
The aggregated information we collect is used for a number of purposes including the following :
	<ol>
    	<li>to improve the content and design of our website</li>
        <li>to enable our audit bureau to verify our claims of traffic to the website</li>
        <li>to help advertisers, potential advertisers or marketers assess the suitability of the site for their ad campaigns</li>
        <li>to understand more about the interests of our customers and to offer goods and services we believe may be of interest to our customers, on behalf of our affiliated group entities, or select organisations.</li>
    </ol>
</p>
<h3>We use the following cookies: </h3>
<p>
<strong>Strictly necessary cookies.</strong> These are cookies that are required for the operation of our website. They include, for example, cookies that enable you to log into secure areas of our website, use a shopping cart or make use of e-billing services.
</p>
<p>
<strong>Analytical/performance cookies.</strong> They allow us to recognise and count the number of visitors and to see how visitors move around our website when they are using it. This helps us to improve the way our website works, for example, by ensuring that users are finding what they are looking for easily.
</p>
<p>
<strong>Functionality cookies.</strong> These are used to recognise you when you return to our website. This enables us to personalise our content for you, greet you by name and remember your preferences (for example, your choice of language or region).
</p>
<p>
<strong>Targeting cookies.</strong> These cookies record your visit to our website, the pages you have visited and the links you have followed. We will use this information to make our website and the advertising displayed on it more relevant to your interests. We may also share this information with third parties for this purpose.
</p>
<p>
You can find more information about the individual cookies we use and the purposes for which we use them in the table below:
</p>
<table>
	<tr>
    	<th>Cookie</th>
        <th>Name</th>
        <th>Purpose</th>
        <th>More information</th>
    </tr>
	<tr>
    	<td>Session</td>
        <td>illuminate_session</td>
        <td>Used to keep information you have provided while visiting our website, this cookie is removed whne you close the session (close the browser)</td>
        <td>na</td>
    </tr>
    <tr>
    	<td>Google Analytics</td>
        <td>_ga<br/>_gat</td>
        <td>Distinguish unique users<br/>Throttle the request rate</td>
        <td><a href="https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage" target="_blank">more info</a></td>
    </tr>    
</table>
<p>
Except for essential cookies, all cookies will expire after 30 days.
</p>
<p>
Please note that third parties (including, for example, advertising networks and providers of external services like web traffic analysis services) may also use cookies, over which we have no control. These cookies are likely to be analytical/performance cookies or targeting cookies
</p>
<p>
You can block cookies by activating the setting on your browser that allows you to refuse the setting of all or some cookies. However, if you use your browser settings to block all cookies (including essential cookies) you may not be able to access all or parts of our site. 
</p>
<p>
If you want to know how to block cookies, please look at the menu on your browser, or visit www.allaboutcookies.org for more information about cookies and how you can turn them off. The Microsoft cookies guide is also a good source of information about what cookies do http://www.microsoft.com/info/uk-en/cookies.mspx. Alternatively, you can use third-party "anonymiser" services to mask information in your cookies, or even general data such as your IP address.
</p>
<p>
You can also read more about how we protect your privacy by reading our <a href="{{ url('/privacy') }}" target="_blank">Privacy Policy</a>
</p>

@stop
