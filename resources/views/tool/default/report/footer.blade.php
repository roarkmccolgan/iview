<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="/css/templates/normalize.css">
		<link rel="stylesheet" href="/css/templates/default/report_{{ session('product.id') }}.css">
	</head>
	<style>
		
	</style>
	<body style="margin: 0; padding: 0;">
		<table class="footer" style="width: 100%; height: 13mm; color: grey; " cellpadding="0" cellspacing="0">
			<tr>
				@if(session('product.id')==4)
				<td style="width: 88%; padding-right: 2%; text-align: right">{{trans('general.'.session('product.id').'assoc')}}</td>
				<td style="width: 10%; text-align: center">
					<img width="30" src="/css/{{ session('company.alias') }}/png/{{ session('company.alias') }}.png" alt="">
				</td>
				@else
				<td style="width: 78%; padding-right: 2%; text-align: right">{{trans('general.'.session('product.id').'assoc')}}</td>
				<td style="width: 20%; text-align: center">
					<img width="80" src="/css/{{ session('company.alias') }}/png/{{ session('company.alias') }}.png" alt="">
				</td>
				@endif
				
			</tr>
		</table>
	</body>
</html>