@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', 'IDC Gauge')


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="splash">
                <div class="row">
                    <div class="col-md-12">
                        <div class="head">
                            <div class="row">
                                <div class="col-md-9">
                                    <h1>
                                        {{Lang::get('general.'.session('product.id').'title')}}
                                    </h1>
                                    <small>{{Lang::get('general.'.session('product.id').'sub-title')}}</small>
                                </div>
                                <div class="col-md-3 text-right">
                                    <img class="idclogo" src="{{asset('images/tools/idclogoblk.png')}}" alt="">
                                </div>
                            </div>
                        </div>   
                        <img src="{{asset('images/people.jpg')}}" alt="" class="main">
                    </div>
                    <div class="col-md-8">
                        <div class="intro">{!!Lang::get('general.'.session('product.id').'landing')!!}</div>
                    </div>
                    <div class="col-md-4">
                        <div class="action">
                            <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="start text-center"><img src="{{asset('css/templates/'.$tool->template.'/img/startbut.png')}}" alt="{{Lang::get('general.'.session('product.id').'startbut')}}" class="start">{{Lang::get('general.'.session('product.id').'startbut')}}</a>
                        </div>
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
<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/templates/'.session('template').'/main.js')}}}"></script>
@stop