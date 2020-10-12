<?php
get_header();



if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		//
		// Post Content here
		//
	} // end while
} // end if

?>



<!-- The video -->
<video autoplay muted loop id="myVideo">
	<source src="<?php bloginfo('template_url'); ?>/content/bg.mp4" type="video/mp4">
</video>

<?php
get_footer();
?>
