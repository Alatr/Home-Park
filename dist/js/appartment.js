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
			},
			callbacks: {
		        beforeOpen: function() {
		            var $triggerEl = $(this.st.el),
		                newClass = $triggerEl.data("modal-class");
		            if (newClass) {
		                this.st.mainClass = this.st.mainClass + ' ' + newClass;
		            }
		        }
		    }
		});
	};

	/* Initialize
	 * ------------------------------------------------------ */
	 (function hpInitAppartment() {
			showAppartment();
	 })();

})(jQuery);