//scroll to top function
$(document).ready(function(){
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn(); //if scroll from top is > 100 fade in (show glyphicon) !Important: change glyphicon
			//to arrow up, background color: #fff
		} else {
			$('.scrollToTop').fadeOut(); //else fade out (hide glyphicon)
		}
	});

	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800); //if glyphicon is clicked, scroll to top where scrolltop = 0 @ 800ms speed
		return false;
	});	
});