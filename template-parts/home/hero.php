<section class="hero">

<div class="container hero-content">


<h1>

<?php

esc_html_e(
	'Welcome to Narcotics Anonymous Outaouais',
	'na-outaouais'
);

?>

</h1>


<p>

<?php

esc_html_e(
	'Recovery, support, and fellowship for anyone seeking a new way of life.',
	'na-outaouais'
);

?>

</p>


<div class="hero-actions">

<a class="button"
href="<?php echo esc_url(
	get_permalink(
		get_page_by_path('meetings')
	)
); ?>">

<?php esc_html_e(
	'Find a Meeting',
	'na-outaouais'
); ?>

</a>


<a class="button secondary"
href="<?php echo esc_url(
	home_url('/contact')
); ?>">

<?php esc_html_e(
	'Contact Us',
	'na-outaouais'
); ?>

</a>


</div>


</div>

</section>