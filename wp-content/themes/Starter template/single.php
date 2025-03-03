<?php 
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>
			
<div class="content">

	<div class="inner-content row">
		<div class="blog-single">
			<div class="row">
				<div class="large-12">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
		</div>

		<main class="main small-12 medium-8 large-8 column" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>
			


			<hr>

		    <div class="row recent-feed-blog">
		    	<div class="large-12 columns">
		    		<h4>RELATED POST</h4>
		    	</div>
		    	<?php 
		    		$args = array( 'posts_per_page' => '2' );
		    		$recent_posts = new WP_Query($args);
		    			while( $recent_posts->have_posts() ) :  
		    	    		$recent_posts->the_post() ?>
		    	    		<a href="<?php echo get_permalink() ?>">
		    			    <?php echo '<div class="small-6 large-6 columns">'; ?>
		    			        <?php if ( has_post_thumbnail() ) : ?>
		    			            <?php the_post_thumbnail('medium') ?>
		    			        <?php endif ?>  
		    			        <a href="<?php echo get_permalink() ?>"><?php the_title() ?></a>   
		    			    <?php echo '</div>'; ?>
		    				</a>
		    			<?php endwhile; ?>
		    	<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 

		    </div>

		</main> <!-- end #main -->

		<?php get_sidebar(); ?>

		

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>