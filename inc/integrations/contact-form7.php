<?php
/**
 * Contact Form 7 integration.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;


/**
 * Check Contact Form 7 availability.
 */
function na_outaouais_cf7_active() {

	return defined(
		'WPCF7_VERSION'
	);

}