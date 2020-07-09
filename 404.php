<?php get_header(); ?>

  <main class="container site-content">
    <section class="error-404">
      <h2>Erreur 404</h2>
      <h3>La page que vous cherchez n'existe pas.</h3>
      <div class="flex">
        <div>
          <?php get_search_form(); ?>
        </div>
      </div>
      <!-- affiche le chemin 'racine du site' -->
      <a href="<?php echo get_bloginfo('url') ?>">
        <!-- affiche le chemin 'racine du site' + une page particulière -->
        <a href="<?php echo get_bloginfo('url') . '/blog'; ?>">
        <button type="button" class="call-to-action">
          Retourner à l'accueil du site
        </button>
      </a>
    </section>
  </main>

<?php get_footer(); ?>
