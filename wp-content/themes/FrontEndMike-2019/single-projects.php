<?php 

get_header(); ?>
<div id="landing" class="hero project-single">
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
			
<div class="content">
	<!-- <div class="row">
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
	</div>
	 -->
	<div class="inner-content row">
		<div class="blog-single large-12 medium-12 small-12 columns">
			<div class="">
				<div class="project-header">
					<?php the_post_thumbnail('full'); ?>
				</div>
			</div>
		</div>
</div>

		<div class="button-contain">
			<div class="button-contain-project">
				
				<?php $github_link = get_field('github_link'); if ($github_link) : ?>
					<a class="btn" href="<?php the_field('github_link'); ?>" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-github"></i> Github
					</a>
				<?php endif; ?>
				
				
				
				
					<a class="btn" href="<?php the_field('project_link'); ?>" target="_blank" rel="noopener noreferrer">
						View Here
					</a>
				
			</div>
		</div>
		<div class="row">
			<main class="main small-12 medium-12 large-12 column" role="main">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<?php get_template_part( 'parts/loop', 'single' ); ?>
				
			<?php endwhile; else : ?>
		
				<?php get_template_part( 'parts/content', 'missing' ); ?>

			<?php endif; ?>

				<hr>

			
				
			</main> <!-- end #main -->
		</div>


			

		

		

	<a class="text-center btn" href="/projects">All Projects</a>

</div> <!-- end #content -->

<?php get_footer(); ?>