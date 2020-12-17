<?php
function estar_child_enqueue() {
	wp_enqueue_style( 'estar_child_style', get_stylesheet_directory_uri() . '/style.css', array( 'estar' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'estar_child_enqueue' );
