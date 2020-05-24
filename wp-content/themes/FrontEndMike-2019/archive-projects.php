<?php

get_header(); ?>
	<div id="landing" class="hero projects">
		<div class="overlay">
			<div class="header-contain">
				<div class="content-scroll">
					<div class="content-scroll__container">
					<h1 class="text-center">Recent Projects</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
			
	<div class="content">
	
		<div class="inner-content row">

			<div class="project-grid">
				<div class="col">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/project', 'archive-grid' ); ?>
						
					<?php endwhile; ?>	

						<?php joints_page_navi(); ?>
						
					<?php else : ?>
												
						<?php get_template_part( 'parts/content', 'missing' ); ?>
							
					<?php endif; ?>
				</div>
			</div>
		
		</div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>