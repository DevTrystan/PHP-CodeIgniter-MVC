<?php get_header(); ?>





<div class="row mx-0">
    <div class="col-8">
    
        <?php
        // Tableau des arguments à passer à la requête
        // Attention : WP_Query ne fonctionne pas si ce tableau est vide
        $args = array(
            'posts_per_page' => 5 // Nombre d'articles à afficher 
        );

        // Custom query
        $query = new WP_Query($args);

        // Check that we have query results.
        if ($query->have_posts()) :

            // Start looping over the query results.
            while ($query->have_posts()) : $query->the_post();
                echo "<div class='row'>\n";
                echo "<div class='col-8'><h2><a href='" . get_the_permalink() . "' title='" . get_the_title() . "'>" . get_the_title() . "</a></h2></div>\n";
                echo "</div>\n";
                echo "<div class='row border-bottom pb-5 mb-5'>\n";
                echo "<div>";

                if (has_post_thumbnail()) { // Vérifie qu'il existe une image mise en avant pour l'article
                    the_post_thumbnail('thumbnail');
                }

                echo "</div>\n";

                echo "<div class='col-9'>" . get_the_excerpt() . "</div>\n";
                echo "</div >\n";
            endwhile;
        endif;
        ?>
    </div>
    <?php
    // Restaure la boucle originale
    wp_reset_postdata();
    ?>

    <!-- sidebar.php -->
    <div  class=" col-4 border border-secondary">
        <!-- ajout de ma nouvelle widget area -->
        <?php if (is_active_sidebar('new-widget-area')) : ?>
            <div id="header-widget-area" class="nwa-header-widget widget-area" role="complementary">
                <?php dynamic_sidebar('new-widget-area'); ?>
            </div>
        <?php endif; ?>
        <!-- fin nouvelle widget area -->
        <!-- ajout de ma nouvelle widget area -->
        <?php if (is_active_sidebar('secwi')) : ?>
            <div id="header2-widget-area" class="nwa-header2-widget widget-area" role="complementary">
                <?php dynamic_sidebar('secwi'); ?>
            </div>
        <?php endif; ?>
        <!-- fin nouvelle widget area -->
        
            
    </div>
</div>

<?php get_footer(); ?>
