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
                    <div class="head">
                        <h1>
                            {{Lang::get('general.'.session('product.id').'title')}}
                        </h1>
                        <small>{{Lang::get('general.'.session('product.id').'sub-title')}}</small>
                        <div class="idclogo"><img src="{{asset('images/tools/idclogoblk.png')}}" alt=""></div>
                    </div>
                    <div class="sidebar">
                        <!-- progressbar -->
                        <ol class="progressbar">
                            @foreach ($menu as $key=>$pages)
                                @if($pages['display'])
                                <!-- <li class="{{$pages['class']}} {{$pages['complete'] || $key==$section ? 'active':''}}" style="width: {{100/count($menu)}}%">
                                    <ul> -->
                                    @foreach ($pages['pages'] as $pkey => $qpage)
                                        <li class="{{$qpage['done'] ? 'completed' : ($pkey == 'page'.$page && $key==$section? 'active':'')}}" style="width: {{100/count($pages['pages'])}}%"></li>
                                    @endforeach
                                    <!-- </ul>
                                </li> -->
                                @endif
                            @endforeach
                            
                        </ol>
                    </div>
                    <div class="intro">
                        @foreach ($questions as $question)
                            {!! Form::open(array('url' => 'quiz/'.$section.'/page'.$page,'id'=>'msform','class'=>'')) !!}
                                <!-- fieldsets -->
                                <fieldset>
                                    <div id="mask"></div>
                                    
                                    <h2>{{$heading}} {{$menu[$section]['pages']['page'.$page]['progress']}}</h2>
                                    <h1>{!!$question['question']!!}</h1>
                                    {!! Form::errors($errors) !!}
                                    {!!Form::hidden('section', $section)!!}
                                    {!!Form::hidden('page', $page)!!}
                                    @foreach ($questions as $num=>$q)
                                        @if ($q['type'] == 'radio')
                                            {!! Form::idcRadio($num,$q,'radio',$page) !!}
                                        @elseif ($q['type'] == 'checkbox')
                                            {!! Form::idcCheckbox($num,$q,$page) !!}
                                        @elseif ($q['type'] == 'groupradio')
                                            {!! Form::idcGroup($num,$q,$page,'radio') !!}
                                        @elseif ($q['type'] == 'slider')
                                            {!! Form::idcGroup($num,$q,$page,'radio',true) !!}
                                        @elseif ($q['type'] == 'icon')
                                            {!! Form::idcIcon($section,$q,$page,$num) !!}
                                        @elseif ($q['type'] == 'button')
                                            {!! Form::idcButton($section,$q,$page) !!}
                                        @elseif ($q['type'] == 'text')
                                            {!! Form::idcInput($num,$q,$page) !!}
                                        @endif
                                    @endforeach
                                </fieldset>
                            {!! Form::close() !!}
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('pagescript')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ asset('js/vendor/jquery-1.10.1.min.js')}}"><\/script>')</script>
<script type="text/javascript">var error = false;</script>
<script src="{{{ asset('js/plugins.js')}}}"></script>
<!-- <script src="{{{ asset('js/icheck.js')}}}"></script> -->
<script src="{{{ asset('js/templates/'.session('template').'/main.js')}}}"></script>
@if ($script)
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
$('#mask').hide(); //hidemask
@if ($report)
    var els;
    if($('button.btn-q').length){
        $('button.btn-q').click(function(e){
            $(this).addClass('check');
            e.preventDefault();
            el = e.target;
            setTimeout(
                function() {
                    var title = $(el).text();
                    var val = $(el).val();
                    var pos = $(el).position();
                    var parent = $(el).parent("fieldset");
                    var parentHeight = parent.css('height');
                    var num = $('button.btn-q').length;
                    var that = el;
                    if(num>0){
                        var start = 1;
                        //inject info
                        html = '<div class="repwrap">'+
                                    '<div class="repmod">'+
                                        '<h4 class="check">'+title+'</h4>'+
                                        /*'<div class="rep-img">'+
                                            '<img src="{{URL::to("/").'/'.$report['image']}}" alt="" width="80" height="80">'+
                                        '</div>'+*/
                                        '<div class="rep-text">'+
                                            '{{addslashes($report['text'])}}'+
                                        '</div>'+
                                        '<div class="clearfix"></div>'+
                                    '</div>'+
                                    '<button class="btn btn-danger pull-right btn-lg" type="submit" value="'+val+'" name="answer">{{Lang::get('general.next')}} <i class="icon-arrow_right"></i></button>'+
                                '</div>';
                        $(html).hide().appendTo(parent);
                        
                        //hide next buttton
                        $('div.repwrap').find('button.btn.btn-danger.pull-right').hide();
                        
                        //move out of view
                        $('div.repwrap').css({
                                position : "absolute",
                                top : pos.top,
                                left: -90000
                        });
                        $('div.repwrap').show();
                        //set original height for later
                        var repheight = $('div.repmod').height();
                        var headheight = $('div.repmod').find('h4').height();
                        $(parent).css({height: repheight+70 });
                        //set heigh to size of title
                        $('div.repmod').height(headheight+10);
                        //hide again
                        //$('div.repwrap').hide();
                        //move bak into view
                        $('div.repwrap').css({
                                left: 0
                        });
                        
                        
                        jQuery.each($('button.btn-q'), function( i, item ) {
                            $(item).fadeOut('fast', function() {
                                start++;
                                if(num == start){                               
                                    $('div.repwrap').fadeIn("fast",function(){
                                        if(pos.top!=0){
                                            $('div.repwrap').animate({
                                                top: 0
                                            }, 'slow', function() {
                                                $('div.repmod').animate({ height: repheight },400,function(){
                                                    $('div.repwrap').find('button.btn.btn-danger.pull-right').fadeIn("fast");
                                                });
                                            });
                                        }else{
                                            $('div.repmod').animate({ height: repheight },400,function(){
                                                $('div.repwrap').find('button.btn.btn-danger.pull-right').fadeIn("fast");
                                            });
                                        }
                                    });
                                }
                            });
                        });
                    }
                },
                500);
        })
    }
