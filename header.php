<?php
/**
 * The header.
 *
 * @package NA_Serenity
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#005a87">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'na-serenity' ); ?></a>

<header class="site-header">
	<div class="container header-inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
			<?php endif; ?>
		</div>

		<nav class="site-navigation" aria-label="<?php esc_attr_e( 'Primary Navigation', 'na-serenity' ); ?>">
			<button class="menu-toggle" type="button" aria-controls="primary-menu" aria-expanded="false">
				<span class="screen-reader-text"><?php esc_html_e( 'Open menu', 'na-serenity' ); ?></span>
				<span class="menu-toggle-icon" aria-hidden="true">
					<span></span>
					<span></span>
					<span></span>
				</span>
			</button>

			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id'        => 'primary-menu',
					'menu_class'     => 'primary-menu',
				)
			);
			?>

			<?php get_template_part( 'template-parts/navigation/language-switcher' ); ?>
		</nav>
	</div>
</header>

<main id="primary">
