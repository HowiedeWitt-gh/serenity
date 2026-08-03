<?php
/**
 * Theme setup.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;

/**
 * Set up theme features, translations, menus, and image sizes.
 */
function na_serenity_setup() {
	load_theme_textdomain(
		'na-serenity',
		NA_SERENITY_DIR . '/languages'
	);

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'responsive-embeds' );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'na-serenity' ),
			'footer'  => __( 'Footer Menu', 'na-serenity' ),
		)
	);

	add_image_size( 'na-serenity-featured', 1200, 700, true );
	add_image_size( 'na-serenity-card', 600, 400, true );
	add_image_size( 'na-serenity-hero', 1600, 800, true );
}
add_action( 'after_setup_theme', 'na_serenity_setup' );

/**
 * Register widget areas.
 */
function na_serenity_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'na-serenity' ),
			'id'            => 'sidebar',
			'description'   => __( 'Main sidebar.', 'na-serenity' ),
			'before_widget' => '<section class="widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'na_serenity_widgets_init' );
