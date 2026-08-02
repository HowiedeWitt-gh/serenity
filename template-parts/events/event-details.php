<?php
/**
 * Event details.
 *
 * @package NA_Outaouais
 */

?>

<section class="event-details">


<h2>

<?php esc_html_e(
	'Meeting Details',
	'na-outaouais'
); ?>

</h2>


<?php

echo do_shortcode(
	'[event_details]'
);

?>


</section>