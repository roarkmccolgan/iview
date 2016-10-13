@extends('_layouts.framework')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.niftymodals/css/component.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.datatables/plugins/bootstrap/3/dataTables.bootstrap.css') }}"/>
@stop

@section('content')
  
<div class="page-head">
	<h2>Assessments</h2>
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
					<button id="openModal" data-modal="form-primary" class="btn btn-success pull-left md-trigger"><i class="fa fa-download"></i> Download Report</button><div class="clearfix"></div>
					<div>
						<table id="datatable-icons" class="table table-bordered">
							<thead>
								<tr>
									<th>Resp ID</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Date</th>
									<th>Company</th>
									<th>Email</th>
									<th>Link Code</th>
									<th>Maturity</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<tr class="odd gradeX">
									<td>1001</td>
									<td><strong>Apple</strong></td>
									<td><strong>Martin</strong></td>
									<td>03-09-2016</td>
									<td>Playcold</td>
									<td><strong>apple@playcold.co.uk</strong></td>
									<td>-</td>
									<td>22</td>
									<td></td>
								</tr>
								<tr class="odd gradeA">
									<td>1002</td>
									<td><strong>Woody</strong></td>
									<td><strong>Tiger</strong></td>
									<td>01-09-2016</td>
									<td>SmithAero</td>
									<td><strong>woody@smithaero.com</strong></td>
									<td>SWGTHYS</td>
									<td>34</td>
									<td></td>
								</tr>
								<tr class="even gradeC">
									<td>1003</td>
									<td><strong>Alpha</strong></td>
									<td><strong>Bet</strong></td>
									<td>27-08-2016</td>
									<td>Omega</td>
									<td><strong>alpha@omega.com</strong></td>
									<td>-</td>
									<td>15</td>
									<td></td>
								</tr>
								<tr class="odd gradeA">
									<td>1004</td>
									<td><strong>Simon</strong></td>
									<td><strong>Paul</strong></td>
									<td>22-08-2016</td>
									<td>Graceland</td>
									<td><strong>simon@graceland.com</strong></td>
									<td>-</td>
									<td>45</td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Nifty Modal-->
	<div id="form-primary" class="md-modal colored-header custom-width md-effect-9">
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
						<input type="name" placeholder="DD" class="form-control" value="01">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="name" placeholder="MM" class="form-control" value="09">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="name" placeholder="YYYY" class="form-control" value="2016">
					</div>
				</div>
				<div class="row">
					<div class="form-group col-md-12 no-margin">
						<label>To Date</label>
					</div>
				</div>
				<div class="row no-margin-y">
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="name" placeholder="DD" class="form-control" value="30">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="name" placeholder="MM" class="form-control" value="09">
					</div>
					<div class="form-group col-md-3 col-sm-3 col-xs-3 no-margin">
						<input type="name" placeholder="YYYY" class="form-control" value="2016">
					</div>
				</div>
				<p class="spacer2">
					<input type="checkbox" name="c[]">  Only new assessments
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
@stop

@section('load')
	App.init();
	App.dataTables();
	$('.md-trigger').modalEffects();

	$('#downloadBut').click(function(e){
	  document.getElementById('my_iframe').src = 'sage_assessment.xlsx';
	})
@stop