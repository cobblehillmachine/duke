<?php
 /*
Template Name: HOMEPAGE
*/

get_header(); ?>
		<div id="primary">
			<?php echo do_shortcode('[cycloneslider id ="homeslide"]'); ?>
		</div>

<?php get_footer(); ?>

<script>
	$(document).ready(function() {
		$('.pig').remove();
		$('#main').css('padding', 0)
	});
</script>