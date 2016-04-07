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
        var ham = $target.data('hamburger');
        var close = $target.data('close');
        var state = $target.data('state');
        if(state==='hamburger') {
            $target.prop('src', close);
            $target.data('state', 'close');
        } else {
            $target.prop('src', ham);
            $target.data('state', 'hamburger');
        }
    })
});

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 100) {
        $('.header-bar').fadeIn();
    } else {
        $('.header-bar').fadeOut();
    }

});