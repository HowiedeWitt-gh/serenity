<?php
/**
 * Performance optimizations.
 *
 * @package NA_Serenity
 */

defined('ABSPATH') || exit;


/**
 * Enable lazy loading.
 */
function na_serenity_lazy_images(
	$html
){

	return str_replace(
		'<img',
		'<img loading="lazy"',
		$html
	);

}


add_filter(
	'post_thumbnail_html',
	'na_serenity_lazy_images'
);
