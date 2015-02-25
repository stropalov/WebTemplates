$(document).ready(function () {
	// set min-height to max window height
	function setMinHeight() {
		$(".main_head").css("height", $(window).height());
	};
	setMinHeight();
	// on resize action
	$(window).resize(function () {
		setMinHeight();
	});

	$(window).load(function () {
		$(".loader_inner").fadeOut();
		$(".loader").delay(500).fadeOut("slow");

		$(".sandwich, .menu_item").click(function () {
			$(".sandwich").toggleClass("active");
		});
	});

	$(".toggle_menu").click(function () {
		if ($(".top_menu").is(":visible")) {
			$(".top_menu").fadeOut(600);
		} else {
			$(".top_menu").fadeIn(600);
		}
	});


});