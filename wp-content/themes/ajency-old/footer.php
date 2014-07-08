<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<nav class="outer-nav left vertical">
				<div class="menu-logo">
				<img src="<?php echo site_url(); ?>/ajclib/images/ajencylogomenu.png"/>
				<b><em>What's</em>
 not to like?</b>
				<a href="https://www.facebook.com/Ajency.in" class="line-btn"> Follow us On Facebook</a>
				<br>
				<div class="fb-like-box" data-href="https://www.facebook.com/Ajency.in" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
				</div>
				<div class="menu-item">
				<b>Browse the site</b>
				<ul class="menu-list">
					<li class="menu-list-strong"><a href="index.html">Home</a></li>
					<ul class="menu-list-2">
						<li> <a href="impruw.html">Impruw - A Website builder.</a></li>
						<li> <a href="seedeisplatform.html">SeedEISPlatform - a crowd funding platform</a></li>
						<li> <a href="minyawns.html">Minyawns.com - A labour marketplace for university students</a></li>
						<li> <a href="bekumo.html">Bekumo - Manage BYOD within an organization</a></li>
						
					</ul>
					<li  class="menu-list-strong"><a href="hiring.html">Working at Ajency.in</a></li>
					<li  class="menu-list-strong">Currently hiring for</li>
					<ul class="menu-list-2">
						<li><a href="hiring.html">Programmers and web developers</a></li>
						<li><a href="hiring.html">CSS Developers</a></li>
						<li> UI designers | Interaction designers.</li>
						<li><a href="secondcareer.html"> Second Careers</a></li>
						<li> <a href="internship.html">Internship and projects</a></li>
						</ul>
				</ul>

				</div>
				<div class="clear"></div>
			</nav>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				if ( ! is_404() )
					get_sidebar( 'footer' );
			?>

		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
	<script src="<?php echo site_url(); ?>/ajclib/js/jquery-1.7.1.min.js" type="text/javascript"></script>
	  <script type="text/javascript" src="<?php echo site_url(); ?>/ajclib/js/jquery.easing.1.3.js"></script>
	  <script type="text/javascript" src="<?php echo site_url(); ?>/ajclib/js/combine.js"></script>
	  <script>
	$(document).ready(function() {

    
    var wrapper = $('.main-content'),
        content = $('.full-container'),
        width=0.
        wrapper_width=wrapper.outerWidth(),
        w_half=wrapper_width/2;
    var w_left=wrapper.position().left;
    //FIXME wait for images load, to get  width or calculate width other way!
    
    //calculate inner width;
    $('.wrapper .Center-Block').each(function() {
        width+=$(this).width()+60;
    });
    content.css('width',width);
    //
    
    content_width = content.outerWidth();
   
   
 
});

	</script>
	  <script type="text/javascript">
	
         $(document).ready(function() {
         	$('html, body, *').mousewheel(function(e, delta) {
         	this.scrollLeft -= (delta * 80);
         	e.preventDefault();
         	});
			$("#showMenu").click(function(){
				$('body').removeClass('menu-background2');
				  $("body").addClass("menu-background");
				  
				});
				$("#perspective .container").click(function(){
				 $('body').removeClass('menu-background');
				  $("body").addClass("menu-background2");
				});
			
         });
      </script>		
      <script type="text/javascript">
	  var step = 50;
var scrolling = false;

// Wire up events for the 'scrollUp' link:
$(".scroll-left").bind("click", function(event) {
    event.preventDefault();
    // Animates the scrollTop property by the specified
    // step.
    $(".main-content").animate({
        scrollLeft: "-=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("left");
}).bind("mouseout", function(event) {
    scrolling = false;
});


$(".scroll-right").bind("click", function(event) {
    event.preventDefault();
    $(".main-content").animate({
        scrollLeft: "+=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("right");
}).bind("mouseout", function(event) {
    scrolling = false;
});

function scrollContent(direction) {
    var amount = (direction === "left" ? "-=15px" : "+=15px");
    $(".main-content").animate({
        scrollLeft: amount
    }, 1, function() {
        if (scrolling) {
            scrollContent(direction);
        }
    });
}


var step = 50;
var scrolling = false;

// Wire up events for the 'scrollUp' link:
$("#scrollleft").bind("click", function(event) {
    event.preventDefault();
    // Animates the scrollTop property by the specified
    // step.
    $(".main-content").animate({
        scrollLeft: "-=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("left");
}).bind("mouseout", function(event) {
    scrolling = false;
});


$("#scrollright").bind("click", function(event) {
    event.preventDefault();
    $(".main-content").animate({
        scrollLeft: "+=" + step + "px"
    });
}).bind("mouseover", function(event) {
    scrolling = true;
    scrollContent("right");
}).bind("mouseout", function(event) {
    scrolling = false;
});

function scrollContent(direction) {
    var amount = (direction === "left" ? "-=15px" : "+=15px");
    $(".main-content").animate({
        scrollLeft: amount
    }, 1, function() {
        if (scrolling) {
            scrollContent(direction);
        }
    });
}
        /* $(function(){
          
         
          
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
         			$('.main-content').animate({ // smooth scroll
         				scrollLeft: $('.main-content').scrollLeft() - 400
         			})
         			$('.log .left').text( $('.main-content').scrollLeft() );
         		}
         		if (e.keyCode == 39) { 
         			 $('.main-content').animate({ // smooth scroll
         				scrollLeft: $('.main-content').scrollLeft() + 400
         			})
         			$('.log .left').text( $('.main-content').scrollLeft() );
         		}
         	});*/
      </script>
      <script type="text/javascript">
         $(document).ready(function(){ 
		 
		 		 var windowsize = $(window).width();

$(window).resize(function() {
  var windowsize = $(window).width();
});
		 if (windowsize < 350) {
		  jQuery(".live-tile, .flip-list").not("").liveTile();
	 $('[class^=live-tile]').removeClass();
}
          $(".scroll-content").mCustomScrollbar();
             $(window).scroll(function(){
                 if ($(this).scrollTop() > 100) {
                     $('.scrollup').fadeIn();
                 } else {
                     $('.scrollup').fadeOut();
                 }
             }); 
         
             $('.scrollup').click(function(){
                 $("html, body").animate({ scrollTop: 0 }, 600);
                 return false;
             });
         
         });
      </script>
	 
        <script type="text/javascript">
           jQuery(function() {
               jQuery('ul.nav a').bind('click',function(event){
                    var $anchor = $(this);
                    /*
                    if you want to use one of the easing effects:
                    $('html, body').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1500,'easeInOutExpo');
                     */
                    jQuery('html, body .main-content').stop().animate({
                        scrollLeft: $($anchor.attr('href')).offset().left
                    }, 1000);
                    event.preventDefault();
                });
            });
        </script>
      <script type="text/javascript">
         // apply regular slide universally unless .exclude class is applied 
         // NOTE: The default options for each liveTile are being pulled from the 'data-' attributes
         jQuery(".live-tile, .flip-list").not(".exclude").liveTile();
      </script>
</body>
</html>