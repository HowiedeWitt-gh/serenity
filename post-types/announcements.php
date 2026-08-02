<?php
/**
 * Announcement Custom Post Type.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register announcements.
 */
function serenity_register_announcements() {


	register_post_type(
		'announcement',
		array(

			'labels' => array(

				'name' =>
				__( 'Announcements', 'serenity' ),

				'singular_name' =>
				__( 'Announcement', 'serenity' ),

				'add_new_item' =>
				__( 'Add Announcement', 'serenity' ),

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
	'serenity_register_announcements'
);
