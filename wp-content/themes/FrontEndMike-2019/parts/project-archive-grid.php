<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

// Adjust the amount of rows in the grid
$grid_columns = 4; ?>


	<?php if( 0 === ( $wp_query->custom_type  )  % $grid_columns ): ?>



	<?php endif; ?>


		<!--Item: -->
		
			<div class="small-12 medium-6 large-4 columns panel grid-item <?php $my_terms = get_the_terms( $post->ID, 'custom_cat' ); 
													if( $my_terms && !is_wp_error( $my_terms ) ) { 
													foreach( $my_terms as $term ) { 
															echo $term->slug;
															echo ' ';
															} 
												}?>" data-equalizer-watch>
			<a href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title_attribute(); ?>">
				<div class="project-panel">
					<?php the_post_thumbnail('full'); ?>
					<h2 class="text-center"><?php the_title(); ?></h2>
				</div>
			</a>
			</div>
			

	<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>



	<?php endif; ?>
