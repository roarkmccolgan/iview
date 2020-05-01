@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', $pagetitle)


@section('head')
@parent
<link rel="stylesheet" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/responsive-microsites.css"/>
<link rel="stylesheet" type="text/css" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/scrapper-footer.css"/>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
@if(App::environment('production'))
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-156016-34', 'auto');
	ga('set', 'page', '/thankyou');
	ga('send', 'pageview');
	var utm = '{{$utm}}';
	ga('send', 'event', "lead", "generated", utm);

</script>
@endif
<div id="app" class="h-screen flex flex-col">
	<div class="bg-white">
	    <div class="container mx-auto px-4">
    		<div class="w-full flex justify-between py-2 pt-4">
    			<a class="w-1/2" href="https://idc.com/uk" target="_blank"><img src="{{ asset('images/vmware.svg')}}" alt=""></a>
    			<a class="w-48" href="https://idc.com/uk" target="_blank"><img src="{{ asset('images/idclogocolour.svg')}}" alt=""></a>
	    	</div>
	    </div>
	</div>
	<div class="flex-grow">
		<div class="container mx-auto py-4 px-4 text-grey-darker">
			<h1 class="font-light leading-tight">{{ $title }}</h1>
			<h3 class="font-light leading-tight">{{ $sub_title }}</h3>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div>
				<h2 class="font-light mb-4 text-dasssault-blue leading-tight">{{ $heading }}</h2>
				<p class="mb-2">
					{!! $body !!}
				</p>
			</div>
		</div>
	</div>
	<div id="page-footer"></div>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script type="text/javascript" src="https://www.vmware.com/bin/vmware/template/scrapper.us.js"></script>
<script type="text/javascript" src="https://www.vmware.com/content/dam/vmwaredesigns/scraper/responsive.js"></script>
@parent
@stop