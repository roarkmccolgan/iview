@extends('tool.default._layout.default')

@section('pagetitle', $rating)


@section('head')
@parent
<meta name="description" content="">
<meta name="_token" content="{!! csrf_token() !!}" />
@stop

@section('main')
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-2">
                    <h1>{{Lang::get('general.'.session('product.id').'title')}} <small>{{Lang::get('general.'.session('product.id').'sub-title')}}</small></h1>
                </div>
                <div class="col-xs-2" style="text-align: right">
                    <div class="icon-idc" style="width: 180px; height: 51px; margin-left: 10px; margin-top: 5px; margin-bottom: 5px; display: inline-block; vertical-align: middle;" ></div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-8 col-xs-offset-2">
                <div class="sub-report clearfix">
                    <h2 class="fs-subtitle">Results</h2>
                    <h1 class="fs-title">{{$title}}</h1>
                    <hr>
                    <h2 class="question">{{Lang::get('general.your')}} {{$title}} {{Lang::get('general.areat')}} {{$rating}}</h2>
                    {!!$ratingcopy!!}
                    <a href="{{$next}}" class="btn btn-primary pull-right btn-lg btn-window">{{Lang::get('general.continue')}} <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pagescript')
@parent
<script type="text/javascript">var error = false;</script>
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
<script>
jQuery(window).on("beforeunload", function(event){
      return "Are you sure you would like to leave this page? Your answers for this page will be lost";
});
</script>
@stop