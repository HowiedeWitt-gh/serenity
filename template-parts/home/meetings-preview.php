<?php
/**
 * Meetings preview.
 */

?>

<section class="homepage-section meetings-preview">


<div class="container">


<header class="section-header">

<h2>

<?php esc_html_e(
	'Upcoming Meetings',
	'na-outaouais'
); ?>

</h2>


<p>

<?php esc_html_e(
	'Find a meeting near you.',
	'na-outaouais'
); ?>

</p>


</header>


<?php

if (
	class_exists('EM_Events')
) {


echo do_shortcode(
	'[events_list limit="3" scope="future"]'
);


}

?>


<a class="button"
href="<?php echo esc_url(
home_url('/events')
); ?>">

<?php esc_html_e(
	'View All Meetings',
	'na-outaouais'
); ?>

</a>


</div>


</section>