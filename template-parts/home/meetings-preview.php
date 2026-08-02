<?php
/**
 * Homepage meetings section.
 *
 * Uses Events Manager plugin.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;

?>

<section class="meetings-preview">

<div class="container">


<header class="section-header">

<h2>

<?php esc_html_e(
	'Find a Meeting',
	'na-outaouais'
); ?>

</h2>


<p>

<?php esc_html_e(
	'Join one of our regular meetings in the Outaouais region.',
	'na-outaouais'
); ?>

</p>

</header>


<div class="homepage-events">


<?php

if (
	class_exists( 'EM_Events' )
) {


echo do_shortcode(
	'[events_list limit="5" scope="future"]'
);


} else {


?>

<p>

<?php esc_html_e(
	'Meeting information is currently unavailable.',
	'na-outaouais'
); ?>

</p>


<?php

}

?>


</div>


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