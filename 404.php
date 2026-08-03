<?php

get_header();

?>


<main class="container error-page">


<h1>

404

</h1>


<h2>

<?php esc_html_e(
'Page Not Found',
'na-serenity'
); ?>

</h2>


<p>

<?php esc_html_e(
'The page you are looking for does not exist.',
'na-serenity'
); ?>

</p>


<a class="button"
href="<?php echo esc_url(
home_url('/')
); ?>">

<?php esc_html_e(
'Return Home',
'na-serenity'
); ?>

</a>


</main>


<?php get_footer(); ?>