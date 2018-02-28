<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="{{session('url')}}/css/templates/normalize.css">
		<link rel="stylesheet" href="{{session('url')}}/css/templates/btmcafee/report_{{session('product.id')}}.css">
	</head>
	<body>
		<img src="{{session('url')}}/images/tools/6/header2nd.png" alt="" style="width: 210mm; margin-left: -20mm;">
		<h2>Executive Summary</h2>
		<p>
			Thank you for completing the IDC Security Assessment, sponsored by BT and McAfee. This assessment has been developed to provide companies with comparative information regarding the operational maturity of their security functions, backed up by independent research developed and carried out by IDC. The survey collected responses from security influencers or budget holders across 450 organisations globally to understand the differences between companies when it comes to security technologies, integration and manageability, and steps towards automation.
		</p>
		<p>
			IDC scored individual responses and created a comparison framework, built on grouping organisations into five different levels of operational readiness based on their approach to security strategy as well as management and process automation, as seen in Figure 1. Organisations don't have to be at the top of the scale to start seeing benefits. Any improvement can bring about tangible benefits to IT and the business by increasing agility, resilience and innovation through better confidence to adjust strategy to meet changing market conditions.
		</p>
		<img src="{{session('url')}}/images/tools/6/stages.png" style="width: 158mm" alt="">
		<div class="pb"></div>
		{!!$introduction!!}
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