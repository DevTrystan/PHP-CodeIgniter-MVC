<?php get_header(); ?>



<div class="row mx-0">
    <div class="col-8">
<?php
if ( have_posts() ) : // S'il y a des articles 
    while ( have_posts() ) : the_post() // Tant qu'il y a des articles, alors pour chaque article on affiche : 
?>
    <h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>  
<?php                        
        echo"<div>".the_excerpt()."</div>";
        echo"<hr>";
        endwhile;
    endif;
?>

    </div>

    <!-- sidebar.php -->
    <div class="col-4  border border-dark">
        [ SIDEBAR ]
        </div>
    </div>




<?php get_footer(); ?>

