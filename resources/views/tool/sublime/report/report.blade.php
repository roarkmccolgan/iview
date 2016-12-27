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
	<body>
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
		<table class="" style="width: 100%;margin-top: -{{config('baseline_'.session('product.id').'.margin-top')}}mm" cellpadding="0" cellspacing="0">
			<tr>
				<td colspan="2"><img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$introImage}}" style="display: block; width: 100%;"></td>
			</tr>
		</table>
		@endif
		@foreach($sections as $key=>$section)
			<div class="section group {{$section['seckey']}}" style="">
			@if($section['seckey']=='overall')
				<h2>{{trans(session('product.alias').'.performancerankingbycategory')}}</h2>
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
							{!!trans(session('product.alias').'.'.$section['seckey'].'.'.config('baseline_'.session('product.id').'.'.$section['seckey'].'.types.'.session('result.'.$section['seckey'].'.rating').'.position'))!!}
						</td>
					</tr>
				</table>
			@endif
			</div>
		@endforeach
		<!-- END Overall PAGE -->
		<!-- Questions PAGEs -->
		@foreach($sections as $key=>$section)
			@if($section['seckey']!=='overall')
			<div class="question_section group" style="">
				<h2>{{$section['title']}} {{trans(session('product.alias').'.question-title')}}</h2>
				<div class="spacer"></div>
				{!!trans(session('product.alias').'.question-intro',['rating'=>$introRating])!!}
			@foreach($questions[$section['seckey']]['pages'] as $pageKey=>$page)
					
						@foreach($page['questions'] as $qkey=>$question)
							<?php
								if(is_array($question['selected'])){
									if(isset($question['calc'])){
	                                    if($question['calc']['type']=='average'){
	                                    	$minmax = [
												'stage1'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 2,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 2.1,
		                                    			'high' => 2.6,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 2.7,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage2'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 2.2,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 2.3,
		                                    			'high' => 2.7,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 2.8,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage3'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 2.8,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 2.9,
		                                    			'high' => 3.6,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 3.7,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage4'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 3.6,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 3.7,
		                                    			'high' => 4.2,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 4.3,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage5'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 3.9,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 4,
		                                    			'high' => 4.5,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 4.6,
		                                    			'high' => 5,
		                                    		]
		                                    	]
	                                    	];
	                                        $ave = [];
	                                        foreach ($question['selected'] as $selected) {
	                                            $selected = explode('|', $selected);
	                                            $selected = $selected[1];
	                                            $ave[]=$selected;
	                                        }
	                                        $val = round(array_sum($ave) / count($ave),1);
	                                        $position = '';

	                                        foreach ($minmax[session('result.'.$section['seckey'].'.rating')] as $posKey => $params) {
	                                        	if($val>=$params['low'] && $val<=$params['high']){
	                                        		$position = $posKey;
	                                        		$saveOptKey = $posKey;
	                                        	}
	                                        }

	                                    }elseif($question['calc']['type']=='normalize'){
	                                    	$minmax = [
												'stage1'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 2,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 2.1,
		                                    			'high' => 2.6,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 2.7,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage2'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' =>2.8,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 2.9,
		                                    			'high' => 3.5,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 3.6,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage3'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 3.3,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 3.4,
		                                    			'high' => 3.9,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 4,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage4'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 3.6,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 3.7,
		                                    			'high' => 4.2,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 4.3,
		                                    			'high' => 5,
		                                    		]
		                                    	],
		                                    	'stage5'=>[
		                                    		'behind' => [
		                                    			'low' => 0,
		                                    			'high' => 3.9,
		                                    		],
		                                    		'inline' => [
		                                    			'low' => 4,
		                                    			'high' => 4.4,
		                                    		],
		                                    		'ahead' => [
		                                    			'low' => 4.5,
		                                    			'high' => 5,
		                                    		]
		                                    	]
	                                    	];
	                                        $norm = 0;
	                                        foreach ($question['selected'] as $selected) {
	                                            $selected = explode('|', $selected);
	                                            $selected = $selected[1];
	                                            $norm+=$selected;
	                                        }
	                                        $val = round(($norm/$question['calc']['value'])*count($question['selected']),1);
	                                        $position = '';

	                                        foreach ($minmax[session('result.'.$section['seckey'].'.rating')] as $posKey => $params) {
	                                        	if($val>=$params['low'] && $val<=$params['high']){
	                                        		$position = $posKey;
	                                        		$saveOptKey = $posKey;
	                                        	}
	                                        }
	                                    }
	                                }else{
	                                    $valHold = 0;
	                                    foreach ($question['selected'] as $selected) {
	                                        $selected = explode('|', $selected);
	                                        $selected = $selected[1];
	                                        $valHold+=$selected;
	                                    }
	                                    $val = $valHold;
	                                }
	                                $compare = "";
		                            $sectionRating = session('result.'.$section['seckey'].'.rating');
		                            if($sectionRating!=='stage5'){
		                            	$ratings = config('baseline_'.session('product.id').'.'.$section['seckey'].'.types');
		                            	while (key($ratings) !== $sectionRating){
		                            		next($ratings);
		                            	}
		                            	next($ratings);
		                            	$nextRating = key($ratings);
		                            	foreach ($minmax[$nextRating] as $ratKey => $rating) {
		                            		if($val>=$rating['low'] && $val<=$rating['high']){
		                            			$nextPos = $ratKey;
		                            		}
		                            	}
		                            	$compare = "When compared with the next level, <strong>".$nextRating."</strong> you would be positioned as <span class=\"".$nextPos."\">".$nextPos."</span>";
		                            }
								}else{
									$answerArr = explode('|', $question['selected']);
		                            $answer = $answerArr[0];
		                            $selected = $answerArr[1];
		                            $saveOptKey = false;
		                            foreach ($question['options'] as $optkey => $option) {
		                            	if($answer==$option['label']){
		                            		$position = $option['position'][session('result.'.$section['seckey'].'.rating')];
		                            		$saveOptKey = $optkey;
		                            	}
		                            }
		                        
		                            $compare = "";
		                            $sectionRating = session('result.'.$section['seckey'].'.rating');
		                            if($sectionRating!=='stage5'){
		                            	$ratings = config('baseline_'.session('product.id').'.'.$section['seckey'].'.types');
		                            	while (key($ratings) !== $sectionRating){
		                            		next($ratings);
		                            	}
		                            	next($ratings);
		                            	$nextRating = key($ratings);
		                            	$compare = "When compared with the next level, <strong>".trans(session('product.alias').'.'.$nextRating)."</strong> you would be positioned as <span class=\"".$question['options'][$saveOptKey]['position'][$nextRating]."\">".$question['options'][$saveOptKey]['position'][$nextRating]."</span>";
		                            }
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
											@if(is_array($question['selected']))
												<table>
												<?php $count=0; ?>
												<tr>
												@foreach($question['selected'] as $selKey=>$sel)
													<?php
													$selected = explode('|', $sel);
	                                            	$answer = $selected[0];
													?>
													@foreach($question['options'] as $groupKey=>$group)
														@foreach($group['options'] as $optkey=>$opt)
															@if($group['name']==$selKey && $opt['label']==$answer)
																<?php $count++; ?>
																<td style="vertical-align: top">
																	<table class="grouptable">
																		<tr>
																			<td style="vertical-align: top; width: 3mm">
																				<img src="{{session('url')}}/images/tools/{{session('product.id')}}/{{$opt['position'][session('result.'.$section['seckey'].'.rating')]}}_sml.png" style="width: 3mm">
																			</td>
																			<td>
																				{{$group['label']}}<br/>
																				<span class="answer">{{$answer}}</span>
																			</td>
																		</tr>
																	</table>
																</td>
																@if($count%3==0)
													</tr>
													</tr>
													@endif
															@endif
														@endforeach
													@endforeach
												@endforeach
												</table>
											@else
												<span class="answer">
												{{$answer}}
												</span>
											@endif
										</td>
									</tr>
									<tr>
										<td style="vertical-align: top" class="compare">
											{!!$compare!!}
										</td>
									</tr>
									<tr>
										<td style="vertical-align: top" colspan="2">
											{!!trans(session('product.alias').'.questions.'.$qkey.'.'.$position)!!}
										</td>
									</tr>
								</table>
							</div>
						@endforeach
			@endforeach
			@endif
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