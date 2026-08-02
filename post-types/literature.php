<?php
/**
 * Literature Custom Post Type.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register literature.
 */
function na_outaouais_register_literature() {


	register_post_type(
		'literature',
		array(

			'labels' => array(

				'name' =>
				__( 'Literature', 'na-outaouais' ),

				'singular_name' =>
				__( 'Literature Item', 'na-outaouais' ),

				'add_new_item' =>
				__( 'Add Literature Item', 'na-outaouais' ),

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
			__( 'Categories', 'na-outaouais' ),

			'hierarchical' => true,

			'show_in_rest' => true,

		)
	);

}


add_action(
	'init',
	'na_outaouais_register_literature'
);