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
	<title>PDF Report</title>
	<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['antifreeze'][1])}}">
</head>
<body>
<div class="w-5/6 mx-auto border-t border-ntt-blue"></div>
<div class="flex justify-between items-center w-5/6 mx-auto pt-6">
	<div class="text-ntt-blue text-xs">
		<strong>IDC's Next Generation WAN Advisor</strong> - Is your network ready for the digital future?
	</div>
	<img class="mb-6" src="{{ asset('images/tools/8/ntt.png')}}" alt="" style="width: 40mm" />
</div>
</body>
</html>