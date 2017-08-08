<?php
add_action('init', 'register_menu');
add_action('wp_enqueue_scripts', 'timeless_scripts');
add_action('after_setup_theme', 'timeless_setup');
add_action('pre_get_posts', 'timeless_post_query');

function register_menu() {
	register_nav_menu('primary-menu', __('Primary Menu'));
}

function timeless_scripts() {
	wp_enqueue_style('timeless-style', get_stylesheet_uri());
	wp_enqueue_style('timeless-fonts',
	'https://fonts.googleapis.com/css?family=Lora:700|Merriweather|Open+Sans:700');
}

function timeless_setup() {
	add_theme_support('title-tag');
}

function timeless_post_query($query) {
	if (is_home() && $query->is_main_query()) {
		$query->set('posts_per_page', 3);
	}
}
