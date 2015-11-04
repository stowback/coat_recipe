<?php

/*************************************************************
                                                             *
      Recettes                                               *
                                                             * 
**************************************************************/

add_action( 'init', 'create_recette' );
add_action( 'init', 'create_tags_recette' );
add_action( 'init', 'create_color_recette' );
add_action( 'init', 'create_gender_recette' );
// add_action( 'init', 'create_the_tags_recette' );
// add_action( 'init', 'create_the_colors_recette' );

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
      'taxonomies' => array('theme', 'color'),
      'rewrite' => array('slug' => 'recette'),
      'supports' => array( 'title', 'editor', 'author', 'thumbnail' )
    )
  );
}

function create_tags_recette() {
  register_taxonomy(
    'theme-cat',
    'recette',
    array(
      'label' => __( 'Theme' ),
      'rewrite' => array( 'slug' => 'theme' )
    )
  );
}

function create_color_recette() {
  register_taxonomy(
    'color-cat',
    'recette',
    array(
      'label' => __( 'Color' ),
      'rewrite' => array( 'slug' => 'color' )
    )
  );
}

function create_gender_recette() {
  register_taxonomy(
    'gender-cat',
    array('recette', 'coat'),
    array(
      'label' => __( 'Gender' ),
      'rewrite' => array( 'slug' => 'gender' )
    )
  );
}

function create_the_tags_recette () {

  wp_insert_term(
    'soirée', // the term 
    'theme-cat', // the taxonomy
    array(
      'description'=> 'Soirée',
      'slug' => 'soiree'
    )
  );
}

function create_the_colors_recette () {
  wp_insert_term(
    'bleu', // the term 
    'color-cat', // the taxonomy
    array(
      'description'=> 'Bleu',
      'slug' => 'bleu'
    )
  );

  wp_insert_term(
    'rouge', // the term 
    'color-cat', // the taxonomy
    array(
      'description'=> 'rouge',
      'slug' => 'rouge'
    )
  );
}