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
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 visible-xs mb--1 mt--1">
                            <div class="row">
                                <div class="col-xs-4 col-sm-3 col-md-2">
                                    <img class="footer-logo" src="{{asset('css/idc/idc-logo.svg')}}" alt="">
                                </div>
                                <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-6 col-md-2 col-md-offset-8 ">
                                    <img class="footer-logo" src="{{asset('css/'.str_slug(session('company.name')).'/'.str_slug(session('company.name')).'-logo.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
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