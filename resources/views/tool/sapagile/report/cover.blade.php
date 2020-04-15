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
<body>
	<div class="h-full min-h-screen bg-red-dark">
		hey
	</div>
	<script type="text/javascript">
		window.status = 'chartrendered';
	</script>
</body>
</html>