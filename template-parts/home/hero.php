<?php
/**
 * Homepage hero.
 *
 * @package Serenity
 */

?>

<section class="hero homepage-hero">


<div class="container">


<div class="hero-content">


<h1>

<?php esc_html_e(
	'A New Way of Life Begins Here',
	'serenity'
); ?>

</h1>


<p>

<?php esc_html_e(
	'Narcotics Anonymous offers recovery, support, and fellowship for anyone seeking freedom from addiction.',
	'serenity'
); ?>

</p>


<div class="hero-actions">


<a class="button"
href="<?php echo esc_url(
home_url('/events')
); ?>">

<?php esc_html_e(
	'Find a Meeting',
	'serenity'
); ?>

</a>


<a class="button secondary"
href="<?php echo esc_url(
home_url('/contact')
); ?>">

<?php esc_html_e(
	'Contact Us',
	'serenity'
); ?>

</a>


</div>


</div>


</div>


</section>