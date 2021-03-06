new WOW().init();
(function($) {

	var hpOutline = function() {
		var swit = false,
			timeoutSwitTriger;

		function timeoutSwit(){
			timeoutSwitTriger = setTimeout(function(){
				if ($('body').hasClass('focus-tab--enable')) {
					swit = false;
					$('body').removeClass('focus-tab--enable');
				}
			}, 5000);
		};

		$(document).on('keydown', function(e){

			if (e.key == 'Tab') {

				if (!swit) {
					timeoutSwit();
					swit = true;

				} else {
					clearTimeout(timeoutSwitTriger)
					timeoutSwit();
				}

				$('body').addClass('focus-tab--enable');
			}
		});
	};
				// ф-я показа прелодера
				var sagapreloaderAnimation = (function () {
					var preloaderContainer = document.querySelector('.loader-wrap');
					var lowerLetters = document.querySelector('.svg-letters_lower');
	
					function init() {
						preloaderContainer.style.display = 'block';
						lowerLetters.addEventListener('animationend', function () {
							preloaderContainer.classList.add('remove-svg');
							preloaderContainer.style.display = 'none';
						});
					};
	
					function checkDate() {
						if (localStorage.getItem('preloader') === null) {
							localStorage.setItem('preloader', Date.now());
							return true;
						}
						var hour = 3600 * 1000;
						if (Date.now() - localStorage.getItem('preloader') < hour) {
							return false;
						} else {
							localStorage.setItem('preloader', Date.now());
							return true;
						}
					};
					return {
						init: init,
						preloaderContainer: preloaderContainer,
						checkDate: checkDate
					};
				})();
	
				if (sagapreloaderAnimation.checkDate() && window.innerWidth > 768) {
					sagapreloaderAnimation.init();
				} else {
					sagapreloaderAnimation.preloaderContainer.style.display = 'none';
				}
				//sagapreloaderAnimation.init();
	var telMask = function() {
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
	var popup = function() {
		$('.popup-with-form-js').magnificPopup({
			type: 'inline',
			preloader: false,
			mainClass: 'mfp-animation',

			// When elemened is focused, some mobile browsers in some cases zoom in
			// It looks not nice, so we disable it:
			callbacks: {
				beforeOpen: function() {
					if($(window).width() < 700) {
						this.st.focus = false;
					} else {
						this.st.focus = '#name';
					}
					var $triggerEl = $(this.st.el),
					    newClass = $triggerEl.data("modal-class");
					if (newClass) {
					    this.st.mainClass = this.st.mainClass + ' ' + newClass;
					}
				}

			},

			zoom: {
					enabled: true,
					duration: 300 // don't foget to change the duration also in CSS
			},
		});
	};
	var changePhoneNumber = function() {
		    function replaceNumber() {
		        var replaceCut = document.getElementsByClassName("replace");
		        var numberAttr = number.getAttribute("href");

		        var link = document.getElementById("tellink");
		        link.setAttribute("href", numberAttr);
		    }
		        setTimeout(replaceNumber, 1500);
	};
	var changeLang = function() {
		$('.language').hover( function(){
		        $('.lang_dropdown').addClass('lang-dropdown--active')
		        $('.lang--active').css('margin-top', '-38px');
			},function(){
		        $('.lang_dropdown').removeClass('lang-dropdown--active')
		        $('.lang--active').css('margin-top', '0');

			});

		$('.language-btn').focus( function(){
		        $('.lang_dropdown').addClass('lang-dropdown--active');
		        $('.lang--active').css('margin-top', '-38px');
			});
		$('.lang__item:last-child a').blur(function(){
		        $('.lang_dropdown').removeClass('lang-dropdown--active')
		        $('.lang--active').css('margin-top', '0');
		});
	};
	// Открытие меню и блокировка прокрутки боди
	var menuIcon = function(){
		var menuIcon = document.querySelector('.menu-icon'),
			menuBlock = document.querySelector('.menu-section'),
			body = document.querySelector('body');
			titleMenu = $('.has-children');
			titleMenuWord = $('.menu__word');

		menuIcon.addEventListener('click', function(e){
			e.preventDefault();
			e.stopPropagation();

			body.classList.toggle('ofh');
			menuIcon.classList.toggle('menu-active');
			menuBlock.classList.toggle('active-js');

			titleMenu.toggleClass('animated fadeInUp');
			titleMenuWord.toggleClass('animated fadeInDown');

			var a = 0.0;

			titleMenu.each(function(indx, element){
			  $(element).css({'animation-delay':  (a + indx*1/10) +'s'});
			});
		});


		var logo = $('.logo'),
		    header = $('.header'),
			 scrollOffset = 50;

			var checkWindowScroll = function(){
				var winWidth = $(window).width();
				// Установка параметров header по уполчанию: высота шапки,высота логотипа, для mobile, tablet, desctop
				if (winWidth <= '768') {
					header.css({'min-height': '50px'});
					logo.css({	'height': '45',
									'width': '140px',
									'background-size': 'contain',
									'background-image': 'url(img/logo-h.svg)'});

				} else if (winWidth >= '768' && winWidth <= '1200'){
					header.css({'min-height': '75px'});
					logo.css({  'height': '142px',
									'width': '205px',
								});

				} else {
					header.css({'min-height': '75px'});
					logo.css({	'height': '170px',
									'width': '290px'
								});
				}
				// Установка параметров header при скроле: высота шапки,высота логотипа, для mobile, tablet, desctop
				var winPos = $(window).scrollTop();
				if (winPos >= scrollOffset) {

					if (winWidth <= '768') {
						logo.css({'background-image': 'url(img/logo-h.svg)'});
						header.css({'min-height': '50px'});

					} else if (winWidth >= '768' && winWidth <= '1200'){
						logo.css({'height': '64px',
						'background-image': 'url(img/logo-h.svg)'});
						//header.css({'min-height': '64px'});

					} else {
						logo.css({'height': '64px',
						'background-image': 'url(img/logo-h.svg)'});
						//header.css({'min-height': '64px'});
					}
				} else {
					if (winWidth <= '768') {
						logo.css({'background-image': 'url(img/logo-h.svg)',
						'height': '45',});
						header.css({'min-height': '50px'});

					} else if (winWidth >= '768' && winWidth <= '1200'){
						logo.css({'height': '142px',
						'background-image': 'url(img/logo.svg)'});
						header.css({'min-height': '75px'});
						
					} else {
						logo.css({'height': '170px',
						'background-image': 'url(img/logo.svg)'});
						header.css({'min-height': '75px'});
					}
				}
			};
			checkWindowScroll();
			$(window).scroll(checkWindowScroll);
			$(window).resize(checkWindowScroll);
	};
	var mobileMenu = function() {

			// open (or close) submenu items in mobile view menu. 
			// close all the other open submenu items.
			$('.header-menu .has-children').children('.menu__title').on('click', function (e) {
					e.preventDefault();

					if ($(".menu__word").is(":visible") == true) {

							$(this).toggleClass('sub-menu-is-open')
									.next('ul')
									.slideToggle(200)
									.end()
									.parent('.has-children')
									.siblings('.has-children')
									.children('.menu__title')
									.removeClass('sub-menu-is-open')
									.next('ul')
									.slideUp(200);

					}
			});

			$(window).resize(function(){
				if ($(window).width() > '768') {
					$('.sub-menu').removeAttr('style');
				}
			});
	};
	var mainForm = function(){
			$('.mainForm__input').on('focus', function () {
				$(this).parent().addClass('input-focus-js');
			}).blur(function() {
				if ($(this).val() === '') {
					$(this).parent().removeClass('input-focus-js');
				}
			});


			$('#mainForm').on('submit', function(e){
				event.preventDefault();
				var parent = e.target;
				ajax_form(parent);
			});

			$('#mainForm2').on('submit', function(e){
				event.preventDefault();
				var parent = e.target;
				ajax_form(parent);
			});

			$('#popup-form').on('submit', function(e){
				event.preventDefault();
				var parent = e.target;
				ajax_form(parent);
			});

			function ajax_form(e) {
				event.preventDefault();
				console.log(e)
			    var str = $("#"+e.id).serialize();
			    //var x = document.forms[e.id]["name"].value;
			    //var y = document.forms[e.id]["tel"].value;

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
			                $(e).find('button.sand-form').text('Отправка...') // замена текста в кнопке при отправке
			            },
			            error: function(){
			                $(e).find('button.sand-form').text('Ошибка отправки!');// замена текста в кнопке при отправке в случае
			            }

			        })

			            .done(function (msg) {
			                // success();
			                $('.form-succses').addClass('form-succses-active');
			                $(e).find('input').val('');
			                //$(e).find('input').prev().removeClass('contact-form-input__text_active')
			                $(e).find('button.sand-form').text('Отправить')
			                /*ga('send', {
			                  hitType: 'event',
			                  eventCategory: 'sendForm',
			                  eventAction: 'send',
			                  eventLabel: 'newRequest'
			                });*/

			                // открытие модального окна с благодарностью

			                $.magnificPopup.open({
			                  items: {
			                    src: '.thanks'
			                  },
			                  type: 'inline',
			                  mainClass: 'mfp-animation'
			                });
			            });
			    }
			}
	};
	var footerToggle = function() {
			var footer = $('.sectionHome__footer'),
				 footerHeightInner = footer.innerHeight() - 64; // высота footer  на котрую он выезжает 

			footer.off('click'); // удаление обработчика клика т.к ф-я footerToggle вызывается каждый раз при resize
			var winWidth = $(window).width();
			// для адаптива <= 768px собитие клика по футеру и скрытие по скролу отключается 
			if (winWidth > '768') {
				footer.css({'position': 'fixed'});

				// событие выезжающего footer при sroll
				$(window).scroll(function(){
					var winPos = $(window).scrollTop(),
						 scrollOffsetFooter = 50;
						var hTabs = footer.innerHeight();
						var prev = footer.prev('div:first')
					if ($(window).scrollTop()+$(window).height()>=$(document).height() - 50) {
						footer.css({'transform': 'translateY(0px)',});
						// проверка для страницы с картой, т.к там нужно давать padding самой карте
						var mapDiv = prev.find('#map')
						if (mapDiv.length != 0){
							mapDiv.css({'paddingBottom': hTabs});
						} else {
							prev.css({'paddingBottom': hTabs});
						}
					} else if  (winPos >= scrollOffsetFooter){
						footer.css({'transform': 'translateY('+ footerHeightInner +'px)'});

					} else {
						footer.css({'transform': 'translateY(100%)'});
					}
				});
				// click on footer and open them
				footer.on('click', function() {
					$(this).toggleClass('footer-active');

					if ($(this).hasClass('footer-active')) {
						$(this).css({'transform': 'translateY(0px)'});
					} else {
						$(this).css({'transform': 'translateY('+footerHeightInner+'px)'});
					}
				});

			} else {
		// отключение ранее установленых событий 
				footer.off('click');
				$(window).off('scroll');

				footer.css({
							'position': 'static',
							'transform': 'translateY(0)'
						});
			}
		
	};
	$(window).resize(footerToggle);

	var dataInput = function () {
		$.datetimepicker.setLocale('ru');
		var logic1 = function (currentDateTime) {
			if (currentDateTime.getDate() == new Date().getDate()) {
				this.setOptions({
					minTime: new Date()
				});
			} else {
				this.setOptions({
					minTime: '9:00'
				});
			}
		};

		$('.datetimepicker_dark').datetimepicker({
			//            theme:'dark',
			// value: 'trololo',
			// value: new Date(),
			minDate: new Date(),
			maxTime: '20:00',
			yearStart: 2019,
			yearEnd: 2019,
			dayOfWeekStart: 1,
			onSelectDate: logic1,
			onShow: logic1

		});
	};
	

	/* Initialize 
	 * ------------------------------------------------------ */
	 (function hpInit() {
			changeLang();
			menuIcon();
			mainForm();
			mobileMenu();
			footerToggle();
			popup();
			telMask();
			hpOutline();
			dataInput();
			//changePhoneNumber();
	 })();
})(jQuery);