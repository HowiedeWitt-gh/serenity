<?php

get_header();

?>

<section class="container">


<h1>

<?php esc_html_e(
	'Announcements',
	'na-serenity'
); ?>

</h1>


<?php

while (
	have_posts()
):

the_post();


get_template_part(
	'template-parts/announcements/card'
);


endwhile;


?>


</section>


<?php

get_footer();