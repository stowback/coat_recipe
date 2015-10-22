<?php

add_theme_support('post-thumbnails');
add_image_size( 'front_image', 300, 9999 );

include_once('vendors/advanced-custom-fields/acf.php');

// Vetements
include_once('core/coat.php');

// Recettes de vétements
include_once('core/recipe.php');

// Relation between that
include_once('core/relation.php');

$args = array(
  'post_type' => 'recette',
  'tax_query' => [
    'relation' => 'OR',
    [
      'taxonomy' => 'color-cat',
      'field'    => 'slug',
      'terms'    => 'bleu'
    ]
  ]
);
$query = new WP_Query( $args );

if ( $query->have_posts() ) {
  echo '<ul>';
  while ( $query->have_posts() ) {
    $query->the_post();
    echo '<li>' . get_the_title() . '</li>';
  }
  echo '</ul>';
} else {
  echo "no post";
}