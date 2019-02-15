(function ($) {
  var scrollBtn = function () {
    var scrollBtn = document.querySelector('.section-main-down');
    var headerHeight = $('.header-section').height();

    $(window).on('resize', function () {
      var headerHeightResize = $('.header-section').height();
      headerHeight = headerHeightResize;
    });

    scrollBtn.addEventListener('click', function () {
      var secondSection = $('.about-block__items');

      $('html, body').animate({
        scrollTop: secondSection.offset().top - headerHeight
      }, 1500);
    });
  };
  /* Initialize Home page
   * ------------------------------------------------------ */
  (function hpInit() {
    scrollBtn();
  })();
})(jQuery);