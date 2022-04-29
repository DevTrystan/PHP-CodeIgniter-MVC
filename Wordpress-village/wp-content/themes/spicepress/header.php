<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
	
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class();?>>
<?php wp_body_open(); ?>	
<div id="page" class="site">
	<a class="skip-link spicepress-screen-reader" href="#content"><?php esc_html_e( 'Skip to content', 'spicepress' ); ?></a>
<?php get_template_part('header/header-navbar');?>