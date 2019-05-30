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
				</div>
				<div class="w-full sm:w-1/2 text-left">
					<div class="px-8 py-2 sm:flex sm:flex-col sm:h-full sm:mr-4">
						<h1 class="text-2xl font-bold leading-tight">@if($msg) HELLO AGAIN! @else THANK YOU! @endif</h1>
						<div class="text-grey-light">
							@if(!$msg)
							<p class="mb-2">
								Your custom report will arrive in your inbox soon.
							</p>
							<p class="mb-2">
								Please check in your junk folder if you don't receive it within 5 minutes.
							</p>
							@else
							<p class="mb-2">
								{!!$msg!!}
							</p>
							@endif
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