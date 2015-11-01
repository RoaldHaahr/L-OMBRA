<?php

function resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
	
}

add_action('wp_enqueue_scripts', 'resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __( 'Primary Menu')
));

function get_the_frontpage_excerpt(){
	$excerpt = get_the_content();
	$the_str = substr($excerpt, 0, 200);
	return '<p>' . $the_str . ' (...)' . '</p>';
}

function get_the_event_excerpt(){
	$excerpt = get_the_content();
	$the_str = substr($excerpt, 0, 535);
	return '<p>' . $the_str . ' (...)' . '</p>';
}

function sans_setup() {

	// Add feautured image support
	add_theme_support('post-thumbnails');
	add_image_size('wine-image', 213, 320, true);
	add_image_size('frontpage-preview', 372, 211, true);
	add_image_size('event-image', 572, 323, false);
	add_image_size('food-image', 375, 250, true);
}

add_action('after_setup_theme', 'sans_setup');