<?php
/**
 * Announcement card.
 *
 * @package NA_Outaouais
 */

?>

<article <?php post_class('announcement-card'); ?>>


<h3>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h3>


<div class="announcement-content">

<?php the_excerpt(); ?>

</div>


</article>