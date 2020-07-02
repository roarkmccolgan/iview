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
		<title>Report</title>
		<link rel="stylesheet" href="{{ asset('bundle/'.$manifest['sapagile'][0])}}">
	</head>
	<body class="font-report font-light {{ App::environment('local') ? 'text-sm' : ''}} text-blackblack leading-normal" style="line-height: 1.25">
		{!!$sectionCopy!!}
		<script type="text/javascript">
			window.status = 'chartrendered';
		</script>
	</body>
</html>