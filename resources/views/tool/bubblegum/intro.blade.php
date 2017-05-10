@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', 'IDC Gauge')
@section('head')
@parent
<meta name="description" content="">
@stop
@section('main')
    <div class="main-container">
        <section class="unpad--bottom">
            <div class="container">
                <div class="row">
                    <div class="frame clearfix top">
                        <div id="content" class="col-sm-6 col-sm-push-5">
                            <div class="mt--3">
                                <h1>{{Lang::get('general.'.session('product.id').'sub-title')}}</h1>
                                {!!Lang::get('general.'.session('product.id').'landing')!!}
                                <hr class="short">
                                <a href="{{'quiz/'.Session::get('startSection').'/page1'}}" class="btn btn--lg btn--client">
                                    <span class="btn__text">
                                        {{Lang::get('general.'.session('product.id').'startbut')}}
                                    </span>
                                    &nbsp;&nbsp;&nbsp;&nbsp;
                                    <i class="icon-Arrow-Forward2"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-pull-6 col-sm-offset-1 text-center">
                            <div class="mt--3">
                                <div class="hero">
                                    <i class="icon icon-Security-Check"></i>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('pagescript')
@parent
<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/templates/'.session('template').'/main.js')}}}"></script>
@stop