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
                                <div class="col-xs-5 col-xs-offset-3 col-sm-3 col-sm-offset-6 col-md-3 col-md-offset-7 ">
                                    <img class="footer-logo" src="{{asset('css/'.str_slug(session('company.name')).'/'.str_slug(session('company.name')).'-logo.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="content" class="col-sm-6 col-sm-push-5">
                            <div class="mt--3">
                                <h1>{{Lang::get('general.'.session('product.id').'title')}}</h1>
                                {!!Lang::get('general.'.session('product.id').'landing')!!}
                                <hr class="short">
                                <a href="{{'/'.session('localeUrl').'quiz/'.Session::get('startSection').'/page1'}}" class="btn btn--lg btn--client">
                                    <span class="btn__text">
                                        {{Lang::get('general.'.session('product.id').'startbut')}}
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-pull-6 col-sm-offset-1 text-center">
                            <div class="mt--3">
                                <div class="hero">
                                    <span class="icon icoicon-hpgdpr">
                                        <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span>
                                    </span>
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