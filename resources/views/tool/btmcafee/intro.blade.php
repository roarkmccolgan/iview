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
                                <div class="col-xs-5 col-sm-4 col-md-3">
                                    <img class="footer-logo" src="{{asset('css/idc/idc-logo-new.svg')}}" alt="">
                                </div>
                                <div class="col-xs-6 col-xs-offset-1 col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-5 ">
                                    <img class="footer-logo" src="{{asset('css/'.Str::slug(session('company.name')).'/'.Str::slug(session('company.name')).'-logo.svg')}}?id=1" alt="">
                                </div>
                            </div>
                        </div>
                        <div id="content" class="col-sm-6 col-sm-push-5">
                            <div class="mt--3">
                                <h1>{{Lang::get('general.'.session('product.id').'sub-title')}}</h1>
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
                                    <i class="icon icon-home"></i>
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