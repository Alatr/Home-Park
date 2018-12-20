
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

	var changeLang = function() {
		$('.language .language-btn, .lang__item, .lang_item_active').hover( function(){
		        $('.language__list').addClass('language__list-active')
			},function(){
		        $('.language__list').removeClass('language__list-active')

			});
	};

	var menuIcon = function(){
		var menuIcon = document.querySelector('.menu-icon'),
			menuBlock = document.querySelector('.menu-section'),
			body = document.querySelector('body');

		menuIcon.addEventListener('click', function(e){
			e.preventDefault();
			e.stopPropagation();

			body.classList.toggle('ofh');
			menuIcon.classList.toggle('menu-active');
			menuBlock.classList.toggle('active-js');
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

	var mainForm = function(){
		$('.mainForm__input').on('focus', function () {
			$(this).parent().addClass('input-focus-js');
		}).blur(function() {
			if ($(this).val() === '') {
				$(this).parent().removeClass('input-focus-js');
			}
		});


		$('.mainForm').on('submit', function(e){
			event.preventDefault();
			var parent = e.target;
			ajax_form(parent);
		});

			function ajax_form(e) {
				event.preventDefault();
				console.log(e)
			    var str = $("#"+e.id).serialize();
			    var x = document.forms[e.id]["name"].value;
			    var y = document.forms[e.id]["tel"].value;

			    var errors = false; // по умолчанию ошибок в форме нет
			    $(e).find('.mainForm__input-requaired').each(function() {
			        if ( $.trim ( $(this).val() ) === '') {  // $.trim - убирает пробелы с начала и конца строки таким образом пользователь не может отправить строку с пробелами

			            errors = true;
			            var errorMessage = $(this).prev().data("errormessage"); // добавляем в input сообщение об ошибке из dataAttr и class
			            $(this).prev().text(errorMessage);
			            $(this).addClass('js-no-valid');
			        }

			        $(".mainForm__input").on("mouseup", function(){
			            var defaultMessage = $(this).prev().data("defaultmessage"); // при клике на input убираем сообщение и class
			            $(this).prev().text(defaultMessage);
			            $(this).removeClass('js-no-valid');
			        });

			    });
			    if ( !errors) {
			        $.ajax({
			            method: "POST",
			            url: "",
			            data: str,
			            beforeSend: function() {
			                $(e).find('button').text('Отправка...') // замена текста в кнопке при отправке
			            },
			            error: function(){
			                $(e).find('button').text('Ошибка отправки!');// замена текста в кнопке при отправке в случае
			            }

			        })

			            .done(function (msg) {
			                // success();
			                $('.form-succses').addClass('form-succses-active');
			                $(e).find('input').val('');
			                //$(e).find('input').prev().removeClass('contact-form-input__text_active')
			                $(e).find('button').text('Отправить')
			                /*ga('send', {
			                  hitType: 'event',
			                  eventCategory: 'sendForm',
			                  eventAction: 'send',
			                  eventLabel: 'newRequest'
			                });*/
			            });
			    }
			}
	};

	var scrollBtn = function(){
		var scrollBtn = document.querySelector('.section-main-down');
		var headerHeight;

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

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInit() {
	    	mainSlider();
	    	pagesSlider();
	    	logoSlider();
			changeLang();
			menuIcon();
			tabs();
			mainForm();
			scrollBtn();
	 });


})(jQuery);





