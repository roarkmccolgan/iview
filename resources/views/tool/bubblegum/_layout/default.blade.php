<!doctype html>
<html lang="en">
    <head>
    	@section('head')
        <meta charset="utf-8">
        <title>@yield('pagetitle')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/bootstrap.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/stack-interface.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/theme-aqua.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/iconsmind.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/socicon.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/splunk-icons.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/custom.css')}}" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700%7CRubik:300,400,500" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/font-rubiklato.css')}}" type="text/css" media="all" />
    </head>
    <body data-smooth-scroll-offset="77">
    <script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-156016-34', 'auto');
		ga('send', 'pageview');

	</script>

		@yield('main')
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                    <div class="row">
                        <div class="col-xs-4 col-sm-3 col-md-2">
                            <span class="type--fine-print">Developed by</span>
                            <img class="footer-logo" src="{{asset('css/idc/idc-logo.svg')}}" alt="">
                        </div>
                        <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-6 col-md-2 col-md-offset-8 ">
                            <span class="type--fine-print">sponsored by</span>
                            <img class="footer-logo" src="{{asset('css/'.str_slug(session('company.name')).'/'.str_slug(session('company.name')).'-logo.svg')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<footer class="footer-7">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7 col-sm-offset-1">
                        <span class="type--fine-print">&copy; {{date("Y")}} IDC — All Rights Reserved</span>
                        <a href="/{{session('localeUrl')}}" class="type--fine-print">
                            <i class="icon-Refresh"></i> {{Lang::get('general.'.session('product.id').'restart')}}
                        </a>
                        <a class="type--fine-print" href="{{ url('/disclaimer') }}" target="_blank">
                            {{Lang::get('general.disclaimer')}}
                        </a>
                    </div>
                    <div class="col-sm-3 text-right text-left-xs">
                        <ul class="social-list list-inline">
                            <li><a href="#"><i class="socicon socicon-twitter icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                            <li><a href="#"><i class="socicon socicon-linkedin icon icon--xs"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
	@section('pagescript')
	<script src="{{ asset('js/tool.js')}}"></script>
	<script src="{{ asset('js/templates/'.session('template').'/parallax.js')}}"></script>
	<script src="{{ asset('js/templates/'.session('template').'/smooth-scroll.min.js')}}"></script>
	<script src="{{ asset('js/templates/'.session('template').'/scripts.js?an=1')}}"></script>
	@show
    <div class="device-xs visible-xs"></div>
    <div class="device-sm visible-sm"></div>
    <div class="device-md visible-md"></div>
    <div class="device-lg visible-lg"></div>
	</body>
</html>
