<?php
/**
 * Template Name: Contact Page
 *
 * @package Serenity
 */

get_header();

?>

<main class="container page-contact">


<?php

while (
	have_posts()
):

the_post();

?>

<header class="page-header">

<h1>

<?php the_title(); ?>

</h1>

</header>


<div class="page-content">

<?php the_content(); ?>

</div>


<?php

get_template_part(
	'template-parts/pages/contact-info'
);

?>


<?php

endwhile;

?>


</main>


<?php

get_footer();