$(window).load(function() { // makes sure the whole site is loaded
	$('#status').fadeOut(); // will first fade out the loading animation
	$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
	$("#intro-name").delay(350).addClass('fadeInDownBig animated');
	$("#intro-border").delay(350).addClass('fadeInLeftBig animated');
	$("#intro-description").delay(350).addClass('fadeInUpBig animated');
	
});
