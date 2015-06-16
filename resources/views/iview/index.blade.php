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
        <h2>Generate Reports</h2>
        <ol class="breadcrumb">
            <li><a href="/">Home</a></li>
            <li class="active">generate reports</li>
        </ol>
    </div>
    <div class="cl-mcont">
    	<div class="row">
        	<div class="col-md-12">
            	<div class="block-flat">
                    <div class="header">							
                    	<h3>Options</h3>
                    </div>
                    <div class="content">
                        <form class="form-horizontal group-border-dashed" action="#" style="border-radius: 0px;" id="reporting">
                        	<div class="form-group">
                                <label class="col-sm-3 control-label">iView</label>
                                <div class="col-sm-2">
                                    <select class="select2" v-model="iviewSelected" options="iviews" placeholder="Please Select"></select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">Report Dates</label>
                                <div class="col-sm-6">
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon primary"><span class="glyphicon glyphicon-th"></span></span><input type="text" style="width: 200px" name="reportdates" id="reportdates" class="form-control" value="20/03/2015 - 02/04/2015" /> 
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
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