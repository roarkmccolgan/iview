<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="{{session('url')}}/css/templates/normalize.css">
		<link rel="stylesheet" href="{{session('url')}}/css/templates/bubblegum/report_{{session('product.id')}}.css">
	</head>
	<body>
		@if($introImage)
		<table class="" style="width: 100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2"><img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$introImage}}" style="display: block; width: 100%;"><!-- report1.jpg --></td>
			</tr>
		</table>
		@endif
		<div class="spacer"></div>
		<div class="introduction">
			{!!$introduction!!}
		</div>
		<div class="spacer"></div>
		{!!$sectionCopy!!}
		{!!$summary!!}
		
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