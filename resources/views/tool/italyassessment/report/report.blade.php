@extends('tool.italyassessment._layout.default');

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
		font-style: italic;
		line-height: 1;
		margin-bottom: 5px;
	}
	.sizegraph {
		background-color: #d9e89c;
		font-weight: bold;
		padding: 2px;
		display: inline-block;
	}
	.industrygraph {
		background-color: #b1daf5;
		font-weight: bold;
		padding: 2px;
		display: inline-block;
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
@if($intro)
<div class="container mx-auto mb-4">
	<img src="{{ asset('images/tools/italyassessment/introImage.png')}}" width="100%" alt="">
</div>
@endif
<div class="{{ $pdf ? 'w-5/6' : 'container' }} mx-auto mb-4 pb-4">
	@if($pdf)
	<img src="{{ asset('images/tools/italyassessment/intro_image.png')}}" width="90%" alt="">
	<h3 class="leading-tight text-grey-dark">Databench Comparison Self-assessment</h3>
	<h1 class="leading-tight text-blue-dark">RESULTS REPORT</h1>
	@endif
	<h2 class="my-4">About Databench</h2>
	<p class="mb-2">
		The DataBench project addresses the significant gap in the current benchmarking community's activities, by providing certifiable benchmarks and evaluation schemes of Big Data Technology performance and high business impact and industrial significance.
	</p>
	<p class="mb-2">
		The survey asks questions of big data users about their wishes and experiences in big data projects, and uses this data to help feed back into the DataBench project analysis of Big Data user's focus and needs. This feedback will drive the development and selection of Big Data Benchmark tools to help users of Big Data select the most appropriate Big Data tools for their industry, company size, and business requirements. 
	</p>
	<p class="mb-2">
		In this customised report your responses to the Big Data survey are compared with responses from others in your industry and company size to help you position your project and needs appropriately for your industry and company size. 
	</p>
</div>
<div class="{{ $pdf ? 'w-5/6' : 'container' }} mx-auto p-4">
    <div class="">
		{!! $report !!}
	</div>
</div>
@stop	

@section('pagescript')
<!--script src="//cdn.jsdelivr.net/npm/velocity-animate@1.5/velocity.min.js"></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5aa2e64adce36f89"></script-->
@parent
@stop