(function($) {

	var changeLang = function() {
		/*$('.language .language-btn, .lang__item, .lang_item_active').hover( function(){
		        $('.language__list').addClass('language__list-active')
			},function(){
		        $('.language__list').removeClass('language__list-active')

			});*/


		$('.language').hover( function(){
		        $('.lang_dropdown').addClass('lang-dropdown--active')
			},function(){
		        $('.lang_dropdown').removeClass('lang-dropdown--active')

			});

		$('.language-btn').focus( function(){
		        $('.lang_dropdown').addClass('lang-dropdown--active');
		        $('.lang--active').css('margin-top', '-38px');
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


		var logo = $('.logo')
			header = $('.header'),
			scrollOffset = 110;

			if (winWidth <= '768') {

				header.css({'min-height': '50px'});
				logo.css({	'height': '45'});

			} else if (winWidth >= '768' && winWidth <= '1200'){

				header.css({'min-height': '90px'});
				logo.css({	'height': '142px'});
			} else {

				header.css({'min-height': '90px'});
				logo.css({	'height': '170px'});
			}

			$(window).scroll(function(){
				var winPos = $(window).scrollTop(),
					winWidth = $(window).width();































				if (winPos >= scrollOffset) {

					logo.css({	'height': '64px'});
					if (winWidth >= '768' && winWidth <= '1200') {
						logo.css({'background-image': 'url(img/logo-h.svg)'});

						header.css({'min-height': '64px'});
					} else if (winWidth <= '768'){
						header.css({'min-height': '50px'});
						logo.css({'background-image': 'url(img/logo-h.svg)'});
					}

					




				} else {
					logo.css({'background-image': 'url(img/logo.svg)'});

					if (winWidth >= '768' && winWidth <= '1200') {

						header.css({'min-height': '90px'});
						logo.css({	'height': '142px'});

					} else if (winWidth <= '768'){

						header.css({'min-height': '50px'});

					} else {

						header.css({'min-height': '90px'});
						logo.css({	'height': '170px'});
					}


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

	var footerToggle = function() {
		var footer = $('.sectionHome__footer'),
			footerHeightInner = footer.innerHeight() - 90;
			

		footer.on('click', function() {
			$(this).toggleClass('footer-active');
			if ($(this).hasClass('footer-active')) {
				$(this).css({
					transform: 'translateY(0px)',
				});
			} else {
				$(this).css({
					transform: 'translateY('+footerHeightInner+'px)',
				});
			}
		});

		$(window).scroll(function(){
			var winPos = $(window).scrollTop(),
				scrollOffsetFooter = 50,
				footer = $('.sectionHome__footer'),
				footerHeightInner = footer.innerHeight() - 90;

			if (winPos >= scrollOffsetFooter) {
				footer.css({
					transform: 'translateY('+ footerHeightInner +'px)'
				});
			} else {
				footer.css({
					transform: 'translateY(100%)'
				});
			}
		});




	};

	

	/* Initialize 
	 * ------------------------------------------------------ */
	 $(function hpInit() {
			changeLang();
			menuIcon();
			mainForm();
			footerToggle();
	 });
})(jQuery);





