@extends('_layouts.framework')

@section('head')
@parent
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.niftymodals/css/component.css') }}">
@stop

@section('content')

<div class="page-head">
	<h2>{{$tool->company->name}} {{$tool->title}}</h2>
	<ol class="breadcrumb">
		<li><a href="/">Dashboard</a></li>
		<li><a href="/admin/users">Users</a></li>
		<li class="active">new</li>
	</ol>
</div>
<div class="cl-mcont">

	<div class="col-md-8 col-md-offset-2">
		<div class="block-flat">
			<div class="header">
				<h3>Add New User</h3>
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
					<form role="form" action="{{ url('/admin/users')}}" method="POST" >
						<input type="hidden" name="tool_id" value="{{$tool->id}}">
						{{ csrf_field() }}
						<div class="col-md-6 form-group">
							<label>Full Name</label>
							<input name="name" type="text" placeholder="Name" class="form-control" value="{{ old('name') }}">
						</div>
						<div class="col-md-6 form-group">
							<label>Email address</label>
							<input name="email" type="email" placeholder="Enter email" class="form-control" value="{{ old('email') }}">
						</div>
						<div class="col-md-6 form-group">
							<label>Role</label>
							<select class="form-control" name="role">
								@foreach($roles as $role)
								<option value="{{$role}}">{{$role}}</option>
								@endforeach
                        	</select>
						</div>
						<div class="col-md-6 form-group">
							<label>Role Descriptions:</label>
							<ul>
								<?php if(in_array("local", $roles)) echo "<li><strong>Local</strong>: View only role, cannot create users or trackers</li>"; ?>
								<?php if(in_array("client", $roles)) echo "<li><strong>Client</strong>: Can create users and trackers</li>"; ?>
								<?php if(in_array("admin", $roles)) echo "<li><strong>Admin</strong>: Can create tools, iviews, users and trackers</li>"; ?>
								<?php if(in_array("super", $roles)) echo "<li><strong>Super</strong>: Can do anything</li>"; ?>
							</ul>
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
	App.init();
@stop