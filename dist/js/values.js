(function($) {

	var valuesSlider = function() {
		
		$('.values-slider-wrapper').slick({
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			centerMode: true,
			pauseOnFocus: false,
			arrows: false
		  });

		$('.article-slider__nav-left').click(function(){
		  $('.values-slider-wrapper').slick('slickPrev');
		})

		$('.article-slider__nav-right').click(function(){
		  $('.values-slider-wrapper').slick('slickNext');
		});
	};

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitValues() {
			valuesSlider();
	 });

})(jQuery);





