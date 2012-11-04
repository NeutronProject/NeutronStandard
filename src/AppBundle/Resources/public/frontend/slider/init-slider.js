jQuery(document).ready(function(){
	jQuery('#slides').slides({
		preload: false,
       //preloadImage: 'preloader url here',
       autoHeight: true,
   	   effect: 'slide',
       slideSpeed: 500,
       play: 5000,
       randomize: false,
       hoverPause: false,
	});
 });