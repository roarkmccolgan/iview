<!doctype html>
<html lang="en">
    <head>
    	@section('head')
        <meta charset="utf-8">
        <title>@yield('pagetitle',Lang::get('general.'.session('product.id').'title'))</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/bootstrap.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/stack-interface.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/theme-charcoal.css')}}?id=1" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/iconsmind.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/socicon.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/fonts/symantecgdpr/style.css?id=1')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('js/templates/'.session('template').'/unslider-master/dist/css/unslider.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('js/templates/'.session('template').'/unslider-master/dist/css/unslider-dots.css')}}" type="text/css" media="all" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/custom.css')}}?id=4" type="text/css" media="all" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,400i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/font-rubiklato.css')}}" type="text/css" media="all" />
        @show
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
                <div class="frame clearfix hidden-xs">
                    <div class="col-xs-12 col-sm-10 col-sm-offset-1">
                        <div class="row">
                            <div class="col-xs-4 col-sm-3 col-md-2">
                                <span class="type--fine-print">{{Lang::get('general.'.session('product.id').'developedby')}}</span>
                                <img class="footer-logo" src="{{asset('css/idc/idc-logo-new.svg')}}" alt="">
                            </div>
                            <div class="col-xs-3 col-xs-offset-5 col-sm-3 col-sm-offset-6 col-md-2 col-md-offset-8">
                                
                                <span class="type--fine-print">{{Lang::get('general.'.session('product.id').'sponsoredby')}}</span>
                                <img class="footer-logo" src="{{asset('css/'.str_slug(session('company.name')).'/'.str_slug(session('company.name')).'-logo.svg')}}" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<footer class="footer-7 unpad--top">
            <div class="container">
                <div class="row">
                    <div class="frame clearfix bottom">
                        <div class="col-sm-7 col-sm-offset-1">
                            <span class="type--fine-print">&copy; {{date("Y")}} IDC — {{Lang::get('general.allrights')}}</span>
                            <a href="/{{session('localeUrl')}}" class="type--fine-print">
                                {{Lang::get('general.'.session('product.id').'restart')}}
                            </a>
                            <a class="type--fine-print" href="{{ url('/disclaimer') }}" target="_blank">
                                {{Lang::get('general.disclaimer')}}
                            </a>
                        </div>
                        <div class="col-sm-3 text-right text-left-xs">
                            <ul class="social-list list-inline">
                                <li>
                                    <a href="{{Lang::get('general.'.session('product.id').'twitterlink')}}" target="_blank">
                                        <i class="socicon socicon-twitter icon icon--xs"></i>
                                    </a>
                                </li>
                                <li><a href="{{Lang::get('general.'.session('product.id').'facebooklink')}}" target="_blank"><i class="socicon socicon-facebook icon icon--xs"></i></a></li>
                                <li><a href="{{Lang::get('general.'.session('product.id').'linkedinlink')}}" target="_blank"><i class="socicon socicon-linkedin icon icon--xs"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
	@section('pagescript')
	<script src="{{ asset('js/tool.js')}}"></script>
	<script src="{{ asset('js/templates/'.session('template').'/parallax.js')}}"></script>
	<script src="{{ asset('js/templates/'.session('template').'/smooth-scroll.min.js')}}"></script>
	<script src="{{ asset('js/templates/'.session('template').'/scripts.js?an=3')}}"></script>
	@show
    <div class="device-xs visible-xs"></div>
    <div class="device-sm visible-sm"></div>
    <div class="device-md visible-md"></div>
    <div class="device-lg visible-lg"></div>
	</body>
</html>
