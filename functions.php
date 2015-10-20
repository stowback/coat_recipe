<?php

add_theme_support('post-thumbnails');
add_image_size( 'front_image', 300, 9999 );

/*************************************************************
                  
    Coat
  
*************************************************************/

// Init
add_action( 'init', 'create_coat' );
add_action( 'init', 'create_type_coat' );
add_action( 'init', 'create_term_type_coat' );

// Coat
function create_coat() {
  register_post_type( 'coat',
    array(
      'labels' => array(
        'name' => __( 'Coats' ),
        'singular_name' => __( 'Coat' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies' => array( 'type' ),
      'rewrite' => array('slug' => 'coats'),
    )
  );
}

// Create type of coat
function create_type_coat() {
  register_taxonomy(
    'type',
    'coat',
    array(
      'label' => __( 'Genre' ),
      'rewrite' => array( 'slug' => 'Type' ),
      'hierarchical' => true,
    )
  );
}

// Create category
function create_term_type_coat() {

  // T-shirt
  wp_insert_term(
    't-shirt', // the term 
    'type', // the taxonomy
    array(
      'description'=> 'Just t-shirt',
      'slug' => 't-shirt'
    )
  );

  // Pull
  wp_insert_term(
    'pull', // the term 
    'type', // the taxonomy
    array(
      'description'=> 'Just pull',
      'slug' => 'pull'
    )
  );
}

/*************************************************************
                  
    Recette
  
*************************************************************/

add_action( 'init', 'create_recette' );

// Create recette
function create_recette () {
  register_post_type( 'recette',
    array(
      'labels' => array(
        'name' => __( 'Recettes' ),
        'singular_name' => __( 'recette' )
      ),
      'public' => true,
      'has_archive' => true,
      'taxonomies' => array(),
      'rewrite' => array('slug' => 'recettes'),
    )
  );
}