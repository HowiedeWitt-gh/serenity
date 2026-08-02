<section class="meeting-details">


<h2>

<?php esc_html_e(
'Meeting Information',
'na-outaouais'
); ?>

</h2>


<ul>


<li>
<?php echo esc_html(
get_post_meta(
get_the_ID(),
'address',
true
)
); ?>
</li>


<li>
<?php echo esc_html(
get_post_meta(
get_the_ID(),
'time',
true
)
); ?>
</li>


<li>
<?php echo esc_html(
get_post_meta(
get_the_ID(),
'language',
true
)
); ?>
</li>


</ul>


</section>