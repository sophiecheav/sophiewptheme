<!-- widget zone latérale (uniquement sur la page index.php 'blog') -->
<aside class="sidebar
  <?php if(get_theme_mod('widgets-sidebar')) : echo 'hidden'; endif; ?>
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
  ?>
   ">
</aside>
