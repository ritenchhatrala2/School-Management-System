// Run below when the page is ready
$(document).ready(function() {

	/* 
		Let's set up the slideshow options	
		The container we want to "cycle" the contents of has an ID of promo
		Full options can be found at http://jquery.malsup.com/cycle/options.html
		fx setting examples: http://jquery.malsup.com/cycle/browser.html
		
		As noted above, there are many additional options and demos available on the plugin's site.
		By default, you just need $('#promo').cycle(); to get things going with the default settings.
	*/
	
	$('#promo').cycle({
		fx: 'scrollHorz',
		timeout:    4000,
		speed:      800,
		next: '#promonav .next',
		pager:	'#promoindex',
		height: 200,
		pause: 1
	});
	
});