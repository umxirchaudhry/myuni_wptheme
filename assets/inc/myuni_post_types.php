<?php

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'myuni_post_types' ) ) {

		function myuni_post_types () {
			register_post_type( 'event', array(
				'public' => true 
			) );

		}
}

add_action( 'init', 'myuni_post_types' );