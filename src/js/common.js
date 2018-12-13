$(function() {

	$('.language .language-btn').on('click', function(){
	        var langList = $(this).next();
	        
	        $('.language .language__list:visible').not(langList).slideUp(400);
	        	langList.slideToggle(400);
	});
});
