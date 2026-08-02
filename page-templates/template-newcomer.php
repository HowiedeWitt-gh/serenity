<?php
/**
 * Template Name: Newcomer Page
 */

get_header();

?>


<main class="container newcomer-page">


<header>

<h1>

<?php esc_html_e(
'Welcome',
'na-outaouais'
); ?>

</h1>


<p>

<?php esc_html_e(
'If you think you may have a problem with drugs, you are welcome here.',
'na-outaouais'
); ?>

</p>

</header>


<?php


get_template_part(
'template-parts/pages/resource-buttons'
);


while(have_posts()):

the_post();


the_content();


endwhile;


?>


</main>


<?php get_footer(); ?>