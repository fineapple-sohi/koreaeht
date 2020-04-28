$(document).ready(function(){

    /* gnb */
    var $header = $('#header');
    var $gnb  =$("#gnb > ul");
    var $depth2 = $gnb.find("li ul");

    $depth2.hide();

	$gnb.hover(
		function() {
            $header.addClass('on');
			$depth2.stop().show();
		},
		function() {
            $header.removeClass('on');
			$depth2.stop().hide();	
		}
    );
    

    /* quick */
    $('#quick li a').hover(
        function() {
            $(this).stop().animate({right: 0}, 400, 'easeInOutSine');
		},
		function() {
            $(this).stop().animate({right: '-130px'}, 400, 'easeInOutSine');
		}
    )


    /*header scroll event */
    var scrollT;
    var timer;

    $(window).on('scroll', function(){

        clearTimeout(timer);

        timer = setTimeout(function(){
            scrollT = $(this).scrollTop();

            if(scrollT > $('#main_videos').height() - $header.height()) $header.addClass('active');
            else $header.removeClass('active');

        },100);


    });



});