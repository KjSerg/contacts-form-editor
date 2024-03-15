<?php
/**
 * stream_group functions and definitions
 *
 * @package stream_group
 */

function stream_group_scripts() {
	wp_enqueue_style( 'stream_group-style', get_stylesheet_uri() );

	wp_enqueue_style( 'stream_group-fancyapps', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), '1.0' );

	wp_enqueue_style( 'stream_group-main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0' );

	wp_enqueue_style( 'stream_group-fix', get_template_directory_uri() . '/assets/css/fix.css', array(), '1.0' );

	wp_enqueue_script( 'stream_group-jq', get_template_directory_uri() . '/assets/js/jquery.js', array(), '1.0', true );

	wp_enqueue_script( 'stream_group-fancybox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), '1.0', true );

	wp_enqueue_script( 'stream_group-libs', get_template_directory_uri() . '/assets/js/libs.min.js', array(), '1.0', true );

	wp_enqueue_script( 'stream_group-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );

	wp_enqueue_script( 'stream_group-fix-scripts', get_template_directory_uri() . '/assets/js/fix.js', array(), '1.0', true );

	wp_localize_script( 'ajax-script', 'AJAX', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'wp_enqueue_scripts', 'stream_group_scripts' );

get_template_part( 'functions/helpers' );
get_template_part( 'functions/settings' );
get_template_part( 'functions/carbon-settings' );