@extends('_layouts.framework')

@section('head')
@parent
<!-- Select2 -->
<link rel="stylesheet" type="text/css" href="{{ asset('/js/jquery.select2/select2.css') }}" />
<!-- DateRange -->
<link rel="stylesheet" type="text/css" href="{{ asset('/js/bootstrap.daterangepicker/daterangepicker-bs3.css') }}" />
@stop

@section('content')
<div class="page-head">
	<h2>Tools</h2>
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li class="active">tools</li>
	</ol>
</div>
<div class="cl-mcont">
	<div class="row">
		<div class="btn-toolbar pull-right">
			<div class="btn-group">
				<a href="{{action('ToolController@create')}}" class="btn btn-primary"><i class="fa fa-bar-chart-o"></i> New Tool</a>
			</div>
		</div>
	</div>
	<div class="row">	
		@if(!$companies->isEmpty())
		@foreach($companies as $company)
		<div class="col-md-4">
			<div class="block-flat">
				<div class="header">
					<h3>{{$company->name}}</h3>
				</div>
				<div class="content">
					<table class="no-border">
						<tbody class="no-border-x no-border-y">
							@foreach($company->tools as $companyTool)
							<tr>
								<td colspan="3"><strong>{{$companyTool->title}}</strong><br/></td>
							</tr>
							<tr>
								<td class="text-center"><a href="/admin/tools/{{$companyTool->id}}/questions">questions</a> <span class="badge">25</span></td>
								<td class="text-center"><a href="#">urls</a> <span class="badge">3</span></td>
								<td class="text-center"><a href="#">reporting</a> <span class="badge">5</span></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
		@endforeach
		@else
		<div class="col-md-12">
			<div class="block-flat">
				<div class="header">
					<p>There are no tools, <a href="{{action('ToolController@create')}}">create one?</a></p>
				</div>
			</div>
		</div>
		@endif
	</div>
</div>
</div>
@stop

@section('javascript')
@parent
<script  type="text/javascript"src="{{ asset('/js/app.js') }}"></script>
<script  type="text/javascript"src="{{ asset('/js/jquery.select2/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/behaviour/general.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.daterangepicker/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/js/bootstrap.daterangepicker/daterangepicker.js') }}"></script>
@stop

@section('load')
$('#reportdates').daterangepicker({
format: 'DD-MM-YYYY'
});
$(".select2").on("change", function (e)
{
	$.getJSON( "get/test.json", function( data ) {
	var items = [];
	$.each( data, function( key, val ) {
	items.push( "<li id='" + key + "'>" + val + "</li>" );
});
$( "<ul/>", {
"class": "my-new-list",
html: items.join( "" )
}).appendTo( "body" );
});
});
@stop