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
				arrows: false,
				asNavFor: article + ' ' +'.wrap-text-top'
			  });
			$(article + ' ' +'.wrap-text-top').slick({
			  slidesToShow: 1,
			  fade: true,
			  slidesToScroll: 1,
			  asNavFor: $(article + ' ' + '.slider-wrap'),
			  dots: false,
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

		initPagesSlaider('.features-slaider-js', 0);
		initPagesSlaider('.infostructure-slaider-js', 0);
		initPagesSlaider('.specifically-slaider-js', 0);
		initPagesSlaider('.values-slaider-js', 0);

	};

	var logoSlider = function() {

		$('.logo-slaider-wrap').slick({
			slidesToShow: 5,
			slidesToScroll: 1,
			arrows: false,
			dots: false,
			infinite: true,
			speed: 500,
			autoplay: true,
			autoplaySpeed: 2000,
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

		/* $('.logo-slaider-items .logo-link svg').hover( function(){
		        $(this).removeClass('active');
			},function(){
		        $(this).addClass('active');
			});

		if ($(window).width() < '768') {
			$('.logo-slaider-items .logo-link svg').removeClass('active');
		} */

		$(window).resize(function(){
			if ($(window).width() < '768') {
				$('.logo-slaider-items .logo-link svg').removeClass('active');
			} else{
				$('.logo-slaider-items .logo-link svg').addClass('active');	
			}
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
		});


		jQuery(function($){
				$.mask.definitions['#']='[0-9]';
				$.mask.definitions['9'] = '';    
				$(".inputtelmask").mask("+(38) ### ###-##-##",{placeholder:"_"});
		});

		var telInput = $(".inputtelmask");
			
			telInput.intlTelInput({
				initialCountry: 'ua',
				preferredCountries: ['ua' ,'ru'],
				nationalMode: false
			});
			
			$(telInput).on("countrychange", function(e, countryData) {
				$(this).intlTelInput("setNumber", "");    
				$(this).trigger('blur');
				$(this).mask( '+(' + countryData.dialCode + ')' + ' ### ###-##-##',{placeholder:"_"});
			});
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

	/* Initialize Home page
	 * ------------------------------------------------------ */
	 (function hpInit() {
	    	mainSlider();
	    	pagesSlider();
	    	logoSlider();
			tabs();
			scrollBtn();
	 })();
})(jQuery);