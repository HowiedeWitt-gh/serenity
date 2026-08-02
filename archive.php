<?php

get_header();

?>

<section class="container archive">


<header>

<h1>
<?php the_archive_title(); ?>
</h1>

</header>


<?php

if ( have_posts() ) :

while ( have_posts() ) :

the_post();


get_template_part(
	'template-parts/content'
);


endwhile;


the_posts_pagination();


else:


get_template_part(
	'template-parts/content',
	'none'
);


endif;

?>


</section>


<?php

get_footer();