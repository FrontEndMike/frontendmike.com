<?php 

get_header(); ?>
<div id="landing" class="hero project-single">
	<div class="overlay">
		<div class="header-contain">
			<div class="content-scroll">
				<div class="content-scroll__container">
				<h1 class="text-center">Recent Projects</h1>
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
		<div class="blog-single large-12 medium-12 small-12 columns">
			<div class="">
				<div class="">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
		</div>

		<main class="main small-12 medium-12 large-12 column" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		    	<hr>

			
			
		</main> <!-- end #main -->

		<h4>Technologies Used : </h4>

			

		

		

		

	</div> <!-- end #inner-content -->

	<a class="text-center" href="/projects">All Projects</a>

</div> <!-- end #content -->

<?php get_footer(); ?>