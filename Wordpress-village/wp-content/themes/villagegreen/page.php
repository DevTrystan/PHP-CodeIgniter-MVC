
<?php get_header()?>
<div class="col-8">
   <?php
   if (have_posts()) : the_post(); ?>
      <h1><?php the_title(); ?></h1>
      <hr>

      <div><?php the_content(); ?></div>
   <?php
   endif;
   ?>
   <?php get_footer()?>