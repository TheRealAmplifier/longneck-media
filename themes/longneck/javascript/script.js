import $ from 'jquery';


	$(document).ready(function() {	
		$('.header__toggle').click(function() {
			$(this).toggleClass('active');
			$('body').toggleClass('navigation--open');
		});
	});

	$(window).scroll(function() {
		let scroll = $(window).scrollTop();
		if (scroll >= 70) {
			$('.header').addClass('header--scrolled');
		} else {
			$('.header').removeClass('header--scrolled');
		}
	});
