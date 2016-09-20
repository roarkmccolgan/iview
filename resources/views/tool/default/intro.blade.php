@extends('tool.default._layout.default2')

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
                    <span class="logo"><img src="{{asset('images/tools/default/lgo_sage.png')}}" alt="SAGE Logo"></span>
                    {{Lang::get('general.title')}}
                </h1>
                <div class="clearfix"></div>
                <div class="intro">{!!Lang::get('general.landing')!!}</div>
                <div class="action">
                <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="btn btn-primary btn-lg pull-right">{{Lang::get('general.startbut')}} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>
@if(isset($return_visitor))
    <script src="{{ asset('js/templates/'.config('app.template').'/jquery.leanModal.min.js')}}"></script>
@endif

<script src="{{{ asset('js/templates/'.config('app.template').'/plugins.js')}}}"></script>
<script src="{{{ asset('js/templates/'.config('app.template').'/main.js')}}}"></script>
@stop