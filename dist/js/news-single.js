(function($) {

	var newsSingleSlaider = function() {
		$('.news-single-block .slaider-images').slick({
			dots: false,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			arrows: false
		  });

		$('.news-single-block .prev').click(function(){
		  $('.news-single-block .slaider-images').slick('slickPrev');
		})

		$('.news-single-block .next').click(function(){
		  $('.news-single-block .slaider-images').slick('slickNext');
		});
	};

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitNewsSlaider() {
			newsSingleSlaider();
	 });

})(jQuery);





