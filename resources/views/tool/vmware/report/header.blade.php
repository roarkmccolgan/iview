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
	<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['vmware'][0])}}">
</head>
<body>
<div class="w-5/6 mx-auto clearfix text-vmware-blue text-sm">
	<div class="w-1/2 float-left">{{ trans('vmware.title') }}</div>
	<div class="w-1/2 float-left text-right">
		<img class="" src="{{ asset('images/tools/8/idc.png')}}" alt="" style="width: 40mm; height: 7.69mm" />
	</div>
</div>
<div class="w-5/6 mx-auto border-b border-grey mt-4"></div>
</body>
</html>