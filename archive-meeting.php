<?php

get_header();

?>

<section class="container meetings">


<h1>

<?php

esc_html_e(
	'Find a Meeting',
	'na-outaouais'
);

?>

</h1>


<div class="meeting-grid">


<?php


while (
	have_posts()
):

the_post();


get_template_part(
	'template-parts/meeting/card'
);


endwhile;


?>


</div>


</section>


<?php

get_footer();