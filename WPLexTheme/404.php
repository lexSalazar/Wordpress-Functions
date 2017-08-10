
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

// Get header
get_header(); ?>	
	<div class="container err_page">
		<div class="row">
			<div class="col-md-12">
				<div id="primary" class="content-area">
					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">
							<div>
								<h1 class="page-title">xxx</h1>
							</div>
							<br>
							<div class="page-content_f">
								xxx
								<?php get_search_form(); ?>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
					</main><!-- .site-main -->
				</div><!-- .content-area -->
			</div>
		</div>
	</div>
	
<!-- Get footer -->
<?=get_footer()?>