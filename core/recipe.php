<?php

/*************************************************************
                                                             *
      Recettes                                               *
                                                             * 
**************************************************************/

add_action( 'init', 'create_recette' );
add_action( 'init', 'create_tags_recette' );
add_action( 'init', 'create_the_tags_recette' );

// Create recette
function create_recette() {
  register_post_type( 'recette',
    array(
      'labels' => array(
        'name' => __( 'Recettes' ),
        'singular_name' => __( 'recette' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies' => array('theme'),
      'rewrite' => array('slug' => 'recettes'),
    )
  );
}

function create_tags_recette() {
  register_taxonomy(
    'theme',
    'recette',
    array(
      'label' => __( 'theme' ),
      'rewrite' => array( 'slug' => 'theme' ),
      'hierarchical' => false,
    )
  );
}

function create_the_tags_recette () {
  wp_insert_term(
    'bleu', // the term 
    'theme', // the taxonomy
    array(
      'description'=> 'Bleu',
      'slug' => 'bleu'
    )
  );

  wp_insert_term(
    'soirée', // the term 
    'theme', // the taxonomy
    array(
      'description'=> 'Soirée',
      'slug' => 'soiree'
    )
  );
}