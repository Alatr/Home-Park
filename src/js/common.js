$(function() {


});

(function($) {
	
	var mainSlider = function() {

		$('.main-slider').slick({
			dots: true,
			infinite: true,
			speed: 500,
			fade: true,
			cssEase: 'linear',
			arrows: false
			//prevArrow: '<div class="btn-slider-next"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="7"><defs><path id="arrow" d="M246 641v-1h10v-3.003h1v2V638h1v1.997V639h1v1.997h-2.6V641h2.6v1h-1v1h-1v1h-1v-1.003.002V641zm13 0v-1h1v1z"/></defs><use fill="#568f0a" xlink:href="#arrow" transform="translate(-246 -637)"/></svg></div>',
			//nextArrow: '<div class="btn-slider-prev"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="14" height="7"><defs><path id="arrow" d="M246 641v-1h10v-3.003h1v2V638h1v1.997V639h1v1.997h-2.6V641h2.6v1h-1v1h-1v1h-1v-1.003.002V641zm13 0v-1h1v1z"/></defs><use fill="#568f0a" xlink:href="#arrow" transform="translate(-246 -637)"/></svg></div>'
		  });

		$('.btn-slider-prev').click(function(){
		  $('.main-slider').slick('slickPrev');
		})

		$('.btn-slider-next').click(function(){
		  $('.main-slider').slick('slickNext');
		})
	};

	var changeLang = function() {
		$('.language .language-btn, .lang__item, .lang_item_active').hover( function(){
		        $('.language__list').addClass('language__list-active')
			},function(){
		        $('.language__list').removeClass('language__list-active')

			});
	};

	var menuIcon = function(){
		var menu = document.querySelector('.menu-icon');

		menu.addEventListener('click', function(){
			menu.classList.toggle('menu-active');
		});


		var logo = $('.logo'),
			scrollOffset = 110;

			$(window).scroll(function(){
				winPos = $(window).scrollTop();

				if (winPos >= scrollOffset) {
					logo.css({	'height': '90px',
								'background-image': 'url(img/logo-h.svg)'
					});
				} else {
					logo.css({	'height': '170px',
								'background-image': 'url(img/logo.svg)'
					});
				}
			});

		var scrollBtn = document.querySelector('.section-main-down');


			scrollBtn.addEventListener('click', function(){
				var secondSection = $('.sectionHome__about');
				        
				        $('html, body').animate({
				            scrollTop: secondSection.offset().top
				        }, 1500);
			});
	};



	/* Initialize
	 * ------------------------------------------------------ */
	 (function hpInit() {
	    	mainSlider();
			changeLang();
			menuIcon();
	 })();
})(jQuery);
