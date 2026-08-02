<?php
/**
 * Homepage hero.
 *
 * @package NA_Outaouais
 */

?>

<section class="hero homepage-hero">


<div class="container">


<div class="hero-content">


<h1>

<?php esc_html_e(
	'A New Way of Life Begins Here',
	'na-outaouais'
); ?>

</h1>


<p>

<?php esc_html_e(
	'Narcotics Anonymous offers recovery, support, and fellowship for anyone seeking freedom from addiction.',
	'na-outaouais'
); ?>

</p>


<div class="hero-actions">


<a class="button"
href="<?php echo esc_url(
home_url('/events')
); ?>">

<?php esc_html_e(
	'Find a Meeting',
	'na-outaouais'
); ?>

</a>


<a class="button secondary"
href="<?php echo esc_url(
home_url('/contact')
); ?>">

<?php esc_html_e(
	'Contact Us',
	'na-outaouais'
); ?>

</a>


</div>


</div>


</div>


</section>