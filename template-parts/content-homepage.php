<?php
/**
 * Template Name: content-homepage
 */
get_header(); ?>

<div id="main-content" class="main-content">

<?php
	if ( is_front_page() && sanctuary2016_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	}
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1>Hello There</h1>
			
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_sidebar();
get_footer();