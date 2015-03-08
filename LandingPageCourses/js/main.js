$(document).ready(function () {
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
});