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
			<div class="">
				<div class="small-12 medium-6 large-4 columns panel blog-panel" data-equalizer-watch>
					<a href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title_attribute(); ?>">
					<div class="image-contain">
						<?php the_post_thumbnail('full'); ?>
						
					</div>
					<a href="<?php the_permalink() ?>" rel="bookmark" alt="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					<!-- <div class="tags">Tags : <?php the_tags('' . __( '', 'jointswp' ) . '', ', ', ''); ?></div> -->
					<!-- <?php the_excerpt(); ?> -->
				
				
				</div>
			</div>

	<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>



	<?php endif; ?>
