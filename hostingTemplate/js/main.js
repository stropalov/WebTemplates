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
			directionNav: false,
			smoothHeight: true,
			slideshowSpeed: 7000,
			animationSpeed: 600,
			randomize: false

		});
	});



})(jQuery);



$(document).ready(function () {

	$("#owl-example").owlCarousel({
		items: 1,
		nav: true,
		responsive: {
			0: {
				items: 1,
				nav: true
			}
		},
		navText: ""
	});
});