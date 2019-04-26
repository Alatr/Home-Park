(function($) {

	var gallery = function() {
		$('.gallery-items').magnificPopup({
				delegate: 'a',
				type: 'image',
				closeOnContentClick: false,
				closeBtnInside: false,
				mainClass: 'mfp-with-zoom mfp-img-mobile',
				image: {
					verticalFit: true
				},
				gallery: {
					enabled: true,
					tCounter: '<span class="mfp-counter">%curr% з %total%</span>'
				},
				zoom: {
					enabled: true,
					duration: 300, // don't foget to change the duration also in CSS
					opener: function(element) {
						return element.find('img');
					}
				}
				
		});
	};

	/* Initialize
	 * ------------------------------------------------------ */
	 (function hpInitGallery() {
			gallery();
	 })();

})(jQuery);