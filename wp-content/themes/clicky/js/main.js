jQuery( document ).ready(function($) {

	/*
	 * Script to fill svg's
	 * Replace all SVG images with inline SVG
	 */
	jQuery('img.svg').each(function(){
	    var $img = jQuery(this);
	    var imgID = $img.attr('id');
	    var imgClass = $img.attr('class');
	    var imgURL = $img.attr('src');

	    jQuery.get(imgURL, function(data) {
	        // Get the SVG tag, ignore the rest
	        var $svg = jQuery(data).find('svg');

	        // Add replaced image's ID to the new SVG
	        if(typeof imgID !== 'undefined') {
	            $svg = $svg.attr('id', imgID);
	        }
	        // Add replaced image's classes to the new SVG
	        if(typeof imgClass !== 'undefined') {
	            $svg = $svg.attr('class', imgClass+' replaced-svg');
	        }

	        // Remove any invalid XML tags as per http://validator.w3.org
	        $svg = $svg.removeAttr('xmlns:a');

	        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
	        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
	            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
	        }

	        // Replace image with new SVG
	        $img.replaceWith($svg);

	    }, 'xml');

	});

	//waypoint
	jQuery( window ).ready(function() {

		var directions;
		jQuery('.anim').waypoint(function(direction) {
		  console.log('go');
		   $(this.element).toggleClass('go', direction === 'down');
		 // $(this.element).addClass('go');
		},{
		  offset:'94%'
		});

		jQuery('.anim').waypoint(function(direction) {
		  console.log('go');
		   $(this.element).toggleClass('go', direction === 'up');
		 // $(this.element).addClass('go');
		},{
		offset: function() {  return -$(this.element).height(); }
		});

	});

	// Nav scroll
	$("ul#menu-main-menu li a").click(function(e) {
	    e.preventDefault();
	    var link = $(this).attr("href");
	    $('html,body').animate({scrollTop: $(link).offset().top},'slow');
	});

	//slick carousel
	$('.slider').slick({
  		centerMode: true,
  		centerPadding: '50px',
  		slidesToShow: 1,
  		arrows: false,
  		dots: true,
  		variableWidth: true,
  		mobileFirst: true,
	});
});