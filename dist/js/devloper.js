(function($) {

	var logoSlider = function() {

		$('.logo-slaider-wrap').slick({
			slidesToShow: 5,
			slidesToScroll: 2,
			arrows: false,
			dots: false,
			infinite: true,
			speed: 500,
			responsive: [
			    {
			      breakpoint: 1200,
			      settings: {
			        slidesToShow: 3,
			        slidesToScroll: 3
			      }
			    },
			    {
			      breakpoint: 768,
			      settings: {
			        slidesToShow: 2,
			        slidesToScroll: 2
			      }
			    },
			    {
			      breakpoint: 555,
			      settings: {
			        slidesToShow: 1,
			        slidesToScroll: 1
			      }
			    }
			  ]
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





