<!DOCTYPE html>
<html>
	<head>
		@section('head')
		<meta charset="utf-8">
		<title>@yield('pagetitle')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">
		
		
		@if(session('product.id')==1)
			<!-- TypeKit -->
			<script src="https://use.typekit.net/xod1duq.js"></script>
			<script>try{Typekit.load({ async: true });}catch(e){}</script>
		@endif
		@if(session('product.id')==3)
			<link rel="stylesheet" href="{{asset('css/webfonts/overpass.css')}}" />
		@endif
        <link rel="stylesheet" href="{{asset('css/templates/cookieBar.css')}}" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/theme_'.session('product.id').'.css')}}" />
		@show
		<noscript><link href="{{ asset('css/idc/icons.fallback.css')}}" rel="stylesheet"></noscript>
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
		@yield('main')
		<footer class="footer">
			<div class="container">
				<div class="row">
                	<div class="col-md-8 col-md-offset-2">
                		<div class="row">
                			<div class="col-xs-4">
								<a href="/" class="restart"><i class="fa fa-chevron-left"></i> {{Lang::get('general.'.session('product.id').'restart')}}</a>
							</div>
							<div class="col-xs-4 col-xs-offset-4">
								{{Lang::get('general.'.session('product.id').'assoc')}}<div class="icon-{{session('company.alias')}}" style="width: 76px; height: 34px; margin-left: 10px; display: inline-block; vertical-align: middle;" ></div>
							</div>
                		</div>
                	</div>
                </div>
			</div>
		</footer>
	@section('pagescript')
	<script src="{{ asset('js/tool.js')}}"></script>
	@show
	<script>
		grunticon(["{{ asset('css/'.session('company.alias').'/icons.data.svg.css')}}", "{{ asset('css/'.session('company.alias').'/icons.data.png.css')}}", "i{{ asset('css/'.session('company.alias').'/cons.fallback.css')}}"]);
		grunticon(["{{ asset('css/idc/icons.data.svg.css')}}", "{{ asset('css/idc/icons.data.png.css')}}", "i{{ asset('css/idc/cons.fallback.css')}}"]);
	</script>
	</body>
</html>
