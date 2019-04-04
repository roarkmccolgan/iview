<?php

Form::macro('errors', function ($errors, $field = false) {
    if ($errors->any()) {
        if ($field && !$errors->has($field)) {
            return null;
        }
        return View::make('_errors.form', [
        'errors' => $errors,
        'field' => $field
        ]);
    }
    return null;
});

Form::macro('idcSelect', function ($num, $q, $page) {
    $errors = Session::get('errors');
    $name = $q['name'];
    $question = $q['question'];
    $html =Form::hidden('question', $name);
    $html.='
	<div class="col-md-12">
		<div class="input-select">
			<select name="answer">';
    
    
    $selected = isset($q['selected'])? $q['selected']:false;
    if ($selected) {
        if (strpos($selected, "|")!==false) {
            $selected = explode('|', $selected);
            $selected = $selected[0];
        }
    }

    foreach ($q['options'] as $key => $value) {
        $checked = $value==$selected? ' selected':'';
        $value = $key;
        $html.='
		<option value="'.$key.'"'.$checked.'>'.$value.'</option>';
    }
    $html.='
			</select>
		</div>
	</div>
	';
    $html.='
				<div class="col-md-12">
					<div class="mt--1">
						<button id="next" class="btn btn-client pull-right btn-lg next" type="submit">'.Lang::get('general.next').'</button>
					</div>
				</div>';
    return $html;
});

