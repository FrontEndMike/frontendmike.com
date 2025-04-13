<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="grid grid-cols-1 md:grid-cols-5 gap-4 mb-8">
		<?php if (has_post_thumbnail()) : ?>
		<div class="col-span-2">
			<img src="<?php echo get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>" 
					alt="<?php the_title_attribute(); ?>" 
					class="w-full drop-shadow-xl object-cover rounded-2xl">
			</div>
			<?php endif; ?>
		<div class="col-span-3">
			<h2 class="text-2xl leading-[24px] sm:text-4xl font-extrabold sm:leading-[30px] mb-2"><?php the_title(); ?></h2>
			<time datetime="<?php echo get_the_date( 'c' ); ?>" itemprop="datePublished" class="text-sm text-gray-700"><?php echo get_the_date(); ?></time>
			<?php
				$categories = get_the_terms( get_the_ID(), 'project_category' );
				if ( $categories && ! is_wp_error( $categories ) ) :
				?>
					<p class="text-sm text-gray-500 block mt-2 mb-2">
						<?php
						$category_names = wp_list_pluck( $categories, 'name' );
						echo implode( ' – ', $category_names );
						?>
					</p>
				<?php endif; ?>

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
