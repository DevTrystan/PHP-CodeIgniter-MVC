<?php get_header() ?>

<?php if (have_posts()) : ?>
        <div class="row">
                <?php while (have_posts()) : the_post(); ?>
                        <div class="col-sm-4">
                                <div class="card">
                                        <?php the_post_thumbnail('medium', ['class' => 'card-img-top', 'alt' => '', 'style' => 'height: auto;']) ?>
                                        <div class="card-body">
                                                <h5 class="card-title"><?php the_title() . "<br>" . "<br>" ?></h5>
                                                <h6 class="card-subtitle mb-2 text-muted"><?php the_category() ?></h6>
                                                <p class="card-text">
                                                        <?php the_excerpt() ?>
                                                </p>
                                                <a href="<?php the_permalink() ?>" class="card-link">Voir plus</a>
                                        </div>
                                </div>
                        </div>
                <?php endwhile ?>

        </div>
        <div class="site__navigation">
                <div class="site__navigation__prev">
                        <?php previous_post_link('Article Précédent<br>%link'); ?>
                </div>
                <div class="site__navigation__next">
                        <?php next_post_link('Article Suivant<br>%link'); ?>
                </div>
        </div>
<?php else : ?>
        <h1>Pas d'articles</h1>
<?php endif; ?>



<?php get_footer() ?>