<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="/css/templates/normalize.css">
		<link rel="stylesheet" href="/css/templates/{{ session('template') }}/report_{{ session('product.id') }}.css">
	</head>
	<style>
		
	</style>
	<body style="margin: 0; padding: 0;">
		<table class="footer" style="width: 100%; height: 15mm; color: white; background-color: #4E4D5D " cellpadding="0" cellspacing="0">
			<tr>
				<td style="width: 60%; padding-right: 2%; text-align: right">{{trans('general.'.session('product.id').'assoc')}}</td>
				<td style="width: 38%;">
					<img width="180" src="/css/{{ session('company.alias') }}/png/{{ session('company.alias') }}.png?id=1" alt="">
				</td>
			</tr>
		</table>
	</body>
</html>