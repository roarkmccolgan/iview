@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get('vmware.title'))


@section('head')
@parent
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
<div id="app" class="h-screen flex flex-col relative">
	<div class="bg-blackblack">
	    <div class="container mx-auto px-4">
    		<div class="w-full flex justify-between items-center py-5">
    			<a class="w-24 sm:w-48" href="https://idc.com/uk" target="_blank"><img src="{{ asset('images/idc_logo_white.svg')}}" alt=""></a>
    			<a class="w-16 mt-2 sm:w-24" href="https://sap.com" target="_blank"><img src="{{ asset('images/SAP_logo.svg')}}" alt=""></a>
	    	</div>
	    </div>
	</div>
	<transition name="fade">
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
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aa2e64adce36f89"></script>
@parent
@stop