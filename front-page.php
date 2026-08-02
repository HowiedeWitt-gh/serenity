<?php
/**
 * Homepage template.
 *
 * @package Serenity
 */

get_header();

?>

<div class="homepage">


<?php

get_template_part(
	'template-parts/home/hero'
);


get_template_part(
	'template-parts/home/newcomer-banner'
);


get_template_part(
	'template-parts/home/meetings-preview'
);


get_template_part(
	'template-parts/home/announcements'
);


get_template_part(
	'template-parts/home/literature-preview'
);


get_template_part(
	'template-parts/home/service-preview'
);


get_template_part(
	'template-parts/home/contact-cta'
);

?>


</div>


<?php

get_footer();