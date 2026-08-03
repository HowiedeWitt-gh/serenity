<?php
/**
 * Literature Custom Post Type.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register literature.
 */
function na_serenity_register_literature() {


	register_post_type(
		'literature',
		array(

			'labels' => array(

				'name' =>
				__( 'Literature', 'na-serenity' ),

				'singular_name' =>
				__( 'Literature Item', 'na-serenity' ),

				'add_new_item' =>
				__( 'Add Literature Item', 'na-serenity' ),

			),

			'public' => true,

			'menu_icon' =>
			'dashicons-media-document',

			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),

			'has_archive' => true,

			'rewrite' => array(
				'slug' => 'literature',
			),

			'show_in_rest' => true,

		)
	);


	register_taxonomy(
		'literature_category',
		'literature',
		array(

			'label' =>
			__( 'Categories', 'na-serenity' ),

			'hierarchical' => true,

			'show_in_rest' => true,

		)
	);

}


add_action(
	'init',
	'na_serenity_register_literature'
);
