import $ from 'jquery';


	$(document).ready(function() {	
		$('.header__toggle').on('click' , function() {
			$(this).toggleClass('active');
			$('body').toggleClass('navigation--open');
		});

		$('.footer__scroll').on('click', function(event) {
			event.preventDefault();

			$('html, body').animate({ 
				scrollTop: 0
			}, 400);
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
