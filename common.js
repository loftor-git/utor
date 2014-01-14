/* ------------------
 * Weixin
 * --------------- */

 $(function () {
 	$(document).scroll(function(){
        if ($(this).scrollTop()>=($("#social-position").offset().top-50)) {
			$(".social").css({position: "fixed",width:($("#social-position").width()-20)});
        }else{
			$(".social").css({position: "",width:""});
        }
    });
 })