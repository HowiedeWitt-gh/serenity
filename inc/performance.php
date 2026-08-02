<?php
/**
 * Performance optimizations.
 *
 * @package Serenity
 */

defined('ABSPATH') || exit;


/**
 * Enable lazy loading.
 */
function serenity_lazy_images(
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
	'serenity_lazy_images'
);
