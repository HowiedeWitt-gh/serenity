<?php
/**
 * Template Name: Literature Library
 */

get_header();

?>


<main class="container literature-page">


<h1>

<?php esc_html_e(
'Literature Library',
'na-serenity'
); ?>

</h1>


<?php

get_template_part(
'template-parts/literature/list'
);

?>


</main>


<?php get_footer(); ?>