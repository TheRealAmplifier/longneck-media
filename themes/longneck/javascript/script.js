import $ from 'jquery';
import Headroom from "headroom.js";

const initHeadroom = function() {
	var headerElement = document.querySelector("body");
	var headroom  = new Headroom(headerElement);
	headroom.init();
}
$(function() {
	initHeadroom();

	$(document).ready(function(){
		$('.header__toggle').click(function() {
			$(this).toggleClass('active');
			$('body').toggleClass('navigation--open');
		 });
	});
});

