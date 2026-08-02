<?php
/**
 * Literature card.
 */

?>

<article class="literature-card">


<h3>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h3>


<div>

<?php the_excerpt(); ?>

</div>


<?php

$url =
get_post_meta(
	get_the_ID(),
	'_literature_url',
	true
);


if ($url):

?>

<a class="button"
href="<?php echo esc_url($url); ?>"
target="_blank"
rel="noopener">

<?php esc_html_e(
	'Open Resource',
	'na-outaouais'
); ?>

</a>


<?php endif; ?>


</article>