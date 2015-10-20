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