@extends('tool.'.session('template').'._layout.default')

@section('head')
@parent
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="">
@stop

@section('main')
<div id="app" class="h-screen flex flex-col text-base">
	<div class="">
	    <div class="container mx-auto px-4">
    		<img class="w-full sm:w-1/2 mx-auto" src="/images/tools/italyassessment/DataBench_logo_v03_final_color.png" alt="">
	    </div>
	</div>
	<div class="flex-grow text-center">
		<div class="container mx-auto">
			<div class="flex flex-wrap justify-center items-center">
				<div class="w-full sm:w-1/2 relative">
					<img class="max-w-full" src="/images/tools/italyassessment/intro_image.png" alt="">
					<div class="absolute inset-0 sm:hidden flex flex-col items-center justify-center">
						<a href="http://survey.idc.com/survey/selfserve/21eb/190309?utm={{$utm}}" class="bg-blue-800 text-white font-bold hover:bg-blue-600 shadow-md rounded py-4 px-6 no-underline">Start</a>
					</div>
				</div>
				<div class="w-full sm:w-1/2 text-left">
					<div class="px-8 py-2 sm:flex sm:flex-col sm:h-full sm:mr-4">
						<h1 class="text-2xl font-bold leading-tight">DataBench Self-Assessment Tool</h1>
						<h3 class="text-lg font-bold leading-tight text-gray-600 mb-4">Measuring the impact of Big Data and Analytics on business results</h3>
						<div class="text-grey-light">
							<p class="mb-2">
								The DataBench Self-Assessment Tool provides organisations using or planning to use Big Data and Analytics (BDA) with the opportunity to benchmark their business performance against their peers (other companies in the same industry and same company size class). The DataBench Self-Assessment Tool addresses people who are involved, influence, or are highly knowledgeable about their organisation's approach to, and potential use of, BDA. A deep technical understanding of the use or development of Big Data systems is not required to fill in the Self-Assessment survey.
							</p>
							<p class="mb-2">
								After the completion of the survey, a summary report will be automatically generated providing an analysis of your answers. The link to download the report will be emailed after the survey submission.
							</p>
						</div>
						<div class="mt-8">
							<a href="http://survey.idc.com/survey/selfserve/21eb/190309?utm={{$utm}}" class="hidden sm:block text-center bg-blue-800 text-white font-bold hover:bg-blue-600 shadow-md rounded py-4 px-6 no-underline">Start</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container mx-auto bg-white mt-6 mb-4 py-4 px-4 sm:rounded text-grey-darker">
		<img class="" src="/images/tools/italyassessment/footer.png" alt="">
	</div>
</div>
@stop