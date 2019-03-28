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
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['nttdata'][1])}}">
	</head>
	<body class="font-report font-light {{ $pdf ? 'text-sm' : '' }} text-grey-darkest leading-normal">
		@if(!$pdf)
		<div class="container mx-auto bg-blue-darker bg-idc-dark-blue mb-8">
			<div class="bg-white p-4">
				<div><img class="w-48" src="{{ asset('images/tools/8/idc.png')}}" alt="" /></div>
			</div>
			<img class="w-full" src="{{ asset('images/tools/10/891021854.jpg') }}" alt="">
			<div class="p-4">
				<div class="text-grey">
					IDC Digital Transformation Capability
				</div>
				<div class="text-2xl sm:text-2xl uppercase text-white">
					Assessment Report
				</div>
			</div>
			<div class="p-4">
				<div class="text-white mb-2 sm:mb-4">
					Sponsored by
				</div>
				<div class="text-4xl uppercase text-white">
					<img class="w-24 sm:w-32 fill-current text-white" src="{{ asset('images/tools/10/nttdata_logo_white.svg')}}" alt="" />
				</div>
			</div>
		</div>
        <div class="pb"></div>
		@endif
		<div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
			{!!$introduction!!}
		</div>
        
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            {!!$overall!!}
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            {!!$dxAdoption!!}
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            {!!$successInDx!!}
        </div>
        <div class="pb"></div>
        <div class="{{ $pdf ? 'w-5/6' : 'container' }} px-2 sm:px-0 mx-auto mb-8">
            {!!$connectedFinancialServices!!}
        </div>
        
		<script type="text/javascript">
			window.status = 'chartrendered';
		</script>
	</body>
</html>