<?php
/**
 * Assets loading.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


/**
 * Load theme assets.
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


	wp_enqueue_style(
		'na-outaouais-layout',
		NA_OUTAOUAIS_URI . '/assets/css/layout.css',
		array(),
		NA_OUTAOUAIS_VERSION
	);


	wp_enqueue_style(
		'na-outaouais-navigation',
		NA_OUTAOUAIS_URI . '/assets/css/navigation.css',
		array(),
		NA_OUTAOUAIS_VERSION
	);


	wp_enqueue_script(
		'na-outaouais-navigation',
		NA_OUTAOUAIS_URI . '/assets/js/navigation.js',
		array(),
		NA_OUTAOUAIS_VERSION,
		true
	);

}


add_action(
	'wp_enqueue_scripts',
	'na_outaouais_enqueue_assets'
);

if ( is_front_page() ) {

	wp_enqueue_style(
		'na-outaouais-homepage',
		NA_OUTAOUAIS_URI . '/assets/css/homepage.css',
		array(),
		NA_OUTAOUAIS_VERSION
	);

}

wp_enqueue_style(
	'na-outaouais-events-home',
	NA_OUTAOUAIS_URI . '/assets/css/events-home.css',
	array(),
	NA_OUTAOUAIS_VERSION
);

wp_enqueue_style(
	'na-outaouais-announcements',
	NA_OUTAOUAIS_URI . '/assets/css/announcements.css',
	array(),
	NA_OUTAOUAIS_VERSION
);

wp_enqueue_style(
	'na-outaouais-literature',
	NA_OUTAOUAIS_URI . '/assets/css/literature.css',
	array(),
	NA_OUTAOUAIS_VERSION
);
