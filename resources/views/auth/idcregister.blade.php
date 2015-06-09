<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

	<title>IDC Terminal</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Raleway:300,200,100' rel='stylesheet' type='text/css'>

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('js/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">

	<link rel="stylesheet" href="{{ asset('/fonts/font-awesome-4/css/font-awesome.min.css') }}">

	<!-- Custom styles for this template -->
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet" />	

</head>

<body class="texture">

<div id="cl-wrapper" class="login-container">

	<div class="middle-login">
		<div class="block-flat">
			<div class="header">							
				<h3 class="text-center"><img class="logo-img" src="{{ asset('/images/logo.png') }}" alt="logo"/>IDC Terminal</h3>
			</div>
			<div>
				<form style="margin-bottom: 0px !important;" role="form" action="{{ url('/auth/register') }}" method="post">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="content">
						<h4 class="title">Register Account</h4>
                        	@if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
							<div class="form-group">
                            	<label>Full Name</label>
								<input type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name') }}">		
							</div>
							<div class="form-group">
                            	<label>Email Address</label>
								<input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
							<div class="form-group">
                            	<label>Password</label>
								<input type="password" class="form-control" name="password">
							</div>
                            <div class="form-group">
                            	<label>Confirm Password</label>
								<input type="password" class="form-control" name="password_confirmation">
							</div>
					</div>
					<div class="foot">
						<a href="{{ url('auth/login') }}" class="btn btn-default" data-dismiss="modal" type="button">Login</a>
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Register</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="http://www.idc.com/uk/" target="_blank">&copy; {{date('Y')}} IDC UK</a></div>
	</div> 
	
</div>

<script src="{{ asset('/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/behaviour/general.js') }}"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
