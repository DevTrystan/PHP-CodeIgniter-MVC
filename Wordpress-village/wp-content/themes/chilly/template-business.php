<?php 
		// Template Name: Business Template
		get_header();
		$remove_banner_image = get_theme_mod('home_page_slider_enabled');
		if($remove_banner_image !="off")
	    {
			   get_template_part('index','slider');
		
        }
        echo '<div id="content">';
		do_action( 'spiceb_spicepress_sections', false );
		get_template_part('index','news');
		echo '</div>';
		get_footer();
?>
		