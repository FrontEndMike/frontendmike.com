<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
	<div id="landing" class="hero blog-single">
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
	<div class="row">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
	</div>
	
	<div class="inner-content row">
<!-- 		<div class="blog-single large-4 medium-4 small-12 columns">
			<div class="">
				<div class="">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
		</div> -->

		<main class="main small-12 medium-12 large-12 column" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		    	<hr>

		        <div class="recent-feed-blog">
		        	<div class="row">
		        		<div class="large-12 columns">
		        			<h4>RELATED POST</h4>
		        		</div>
		        	</div>
		        	<div class="row">
		        		<?php 
		        			$args = array( 'posts_per_page' => '2' );
		        			$recent_posts = new WP_Query($args);
		        				while( $recent_posts->have_posts() ) :  
		        		    		$recent_posts->the_post() ?>
		        		    		
		        				    <?php echo '<div class="small-12 large-6 medium-6 columns related">'; ?>
		        				    	<a href="<?php echo get_permalink() ?>">
		        				        <?php if ( has_post_thumbnail() ) : ?>
		        				            <?php the_post_thumbnail('medium') ?>
		        				        <?php endif ?>  
		        				        </a>
		        				        <a class="title" href="<?php echo get_permalink() ?>"><?php the_title() ?></a>   
		        				    <?php echo '</div>'; ?>
		        					
		        				<?php endwhile; ?>
		        		<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
		        	</div>

		        </div>
			
		</main> <!-- end #main -->

			

		

		

		

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>