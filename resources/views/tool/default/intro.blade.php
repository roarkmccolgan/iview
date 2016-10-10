@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', 'IDC Gauge')


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<div class="container">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="splash">
                <h1>
                    <span class="logo"><div class="icon-{{session('company.alias')}}" style="width: 180px; height: 51px" ></div></span>
                    {{Lang::get('general.'.$tool->id.'title')}}
                </h1>
                <div class="icon-idc" class="pull-right" style="width: 180px; height: 51px; margin-left: 10px; margin-top: 20px; float: right; vertical-align: middle;" ></div>
                <div class="clearfix"></div>
                <div class="intro">{!!Lang::get('general.'.$tool->id.'landing')!!}</div>
                <div class="action">
                <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="btn btn-primary btn-lg pull-right">{{Lang::get('general.'.$tool->id.'startbut')}} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                </div>
                <div class="clearfix"></div>
            </div>   
        </div>
    </div>
</div>
@stop
@if(isset($return_visitor))
    @section('main')
    <div id="return">
    	<h1>Welcome back!</h1><br />
        <p>
        	We noticed you started the quiz but have not complete it.
            <br/><br/>
        	Would you like to continue where you left off or would you like to restart?
        </p>
        <br/><br/>
        <a href="/continue" class="button-big">Continue</a>
        <a href="/restart" class="button-big">Restart</a>
    </div>
    <a id="trigger_id" href="#return">&nbsp;</a>
    @stop
@endif
@section('pagescript')
@parent
@if(isset($return_visitor))
    <script src="{{ asset('js/templates/'.session('template').'/jquery.leanModal.min.js')}}"></script>
@endif

<script src="{{{ asset('js/templates/'.session('template').'/plugins.js')}}}"></script>
<script src="{{{ asset('js/templates/'.session('template').'/main.js')}}}"></script>
@stop