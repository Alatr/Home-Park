(function($) {

	var hoverBtn = function() {

		var thisBtn; // переменная для сохранения контекста при наведении на кнопку
		
		$('.floor-nav__button').hover( function(){
				thisBtn = $(this)
		        $(this).addClass('tooltip-arrow');
		        $('.floor-nav__numbers').addClass('flipInX');
		        $('.floor-nav__numbers').addClass('floor-nav__numbers--active');
			},function(){
		        $(this).removeClass('tooltip-arrow');
		        $('.floor-nav__numbers').removeClass('floor-nav__numbers--active');
		        $('.floor-nav__numbers').removeClass('flipInX');

			});

		$('.floor-nav__numbers').hover( function(){
		       thisBtn.addClass('tooltip-arrow')
			},function(){
		       thisBtn.removeClass('tooltip-arrow')

			});
		};



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
	 (function hpInitFloor() {
			hoverFloor();
			hoverBtn();
	 })();

})(jQuery);





