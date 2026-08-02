<?php
/**
 * Contact Form 7 integration.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Check Contact Form 7 availability.
 */
function serenity_cf7_active() {

	return defined(
		'WPCF7_VERSION'
	);

}
