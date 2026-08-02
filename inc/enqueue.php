<?php
/**
 * Assets loading.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


/**
 * Load CSS and JS.
 */
function na_outaouais_enqueue_assets() {


	wp_enqueue_style(
		'na-outaouais-style',
		get_stylesheet_uri(),
		array(),
		NA_OUTAOUAIS_VERSION
	);


	wp_enqueue_style(
		'na-outaouais-main',
		NA_OUTAOUAIS_URI . '/assets/css/main.css',
		array(),
		NA_OUTAOUAIS_VERSION
	);


	wp_enqueue_script(
		'na-outaouais-theme',
		NA_OUTAOUAIS_URI . '/assets/js/theme.js',
		array(),
		NA_OUTAOUAIS_VERSION,
		true
	);

}


add_action(
	'wp_enqueue_scripts',
	'na_outaouais_enqueue_assets'
);