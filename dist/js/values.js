(function($) {

	var valuesSlider = function() {
		
		let touchStartX,touchStartY;
		let sliderImage = document.querySelectorAll('.values-slider__items');
		console.log(sliderImage)
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
		    sliderImage[slider.position.active1].classList.add('values-slider__items', 'active1','firstLeft');
		    sliderImage[slider.position.active2].classList.add('values-slider__items', 'active2','twoLeft');
		    sliderImage[slider.position.active3].classList.add('values-slider__items', 'active3','threeLeft');
		  },
		  right:function () {

		    for(let key in this.position){
		      if(this.position[key] !== 0){
		        this.position[key] -=1;
		      }else{
		        this.position[key] = sliderImage.length-1;
		      }
		    }
		    sliderImage[slider.position.active1].classList.add('values-slider__items', 'active1','twoRight');
		    sliderImage[slider.position.active2].classList.add('values-slider__items', 'active2','threeRight');
		    sliderImage[slider.position.active3].classList.add('values-slider__items', 'active3','fourRight');

		    if(slider.position.active1 === sliderImage.length-1 ){
		      sliderImage[0].classList.add('firstRight');
		    }else{
		      sliderImage[slider.position.active1+1].classList.add('firstRight');
		    }
		  }

		};



		function sliderClassInit() {
		  sliderImage[slider.position.active1].classList.add('active1','firstLeft');
		  sliderImage[slider.position.active2].classList.add('active2','twoLeft');
		  sliderImage[slider.position.active3].classList.add('active3','threeLeft');
		}

		function swipeLeft() {
			sliderImage.forEach(image=>{
			  image.removeAttribute('class');
			});
		  /*sliderImage.forEach(image=>{
		    let list = image.classList;
		    list.forEach( classJob =>{
			
		        console.log(classJob)
		      if(classJob !== 'values-slider__items'){
		        image.classList.remove(classJob);
		        console.log(image)
		        console.log(classJob)
		      }
		    });

		  });*/
		  slider.left();
		}
		function swipeRight() {
		  sliderImage.forEach(image=>{
		    image.removeAttribute('class');
		  });
			/*
		  sliderImage.forEach((image, i)=>{
		  	//console.log(sliderImage[i], i , image)
		  	//console.log(image)
		   //let list = image.classList;
		    image.classList.forEach( classJob =>{

		 //console.log(classJob, sliderImage[i])

		  		console.log(classJob)
		    if(classJob !== 'values-slider__items'){

		  		console.log(image)
		  		console.log(classJob)
		        image.classList.remove(classJob);
		  		//console.log(this)
		  		//console.log('________________')

		      }
		    });

		  });*/
		  slider.right();
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

		document.querySelector('.values-slider-wrapper').addEventListener('click',function (e) {
		  let cardPath = e.path;
		  console.log(e);
		  cardPath.some(card=>{
		    console.log(card);
		    if(card.classList.contains('cardActive')){
		      console.log(card);
		      card.classList.remove('cardActive');
		      return card;
		    }else if(card.classList.contains('values-slider__items')){
		      console.log(card);
		      card.classList.add('cardActive');
		      return card;
		    }
		  });

		});

		let btnPrev = document.querySelector('.article-slider__nav-left'),
			btnNext = document.querySelector('.article-slider__nav-right');

		btnPrev.addEventListener('click', function (e) {
			console.log('btnPrev');
			swipeLeft();
		});

		btnNext.addEventListener('click', function (e) {
			console.log('___________________________');
			swipeRight();
		});

	};

	/* Initialize
	 * ------------------------------------------------------ */
	 $(function hpInitValues() {
			valuesSlider();
	 });

})(jQuery);





