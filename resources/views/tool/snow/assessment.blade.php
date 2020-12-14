@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get($tool->alias.'.title'))


@section('head')
@parent
<meta name="author" content="">
<meta name="keywords" content="">

<!-- Primary Meta Tags -->
<meta name="title" content="IDC Agility Framework sponsored by ServiceNow">
<meta name="description" content="IDC's agility self-assessment tool targets 5 core measures of agility. Benchmark your organization and where you sit in your agility journey.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="https://servicenow.idcready.net/">
<meta property="og:title" content="IDC Agility Framework sponsored by ServiceNow">
<meta property="og:description" content="IDC's agility self-assessment tool targets 5 core measures of agility. Benchmark your organization and where you sit in your agility journey.">
<meta property="og:image" content="https://servicenow.idcready.net/images/tools/18/servicenow_agility_framework_social.png">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="https://servicenow.idcready.net/">
<meta property="twitter:title" content="IDC Agility Framework sponsored by ServiceNow">
<meta property="twitter:description" content="IDC's agility self-assessment tool targets 5 core measures of agility. Benchmark your organization and where you sit in your agility journey.">
<meta property="twitter:image" content="https://servicenow.idcready.net/images/tools/18/servicenow_agility_framework_social.png">
@stop

@section('main')
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
	<div class="max-w-4xl mx-auto mb-4 py-4 px-4 text-snow-dark">
		<div class="flex justify-end">
			<share-network
				network="twitter"
				url="https://servicenow.idcready.net/"
				title="{{ Lang::get($tool->alias.'.title') }}"
				description="IDC's agility self-assessment tool targets 5 core measures of agility. Benchmark your organization and where you sit in your agility journey."
				>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.17 14.17" class="fill-current w-12 h-12 cursor-pointer"><path d="M11.24,5.38a6,6,0,0,1-.71,2.83,5.81,5.81,0,0,1-2.06,2.3,5.88,5.88,0,0,1-3.32,1,5.93,5.93,0,0,1-3.28-1l.51,0a4.24,4.24,0,0,0,2.67-.92A2,2,0,0,1,3.8,9.2a2.13,2.13,0,0,1-.74-1l.39,0A2.69,2.69,0,0,0,4,8.11a2.16,2.16,0,0,1-1.22-.75A2.05,2.05,0,0,1,2.3,6V6a2,2,0,0,0,1,.29,2.38,2.38,0,0,1-.69-.77,2.07,2.07,0,0,1,0-2.1A5.91,5.91,0,0,0,4.55,5,5.93,5.93,0,0,0,7,5.62a3,3,0,0,1,0-.49A2.15,2.15,0,0,1,8,3.28,2.07,2.07,0,0,1,9.08,3a2,2,0,0,1,.87.18,2.41,2.41,0,0,1,.7.49A4.38,4.38,0,0,0,12,3.16a2.12,2.12,0,0,1-.94,1.18A4.6,4.6,0,0,0,12.3,4a4.71,4.71,0,0,1-1.08,1.12A1.2,1.2,0,0,1,11.24,5.38Z"/></svg>
			</share-network>
			<share-network
				network="facebook"
				url="https://servicenow.idcready.net/"
				title="{{ Lang::get($tool->alias.'.title') }}"
				description="IDC's agility self-assessment tool targets 5 core measures of agility. Benchmark your organization and where you sit in your agility journey."
				>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.17 14.17" class="fill-current w-12 h-12 cursor-pointer"><path d="M11.65,10.82a1,1,0,0,1-1,1H8.94V8.19h1.22l.18-1.38H8.94V5.93a.81.81,0,0,1,.12-.49.71.71,0,0,1,.55-.18h.73V4A7.64,7.64,0,0,0,9.29,4,1.75,1.75,0,0,0,8,4.45a1.8,1.8,0,0,0-.48,1.33v1H6.27V8.19H7.52V11.8h-4a1,1,0,0,1-1-1V3.65a1,1,0,0,1,1-1h7.17a1,1,0,0,1,1,1Z"/></svg>
			</share-network>
			<share-network
				network="linkedin"
				url="https://servicenow.idcready.net/"
				title="{{ Lang::get($tool->alias.'.title') }}"
				description="IDC's agility self-assessment tool targets 5 core measures of agility. Benchmark your organization and where you sit in your agility journey."
				>
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.17 14.17" class="fill-current w-12 h-12 cursor-pointer"><path d="M11,2.67a.66.66,0,0,1,.65.65v7.82a.66.66,0,0,1-.65.65H3.18a.66.66,0,0,1-.65-.65V3.32a.66.66,0,0,1,.65-.65ZM4.6,5.54a.77.77,0,0,0,.56-.23.76.76,0,0,0,0-1.1A.76.76,0,0,0,4.6,4a.73.73,0,0,0-.55.23.79.79,0,0,0,0,1.1A.73.73,0,0,0,4.6,5.54Zm.67,4.95h0V6.13H3.93v4.36Zm5.07,0V8.11a3,3,0,0,0-.29-1.49A1.46,1.46,0,0,0,8.74,6a1.57,1.57,0,0,0-.83.22,1.14,1.14,0,0,0-.45.47h0V6.13H6.13v4.36H7.48V8.33a1.67,1.67,0,0,1,.14-.77.72.72,0,0,1,.67-.35.58.58,0,0,1,.61.39,2.16,2.16,0,0,1,.1.77v2.12Z"/></svg>
			</share-network>
		</div>
	</div>
	<div class="bg-snow-gray pt-6">
		<div class="max-w-4xl mx-auto mb-4 py-4 px-4 text-snow-dark">
			<div class="flex justify-start">
				<div class="mr-2 pr-2 border-grey border-r text-sm"><a href="{{ url(session('locale').'/restart') }}" class="no-underline text-snow-dark opacity-75"><font-awesome-icon class="mr-1" :icon="icons.faUndo"></font-awesome-icon>@lang($tool->alias.'.restart')</a></div>
				<div class="mr-2 pr-2 border-grey border-r text-sm"><a href="/disclaimer" target="_blank" class="no-underline text-snow-dark opacity-75">@lang('general.disclaimer')</a></div>
				<div class="mr-2 pr-2 border-grey border-r text-sm"><a href="/privacy" target="_blank" class="no-underline text-snow-dark opacity-75">@lang('general.idcprivacy')</a></div>
				<div class="mr-2 pr-2 border-grey border-r text-sm"><a href="/cookies" target="_blank" class="no-underline text-snow-dark opacity-75">@lang('general.cookiespolicylink')</a></div>
			</div>
		</div>		
	</div>
	<script type="text/javascript">
_linkedin_partner_id = "15678";
window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
window._linkedin_data_partner_ids.push(_linkedin_partner_id);
</script><script type="text/javascript">
(function(){var s = document.getElementsByTagName("script")[0];
var b = document.createElement("script");
b.type = "text/javascript";b.async = true;
b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
s.parentNode.insertBefore(b, s);})();
</script>

<noscript><img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=15678&fmt=gif" /></noscript>
</div>
@stop
@section('pagescript')
<script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
@parent
@stop