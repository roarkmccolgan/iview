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
	<link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="w-5/6 mx-auto border-t"></div>
<div class="w-5/6 mx-auto pt-6 clearfix">
	<div class="clearfix float-left w-1/3 text-ntt-blue text-xs">
		<div class=" float-left w-1/2"><img class="mb-6" src="{{ asset('images/tools/italyassessment/bdv.png')}}" alt="" style="width: 37mm;" /></div>
		<div class=" float-left w-1/2"><img class="mb-6" src="{{ asset('images/tools/italyassessment/atos.png')}}" alt="" style="width: 20mm;" /></div>
	</div>
	<div class="clearfix float-left w-2/3 text-right text-xs pt-4">
		Databench Comparison Self-assessment
	</div>
</div>
</body>
</html>