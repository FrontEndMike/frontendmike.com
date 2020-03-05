<?php
/**
 * The template part for displaying a grid of posts
 *
 * For more info: http://jointswp.com/docs/grid-archive/
 */

// Adjust the amount of rows in the grid
$grid_columns = 4; ?>

<?php if( 0 === ( $wp_query->current_post  )  % $grid_columns ): ?>

    <div class="archive-grid" data-equalizer> <!--Begin Grid--> 

<?php endif; ?> 

		<!--Item: -->
		<div class="large-12 medium-12 small-12 column blog-archive-post">
			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
			<div class="large-12 columns">
				<header class="article-header">
					<a class="" href="<?php the_permalink() ?>">
					<h3 class="title"><?php the_title(); ?></h3>
					</a>				
				</header> <!-- end article header -->
			</div>

			<div class="large-12 medium-12 small-12 column">
				<section class="entry-content" itemprop="text">
					<?php the_excerpt(); ?>
					<p><?php the_date(); ?></p>	
				</section> <!-- end article section -->
			</div>
							    							
				</article> <!-- end article -->
				
			
		</div>
		<hr>

<?php if( 0 === ( $wp_query->current_post + 1 )  % $grid_columns ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>  <!--End Grid --> 

<?php endif; ?>

