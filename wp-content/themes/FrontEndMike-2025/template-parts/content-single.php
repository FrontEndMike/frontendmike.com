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
