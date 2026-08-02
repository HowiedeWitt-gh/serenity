<?php
/**
 * Theme asset loading.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue theme assets.
 */
function serenity_enqueue_assets() {
	$version = SERENITY_VERSION;
	$uri     = SERENITY_URI;

	wp_enqueue_style( 'serenity-style', get_stylesheet_uri(), array(), $version );
	wp_enqueue_style( 'serenity-variables', $uri . '/assets/css/variables.css', array(), $version );
	wp_enqueue_style( 'serenity-typography', $uri . '/assets/css/typography.css', array( 'serenity-variables' ), $version );
	wp_enqueue_style( 'serenity-main', $uri . '/assets/css/main.css', array( 'serenity-variables', 'serenity-typography' ), $version );
	wp_enqueue_style( 'serenity-layout', $uri . '/assets/css/layout.css', array( 'serenity-main' ), $version );
	wp_enqueue_style( 'serenity-components', $uri . '/assets/css/components.css', array( 'serenity-main' ), $version );
	wp_enqueue_style( 'serenity-navigation', $uri . '/assets/css/navigation.css', array( 'serenity-components' ), $version );
	wp_enqueue_style( 'serenity-pages', $uri . '/assets/css/pages.css', array( 'serenity-components' ), $version );
	wp_enqueue_style( 'serenity-pages-final', $uri . '/assets/css/pages-final.css', array( 'serenity-pages' ), $version );
	wp_enqueue_style( 'serenity-accessibility', $uri . '/assets/css/accessibility.css', array( 'serenity-components' ), $version );
	wp_enqueue_style( 'serenity-responsive', $uri . '/assets/css/responsive.css', array( 'serenity-components' ), $version );

	wp_enqueue_script( 'serenity-navigation', $uri . '/assets/js/navigation.js', array(), $version, true );

	if ( is_front_page() ) {
		wp_enqueue_style( 'serenity-homepage', $uri . '/assets/css/homepage.css', array( 'serenity-components' ), $version );
		wp_enqueue_style( 'serenity-home-modern', $uri . '/assets/css/homepage-modern.css', array( 'serenity-homepage' ), $version );
		wp_enqueue_style( 'serenity-events-home', $uri . '/assets/css/events-home.css', array( 'serenity-components' ), $version );
	}

	if ( is_front_page() || is_page_template( 'page-templates/template-meetings.php' ) || is_singular( 'event' ) || is_post_type_archive( 'event' ) || is_tax( array( 'event-categories', 'event-tags', 'event-locations' ) ) ) {
		wp_enqueue_style( 'serenity-events', $uri . '/assets/css/events-manager.css', array( 'serenity-components' ), $version );
		wp_enqueue_style( 'serenity-events-manager', $uri . '/assets/css/events-manager-custom.css', array( 'serenity-events' ), $version );
	}

	if ( is_front_page() || is_singular( 'announcement' ) || is_post_type_archive( 'announcement' ) ) {
		wp_enqueue_style( 'serenity-announcements', $uri . '/assets/css/announcements.css', array( 'serenity-components' ), $version );
	}

	if ( is_front_page() || is_page_template( 'page-templates/template-literature.php' ) || is_singular( 'literature' ) || is_post_type_archive( 'literature' ) || is_tax( 'literature_category' ) ) {
		wp_enqueue_style( 'serenity-literature', $uri . '/assets/css/literature.css', array( 'serenity-components' ), $version );
	}

	if ( defined( 'WPCF7_VERSION' ) ) {
		wp_enqueue_style( 'serenity-contact-form7', $uri . '/assets/css/contact-form7.css', array( 'serenity-components' ), $version );
	}
}
add_action( 'wp_enqueue_scripts', 'serenity_enqueue_assets' );
