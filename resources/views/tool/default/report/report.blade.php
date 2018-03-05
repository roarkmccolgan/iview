<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="{{session('url')}}/css/templates/normalize.css">
	<link rel="stylesheet" href="{{session('url')}}/css/templates/default/report_{{session('product.id')}}.css?id=2">
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
		@if(isset($introduction))
		<div class="introduction">
			<h2>{{trans('general.introduction')}}</h2>
			{!!$introduction!!}
		</div>
		@endif
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
			<div style="position: absolute; top:0mm; right: {{$section['pageimage'] ? '-45mm':'-50mm' }}; width: 130mm; height: 3mm; background-color: {{$section['color']}}"></div>
			@endif
			@if($section['pb'])
			<div class="spacer"></div>
			@endif
			@if($section['hidetitle'])
			<h2 class="{{$section['seckey']}}">{{$section['title']}}</h2>
			@endif
			@if($section['hiderating']!=true)
				<h4>{{$section['rating']}}</h4>
			@else
				<div class="spacer"></div>
			@endif
			@if($section['introduction'])
			{!!$section['introduction']!!}
			@endif
			@if($section['chart'])
				<div class="graph"><canvas id="{{str_replace("-", "", $section['seckey'])}}-chart" width="350px" height="300px"></canvas></div>
			@endif
			{!!$section['paragraph']!!}
		</div>
		@endforeach
		<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"></script>
		<script src={{ asset('js/vendor/Chart.min.js') }} charset=utf-8></script>
		<script type="text/javascript">
			$(function() {
				//newcharts
				
				@foreach($sections as $key=>$section)
				@if($section['chart'])
				var {{str_replace("-", "", $section['seckey'])}}data = {!!$section['chart']!!};
				console.log({{str_replace("-", "", $section['seckey'])}}data);
				// get bar chart canvas
				var {{str_replace("-", "", $section['seckey'])}} = document.getElementById('{{str_replace("-", "", $section['seckey'])}}-chart').getContext("2d");

					// draw bar chart
					{{str_replace("-", "", $section['seckey'])}} = new Chart({{str_replace("-", "", $section['seckey'])}}).Bar({{str_replace("-", "", $section['seckey'])}}data,{
						animation: false,
						barShowStroke: false,
						scaleLineColor: 'transparent',
						//scaleFontColor: '#fff',
						scaleShowLabels: false,
						scaleShowHorizontalLines: false,
						scaleShowVerticalLines: false,
						showScale: true,
						onAnimationComplete: function () {
							var that = this;
							var ctx = this.chart.ctx;
							ctx.font = "bold 14px 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif";
							ctx.fillStyle = 'grey',
							ctx.textAlign = "center";
							ctx.textBaseline = "bottom";

							this.datasets.forEach(function (dataset) {
								dataset.bars.forEach(function (bar) {
									var y = bar.y - 4;
									if(y<15){
										y = 30;
										ctx.fillStyle = 'white';
									}else{
										y = bar.y - 4;
										ctx.fillStyle = 'grey';
									}
									ctx.fillText(bar.value+"%", bar.x, y);
									//ctx.fillText(bar.label, bar.x, that.chart.height -2);
								});
							})
						}
					});
					{{str_replace("-", "", $section['seckey'])}}.datasets[0].bars[{{ $section['sectionRating'] }}].fillColor = "{{ $section['color'] }}"; 
					{{str_replace("-", "", $section['seckey'])}}.update(); 
					console.log({{str_replace("-", "", $section['seckey'])}});
				@endif	
				@endforeach
				
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
			if(graphs.length>0){
				var num = graphs.length;
				function chartReady(event, chart){
					num--;
					if(num==0){
						console.log('done');
						window.status = 'chartrendered';
					}
				}
			}else{
				window.status = 'chartrendered';
			}
			setTimeout(function(){
				window.status = 'chartrendered';
			}, 15000);
		</script>
	</body>
</html>