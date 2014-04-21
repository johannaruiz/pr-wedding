$(function() {
	// quick and dirty carousel
	$(".rslides").responsiveSlides({
  	nav: true,
  	namespace: "centered-btns"
	});
	// scroll to functionality
	$('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top - 75
	        }, 1000);
	        return false;
	      }
	    }
	  });
	// Quick and dirty image zoom
	$('#parking-map').zoom({url: 'img/como-area-parking-and-amenities.jpg'});
	var nav = $('nav');
	
	//var scrollPos = 0;
	//var scrollTime;
	//
	//$(window).scroll(function(){
	//	var curScroll = $(window).scrollTop();
	//	clearTimeout(scrollTime);
	//	if (curScroll >= nav.innerHeight()){
	//		if(curScroll <= scrollPos){
	//			nav.hide();
	//		}
	//		else{
	//			nav.show();
	//		}
	//	}
	//	
	//	scrollTime = setTimeout(function(){
	//		scrollPos = $(window).scrollTop();
	//	}, 100);
	//	
	//});
	
	//Form Ajax
	
	//$('form').submit(function(event){
	//	var formData = {
	//		'fname': $('input[name="fname"]').val(),
	//		'lname': $('input[name="lname"]').val(),
	//		'fname': $('input[name="fname"]').val(),
	//		'address': $('input[name="address"]').val(),
	//		'city': $('input[name="city"]').val(),
	//		'state': $('input[name="state"]').val(),
	//		'zipcode': $('input[name="zipcode"]').val(),
	//		'email': $('input[name="email"]').val(),
	//		'telephone': $('input[name="telephone"]').val(),
	//		'guests': $('input[name="guests"]').val(),
	//		'requests': $('input[name="requests"]').val()
	//	};
	//	$.ajax({
	//		type: 'POST',
	//		url: 'process.php',
	//		data: formData,
	//		dataType: 'json'
	//	}).done(function(data){
	//		console.log(data);
	//	});
	//	event.preventDefault();
	//});
});