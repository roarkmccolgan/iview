<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="http://sage.idcgauge.net/css/templates/default/normalize.css">
		<link rel="stylesheet" href="http://sage.idcgauge.net/css/templates/default/report.css">
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
		h2{
			font-family: Arial;
			font-weight: lighter;
			font-size: 18pt;
			color: #0a85c7;
			margin: 0;
			margin-top: 5mm;
		}
		p{
			font-family: Arial;
			font-size: 8pt;
			color: #808080;
			line-height: 14pt;
			text-align: justify;
		}
	</style>
	<body style="margin: 0; padding: 0;">
		<table class="header" style="width: 100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td style="width: 160mm; height: 25mm; background-color: #003F7D;">
					<h1>Cloud Development</h1>
					<h2>Advancing your maturity</h2>
				</td>
				<td>
					<img src="http://sage.idcgauge.net/images/report/idclogo.jpg" style="display: block; width: 36mm; height: 12mm; margin-left: 5mm; margin-top: 2mm;">
				</td>
			</tr>
			<tr>
				<td colspan="2"><img src="http://sage.idcgauge.net/css/templates/default/img/report1.jpg" style="display: block; width: 100%;"></td>
			</tr>
		</table>
		<div style="margin-left: 10mm; width: 135mm;">
			<h2>Introduction</h2>
			<p>
				Thank you for taking part in IDC’s cloud maturity tool. This study enables you to position your business in relation to over 500 similar organizations across the U.S. and Europe, and provides you with some essential guidance in the development of your cloud business.
			</p>
			<p>
				The following report provides you with both context, in terms of positioning your organization against your peers, and recommendations on how to progress your organization toward a profitable and successful future in cloud.
			</p>
		</div>
		<div style="float: left; margin-left: 10mm; width: 90mm;">
			<h2>Overall Maturity</h2>
			<p>
				Based on IDC’s assessment, your organization is at Stage 2: Time to Commit in terms of its overall cloud readiness. 35% of the organizations benchmarked by IDC were at this stage, with the majority of organizations positioned in Stage 3: Time to Invest.
			</p>
			<p>
				For further insight and detailed recommendations, the report takes you through the components of cloud strategy, delivering an assessment of your stage of maturity as well as individual recommendations on how to improve these areas.
			</p>
			<p>
				Organizations at this stage in their cloud maturity are beginning to develop and deliver cloud-specific business models. Typically, this is not granular enough to account for different product lines or individual P&L, and is often unmanaged and untargeted. With measurement limited, there is little in the way of automation, whether it is process, methodology, or sale and delivery. While businesses at this stage of maturity are beginning to build cloud sales functions and cloud-based marketing, revenue still comes from resale of on-premise solutions. Despite this, recurring revenue growth is outpacing traditional business.
			</p>
			<p>
				The following report provides you with a more detailed understanding of the different areas of your cloud strategy and the progress you are making. It also provides you with some guidance on improvements within these areas of your business.
			</p>
		</div>
		<div id="stocks-div" style="height: 110mm; width:85mm; margin:5mm; background-color: red; float: left">
			
		</div>
		@columnchart('Stocks', 'stocks-div')
		<script type="text/javascript">
			function chartReady(event, chart){
				window.status = 'chartrendered'
			}
		</script>
	</body>
</html>