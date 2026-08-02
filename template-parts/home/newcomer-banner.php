<?php
/**
 * Newcomer banner.
 */

?>

<section class="newcomer-banner">


<div class="container">


<h2>

<?php esc_html_e(
	'Are you looking for help?',
	'na-outaouais'
); ?>

</h2>


<p>

<?php esc_html_e(
	'You are welcome. Find a meeting and connect with people who understand.',
	'na-outaouais'
); ?>

</p>


<a class="button"
href="<?php echo esc_url(
home_url('/events')
); ?>">

<?php esc_html_e(
	'Find Support',
	'na-outaouais'
); ?>

</a>


</div>


</section>