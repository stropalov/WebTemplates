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