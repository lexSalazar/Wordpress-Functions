<?php 
/**
  *
  * @package Wordpress - xela
  * @subpackage xela
  * @since xela 1.0
  *
**/

// Get header
get_header(); ?>

<!-- Contents here -->
<div class="container" id="xela_searchpage">
	<div class="row">
		<div class="col-lg-12">
			<h3>
				<?php
					if (strlen( trim(get_search_query()) ) != 0) :
						echo $wp_query->found_posts; ?> <?php _e("<!--:en-->Résultats de la recherche de <!--:--><!--:fr-->Résultats de la recherche de<!--:-->"); ?>: "<?php the_search_query(); ?>"
					<?php endif; ?>
			</h3>
			<?php 
			$s=get_search_query();
			$args = array(
			                's' =>$s
			            );
			    // The Query
			$the_query = new WP_Query( $args );
			if ( $the_query->have_posts() && strlen( trim(get_search_query()) ) != 0 ) {
			        _e("<!--:en--><br><h5 class=''>Résultats de la recherche de: ".get_query_var('s')."</h5><!--:--><!--:fr--><br><h5>".get_query_var('s')."</h5><!--:-->");
			        $ctr = 1;
			        while ( $the_query->have_posts() ) {
			           $the_query->the_post();
			                 ?>
			                 <hr>
			                      <h5>
			                      	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <br>
			                      	<a href="<?php the_permalink(); ?>"><?php strtolower(the_permalink()); ?></a>
			                      </h5> 
			                      <hr>
			                 <?php
			        }
			        ++$ctr;
			    }else{
			?>
			        <h5 class="">Rien n'a été trouvé</h5>
			        <div class="alert alert-warning">
			          <p>Désolé, mais rien ne correspond à vos critères de recherche . Veuillez réessayer avec d'autres mots-clés.</p>
			        </div>
			<?php } ?>
		</div>
	</div>
</div>
<!-- Get footer -->
<?=get_footer()?>