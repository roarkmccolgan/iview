@extends('_layouts.framework')

@section('head')
@parent
	<link rel="stylesheet" type="text/css" href="{{ asset('js/jquery.gritter/css/jquery.gritter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.switch/css/bootstrap3/bootstrap-switch.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/jquery.select2/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.slider/css/bootstrap-slider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/intro.js/introjs.css') }}">
@stop

@section('content')

<!-- DateRange Selector -->
<div class="row">
	<div class="col-md-3 col-md-offset-5 text-center">
		<div class="form-group">
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend input-group"><span class="add-on input-group-addon primary"><span class="glyphicon glyphicon-th"></span></span>
						<form id="setDateRange" role="form" action="{{ url('/admin/')}}" method="POST" >
						<input type="hidden" name="tool_id" value="{{$tool->id}}">
						<input type="hidden" id="from" name="from" value="">
						<input type="hidden" id="to" name="to" value="">
						{{ csrf_field() }}
						<input id="reporting" type="text" style="width: 200px" name="reporting" value="{{$startDate}} - {{$endDate}}" class="form-control">
						</form>
					</div>
				</div>
			</div>
		</div>
		@if($customDate)
		<a href="/admin/">reset dates</a>
		@endif
	</div>
</div>
<!-- Rest of Dash -->
<div class="cl-mcont">
	<div class="stats_bar">
		<!-- <div data-step="2" data-intro="&lt;strong&gt;Beautiful Elements&lt;/strong&gt; &lt;br/&gt; If you are looking for a different UI, this is for you!." class="butpro butstyle">

		<div class="stat"><span class="spk1">
		  <canvas style="display: inline-block; width: 74px; height: 16px; vertical-align: top;" width="74" height="16"></canvas></span></div>
		</div> -->
		<div data-step="2" data-intro="&lt;strong&gt;Beautiful Elements&lt;/strong&gt; &lt;br/&gt; If you are looking for a different UI, this is for you!." class="butpro butstyle">
			<div class="sub">
				<h2>SESSIONS</h2><span>{{$analyticsResults['total_results'][0][0]}}</span>
			</div>
			<div class="stat"><span class="up"> 20,7%</span></div>
		</div>
		<div class="butpro butstyle">
			<div class="sub">
				<h2>UNIQUE VISITS</h2><span>{{$analyticsResults['total_results'][0][1]}}</span>
			</div>
			<div class="stat"><span class="equal">{{round(($analyticsResults['total_results'][0][1]/$analyticsResults['total_results'][0][0])*100)}}%</span></div>
		</div>
		<div class="butpro butstyle">
			<div class="sub">
				<h2>Completion Rate</h2><span>{{round(($complete_total/$daily_total)*100)}}%</span>
			</div>
			<div class="stat"><span class="spk3"></span></div>
			<!-- <div class="stat"><span class="spk2"></span></div> -->
		</div>
		<!-- <div class="butpro butstyle">
			<div class="sub">
				<h2>Drop Offs</h2><span>184</span>
			</div>
			<div class="stat"><span class="spk3"></span></div>
		</div> -->
	</div>
	<div class="row dash-cols">
		<div class="col-sm-6 col-md-6">
			<!-- <pre>
				{{print_r($analyticsResults)}}				
			</pre> -->
			<div class="block">
				<div class="header no-border">
					<h2>Visits</h2>
					<h3>{{count($analyticsResults['daily_results'])}} days</h3>
				</div>
				<div data-step="3" data-intro="&lt;strong&gt;Unique Styled Plugins&lt;/strong&gt; &lt;br/&gt; We put love in every detail to give a great user experience!." class="content blue-chart">
					<div id="site_statistics" style="height:180px;"></div>
					<div class="text-center" style="color: #6EB6F6">Day of month</div>
				</div>
				<div class="content">
					<div class="stat-data">
						<div class="stat-blue">
							<h2>{{number_format($daily_total)}}</h2><span>Total Users</span>
						</div>
					</div>
					<div class="stat-data">
						<div class="stat-number">
							<div>
								<h2>{{$analyticsResults['total_results'][0][1]}}</h2>
							</div>
							<div>New Users<br><!-- <span>(Daily)</span> --></div>
						</div>
						<div class="stat-number">
							<div>
								<h2>{{$analyticsResults['total_results'][0][5]}}</h2>
							</div>
							<div>Page Views<br><!-- <span>(Daily)</span> --></div>
						</div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<div class="block">
				<div class="header no-border">
					<h2>Assessment Completions</h2>
					<h3>{{count($analyticsResults['complete_results'])}} days</h3>
				</div>
				<div class="content red-chart">
					<div id="site_statistics2" style="height:180px;"></div>
					<div class="text-center" style="color: #FFA487">Day of month</div>
				</div>
				<div class="content">
					<div class="stat-data">
						<div class="stat-orange">
							<h2>{{$lead_total}}</h2><span>Completion{{$lead_total > 1 ? 's':''}}<br><span>({{count($analyticsResults['complete_results'])}} days)</span></span>
						</div>
					</div>
					<div class="stat-data">
						<div class="stat-number">
							<div>
								<h2>{{$alltime_total}}</h2>
							</div>
							<div>Completion{{$alltime_total > 1 ? 's':''}}<br><span>(All Time)</span></div>
						</div>
						<!--div class="stat-number">
							<div>
								<h2>{{$complete_total}}</h2>
							</div>
							<div>Assessment Completions<br><span>(Without completing the form, {{count($analyticsResults['complete_results'])}} days)</span></div>
						</div-->
					</div>
					<div class="clear"></div>
				</div>
				<div class="header no-border">
                  <h2>Tracking Codes</h2>
                </div>
				<div class="content no-padding">
					<table class="red">
						<thead>
							<tr>
								<th>Code</th>
								<th>Lang</th>
								<th class="right"><!-- <span>25%</span> -->Views</th>
								<th class="right"><!-- <span>29%</span> -->Completions</th>
							</tr>
						</thead>
						<tbody class="no-border-x">
						@if ($tool->trackers->count()>0)
							@foreach($tool->trackers as $tracker)
							<tr>
								<td style="width:40%;"><i class="fa fa-user"></i> {{$tracker->name}} ({{$tracker->code}})</td>
								<td>{{$tracker->language->abbreviation}}</td>
								<td class="text-right">
									{{$tracker->dateViews}} <!--small>({{$tracker->views}})</small-->
								</td>
								<td class="text-right">
									{{$tracker->dateCompletions}} <!--small>({{$tracker->completions}})</small-->
								</td>
							</tr>
							@endforeach
						@else
							<tr>
								<td class="text-center" colspan="4">No codes setup, <a href="{{url('/admin/tracking/new')}}">add one</a></td>
							</tr>
						@endif
						</tbody>
					</table>
				</div>

			</div>
		</div>
	</div>
	<div class="row dash-cols">
		<div class="col-sm-6 col-md-6">
			<div class="block">
				<div class="header">
					<h2>Referrals <span class="pull-right">Top 10</span></h2>
					
				</div>
				<div class="content no-padding">
					<ul class="items">
						<?php
						$refTotal = 0;
						?>
						@foreach($analyticsResults['referrers_results'] as $referrer)
						<?php $refTotal+=$referrer[1]; ?>
						<li><i class="fa fa-bullhorn"></i>{{$referrer[0]}} <span class="pull-right value">{{$referrer[1]}}</span></li>
						@endforeach
					</ul>
				</div>
				<div class="total-data bg-blue"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
					<h2>Total <span class="pull-right">{{$refTotal}}</span></h2></a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#countries" data-toggle="tab">Countries</a></li>
				<li><a href="#devices" data-toggle="tab">Devices</a></li>
			</ul>
			<div class="tab-content">
				<div id="countries" class="tab-pane active cont">
					<h2>Stats by Country</h2>
					<div>
						<table class="no-border">
							<thead class="no-border">
								<tr>
									<th style="width:80%;">Country</th>
									<th class="text-right">Vistis</th>
								</tr>
							</thead>
							<tbody class="no-border-x no-border-y">
								@foreach($analyticsResults['country_results'] as $key=>$country)
								<tr>
									<td>{{$country[0]}}</td>
									<td class="text-right">{{$country[1]}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
				<div id="devices" class="tab-pane cont">
					<h2 class="text-center">Device Usage</h2>
					<div id="piec" style="height:300px; width: 100%; margin-top:25px;"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="row dash-cols">
		<div class="col-sm-12 col-md-12">
			<div class="block">
				<div class="header">
					<h2>Page Drop Off <span class="pull-right">Top 10</span></h2>
					<h3>{{count($analyticsResults['daily_results'])}} days</h3>
				</div>
				<div class="content no-padding">
					<table class="no-border">
						<thead class="no-border">
							<tr>
								<th style="width:80%;">Page</th>
								<th style="width:10%;">Total</th>
								<th style="width:10%;" class="text-right">% New Sessions</th>
							</tr>
						</thead>
						<tbody class="no-border-x no-border-y">
							@foreach($analyticsResults['dropoff_results'] as $dropoff)
								<tr>
									<td>{{$dropoff[0]}}</td>
									<td>{{$dropoff[1]}}</td>
									<td class="text-right">{{round($dropoff[2], 1, PHP_ROUND_HALF_UP)}}</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@stop

@section('javascript')
@parent
<script type="text/javascript" src="{{ asset('js/cleanzone.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.gritter/js/jquery.gritter.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/skycons/skycons.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.sparkline/jquery.sparkline.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.easypiechart/jquery.easypiechart.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/intro.js/intro.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flot/jquery.flot.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flot/jquery.flot.pie.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flot/jquery.flot.resize.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/moment.js/min/moment.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/bootstrap.daterangepicker/daterangepicker.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/page-form-elements-tool.js')}}"></script>
<script type="text/javascript" src="{{ asset('js/page-dashboard.js')}}"></script>
@stop

@section('load')
    App.dashboard();
  	App.formElements();
@stop