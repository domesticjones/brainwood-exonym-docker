import $ from 'jquery';
window.jQuery = $;
require('slick-carousel');
require('jquery-scrollify');

export default {
  init() {
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
    $('#hero').addClass('is-active');
  },
  finalize() {
    $.scrollify({
      section: '.module',
      sectionName: 'hash',
      easing: 'swing',
      scrollSpeed: 500,
      before: () => {
        $('.module').removeClass('is-active')
        const current = $.scrollify.current();
        $(current).addClass('is-active');
        if(current.attr('id') == 'hero') {
          $('#footer-control').removeClass('is-off');
        } else {
          $('#footer-control').addClass('is-off');
        }
        $('#header .nav-child a').each((i,e) => {
          const target = $(e).attr('href').replace('#','');
          if(current.attr('id') == target) {
            $(e).addClass('is-active');
          } else {
            $(e).removeClass('is-active');
          }
        });
      },
    });
  },
};
