<?php
add_action( 'init', 'register_menu' );

function register_menu() {
	register_nav_menu('primary-menu', __( 'Primary Menu' ));
}
