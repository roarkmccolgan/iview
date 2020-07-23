@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get('vmware.title'))


@section('head')
@parent
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
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
			<div class="mr-2 pr-2 border-r text-sm"><a href="{{ url(session('locale').'/restart') }}" class="no-underline text-ntt-blue opacity-75"><font-awesome-icon class="mr-1" :icon="icons.faUndo"></font-awesome-icon>@lang($tool->alias.'.restart')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.disclaimer')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.idcprivacy')</a></div>
			<div class="mr-2 pr-2 border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-ntt-blue opacity-75">@lang('general.cookiespolicylink')</a></div>
		</div>
	</div>
	<div id="page-footer"></div>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aa2e64adce36f89"></script>
<script type="text/javascript">
	_linkedin_partner_id = "6897";
	window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
	window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script>
<script type="text/javascript">
	(function(){var s = document.getElementsByTagName("script")[0];
	var b = document.createElement("script");
	b.type = "text/javascript";b.async = true;
	b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
	s.parentNode.insertBefore(b, s);})();
</script>
<noscript>
<img height="1" width="1" style="display:none;" alt="" src="https://dc.ads.linkedin.com/collect/?pid=6897&fmt=gif" />
</noscript>
<!-- Facebook Pixel Code -->
<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '954708811291715');
	fbq('track', 'PageView');
</script>
<noscript>
	<img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=954708811291715&ev=PageView&noscript=1"/>
</noscript>

<!-- End Facebook Pixel Code -->
@parent
@stop