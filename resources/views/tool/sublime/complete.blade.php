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
							<h2>{{$heading}}</h2>
							<h1 class="result">{{$result}}</h1>
							<div class="row">
								@if($graph)
								<div class="col-xs-12">
									<div id="overall-graph" class="graph" style="">

									</div>
									@columnchart('overall_graph', 'overall-graph')
								</div>
								@endif
								<div class="{{$graph ? 'col-xs-12':'col-xs-12'}}">
									<p>{!!trans(session('product.alias').'.completecopy.'.$resultkey)!!}</p>
									<p>
										{!!trans(session('product.alias').'.completecopy.fullreport')!!}<br/>
										{!!trans(session('product.alias').'.completecopy.provide')!!}
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-xs-12">
									<div style="padding: 20px; border:1px solid #EFEFEF; padding-top: 40px; margin-top: 20px;">
										<div class="row">
											{{ Form::open(array('url' => session('localeUrl').'quiz/complete','id'=>'form-email-report','class'=>'clearfix')) }}
											<fieldset>
												@foreach(config('terminal.default_fields') as $fieldKey => $field )
													<div class="col-md-{{$field['col']}} form-group{{$errors->has($fieldKey)?' error':''}}">
														@php
														switch ($field['type']) {
															case 'text':
																@endphp
																<label>{!!trans('general.'.$fieldKey)!!}{{$field['required'] ? '*':''}}</label>
																<input type="text" class="form-control {{$field['required'] ? 'req':''}}" value="{{isset($source[$fieldKey]) ? $source[$fieldKey]:''}}" name="{{$fieldKey}}">
																<span>{!!trans('general.'.$field['error'])!!}</span>
																@php
																break;
															case 'select':
																@endphp
																<label>{!!trans('general.'.$fieldKey)!!}{{$field['required'] ? '*':''}}</label>
																<select id="{{$fieldKey}}" name="{{$fieldKey}}" class="form-control sel {{$field['required'] ? 'req':''}}">
																	@foreach($field['options'] as $value => $label)
																		<option value="{{$value=='null' ? '': $value}}">{{$label}}</option>
																	@endforeach
																</select>
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
														<div class="col-md-6 form-group{{$errors->has($extraField['name'])?' error':''}}">
															<?php
															switch($extraField['type']){
																case "select":
																?>
																<label>{!!trans('extra.'.$extraField['trans'])!!} {{$extraField['required'] ? '*':''}}</label>
																<select id="{{$extraField['name']}}" name="extra[{{$extraField['name']}}]" class="form-control sel {{$extraField['required'] ? 'req':''}}">
																	<option value="">Please select</option>
																	@foreach($extraField['options'] as $optKey=>$option)
																	<option value="{!!trans('extra.'.$optKey)!!}">{!!trans('extra.'.$optKey)!!}</option>
																	@endforeach
																</select>
																<span>{!!trans('extra.'.$extraField['error'])!!}</span>
																<?php
															}
															?>
														</div>
														@endforeach
													@endif
												@endforeach

												<div class="col-xs-12 checkbox form-group{{$errors->has('accept')?' error':''}}">
													<label class="checkbox">
														<input type="checkbox" class="req" name="terms">
														{!!trans('general.accept')!!} 
													</label>
													<span>{!!trans('general.errorAccept')!!}</span>
													<p class="help-block" style="margin-top: 10px;">
														<strong>{!!trans('general.terms')!!} *</strong><br/>
														{!!trans('general.'.session('product.id').'byreg')!!}
													</p>
												</div>
												<div class="col-xs-6">
													<em>* {!!trans('general.required')!!}</em>
												</div>
												<div class="col-xs-12">
													<!-- <a class="btn btn-lg btn-danger pull-right {{$btnclass}}" href="download"><i class="icon-email"></i> {!!trans('general.emailreport')!!}</a> -->
													<button type="submit" class="btn btn-lg btn-danger pull-right {{$btnclass}}"><i class="icon-email"></i> {!!trans('general.emailreport')!!}</button>
												</div>
											</fieldset>
											{{ Form::close() }}
										</div>
									</div>
                                        <!-- <pre>
                                            {{print_r(session('result'))}}
                                        </pre> -->
                                    </div>
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
