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
      <p>© 2020 Descodeuses. Tous droits réservés.</p>
    </div>
    <div class="social-medias">
      <nav class="navigation navigation-bottom">
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="#">Shop</a></li>
          <li><a href="index.html" class="active">Blog</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </section>
</footer>
</body>
</html>
