import $ from 'jquery';

$('form.custom--validation').parsley({
	errorsWrapper: '<div></div>',
	errorTemplate: '<small class="error"></small>',
	errorClass: 'error',
	errorsContainer: function ( elem, isRadioOrCheckbox ) {
			return $(elem).parents('.form__group:first');
	},
	excluded: 'input[type=button], input[type=submit], input[type=reset], input[type=hidden], :hidden, .ignore-validation'
});