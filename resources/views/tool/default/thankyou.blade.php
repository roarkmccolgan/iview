@extends('tool.default._layout.default')

@section('pagetitle', $heading)


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-2">
                    <h1>{{Lang::get('general.'.session('product.id').'title')}} <small>{{Lang::get('general.'.session('product.id').'sub-title')}}</small></h1>
                </div>
                <div class="col-md-2" style="text-align: right">
                    <div class="icon-idc" style="width: 180px; height: 51px; margin-left: 10px; margin-top: 5px; margin-bottom: 5px; display: inline-block; vertical-align: middle;" ></div>
                </div>
            </div>
        </div>
    </nav>
    
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="trans silverStone">
                    <div class="row">
                        <div class="col-md-12">
                            <div style="padding: 20px;">
                                <strong>{{$heading}}</strong>
                                <div style="margin-left: 30px; font-size: 16px; line-height: 24px">
                                    <p>{{$body}}</p>
                                </div>
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

<script src="{{{ asset('js/templates/'.session('template').'/plugins.js')}}}"></script>
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
