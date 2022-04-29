<nav id="navbar" class="navbar navbar-expand-sm bg-primary navbar-dark mb-3 ">
  <?php
  $custom_logo_id = get_theme_mod('custom_logo');

  $aLogo = wp_get_attachment_image_src($custom_logo_id, 'medium');

  if (has_custom_logo()) { // Si un logo a été défini
    echo '<a href="' . get_bloginfo('url') . '" title="' . get_bloginfo('name') . '"><img src="' . esc_url($aLogo[0]) . '" alt="' . get_bloginfo('name') . '" title="' . get_bloginfo('name') . '" class="img-fluid"></a>';
  } else {   // Sinon on affiche le nom du site
    echo '<h1>' . get_bloginfo('name') . '</h1>';
  }
  ?>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="collapsibleNavbar">
    
        <?php  
        wp_nav_menu(array(
            'theme_location'    => 'principal',
            'depth'             => 5,
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker()
            )
        ); 
        ?>                  
    </div> 
    <?= get_search_form() ?>
</nav>

  

