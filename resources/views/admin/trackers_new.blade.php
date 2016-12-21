@extends('_layouts.framework')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.niftymodals/css/component.css') }}">
@stop

@section('content')

<div class="page-head">
	<h2>{{$tool->company->name}} {{$tool->title}} <sub>New Tracker</sub></h2>
	<ol class="breadcrumb">
		<li><a href="/">Dashboard</a></li>
		<li><a href="/admin/tracking">Tracking</a></li>
		<li class="active">new</li>
	</ol>
</div>
<div class="cl-mcont">

	<div class="col-md-8 col-md-offset-2">
		<div class="block-flat">
			<div class="header">
				<h3>Add New Tracking Code</h3>
				@if (count($errors) > 0)
					<div class="alert alert-danger">
						<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
						<i class="fa fa-times-circle sign"></i><strong>Error!</strong>
						<ul>
				            @foreach ($errors->all() as $error)
				                <li>{{ $error }}</li>
				            @endforeach
				        </ul>
					</div>
				@endif
			</div>
			<div class="content">
				<div class="row">
					<form role="form" action="{{ url('/admin/tracking')}}" method="POST" >
						<input type="hidden" name="tool_id" value="{{$tool->id}}">
						{{ csrf_field() }}
						<div class="col-md-6 form-group">
							<label>Name</label>
							<input name="name" type="text" placeholder="Name / Label" class="form-control" value="{{ old('name') }}">
						</div>
						<div class="col-md-6 form-group">
							<label>Email address</label>
							<input name="email" type="email" placeholder="Enter email" class="form-control" value="{{ old('email') }}">
						</div>
						<div class="col-md-6 form-group">
							<label>Code</label>
							<input name="code" type="text" class="form-control" disabled value="{{ old('code') ? old('code'):$code }}">
							<input name="code" type="hidden" value="{{ old('code') ? old('code'):$code }}">
						</div>
						@if($tool->languages->count()>1)
						<div class="col-md-6 form-group">
							<label>Language</label>
							<select name="language_id" class="form-control">
							@foreach($tool->languages as $language)
								<option value="{{$language->id}}" {{ old('language_id') && old('language_id') == $language->id ? "selected":'' }}>{{$language->name}}</option>
							@endforeach
							</select>
						</div>
						@else
						<input name="language" type="hidden" value="en">
						@endif
						<div class="col-md-12 checkbox">
							<label>
								<input name="active" type="checkbox" class="icheck" {{ !old('active') ? '':'checked' }}> Activate
							</label>
						</div>
						<div class="col-md-12">
							<button type="submit" class="btn btn-primary">Save</button>
							<button class="btn btn-default">Cancel</button>
						</div>

					</form>
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
<script type="text/javascript" src="{{ asset('/js/moment.js/moment.js') }}"></script>
@stop

@section('load')
	$('.md-trigger').modalEffects();

@stop