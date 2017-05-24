@extends('tool.bubblegum._layout.default')

@section('pagetitle', $rating)


@section('head')
@parent
<meta name="description" content="">
<meta name="_token" content="{!! csrf_token() !!}" />
@stop

@section('main')
    <div class="main-container">
        <section class="unpad--bottom">
            <div class="container">
                <div class="row">
                    <div class="frame clearfix top">
                        <div class="col-sm-3 col-sm-offset-1 mt--2">
                            <h4>{{Lang::get('general.'.session('product.id').'title')}}</h4>
                        </div>
                        <div class="col-sm-8 mt--2">
                            <!-- progressbar -->
                            <ul class="process-stepper clearfix mb--1" data-process-steps="{{ count($menu )}}">
                            @foreach ($menu as $key=>$pages)
                                @if($pages['display'])
                                <li class="{{$pages['class']}} {{$pages['complete'] || $key==$section ? 'active':''}}">
                                    <span>{{ $pages['title'] }}</span>
                                    <ul>
                                    @foreach ($pages['pages'] as $pkey => $qpage)
                                        <li class="{{$qpage['done'] || ($pkey == 'page'.$page && $key==$section)? 'done':''}}"></li>
                                    @endforeach
                                    </ul>
                                </li>
                                @endif
                            @endforeach
                            </ul>
                        </div>
                        {{-- <div class="col-sm-6 col-md-5"> <div class="background-image-holder"> <img src="{{asset('images/tools/'.$tool->id.'/homepage.jpg')}}" alt=""> </div> </div> --}}
                        <div id="content" class="col-sm-9 col-sm-push-3">
                            <span class="lead">Results: <strong>{{$title}}</strong></span class="lead">
                            <h3>{!!$heading!!}</h3>
                            {!!$ratingcopy!!}
                            @if($graph)
                            <div class="col-xs-12">
                                <div id="section-graph" class="graph" style="">

                                </div>
                                @columnchart('section_graph', 'section-graph')
                            </div>
                            @endif
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt--1 text-center">
                                        <a class="btn btn-client" href="{{$next}}">
                                            <span class="btn__text">{{Lang::get('general.continue')}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-2 col-sm-pull-9 col-sm-offset-1 text-center">
                            <div class="hero">
                                <i class="icon {{ $icon }}" title=""></i>
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
<script type="text/javascript">var error = false;</script>
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