@else
    if($('.groupcheck').length){ //radio button sets
        $('#next').click(function(e){
            e.preventDefault();
            var that = this;
            var valid = true;
            var checkset = false;
            jQuery.each($('.groupcheck'), function( i, item ) {
                if(!$(item).find(':radio:checked').val()){
                    checkset = item;
                    valid = false;
                    return false;
                }
                $(checkset).removeClass('error');
            });
            if(!valid){
                $(checkset).addClass('error');
                $('html, body').animate({
                    scrollTop: $(checkset).offset().top-20
                }, 500);
            }else{
                $('#mask').show();
                setTimeout(
                    function() {
                        $(that).unbind('click').trigger('click');
                    },
                    800);
            }
        });
    }else{
        $('button.btn-q').click(function(e){
            e.preventDefault();
            var that = this;
            $(this).addClass('check');
            jQuery.each($('button.btn-q'), function( i, item ) {
                if(that!=item) $(item).prop( "disabled", true );
            });
            $('#mask').show();
            setTimeout(
                function() {
                    $(that).unbind('click').trigger('click');
                },
                800);
        });
    }
        
@endif
if($('label.rel').length){
    $('button.btn.btn-danger.pull-right').click(function(e){
        var title = '{{$heading}}';
        var sibling = $(this).prev("div.holder");
        var pos = false;
        var parentHeight = sibling.css('height');
        var num = $('label.rel').length;
        var selected = 0;
        if(num>0){
            $(sibling).find('input.chq').each(function( index ) {
                if($(this).is(':checked')){
                    console.log($(this));
                    selected ++;
                    pos = $(this).parents('label').position();
                }
            });
            if(selected>0){
                $('div.error').fadeOut('fast', function() {
                    this.remove();
                });

                @if ($report)
                e.preventDefault();
                var start = 0;
                $('button.btn.btn-danger.pull-right').fadeOut('fast');
                jQuery.each($('label.rel'), function( i, item ) {
                    $(item).fadeOut('fast', function() {
                        start++;
                        if(num == start && selected>0){
                                                                
                            //inject new thing
                            html = 
                                '<div class="repwrap">'+
                                    '<div class="repmod">'+
                                        '<h4 class="check">'+title+'</h4>'+
                                        /*'<div class="rep-img">'+
                                            '<img src="{{URL::to("/").'/'.$report['image']}}" alt="" width="80" height="80">'+
                                        '</div>'+*/
                                        '<div class="rep-text">'+
                                            '{{addslashes($report['text'])}}'+
                                        '</div>'+
                                        '<div class="clearfix"></div>'+
                                    '</div>'+
                                    '<button class="btn btn-danger pull-right btn-lg" type="submit">{{Lang::get('general.next')}} <i class="icon-arrow_right"></i></button></button>'+
                                '</div>';
                            
                            $(html).appendTo(sibling);
                        
                        }
                    });
                });

                @endif
            }else{
                e.preventDefault();
                if(error==false){
                    html = 
                        '<div class="error" style="padding:0 15px 0 15px;">'+
                            '<span style="color: #ed2024;">{{Lang::get('general.multierror')}}</span>'+
                        '</div>';
                    $(html).hide().appendTo(sibling).fadeIn("fast");
                    error=true;
                }
                
            }
        }
    })
}
</script>
@stop