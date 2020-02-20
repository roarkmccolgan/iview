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
	<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['hitachi'][0])}}">
</head>
<body>
<div class="w-5/6 mx-auto pb-2 pt-4 clearfix text-black text-sm">
	{{ trans('hitachi.title') }}
</div>
<div class="w-5/6 mx-auto border-b border-grey"></div>
</body>
</html>