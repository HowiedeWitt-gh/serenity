<?php
/**
 * Announcement Custom Post Type.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register announcements.
 */
function na_outaouais_register_announcements() {


	register_post_type(
		'announcement',
		array(

			'labels' => array(

				'name' =>
				__( 'Announcements', 'na-outaouais' ),

				'singular_name' =>
				__( 'Announcement', 'na-outaouais' ),

				'add_new_item' =>
				__( 'Add Announcement', 'na-outaouais' ),

			),


			'public' => true,


			'menu_icon' =>
			'dashicons-megaphone',


			'supports' => array(
				'title',
				'editor',
				'thumbnail',
			),


			'has_archive' => true,


			'rewrite' => array(
				'slug' => 'announcements',
			),


			'show_in_rest' => true,

		)
	);

}


add_action(
	'init',
	'na_outaouais_register_announcements'
);