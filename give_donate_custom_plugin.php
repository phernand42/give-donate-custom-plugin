<?php
/*
Plugin Name: Give Donate Custom Plugin
Description: Custom functions for the Give Donate plugin
Author: Paul Hernandez
Version: 1.0
Requires at least: 2.8.0
*/

/**
 * Include all necessary files
 */
//Donate form customizations
if ( file_exists( plugin_dir_path( __FILE__ ) . 'lib/require-last-name.php' ) ) {
	require_once( 'lib/require-last-name.php' );
}