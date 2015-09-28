@extends('_layouts.framework')

@section('head')
@parent
<link href="{{ asset('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('js/bootstrap.switch/css/bootstrap3/bootstrap-switch.min.css') }}" rel="stylesheet">

@stop

@section('content')
	<div class="page-head">
		<h2>Create Report</h2>
		<ol class="breadcrumb">
			<li><a href="/">Dashboard</a></li>
			<li><a href="/iviews">iViews</a></li>
			<li><a href="/iviews/reporting">Reports</a></li>
			<li class="active">Create Report</li>
		</ol>
	</div>
	<div class="cl-mcont" id="reporting_create">
		{!! Form::open() !!}
			@if($errors->any())
			<div class="row">
				<div class="col-md-6">
					<div class="alert alert-danger alert-white rounded">
					<button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
					<div class="icon"><i class="fa fa-times-circle"></i></div>
						<strong>Error!</strong>
						<ul>
							@foreach($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
						</ul>
					</div>
				</div>
			</div>
			@endif
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('title', 'Report Name') !!}
						{!! Form::text('title', 'Standard', ['class'=>'form-control', 'required'=>'']) !!}
					</div>
					<div class="form-group">
						<label class="control-label" for="iview_id">iView</label>
						<select name="iview_id" class="form-control col-md-6" required="required" v-on="change: fetchUrls">
							<option value="">Please select</option>
							@if($iviews)
								@foreach($iviews as $iview)
							<option value="{{$iview->id}}">{{$iview->title}}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('connection','Database Connection',['class'=>'control-label']) !!}
						{!! Form::select('connection', ['mysql'=>'Present','mysqliview'=>'Legacy'], null, ['class'=>'form-control col-md-3', 'required'=>'', 'v-model'=>'connectionSelected', 'v-on'=>'change: selectConnection']) !!}
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group" v-if="legacy">
						<button type="button" class="close" v-on="click: useLatest">×</button>
						{!! Form::label('table','Database Table Name',['class'=>'control-label']) !!}
						{!! Form::select('table', [], null, ['class'=>'form-control', 'required'=>'', 'v-model'=>'lagacySelected', 'options'=>'legacytables', 'v-on'=>'change: getFields']) !!}
						<div v-if="table_searching">
                    	<img src="{{ asset('images/preloader16.gif') }}" alt="loading"> Loading fields
	                    </div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group" v-if="table_found">
						{!! Form::label('ignore_fields', 'Ignore Fields') !!}
						{!! Form::select('ignore_fields', [], null, ['multiple' => 'multiple','class'=>'form-control', 'required'=>'', 'v-model'=>'ignore', 'options'=>'ignore_fields']) !!}
					</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<a href="/iviews/create" class="btn btn-primary btn-sm pull-right" v-on="click: addRecipient" style="margin-top: 5px;"><i class="fa fa-plus"></i> add</a>
					<h4>Recipients</h4>
				</div>
			</div>
			<template v-repeat="recipients">
			<div class="row" v-el="rowrec">
				<div class="col-md-2">
					<div class="form-group">
						{!! Form::label('recipient[@{{$key}}][fname]', 'First Name') !!}
						{!! Form::text('recipient[@{{$key}}][fname]', null, ['class'=>'form-control', 'required'=>'', 'v-model'=>'recipients[$key].fname']) !!}
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						{!! Form::label('recipient[@{{$key}}][lname]', 'Last Name') !!}
						{!! Form::text('recipient[@{{$key}}][lname]', null, ['class'=>'form-control', 'required'=>'', 'v-model'=>'recipients[$key].lname']) !!}
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						{!! Form::label('recipient[@{{$key}}][email]', 'email Address') !!}
						{!! Form::text('recipient[@{{$key}}][email]', null, ['class'=>'form-control', 'required'=>'', 'v-model'=>'recipients[$key].email']) !!}
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						{!! Form::label('recipient[@{{$key}}][urls]', 'Report URLs') !!}
						{!! Form::select('recipient[@{{$key}}][urls]', [], [], ['multiple' => 'multiple','class'=>'form-control', 'required'=>'', 'v-model'=>'recipients[$key].selectedUrls', 'options'=>'iviewurls']) !!}
					</div>
				</div>
				<div class="col-md-1">
					<div class="form-group">
						{!! Form::label('recipient[@{{$key}}][report]', 'Reports') !!}
						<div>
							{!! Form::checkbox('recipient[@{{$key}}][report]', true, true, ['class'=>'switch report', 'data-size'=>'medium', 'data-rowid'=>'@{{$key}}']) !!}
						</div>
					</div>
					<div class="form-group">
						{!! Form::label('recipient[@{{$key}}][resgistration]', 'Reg') !!}
						<div>
							{!! Form::checkbox('recipient[@{{$key}}][resgistration]', true, false, ['class'=>'switch', 'data-size'=>'medium']) !!}
						</div>
					</div>
				</div>
				<div class="col-md-2" v-if="recipients[$key]['report']">
					<div class="form-group">
						{!! Form::label('recipient[@{{$key}}][frequency]', 'Report Frequency') !!}
						{!! Form::select('recipient[@{{$key}}][frequency]', ['daily', 'weekly', 'monthly'], 1, ['class'=>'form-control freq', 'required'=>'']) !!}
					</div>
				</div>
				<div class="col-md-1">
					<button type="button" class="btn btn-danger btn-sm" v-on="click: deleteRecipient($key)" style="margin-top: 37px;"><i class="fa fa-trash-o"></i></button>
				</div>

			</div>
			</template>
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
			@{{data | json}}
		{!! Form::close() !!}
	</div>

@stop

@section('javascript')
@parent
<script  type="text/javascript"src="{{ asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.switch/js/bootstrap-switch.js') }}"></script>
@stop
@section('load')
@parent
	$('.switch').bootstrapSwitch();
	$('.switch.report').on('switchChange.bootstrapSwitch', function(event, state) {
		var freqId = $(this).attr('data-rowid'); // DOM element
		if(state){//state= 1|0
			vueReporting.$data.recipients[freqId].report = true;
		}else{
			vueReporting.$data.recipients[freqId].report = false;
		}
		//console.log(event); // jQuery event
		//console.log(state); // true | false -->
	});
@stop