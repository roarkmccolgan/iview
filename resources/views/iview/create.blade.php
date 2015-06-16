@extends('_layouts.framework')

@section('content')
	<div class="page-head">
		<h2>Create iView</h2>
		<ol class="breadcrumb">
			<li><a href="/">Dashboard</a></li>
			<li><a href="/iviews">iViews</a></li>
			<li class="active">Create</li>
		</ol>
	</div>
	<div class="cl-mcont">
		<div class="row">
			<div class="col-md-6" id="create">
				{!! Form::open() !!}
					<div class="form-group">
						<label class="control-label">Company</label>
						<select class="form-control">
							<option>1</option>
							<option>2</option>
							<option>3</option>
							<option>4</option>
							<option>5</option>
						</select>
					</div>
					<div class="form-group" v-if="newCompany">
						{!! Form::label('company') !!}
						{!! Form::text('company', null, ['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('name') !!}
						{!! Form::text('name', null, ['class'=>'form-control']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>

@stop

@section('javascript')
@parent
<script  type="text/javascript"src="{{ asset('/js/app.js') }}"></script>
@stop