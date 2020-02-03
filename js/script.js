/* =========================================
                Preloader
============================================ */
$(window).on('load', function() { // makes sure that whole site is loaded
    $('#status').fadeOut();
    $('#preloader').delay(350).fadeOut('slow');
});






/* =========================================
                Progress Bars
============================================ */
$(function() {

    $("#progress-elements").waypoint(function() {

        $(".progress-bar").each(function() {

            $(this).animate({
                width: $(this).attr("aria-valuenow") + "%"
            }, 2000);

        });

        this.destroy();
    }, {
        offset: 'bottom-in-view'
    });

});



/* =========================================
               Responsive Tabs
============================================ */
$(function() {

    $("#services-tabs").responsiveTabs({
        animation: 'slide'
    });

});


/* =========================================
               Portfolio
============================================ */
$(window).on('load', function() {

    // Initialize Isotope
    $("#isotope-container").isotope({});

    // filter items on button click
    $("#isotope-filters").on('click', 'button', function() {

        // get filter value
        var filterValue = $(this).attr('data-filter');

        // filter portfolio
        $("#isotope-container").isotope({
            filter: filterValue
        });

        // active button
        $("#isotope-filters").find('.active').removeClass('active');
        $(this).addClass('active');
    });
});
/* =========================================
               Magnifier
============================================ */
$(function() {

    $("#portfolio-wrapper").magnificPopup({
        delegate: 'a', // child items selector, by clicking on it popup will open
        type: 'image',
        gallery: {
            enabled: true
        }
    });

});




/* =========================================
              project Responsive Tabs
============================================ */
$(function() {

    $("#projects-tabs").responsiveTabs({
        animation: 'slide'
    });

});

/* =========================================
              Clients
============================================ */
$(function() {
    $("#clients-list").owlCarousel({
        items: 6,
        autoplay: false,
        smartSpeed: 700,
        loop: true,
        autoplayHoverPause: true,
        nav: true,
        dots: false,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            // breakpoint from 0 up
            0: {
                items: 2
            },
            // breakpoint from 480 up
            480: {
                items: 3
            },
            // breakpoint from 768 up
            768: {
                items: 6
            }
        }
    });
});



/* =========================================
              Navigation
============================================ */

$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    $('#back-to-top').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 1000);
        return false;
    });
});






/* =========================================
              Mobile Menu
============================================ */
$(function() {

    // Show mobile nav
    $("#mobile-nav-open-btn").click(function() {
        $("#mobile-nav").css("height", "100%");
    });

    // Hide mobile nav
    $("#mobile-nav-close-btn, #mobile-nav a").click(function() {
        $("#mobile-nav").css("height", "0%");
    });

});

/* =========================================
                Animation
============================================ */
// animate on scroll
$(function() {
    new WOW().init();
});

// home animation on page load
$(window).on('load', function() {

    $("#home-heading-1").addClass("animated fadeInDown");
    $("#home-heading-2").addClass("animated fadeInLeft");
    $("#home-text").addClass("animated zoomIn");
    $("#home-btn").addClass("animated zoomIn");
    $("#arrow-down i").addClass("animated fadeInDown infinite");

});