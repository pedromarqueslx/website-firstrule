<?php

// Replace default stylesheet

function divi_default_stylesheet() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'divi_default_stylesheet' );

/*
function wpb_custom_new_menu() {
	register_nav_menus(
	  array(
		'vitatech_custom_menu' => __( 'Vitatech Custom Menu' ),
		'extra-menu' => __( 'Extra Menu' )
	  )
	);
  }
  add_action( 'init', 'wpb_custom_new_menu' );
*/  


?>