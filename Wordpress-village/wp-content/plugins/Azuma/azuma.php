<?php 
/*
Plugin Name: Azuma
Plugin URI: http://azuma236.com/
Description: Ce plugin est un Padawan .
Version: 1.9.4
Author: Padawan
Author URI: http://azuma236.com/
License: GPL3
Text Domain: Azuma
 */


add_filter('the_content', 'ajoutTexte' );
add_shortcode('newShortcode', 'gereleShortcode');






function gereShortcode(){
    echo '<p> coucou je suis le shortcode du padawan </p>';
}

    function ajoutTexte($content){
            $content .= 'Bonjour les padawan du plugin.';
        return $content;
    }
?>