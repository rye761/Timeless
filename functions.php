<?php
add_action('init', 'register_menu');
add_action('wp_enqueue_scripts', 'timeless_scripts');
add_action('after_setup_theme', 'timeless_setup');
add_action('pre_get_posts', 'timeless_post_query');
add_action('widgets_init', 'timeless_widgets_init');

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
	add_theme_support('post-thumbnails');
}

function timeless_post_query($query) {
	if (is_home() && $query->is_main_query()) {
		$query->set('posts_per_page', 3);
	}
}

function timeless_widgets_init() {
	register_sidebar( array(
		'name'          => __('Widget Area'),
		'id'            => 'sidebar-1',
		'description'   => __('Add widgets here to appear in your sidebar.'),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}

function timeless_excerpt_length() {
	return 300;
}

function timeless_excerpt_more() {
	return ' <a href="'.get_permalink().'">'.__('Continue Reading').'&rarr;</a>';
}
add_filter('excerpt_length', 'timeless_excerpt_length', 999);
add_filter('excerpt_more', 'timeless_excerpt_more', 999);
