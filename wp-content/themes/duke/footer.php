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

<!-- </div>
<div style="clear-both"></div> -->

	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">
		<div id="footer-top"></div>
		<div class="middle-cont">
			<div id="pig-left" class="pig"></div>
			<div id="pig-right" class="pig"></div>
			<!-- <link href="http://cdn-images.mailchimp.com/embedcode/slim-081711.css" rel="stylesheet" type="text/css"> -->
			<div id="mc_signup">
				<?php  !function_exists('dynamic_sidebar') || !dynamic_sidebar(3)  ?>
			<!-- <form action="http://samantha-vandapuye.us5.list-manage.com/subscribe/post?u=d8860daa92505bdf4d8b55312&amp;id=e168d9caee" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				<input type="email" value="" name="EMAIL" id="signup" default="JOIN OUR MAILING LIST" required>
				<div class="clear"><input type="submit" name="subscribe" id="subscribe"></div>
			</form> -->
			</div>
			<a id="facebook" href="http://www.facebook.com/OldSouthBbq" target="_blank"></a>
			<a id="address" href="http://maps.google.com/maps?q=318+Village+Road+Northeast,+Leland,+North+Carolina+28451&hl=en&client=firefox-a&hnear=318+Village+Rd+NE,+Leland,+North+Carolina+28451&gl=us&t=m&z=16" target="_blank">318 Village Rd, Leland   •   North Carolina 28451</a>
			<a id="credit" href="http://cobblehilldigital.com" target="_blank">Site by cobble hill</a>	
		</div>


	</footer><!-- #colophon -->
<!-- </div> --><!-- #page -->
 </div>

<?php wp_footer(); ?>

</body>
</html>