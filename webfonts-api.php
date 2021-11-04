<?php
/**
 * Plugin name: Webfonts API
 */

// Bail out if the wp_webfonts function already exists.
if ( function_exists( 'wp_webfonts' ) ) {
	return;
}

/** WordPress Webfonts Classes & Functions */
require_once __DIR__ . '/wp-includes/webfonts-api/class-wp-webfonts-schema-validator.php';
require_once __DIR__ . '/wp-includes/webfonts-api/class-wp-webfonts-registry.php';
require_once __DIR__ . '/wp-includes/webfonts-api/class-wp-webfonts-provider-registry.php';
require_once __DIR__ . '/wp-includes/webfonts-api/class-wp-webfonts-controller.php';
require_once __DIR__ . '/wp-includes/webfonts.php';


/**
 * Add webfonts mime types.
 */
add_filter(
	'mime_types',
	function( $mime_types ) {
		// Webfonts formats.
		$mime_types['woff2'] = 'font/woff2';
		$mime_types['woff']  = 'font/woff';
		$mime_types['ttf']  = 'font/ttf';
		$mime_types['eot']  = 'application/vnd.ms-fontobject';
		$mime_types['otf']  = 'application/x-font-opentype';

		return $mime_types;
	}
);
