@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get('general.'.$tool->id.'title'))


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="splash">
                <div class="row">
                    <div class="col-md-12">
                        <h1>
                            <span class="logo"><div class="icon-idc" class="pull-right" style="width: 180px; height: 51px;" ></div></span>
                            {{Lang::get('general.'.$tool->id.'title')}}
                        </h1>
                    </div>
                    <div class="col-md-8 intro">
                        {!!Lang::get('general.'.$tool->id.'landing')!!}
                    </div>
                    <div class="col-md-4 col-md-offset-0 col-xs-4 col-xs-offset-4 action">
                        <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="startbut btn btn-primary btn-lg">{{Lang::get('general.'.$tool->id.'startbut')}} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                    </div>
                    <div class="col-xs-12 sponsor">
                        <small>Sponsored by</small><br/>
                        <div class="icon-{{session('company.alias')}}" style="width: 180px; height: 51px; margin: 0 auto; margin-top: 5px;" ></div>
                    </div>
                </div>
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