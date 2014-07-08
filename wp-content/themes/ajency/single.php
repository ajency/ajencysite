<?php get_header(); ?>
			
			<div class="container">
         <div class="full-container accordion hire-page single-post " style="width: 100%;">
           
 <div class="wrapper">		   <!--Section Block 1 -->
           		<div class="Center-Block main-page p-l-n aj-group">
				 <div class="content">
				 <h3 class="grid-title non-bdr" >&nbsp; </h3>
						<h1>
							<?php 
								$title = get_the_title();
								$wordarray = explode(' ', $title); 
						        if (count($wordarray) > 1 ) { 
						          $wordarray[count($wordarray)-1] = '<span class="highlight">'.($wordarray[count($wordarray)-1]).'</span>'; 
						          $title = implode(' ', $wordarray);  
						        }
					        ?>
							<?php echo $title; ?>
						</h1>
						<div class="column-1 p-l-n">
						<div class="intro ">
						<?php echo get_post_meta($post->ID, 'excerpt', true); ?>


						</div>
					 	<div class="ajency-detail">
                           <div id="header">
                              <a href="#menu"></a>
                              Examples
                           </div>
                           <a href="<?php echo get_bloginfo('url'); ?>">
                           <img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/ajency-logo.png"/>
                           </a>
                           <div class="contact-us">
                              <a href="#" style="color:#000;">+91 9975931402</a></br>
                              talktous@ajency.in
                           </div>
                        </div>
				   </div>
				   <div class="column-6 ">
					<div class="accord-contents">
						<div class="col-1">
							<div class="aj-live-tile">
							 <?php if ( has_post_thumbnail()) : ?>
							  
							   <?php the_post_thumbnail('full'); ?>
							   
							 <?php endif; ?>
							</div>
						
						</div>
					</div>
					 
				   </div>
				  
			</div>
			</div>
   <div class="Center-Block content-mode ">
				<h3 class="grid-title non-bdr">&nbsp;</h3>
						<div class="reading-canvas">
							<?php while ( have_posts() ) : the_post(); ?>

							<?php the_content(); ?>
						   	<?php endwhile; // end of the loop. ?>
						</div>
				
			</div>
  <div class="Center-Block column-6 ">
               <h3 class="grid-title non-bdr">&nbsp;</h3>
           <div class="casestudy-content last-col">
            
                  <p>
						<?php
							$defaults = array(
								'menu'            => 'footer-menu',
								'container'       => false,
								'menu_class'      => 'footer-menu',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'depth'           => 0,
								'walker'          => ''
							);

							wp_nav_menu( $defaults );
						?>
						
						<b>			<?php
$next_post = get_next_post();
if (!empty( $next_post )): ?>
							JUMP TO NEXT <SPAN>PAGE  <a href="<?php echo get_permalink( $next_post->ID ); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/library/images/arrowRight.png" /></a></SPAN>
						</b>
			

<?php endif; ?>
						<div class="share-intro">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit
						<div class="share-link">Like it Share it!</div>
						<?php if(function_exists('social_ring_show')){ social_ring_show();} ?>
						</div>
                  </p>
               </div>
            </div>
  
           
			        
            </div>
          
         </div>
      </div>

<?php get_footer(); ?>