<?php
/**
 * The footer.
 *
 * @package NA_Serenity
 */
?>
</main>

<footer class="site-footer">
	<div class="container">
		<?php get_template_part( 'template-parts/schema/organization' ); ?>

		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'footer',
			)
		);
		?>

		<p><?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
