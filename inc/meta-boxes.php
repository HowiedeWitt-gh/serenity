<?php
/**
 * Meeting metadata.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;



function na_outaouais_add_meeting_meta_box() {


	add_meta_box(

		'meeting_details',

		__( 'Meeting Details', 'na-outaouais' ),

		'na_outaouais_render_meeting_meta_box',

		'meeting',

		'normal'

	);

}


add_action(
	'add_meta_boxes',
	'na_outaouais_add_meeting_meta_box'
);



function na_outaouais_render_meeting_meta_box(
	$post
) {


wp_nonce_field(
	'meeting_save',
	'meeting_nonce'
);


$fields = array(

	'address' =>
	__( 'Address', 'na-outaouais' ),


	'city' =>
	__( 'City', 'na-outaouais' ),


	'time' =>
	__( 'Meeting Time', 'na-outaouais' ),


	'language' =>
	__( 'Language', 'na-outaouais' ),

);



foreach ( $fields as $key => $label ) {


$value =
get_post_meta(
	$post->ID,
	$key,
	true
);


?>

<p>

<label>
<strong>
<?php echo esc_html( $label ); ?>
</strong>
</label>


<br>


<input
type="text"
name="<?php echo esc_attr($key); ?>"
value="<?php echo esc_attr($value); ?>"
style="width:100%;"
>

</p>


<?php

}


}


function na_outaouais_save_meeting_meta(
	$post_id
) {


if (
	! isset(
		$_POST['meeting_nonce']
	)
) {

	return;

}


if (
	! wp_verify_nonce(
		sanitize_text_field(
			wp_unslash(
				$_POST['meeting_nonce']
			)
		),
		'meeting_save'
	)
) {

	return;

}


$fields = array(
	'address',
	'city',
	'time',
	'language',
);



foreach ( $fields as $field ) {


if (
	isset($_POST[$field])
) {


update_post_meta(

	$post_id,

	$field,

	sanitize_text_field(
		wp_unslash(
			$_POST[$field]
		)
	)

);


}

}


}


add_action(
	'save_post_meeting',
	'na_outaouais_save_meeting_meta'
);