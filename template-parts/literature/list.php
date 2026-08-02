<?php
/**
 * Literature list.
 */

$query = new WP_Query(
	array(

		'post_type' =>
		'literature',

		'posts_per_page' =>
		6,

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
	'template-parts/literature/card'
);


endwhile;


endif;


wp_reset_postdata();