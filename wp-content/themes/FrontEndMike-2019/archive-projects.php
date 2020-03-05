<?php

get_header(); ?>
			
	<div class="content">
		<?php if(has_post_thumbnail()) {
		 $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
		} ?>
		<div class="hero" style="background-image:url(<?= get_template_directory_uri(); ?>/assets/images/project-highlights.jpg);">
			<div class="row">
				<div class="large-12 columns hero-text">
					<hr class="orange">
				
					
					
				</div>
			</div>
		</div>
	
		<div class="inner-content row">
		
		    <main class="main small-12 medium-12 large-12 column" role="main">
			    
		    	<header>
		    		<h1 class="page-title">Recent Projects</h1>
					<?php the_archive_description('');?>
		    	</header>

				<div class="grid">
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