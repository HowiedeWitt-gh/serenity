<?php
/**
 * Events Manager integration.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;


/**
 * Check Events Manager availability.
 */
function na_serenity_events_manager_active() {

	return class_exists( 'EM_Events' );

}


/**
 * Add Events Manager compatibility.
 */
function na_serenity_events_manager_setup() {


	if ( ! na_serenity_events_manager_active() ) {

		return;

	}


	add_filter(
		'em_event_output_placeholder',
		'na_serenity_event_placeholder',
		10,
		3
	);

}


add_action(
	'after_setup_theme',
	'na_serenity_events_manager_setup'
);



/**
 * Custom event placeholders.
 */
function na_serenity_event_placeholder(
	$output,
	$placeholder,
	$EM_Event
) {


switch ( $placeholder ) {


case '#_NA_CARD#':

	ob_start();

	get_template_part(
		'template-parts/events/event-card',
		null,
		array(
			'event' => $EM_Event,
		)
	);


$output =
ob_get_clean();


break;


}


return $output;

}
