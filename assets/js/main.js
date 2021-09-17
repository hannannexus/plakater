
(function(jQuery) {
  "use strict";

  // Preloader
  jQuery(window).on('load', function() {
    if (jQuery('#preloader').length) {
      jQuery('#preloader').delay(100).fadeOut('slow', function() {
        jQuery(this).remove();
      });
    }
  });

  // Back to top button
  jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 100) {
      jQuery('.back-to-top').fadeIn('slow');
    } else {
      jQuery('.back-to-top').fadeOut('slow');
    }
  });
  jQuery('.back-to-top').click(function() {
    jQuery('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  var nav = jQuery('nav');
  var navHeight = nav.outerHeight();

  /*--/ ScrollReveal /Easy scroll animations for web and mobile browsers /--*/
  window.sr = ScrollReveal();
  sr.reveal('.foo', {
    duration: 1000,
    delay: 15
  });

  /*--/ Carousel owl /--*/
  jQuery('#carousel').owlCarousel({
    loop: true,
    margin: -1,
    items: 1,
    nav: true,
    navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
    autoplay: true,
    autoplayTimeout: 3000,
    autoplayHoverPause: true
  });

  /*--/ Animate Carousel /--*/
  jQuery('.intro-carousel').on('translate.owl.carousel', function() {
    jQuery('.intro-content .intro-title').removeClass('animate__zoomIn animate__animated').hide();
    jQuery('.intro-content .intro-price').removeClass('animate__fadeInUp animate__animated').hide();
    jQuery('.intro-content .intro-title-top, .intro-content .spacial').removeClass('animate__fadeIn animate__animated').hide();
  });

  jQuery('.intro-carousel').on('translated.owl.carousel', function() {
    jQuery('.intro-content .intro-title').addClass('animate__zoomIn animate__animated').show();
    jQuery('.intro-content .intro-price').addClass('animate__fadeInUp animate__animated').show();
    jQuery('.intro-content .intro-title-top, .intro-content .spacial').addClass('animate__fadeIn animate__animated').show();
  });

  /*--/ Navbar Collapse /--*/
  jQuery('.navbar-toggle-box-collapse').on('click', function() {
    jQuery('body').removeClass('box-collapse-closed').addClass('box-collapse-open');
  });
  jQuery('.close-box-collapse, .click-closed').on('click', function() {
    jQuery('body').removeClass('box-collapse-open').addClass('box-collapse-closed');
    jQuery('.menu-list ul').slideUp(700);
  });

  /*--/ Navbar Menu Reduce /--*/
  jQuery(window).trigger('scroll');
  jQuery(window).bind('scroll', function() {
    var pixels = 50;
    var top = 1200;
    if (jQuery(window).scrollTop() > pixels) {
      jQuery('.navbar-default').addClass('navbar-reduce');
      jQuery('.navbar-default').removeClass('navbar-trans');
    } else {
      jQuery('.navbar-default').addClass('navbar-trans');
      jQuery('.navbar-default').removeClass('navbar-reduce');
    }
    if (jQuery(window).scrollTop() > top) {
      jQuery('.scrolltop-mf').fadeIn(1000, "easeInOutExpo");
    } else {
      jQuery('.scrolltop-mf').fadeOut(1000, "easeInOutExpo");
    }
  });

  /*--/ Property owl /--*/
  jQuery('#property-carousel').owlCarousel({
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      769: {
        items: 2,
      },
      992: {
        items: 3,
      }
    }
  });

  /*--/ Property owl owl /--*/
  jQuery('#property-single-carousel').owlCarousel({
    loop: true,
    margin: 0,
    nav: true,
    navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1,
      }
    }
  });

  /*--/ News owl /--*/
  jQuery('#new-carousel').owlCarousel({
    loop: true,
    margin: 30,
    responsive: {
      0: {
        items: 1,
      },
      769: {
        items: 2,
      },
      992: {
        items: 3,
      }
    }
  });

  /*--/ Testimonials owl /--*/
  jQuery('#testimonial-carousel').owlCarousel({
    margin: 0,
    autoplay: true,
    nav: true,
    animateOut: 'fadeOut',
    animateIn: 'fadeInUp',
    navText: ['<i class="ion-ios-arrow-back" aria-hidden="true"></i>', '<i class="ion-ios-arrow-forward" aria-hidden="true"></i>'],
    autoplayTimeout: 4000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
      }
    }
  });

})(jQuery);