import $ from 'jquery';
window.jQuery = $;
require('slick-carousel');
require('jquery-scrollify');

export default {
  init() {
    // NAVIGATION: Mobile Nav Toggle
    $('#responsive-nav-toggle').click(e => {
      const $this = $(e.currentTarget);
      $this.toggleClass('is-active');
      $('#header').toggleClass('is-active');
      $this.find('.open, .close').toggleClass('is-active');
    });

    // MODULE: Hero Image
    $('#hero-desktop').slick({
      arrows: false,
      fade: true,
      autoplay: true,
      autoplaySpeed: 6666,
      dots: true,
      appendDots: $('#footer-control'),
      speed: 2333,
    });
    $('.module:first-of-type').addClass('is-active');

    // MODULE: Hero Image Mobile
    $('#hero-mobile').slick({
      arrows: false,
      fade: true,
      autoplay: true,
      autoplaySpeed: 3333,
      speed: 2333,
    });

    // Scroll Down Button
    $('a[href="#down"]').click(e => {
      e.preventDefault();
      const $this = $(e.currentTarget);
      const target = $this.data('target');
      console.log(target);
      if(target) {
        $.scrollify.move(target);
      } else {
        $.scrollify.next();
      }
    });

    // Contact ScrollTo
    $('a[href="#contact"]').on('click', e => {
      e.preventDefault();
      if($(window).width() <= 960) {
        $('#header, #responsive-nav-toggle, #responsive-nav-toggle .close').removeClass('is-active');
        $('#responsive-nav-toggle .open').addClass('is-active');
        $('html, body').animate({
          scrollTop: ($('#footer').offset().top - 50)
      }, 1500);
      } else {
        const target = $(e.currentTarget).attr('href');
        $.scrollify.move(target);
      }
    });

    // Work Galleries
    $('.work-gallery').each((i,e) => {
      const $this = $(e);
      const navTarget = $this.closest('.module').find('.work-nav');
      $this.slick({
        fade: true,
        adaptiveHeight: true,
        autoplay: true,
        autoplaySpeed: 10000,
        swipe: false,
        appendArrows: navTarget,
      });
    });
    $('.work-slide-photos').slick({
      arrows: false,
      dots: true,
      autoplay: true,
      autoplaySpeed: 3500,
      pauseOnHover: false,
      pauseOnFocus: false,
    });
  },
  finalize() {
    $('.nav-child a').click(e => {
      e.preventDefault();
      const target = $(e.currentTarget).attr('href');
      $.scrollify.move(target);
    });
    $(window).on('load resize', () => {
      if($(window).width() <= 960) {
        $.scrollify.destroy();
      } else {
        $.scrollify({
          section: '.module',
          sectionName: 'hash',
          easing: 'swing',
          scrollSpeed: 500,
          before: () => {
            $('.module').removeClass('is-active')
            const current = $.scrollify.current();
            $(current).addClass('is-active');
            if(current.data('hash') == 'hero') {
              $('#footer-control').removeClass('is-off');
            } else {
              $('#footer-control').addClass('is-off');
            }
            $('#header .nav-child a').each((i,e) => {
              const target = $(e).attr('href').replace('#','');
              if(current.data('hash') == target) {
                $(e).addClass('is-active');
              } else {
                $(e).removeClass('is-active');
              }
            });
          },
        });
      }
    });

  },
};
