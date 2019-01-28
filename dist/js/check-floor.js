(function($) {

	var checkFloor = function() {
		//// проблеск по дому

				var floorBox = $('.floor-item-link');
				var itemLevel = $('.floor-item-link .floor-item-group')

				itemLevel.velocity('transition.fadeIn', {
					stagger: 70,
					delay: 100
				})
				itemLevel.velocity('transition.fadeOut', {
					delay: 0,
					stagger: 70,
					complete: function() {
						itemLevel.css('display','block');
						itemLevel.hover(
							function(){
								$(this).css('opacity','0.6')
							},
							function(){
								$(this).css('opacity', '0')
							}
						)
					}
				})


			//// функционал при наведении на єтаж

			$( ".floor-item-group" ).each(function() {

			  var myBox = $(".info-block-floor");
			  var infoBox2 = $(".info-block-appartments");
			  var newlink = $('.floor-item-link');
			  if ($(window).width() > 768) {

				$(this).mouseenter(function() {
				  var level = this.dataset.level;
				  var flatSale = this.dataset.sale;
				  myBox.html(level);
				  infoBox2.html(flatSale);
				});
			  }
			  else{

				$(this).click(function(e){
				  e.preventDefault();
				  var level = this.dataset.level;
				  var flatSale = this.dataset.sale;
				  var href = this.dataset.href;
				  console.log(href);
				  myBox.html(level);
				  infoBox2.html(flatSale);
				  newlink.attr("href", href);

				});
			  }
			});

	};

	/* Initialize
	 * ------------------------------------------------------ */
	 (function hpInitchangeFloor() {
			checkFloor();
	 })();

})(jQuery);





