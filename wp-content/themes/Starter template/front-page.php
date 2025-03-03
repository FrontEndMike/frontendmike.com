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
					<p>Subtext</p>
					<h2>Call to Action </h2>
					<a href="" class="button">Contact Us</a>
				</div>
			</div>
		</div>
	
		<div class="inner-content row">
	
		    <main class="main small-12 large-12 medium-12 column" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>	
			    					
			    					
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->

			<div class="info">
				<div class="row">
					<div class="large-4 columns">
						<figure>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/placeholder-circle.png" alt="">
							<figcaption>Placeholder info</figcaption>
						</figure> 
					</div>
					<div class="large-4 columns">
						<figure>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/placeholder-circle.png" alt="">
							<figcaption>Placeholder info</figcaption>
						</figure> 
					</div>
					<div class="large-4 columns">
						<figure>
							<img src="<?= get_template_directory_uri(); ?>/assets/images/placeholder-circle.png" alt="">
							<figcaption>Placeholder info</figcaption>
						</figure> 
					</div>
				</div>
			</div>

			<div class="contact-callout">
				<div class="row">
					<div class="large-12 columns">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
				</div>
			</div>

			<div class="recent-blog">
				<div class="row recent-feed">
					<div class="large-12 columns">
						<h2>Placeholder Title</h2>
						<p>Placeholder sub</p>	
					</div>
					
					<?php 
						$args = array( 'posts_per_page' => '3' );
						$recent_posts = new WP_Query($args);
							while( $recent_posts->have_posts() ) :  
					    		$recent_posts->the_post() ?>
							    <?php echo '<div class="small-12 medium-6 large-4 columns">'; ?>
							        <?php if ( has_post_thumbnail() ) : ?>
							            <?php the_post_thumbnail('medium') ?>
							        <?php endif ?>  
							        <a class="title" href="<?php echo get_permalink() ?>"><?php the_title() ?></a> 
							        <p><?php the_excerpt() ?></p> 
							        <a href="<?php echo get_permalink(); ?>" class="button"> Read More...</a> 
							    <?php echo '</div>'; ?>
							<?php endwhile; ?>
					<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
				</div>
			</div>


		    <!-- <?php get_sidebar(); ?> -->
		    
		

	</div> <!-- end #content -->

<?php get_footer(); ?>