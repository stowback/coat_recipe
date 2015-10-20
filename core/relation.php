<?php

if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_recette-fields',
    'title' => 'Recette fields',
    'fields' => array (
      array (
        'key' => 'field_562632d35a51c',
        'label' => 'Haut',
        'name' => 'haut',
        'type' => 'post_object',
        'post_type' => array (
          0 => 'coat',
        ),
        'taxonomy' => array (
          0 => 'type:7',
        ),
        'allow_null' => 0,
        'multiple' => 0,
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'recette',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
        0 => 'custom_fields',
      ),
    ),
    'menu_order' => 0,
  ));
}
