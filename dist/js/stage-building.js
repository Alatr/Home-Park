(function($) {

	var progressBar = function() {
		var progressItem = document.querySelectorAll('.progress-item');

			for (var i = 0; i < progressItem.length; i++) {
				var lineWhite = document.querySelectorAll('.line--white'),
					lineAccent = document.querySelectorAll('.line--accent'),
					progressValue = progressItem[i].dataset.value;

				var lineWhiteValuePx = (progressValue * 300) / 100;
				var lineAccentValuePx = (progressValue * 300) / 100;

				lineWhite[i].innerHTML = progressValue + '%';			
				lineAccent[i].innerHTML = progressValue + '%';

				lineAccent[i].style.clipPath = 'polygon(0 0, '+ lineAccentValuePx +'px 0, '+ lineAccentValuePx +'px 300px, 0 300px)';
			}
	};
	var stageGallery = function(){
				var groups = {};
				$('.galleryItem-stage').each(function () {
					var id = parseInt($(this).attr('data-group'), 10);

					if (!groups[id]) {
						groups[id] = [];
					}

					groups[id].push(this);
				});

				$.each(groups, function () {

					$(this).magnificPopup({
						type: 'image',
						closeOnContentClick: true,
						closeBtnInside: false,
						gallery: {
							enabled: true
						}
					})

				});

	};

	/* Initialize
	 * ------------------------------------------------------ */
	 (function hpInitStageDevelopment() {
			progressBar();
			stageGallery();
	 })();

})(jQuery);