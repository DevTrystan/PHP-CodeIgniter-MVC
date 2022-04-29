<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
        <?php if (is_404()) : ?>
            <?php _e('Not Found'); ?>
        <?php elseif (is_home() || is_front_page()) : ?>
            <?php bloginfo('description'); ?>
        <?php elseif (is_category()) : ?>
            <?php single_cat_title(); ?>
        <?php else : ?>
            <?php wp_title(); ?>
        <?php endif; ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <meta name='robots' content='noindex,follow' />
    <?php wp_head(); ?>
</head>

<body>

    <?php get_template_part('_partnav'); ?>


    <div class="container-fluid">
        <div class="row ">
            <div class="col-12">
                <img src="http://localhost/wordpress/wp-content/themes/villagegreen/tournedisque.jpg" alt="Mon premier site Worpdress" class="class-fluid mb-4 w-100">
            </div> <!-- .col -->
        </div> <!-- .row -->