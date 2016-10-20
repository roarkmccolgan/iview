<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="{{session('url')}}/css/templates/normalize.css">
		<link rel="stylesheet" href="{{session('url')}}/css/templates/default/report_{{session('product.id')}}.css">
	</head>
	<style>
		.header h1, .header h2{
			color: #fff;
			font-size: 24px;
			font-family: helvetica, sans;
			font-weight: lighter;
			margin: 0;
			padding-left: 5mm;
		}
		.header h2{
			font-size: 20px;
		}
	</style>
	<body style="margin: 0; padding: 0;">
		<table class="header" style="width: 100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td style="width: 160mm; height: 25mm; background-color: #003F7D;">
					<h1>IDC's Cloud Readiness Assessment</h1>
					<h2>Driving Cloud Development</h2>
				</td>
				<td>
					<img src="{{session('url')}}/images/report/idclogo.jpg" style="display: block; width: 36mm; height: 12mm; margin-left: 5mm; margin-top: 2mm;">
				</td>
			</tr>
		</table>
	</body>
</html>