/*
These functions make sure WordPress
and Foundation play nice together.
*/

jQuery(document).ready(function() {
	
	// Remove empty P tags created by WP inside of Accordion and Orbit
	jQuery('.accordion p:empty, .orbit p:empty').remove();

	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').each(function() {
		if ( jQuery(this).innerWidth() / jQuery(this).innerHeight() > 1.5 ) {
		  jQuery(this).wrap("<div class='widescreen responsive-embed'/>");
		} else {
		  jQuery(this).wrap("<div class='responsive-embed'/>");
		}
	});
}); 

function className(){
	document.getElementById("ham-interior").classList.toggle('is-active');
}
document.querySelector("#ham-interior").addEventListener('click', className);


//use window.scrollY
var scrollpos = window.scrollY;
var header = document.getElementById("top-bar-menu");

function add_class_on_scroll() {
    header.classList.add("white");
}

function remove_class_on_scroll() {
    header.classList.remove("white");
}

window.addEventListener('scroll', function(){ 
    scrollpos = window.scrollY;

    if(scrollpos > 10){
        add_class_on_scroll();
    }
    else {
        remove_class_on_scroll();
    }
});