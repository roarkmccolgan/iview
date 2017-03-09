@extends('_layouts.framework')

@section('head')
@parent
<link href="{{ asset('js/bootstrap.switch/css/bootstrap3/bootstrap-switch.min.css') }}" rel="stylesheet">

@stop

@section('content')
	<div class="page-head">
		<h2>Create Quaetions</h2>
		<ol class="breadcrumb">
			<li><a href="/">Dashboard</a></li>
			<li><a href="/tools">Tools</a></li>
			<li><a href="/tools/questions">Questions</a></li>
		</ol>
	</div>
	<div class="cl-mcont" id="question_create">
		<form action="" method="POST" class="form-horizontal"> 
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
				<div class="col-md-2">
					<button class="btn btn-primary btn-sm pull-right" @click.prevent="addSection(sections.length+1)" style="margin-top: 5px;"><i class="fa fa-plus"></i> Section</button>
					<h4>Sections</h4>
				</div>
			</div>
			<div class="col-sm-6 col-md-6 col-lg-6">
				<div id="accordion" class="panel-group accordion">
					<qsection v-for="(section, secKey) in sections" :name="section.name" :key="secKey" :secind="secKey" :questionnum="questionnum"  v-on:increment="incrementQuestion"></qsection>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
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