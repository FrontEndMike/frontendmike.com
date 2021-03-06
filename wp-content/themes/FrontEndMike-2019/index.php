<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header(); ?>
		<div id="landing" class="hero blogs">
			<div class="overlay">
				<div class="header-contain">
					<div class="content-scroll">
					  <div class="content-scroll__container">
					  <h1 class="text-center">Recent Blogs</h1>
					  </div>
					</div>
				</div>
			</div>
		</div>
			
	<div class="content">
	
		<div class="inner-content row">
	
		    <main class="main small-12 medium-12 large-12 column" role="main">
		    
			    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive-grid' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
																								
		    </main> <!-- end #main -->


		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>