<!DOCTYPE html>
<html>
	<head>
		@section('head')
		<meta charset="utf-8">
		<title>@yield('pagetitle')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		<!-- TypeKit -->
		<script src="https://use.typekit.net/xod1duq.js"></script>
		<script>try{Typekit.load({ async: true });}catch(e){}</script>

        <link rel="stylesheet" href="{{asset('css/templates/'.config('app.template').'/cookieBar.css')}}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/templates/'.config('app.template').'/main.css')}}" />

		<script src="{{ asset('js/vendor/modernizr-2.6.2.min.js')}}"></script>
		@show
	</head>

	<body>
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-156016-34', 'auto');
			ga('send', 'pageview');
		</script>
		<div id="container" class="{{isset($class)? $class:''}}">
			<div id="content">
				<div class="wrapper clearfix">
					@yield('header')
					@yield('main')
				</div>
			</div>
			
			<div class="push"></div>
		</div>
		<footer id="footer">
			<div class="wrapper clearfix">
				<a href="/" class="restart"><i class="fa fa-fast-backward"></i> {{Lang::get('general.restart')}}</a> 
				<span class="hp">{{Lang::get('general.assoc')}}</span>
			</div>
		</footer>
	@yield('pagescript')
	</body>
</html>
