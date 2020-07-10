<?php get_header(); ?>

  <!-- modif image arrière-plan accueil -->
  <section class="page-header front-page-header
    <?php
      if(get_theme_mod('banner_boxy')) :
        echo 'boxy-header';
      endif;
    ?>"
    style="background-image: url('<?php echo get_theme_mod('fp_container_image'); ?>');">
    <!-- modif titre page -->
    <h1 class="page-title" style="font-size: <?php echo get_theme_mod('fp_texts_title_size'); ?>px;"><?php echo get_theme_mod('fp_texts_title'); ?></h1>
    <!-- bouton résa billet -->
    <a href="<?php echo get_theme_mod('fp_button_url') ?>">
      <!-- texte bouton 'Réserver mon billet' -->
      <button type="button" class="call-to-action <?php echo get_theme_mod('fp_button_style') ?>"><?php echo get_theme_mod('fp_button_text') ?></button>
    </a>
  </section>

  <main class="container front-content">
    <section class="custom-presentation">
      <img src="<?php echo get_theme_mod('custom_container_image'); ?>" alt="">
      <div class="custom-presentation-infos">
        <h2 class="custom-title" style="font-size: <?php echo get_theme_mod('custom_texts_title_size'); ?>px;"><?php echo get_theme_mod('custom_texts_title'); ?></h2>
        <p class="custom-content"><?php echo get_theme_mod('custom_texts_description'); ?></p>
        <a href="<?php echo get_bloginfo('url') . '/blog'; ?>">
          <button type="button" class="call-to-action <?php echo get_theme_mod('custom_button_style'); ?>"><?php echo get_theme_mod('custom_button_text') ?></button>
        </a>
      </div>
    </section>

    <section class="custom-blocks">

      <!-- Colonne picto 1 gauche -->
      <div class="custom-block">
        <!-- <i class="fas fa-birthday-cake fa-3x"></i> -->
        <img src="<?php echo get_theme_mod('custom_container_picto_1'); ?>">
        <h3 class="custom-title"><?php echo get_theme_mod('custom_texts_title_col_1'); ?></h3>
        <p class="custom-content"><?php echo get_theme_mod('custom_texts_description_col_1'); ?></p>
      </div>

      <!-- Colonne picto 2 centre -->
      <div class="custom-block">
        <img src="<?php echo get_theme_mod('custom_container_picto_2'); ?>">
        <h3 class="custom-title"><?php echo get_theme_mod('custom_texts_title_col_2'); ?></h3>
        <p class="custom-content"><?php echo get_theme_mod('custom_texts_description_col_2'); ?></p>
      </div>

      <!-- Colonne picto 3 droite -->
      <div class="custom-block">
        <img src="<?php echo get_theme_mod('custom_container_picto_3'); ?>">
        <h3 class="custom-title"><?php echo get_theme_mod('custom_texts_title_col_3'); ?></h3>
        <p class="custom-content"><?php echo get_theme_mod('custom_texts_description_col_3'); ?></p>
      </div>
    </section>

    <section class="custom-section <?php echo get_theme_mod('custom_quote_style'); ?>" style="background-color: <?php echo get_theme_mod('custom_quote_background'); ?>;">
      <blockquote class="star-quote">
        <p class="quote-content"><?php echo get_theme_mod('custom_quote_text'); ?></p>
        <cite class="quote-footer"><?php echo get_theme_mod('custom_quote_source'); ?></cite>
      </blockquote>
    </section>

  </main>

<?php get_footer(); ?>
