<?php
/**
 * Homepage literature.
 */

?>

<section class="literature-preview">

<div class="container">


<h2>

<?php esc_html_e(
	'Recovery Literature',
	'na-outaouais'
); ?>

</h2>


<?php

get_template_part(
	'template-parts/literature/list'
);

?>


<a class="button"
href="<?php echo esc_url(
	home_url('/literature')
); ?>">

<?php esc_html_e(
	'View Library',
	'na-outaouais'
); ?>

</a>


</div>

</section>