@extends('_layouts.framework')

@section('head')
@parent
<link href="{{ asset('js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('js/jquery.niftymodals/css/component.css') }}">
@stop

@section('content')
	<div class="page-head">
		<h2>Create Tool</h2>
		<ol class="breadcrumb">
			<li><a href="/">Dashboard</a></li>
			<li><a href="/iviews">Tools</a></li>
			<li class="active">Create</li>
		</ol>
	</div>
	<div class="cl-mcont" id="iview_create">
		{!! Form::open() !!}
			@if(Session::has('message'))
			<div class="alert alert-info">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">×</button>
                <i class="fa fa-info-circle sign"></i>
                <strong>Info!</strong> {{Session::get('message')}}
            </div>
			@endif
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
			<div class="row" v-if="! newCompany">
				<div class="col-md-6">
					<div class="form-group">
						<label class="control-label" for="company_id">Company</label>
						<select name="company_id" class="form-control col-md-6" v-model="companySelected" v-on="change: companySelect" required="required">
							<option value="0">Please select</option>
							<option value="new">New Company</option>
							@if($companies)
								@foreach($companies as $company)
							<option value="{{$company->id}}">{{$company->name}}</option>
								@endforeach
							@endif
						</select>
					</div>
				</div>
			</div>
			<div class="row" v-if="newCompany">
				<div class="col-md-6">
					<div class="form-group" v-if="newCompany">
						<button type="button" class="close" v-on="click: showCompanies">×</button>
						{!! Form::label('new_company','Company Name') !!}
						{!! Form::text('new_company', null, ['class'=>'form-control', 'required'=>'']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('colours', 'Corporate Colour') !!}
						{!! Form::text('colours', null, ['placeholder'=>'r,g,b','class'=>'form-control', 'required'=>'']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						{!! Form::label('title', 'Tool Title') !!}
						{!! Form::text('title', null, ['class'=>'form-control', 'required'=>'','v-model'=>'iview_title']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('sub_title', 'Tool Sub-title') !!}
						{!! Form::text('sub_title', null, ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3 col-md-offset-3">
					{!! Form::label('gapropertyid', 'Google Analytics Property ID') !!}
					{!! Form::text('gapropertyid', null, ['class'=>'form-control', 'required'=>'']) !!}
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						{!! Form::label('start_date', 'Start Date') !!}
						<div data-min-view="2" data-date-format="dd-mm-yyyy" class="input-group date datetime">
                          <input name="start_date" size="16" type="text" required="" value="" readonly="" class="form-control"><span class="input-group-addon btn btn-primary"><span class="glyphicon glyphicon-th"></span></span>
                        </div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label class="control-label">Duration</label>
						<select name="duration" class="form-control col-md-6">
							<option value="6">6 Months</option>
							<option value="12" selected="">12 Months</option>
							<option value="24">24 Months</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						{!! Form::label('subdomain', 'Sub-domain') !!}
						{!! Form::text('subdomain', '', ['class'=>'form-control', 'required'=>'','placeholder'=>'']) !!}
					</div>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						{!! Form::label('domain', 'Domain') !!}
						{!! Form::text('domain', 'idcgauge.net', ['class'=>'form-control']) !!}
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<template v-repeat="lang: languages">
						{!! Form::hidden('language[]', '@{{lang.id}}',['id'=>'lang@{{lang.id}}']) !!}
						<span class="badge badge-primary">@{{lang.name}} <a class="close" v-on="click: removeLang(lang)">&#10007;</a></span>
					</template>
					</div>
				</div>
				<div class="col-md-2">
					<a data-modal="modal-lang" class="btn md-trigger"><i class="fa fa-plus fa-lg"></i> add language</a>
					<div class="clearfix"></div>
					<div id="modal-lang" class="md-modal colored-header custom-width md-effect-9">
						<div class="md-content">
							<div class="modal-body form">
								<div class="form-group">
									<div class="form-group">
										{!! Form::label('langs', 'Select language') !!}
										{!! Form::select('langs', $languages, null, ['class'=>'form-control']) !!}
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="modal-footer">
								<button type="button" data-dismiss="modal" class="btn btn-default btn-flat md-close">Cancel</button>
								<button type="button" class="btn btn-primary btn-flat" v-on="click: addLang">Add</button>
							</div>
						</div>
					</div>
					<div class="md-overlay"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		{!! Form::close() !!}
	</div>

@stop

@section('javascript')
@parent
<script type="text/javascript"src="{{ asset('/js/app.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.niftymodals/js/jquery.modalEffects.js') }}"></script>
@stop

@section('load')
	$(".datetime").datetimepicker({
		autoclose: true
	});
	$('.md-trigger').modalEffects();
@stop