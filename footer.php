    <div class="footer-divider"></div>
    <footer class="navbar-bottom site-footer vertical-padd-2">
      <div class="container">
        <div class="col-md-8 col-sm-8 col-xs-12 bottom-padd-2">
          <p>Opening Hours: During Term Time Only 9:00pm – 2:30am</p>
          <p>Freephone: 1800 793 793<br />
          (Includes calls from mobiles)</p>
          <?php $admin_email = get_option( 'admin_email' ); ?>
          <p>General Inquiries: <?php echo '<a href="mailto:' . $admin_email . '">' . $admin_email . '</a>'; ?></p>
          <p>Copyright &copy Niteline 2016, All rights reserved</p>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-12">
          <h3>Site Map</h3>
          <div class="yellow-divider-left"></div>
          <?php echo do_shortcode('[pagelist]'); ?>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
