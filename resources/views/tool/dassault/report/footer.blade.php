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
	<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['antifreeze'][1])}}">
</head>
<body>
<div class="w-5/6 mx-auto border-t border-ntt-blue"></div>
<div class="w-5/6 mx-auto pt-6 clearfix">
	<div class="float-left w-2/3 mb-6 text-ntt-blue text-xs">
		<strong>{{ trans('ntt-sdwan.title') }}</strong><br/> {{ trans('ntt-sdwan.sub-title') }}
	</div>
	<div class="float-left w-1/3 mb-6 text-right">
		<img class="" src="{{ asset('images/tools/8/ntt.png')}}" alt="" style="width: 40mm" />
	</div>
</div>
</body>
</html>