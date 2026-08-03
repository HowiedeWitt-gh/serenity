<?php
/**
 * Theme asset loading.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue theme assets.
 */
function na_serenity_enqueue_assets() {
	$version = NA_SERENITY_VERSION;
	$uri     = NA_SERENITY_URI;

	wp_enqueue_style( 'na-serenity-style', get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'na-serenity-variables', $uri . '/assets/css/variables.css', array(), $version );
	wp_enqueue_style( 'na-serenity-typography', $uri . '/assets/css/typography.css', array( 'na-serenity-variables' ), $version );
	wp_enqueue_style( 'na-serenity-main', $uri . '/assets/css/main.css', array( 'na-serenity-variables', 'na-serenity-typography' ), $version );
	wp_enqueue_style( 'na-serenity-layout', $uri . '/assets/css/layout.css', array( 'na-serenity-main' ), $version );
	wp_enqueue_style( 'na-serenity-components', $uri . '/assets/css/components.css', array( 'na-serenity-main' ), $version );
	wp_enqueue_style( 'na-serenity-navigation', $uri . '/assets/css/navigation.css', array( 'na-serenity-components' ), $version );
	wp_enqueue_style( 'na-serenity-pages', $uri . '/assets/css/pages.css', array( 'na-serenity-components' ), $version );
	wp_enqueue_style( 'na-serenity-pages-final', $uri . '/assets/css/pages-final.css', array( 'na-serenity-pages' ), $version );
	wp_enqueue_style( 'na-serenity-accessibility', $uri . '/assets/css/accessibility.css', array( 'na-serenity-components' ), $version );
	wp_enqueue_style( 'na-serenity-responsive', $uri . '/assets/css/responsive.css', array( 'na-serenity-components' ), $version );

	wp_enqueue_script( 'na-serenity-navigation', $uri . '/assets/js/navigation.js', array(), $version, true );

	if ( is_front_page() ) {
		wp_enqueue_style( 'na-serenity-homepage', $uri . '/assets/css/homepage.css', array( 'na-serenity-components' ), $version );
		wp_enqueue_style( 'na-serenity-home-modern', $uri . '/assets/css/homepage-modern.css', array( 'na-serenity-homepage' ), $version );
		wp_enqueue_style( 'na-serenity-events-home', $uri . '/assets/css/events-home.css', array( 'na-serenity-components' ), $version );
	}

	if ( is_front_page() || is_page_template( 'page-templates/template-meetings.php' ) || is_singular( 'event' ) || is_post_type_archive( 'event' ) || is_tax( array( 'event-categories', 'event-tags', 'event-locations' ) ) ) {
		wp_enqueue_style( 'na-serenity-events', $uri . '/assets/css/events-manager.css', array( 'na-serenity-components' ), $version );
		wp_enqueue_style( 'na-serenity-events-manager', $uri . '/assets/css/events-manager-custom.css', array( 'na-serenity-events' ), $version );
	}

	if ( is_front_page() || is_singular( 'announcement' ) || is_post_type_archive( 'announcement' ) ) {
		wp_enqueue_style( 'na-serenity-announcements', $uri . '/assets/css/announcements.css', array( 'na-serenity-components' ), $version );
	}

	if ( is_front_page() || is_page_template( 'page-templates/template-literature.php' ) || is_singular( 'literature' ) || is_post_type_archive( 'literature' ) || is_tax( 'literature_category' ) ) {
		wp_enqueue_style( 'na-serenity-literature', $uri . '/assets/css/literature.css', array( 'na-serenity-components' ), $version );
	}

	if ( defined( 'WPCF7_VERSION' ) ) {
		wp_enqueue_style( 'na-serenity-contact-form7', $uri . '/assets/css/contact-form7.css', array( 'na-serenity-components' ), $version );
	}
}
add_action( 'wp_enqueue_scripts', 'na_serenity_enqueue_assets' );
