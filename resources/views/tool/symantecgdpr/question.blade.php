@extends('tool.'.session('template').'._layout.default')

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
                        <div class="col-xs-12 col-sm-10 col-sm-offset-1 visible-xs mb--1 mt--1">
                            <div class="row">
                                <div class="col-xs-4 col-sm-3 col-md-2">
                                    <img class="footer-logo" src="{{asset('css/idc/idc-logo-new.svg')}}" alt="">
                                </div>
                                <div class="col-xs-4 col-xs-offset-4 col-sm-3 col-sm-offset-6 col-md-2 col-md-offset-8 ">
                                    <img class="footer-logo" src="{{asset('css/'.str_slug(session('company.name')).'/'.str_slug(session('company.name')).'-logo.svg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1 mt--2">
                            <h4>{{Lang::get('general.'.session('product.id').'title')}}</h4>
                        </div>
                        <div class="col-sm-8 mt--2">
                            <!-- progressbar -->
                        @if(session('product.id')==7)
                            <!-- progressbar -->
                            <ul class="process-stepper clearfix mb--1" data-process-steps="9" style="margin-bottom: 3.2em">
                            <?php
                            $count = 0;
                            ?>
                            @foreach ($menu as $key=>$pages)
                                @if($pages['display'])
                                    @foreach ($pages['pages'] as $pkey => $qpage)
                                        <?php
                                        $count++;
                                        ?>
                                        <li class="{{$qpage['done'] || ($pkey == 'page'.$page && $key==$section)? 'active':''}}">
                                            {{$count}}
                                        </li>
                                    @endforeach
                                @endif
                            @endforeach
                            </ul>
                        @else
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
                        @endif
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
                                                @elseif ($q['type'] == 'select')
                                                    {!! Form::idcSelect($num,$q,$page) !!}
                                                @elseif ($q['type'] == 'icon')
                                                    {!! Form::idcIcon($section,$q,$page,$num) !!}
                                                @elseif ($q['type'] == 'button')
                                                    {!! Form::idcBTButton($section,$q,$page) !!}
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
                                @if($icon=='info')
                                <span class="icon icoicon-infoicon">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span>
                                </span>
                                @else
                                <span class="icon icoicon-hpgdpr">
                                    <span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span><span class="path8"></span><span class="path9"></span><span class="path10"></span><span class="path11"></span><span class="path12"></span><span class="path13"></span><span class="path14"></span><span class="path15"></span>
                                </span>
                                @endif
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
<script src="//cdn.jsdelivr.net/velocity/1.2.3/velocity.min.js"></script>
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
            speed: 300
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
    var numrequired = $('#numrequired').val();
    var max = $('#max').val();
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
            console.log(selected);
            console.log(numrequired);
            console.log(max);
            if((selected>=numrequired && max==0) || (selected>=numrequired && selected<=max) || (numrequired==1 && max===0) || (numrequired==1 && selected<=max)){
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

            }else if(selected>=numrequired && max!=0 && selected>max){
                e.preventDefault();
                var errStr = '{{trans('general.multimaxierror')}}';
                errStr = errStr.replace('#number#', numrequired);
                errStr = errStr.replace('#max#', max);
                if(error==false){
                    
                    html = 
                        '<div id="error" class="text-center" style="padding:10px 0;">'+
                            '<span style="color: #ed2024;">'+errStr+'</span>'+
                        '</div>';
                    $(html).hide().appendTo(sibling).fadeIn("fast");
                    error=true;
                }else{
                    $('#error span').text(errStr);
                }
            } else{
                e.preventDefault();
                var errStr = '{{trans('general.multierror')}}';
                errStr = errStr.replace('#number#', numrequired);
                if(error==false){
                    html = 
                        '<div id="error" class="text-center" style="padding:10px 0;">'+
                            '<span style="color: #ed2024;">'+errStr+'</span>'+
                        '</div>';
                    $(html).hide().appendTo(sibling).fadeIn("fast");
                    error=true;
                }else{
                    $('#error span').text(errStr);
                }
                
            }
        }
    })
}
</script>
@foreach ($questions as $q => $question)
    @if(isset($question['other']))
    <?php
    $other = explode("|", $question['other']);
    ?>
    <script>
    var otherBut = $( "input[value='{{$other[0]."|".$other[1]}}']" );
    if(otherBut.length){
        console.log('yes');
        otherBut.unbind('click');
        otherBut.on('change', function(event){
            event.preventDefault();
            otherBut.parent('.input-checkbox').hide();
            html = 
            '<div class="otherdiv" id="other_{{$q}}">'+
                '<div class="col-sm-12">'+
                    '<input id="other_input_{{$q}}" class="validate-required" type="text" name="answer" placeholder="{{$other[2]}}" />'
                '</div>'+
            '</div>';
            $(html).insertAfter( otherBut.parent('.input-checkbox') );
            $('button:submit').click(function(e){
                $(window).off('beforeunload');
                e.preventDefault();
                var that = this;
                var newDiv = $('#other_{{$q}}').addClass('error');
                var newInput = $('#other_input_{{$q}}');
                if(newInput.val()!='' && newInput.val().length>=3){
                    $('#mask').show();
                    jQuery.each($('button.btn-q'), function( i, item ) {
                        if(that!=item) $(item).prop( "disabled", true );
                    });
                    setTimeout(
                        function() {
                            $(that).unbind('click').trigger('click');
                        },
                    800);
                }else{
                    newDiv.addClass('error');
                }
            });
        });
    }else{
        console.log('you');
    }
    </script>
    @endif
@endforeach
@stop