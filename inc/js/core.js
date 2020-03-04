//@prepros-prepend owl.carousel.min.js

jQuery(document).ready(function( $ ) {

/* ADD CLASS ON LOAD*/

    $("html").delay(100).queue(function(next) {
        $(this).addClass("loaded");

        next();
    });

/* ADD CLASS ON SCROLL*/

	$(window).scroll(function() {
        var scroll = $(window).scrollTop();

        if (scroll >= 100) {
            $("body").addClass("scrolled");
        } else {
            $("body").removeClass("scrolled");
        }
    });

/* SMOOTH SCROLL TO ANCHOR */

	$('a[href*=#]:not([href=#])').click(function() {
		if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) +']');

			$('html,body').animate({
				scrollTop: target.offset().top
			}, 1000);
			return false;
		}
	});

/* CLASS AND FOCUS ON CLICK */

    $(".where").hover(function(event) {
        $('.where-wrapper').siblings(".expand").removeClass("expand");
        $('.where-wrapper').addClass("expand");
    });

    $( ".where-wrapper" ).mouseout(function() {
        $(this).removeClass( "expand" );
    });

    $(".what").hover(function(event) {
        $('.what-wrapper').siblings(".expand").removeClass("expand");
        $('.what-wrapper').addClass("expand");
    });

    $( ".what-wrapper" ).mouseout(function() {
        $(this).removeClass( "expand" );
    });

    $(".inspire").hover(function(event) {
        $('.inspire-wrapper').siblings(".expand").removeClass("expand");
        $('.inspire-wrapper').addClass("expand");
    });

    $( ".inspire-wrapper" ).mouseout(function() {
        $(this).removeClass( "expand" );
    });

    $(".more").hover(function(event) {
        $('.more-wrapper').siblings(".expand").removeClass("expand");
        $('.more-wrapper').addClass("expand");
    });

    $( ".more-wrapper" ).mouseout(function() {
        $(this).removeClass( "expand" );
    });

    $(".itin").hover(function(event) {
        $('.what-wrapper').siblings(".expand").removeClass("expand");
    });

    $(".menu-trigger").on('click', function(event) {
        $('.primary-menu').toggleClass('show');
        $('header .expand').removeClass('expand');
    });

    $( ".search-trigger" ).click(function() {
      $( ".search-wrapper" ).toggle( "fast", function() {
      });
    });

// GLOBAL OWL CAROUSEL SETTINGS

    $('.small-carousel').owlCarousel({
        loop:false,
        autoplay:false,
        autoplayHoverPause:true,
        nav:true,
        navText : ["&xlarr;","&xrarr;"],
        navClass: ['owl-prev', 'owl-next'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });

    $('.category-carousel').owlCarousel({
        loop:true,
        autoplay:false,
        autoplayHoverPause:true,
        nav:true,
        navText : ["&xlarr;","&xrarr;"],
        navClass: ['owl-prev', 'owl-next'],
        stagePadding: 0,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    });

});//Don't remove ---- end of jQuery wrapper
