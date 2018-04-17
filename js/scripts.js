(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
		
	});
	
	$(document).ready(function () {

	    $(".menu-btn a").click(function () {
	        $(".overlay").fadeToggle(200);
	        $(this).toggleClass('btn-open').toggleClass('btn-close');
	    });

	    $('.menu a').on('click', function () {
	        $(".overlay").fadeToggle(200);
	        $(".menu-btn a").toggleClass('btn-open').toggleClass('btn-close');
	    });

	});
})(jQuery, this);

