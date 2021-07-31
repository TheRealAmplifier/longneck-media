import $ from 'jquery';

import './module/aos.js';

$(window).on('load', function() {
	$('body').removeClass('preload');
});

$(document).ready(function() {	
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
