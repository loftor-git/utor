/* ------------------
 * Weixin
 * --------------- */

 $(function () {
 	$(window).scroll(function(){
	if ($(this).scrollTop()>=($("#aside-position").offset().top-50)) {
		$(".aside-fixed").css({position: "fixed",width:($("#aside-position").width()-20)});
	}else{
		$(".aside-fixed").css({position: ""});
	}
	 $(window).resize(function() {
	  	$(".aside-fixed").css({width:($("#aside-position").width()-20)});
	});
    });
 });
