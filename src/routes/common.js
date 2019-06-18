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
    $('.module:first-of-type').addClass('is-active');

    // Scroll Down Button
    $('#link-down').text($('#link-down').closest('.module').next().data('name'));
    $('#link-down').click(e => {
      e.preventDefault();
      $.scrollify.next();
    });

    // Contact ScrollTo
    $('a[href="#contact"]').click(e => {
      e.preventDefault();
      const target = $(e.currentTarget).attr('href');
      $.scrollify.move(target);
    });
  },
  finalize() {
    $('.nav-child a').click(e => {
      e.preventDefault();
      const target = $(e.currentTarget).attr('href');
      $.scrollify.move(target);
    });
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
  },
};
