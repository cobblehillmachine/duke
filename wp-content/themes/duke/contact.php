<?php
 /*
Template Name: CONTACT
*/

get_header(); ?>
		<div id="contact" class="middle-cont">


			<?php while ( have_posts() ) : the_post(); ?>
				
				<div class="col1">
					<?php the_content(); ?>
				</div>
				<div class="col2">
					<div class="map-image">
						<div id="map_canvas" style="width:434px; height:286px;"></div>		
						<!-- <iframe width="434" height="286" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=318+Village+Road+Leland,+North+Carolina+28451&amp;aq=&amp;sll=33.624497,-80.926614&amp;sspn=4.417747,6.987305&amp;ie=UTF8&amp;hq=&amp;hnear=318+Village+Rd+NE,+Leland,+North+Carolina+28451&amp;t=m&amp;z=14&amp;ll=34.236268,-78.002909&amp;output=embed"></iframe> -->		
					</div>
					<div class="featured-image">		
						<!-- <img style="width:434px; height:286px;" src="/wp-content/themes/duke/images/duke/thumbnail3.jpg" />	 -->
						<?php the_post_thumbnail('full'); ?>	
					</div>
				</div>

			<?php endwhile; // end of the loop. ?>
			
		</div><!-- #primary -->


<?php // get_sidebar(); ?>

<?php get_footer(); ?>

<script type="text/javascript"
  src="http://maps.googleapis.com/maps/api/js?&sensor=false">
</script>
<script type="text/javascript">
  function initialize() {
    // var image = src="/system/images/map-pin.png";
    var myOptions = {
      center: new google.maps.LatLng(34.236268, -78.002909) ,
      zoom: 16,
      mapTypeId: google.maps.MapTypeId.ROADMAP ,
      scaleControl: false,
      panControl: false,
      mapTypeControl: false,
      streetViewControl: false,

      zoomControlOptions: {
               style: google.maps.ZoomControlStyle.BIG,
               position: google.maps.ControlPosition.RIGHT_CENTER
               
            }
    };
    var map = new google.maps.Map(document.getElementById("map_canvas"),
        myOptions);
        
    var marker = new google.maps.Marker({
        position: map.getCenter(),
        map: map,
      });
    
  }
</script>

<script>
  $(document).ready(function() {
    initialize();
  });
  
  $(window).resize(function() { 
     // initialize();
  });
</script>