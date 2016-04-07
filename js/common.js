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
});

$(document).scroll(function () {
    var y = $(this).scrollTop();
    if (y > 100) {
        $('.header-bar').fadeIn();
    } else {
        $('.header-bar').fadeOut();
    }

});