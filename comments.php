<section class="comments">
  <h3 class="comments-title">
    <?php comments_number('Aucun commentaire', '1 commentaire', '% commentaires'); ?> pour "<?php the_title(); ?>"
  </h3>
  <?php
    // liste des commentaires de l'article
    wp_list_comments();

    // pagination pour les commentaires (si réglages site ok)
    echo '<div class="comments-pagination">';
    paginate_comments_links(
      array(
        'prev_text'          => '<i class="fas fa-arrow-left"></i> Précédent',
        'next_text'          => 'Suivant <i class="fas fa-arrow-right"></i>'
      )
    );
    echo '</div>';

    // formulaire de commentaire
    comment_form(
      array(
        'title_reply'   => 'Laisser un commentaire',
        'label_submit'  => 'Publier'
      )
    );
    // comment_form('comment_form_default_fields');
      // array(
      //   'title_reply'   => 'Laisser un commentaire',
      //   'label_submit'  => 'Publier'
      //   'fields' => array(
      //     'author' => '<label for="author">Nom</label><input id="author" type="text"/>',
      //     'email' => '<label for="email>E-mail</label><input id="email" type="email"/>'
      //   )
      // )
    // );
  ?>
</section>
