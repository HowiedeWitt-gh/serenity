<?php
/**
 * Contact Form 7 integration.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Check Contact Form 7 availability.
 */
function na_serenity_cf7_active() {

	return defined(
		'WPCF7_VERSION'
	);

}
