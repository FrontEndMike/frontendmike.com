<?php
/*
Template Name: Sidebar template
*/

get_header(); ?>
			
	<div class="content full-width">
	
		<div class="inner-content row">
			<div class="large-4 medium-4 small-12 column feat-image">
				<?php the_post_thumbnail('full'); ?>
			</div>
	
		    <main class="main small-12 medium-8 large-8 column" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
