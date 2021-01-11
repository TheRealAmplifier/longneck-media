import $ from 'jquery';


	$(document).ready(function() {	
		$('.header__toggle').click(function() {
			$(this).toggleClass('active');
			$('body').toggleClass('navigation--open');
		});
	});

	$(window).scroll(function() {
		let scroll = $(window).scrollTop();

		console.log(scroll);
		if (scroll >= 100) {
			$('.header').toggleClass('header--scrolled');
		} 
	});
