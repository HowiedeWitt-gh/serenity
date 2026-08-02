<?php
/**
 * Help banner.
 */

?>

<section class="help-banner">


<h2>

<?php esc_html_e(
	'Need Help?',
	'na-outaouais'
); ?>

</h2>


<p>

<?php esc_html_e(
	'You are welcome. Find a meeting and connect with people in recovery.',
	'na-outaouais'
); ?>

</p>


<a class="button"
href="<?php echo esc_url(
	home_url('/events')
); ?>">

<?php esc_html_e(
	'Find a Meeting',
	'na-outaouais'
); ?>

</a>


</section>