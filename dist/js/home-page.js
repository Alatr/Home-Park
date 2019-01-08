(function($) {
	
	var mainSlider = function() {

		$('.main-slider').slick({
			dots: false,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			arrows: false
		  });

		$('.btn-slider-prev').click(function(){
		  $('.main-slider').slick('slickPrev');
		})

		$('.btn-slider-next').click(function(){
		  $('.main-slider').slick('slickNext');
		});
	};

	var pagesSlider = function() {

		// init slider
		function initPagesSlaider(article, initialSlide){
			initialSlide = initialSlide || 0 // default slide which show
			$(article + ' ' + '.slider-wrap').slick({
				dots: false,
				infinite: true,
				speed: 500,
				fade: true,
				cssEase: 'linear',
				initialSlide: initialSlide,
				arrows: false
			  });

			$(article + ' ' + '.article-slider__nav-left').click(function(){
			  $(article + ' ' + '.slider-wrap').slick('slickPrev');
			})

			$(article + ' ' + '.article-slider__nav-right').click(function(){
			  $(article + ' ' + '.slider-wrap').slick('slickNext');
			})

			$(article + ' ' + '.slider-wrap').on('afterChange', function(event, slick, currentSlide, nextSlide){
			    $(article + ' ' + '.slider__count').text(currentSlide + 1)
			});

			 $(article + ' ' + '.slider__count').text(initialSlide + 1) // вывод номера слайдера которой показан 
		}

		initPagesSlaider('.features-slaider-js', 1);
		initPagesSlaider('.infostructure-slaider-js', 2);
		initPagesSlaider('.specifically-slaider-js', 0);
		initPagesSlaider('.values-slaider-js', 1);

	};

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

	var tabs = function() {
		var tabsHeader = $('.tabs__header li'),
			tabsContent = $('.tabs__inner');

		tabsHeader.on('click', function() {
			if (!$(this).hasClass('active-li')) {
				var data = $(this).data('page');
					tabsContent.removeClass('active-js');
					tabsContent.eq(data).addClass('active-js');

					tabsHeader.removeClass('active-li');
					$(this).addClass('active-li');
			}
		})
	};

	var scrollBtn = function(){
		var scrollBtn = document.querySelector('.section-main-down');
		var headerHeight = $('.header-section').height();

		$(window).on('resize', function(){
			var headerHeightResize = $('.header-section').height();
			headerHeight = headerHeightResize;
		});

		scrollBtn.addEventListener('click', function(){
			var secondSection = $('.article-block');
			        
	        $('html, body').animate({
	            scrollTop: secondSection.offset().top - headerHeight
	        }, 1500);
		});
	};

	var footerToggle = function() {
		var footer = $('.sectionHome__footer');

		footer.on('click', function() {
			$(this).toggleClass('footer-active')
		})
	}

	/* Initialize Home page
	 * ------------------------------------------------------ */
	 $(function hpInit() {
	    	mainSlider();
	    	pagesSlider();
	    	logoSlider();
			tabs();
			scrollBtn();
			footerToggle();
	 });
})(jQuery);





