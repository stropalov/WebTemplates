$(document).ready(function () {
	
	$(window).load(function () {
		
		$(".loader").delay(800).fadeOut(600, function(){
			$(".loader_inner").fadeOut();
		});	
	});
	
	 $('#countdown').countDown({
            targetDate: {
                'day': 		31,
                'month': 	12,
                'year': 	2015,
                'hour': 	0,
                'min': 		0,
                'sec': 		0
            },
            omitWeeks: true
        });

});