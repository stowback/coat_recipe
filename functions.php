<?php

add_theme_support('post-thumbnails');
add_image_size( 'front_image', 300, 9999 );

include_once('vendors/advanced-custom-fields/acf.php');

include_once('core/coat.php');
include_once('core/recipe.php');
include_once('core/relation.php');