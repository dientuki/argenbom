		<footer class="footer">
      <div class="wrapper">
        <div class="footer__container">
          <div class="footer__contact-info">
            Formosa 2835 - Valentin Alsina (1822) - Bs. As. Argentina - 1142088751 / 1142289635 / 1133459480
          </div>
          <?php wp_nav_menu( array(
              'container_class' => 'menu-social__wrapper',
              'menu_class' => 'menu-social',
              'theme_location'=>'social'
            )); ?>
        </div>
      </div>
    </footer>

    <script>
      "use strict";
      window.ARG = {
        mainDomain: "<?php echo get_template_directory_uri(); ?>"
      };
    </script>
		<?php wp_footer(); ?>
		
	</body>
</html>