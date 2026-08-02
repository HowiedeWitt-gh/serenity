<?php
/**
 * Help banner.
 */

?>

<section class="help-banner">


<h2>

<?php esc_html_e(
	'Need Help?',
	'serenity'
); ?>

</h2>


<p>

<?php esc_html_e(
	'You are welcome. Find a meeting and connect with people in recovery.',
	'serenity'
); ?>

</p>


<a class="button"
href="<?php echo esc_url(
	home_url('/events')
); ?>">

<?php esc_html_e(
	'Find a Meeting',
	'serenity'
); ?>

</a>


</section>