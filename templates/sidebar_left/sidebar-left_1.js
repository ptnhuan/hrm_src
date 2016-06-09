jQuery(document).ready(function ($) {
    $('.sidebar-toggle').on('click', function () {
        if ($(window).width() > 600) {
            if ($('.main-sidebar').is(':visible')) {
                $('.main-sidebar').animate({'width': '0px'}, '500', function () {

                });
                $('.main-sidebar').hide(200);
                $('.content-wrapper').animate({'margin-left': '0px'}, '1000');


            }
            else {

                $('.main-sidebar').animate({'width': '230px'}, '1000');
                $('.main-sidebar').show(200);
                $('.content-wrapper').animate({'margin-left': '230px'}, '1000', function () {

                });
            }
        }
        else if($(window).width() < 600){
            if ($('.main-sidebar').is(':visible')) {
                $('.main-sidebar').animate({'width': '0px'}, '500', function () {

                });
                $('.main-sidebar').hide(200);
                $('.content-wrapper').animate({'margin-left': '0px'}, '1000');
            }
            else {

                $('.main-sidebar').animate({'width': '230px'}, '1000');
                $('.main-sidebar').show(200);
                $('.content-wrapper').animate({'margin-left': '0px'}, '1000', function () {
                });
            }
        }

    });
});