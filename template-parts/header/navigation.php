<?php
/**
 * Navigation.
 *
 * @package Serenity
 */

?>

<nav class="main-navigation"
aria-label="<?php esc_attr_e(
'Primary navigation',
'serenity'
); ?>">


<?php

wp_nav_menu(
	array(
		'theme_location' => 'primary',
		'menu_id'        => 'primary-menu',
		'container'      => false,
		'fallback_cb'    => false,
	)
);

?>


</nav>