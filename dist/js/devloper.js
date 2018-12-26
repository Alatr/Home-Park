(function($) {

	var logoSlider = function() {

		$('.logo-slaider-wrap').slick({
			slidesToShow: 5,
			slidesToScroll: 2,
			arrows: false,
			dots: false,
			infinite: true,
			speed: 500
		  });

		$('.logo-slaider-btn-left').click(function(){
		  $('.logo-slaider-wrap').slick('slickPrev');
		})

		$('.logo-slaider-btn-right').click(function(){
		  $('.logo-slaider-wrap').slick('slickNext');
		});

		$('.logo-slaider-items .logo-link svg').hover( function(){
		        $(this).removeClass('active');
			},function(){
		        $(this).addClass('active');
			});
	};

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitDeveloper() {
			logoSlider();
	 });

})(jQuery);





