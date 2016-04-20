$(document).ready(function() {
    //carousel leptetes, hogy ne ugorjon a tetejere
    $('.carousel-control.left').on('click', function() {
        $(this).closest('.carousel').carousel('prev');
    });
    $('.carousel-control.right').on('click', function() {
        $(this).closest('.carousel').carousel('next');
    });

    //mozilla es ie nem tamogatja a row tablet
    if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1
        || navigator.userAgent.toLowerCase().indexOf('msie') > 0
        || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        $('.block__five .row-table').removeClass('row-table');
    }

    $('.menu-control').on('click', changeState);
    $('.header-link').on('click', changeState);
});

//header megjelenitese gorgetes utan
$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 50) {
        $('.header-bar').fadeIn();
    } else {
        $('.header-bar').fadeOut();
    }
});

//manu nyitasa-csukasa
var changeState = function(e) {
    var $buttons = $('.menu-control');
    var state, ham, close;
    state = $buttons.eq(0).data('state');
    ham = $buttons.eq(0).data('hamburger');
    close = $buttons.eq(0).data('close');

    if(state==='hamburger') {
        $.each($buttons, function(key, value){
            $(value).prop('src', close);
            $(value).data('state', 'close');
            //$(value).addClass('menu-control--close');
        });
        $('.menu-bg').fadeIn().css('display', 'table');
        //$('body, html').addClass('stop-scrolling');
        //$('body').bind('touchmove', function(e){e.preventDefault()});
    } else {
        $.each($buttons, function(key, value) {
            $(value).prop('src', ham);
            $(value).data('state', 'hamburger');
            //$(value).removeClass('menu-control--close');
        });
        $('.menu-bg').fadeOut();
        //$('body, html').removeClass('stop-scrolling');
        //$('body').unbind('touchmove');
    }
};