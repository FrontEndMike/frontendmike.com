<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="flex flex-wrap md:flex-nowrap gap-4 mb-8">
		<?php if (has_post_thumbnail()) : ?>
		<div class="basis-full md:basis-1/2 lg:basis-2/5">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
					alt="<?php the_title_attribute(); ?>" 
					class="w-full h-48 object-cover rounded-t-lg">
			</div>
			<?php endif; ?>
		<div class="basis-full md:basis-1/2 lg:basis-3/5">
			<h2 class="text-4xl font-extrabold leading-tight mb-1"><?php the_title(); ?></h2>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>

			<div class="flex flex-wrap mt-4 gap-4">
				<?php $github_link = get_field('github_link'); if ($github_link) : ?>
					<a class="border border-black px-2 py-1 filter-button bg-white text-black rounded-[25px] shadow-sm hover:bg-black hover:text-white transition-colors duration-300 cursor-pointer" href="<?php echo $github_link; ?>" target="_blank" rel="noopener noreferrer">
						<i class="fab fa-github"></i> View Github
					</a>
				<?php endif; ?>
				<?php $codepen_link = get_field('codepen_link'); if ($codepen_link) : ?>
					<a class="border border-black px-2 py-1 filter-button bg-white text-black rounded-[25px] shadow-sm hover:bg-black hover:text-white transition-colors duration-300 cursor-pointer" href="<?php echo $codepen_link; ?>" target="_blank" rel="noopener noreferrer">
						<i class="fa-brands fa-codepen"></i> View Codepen
					</a>
				<?php endif; ?>
				<?php $project_link = get_field('project_link'); if ($project_link) : ?>
					<a class="border border-black px-2 py-1 filter-button bg-white text-black rounded-[25px] shadow-sm hover:bg-black hover:text-white transition-colors duration-300 cursor-pointer" href="<?php echo $project_link; ?>" target="_blank" rel="noopener noreferrer">
						View Project
					</a>
				<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>

		<?php
			wp_link_pages(
				array(
					'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'tailpress' ) . '</span>',
					'after'       => '</div>',
					'link_before' => '<span>',
					'link_after'  => '</span>',
					'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'tailpress' ) . ' </span>%',
					'separator'   => '<span class="screen-reader-text">, </span>',
				)
			);
		?>
	</div>

</article>
