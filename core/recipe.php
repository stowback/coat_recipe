<?php

/*************************************************************
                                                             *
      Recettes                                               *
                                                             * 
**************************************************************/

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