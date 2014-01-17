/* ------------------
 * Weixin
 * --------------- */

 $(function () {
 	$(window).scroll(function(){
	if ($(this).scrollTop()>=($("#aside-position").offset().top-50)) {
		$(".aside-fixed").css({position: "fixed",width:($("#aside-position").width())});
	}else{
		$(".aside-fixed").css({position: ""});
	}
	 $(window).resize(function() {
	  	$(".aside-fixed").css({width:($("#aside-position").width())});
	});
    });
 });


/* ------------------
 * Menu
 * --------------- */

 $(function () {
 	$("#nav-menu .has-sub-menu").hover(function(){
 		$(this).addClass("current").find("ul").show();

 	},function  () {
 		$(this).removeClass("current").find("ul").hide();
 	});

 	$(".vernav-warp .one").click(function () {
 		$(this).next().toggle();
 	})
 });