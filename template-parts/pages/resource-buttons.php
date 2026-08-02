<?php
/**
 * Resource buttons.
 */

?>


<section class="resource-buttons">


<a class="button"
href="<?php echo esc_url(
home_url('/events')
); ?>">

<?php esc_html_e(
'Find a Meeting',
'serenity'
); ?>

</a>



<a class="button"
href="<?php echo esc_url(
home_url('/contact')
); ?>">

<?php esc_html_e(
'Contact Us',
'serenity'
); ?>

</a>


</section>