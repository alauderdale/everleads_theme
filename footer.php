<?php
/**
 * The template for displaying the footer.
 *
 * @package boiler
 */
?>


      <footer class='primary-footer'>
        <section>
          <div class='container'>
            <div class='row'>
              <div class='col-sm-6'>
                <?php wp_nav_menu( array( 
                  'theme_location' => 'menu-footer', 
                  'container' => false, 
                  'menu_class' => 'link-list',
                  'items_wrap'  => '<ul id="%1$s" class="%2$s"><li>&copy Everleads 2017</li>  %3$s</ul>' 
                )); ?>
              </div>
              <div class='col-sm-6'>
                            <?php wp_nav_menu( array( 
                'theme_location' => 'menu-social', 
                'container' => false, 
                'menu_class' => 'social-list',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
              )); ?>
              <?php wp_nav_menu( array( 
                'theme_location' => 'menu-social-two', 
                'container' => false, 
                'menu_class' => 'social-list-two',
                'items_wrap'  => '<ul id="%1$s" class="%2$s">  %3$s</ul>' 
              )); ?>
              </div>
            </div>
          </div>
        </section>
      </footer>
      <script src="<?php bloginfo('template_url'); ?>/js/lib/menu_button.js"></script>
      <script>
        transformicons.add('.tcon')
      </script>
      <?php wp_footer(); ?>
    </body>
  </head>
</html>