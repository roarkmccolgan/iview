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
							<h1>{{$result}}</h1>
							<div style="margin-left: 30px; font-size: 16px; line-height: 24px">
								<p>{{$sub1}}</p>
								{!!trans('general.'.session('product.id').'fullreport')!!}
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="results" style="background-color: #FFF; padding: 20px; padding-top: 40px;">
				<div class="row">
					{{ Form::open(array('url' => '/'.session('localeUrl').'quiz/complete','id'=>'form-email-report','class'=>'clearfix')) }}
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

						

						<div class="col-md-12 checkbox form-group{{$errors->has('accept')?' error':''}}">
							<label class="checkbox{{$errors->has('terms')?' error':''}}">
								<input type="checkbox" class="req" name="terms">
								{!!trans('general.accept')!!}
							</label>
							<span>{!!trans('general.errorAccept')!!}</span>
							<p class="help-block" style="margin-top: 10px;">
								<strong>{!!trans('general.terms')!!} *</strong><br/>
								{!!trans('general.'.session('product.id').'byreg')!!}
							</p>
						</div>
						<div class="col-md-6">
							<em>* {!!trans('general.required')!!}</em>
						</div>
						<div class="col-md-12">
							<button id="submitBut" type="submit" class="btn btn-lg btn-primary pull-right {{$btnclass}}"><i class="fa fa-envelope-o"></i> {!!trans('general.emailreport')!!}</button>
						</div>
					</fieldset>
					{{ Form::close() }}
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
