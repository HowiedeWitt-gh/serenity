<?php
/**
 * Polylang integration.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register theme strings with Polylang.
 */
function serenity_register_polylang_strings() {


	if (
		function_exists(
			'pll_register_string'
		)
	) {


		pll_register_string(
			'Find a Meeting',
			'Find a Meeting',
			'NA Outaouais'
		);


		pll_register_string(
			'Need Help?',
			'Need Help?',
			'NA Outaouais'
		);


		pll_register_string(
			'Announcements',
			'Announcements',
			'NA Outaouais'
		);


	}

}


add_action(
	'init',
	'serenity_register_polylang_strings'
);
