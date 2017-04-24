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

Form::macro('idcRadio', function($num,$q,$type,$page){
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$selected = isset($q['selected'])? $q['selected']:false;
	if($selected){
		if(strpos($selected, "|")!==false){
			$selected = explode('|', $selected);
            $selected = $selected[0];
		}
	}
	//$value = Input::old($name)?Input::old($name):(Session::get('questions.'.$section.'.pages.page'.$page.'.questions.'.$num) ? Session::get('questions.'.$section.'.pages.page'.$page.'.questions.'.$num:'');
	$class = '';

	foreach ($q['options'] as $key => $optionSet) {
		$sub = isset($optionSet['sub']) ? '<p>'.$optionSet['sub'].'</p>':'';
		$class = isset($optionSet['class']) ? $optionSet['class']:'';
		$checked = $optionSet['label']==$selected? ' checked':'';
		$value = $optionSet['value']===false ? $optionSet['label']:$optionSet['label'].'|'.$optionSet['value'];
		$html.='<button class="btnoption radius '.$class.$checked.'" type="submit" value="'.$value.'" name="answer" id="'.$key.'-'.$name.'">
			<i class="fa fa-check"></i> <span class="idc'.$type.'">'.$optionSet['label'].' '.$sub.'</span>
		</button><div class="clearfix"></div>';
	}
	return $html;
});

