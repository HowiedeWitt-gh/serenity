<?php
/**
 * SEO helpers.
 *
 * @package NA_Serenity
 */

defined('ABSPATH') || exit;


/**
 * Add basic site description fallback.
 */
function na_serenity_meta_description() {


	if (
		is_admin()
	) {

		return;

	}


	if (
		is_singular()
	) {

		return;

	}


	$description =
	get_bloginfo(
		'description'
	);


	if($description){

		echo '<meta name="description" content="' .
		esc_attr($description) .
		'">' . "\n";

	}

}


add_action(
	'wp_head',
	'na_serenity_meta_description'
);
