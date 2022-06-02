jQuery(document).ready(function ($) {
    $('.trigger-button').click(function () {
        $('.text-ctn .content').toggleClass('open');
        $(this).toggleClass('open');
    });
	
	if ("iframe") {
        $("iframe").parent().addClass("iframe-container");
    }

    $('#avatar-bubble,  #jerkmate-im-close').click(function () {
        $('#jerkmate-im').toggleClass('jerkmate-im-show-chat');
        $('#jerkmate-im').toggleClass('jerkmate-im-offset');
    });

    if (document.querySelector('.my-slider')) {

        var slider = tns({
            container: '.my-slider',
            nav: false,
            controls: true,
            speed: 400,
            items: 2,
            mouseDrag: true,
            swipeAngle: false,
            autoHeight: true,
            gutter: 15,
            responsive: {
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                },

                1200: {
                    items: 4,
                },

                1600: {
                    items: 6,
                },

            }
        });
    }

    if (document.querySelector('.my-slider2')) {

        var slider = tns({
            container: '.my-slider2',
            nav: false,
            controls: true,
            speed: 400,
            items: 2,
            mouseDrag: true,
            swipeAngle: false,
            autoHeight: true,
            gutter: 15,
            responsive: {
                768: {
                    items: 2,
                },
                992: {
                    items: 4,
                },

                1200: {
                    items: 4,
                },

                1600: {
                    items: 6,
                },

            }
        });
    }

    if (document.querySelector('.my-slider3')) {

        var slider = tns({
            container: '.my-slider3',
            nav: false,
            controls: true,
            speed: 400,
            items: 4,
            mouseDrag: true,
            swipeAngle: false,
            autoHeight: true,
            gutter: 15,
            responsive: {
                768: {
                    items: 2,
                },
                992: {
                    items: 6,
                },

            }
        });
    }
});
