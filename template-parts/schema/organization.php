<?php
/**
 * Organization schema.
 *
 * @package NA_Outaouais
 */

?>

<script type="application/ld+json">

{
 "@context":"https://schema.org",

 "@type":"Organization",

 "name":"<?php echo esc_js(
 get_bloginfo('name')
 ); ?>",

 "url":"<?php echo esc_url(
 home_url('/')
 ); ?>"

}

</script>