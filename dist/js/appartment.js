(function($) {

	var showAppartment = function() {
		$('.appartment-block__center').magnificPopup({
				type: 'image',
				closeOnContentClick: true,
				image: {
					verticalFit: false
				},
				zoom: {
							enabled: true,
							duration: 300 // don't foget to change the duration also in CSS
						}
			});
	};

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitAppartment() {
			showAppartment();
	 });

})(jQuery);





