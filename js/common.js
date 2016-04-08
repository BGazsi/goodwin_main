//smooth scroll
$(document).ready(function() {
    $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });

    $('.carousel-control.left').on('click', function() {
        $(this).closest('.carousel').carousel('prev');
    });
    $('.carousel-control.right').on('click', function() {
        $(this).closest('.carousel').carousel('next');
    });

    if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1
        || navigator.userAgent.toLowerCase().indexOf('msie') > 0
        || !!navigator.userAgent.match(/Trident.*rv\:11\./)) {
        $('.block__five .row-table').removeClass('row-table');
    }

    $('.menu-control').on('click', function(e) {
        var $target = $(e.target);
        var state = $target.data('state');
        var ham = $target.data('hamburger');
        var close = $target.data('close');
        var $buttons = $('.menu-control');

        if(state==='hamburger') {
            $.each($buttons, function(key, value){
                $(value).prop('src', close);
                $(value).data('state', 'close');
                $(value).addClass('menu-control--close');
            });
            $('.menu-bg').show();
            $('body, html').addClass('stop-scrolling');
            $('body').bind('touchmove', function(e){e.preventDefault()});
        } else {
            $.each($buttons, function(key, value) {
                $(value).prop('src', ham);
                $(value).data('state', 'hamburger');
                $(value).removeClass('menu-control--close');
            });
            $('.menu-bg').hide();
            $('body, html').removeClass('stop-scrolling');
            $('body').unbind('touchmove');
        }
    });

});

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 250) {
        $('.header-bar').fadeIn();
    } else {
        $('.header-bar').fadeOut();
    }
});