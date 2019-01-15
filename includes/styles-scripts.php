<?php

function add_styles_scripts() {
	wp_register_style('bootstrap-theme', CSS_URL . '/bootstrap-theme.min.css');
	wp_enqueue_style('bootstrap-theme');

	wp_register_style('bootstrap', CSS_URL . '/bootstrap.min.css');
	wp_enqueue_style('bootstrap');

	wp_register_style('style', CSS_URL . '/style.css');
	wp_enqueue_style('style');

	wp_register_script('bootstrap', JS_URL . '/bootstrap.min.js', array(), '1.0', true);
	wp_enqueue_script('bootstrap');

	wp_register_script('jquery', JS_URL . '/bjquery-3.3.1.js', array(), '1.0', true);
	wp_enqueue_script('jquery');

	wp_register_script('modernizr', JS_URL . '/modernizr.js', array(), '1.0', true);
	wp_enqueue_script('modernizr');

	wp_register_script('main', JS_URL . '/main.js', array(), '1.0', true);
	wp_enqueue_script('main');


}

add_action('wp_enqueue_scripts', 'add_styles_scripts');