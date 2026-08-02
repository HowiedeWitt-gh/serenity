<?php

get_header();

?>

<section class="container">


<h1>

<?php

printf(
	esc_html__(
		'Search results for: %s',
		'na-outaouais'
	),
	get_search_query()
);

?>

</h1>


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