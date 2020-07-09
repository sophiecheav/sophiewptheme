<footer class="site-footer">
  <section class="widgets-sections container">

    <div class="widgets-section" id="widgets-section-1">
      <?php
        if(is_active_sidebar('widgets-section-1')) :
          dynamic_sidebar('widgets-section-1');
        endif;
      ?>
    </div>

    <div class="widgets-section" id="widgets-section-2">
      <?php
        if(is_active_sidebar('widgets-section-2')) :
          dynamic_sidebar('widgets-section-2');
        endif;
      ?>
    </div>

    <div class="widgets-section" id="widgets-section-3">
      <?php
        if(is_active_sidebar('widgets-section-3')) :
          dynamic_sidebar('widgets-section-3');
        endif;
      ?>
    </div>

    <div class="widgets-section" id="widgets-section-4">
      <?php
        if(is_active_sidebar('widgets-section-4')) :
          dynamic_sidebar('widgets-section-4');
        endif;
      ?>
    </div>
  </section>

  <section class="footer-infos container">

    <div class="copyright">
      <p>© <?php the_time('Y'); ?> <?php bloginfo('name'); ?>. <?php echo get_theme_mod('copyright_text'); ?></p>
    </div>

<!-- pas div class="navigation-secondary" ? Mélange ici social et secondary... Combien de zones menus ? -->
    <div class="social-medias">
      <nav class="navigation navigation-bottom">
        <?php
          wp_nav_menu(
            array(
              'theme_location'  => 'secondary'
            )
          );
        ?>
      </nav>
    </div>

  </section>

</footer>

<?php wp_footer(); ?>

</body>
</html>
