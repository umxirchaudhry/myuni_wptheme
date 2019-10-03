<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'myuni_files' ) ) {


function myuni_files() {
	wp_enqueue_script('myuni_js',get_theme_file_uri( '/assets/js/scripts-bundled.js' ), NULL, '1.0', true);
	wp_enqueue_style( 'myuni_googlefonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_style( 'myuni_fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'myuni_css', get_stylesheet_uri() );
	}
}


add_action('wp_enqueue_scripts', 'myuni_files');