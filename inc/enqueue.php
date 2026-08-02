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
	'na-outaouais-events',
	NA_OUTAOUAIS_URI . '/assets/css/events-manager.css',
	array(),
	NA_OUTAOUAIS_VERSION
);

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

wp_enqueue_style(
	'na-outaouais-pages',
	NA_OUTAOUAIS_URI . '/assets/css/pages.css',
	array(),
	NA_OUTAOUAIS_VERSION
);

wp_enqueue_style(
	'na-outaouais-contact-form7',
	NA_OUTAOUAIS_URI . '/assets/css/contact-form7.css',
	array(),
	NA_OUTAOUAIS_VERSION
);

wp_enqueue_style(
	'na-outaouais-accessibility',
	NA_OUTAOUAIS_URI . '/assets/css/accessibility.css',
	array(),
	NA_OUTAOUAIS_VERSION
);

wp_enqueue_style(
	'na-outaouais-variables',
	NA_OUTAOUAIS_URI . '/assets/css/variables.css',
	array(),
	NA_OUTAOUAIS_VERSION
);


wp_enqueue_style(
	'na-outaouais-typography',
	NA_OUTAOUAIS_URI . '/assets/css/typography.css',
	array(
		'na-outaouais-variables'
	),
	NA_OUTAOUAIS_VERSION
);


wp_enqueue_style(
	'na-outaouais-components',
	NA_OUTAOUAIS_URI . '/assets/css/components.css',
	array(
		'na-outaouais-variables'
	),
	NA_OUTAOUAIS_VERSION
);


wp_enqueue_style(
	'na-outaouais-responsive',
	NA_OUTAOUAIS_URI . '/assets/css/responsive.css',
	array(
		'na-outaouais-components'
	),
	NA_OUTAOUAIS_VERSION
);

wp_enqueue_style(
	'na-outaouais-home-modern',
	NA_OUTAOUAIS_URI . '/assets/css/homepage-modern.css',
	array(
		'na-outaouais-components'
	),
	NA_OUTAOUAIS_VERSION
);