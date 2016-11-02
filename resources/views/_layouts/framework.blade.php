<!DOCTYPE html>
<html lang="en">
<head>
	@section('head')
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta id="token" name="token" value="{{ csrf_token() }}">
	<link rel="shortcut icon" href="{{ asset('/images/favicon.png') }}">

	<title>IDC Terminal - iViews</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,400italic,700,800" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Raleway:300,200,100" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700" rel="stylesheet" type="text/css">

	<!-- Bootstrap core CSS -->
	<link href="{{ asset('js/bootstrap/dist/css/bootstrap.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('/fonts/font-awesome-4/css/font-awesome.min.css') }}">
	<!--if lt IE 9script(src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')
    -->

	<link rel="stylesheet" type="text/css" href="{{ asset('js/jquery.nanoscroller/nanoscroller.css') }}" />

	
	@show	
	<!-- Template CSS -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" />
</head>

<body>

	<!-- Fixed navbar -->
	<div id="head-nav" class="navbar navbar-default navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="fa fa-gear"></span>
				</button>
				<a class="navbar-brand" href="#"><span>IDC Terminal</span></a>
			</div>
		</div>
	</div>
	
	<div id="cl-wrapper">
		<div class="cl-sidebar">
			<div class="cl-toggle"><i class="fa fa-bars"></i></div>
			@section('sidebar')
			<div class="cl-navblock">
				<div class="menu-space">
					<div class="content">
						<div class="side-user">
							<div class="info">
								<p>iViews: 1 / 10 </p>
								<div class="progress progress-user">
									<div style="width: 10%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="40" role="progressbar" class="progress-bar progress-bar-info">
										<span class="sr-only">10% Complete (success)</span>
									</div>
								</div>
							</div>
						</div>
						@include('_layouts.menu.leftmenu')
					</div>
				</div>
        <!--<div class="text-right collapse-button" style="padding:7px 9px;">
          <input type="text" class="form-control search" placeholder="Search..." />
          <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
      </div>-->
  </div>
  @show
</div>

<div class="container-fluid" id="pcont">
	@yield('content')
</div> 

</div>
@include('_layouts.footer')
@section('javascript')
<script src="{{ asset('/js/backend.js') }}"></script>
<script src="{{ asset('js/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('/js/jquery.nanoscroller/jquery.nanoscroller.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/behaviour/general.js') }}"></script>
@show
<script type="text/javascript">
	$(document).ready(function(){
    //initialize the javascript
    App.init();
    @section('load')
    	
    @show
});
</script>

</body>
</html>
