<?php
/**
 * Organization schema.
 *
 * @package NA_Serenity
 */

$schema = array(
	'@context' => 'https://schema.org',
	'@type'    => 'Organization',
	'name'     => get_bloginfo( 'name' ),
	'url'      => home_url( '/' ),
);

?>

<script type="application/ld+json"><?php echo wp_json_encode( $schema, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT ); ?></script>
