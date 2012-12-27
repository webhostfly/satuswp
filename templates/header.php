<header id="header" role="banner">  
  <div class="row expand">
    
    <hgroup id="brand">
      <h1 id="site-title">
        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
      </h1>
      <h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
    </hgroup>
    
    <nav id="primary-nav" role="navigation">
      <h2 class="assistive-text"><?php _e( 'Primary Navigation', 'satus' ); ?></h2>
      <a class="assistive-text" href="#main" title="<?php _e('Go to main content', 'satus') ?>"><?php _e('Go to main content', 'satus') ?></a>
      <?php
        if (has_nav_menu('primary_nav')) {
          wp_nav_menu(array(
            'theme_location' => 'primary_nav',
            'depth' => 2,
            'container' => false,
            'items_wrap' => '<ul class="nav">%3$s</ul>',
            'walker' => new Satus_Navbar_Walker()
          ));
        }
      ?>
    </nav>

  </div>
</header>
<!-- /#header -->