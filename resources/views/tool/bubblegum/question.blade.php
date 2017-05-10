@extends('tool.bubblegum._layout.default')

@section('pagetitle', $heading)
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
                        <div id="content" class="col-sm-6 col-sm-push-5">
                            <!-- end progressbar -->
                            @foreach ($questions as $question)
                                {!! Form::open(array('url' => session('localeUrl').'quiz/'.$section.'/page'.$page,'id'=>'msform','class'=>'')) !!}
                                    <!-- fieldsets -->
                                    <fieldset class="" id="formbody">
                                        <div id="mask"></div>
                                        <h3 class="question">{!!$question['question']!!}</h3>
                                        {!! Form::errors($errors) !!}
                                        {!!Form::hidden('section', $section)!!}
                                        {!!Form::hidden('page', $page)!!}
                                        @foreach ($questions as $num=>$q)
                                            <div class="row">
                                                @if ($q['type'] == 'radio' || $q['type'] == 'checkbox')
                                                    {!! Form::idcBubblegumRadio($num,$q,$q['type'],$page) !!}
                                                @elseif ($q['type'] == 'slider')
                                                    {!! Form::idcBubblegumGroup($num,$q,$page,'radio',true) !!}
                                                @elseif ($q['type'] == 'groupradio')
                                                    {!! Form::idcGroup($num,$q,$page,'radio') !!}
                                                @elseif ($q['type'] == 'icon')
                                                    {!! Form::idcIcon($section,$q,$page,$num) !!}
                                                @elseif ($q['type'] == 'button')
                                                    {!! Form::idcBubblegumButton($section,$q,$page) !!}
                                                @elseif ($q['type'] == 'text')
                                                    {!! Form::idcInput($num,$q,$page) !!}
                                                @endif
                                            </div>
                                        @endforeach
                                    </fieldset>
                                {!! Form::close() !!}
                            @endforeach  
                        </div>
                        <div class="col-sm-3 col-sm-pull-6 col-sm-offset-1 text-center">
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
<script src="{{{ asset('js/templates/'.session('template').'/unslider-master/dist/js/unslider-min.js')}}}"></script>
<script type="text/javascript">var error = false;</script>
<script src="{{{ asset('js/plugins.js')}}}"></script>
<script src="{{{ asset('js/templates/'.session('template').'/main.js?i=2')}}}"></script>
@if ($script)
<script>
$(function() {
    @foreach ($script as $s)
       {!! $s !!}
    @endforeach
});
</script>
@endif
<script>
$('#mask').hide(); //hidemask
var daForm = $('#msform');
@if ($report)
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    function getSectionResults() {
        return $.ajax({
            url: '/api/results/{{$section}}',
        });
    }
    daForm.click(function(e){
        e.preventDefault();
        var parent = $('formbody');
        var parentHeight = parent.css('height');
        parent.css('height',parentHeight);
        parent.children().fadeOut(300, function() { $(this).remove()});

        //getContent
        $('#mask').show();
        getSectionResults().done(function(r) {
            if (r) {
                console.log(r);
                $('#mask').hide();
                var hasimage = '';
                @if(isset($report['image']) && $report['image']!==false)
                    hasimage = '<div class="rep-img">'+
                                    '<img src="{{URL::to("/").'/'.$report['image']}}" alt="">'+
                                '</div>';
                @endif
                html = '<div class="repwrap">'+
                            '<div class="sectionresults">'+
                                '<h4>Your {{$section}} is at 23</h4>'+
                                hasimage+
                                '<div class="rep-text">'+
                                    '{{addslashes($report['text'])}}'+
                                '</div>'+
                                '<div class="clearfix"></div>'+
                            '</div>'+
                            '<button class="btn btn-primary pull-right btn-lg" type="submit" value="'+val+'" name="answer">{{Lang::get('general.next')}} <i class="icon-arrow_right"></i></button>'+
                        '</div>';
                $(html).hide().appendTo(parent);
                $('div.repmod').animate({ height: repheight },400,function(){
                    $('div.repwrap').find('button.btn.btn-primary.pull-right').fadeIn("fast");
                });
            } else {
                console.log(r);
            }
        })
        .fail(function(x) {
            alert('Please refresh page and try again');
        });
    });
@else
    if($('.groupcheck').length){ //radio button sets
        var complete = false;
        var slider = $('.optionslider').unslider({
            /*nav: false,*/
            arrows: false,
            infinite: false,
        });
        slider.height('initial');
        slider.on('unslider.change', function(event, index, slide) {
            if(parseInt(index)+1 == slider.find('li').length){
                complete = true;
            }
        });
        $('.input-radio').on('click', function(e) {
            if(!complete){
                $(this).closest('div.groupcheck').removeClass('error');
                setTimeout(
                    function() {
                        slider.unslider('next');
                    },
                    400);
            }else{
                var valid = true;
                var checkset = false;
                setTimeout(
                    function() {
                        jQuery.each($('.groupcheck'), function( i, item ) {
                            $(item).removeClass('error');
                            if(!$(item).find(':radio:checked').val()){
                                checkset = item;
                                valid = false;
                                return false;
                            }
                        });
                        if(!valid){
                            complete = false;
                            $(checkset).addClass('error');
                            $liparent = $(checkset).closest('li');
                            slider.unslider('animate:'+slider.find('li').index($liparent));

                            /*$('html, body').animate({
                                scrollTop: $(checkset).offset().top-20
                            }, 500);*/
                        }else{
                            $('#mask').show();
                            daForm.submit();
                        }
                    },
                    100);
                        
            }
        });
    }else{
        $('.input-radio').click(function(e) {
            setTimeout(
                function() {
                    $('#mask').show();
                    daForm.submit();
                },
                100);
        });
    }
@endif
if($('.checkbox_group').length){
    var selected = 0;
    $(':checkbox').change(function() {
        if(this.checked) {
            selected++;
        }else{
            selected--;
        }
    });
    $('button.next').click(function(e){
        var title = '{{$heading}}';
        var sibling = $(this).closest("fieldset");
        var parentHeight = sibling.css('height');
        var num = $('.checkbox_group').length;
        if(num>0){
            if(selected>0){
                $('div#error').fadeOut('fast', function() {
                    this.remove();
                });

                @if ($report)
                e.preventDefault();
                var start = 0;
                $('button.btn.btn-primary.pull-right').fadeOut('fast');
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
                                    '<button class="btn btn-primary pull-right btn-lg" type="submit">{{Lang::get('general.'.session('product.id').'next')}} <i class="icon-arrow_right"></i></button></button>'+
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
                        '<div id="error" class="text-center" style="padding:10px 0;">'+
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