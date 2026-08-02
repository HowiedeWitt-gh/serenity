<?php
/**
 * Announcement list.
 *
 * @package NA_Outaouais
 */


$query = new WP_Query(
	array(

		'post_type' =>
		'announcement',

		'posts_per_page' =>
		'3',

		'meta_query' => array(

			'relation' => 'OR',

			array(
				'key' =>
				'_announcement_expiry',

				'compare' =>
				'NOT EXISTS',
			),

			array(
				'key' =>
				'_announcement_expiry',

				'value' =>
				current_time('Y-m-d'),

				'compare' =>
				'>=',

				'type' =>
				'DATE',
			),

		),

	)
);


if (
	$query->have_posts()
):

while (
	$query->have_posts()
):

$query->the_post();


get_template_part(
	'template-parts/announcements/card'
);


endwhile;


endif;


wp_reset_postdata();