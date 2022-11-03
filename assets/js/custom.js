jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

    jQuery('.career-popup input[name="file-552"]').change(function(e) {
        var name_of_file = e.target.files[0].name;
        jQuery('.input-file-text').text(name_of_file);
    });


    //Service Slider
    jQuery('.service-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        swipeToSlide: true,
        rows: 0,
        dots: true,
        arrows: true,
        autoplay: false,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
        nextArrow: '<button class="slide-arrow next-arrow"></button>',
        customPaging: function(slider, i) {
            return jQuery(slider.$slides[i])
                .find(".dot-title")
                .attr("title");
        },
        appendDots: jQuery(".custom-dot-slider"),
        dotsClass: "dropdown-tabbing",
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                    arrows: false,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: false,
                }
            }
        ]
    });

    jQuery('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 4000,
        dots: true,
        appendDots: jQuery(".slick-navigation"),
        prevArrow: jQuery('.prevs-arrow'),
        nextArrow: jQuery('.nexts-arrow'),
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: true,
            }
        }]
    });


    //Gallery Slider
    jQuery('.gallery-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: true,
        rows: 0,
        swipeToSlide: true,
        dots: false,
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                }
            }
        ]
    });

    jQuery().fancybox({
        selector: '.main-gallery a',
        "afterShow": function() {
            jQuery('.gallery-slider').slick('slickPause');

        },
        "afterClose": function() {
            jQuery('.gallery-slider').slick('slickPlay');

        }
    });



    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    //jQuery("#menu-item-20 a").first().attr('href', 'javascript:void(0);');
    jQuery("#main-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    /*Quote Modal JS */
    jQuery("#get_an_career_modal").on('show.bs.modal', function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });
    jQuery('#get_an_career_modal').on('hidden.bs.modal', function() {
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });


    /* Scroll To Top JS */
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.cta-btn').fadeIn();
        } else {
            jQuery('.cta-btn').fadeOut();
        }
    });

});


/* Window Load and Resize JS */
jQuery(window).on('load resize', function() {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {
        jQuery("#menu-item-20 a").first().attr('href', 'javascript:void(0);');

        jQuery('body').on('click', '#primary-menu .menu-item-has-children', function() {
            if ((jQuery(this).hasClass('active-sub-menu'))) {
                jQuery(this).removeClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).addClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'block');
            }
        });

        jQuery('#primary-menu .menu-item a , .menu-item-has-children ul').not('.menu-item-has-children a').click(function() {
            jQuery('#site-navigation').removeClass('toggled');
        });

        jQuery('.menu-toggle').click(function() {
            jQuery(".sub-menu").css('display', 'none');
        });

    }
    else {
        jQuery("#menu-item-20 a").first().attr('href', 'http://192.168.1.13/sabel-mechanical/#service');
    }
});