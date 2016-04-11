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
        $('.menu-bg').fadeIn();
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

//bongeszo felismerese
var BrowserDetect = {
    init: function () {
        this.browser = this.searchString(this.dataBrowser) || "Other";
        this.version = this.searchVersion(navigator.userAgent) || this.searchVersion(navigator.appVersion) || "Unknown";
    },
    searchString: function (data) {
        for (var i = 0; i < data.length; i++) {
            var dataString = data[i].string;
            this.versionSearchString = data[i].subString;

            if (dataString.indexOf(data[i].subString) !== -1) {
                return data[i].identity;
            }
        }
    },
    searchVersion: function (dataString) {
        var index = dataString.indexOf(this.versionSearchString);
        if (index === -1) {
            return;
        }

        var rv = dataString.indexOf("rv:");
        if (this.versionSearchString === "Trident" && rv !== -1) {
            return parseFloat(dataString.substring(rv + 3));
        } else {
            return parseFloat(dataString.substring(index + this.versionSearchString.length + 1));
        }
    },

    dataBrowser: [
        {string: navigator.userAgent, subString: "Edge", identity: "MS Edge"},
        {string: navigator.userAgent, subString: "MSIE", identity: "Explorer"},
        {string: navigator.userAgent, subString: "Trident", identity: "Explorer"},
        {string: navigator.userAgent, subString: "Firefox", identity: "Firefox"},
        {string: navigator.userAgent, subString: "Opera", identity: "Opera"},
        {string: navigator.userAgent, subString: "OPR", identity: "Opera"},

        {string: navigator.userAgent, subString: "Chrome", identity: "Chrome"},
        {string: navigator.userAgent, subString: "Safari", identity: "Safari"}
    ]
};
BrowserDetect.init();
if(BrowserDetect.browser.indexOf("Chrome") > -1
    || BrowserDetect.browser.indexOf("Firefox") > -1
    || BrowserDetect.browser.indexOf("Opera") > -1
    || BrowserDetect.browser.indexOf("Safari") > -1
    || BrowserDetect.browser.indexOf("Edge") > -1){

}