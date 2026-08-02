<?php
/**
 * Header template.
 *
 * @package NA_Outaouais
 */

defined( 'ABSPATH' ) || exit;

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">

<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>


<body <?php body_class(); ?>>


<a class="skip-link"
href="#primary">

<?php esc_html_e(
	'Skip to content',
	'na-outaouais'
); ?>

</a>




<?php wp_body_open(); ?>


<a class="skip-link screen-reader-text"
href="#primary">
<?php esc_html_e( 'Skip to content', 'na-outaouais' ); ?>
</a>


<header class="site-header">

<div class="container header-inner">


<div class="site-branding">

<?php

if ( has_custom_logo() ) {

	the_custom_logo();

} else {

	?>

	<a href="<?php echo esc_url( home_url('/') ); ?>"
	class="site-title">

	<?php bloginfo('name'); ?>

	</a>

	<?php

}

?>

</div>


<button class="menu-toggle"
aria-controls="primary-menu"
aria-expanded="false">

<span>
<?php esc_html_e(
'Menu',
'na-outaouais'
); ?>
</span>

</button>


<?php

get_template_part(
	'template-parts/header/navigation'
);

?>


</div>

</header>


<main id="primary" class="site-main">