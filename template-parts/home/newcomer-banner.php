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
	'na-serenity'
); ?>

</h2>


<p>

<?php esc_html_e(
	'You are welcome. Find a meeting and connect with people who understand.',
	'na-serenity'
); ?>

</p>


<a class="button"
href="<?php echo esc_url(
home_url('/events')
); ?>">

<?php esc_html_e(
	'Find Support',
	'na-serenity'
); ?>

</a>


</div>


</section>