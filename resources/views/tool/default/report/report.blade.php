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
	<body style="margin: 0; padding: 0;">
		
		<div class="introduction">
			<h2>Introduction</h2>
			{!!trans(session('product.alias').'.introduction')!!}
		</div>
		@foreach($sections as $key=>$section)
		<div class="{{$section['pb'] && !$section['pageimage'] ?'pb ':''}}"></div>
		@if($section['pageimage'])
		<table class="{{$section['pb'] ?'pb ':''}}" style="width: 100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2"><img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$section['pageimage']}}" style="display: block; width: 100%;"><!-- report1.jpg --></td>
			</tr>
		</table>
		@endif
		<div class="section group {{$section['seckey']}}" style="">
			@if($section['designline'])
			<div style="position: absolute; top:0mm; right: {{$section['image'] ? '-45mm':'-50mm' }}; width: 130mm; height: 3mm; background-color: {{$section['color']}}"></div>
			@endif
			@if($section['pb'])
			<div class="spacer"></div>
			@endif
			@if($section['hidetitle'])
			<h2 class="{{$section['seckey']}}">{{$section['title']}}</h2>
			@endif
			
			@endif
			@if($section['image'])
			<img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$section['image']}}" class="{{$section['imagefloat']}}" alt="">
			@endif
			@if($section['graph'])
				<div id="{{$section['seckey']}}-div" class="graph" style="">
					
				</div>
				@columnchart($section['seckey'].'_graph', $section['seckey'].'-div')
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