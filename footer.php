      <div class="clear"></div>
    </div>
    <footer id="footer" role="contentinfo">
      <div class="container">
        <div id="socialmedia">
          <a href="https://www.facebook.com/Dinigraphie/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/facebookicon_footer_220119.png" class="ftr_icon" alt="fb_logo" /></a>&nbsp;<a href="https://www.instagram.com/dinigraphie/" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/instagramicon_footer_220119.png" class="ftr_icon" alt="insta_logo" /></a>
        </div>
          <div id="copyright">
            <?php echo sprintf( __( '%1$s %2$s'), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?> /
            <a href="<?php echo site_url(); ?>/kontakt">Kontakt</a> /
            <a href="<?php echo site_url(); ?>/impressum">Impressum</a> /
            <a href="<?php echo site_url(); ?>/datenschutz">Datenschutz</a>
          </div>
      </div>
    </footer>
  </div>
  <?php wp_footer(); ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/functions.js" defer></script>
</body>
</html>
