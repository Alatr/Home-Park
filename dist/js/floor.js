(function($) {

	var hoverFloor = function() {
		var currentMousePos = { x: -1, y: -1 };
		  $(document).mousemove(function(event) {
		      currentMousePos.x = event.pageX;
		      currentMousePos.y = event.pageY;
		  });

		 $('.plan-floor-appartment-link').mousemove(function(){
		   var divInfoLeftPos = currentMousePos.x  - 96;
		   var divInfoTopPos = currentMousePos.y - $('.appartment-info').height() - 70;

		   $('.appartment-info').css({left:divInfoLeftPos});
		   $('.appartment-info').css({top:divInfoTopPos});

		   var rooms = this.dataset.flats;
		   var square = this.dataset.square;
		   var livsquare = this.dataset.livsquare;
		   var number = this.dataset.number;

		   $('.appartment-table__rooms').html(rooms);
		   $('.appartment-table__floor').html(number);
		   $('.appartment-table__square').html(square);
		   $('.appartment-table__livsquare').html(livsquare);

		 });


		  $('.plan-floor-appartment-link').mouseover(function(){
		    if($(window).width() > 320)
		    {
		      $('.appartment-info').css( {visibility:'visible'});
		      $('.appartment-info').css( {display:'block'});
		    }
		     });
		 $('.plan-floor-appartment-link').mouseout(function(){
		   if($(window).width() > 320)
		     {
		     $('.appartment-info').css( {visibility:'hidden'});
		     $('.appartment-info').css( {display:'none'});
		   }
		});
	};

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitFloor() {
			hoverFloor();
	 });

})(jQuery);





