import $ from 'jquery';

import './module/aos.js';

document.addEventListener("DOMContentLoaded", () => {
    const body = document.querySelector('body');
    const headerPopup = document.querySelector('.navigation__popup');

    const headerToggleButton = document.querySelector('.header__toggle');
    const footerScrollButton = document.querySelector('.footer__scroll');

    body.classList.remove('preload');

    headerToggleButton.addEventListener('click', () => {
		headerPopup.classList.toggle('navigation__popup--open');
		body.classList.toggle('navigation--open');
    });

    footerScrollButton.addEventListener('click', (event) => {
        event.preventDefault();

        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});
