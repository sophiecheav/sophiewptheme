<!-- widget zone latérale (uniquement sur la page index.php 'blog') -->
<aside class="sidebar">
  <?php
    if(is_active_sidebar('widgets-sidebar')) :
      dynamic_sidebar('widgets-sidebar');
    endif;
  ?>
</aside>
