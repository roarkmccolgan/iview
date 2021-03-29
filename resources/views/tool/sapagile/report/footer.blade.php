<?php
$json_url = public_path("manifest.json");
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
	<title>PDF Report</title>
	<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['sapagile'][0])}}">
</head>
<body class="bg-blackblack">
<div class="clearfix text-white bg-blackblack py-2 {{ App::environment('local') ? 'pt-4 text-sm' : 'py-6'}}">
	<div class="w-5/6 mx-auto flex items-center justify-between">
		<div class="whitespace-no-wrap">
			<strong>{{ trans('sapagile.title') }}</strong> - {{ trans('sapagile.sub-title') }}
		</div>
		<div class="text-right flex items-center">
			<div class="mr-12 text-gray-200 whitespace-no-wrap">{{ trans('sapagile.sponsoredby') }}</div>
			<img class="" src="{{ asset('images/tools/15/SAP_logo.svg')}}" alt="" style="width: 20.948mm; height: 10.363mm" />
		</div>
	</div>
</div>
</body>
</html>