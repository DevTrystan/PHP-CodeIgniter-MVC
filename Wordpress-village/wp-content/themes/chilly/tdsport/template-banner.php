<?php
/*
    Template Name: Page avec bannière
*/
?>
<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <p> Ici la bannière </p>
<h1><br><?php the_title() ?><br><br></h1>


    <p><img src="<?php  the_post_thumbnail_url() ?>" alt="" style="width:100%; height:auto;"></p>
    
    <?php the_content() ?>
<?php endwhile;
endif; ?>





<?php get_footer() ?>