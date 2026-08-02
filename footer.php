<footer class="site-footer">


<div class="container">


<?php

get_template_part(
	'template-parts/schema/organization'
);

?>

<?php

wp_nav_menu(

array(

'theme_location'
=>
'footer',

)

);

?>


<p>

<?php bloginfo('name'); ?>

</p>


</div>


</footer>