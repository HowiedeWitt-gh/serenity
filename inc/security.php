<?php
/**
 * Security adjustments.
 *
 * @package NA_Outaouais
 */

defined('ABSPATH') || exit;


/**
 * Remove unnecessary headers.
 */
remove_action(
	'wp_head',
	'wp_generator'
);