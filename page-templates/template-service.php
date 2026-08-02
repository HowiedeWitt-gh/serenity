<?php
/**
 * Template Name: Service Page
 *
 * @package Serenity
 */

get_header();

?>

<main class="container service-page">


<?php

while (
	have_posts()
):

the_post();

?>

<h1>

<?php the_title(); ?>

</h1>


<div>

<?php the_content(); ?>

</div>


<?php

get_template_part(
	'template-parts/pages/service-blocks'
);

?>


<?php

endwhile;

?>


</main>


<?php

get_footer();