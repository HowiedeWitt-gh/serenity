<?php

get_header();

?>


<main class="container search-page">


<h1>

<?php esc_html_e(
'Search Results',
'serenity'
); ?>

</h1>



<?php

if(have_posts()):


while(have_posts()):

the_post();


?>

<article class="card">


<h2>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h2>


<?php the_excerpt(); ?>


</article>


<?php

endwhile;


else:

?>

<p>

<?php esc_html_e(
'No results found.',
'serenity'
); ?>

</p>


<?php endif; ?>


</main>


<?php get_footer(); ?>