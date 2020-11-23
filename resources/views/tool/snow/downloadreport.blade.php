@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', $pagetitle)


@section('head')
@parent
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
	ga('set', 'page', '/download');
	ga('send', 'pageview');
	var utm = '{{$utm}}';
	ga('send', 'event', "lead", "generated", utm);

</script>
@endif
<div id="app" class="h-screen flex flex-col">
	<div class="bg-white">
	    <div class="max-w-4xl mx-auto px-4 flex items-center justify-between">
	    	<div class="text-white py-2">
    			<img src="{{ asset('images/idclogocolour.svg') }}" class="w-32 sm:w-48" alt="">
	    	</div>
    		<div class="text-right text-white py-4">
    			<img src="{{ asset('images/tools/18/servicenow_logo.svg') }}" class="w-32 sm:w-48" alt="">
	    	</div>
	    </div>
	</div>
	<transition name="fade">
		<router-view></router-view>
	</transition>
	<div class="bg-snow-gray pt-6">
		<div class="max-w-4xl mx-auto mb-4 py-4 px-4 text-snow-dark">
			<div class="flex justify-start">
				<div class="mr-2 pr-2 border-grey border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-snow-dark opacity-75">@lang('general.disclaimer')</a></div>
				<div class="mr-2 pr-2 border-grey border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-snow-dark opacity-75">@lang('general.idcprivacy')</a></div>
				<div class="mr-2 pr-2 border-grey border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-snow-dark opacity-75">@lang('general.cookiespolicylink')</a></div>
			</div>
		</div>		
	</div>
</div>
@stop
@section('pagescript')

@parent
@stop