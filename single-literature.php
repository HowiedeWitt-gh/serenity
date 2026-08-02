<?php

get_header();

?>

<section class="container">


<?php

while(
	have_posts()
):

the_post();

?>

<article>


<h1>

<?php the_title(); ?>

</h1>


<?php the_content(); ?>


<?php

get_template_part(
	'template-parts/literature/card'
);

?>


</article>


<?php

endwhile;

?>


</section>


<?php

get_footer();