(function($) {

	var valuesSlider = function() {
		
		let touchStartX,touchStartY;
		let sliderImage = document.querySelectorAll('.values-slider-wrapper>div');
		let slider = {
		  position:{
		    active1: 0,
		    active2: sliderImage.length-1,
		    active3: sliderImage.length-2
		  },
		  left:function () {
		    for(let key in this.position){
		      if(this.position[key] !== sliderImage.length-1){
		        this.position[key] +=1;
		      }else{
		        this.position[key] = 0;
		      }
		    }
		    sliderImage[slider.position.active3].classList.add('active3','threeLeft');
		    sliderImage[slider.position.active1].classList.add('active1','firstLeft');
		    sliderImage[slider.position.active2].classList.add('active2','twoLeft');
		  },
		  right:function () {

		    for(let key in this.position){
		      if(this.position[key] !== 0){
		        this.position[key] -=1;
		      }else{
		        this.position[key] = sliderImage.length-1;
		      }
		    }

		    sliderImage[slider.position.active1].classList.add('active1','twoRight');
		    sliderImage[slider.position.active2].classList.add('active2','threeRight');
		    sliderImage[slider.position.active3].classList.add('active3','fourRight');

		  },

		  createLi: function(){
		  	let ulNavigation = document.querySelector('.slider-navigation');

		  		for (var i = 0; i < sliderImage.length; i++) {
		  			var newLi = document.createElement("li");
		  			if (i >= 9) {
		  				var current = document.createTextNode(""+ (i+1) +"");
		  			} else {
		  				var current = document.createTextNode("0"+ (i+1) +"");
		  			}
		  			newLi.appendChild(current);  
		  			ulNavigation.appendChild(newLi);
		  		}
		  },
		  activeLi: function(){
		  	var liNavigation = document.querySelectorAll('.slider-navigation li');
		  	for (var i = 0; i < sliderImage.length; i++) {
		  		liNavigation[i].classList.remove('active');
		  		if(sliderImage[i].classList.contains('active1')){
		  			liNavigation[i].classList.add('active');
		  		}
		  	}
		  }

		};

		function sliderClassInit() {
		  sliderImage[slider.position.active1].classList.add('active1','firstLeft');
		  sliderImage[slider.position.active2].classList.add('active2','twoLeft');
		  sliderImage[slider.position.active3].classList.add('active3');
		  slider.createLi();
		  slider.activeLi();
		}

		function swipeLeft() {
			sliderImage.forEach(image=>{
			  image.removeAttribute('class');
			});
		  slider.left();
		  slider.activeLi();
		}

		function swipeRight() {
			sliderImage.forEach(image=>{
			  image.removeAttribute('class');
			});
		  slider.right();
		  slider.activeLi();
		}

		sliderClassInit();

		document.querySelector('.values-slider-wrapper').addEventListener('touchend',function (e) {
		  let x = e.changedTouches[0].clientX;
		  let y = e.changedTouches[0].clientY;
		  if(x < touchStartX-30 && y > touchStartY-50 && y < touchStartY+50 ){
		    swipeLeft();
		  }else if(x > touchStartX+30 && y > touchStartY-50 && y < touchStartY+50){
		    swipeRight();
		  }

		});
		document.querySelector('.values-slider-wrapper').addEventListener('touchstart',function (e) {
		  touchStartX = e.changedTouches[0].clientX;
		  touchStartY = e.changedTouches[0].clientY;
		});

		

		let btnPrev = document.querySelector('.article-slider__nav-left'),
			btnNext = document.querySelector('.article-slider__nav-right');

		btnPrev.addEventListener('click', function (e) {
			swipeRight();
		});

		btnNext.addEventListener('click', function (e) {
			swipeLeft();
		});

	};

	/* Initialize
	 * ------------------------------------------------------ */
	 (function hpInitValues() {
			valuesSlider();
	 })();

})(jQuery);





