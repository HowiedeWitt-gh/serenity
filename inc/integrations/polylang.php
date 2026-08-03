<?php
/**
 * Polylang integration.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Register theme strings with Polylang.
 */
function na_serenity_register_polylang_strings() {


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
	'na_serenity_register_polylang_strings'
);
