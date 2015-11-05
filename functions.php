<?php

add_theme_support('post-thumbnails');

add_image_size( 'front_image', 468, 9999 );
add_image_size( 'coat_size', 250, 350, true );
add_image_size( 'week_size', 1140, 538, true );
add_image_size( 'look_size', 500, 800, true );
add_image_size( 'coat_recipe', 338, 620, true );

include_once('vendors/acf/acf.php');

add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
    $path = get_stylesheet_directory() . '/vendors/acf/';
    return $path;
}

add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
    $dir = get_stylesheet_directory_uri() . '/vendors/acf/';
    return $dir;
}

include_once('vendors/search-everything/search-everything.php');

// Vetements
include_once('core/coat.php');

// Recettes de vétements
include_once('core/recipe.php');

// Relation between that
include_once('core/relation.php');

// Menu
include_once('core/menu.php');

include_once('core/form.php');

include_once('core/redirection.php');

function hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   //return implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb; // returns an array with the rgb values
}
