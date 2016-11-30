<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="description" content="">
    	<meta name="author" content="">
		<title>Report</title>
		<link rel="stylesheet" href="{{session('url')}}/css/templates/normalize.css">
		<link rel="stylesheet" href="{{session('url')}}/css/templates/{{session('template')}}/report_{{session('product.id')}}.css">
	</head>
	<body style="margin: 0; padding: 0;">
		<div class="spacer"></div>
		<div class="introduction">
			<h2>{!!trans(session('product.alias').'.introduction_title')!!}</h2>
			{!!trans(session('product.alias').'.introduction')!!}
		</div>
		<!-- GRAPH PAGE -->
		@foreach($sections as $key=>$section)
		<div class="section group {{$section['seckey']}}" style="">
			@if($section['graph-title'])
			<h4>{{trans(session('product.alias').'.'.$section['seckey'].'.graph-title')}}</h4>
			@endif
			@if($section['graph'])
				<div id="{{$section['seckey']}}-div" class="graph" style="">
					
				</div>
				@columnchart($section['seckey'].'_graph', $section['seckey'].'-div')
			@endif
			@if($section['introduction'])
			{!!$section['introduction']!!}
			@endif
			@if($section['extraCharts'])
				<div class="group"></div>
				@foreach($section['extraCharts'] as $chartKey=>$chart)
				<div class="fifty">
					<h4>{{trans(session('product.alias').'.'.$section['seckey'].'.'.$chartKey.'-title')}}</h4>
					<div id="{{$section['seckey']}}-extra-{{$chartKey}}" class="graph {{$chartKey}}" style="">
						
					</div>
					@columnchart($chartKey, $section['seckey'].'-extra-'.$chartKey)
				</div>
				@endforeach
				<div class="group"></div>
			@endif
		</div>
		@endforeach
		<div class="pb"></div>
		<!-- END GRAPH PAGE -->
		<!-- Overall PAGE -->
		@if($introImage)
		<table class="" style="width: 100%;" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2"><img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$introImage}}" style="display: block; width: 100%;"></td>
			</tr>
		</table>
		@endif
		@foreach($sections as $key=>$section)
			<div class="section group {{$section['seckey']}}" style="">
			@if($section['seckey']=='overall')
				<h2>{{$section['title']}}</h2>
			@else
				<h2 class="{{$section['seckey']}} lower">{{$section['title']}}</h2>
				<table style="width: 100%; margin-top: 4mm" cellpadding="1" cellspacing="0">
					<tr>
						<td style="width: 20mm" rowspan="2">
							<img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{config('baseline_'.session('product.id').'.'.$section['seckey'].'.types.'.session('result.'.$section['seckey'].'.rating').'.position')}}.png" style="width: 17mm">
						</td>
						<td style="vertical-align: top">
							<span class="ranking-label">{{trans('general.ranking')}}:</span>
							<span class="ranking">{{$section['rating']}}</span>
						</td>
					</tr>
					<tr>
						<td style="vertical-align: top">
							<!-- {!!$section['paragraph']!!} -->
						</td>
					</tr>
				</table>
			@endif
			</div>
		@endforeach
		<div class="pb"></div>
		<!-- END Overall PAGE -->
		<!-- Questions PAGEs -->
		<div class="spacer"></div>
		@foreach($sections as $key=>$section)
			<div class="question_section group" style="">
				<h2>{{trans(session('product.alias').'.question-title')}}</h2>
				<div class="spacer"></div>
				{!!trans(session('product.alias').'.question-intro',['rating'=>$introRating])!!}
			@foreach($questions as $catKey=>$category)
				@if($catKey!=='screeners')
					@foreach($category['pages'] as $pageKey=>$page)
						@foreach($page['questions'] as $qkey=>$question)
							@if(!is_array($question['selected']))
							<?php
								$answerArr = explode('|', $question['selected']);
	                            $answer = $answerArr[0];
	                            $selected = $answerArr[1];
	                            $saveOptKey = false;
	                            foreach ($question['options'] as $optkey => $option) {
	                            	if($answer==$option['label']){
	                            		$position = $option['position'][session('result.'.$catKey.'.rating')];
	                            		$saveOptKey = $optkey;
	                            	}
	                            }
	                            $compare = "";
	                            $sectionRating = session('result.'.$catKey.'.rating');
	                            if($sectionRating!=='stage5'){
	                            	$ratings = config('baseline_'.session('product.id').'.'.$catKey.'.types');
	                            	while (key($ratings) !== $sectionRating){
	                            		next($ratings);
	                            	}
	                            	next($ratings);
	                            	$nextRating = key($ratings);
	                            	$compare = "When compared with the next level, ".$nextRating." you would be positioned as ".$question['options'][$saveOptKey]['position'][$nextRating];
	                            }
							?>
							<div class="question group" style="">
								<table style="width: 100%; margin-top: 4mm" cellpadding="1" cellspacing="0">
									<tr>
										<td style="width: 10mm; vertical-align: top" rowspan="3">
											<img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$position}}_sml.png" style="width: 8mm">
										</td>
										<td style="vertical-align: top">
											<span class="question-label">{{$question['name']}}:</span>
											<span class="question">{{$question['question']}}</span>
										</td>
									</tr>
									<tr>
										<td style="vertical-align: top">
											<span class="answer-label">A:</span>
											<span class="answer">{{$answer}}</span>
										</td>
									</tr>
									<tr>
										<td style="vertical-align: top" class="compare">
											{{$compare}}
										</td>
									</tr>
								</table>
							</div>
							@endif
						@endforeach
					@endforeach
				@endif
			@endforeach
			</div>
		@endforeach
		<!-- END questions PAGE -->

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