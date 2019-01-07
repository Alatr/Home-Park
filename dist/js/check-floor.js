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

			$( "polygon" ).each(function() {

			  var myBox = $("#floorNumber");
			  var infoBox1 = $("#floorNumber1");
			  var infoBox2 = $("#flatsNumber");
			  var newlink = $('#new_link_house');
			  if ($(window).width() > 768) {

				$(this).mouseenter(function() {
				  // var offset = $(this).offset();
				  var level = this.dataset.level;
				  var flatSale = this.dataset.sale;
				  myBox.html(level);
				  infoBox1.html(level);
				  infoBox2.html(flatSale);
				  $(".arrow_blink").hide("slow");
				  // myBox.css("opacity","1");
				  // myBox.offset({top:offset.top, left:offset.left});
				});

				$(this).mouseleave(function() {
				  // var myBox = $("#floorNumber");
				  // myBox.css("opacity","0");
				});
			  }
			  else{

				$(this).click(function(e){
				  e.preventDefault();
				  // var myBox = $("#floorNumber");
				  // var infoBox1 = $("#floorNumber1");
				  // var infoBox2 = $("#flatsNumber");
				  var level = this.dataset.level;
				  var flatSale = this.dataset.sale;
				  var href = this.dataset.href;
				  console.log(href);
				  myBox.html(level);
				  infoBox1.html(level);
				  infoBox2.html(flatSale);
				  newlink.attr("href", href);

				});
			  }
			});

	};

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitchangeFloor() {
			checkFloor();
	 });

})(jQuery);





