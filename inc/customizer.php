<?php

function sophiewptheme_customize_register($wp_customize) {

// Bannière - image de fond
  $wp_customize->add_section(
  'banner',
    array(
      'title' => 'Bannière',
      'description'   => 'Description de la section'
    )
  );

  $wp_customize->add_setting(
  'banner_image',
    array(
      'default' => get_template_directory() . '/assets/images/alex-bracken-unsplash.jpg',
      'type'  => 'theme_mod' // theme modification
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'banner_image',
      array(
        'label'   => 'Image de fond',
        'section' => 'banner',
        'setting'  => 'banner_image'
      )
    )
  );

// Panel 'Page d'acceuil principale'

  $wp_customize->add_panel(
    'front_page',
    array(
      'title' => 'Page d\'accueil principale'
    )
  );

  $wp_customize->add_section(
    'fp_container',
    array(
      'title' => 'Conteneur',
      'description' => 'Réglages du conteneur de la page d\'accueil principale',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_container_image',
    array(
      'default' => get_template_directory() . '/assets/images/alex-bracken-unsplash.jpg',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'fp_container_image',
      array(
        'label' => 'Image de fond',
        'description' => 'Image de fond du conteneur de la page d\'accueil',
        'section' => 'fp_container',
        'setting' => 'fp_container_image'
      )
    )
  );

  $wp_customize->add_setting(
    'fp_container_boxy',
    array(
      'default' => false,
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_container_boxy',
    array(
      'label' => 'Affichage avec effet boxy',
      'description' => 'Style du conteneur de la page d\'accueil.',
      'section' => 'fp_container',
      'setting' => 'fp_container_boxy',
      'type' => 'checkbox'
    )
  );

  $wp_customize->add_section(
    'fp_texts',
    array(
      'title' => 'Textes et styles',
      'description' => 'Réglages pour les textes de la page d\'accueil principale.',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title',
    array(
      'default' => 'Bientôt en concert',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title',
    array(
      'label' => 'Titre principal',
      'description' => 'Texte du titre principal',
      'section' => 'fp_texts',
      'setting' => 'fp_texts_title',
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_texts_title_size',
    array(
      'default' => 90,
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_texts_title_size',
    array(
      'label' => 'Taille du titre',
      'description' => 'Taille du texte du titre principal',
      'section' => 'fp_texts',
      'setting' => 'fp_texts_title_size',
      'type' => 'number'
    )
  );

// pas forcément de texte d'accueil ici. À réinsérer plutôt après (suite 2e photo)
  $wp_customize->add_setting(
    'fp_texts_description',
    array(
      'default' => 'Un message d\'accueil personnalisé.',
      'type' => 'theme_mod'
    )
  );
// idem
  $wp_customize->add_control(
    'fp_texts_description',
    array(
      'label' => 'Description',
      'description' => 'Texte d\'introduction',
      'section' => 'fp_texts',
      'setting' => 'fp_texts_description',
      'type' => 'textarea'
    )
  );

  $wp_customize->add_section(
    'fp_button',
    array(
      'title' => 'Bouton',
      'description' => 'Réglages pour le bouton de la page d\'accueil principale',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'fp_button_text',
    array(
      'default' => 'Réserver mon billet',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_text',
    array(
      'label' => 'Bouton',
      'description' => 'Texte du bouton',
      'section' => 'fp_button',
      'setting' => 'fp_button_text',
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'fp_button_url',
    array(
      'default' => '',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_url',
    array(
      'label' => 'Lien',
      'description' => 'Adresse URL du bouton',
      'section' => 'fp_button',
      'setting' => 'fp_button_url',
      'type' => 'url'
    )
  );

  $wp_customize->add_setting(
    'fp_button_style',
    array(
      'default' => 'btn-style-1',
      'type' =>'theme_mod'
    )
  );

  $wp_customize->add_control(
    'fp_button_style',
    array(
      'label' => 'Style',
      'description' => 'Style du bouton',
      'section' => 'fp_button',
      'type' => 'radio',
      'choices' => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );

// Partie 2 'Actus' :

  $wp_customize->add_section(
    'custom_image',
    array(
      'title' => 'Image partie actus',
      'description' => 'Réglages du conteneur de la page d\'accueil principale',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_container_image',
    array(
      'default' => get_template_directory() . 'assets/images/yannis-papanastasopoulos-unsplash.jpg',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'custom_container_image',
      array(
        'label' => 'Image partie actus',
        'description' => 'Image d\'illustration de la partie actus de la page d\'accueil',
        'section' => 'custom_image',
        'setting' => 'custom_container_image'
      )
    )
  );

  $wp_customize->add_section(
    'custom_texts',
    array(
      'title' => 'Textes et styles partie actus',
      'description' => 'Réglages pour les textes de la page d\'accueil principale partie Actus.',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_title',
    array(
      'default' => 'Un super groupe de musique',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_title',
    array(
      'label' => 'Titre secondaire',
      'description' => 'Texte du titre secondaire',
      'section' => 'custom_texts',
      'setting' => 'custom_texts_title',
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_title_size',
    array(
      'default' => 50,
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_title_size',
    array(
      'label' => 'Taille du titre secondaire',
      'description' => 'Taille du texte du titre secondaire',
      'section' => 'custom_texts',
      'setting' => 'custom_texts_title_size',
      'type' => 'number'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_description',
    array(
      'default' => 'Texte actualité personnalisé.',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_description',
    array(
      'label' => 'Texte',
      'description' => 'Texte actus',
      'section' => 'custom_texts',
      'setting' => 'custom_texts_description',
      'type' => 'textarea'
    )
  );

  $wp_customize->add_section(
    'custom_button',
    array(
      'title' => 'Bouton actus',
      'description' => 'Réglages pour le bouton 2 partie actus de la page d\'accueil principale',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_button_text',
    array(
      'default' => 'En savoir plus',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_button_text',
    array(
      'label' => 'Bouton actus',
      'description' => 'Texte du bouton actualité',
      'section' => 'custom_button',
      'setting' => 'custom_button_text',
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom_button_url',
    array(
      'default' => '',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_button_url',
    array(
      'label' => 'Lien bouton actus',
      'description' => 'Lien vers page du site du bouton actus',
      'section' => 'custom_button',
      'setting' => 'custom_button_url',
      'type' => 'dropdown-pages'
    )
  );

  $wp_customize->add_setting(
    'custom_button_style',
    array(
      'default' => 'btn-style-1',
      'type' =>'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_button_style',
    array(
      'label' => 'Style',
      'description' => 'Style du bouton actus',
      'section' => 'custom_button',
      'type' => 'radio',
      'choices' => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );

// Partie 3 colonnes pictos >> 1ère colonne (gauche)

  $wp_customize->add_section(
    'custom_picto_1',
    array(
      'title' => 'Picto colonne 1',
      'description' => 'Réglages du picto 1 de la page d\'accueil principale',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_container_picto_1',
    array(
      'default' => '<i class="fas fa-birthday-cake fa-3x"></i>',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    new WP_Customize_Image_control(
      $wp_customize,
      'custom_container_picto_1',
      array(
        'label' => 'Picto colonne 1',
        'description' => 'Picto colonne 1 de la page d\'accueil',
        'section' => 'custom_picto_1',
        'setting' => 'custom_container_picto_1'
      )
    )
  );

  $wp_customize->add_section(
    'custom_texts_col_1',
    array(
      'title' => 'Texte et style colonne 1',
      'description' => 'Réglages pour le texte colonne 1 de la page d\'accueil principale',
      'panel' => 'front_page'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_title_col_1',
    array(
      'default' => 'Concert célébration',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_title_col_1',
    array(
      'label' => 'Titre colonne 1',
      'description' => 'Texte du titre colonne 1',
      'section' => 'custom_texts_col_1',
      'setting' => 'custom_texts_title_col_1',
      'type' => 'text'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_title_size_col_1',
    array(
      'default' => 20,
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_title_size_col_1',
    array(
      'label' => 'Taille du titre colonne 1',
      'description' => 'Taille du texte du titre colonne 1',
      'section' => 'custom_texts_col_1',
      'setting' => 'custom_texts_title_size_col_1',
      'type' => 'number'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_description_col_1',
    array(
      'default' => 'Texte colonne 1',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_description_col_1',
    array(
      'label' => 'Texte',
      'description' => 'Texte colonne',
      'section' => 'custom_texts_col_1',
      'setting' => 'custom_texts_description_col_1',
      'type' => 'textarea'
    )
  );

  // Partie 3 colonnes pictos >> 2eme colonne (centre)

    $wp_customize->add_section(
      'custom_picto_2',
      array(
        'title' => 'Picto colonne 2',
        'description' => 'Réglages du picto 2 de la page d\'accueil principale',
        'panel' => 'front_page'
      )
    );

    $wp_customize->add_setting(
      'custom_container_picto_2',
      array(
        'default' => '<i class="fas fa-music fa-3x"></i>',
        'type' => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      new WP_Customize_Image_control(
        $wp_customize,
        'custom_container_picto_2',
        array(
          'label' => 'Picto colonne 2',
          'description' => 'Picto colonne 2 de la page d\'accueil',
          'section' => 'custom_picto_2',
          'setting' => 'custom_container_picto_2'
        )
      )
    );

    $wp_customize->add_section(
      'custom_texts_col_2',
      array(
        'title' => 'Texte et style colonne 2',
        'description' => 'Réglages pour le texte colonne 2 de la page d\'accueil principale',
        'panel' => 'front_page'
      )
    );

    $wp_customize->add_setting(
      'custom_texts_title_col_2',
      array(
        'default' => 'L\'amour de la musique',
        'type' => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      'custom_texts_title_col_2',
      array(
        'label' => 'Titre colonne 2',
        'description' => 'Texte du titre colonne 2',
        'section' => 'custom_texts_col_2',
        'setting' => 'custom_texts_title_col_2',
        'type' => 'text'
      )
    );

    $wp_customize->add_setting(
      'custom_texts_title_size_col_2',
      array(
        'default' => 20,
        'type' => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      'custom_texts_title_size_col_2',
      array(
        'label' => 'Taille du titre colonne 2',
        'description' => 'Taille du texte du titre colonne 2',
        'section' => 'custom_texts_col_2',
        'setting' => 'custom_texts_title_size_col_2',
        'type' => 'number'
      )
    );

    $wp_customize->add_setting(
      'custom_texts_description_col_2',
      array(
        'default' => 'Texte colonne 2',
        'type' => 'theme_mod'
      )
    );

    $wp_customize->add_control(
      'custom_texts_description_col_2',
      array(
        'label' => 'Texte',
        'description' => 'Texte colonne',
        'section' => 'custom_texts_col_2',
        'setting' => 'custom_texts_description_col_2',
        'type' => 'textarea'
      )
    );

    // Partie 3 colonnes pictos >> 3eme colonne (droite)

      $wp_customize->add_section(
        'custom_picto_3',
        array(
          'title' => 'Picto colonne 3',
          'description' => 'Réglages du picto 3 de la page d\'accueil principale',
          'panel' => 'front_page'
        )
      );

      $wp_customize->add_setting(
        'custom_container_picto_3',
        array(
          'default' => '<i class="fas fa-ticket-alt fa-3x"></i>',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        new WP_Customize_Image_control(
          $wp_customize,
          'custom_container_picto_3',
          array(
            'label' => 'Picto colonne 3',
            'description' => 'Picto colonne 3 de la page d\'accueil',
            'section' => 'custom_picto_3',
            'setting' => 'custom_container_picto_3'
          )
        )
      );

      $wp_customize->add_section(
        'custom_texts_col_3',
        array(
          'title' => 'Texte et style colonne 3',
          'description' => 'Réglages pour le texte colonne 3 de la page d\'accueil principale',
          'panel' => 'front_page'
        )
      );

      $wp_customize->add_setting(
        'custom_texts_title_col_3',
        array(
          'default' => '+ 3000 tickets en vente',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'custom_texts_title_col_3',
        array(
          'label' => 'Titre colonne 3',
          'description' => 'Texte du titre colonne 3',
          'section' => 'custom_texts_col_3',
          'setting' => 'custom_texts_title_col_3',
          'type' => 'text'
        )
      );

      $wp_customize->add_setting(
        'custom_texts_title_size_col_3',
        array(
          'default' => 20,
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'custom_texts_title_size_col_3',
        array(
          'label' => 'Taille du titre colonne 3',
          'description' => 'Taille du texte du titre colonne 3',
          'section' => 'custom_texts_col_3',
          'setting' => 'custom_texts_title_size_col_3',
          'type' => 'number'
        )
      );

      $wp_customize->add_setting(
        'custom_texts_description_col_3',
        array(
          'default' => 'Texte colonne 3',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'custom_texts_description_col_3',
        array(
          'label' => 'Texte',
          'description' => 'Texte colonne',
          'section' => 'custom_texts_col_3',
          'setting' => 'custom_texts_description_col_3',
          'type' => 'textarea'
        )
      );

      // section citation
      $wp_customize->add_section(
        'custom_quote',
        array(
          'title' => 'Citation',
          'description' => 'Réglages pour la citation de la page d\'accueil principale',
          'panel' => 'front_page'
        )
      );

      $wp_customize->add_setting(
        'custom_quote_text',
        array(
          'default' => 'Ce qui se conçoit bien s\'énonce clairement et les mots pour le dire
          arrivent aisément.',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'custom_quote_text',
        array(
          'label' => 'Citation',
          'description' => 'Texte de la citation',
          'section' => 'custom_quote',
          'setting' => 'custom_quote_text',
          'type' => 'textarea'
        )
      );

      $wp_customize->add_setting(
        'custom_quote_source',
        array(
          'default' => 'Boileau',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'custom_quote_source',
        array(
          'label' => 'Source',
          'description' => 'Nom de l\'auteur de la citation',
          'section' => 'custom_quote',
          'setting' => 'custom_quote_source',
          'type' => 'text'
        )
      );

      $wp_customize->add_setting(
        'custom_quote_style',
        array(
          'default' => 'custom-quote-style-1',
          'type' =>'theme_mod'
        )
      );

      $wp_customize->add_control(
        'custom_quote_style',
        array(
          'label' => 'Style',
          'description' => 'Style de la citation',
          'section' => 'custom_quote',
          'type' => 'radio',
          'choices' => array(
            'custom-quote-style-1' => 'Style 1',
            'custom-quote-style-2' => 'Style 2',
            'custom-quote-style-3' => 'Style 3'
          )
        )
      );

      $wp_customize->add_setting(
        'custom_quote_background',
        array(
          'default' => 'custom_quote',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        new WP_Customize_Color_control(
          $wp_customize,
          'custom_quote_background',
          array(
            'label' => 'Couleur',
            'description' => 'Couleur de fond du bloc de citation',
            'section' => 'custom_quote',
            'setting' => 'custom_quote_background'
          )
        )
      );

// Section Footer
      $wp_customize->add_section(
      'footer',
        array(
          'title' => 'Footer',
          'description'   => 'Personnalisation du bas de page'
        )
      );

      $wp_customize->add_setting(
        'copyright_text',
        array(
          'default' => 'Tous droits réservés',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'copyright_text',
        array(
          'label' => 'Texte copyright',
          'description' => 'Texte du champ copyright',
          'section' => 'footer',
          'setting' => 'copyright_text',
          'type' => 'text'
        )
      );


      // Zone de widget latérale (affichage checkbox)
      // $wp_customize->add_section(
      //   'widgets-sidebar',
      //   array(
      //     'title' => 'Zone de widgets latérale',
      //     'description' => 'Cocher pour masquer la zone de widgets latérale'
      //   )
      // );
      //
      // $wp_customize->add_setting(
      //
      //   )
}

add_action('customize_register', 'sophiewptheme_customize_register');


?>
