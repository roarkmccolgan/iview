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
	<script type="text/javascript">
		var colors = {
			'introduction': 'bg-transparent',
			'overall': 'bg-transparent',
			'strategic-planning': 'bg-sap-green',
			'processes': 'bg-sap-blue',
			'customer-relationships': 'bg-sap-purple',
			'suppliers-distributors': 'bg-grey',
			'people-experience': 'bg-sap-orange'
		};
		function string_to_slug (str) {
			str = str.replace(' and ', '-');
			str = str.replace(' AND ', '-');
			str = str.replace(' ', '-');
			str = str.toLowerCase();

			return str;
		}
		function subst() {
			var vars = {};
			var query_strings_from_url = document.location.search.substring(1).split('&');
			for (var query_string in query_strings_from_url) {
				if (query_strings_from_url.hasOwnProperty(query_string)) {
					var temp_var = query_strings_from_url[query_string].split('=', 2);
					vars[temp_var[0]] = decodeURI(temp_var[1]);
				}
			}
			var css_selector_classes = ['page', 'frompage', 'topage', 'webpage', 'section', 'subsection', 'date', 'isodate', 'time', 'title', 'doctitle', 'sitepage', 'sitepages'];
			for (var css_class in css_selector_classes) {
				if (css_selector_classes.hasOwnProperty(css_class)) {
					var element = document.getElementsByClassName(css_selector_classes[css_class]);
					for (var j = 0; j < element.length; ++j) {
						element[j].textContent = vars[css_selector_classes[css_class]] ? vars[css_selector_classes[css_class]] : 'Not found '+css_selector_classes[css_class];
					}
				}
			}
			document.getElementsByClassName('swopimage')[0].style.backgroundImage = 'url({{ asset('images/tools/15/') }}/'+ string_to_slug(vars['section']) +'_banner.jpg)';
			
			var section = document.getElementsByClassName('section')[0];
			var line = document.getElementsByClassName('line')[0];
			line.classList.remove('bg-transparent','bg-sap-green','bg-sap-purple','bg-grey','bg-sap-orange');
			line.classList.add(colors[string_to_slug(vars['section'])]);
			//document.getElementsByClassName('swopimage')[0].innerText = 'url({{ asset('images/tools/15/') }}/'+ string_to_slug(vars['section']) +'_banner.jpg)';
		}
	</script>
</head>
<body onload="subst()">
<div class="swopimage w-full text-white bg-center bg-cover bg-no-repeat overflow-hidden bg-blackblack" style="height: {{ App::environment('local') ? '21mm' : '27mm'}};">
	<div class="w-5/6 mx-auto">
		<h1 class="section font-thin uppercase text-{{ App::environment('local') ? '2' : ''}}xl pt-6">Click to be Agile</h1>
		<div class="line w-32 overflow-hidden h-1 rounded my-2"></div>
	</div>
</div>
</body>
</html>