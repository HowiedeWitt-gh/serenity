<?php
/**
 * Template Name: About NA
 *
 * @package NA_Serenity
 */

get_header();

?>

<main class="container page-standard">


<?php while(have_posts()): the_post(); ?>


<h1>
<?php the_title(); ?>
</h1>


<div class="content-area">

<?php the_content(); ?>

</div>


<?php endwhile; ?>


</main>


<?php get_footer(); ?>