<?php
/**
 * myuni functions and definitions
 *
 * @package myuni
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$myuni_includes = array(

	'/features.php',                        //	Theme setup and custom theme supports.
	'/enqueue.php',                         //	Enqueue scripts and styles.
	'/myuni_post_types.php',				//	Custum Post Types


);

foreach ( $myuni_includes as $file ) {
	$filepath = locate_template( 'assets/inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating assets/inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}