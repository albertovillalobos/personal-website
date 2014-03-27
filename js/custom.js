$(document).ready(function() {
	'use strict';
/* ==========================================================================
	Isotope
   ========================================================================== */
	

	// Initialize
	$('.portfolio-container').isotope({
		itemSelector : '.portfolio-item',
		layoutMode : 'masonry',
		animationOptions: {
			duration: 500
		}
	});

	// Clicky stuff
	$('#portfolio-filter a').click(function(){
		var selector = $(this).attr('data-filter');
		$('.portfolio-container').isotope({ filter: selector });
		return false;
	});

	// console.log("initialized isotope");


/* ==========================================================================
    Magnific PopUp
   ========================================================================== */
	$('.popup-image').magnificPopup({
		type: 'image',
		mainClass: 'mfp-with-zoom', // this class is for CSS animation below

		zoom: {
			enabled: true, // By default it's false, so don't forget to enable it
			duration: 300, // duration of the effect, in milliseconds
			easing: 'ease-in-out', // CSS transition easing function 

			// The "opener" function should return the element from which popup will be zoomed in
			// and to which popup will be scaled down
			// By defailt it looks for an image tag:
			opener: function(openerElement) {
				// openerElement is the element on which popup was initialized, in this case its <a> tag
				// you don't need to add "opener" option if this code matches your needs, it's defailt one.
				return openerElement.is('img') ? openerElement : openerElement.find('img');
			}
		}

	});
	// console.log("initialized magnificPopup");

/* ==========================================================================
	 Form   
	========================================================================== */


	$("#comment").validate({
		submitHandler: function(form) {
			// 						$( form ).ajaxSubmit(function( response ) {
			$(form).ajaxSubmit( function (response) {
				// alert(response);
				$("#comment-message-title").fadeOut();
				$("#comment-message-title").promise().done(function () {
					$("#comment-message-title").html(response).fadeIn();
				});
				console.log(response);

				// $("#comment-message-title").html(response).fadeIn();
				$( form ).resetForm();
			});

		}
	});	
	// console.log("initialized form");

/* ==========================================================================
	Fade in on demand
========================================================================== */    
    /* Every time the window is scrolled ... */
    $(window).scroll( function(){
    
        /* Check the location of each desired element */
        $('.faded').each( function(i){        	
        	// console.log()
            
            var bottom_of_object = $(this).position().top;
            var bottom_of_window = $(window).scrollTop() + $(window).height();
            // console.log("Height: "+bottom_of_window);
            
            /* If the object is completely visible in the window, fade it it */
            if( bottom_of_window > bottom_of_object ){
            	
                $(this).animate({'opacity':'1'},500);
                // Hack fix
                // console.log($(this));
                $('a[data-filter="*"]').click();                    
            }            
        }); 
    
    });
});
