<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Report</title>
	<link rel="stylesheet" href="/css/templates/normalize.css">
	<link rel="stylesheet" href="/css/templates/default/report_3.css">
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
<body style="margin: 0; padding: 0;" onload="subst()">
	<table class="header" style="width: 100%;" cellpadding="0" cellspacing="0">
		<tr>
			<td style="width: 160mm; height: 25mm; background-color: #003F7D;">
				<h1>IDC's Cloud Readiness Assessment</h1>
				<h2 class="section">Driving Cloud Development</h2>
			</td>
			<td>
				<img src="/images/report/idclogo.jpg" style="display: block; width: 36mm; height: 12mm; margin-left: 5mm; margin-top: 2mm;">
			</td>
		</tr>
	</table>
	<script>
		function subst() {
			var vars={};
			var x=window.location.search.substring(1).split('&');
			for (var i in x) {var z=x[i].split('=',2);vars[z[0]] = unescape(z[1]);}
				var x=['frompage','topage','page','webpage','section','subsection','subsubsection','page1','page2','page3','page4','page5','page6','page7','page8','page9','page10'];
			for (var i in x) {

				//var y = document.getElementsByClassName(x[i]);
				//for (var j=0; j<y.length; ++j) y[j].textContent = vars[x[i]];
			}
			var y = document.getElementsByClassName('section');
			for(var j = 0; j < y.length; j++)  
			{  
		         // if current page equals total pages  
		         if(vars[x[2]]>1){
		         	y[j].innerHTML = vars['page'+(vars[x[2]]-1)];
		         }
		     }
		 }
		</script>
	</body>
	</html>