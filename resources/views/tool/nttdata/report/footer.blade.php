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
	<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['nttdata'][0])}}">
</head>
<body>
<div class="w-5/6 mx-auto border-t border-grey"></div>
<div class="w-5/6 mx-auto py-2 pt-4 clearfix">
	<div class="float-left w-2/3 text-ntt-blue text-xs mt-4">
		<strong>{{ trans('nttdatadx.title') }}</strong>
	</div>
	<div class="float-left w-1/3 text-right">
		<img width="100" height="50" src="{{ asset('images/tools/10/nttdata_logo_blue.svg')}}" />
	</div>
</div>
</body>
</html>