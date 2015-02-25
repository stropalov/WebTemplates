$(document).ready(function(){
	// set min-height to max window height
	function setMinHeight(){
		$(".main_head").css("min-height", $(window).height() );
	};
	setMinHeight();
	// on resize action
	$(window).resize(function(){
		setMinHeight();
	});
	
	
	$(window).load(function() { 
	$(".loader_inner").fadeOut(); 
	$(".loader").delay(500).fadeOut("slow"); 
});
	
});