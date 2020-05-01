@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get('vmware.title'))


@section('head')
@parent
<link rel="stylesheet" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/responsive-microsites.css"/>
<link rel="stylesheet" type="text/css" href="https://www.vmware.com/content/dam/vmwaredesigns/scraper/scrapper-footer.css"/>
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
<div id="app" class="h-screen flex flex-col relative">
	<div class="bg-white">
	    <div class="container mx-auto px-4">
    		<div class="w-full flex justify-between items-center py-5">
    			<a class="w-32 sm:w-48" href="https://idc.com/uk" target="_blank"><img src="{{ asset('images/idclogocolour.svg')}}" alt=""></a>
    			<a class="w-32 mt-2 sm:w-48" href="https://vmware.com" target="_blank"><img src="{{ asset('images/vmware_logo.svg')}}" alt=""></a>
	    	</div>
	    </div>
	</div>
	<transition name="fade" mode="out-in">
		<router-view></router-view>
	</transition>
	<div class="container mx-auto mt-6 mb-4 py-4 px-4 text-grey-darker">
		<div class="flex justify-start">
			<div class="mr-2 pr-2 text-sm"><a href="{{ url(session('locale').'/restart') }}" class="no-underline text-ntt-blue opacity-75"><font-awesome-icon class="mr-1" :icon="icons.faUndo"></font-awesome-icon>@lang($tool->alias.'.restart')</a></div>
		</div>
	</div>
	<div id="page-footer"></div>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aa2e64adce36f89"></script>
<script type="text/javascript" src="https://www.vmware.com/bin/vmware/template/scrapper.us.js"></script>
<script type="text/javascript" src="https://www.vmware.com/content/dam/vmwaredesigns/scraper/responsive.js"></script>
@parent
@stop