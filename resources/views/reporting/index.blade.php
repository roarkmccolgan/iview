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
        <h2>iView Reporting</h2>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">iView Reports</li>
        </ol>
    </div>
    <div class="cl-mcont">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="block-flat">
                    <div class="btn-toolbar pull-right">
                      <div class="btn-group">
                        <a href="/reporting/create" class="btn btn-primary"><i class="fa fa-bar-chart-o"></i> New Report</a>
                      </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="content">
                        @if(!$reports->isEmpty())
                            @foreach($reports as $report)
                                {{$report->name}}
                            @endforeach
                        @else
                        <p>There are no reports, <a href="reporting/create">create one?</a></p>
                        @endif
                    </div>
                </div>
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
	
@stop