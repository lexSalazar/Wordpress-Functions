<?php 
/**
  * This file displays the header for the theme 
  * Displays all of the head element and everything
  *
  *
  * @package Wordpress - xela
  * @subpackage xela
  * @since xela 1.0
  *
**/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
	<![endif]-->
	<?=wp_head()?>
</head>
<body <?php body_class(); ?> > 

  	<!-- Header -->
	<header class="header-default">

	</header>

	<div class="default_sitecontent">