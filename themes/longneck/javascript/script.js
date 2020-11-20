import $ from 'jquery';

$(document).ready(function(){
	$('.header__toggle').click(function() {
		$(this).toggleClass('active');
		$('body').toggleClass('navigation--open');
 	});
});