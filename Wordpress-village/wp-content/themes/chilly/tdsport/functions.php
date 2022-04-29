<?php

function tdsport_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header', 'En tête du menu');
    register_nav_menu('footer', 'Pied de page');
}


function tdsport_register_assets()
{
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css', []);
    wp_register_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js', ['popper', ' jquery'], false, true);
    wp_register_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js', [], false, true);
    wp_deregister_script('jquerymin');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.5.1.slim.min.js', [], false, true);
    wp_enqueue_style('bootstrap');
    wp_enqueue_script('bootstrap');
}

function tdsport_title_separator()
{
    return "|";
}

function tdsport_document_title_parts($title)
{
    unset($title['tagline']);
    return $title;
}

function tdsport_menu_class($classes)
{
    $classes[] ='nav-item';
    return $classes;
}

function tdsport_menu_link_class($attrs)
{
    $attrs['class'] ='nav-link';
    return $attrs;
}
add_action('after_setup_theme', 'tdsport_support');
add_action('wp_enqueue_scripts', 'tdsport_register_assets');
add_filter('document_title_separator', 'tdsport_title_separator');
add_filter('document_title_parts', 'tdsport_document_title_parts');
add_filter('nav_menu_css_class', 'tdsport_menu_class');
add_filter('nav_menu_link_attributes', 'tdsport_menu_link_class');