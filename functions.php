<?php
add_action('init', 'register_menu');
add_action('wp_enqueue_scripts', 'timeless_scripts');

function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}

function timeless_scripts() {
	wp_enqueue_style('timeless-style', get_stylesheet_uri());
	wp_enqueue_style('timeless-fonts',
	'https://fonts.googleapis.com/css?family=Lora:700|Merriweather|Open+Sans:700');
}
