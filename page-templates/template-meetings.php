<?php
/**
 * Template Name: Meeting Finder
 */

get_header();

?>


<main class="container meetings-page">


<?php

get_template_part(
'template-parts/events/meeting-search-banner'
);

?>


<?php

echo do_shortcode(
'[events_search_form]'
);


echo do_shortcode(
'[events_list scope="future"]'
);


?>


</main>


<?php get_footer(); ?>