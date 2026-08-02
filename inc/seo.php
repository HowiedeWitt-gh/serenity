<?php
/**
 * SEO helpers.
 *
 * @package NA_Outaouais
 */

defined('ABSPATH') || exit;


/**
 * Add basic site description fallback.
 */
function na_outaouais_meta_description() {


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
	'na_outaouais_meta_description'
);