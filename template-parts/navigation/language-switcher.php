<?php
/**
 * Language switcher.
 */

if (
	function_exists('pll_the_languages')
):

?>

<div class="language-switcher">


<?php

pll_the_languages(

array(

'show_names'
=> 1,

'show_flags'
=> 0,

)

);

?>


</div>


<?php endif; ?>