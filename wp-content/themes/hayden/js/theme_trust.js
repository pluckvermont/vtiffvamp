///////////////////////////////		
// Set Variables
///////////////////////////////

var gridContainer = jQuery('.thumbs');
var colW;
var gridGutter = 0;
var thumbWidth = 350;
var widgetsHidden = false;
var themeColumns = 3;
var catptionOffset = -20;

///////////////////////////////		
// Mobile Detection
///////////////////////////////

function isMobile(){
    return (
        (navigator.userAgent.match(/Android/i)) ||
		(navigator.userAgent.match(/webOS/i)) ||
		(navigator.userAgent.match(/iPhone/i)) ||
		(navigator.userAgent.match(/iPod/i)) ||
		(navigator.userAgent.match(/iPad/i)) ||
		(navigator.userAgent.match(/BlackBerry/))
    );
}

///////////////////////////////
// Mobile Nav
///////////////////////////////

function setMobileNav(){
	jQuery('#mainNav .sf-menu').tinyNav({
		header: 'Navigation',
	    active: 'current-menu-item'
	});	
}

///////////////////////////////
// Project Filtering 
///////////////////////////////

function projectFilterInit() {
	jQuery('#filterNav a').click(function(){
		var selector = jQuery(this).attr('data-filter');		
		jQuery('#projects .thumbs').isotope({
			filter: selector,			
			hiddenStyle : {
		    	opacity: 0,
		    	
			}			
		});
	
		if ( !jQuery(this).hasClass('selected') ) {
			jQuery(this).parents('#filterNav').find('.selected').removeClass('selected');
			jQuery(this).addClass('selected');
		}
	
		return false;
	});	
}


///////////////////////////////
// Project thumbs 
///////////////////////////////

function projectThumbInit() {	
	setColumns();	
	gridContainer.isotope({		
		resizable: false,
		layoutMode: 'fitRows',
		masonry: {
			columnWidth: colW
		}
	});	
	
	jQuery(".thumbs .small").css("visibility", "visible");		
}

///////////////////////////////
// Isotope Grid Resize
///////////////////////////////

function setColumns()
{	
	var columns;
	if(gridContainer.width()<=700){
		columns = 1;
		colW = Math.floor(gridContainer.width() / columns);	
		jQuery('.thumbs .small').each(function(id){
			jQuery(this).css('width','100%');
			jQuery(this).css('max-width','100%');
		});		
	}
	else{
		columns = 3;
		colW = Math.floor(gridContainer.width() / columns);	
		
		jQuery('.thumbs .small').each(function(id){
			jQuery(this).css('width',colW+'px');			
		});		
	}	
	jQuery('.thumbs .small').show();
}

function gridResize() {	
	setColumns();
	gridContainer.isotope({		
		resizable: false,
		layoutMode: 'fitRows',
		masonry: {
			columnWidth: colW
		}
	});
}

///////////////////////////////
// Center Home Flexslider Text
///////////////////////////////

function centerFlexCaption() {
	jQuery('.home .slideshow .details').each(function(id){		
		jQuery(this).css('margin-top','-'+((jQuery(this).actual('height')/2)-catptionOffset)+'px');	
		jQuery(this).show();	
	});	
}

///////////////////////////////
// Initialize
///////////////////////////////	
	
jQuery.noConflict();
jQuery(window).load(function(){
	centerFlexCaption();
	projectThumbInit();	
	projectFilterInit();
	centerFlexCaption();
	jQuery(".videoContainer").fitVids();	
	//setMobileNav();	
	jQuery(window).smartresize(function(){
		gridResize();
		centerFlexCaption();		
	});
	setMobileNav();	
	jQuery('img').attr('title','');	
});