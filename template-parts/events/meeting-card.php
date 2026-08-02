<?php
/**
 * Meeting card.
 *
 * @package NA_Outaouais
 */

?>


<article class="meeting-card card">


<h3>

<?php the_title(); ?>

</h3>


<div class="meeting-details">


<?php

if(
function_exists('the_excerpt')
){

the_excerpt();

}

?>


</div>


<a class="button"
href="<?php the_permalink(); ?>">

<?php esc_html_e(
	'Meeting Details',
	'na-outaouais'
); ?>

</a>


</article>