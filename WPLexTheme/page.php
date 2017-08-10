<?php 
/**
  * This file displays the pages for the theme 
  * Displays all of the head element and everything
  *
  * @package Wordpress - xela
  * @subpackage xela
  * @since xela 1.0
  *
**/
get_header(); ?>

<!-- Contents here -->
	
	<?php  

		if (have_posts()) {
			while (have_posts()) {
				the_post();

				echo "<h1 class='default_title'> " . get_the_title() . "</h1>";

			}
		}

	?>


<!-- Get footer -->
<?=get_footer()?>