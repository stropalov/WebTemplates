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
			randomize: false

		});
	});



})(jQuery);



$(document).ready(function () {

	$("#owl-example").owlCarousel({
		autoPlay: 4000,
		slideSpeed: 800,
		navigation: false,
		pagination: true,
		singleItem: true,
	});
});