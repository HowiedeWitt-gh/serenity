<?php
/**
 * Literature metadata.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;



function na_outaouais_add_literature_meta() {


	add_meta_box(

		'literature_resource',

		__( 'Resource Link', 'na-outaouais' ),

		'na_outaouais_render_literature_field',

		'literature',

		'normal'

	);

}


add_action(
	'add_meta_boxes',
	'na_outaouais_add_literature_meta'
);



function na_outaouais_render_literature_field(
	$post
) {


$value =
get_post_meta(
	$post->ID,
	'_literature_url',
	true
);


wp_nonce_field(
	'literature_save',
	'literature_nonce'
);

?>

<label>

<?php esc_html_e(
	'PDF or external resource URL',
	'na-outaouais'
); ?>

</label>


<input
type="url"
name="literature_url"
value="<?php echo esc_url($value); ?>"
style="width:100%;"
/>


<?php

}



function na_outaouais_save_literature_meta(
	$post_id
) {


if (
	! isset($_POST['literature_nonce'])
) {

	return;

}


if (
	! wp_verify_nonce(
		sanitize_text_field(
			wp_unslash(
				$_POST['literature_nonce']
			)
		),
		'literature_save'
	)
) {

	return;

}


if (
	isset($_POST['literature_url'])
) {


update_post_meta(

	$post_id,

	'_literature_url',

	esc_url_raw(
		wp_unslash(
			$_POST['literature_url']
		)
	)

);


}


}


add_action(
	'save_post_literature',
	'na_outaouais_save_literature_meta'
);