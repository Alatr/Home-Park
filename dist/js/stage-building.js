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

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitStageDevelopment() {
			progressBar();
	 });

})(jQuery);





