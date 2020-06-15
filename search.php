<?php get_header(); ?>
	<div class="container">

		<h1>Pesquisa: <?php  echo get_search_query(true)  ?></h1>

	    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
	    	<div class="mb-5 mt-5">
	    		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	    	</div>
	       
	    <?php endwhile; ?>
	    <?php else: ?>

	        <p><?php _e('Nenhum resultado encontrado.'); ?></p>

	    <?php endif; ?>
	    
    </div>

<?php get_footer(); ?>
