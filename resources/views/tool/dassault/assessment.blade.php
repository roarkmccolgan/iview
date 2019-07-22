@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get('general.'.$tool->id.'title'))


@section('head')
@parent
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
<div id="app" class="h-screen flex flex-col">
	<div class="bg-white">
	    <div class="container mx-auto px-4">
    		<div class="w-full flex justify-between py-2 pt-4">
    			<a class="w-48" href="https://idc.com/uk" target="_blank"><img src="{{ asset('images/dassault.svg')}}" alt=""></a>
    			<a class="w-48" href="https://idc.com/uk" target="_blank"><img src="{{ asset('images/idclogocolour.svg')}}" alt=""></a>
	    	</div>
	    </div>
	</div>
	<transition name="fade">
		<router-view></router-view>
	</transition>
	<div class="container mx-auto bg-white border-t border-b mt-6 mb-4 py-4 px-4 sm:border sm:rounded text-grey-darker">
		<div class="flex justify-start">
			<div class="mr-2 pr-2 border-r text-sm"><a href="{{ url(session('locale').'/restart') }}" class="no-underline text-ntt-blue opacity-75"><font-awesome-icon class="mr-1" :icon="icons.faUndo"></font-awesome-icon>@lang($tool->alias.'.restart')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.disclaimer')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.idcprivacy')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.cookiespolicylink')</a></div>
		</div>
	</div>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aa2e64adce36f89"></script>
@parent
@stop