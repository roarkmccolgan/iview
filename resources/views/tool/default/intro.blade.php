@extends('tool.'.session('template').'._layout.default')

@section('pagetitle', Lang::get('general.'.$tool->id.'title'))


@section('head')
@parent
<meta name="description" content="">
@stop

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="splash">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="icon-idc" style="width: 180px; height: 51px;" ></div>
                    </div>
                    <div class="col-sm-8">
                        <h1>
                            {{Lang::get('general.'.$tool->id.'title')}}
                        </h1>
                    </div>
                </div>
                <div class="row">
                    @if($tool->id == 4)
                    <div class="col-sm-7 intro">
                        {!!Lang::get('general.'.$tool->id.'landing')!!}
                    </div>
                    <div class="col-sm-5 col-sm-offset-0 col-xs-8 col-xs-offset-2 action text-center">
                        <a href="{{'/'.session('localeUrl').'quiz/'.Session::get('startSection').'/page1'}}" class="startbut btn btn-primary btn-lg">{{Lang::get('general.'.$tool->id.'startbut')}} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                    </div>
                    @else
                    <div class="col-sm-8 intro">
                        {!!Lang::get('general.'.$tool->id.'landing')!!}
                    </div>
                    <div class="col-sm-4 col-sm-offset-0 col-xs-8 col-xs-offset-2 action">
                        <a href="{{'/'.session('localeUrl').'quiz/'.Session::get('startSection').'/page1'}}" class="startbut btn btn-primary btn-lg">{{Lang::get('general.'.$tool->id.'startbut')}} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i></a>
                    </div>
                    @endif
                    <div class="col-xs-12 sponsor">
                        <small>{{Lang::get('general.'.$tool->id.'assoc')}}</small><br/>
                        @if($tool->id == 4)
                        <div class="icon-{{session('company.alias')}}" style="width: 120px; height: 120px; margin: 0 auto; margin-top: 5px;" ></div>
                        @else
                        <div class="icon-{{session('company.alias')}}" style="width: 180px; height: 51px; margin: 0 auto; margin-top: 5px;" ></div>
                        @endif
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