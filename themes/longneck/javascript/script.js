import $ from 'jquery';

import './module/aos.js';

document.addEventListener("DOMContentLoaded", () => {
    const body = document.querySelector('body');
    const headerPopup = document.querySelector('.navigation__popup');

    const headerOpenButton = document.querySelector('.header__toggle');
    const headerCloseButton = document.querySelector('.popup__close');
    const footerScrollButton = document.querySelector('.footer__scroll');

    body.classList.remove('preload');

    headerOpenButton.addEventListener('click', () => {
		headerPopup.classList.add('navigation__popup--open');
		body.classList.add('navigation--open');
    });

    headerCloseButton.addEventListener('click', () => {
		headerPopup.classList.remove('navigation__popup--open');
		body.classList.remove('navigation--open');
	});

    footerScrollButton.addEventListener('click', (event) => {
        event.preventDefault();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

// $(window).scroll(function() {
// 	let scroll = $(window).scrollTop();
// 	if (scroll >= 70) {
// 		$('.header').addClass('header--scrolled');
// 	} else {
// 		$('.header').removeClass('header--scrolled');
// 	}
// });
