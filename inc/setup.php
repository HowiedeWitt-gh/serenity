<?php
/**
 * Theme setup.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


/**
 * Setup theme features.
 */
function na_outaouais_setup() {

	load_theme_textdomain(
		'na-outaouais',
		NA_OUTAOUAIS_DIR . '/languages'
	);

	add_theme_support(
		'title-tag'
	);

	add_theme_support(
		'post-thumbnails'
	);

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

	add_theme_support(
		'editor-styles'
	);

	add_theme_support(
		'responsive-embeds'
	);


	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'na-outaouais' ),
			'footer'  => __( 'Footer Menu', 'na-outaouais' ),
		)
	);


	add_image_size(
		'na-featured',
		1200,
		700,
		true
	);
}


add_action(
	'after_setup_theme',
	'na_outaouais_setup'
);


/**
 * Register widget areas.
 */
function na_outaouais_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Sidebar', 'na-outaouais' ),
			'id'            => 'sidebar',
			'description'   => __( 'Main sidebar.', 'na-outaouais' ),
			'before_widget' => '<section class="widget">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}


add_action(
	'widgets_init',
	'na_outaouais_widgets_init'
);

/**
 * Accessibility support.
 */
add_theme_support(
	'custom-logo'
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


add_theme_support(
	'title-tag'
);

/**
 * Register menus.
 */
function na_outaouais_register_menus() {


	register_nav_menus(

		array(

			'primary' =>
			__( 'Primary Menu', 'na-outaouais' ),


			'footer' =>
			__( 'Footer Menu', 'na-outaouais' ),

		)

	);

}


add_action(
	'after_setup_theme',
	'na_outaouais_register_menus'
);

add_theme_support(
	'post-thumbnails'
);


add_image_size(
	'na-card',
	600,
	400,
	true
);


add_image_size(
	'na-hero',
	1600,
	800,
	true
);