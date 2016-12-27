<!DOCTYPE html>
<html>
	<head>
		@section('head')
		<meta charset="utf-8">
		<title>@yield('pagetitle')</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="format-detection" content="telephone=no">

        <link rel="stylesheet" href="{{asset('css/templates/cookieBar.css')}}" />
        <link rel="stylesheet" href="{{asset('css/templates/normalize.css')}}" />
        @if(session('product.id')==2)
			<link rel="stylesheet" href="{{asset('css/webfonts/metric.css')}}" />
		@endif
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('css/bootstrap/css/bootstrap.css')}}" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/skins/flat/red.css')}}" />
        <link rel="stylesheet" href="{{asset('css/templates/'.session('template').'/theme_'.session('product.id').'.css')}}" />
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
		@yield('main')
		<footer class="footer">
			<div class="container">
				<div class="row">
                	<div class="col-md-10 col-md-offset-1">
                		<div class="row">
                			<div class="col-sm-4">
								<a href="/{{session('localeUrl')}}" class="restart"><i class="fa fa-chevron-left"></i> {{Lang::get('general.'.session('product.id').'restart')}}</a>
							</div>
							<div class="col-sm-8 text-right">
								<span class="assoc">{{Lang::get('general.'.session('product.id').'assoc')}} <img class="sponsor" src="{{asset('images/tools/'.session('product.id').'/fireeye_hp.png')}}" alt="{{Lang::get('general.'.session('product.id').'sponsor')}}"></span>
							</div>	
                		</div>
                	</div>
                </div>
			</div>
		</footer>
	@section('pagescript')
	<script src="{{ asset('js/tool.js')}}"></script>
	@show
	</body>
</html>
