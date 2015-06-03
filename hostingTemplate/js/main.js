(function ($) {


	/*----------------------------------------------------*/
	/* Flexslider
	/*----------------------------------------------------*/
	$(window).load(function () {

		$('#flex-slider').flexslider({
			namespace: "flex-",
			controlsContainer: ".flex-container",
			animation: "fade",
			animationLoop: true,
			controlNav: true,
			directionNav: true,
			smoothHeight: true,
			slideshowSpeed: 7000,
			animationSpeed: 600,
			touch: true,
			randomize: false

		});
	});



})(jQuery);



$(document).ready(function () {

	$("#owl-example").owlCarousel({
		autoPlay: 4000,
		slideSpeed: 1000,
		navigation: false,
		pagination: true,
		singleItem: true,
	});
	
	/* Sticky header menu */
	var nav = $('.header_menu');
	var offset = nav.offset().top;
	
	$(window).scroll(function () {	
		if ($(window).scrollTop() > offset) {
			nav
				.removeClass('relative-header')
				.addClass('fixed-header');
		} else {
			nav
				.removeClass('fixed-header')
				.addClass('relative-header');
		}
	});

});