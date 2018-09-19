/*-------------SLIDER-INITIAL------------*/


    $(document).ready(function(){
        $('.menu').click(function(){
            $('ul').toggleClass('active');
        })
    });

    $('.slider').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 1,
          prevArrow: $('.prev'),
          nextArrow: $('.next'),
        });

    $('.slider-project').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $('.pprev'),
        nextArrow: $('.pnext'),
    });


    /*-------------CLICK-MENU------------*/



    /*-------------VIEW-PHOTO------------*/
    $(function(){
        $('.minimized').click(function(event) {
            var i_path = $(this).attr('src');
            $('body').append('<div id="overlay"></div><div id="magnify"><img src="'+i_path+'"><div id="close-popup"><i></i></div></div>');
            $('#magnify').css({
                left: ($(document).width() - $('#magnify').outerWidth())/2,
                // top: ($(document).height() - $('#magnify').outerHeight())/2 upd: 24.10.2016
                top: ($(window).height() - $('#magnify').outerHeight())/2
            });
            $('#overlay, #magnify').fadeIn('fast');
        });

        $('body').on('click', '#close-popup, #overlay', function(event) {
            event.preventDefault();

            $('#overlay, #magnify').fadeOut('fast', function() {
                $('#close-popup, #magnify, #overlay').remove();
            });
        });
    });


    /*--------------ACTIVE---------------*/
    $(document).ready(function(){
        $('ul.navigation a').each(function () {
            if (this.href == location.href) $(this).parent().addClass('active_item');
        });
    });