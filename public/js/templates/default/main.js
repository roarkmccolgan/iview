/* ==========================================================================
   Author: XHTMLmaster.com
   ========================================================================== */
$(function() {
	$.cookieBar();
	$('label.checkbox').click(function(){
		if($('input:checked', this).length) {
			$(this).addClass('checked');
		}
		else {
			$(this).removeClass('checked');
		}	
	});
	
	$('#form-email-report').submit(function() {
		if (validate(this)) {
			return true;
		}
		else 
		return false
  });
	
	if(!Modernizr.input.placeholder){

		$('[placeholder]').focus(function() {
		  var input = $(this);
		  if (input.val() == input.attr('placeholder')) {
			input.val('');
			input.removeClass('placeholder');
		  }
		}).blur(function() {
		  var input = $(this);
		  if (input.val() == '' || input.val() == input.attr('placeholder')) {
			input.addClass('placeholder');
			input.val(input.attr('placeholder'));
		  }
		}).blur();
		$('[placeholder]').parents('form').submit(function() {
		  $(this).find('[placeholder]').each(function() {
			var input = $(this);
			if (input.val() == input.attr('placeholder')) {
			  input.val('');
			}
		  })
		});
	}
});

$('.btn-q').click(function(){
	$(window).off('beforeunload');
});
$('button.info').click(function(){
	$(window).off('beforeunload');
});
$('button:submit').click(function(){
	$(window).off('beforeunload');
});
$('input.chq').iCheck();
if ($("#trigger_id").length > 0) {
    $("#trigger_id").leanModal().trigger('click');
}



function validate(form){
	var flag = 1;
	
	$('*', form).removeClass('error');

	$('.row .req', form).each(function(i){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var web = /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/;
		if ($(this).hasClass('email') && reg.test($(this).val()) == false) {
			$(this).closest('.row').addClass('error');
			flag = 0;
		} else if ($(this).hasClass('sel') && $(this).find(":selected").text()=='Please select') {
			$(this).closest('.row').addClass('error');
			flag = 0;
		} else {
			if ($.trim($(this).val())=="") {
				$(this).closest('.row').addClass('error');
				flag = 0;
			}
		}
	});
	
	$('.checkbox .req', form).each(function(){
		if ($(this).is(':checked')) {
			
		} else {
			$(this).closest('.checkbox').addClass('error');
			flag = 0;
		}
	});

	if(flag) {
		return true;
	}
	else {     
		return false;
	}
	
}