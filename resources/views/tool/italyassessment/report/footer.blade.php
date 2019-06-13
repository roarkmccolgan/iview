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
	<div class="clearfix w-full text-ntt-blue text-xs">
		<img class="mb-6 block mx-auto" src="{{ asset('images/tools/italyassessment/footer.png')}}" alt="" style="width: 168mm;" />
	</div>
</div>
</body>
</html>