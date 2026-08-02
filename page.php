<?php
/**
 * Page template.
 */

get_header();


while ( have_posts() ) :

the_post();

?>

<article <?php post_class('container'); ?>>


<header>

<h1>
<?php the_title(); ?>
</h1>

</header>


<div class="entry-content">

<?php the_content(); ?>

</div>


</article>


<?php

endwhile;


get_footer();