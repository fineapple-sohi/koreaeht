$(document).ready(function(){


    // /* product slide */
    // var mySwiper = new Swiper('.swiper-container', {
    //   navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },

    //   // autoplay: {
    //   //   delay: 3000,
    //   // },

    //   loop : true,
    //   speed : 500,

    // });

    var swiper = new Swiper('.swiper-container', {
        speed: 500,
        parallax: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },

        autoplay: {
            delay: 3000,
        },

      });



    /* client ani */
    var $cList = $('#client .client_list .img_wrap');
    var $cImg = $cList.children().clone();
    var imgWid = $cList.children().Width;

    $cList.append($cImg);
    //cMove();

    // function cMove() {
    //   $cList.stop().animate({marginLeft: imgWid * -1}, 5000, function(){
    //     $cList.append($cImg).children().eq(0);
    //     $cList.css({marginLeft: 0});
    //   });
    // }

    (function($) {
      $(function() {
        $("#scroller").simplyScroll({
            
        });
      });
    })(jQuery);


  
    /* introduce */
    var $numUp = $('#introduce .num_up .num');

    for(i=0; i<31; i++) {
        $numUp.append('<li>' + (i+1) + '</li>');
    }

    function numUp() {
        $numUp.animate({marginTop: '-1678px'}, 4500, 'easeInOutCubic', function(){
            $('#introduce .year').addClass('rot');
        });
    }

    function introdu() {
        $('#introduce .com_left li').each(function(idx){
            $(this).addClass('on');
        });

        $('#introduce .effect .curve').delay(600).animate({width: 838}, 3600);
        $('#introduce .effect .dot').each(function(idx){
            $(this).delay(600*(idx+1)).animate({opacity: 1}, 800);
        });
    }



    /* network */
    $(".tab").on("keydown", function(e){

        var key = e.keyCode;  //왼37 오39 스페이스바32 엔터13
        
        switch(key){
            case 37:
                $(this).attr("tabIndex", -1);
                if($(this).hasClass("first")) $(this).siblings(".last").attr("tabIndex", 0).focus();
                else $(this).prev().attr("tabIndex", 0).focus();
                break;

            case 39:
                $(this).attr("tabIndex", -1);
                if($(this).hasClass("last")) $(this).siblings(".first").attr("tabIndex", 0).focus();
                else $(this).next().attr("tabIndex", 0).focus();
                break;

            case 32:
            case 13:
                var $tg = $(this);
                activeOn($tg);
                break;
        }
    });


    $(".tab").on("click", function(){
        if($('#network .world_map').is(':animated')) return false;

        $("#" + $(this).attr("aria-controls")).find('ul li img').css({opacity: 0}).closest('ul').removeClass('on').find('.txt_area').css({opacity: 0});

        if($(this).hasClass('active')) {
            var $tg2 = $(this);
            removeOn($tg2);
        }

        else {
            var $tg = $(this);
            activeOn($tg);
        }


    });


    function activeOn($target) {
        $('#network .world_map').addClass('none').stop().animate({opacity: 0}, 400);

        $($target).addClass("active").attr({"aria-selected": true, tabIndex: 0}).siblings().removeClass("active").attr({"aria-selected": false, tabIndex: -1});
        
        $("#" + $($target).attr("aria-controls")).addClass("active").stop().delay(400).animate({opacity: 1}, 800, function(){
            $(this).find('ul li img').animate({opacity: 1}, 400, function(){
                $(this).closest('ul').addClass('on').find('.txt_area').stop().delay(700).animate({opacity: 1}, 600);
            });
        }).attr({"aria-hidden": false, tabIndex: 0}).siblings(".tabpanel").removeClass("active").attr({"aria-hidden": true, tabIndex: -1});
    }

    function removeOn($target2) {
        $('#network .world_map').stop().animate({opacity: 1}, 500).removeClass('none');

        $(".tab").removeClass('active').attr({"aria-selected": false, tabIndex: -1});

        $(".tabpanel").attr({"aria-hidden": true, tabIndex: -1}).stop().animate({opacity: 0}, 600, function(){
            $(this).removeClass('active');
        })

    }


    /* contact */
    var autoHypenPhone = function(str){
        str = str.replace(/[^0-9]/g, '');
        var tmp = '';
        if( str.length < 4){
            return str;
        }else if(str.length < 7){
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3);
            return tmp;
        }else if(str.length < 11){
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3, 3);
            tmp += '-';
            tmp += str.substr(6);
            return tmp;
        }else{              
            tmp += str.substr(0, 3);
            tmp += '-';
            tmp += str.substr(3, 4);
            tmp += '-';
            tmp += str.substr(7);
            return tmp;
        }
    
        return str;
  }
  
  
    var phoneNum = document.getElementById('uphone');
    
    phoneNum.onkeyup = function(){
        console.log(this.value);
        this.value = autoHypenPhone( this.value ) ;  
    }


    
    $('#contact .btn_submit').on('click', function(e){
        var agree = $('.checks input[name="chk"]').is(':checked');

        if(!agree) {
            e.preventDefault();
            alert("약관에 동의해주세요.");
        }
    });

    $('.checks input[name="chk"]').on('click', function(){

        if($(this).is(':checked')) $('#contact .btn_submit').addClass('on');
        else $('#contact .btn_submit').removeClass('on');

    });







    /* scroll event */
    var scrollT;
    var timer;

    $(window).on('scroll', function(){

        clearTimeout(timer);

        timer = setTimeout(function(){
            scrollT = $(this).scrollTop();

            if(scrollT > $('#introduce').offset().top - 600 && scrollT < $('#introduce').offset().top + 600) {
                $('#introduce .area').addClass('on');
                numUp();
                introdu();
            }
            
            else {
                $('#introduce .area').removeClass('on');
            } 

        },50);


    });
  


    





});