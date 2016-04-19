<header class="homepage-header top-padd-1">
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

    <div class="text-center bottom-margin-4">
      <h1>1800 793 793</h1>
      <p>Student Support, Every Night of Term<br />
      Lines open 9pm &ndash; 2:30am</p>
      <?php
        $date = new DateTime();
        $date->setTimezone(new DateTimeZone('Europe/London'));
        if (!get_field('lines_open')):
      ?>
        <div class="closed-message">
          <p><?php the_field('closed_message'); ?></p>
        </div>
      <?php elseif (($date->format('H') >= 21) || ($date->format('H') <= 2 && $date->format('i') < 30)): ?>
        <h4>&mdash; OR &mdash;</h4>
        <a id="mibew-agent-button" href="/niteline/mibew/chat?locale=en" onclick="Mibew.Objects.ChatPopups['570c1127309d3fa1'].open();return false;">
          <button class="btn btn-yellow">Connect with a<br />Listener Online now</button>
        </a>
        <script type="text/javascript" src="http://localhost:8888/niteline/mibew/js/compiled/chat_popup.js"></script>
        <script type="text/javascript">Mibew.ChatPopup.init({"id":"570c1127309d3fa1","url":"\/niteline\/mibew\/chat?locale=en","preferIFrame":false,"modSecurity":false,"width":640,"height":480,"resizable":true,"styleLoader":"\/niteline\/mibew\/chat\/style\/popup"});</script>
      <?php else: ?>
        <div class="closed-message">
          <p><?php the_field('not_open_yet_message'); ?></p>
        </div>
      <?php endif ?>
    </div>
  </div>
</header>
