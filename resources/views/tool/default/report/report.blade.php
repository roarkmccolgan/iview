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
		h2,h3{
			font-family: Arial;
			font-weight: lighter;
			font-size: 18pt;
			color: #0a85c7;
			margin: 0;
			margin-top: 5mm;
		}
		h3{
			margin-top: 2mm;
			font-size: 14pt;
			color: #0a85c7;
		}
		p{
			font-family: Arial;
			font-size: 8pt;
			color: #686868;
			line-height: 12pt;
			text-align: justify;
		}
		li{
			font-family: Arial;
			font-style: italic;
			font-size: 9pt;
			font-weight: bold;
			color: #0a85c7;
		}
		.pb {page-break-before: always;}
	</style>
	<body style="margin: 0; padding: 0;">
		@if(isset($introImage))
		<table class="" style="width: 100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2"><img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$introImage}}" style="display: block; width: 210mm; margin-top: -5mm"><!-- report1.jpg --></td>
			</tr>
		</table>
		@endif
		
		@if($introChart)
		<div style="float: left; margin-left: 10mm; width: 90mm;">
			<h2>Introduction</h2>
			{!!trans(session('product.alias').'.introduction', ['result'=>$introRating])!!}
		</div>
		<div id="stocks-div" class="graph" style="height: 110mm; width:85mm; margin:5mm; background-color: red; float: left">
			
		</div>
		@columnchart('Stocks', 'stocks-div')
		@else
		<div style="margin-left: 10mm; width: 190mm;">
			<h2>Introduction</h2>
			{!!trans(session('product.alias').'.introduction',['result'=>$introRating])!!}
		</div>
		@endif
		@foreach($sections as $key=>$section)
		<div class="{{$section['pb']?'pb ':''}}section group" style="margin-left: 10mm; width: 190mm;">
			<h2 class="{{$section['seckey']}}">{{$section['title']}}</h2>
			<h4>{{$section['rating']}}</h4>
			@if($section['image'])
			<img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$section['image']}}" class="{{$section['imagefloat']}}" alt="">
			@endif
			{!!$section['paragraph']!!}
		</div>
		@endforeach
		<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"></script>
		<script type="text/javascript">
			$(function() {
				var height = 0;
				$('.section').each(function(index){
					if($(this).hasClass('pb')){
						var elHeight = $(this).height();
						if(height+elHeight>700){
							$(this).addClass('pb');
							height=0;
						}else{
							height+=elHeight;
						}
					}else{
						height=$(this).height();
					}
				});
			});
			var graphs = document.getElementsByClassName("graph");
			if(graphs.length>0)
				function chartReady(event, chart){
					window.status = 'chartrendered';
			}else{
				window.status = 'chartrendered';
			}
		</script>
	</body>
</html>