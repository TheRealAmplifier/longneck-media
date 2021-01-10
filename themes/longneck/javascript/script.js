import $ from 'jquery';
import Headroom from "headroom.js";

// const initHeadroom = function() {
// 	const headerElement = document.querySelector("body");
// 	const headroom  = new Headroom(headerElement);
// 	headroom.init();
// }

$(document).ready(function(){
	// initHeadroom();
	
	$('.header__toggle').click(function() {
		$(this).toggleClass('active');
		$('body').toggleClass('navigation--open');
		});
});

