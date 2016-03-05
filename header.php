<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sanctuary2016
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<h1><?php bloginfo( 'name' ); ?></h1>
		<h2><?php bloginfo( 'description' ); ?></h2>
			<nav>
				<ul>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</ul>
			</nav>
	</header>

<!--<li> <a href="#">Studio Cabins</a>
	<ul>
		<li><a href="#">Hillside Painter's Cabin</a></li>
		<li><a href="#">Orchard Painter's Cabin</a></li>
		<li><a href="#">Prarie Ceramics Cabin</a></li>
		<li><a href="#">Woodland Ceramics Cabin</a></li>
		<li><a href="#">Woodworkers Cabin</a></li>
		<li><a href="#">Woodland Writers Cabin</a></li>
		<li><a href="#">Hillside Writers Cabin</a></li>
		<li><a href="#">Musicians Cabins</a></li>
		<li><a href="#">Valley Drawing Cabin</a></li>
	</ul>
</li>