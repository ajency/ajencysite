<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

		   <div class="container">
         <div class="full-container accordion hire-page single-post " style="width: 100%;">
           
 <div class="wrapper">		   <!--Section Block 1 -->
           		<div class="Center-Block main-page p-l-n aj-group">
				 <div class="content">
				 <h3 class="grid-title non-bdr" >&nbsp; </h3>
						<h1><?php echo get_the_title(); ?>

						</h1>
						<div class="column-1 p-l-n">
						<div class="intro ">
				<?php echo get_post_meta($post->ID, 'excerpt', true); ?>


						</div>
					 	<div class="ajency-detail">
							<a href="index.html">
								<img src="<?php echo site_url(); ?>/ajclib/images/ajency-logo.png"/>
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
						<ul class="footer-menu">
							<li> <a href="index.html">Home</a></li>
							<li> <a href="hiring.html">Working at ajency.in</a></li>
							<li> <a href="secondcareer.html">Second Carrer</a></li>
							<li> <a href="internship.html">Internship & Projects</a></li>
							<li> <a href="hiring.html">Web Developers </a></li>
						</ul>
						<b>			<?php
$next_post = get_next_post();
if (!empty( $next_post )): ?>
							JUMP TO NEXT <SPAN>PAGE  <a href="<?php echo get_permalink( $next_post->ID ); ?>"><img src="<?php echo site_url(); ?>/ajclib/images/arrowRight.png" /></a></SPAN>
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