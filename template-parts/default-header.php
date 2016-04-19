<header class="site-header">
  <div class="container">
    <nav class="navbar" role="navigation" aria-label="<?php esc_attr_e('Primary', 'niteline'); ?>">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#home-navbar">
          <span class="sr-only">Menu</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo get_home_url() ?>">
          <img alt="NiteLine" src="<?php echo get_template_directory_uri() ?>/img/logo.svg" />
        </a>
      </div>
      <?php
        wp_nav_menu( array(
          'menu'            => 'primary',
          'depth'           => 2,
          'container'       => 'div',
          'container_class' => 'collapse navbar-collapse',
          'container_id'    => 'home-navbar',
          'menu_class'      => 'nav navbar-nav navbar-right',
          'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
          'walker'          => new wp_bootstrap_navwalker())
        );
      ?>
    </nav>
  </div>
</header>
