<?php

add_theme_support('post-thumbnails');
add_image_size( 'front_image', 300, 9999 );

add_action( 'init', 'create_posttype' );

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