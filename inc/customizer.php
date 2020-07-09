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

// Section images de la page d'accueil principale

  $wp_customize->add_section(
    'fp_images',
    array(
      'title' => 'Images',
      'description' => 'Réglages pour les images de la page d\'accueil principale.',
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
        'section' => 'fp_images',
        'setting' => 'custom_container_image'
      )
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
        'section' => 'fp_images',
        'setting' => 'custom_container_picto_1'
      )
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
        'section' => 'fp_images',
        'setting' => 'custom_container_picto_2'
      )
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
        'section' => 'fp_images',
        'setting' => 'custom_container_picto_3'
      )
    )
  );

// Section Textes et styles de la page d'accueil principale :

// Partie bannière
  $wp_customize->add_section(
    'fp_texts',
    array(
      'title' => 'Textes et styles',
      'description' => 'Réglages pour les textes et styles des textes de la page d\'accueil principale.',
      'panel' => 'front_page'
    )
  );

// texte bannière :
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
      'label' => 'Titre principal de la bannière',
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
      'label' => 'Taille du titre de la bannière',
      'description' => 'Taille du texte du titre principal',
      'section' => 'fp_texts',
      'setting' => 'fp_texts_title_size',
      'type' => 'number'
    )
  );

// partie actus
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
      'label' => 'Titre partie actus',
      'description' => 'Texte du titre de la partie actus',
      'section' => 'fp_texts',
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
      'label' => 'Taille du titre partie actus',
      'description' => 'Taille du texte du titre de la partie actus',
      'section' => 'fp_texts',
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
      'label' => 'Contenu du bloc texte actus',
      'description' => 'Texte actus',
      'section' => 'fp_texts',
      'setting' => 'custom_texts_description',
      'type' => 'textarea'
    )
  );

// partie colonnes / 1
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
      'section' => 'fp_texts',
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
      'section' => 'fp_texts',
      'setting' => 'custom_texts_title_size_col_1',
      'type' => 'number'
    )
  );

  $wp_customize->add_setting(
    'custom_texts_description_col_1',
    array(
      'default' => 'Contenu texte colonne 1',
      'type' => 'theme_mod'
    )
  );

  $wp_customize->add_control(
    'custom_texts_description_col_1',
    array(
      'label' => 'Contenu texte colonne 1',
      'description' => 'Texte colonne 1',
      'section' => 'fp_texts',
      'setting' => 'custom_texts_description_col_1',
      'type' => 'textarea'
    )
  );

  // partie colonnes / 2
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
        'section' => 'fp_texts',
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
        'section' => 'fp_texts',
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
        'label' => 'Contenu texte colonne 2',
        'description' => 'Texte colonne 2',
        'section' => 'fp_texts',
        'setting' => 'custom_texts_description_col_2',
        'type' => 'textarea'
      )
    );

// partie colonnes / 3
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
          'section' => 'fp_texts',
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
          'section' => 'fp_texts',
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
          'label' => 'Contenu texte colonne 3',
          'description' => 'Texte colonne 3',
          'section' => 'fp_texts',
          'setting' => 'custom_texts_description_col_3',
          'type' => 'textarea'
        )
      );

// Boutons de la page d'accueil

// bouton 1 (bannière)
  $wp_customize->add_section(
    'fp_buttons',
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
      'label' => 'Bouton bannière',
      'description' => 'Texte du bouton bannière',
      'section' => 'fp_buttons',
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
      'label' => 'Lien bouton bannière',
      'description' => 'Adresse URL du bouton bannière',
      'section' => 'fp_buttons',
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
      'label' => 'Style du bouton bannière',
      'description' => 'Style du bouton bannière',
      'section' => 'fp_buttons',
      'type' => 'radio',
      'choices' => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );

//bouton 2 partie actus
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
      'section' => 'fp_buttons',
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
      'section' => 'fp_buttons',
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
      'label' => 'Style du bouton actus',
      'description' => 'Style du bouton actus',
      'section' => 'fp_buttons',
      'type' => 'radio',
      'choices' => array(
        'btn-style-1' => 'Style 1',
        'btn-style-2' => 'Style 2',
        'btn-style-3' => 'Style 3'
      )
    )
  );

// Section citation
      $wp_customize->add_section(
        'custom_quote',
        array(
          'title' => 'Bloc Citation',
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

// Section Options du thème
      $wp_customize->add_panel(
        'theme_options',
        array(
          'title' => 'Options du thème',
          // 'description' => 'Personnalisation du thème'
        )
      );

      $wp_customize->add_section(
        'boxy_effect',
        array(
          'title' => 'Image effet boxy',
          'description' => 'Donne un effet boîte sur l\'image de bannière',
          'panel' => 'theme_options'
        )
      );

      $wp_customize->add_setting(
        'banner_boxy',
        array(
          'default' => false,
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'banner_boxy',
        array(
          'label' => 'Affichage avec effet boxy',
          'description' => 'Style de la bannière',
          'section' => 'boxy_effect',
          'setting' => 'banner_boxy',
          'type' => 'checkbox'
        )
      );

      $wp_customize->add_section(
        'hide_widget_sidebar',
        array(
          'title' => 'Zone de widgets latérale',
          'description' => '',
          'panel' => 'theme_options'
        )
      );

      $wp_customize->add_setting(
        'widgets-sidebar',
        array(
          'default'     => false,
          'type'        => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        'widgets-sidebar',
        array(
          'label'       => 'Masquer la zone de widgets latérale',
          'description' => '',
          'section'     => 'hide_widget_sidebar',
          'setting'     => 'widgets-sidebar',
          'type'        => 'checkbox'
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

      $wp_customize->add_setting(
        'footer_bg_color',
        array(
          'default' => '#222',
          'type' => 'theme_mod'
        )
      );

      $wp_customize->add_control(
        new WP_Customize_Color_control(
          $wp_customize,
          'footer_bg_color',
          array(
            'label' => 'Couleur de fond du footer',
            'description' => 'Couleur de fond du footer',
            'section' => 'footer',
            'setting' => 'footer_bg_color'
          )
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
