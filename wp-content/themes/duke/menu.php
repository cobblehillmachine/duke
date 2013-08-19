<?php
 /*
Template Name: MENU
*/

get_header(); ?>
		<div class="middle-cont">
			<?php query_posts(array('post_type' => 'menu', 'order' => 'ASC', 'posts_per_page' => 200)); ?>
			<div class="col1">
			<?php global $ancestor;	$childcats = get_categories(array('child_of' => 4 , 'order' => 'ASC')); ?>
				<?php foreach ($childcats as $childcat) {
			  		if (cat_is_ancestor_of($ancestor, $childcat->cat_ID) == false){ ?>					
				    	<div id="<?php echo strtolower(str_replace(' ','-',$childcat->cat_name)); ?>" class="menu-item-cont futura-cond-med for-desktop">
							<div class="menu-title"><?php echo $childcat->cat_name; ?></div>
							<?php while ( have_posts() ) : the_post(); ?>
								<span class="menu-item <?php foreach((get_the_category()) as $category) {echo strtolower(str_replace(' ','-',$category->cat_name));} ?>"><?php the_title(); ?>
									<?php $cc = get_the_content(); if($cc != '') { ?>...<?php the_content(); ?><?php } ?></span>
							<?php endwhile; // end of the loop. ?>
						</div>
					<?php }} wp_reset_query(); ?>

			<?php while ( have_posts() ) : the_post(); ?>
				
						

										<div class="info"><?php the_content(); ?></div>
							
								
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