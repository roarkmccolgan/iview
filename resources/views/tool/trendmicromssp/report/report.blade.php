<?php
$json_url = env('APP_URL')."/manifest.json";
$json = file_get_contents($json_url);
$manifest = json_decode($json, TRUE);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['trendy'][0])}}">
	</head>
	<body class="font-report font-light {{ $pdf ? 'text-xs' : '' }} text-grey-darker leading-normal">
		@if(!$pdf)
		<div class="container mx-auto bg-blue-darker bg-idc-dark-blue mb-8">
			<div class="bg-white p-4">
				<div><img class="w-48" src="{{ asset('images/tools/8/idc.png')}}" alt="" /></div>
			</div>
			<img class="w-full" src="{{ asset('images/tools/9/chess.png') }}" alt="">
			<div class="p-4">
				<div class="text-grey">
					IDC Partner Assessment Tool
				</div>
				<div class="text-2xl sm:text-2xl uppercase text-white">
					READINESS REPORT
				</div>
			</div>
			<div class="p-4">
				<div class="text-white mb-2 sm:mb-4">
					Sponsored by
				</div>
				<div class="text-4xl uppercase text-white">
					<img class="w-24 sm:w-32 fill-current text-white" src="{{ asset('images/tools/9/trend-micro-logo-white.svg')}}" alt="" />
				</div>
			</div>
		</div>
		@endif
		<div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
			{!!$introduction1!!}
		</div>
		<div class="bg-grey-lighter text-center p-4 my-6">
            <div class="{{ $pdf ? 'w-5/6' : 'container' }} mx-auto">
                {!!$introduction2!!}
            </div>
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
        	<h2 class="text-blue-dark mb-6">Readiness Dimension Descriptors</h2>
	        <div class="{{ $pdf ? 'clearfix' : 'flex flex-wrap' }}  leading-tight">
	            <div class="{{ $pdf ? 'float-left w-1/5' : 'w-full sm:w-1/5' }} px-2">
	            	{!!$introduction3!!}
	        	</div>
	        	<div class="{{ $pdf ? 'float-left w-1/5' : 'w-full sm:w-1/5' }} px-2">
	            	{!!$introduction4!!}
	        	</div>
	        	<div class="{{ $pdf ? 'float-left w-1/5' : 'w-full sm:w-1/5' }} px-2">
	            	{!!$introduction5!!}
	        	</div>
	        	<div class="{{ $pdf ? 'float-left w-1/5' : 'w-full sm:w-1/5' }} px-2">
	            	{!!$introduction6!!}
	        	</div>
	        	<div class="{{ $pdf ? 'float-left w-1/5' : 'w-full sm:w-1/5' }} px-2">
	            	{!!$introduction7!!}
	        	</div>
	        	<div class="w-full">
	            	<div class="{{ $pdf ? 'block' : 'hidden sm:block' }} text-center">
			            {!!$introduction8!!}
			        </div>
	        	</div>
	        </div>
		</div>
		<div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            <div class="{{ $pdf ? 'clearfix' : 'flex' }} mt-2">
                <div class="{{ $pdf ? 'float-left' : 'hidden sm:block pr-4' }} w-1/5 text-center">
                    <img class="mx-auto w-3/5" src="{{ session('url') }}/images/tools/9/{{ session('result.overall.rating') }}.png" alt="">
                </div>
                <div class="{{ $pdf ? 'float-left w-4/5' : 'flex w-full' }}">
                    <div class="{{ $pdf ? 'hidden' : 'w-1/5 sm:hidden' }}">
                        <div class="px-2"><img class="w-full" src="{{ session('url') }}/images/tools/9/{{ session('result.overall.rating') }}.png" alt=""></div>
                    </div>
                    <div class="flex-1">
                    	{!!$overall!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            <div class="{{ $pdf ? 'clearfix' : 'flex' }} mt-2">
                <div class="{{ $pdf ? 'float-left' : 'hidden sm:block pr-4' }} w-1/5 text-center">
                    <img class="mx-auto w-3/5" src="{{ session('url') }}/images/tools/9/{{ session('result.sales.rating') }}.png" alt="">
                </div>
                <div class="{{ $pdf ? 'float-left w-4/5' : 'flex w-full' }}">
                    <div class="{{ $pdf ? 'hidden' : 'sm:hidden' }} w-1/5">
                        <div class="px-2"><img class="w-full" src="{{ session('url') }}/images/tools/9/{{ session('result.sales.rating') }}.png" alt=""></div>
                    </div>
                    <div class="flex-1">
                    	{!!$sales!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            <div class="{{ $pdf ? 'clearfix' : 'flex' }} mt-2">
                <div class="{{ $pdf ? 'float-left' : 'hidden sm:block pr-4' }} w-1/5 text-center">
                    <img class="mx-auto w-3/5" src="{{ session('url') }}/images/tools/9/{{ session('result.marketing.rating') }}.png" alt="">
                </div>
                <div class="{{ $pdf ? 'float-left w-4/5' : 'flex w-full' }}">
                    <div class="{{ $pdf ? 'hidden' : 'sm:hidden' }} w-1/5">
                        <div class="px-2"><img class="w-full" src="{{ session('url') }}/images/tools/9/{{ session('result.marketing.rating') }}.png" alt=""></div>
                    </div>
                    <div class="flex-1">
                    	{!!$marketing!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            <div class="{{ $pdf ? 'clearfix' : 'flex' }} mt-2">
                <div class="{{ $pdf ? 'float-left' : 'hidden sm:block pr-4' }} w-1/5 text-center">
                    <img class="mx-auto w-3/5" src="{{ session('url') }}/images/tools/9/{{ session('result.services.rating') }}.png" alt="">
                </div>
                <div class="{{ $pdf ? 'float-left w-4/5' : 'flex w-full' }}">
                    <div class="{{ $pdf ? 'hidden' : 'sm:hidden' }} w-1/5">
                        <div class="px-2"><img class="w-full" src="{{ session('url') }}/images/tools/9/{{ session('result.services.rating') }}.png" alt=""></div>
                    </div>
                    <div class="flex-1">
                    	{!!$services!!}
                    </div>
                </div>
            </div>
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            <div class="{{ $pdf ? 'clearfix' : 'flex' }} mt-2">
                <div class="{{ $pdf ? 'float-left' : 'hidden sm:block pr-4' }} w-1/5 text-center">
                    <img class="mx-auto w-3/5" src="{{ session('url') }}/images/tools/9/{{ session('result.security.rating') }}.png" alt="">
                </div>
                <div class="{{ $pdf ? 'float-left w-4/5' : 'flex w-full' }}">
                    <div class="{{ $pdf ? 'hidden' : 'sm:hidden' }} w-1/5">
                        <div class="px-2"><img class="w-full" src="{{ session('url') }}/images/tools/9/{{ session('result.security.rating') }}.png" alt=""></div>
                    </div>
                    <div class="flex-1">
                    	{!!$security!!}
                    </div>
                </div>
            </div>
        </div>
		<script type="text/javascript">
			window.status = 'chartrendered';
		</script>
	</body>
</html>