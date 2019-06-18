(function ($) {
    // USE STRICT
    "use strict";
  
    new WOW().init();
  
})(jQuery);
(function($) {

    $(window).on('load', function() {
        $('.images-preloader').fadeOut();
    });

    // --------------------------------------------------
    // Back To Top
    // --------------------------------------------------
    var offset = 450;
    var duration = 1000;
    var upToTop = $("#back-to-top");
    upToTop.hide();
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > offset) {
            upToTop.fadeIn(duration);
        } else {
            upToTop.fadeOut(duration);
        }
    });
    upToTop.on('click', function(event) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, duration);
        return false;
    });

    //   Search box
    $('body').on('click', function(event) {
        $(this).find('.header-bottom .search-box form input').fadeOut();
    });
    $('.header-bottom .search-box form .search-icon').on('click', function(event) {
        $(this).parent().find('input').fadeToggle();
        event.stopPropagation(); //ko tính click body
    });
    $('.header-bottom .search-box form input').on('click', function(event) {
        $(this).fadeIn();
        event.stopPropagation();
    });

    try {
        //form search header
        $('body').on('click', function(event) {
            $(this).find('.header-top-mobile .search-box form input').fadeOut();
        });
        $('.header-top-mobile .search-box form .search-icon').on('click', function(event) {
            $(this).parent().find('input').fadeToggle();
            $(this).parent().parent().toggleClass('search-widget-open');
            event.stopPropagation(); //ko tính click body
        });
        $('.header-top-mobile .search-box form input').on('click', function(event) {
            $(this).fadeIn();
            event.stopPropagation();
        });
    } catch (err) {
        console.log(err)
    }

    /*Hamburger Button*/
    $('.hamburger').on("click", function() {
        $(this).toggleClass("is-active");
        $('.au-nav-mobile').slideToggle(200, 'linear');
    });

    // Navbar menu dropdown
    $('.au-navbar-menu li .arrow').on('click', function(e) {
        $(this).siblings('.sub-menu').slideToggle(200, 'linear');
        $(this).toggleClass('clicked');
        e.stopPropagation();
    });

    // Revolution slider
    $('#au_rev_slider').show().revolution({
        responsiveLevels: [1200, 992, 768, 480],
        gridwidth: [1200, 992, 768, 480],
        sliderLayout: 'fullwidth',
        gridheight: [765, 765, 600, 600],
        delay: 5000,
        spinner: 'spinner0',
        /* basic navigation arrows and bullets */
    });
    $('#au_rev_slider2').show().revolution({
        responsiveLevels: [1200, 992, 768, 480],
        gridwidth: [1200, 992, 768, 480],
        sliderLayout: 'fullwidth',
        gridheight: [671, 671, 600, 500],
        delay: 5000,
        spinner: 'spinner0',
        /* basic navigation arrows and bullets */
        navigation: {
            onHoverStop: "off",
            arrows: {
                enable: true,
                style: 'zeus',
                tmp: '<div class="tp-title-wrap"><div class="tp-arr-imgholder"></div></div>',
                hide_onleave: false,
                hide_onmobile: true,
                hide_under: 768,
            },

            bullets: {
                enable: false,
                style: 'hermes',
                hide_onleave: false,
                h_align: "center",
                v_align: "bottom",
                h_offset: 0,
                v_offset: 20,
                space: 5
            }
        }
    });

    // fixed navbar when scroll
    var navbarFix = $("#js-navbar-fixed");
    var headerOffset = navbarFix.offset().top + 1;
    $(window).on('scroll', function() {
        if ($(window).scrollTop() > headerOffset) {
            navbarFix.addClass('fixed');
        } else {
            navbarFix.removeClass("fixed");
        }
    });

    // Slick Slider
    $('.slide-categories-content').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        centerPadding: '20px',
        prevArrow: '<span class="arrow display-flex-center arrow-left"><i class="la la-angle-left"></i></span>',
        nextArrow: '<span class="arrow display-flex-center arrow-right"><i class="la la-angle-right"></i></span>',
        responsive: [{
                breakpoint: 1500,
                settings: {
                    arrows: true,
                    dots: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1200,
                settings: {
                    arrows: true,
                    dots: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 992,
                settings: {
                    arrows: true,
                    dots: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    arrows: true,
                    dots: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1
                }
            },
        ]
    });

    $('.home2-testimonials-content').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        dots: false,
        prevArrow: '<span class="arrow display-flex-center arrow-left"><i class="la la-angle-left"></i></span>',
        nextArrow: '<span class="arrow display-flex-center arrow-right"><i class="la la-angle-right"></i></span>',
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: true,
                dots: false,
            }
        }, ]
    });

    $('.partner-content').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.team-group-content').slick({
        // slidesToScroll: 2,
        arrows: true,
        dots: false,
        rows: 2,
        slidesPerRow: 1,
        nextArrow: '<span class="arrow display-flex-center arrow-right"><i class="la la-angle-right"></i></span>',
    });
    $('.testimonials-content .row').slick({
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows: false,
        dots: true,
        autoplay: false,
        responsive: [{
            breakpoint: 600,
            settings: {
                arrows: false,
                dots: true,
                centerMode: true,
                centerPadding: '10px',
                slidesToShow: 1
            }
        }]
    });
    $('.featured-course-slider .row').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: false,
        dots: true,
        autoplay: false,
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 2,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    dots: true,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.our-team-content .row').slick({
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true,
        dots: false,
        autoplay: false,
        prevArrow: '<span class="arrow arrow-left"><i class="la la-angle-left"></i></span>',
        nextArrow: '<span class="arrow arrow-right"><i class="la la-angle-right"></i></span>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    arrows: true,
                    dots: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 2,
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 575,
                settings: {
                    arrows: false,
                    dots: false,
                    centerMode: true,
                    centerPadding: '10px',
                    slidesToShow: 1,
                    slidesToShow: 1,
                    autoplay: true,
                }
            }
        ]
    });

    // Count down time
    $('[data-countdown]').each(function() {
        var $this = $(this),
        finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            var $this = $(this).html(event.strftime('' +
                '<div class="count-down-item"><span class="countdown-number">%D</span> <span class="countdown-text">Days</span> </div>' +
                '<div class="count-down-item"><span class="countdown-number">%H</span> <span class="countdown-text">Hour</span> </div>' +
                '<div class="count-down-item"><span class="countdown-number">%M</span> <span class="countdown-text">Min</span> </div>' +
                '<div class="count-down-item"><span class="countdown-number">%S</span> <span class="countdown-text">Sec</span></div>'
            ));
        });
    });

    var executed = false;
    var waypointSelector = $('.js-waypoint');
    if (waypointSelector) {
        waypointSelector.waypoint(function() {
            if (!executed) {
                executed = true;
                /*progress bar*/
                $('.au-progress-1 .au-progress-bar').progressbar({
                    update: function(current_percentage, $this) {
                        $this.find("span").html(current_percentage + '%');
                    }
                });



            }
        }, { offset: 'bottom-in-view' });
    }

    var jsTabPro = $('#review');

    if (jsTabPro.find('active')) {
        /*progress bar*/
        $('.au-progress-2 .au-progress-bar').progressbar({
            transition_delay: 1500,
            update: function(current_percentage, $this) {
                $this.find(".au-progress-total").html(current_percentage + '%');
            }
        });
    }

    $(window).on('load', function() {
        var $grid = $('.gallery-mansory-content').masonry({
            itemSelector: '.gallery-item',
            percentPosition: true,
            columnWidth: '.grid-sizer',
        });
        // layout Masonry after each image loads
        $grid.imagesLoaded().progress(function() {
            $grid.masonry();
        });
    });

    // Add class active
    $('.fqa-content ul li').on('click', function() {
        $('.fqa-content ul').find('.active').removeClass("active");
        $(this).addClass("active");
    });

    $('.single-course-content .curriculum-content  li').on('click', function() {
        $('.single-course-content .curriculum-content').find('.active').removeClass("active");
        $(this).addClass("active");
    });

    // Gallery Fancy Box
    $('.grouped_elements').fancybox({
        'transitionIn': 'fade',
        'transitionOut': 'fade',
        'speedIn': 600,
        'speedOut': 600,
        'overlayShow': false,
        'width': 870,
        'autoDimensions': false,
        'centerOnScroll': true,
    });
    $('.grouped_gallery').fancybox({
        'transitionIn': 'fade',
        'transitionOut': 'fade',
        'speedIn': 600,
        'speedOut': 600,
        'overlayShow': false,
        'width': 870,
        'autoDimensions': false,
        'centerOnScroll': true,
    });
    $('.group-grid').fancybox({
        'transitionIn': 'fade',
        'transitionOut': 'fade',
        'speedIn': 600,
        'speedOut': 600,
        'overlayShow': false,
        'width': 870,
        'autoDimensions': false,
        'centerOnScroll': true,
    });
    $('.group-mansory').fancybox({
        'transitionIn': 'fade',
        'transitionOut': 'fade',
        'speedIn': 600,
        'speedOut': 600,
        'overlayShow': false,
        'width': 870,
        'autoDimensions': false,
        'centerOnScroll': true,
    });

    // Calendar
    $( "#eventdate" ).datepicker({
        //comment the beforeShow handler if you want to see the ugly overlay
        beforeShow: function() {
            setTimeout(function(){
                $('.ui-datepicker').css('z-index', 999);
            }, 0);
        }
    });
    $('#calendar').fullCalendar({
        columnHeaderFormat : 'dddd',
        firstDay: 1,
        selectable : true,
        fixedWeekCount : false,
        height: 'auto',
        windowResize: function(view) {
            if ($(window).width() < 768){
              $('#calendar').fullCalendar( 'changeView', 'basicDay');
            }else {
                $('#calendar').fullCalendar( 'changeView', 'month' );
            }
        },
        // eventAfterRender: function(event, element, view) { 
        //     element.append(event.title);
        // },
        eventClick: function(event) {
            if (event.url) {
              window.open(event.url);
              return false;
            }
        },
        eventRender: function (event, element, view) { 
            // event.start is already a moment.js object
            // we can apply .format()
            var dateString = event.start.format("YYYY-MM-DD");
            
            $(view.el[0]).find('.fc-day[data-date=' + dateString + ']').css('background-color', '#2c6ed5');
            $(view.el[0]).find('.fc-day-top[data-date=' + dateString + ']').addClass("event-date");
            $(view.el[0]).find('.fc-other-month[data-date=' + dateString + ']').addClass("event-date-other");
            element.popover({
                title: event.title, 
                content: event.description,
                trigger: 'hover',
                placement: 'top',
                container: 'body'
              });
         },
        events: [ // put the array in the `events` property
            {
                title  : 'Technology Connection',
                description: 'description for Technology Connection',
                start  : '2018-08-03',
                backgroundColor : 'transparent',
                url: '../smartedu/single-event.html',
                className : 'custom',
            },
            {
                title  : 'Creative Development',
                description: 'description for Creative Development',
                start  : '2018-08-14',
                backgroundColor : 'transparent',
                url: '../smartedu/single-event.html',
            },
            {
                title  : 'AI Development Day',
                description: 'description for AI Development Day',
                start  : '2018-08-09',
                backgroundColor : 'transparent',
                url: '../smartedu/single-event.html',
            },
            {
                title  : 'International Exhibitions',
                description: 'description for International Exhibitions',
                start  : '2018-08-24',
                backgroundColor : 'transparent',
                url: '../smartedu/single-event.html',
            },
            {
                title  : 'July Conference',
                description: 'description for July Conference',
                start  : '2018-09-02',
                backgroundColor : 'transparent',
                url: '../smartedu/single-event.html',
            }
        ],
    });
    var headerEventCalendar = $('#calendar .fc-header-toolbar');
    headerEventCalendar.addClass("bg-parten");

})(jQuery);