<nav id="navbar" class="navbar navbar-expand-sm bg-dark navbar-dark mt-2">
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
    
</nav>