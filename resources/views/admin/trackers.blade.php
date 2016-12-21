@extends('_layouts.framework')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.niftymodals/css/component.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css') }}"/>
@stop

@section('content')

<div class="page-head">
	<h2>{{$tool->company->name}} {{$tool->title}} <sub>Tracking</sub></h2>
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active">Tracking</li>
	</ol>
</div>
<div class="cl-mcont">

	<div class="row">
		<div class="col-md-12">
			<div class="block-flat">
				@if (session('status'))
					<div class="alert alert-{{session('status.type')}}">
						<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
						<i class="fa fa-times-circle sign"></i><strong>{{session('status.type')}}!</strong>
						{{session('status.message')}}
					</div>
				@endif
				<div class="content">
					<a href="{{url('/admin/tracking/new')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a><div class="clearfix"></div>
					<div>
						<table id="datatable-icons" class="table table-bordered">
							<thead>
								<tr>
									<th>Assignee</th>
									<th>Email</th>
									<th>Lang</th>
									<th>Code</th>
									<th>link</th>
									<!-- <th>Status</th> -->
									<th>Views</th>
									<th>Completions</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($tool->trackers as $key=>$tracker)
								<tr class="odd gradeX">
									<td><strong>{{$tracker->name}}</strong></td>
									<td><a href="mailto:{{$tracker->email}}">{{$tracker->email}}</a></td>
									<td>{{$tracker->language->abbreviation}}</td>
									<td>{{$tracker->code}}</td>
									<td>
										<ul>
										@foreach($tool->urls as $url)
											@if($tracker->language_id==$url->language_id)
											<?php
											$langSec = $tracker->language_id !=1 ? '/'.$url->language->abbreviation:'';
											?>
											<li>http://{{$url->subdomain.'.'.$url->domain.$langSec.'/?utm='.$tracker->code}}</li>
											@endif
										@endforeach
										</ul>
									</td>
									<!-- <td>{{$tracker->active==1 ? 'Active':'Inactive'}}</td> -->
									<td>{{$tracker->views}}</td>
									<td>{{$tracker->completions}}</td>
									<td data-trac-id="{{$tracker->id}}"></td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Nifty Modal-->
	<div id="download-modal" class="md-modal colored-header custom-width md-effect-9">
		<div class="md-content">
			<div class="modal-header">
				<h3>Download Report</h3>
				<button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close">×</button>
			</div>
			<div class="modal-body form">
				<div class="row">
					<div class="form-group col-md-12 no-margin">
						<label>From Date</label>
					</div>
				</div>
				<div class="row no-margin-y">
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="text" id="fromDay" placeholder="DD" class="form-control">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="text" id="fromMonth" placeholder="MM" class="form-control">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="text" id="fromYear" placeholder="YYYY" class="form-control">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12 no-margin">
						<label>To Date</label>
					</div>
				</div>
				<div class="row no-margin-y">
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="text" id="toDay" placeholder="DD" class="form-control"">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="text" id="toMonth" placeholder="MM" class="form-control">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="text" id="toYear" placeholder="YYYY" class="form-control">
					</div>
				</div>
				<p class="spacer2">
					<input type="checkbox" id="onlyNew" name="new">  Only new assessments
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancel</button>
				<button type="button" id="downloadBut" data-dismiss="modal" class="btn btn-primary btn-flat md-close">Download</button>
			</div>
		</div>
	</div>
	<!-- END Nifty Modal -->
	<div class="md-overlay"></div>
	<iframe id="my_iframe" style="display:none;"></iframe>
</div>

@stop

@section('javascript')
@parent
<script type="text/javascript" src="{{ asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/cleanzone.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.niftymodals/js/jquery.modalEffects.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/page-data-tables.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/moment.js/moment.js') }}"></script>
@stop

@section('load')
	App.dataTables();
	$('.md-trigger').modalEffects();

	$('#datatable-icons tbody').on( 'click', 'a.delete', function () {
		var that = this;
		$.post( "/api/trackers/delete/"+$(this).parents('td').data('trac-id'))
		.done(function( data ) {
			console.log( "Data Loaded: ", data);
			$('#datatable-icons').DataTable()
			.row( $(that).parents('tr') )
			.remove()
			.draw();
		});
	});
@stop