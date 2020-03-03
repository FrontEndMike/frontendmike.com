<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>
	
	<div class="content home">
		<div id="landing" class="hero">
			<div class="row">
				<div class="large-12 columns text-center">
					<?php the_field('hero_text'); ?>
				</div>
			</div>
		</div>
	

		<div class="inner-content row">
		</div> <!-- end #inner-content -->
		<section id="about">     
            <div class="row">
                <div class="large-4 columns">
                    <div class="about-panel img">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/selfie.jpg" alt="Michael at Futures Fund Showcase">
                    </div>
                </div>
                <div class="large-8 columns">
                    <div class="about-panel">
						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					    	<?php get_template_part( 'parts/loop', 'page' ); ?>
					    
					    <?php endwhile; endif; ?>


                    </div>
                </div>
            </div>
		       
		        
		    </section>


			<section id="before-blog">
			    <?php the_field('body_bg'); ?>
			</section>
			<section id="blog">
				<div class="row">
					<div class="large-12 columns">
		                <div class="body-copy-panel">
		                	<?php the_field('body_copy'); ?>
		           		</div>
		        	</div>
				</div>
			</section>
			<div id="before-hacknight">
			    <?php the_field(''); ?>
			</div>
			<div id="hack-image">
				<?php the_field(''); ?>
			</div>
			<section id="hacknight">
			    <!-- <img src="<?= get_template_directory_uri(); ?>/assets/images/hack_night.jpg" alt="BR Hacknight image"> -->
			        
			        <div class="row">
			            <div class="large-12 columns">
			                <div class="body-copy-panel">
			                	<?php the_field('hack_night_copy'); ?>
			                </div>
			   
			            </div>
			        
			    </section>
			</div>
			<section id="contact">
			    
			</section>



			<div class="recent-blog">
				<div class="row recent-feed">
					<div class="large-12 columns">
						<h2 class="text-center">Recent Blogs</h2>
						
					</div>
					
					<?php 
						$args = array( 'posts_per_page' => '3' );
						$recent_posts = new WP_Query($args);
							while( $recent_posts->have_posts() ) :  
					    		$recent_posts->the_post() ?>
							    <?php echo '<div class="small-12 medium-6 large-4 columns blog-entry">'; ?>
							        <?php if ( has_post_thumbnail() ) : ?>
							            <?php the_post_thumbnail('medium') ?>
							        <?php endif ?>  
							        <a class="title" href="<?php echo get_permalink() ?>"><?php the_title() ?></a> 
							        <!-- <p><?php the_excerpt() ?></p>  -->
							        <a href="<?php echo get_permalink(); ?>" class="button"> Read More</a> 
							    <?php echo '</div>'; ?>
							<?php endwhile; ?>
					<?php wp_reset_postdata(); # reset post data so that other queries/loops work ?> 
				</div>
			</div>


		    <!-- <?php get_sidebar(); ?> -->
		    
		

	</div> <!-- end #content -->

<?php get_footer(); ?>