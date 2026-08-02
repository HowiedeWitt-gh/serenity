<article class="meeting-card">


<h2>

<a href="<?php the_permalink(); ?>">

<?php the_title(); ?>

</a>

</h2>


<p>

<?php

echo esc_html(
	get_post_meta(
		get_the_ID(),
		'address',
		true
	)
);

?>

</p>


<p>

<?php

echo esc_html(
	get_post_meta(
		get_the_ID(),
		'time',
		true
	)
);

?>

</p>


</article>