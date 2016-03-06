<?php
/**
 * Template Name: content-subpage
 */
get_header(); ?>
	

	<div id="subpage1" class="content-area">
	
		<div id="image-gallery">

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
		</div>
	
		<div id="content-area">
	<?php

// check if the repeater field has rows of data
if( have_rows('sub_page') ):

 	// loop through the rows of data
    while ( have_rows('sub_page') ) : the_row();
?>
		<h1><?php the_sub_field( 'title' ); ?></h1>
		<p><?php the_sub_field( 'page_description' ); ?></p>
		<ul id="subpagelistart"><h2><?php the_sub_field( 'art_features_list_header' ); ?></h2>
			<li><?php the_sub_field( 'art_features_list1' ); ?></li>
			<li><?php the_sub_field( 'art_features_list2' ); ?></li>
			<li><?php the_sub_field( 'art_features_list3' ); ?></li>
			<li><?php the_sub_field( 'art_features_list4' ); ?></li>
			<li><?php the_sub_field( 'art_features_list5' ); ?></li>
		</ul>
		<ul id="subpagelistcabin"><h2><?php the_sub_field( 'cabin_features_list_header' ); ?></h2>
			<li><?php the_sub_field( 'cabin_features_list1' ); ?></li>
			<li><?php the_sub_field( 'cabin_features_list2' ); ?></li>
			<li><?php the_sub_field( 'cabin_features_list3' ); ?></li>
			<li><?php the_sub_field( 'cabin_features_list4' ); ?></li>
			<li><?php the_sub_field( 'cabin_features_list5' ); ?></li>
			<li><?php the_sub_field( 'cabin_features_list6' ); ?></li>
			<li><?php the_sub_field( 'cabin_features_list7' ); ?></li>
		</ul>
		<ul id="subpagelistprice"><h2><?php the_sub_field( 'pricing_info_header' ); ?></h2>
			<li><?php the_sub_field( 'pricing_info_list1' ); ?></li>
			<li><?php the_sub_field( 'pricing_info_list2' ); ?></li>
		</ul>
		<a class="subpagebutton" href="<?php the_sub_field( 'link_button' ); ?>">check availability</a>
<?php
    endwhile;

else :

    // no rows found

endif;

?>	
</div>
	<div id="image-content6" style="background-image: url('<?php the_field('background_image'); ?>');"></div>
</div>

<?php
get_footer();