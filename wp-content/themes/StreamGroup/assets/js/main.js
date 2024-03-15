"use strict";

$(document).ready(function () {
  $(document).mousemove(function (e) {
    $('.decor-list .decor-list__item').parallax(-50, e);
    $('.decor-list .decor-list__item:nth-child(2n)').parallax(40, e);
    $('.decor-list .decor-list__item:nth-child(3)').parallax(-20, e);
  });
  $(document).on('click', '.language-active', function () {
    $('.language').toggleClass('active');
  });
  $(document).on('click', function (e) {
    if (!$(e.target).closest('.language-active, .language-drop').length) {
      $('.language').removeClass('active');
    }

    e.stopPropagation();
  });

  if ($(".section-stats").length > 0) {
    var l = $(".stats-list__item ");
    $(document).bind("scroll", function (e) {
      $(document).scrollTop() > l.offset().top - window.innerHeight && ($(".stats-list__item ").each(function () {
        $(this).prop("Counter", 0).animate({
          Counter: $(this).find('.stats-list__item-main strong').text()
        }, {
          duration: 4e3,
          easing: "swing",
          step: function step(e) {
            var rez = Math.ceil(e);
            var outrez = (rez + '').replace(/(\d)(?=(\d\d\d)+([^\d]|$))/g, '$1 ');
            $(this).find('strong').text(outrez);
          }
        });
      }), $(document).unbind("scroll"));
    });
  }

  $(document).on('click', '.js-tab-link', function (event) {
    event.preventDefault();
    var data_hreff = $(this).data('target');
    $(this).closest('.js-tab').find('.js-tab-link').removeClass('active');
    $(this).addClass('active');
    $('.js-tab-item.active video').get(0).pause();
    $(this).closest('.js-tab').find('.js-tab-item').hide().removeClass('active');
    $(this).closest('.js-tab').find('.js-tab-item[data-target="' + data_hreff + '"]').fadeIn().addClass('active');
    $('.js-tab-item.active video').get(0).play();
  });
  $(' .navigation  li a[href*="#"]:not([href="#"]), .btn_st[href*="#"]:not([href="#"]').click(function () {
    var bw = window.innerWidth;
    var bh = window.innerHeight;

    if (bw < 1200) {
      $('.tog-nav').removeClass('active');
      $('.navigation').slideUp();
    }

    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      var h = $('.header').outerHeight();
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top - h
        }, 1000);
        return false;
      }
    }
  });
  $(document).on('click', function (e) {
    if (!$(e.target).closest('.navigation, .tog-nav').length) {
      var bw = window.innerWidth;
      var bh = window.innerHeight;

      if (bw < 1200) {
        $('.tog-nav').removeClass('active');
        $('.navigation').slideUp();
      }
    }

    e.stopPropagation();
  });
  $(document).on('click', '.modal_open', function () {
    $.fancybox.close();
    var href_ = $(this).attr('href');
    $.fancybox.open($(this), {
      // closeBtn: false,
      // smallBtn: false,
      autoFocus: false,
      buttons: [],
      touch: false,
      hideScrollbar: false,
      swipe: false
    });
  });
  $('.tog-nav').on('click', function () {
    $(this).toggleClass('active');
    $('.navigation').slideToggle();
  });
  AOS.init({
    duration: 1200,
    // disable: 'mobile',
    once: true
  });
});
$(window).on('load resize scroll', function () {
  scrollNav();
  var bw = window.innerWidth;
  var bh = window.innerHeight;

  if (bw < 768) {
    $('.branding-right').insertAfter('.branding-left .branding-list');
  } else {
    $('.branding-left .branding-right').insertAfter('.branding-left');
  }
});

function scrollNav() {
  if ($(window).scrollTop() > 1) {
    $('.header').addClass('fix_header');
  } else {
    $('.header').removeClass('fix_header');
  }
}