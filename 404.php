<?php

get_header();

?>

<section class="container">


<h1>
<?php esc_html_e(
'Page not found',
'na-outaouais'
); ?>
</h1>


<p>

<?php esc_html_e(
'Sorry, the page you are looking for does not exist.',
'na-outaouais'
); ?>

</p>


<?php get_search_form(); ?>


</section>


<?php

get_footer();