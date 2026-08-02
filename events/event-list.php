<?php
/**
 * Events Manager list override.
 *
 * @package Serenity
 */

?>


<div class="em-events-list">


<?php

while(
have_posts()
):

the_post();


get_template_part(
'template-parts/events/meeting-card'
);


endwhile;

?>


</div>