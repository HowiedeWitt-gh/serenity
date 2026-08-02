<?php
/**
 * Homepage template.
 *
 * @package NA_Outaouais
 */

get_header();

?>

<div class="homepage">


<?php

get_template_part(
	'template-parts/home/hero'
);


get_template_part(
	'template-parts/home/quick-links'
);


get_template_part(
	'template-parts/home/welcome'
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
	'template-parts/home/contact-cta'
);


?>


</div>


<?php

get_footer();