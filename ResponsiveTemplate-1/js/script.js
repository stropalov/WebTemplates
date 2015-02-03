$(document).ready(function(){
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scroll_to_top').fadeIn();
		} else {
			$('.scroll_to_top').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scroll_to_top').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
});