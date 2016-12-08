@extends('_layouts.framework')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.niftymodals/css/component.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css') }}"/>
@stop

@section('content')
  
<div class="page-head">
	<h2>{{$tool->company->name}} {{$tool->title}} <sub>Assessments</sub></h2>
	<ol class="breadcrumb">
		<li><a href="#">Home</a></li>
		<li class="active">Assessments</li>
	</ol>
</div>
<div class="cl-mcont">

	<div class="row">
		<div class="col-md-12">
			<div class="block-flat">

				<div class="content">
					<button id="openModal" data-modal="download-modal" class="btn btn-success pull-left md-trigger"><i class="fa fa-download"></i> Download Report</button><div class="clearfix"></div>
					<div>
						<table id="datatable-icons" class="table table-bordered">
							<thead>
								<tr>
									<th>Resp ID</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Date</th>
									<th>Company</th>
									<th>Country</th>
									<th>Email</th>
									@if($tool->extra_fields)
										@foreach($tool->extra_fields as $fieldKey=>$field)
										<th>{{ucfirst($field->name)}}</th>
										@endforeach
									@endif
									<th>Link Code</th>
									<th>Maturity</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@foreach($tool->assessments as $key=>$assessment)
								<tr class="odd gradeX">
									<td>{{$assessment->id}}</td>
									<td><strong>{{$assessment->fname}}</strong></td>
									<td><strong>{{$assessment->lname}}</strong></td>
									<td>{{$assessment->created_at->toDateString()}}</td>
									<td>{{$assessment->company}}</td>
									<td>{{$assessment->country}}</td>
									<td><a href="mailto:{{$assessment->email}}">{{$assessment->email}}</a></td>
									@if($tool->extra_fields)
										@foreach($tool->extra_fields as $fieldKey=>$field)
										<?php
										if(!is_array($assessment->extra)){
											$extra = $assessment->extra!=='null' && !is_null($assessment->extra) ? json_decode($assessment->extra,true) : '';
										}else{
											$extra = $assessment->extra;
										}
										?>
										<td>{{$assessment->extra!=='null' && !is_null($assessment->extra) ? $extra[$field->name]: ''}}</td>
										@endforeach
									@endif
									<td>{{$assessment->code}}</td>
									<td>{{$assessment->rating}}</td>
									<td data-ass-id="{{$assessment->id}}"></td>
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
<script type="text/javascript" src="{{ asset('/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.niftymodals/js/jquery.modalEffects.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/page-data-tables.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/moment.js/moment.js') }}"></script>
@stop

@section('load')
	App.init();
	App.dataTables();
	$('.md-trigger').modalEffects();

	$('#fromDay').val(moment('{{$tool->start_date}}').format('DD'));
	$('#fromMonth').val(moment('{{$tool->start_date}}').format('MM'));
	$('#fromYear').val(moment('{{$tool->start_date}}').format('YYYY'));

	$('#toDay').val(moment().format('DD'));
	$('#toMonth').val(moment().format('MM'));
	$('#toYear').val(moment().format('YYYY'));
	

	$('#downloadBut').click(function(e){
		var that = this;
		/*$.get( "{{URL('admin/assessments/download')}}", { new: $('#onlyNew').checked, dateFrom: moment($('#fromDay').val()+"-"+$('#fromMonth').val()+"-"+$('#fromYear').val(), "DD-MM-YYYY").format('DD-MM-YYYY'), dateTo: moment($('#toDay').val()+"-"+$('#toMonth').val()+"-"+$('#toYear').val(), "DD-MM-YYYY").format('DD-MM-YYYY'); })
			.done(function( data ) {
				console.log( "Data Loaded: ", data);
				
			});*/
		var queryString = "new="+document.getElementById('onlyNew').checked+"&dateFrom="+moment($('#fromDay').val()+"-"+$('#fromMonth').val()+"-"+$('#fromYear').val(), "DD-MM-YYYY").format('DD-MM-YYYY')+"&dateTo="+moment($('#toDay').val()+"-"+$('#toMonth').val()+"-"+$('#toYear').val(), "DD-MM-YYYY").format('DD-MM-YYYY');
		window.open("{{URL('admin/assessments/download')}}?"+queryString);
		//document.getElementById('my_iframe').src = 'sage_assessment.xlsx';
	})

	$('#datatable-icons tbody').on( 'click', 'a.delete', function () {
		var that = this;
		$.post( "/api/assessments/delete/"+$(this).parents('td').data('ass-id'))
			.done(function( data ) {
				console.log( "Data Loaded: ", data);
				$('#datatable-icons').DataTable()
					.row( $(that).parents('tr') )
					.remove()
					.draw();
			});
	});
@stop