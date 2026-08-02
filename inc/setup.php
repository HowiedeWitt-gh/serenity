<?php
/**
 * Theme setup.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;

/**
 * Set up theme features, translations, menus, and image sizes.
 */
function serenity_setup() {
	load_theme_textdomain(
		'serenity',
		SERENITY_DIR . '/languages'
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
			'primary' => __( 'Primary Menu', 'serenity' ),
			'footer'  => __( 'Footer Menu', 'serenity' ),
		)
	);

	add_image_size( 'serenity-featured', 1200, 700, true );
	add_image_size( 'serenity-card', 600, 400, true );
	add_image_size( 'serenity-hero', 1600, 800, true );
}
add_action( 'after_setup_theme', 'serenity_setup' );

/**
 * Register widget areas.
 */
function serenity_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'serenity' ),
			'id'            => 'sidebar',
			'description'   => __( 'Main sidebar.', 'serenity' ),
			'before_widget' => '<section class="widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'serenity_widgets_init' );
