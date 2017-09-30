<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package newworldtheme
 * @version 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/app/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/app/css/superfish/superfish-navbar.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/app/css/superfish/superfish.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/app/css/main.css">
<?php wp_head(); ?>
</head>
<body <?php body_class( ); ?>>
					<h1 id="blog-title"><?php bloginfo('name'); ?>
					<br>
					<?php echo 'Hello '.get_theme_mod('textsection_input_text'); ?>
					<br>
					<p class="selected-color">
					<?php echo get_theme_mod('textsection_select'); ?>
					</p>
					</h1>
					<?php echo get_theme_mod('slider_slide1_image'); ?>
					<?php get_template_part('template-parts/bootstrap-nav'); ?>
<section class="slider">
	<?php 
		if(get_theme_mod('slider_slide1')){
			echo '<img src='.get_theme_mod("slider_slide1").'>';
		}
	?>
</section>		