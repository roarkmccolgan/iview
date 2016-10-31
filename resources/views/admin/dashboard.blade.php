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
	<div class="col-md-3 col-md-offset-5">
		<div class="form-group">
			<div class="control-group">
				<div class="controls">
					<div class="input-prepend input-group"><span class="add-on input-group-addon primary"><span class="glyphicon glyphicon-th"></span></span>
						<input id="reservation" type="text" style="width: 200px" name="reservation" value="09/01/2016 - 09/23/2016" class="form-control">
					</div>
				</div>
			</div>
		</div>
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
				<h2>VISITS</h2><span>1254</span>
			</div>
			<div class="stat"><span class="up"> 20,7%</span></div>
		</div>
		<div class="butpro butstyle">
			<div class="sub">
				<h2>UNIQUE VISITS</h2><span>18</span>
			</div>
			<div class="stat"><span class="equal"> 0%</span></div>
		</div>
		<div class="butpro butstyle">
			<div class="sub">
				<h2>Completion Rate</h2><span>83%</span>
			</div>
			<div class="stat"><span class="spk3"></span></div>
			<!-- <div class="stat"><span class="spk2"></span></div> -->
		</div>
		<div class="butpro butstyle">
			<div class="sub">
				<h2>Drop Offs</h2><span>184</span>
			</div>
			<div class="stat"><span class="spk3"></span></div>
		</div>
	</div>
	<div class="row dash-cols">
		<div class="col-sm-6 col-md-6">
			<div class="block">
				<div class="header no-border">
					<h2>Visits</h2>
					<h3>30 days</h3>
				</div>
				<div data-step="3" data-intro="&lt;strong&gt;Unique Styled Plugins&lt;/strong&gt; &lt;br/&gt; We put love in every detail to give a great user experience!." class="content blue-chart">
					<div id="site_statistics" style="height:180px;"></div>
				</div>
				<div class="content">
					<div class="stat-data">
						<div class="stat-blue">
							<h2>1,254</h2><span>Total Visits</span>
						</div>
					</div>
					<div class="stat-data">
						<div class="stat-number">
							<div>
								<h2>83</h2>
							</div>
							<div>Total hits<br><span>(Daily)</span></div>
						</div>
						<div class="stat-number">
							<div>
								<h2>57</h2>
							</div>
							<div>Views<br><span>(Daily)</span></div>
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
					<h3>30 days</h3>
				</div>
				<div class="content red-chart">
					<div id="site_statistics2" style="height:152px;"></div>
				</div>
				<div class="content no-padding">
					<table class="red">
						<thead>
							<tr>
								<th>Code</th>
								<th class="right"><!-- <span>25%</span> -->Views</th>
								<th class="right"><!-- <span>29%</span> -->Completions</th>
							</tr>
						</thead>
						<tbody class="no-border-x">
							<tr>
								<td style="width:40%;"><i class="fa fa-user"></i> Partner A (EASXDES)</td>
								<td class="text-right">20</td>
								<td class="text-right">3</td>
							</tr>
							<tr>
								<td><i class="fa fa-user"></i> Partner B (FDGETSY)</td>
								<td class="text-right">3</td>
								<td class="text-right">0</td>
							</tr>
							<tr>
								<td><i class="fa fa-user"></i> Partner C (IHUTNCPC)</td>
								<td class="text-right">45</td>
								<td class="text-right">22</td>
							</tr>
							<tr>
								<td><i class="fa fa-user"></i> Partner D (QAJSHYDT)</td>
								<td class="text-right">0</td>
								<td class="text-right">0</td>
							</tr>
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
					<h3>All-time</h3>
				</div>
				<div class="content no-padding">
					<ul class="items">
						<li><i class="fa fa-bullhorn"></i>LinkedIn <span class="pull-right value">24</span><small>http://linkedin.com</small></li>
						<li><i class="fa fa-bullhorn"></i>Facebook<span class="pull-right value">16</span><small>http://facebook.com</small></li>
						<li><i class="fa fa-bullhorn"></i>Indipendent<span class="pull-right value">5</span><small>http://www.indipendent.com</small></li>
						<li><i class="fa fa-bullhorn"></i>Twitter<span class="pull-right value">2</span><small>http://t.co</small></li>
						<li><i class="fa fa-bullhorn"></i>WebWereld<span class="pull-right value">2</span><small>http://webwereld.nl/</small></li>
					</ul>
				</div>
				<div class="total-data bg-blue"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
					<h2>Total <span class="pull-right">49</span></h2></a>
				</div>
			</div>
		</div>
		<div class="col-sm-6 col-md-6">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#home" data-toggle="tab">Devices</a></li>
				<li><a href="#countries" data-toggle="tab">Countries</a></li>
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane active cont">
					<h2 class="text-center">Device Usage</h2>
					<div id="piec" style="height:300px;margin-top:25px;"></div>
				</div>
				<div id="countries" class="tab-pane cont">
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
								<tr>
									<td>United Kingdom</td>
									<td class="text-right">680</td>
								</tr>
								<tr>
									<td>Ireland</td>
									<td class="text-right">240</td>
								</tr>
								<tr>
									<td>Germany</td>
									<td class="text-right">210</td>
								</tr>
								<tr>
									<td>United States of America</td>
									<td class="text-right">150</td>
								</tr>
								<tr>
									<td>Spain</td>
									<td class="text-right">80</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row dash-cols">
		<div class="col-sm-12 col-md-12">
			<div class="block">
				<div class="header">
					<h2>Page Drop Off <span class="pull-right">Top 10</span></h2>
					<h3>All-time</h3>
				</div>
				<div class="content no-padding">
					<table class="no-border">
						<thead class="no-border">
							<tr>
								<th style="width:80%;">Page</th>
								<th style="width:10%;">Total</th>
								<th style="width:10%;" class="text-right">Percentage</th>
							</tr>
						</thead>
						<tbody class="no-border-x no-border-y">
							<tr>
								<td>/quiz/cloud-vision-and-stratgey/page1</td>
								<td>2</td>
								<td class="text-right">1%</td>
							</tr>
							<tr>
								<td style="width:30%;">/quiz/cloud-vision-and-stratgey/page2</td>
								<td>18</td>
								<td class="text-right">20%</td>
							</tr>
							<tr>
								<td style="width:30%;">/quiz/cloud-vision-and-stratgey/page3</td>
								<td>2</td>
								<td class="text-right">1%</td>
							</tr>
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