<?php
/**
 * Template Name: content-homepage
 */
get_header(); ?>

<div id="main-content" class="main-content">

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1><?php the_field('image_caption_1'); ?></h1>
			<h2><?php the_field('image_sub_caption_1'); ?></h2>
				
				<?php $image = get_field('image_1');?>

		<div class="image-content"	style="background-image: url('<?php the_field('image_1'); ?>');">
	</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1><?php the_field('image_caption_2'); ?></h1>
			<h2><?php the_field('image_sub_caption_2'); ?></h2>
				
				<?php $image = get_field('image_2');?>

		<div class="image-content"	style="background-image: url('<?php the_field('image_2'); ?>');">
	</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1><?php the_field('image_caption_3'); ?></h1>
			<h2><?php the_field('image_sub_caption_3'); ?></h2>
				
				<?php $image = get_field('image_3');?>

		<div class="image-content"	style="background-image: url('<?php the_field('image_3'); ?>');">
	</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1><?php the_field('image_caption_4'); ?></h1>
			<h2><?php the_field('image_sub_caption_4'); ?></h2>
				
				<?php $image = get_field('image_4');?>

		<div class="image-content"	style="background-image: url('<?php the_field('image_4'); ?>');">
	</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
				
			<h1><?php the_field('image_caption_5'); ?></h1>
			<h2><?php the_field('image_sub_caption_5'); ?></h2>
				
				<?php $image = get_field('image_5');?>

		<div class="image-content"	style="background-image: url('<?php the_field('image_5'); ?>');">
	</div>

<?php
get_footer();