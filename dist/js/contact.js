(function($) {

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

		$.mask.definitions['#']='[0-9]';
		$.mask.definitions['9'] = '';    
		$(".inputtelmask").mask("+(38) ### ###-##-##",{placeholder:"_"});

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

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitContact() {
			tabs();
	 });

})(jQuery);





