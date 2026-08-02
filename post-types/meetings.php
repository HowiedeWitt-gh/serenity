<?php
/**
 * Meetings Custom Post Type.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register Meetings.
 */
function na_outaouais_register_meetings() {


	register_post_type(
		'meeting',
		array(

			'labels' => array(

				'name' =>
				__( 'Meetings', 'na-outaouais' ),

				'singular_name' =>
				__( 'Meeting', 'na-outaouais' ),

				'add_new_item' =>
				__( 'Add New Meeting', 'na-outaouais' ),

				'edit_item' =>
				__( 'Edit Meeting', 'na-outaouais' ),

			),


			'public' => true,


			'menu_icon' =>
			'dashicons-location-alt',


			'supports' => array(
				'title',
				'editor',
			),


			'has_archive' => true,


			'rewrite' => array(
				'slug' => 'meetings',
			),


			'show_in_rest' => true,

		)
	);

}


add_action(
	'init',
	'na_outaouais_register_meetings'
);

/**
 * Meeting taxonomies.
 */
function na_outaouais_register_meeting_taxonomies() {


	register_taxonomy(
		'meeting_city',
		'meeting',
		array(

			'label' =>
			__( 'Cities', 'na-outaouais' ),


			'hierarchical' => true,


			'show_in_rest' => true,

		)
	);



	register_taxonomy(
		'meeting_language',
		'meeting',
		array(

			'label' =>
			__( 'Languages', 'na-outaouais' ),


			'hierarchical' => true,


			'show_in_rest' => true,

		)
	);



	register_taxonomy(
		'meeting_format',
		'meeting',
		array(

			'label' =>
			__( 'Meeting Formats', 'na-outaouais' ),


			'hierarchical' => true,


			'show_in_rest' => true,

		)
	);

}


add_action(
	'init',
	'na_outaouais_register_meeting_taxonomies'
);