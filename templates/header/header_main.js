
jQuery(document).ready(function ($) {
    $('.drop a').click(function () {
        $(this).parent().siblings().find('ul.drop-menu').fadeOut(300);
        $(this).next('ul.drop-menu').stop(true, false, true).fadeToggle(300);
        return false;
    });
});