Form::macro('idcRadio', function ($num, $q, $type, $page) {
    $errors = Session::get('errors');
    $html ='';
    $name = $q['name'];
    $html.=Form::hidden('question', $name);
    $question = $q['question'];
    $selected = isset($q['selected'])? $q['selected']:false;
    if ($selected) {
        if (strpos($selected, "|")!==false) {
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

Form::macro('idcBubblegumRadio', function ($num, $q, $type, $page) {
    //$type= 'radio';
    $errors = session('errors');
    $required = isset($q['required']) ? $q['required'] : 1;
    $max = isset($q['max']) ? $q['max'] : 0;
    $html = '<input type="hidden" name="numrequired" id="numrequired" value="'.$required.'">';
    $html .= '<input type="hidden" name="max" id="max" value="'.$max.'">';
    $name = $q['name'];

    $html.=Form::hidden('question', $name);
    $question = $q['question'];
    $selected = isset($q['selected'])? $q['selected']:false;
    if ($selected) {
        if (is_array($selected)) {
            foreach ($selected as $key => $value) {
                if (strpos($value, "|")!==false) {
                    $valarr = explode('|', $value);
                    $labelonly[$key] = $valarr[0];
                }
            }
            $selected = $labelonly;
        } else {
            if (strpos($selected, "|")!==false) {
                $selected = explode('|', $selected);
                $selected = $selected[0];
            }
        }
    }
    $class = '';
    $disabled = 'disabled';
    foreach ($q['options'] as $key => $optionSet) {
        $checked = '';
        if ($type=='radio' && $selected) {
            $checked = $optionSet['label']==$selected? 'checked':'';
        } elseif ($type=='checkbox' && $selected) {
            $exists = array_search($optionSet['label'], $selected);
            $checked = $exists !== false ? 'checked':'';
        }
        $hint = '';
        $hintIcon = '';
        if (isset($optionSet['hint'])) {
            $hint = ' data-tooltip="'.$optionSet['hint'].'"';
            $hintIcon = '<i class="icon icon--xs icon-Information"></i>';
        }
        
        $disabled = ($disabled == 'disabled' && $optionSet['label']==$selected) ? '':'disabled';
        $name = $type=='checkbox'?'answer[]':'answer';
        $html.='
				<div'.$hint.' class="col-sm-12 '.$type.'_group">
					<div class="input-'.$type.' std '.$checked.' mb--1">
						<div class="inner"></div>
						<label>'.$optionSet['label'].' '.$hintIcon.'</label>
                        <input class="btn-q" type="'.$type.'" name="'.$name.'" value="'.$optionSet['label'].'|'.$optionSet['value'].'" id="'.$key.'-'.$q['name'].'" '.$checked.' />
                    </div>					
				</div>';
    }
    if ($type=='checkbox') {
        $html.='
				<div class="col-md-12">
					<div class="mt--1">
						<button id="next" class="btn btn-client pull-right btn-lg next" type="submit">'.Lang::get('general.next').'</button>
					</div>
				</div>';
    }
    return $html;
});

Form::macro('idcGroup', function ($section, $q, $page, $type, $slider = false) {
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
    if ($localQuestions=='es') {
        $btnsize = '-small lang';
    }
    $html.='
	<button id="next" class="btn btn-danger pull-right" style="padding:15px 20px; font-size:18px; margin-right: 20px;">'.Lang::get('general.next').' &nbsp; <i class="fa fa-arrow-circle-right"></i></button>';
    return $html;
});

Form::macro('idcBubblegumGroup', function ($section, $q, $page, $type, $slider = false, $margin = false) {
    //slider is like a a range of values 1-5 $optionSet also has a labels ($optionSet['from'] and $optionSet['to']) like 1 - not likely and 5 - very likely
    $errors = Session::get('errors');
    $html ='';
    $margin = $margin ? 'unmarg--bottom':'';
    $name = $q['name'];
    $html.=Form::hidden('question', $name);
    $question = $q['question'];
    $class = $slider ? 'radioslider':'radiobox';
    $selected = isset($q['selected'])? $q['selected']:false;
    $disabled = 'disabled';
    
    $html.='
			
			<div class="optionslider">
				<ul>';
    foreach ($q['options'] as $key => $optionSet) {
            $style = $slider ? 'style="line-height: 1.2em; width:'.(99/count($optionSet['options'])).'%"':'';
            $hint = '';
            $hintIcon = '';
        if (isset($optionSet['hint'])) {
            $hint = ' <span>'.$optionSet['hint'].'</span>';
        }
            $html.='
					<li>
						<div class="col-md-12 groupcheck mb--1">
							<h4 class="color--primary '.$margin.'">'.$optionSet['label'].$hint.'</h4>
							<fieldset>';
        foreach ($optionSet['options'] as $setkey => $option) {
            $checked = ($selected[$optionSet['name']][0]==$option['label'].'|'.$option['value']) ? 'checked':'';
            if (isset($optionSet['from']) && $setkey==0) {
                $html.= '
							<div class="clearfix" style="margin-bottom: .5em;">
								<div class="from pull-left text-center type--fine-print" '.$style.'>'.$optionSet['from'].'</div>
								<div class="from pull-right text-center type--fine-print" '.$style.'>'.$optionSet['to'].'</div>
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
					</li>
			';
    }
    $html.='
				<ul>
			</div>
			
	';
    $currentLocal = App::getLocale();
    $localQuestions = $currentLocal=='en' ? '' : $currentLocal;
    $btnsize = '-small';
    if ($localQuestions=='es') {
        $btnsize = '-small lang';
    }
    return $html;
});

/*Form::macro('idcBubblegumGroupCompact', function($section,$q,$page,$type,$slider=false){
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
					<div class="row">
						<div class="col-md-6 col-md-push-6">
							
						</div>
						<div class="col-md-6">
			';
			if(isset($optionSet['from'])&&$key==0){
				$first = $optionSet['options'][0]['label'];
				$last = $optionSet['options'][count($optionSet['options'])-1]['label'];
				$html.= '
							<div class="clearfix">
								<div class="type--fine-print from pull-left text-center" style="width:30%; line-height: 1.2em">'.$first.'<br/>'.$optionSet['from'].'</div>
								<div class="type--fine-print from pull-right text-center" style="width:30%; line-height: 1.2em">'.$last.'<br/>'.$optionSet['to'].'</div>
							</div>
				';
			}
			$html.='
						</div>
					</div>
					<div class="row">
						<fieldset>
						<div class="col-md-6">
							<h5 class="color--primary">'.$optionSet['label'].'</h5>
						</div>
						<div class="col-md-6">';
			foreach ($optionSet['options'] as $setkey => $option) {
				$checked = ($selected[$optionSet['name']][0]==$option['label'].'|'.$option['value']) ? 'checked':'';
				$html.='<div class="'.$class.' input-radio text-center '.$checked.'" '.$style.'>';
				$html.='<div class="inner"></div>
                        <label for="'.$setkey.'-'.$optionSet['name'].'">'.$option['label'].'</label>                        
                        <input class="btn-q" type="radio" name="answer['.$optionSet['name'].']" value="'.$option['label'].'|'.$option['value'].'" id="'.$setkey.'-'.$optionSet['name'].'" '.$checked.' />';
				$html.='</div>';
			}

			$html.='
						</div>
						</fieldset>
					</div>';
			$html.='
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
});*/

Form::macro('idcIcon', function ($section, $q, $page, $num) {
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

Form::macro('idcButton', function ($section, $q, $page) {
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
Form::macro('idcBubblegumButton', function ($section, $q, $page) {
    $errors = session('errors');
    $html ='';
    $name = $q['name'];
    $html.=Form::hidden('question', $name);
    $question = $q['question'];
    $selected = isset($q['selected'])? $q['selected']:false;
    if ($selected) {
        if (strpos($selected, "|")!==false) {
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
				<div class="col-sm-12">
					<div class="input-radio input-radio--innerlabel '.$checked.' mb--1 w60">
                        <label>'.$optionSet['label'].'</label>
                        <div class="inner"></div>
                        <input class="btn-q" type="radio" name="answer" value="'.$optionSet['label'].'|'.$optionSet['value'].'" id="'.$key.'-'.$name.'" '.$checked.' />
                    </div>					
				</div>';
    }
    return $html;
});

Form::macro('idcBTButton', function ($section, $q, $page) {
    $errors = session('errors');
    $html ='';
    $name = $q['name'];
    $html.=Form::hidden('question', $name);
    $question = $q['question'];
    $selected = isset($q['selected'])? $q['selected']:false;
    if ($selected) {
        if (strpos($selected, "|")!==false) {
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
				<div class="col-sm-8 col-sm-offset-2">
					<div class="input-radio input-radio--innerlabel '.$checked.' mb--1">
                        <label>'.$optionSet['label'].'</label>
                        <div class="inner"></div>
                        <input class="btn-q" type="radio" name="answer" value="'.$optionSet['label'].'|'.$optionSet['value'].'" id="'.$key.'-'.$name.'" '.$checked.' />
                    </div>					
				</div>';
    }
    return $html;
});

Form::macro('idcCheckbox', function ($section, $q, $page) {
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
    if ($localQuestions=='es') {
        $btnsize = '-small lang';
    }
    $html.='
		</div>
		<button id="next" class="btn btn-danger pull-right btn-lg next" type="submit">'.Lang::get('general.next').' <i class="fa fa-arrow-circle-right"></i></button></button>';
    return $html;
});
