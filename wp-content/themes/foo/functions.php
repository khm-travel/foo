<?php

add_action( 'wp_enqueue_scripts', 'foo_enqueue_styles' );

function foo_enqueue_styles() {
	wp_enqueue_style(
		'foo-style',
		get_stylesheet_uri()
	);
}