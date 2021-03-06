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
	$('#back').click(function(e){
		e.preventDefault();
		window.history.back();
	});
	
	$('#form-email-report').submit(function() {
		if (validate(this)) {
			var submit = $('#submitBut');
			submit.removeClass('btn-danger').addClass('btn-default').prop('disabled', true);
			submit.find('i').removeClass('fa-envelope-o').addClass('fa-spin fa-spinner');
			return true;
		} else {
			return false;
		}
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
$('.btnoption').click(function(){
	var self = $(this);
	$(window).off('beforeunload');
	$('.btnoption').each(function(){
		$(this).removeClass('checked')
	});
	self.addClass('checked');
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
$('input.chq').iCheck({
	radioClass: 'iradio_flat-red',
    labelHover: true,
    increaseArea: "10%",
  });

if ($("#trigger_id").length > 0) {
    $("#trigger_id").leanModal().trigger('click');
}



function validate(form){
	var flag = 1;
	
	$('*', form).removeClass('error');

	$('fieldset .req', form).each(function(i){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		var web = /((([A-Za-z]{3,9}:(?:\/\/)?)(?:[\-;:&=\+\$,\w]+@)?[A-Za-z0-9\.\-]+|(?:www\.|[\-;:&=\+\$,\w]+@)[A-Za-z0-9\.\-]+)((?:\/[\+~%\/\.\w\-_]*)?\??(?:[\-\+=&;%@\.\w_]*)#?(?:[\.\!\/\\\w]*))?)/;
		if ($(this).hasClass('email') && reg.test($(this).val()) == false) {
			$(this).closest('.form-group').addClass('error');
			flag = 0;
		} else if ($(this).hasClass('sel') && $(this).find(":selected").text()=='Please select') {
			$(this).closest('.form-group').addClass('error');
			flag = 0;
		} else {
			if ($.trim($(this).val())=="") {
				$(this).closest('.form-group').addClass('error');
				flag = 0;
			}
		}
	});
	
	$('.checkbox .req', form).each(function(){
		if ($(this).is(':checked')) {
			
		} else {
			$(this).closest('.form-group').addClass('error');
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