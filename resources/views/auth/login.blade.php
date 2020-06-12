<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="{{ asset('/images/terminal/favicon.png') }}">

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
				<h3 class="text-center"><img class="logo-img" src="{{ asset('/images/terminal/logo.png') }}" alt="logo"/>IDC Terminal</h3>
			</div>
			<div>
				<form style="margin-bottom: 0px !important;" role="form" class="form-horizontal" action="{{ url('/login') }}" method="post">
                	<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<div class="content">
						<h4 class="title">Login Access</h4>
                        	@if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There was a problem with your login request.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if (session('message'))
                            <div class="alert alert-success">
                            	{{ session('message') }}
                            </div>
                            @endif
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Email" name="email" class="form-control" value="{{ old('email') }}">
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" name="password" class="form-control">
									</div>
								</div>
							</div>
							
					</div>
					<div class="foot">
						<a href="{{ url('/register') }}" class="btn btn-default" data-dismiss="modal" type="button">Register</a>
						<button class="btn btn-primary" data-dismiss="modal" type="submit">Log me in</button>
					</div>
				</form>
			</div>
		</div>
		<div class="text-center out-links"><a href="http://www.idc.com/uk/" target="_blank">&copy; {{date('Y')}} IDC UK</a></div>
	</div> 
	
</div>

<script src="{{ asset('/js/vendor/jquery-1.10.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/behaviour/general.js') }}"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('/js/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</body>
</html>
