<?php

Form::macro('errors', function($errors, $field = false)
	{
		if ($errors->any())
		{
			if ($field && !$errors->has($field))
			{
				return null;
			}
			return View::make('_errors.form', [
				'errors' => $errors,
				'field' => $field
			]);
		}
	return null;
});

Form::macro('idcIcon', function($section,$q,$page,$num){
	$errors = session('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	//$value = Input::old($name)?Input::old($name):(session('questions.'.$section.'.pages.page'.$page.'.questions.'.$num) ? session('questions.'.$section.'.pages.page'.$page.'.questions.'.$num:'');
	$class = '';

	foreach ($q['options'] as $key => $optionSet) {
		$sub = isset($optionSet['sub']) ? '<p>'.$optionSet['sub'].'</p>':'';
		$html.='<button class="info" type="submit" value="'.$optionSet['label'].'" name="answer" id="'.$key.'-'.$name.'">
			<i class="'.$optionSet['class'].'"></i>
			<aside>
				<h3>'.$optionSet['label'].'</h3>
				'.$sub.'
			</aside>
		</button>';
	}
	return $html;
});

Form::macro('idcButton', function($section,$q,$page){
	$errors = session('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$class = '';
	foreach ($q['options'] as $key => $optionSet) {
		$html.='
            <button value="'.$optionSet['label'].'|'.$optionSet['value'].'" type="submit" class="btn-q" name="answer" id="'.$key.'-'.$name.'">'.$optionSet['label'].'</button>';
	}
	
	return $html;
});

Form::macro('idcCheckbox', function($section,$q,$page){
	$errors = session('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$class = '';
	$html.='<div class="holder">';
	foreach ($q['options'] as $key => $optionSet) {
		$html.='
			<label class="rel">
				<input class="chq" type="checkbox" name="answer[]" value="'.$optionSet['label'].'|'.$optionSet['value'].'" id="'.$key.'-'.$name.'" style="display: none;">
				<div class="checktext"><span>'.$optionSet['label'].'</span></div>
			</label>';
	}
	$currentLocal = App::getLocale();
	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
	$btnsize = '-small';
	if($localQuestions=='es'){
		$btnsize = '-small lang';
	}
	$html.='
		</div>
		<button class="btn btn-primary pull-right btn-lg" type="submit">'.Lang::get('general.next').' <i class="fa fa-arrow-right"></i></button></button>';
	return $html;
});