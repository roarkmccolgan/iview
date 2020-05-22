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
	<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['ibmcloud'][0])}}">
</head>
<body>
<div class="bg-grey-lighter w-full">
	<div class="w-5/6 mx-auto py-1 pt-4 clearfix">
		<div class="float-left w-1/2">
			<img class="" src="{{ asset('images/idclogocolour.svg')}}" alt="" style="width: 30mm; height: 15mm;" />
		</div>
		<div class="float-left w-1/2 text-right">
			<img class="" src="{{ asset('images/tools/16/ibmcloud_logo.svg')}}" alt="" style="width: 30mm" />
		</div>
	</div>	
</div>
</body>
</html>