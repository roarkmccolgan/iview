@extends('tool.italyassessment._layout.default')

@section('pagetitle')


@section('head')
@parent
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
<style>
	.pb {
		page-break-before: always;
	}
	h3 {
		padding: 4px 4px;
		background-color: #efefef;
		font-size: 1.125rem;
		font-style: italic;
		font-weight: bold;
		line-height: 1;
		margin-bottom: 15px;
	}
	.sizegraph {
		background-color: #e6edb7;
		padding: 3px;
		display: inline-block;
		border-radius: 3px;
		white-space: nowrap;
	}
	.industrygraph {
		background-color: #d2ebf9;
		padding: 3px;
		display: inline-block;
		border-radius: 3px;
		white-space: nowrap;
	}
	.figure {
		display: block;
		font-size: 11px;
		font-style: italic;
		margin-bottom: 4px;
	}
</style>
@stop
@section('main')
<div class="{{ $pdf ? 'w-5/6' : 'container' }} mx-auto mb-4 pb-4">
	@unless($pdf)
	<img src="{{ asset('images/tools/italyassessment/DataBench_logo_v03_final_color.png')}}" width="90%" alt="">
	@endunless
	<img src="{{ asset('images/tools/italyassessment/intro_image.png')}}" width="90%" alt="">
	<h1 class="font-bold leading-tight text-gray-700 p-1 bg-gray-200" style="font-size: 1.125rem;">Measuring the impact of Big Data and Analytics on business results</h1>
	<h2 class="text-4xl font-bold leading-tight text-blue-700 uppercase mb-6">Self-Assessment Report</h2>
	<span class="block text-lg font-bold leading-tight">{{ $name }}</span>
	<span class="block text-lg font-bold leading-tight text-gray-600">{{ $organization }}</span>
	@unless($project===false)<span class="block text-lg font-bold leading-tight text-gray-600">{{ $project }}</span>@endunless
	<span class="block mb-6 text-lg font-bold leading-tight text-gray-600">{{ $theDate }}</span>
	<p class="mb-2">
		In this customized report your answers to the DataBench Big Data survey are compared with respondents from your same industry and company size class to help you compare your Big Data business KPIs with those of your peers. This will help you gain inspiration and insights about how best to implement data-driven innovation.
	</p>
</div>
<div class="{{ $pdf ? 'w-5/6' : 'container' }} mx-auto p-4 pb">
    <div class="">
		{!! $report !!}
	</div>
</div>
<div class="{{ $pdf ? 'w-5/6' : 'container' }} mx-auto mb-4 pb-4 pb">
	<h3>Contact Us</h3>
	<p class="mb-4">
		For more information or to follow DataBench, please use the links below.
	</p>
	<div class="cleafix">
		<div class="float-left w-2/5 mr-4 clearfix mb-4 border-b border-grey-300 p-4">
			<div class="float-left w-10 h-10 mr-2">
				<img src="{{ asset('images/tools/italyassessment/icons/web.svg')}}" alt="">
			</div>
			<div class="float-left">
				<h2 class="font-bold">Website</h2>
				<a href="http://www.databench.eu" class=""><span class="text-sm text-blue-500">www.databench.eu</span></a>
			</div>
		</div>
		<div class="float-left w-2/5 clearfix mb-4 border-b border-grey-300 p-4">
			<div class="float-left w-10 h-10 mr-2">
				<img src="{{ asset('images/tools/italyassessment/icons/email.svg')}}" alt="">
			</div>
			<div class="float-left">
				<h2 class="font-bold">Email</h2>
				<a href="mailto:info@databench.eu" class=""><span class="text-sm text-blue-500">info@databench.eu</span></a>
			</div>
		</div>
	</div>
	<div class="cleafix">
		<div class="float-left w-2/5 mr-4 clearfix mb-4 border-b border-grey-300 p-4">
			<div class="float-left w-10 h-10 mr-2">
				<img src="{{ asset('images/tools/italyassessment/icons/twitter.svg')}}" alt="">
			</div>
			<div class="float-left">
				<h2 class="font-bold">Twitter</h2>
				<a href="https://twitter.com/DataBench_eu" class=""><span class="text-sm text-blue-500">@DataBench_eu</span></a>
			</div>
		</div>
		<div class="float-left w-2/5 clearfix mb-4 border-b border-grey-300 p-4">
			<div class="float-left w-10 h-10 mr-2">
				<img src="{{ asset('images/tools/italyassessment/icons/facebook.svg')}}" alt="">
			</div>
			<div class="float-left">
				<h2 class="font-bold">Facebook</h2>
				<a href="https://www.facebook.com/DataBenchEU/" class=""><span class="text-sm text-blue-500">DataBenchEU</span></a>
			</div>
		</div>
	</div>
	<div class="cleafix">
		<div class="float-left w-2/5 mr-4 clearfix mb-4 border-b border-grey-300 p-4">
			<div class="float-left w-10 h-10 mr-2">
				<img src="{{ asset('images/tools/italyassessment/icons/linkedin.svg')}}" alt="">
			</div>
			<div class="float-left">
				<h2 class="font-bold">Linkedin</h2>
				<a href="https://www.linkedin.com/groups/12109534/" class=""><span class="text-sm text-blue-500">DataBench Project</span></a>
			</div>
		</div>
		<div class="float-left w-2/5 clearfix mb-4 border-b border-grey-300 p-4">
			<div class="float-left w-10 h-10 mr-2">
				<img src="{{ asset('images/tools/italyassessment/icons/slideshare.svg')}}" alt="">
			</div>
			<div class="float-left">
				<h2 class="font-bold">SlideShare</h2>
				<a href="https://www.slideshare.net/DataBench" class=""><span class="text-sm text-blue-500">DataBench</span></a>
			</div>
		</div>
	</div>
	<div class="cleafix">
		<div class="float-left w-2/5 mr-4 clearfix mb-4 border-b border-grey-300 p-4">
			<div class="float-left w-10 h-10 mr-2">
				<img src="{{ asset('images/tools/italyassessment/icons/youtube.svg')}}" alt="">
			</div>
			<div class="float-left">
				<h2 class="font-bold">Youtube</h2>
				<a href="https://www.youtube.com/channel/UCYR1nCoDp-qgGck76GM-JDg/featured" class=""><span class="text-sm text-blue-500">DataBench Project</span></a>
			</div>
		</div>
	</div>
</div>
@stop	

@section('pagescript')
<!--script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aa2e64adce36f89"></script-->
@parent
@stop