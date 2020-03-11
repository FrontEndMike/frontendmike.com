<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
			
	<div class="content ">
		<div class="blog-hero">
			<div class="row">
				<div class="">
					<h3><?php the_title(); ?></h3>
				</div>
			</div>
		</div>
	
		<div class="inner-content full-width row">
	
		    <main class="main small-12 medium-12 large-12 column" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
