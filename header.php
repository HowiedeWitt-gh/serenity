<?php
/**
 * Header.
 *
 * @package NA_Outaouais
 */

?>

<!doctype html>

<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo('charset'); ?>">

<meta name="viewport"
content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>


<?php wp_body_open(); ?>


<a class="skip-link"
href="#primary">

<?php esc_html_e(
'Skip to content',
'na-outaouais'
); ?>

</a>


<header class="site-header">


<div class="container header-inner">


<div class="site-branding">


<?php

if (
has_custom_logo()
){

the_custom_logo();

}

?>


<a href="<?php echo esc_url(home_url('/')); ?>">

<?php bloginfo('name'); ?>

</a>


</div>



<nav class="site-navigation">

<?php

wp_nav_menu(
array(

'theme_location'
=>
'primary',

'menu_class'
=>
'primary-menu',

)

);

?>

</nav>


</div>


</header>


<main id="primary">