$(document).ready(function () {
	// parallax background
	$.stellar({
		responsive: true,
		horizontalOffset: 60
	});

	// carousel
	$(".carousel").owlCarousel({
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

	// set min-height to max window height
	function setMinHeight() {
		$("header").css("min-height", $(window).height());
	};
	setMinHeight();
	// on resize action
	$(window).resize(function () {
		setMinHeight();
	});


	// tabs for telephones
	$(".top_phone .wrapper .tab").click(function () {
		$(".top_phone .wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".top_phone .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	// tabs for extras
	$(".tabs_header .wrapper .tab").click(function () {
		$(".tabs_header .wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".tabs_header .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	$(".bottom_phone .wrapper .tab").click(function () {
		$(".bottom_phone .wrapper .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".bottom_phone .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");

	$(".contacts_top .tab").click(function () {
		$(".contacts_top .tab").removeClass("active").eq($(this).index()).addClass("active");
		$(".s_contacts .tab_item").hide().eq($(this).index()).fadeIn()
	}).eq(0).addClass("active");
});