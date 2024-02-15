
(function ($) {
    $(function () {
		
jQuery(document).ready(function($){

	
	
	//paste this code under head tag or in a seperate js file.
		// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
		

	/* ===================================================================================================
	===  add html class into related class to show as carousel of related items in single page  ====
	====================================================================================================== */
	
	$( ".single-product .product .related ul.products" ).addClass( "related_products_carousel" );
	$( ".single-product .product .images .thumbnails" ).addClass( "products_gallery_carousel" );
	$( ".single-product .product .related ul.products li" ).addClass( "item" );
	$( ".single-product .product .images .thumbnails a" ).addClass( "item" );
	
	
	
	//top slider options
 
	$("#owl-carousel").owlCarousel({
	 
	navigation : true, // Show next and prev buttons
	slideSpeed : 3000,
	paginationSpeed : 2000,
	singleItem:true,
	pagination: false,
	autoPlay : false,
	transitionStyle : "goDown",
	lazyLoad : true,
	navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
	rewindSpeed : 2000,
	items : 1,
	 
	});
	
	
		
	//clients area slider
	 $("#featured_slider").owlCarousel({
	 
		autoPlay: 5000, //Set AutoPlay to 3 seconds
		items : 5,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
	 
	});
		
	//related products slider
	 $(".related_products_carousel").owlCarousel({
	 
		autoPlay: 5000, //Set AutoPlay to 3 seconds
		items : 5,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
	 
	});
		
	//products gallery slider
	 $(".products_gallery_carousel").owlCarousel({
	 
		autoPlay: 5000, //Set AutoPlay to 3 seconds
		items : 3,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3],
		pagination: false,
		navigation: true,
		navigationText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"]
	 
	});
	
	
	
	//remove then default action of anchor tag (a .mobile device menu)
	jQuery("a.small_device_menu").click(function(event){
		event.preventDefault();
		jQuery("div.small_menu_area").slideToggle(); //styling with a slide of an element when click this
	});
	
	// clone a area/div and append it to another area/div
	jQuery(".mainmenu ul:first-child").clone().appendTo(".small_menu_area");
	
	
	//create scroll to top button effects
	jQuery(window).scroll(function(){
		if(jQuery(this).scrollTop() > 200) {
			jQuery(".scrollUp a").fadeIn();
		} else {
			jQuery(".scrollUp a").fadeOut();
		};
	});
	
	//animate the scroll to top
	jQuery(".scrollUp a").click(function(event){
		event.preventDefault();
		jQuery("html, body").animate({scrollTop: 0}, "slow");
	});
	

	//price filter slider

	$("#ex2").slider({});
	
	
    /* Tooltip */
	
	$('[data-toggle="tooltip"]').tooltip({'placement': 'top'});
	
	
	/* menu js */

	
	
        });
    });
})(jQuery);





