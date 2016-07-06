//ready statements only
$("document").ready( function(){

	$('#mobileButton').on('click', function(){
	    var check = mobileViewCheck();
	    if(check){
			$(this).children('i').toggleClass('fa-reorder fa-remove');
			$(this).next('nav').slideToggle();
		}
	});

	$('footer h3').on('click', function(){
	    var check = mobileViewCheck();
	    if(check){
			$(this).children('i').toggleClass('fa-chevron-down fa-chevron-up');
			$(this).next('ul').slideToggle();
		}
	});

	$('#birthYear,#birthDay,#birthMonth').on('change', function(){
		calculate_age();
	});

});
