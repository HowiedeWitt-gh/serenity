<?php
/**
 * Literature Custom Post Type.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register literature.
 */
function serenity_register_literature() {


	register_post_type(
		'literature',
		array(

			'labels' => array(

				'name' =>
				__( 'Literature', 'serenity' ),

				'singular_name' =>
				__( 'Literature Item', 'serenity' ),

				'add_new_item' =>
				__( 'Add Literature Item', 'serenity' ),

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
			__( 'Categories', 'serenity' ),

			'hierarchical' => true,

			'show_in_rest' => true,

		)
	);

}


add_action(
	'init',
	'serenity_register_literature'
);
