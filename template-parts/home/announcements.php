<?php
/**
 * Homepage announcements.
 */

?>

<section class="announcements">

<div class="container">


<h2>

<?php esc_html_e(
	'Latest Announcements',
	'na-serenity'
); ?>

</h2>


<?php

get_template_part(
	'template-parts/announcements/list'
);

?>


<a class="button"
href="<?php echo esc_url(
	home_url('/announcements')
); ?>">

<?php esc_html_e(
	'View All Announcements',
	'na-serenity'
); ?>

</a>


</div>

</section>