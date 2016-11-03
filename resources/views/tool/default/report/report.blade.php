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
		@if(isset($introImage))
		<table class="" style="width: 100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2"><img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$introImage}}" style="display: block; width: 100%;"><!-- report1.jpg --></td>
			</tr>
		</table>
		@endif
		<div class="spacer"></div>
		@if($introChart)
		<div style="float: left; margin-left: 20mm; width: 95mm;">
			<h2>Introduction</h2>
			{!!trans(session('product.alias').'.introduction', ['result'=>$introRating])!!}
		</div>
		<div id="stocks-div" class="graph" style="height: 110mm; width:85mm; margin:5mm; background-color: red; float: left">
			
		</div>
		@columnchart('Stocks', 'stocks-div')
		@else
		<div style="margin-left: 20mm; width: 150mm;">
			<h2>Introduction</h2>
			{!!trans(session('product.alias').'.introduction',['result'=>$introRating])!!}
		</div>
		@endif
		@foreach($sections as $key=>$section)
		<div class="{{$section['pb']?'pb ':''}}section group" style="margin-left: 20mm; width: {{$section['image'] ? '170mm;':'140mm;' }};">
			@if($section['pb'])
			<div class="spacer"></div>
			@endif
			@if($section['hidetitle'])
			<h2 class="{{$section['seckey']}}">{{$section['title']}}</h2>
			@endif
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