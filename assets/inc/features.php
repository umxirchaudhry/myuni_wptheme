<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'myuni_features' ) ) {

function myuni_features() {
	register_nav_menu( 'headerManuLocation', 'Header Location' );		//	Nav Menu
	register_nav_menu( 'footerManuLocation1', 'Footer Location 1' );	//	Nav Menu
	register_nav_menu( 'footerManuLocation2', 'Footer Location 2' );	//	Nav Menu
	add_theme_support( 'title-tag' );									//	Document Title, Handled by WP
	
	}
}


add_action( 'after_setup_theme', 'myuni_features' );

?>