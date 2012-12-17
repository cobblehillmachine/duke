<?php
 /*
Template Name: MENU
*/

get_header(); ?>
		<div class="middle-cont">
			

			<?php while ( have_posts() ) : the_post(); ?>
				
						<div class="col1">
								<?php the_content(); ?>
								
						</div>
						<div class="col2">
							<div class="img1-cont">
								<div class="featured-image">
									<?php the_post_thumbnail('full'); ?>		
									<!-- <img src="/wp-content/themes/duke/images/duke/menu1.jpg"> -->		
								</div>
								<img class="logo2" src="/wp-content/themes/duke/images/duke/logo2.png">
							</div>
							<div class="featured-image">
								<?php if( class_exists( 'kdMultipleFeaturedImages' ) ) {
								    kd_mfi_the_featured_image( 'featured-image-2', 'page' );
								} ?>		
								<!-- <img src="/wp-content/themes/duke/images/duke/menu2.jpg"> -->		
							</div>
						</div>					

			<?php endwhile; // end of the loop. ?>
			
		</div><!-- #primary -->

<?php // get_sidebar(); ?>

<?php get_footer(); ?>