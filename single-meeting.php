<?php

get_header();


while(
	have_posts()
):

the_post();

?>

<article class="container meeting-single">


<h1>

<?php the_title(); ?>

</h1>


<div>

<?php the_content(); ?>

</div>


<?php

get_template_part(
	'template-parts/meeting/details'
);

?>


</article>


<?php

endwhile;


get_footer();