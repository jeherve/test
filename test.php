<?php
/**
 * Plugin Name: Helper
 * Plugin URI: https://jeremy.hu
 * Description: Testing things here
 * Author: Jeremy Herve
 * Version: 1.0
 * Author URI: https://jeremy.hu
 * License: GPL2+
 */

$jetpack_autoloader = plugin_dir_path( __FILE__ ) . 'vendor/autoload_packages.php';
if ( is_readable( $jetpack_autoloader ) ) {
	require_once $jetpack_autoloader;
}

// Require everything else, that is not loaded via the autoloader.
require_once plugin_dir_path( __FILE__ ) . 'load-things.php';

