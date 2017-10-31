<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>PDF Report</title>
	<link rel="stylesheet" href="/css/templates/normalize.css">
</head>
<body style="margin: 0; padding: 0; width: 210mm; height: 48mm;" onload="subst()">
	<img class="headerimg" src="/images/tools/6/report_header.png" alt="" style="position: absolute; top: 0; left: 0; width: 210mm; height: 48mm;">
	<script>
	function subst() {
		var vars={};
		var x=window.location.search.substring(1).split('&');
		for (var i in x) {var z=x[i].split('=',2);vars[z[0]] = unescape(z[1]);}
			var x=['frompage','topage','page','webpage','section','subsection','subsubsection','page1','page2','page3','page4','page5','page6','page7','page8','page9','page10','page_offset'];
		for (var i in x) {

			//var y = document.getElementsByClassName(x[i]);
			//for (var j=0; j<y.length; ++j) y[j].textContent = vars[x[i]];
		}
		var y = document.getElementsByClassName('headerimg');
		if(vars[x[2]]==vars[x[1]]){
			y[0].src="/images/tools/6/report_header_bt.png";
		}
		if(vars[x[2]]==1){
			y[0].src="/images/tools/6/header1st.png";
		}
		
		
	 }
	</script>
</body>
</html>