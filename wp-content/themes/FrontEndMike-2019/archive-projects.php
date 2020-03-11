<?php

get_header(); ?>
			
	<div class="content">
		<div class="blog-hero">
			<div class="row">
				<div class="">
					<h3>Recent Projects</h3>
				</div>
			</div>
		</div>
	
		<div class="inner-content row">
		
		    <main class="main small-12 medium-12 large-12 column" role="main">
		    	<p class="" style="margin-top: 1rem;">This page is currently under construction. These are all of my recent projects in which I did 100% of the development on. They were all created using WordPress and the Foundation framework</p>

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
		
			</main> <!-- end #main -->
	
			
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>