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
                    <div class="frame top clearfix">
                        <div class="col-sm-10 col-sm-offset-1 mt--2">
                            <h4>{{Lang::get('general.'.session('product.id').'title')}}</h4>
                        </div>
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="mb--1">
                                <div class="hero text-center">
                                    <i class="icon icon-Ribbon-2"></i>
                                </div>    
                            </div>
                        </div>
                        <div id="content" class="col-sm-7">
                            {{$heading}}
                            <h1>{{$result}}</h1>
                            @if($graph)
                                <div id="overall-graph" class="graph" style="">

                                </div>
                                @columnchart('overall_graph', 'overall-graph')
                            @endif
                            <p class="mt--1">{{$sub1}}</p>
                            <hr class="short">
                            <p>
                                {!!trans('general.'.session('product.id').'fullreport')!!}
                            </p>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="boxed boxed--border">
                                            {{ Form::open(array('url' => '/'.session('localeUrl').'quiz/complete','id'=>'form-email-report','class'=>'text-left' ,'data-success'=>"Thanks for your enquiry, we'll be in touch shortly.", 'data-error'=>"Please fill in all fields correctly.")) }}
                                                @foreach(config('terminal.default_fields') as $fieldKey => $field )
                                                    <div class="col-sm-{{$field['col']}} form-group{{$errors->has($fieldKey)?' error':''}}">
                                                        @php
                                                        switch ($field['type']) {
                                                            case 'text':
                                                        @endphp
                                                            <label>{!!trans('general.'.$fieldKey)!!}{{$field['required'] ? '*':''}}</label>
                                                            <input type="text" name="{{$fieldKey}}" class="{{$field['required'] ? 'validate-required':''}}" value="{{isset($source[$fieldKey]) ? $source[$fieldKey]:''}}" name="{{$fieldKey}}" />
                                                            <span>{!!trans('general.'.$field['error'])!!}</span>
                                                        @php
                                                            break;
                                                        case 'select':
                                                        @endphp
                                                            <label>{!!trans('general.'.$fieldKey)!!}{{$field['required'] ? '*':''}}</label>
                                                            <div class="input-select">
                                                                <select id="{{$fieldKey}}" name="{{$fieldKey}}" class="form-control sel {{$field['required'] ? 'req':''}}">
                                                                    <option value=""></option>
                                                                @foreach($field['options'] as $value => $label)
                                                                    <option value="{{$value=='null' ? '': $value}}">{{$label}}</option>
                                                                @endforeach
                                                                </select>
                                                            </div>

                                                            @if(isset($source[$fieldKey]))
                                                            <script>
                                                                var element = document.getElementById('{{$fieldKey}}');
                                                                element.value = '{{$source[$fieldKey]}}';
                                                            </script>
                                                            @endif
                                                            <span>{!!trans('general.'.$field['error'])!!}</span>
                                                            @php
                                                            break;
                                                        }
                                                        @endphp
                                                    </div>
                                                    @if(isset($field['extra']) && $extra_fields)
                                                        @foreach($extra_fields as $extraKey=>$extraField)
                                                        <div class="col-md-6 form-group{{$errors->has('extra.'.$extraField['name'])?' error':''}}">
                                                            @php
                                                            switch($extraField['type']){
                                                                case "select":
                                                            @endphp
                                                                <div class="input-select">
                                                                    <label>{!!trans('extra.'.$extraField['trans'])!!} {{$extraField['required'] ? '*':''}}</label>
                                                                    <select id="{{$extraField['name']}}" name="extra[{{$extraField['name']}}]" class="form-control sel {{$extraField['required'] ? 'req':''}}">
                                                                        <option value=""></option>
                                                                    @foreach($extraField['options'] as $optKey=>$option)
                                                                        <option value="{!!trans('extra.'.$optKey)!!}">{!!trans('extra.'.$optKey)!!}</option>
                                                                    @endforeach
                                                                    </select>
                                                                    <span>{!!trans('extra.'.$extraField['error'])!!}</span>
                                                                </div>
                                                            @php
                                                            break;
                                                                case "text":
                                                            @endphp
                                                                <label>{!!trans('extra.'.$extraField['trans'])!!} {{$extraField['required'] ? '*':''}}</label>
                                                                <input id="{{$extraField['name']}}" type="text" name="extra[{{$extraField['name']}}]" class="{{$extraField['required'] ? 'validate-required':''}}" value="{{isset($source[$extraField['name']]) ? $source[$extraField['name']]:''}}" />
                                                                <span>{!!trans('extra.'.$extraField['error'])!!}</span>
                                                                @php
                                                            }
                                                            @endphp
                                                        </div>
                                                        @endforeach
                                                    @endif
                                                @endforeach


                                                <div class="col-sm-12 form-group{{$errors->has('terms')?' error':''}}">
                                                    <div class="input-checkbox{{$errors->has('terms')?' error':''}}">
                                                        <div class="inner"></div>
                                                        <input type="checkbox" name="terms" />
                                                    </div>
                                                    <span class="helper">{!!trans('general.accept')!!}</span><br/>
                                                    <span>{!!trans('general.errorAccept')!!}</span>

                                                    <p class="help-block" style="margin-top: 10px;">
                                                        <strong>{!!trans('general.terms')!!} *</strong><br/>
                                                        {!!trans('general.'.session('product.id').'byreg')!!}
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <em>* {!!trans('general.required')!!}</em>
                                                </div>
                                                
                                                <div class="col-sm-12 boxed">
                                                    <button id="submitBut" type="submit" class="btn btn--primary type--uppercase">{!!trans('general.emailreport')!!}</button>
                                                    {{-- <a id="submitBut" href="/demo/splunk_assessment_report.pdf" target="_blank" class="btn btn--primary color--white type--uppercase">{!!trans('general.emailreport')!!}</a> --}}
                                                </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                    <!--end of row-->
                                </div>
                            </div>
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
<script type="text/javascript">
    $(function(){
        $.getJSON("https://freegeoip.net/json/", function(data) {
            var ip = data.ip;
            var country = data.country_name;
            $('select[name="country"]').val(country);
        });
    });
</script>
@stop
</body>

</html>