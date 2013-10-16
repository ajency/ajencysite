/*! Copyright (c) 2013 ajency.in

	* Version: 3.0.6
 * 
 * Requires: 1.2.2+
 */


 
$(function(){
 

 
    $('.scroll-right').click(function() { // bind an event handler to the click event
        //$('.main-content').scrollLeft( $('.main-content').scrollLeft() + 100 ); // fast scroll
        $('.main-content').animate({ // smooth scroll
            scrollLeft: $('.main-content').scrollLeft() + 400
        })
        $('.log .left').text( $('.main-content').scrollLeft() );
    });
 
    $('.scroll-left').click(function() { // bind an event handler to the click event
        //$('.main-content').scrollLeft( $('.main-content').scrollLeft() - 100 ); // fast scroll
        $('.main-content').animate({ // smooth scroll
            scrollLeft: $('.main-content').scrollLeft() - 400
        })
        $('.log .left').text( $('.main-content').scrollLeft() );
    });
  
});

jQuery(document).keydown(function(e){
    if (e.keyCode == 37) { 
        jQuery('.main-content').animate({ // smooth scroll
            scrollLeft: jQuery('.main-content').scrollLeft() - 400
        })
        jQuery('.log .left').text( jQuery('.main-content').scrollLeft() );
    }
	if (e.keyCode == 39) { 
         jQuery('.main-content').animate({ // smooth scroll
            scrollLeft: jQuery('.main-content').scrollLeft() + 400
        })
       jQuery('.log .left').text( jQuery('.main-content').scrollLeft() );
    }
 if (e.keyCode == 37) { 
       	e.preventDefault();
					jQuery(".scroll_bottom").mCustomScrollbar("scrollTo","right");
    }
	if (e.keyCode == 39) { 
        	e.preventDefault();
					jQuery(".scroll_bottom").mCustomScrollbar("scrollTo","left");
    }
	
});
jQuery(function($) {
$('.divOne').hover(function() { 
  
	 $('#Details').fadeIn("slow");
}, function() { 
    $('#Details').hide(); 
});
});





jQuery(document).ready(function() {
	jQuery('html, body, *').mousewheel(function(e, delta) {
		this.scrollLeft -= (delta * 10);
		e.preventDefault();
	});
});
(function($){
			jQuery(window).load(function(){
				jQuery(".content1").mCustomScrollbar({
					scrollButtons:{
						enable:true
					}
				});
			jQuery(".scroll_bottom").mCustomScrollbar({
					scrollButtons:{
						enable:true
					},
					horizontalScroll:true,
					advanced:{autoExpandHorizontalScroll:true,updateOnContentResize:false}
				});
			
			});
		})(jQuery);
		
  jQuery(document).ready(function(){
      resizeDiv();
  });

  window.onresize = function(event) {
      resizeDiv();
  }

  function resizeDiv() {
      vpw = jQuery(window).width(); 
      vph = jQuery(window).height(); 
     jQuery('.max').css({'height': (vph - 120) + 'px'});

  }