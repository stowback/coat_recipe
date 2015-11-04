<?php

add_action( 'init', 'register_menu_header' );

function register_menu_header () {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}