<?php
$json_url = env('APP_URL')."/manifest.json";
$json = file_get_contents($json_url);
$manifest = json_decode($json, TRUE);
?>
<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="{{ App::getLocale() }}"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="{{ App::getLocale() }}"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="{{ App::getLocale() }}"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="{{ App::getLocale() }}"> <!--<![endif]-->
<head>
	@section('head')
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>@yield('pagetitle',Lang::get('general.'.session('product.id').'title'))</title>
    <link rel="stylesheet" href="{{ asset('bundle/'.$manifest['antifreeze'][0])}}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/images/favicon.ico">
    <link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
    <link rel="manifest" href="/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
	<!--[if lt IE 9]> HTML5Shiv
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    @show
</head>
<body class="min-h-screen font-sans font-light leading-normal bg-grey-lighter">
    @yield('main')
    
    @include('_layouts.footer')
    @section('pagescript')
	<script src="{{ asset('bundle/'.$manifest['antifreeze'][1])}}"></script>
    <script type="text/javascript" async=true>
        var elem = document.createElement('script');
        elem.src = 'https://quantcast.mgr.consensu.org/cmp.js';
        elem.async = true;
        elem.type = "text/javascript";
        var scpt = document.getElementsByTagName('script')[0];
        scpt.parentNode.insertBefore(elem, scpt);
        (function() {
            var gdprAppliesGlobally = false;
            function addFrame() {
                if (!window.frames['__cmpLocator']) {
                    if (document.body) {
                        var body = document.body,
                        iframe = document.createElement('iframe');
                        iframe.style = 'display:none';
                        iframe.name = '__cmpLocator';
                        body.appendChild(iframe);
                    } else {
                        // In the case where this stub is located in the head,
                        // this allows us to inject the iframe more quickly than
                        // relying on DOMContentLoaded or other events.
                        setTimeout(addFrame, 5);
                    }
                }
            }
            addFrame();
            function cmpMsgHandler(event) {
                var msgIsString = typeof event.data === "string";
                var json;
                if(msgIsString) {
                    json = event.data.indexOf("__cmpCall") != -1 ? JSON.parse(event.data) : {};
                } else {
                    json = event.data;
                }
                if (json.__cmpCall) {
                    var i = json.__cmpCall;
                    window.__cmp(i.command, i.parameter, function(retValue, success) {
                        var returnMsg = {"__cmpReturn": {
                            "returnValue": retValue,
                            "success": success,
                            "callId": i.callId
                        }};
                        event.source.postMessage(msgIsString ?
                            JSON.stringify(returnMsg) : returnMsg, '*');
                    });
                }
            }
            window.__cmp = function (c) {
                var b = arguments;
                if (!b.length) {
                    return __cmp.a;
                }
                else if (b[0] === 'ping') {
                    b[2]({"gdprAppliesGlobally": gdprAppliesGlobally,
                        "cmpLoaded": false}, true);
                } else if (c == '__cmp')
                return false;
                else {
                    if (typeof __cmp.a === 'undefined') {
                        __cmp.a = [];
                    }
                    __cmp.a.push([].slice.apply(b));
                }
            }
            window.__cmp.gdprAppliesGlobally = gdprAppliesGlobally;
            window.__cmp.msgHandler = cmpMsgHandler;
            if (window.addEventListener) {
                window.addEventListener('message', cmpMsgHandler, false);
            }
            else {
                window.attachEvent('onmessage', cmpMsgHandler);
            }
        })();
        window.__cmp('init', {
            'Language': 'en',
            'Initial Screen Reject Button Text': 'I do not accept',
            'Initial Screen Accept Button Text': 'I accept',
            'Purpose Screen Body Text': 'You can set your consent preferences and determine how you want your data to be used based on the purposes below. You may set your preferences for us independently from those of third-party partners. Each purpose has a description so that you know how we and partners use your data.',
            'Vendor Screen Body Text': 'You can set consent preferences for each individual third-party company below. Expand each company list item to see what purposes they use data for to help make your choices. In some cases, companies may disclose that they use your data without asking for your consent, based on their legitimate interests. You can click on their privacy policies for more information and to opt out.',
            'Vendor Screen Accept All Button Text': 'Accept all',
            'Vendor Screen Reject All Button Text': 'Reject all',
            'Initial Screen Body Text': 'We and our partners use technology such as cookies on our site to personalise content and ads, provide social media features, and analyse our traffic. Click below to consent to the use of this technology across the web. You can change your mind and change your consent choices at anytime by returning to this site.',
            'Initial Screen Body Text Option': 1,
            'Publisher Name': 'NTT Europe',
            'Publisher Logo': 'https://www.eu.ntt.com/content/dam/nttcom/cmn/img/lgo-ntt.png',
            'Publisher Purpose IDs': [1,5],
            'Post Consent Page': 'https://www.google.com',
            'Consent Scope': 'service',
            'UI Layout': 'banner',
            'Persistent Consent Link Location': 4,

        });
    
</script>
<style>
    .qc-cmp-button {
      background-color: #ffcc00 !important;
      border-color: #ffcc00 !important;
    }
    .qc-cmp-button:hover {
      background-color: transparent !important;
      border-color: #ffcc00 !important;
    }
    .qc-cmp-alt-action,
    .qc-cmp-link {
      color: #ffcc00 !important;
    }
    .qc-cmp-button {
      color: #000000 !important;
    }
    .qc-cmp-button.qc-cmp-secondary-button {
      color: #646464 !important;
    }
    .qc-cmp-button.qc-cmp-button.qc-cmp-secondary-button:hover {
      color:#ffffff !important;
    }
    .qc-cmp-button.qc-cmp-secondary-button {
      border-color: #ffe595 !important;
      background-color: transparent !important;
    }
    .qc-cmp-button.qc-cmp-secondary-button:hover {
      background-color: #ffe595 !important;
    }
    .qc-cmp-ui,
    .qc-cmp-ui .qc-cmp-main-messaging,
    .qc-cmp-ui .qc-cmp-messaging,
    .qc-cmp-ui .qc-cmp-beta-messaging,
    .qc-cmp-ui .qc-cmp-title,
    .qc-cmp-ui .qc-cmp-sub-title,
    .qc-cmp-ui .qc-cmp-purpose-info,
    .qc-cmp-ui .qc-cmp-table,
    .qc-cmp-ui .qc-cmp-table-header,
    .qc-cmp-ui .qc-cmp-vendor-list,
    .qc-cmp-ui .qc-cmp-vendor-list-title {
        color: #003879 !important;
    }
    .qc-cmp-ui a,
    .qc-cmp-ui .qc-cmp-alt-action {
      color: #646464 !important;
    }
    .qc-cmp-ui {
        background-color: #ebf6fc !important;
    }
    .qc-cmp-publisher-purposes-table .qc-cmp-table-header {
      background-color: #fafafa !important;
    }
    .qc-cmp-publisher-purposes-table .qc-cmp-table-row {
      background-color: #ffffff !important;
    }
    .qc-cmp-small-toggle.qc-cmp-toggle-on,
    .qc-cmp-toggle.qc-cmp-toggle-on {
        background-color: #646464 !important;
        border-color: #646464 !important;
    }
</style>
	@show
</body>
</html>
