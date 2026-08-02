<?php
/**
 * Plugin recommendations.
 */

defined('ABSPATH') || exit;


function serenity_plugin_notice(){


	if(
		! current_user_can('activate_plugins')
	){

		return;

	}


	$plugins = array();


	if(
		! class_exists('EM_Events')
	){

		$plugins[] =
		'Events Manager';

	}


	if(
		! defined('WPCF7_VERSION')
	){

		$plugins[] =
		'Contact Form 7';

	}


	if(
		function_exists('pll_languages_list') === false
	){

		$plugins[] =
		'Polylang';

	}


	if(
		empty($plugins)
	){

		return;

	}


	echo '<div class="notice notice-info">';

	echo '<p>';

	echo esc_html__(
		'Recommended plugins for NA Outaouais:',
		'serenity'
	);

	echo ' ';

	echo esc_html(
		implode(', ', $plugins)
	);

	echo '</p>';

	echo '</div>';

}


add_action(
	'admin_notices',
	'serenity_plugin_notice'
);
