@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="question">
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
                        </div>
                    </div>
                    <div id="results" style="background-color: #FFF; padding: 20px; padding-top: 40px;">
                        <div class="row">
                            <div class="col-xs-10 col-xs-offset-1">
                                <h1 class="result">{{$heading}}</h1>
                                <p>{!!$body!!}</p>
                                @if($tweet)
                                    <a class="btn btn-lg btn-danger" href="http://twitter.com/home/?status={{$tweet}}" target="_blank"><i class="fa fa-twitter"></i> Tweet</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pagescript')
@parent

<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/templates/'.session('template').'/main.js')}}}"></script>
@if (isset($script))
<script>
$(function() {
    @foreach ($script as $s)
       {{ $s }}
    @endforeach
});
</script>
@endif
@stop
