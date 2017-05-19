@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
    <div class="main-container">
        <section class="unpad--bottom">
            <div class="container">
                <div class="row">
                    <div class="frame top clearfix">
                        <div class="col-sm-10 col-sm-offset-1 mt--2">
                            <h4>{{Lang::get('general.'.session('product.id').'title')}}</h4>
                        </div>
                        <div class="col-sm-4 col-sm-offset-1">
                            <div class="mb--1">
                                <div class="hero text-center">
                                    <i class="icon icon-Like"></i>
                                </div>    
                            </div>
                        </div>
                        <div id="content" class="col-sm-6">
                            <h1>{{$heading}}</h1>
                            <p>{!!$body!!}</p>
                            @if($tweet)
                            <a class="btn bg--twitter btn--icon"  href="http://twitter.com/home/?status={{$tweet}}" target="_blank">
                                <span class="btn__text"><i class="icon-Twitter"></i>Tweet</span>
                            </a>
                            @endif
                            
                        </div>
                        <!-- end content -->
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
