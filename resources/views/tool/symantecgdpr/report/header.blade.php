<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>PDF Report</title>
	<link rel="stylesheet" href="/css/templates/normalize.css">
	<link rel="stylesheet" href="/css/templates/default/report_{{ app('request')->input('tool_id') }}.css">
</head>
<body style="margin: 0; padding: 0;">
	<table class="header" style="width: 100%;" cellpadding="0" cellspacing="0">
		<tr>
			<td>
				<img src="/images/tools/5/report_header{{ app('request')->input('locale') == 'en'? '':'_'.app('request')->input('locale') }}.jpg" alt="">
			</td>
		</tr>
	</table>
</body>
</html>