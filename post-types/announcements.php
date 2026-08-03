<?php
/**
 * Announcement Custom Post Type.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register announcements.
 */
function na_serenity_register_announcements() {


	register_post_type(
		'announcement',
		array(

			'labels' => array(

				'name' =>
				__( 'Announcements', 'na-serenity' ),

				'singular_name' =>
				__( 'Announcement', 'na-serenity' ),

				'add_new_item' =>
				__( 'Add Announcement', 'na-serenity' ),

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
	'na_serenity_register_announcements'
);
