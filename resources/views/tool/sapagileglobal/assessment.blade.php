@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get('sapagileglobal.title'))


@section('head')
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WF9SDK8');</script>
<!-- End Google Tag Manager -->
@parent
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WF9SDK8"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="app" class="h-screen flex flex-col relative">
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
	<transition name="component-fade" mode="out-in">
		<router-view></router-view>
	</transition>
	<div class="bg-sap-blue">
		<div class="container mx-auto mt-6 mb-4 py-4 px-4">
			<div class="flex justify-start">
				<div class="mr-2 pr-2 border-r text-sm"><a href="{{ url(session('locale').'/restart') }}" class="no-underline text-white opacity-75"><font-awesome-icon class="mr-1" :icon="icons.faUndo"></font-awesome-icon>@lang($tool->alias.'.restart')</a></div>
				<div class="mr-2 pr-2 border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-white opacity-75">@lang('general.disclaimer')</a></div>
				<div class="mr-2 pr-2 border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-white opacity-75">@lang('general.idcprivacy')</a></div>
				<div class="mr-2 pr-2 border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-white opacity-75">@lang('general.cookiespolicylink')</a></div>
			</div>
		</div>		
	</div>
</div>
@stop
@section('pagescript')
<!-- Go to www.addthis.com/dashboard to customize your tools -->
@parent
@stop