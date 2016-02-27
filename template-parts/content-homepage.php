<?php
/**
 * Template Name: content-homepage
 */
get_header(); ?>

<div id="main-content" class="main-content">

<?php
/*	if ( is_front_page() && sanctuary2016_has_featured_posts() ) {
		// Include the featured content template.
		get_template_part( 'featured-content' );
	} */
?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1><?php the_field('image_caption_1'); ?></h1>
				
				<?php 

				$image = get_field('image_1');

				?>

	<div class="image-content"	style="background-image: url('<?php the_field('image_1'); ?>');">
	
	</div>
<?php 
/*			if( !empty($image) ): ?> */

/*					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /> */

/*				<?php endif; ?>  */
?>
			<h1><?php the_field('image_caption_2'); ?></h1>
			<h1><?php the_field('image_caption_3'); ?></h1>
			<h1><?php the_field('image_caption_4'); ?></h1>
			<h1><?php the_field('image_caption_5'); ?></h1>
			
		</div><!-- #content -->
	</div><!-- #primary -->
</div><!-- #main-content -->

<?php
get_footer();