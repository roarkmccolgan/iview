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
	ga('set', 'page', '/thankyou');
	ga('send', 'pageview');
	var utm = '{{$utm}}';
	ga('send', 'event', "lead", "generated", utm);

</script>
@endif
<div id="app" class="h-screen flex flex-col">
	<div class="bg-blackblack">
	    <div class="container mx-auto px-4">
    		<div class="w-full flex justify-between items-start py-5">
    			<a class="w-24 sm:w-48" href="https://idc.com/uk" target="_blank"><img src="{{ asset('images/idc_logo_white.svg')}}" alt=""></a>
    			<div class="w-16 sm:w-24 text-sm text-white leading-none">
    				sponsored by:
    				<a class="w-full" href="https://sap.com" target="_blank"><img class="mt-2" src="{{ asset('images/SAP_logo.svg')}}" alt=""></a>
    			</div>
	    	</div>
	    </div>
	</div>
	<div class="flex-grow">
		<div class="container mx-auto py-4 px-4 text-grey-darker">
			<h1 class="font-sapagile font-bold text-4xl leading-tight text-blackblack">{{ $title }}</h1>
			<h3 class="font-light leading-tight">{{ $sub_title }}</h3>
		</div>
		<div class="container mx-auto bg-white border-t border-b mt-6 p-8 sm:border sm:rounded shadow text-grey-darker">
			<div>
				<h2 class="font-light mb-4 text-dasssault-blue leading-tight">{{ $heading }}</h2>
				<p class="mb-2">
					{!! $body !!}
				</p>
                <div class="addthis_inline_share_toolbox"></div>
			</div>
		</div>
	</div>
	<div class="bg-sap-blue">
		<div class="container mx-auto mt-6 mb-4 py-4 px-4">
			<div class="flex justify-start">
				<div class="mr-2 pr-2 border-r text-sm"><a href="{{ url(session('locale').'/restart') }}" class="no-underline text-white opacity-75">
					<font-awesome-icon class="mr-1" :icon="icons.faUndo"></font-awesome-icon>@lang('sapagile.restart')</a></div>
				<div class="mr-2 pr-2 border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-white opacity-75">@lang('general.disclaimer')</a></div>
				<div class="mr-2 pr-2 border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-white opacity-75">@lang('general.idcprivacy')</a></div>
				<div class="mr-2 pr-2 border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-white opacity-75">@lang('general.cookiespolicylink')</a></div>
			</div>
		</div>		
	</div>
</div>
@stop
@section('pagescript')
<script type="text/javascript">
var addthis_share = {
   url: "{{ url(session('locale').'/') }}",
   title: "@lang('sapagile.full_title') - @lang('sapagile.social_description')",
   description: "@lang('sapagile.social_description')",
   media: "https://clicktobeagile.idcready.net/images/tools/15/clicktobeagile{{ App::getLocale() == 'en' ? '' : App::getLocale() }}.png"
}
var redirect = laravel.redirect;
if(redirect){
	window.setTimeout(() => {
		window.location.replace(redirect);
	}, 3000);
}
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5e8c7466421e5661"></script>
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
@parent
@stop