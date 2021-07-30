import $ from 'jquery';

import './module/aos.js';

$(window).on('load', function() {
	$('body').removeClass('preload');
});

$(document).ready(function() {	
	$('.header__toggle').on('click', function() {
		$('.navigation__popup').toggleClass('navigation__popup--open');
		$('body').toggleClass('navigation--open');
	});

	$('.popup__close').on('click', function() {
		$('.navigation__popup').removeClass('navigation__popup--open');
		$('body').removeClass('navigation--open');
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
