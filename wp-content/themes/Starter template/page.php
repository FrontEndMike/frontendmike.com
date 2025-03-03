<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content">
		<div class="hero">
			<div class="row">
				<div class="large-12 columns">
					<h2><?php wp_title( '', true ); ?></h2>
				</div>
			</div>
		</div>
		<div class="inner-content row">
	
		    <main class="main small-12 large-8 medium-8 column" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>	
			    					
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar(); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>