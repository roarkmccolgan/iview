@extends('_layouts.framework')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.niftymodals/css/component.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.gritter/css/jquery.gritter.css') }}"/>
@stop

@section('content')

<div class="page-head">
	<h2>{{$tool->company->name}} {{$tool->title}}</h2>
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active">Users</li>
	</ol>
</div>
<div class="cl-mcont">

	<div class="row">
		<div class="col-md-12">
			<div class="block-flat">
				<a href="{{url('/admin/users/new')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New</a><div class="clearfix"></div>
				<div class="header">
                	<h3>Users</h3>
                </div>
				@if (session('status'))
					<div class="alert alert-{{session('status.type')}}">
						<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
						<i class="fa fa-times-circle sign"></i><strong>{{session('status.type')}}!</strong>
						{{session('status.message')}}
					</div>
				@endif
				<div class="content">
					<div>
						<table id="datatable-icons" class="table table-bordered">
							<thead>
								<tr>
									<th>Name</th>
									<th>Email</th>
									<th>Role</th>
									<th></th>
		                        </tr>
							</thead>
							<tbody>
								@foreach($tool->users as $key=>$user)
								<tr class="odd gradeX">
									<td><strong>{{$user->name}}</strong></td>
									<td><a href="mailto:{{$user->email}}" target="_blank">{{$user->email}}</a></td>
									<td>
										<ul>
										@foreach($user->roles as $role)
											<li>{{$role->name}}</li>
										@endforeach
										</ul>
									</td>
									<td data-user-id="{{$user->id}}"></td>
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
<script type="text/javascript" src="{{ asset('/js/jquery.gritter/js/jquery.gritter.js') }}"></script>
@stop

@section('load')
	App.dataTables();
	$('.md-trigger').modalEffects();

	$('#datatable-icons tbody').on( 'click', 'a.delete', function () {
		var that = this;
		$.post( "/api/users/delete/"+$(this).parents('td').data('user-id'))
		.done(function( data ) {
			console.log( "Data Loaded: ", data);
			if(data.deleted){
				$.gritter.add({
					title: 'User Deleted',
					text: false,
					class_name: 'success'
				});
				$('#datatable-icons').DataTable()
				.row( $(that).parents('tr') )
				.remove()
				.draw();
			}else{
				$.gritter.add({
					title: 'Error',
					text: 'You do not have appropriate permissions to delete this user',
					sticky: true,
					class_name: 'danger'
				});
			}
		});
	});
@stop