function nav_relocate() {
    var window_top = $(window).scrollTop();
    var div_top = $('.nav-anchor').offset().top;
    if (window_top > div_top) {
        $('nav').addClass('fixed');
    } else {
        $('nav').removeClass('fixed');
    }
}

$(function () {
    $(window).scroll(nav_relocate);
    nav_relocate();
});