<?php
/**
 * Template Name: content-subpage
 */
get_header(); ?>
	
	<?php 

	$images = get_field('image_gallery');

		if( $images ): ?>
		    <ul>
		        <?php foreach( $images as $image ): ?>

		            <li>
		                <a href="<?php echo $image['url']; ?>">
		                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		                <p><?php echo $image['caption']; ?></p>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>

	<?php

// check if the repeater field has rows of data
if( have_rows('sub_page') ):

 	// loop through the rows of data
    while ( have_rows('sub_page') ) : the_row();
?>
    // display a sub field value
		<?php the_sub_field( 'title' ); ?>
		<?php the_sub_field( 'page_description' ); ?>
		<?php the_sub_field( 'art_features_list' ); ?>
		<?php the_sub_field( 'cabin_features_list' ); ?>
		<?php the_sub_field( 'pricing_info' ); ?>
		<a href="<?php the_sub_field( 'link_button' ); ?>">link</a>
<?php
    endwhile;

else :

    // no rows found

endif;

?>	

	<?php

/*		the_field( 'title' );
		the_field( 'page_description' );
		the_field( 'art_features_list' );
		the_field( 'cabin_features_list' );
		the_field( 'pricing_info' );
		the_field( 'link_button');  
		/*<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a> */

	?>
	
	<div class="image-content"	style="background-image: url('<?php the_field('background_image'); ?>');"></div>

<?php
get_footer();