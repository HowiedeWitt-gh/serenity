<?php
/**
 * Security adjustments.
 *
 * @package Serenity
 */

defined('ABSPATH') || exit;


/**
 * Remove unnecessary headers.
 */
remove_action(
	'wp_head',
	'wp_generator'
);