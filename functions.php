<?php

function myuni_files() {
	wp_enqueue_script('myuni_js',get_theme_file_uri( '/js/scripts-bundled.js' ), NULL, '1.0', true);
	wp_enqueue_style( 'myuni_googlefonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i' );
	wp_enqueue_style( 'myuni_fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'myuni_css', get_stylesheet_uri() );
}


add_action('wp_enqueue_scripts', 'myuni_files');


function university_features() {
	register_nav_menu( 'headerManuLocation', 'Header Location' );
	register_nav_menu( 'footerManuLocation1', 'Footer Location 1' );
	register_nav_menu( 'footerManuLocation2', 'Footer Location 2' );
	add_theme_support('title-tag');
}


add_action( 'after_setup_theme', 'university_features' );



?>