Form::macro('idcBubblegumRadio', function($num,$q,$type,$page){
	$errors = session('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$selected = isset($q['selected'])? $q['selected']:false;
	if($selected){
		if(strpos($selected, "|")!==false){
			$selected = explode('|', $selected);
            $selected = $selected[0];
		}
	}
	$class = '';
	$disabled = 'disabled';
	foreach ($q['options'] as $key => $optionSet) {
		$checked = $optionSet['label']==$selected? 'checked':'';
		$disabled = ($disabled == 'disabled' && $optionSet['label']==$selected) ? '':'disabled';
		$html.='
				<div class="col-md-4 mb--1">
					<div class="input-radio std '.$checked.'">
						<div class="inner"></div>
                        <label>'.$optionSet['label'].'</label>                        
                        <input class="btn-q" type="radio" name="answer" value="'.$optionSet['label'].'|'.$optionSet['value'].'" id="'.$key.'-'.$name.'" '.$checked.' />
                    </div>					
				</div>';
	}
	$html.='
		<div class="col-md-12">
			<div class="mt--1">
				<button id="next" '.$disabled.' class="btn btn-client pull-right btn-lg next" type="submit">'.Lang::get('general.next').'</button>
			</div>
		</div>';
	return $html;
});

Form::macro('idcGroup', function($section,$q,$page,$type,$slider=false){
	//slider is like a a range of values 1-5 $optionSet also has a labels ($optionSet['from'] and $optionSet['to']) like 1 - not likely and 5 - very likely
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$class = $slider ? 'slider':'radiobox';
	$selected = isset($q['selected'])? $q['selected']:false;
	
	$html.='<div class="row">';
	foreach ($q['options'] as $key => $optionSet) {
			$style = $slider ? 'style="width:'.(99/count($optionSet['options'])).'%"':'';
			$html.='
				<div class="col-md-12 groupcheck">
					<h4>'.$optionSet['label'].'</h4>
					<fieldset>';
			foreach ($optionSet['options'] as $setkey => $option) {
				$checked = ($selected[$optionSet['name']][0]==$option['label'].'|'.$option['value']) ? ' checked':'';
				$html.='<div class="'.$class.'" '.$style.'>';
				$html.= isset($optionSet['from']) && $setkey==0 ? '<div class="from">'.$optionSet['from'].'</div>' : (isset($optionSet['to']) && $setkey==count($optionSet)-1 ? '<div class="to">'.$optionSet['to'].'</div>' : ''); 
				$html.='<input'.$checked.' class="chq" type="'.$type.'" name="answer['.$optionSet['name'].']" value="'.$option['label'].'|'.$option['value'].'" id="'.$setkey.'-'.$optionSet['name'].'">
						<label for="'.$setkey.'-'.$optionSet['name'].'">'.$option['label'].'</label>';
				$html.='</div>';
			}
			$html.='
					</fieldset>
				</div>
			';
	}
	$html.='</row>';
	$currentLocal = App::getLocale();
	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
	$btnsize = '-small';
	if($localQuestions=='es'){
		$btnsize = '-small lang';
	}
	$html.='
	<button id="next" class="btn btn-danger pull-right" style="padding:15px 20px; font-size:18px; margin-right: 20px;">'.Lang::get('general.next').' &nbsp; <i class="fa fa-arrow-circle-right"></i></button>';
	return $html;
});

Form::macro('idcBubblegumGroup', function($section,$q,$page,$type,$slider=false){
	//slider is like a a range of values 1-5 $optionSet also has a labels ($optionSet['from'] and $optionSet['to']) like 1 - not likely and 5 - very likely
	$errors = Session::get('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$class = $slider ? 'radioslider':'radiobox';
	$selected = isset($q['selected'])? $q['selected']:false;
	$disabled = 'disabled';
	
	$html.='';
	foreach ($q['options'] as $key => $optionSet) {
			$style = $slider ? 'style="width:'.(99/count($optionSet['options'])).'%"':'';
			$html.='
				<div class="col-md-12 groupcheck mb--1">
					<h4 class="color--primary">'.$optionSet['label'].'</h4>
					<fieldset>';
			foreach ($optionSet['options'] as $setkey => $option) {
				$checked = ($selected[$optionSet['name']][0]==$option['label'].'|'.$option['value']) ? 'checked':'';
				if(isset($optionSet['from']) && $setkey==0){
					$html.= '
						<div class="clearfix">
							<div class="from pull-left text-center" '.$style.'>'.$optionSet['from'].'</div>
							<div class="from pull-right text-center" '.$style.'>'.$optionSet['to'].'</div>
						</div>
					';
				}
				$html.='<div class="'.$class.' input-radio text-center '.$checked.'" '.$style.'>';
				$html.='<div class="inner"></div>
                        <label for="'.$setkey.'-'.$optionSet['name'].'">'.$option['label'].'</label>                        
                        <input class="btn-q" type="radio" name="answer['.$optionSet['name'].']" value="'.$option['label'].'|'.$option['value'].'" id="'.$setkey.'-'.$optionSet['name'].'" '.$checked.' />';
				$html.='</div>';
			}
			$html.='
					</fieldset>
				</div>
			';
	}
	$html.='';
	$currentLocal = App::getLocale();
	$localQuestions = $currentLocal=='en' ? '' : $currentLocal;
	$btnsize = '-small';
	if($localQuestions=='es'){
		$btnsize = '-small lang';
	}
	$html.='
	<div class="col-md-12">
			<div class="mt--1">
				<button id="next" class="btn btn-client pull-right btn-lg next" type="submit">'.Lang::get('general.next').'</button>
			</div>
		</div>';
	return $html;
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
Form::macro('idcBubblegumButton', function($section,$q,$page){
	$errors = session('errors');
	$html ='';
	$name = $q['name'];
	$html.=Form::hidden('question', $name);
	$question = $q['question'];
	$selected = isset($q['selected'])? $q['selected']:false;
	if($selected){
		if(strpos($selected, "|")!==false){
			$selected = explode('|', $selected);
            $selected = $selected[0];
		}
	}
	$class = '';
	$disabled = 'disabled';
	foreach ($q['options'] as $key => $optionSet) {
		$checked = $optionSet['label']==$selected? 'checked':'';
		$disabled = ($disabled == 'disabled' && $optionSet['label']==$selected) ? '':'disabled';
		$html.='
				<div class="col-md-4 mb--1">
					<div class="input-radio input-radio--innerlabel '.$checked.'">
                        <label>'.$optionSet['label'].'</label>
                        <div class="inner"></div>
                        <input class="btn-q" type="radio" name="answer" value="'.$optionSet['label'].'|'.$optionSet['value'].'" id="'.$key.'-'.$name.'" '.$checked.' />
                    </div>					
				</div>';
	}
	$html.='
		<div class="col-md-12">
			<div class="mt--1">
				<button id="next" '.$disabled.' class="btn btn-client pull-right btn-lg next" type="submit">'.Lang::get('general.next').'</button>
			</div>
		</div>';
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
		<button id="next" class="btn btn-danger pull-right btn-lg next" type="submit">'.Lang::get('general.next').' <i class="fa fa-arrow-circle-right"></i></button></button>';
	return $html;
});