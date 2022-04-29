<?php
wp_enqueue_style( 'style', get_stylesheet_uri() );
function villagegreen_custom_logo_setup()
{
   $aParams = array(
      'height'      => 100,
      'width'       => 400,
      'flex-height' => true,
      'flex-width'  => true,
      'header-text' => array('site-title', 'site-description'),
   );

   // Ajout du support 
   add_theme_support('custom-logo', $aParams);
}
add_action('after_setup_theme', 'villagegreen_custom_logo_setup');



add_theme_support('menus');
register_nav_menu("principal", "Menu principal");
register_nav_menu('footer', 'Pied de page');

function register_navwalker()
{
   // On charge la classe
   // la fonction get_template_directory() récupère le chemin vers le thème actif, 
   require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'register_navwalker');

if (function_exists('add_theme_support')) {
   add_theme_support('post-thumbnails');
}

function header_widgets_init()
{

   register_sidebar(array(

      'name' => 'Ma nouvelle zone de widget',
      'id' => 'new-widget-area',
      'before_widget' => '<div class="nwa-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="nwa-title">',
      'after_title' => '</h2>',
   ));
}

add_action('widgets_init', 'header_widgets_init');

function header2_widgets_init()
{

   register_sidebar(array(

      'name' => 'Widget 2',
      'id' => 'secwi',
      'before_widget' => '<div class="sec-widget">',
      'after_widget' => '</div>',
      'before_title' => '<h2 class="sec-title">',
      'after_title' => '</h2>',
   ));
}



add_action('widgets_init', 'header2_widgets_init');

//shortcode
function fonctionGrandTitre($param, $content) {
   return '<h1>' . $content . '</h1>';
}
add_shortcode('grandTitre', 'fonctionGrandTitre');

function fonctionNomTaille($param) {
   extract(
     shortcode_atts(
       array(
         'nom' => 'Dupont',
         'taille' => 186
       ),
       $param
     )
   );
   return 'Monsieur '.$nom." mesure ".$taille;
};


 add_shortcode('nomTaille', 'fonctionNomTaille');