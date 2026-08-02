<?php
/**
 * Events list wrapper.
 *
 * @package Serenity
 */

defined( 'ABSPATH' ) || exit;

?>

<div class="na-events-list">

<?php

echo do_shortcode(
	'[events_list limit="10"]'
);

?>

</div>