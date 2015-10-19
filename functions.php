<?php

add_theme_support('post-thumbnails');
add_image_size( 'front_image', 300, 9999 );

add_action( 'init', 'create_posttype' );
add_action( 'init', 'people_init' );

function create_posttype() {
  register_post_type( 'acme_product',
    array(
      'labels' => array(
        'name' => __( 'Products' ),
        'singular_name' => __( 'Product' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'products'),
    )
  );
}

function people_init() {
  // create a new taxonomy
  register_taxonomy(
    'post',
    array(
      'label' => __( 'People' ),
      'rewrite' => array( 'slug' => 'person' ),
      'capabilities' => array(
        'assign_terms' => 'edit_guides',
        'edit_terms' => 'publish_guides'
      )
    )
  );
}