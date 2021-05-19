<?php
/*
Template Name: Full Width (No Sidebar)
*/

get_header(); ?>
<?php if(has_post_thumbnail()) {
 $feat_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), "full", true);
} ?>

<div id="landing" class="hero blogs" style="margin-bottom: 4rem; background-image:url(<?php echo (($feat_image[0]))?>);" data-width="<?php echo (($feat_image[1]))?>" date-height="<?php echo (($feat_image[2]))?>">
	<div class="overlay">
		<div class="header-contain">
			<div class="content-scroll">
			  <div class="content-scroll__container">
			  <h1 class="text-center"><?php the_title(); ?></h1>
			  </div>
			</div>
		</div>
	</div>
</div>
			
	<div class="content ">
	
		<div class="inner-content full-width row">
	
		    <main class="main small-12 medium-12 large-12 column" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
