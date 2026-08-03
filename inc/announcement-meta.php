<?php
/**
 * Announcement metadata.
 *
 * @package NA_Serenity
 */

defined( 'ABSPATH' ) || exit;



function na_serenity_add_announcement_meta() {


	add_meta_box(

		'announcement_expiry',

		__( 'Announcement Settings', 'na-serenity' ),

		'na_serenity_render_expiry_field',

		'announcement',

		'side'

	);

}


add_action(
	'add_meta_boxes',
	'na_serenity_add_announcement_meta'
);



function na_serenity_render_expiry_field(
	$post
) {


$value =
get_post_meta(
	$post->ID,
	'_announcement_expiry',
	true
);


wp_nonce_field(
	'announcement_save',
	'announcement_nonce'
);


?>

<label>

<?php esc_html_e(
	'Expiration date',
	'na-serenity'
); ?>

</label>


<input
type="date"
name="announcement_expiry"
value="<?php echo esc_attr($value); ?>"
style="width:100%;"
/>


<?php

}



function na_serenity_save_announcement_meta(
	$post_id
) {


if (
	! isset(
		$_POST['announcement_nonce']
	)
) {

	return;

}


if (
	! wp_verify_nonce(
		sanitize_text_field(
			wp_unslash(
				$_POST['announcement_nonce']
			)
		),
		'announcement_save'
	)
) {

	return;

}


if (
	isset(
		$_POST['announcement_expiry']
	)
) {


update_post_meta(

	$post_id,

	'_announcement_expiry',

	sanitize_text_field(
		wp_unslash(
			$_POST['announcement_expiry']
		)
	)

);


}


}


add_action(
	'save_post_announcement',
	'na_serenity_save_announcement_meta'
);
